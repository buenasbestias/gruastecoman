<<<<<<< 0faa44f69ccef2175ec21a33f107f651b993021e
<!DOCTYPE html>
<html class="no-js">
    <head>
    <meta charset="utf-8">
    <title>GRÚAS TECOMÁN | Servicio de grúas para arrastre y salvamento</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Servicio de grúas para arrastre y salvamento, maniobras industriales, traslados y fletes.">
    <meta name="author" content="Los Hive">
    <link rel="icon" href="favicon.ico">
    <link href="css/vendor/bootstrap.min.css" rel="stylesheet">
    <link href="css/teco-style.css" rel="stylesheet">
    <!--<link href="css/responsive.css" rel="stylesheet">-->

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,700,700italic,400italic,600,600italic' rel='stylesheet' type='text/css'>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/vendor/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/vendor/ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
        <header class="container no-pad">
            <div class="row">
                <div class="col-md-3">
                    <a href="index.html">
                        <div class="logo">
                            <img src="img/logo-gruas-tecoman.jpg" class="img-responsive center-block">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 pull-right text-right m-right-sm">
                    <p class="light-green txt-md m-top-md">CONTÁCTENOS</p>
                    <div class="row">
                        <div class="col-lg-5 col-lg-offset-2">
                            <p class="text-primary m-top-xs">GDL:<br>01(33) 3811-1760</p>
                        </div>
                        <div class="col-lg-5">
                            <p class="text-primary m-top-xs">TECOMÁN:<br>01(31) 3324-1895</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-inverse">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="main">
                        <ul class="nav navbar-nav">
                            <li><a href="index.html">INICIO</a></li>
                            <li><a href="acerca-de-gruas-tecoman.html">QUIÉNES SOMOS</a></li>
                            <li><a href="servicio-de-gruas.html">SERVICIOS</a></li>
                            <li><a href="galeria-de-gruas.html">GALERÍA</a></li>
                            <li class="active"><a href="contacto.html">CONTACTO</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <div class="container m-top">
            <div class="row m-top">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <?php
               
                        require_once "recaptchalib.php";
                        $nombre = $_POST['nombre'];
                        $tel = $_POST['tel'];
                        $email = $_POST['email'];
                        $menores = $_POST['menores'];
                        $servicio = $_POST['servicio'];
                        $comentarios = $_POST['comentarios'];
                        $from = 'no-reply@gruastecoman.com'; 
                        $to = 'wera.morgan@gmail.com'; 
                        $subject = 'Grúas Tecomán :: Contacto desde sitio web';

                        $headers = "From: no-reply@gruastecoman.com\r\n";
                        $headers .= 'MIME-Version: 1.0' . "\r\n";
                        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                                
                        $body = '<!DOCTYPE html>
                                <table style="width:400px;">
                                    <tr>
                                        <td style="color:#444444;font-weight:bold;font-family:arial;font-size:16px;">Nombre/Empresal:</td>
                                        <td style="color:#337ab7;font-weight:normal;font-family:arial;font-size:14px;text-align:center;">'.$nombre.'</td>
                                    </tr>
                                    <tr>
                                        <td style="color:#444444;font-weight:bold;font-family:arial;font-size:16px;">Teléfono:</td>
                                        <td style="color:#337ab7;font-weight:normal;font-family:arial;font-size:14px;text-align:center;">'.$tel.'</td>
                                    </tr>
                                    <tr>
                                        <td style="color:#444444;font-weight:bold;font-family:arial;font-size:16px;">Email:</td>
                                        <td style="color:#337ab7;font-weight:normal;font-family:arial;font-size:14px;text-align:center;">'.$email.'</td>
                                    </tr>
                                    <tr>
                                        <td style="color:#444444;font-weight:bold;font-family:arial;font-size:16px;">Servicio que necesita:</td>
                                        <td style="color:#337ab7;font-weight:normal;font-family:arial;font-size:14px;text-align:center;">'.$servicio.'</td>
                                    </tr>
                                    <tr>
                                        <td style="color:#444444;font-weight:bold;font-family:arial;font-size:16px;">Comentarios:</td>
                                        <td style="color:#337ab7;font-weight:normal;font-family:arial;font-size:14px;text-align:center;">'.$comentarios.'</td>
                                    </tr>
                                </table>';
                        
                        $siteKey = "6Lcz1g4TAAAAACHbGw0qhzJR-y8_zARsD7dMObVw";
                        $secret = "6Lcz1g4TAAAAACbFzhBVSRcQDaplP7gK2YRumGUC";
                        $lang = "es";
                        $resp = null;
                        $error = null;
                        $reCaptcha = new ReCaptcha($secret);
                        if ($_POST["g-recaptcha-response"]) {
                            $resp = $reCaptcha->verifyResponse(
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["g-recaptcha-response"]
                            );
                        } else {
                            echo '<div class="boxMensaje">
                                        <div style="color:#333;">Ups, no se ingresó el ReCaptcha!<br>Por favor confirme que es humano :)<br><a href="index.html" style="color:#333;font-weight:bold;">Volver a intentarlo</a></div>
                                  </div>';
                        }
                        if ($resp != null && $resp->success) {
                            if (mail ($to, $subject, $body, $headers)) { 
                                echo '<div class="m-top">
                                <div style="color:#333;">¡Gracias por ponerse en contacto con nosotros!<br>
                                En breve nos comunicaremos con usted.<br>
                                <a href="index.html" style="color:#333;font-weight:bold;" class="m-top">Volver al inicio</a></div>
                               </div>';
                            } else { 
                                echo '<div class="boxMensaje">
                                        <div style="color:#333;">Algo salió mal, inténtelo de nuevo!<br><a href="index.html" style="color:#333;font-weight:bold;">Volver al inicio</a></div>
                                    </div>'; 
                            }
                        } 
                        else {
                            echo '<div class="boxMensaje">
                                        <div style="color:#333;">Error de verificación de ReCaptcha<br><a href="index.html" style="color:#333;font-weight:bold;">Volver al inicio</a></div>
                                </div>';
                        }
                    ?>
                </div>
            </div>
        </div>

        <footer class="container-fluid bg-blue m-top-lg">
            <div class="row">
                <div class="col-md-12 text-center">®Operadora Hotelera Cancún 2015</div>
            </div>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="js/vendor/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>

=======
<!DOCTYPE html>
<html class="no-js">
    <head>
    <meta charset="utf-8">
    <title>GRÚAS TECOMÁN | Servicio de grúas para arrastre y salvamento</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Servicio de grúas para arrastre y salvamento, maniobras industriales, traslados y fletes.">
    <meta name="author" content="Los Hive">
    <link rel="icon" href="favicon.ico">
    <link href="css/vendor/bootstrap.min.css" rel="stylesheet">
    <link href="css/teco-style.css" rel="stylesheet">
    <!--<link href="css/responsive.css" rel="stylesheet">-->

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,700,700italic,400italic,600,600italic' rel='stylesheet' type='text/css'>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/vendor/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/vendor/ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
        <header class="container no-pad">
            <div class="row">
                <div class="col-md-3">
                    <a href="index.html">
                        <div class="logo">
                            <img src="img/logo-gruas-tecoman.jpg" class="img-responsive center-block">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 pull-right text-right m-right-sm">
                    <p class="light-green txt-md m-top-md">CONTÁCTENOS</p>
                    <div class="row">
                        <div class="col-lg-5 col-lg-offset-2">
                            <p class="text-primary m-top-xs">GDL:<br>01(33) 3811-1760</p>
                        </div>
                        <div class="col-lg-5">
                            <p class="text-primary m-top-xs">TECOMÁN:<br>01(31) 3324-1895</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-inverse">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="main">
                        <ul class="nav navbar-nav">
                            <li><a href="index.html">INICIO</a></li>
                            <li><a href="acerca-de-gruas-tecoman.html">QUIÉNES SOMOS</a></li>
                            <li><a href="servicio-de-gruas.html">SERVICIOS</a></li>
                            <li><a href="galeria-de-gruas.html">GALERÍA</a></li>
                            <li class="active"><a href="contacto.html">CONTACTO</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <div class="container m-top">
            <div class="row m-top">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <?php
               
                        require_once "recaptchalib.php";
                        $nombre = $_POST['nombre'];
                        $tel = $_POST['tel'];
                        $email = $_POST['email'];
                        $servicio = $_POST['servicio'];
                        $comentarios = $_POST['comentarios'];
                        $from = 'no-reply@gruastecoman.com'; 
                        $to = 'gdl@gruastecoman.com'; 
                        $subject = 'Grúas Tecomán :: Contacto desde sitio web';

                        $headers = "From: no-reply@gruastecoman.com\r\n";
                        $headers .= 'MIME-Version: 1.0' . "\r\n";
                        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                                
                        $body = '<!DOCTYPE html>
                                <table style="width:400px;">
                                    <tr>
                                        <td style="color:#444444;font-weight:bold;font-family:arial;font-size:16px;">Nombre/Empresa:</td>
                                        <td style="color:#337ab7;font-weight:normal;font-family:arial;font-size:14px;text-align:center;">'.$nombre.'</td>
                                    </tr>
                                    <tr>
                                        <td style="color:#444444;font-weight:bold;font-family:arial;font-size:16px;">Teléfono:</td>
                                        <td style="color:#337ab7;font-weight:normal;font-family:arial;font-size:14px;text-align:center;">'.$tel.'</td>
                                    </tr>
                                    <tr>
                                        <td style="color:#444444;font-weight:bold;font-family:arial;font-size:16px;">Email:</td>
                                        <td style="color:#337ab7;font-weight:normal;font-family:arial;font-size:14px;text-align:center;">'.$email.'</td>
                                    </tr>
                                    <tr>
                                        <td style="color:#444444;font-weight:bold;font-family:arial;font-size:16px;">Servicio que necesita:</td>
                                        <td style="color:#337ab7;font-weight:normal;font-family:arial;font-size:14px;text-align:center;">'.$servicio.'</td>
                                    </tr>
                                    <tr>
                                        <td style="color:#444444;font-weight:bold;font-family:arial;font-size:16px;">Comentarios:</td>
                                        <td style="color:#337ab7;font-weight:normal;font-family:arial;font-size:14px;text-align:center;">'.$comentarios.'</td>
                                    </tr>
                                </table>';
                        
                        $siteKey = "6Lcz1g4TAAAAACHbGw0qhzJR-y8_zARsD7dMObVw";
                        $secret = "6Lcz1g4TAAAAACbFzhBVSRcQDaplP7gK2YRumGUC";
                        $lang = "es";
                        $resp = null;
                        $error = null;
                        $reCaptcha = new ReCaptcha($secret);
                        if ($_POST["g-recaptcha-response"]) {
                            $resp = $reCaptcha->verifyResponse(
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["g-recaptcha-response"]
                            );
                        } else {
                            echo '<div class="boxMensaje">
                                        <div style="color:#333;">Ups, no se ingresó el ReCaptcha!<br>Por favor confirme que es humano :)<br><a href="index.html" style="color:#333;font-weight:bold;">Volver a intentarlo</a></div>
                                  </div>';
                        }
                        if ($resp != null && $resp->success) {
                            if (mail ($to, $subject, $body, $headers)) { 
                                echo '<div class="m-top">
                                <div style="color:#333;">¡Gracias por ponerse en contacto con nosotros!<br>
                                En breve nos comunicaremos con usted.<br>
                                <a href="index.html" style="color:#333;font-weight:bold;" class="m-top">Volver al inicio</a></div>
                               </div>';
                            } else { 
                                echo '<div class="boxMensaje">
                                        <div style="color:#333;">Algo salió mal, inténtelo de nuevo!<br><a href="index.html" style="color:#333;font-weight:bold;">Volver al inicio</a></div>
                                    </div>'; 
                            }
                        } 
                        else {
                            echo '<div class="boxMensaje">
                                        <div style="color:#333;">Error de verificación de ReCaptcha<br><a href="index.html" style="color:#333;font-weight:bold;">Volver al inicio</a></div>
                                </div>';
                        }
                    ?>
                </div>
            </div>
        </div>

        <footer class="container-fluid bg-blue m-top-lg">
            <div class="row">
                <div class="col-md-12 text-center">®Gruas Tecoman 2015</div>
            </div>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="js/vendor/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>

>>>>>>> Added final files to repository
        