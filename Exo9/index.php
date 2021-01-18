<?php 
  include "..\..\\top_html.php";
  include "..\\top_p5.php";
  echo "Exercice 9";
  ?>
  <p class="topic">Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.<br>
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>
      <p>
      <?php
        $departements = ["02" => "Aisne", "59" => "Nord", "60" => "Oise", "62" => "Pas de Calais", "80" => "Somme"];
        foreach ($departements as $valDpt) {
          echo "$valDpt <br>";
        }
      ?>
      </p>
    
  </body>
</html>

<?php include "..\..\bottom_html.php";