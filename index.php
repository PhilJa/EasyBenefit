<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EasyBenefit | Online einkaufen & Gutes tun.</title>

    <!-- OG -->
  	<meta property="og:title" content="EasyBenefit.de | Online einkaufen & Gutes tun." />
  	<meta property="og:site_name" content="EasyBenefit.de"/>
  	<meta property="og:url" content="http://dev.easybenefit.de" />
  	<meta property="og:description" content="Über EasyBenefit.de kannst du mit jedem deiner Onlineeinkäufe kostenlos einen kleinen Betrag an eine Kategorie deiner Wahl spenden. Es sind nur 3 Klicks, die dir die Möglichkeit geben kostenlos etwas Gutes zu tun."/>
  	<meta property="og:image" content="http://dev.easybenefit.de/style/img/share_easybenefit.png" />
  	<meta property="fb:app_id" content="469470689893966" />

    <!-- CSS -->
    <link href="/style/css/bootstrap.min.css" rel="stylesheet">
    <link href="/style/css/easybenefit.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
</head>
<body>
  <!-- Spendenstand --><?php include "com/spendenstand.php" ?>
  <!-- Navigation --><?php include "style/common/navbar.php" ?>

  <!-- Page Content -->
  <section class="nopadding">
    <div class="container-fluid">
      <div class="row">
          <img class="img-responsive" src="/style/img/header/header_009.png"/>
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /section -->

  <section id="home-shops">
    <div class="container">
      <h1 class="eb-heading"><span>Beliebte Shops</span></h1>
      <div class="row">
        <div class="col-md-2 col-sm-3 col-xs-4">
          <a data-toggle="modal" data-target="#modalamazon">
            <div class="shopcard">
              <div class="shopimg">
                <img class="img-responsive" src="/style/img/shops/001.jpg"/>
              </div>
              <div class="shop-description">3-10 %<a class="info" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i></a></div>
            </div>
          </a>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-4">
          <a data-toggle="modal" data-target="#modalbahn">
            <div class="shopcard">
              <div class="shopimg">
                <img class="img-responsive" src="/style/img/shops/002.png"/>
              </div>
                <div class="shop-description">1-5 €<span class="pull-right"><a class="info" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i></a></span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-4">
          <a data-toggle="modal" data-target="#modaldocmorris">
            <div class="shopcard">
              <div class="shopimg">
                <img class="img-responsive" src="/style/img/shops/003.jpg"/>
              </div>
                <div class="shop-description">  3-25 %<span class="pull-right"><a class="info" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i></a></span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-4">
          <a data-toggle="modal" data-target="#modalmydays">
            <div class="shopcard">
              <div class="shopimg">
                <img class="img-responsive" src="/style/img/shops/004.jpg"/>
              </div>
                <div class="shop-description">6-11 %<span class="pull-right"><a class="info" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i></a></span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-2 hidden-sm col-xs-4">
          <a data-toggle="modal" data-target="#modalrunnerspoint">
            <div class="shopcard">
              <div class="shopimg">
                <img class="img-responsive" src="/style/img/shops/005.jpg"/>
              </div>
                <div class="shop-description">4 %<span class="pull-right"><a class="info" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i></a></span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-2 hidden-sm col-xs-4">
          <a data-toggle="modal" data-target="#modalflaconi">
            <div class="shopcard">
              <div class="shopimg">
                <img class="img-responsive" src="/style/img/shops/006.jpg"/>
              </div>
                <div class="shop-description">7 %<span class="pull-right"><a class="info" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i></a></span>
              </div>
            </div>
          </a>
        </div>
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /section -->

  <section id="home-funktion" class="akzent border">
    <div class="container">
      <h1 class="#">So funktioniert's</h1>
      <p class="#">
        Spende kostenlos mit jedem Onlineeinkauf.</br>
        Mit nur 3 einfachen Schritten machst du aus deinem Einkauf eine gute Tat.
      </p>
      <div class="row">
				<div class="col-md-4 col-sm-12">
					<div class="funktion-icon">
						<i class="fa fa-shopping-cart fa-4x"></i>
					</div>
					<div class="funktion-txt">
						<h2>1. Shop auswählen</h2>
						<p>
							Wähle deinen Onlineshop aus der Liste unserer Partnershops.
							Wir arbeiten bereits mit über 75+ Shops zusammen und regelmäßig kommen neue dazu.
							Für jeden Bedarf ist etwas dabei!
						</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="funktion-icon">
						<i class="fa fa-users fa-4x"></i>
					</div>
					<div class="funktion-txt">
						<h2>2. Spendenziel aussuchen</h2>
						<p>Du entscheidest für was du spenden möchtest. Um dir die Auswahl zu erleichtern, sammeln wir spenden in neun übersichtlichen Kategorien. Z.B. Kinderhilfe, Naturschutz oder Gesundheit.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="funktion-icon">
						<i class="fa fa-heart fa-4x"></i>
					</div>
					<div class="funktion-txt">
						<h2>3. Shoppen & Gutes tun</h2>
						<p>
							Nach deiner Auswahl leiten wir dich direkt weiter. Du musst nichts weiter tun, als wie gewohnt einzukaufen.
							Dank deines Einkaufes erhalten wir eine Provision, welche wir an ein passendes gemeinnütziges Projekt weiterleiten.
						</p>
					</div>
				</div>
			</div>
    </div>
  </section>

  <section id="home-progress">
    <div class="container">
      <h1 class="#"><b><?php echo number_format($gesamt,2,",","."); ?> €</b></br>Gesamt Spendenstand</h1>
      <h2 class="#">WOW! Danke für eine Unterstützung, weiter so.</h1>
    </div>
  </section>

  <section id="home-projekte">
    <div class="container">
      <h1 class="eb-heading"><span>Aktuelle Projekte</span></h1>
      <div class="row">
				<div class="col-md-3 col-sm-3">
          <div class="projectcard">
            <img class="img-responsive" src="/style/img/projekte/projectcard-kinderhilfe.png" />
            <div class="projectdescription">
              <h1>Kinderhilfe</br><span>MATUMAINI for africa e.V.</span></h1>
              <p>Die gesammelten Einnahme gehen an das Ukweli Home of Hope Waisenahus in Nairobi (Kenia). Hier werden 40 Kindervon ehrenamtlich tätigen Klosterschwestern betreut.</p>
                <a class="btn btn-xs btn-blue" href="/projekte/kinderhilfe" role="button">Mehr erfahren</a>
            </div>
            <div class="progress-description">
              Aktuell: <?php echo number_format($kinder,2,",","."); ?>€<span class="pull-right">Ziel: <?php echo number_format($zielkinder,0,",",".") ?>€</span>
            </div>
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format($prokinder,0) ?>%;">
                <span class="sr-only"><?php echo number_format($prokinder,0) ?>% abgeschlossen</span>
              </div>
            </div>
          </div>
				</div>
				<div class="col-md-3 col-sm-3">
          <div class="projectcard">
            <img class="img-responsive" src="/style/img/projekte/projectcard-armut.png" />
            <div class="projectdescription">
              <h1>Armut</br><span>Projektsuche</span></h1>
              <p>Aktuell sind wir auf Suche nach einem geeignetem Projekt für diese Kategorie.</br>Vorschläge können gerne an <a href="mailto:info@easybenefit.de">info@easybenefit.de</a> gerichtet werden.</p>
            </div>
            <div class="progress-description">
              Aktuell: <?php echo number_format($armut,2,",","."); ?>€<span class="pull-right">Ziel: <?php echo number_format($zielarmut,0,",",".") ?>€</span>
            </div>
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format($proarmut,0) ?>%;">
                <span class="sr-only"><?php echo number_format($proarmut,0) ?>% abgeschlossen</span>
              </div>
            </div>
          </div>
				</div>
				<div class="col-md-3 col-sm-3">
          <div class="projectcard">
            <img class="img-responsive" src="/style/img/projekte/projectcard-tierschutz.png" />
            <div class="projectdescription">
              <h1>Tierschutz</br><span>Projektsuche</span></h1>
              <p>Aktuell sind wir auf Suche nach einem geeignetem Projekt für diese Kategorie.</br>Vorschläge können gerne an <a href="mailto:info@easybenefit.de">info@easybenefit.de</a> gerichtet werden.</p>
            </div>
            <div class="progress-description">
              Aktuell: <?php echo number_format($tiere,2,",","."); ?>€<span class="pull-right">Ziel: <?php echo number_format($zieltiere,0,",",".") ?>€</span>
            </div>
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format($protiere,0) ?>%;">
                <span class="sr-only"><?php echo number_format($protiere,0) ?>% abgeschlossen</span>
              </div>
            </div>
          </div>
				</div>
        <div class="col-md-3 col-sm-3">
          <div class="projectcard">
            <img class="img-responsive" src="/style/img/projekte/projectcard-gesundheit.png" />
            <div class="projectdescription">
              <h1>Gesundheit</br><span>Projektsuche</span></h1>
              <p>Aktuell sind wir auf Suche nach einem geeignetem Projekt für diese Kategorie.</br>Vorschläge können gerne an <a href="mailto:info@easybenefit.de">info@easybenefit.de</a> gerichtet werden.</p>
            </div>
            <div class="progress-description">
              Aktuell: <?php echo number_format($gesundheit,2,",","."); ?>€<span class="pull-right">Ziel: <?php echo number_format($zielgesundheit,0,",",".") ?>€</span>
            </div>
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format($progesundheit,0) ?>%;">
                <span class="sr-only"><?php echo number_format($progesundheit,0) ?>% abgeschlossen</span>
              </div>
            </div>
          </div>
				</div>
			</div>
    </div>
  </section>

  <!-- Footer --><?php include "style/common/footer.php" ?>

  <!-- jQuery --><script src="/style/js/jquery.js"></script>
  <!-- Bootstrap Core JavaScript --><script src="/style/js/bootstrap.min.js"></script>

<!-- Modals -->
<div class="modal fade" id="modalamazon" tabindex="-1" role="dialog" aria-labelledby="meinModalLabel">
  <!-- Include Modal --><?php $shop="amazon"; include "com/modal.php";?><!-- End Modal -->
</div>
<div class="modal fade" id="modalbahn" tabindex="-1" role="dialog" aria-labelledby="meinModalLabel">
  <!-- Include Modal --><?php $shop="bahn"; include "com/modal.php";?><!-- End Modal -->
</div>
<div class="modal fade" id="modaldocmorris" tabindex="-1" role="dialog" aria-labelledby="meinModalLabel">
  <!-- Include Modal --><?php $shop="docmorris"; include "com/modal.php";?><!-- End Modal -->
</div>
<div class="modal fade" id="modalmydays" tabindex="-1" role="dialog" aria-labelledby="meinModalLabel">
  <!-- Include Modal --><?php $shop="mydays"; include "com/modal.php";?><!-- End Modal -->
</div>
<div class="modal fade" id="modalrunnerspoint" tabindex="-1" role="dialog" aria-labelledby="meinModalLabel">
  <!-- Include Modal --><?php $shop="runnerspoint"; include "com/modal.php";?><!-- End Modal -->
</div>
<div class="modal fade" id="modalflaconi" tabindex="-1" role="dialog" aria-labelledby="meinModalLabel">
  <!-- Include Modal --><?php $shop="flaconi"; include "com/modal.php";?><!-- End Modal -->
</div>

</body>
</html>
