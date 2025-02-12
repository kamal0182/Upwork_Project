<?php 
namespace app\Core;
class OffresField
{
    public  function  Field($offre){
        return sprintf(
            '<div class="col-md-4 mb-4">
                <div class="card">
                    <img src="" class="card-img-top" alt="Job Image">
                    <div class="card-body">
                        <h5 class="card-title">%s</h5>
                        <p class="card-text">%s</p>
                        <p class="card-text"><strong>Budget:</strong> $%s </p>
                        <p class="card-text"><strong>Durre : </strong>%s day</p>
                        <a href="#" class="btn btn-primary">Apply</a>
                       <form >
                       <input value "%s">
                       <button type="submit" class="btn btn-primary">delete</button>
                       </form>
                        
                    </div>
                </div>
            </div>
        ',
        $offre->getTitle(),
        $offre->getDescription(),
        $offre->getBudjet(),
        $offre->getDuree(),
        $offre->getId());

    }
}