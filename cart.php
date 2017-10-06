<?php 
session_start(); 
if (isset($_SESSION['loginname'])){
  $loginOK = '<br />Panier de  '.$_SESSION['loginname'];
}else{
  header("Location: login.php");
}
if(isset($_POST['supp'])){
  $keyDel = $_POST['key'];
  unset($_COOKIE[$keyDel]);
  setcookie($keyDel, "", time() - 3600);
}

if(isset($_POST['suppAll'])){
  foreach($_COOKIE as $key=>$val){
    if($key !== "PHPSESSID"){
      unset($_COOKIE[$key]);
      setcookie($key, "", time() - 3600);
    }
  }
}

require 'inc/head.php'; ?>
<section class="cookies container">
    <div class="row">

      <?php
      if(empty($_COOKIE)){
          echo '<strong>Votre Panier est vide</strong';
          $boutonAff = '';
      }else{
        echo '<table class="table">';
        foreach($_COOKIE as $key=>$val){
          if($key !== "PHPSESSID"){
            echo '<tr><td>';
            echo $key.'  '.$val;
            echo '</td><td>';
            echo '<form method="post">';
            echo '<input type="hidden" name="key" value="'.$key.'">';
            echo '<input type="number" name="numb" value="1">';
            echo '<button type="submit" class="btn btn-danger btn-sm" role="button" name="supp" value="Supprimer">Supprimer</button>';
            echo '</form>';
            echo '</td></tr>';
          }
        }
        echo '</table>';
        $boutonAff = '<a href="#" class="btn btn-success btn-sm active" role="button">Checkout</a>';
        echo $boutonAff;
        echo '<form method="post">';
        echo '<button type="submit" class="btn btn-danger btn-sm" role="button" name="suppAll" value="Supprimer">Tout Supprimer</button>';
        echo '</form>';
      }
      ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
