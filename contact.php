<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>contact</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all">
    <!-- Latest compiled and minified CSS -->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	  <!-- Optional theme -->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	  <!-- Latest compiled and minified JavaScript -->
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/ad345ec97a.js"></script>
    <script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>

    </script>
  </head>
  <body>
    <div class="global">
      <!-- Header -->
      <div class="header">

        <div class="menu">
          <ul>
            <li><span class="glyphicon glyphicon-home" aria-hidden="true"></span><a href="./index.php">Home</a></li>
            <li><span class="glyphicon glyphicon-cog" aria-hidden="true"></span><a href="./service.php">Services</a></li>
            <li><span class="fa fa-cubes" aria-hidden="true"></span><a href="./produit.php">Produits</a></li>
            <li><span class="fa fa-pie-chart" aria-hidden="true"></span><a href="./projet.php">Projets</a></li>
            <li><span class="fa fa-commenting" aria-hidden="true"></span><a href="./news.php">News</a></li>
            <li><span class="fa fa-quote-left" aria-hidden="true"></span><a href="./aboutus.php">About Us</a></li>
            <li><span class="fa fa-paper-plane" aria-hidden="true"></span><a href="./contact.php">Contact Us</a></li>
          </ul>
        </div>
      </div>

      <div class="main">
        <div class="horiz-layout">
          <div class="row">
            <div class="col-md-4">
              <div class="container-fluid">
                <center><h2>Nos Coordonnées</h2></center>
								<br>
                <address>
									<strong>Sparfell, Inc.</strong><br>
									12 rue du bourg<br>
									Mont de Marsan 64000<br>
									<abbr title="phone">Tel: </abbr>0559278976<br><br>
									
									<a href="mailto:#">first.last@example.com</a>
								</address>
              </div>
              <hr />
              <div class="container-fluid">
                Vous pouvez remplir ce formulaire, nous vous contacterons dès que nous aurons pris connaissance de votre demande.
              </div>
            </div>

            <div class="col-md-8">
              <div class="intro col-xs-10">
                <h2>Formulaire de contact</h2>

                Les champs ou une astérix figure (*) sont obligatoires.
              </div>

              <form>
                <div class="form-group">
                  <div class="col-xs-5">
                    <label>Nom</label>
                    <input type="text" class="form-control" placeholder="*">
                  </div>
                  <div class="col-xs-5">
                    <label>Prénom</label>
                    <input type="text" class="form-control" placeholder="*">
                  </div>
                  <div class="col-xs-5">
                    <label>Profession</label>
                    <input type="text" class="form-control" placeholder="*">
                  </div>
                  <div class="col-xs-5">
                    <label>Entreprise</label>
                    <input type="text" class="form-control" placeholder="*">
                  </div>
                  <div class="col-xs-5">
                    <label>Adresse</label>
                    <textarea class="form-control" rows="3"></textarea>
                  </div>
                  <div class="col-xs-5">
                    <label>Code Postal</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                  <div class="col-xs-5">
                    <label>Pays</label>
                    <select class="form-control">
                      <option></option>
                      <option>Italy</option>
                      <option>France</option>
                      <option>Spain</option>
                      <option>Germany</option>
                      <option>United States of America</option>
                    </select>
                  </div>
                  <div class="col-xs-5">
                    <label>Telephone</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                  <div class="col-xs-5">
                    <label>Comment nous avez vous connu ?</label>
                    <select class="form-control">
                      <option>bouche à oreille</option>
                      <option>par hasard</option>
                      <option>media</option>
                    </select>
                  </div>
                  <div class="col-xs-5">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="*">
                  </div>
                  <div class="col-xs-5">
                    <label>votre requête</label>
                    <textarea class="form-control" rows="3"></textarea>
                  </div>
                </div>
              </form>
            </div>
          </div>


        </div>
        <div id="map" class="section"></div>
        <div class="footer">
          <br>
          <center>Crafted by Thoraval Francois, Gestin Loic and Fontaine Pierre</center>
          <br>
          <center>
            <a href="#">plan du site</a>
            <a href="#">contact us</a>
            <a href="#">mentions légales</a>
          </center>

        </div>
      </div>
  </body>
</html>
<script src="js/animAccueil.js"></script>
<script <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAP5-_PMQlai4erT9whJ8dmKxYKfj1g9Gs&callback=initMap"
    async defer></script>
<script src="js/googleMapContact.js"></script>
