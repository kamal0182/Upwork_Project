<?php 
namespace app\Models;
class FreelancerModel
{
    private int $id ; 
    private string $firstname;
    private string $lastname;
    private string $email;
    private float $rating;
    private array $projects;
    private RoleModel $role ;
    private array $competences;
    private string  $portfolio;
    private string $photo;
    private string $start_day;
    private string $end_date;
    public function __construct($role = "Freelancer" , $start_date , $end_date  , array $competences)
    {
        $this->competences = $competences;
        $this->role = $role;
        $this->start_day = $start_date;
        $this->end_date = $end_date;
    }
   
}