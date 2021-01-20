<?php 
  include "..\\top_p5.php";
  echo "Exercice 5";
  ?>
  <p class="topic">Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.<br>
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>
      <p>
      <?php
        $departements = ["02" => "Aisne", "59" => "Nord", "60" => "Oise", "62" => "Pas de Calais", "80" => "Somme"];
        ?>
      </p>
    
<?php include "..\..\bottom_html.php"; ?>