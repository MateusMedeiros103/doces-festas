<?php 

 session_start();
 error_reporting(0);

 if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['nome']) == true) and (!isset($_SESSION['senha']) == true)) 
 	{
 	  unset($_SESSION['email']);
	  unset($_SESSION['nome']);
      unset($_SESSION['senha']);
 	  //header('Location: login.php');
 	}
 	$logado = $_SESSION['nome'];
 

 ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>M&M doces e festas </title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <script src="https://unpkg.com/scrollreveal"></script>
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <script src="https://kit.fontawesome.com/ca14b9e588.js" crossoeigin="anonymous"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>

  <!-- Template Main CSS File -->
  <link href="assets/css/style-compra.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Sailor
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <a href="index.php" class="logo me-auto"><img src="assets/img/logo/logo-removebg-preview.png" alt="" class="img-fluid"></a>
      <h1 class="logo me-auto"><a href="index.html">M&M Doces e Festas</a></h1>
     
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    
      <nav id="navbar" class="navbar">
        <ul>
          <hr></hr>
          <li><a href="index.php" class="active">Home</a></li>

          <li class="dropdown"><a href="#"><span>Produtos</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="doces.php">Doces</a></li>
              <li><a href="embalagens.php">Embalagens</a></li>
              <li><a href="artigosparafesta.php">Artigo para festas</a></li>

             
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="natal.php">Natal</a></li>
       

          <li><a href="contact.php">Contato</a></li>
        
         
          <div class="usuario">
  <a href="<?php echo $logado ? 'logout.php' : 'php/cadastro loja/login.html'; ?>">
    <img src="assets/img/testimonials/usuario-removebg-preview.png" alt="">
    <h2>
      <?php 
        if ($logado) {
          echo "$logado/Sair"; // Exibe o nome do usuário logado
        } else {
          echo "Entrar"; // Exibe "Entrar" se não estiver logado
        }
      ?>
    </h2>
  </a>
</div>
          
          <div class="redes-container">
          <a href=""><img src="assets/img/testimonials/whatsapp.png"  style="width: 27px; height: 25px; margin: 3px; margin-left: 50px; " alt="">
          </a></div>
          <div class="redes2-container">
          <a href="https://www.instagram.com/mmdoces_festas/"><img src="assets/img/testimonials/instagram.png"  style="width: 27px; height: 25px; margin: 3px; " alt="">
          </a></div>
          <div class="redes3-container">
          <a href="https://www.facebook.com/MMdocesfestasembalagens"><img src="assets/img/testimonials/facebook.png"  style="width: 27px; height: 25px; margin: 3px;" alt="">
          </a></div>
          <div class="redes4-container">
          <a href="cart.php"><img src="assets/img/testimonials/cart-removebg-preview.png"  style="width: 45px; height: 45px; margin: -5px; margin-left: 10px; " alt="">
          </a></div>
        
       
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Embalagens</h2>
          <ol>
            <li><a href="index.html"><b>Home</a></b></li>
            <b><li>/Embalagens</li></b>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->


    <?php

 $servidor = "localhost";
 $usuario = "root";
 $senha = "";
 $banco = "login";


 $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if (isset($_GET['id_compra'])) {

 $sql = "SELECT * FROM embalagens where ID=".$_GET['id_compra'];



}


 $dados = mysqli_query($conexao, $sql);
 $embalgens = mysqli_fetch_assoc($dados);
 
 

?>

 <form method="post">
  <div id="tabela">
  


  <section class="pesquisar">
      <div class="content">
        <div class="products">
  <?php 

foreach ($dados as $value ) {


 ?>
    
<main>
  <section>
    <div class="container-compra">
       <div class="left-side">
        <div class="itens">
          <div class="select-image">
             <img id="img1" src="assets/img/embalgens/<?php echo $value['img'] ?>">
          </div>
          <div class="thumbnalls">
             <div class="thumbnall">
               <img id="img2" src="assets/img/embalgens/<?php echo $value['img'] ?>" onclick="changeImage('assets/img/embalgens/<?php echo $value['img'] ?>')">
            </div>

             <div class="thumbnall">
               <img id="img3" src="assets/img/embalgens/<?php echo $value['img3'] ?>" onclick="changeImage('assets/img/embalgens/<?php echo $value['img3'] ?>')">
            </div>

          

         </div>
      </div> 
   </div>
      <div class="right-side">
        <div class="content">
          
        </div>
          <h6><?php echo $value['nomes'] ?></h6>
          <p><?php echo $value['descricao'] ?>.</p>
          <div class="rating">
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
        </div>
          <div class = "prices">
          <span class="price">R$<?php echo $value['preco'] ?></span>
          </div><br>
          <div class="options">
              <div class="amout">
                <div class="minus">
                   <img src="assets/img/testimonials/icon-minus.svg">
                </div>
                <span>0</span>
                <div class="plus">
                  <img src="assets/img/testimonials/icon-plus.svg">
                </div>
              </div>
              <a href="add_to_cart2.php?id=<?php echo $value['ID']; ?>" class="button"><img src = "assets/img/testimonials/icon-cart.svg">Comprar</a>
          </div>
        </div>
      </div>    
  
  </section>
</main>
         

<?php 

}

 ?>
 


          <!-- Adicione mais cards de produtos conforme necessário -->
        </div>
    

        
        

           
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
</svg></button>
          </div>
          </form>
          <div class="categories">
         
              <!-- Adicione mais categorias conforme necessário -->
            </ul>
          </div>
        </div>
      </div>
    </section>
    

              

       

  </main><!-- End #main -->
  <?php 

foreach ($dados as $value ) {


 ?>

 <div class ="descriçao">
  <h3>Descrição geral</h3>


  <p><?php echo $value['descricaogeral'] ?></p>
  <p><b>Contém:</b><?php echo $value['Contem'] ?></p>


  

  <h2>Observação:</h2>
  <p>* <?php echo $value['observacao'] ?></p>
  <p>* <?php echo $value['observacao2'] ?></p>
  <p>* <?php echo $value['observacao3'] ?></p>

 
 <?php 

}

 ?>


</div>

<?php
 $servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "login";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// Query para retornar 4 produtos em ordem aleatória
$sql = "SELECT * FROM embalagens ORDER BY RAND() LIMIT 4";

$dados = mysqli_query($conexao, $sql);

?>

<div class="hr">
  <hr>
  <div class="h2-sevices">
    <h2 class="animate__animated animate__backInRight">Mais produtos do seu interesse</h2>
  </div>
  <hr>
</div>
<br>

<div class="center">
  <?php 
  // Exibindo os 4 produtos
  foreach ($dados as $value) { 
  ?>
    <div class="card">
      <a href="compraembalagem.php?id_compra=<?php echo $value['ID'] ?>">
      <img src="assets/img/embalgens/<?php echo $value['img']; ?>" alt="Produto" class="product-img">
      </a>
      <div class="container">
        <h4><b><?php echo $value['nomes']; ?></b></h4>
        <h3><?php echo $value['descricao']; ?></h3>
        <div class="preco">
          <br>
          <span class="preco-atual">R$<?php echo $value['preco']; ?></span>
        </div>
        <br>
        <a href="compraembalagem.php?id_compra=<?php echo $value['ID'] ?>" type="button" class="btn btn-outline-danger">Comprar</a>
      </div>
    </div>
  <?php 
  } 
  ?>
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>M&M Doces e Festas</h3>
              <p>
                Rua Dr João Batista Ortiz <br>
                Número 406 Parque senho Bonfim<br><br>
                <strong>Telefone:</strong> (12) 997948965<br>
                <strong>Email:</strong> m&mdocesefestas@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="Whatsapp"><i class="bx bxl-whatsapp" aria-hidden="true"></i></a>
                <a href="https://www.facebook.com/MMdocesfestasembalagens" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/mmdoces_festas/" class="instagram"><i class="bx bxl-instagram"></i></a>
              </div>
            </div>
          </div>


          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2596.3631120510977!2d-45.60611885542682!3d-23.030676755365203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cc577133c4c089%3A0x475866b865a49f60!2sM%26M%20Doces%2C%20Festa%2C%20Embalagens%20e%20Personalizados!5e0!3m2!1spt-BR!2sbr!4v1715705845397!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        

         

          
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Sailor</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>

  </script>

</body>
<script>
  var search = document.getElementById('pesquisar');

  search.addEventListener("keydown", function(event) {
   if (event.key === "Enter")
   {
      searchData();
   }
  });



  function searchData()
  {
    window.location = 'blog.php?search='+search.value;
  }


  
</script>

<script>
function changeImage(newSrc) {
  document.getElementById('img1').src = newSrc;
}
</script>
</html>