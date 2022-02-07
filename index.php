<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles2.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>Document</title>
  </head>
  <body>
    <img src="images/kawa_ziarno3.png" class="bg_kawa" />
    <header>
      <div class="header">
        <div class="logo">
          <img src="images/logo_glass2.png" class="logo_glass" />
          <p class="logo_header">Coffee Time!</p>
          <nav class="navigation">
            <ul class="tabs">
              <li class="tab is-active"><a data-switcher data-tab="1">Strona Główna</a></li>
              <li class="tab"><a data-switcher data-tab="2">Akcesoria</a></li>
              <li class="tab"><a data-switcher data-tab="3">Nasze kawy</a></li>
              <li class="tab"><a data-switcher data-tab="4">Produkty</a></li>
              <li class="tab"><a data-switcher data-tab="5">Dodatki</a></li>
              <li class="tab"><a data-switcher data-tab="6">Prezenty</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <main>
      <div class="container">
        <div class="sidebar">
          <div class="shopping_cart">
            <img src="images/shopping-cart.png" class="shopping-cart" />
            <p class="shopping">Koszyk</p>
          </div>
          <div class="login">
            <section>
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever since the 1500s, when an unknown printer took a galley of
              type and scrambled it to make a type specimen book. It has
              survived not only five centuries, but also the leap into
              electronic typesetting, remaining essentially unchanged. It was
              popularised in the 1960s with the release of Letraset sheets
              containing Lorem Ipsum passages, and more recently with desktop
              publishing software like Aldus PageMaker including versions of
              Lorem Ipsum.
            </section>
          </div>
        </div>
        <div class="news">
          <section class="pages">
            <div class="page is-active" data-page="1">
              <?php include 'content/home.php';?>
            </div>
            <div class="page" data-page="2">
              <?php include 'content/akcesoria.php';?>
           </div>
           <div class="page" data-page="3">
              <?php include 'content/coffee.php';?>
           </div>
           <div class="page" data-page="4">
              <?php include 'content/produkty.php';?>
            </div>
            <div class="page" data-page="5">
              <?php include 'content/dodatki.php';?>
            </div>
            <div class="page" data-page="6">
              <?php include 'content/prezenty.php';?>
            </div>
          </section>
        </div>
      </div>
    </main>
    <footer>
      <div class="address">
        <p>
          Mailing Address: PO Box 68727 <br />
          Seattle, WA 98168 Sea-Tac Airport Office <br />
          Third Floor Main Terminal<br />
          Phone: (206) 787-3490
        </p>
      </div>
      <div class="social">
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-instagram"></a>
        <a href="#" class="fa fa-google"></a>
      </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="main.js"></script>
  </body>
</html>
