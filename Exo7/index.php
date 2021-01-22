<?php 
  include "..\\top_p5.php";
  echo "Exercice 7";
  ?>
  <p class="topic">Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.<br>
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>
      <p>
      <?php
        $departements = ["02" => "Aisne", "59" => "Nord", "60" => "Oise", "62" => "Pas de Calais", "80" => "Somme"];
        // $departements["51"] = "Marne";
        // OU
        $departements = ["51" => "Marne"];
        echo "dept 51 : " . $departements["51"];
      ?>
      </p>

<?php include "..\..\bottom_html.php"; ?>