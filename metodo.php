<?php
$title="THE GROVE - Curso de Inglês em Florianópolis";
require 'inc/header.php';

if( isset($_GET['page']) ) {
                    $lesson_link = $_GET['page'];
                  } else {
                    $lesson_link = "Lesson:Essentials/1";
                  } 
?>
    <style>
      .errormsg {
        color: red;
        font-size: 20px;
      }

      button {
        margin-top: 6px;
      }

      img {
        margin: 20px 0 35px;
        max-width: 85%;
      }

      h2 {
        font-size: 3em;
        margin-bottom: 1.1em;
        font-weight: 900;
        margin-top: 30px;
      }

      iframe {
        width: 100%;
        height: 850px;
      }  


/*
 * Off Canvas
 * --------------------------------------------------
 */
@media screen and (max-width: 767px) {
  .row-offcanvas {
    position: relative;
    -webkit-transition: all .25s ease-out;
       -moz-transition: all .25s ease-out;
            transition: all .25s ease-out;
  }

  .row-offcanvas-right {
    right: 0;
  }

  .row-offcanvas-left {
    left: 0;
  }

  .row-offcanvas-right
  .sidebar-offcanvas {
    right: -50%; /* 6 columns */
  }

  .row-offcanvas-left
  .sidebar-offcanvas {
    left: -50%; /* 6 columns */
  }

  .row-offcanvas-right.active {
    right: 50%; /* 6 columns */
  }

  .row-offcanvas-left.active {
    left: 50%; /* 6 columns */
  }

  .sidebar-offcanvas {
    position: absolute;
    top: 0;
    width: 50%; /* 6 columns */
  }
}

    </style>

  </head>
  <body>
<?php
require 'inc/menu.php';
?>

      <!-- Sales PAGE START -->

	<div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-lg-12">
          <h2>Veja Uma Lição Por Dentro</h2>
        </div>

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Mostrar menu</button>
          </p>
            <iframe name="ifrm" id="ifrm" src='http://thegrove.com.br/metodo/index.php?title=Lesson:Essentials/1'></iframe>  
          
        </div><!--/span-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <div class="list-group">
            <a href="http://thegrove.com.br/metodo/index.php?title=Lesson:Essentials/1" onclick="return loadIframe('ifrm', this.href);" class="btn btn-primary btn-lg btn-block">Lição 1 - Básico</a>
            <a href="http://thegrove.com.br/metodo/index.php?title=Lesson:How_to_make_the_most_of_your_weekend" onclick="return loadIframe('ifrm', this.href);" class="btn btn-primary btn-lg btn-block" id="intermediario">Lição 1 - Intermediário</a>
            
          </div>
        </div><!--/span-->
      </div><!--/row-->
  
<!-- 	<div class="row">
   <div class="col-md-8">
     <iframe src='http://thegrove.com.br/metodo/index.php?title=Lesson:Essentials/1'></iframe>  
   </div> 

   <div class="col-md-4">
     <button class="btn btn-primary btn-lg btn-block">Lesson 1 - Básico</button>
     <button class="btn btn-lg btn-block">Lesson 1 - Básico</button>
   </div>
  </div> -->

    <!-- Closing DIV of .container in footer.php -->

<script>
  function loadIframe(iframeName, url) {
    var $iframe = $('#' + iframeName);
    if ( $iframe.length ) {
        $iframe.attr('src',url);   
        return false;
    }
    return true;
}
</script>
<?php require 'inc/footer.php'; ?>


