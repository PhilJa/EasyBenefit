<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kinderhilfe | EasyBenefit.de</title>

    <!-- CSS -->
    <link href="/style/css/bootstrap.min.css" rel="stylesheet">
    <link href="/style/css/easybenefit.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
</head>
<body>
  <?php include "../../com/spendenstand.php" ?>
  <!-- Navigation --><?php include "../../style/common/navbar.php" ?>

  <!-- Page Content -->
  <section class="nopadding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <img class="img-responsive" src="/style/img/projekte/0001/header.jpg"/>
        </div>
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /section -->

  <section id="projectcards">
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-sm-8">
          <h1 class="eb-heading"><span>MATUMAINI for africa e.V.</span></h1>
          <p>
            Matumaini bedeutet Hoffnung (Kwisuaheli).</br></br>
            Seinem Namen nach, gibt „Matumaini for Africa e.V.“ den Menschen in Afrika neue Hoffnung.
            Wir wollen durch unsere Projekte die Lebensbedingungen für bedürftige Menschen in Kenia verbessern und sie auf langfristige Sicht unterstützen.
            Die Waisen und Straßenkinder in Kasarani, einem Vorort der kenianischen Hauptstadt Nairobi, liegen uns hierbei besonders am Herzen.
          </p>
        </div><!-- END main -->
        <div class="col-md-3 col-sm-4 sidebar">
          <div class="projectcard">
            <img class="img-responsive img-center" src="/style/img/projekte/0001/logo.jpg" />
            <div class="projectdescription">
              <h1>Kinderhilfe</br><span>MATUMAINI for africa e.V.</span></h1>
            </div>
            <div class="progress-description">
              Aktuell: <?php echo number_format($kinder,2,",","."); ?><span class="pull-right">Ziel: 1000€</span>
            </div>
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $prokinder ?>%;">
                <span class="sr-only">12% abgeschlossen</span>
              </div>
            </div>
          </div>
          <div class="widget">
          <h1 class="eb-heading"><span>Teilen</span></h1>
            <a class="btn btn-sm btn-blue btn-full" href="#" role="button"><i class="fa fa-fw fa-facebook" aria-hidden="true"></i> Facebook</a>
            <a class="btn btn-sm btn-blue btn-full" href="#" role="button"><i class="fa fa-fw fa-twitter" aria-hidden="true"></i></i> Twitter</a>
            <a class="btn btn-sm btn-blue btn-full" href="#" role="button"><i class="fa fa-fw fa-google-plus" aria-hidden="true"></i> Google+</a>
          </div>
          <div class="widget">
            <h1 class="eb-heading"><span>Amazon-Bookmark</span></h1>
            <img style="margin-bottom:10px" src="/style/img/sidebar_amazon.png" class="img-responsive img-center"/>
            <p>Setze folgenden Link als Lesezeichen in deinen Browser. So hilfst du mit jedem deiner Einkäufe zukünftig unseren Kinderhilfsprojekten.</p>
            <input style="margin-bottom:10px" value="http://bit.ly/amazon_kinderhilfe"></input>
            <a class="btn btn-xs btn-blue" href="#" role="button">Mehr erfahren</a>
          </div>
        </div><!-- END sidebar -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /section -->

  <!-- Footer --><?php include "../../style/common/footer.php" ?>

  <!-- jQuery --><script src="/style/js/jquery.js"></script>
  <!-- Bootstrap Core JavaScript --><script src="/style/js/bootstrap.min.js"></script>
</body>
</html>
