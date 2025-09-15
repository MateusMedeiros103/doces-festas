<?php 

session_start();
error_reporting(0);

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['nome']) == true) and (!isset($_SESSION['senha']) == true)) 
{
    unset($_SESSION['email']);
    unset($_SESSION['nome']);
    unset($_SESSION['senha']);
}
$logado = $_SESSION['nome'];

// Inicializa o carrinho se ainda não existir
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
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
  <link href="assets/css/style-cart.css" rel="stylesheet">

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
          <h2>Seu Carrinho: <?php echo $logado ?></h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li >Seu carrinho </li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->


    
    <!-- ======= Testimonials Section ======= -->
<!-- Tabela de Carrinho -->
<div class="cart">
            <table>
                <thead>
                    <tr>
                        <th>Imagem</th>
                        <th>Nome</th>
                        <th>Preço Unitário</th>
                        <th>Quantidade</th>
                        <th>Total</th>
                        <th>Remover</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $totalCarrinho = 0;
                    foreach ($_SESSION['cart1'] as $index => $item) {
                        $subtotal = $item['preco'] * $item['quantidade'];
                        $totalCarrinho += $subtotal;
                        echo "<tr>
                            <td><img src='assets/img/doces/{$item['img']}' alt='Imagem do produto'></td>
                            <td>{$item['nome']}</td>
                            <td>R$ " . number_format($item['preco'], 2, ',', '.') . "</td>
                            <td><input type='number' value='{$item['quantidade']}' class='quantity-input' min='1'></td>
                            <td>R$ " . number_format($subtotal, 2, ',', '.') . "</td>
                            <td><button class='btn-remove' data-index='{$index}'>Remover</button></td>
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
            <div class="total">
                <strong>Total Geral: R$ <?php echo number_format($totalCarrinho, 2, ',', '.'); ?></strong>
            </div>
            <a href="finalizar_compra.php" class="btn">Finalizar Compra</a>
        </div>


 





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
  // Atualiza o total do carrinho
function updateCartTotal() {
    let total = 0;
    const items = document.querySelectorAll(".cart tbody tr");
    items.forEach((item) => {
        const price = parseFloat(item.children[2].textContent.replace("R$", "").replace(",", "."));
        const quantity = parseInt(item.querySelector(".quantity-input").value);
        const itemTotal = price * quantity;
        item.children[4].textContent = `R$ ${itemTotal.toFixed(2).replace(".", ",")}`;
        total += itemTotal;
    });
    document.querySelector(".total").textContent = `Total: R$ ${total.toFixed(2).replace(".", ",")}`;
}

// Remover item do carrinho
document.addEventListener("click", (e) => {
    if (e.target.classList.contains("btn-remove")) {
        e.target.closest("tr").remove();
        updateCartTotal();
    }
});

// Atualiza o total ao mudar a quantidade
document.addEventListener("input", (e) => {
    if (e.target.classList.contains("quantity-input")) {
        updateCartTotal();
    }
});

// Função para adicionar item ao carrinho
function addItemToCart(name, imageUrl, price, quantity) {
    const cartItems = document.querySelector(".cart tbody");
    const row = document.createElement("tr");

    row.innerHTML = `
        <td><img src="${imageUrl}" alt="${name}"></td>
        <td>${name}</td>
        <td>R$ ${price.toFixed(2).replace(".", ",")}</td>
        <td><input type="number" class="quantity-input" value="${quantity}" min="1"></td>
        <td>R$ ${(price * quantity).toFixed(2).replace(".", ",")}</td>
        <td><button class="btn-remove">Remover</button></td>
    `;
    
    cartItems.appendChild(row);
    updateCartTotal();
}


document.addEventListener("click", (e) => {
    if (e.target.classList.contains("btn-remove")) {
        const row = e.target.closest("tr");
        const itemName = row.children[1].textContent.trim(); // Nome do item na 2ª célula

        // Envia uma requisição ao servidor para remover o item
        fetch("atualizar_carrinho.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify({ item_nome: itemName }), // Passa o nome do item para o PHP
        })
            .then((response) => response.json())
            .then((data) => {
                if (data.success) {
                    // Remove o item da tabela
                    row.remove();
                    updateCartTotal(); // Atualiza o total
                } else {
                    alert(data.message || "Erro ao remover o item.");
                }
            })
            .catch((error) => console.error("Erro:", error));
    }
});
</script>
</body>

</html>