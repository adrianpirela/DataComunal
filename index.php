<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>DataComunal</title>
	<link rel="stylesheet" href="css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<link rel="shortcut icon" href="imagenes/miniatura.png">
<body>

<!-- NavBar -->
<nav class="nav-extended #cfd8dc blue-grey lighten-4">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo"><img src="imagenes/logo.png" width="290"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a style="color: black;" href="">Texto1</a></li>
        <li><a style="color: black;" href="">Texto2</a></li>
        <li><a style="color: black;" href="">Texto3</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="">Texto1</a></li>
        <li><a href="">Texto2</a></li>
        <li><a href="">Texto3</a></li>
      </ul>
    </div>
  </nav>


<!-- slider -->
<div class="slider">
  <ul class="slides">
    <li>
      <img src="https://images.unsplash.com/photo-1464817739973-0128fe77aaa1?dpr=1&auto=compress,format&fit=crop&w=1199&h=799&q=80&cs=tinysrgb&crop="> <!-- random image -->
      <div class="caption center-align">
        <h3>This is our big Tagline!</h3>
        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
      </div>
    </li>
    <li>
      <img src="https://ununsplash.imgix.net/photo-1414849424631-8b18529a81ca?q=75&fm=jpg&s=0e993004a2f3704e8f2ad5469315ccb7"> <!-- random image -->
      <div class="caption left-align">
        <h3>Left Aligned Caption</h3>
        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
      </div>
    </li>
    <li>
      <img src="https://ununsplash.imgix.net/uploads/1413259835094dcdeb9d3/6e609595?q=75&fm=jpg&s=6a4fc66161293fc4a43a6ca6f073d1c5"> <!-- random image -->
      <div class="caption right-align">
        <h3>Right Aligned Caption</h3>
        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
      </div>
    </li>
  </ul>
</div>



<br>
<br>
<br>
<br>
<br>
<br>



<!-- footer -->

        <footer class="page-footer #cfd8dc blue-grey lighten-4">
          <div class="container ">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>

</body>
<script src="js/jquery-3.2.1.js"></script>
<script src="js/materialize.min.js"></script>
<script type="text/javascript">
	 $(document).ready(function(){
      $('.slider').slider();
      $(".button-collapse").sideNav();
    });
    
      
</script>

</html>