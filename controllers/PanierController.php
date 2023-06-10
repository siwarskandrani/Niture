<?php
include_once('../models/Panier.php') ; 
include_once('../database/config.php');
class PanierController extends Connexion{
function __construct() {
parent::__construct();
}

function insert(Panier $P){
$query="insert into panier (visiteur,total,date_creation)values(?, ?, ?)";
$res=$this->pdo->prepare($query);
$aryy = array($P->getVisiteur(), $P->getTotal(), $P->getDateCreation());
//var_dump($aryy);
return $res->execute($aryy);
}

function getLastInsertedId() {
    return $this->pdo->lastInsertId();
}

function liste(){
    $query = "select v.nom,v.prenom, p.total,p.etat, p.date_creation, p.id from visiteur v, panier p WHERE v.id=p.visiteur";
    $visiteurs=$this->pdo->prepare($query);
    $visiteurs->execute(); 
    return $visiteurs->fetchAll();
    
    }
    public function ChangerEtatPanier($id, $etat) { //mayhemch honi kifech tsmihom les attributs ema lzm k tnedi l fonction mbaad fel page t7ot esemi les attributs mrgline (nadetha fel liste_panier.php)
        $sql = "UPDATE panier SET etat=? WHERE id=?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$etat, $id]);
    }
}
?>