<?php 

class Commande {
    private $produit_id, $quantite, $panier, $total, $dateCreation;

    public function __construct($produit_id = "", $quantite = "", $panier = "", $total = "", $dateCreation = "") {
        $this->produit_id = $produit_id;
        $this->quantite = $quantite;
        $this->panier = $panier;
        $this->total = $total;
        $this->dateCreation = $dateCreation;
    }

    public function getProduit() {
        return $this->produit_id;
    }

    public function getPanier() {
        return $this->panier;
    }

    public function getQuantite() {
        return $this->quantite;
    }

    public function getTotal() {
        return $this->total;
    }

    public function getDateCreation() {
        return $this->dateCreation;
    }

    public function setProduit($produit_id) {
        $this->produit_id = $produit_id;
    }

    public function setPanier($panier) {
        $this->panier = $panier;
    }

    public function setQuantite($quantite) {
        $this->quantite = $quantite;
    }

    public function setTotal($total) {
        $this->total = $total;
    }

    public function setDateCreation($dateCreation) {
        $this->dateCreation = $dateCreation;
    }
}
?>


