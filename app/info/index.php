<?php
    $title = "Robert Metcalfe - Portfolio";
    require '../partials/header.php';
?>

  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Robert Metcalfe</a>
      </div>
    </div>
  </div>

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div id="about" class="container">
      <h1>About me</h1>
      <p>
        My name is Robert Metcalfe, aspiring software engineer and web developer
        <br />
        Look on my works, ye Mighty, and despair!
      </p>
    </div>
  </div>

  <div id="portfolio" class="container">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h1 class="panel-title">
          Sonmor
          <span class="label label-info pull-right">Aontu</span>
        </h1>
      </div>

      <div class="panel-body">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">Description</h2>
          </div>

          <div class="panel-body">
            I joined Aontu in August 2013 as a Software Engineer responsible for the bulk of the early implementation of Sonmor.
            <!--  -->
            Sonmor was part of a transition to a greater focus on Big Data and Enterprise technologies - a largely untapped market in Ireland beyond the traditional solutions offered by IBM, Oracle, etc.
            <!--  -->
            I lead the charge by creating the initial prototype for Sonmor - wrestling with Flume,
          </div>
        </div>
        <h3>Gallery</h3>

        <h3>Learning Outcomes</h3>
      </div>
    </div>

    <div class="panel panel-primary">
      <div class="panel-heading">
        <h1 class="panel-title">
          Selfcare / Customer Care / Redirection / OfferCatalogLight
          <span class="label label-info pull-right">Aontu - Openet</span>
        </h1>
      </div>

      <div class="panel-body">Description, Gallery, Learning Outcomes</div>
    </div>

    <div class="panel panel-primary">
      <div class="panel-heading">
        <h1 class="panel-title">
          SMEContracts
          <span class="label label-info pull-right">Aontu</span>
        </h1>
      </div>

      <div class="panel-body">Description, Gallery, Learning Outcomes</div>
    </div>

    <div class="panel panel-primary">
      <div class="panel-heading">
        <h1 class="panel-title">
          EnterpriseCore
          <span class="label label-info pull-right">Aontu - Pasker</span>
        </h1>
      </div>

      <div class="panel-body">Description, Gallery, Learning Outcomes</div>
    </div>

    <div class="panel panel-info">
      <div class="panel-heading">
        <h2 class="panel-title">Aontu</h2>
      </div>

      <div class="panel-body">Registered as Ciavin Technologies Ltd, but trading as Aontu. A small team of passionate software engineers whose work started creating and maintaining web applications for telecoms companies, but pushed forward into working with enterprise solutions using technologies such as WSO2 products. Also fostering a desire to break into the Big Data space, we created our own product called Sonmor - a stack of Apache Hadoop based technologies.</div>
    </div>
  </div>

<?php
    $js = array(
        "../assets/libraries/webpack/bundle.js"
    );
    require '../partials/footer.php';
?>
