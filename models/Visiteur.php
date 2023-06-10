<?php 

class Visiteur {
private $nom,$email,$prenom,$mdp; 
function __construct($nom="",$email="",$prenom="",$mdp="") {
	
 
    $this->nom=$nom;
    $this->email=$email;
    $this->prenom=$prenom;
    $this->mdp=$mdp;
}



public function getNom(){
	return $this->nom;
}

public function getPrenom(){
	return $this->prenom;
}

public function getemail(){
	return $this->email;
}

public function getmdp(){
	return $this->mdp;
}



public function setnom($nom){
        $this->nom = $nom;
    }

public function setPrenom($prenom){
        $this->prenom = $prenom;
    }

 public function setemail($email){
        $this->email = $email	;
    }
	
    public function setmdp($mdp){
        $this->mdp = $mdp	;
    }
}?>


