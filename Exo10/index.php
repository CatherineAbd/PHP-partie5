<?php 
  include "..\\top_p5.php";
  echo "Exercice 10";
  ?>
  <p class="topic">Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.  
Cela pourra être, par exemple, de la forme : Le département + nom du département + a le numéro + numéro du département
<br>
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>
      <p>
      <?php
        $departements = ["02" => "Aisne", "59" => "Nord", "60" => "Oise", "62" => "Pas de Calais", "80" => "Somme"];
        foreach ($departements as $keyDpt => $valDpt) {
          echo "Le département $valDpt a le numéro $keyDpt <br>";
        }
      ?>
      </p>

<?php include "..\..\bottom_html.php"; ?>