<!DOCTYPE html>
<html lang="de">
<head>
    <title>Schenken & Spenden | EasyBenefit.de</title>
    <!-- Common Meta --><?php include_once("../com/common-meta.php") ?>
</head>
<body>
  <!-- Analytics --><?php include_once("../com/analyticstracking.php") ?>
  <!-- Spendenstand --><?php include_once("../com/spendenstand.php") ?>
  <!-- Navigation --><?php include_once("../style/common/navbar.php") ?>

  <!-- Page Content -->
  <section id="hero" class="nopadding">
    <div class="hero-img">
      <img src="/style/img/hero/hero_test.jpg"/>
    </div><!-- /.container -->
    <div class="container">
      <div class="hero-content">
        <h1>Weihnachtsgeschenke kaufen</br>& kostlenlos spenden!</h1>
        <p>Spende bis zu 15% des Kaufpreises an ein Projekt deiner Wahl.</p>
        <a role="button" class="btn btn-blue" href="/shops" alt="Alle Partnershops von EasyBenefit.de">Unsere Partnershops</a>
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /section -->

  <section id="funktion-txt">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h3 class=""><span>Doppelt Freude schenken</span></h3>
          <p>Dieses Weihnachten kannst du mehr aus deinen Geschenken machen.</br>
            Beschenke nicht nur deine Freunde und Verwandten, sondern unterstütze mit jedem Geschenk gemeinnützige Hilfsprojekte.</br>
            <b>Das Beste: <span style="color:#336ba8">Es ist vollkommen kostenlos und funktioniert mit nur 3 Klicks!</span></b>
          </p>
          <h3 class=""><span>So geht's:</span></h3>
          <p>
            Um bis zu 15% des Kaufpreises zu spenden, musst du einfach vor deinem Einkauf den Shop über einen Link von unserer Seite betreten.
            Wir überlassen dir die Wahl für welche Kategorie gespednet werden soll.</br>
            Nachdem du zu deinem Shop weitergeleitet wurdest musst du dich um nichts kümmern. Wir verteieln die Spenden so, wie Ihr es ausgewählt habt.
          </p>
        </div>
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-6 col-sm-4 col-xs-6 smallerpadding">
              <a data-toggle="modal" data-target="#modalamazon">
                <div class="shopcard">
                  <div class="shopimg">
                    <img class="img-responsive" src="/style/img/shops/001.jpg"/>
                  </div>
                  <div class="shop-description">
                    3-10 % werden gespendet
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6 col-sm-4 col-xs-6 smallerpadding">
              <a data-toggle="modal" data-target="#modalmydays">
                <div class="shopcard">
                  <div class="shopimg">
                    <img class="img-responsive" src="/style/img/shops/004.jpg"/>
                  </div>
                  <div class="shop-description">
                    6-11 % werden gespendet
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6 col-sm-4 col-xs-6 smallerpadding">
              <a data-toggle="modal" data-target="#modalflaconi">
                <div class="shopcard">
                  <div class="shopimg">
                    <img class="img-responsive" src="/style/img/shops/006.jpg"/>
                  </div>
                  <div class="shop-description">
                    7 % werden gespendet
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6 col-sm-4 col-xs-6 smallerpadding">
              <a data-toggle="modal" data-target="#modalamorelie">
                <div class="shopcard">
                  <div class="shopimg">
                    <img class="img-responsive" src="/style/img/shops/011.jpg"/>
                  </div>
                  <div class="shop-description">
                    20 % werden gespendet
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6 col-sm-4 col-xs-6 smallerpadding">
              <a data-toggle="modal" data-target="#modaldawanda">
                <div class="shopcard">
                  <div class="shopimg">
                    <img class="img-responsive" src="/style/img/shops/034.png"/>
                  </div>
                  <div class="shop-description">
                    4 % werden gespendet
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6 col-sm-4 col-xs-6 smallerpadding">
              <a data-toggle="modal" data-target="#modalmediamarkt">
                <div class="shopcard">
                  <div class="shopimg">
                    <img class="img-responsive" src="/style/img/shops/051.png"/>
                  </div>
                  <div class="shop-description">
                    4 % werden gespendet
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.container -->
  </section>
  <section id="thema" class="nopadding">
    <div class="container-fluid">
      <div class="row">
        <img src="/style/img/xmas.png" class="img-responsive"/>
      </div>
    </div><!-- /.container -->
  </section><!-- /section -->

  <!-- Footer --><?php include "../style/common/footer.php" ?>
  <script src="/style/js/jquery.js"></script>
  <script src="/style/js/bootstrap.min.js"></script>

  <!-- Modals -->
  <!--Modal Amazon -->
  <div class="modal fade" id="modalamazon" tabindex="-1" role="dialog" aria-labelledby="meinModalLabel">
    <!-- Include Modal --><?php $shop="amazon"; include "../com/modal.php";?><!-- End Modal -->
  </div>
  <!--Modal mydays -->
  <div class="modal fade" id="modalmydays" tabindex="-1" role="dialog" aria-labelledby="meinModalLabel">
    <!-- Include Modal --><?php $shop="mydays"; include "../com/modal.php";?><!-- End Modal -->
  </div>
  <!--Modal Flaconi -->
  <div class="modal fade" id="modalflaconi" tabindex="-1" role="dialog" aria-labelledby="meinModalLabel">
    <!-- Include Modal --><?php $shop="flaconi"; include "../com/modal.php";?><!-- End Modal -->
  </div>
  <!--ModalAmorelie -->
  <div class="modal fade" id="modalamorelie" tabindex="-1" role="dialog" aria-labelledby="meinModalLabel">
  	<!-- Include Modal --> <?php $shop="amorelie"; include "../com/modal.php";?><!-- End Modal -->
  </div>
  <!--ModalDawanda -->
  <div class="modal fade" id="modaldawanda" tabindex="-1" role="dialog" aria-labelledby="meinModalLabel">
  	<!-- Include Modal --><?php $shop="dawanda"; include "../com/modal.php";?><!-- End Modal -->
  </div>
  <!--ModalMediamarkt -->
	<div class="modal fade" id="modalmediamarkt" tabindex="-1" role="dialog" aria-labelledby="meinModalLabel">
  	<!-- Include Modal --><?php	$shop="mediamarkt"; include "../com/modal.php"; ?>
	</div>

</body>
</html>
