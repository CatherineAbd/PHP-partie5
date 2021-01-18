<?php 
  include "..\..\\top_html.php";
  include "..\\top_p5.php";
  echo "Exercice 4";
  ?>
  <p class="topic">Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.<br>
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>
      <p>
      <?php
        $months = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre");
        $months[7] = "août";
        echo "mois ind 6 : $months[6] <br> mois ind 7 : $months[7] <br> mois ind 8 : $months[8]";
      ?>
      </p>
    
  </body>
</html>

<?php include "..\..\bottom_html.php";