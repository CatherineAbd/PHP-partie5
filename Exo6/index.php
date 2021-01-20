<?php 
  include "..\\top_p5.php";
  echo "Exercice 6";
  ?>
  <p class="topic">Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.<br>
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>
      <p>
      <?php
        $departements = ["02" => "Aisne", "59" => "Nord", "60" => "Oise", "62" => "Pas de Calais", "80" => "Somme"];
        echo "dépt 59 : " . $departements["59"];
      ?>
      </p>
    
<?php include "..\..\bottom_html.php"; ?>