<!DOCTYPE html>
<html lang="de">
<head>
    <title>Modeshops | EasyBenefit.de</title>
    <!-- Common Meta --><?php include_once("../../com/common-meta.php") ?>
</head>
<body>
  <!-- Analytics --><?php include_once("../../com/analyticstracking.php") ?>
  <!-- Spendenstand --><?php include_once("../../com/spendenstand.php") ?>
  <!-- Navigation --><?php include_once("../../style/common/navbar.php") ?>

  <!-- Page Content -->
  <section id="hero" class="nopadding">
    <div class="hero-img">
      <img src="/style/img/hero/hero_mode.jpg"/>
    </div><!-- /.container -->
    <div class="container">
      <div class="hero-content">
        <h1>MODE ONLINE KAUFEN</br>& KOSTENLOS SPENDEN!</h1>
        <p>Spende bis zu 15% des Kaufpreises an ein Projekt deiner Wahl.</p>
        <a role="button" class="btn btn-blue" href="/shops" alt="Alle Partnershops von EasyBenefit.de">Weitere Partnershops</a>
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /section -->

  <section id="funktion-txt">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h3 class=""><span>Nicht jeder kann sich schöne Mode leisten</span></h3>
          <p>Jährlich werden in Deutschland mehere Millionen Euro im Onlinehandel für Kleidung umgesetzt.</br>
            Oft wird berichtet, dass die Produktion der verkauften Textilien unter menschenunwürdigen Bedingungen geschieht.</br></br>
            Klar ist aber auch, dass wir Kleidung brauchen. Deshalb geben wir dir die Möglichkeit mit dem Kauf von Mode und Fashion Artikeln bei unseren Partnern einen Teil des Kaufpreises zu einer Kostenlosen Spende zu machen.</br></br>
            In unserer Projektkategorie Armutsbekämpfung nutzen wir das gesammelte Geld, um vor allem in ärmeren Ländern dieser Welt dafür zu sorgen, dass sich jeder Mensch einen annehmbaren Lebensstandard sichern kann.</br></br>
            <b>Das Beste: <span style="color:#336ba8">Es ist vollkommen kostenlos und funktioniert mit nur 3 Klicks!</span></b>
          </p>
          <h3 class=""><span>So geht's:</span></h3>
          <p>
            Um bis zu 15% des Kaufpreises zu spenden, musst du einfach vor deinem Einkauf den Shop über einen Link von unserer Seite betreten.
            Wir überlassen dir die Wahl für welche Kategorie gespednet werden soll.</br>
            Nachdem du zu deinem Shop weitergeleitet wurdest musst du dich um nichts kümmern. Wir verteieln die Spenden so, wie Ihr es ausgewählt habt.
          </p>
        </div>
        <div class="col-md-5">
          <div class="row">
            <div class="col-md-6 col-sm-4 col-xs-6 smallerpadding">
              <a data-toggle="modal" data-target="#modaltrendfabrik">
                <div class="shop-card">
                  <img class="img-responsive img-center" src="/style/img/shops/007/logo.jpg" />
                  <div class="projectdescription">
                    <h1><span>Trendfabrik</span></h1>
                    <a class="btn btn-sm btn-blue btn-full" data-toggle="modal" data-target="#modaltrendfabrik" role="button">JETZT EINKAUFEN & SPENDEN</a>
                  </div>
                  <div class="progress-description">
                    Pro Einkauf werden 10 % gespendet.
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6 col-sm-4 col-xs-6 smallerpadding">
              <a data-toggle="modal" data-target="#modalhunkemöller">
                <div class="shop-card">
                  <img class="img-responsive img-center" src="/style/img/shops/035/logo.jpg" />
                  <div class="projectdescription">
                    <h1><span>Hunkemöller</span></h1>
                    <a class="btn btn-sm btn-blue btn-full" data-toggle="modal" data-target="#modalhunkemöller" role="button">JETZT EINKAUFEN & SPENDEN</a>
                  </div>
                  <div class="progress-description">
                    Pro Einkauf werden ca. 6 % gespendet.
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6 col-sm-4 col-xs-6 smallerpadding">
              <a data-toggle="modal" data-target="#modalorsay">
                <div class="shop-card">
                  <img class="img-responsive img-center" src="/style/img/shops/032/logo.jpg" />
                  <div class="projectdescription">
                    <h1><span>Orsay</span></h1>
                    <a class="btn btn-sm btn-blue btn-full" data-toggle="modal" data-target="#modalorsay" role="button">JETZT EINKAUFEN & SPENDEN</a>
                  </div>
                  <div class="progress-description">
                    Pro Einkauf werden ca. 8 % gespendet.
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6 col-sm-4 col-xs-6 smallerpadding">
              <a data-toggle="modal" data-target="#modalseidensticker">
                <div class="shop-card">
                  <img class="img-responsive img-center" src="/style/img/shops/038/logo.jpg" />
                  <div class="projectdescription">
                    <h1><span>Seidensticker</span></h1>
                    <a class="btn btn-sm btn-blue btn-full" data-toggle="modal" data-target="#modalseidensticker" role="button">JETZT EINKAUFEN & SPENDEN</a>
                  </div>
                  <div class="progress-description">
                    Pro Einkauf werden ca. 7 % gespendet.
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.container -->
  </section>

  <!-- Footer --><?php include "../../style/common/footer.php" ?>
  <script src="/style/js/jquery.js"></script>
  <script src="/style/js/bootstrap.min.js"></script>

  <!-- Modals -->
  <!--ModalOrsay -->
  <div class="modal fade" id="modalorsay" tabindex="-1" role="dialog" aria-labelledby="meinModalLabel">
  	<!-- Include Modal --><?php $shop="orsay"; include "../../com/modal.php";?><!-- End Modal -->
  </div>
  <!--ModalHunkemöller -->
  <div class="modal fade" id="modalhunkemöller" tabindex="-1" role="dialog" aria-labelledby="meinModalLabel">
  	<!-- Include Modal --><?php $shop="hunkemöller"; include "../../com/modal.php";?><!-- End Modal -->
  </div>
  <!--ModalSeidensticker -->
  <div class="modal fade" id="modalseidensticker" tabindex="-1" role="dialog" aria-labelledby="meinModalLabel">
  	<!-- Include Modal --><?php $shop="seidensticker"; include "../../com/modal.php";?><!-- End Modal -->
  </div>

</body>
</html>
