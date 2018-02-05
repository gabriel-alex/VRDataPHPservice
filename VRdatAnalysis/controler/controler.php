<?php

require 'model/model.php';

function index(){
  require 'view/index_view.php';
}

function scatter(){
  $usersLst = getUsers();
  createJSONfile('all');
  require 'view/scatter_vis_view.php';
}

function scatterByUser($userid){
  $usersLst = getUsers();
  createJSONfile($userid);
  require 'view/scatter_vis_view.php';
}

function table(){
  $usersLst = getUsers();
  createJSONfile('all');
  require 'view/table_vis_view.php';
}

function tableByUser($userid){
  $usersLst = getUsers('all');
  createJSONfile($userid);
  require 'view/table_vis_view.php';
}
/*
function table(){
  require 'view/table_vis_view.php';
}

// Affiche la liste de tous les billets du blog
function accueil() {
    $billets = getBillets();
    require 'Vue/vueAccueil.php';
}

// Affiche les détails sur un billet
function billet($idBillet) {
    $billet = getBillet($idBillet);
    $commentaires = getCommentaires($idBillet);
    require 'Vue/vueBillet.php';
}
*/
// Affiche une erreur
function erreur($msgErreur) {
    require 'view/index_view.php';
}
