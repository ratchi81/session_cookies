<?php 
/**/
session_start(); 
if (isset($_SESSION['loginname'])){
  $loginOK = '<br />Bienvenue sur votre epsace '.$_SESSION['loginname'];
  $loginOK .= '<br /><a href="logout.php"" class="btn btn-danger btn-sm active" role="button">Déconnexion</a>';
}else{
  header("Location: login.php");
}


/*
  $prodBuy = ["46"=>"Pecan nuts",
      "36"=>"Chocolate chips",
      "58"=>"Chocolate cookie",
      "32"=>"M&M's&copy; cookies"
    ];

  if (isset($_GET['add_to_cart'])){
    foreach($prodBuy as $key=>$val){
      if($_GET['add_to_cart'] === "'.$key.'"){
        setcookie($_GET['add_to_cart'],"'.$val.'", time() + 3600);
      }
      var_dump($key);
      var_dump($val);


    }
*/
  if (isset($_GET['add_to_cart'])){
    
     if($_GET['add_to_cart'] === '46'){
        setcookie($_GET['add_to_cart'], "Pecan nuts", time() + 3600);
     }elseif($_GET['add_to_cart'] === '36'){
        setcookie($_GET['add_to_cart'], "Chocolate chips", time() + 3600);
     }elseif($_GET['add_to_cart'] === '58'){
      setcookie($_GET['add_to_cart'], "Chocolate cookie", time() + 3600);
    }elseif($_GET['add_to_cart'] === '32'){
      setcookie($_GET['add_to_cart'], "M&M's&copy; cookies", time() + 3600);
    }
    
    
  } 



  



require 'inc/head.php'; 

?>
<section class="cookies container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-46.jpeg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Pecan nuts</h3>
          <p>Cooked by Penny !</p>
          <a  href="?add_to_cart=46" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-36.jpeg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate chips</h3>
          <p>Cooked by Bernadette !</p>
          <a  href="?add_to_cart=36" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-58.jpeg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate cookie</h3>
          <p>Cooked by Bernadette !</p>
          <a  href="?add_to_cart=58" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-32.jpeg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>M&M's&copy; cookies</h3>
          <p>Cooked by Penny !</p>
          <a  href="?add_to_cart=32" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a>
        </figcaption>
      </figure>
    </div>
  </div>
</section>
<?php require 'inc/foot.php'; ?>