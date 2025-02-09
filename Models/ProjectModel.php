<?php 
namespace app\Models;
class ProjectModel
{
    private int $id;
    private string $title;
    private string $description;
    private string $photo;
    private int $duration;
    private float $budget;
    private string $status;
    private UserModel $freelancer;
    private UserModel $client;
    private TechnologieModel $technologie;
    private array $competences;
    private array $commentaires;
    private array $avis;

}