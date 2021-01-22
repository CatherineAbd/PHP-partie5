<?php 
  include "..\\top_p5.php";
  echo "Exercice 1";
  ?>
  <p class="topic">Créer un tableau months et l'initialiser avec les valeurs suivantes : <br>
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
      // $months = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre");
      $months = [
        "janvier", 
        "février", 
        "mars", 
        "avril", 
        "mai", 
        "juin", 
        "juillet", 
        "aout", 
        "septembre", 
        "octobre", 
        "novembre", 
        "décembre"];
      echo "affichage du tableau months : <br>";
      var_dump($months);
    ?>
    </p>
    <pre>
        <?php print_r($months) ?>
    </pre>
    
<?php include "..\..\bottom_html.php"; ?>