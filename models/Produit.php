<?php
// this fait reference ll function elli fou9 elli enti fiha mch elli enti fiha actuellement
Class Produit {
private $nom, $description ,$prix,$createur,$image,$stock,$date_creation;  // ce sont les paramétres de la classe produit
function __construct($nom="",$description="",$prix="",$createur="",$image="",$stock="",$date_creation="") { //creation d'un objet produit (s'est un constructeur de l classe produit)
	

     //Affectation de la valeur du paramètre $nom  de la classe à la variable membre $nom de l'objet
    $this->nom=$nom;
    $this->description=$description;
    $this->prix=$prix;
    $this->createur=$createur;
    $this->image=$image;
    $this->stock=$stock;
    $this->date_creation=$date_creation;



    
}


public function getNom(){
return $this->nom; // this fait reference a l'objet produit fabriqué en haut et nom c'est le variable de cette derniére 

}

public function getDescription(){
    return $this->description;

}

public function getPrix(){
    return $this->prix;

}
public function getCreateur(){
    return $this->createur;

}

public function getImage(){
    return $this->image;

}

public function getStock(){
    return $this->stock;

}

public function getdate(){
    return $this->date_creation;

}

public function setnom($nom){
    $this->nom = $nom; //Affectation de la valeur du paramètre $nom à la variable membre $nom de l'objet (l nom loula mtaa l'objet et la deuxieme hiya l parametre mtaa setnom)
}

public function setDescription($description){
    $this->description= $description;
}

public function setprix($prix){
    $this->prix = $prix;
}

public function setcreateur($createur){
    $this->createur = $createur;
}

public function setimage($image){
    $this->image = $image;
}
public function setstock($stock){
    $this->stock = $stock;
}

}




?>