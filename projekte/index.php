<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Projekte | EasyBenefit</title>

    <!-- CSS -->
    <link href="/style/css/bootstrap.min.css" rel="stylesheet">
    <link href="/style/css/easybenefit.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
</head>
<body>
  <!-- Spendenstand --><?php include "../com/spendenstand.php" ?>
  <!-- Navigation --><?php include "../style/common/navbar.php" ?>

  <!-- Page Content -->
  <section id="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-5">
          <h1>Projekte</h1>
        </div>
        <div class="col-xs-12 col-sm-7">
          <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">Projekte</li>
          </ol>
        </div>
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /section -->

  <section id="projectcards">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <h1 class="eb-heading"><span>Aktuelle Projekte</span></h1>
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <div class="projectcard">
                <img class="img-responsive" src="/style/img/projekte/projectcard-kinderhilfe.png" />
                <div class="projectdescription">
                  <h1>Kinderhilfe</br><span>MATUMAINI for africa e.V.</span></h1>
                  <p>Gemeinsam mit dem MATUMAINI for africa e.V. finanzieren wir neue Matratzen und Bettlacken für ein Waisenhaus in Kasarani [Kenia] finanzieren.
                    Spendet mit eurem nächsten Einkauf für die Kategorie Kinderhilfe, um dieses Projekt zu unterstützen.</p>
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

              <div class="projectcard">
                <img class="img-responsive" src="/style/img/projekte/projectcard-naturschutz.png" />
                <div class="projectdescription">
                  <h1>Naturschutz</br><span>Projektsuche</span></h1>
                  <p>Wir sind aktuell noch auf der Suche nach einem geeigenten Projekt. Vorschläge oder Bewerbungen können gerne an info@easybenefit.de gerichtet werden.</p>
                </div>
                <div class="progress-description">
                  Aktuell: <?php echo number_format($natur,2,",","."); ?>€
                </div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                    <span class="sr-only">6% abgeschlossen</span>
                  </div>
                </div>
              </div>

              <div class="projectcard">
                <img class="img-responsive" src="/style/img/projekte/projectcard-bildung.png" />
                <div class="projectdescription">
                  <h1>Bildung</br><span>Projektsuche</span></h1>
                  <p>Wir sind aktuell noch auf der Suche nach einem geeigenten Projekt. Vorschläge oder Bewerbungen können gerne an info@easybenefit.de gerichtet werden.</p>
                </div>
                <div class="progress-description">
                  Aktuell: <?php echo number_format($bildung,2,",","."); ?>€
                </div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                    <span class="sr-only">6% abgeschlossen</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-4">
              <div class="projectcard">
                <img class="img-responsive" src="/style/img/projekte/projectcard-seniorenhilfe.png" />
                <div class="projectdescription">
                  <h1>Seniorenhilfe</br><span>Projektsuche</span></h1>
                  <p>Wir sind aktuell noch auf der Suche nach einem geeigenten Projekt. Vorschläge oder Bewerbungen können gerne an info@easybenefit.de gerichtet werden.</p>
                </div>
                <div class="progress-description">
                  Aktuell: <?php echo number_format($senioren,2,",","."); ?>€
                </div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                    <span class="sr-only">6% abgeschlossen</span>
                  </div>
                </div>
              </div>

              <div class="projectcard">
                <img class="img-responsive" src="/style/img/projekte/projectcard-entwicklungshilfe.png" />
                <div class="projectdescription">
                  <h1>Entwicklungshilfe</br><span>Projektsuche</span></h1>
                  <p>Wir sind aktuell noch auf der Suche nach einem geeigenten Projekt. Vorschläge oder Bewerbungen können gerne an info@easybenefit.de gerichtet werden.</p>
                </div>
                <div class="progress-description">
                  Aktuell: <?php echo number_format($entwicklung,2,",","."); ?>€
                </div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                    <span class="sr-only">6% abgeschlossen</span>
                  </div>
                </div>
              </div>

              <div class="projectcard">
                <img class="img-responsive" src="/style/img/projekte/projectcard-armut.png" />
                <div class="projectdescription">
                  <h1>Bedürftigenhilfe</br><span>Projektsuche</span></h1>
                  <p>Wir sind aktuell noch auf der Suche nach einem geeigenten Projekt. Vorschläge oder Bewerbungen können gerne an info@easybenefit.de gerichtet werden.</p>
                </div>
                <div class="progress-description">
                  Aktuell: <?php echo number_format($armut,2,",","."); ?>€
                </div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                    <span class="sr-only">6% abgeschlossen</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-4">
              <div class="projectcard">
                <img class="img-responsive" src="/style/img/projekte/projectcard-tierschutz.png" />
                <div class="projectdescription">
                  <h1>Tierschutz</br><span>Projektsuche</span></h1>
                  <p>Wir sind aktuell noch auf der Suche nach einem geeigenten Projekt. Vorschläge oder Bewerbungen können gerne an info@easybenefit.de gerichtet werden.</p>
                </div>
                <div class="progress-description">
                  Aktuell: <?php echo number_format($tiere,2,",","."); ?>€
                </div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                    <span class="sr-only">0% abgeschlossen</span>
                  </div>
                </div>
              </div>

              <div class="projectcard">
                <img class="img-responsive" src="/style/img/projekte/projectcard-gesundheit.png" />
                <div class="projectdescription">
                  <h1>Gesundheit</br><span>Projektsuche</span></h1>
                  <p>Wir sind aktuell noch auf der Suche nach einem geeigenten Projekt. Vorschläge oder Bewerbungen können gerne an info@easybenefit.de gerichtet werden.</p>
                </div>
                <div class="progress-description">
                  Aktuell: <?php echo number_format($gesundheit,2,",","."); ?>€
                </div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                    <span class="sr-only">6% abgeschlossen</span>
                  </div>
                </div>
              </div>

              <div class="projectcard">
                <img class="img-responsive" src="/style/img/projekte/projectcard-sportsoziales.png" />
                <div class="projectdescription">
                  <h1>Sport & Soziales</br><span>Projektsuche</span></h1>
                  <p>Wir sind aktuell noch auf der Suche nach einem geeigenten Projekt. Vorschläge oder Bewerbungen können gerne an info@easybenefit.de gerichtet werden.</p>
                </div>
                <div class="progress-description">
                  Aktuell: <?php echo number_format($sport,2,",","."); ?>€
                </div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                    <span class="sr-only">6% abgeschlossen</span>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- /.row -->
        </div><!-- END main -->
        <div class="col-md-3 sidebar">
          <div class="widget spendenstand">
            <h1 class="eb-heading"><span>Spendenstand</span></h1>
            <p>Gesamt:</br><span><?php echo number_format($gesamt,2,",","."); ?> €</span></p>
            <p>Bestellte Artikel:</br><span><?php echo $artikel; ?></span></p>
            <p>Ø pro Artikel:</br><span><?php echo number_format($durchschnitt,2,",","."); ?> €</span></p>
            <p>Stand: <?php echo $datum; ?></p>
          </div><!-- /.row -->
          <div class="widget">
            <h1 class="eb-heading"><span>Weitersagen</span></h1>
            <img class="img-responsive" src="/style/img/share_easybenefit.png" style="margin-bottom: 10px;" />
            <a class="btn btn-sm btn-blue btn-full" href="#" role="button"><i class="fa fa-fw fa-facebook" aria-hidden="true"></i> Facebook</a>
            <a class="btn btn-sm btn-blue btn-full" href="#" role="button"><i class="fa fa-fw fa-twitter" aria-hidden="true"></i></i> Twitter</a>
            <a class="btn btn-sm btn-blue btn-full" href="#" role="button"><i class="fa fa-fw fa-google-plus" aria-hidden="true"></i> Google+</a>
          </div><!-- /.row -->
        </div><!-- END sidebar -->

      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /section -->

  <!-- Footer --><?php include "../style/common/footer.php" ?>
  <!-- jQuery --><script src="/style/js/jquery.js"></script>
  <!-- Bootstrap Core JavaScript --><script src="/style/js/bootstrap.min.js"></script>
</body>
</html>
