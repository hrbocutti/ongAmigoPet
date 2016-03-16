<!DOCTYPE html>
<html lang="en">
  
<head>
<meta http-equiv="Content-Type" content="text/html;"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>ONG Amigo PET</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
 <link href="css/bootstrap-theme.min.css" rel="stylesheet">
 <link href="css/theme.css" rel="stylesheet">
 <link rel="stylesheet" href="css/font-awesome.min.css">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

 <script src="js/commons.js"></script>
 <script src="js/buscaEndereco.js"></script>
 
 <script type="text/javascript" src="js/mascaraValidacao.js"/></script>


</head>

  <body>
    
    <div class="brand">Adote Um Amigo</div>
    <div class="address-bar"></div>

     <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">Quem Somos</a>
                    </li>
                    <li>
                        <a href="blog.html">Quem Ajudamos</a>
                    </li>
                    <li>
                        <a href="contact.html">Contato</a>
                    </li>
                    <li>
                        <a href="contact.html">Como Ajudar</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    

    <div class="container" role="main">

    <div class="row">

      <div id="carousel-example-generic" class="carousel slide">

        <!-- Indicators -->
        <ol class="carousel-indicators hidden-xs">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

    	 <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img class="img-responsive img-full img-slide" src="img/slide-1.jpg" alt="">
            </div>
            <div class="item">
                <img class="img-responsive img-full img-slide" src="img/slide-2.jpg" alt="">
            </div>
            <div class="item">
                <img class="img-responsive img-full img-slide" src="img/slide-3.jpg" alt="">
            </div>
        </div>

         <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="icon-next"></span>
        </a>

      </div>


  	</div>

    <div class="row thumbnail">
      
      <div class="col-sm-4">
        <img src="img/thumbnail-1.jpg" alt="...">
        <div class="caption">
        <h3>Adote</h3>
        <p>...</p>
        </div>
      </div>

      <div class="col-sm-4">
        <img src="img/thumbnail-2.jpg" alt="...">
        <div class="caption">
        <h3>Apadrinhe</h3>
        <p>...</p>
        </div>
      </div>

      <div class="col-sm-4">
      
        <img src="img/thumbnail-3.jpg" alt="...">
        <div class="caption">
        <h3>Doações</h3>
        <p>...</p>
        </div>
      </div>

    
    </div>

    </div> <!-- /container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Amigo Pet 2016</p>
                </div>
            </div>
        </div>
    </footer>

	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <script>
    $('.carousel').carousel({
        interval: 4000 //changes the speed
    })
    </script>

</body>
</html>