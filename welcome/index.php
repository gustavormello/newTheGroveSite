<?php
$title="THE GROVE - Curso de Inglês em Florianópolis";
require 'inc/header.php';
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
        font-size: 60px;
        margin: 10px 0 30px;
      }
    </style>

  </head>
  <body>
<?php
require 'inc/menu.php';
?>

      <!-- Sales PAGE START -->

	<div class="container">

		<div class="row">
			<div class="col-md-6 col-md-offset-3">

        <h2 class="text-center"><b>Sucesso!</b> Compra realizada.</h2>

     




			</div> <!-- Col -->			
		</div> <!-- Row -->
		

      <hr class="featurette-divider">

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Voltar ao início</a></p>
        <p>&copy; 2014 The Grove Academia de Idiomas</p>
      </footer>

    </div><!-- /.container -->




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/jquery.json-2.4.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/jquery.validate.min.js"></script>

		<script>
			$('form').on('submit', function(e) {
				var code = $(this).find('#promocode').val().toUpperCase();
				if ((code) == 'SK10') {
					window.location.href = './skype65.php';
				} else if ((code) == 'SK20') {
					window.location.href = './skype75.php';
				} else if ((code) == 'SK30') {
					window.location.href = './skype85.php';
        } else if ((code) == 'BOSTON') {
          window.location.href = './prices.php';
				} else {
					$( "p.errormsg" ).html( "Código promocional inexistente." ).show().fadeOut( 3000 );
				}
				e.preventDefault();
			});

		</script>

  </body>
</html>



