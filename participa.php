<?php 
if(isset($_POST["nombre"])){
	
}
/*
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Participa</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_24.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <!-- 
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
     -->
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
</head>
<body>
<div class="sub-pages">
   <header>                   	
      <h1><a href="index.html"><img src="images/logo.png" alt=""></a></h1> 
      <nav>  
        <ul class="menu">
              <li><a href="index.html">Inicio</a></li>
              <li><a href="iglesia.html">Iglesia</a></li>
              <li><a href="banquete.html">Banquete</a></li>
              <li><a href="vuelos.html">Vuelos</a></li>
              <li><a href="hoteles.html">Hoteles</a></li>
              <li class="current"><a href="participa.php">Participa</a></li>
          </ul>
      </nav>
    </header> 
</div>     
  <!--==============================content================================-->
    <section id="content">
    	<div class="container_24">
        	<div class="grid_11 suffix_1">
            	<div class="top-1">
                    <h4 class="h4-border">
                    	<img src="images/pentagrama.png" alt="" style="margin:-15px 10px 0 10px"> La música:
                    </h4>
                    <form id="form" method="post">
                      <fieldset>
                        <label><strong>Tu nombre:</strong><input type="text" value="" name="nombre"><strong class="clear"></strong></label>
                        <label><strong>Canción:</strong><input type="text" value="" name="cancion"><strong class="clear"></strong></label>
                        <label><strong>Artista:</strong><input type="text" value="" name="artista"><strong class="clear"></strong></label>
                        <strong class="clear"></strong>
                        <div class="btns">
                        	<a href="#" class="link" id="enviar_musica">Enviar</a>
                        </div>
                        <script>
	                        $( document ).ready(function() {
	                            $("#enviar_musica").click(function() {
	                            	$("#form").submit();
	                            });
	                        });
                        </script>
                      </fieldset>  
                    </form> 
				</div>
    		</div>  
            <div class="grid_1">
            	<div class="line-5">&nbsp;</div>
            </div>
            <div class="grid_11">
            	<div class="top-1">
                    <h4 class="h4-border">
                    	<img src="images/cubata.png" alt="" style="margin:-15px 10px 0 10px"> <strong>La bebida:</strong>
                    </h4>
                    <form id="form" method="post">
                      <fieldset>
                        <label><strong>Tu nombre:</strong><input type="text" value="" name="nombre"><strong class="clear"></strong></label>
                        <label><strong>Bebida:</strong><input type="text" value="" name="cancion"><strong class="clear"></strong></label>
                        <strong class="clear"></strong>
                        <div class="btns">
                        	<a href="#" class="link" id="enviar_musica">Enviar</a>
                        </div>
                        <script>
	                        $( document ).ready(function() {
	                            $("#enviar_musica").click(function() {
	                            	$("#form").submit();
	                            });
	                        });
                        </script>
                      </fieldset>  
                    </form> 
                </div>
            </div>        
            <div class="clear"></div>
        </div>
    </section> 
<!--==============================footer=================================-->
  <footer>
      <div class="soc-icons"><a href="#"><img src="images/icon-1.png" alt=""></a><a href="#"><img src="images/icon-2.png" alt=""></a><a href="#"><img src="images/icon-3.png" alt=""></a></div>
  </footer>	
</body>
</html>