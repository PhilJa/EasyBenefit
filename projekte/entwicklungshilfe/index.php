<!DOCTYPE html>
<html lang="de">
<head>
    <title>2aid.org | Entwicklungshilfe | EasyBenefit.de</title>
    <!-- Common Meta --><?php include_once("../../com/common-meta.php") ?>

    <!-- OG -->
  	<meta property="og:title" content="EasyBenefit | MATUMAINI for africa" />
  	<meta property="og:url" content="https://www.easybenefit.de/kinderhilfe" />
  	<meta property="og:description" content="Gemeinsam mit dem MATUMAINI for africa e.V. unterstützt EasyBenefit das Ukweli Home of Hope Waisenhaus in Kenia (Nairobi). SPENDE JETZT, KOSTENLOS!" />
  	<meta property="og:image" content="https://www.easybenefit.de/style/img/projekte/0001/og.png" />
</head>
<body>
  <!-- Analytics --><?php include_once("../../com/analyticstracking.php") ?>
  <!-- Spendenstand --><?php include_once("../../com/spendenstand.php") ?>
  <!-- Navigation --><?php include_once("../../style/common/navbar.php") ?>

  <!-- Page Content -->
  <section id="project-site">
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-sm-8">
          <div class="row">
            <div class="col-md-12">
              <img class="img-responsive project-header" src="/style/img/projekte/0002/header.jpg"/>
            </div>
          </div><!-- /.row -->
          <h1 class="eb-heading"><span>2aid.org</span></h1>
          <p>
            Matumaini bedeutet Hoffnung (Kwisuaheli).</br></br>
            Seinem Namen nach, gibt „Matumaini for Africa e.V.“ den Menschen in Afrika neue Hoffnung.
            Wir wollen durch unsere Projekte die Lebensbedingungen für bedürftige Menschen in Kenia verbessern und sie auf langfristige Sicht unterstützen.
            Die Waisen und Straßenkinder in Kasarani, einem Vorort der kenianischen Hauptstadt Nairobi, liegen uns hierbei besonders am Herzen.
            </br></br>
            "Wichtig ist nicht wo du bist, sondern was du tust wo du bist." (Kenianisches Sprichwort)
            </br></br>
            Der Vorstand des Vereins besteht aus jungen Erwachsenen, die sich mit ihren kreativen Ideen und produktiven Gedanken ehrenamtlich engagieren.
            Durch die ehrenamtliche Mitarbeit der Mitlgieder, entstehen keinerlei Verwaltungskosten oder sonstige Ausgaben. So ist es möglich die Spenden zu 100% bei den betroffenen Personen ankommen.
            Hilfsbedürftige Menschen in Kenia, die unverschuldet in Not geraten sind erhalte damit Hilfe zur Selbsthilfe. Vollständige Transparenz ist hierbei das höchste Gebot.
            </br></br>
            Die gesammelten Einnahmen dieser Kategorie gehen an das "Ukweli Home of Hope" Waisenhaus in Kenia (Nairobi). Hier werden 40 Kinder von ehrenamtlich tätigen Klosterschwestern betreut. Das gespendete Geld soll den Kindern eine bessere Zukunft ermöglichen.
            Es wird investiert in lebensnotwendige Güter wie Essen, Schlafgelegeneheiten oder sanitäre Einrichtugnen und schafft außerdem die Möglichkeit einer Schulausbildung. All diese Aktionen werden durch den Verein Matumaini for Africa e.V. vor Ort durchgeführt.
            </br></br>
            Weitere Informationen findet Ihr unter <a href="http://www.matumaini-for-africa.org" alt="MATUMAINI for africa e.V.">www.matumaini-for-africa.org</a>
          </p>
        </div><!-- END main -->
        <div class="col-md-3 col-sm-4 sidebar">
          <div class="projectcard">
            <img class="img-responsive img-center" src="/style/img/projekte/0002/logo.jpg" />
            <div class="projectdescription">
              <h1>Entwicklungshilfe</br><span>2aid.org e.V.</span></h1>
            </div>
            <div class="progress-description">
              Aktuell: <?php echo number_format($entwicklung,2,",","."); ?><span class="pull-right">Ziel: <?php echo $zielentwicklung ?>€</span>
            </div>
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $proentwicklung ?>%;">
                <span class="sr-only"><?php echo $proentwicklung ?>% abgeschlossen</span>
              </div>
            </div>
          </div>
          <div class="widget">
            <h1 class="eb-heading"><span>Amazon-Charity-Bookmark</span></h1>
            <img style="margin-bottom:10px" src="/style/img/sidebar_amazon.png" class="img-responsive img-center"/>
            <p>Setze folgenden Link als Lesezeichen in deinen Browser. So hilfst du mit jedem deiner Einkäufe zukünftig unseren Kinderhilfsprojekten.</p>
            <input style="margin-bottom:10px" value="http://bit.ly/amazon_entwicklungshilfe"></input>
            <a class="btn btn-xs btn-blue" href="#" role="button">Mehr erfahren</a>
          </div>
          <div class="widget">
            <h1 class="eb-heading"><span>Teilen</span></h1>
            <a class="btn btn-sm btn-blue btn-full" href="http://www.facebook.com/sharer.php?u=https://easybenefit.de/projekte/kinderhilfe" title="Auf Facebook teilen" target="_blank" role="button"><i class="fa fa-fw fa-facebook" aria-hidden="true"></i> Facebook</a>
            <a class="btn btn-sm btn-blue btn-full" href="https://twitter.com/share?url=https://easybenefit.de/projekte/kinderhilfe&amp;hashtags=easybenefit" role="button"><i class="fa fa-fw fa-twitter" aria-hidden="true"></i></i> Twitter</a>
            <a class="btn btn-sm btn-blue btn-full" href="https://plus.google.com/share?url=https://easybenefit.de/projekte/kinderhilfe" title="Auf Google+ teilen" role="button"><i class="fa fa-fw fa-google-plus" aria-hidden="true"></i> Google+</a>
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
