<DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Uji Level</title>

    <!-- Bootstrap -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
       <link href="style3.css" rel="stylesheet">
        <link rel="stylesheet" href="css/libs/animate.css">
  <link rel="stylesheet" href="css/site.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
     <style>

.wow:first-child {
      visibility: hidden;
    }
  </style>
  <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  </head>
  <body class="body">

  <header>
<!-- Atas -->
<div class="container">
  <div class="row">
    <div class="col-sm-8 media1">
      <div class="media ">
        <img class="mr-3 img1" src="gambar/p.jpg" alt="Generic placeholder image">
          <div class="media-body">
            <h3 class="mt-0 text-white">Galery</h3>
      </div>

<!-- buttom -->
    <div class="col-sm-4 media2">
      <div class="pos-f-t ">
        <div class="collapse" id="navbarToggleExternalContent">
          <div class="bg-transparent p-4">

  <a class="dropdown-item text-primary t " href="index.php">Kembali</a>

 
      </div>
        </div>

  <nav class="navbar navbar-dark bg-transparent ">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
<!-- akhir buttom=n -->
</div>
</div>
<!--bawah-->
</div>
</div>
</div>
</header>



  <!-- Contact Us -->
  <div class="container-fluid kotak">
    <div class="col-md-12 bg-transparent text-light py-5 px-5">
      <h1 class="display-h4 text-center text-white">Contact Us</h1>
      <form>
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="text" class="form-control" id="email" placeholder="name@example.com">
        </div>
        <div class="form-group">
          <label for="subject">Subject</label>
          <input type="text" class="form-control" id="subject" placeholder="Subject">
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea class="form-control" id="message" rows="3">Tulis Disini</textarea>
        </div>
        <button class="btn btn-dark" type="submit">Send</button>
      </form>
    </div>
  </div>

  
<script src="dist/wow.js"></script>
  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
  </script>
  </body>
<html>