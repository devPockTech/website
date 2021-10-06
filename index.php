<!doctype html>
<html lang="en">

  <!-- El encabezado será el mismo para todas las páginas -->
  <!-- Se incluye como encabezado -->

  <?php include "header.php" ?>

  <div class="container-fluid">

    <!-- Se incluye la barra de menu que será generica en toda la página -->

    <?php include "menu_bar.php" ?>

    <!-- INICIA - cocontenido exclusivo de está página -->

    <div class="main-gallery">
      <div class="main-gallery-title"></div>
      <div class="main-gallery-description"></div>
      <div class="main-gallery-button"></div>
    </div>

    <div class="container-fluid mt-5 mb-5 pt-5 pb-5 who-we-are">
      <div class="container">
        <span class="div-title">¿Quiénes somos?</span>
        <span class="div-description">Conoce a pock, la empresa de soluciones tecnológicas</span>
        <div class="row">
          <div class="col-12 col-md-6 mt-3">
            <div class="card">
              <img class="card-img-top" src="img/mision.jpg" alt="Nuestra misión">
              <div class="card-body">
                <div class="card-title">Nuestra misión</div>
                <div class="card-text">Ayudar a nuestros clientes a solucionar todas las problemáticas que se le presenten con ayuda de la tecnología, apoyándose de todos los recursos necesarios de software y hardware.</div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 mt-3">
            <div class="card">
              <img class="card-img-top" src="img/vision.jpg" alt="Nuestra visión">
              <div class="card-body">
                <div class="card-title">Nuestra visión</div>
                <div class="card-text">Ser la empresa número uno en México para en ofrecer soluciones tecnológicas a la medida. Además, ser la primera empresa mexicana en desarrollar un Sistema Operativo eficiente e inteligente.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- FINALIZA - contenido exclusivo de está página -->

  
  </div>

  <?php include "footer.php" ?>

</html>