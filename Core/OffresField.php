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
                        <p class="card-text"><strong>Budget :</strong> $%s </p>
                        <p class="card-text"><strong>Durre : </strong>%s day</p>
                        <a href="#" class="btn btn-primary">Apply</a>
                        <button onclick="showUpdateForm(%n,%s,%s,%s,%s)" ></button>
                       <form>
                       <input name="id" value="%s" type="hidden">
                       <button  type="submit" name="submit" class=" mt-2 btn btn-primary">Delete</button>
                       </form>
                    </div>
                </div>
            </div>
        ',
        $offre->getTitle(),
        $offre->getDescription(),
        $offre->getBudjet(),
        $offre->getDuree(),
        $offre->getId(),$offre->getTitle(), $offre->getDescription(),$offre->getBudjet(),
        $offre->getId());
    }
}