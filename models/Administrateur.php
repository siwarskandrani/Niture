<?php 

class Administrateur {
private $nom,$email,$mdp; 
function __construct($nom="",$email="",$mdp="") {
	
 
    $this->nom=$nom;
    $this->email=$email;
    $this->mdp=$mdp;
}



public function getNom(){
	return $this->nom;
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



public function setemail($email){
    $this->email = $email	;
}

public function setmdp($mdp){
    $this->mdp = $mdp	;
}


}