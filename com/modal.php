<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header" style="background-color:
      <?php if($shop == "mydays") {echo "#CE0040";}
        elseif($shop == "runnerspoint") {echo "#007B82";}
        elseif($shop == "trendfabrik") {echo "#F77517";}
        elseif($shop == "karstadt") {echo "#003E67";}
        elseif($shop == "bookyourpresent") {echo "#644193";}
        elseif($shop == "bvb") {echo "#FEE600";}
        elseif($shop == "ikea") {echo "#003399";}
        elseif($shop == "ceweprint") {echo "#E2001A";}
        elseif($shop == "decathlon") {echo "#0071B3";}
        elseif($shop == "reichelt") {echo "#003570";}
        elseif($shop == "sportida") {echo "#181715";}
        elseif($shop == "seidensticker") {echo "#353336";}
        elseif($shop == "neckermann") {echo "#ED192E";}
        elseif($shop == "roller") {echo "#006BB5";}
        elseif($shop == "postbus") {echo "#FC0";}
      ?>">
      <button type="button" class="close" data-dismiss="modal" aria-label="Schließen"><span aria-hidden="true">&times;</span></button>
      <img class="img-responsive img-center" style="width: 150px;"
        <?php if($shop == "amazon") {echo "src='/style/img/shops/001.jpg' alt='Amazon'";}
          elseif($shop == "bahn") {echo "src='/style/img/shops/002.png' alt='Die Bahn'";}
          elseif($shop == "docmorris") {echo "src='/style/img/shops/003.jpg' alt='DocMorris'";}
          elseif($shop == "mydays") {echo "src='/style/img/shops/004.jpg' alt='mydays'";}
          elseif($shop == "runnerspoint") {echo "src='/style/img/shops/005.jpg' alt='Runners Point'";}
          elseif($shop == "flaconi") {echo "src='/style/img/shops/006.jpg' alt='Flaconi'";}
          elseif($shop == "xxx") {echo "src='/style/img/shops/007.png' alt='xxx'";}
          elseif($shop == "xxx") {echo "src='/style/img/shops/008.jpg' alt='xxx'";}
          elseif($shop == "karstadt") {echo "src='/style/img/shops/009.png' alt='Karstadt'";}
          elseif($shop == "xxxx") {echo "src='/style/img/shops/010.jpg' alt='xxx'";}
          elseif($shop == "xxx") {echo "src='/style/img/shops/011.jpg' alt='xxx'";}
      ?>/>
    </div>
    <div class="modal-body">
      <h2 class="eb-heading"><span>Kategorieauswahl<span></h2>
      <p>Wähle eine Kategorie, die du mit deinem Einkauf unterstützen möchtest.
      <div class="row">
        <div class="col-sm-4">
          <a target="_blank" href='<?php if($shop == "amazon") {echo "http://bit.ly/amazon_kinderhilfe_modal";}
            elseif($shop == "bahn") {echo "href='http://partners.webmasterplan.com/click.asp?ref=711797&site=2894&type=b184&bnb=184&subid=kinder'";}
            elseif($shop == "docmorris") {echo "href='http://partners.webmasterplan.com/click.asp?ref=711797&site=3174&type=b184&bnb=184&subid=kinder'";}
            elseif($shop == "mydays") {echo "href='http://partners.webmasterplan.com/click.asp?ref=711797&site=3073&type=b434&bnb=434&subid=kinder'";}
            elseif($shop == "runnerspoint") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7703&type=b42&bnb=42&subid=kinder";}
            elseif($shop == "flaconi") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=9069&type=b175&bnb=175&subid=kinder";}
            elseif($shop == "trendfabrik") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=8061&type=b60&bnb=60&subid=kinder";}
            elseif($shop == "elbenwald") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=2952&type=b552&bnb=552&subid=kinder";}
            elseif($shop == "karstadt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3720&type=b296&bnb=296&subid=kinder";}
            elseif($shop == "bodyshop") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7647&type=b51&bnb=51&subid=kinder";}
            elseif($shop == "amorelie") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=12125&type=b97&bnb=97&subid=kinder";}
            elseif($shop == "gymaesthetics") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13807&type=b26&bnb=26&subid=kinder";}
            elseif($shop == "bookyourpresent") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13704&type=b21&bnb=21&subid=kinder";}
            elseif($shop == "fotopuzzle") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=6425&type=b13&bnb=13&subid=kinder";}
            elseif($shop == "belsonno") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13661&type=text&tnb=2&subid=kinder";}
            elseif($shop == "bvb") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14355&type=b46&bnb=46&subid=kinder";}
            elseif($shop == "planetsports") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=1943&type=b71&bnb=71&subid=kinder";}
            elseif($shop == "home24") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7305&type=b225&bnb=225&subid=kinder";}
            elseif($shop == "technomarkt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13221&type=b18&bnb=18&subid=kinder";}
            elseif($shop == "bergfreunde") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=4108&type=text&tnb=38&subid=kinder";}
            elseif($shop == "christ") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=9063&type=b88&bnb=88&subid=kinder";}
            elseif($shop == "brands4friends") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=6466&type=b86&bnb=86&subid=kinder";}
            elseif($shop == "ceweprint") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=12052&type=b2&bnb=2&subid=kinder";}
            elseif($shop == "decathlon") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10685&type=b7&bnb=7&subid=kinder";}
            elseif($shop == "reichelt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=8948&type=b1&bnb=1&subid=kinder";}
            elseif($shop == "schmuckonline") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13833&type=b4&bnb=4&subid=kinder";}
            elseif($shop == "shopapotheke") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3357&type=text&tnb=34&subid=kinder";}
            elseif($shop == "sportida") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13866&type=b23&bnb=23&subid=kinder";}
            elseif($shop == "vistaprint") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=1860&type=b48&bnb=48&subid=kinder";}
            elseif($shop == "zooplus") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=1597&type=b117&bnb=117&subid=kinder";}
            elseif($shop == "audible") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3582&type=b198&bnb=198&subid=kinder";}
            elseif($shop == "orsay") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=4823&type=b3&bnb=3&subid=kinder";}
            elseif($shop == "shirtinator") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=5156&type=b17&bnb=17&subid=kinder";}
            elseif($shop == "dawanda") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=5571&type=b71&bnb=71&subid=kinder";}
            elseif($shop == "hunkemöller") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=6668&type=b106&bnb=106&subid=kinder";}
            elseif($shop == "spartoo") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7563&type=b120&bnb=120&subid=kinder";}
            elseif($shop == "sidestep") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7713&type=b32&bnb=32&subid=kinder";}
            elseif($shop == "seidensticker") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=8356&type=b81&bnb=81&subid=kinder";}
            elseif($shop == "uhrenshop") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10063&type=b22&bnb=22&subid=kinder";}
            elseif($shop == "sweet&fine") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13634&type=b14&bnb=14&subid=kinder";}
            elseif($shop == "bokolina") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13762&type=b41&bnb=41&subid=kinder";}
            elseif($shop == "ikea") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14354&type=b34&bnb=34&subid=kinder";}
            elseif($shop == "buroshop24") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=4084&type=b4&bnb=4&subid=kinder";}
            elseif($shop == "neckermann") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13237&type=b7&bnb=7&subid=kinder";}
            elseif($shop == "roller") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10010&type=b3&bnb=3&subid=kinder";}
            elseif($shop == "postbus") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13643&type=b61&bnb=61&subid=kinder";}
            elseif($shop == "comdirect") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3692&type=b73&bnb=73&subid=kinder";}
            elseif($shop == "holidaycheck") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7412&type=b4&bnb=4&subid=kinder";}
            elseif($shop == "engelhorn") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10317&type=b7&bnb=7&subid=kinder";}
            elseif($shop == "mediamarkt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14665&type=b78&bnb=78&subid=kinder";}
            elseif($shop == "schalke") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14980&type=b21&bnb=21&subid=kinder";}
          ?>'/>
            <div class="projectcard">
              <img class="img-responsive" src="/style/img/projekte/projectcard-kinderhilfe-modal.png" alt="Spende für das aktuelle Kinderhilfsprojekt auf EasyBenefit.de"/>
              <div class="projectdescription">
                <h1><span>MATUMAINI for africa e.V.</span></h1>
              </div>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format($prokinder,0) ?>%;">
                  <span class="sr-only"><?php echo number_format($prokinder,0) ?>% abgeschlossen</span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm-4">
          <a target="_blank" href='<?php if($shop == "amazon") {echo "http://bit.ly/amazon_seniorenhilfe_modal";}
            elseif($shop == "bahn") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=2894&type=b184&bnb=184&subid=senioren";}
    				elseif($shop == "docmorris") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3174&type=b184&bnb=184&subid=senioren";}
    				elseif($shop == "mydays") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3073&type=b434&bnb=434&subid=senioren";}
  		      elseif($shop == "runnerspoint") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7703&type=b42&bnb=42&subid=senioren";}
    				elseif($shop == "flaconi") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=9069&type=b175&bnb=175&subid=senioren";}
    				elseif($shop == "trendfabrik") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=8061&type=b60&bnb=60&subid=senioren";}
    				elseif($shop == "elbenwald") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=2952&type=b552&bnb=552&subid=senioren";}
    				elseif($shop == "karstadt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3720&type=b296&bnb=296&subid=senioren";}
    				elseif($shop == "bodyshop") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7647&type=b51&bnb=51&subid=senioren";}
    				elseif($shop == "amorelie") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=12125&type=b97&bnb=97&subid=senioren";}
    				elseif($shop == "gymaesthetics") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13807&type=b26&bnb=26&subid=senioren";}
    				elseif($shop == "bookyourpresent") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13704&type=b21&bnb=21&subid=senioren";}
    				elseif($shop == "fotopuzzle") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=6425&type=b13&bnb=13&subid=senioren";}
    				elseif($shop == "belsonno") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13661&type=text&tnb=2&subid=senioren";}
    				elseif($shop == "bvb") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14355&type=b46&bnb=46&subid=senioren";}
    				elseif($shop == "planetsports") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=1943&type=b71&bnb=71&subid=senioren";}
    				elseif($shop == "home24") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7305&type=b225&bnb=225&subid=senioren";}
    				elseif($shop == "technomarkt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13221&type=b18&bnb=18&subid=senioren";}
    				elseif($shop == "bergfreunde") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=4108&type=text&tnb=38&subid=senioren";}
    				elseif($shop == "christ") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=9063&type=b88&bnb=88&subid=senioren";}
    				elseif($shop == "brands4friends") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=6466&type=b86&bnb=86&subid=senioren";}
    				elseif($shop == "ceweprint") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=12052&type=b2&bnb=2&subid=senioren";}
    				elseif($shop == "decathlon") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10685&type=b7&bnb=7&subid=senioren";}
    				elseif($shop == "reichelt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=8948&type=b1&bnb=1&subid=senioren";}
    				elseif($shop == "schmuckonline") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13833&type=b4&bnb=4&subid=senioren";}
    				elseif($shop == "shopapotheke") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3357&type=text&tnb=34&subid=senioren";}
    				elseif($shop == "sportida") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13866&type=b23&bnb=23&subid=senioren";}
    				elseif($shop == "vistaprint") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=1860&type=b48&bnb=48&subid=senioren";}
    				elseif($shop == "zooplus") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=1597&type=b117&bnb=117&subid=senioren";}
    				elseif($shop == "audible") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3582&type=b198&bnb=198&subid=senioren";}
    				elseif($shop == "orsay") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=4823&type=b3&bnb=3&subid=senioren";}
    				elseif($shop == "shirtinator") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=5156&type=b17&bnb=17&subid=senioren";}
    				elseif($shop == "dawanda") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=5571&type=b71&bnb=71&subid=senioren";}
    				elseif($shop == "hunkemöller") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=6668&type=b106&bnb=106&subid=senioren";}
    				elseif($shop == "spartoo") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7563&type=b120&bnb=120&subid=senioren";}
    				elseif($shop == "sidestep") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7713&type=b32&bnb=32&subid=senioren";}
    				elseif($shop == "seidensticker") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=8356&type=b81&bnb=81&subid=senioren";}
    				elseif($shop == "uhrenshop") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10063&type=b22&bnb=22&subid=senioren";}
    				elseif($shop == "sweet&fine") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13634&type=b14&bnb=14&subid=senioren";}
    				elseif($shop == "bokolina") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13762&type=b41&bnb=41&subid=senioren";}
    				elseif($shop == "ikea") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14354&type=b34&bnb=34&subid=senioren";}
    				elseif($shop == "buroshop24") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=4084&type=b4&bnb=4&subid=senioren";}
    				elseif($shop == "neckermann") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13237&type=b7&bnb=7&subid=senioren";}
    				elseif($shop == "roller") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10010&type=b3&bnb=3&subid=senioren";}
    				elseif($shop == "postbus") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13643&type=b61&bnb=61&subid=senioren";}
    				elseif($shop == "comdirect") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3692&type=b73&bnb=73&subid=senioren";}
    				elseif($shop == "holidaycheck") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7412&type=b4&bnb=4&subid=senioren";}
    				elseif($shop == "engelhorn") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10317&type=b7&bnb=7&subid=senioren";}
    				elseif($shop == "mediamarkt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14665&type=b78&bnb=78&subid=senioren";}
    				elseif($shop == "schalke") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14980&type=b21&bnb=21&subid=senioren";}
          ?>'/>
            <div class="projectcard">
              <img class="img-responsive" src="/style/img/projekte/projectcard-seniorenhilfe-modal.png" alt="Spende für das aktuelle Seniorenhilfsprojekt auf EasyBenefit.de"/>
              <div class="projectdescription">
                <h1><span>Projektsuche</span></h1>
              </div>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format($prosenioren,0) ?>%;">
                  <span class="sr-only"><?php echo number_format($prosenioren,0) ?>% abgeschlossen</span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm-4">
          <a target="_blank" href='<?php if($shop == "amazon") {echo "http://bit.ly/amazon_tierschutz_modal";}
            elseif($shop == "bahn") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=2894&type=b184&bnb=184&subid=tiere";}
    				elseif($shop == "docmorris") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3174&type=b184&bnb=184&subid=tiere";}
    				elseif($shop == "mydays") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3073&type=b434&bnb=434&subid=tiere";}
  		      elseif($shop == "runnerspoint") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7703&type=b42&bnb=42&subid=tiere";}
    				elseif($shop == "flaconi") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=9069&type=b175&bnb=175&subid=tiere";}
    				elseif($shop == "trendfabrik") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=8061&type=b60&bnb=60&subid=tiere";}
    				elseif($shop == "elbenwald") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=2952&type=b552&bnb=552&subid=tiere";}
    				elseif($shop == "karstadt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3720&type=b296&bnb=296&subid=tiere";}
    				elseif($shop == "bodyshop") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7647&type=b51&bnb=51&subid=tiere";}
    				elseif($shop == "amorelie") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=12125&type=b97&bnb=97&subid=tiere";}
    				elseif($shop == "gymaesthetics") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13807&type=b26&bnb=26&subid=tiere";}
    				elseif($shop == "bookyourpresent") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13704&type=b21&bnb=21&subid=tiere";}
    				elseif($shop == "fotopuzzle") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=6425&type=b13&bnb=13&subid=tiere";}
    				elseif($shop == "belsonno") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13661&type=text&tnb=2&subid=tiere";}
    				elseif($shop == "bvb") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14355&type=b46&bnb=46&subid=tiere";}
    				elseif($shop == "planetsports") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=1943&type=b71&bnb=71&subid=tiere";}
    				elseif($shop == "home24") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7305&type=b225&bnb=225&subid=tiere";}
    				elseif($shop == "technomarkt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13221&type=b18&bnb=18&subid=tiere";}
    				elseif($shop == "bergfreunde") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=4108&type=text&tnb=38&subid=tiere";}
    				elseif($shop == "christ") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=9063&type=b88&bnb=88&subid=tiere";}
    				elseif($shop == "brands4friends") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=6466&type=b86&bnb=86&subid=tiere";}
    				elseif($shop == "ceweprint") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=12052&type=b2&bnb=2&subid=tiere";}
    				elseif($shop == "decathlon") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10685&type=b7&bnb=7&subid=tiere";}
    				elseif($shop == "reichelt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=8948&type=b1&bnb=1&subid=tiere";}
    				elseif($shop == "schmuckonline") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13833&type=b4&bnb=4&subid=tiere";}
    				elseif($shop == "shopapotheke") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3357&type=text&tnb=34&subid=tiere";}
    				elseif($shop == "sportida") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13866&type=b23&bnb=23&subid=tiere";}
    				elseif($shop == "vistaprint") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=1860&type=b48&bnb=48&subid=tiere";}
    				elseif($shop == "zooplus") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=1597&type=b117&bnb=117&subid=tiere";}
    				elseif($shop == "audible") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3582&type=b198&bnb=198&subid=tiere";}
    				elseif($shop == "orsay") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=4823&type=b3&bnb=3&subid=tiere";}
    				elseif($shop == "shirtinator") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=5156&type=b17&bnb=17&subid=tiere";}
    				elseif($shop == "dawanda") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=5571&type=b71&bnb=71&subid=tiere";}
    				elseif($shop == "hunkemöller") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=6668&type=b106&bnb=106&subid=tiere";}
    				elseif($shop == "spartoo") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7563&type=b120&bnb=120&subid=tiere";}
    				elseif($shop == "sidestep") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7713&type=b32&bnb=32&subid=tiere";}
    				elseif($shop == "seidensticker") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=8356&type=b81&bnb=81&subid=tiere";}
    				elseif($shop == "uhrenshop") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10063&type=b22&bnb=22&subid=tiere";}
    				elseif($shop == "sweet&fine") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13634&type=b14&bnb=14&subid=tiere";}
    				elseif($shop == "bokolina") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13762&type=b41&bnb=41&subid=tiere";}
    				elseif($shop == "ikea") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14354&type=b34&bnb=34&subid=tiere";}
    				elseif($shop == "buroshop24") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=4084&type=b4&bnb=4&subid=tiere";}
    				elseif($shop == "neckermann") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13237&type=b7&bnb=7&subid=tiere";}
    				elseif($shop == "roller") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10010&type=b3&bnb=3&subid=tiere";}
    				elseif($shop == "postbus") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13643&type=b61&bnb=61&subid=tiere";}
    				elseif($shop == "comdirect") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3692&type=b73&bnb=73&subid=tiere";}
            elseif($shop == "holidaycheck") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7412&type=b4&bnb=4&subid=tiere";}
    				elseif($shop == "engelhorn") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10317&type=b7&bnb=7&subid=tiere";}
    				elseif($shop == "mediamarkt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14665&type=b78&bnb=78&subid=tiere";}
    				elseif($shop == "schalke") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14980&type=b21&bnb=21&subid=tiere";}
          ?>'/>
            <div class="projectcard">
              <img class="img-responsive" src="/style/img/projekte/projectcard-tierschutz-modal.png" alt="Spende für das aktuelle Tierschutzprojekt auf EasyBenefit.de"/>
              <div class="projectdescription">
                <h1><span>Projektsuche</span></h1>
              </div>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format($protiere,0) ?>%;">
                  <span class="sr-only"><?php echo number_format($protiere,0) ?>% abgeschlossen</span>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <a target="_blank" href='<?php if($shop == "amazon") {echo "http://bit.ly/amazon_naturschutz_modal";}
            elseif($shop == "bahn") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=2894&type=b184&bnb=184&subid=natur";}
    				elseif($shop == "docmorris") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3174&type=b184&bnb=184&subid=natur";}
    				elseif($shop == "mydays") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3073&type=b434&bnb=434&subid=natur";}
  		      elseif($shop == "runnerspoint") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7703&type=b42&bnb=42&subid=natur";}
    				elseif($shop == "flaconi") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=9069&type=b175&bnb=175&subid=natur";}
    				elseif($shop == "trendfabrik") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=8061&type=b60&bnb=60&subid=natur";}
    				elseif($shop == "elbenwald") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=2952&type=b552&bnb=552&subid=natur";}
    				elseif($shop == "karstadt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3720&type=b296&bnb=296&subid=natur";}
    				elseif($shop == "bodyshop") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7647&type=b51&bnb=51&subid=natur";}
    				elseif($shop == "amorelie") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=12125&type=b97&bnb=97&subid=natur";}
    				elseif($shop == "gymaesthetics") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13807&type=b26&bnb=26&subid=natur";}
    				elseif($shop == "bookyourpresent") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13704&type=b21&bnb=21&subid=natur";}
    				elseif($shop == "fotopuzzle") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=6425&type=b13&bnb=13&subid=natur";}
    				elseif($shop == "belsonno") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13661&type=text&tnb=2&subid=natur";}
    				elseif($shop == "bvb") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14355&type=b46&bnb=46&subid=natur";}
    				elseif($shop == "planetsports") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=1943&type=b71&bnb=71&subid=natur";}
    				elseif($shop == "home24") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7305&type=b225&bnb=225&subid=natur";}
    				elseif($shop == "technomarkt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13221&type=b18&bnb=18&subid=natur";}
    				elseif($shop == "bergfreunde") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=4108&type=text&tnb=38&subid=natur";}
    				elseif($shop == "christ") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=9063&type=b88&bnb=88&subid=natur";}
    				elseif($shop == "brands4friends") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=6466&type=b86&bnb=86&subid=natur";}
    				elseif($shop == "ceweprint") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=12052&type=b2&bnb=2&subid=natur";}
    				elseif($shop == "decathlon") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10685&type=b7&bnb=7&subid=natur";}
    				elseif($shop == "reichelt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=8948&type=b1&bnb=1&subid=natur";}
    				elseif($shop == "schmuckonline") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13833&type=b4&bnb=4&subid=natur";}
    				elseif($shop == "shopapotheke") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3357&type=text&tnb=34&subid=natur";}
    				elseif($shop == "sportida") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13866&type=b23&bnb=23&subid=natur";}
    				elseif($shop == "vistaprint") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=1860&type=b48&bnb=48&subid=natur";}
    				elseif($shop == "zooplus") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=1597&type=b117&bnb=117&subid=natur";}
    				elseif($shop == "audible") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3582&type=b198&bnb=198&subid=natur";}
    				elseif($shop == "orsay") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=4823&type=b3&bnb=3&subid=natur";}
    				elseif($shop == "shirtinator") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=5156&type=b17&bnb=17&subid=natur";}
    				elseif($shop == "dawanda") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=5571&type=b71&bnb=71&subid=natur";}
    				elseif($shop == "hunkemöller") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=6668&type=b106&bnb=106&subid=natur";}
    				elseif($shop == "spartoo") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7563&type=b120&bnb=120&subid=natur";}
    				elseif($shop == "sidestep") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7713&type=b32&bnb=32&subid=natur";}
    				elseif($shop == "seidensticker") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=8356&type=b81&bnb=81&subid=natur";}
    				elseif($shop == "uhrenshop") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10063&type=b22&bnb=22&subid=natur";}
    				elseif($shop == "sweet&fine") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13634&type=b14&bnb=14&subid=natur";}
    				elseif($shop == "bokolina") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13762&type=b41&bnb=41&subid=natur";}
    				elseif($shop == "ikea") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14354&type=b34&bnb=34&subid=natur";}
    				elseif($shop == "buroshop24") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=4084&type=b4&bnb=4&subid=natur";}
    				elseif($shop == "neckermann") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13237&type=b7&bnb=7&subid=natur";}
    				elseif($shop == "roller") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10010&type=b3&bnb=3&subid=natur";}
    				elseif($shop == "postbus") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13643&type=b61&bnb=61&subid=natur";}
    				elseif($shop == "comdirect") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3692&type=b73&bnb=73&subid=natur";}
    				elseif($shop == "holidaycheck") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7412&type=b4&bnb=4&subid=natur";}
    				elseif($shop == "engelhorn") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10317&type=b7&bnb=7&subid=natur";}
    				elseif($shop == "mediamarkt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14665&type=b78&bnb=78&subid=natur";}
    				elseif($shop == "schalke") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14980&type=b21&bnb=21&subid=natur";}
          ?>'/>
            <div class="projectcard">
              <img class="img-responsive" src="/style/img/projekte/projectcard-naturschutz-modal.png" alt="Spende für das aktuelle Naturschutzprojekt auf EasyBenefit.de"/>
              <div class="projectdescription">
                <h1><span>Projektsuche</span></h1>
              </div>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format($pronatur,0) ?>%;">
                  <span class="sr-only"><?php echo number_format($pronatur,0) ?>% abgeschlossen</span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm-4">
          <a target="_blank" href='<?php if($shop == "amazon") {echo "http://bit.ly/amazon_entwicklungshilfe_modal";}
            elseif($shop == "bahn") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=2894&type=b184&bnb=184&subid=entwicklung";}
    				elseif($shop == "docmorris") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3174&type=b184&bnb=184&subid=entwicklung";}
    				elseif($shop == "mydays") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3073&type=b434&bnb=434&subid=entwicklung";}
  		      elseif($shop == "runnerspoint") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7703&type=b42&bnb=42&subid=entwicklung";}
    				elseif($shop == "flaconi") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=9069&type=b175&bnb=175&subid=entwicklung";}
    				elseif($shop == "trendfabrik") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=8061&type=b60&bnb=60&subid=entwicklung";}
    				elseif($shop == "elbenwald") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=2952&type=b552&bnb=552&subid=entwicklung";}
    				elseif($shop == "karstadt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3720&type=b296&bnb=296&subid=entwicklung";}
    				elseif($shop == "bodyshop") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7647&type=b51&bnb=51&subid=entwicklung";}
    				elseif($shop == "amorelie") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=12125&type=b97&bnb=97&subid=entwicklung";}
    				elseif($shop == "gymaesthetics") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13807&type=b26&bnb=26&subid=entwicklung";}
    				elseif($shop == "bookyourpresent") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13704&type=b21&bnb=21&subid=entwicklung";}
    				elseif($shop == "fotopuzzle") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=6425&type=b13&bnb=13&subid=entwicklung";}
    				elseif($shop == "belsonno") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13661&type=text&tnb=2&subid=entwicklung";}
    				elseif($shop == "bvb") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14355&type=b46&bnb=46&subid=entwicklung";}
    				elseif($shop == "planetsports") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=1943&type=b71&bnb=71&subid=entwicklung";}
    				elseif($shop == "home24") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7305&type=b225&bnb=225&subid=entwicklung";}
    				elseif($shop == "technomarkt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13221&type=b18&bnb=18&subid=entwicklung";}
    				elseif($shop == "bergfreunde") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=4108&type=text&tnb=38&subid=entwicklung";}
    				elseif($shop == "christ") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=9063&type=b88&bnb=88&subid=entwicklung";}
    				elseif($shop == "brands4friends") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=6466&type=b86&bnb=86&subid=entwicklung";}
    				elseif($shop == "ceweprint") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=12052&type=b2&bnb=2&subid=entwicklung";}
    				elseif($shop == "decathlon") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10685&type=b7&bnb=7&subid=entwicklung";}
    				elseif($shop == "reichelt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=8948&type=b1&bnb=1&subid=entwicklung";}
    				elseif($shop == "schmuckonline") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13833&type=b4&bnb=4&subid=entwicklung";}
    				elseif($shop == "shopapotheke") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3357&type=text&tnb=34&subid=entwicklung";}
    				elseif($shop == "sportida") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13866&type=b23&bnb=23&subid=entwicklung";}
    				elseif($shop == "vistaprint") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=1860&type=b48&bnb=48&subid=entwicklung";}
    				elseif($shop == "zooplus") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=1597&type=b117&bnb=117&subid=entwicklung";}
    				elseif($shop == "audible") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3582&type=b198&bnb=198&subid=entwicklung";}
    				elseif($shop == "orsay") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=4823&type=b3&bnb=3&subid=entwicklung";}
    				elseif($shop == "shirtinator") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=5156&type=b17&bnb=17&subid=entwicklung";}
    				elseif($shop == "dawanda") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=5571&type=b71&bnb=71&subid=entwicklung";}
    				elseif($shop == "hunkemöller") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=6668&type=b106&bnb=106&subid=entwicklung";}
    				elseif($shop == "spartoo") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7563&type=b120&bnb=120&subid=entwicklung";}
    				elseif($shop == "sidestep") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7713&type=b32&bnb=32&subid=entwicklung";}
    				elseif($shop == "seidensticker") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=8356&type=b81&bnb=81&subid=entwicklung";}
    				elseif($shop == "uhrenshop") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10063&type=b22&bnb=22&subid=entwicklung";}
    				elseif($shop == "sweet&fine") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13634&type=b14&bnb=14&subid=entwicklung";}
    				elseif($shop == "bokolina") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13762&type=b41&bnb=41&subid=entwicklung";}
    				elseif($shop == "ikea") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14354&type=b34&bnb=34&subid=entwicklung";}
    				elseif($shop == "buroshop24") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=4084&type=b4&bnb=4&subid=entwicklung";}
    				elseif($shop == "neckermann") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13237&type=b7&bnb=7&subid=entwicklung";}
    				elseif($shop == "roller") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10010&type=b3&bnb=3&subid=entwicklung";}
    				elseif($shop == "postbus") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13643&type=b61&bnb=61&subid=entwicklung";}
    				elseif($shop == "comdirect") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3692&type=b73&bnb=73&subid=entwicklung";}
    				elseif($shop == "holidaycheck") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7412&type=b4&bnb=4&subid=entwicklung";}
    				elseif($shop == "engelhorn") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10317&type=b7&bnb=7&subid=entwicklung";}
    				elseif($shop == "mediamarkt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14665&type=b78&bnb=78&subid=entwicklung";}
    				elseif($shop == "schalke") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14980&type=b21&bnb=21&subid=entwicklung";}
          ?>'/>
            <div class="projectcard">
              <img class="img-responsive" src="/style/img/projekte/projectcard-entwicklungshilfe-modal.png" alt="Spende für das aktuelle Entwicklungshilfsprojekt auf EasyBenefit.de"/>
              <div class="projectdescription">
                <h1><span>Projektsuche</span></h1>
              </div>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format($proentwicklung,0) ?>%;">
                  <span class="sr-only"><?php echo number_format($proentwicklung,0) ?>% abgeschlossen</span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm-4">
          <a target="_blank" href='<?php if($shop == "amazon") {echo "http://bit.ly/amazon_gesundheit_modal";}
            elseif($shop == "bahn") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=2894&type=b184&bnb=184&subid=gesundheit";}
    				elseif($shop == "docmorris") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3174&type=b184&bnb=184&subid=gesundheit";}
    				elseif($shop == "mydays") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3073&type=b434&bnb=434&subid=gesundheit";}
  		      elseif($shop == "runnerspoint") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7703&type=b42&bnb=42&subid=gesundheit";}
    				elseif($shop == "flaconi") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=9069&type=b175&bnb=175&subid=gesundheit";}
    				elseif($shop == "trendfabrik") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=8061&type=b60&bnb=60&subid=gesundheit";}
    				elseif($shop == "elbenwald") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=2952&type=b552&bnb=552&subid=gesundheit";}
    				elseif($shop == "karstadt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3720&type=b296&bnb=296&subid=gesundheit";}
    				elseif($shop == "bodyshop") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7647&type=b51&bnb=51&subid=gesundheit";}
    				elseif($shop == "amorelie") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=12125&type=b97&bnb=97&subid=gesundheit";}
    				elseif($shop == "gymaesthetics") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13807&type=b26&bnb=26&subid=gesundheit";}
    				elseif($shop == "bookyourpresent") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13704&type=b21&bnb=21&subid=gesundheit";}
    				elseif($shop == "fotopuzzle") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=6425&type=b13&bnb=13&subid=gesundheit";}
    				elseif($shop == "belsonno") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13661&type=text&tnb=2&subid=gesundheit";}
    				elseif($shop == "bvb") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14355&type=b46&bnb=46&subid=gesundheit";}
    				elseif($shop == "planetsports") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=1943&type=b71&bnb=71&subid=gesundheit";}
    				elseif($shop == "home24") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7305&type=b225&bnb=225&subid=gesundheit";}
    				elseif($shop == "technomarkt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13221&type=b18&bnb=18&subid=gesundheit";}
    				elseif($shop == "bergfreunde") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=4108&type=text&tnb=38&subid=gesundheit";}
    				elseif($shop == "christ") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=9063&type=b88&bnb=88&subid=gesundheit";}
    				elseif($shop == "brands4friends") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=6466&type=b86&bnb=86&subid=gesundheit";}
    				elseif($shop == "ceweprint") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=12052&type=b2&bnb=2&subid=gesundheit";}
    				elseif($shop == "decathlon") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10685&type=b7&bnb=7&subid=gesundheit";}
    				elseif($shop == "reichelt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=8948&type=b1&bnb=1&subid=gesundheit";}
    				elseif($shop == "schmuckonline") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13833&type=b4&bnb=4&subid=gesundheit";}
    				elseif($shop == "shopapotheke") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3357&type=text&tnb=34&subid=gesundheit";}
    				elseif($shop == "sportida") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13866&type=b23&bnb=23&subid=gesundheit";}
    				elseif($shop == "vistaprint") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=1860&type=b48&bnb=48&subid=gesundheit";}
    				elseif($shop == "zooplus") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=1597&type=b117&bnb=117&subid=gesundheit";}
    				elseif($shop == "audible") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3582&type=b198&bnb=198&subid=gesundheit";}
    				elseif($shop == "orsay") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=4823&type=b3&bnb=3&subid=gesundheit";}
    				elseif($shop == "shirtinator") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=5156&type=b17&bnb=17&subid=gesundheit";}
    				elseif($shop == "dawanda") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=5571&type=b71&bnb=71&subid=gesundheit";}
    				elseif($shop == "hunkemöller") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=6668&type=b106&bnb=106&subid=gesundheit";}
    				elseif($shop == "spartoo") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7563&type=b120&bnb=120&subid=gesundheit";}
    				elseif($shop == "sidestep") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7713&type=b32&bnb=32&subid=gesundheit";}
    				elseif($shop == "seidensticker") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=8356&type=b81&bnb=81&subid=gesundheit";}
    				elseif($shop == "uhrenshop") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10063&type=b22&bnb=22&subid=gesundheit";}
    				elseif($shop == "sweet&fine") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13634&type=b14&bnb=14&subid=gesundheit";}
    				elseif($shop == "bokolina") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13762&type=b41&bnb=41&subid=gesundheit";}
    				elseif($shop == "ikea") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14354&type=b34&bnb=34&subid=gesundheit";}
    				elseif($shop == "buroshop24") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=4084&type=b4&bnb=4&subid=gesundheit";}
    				elseif($shop == "neckermann") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13237&type=b7&bnb=7&subid=gesundheit";}
    				elseif($shop == "roller") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10010&type=b3&bnb=3&subid=gesundheit";}
    				elseif($shop == "postbus") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13643&type=b61&bnb=61&subid=gesundheit";}
    				elseif($shop == "comdirect") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3692&type=b73&bnb=73&subid=gesundheit";}
    				elseif($shop == "holidaycheck") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7412&type=b4&bnb=4&subid=gesundheit";}
    				elseif($shop == "engelhorn") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10317&type=b7&bnb=7&subid=gesundheit";}
    				elseif($shop == "mediamarkt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14665&type=b78&bnb=78&subid=gesundheit";}
    				elseif($shop == "schalke") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14980&type=b21&bnb=21&subid=gesundheit";}
          ?>'/>
            <div class="projectcard">
              <img class="img-responsive" src="/style/img/projekte/projectcard-gesundheit-modal.png" alt="Spende für das aktuelle Gesundheitsprojekt auf EasyBenefit.de"/>
              <div class="projectdescription">
                <h1><span>Projektsuche</span></h1>
              </div>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format($progesundheit,0) ?>%;">
                  <span class="sr-only"><?php echo number_format($progesundheit,0) ?>% abgeschlossen</span>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <a target="_blank" href='<?php if($shop == "amazon") {echo "http://bit.ly/amazon_bildung_modal";}
            elseif($shop == "bahn") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=2894&type=b184&bnb=184&subid=bildung";}
    				elseif($shop == "docmorris") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3174&type=b184&bnb=184&subid=bildung";}
    				elseif($shop == "mydays") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3073&type=b434&bnb=434&subid=bildung";}
  		      elseif($shop == "runnerspoint") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7703&type=b42&bnb=42&subid=bildung";}
    				elseif($shop == "flaconi") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=9069&type=b175&bnb=175&subid=bildung";}
    				elseif($shop == "trendfabrik") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=8061&type=b60&bnb=60&subid=bildung";}
    				elseif($shop == "elbenwald") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=2952&type=b552&bnb=552&subid=bildung";}
    				elseif($shop == "karstadt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3720&type=b296&bnb=296&subid=bildung";}
    				elseif($shop == "bodyshop") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7647&type=b51&bnb=51&subid=bildung";}
    				elseif($shop == "amorelie") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=12125&type=b97&bnb=97&subid=bildung";}
    				elseif($shop == "gymaesthetics") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13807&type=b26&bnb=26&subid=bildung";}
    				elseif($shop == "bookyourpresent") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13704&type=b21&bnb=21&subid=bildung";}
    				elseif($shop == "fotopuzzle") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=6425&type=b13&bnb=13&subid=bildung";}
    				elseif($shop == "belsonno") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13661&type=text&tnb=2&subid=bildung";}
    				elseif($shop == "bvb") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14355&type=b46&bnb=46&subid=bildung";}
    				elseif($shop == "planetsports") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=1943&type=b71&bnb=71&subid=bildung";}
    				elseif($shop == "home24") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7305&type=b225&bnb=225&subid=bildung";}
    				elseif($shop == "technomarkt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13221&type=b18&bnb=18&subid=bildung";}
    				elseif($shop == "bergfreunde") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=4108&type=text&tnb=38&subid=bildung";}
    				elseif($shop == "christ") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=9063&type=b88&bnb=88&subid=bildung";}
    				elseif($shop == "brands4friends") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=6466&type=b86&bnb=86&subid=bildung";}
    				elseif($shop == "ceweprint") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=12052&type=b2&bnb=2&subid=bildung";}
    				elseif($shop == "decathlon") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10685&type=b7&bnb=7&subid=bildung";}
    				elseif($shop == "reichelt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=8948&type=b1&bnb=1&subid=bildung";}
    				elseif($shop == "schmuckonline") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13833&type=b4&bnb=4&subid=bildung";}
    				elseif($shop == "shopapotheke") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3357&type=text&tnb=34&subid=bildung";}
    				elseif($shop == "sportida") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13866&type=b23&bnb=23&subid=bildung";}
    				elseif($shop == "vistaprint") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=1860&type=b48&bnb=48&subid=bildung";}
    				elseif($shop == "zooplus") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=1597&type=b117&bnb=117&subid=bildung";}
    				elseif($shop == "audible") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3582&type=b198&bnb=198&subid=bildung";}
    				elseif($shop == "orsay") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=4823&type=b3&bnb=3&subid=bildung";}
    				elseif($shop == "shirtinator") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=5156&type=b17&bnb=17&subid=bildung";}
    				elseif($shop == "dawanda") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=5571&type=b71&bnb=71&subid=bildung";}
    				elseif($shop == "hunkemöller") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=6668&type=b106&bnb=106&subid=bildung";}
    				elseif($shop == "spartoo") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7563&type=b120&bnb=120&subid=bildung";}
    				elseif($shop == "sidestep") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7713&type=b32&bnb=32&subid=bildung";}
    				elseif($shop == "seidensticker") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=8356&type=b81&bnb=81&subid=bildung";}
    				elseif($shop == "uhrenshop") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10063&type=b22&bnb=22&subid=bildung";}
    				elseif($shop == "sweet&fine") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13634&type=b14&bnb=14&subid=bildung";}
    				elseif($shop == "bokolina") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13762&type=b41&bnb=41&subid=bildung";}
    				elseif($shop == "ikea") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14354&type=b34&bnb=34&subid=bildung";}
    				elseif($shop == "buroshop24") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=4084&type=b4&bnb=4&subid=bildung";}
    				elseif($shop == "neckermann") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13237&type=b7&bnb=7&subid=bildung";}
    				elseif($shop == "roller") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10010&type=b3&bnb=3&subid=bildung";}
    				elseif($shop == "postbus") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13643&type=b61&bnb=61&subid=bildung";}
    				elseif($shop == "comdirect") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3692&type=b73&bnb=73&subid=bildung";}
    				elseif($shop == "holidaycheck") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7412&type=b4&bnb=4&subid=bildung";}
    				elseif($shop == "engelhorn") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10317&type=b7&bnb=7&subid=bildung";}
    				elseif($shop == "mediamarkt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14665&type=b78&bnb=78&subid=bildung";}
    				elseif($shop == "schalke") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14980&type=b21&bnb=21&subid=bildung";}
          ?>'/>
            <div class="projectcard">
              <img class="img-responsive" src="/style/img/projekte/projectcard-bildung-modal.png" alt="Spende für das aktuelle Bildungsprojekt auf EasyBenefit.de"/>
              <div class="projectdescription">
                <h1><span>Projektsuche</span></h1>
              </div>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format($probildung,0) ?>%;">
                  <span class="sr-only"><?php echo number_format($probildung,0) ?>% abgeschlossen</span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm-4">
          <a target="_blank" href='<?php if($shop == "amazon") {echo "http://bit.ly/amazon_armut_modal";}
            elseif($shop == "bahn") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=2894&type=b184&bnb=184&subid=armut";}
    				elseif($shop == "docmorris") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3174&type=b184&bnb=184&subid=armut";}
    				elseif($shop == "mydays") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3073&type=b434&bnb=434&subid=armut";}
  		      elseif($shop == "runnerspoint") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7703&type=b42&bnb=42&subid=armut";}
    				elseif($shop == "flaconi") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=9069&type=b175&bnb=175&subid=armut";}
    				elseif($shop == "trendfabrik") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=8061&type=b60&bnb=60&subid=armut";}
    				elseif($shop == "elbenwald") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=2952&type=b552&bnb=552&subid=armut";}
    				elseif($shop == "karstadt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3720&type=b296&bnb=296&subid=armut";}
    				elseif($shop == "bodyshop") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7647&type=b51&bnb=51&subid=armut";}
    				elseif($shop == "amorelie") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=12125&type=b97&bnb=97&subid=armut";}
    				elseif($shop == "gymaesthetics") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13807&type=b26&bnb=26&subid=armut";}
    				elseif($shop == "bookyourpresent") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13704&type=b21&bnb=21&subid=armut";}
    				elseif($shop == "fotopuzzle") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=6425&type=b13&bnb=13&subid=armut";}
    				elseif($shop == "belsonno") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13661&type=text&tnb=2&subid=armut";}
    				elseif($shop == "bvb") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14355&type=b46&bnb=46&subid=armut";}
    				elseif($shop == "planetsports") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=1943&type=b71&bnb=71&subid=armut";}
    				elseif($shop == "home24") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7305&type=b225&bnb=225&subid=armut";}
    				elseif($shop == "technomarkt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13221&type=b18&bnb=18&subid=armut";}
    				elseif($shop == "bergfreunde") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=4108&type=text&tnb=38&subid=armut";}
    				elseif($shop == "christ") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=9063&type=b88&bnb=88&subid=armut";}
    				elseif($shop == "brands4friends") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=6466&type=b86&bnb=86&subid=armut";}
    				elseif($shop == "ceweprint") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=12052&type=b2&bnb=2&subid=armut";}
    				elseif($shop == "decathlon") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10685&type=b7&bnb=7&subid=armut";}
    				elseif($shop == "reichelt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=8948&type=b1&bnb=1&subid=armut";}
    				elseif($shop == "schmuckonline") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13833&type=b4&bnb=4&subid=armut";}
    				elseif($shop == "shopapotheke") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3357&type=text&tnb=34&subid=armut";}
    				elseif($shop == "sportida") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13866&type=b23&bnb=23&subid=armut";}
    				elseif($shop == "vistaprint") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=1860&type=b48&bnb=48&subid=armut";}
    				elseif($shop == "zooplus") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=1597&type=b117&bnb=117&subid=armut";}
    				elseif($shop == "audible") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3582&type=b198&bnb=198&subid=armut";}
    				elseif($shop == "orsay") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=4823&type=b3&bnb=3&subid=armut";}
    				elseif($shop == "shirtinator") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=5156&type=b17&bnb=17&subid=armut";}
    				elseif($shop == "dawanda") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=5571&type=b71&bnb=71&subid=armut";}
    				elseif($shop == "hunkemöller") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=6668&type=b106&bnb=106&subid=armut";}
    				elseif($shop == "spartoo") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7563&type=b120&bnb=120&subid=armut";}
    				elseif($shop == "sidestep") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7713&type=b32&bnb=32&subid=armut";}
    				elseif($shop == "seidensticker") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=8356&type=b81&bnb=81&subid=armut";}
    				elseif($shop == "uhrenshop") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10063&type=b22&bnb=22&subid=armut";}
    				elseif($shop == "sweet&fine") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13634&type=b14&bnb=14&subid=armut";}
    				elseif($shop == "bokolina") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13762&type=b41&bnb=41&subid=armut";}
    				elseif($shop == "ikea") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14354&type=b34&bnb=34&subid=armut";}
    				elseif($shop == "buroshop24") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=4084&type=b4&bnb=4&subid=armut";}
    				elseif($shop == "neckermann") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13237&type=b7&bnb=7&subid=armut";}
    				elseif($shop == "roller") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10010&type=b3&bnb=3&subid=armut";}
    				elseif($shop == "postbus") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13643&type=b61&bnb=61&subid=armut";}
    				elseif($shop == "comdirect") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3692&type=b73&bnb=73&subid=armut";}
    				elseif($shop == "holidaycheck") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7412&type=b4&bnb=4&subid=armut";}
    				elseif($shop == "engelhorn") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10317&type=b7&bnb=7&subid=armut";}
    				elseif($shop == "mediamarkt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14665&type=b78&bnb=78&subid=armut";}
    				elseif($shop == "schalke") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14980&type=b21&bnb=21&subid=armut";}
          ?>'/>
            <div class="projectcard">
              <img class="img-responsive" src="/style/img/projekte/projectcard-armut-modal.png" alt="Spende jetzt kostenlos für ein Projekt im Bereich Armutsbekämpfung"/>
              <div class="projectdescription">
                <h1><span>Projektsuche</span></h1>
              </div>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format($proarmut,0) ?>%;">
                  <span class="sr-only"><?php echo number_format($proarmut,0) ?>% abgeschlossen</span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm-4">
          <a target="_blank" href='<?php if($shop == "amazon") {echo "http://bit.ly/amazon_sport_modal";}
            elseif($shop == "bahn") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=2894&type=b184&bnb=184&subid=sport";}
    				elseif($shop == "docmorris") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3174&type=b184&bnb=184&subid=sport";}
    				elseif($shop == "mydays") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3073&type=b434&bnb=434&subid=sport";}
  		      elseif($shop == "runnerspoint") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7703&type=b42&bnb=42&subid=sport";}
    				elseif($shop == "flaconi") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=9069&type=b175&bnb=175&subid=sport";}
    				elseif($shop == "trendfabrik") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=8061&type=b60&bnb=60&subid=sport";}
    				elseif($shop == "elbenwald") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=2952&type=b552&bnb=552&subid=sport";}
    				elseif($shop == "karstadt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3720&type=b296&bnb=296&subid=sport";}
    				elseif($shop == "bodyshop") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7647&type=b51&bnb=51&subid=sport";}
    				elseif($shop == "amorelie") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=12125&type=b97&bnb=97&subid=sport";}
    				elseif($shop == "gymaesthetics") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13807&type=b26&bnb=26&subid=sport";}
    				elseif($shop == "bookyourpresent") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13704&type=b21&bnb=21&subid=sport";}
    				elseif($shop == "fotopuzzle") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=6425&type=b13&bnb=13&subid=sport";}
    				elseif($shop == "belsonno") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13661&type=text&tnb=2&subid=sport";}
    				elseif($shop == "bvb") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14355&type=b46&bnb=46&subid=sport";}
    				elseif($shop == "planetsports") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=1943&type=b71&bnb=71&subid=sport";}
    				elseif($shop == "home24") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7305&type=b225&bnb=225&subid=sport";}
    				elseif($shop == "technomarkt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13221&type=b18&bnb=18&subid=sport";}
    				elseif($shop == "bergfreunde") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=4108&type=text&tnb=38&subid=sport";}
    				elseif($shop == "christ") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=9063&type=b88&bnb=88&subid=sport";}
    				elseif($shop == "brands4friends") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=6466&type=b86&bnb=86&subid=sport";}
    				elseif($shop == "ceweprint") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=12052&type=b2&bnb=2&subid=sport";}
    				elseif($shop == "decathlon") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10685&type=b7&bnb=7&subid=sport";}
    				elseif($shop == "reichelt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=8948&type=b1&bnb=1&subid=sport";}
    				elseif($shop == "schmuckonline") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13833&type=b4&bnb=4&subid=sport";}
    				elseif($shop == "shopapotheke") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3357&type=text&tnb=34&subid=sport";}
    				elseif($shop == "sportida") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13866&type=b23&bnb=23&subid=sport";}
    				elseif($shop == "vistaprint") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=1860&type=b48&bnb=48&subid=sport";}
    				elseif($shop == "zooplus") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=1597&type=b117&bnb=117&subid=sport";}
    				elseif($shop == "audible") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3582&type=b198&bnb=198&subid=sport";}
    				elseif($shop == "orsay") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=4823&type=b3&bnb=3&subid=sport";}
    				elseif($shop == "shirtinator") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=5156&type=b17&bnb=17&subid=sport";}
    				elseif($shop == "dawanda") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=5571&type=b71&bnb=71&subid=sport";}
    				elseif($shop == "hunkemöller") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=6668&type=b106&bnb=106&subid=sport";}
    				elseif($shop == "spartoo") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7563&type=b120&bnb=120&subid=sport";}
    				elseif($shop == "sidestep") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7713&type=b32&bnb=32&subid=sport";}
    				elseif($shop == "seidensticker") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=8356&type=b81&bnb=81&subid=sport";}
    				elseif($shop == "uhrenshop") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10063&type=b22&bnb=22&subid=sport";}
    				elseif($shop == "sweet&fine") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13634&type=b14&bnb=14&subid=sport";}
    				elseif($shop == "bokolina") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13762&type=b41&bnb=41&subid=sport";}
    				elseif($shop == "ikea") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14354&type=b34&bnb=34&subid=sport";}
    				elseif($shop == "buroshop24") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=4084&type=b4&bnb=4&subid=sport";}
    				elseif($shop == "neckermann") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13237&type=b7&bnb=7&subid=sport";}
    				elseif($shop == "roller") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10010&type=b3&bnb=3&subid=sport";}
    				elseif($shop == "postbus") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13643&type=b61&bnb=61&subid=sport";}
    				elseif($shop == "comdirect") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3692&type=b73&bnb=73&subid=sport";}
    				elseif($shop == "holidaycheck") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7412&type=b4&bnb=4&subid=sport";}
    				elseif($shop == "engelhorn") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10317&type=b7&bnb=7&subid=sport";}
    				elseif($shop == "mediamarkt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14665&type=b78&bnb=78&subid=sport";}
    				elseif($shop == "schalke") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14980&type=b21&bnb=21&subid=sport";}
          ?>'/>
            <div class="projectcard">
              <img class="img-responsive" src="/style/img/projekte/projectcard-sportsoziales-modal.png" alt="Spende jetzt kostenlos für ein Projekt im Bereich Sport & Soziales"/>
              <div class="projectdescription">
                <h1><span>Projektsuche</span></h1>
              </div>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format($prosport,0) ?>%;">
                  <span class="sr-only"><?php echo number_format($prosport,0) ?>% abgeschlossen</span>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <a target="_blank" href='<?php if($shop == "amazon") {echo "http://bit.ly/easybenefit-amazon";}
        elseif($shop == "bahn") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=2894&type=b184&bnb=184&subid=allgemein";}
        elseif($shop == "docmorris") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3174&type=b184&bnb=184&subid=allgemein";}
        elseif($shop == "mydays") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3073&type=b434&bnb=434&subid=allgemein";}
        elseif($shop == "runnerspoint") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7703&type=b42&bnb=42&subid=allgemein";}
        elseif($shop == "flaconi") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=9069&type=b175&bnb=175&subid=allgemein";}
        elseif($shop == "trendfabrik") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=8061&type=b60&bnb=60&subid=allgemein";}
        elseif($shop == "elbenwald") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=2952&type=b552&bnb=552&subid=allgemein";}
        elseif($shop == "karstadt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3720&type=b296&bnb=296&subid=allgemein";}
        elseif($shop == "bodyshop") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7647&type=b51&bnb=51&subid=allgemein";}
        elseif($shop == "amorelie") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=12125&type=b97&bnb=97&subid=allgemein";}
        elseif($shop == "gymaesthetics") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13807&type=b26&bnb=26&subid=allgemein";}
        elseif($shop == "bookyourpresent") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13704&type=b21&bnb=21&subid=allgemein";}
        elseif($shop == "fotopuzzle") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=6425&type=b13&bnb=13&subid=allgemein";}
        elseif($shop == "belsonno") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13661&type=text&tnb=2&subid=allgemein";}
        elseif($shop == "bvb") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14355&type=b46&bnb=46&subid=allgemein";}
        elseif($shop == "planetsports") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=1943&type=b71&bnb=71&subid=allgemein";}
        elseif($shop == "home24") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7305&type=b225&bnb=225&subid=allgemein";}
        elseif($shop == "technomarkt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13221&type=b18&bnb=18&subid=allgemein";}
        elseif($shop == "bergfreunde") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=4108&type=text&tnb=38&subid=allgemein";}
        elseif($shop == "christ") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=9063&type=b88&bnb=88&subid=allgemein";}
        elseif($shop == "brands4friends") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=6466&type=b86&bnb=86&subid=allgemein";}
        elseif($shop == "ceweprint") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=12052&type=b2&bnb=2&subid=allgemein";}
        elseif($shop == "decathlon") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10685&type=b7&bnb=7&subid=allgemein";}
        elseif($shop == "reichelt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=8948&type=b1&bnb=1&subid=allgemein";}
        elseif($shop == "schmuckonline") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13833&type=b4&bnb=4&subid=allgemein";}
        elseif($shop == "shopapotheke") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3357&type=text&tnb=34&subid=allgemein";}
        elseif($shop == "sportida") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13866&type=b23&bnb=23&subid=allgemein";}
        elseif($shop == "vistaprint") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=1860&type=b48&bnb=48&subid=allgemein";}
        elseif($shop == "zooplus") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=1597&type=b117&bnb=117&subid=allgemein";}
        elseif($shop == "audible") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3582&type=b198&bnb=198&subid=allgemein";}
        elseif($shop == "orsay") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=4823&type=b3&bnb=3&subid=allgemein";}
        elseif($shop == "shirtinator") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=5156&type=b17&bnb=17&subid=allgemein";}
        elseif($shop == "dawanda") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=5571&type=b71&bnb=71&subid=allgemein";}
        elseif($shop == "hunkemöller") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=6668&type=b106&bnb=106&subid=allgemein";}
        elseif($shop == "spartoo") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7563&type=b120&bnb=120&subid=allgemein";}
        elseif($shop == "sidestep") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7713&type=b32&bnb=32&subid=allgemein";}
        elseif($shop == "seidensticker") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=8356&type=b81&bnb=81&subid=allgemein";}
        elseif($shop == "uhrenshop") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10063&type=b22&bnb=22&subid=allgemein";}
        elseif($shop == "sweet&fine") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13634&type=b14&bnb=14&subid=allgemein";}
        elseif($shop == "bokolina") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13762&type=b41&bnb=41&subid=allgemein";}
        elseif($shop == "ikea") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14354&type=b34&bnb=34&subid=allgemein";}
        elseif($shop == "buroshop24") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=4084&type=b4&bnb=4&subid=allgemein";}
        elseif($shop == "neckermann") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13237&type=b7&bnb=7&subid=allgemein";}
        elseif($shop == "roller") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10010&type=b3&bnb=3&subid=allgemein";}
        elseif($shop == "postbus") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=13643&type=b61&bnb=61&subid=allgemein";}
        elseif($shop == "comdirect") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=3692&type=b73&bnb=73&subid=allgemein";}
        elseif($shop == "holidaycheck") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=7412&type=b4&bnb=4&subid=allgemein";}
        elseif($shop == "engelhorn") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=10317&type=b7&bnb=7&subid=allgemein";}
        elseif($shop == "mediamarkt") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14665&type=b78&bnb=78&subid=allgemein";}
        elseif($shop == "schalke") {echo "http://partners.webmasterplan.com/click.asp?ref=711797&site=14980&type=b21&bnb=21&subid=allgemein";}
      ?>'/>
        <button type="button" class="btn btn-blue">Spende auf alle Projekte verteilen <i class="fa fa-fw fa-heart" aria-hidden="true"></i></button>
      </a>
    </div>
  </div>
</div>
