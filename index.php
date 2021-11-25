<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BOOKSTORE</title>
  
  <link rel="shortcut icon" type="image/x-icon" href="img/logo.ico">

  <link rel="stylesheet" href="css/style.css">

  
  <script src="https://kit.fontawesome.com/54051b63e8.js" crossorigin="anonymous"></script>
    
</head>
<body>
<!-- header empieza -->

  <header class="wrapper">
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
      <div class="logo"><a href="index.php">BOOKSTORE</a></div>
        <ul class="links">
          <li><a href="index.php">HOME</a></li>
          <li><a href="libros/libros.php">LIBROS</a></li>
          <li>
            <a href="#" class="desktop-link">CATEGORÍAS</a>
            <input type="checkbox" id="show-categorias">
            <label for="show-categorias">CATEGORÍAS</label>
            <ul>
              <li><a href="#">Libros Juveniles</a></li>
              <li><a href="#">Libros Infantiles</a></li>
              <li><a href="#">English Books</a></li>
              <li><a href="#">Mangas</a></li>
              <li><a href="#">Todo</a></li>
            </ul>
      </div>
      <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>

<!-- search box empieza -->

      <form action="POST" class="search-box">
        <input type="text" placeholder="Harry Potter, Terror, Fantasía..." required autofocus>
        <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right" ></i></button>
      </form>
    </nav>

</header>

<!-- search box termina -->
<!-- header termina -->

<!-- footer -->

  <footer>
    <div class="grupo-1">
      <div class="box">
          <h2>INFORMACIÓN LEGAL</h2>
          <i class="fas fa-desktop"></i><p>booktore.com</p><br>
          <i class="fas fa-phone-alt"></i><p>3135099538 - (602) 884 1113</p><br>
          <i class="fas fa-map-marker-alt"></i><p>Calle 72a No. 8N-65 Cali - Valle</p><br>
          <i class="fas fa-file"></i><a class="tyc" href="">Terminos y condiones</a>
      </div>
      <div class="box">
        <h2>CENTRO DE AYUDA</h2>
        <a href="#">¿Quiénes somos?</a>
        <a href="#">PQRS</a>
        <a href="#">Preguntas frecuentes</a>
        <a href="#">Política tratamiento de datos</a>
        <a href="#">Política para cambio de mercancía</a>
      </div>
      <div class="box">
        <h2>SIGUENOS</h2>
        <div class="red-social">
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-instagram"></a>
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-youtube"></a>
        </div>
      </div>
      <img class="pago" src="img/medios-de-pago.png" alt="">
    </div>

    <div class="grupo-2">
      <small>&copy; 2021 <b>BOOKSTORE</b> - Todos los Derechos Reservados.</small>
    </div>
  </footer>

<!-- footer -->

</body>
</html>
