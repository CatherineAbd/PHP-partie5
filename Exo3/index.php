<?php 
  include "..\..\\top_html.php";
  include "..\\top_p5.php";
  echo "Exercice 3";
  ?>
  <p class="topic">Avec le tableau de l'exercice 1, afficher la valeur de l'index 5.<br>
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>
      <p>
      <?php
        $months = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre");
        echo "valeur de l'index 5 : $months[5]";
      ?>
      </p>
    
  </body>
</html>

<?php include "..\..\bottom_html.php";