<?php

include_once('../models/Produit.php');
include_once('../database/config.php');

class ProduitController extends Connexion {
    function __construct() {
        parent::__construct();
    }

    function liste(){
        $query = "select * from produit";
        $produits=$this->pdo->prepare($query);
        $produits->execute(); 
        return $produits->fetchAll();
        
        }

        function getProduitById($id){
            $query="SELECT * FROM produit WHERE id = ? ";
            $res = $this->pdo->prepare($query);
            $res->execute(array($id));
            $detail= $res->fetch();  //on utilisse fetch ssi Ces deux conditions sont remplies : la requete est SELECT (ni delete ni welou) et ssi la requete va récupere des données de la base de données pour quelle puisse fait son travail . Donc fetch son role est récupérer les donnes de la bd et mettre les données de la résultat dans un tableau associatif
            return $detail;

}

function insert(Produit $p){

    $query="insert into produit(nom,description,prix,createur,image,stock,date_creation)values(?, ?, ?, ?, ?, ?,?)";
    $res=$this->pdo->prepare($query);
    
    $aryy =array($p->getNom(),$p->getDescription(),$p->getPrix(),$p->getCreateur(),$p->getImage(),$p->getStock(),$p->getdate()) ; //lezmaaa l get 
    //var_dump($aryy);
    return $res->execute($aryy);
    
    }

    function delete($idProduit) {
        $query = "delete from produit where id=?";
        $res=$this->pdo->prepare($query);
        return $res->execute(array($idProduit));
        }


        function modifier_produit(Produit $p, $id) //tant que la requete fiha where id yelzem l(id yet7at fel paramétre) car l id mch mawjoud fel classe produit donc yelzem t7ottou wa7douuuu
        {
            $sql = "UPDATE produit SET nom=?, description=?, prix=?, createur=?, image=?, stock=? WHERE id=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(array($p->getNom(), $p->getDescription(), $p->getPrix(), $p->getCreateur(), $p->getImage(), $p->getStock(), $id));
        }
        
        function getPrixById($id) {
        $query="SELECT prix FROM produit WHERE id =?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($id));
        $produit= $res->fetch();  //on utilisse fetch ssi Ces deux conditions sont remplies : la requete est SELECT (ni delete ni welou) et ssi la requete va récupere des données de la base de données pour quelle puisse fait son travail . Donc fetch son role est récupérer les donnes de la bd et mettre les données de la résultat dans un tableau associatif
        return $produit;
        }
}
           


?>