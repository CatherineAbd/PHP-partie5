<?php 
  include "..\..\\top_html.php";
  include "..\\top_p5.php";
  echo "Exercice 8";
  ?>
  <p class="topic">Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.<br>
    janvier<br>
    février<br>
    mars<br>
    avril<br>
    mai<br>
    juin<br>
    juillet<br>
    aout<br>
    septembre<br>
    octobre<br>
    novembre<br>
    décembre<br>
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>
      <p>
      <?php
        $months = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre");
        foreach ($months as $element){
          echo "$element<br>";
        }
      ?>
      </p>
    
  </body>
</html>

<?php include "..\..\bottom_html.php";