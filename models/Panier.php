<?php 

class Panier {
private $visiteur,$total,$etat,$DateCreation; 
function __construct($visiteur="",$total="",$DateCreation="") {
	
 
    $this->visiteur=$visiteur;
    $this->total=$total;
    // $this->etat=$etat;
    $this->DateCreation=$DateCreation;
}



public function getVisiteur(){
	return $this->visiteur;
}

public function getEtat(){
	return $this->etat;
}

public function getTotal(){
	return $this->total;
}

public function getDateCreation(){
	return $this->DateCreation;
}



public function setVisiteur($visiteur){
        $this->visiteur = $visiteur;
    }

public function setEtat($etat){
        $this->etat = $etat;
    }

 public function setTotal($total){
        $this->total = $total	;
    }
	
    public function setDateCreation($DateCreation){
        $this->DateCreation = $DateCreation	;
    }
}?>


