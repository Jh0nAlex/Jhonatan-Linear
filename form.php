<?php
   //Definimos la codificación de la cabecera.
   header('Content-Type: text/html; charset=utf-8');
   //Importamos el archivo con las validaciones.
   require_once 'validaciones.php';
   //Guarda los valores de los campos en variables, siempre y cuando se haya enviado el formulario, sino se guardará null.
   $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
   $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : null;
      if ($telefono!=null) {
         settype($telefono, "integer");
      }
   $email = isset($_POST['correo']) ? $_POST['correo'] : null;
   $asunto = isset($_POST['asunto']) ? $_POST['asunto'] : null;
   $mensaj = isset($_POST['cuerpo']) ? $_POST['cuerpo'] : null;
   //Este array guardará los errores de validación que surjan.
   $errores = array();
   //Pregunta si está llegando una petición por POST, lo que significa que el usuario envió el formulario.
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      //Valida que el campo nombre no esté vacío.
      if (!validaRequerido($nombre)) {
         $errores[] = 'El campo nombre es incorrecto.';
      }
      //Valida la edad con un rango de 3 a 130 años.
      $opciones_telefono = array(
         'options' => array(
            //Definimos el rango de edad entre 3 a 130.
            'min_range' => 1000000,
            'max_range' => 9999999999
         ),
         'flags'=> FILTER_FLAG_ALLOW_OCTAL,
      );
      if (!validarEntero($telefono, $opciones_telefono)) {
         $errores[] = 'El campo telefono es incorrecto.';
      }
      //Valida que el campo email sea correcto.
      if (!validaEmail($email)) {
         $errores[] = 'El campo email es incorrecto.';
      }
   }
?>
<!DOCTYPE HTML>
<!--
   Linear by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
   <head>
      <title>Linear by TEMPLATED</title>
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta name="description" content="" />
      <meta name="keywords" content="" />
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src="js/skel.min.js"></script>
      <script src="js/skel-panels.min.js"></script>
      <script src="js/init.js"></script>
      <noscript>
         <link rel="stylesheet" href="css/skel-noscript.css" />
         <link rel="stylesheet" href="css/style.css" />
         <link rel="stylesheet" href="css/style-desktop.css" />
      </noscript>
   </head>
   <body>

   <!-- Header -->
      <div id="header">
         <div id="nav-wrapper"> 
            <!-- Nav -->
            <nav id="nav">
               <ul>
                  <li><a href="index1.php">Home</a></li>
               </ul>
            </nav>
         </div>
         <div class="container"> 
            
            <!-- Logo -->
            <div id="logo">
               <h1><a href="#">Jhonatan Carrillo restrepo</a></h1>
               <span class="tag">By Avengers</span>
            </div>
         </div>
      </div>
   <!-- Header --> 

   <!-- Main -->
      <div id="main">
         <div class="container">
            <div class="row">

               <!-- Sidebar -->
               <div id="sidebar" class="4u">
                  <img src="images/mensaje.png">
               </div>
               
               <!-- Content -->
               <div id="content" class="8u skel-cell-important">
                  <h2>INFORMACION ENTREGADA </h2>

                  <?php if ($errores): ?>
             <ul style="color: #f00;">
                <?php foreach ($errores as $error): ?>
                   <li> <?php echo $error ?> </li>
                <?php endforeach; ?>
             </ul>
       <?php endif; ?>
                     
                  <?php 

                     if ($_POST) {
                        $nombre = $_POST['nombre'];
                        $telefono = $_POST['telefono'];
                        $correo = $_POST['correo'];
                        $asunto = $_POST['asunto'];
                        $mensaje = $_POST['cuerpo'];

                        echo "$nombre <br> $telefono <br> $correo <br> $asunto <br> $mensaje";
                     }

                  ?>
               </div>

            </div>
         </div>
      </div>
   <!-- /Main -->

   <!-- Tweet -->
      <div id="tweet">
         <div class="container">
            <section>
               <blockquote>&ldquo;In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat.&rdquo;</blockquote>
            </section>
         </div>
      </div>
   <!-- /Tweet -->

   <!-- Footer -->
      <div id="footer">
         <div class="container">
            <section>
               <header>
                  <h2>Get in touch</h2>
                  <span class="byline">Integer sit amet pede vel arcu aliquet pretium</span>
               </header>
               <ul class="contact">
                  <li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
                  <li class="active"><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
                  <li><a href="#" class="fa fa-dribbble"><span>Pinterest</span></a></li>
                  <li><a href="#" class="fa fa-tumblr"><span>Google+</span></a></li>
               </ul>
            </section>
         </div>
      </div>
   <!-- /Footer -->

   <!-- Copyright -->
      <div id="copyright">
         <div class="container">
            Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
         </div>
      </div>


   </body>
</html>