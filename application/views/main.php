<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title?></title>
    <meta name="keywords" content="<?=$meta_keywords?>" >
    <meta name="description" content="<?=HTML::chars($meta_description)?>" >
    <meta name="copyright" content="<?=HTML::chars($meta_copyright)?>" >
    <meta name="author" content="open-classifieds.com">
    <link rel="icon" href="http://open-classifieds.com/wp-content/uploads/2014/08/favicon.ico">

    <!-- Bootstrap core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.2/lumen/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style type="text/css">
        /* Space out content a bit */
        body {
          padding-top: 20px;
          padding-bottom: 20px;
        }

        /* Everything but the jumbotron gets side spacing for mobile first views */
        .header,
        .marketing,
        .footer {
          padding-right: 15px;
          padding-left: 15px;
        }

        /* Custom page header */
        .header {
          border-bottom: 1px solid #e5e5e5;
        }
        /* Make the masthead heading the same height as the navigation */
        .header h3 {
          padding-bottom: 19px;
          margin-top: 0;
          margin-bottom: 0;
          line-height: 40px;
        }

        /* Custom page footer */
        .footer {
          padding-top: 19px;
          color: #777;
          border-top: 1px solid #e5e5e5;
        }

        /* Customize container */
        @media (min-width: 960px) {
          .container {
            max-width: 960px;
          }
        }
        .container-narrow > hr {
          margin: 30px 0;
        }

        /* Main marketing message and sign up button */
        .jumbotron {
          text-align: center;
          border-bottom: 1px solid #e5e5e5;
        }
        .jumbotron .btn {
          padding: 14px 24px;
          font-size: 21px;
        }

        /* Supporting marketing content */
        .marketing {
          margin: 40px 0;
        }
        .marketing p + h4 {
          margin-top: 28px;
        }

        /* Responsive: Portrait tablets and up */
        @media screen and (min-width: 768px) {
          /* Remove the padding we set earlier */
          .header,
          .marketing,
          .footer {
            padding-right: 0;
            padding-left: 0;
          }
          /* Space out the masthead */
          .header {
            margin-bottom: 30px;
          }
          /* Remove the bottom border on the jumbotron for visual effect */
          .jumbotron {
            border-bottom: 0;
          }
        }
    </style>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/jquery.chained/0.9.9/jquery.chained.remote.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-4562297-12', 'auto');
      ga('send', 'pageview');

    </script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

    <?=$header?>

    <?=$content?>

    <?=$footer?>

    </div> <!-- /container -->


  </body>
</html>
