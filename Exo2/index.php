<?php 
  include "..\\top_p5.php";
  echo "Exercice 2";
  ?>
  <p class="topic">Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.<br>
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>
      <p>
      <?php
        $months = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre");
        echo "valeur de la 3ème ligne : $months[2]";
      ?>
      </p>

<?php include "..\..\bottom_html.php"; ?>