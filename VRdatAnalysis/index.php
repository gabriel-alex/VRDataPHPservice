<?php

require 'controler/controler.php';

try {
  if(isset($_GET['visual']) ){ // if there is something concerning visualisation or action in the URL
    switch ($_GET['visual']) {
      case 'scatter':
      scatter();
      break;
      case 'table':
      table();
      break;

      default:
      throw new Exception("Unknown visualization method");
      break;
    }

    
  }else if(isset($_POST['visual'])){
    switch ($_POST['visual']) {
      case 'scatter':
      if(strcmp($_POST['user'],"all") !=0){
        scatterByUser($_POST['user']);
      }else {
        scatter();
      }
      break;
      case 'table':
      if(strcmp($_POST['user'],"all") !=0){
        tableByUser($_POST['user']);
      }else {
        table();
      }

      break;

      default:
      throw new Exception("Issue with the information transmitted to the visualization method");
      break;
    }

  }else { // if the url do not specify a variable or do it wrong: --> main page
    index();
  }

}
catch (Exception $e) {
  erreur($e->getMessage());
}
