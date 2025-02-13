<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <!-- Sidebar -->
    <!-- <div class="fixed inset-y-0 left-0 w-64 bg-blue-600 text-white transition-transform duration-300 transform">
        <div class="p-6">
            <h1 class="text-2xl font-bold mb-8">Dashboard Admin</h1>
            <nav>
                <a href="#" class="flex items-center p-3 mb-3 rounded hover:bg-blue-700 bg-blue-700">
                    <i class="fas fa-users mr-3"></i>
                    Utilisateurs
                </a>
                <a href="offres.php" class="flex items-center p-3 mb-3 rounded hover:bg-blue-700">
                    <i class="fas fa-chart-bar mr-3"></i>
                    offres
                </a>
                <a href="#" class="flex items-center p-3 mb-3 rounded hover:bg-blue-700">
                    <i class="fas fa-cog mr-3"></i>
                    Paramètres
                </a>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="ml-64 p-8">
        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-blue-500">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-blue-100 mr-4">
                        <i class="fas fa-users text-blue-500 text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-gray-500 text-sm">Total Utilisateurs</h3>
                        <p class="text-2xl font-bold" id="total-users">0</p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-green-500">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-green-100 mr-4">
                        <i class="fas fa-star text-green-500 text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-gray-500 text-sm">Rating Moyen</h3>
                        <p class="text-2xl font-bold" id="avg-rating">0</p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-purple-500">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-purple-100 mr-4">
                        <i class="fas fa-user-plus text-purple-500 text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-gray-500 text-sm">Nouveaux Utilisateurs</h3>
                        <p class="text-2xl font-bold" id="new-users">0</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Search & Filters -->
        <div class="bg-white rounded-xl shadow-md p-6 mb-8">
            <div class="flex flex-wrap gap-4">
                <div class="flex-1">
                    <div class="relative">
                        <input type="text" id="search" placeholder="Rechercher un utilisateur..." 
                               class="w-full pl-10 pr-4 py-2 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200">
                        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                    </div>
                </div>
                <div class="flex gap-4">
                    <select id="filter_rating" class="rounded-lg border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200">
                        <option value="">Rating</option>
                        <option value="5">5 étoiles</option>
                        <option value="4">4 étoiles</option>
                        <option value="3">3 étoiles</option>
                    </select>
                    <button id="apply_filters" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition-colors">
                        <i class="fas fa-filter mr-2"></i>Filtrer
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Users Table -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <div class="p-6 border-b border-gray-200">
                <h2 class="text-xl font-semibold">Liste des Utilisateurs</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <span class="flex items-center cursor-pointer">
                                    ID <i class="fas fa-sort ml-1"></i>
                                </span>
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Utilisateur</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rating</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="users-table-body" class="bg-white divide-y divide-gray-200">
                    </tbody>
                </table>
            </div>
            <!-- Pagination -->
            <div class="bg-gray-50 px-6 py-4 flex items-center justify-between">
                <div class="flex items-center">
                    <span class="text-sm text-gray-700">Affichage de 1-10 sur 50 résultats</span>
                </div>
                <div class="flex gap-2">
                    <button class="px-3 py-1 rounded border border-gray-300 hover:bg-gray-100">Précédent</button>
                    <button class="px-3 py-1 rounded bg-blue-500 text-white">1</button>
                    <button class="px-3 py-1 rounded border border-gray-300 hover:bg-gray-100">2</button>
                    <button class="px-3 py-1 rounded border border-gray-300 hover:bg-gray-100">3</button>
                    <button class="px-3 py-1 rounded border border-gray-300 hover:bg-gray-100">Suivant</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                     Ajoute 
                    </button>
                </div>
            </div>
        </div>
    </div>
   

    <div class="container my-5">
        <h2 class="text-center mb-4">Available Job Offers</h2>
        <div class="row">
        <?php
use app\Controller\ClientController;
use app\Controller\OffreController;
use app\Core\OffresField;
use app\Models\OffreModel;
        $client = new ClientController ;
        $field = new OffresField;
        foreach($client->ShowAllMyOffres() as $offre ){
              echo   $field->Field($offre);
        }; 
        if(isset($_GET['submit'])){
            $offre= new OffreController;
            $offre->deleteOffre($_GET['id']);
        } ?>
        <!-- Pagination -->
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <span class="page-link">Previous</span>
                </li>
                <li class="page-item active">
                    <span class="page-link">1</span>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>

    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->


    <!-- button -->
    
    
    <!-- modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method="post">      
      <div class="modal-body">
        <div class="form-group">
        <label for="" >title</label>
        <input type="text" name="titre" value="<?php  ?>">
        </div>
        <div>
        <?php
            if(isset($model->errors['titre'])){
                echo ''.$model->errors['titre'][0] ;
            }
            ?>
        </div>
        <div class="form-group">
        <label for="" >description</label>
        <input type="text" name="description" value="">
        </div>
        <div>
        <?php
            if(isset($model->errors['description'])){
                echo ''.$model->errors['description'][0] ;
            }
            ?>
        </div>
        <div class="form-group">
        <label for="" >bdj</label>
        <input type="number" name="budget" value="<?php  ?>">
        </div>
    
        <div class="text-danger"> 
            <?php
            if(isset($model->errors['budget'])){
                echo ''.$model->errors['budget'][0] ;
            }
            ?>
         </div>
        <div class="form-group">
        <label for="" >durre</label>
        <input type="number" name="duration" value="<?php ?>">
        <div>
        <?php
            if(isset($model->errors['duration'])){
                echo ''.$model->errors['duration'][0] ;
            }
            ?>
        </div>
        </div
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
    </div>
  </div>
</div>
<script>
    function showUpdateForm($id,$title,$description,$budget,$durre){

    }
</script>
   
</body>
</html>