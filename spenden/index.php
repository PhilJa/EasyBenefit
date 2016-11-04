<!DOCTYPE html>
<html lang="de">
<head>
    <title>Spenden | EasyBenefit.de</title>
    <!-- Common Meta --><?php include_once("../com/common-meta.php") ?>

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>
  <!-- Analytics --><?php include_once("../com/analyticstracking.php") ?>
  <!-- Navigation --><?php include_once("../style/common/navbar.php") ?>

  <!-- Page Content -->
  <section class="pattern" style="height: 60px"></section>

  <section id="funktion-txt">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 style="font-family:Montserrat; font-weight:600">Hilf uns, alles zu geben!</h1>
          <img src="/style/img/spenden.png" class="img-responsive"/>
          <p>Wir arbeiten täglich daran unsere Plattform zu verbessern und weiterzuentwickeln. Nur so können wir langfristig etwas bewirken.
          Doch auch für uns entstehen laufende Kosten.</br>
          Damit wir unsere Projekte erfolgreich finanziren können...</p>
        </div>
        <div class="col-md-6">
          <script type="text/javascript">
          /* Configure at https://www.betterplace.org/de/projects/49218-kostenlos-spenden-wir-machen-s-moglich-unterstutze-unsere-arbeit/manage/iframe_donation_form/new */
          var _bp_iframe        = _bp_iframe || {};
          _bp_iframe.project_id = 49218; /* REQUIRED */
          _bp_iframe.lang       = 'de'; /* Language of the form */
          _bp_iframe.width = 600; /* Custom iframe-tag-width, integer */
          _bp_iframe.color = '336ba8'; /* Button and banderole color, hex without "#" */
          _bp_iframe.background_color = 'ffffff'; /* Background-color, hex without "#" */
          _bp_iframe.default_amount = 20; /* Donation-amount, integer 1-99 */
          _bp_iframe.default_data_transfer_accepted = true; /* true (default), false */
          _bp_iframe.recurring_interval = 'single'; /* Interval for recurring donations, string out of ["single", "monthly", "quarter_yearly", "half_yearly", "yearly"] */
          _bp_iframe.bottom_logo = true;
          (function() {
            var bp = document.createElement('script'); bp.type = 'text/javascript'; bp.async = true;
            bp.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'asset1.betterplace.org/assets/load_donation_iframe.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(bp, s);
          })();
          </script>
          <div id="betterplace_donation_iframe" style="background: transparent url('https://www.betterplace.org/assets/new_spinner.gif') 275px 20px no-repeat;"><strong><a href="https://www.betterplace.org/de/projects/49218-kostenlos-spenden-wir-machen-s-moglich-unterstutze-unsere-arbeit/donations/new">Jetzt Spenden für „Kostenlos Spenden, wir machen's möglich! Unterstütze unsere Arbeit.“ bei unserem Partner betterplace.org</a></strong></div>
        </div>
      </div>
    </div><!-- /.container -->
  </section>
  
  <section id="funktion-geld" class="akzent border"><!-- /section -->
    <div class="container">
      <h2 class="eb-heading"><span>Wieviel wird gespendet?</span></h2>
      <div class="row">
        <div class="col-sm-8">
          <p>Für deinen Einkauf über unsere Links zahlen unsere Partnershops etwa 10%* des Kaufpreises an EasyBenefit.
            90% dieser Provision spenden wir an geeignete Projekte der von dir gewählten Kategorie. Die restlichen 10% werden benötigt um EasyBenefit zu betreiben und weiterzuentwickeln.</p>
          <h3>Ein Beispiel</br>Du kaufst einen Artikel für 30€:</h3>
          <p><b>30€ Einkaufswert</b></br>
          <b>2,70€ Spende für deine Kategorie</b></br>
            0,30€ zur Weiterentwicklung von EasyBenefit</br></br>
          </p>
          <p style="font-size:11px">*Die tatsächliche ausgezahlten Provisionen schwanken je nach Shop und bestelltem Artikel. Detailierte Darstellungen wie viel Prozent einzelne Shops zahlen, findet Ihr auf der Shopübersicht.</p>
        </div>
        <div class="col-sm-4 hidden-sm hidden-xs">
          <img class="img-responsive img-center" src="/style/img/euro.png" alt="90% der Einnhamen werden gespendet"/>
        </div>
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /section -->

  <!-- Footer --><?php include "../style/common/footer.php" ?>

  <script src="/style/js/jquery.js"></script>
  <script src="/style/js/bootstrap.min.js"></script>
</body>
</html>
