<?php
declare(strict_types=1);
    // userController.php
    
    require_once '../core/Database.php';
    require_once '../Models/user.php';
    
    $database = Database::getInstance();
    $db = $database->getConnection();
    $userModel = new user($db);
    
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['filter_bid']) || isset($_GET['filter_rating'])) {
            $bid = $_GET['filter_bid'] ?? '';
            $rating = $_GET['filter_rating'] ?? '';
            $users = $userModel->getFilteredusers($bid, $rating);
        } else {
            $users = $userModel->getusers();
        }
         // katgool lel HTTP responsz bili lforma ta3ha howa json hadxi kay7essen lperformence ta3 API client
        header('Content-Type: application/json');
        // katbadal les données PHP (array, objects) l json
        echo json_encode($users);
        exit();
    }
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_user'])) {
        $userId = $_POST['delete_user'];
        $userModel->deleteuser($userId);
        echo json_encode(['message' => 'user deleted successfully']);
        exit();
    }
    