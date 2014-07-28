<?php 

// Redirect users coming from specific sites to special pages

// $referrer = $_SERVER['HTTP_REFERER'];
// if (preg_match("/www.groupon.com.br/",$referrer)) {
//     header('Location: http://www.thegrove.com.br/groupon.php');
// // } elseif (preg_match("/site2.com/",$referrer)) {
// //       header('Location: http://www.customercare.com/page-site2.html');
// } else {
//     header('Location: http://www.thegrove.com.br/');
// };


// Creates direct access to promo in case the visitor has already been there 

 if( isset($_COOKIE['promo']) ) {
        $promo = $_COOKIE['promo'];
      } else {
        $promo = 'skype.php';
      } 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="./ico/favicon.ico">

    <title>THE GROVE - Curso de Inglês em Florianópolis</title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<!--     <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-53152602-1', 'auto');
      ga('send', 'pageview');

    </script>