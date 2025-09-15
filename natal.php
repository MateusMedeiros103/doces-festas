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
  <link href="assets/css/style-natal.css" rel="stylesheet">

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
          <li><a href="index.php">Home</a></li>

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
          <li><a href="natal.php" class="active">Natal</a></li>
       

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

  <!-- ======= Hero Section ======= -->
  <div>
  <section id="hero">
    <div id="heroCarousel" style = "display: block;" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/MMEMBALAGENS.png)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Bem-vindo ao Natal na M&M Doces e Festas <span></span></h2>
              <p class="animate__animated animate__fadeInUp">"Venha viver a magia do Natal com a gente! Nossa loja está repleta de novidades: deliciosos doces temáticos, itens exclusivos para sua ceia e uma variedade incrível de produtos para decorar e encantar sua festa. Aproveite promoções especiais, sorteios e um ambiente cheio de alegria natalina."</p>
              <p class="animate__animated animate__fadeInUp">"🎅 Data: De (20/11/2024) a [23/12/2024]."</p>
              <p class="animate__animated animate__fadeInUp">"📍 Local: R. Dr. João Batista Ortiz Monteiro, 406 - Bonfim, Taubaté - SP, 12040-250."</p>
              <p class="animate__animated animate__fadeInUp">"Faça deste Natal um momento inesquecível. Esperamos por você! 🌟"</p>
            </div>
          </div>
        </div>


      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section>
</div><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->

    
    <div class="carousell-wrapper">
  <button id="prev">❮</button>
  <div class="carousel2">
    <div class="carousel3-track">
      <div class="carousel1-item"><img src="assets/img/natal/embalagemG34.png" alt="Imagem 1"></div>
      <div class="carousel1-item"><img src="assets/img/natal/barradechocolatebranco.png" alt="Imagem 2"></div>
      <div class="carousel1-item"><img src="assets/img/natal/barradechocolate.png" alt="Imagem 3"></div>
      <div class="carousel1-item"><img src="assets/img/natal/chantilynorcal.png" alt="Imagem 4"></div>
      <div class="carousel1-item"><img src="assets/img/natal/caixadeboloP.png" alt="Imagem 5"></div>
      <div class="carousel1-item"><img src="assets/img/natal/caixaparasalgado.png" alt="Imagem 6"></div>
    </div>
  </div>
  <button id="next">❯</button>
</div>
    
    
    <!-- End Clients Section -->
    <?php

 $servidor = "localhost";
 $usuario = "root";
 $senha = "";
 $banco = "login";


 $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

 $limite = 20; 
 $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
 $offset = ($pagina - 1) * $limite;
 
 $pesquisa = isset($_GET['pesquisa']) ? $_GET['pesquisa'] : '';

// Lógica de pesquisa
if ($pesquisa) {
    $sql = "SELECT * FROM natal WHERE nome LIKE '%" . mysqli_real_escape_string($conexao, $pesquisa) . "%' LIMIT $limite OFFSET $offset";
} else {
    $sql = "SELECT * FROM natal LIMIT $limite OFFSET $offset";
}




 $dados = mysqli_query($conexao, $sql);

$total_sql = "SELECT COUNT(*) as total FROM natal";
$total_result = mysqli_query($conexao, $total_sql);
$total_row = mysqli_fetch_assoc($total_result);
$total_itens = $total_row['total'];
$total_paginas = ceil($total_itens / $limite);


 ?>



     <!-- ======= destaque ======= -->
     <div class="hr">
      <hr>
    <div class="h2-sevices "><h2 class=" animate__animated animate__backInRight">Descontos da Natal</h2></div>
    <hr></div><br>

     <div class="center">
      <!-- Primeiro Card -->
      <div class="card">
        <img src="assets/img/natal/chantilynorcal.png" alt="Produto 2" class="product-img">
        <div class="container">
          <h4><b>Chantily Norcal</b></h4>
          <h3>Chantily Norcal para confeitaria e decorações. </h3>
          <div class="preco">
            <s><span class="preco-antigo">R$ 20,10</span></s><br><br>
            <span class="preco-atual"> R$ 18,90 </span>
          </div><br>
          <a href="#product-card" type="button" class="btn btn-outline-danger">Comprar</a>
        </div>
      </div>
    
      <!-- Segundo Card -->
      <div class="card">
        <img src="assets/img/natal/embalagem G34.png" alt="Produto 2" class="product-img">
        <div class="container">
          <h4><b>Embalagem G-34</b></h4>
          <h3>Embalagem G-34 para decoração de natal.</h3>
          <div class="preco">
            <s><span class="preco-antigo">R$ 9,90</span></s><br><br>
            <span class="preco-atual"> R$ 7,90 </span>
          </div><br>
          <a href="#product-card" type="button" class="btn btn-outline-danger">Comprar</a>
        </div>
      </div>

      <div class="card">
        <img src="assets/img/natal/barradechocolate.png" alt="Produto 2" class="product-img">
        <div class="container">
          <h4><b>Barra de Chocolate</b></h4>
          <h3>Barra de Chocolate Colombo para confeitaria.</h3>
          <div class="preco">
            <s><span class="preco-antigo">R$ 25,00</span></s><br><br>
            <span class="preco-atual"> R$ 22,90 </span>
          </div><br>
          <a href="#product-card" type="button" class="btn btn-outline-danger">Comprar</a>
        </div>
      </div>
    
      <!-- Terceiro Card -->
      <div class="card">
        <img src="assets/img/natal/caixadeboloP.png" alt="Produto 3" class="product-img">
        <div class="container">
          <h4><b>Caixa de bolo</b></h4>
          <h3>Caixa para bolo P 30x20 para confeitaria</h3>
          <div class="preco">
            <s><span class="preco-antigo">R$ 6,20</span></s><br><br>
            <span class="preco-atual"> R$ 5,50 </span>
          </div><br>
          <a href="#product-card" type="button" class="btn btn-outline-danger">Comprar</a>
        </div>
      </div>
    </div>


    <div class="hr">
      <hr>
    <div class="h2-sevices"><h2>Faça suas compras de natal !</h2></div>
    <hr></div>
  </div>
    




  <?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "login";


$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

$limite = 18; 
$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$offset = ($pagina - 1) * $limite;


$pesquisa = isset($_GET['pesquisa']) ? $_GET['pesquisa'] : '';
$sql = "SELECT * FROM natal WHERE 1";

// Lógica de pesquisa
if ($pesquisa) {
   $sql .= " and nome LIKE '%" . $pesquisa . "%' ";
}
$id_categoria = isset($_GET['id_categoria']) ? $_GET['id_categoria'] : '';

if ($id_categoria) {
 $sql .= " and categorias=" . $id_categoria;
 
} else{
  $sql .= " LIMIT $limite OFFSET $offset";
}
 



$dados = mysqli_query($conexao, $sql);



$total_sql = "SELECT COUNT(*) as total FROM natal";
$total_result = mysqli_query($conexao, $total_sql);
$total_row = mysqli_fetch_assoc($total_result);
$total_itens = $total_row['total'];
$total_paginas = ceil($total_itens / $limite);



?>






  <section class="pesquisar">
      <div class="content">
        <div class="products">
  <?php 

foreach ($dados as $value ) {


 ?>
    
          <div class="product-card" id="product-card">
          <a href="compranatal.php?id_compra=<?php echo $value['ID'] ?>">
            <img src="assets/img/natal/<?php echo $value['img'] ?>"  alt="Product 1" >
            </a>
            <div class="product-details">
              <h3 class=" animate__animated animate__backInRight"><?php echo $value['nome'] ?></h3>
              <h5><?php echo $value['descricao'] ?></h5>
               <center><div class="stars">
                <input type="radio" id="star5" name="rating" value="5">
                <label for="star5">★</label>
                <input type="radio" id="star4" name="rating" value="4">
                <label for="star4">★</label>
                <input type="radio" id="star3" name="rating" value="3">
                <label for="star3">★</label>
                <input type="radio" id="star2" name="rating" value="2">
                <label for="star2">★</label>
                <input type="radio" id="star1" name="rating" value="1">                                               
                <label for="star1">★</label>
                <br><br></div></center>
                <center><p>R$<?php echo $value['preco'] ?></p></center>
              <center><a href="compranatal.php?id_compra=<?php echo $value['ID'] ?>">Comprar</a></center>
            </div>
          </div>

<?php 

}

 ?>
 


          <!-- Adicione mais cards de produtos conforme necessário -->
        </div>

        <div class="sidebar">
          <div class="search">
          <form method="get" action="natal.php">
    <input type="search" name="pesquisa" placeholder="Pesquisar" id="pesquisar" value="<?php echo isset($_GET['pesquisa']) ? $_GET['pesquisa'] : ''; ?>">
    <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
    </svg></button>
</form>

          </div>
          </form>
          <div class="categories" id="categories">
            <h3>Categorias</h3>
            <ul>
            <a href="natal.php?id_categoria=11#categories">- Confeitaria</a><br>
            <a href="natal.php?id_categoria=12#categories">- Embalagens</a><br>
            <a href="natal.php?id_categoria=13#categories">- chocolates</a><br>
            </ul>
          </div>
        </div>
      </div>
    </section>

   
    <div class="semmudar">
    <div class="mudar">
    <?php for ($i = 1; $i <= $total_paginas; $i++): ?>
        <?php if ($i == $pagina): ?>
            <button type="button" class=""><?php echo $i; ?></button>
        <?php else: ?>
            <a href="?pagina=<?php echo $i; ?>" class=""><?php echo $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>
</div>
</div>
  

    
   
     

 <!-- ======= Clients Section ======= -->
   <!-- End Clients Section -->



    <!-- ======= Services Section ======= -->
  

    <!-- ======= Portfolio Section ======= -->
   <!-- End Portfolio Section -->

  </main><!-- End #main -->

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
                <a href="#" class="Whatsapp"><i class="bx bxl-whatsapp"></i></a>
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
          Design por <a href="https://bootstrapmade.com/">M&M Doces e Festas e Embalagens</a>
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
const track = document.querySelector('.carousel3-track');
const items = document.querySelectorAll('.carousel1-item');
const prevButton = document.getElementById('prev');
const nextButton = document.getElementById('next');

const itemWidth = items[0].offsetWidth + 30; // Largura do item + espaçamento
let currentIndex = 0;

// Clonagem dos itens
const itemsArray = Array.from(items);
const clonedItems = [...itemsArray, ...itemsArray]; // Duplicar os itens para criar o efeito de loop infinito

// Adiciona os itens clonados ao carrossel
clonedItems.forEach(item => {
  track.appendChild(item.cloneNode(true));
});

// Atualizar o carrossel
function updateCarousel() {
  track.style.transition = 'transform 0.5s ease-in-out';
  track.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
}

// Corrigir o loop ao final da transição
track.addEventListener('transitionend', () => {
  if (currentIndex === clonedItems.length) {
    // Se o índice atingir o final do carrossel, volta para o início
    track.style.transition = 'none';
    currentIndex = itemsArray.length; // Reseta para o início real
    track.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
  }

  if (currentIndex === -1) {
    // Se o índice for 0, vai para o final (início do loop)
    track.style.transition = 'none';
    currentIndex = clonedItems.length - itemsArray.length; // Reseta para o final real
    track.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
  }
});

// Botões de navegação
nextButton.addEventListener('click', () => {
  currentIndex++;
  updateCarousel();
});

prevButton.addEventListener('click', () => {
  currentIndex--;
  updateCarousel();
});

</script>


</body>

</html>