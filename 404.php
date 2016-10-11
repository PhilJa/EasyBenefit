<!DOCTYPE html>
<html lang="de">
<head>
    <title>OOPS | Error 404 | EasyBenefit</title>
    <!-- Common Meta --><?php include_once("com/common-meta.php") ?>
    <!-- OG -->
  	<meta property="og:title" content="EasyBenefit.de | Online einkaufen & Gutes tun." />
  	<meta property="og:site_name" content="EasyBenefit.de"/>
  	<meta property="og:url" content="https://easybenefit.de" />
  	<meta property="og:description" content="Über EasyBenefit.de kannst du mit jedem deiner Onlineeinkäufe kostenlos einen kleinen Betrag an eine Kategorie deiner Wahl spenden. Es sind nur 3 Klicks, die dir die Möglichkeit geben kostenlos etwas Gutes zu tun."/>
  	<meta property="og:image" content="https://easybenefit.de/style/img/og-easybenefit.png" />
  	<meta property="fb:app_id" content="469470689893966" />
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
  <!-- Analytics --><?php include_once("com/analyticstracking.php") ?>
  <!-- Spendenstand --><?php include_once("com/spendenstand.php") ?>
  <!-- Navigation --><?php include_once("style/common/navbar.php") ?>

  <!-- Page Content -->
  <section id="error404">
    <div class="container">
      <h1 class="">OOPS</h1>
      <div class="row">
        <div class="col-md-2 col-sm-3 col-xs-4">
          <a data-toggle="modal" data-target="#modalamazon" title="Spende mit deinem Einkauf bei Amazon">
            <div class="shopcard">
              <div class="shopimg">
                <img class="img-responsive" src="/style/img/shops/001.jpg" alt="Bei Amazon einkaufen und kostenlos spenden"/>
              </div>
              <div class="shop-description">2-10 %<a class="info" href="/shops/amazon" title="Mehr Infromationen über Charity-Shopping bei Amazon"><i class="fa fa-question-circle-o" aria-hidden="true"></i></a></div>
            </div>
          </a>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-4">
          <a data-toggle="modal" data-target="#modalbahn" title="Spende mit dem Kauf von Bahn Tickets">
            <div class="shopcard">
              <div class="shopimg">
                <img class="img-responsive" src="/style/img/shops/002.jpg" alt="Bahn Tickets kaufen und kostenlos spenden"/>
              </div>
                <div class="shop-description">1-5 €</div>
            </div>
          </a>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-4">
          <a data-toggle="modal" data-target="#modaldocmorris" title="Spende mit deinem Kauf bei Docmorris">
            <div class="shopcard">
              <div class="shopimg">
                <img class="img-responsive" src="/style/img/shops/003.jpg" alt="Bei DocMorris einkaufen und kostenlos spenden"/>
              </div>
                <div class="shop-description">  3-25 %</div>
            </div>
          </a>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-4">
          <a data-toggle="modal" data-target="#modalmydays" title="Spende mit deinem Kauf bei mydays">
            <div class="shopcard">
              <div class="shopimg">
                <img class="img-responsive" src="/style/img/shops/004.jpg" alt="Bei mydays einkaufen und kostenlos spenden"/>
              </div>
                <div class="shop-description">6-11 %</div>
            </div>
          </a>
        </div>
        <div class="col-md-2 hidden-sm col-xs-4">
          <a data-toggle="modal" data-target="#modalrunnerspoint"  title="Spende mit deinem Kauf bei Runners Point">
            <div class="shopcard">
              <div class="shopimg">
                <img class="img-responsive" src="/style/img/shops/005.jpg" alt="Bei Runners Point einkaufen und kostenlos spenden"/>
              </div>
                <div class="shop-description">4 %<a class="info" href="/shops/runnerspoint" title="Mehr Infromationen über Charity-Shopping bei RUNNERS POINT"><i class="fa fa-question-circle-o" aria-hidden="true"></i></a></div>
            </div>
          </a>
        </div>
        <div class="col-md-2 hidden-sm col-xs-4">
          <a data-toggle="modal" data-target="#modalflaconi"  title="Spende mit deinem Kauf bei Flaconi">
            <div class="shopcard">
              <div class="shopimg">
                <img class="img-responsive" src="/style/img/shops/006.jpg" alt="Bei Flaconi einkaufen und kostenlos spenden"/>
              </div>
                <div class="shop-description">7 %</div>
            </div>
          </a>
        </div>
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /section -->

  <!-- Footer --><?php include "style/common/footer.php" ?>
  <!-- jQuery --><script src="/style/js/jquery.js"></script>
  <!-- Bootstrap Core JavaScript --><script src="/style/js/bootstrap.min.js"></script>
</body>
</html>
