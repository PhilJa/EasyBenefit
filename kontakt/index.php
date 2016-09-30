<!DOCTYPE html>
<html lang="de">
<head>
    <title>Kontakt | EasyBenefit.de</title>

    <!-- Analytics --><?php include_once("../com/common-meta.php") ?>
</head>
<body>
  <!-- Navigation --><?php include "../style/common/navbar.php" ?>

  <!-- Page Content -->
  <section class="nopadding">
    <div class="container-fluid">
      <div class="row">
          <img class="img-responsive" src="/style/img/header/header_kontakt.jpg" alt="EasyBenefit.de | Tritt mit uns in Kontakt"/>
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /section -->

  <section id="kontakt">
    <div class="container">
      <div class="row">
        <div class="col-md-9 part">
          <!-- Classic Heading -->
  				<h1 class="eb-heading"><span>Schreib uns</span></h1>
  				<!-- Start Contact Form -->
          <form role="form" class="contact-form" id="contactform" method="post" action="../php/send.php">
          	<input type="text" placeholder="Name" name="name" required>
          	<input type="email" class="email" placeholder="E-Mail" name="email" required>
          	<input type="text" class="requiredField" placeholder="Betreff" name="subject" required>
          	<textarea rows="7" placeholder="Nachricht" name="message" required></textarea>
      			<div class="btn-group">
      				<button id="submit" type="submit" class="btn btn-blue"><i class="fa fa-envelope fa-fw"></i> Absenden</button>
      				<div id="success" style="color:#34495e;"></div>
      			</div>
          </form>	<!-- End Contact Form -->
        </div>
        <div class="col-md-3 sidebar part">
  				<h1 class="eb-heading"><span>Kontakt</span></h1>
          <img style="margin-bottom:15px;" class="img-responsive" src="/style/img/navbar-logo.png"/>
          <p><b>EasyBenefit gUG (haftungsbeschränkt)</b></br>Kleinfeldstraße 13</br>68165 Mannheim</p>
  				<p>
            <i class="fa fa-fw fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@easybenefit.de">info@easybenefit.de</a></br><i class="fa fa-fw fa-globe" aria-hidden="true"></i> <a href="/">www.easybenefit.de</a></br></br>
            <i class="fa fa-fw fa-facebook-official" aria-hidden="true"></i> <a href="https://www.facebook.com/EasyBenefit.de/">EasyBenefit.de</a></br>
          </p>
        </div>
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /section -->

  <!-- Footer --><?php include "../style/common/footer.php" ?>
  <!-- jQuery --><script src="/style/js/jquery.js"></script>
  <!-- Bootstrap Core JavaScript --><script src="/style/js/bootstrap.min.js"></script>
</body>
</html>
