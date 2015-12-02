<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Portfolio</title>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">
  <link rel="stylesheet" href="assets/navbar.css">
  <!-- Icones from http://modernuiicons.com/ -->

</head>

      <div class="masthead">
        <h3 class="text-muted">Marion CRAIPEAU</h3>
        <nav>
          <ul class="nav nav-justified">

              <li <?php if(isset($_GET['page']) and $_GET['page'] == 'index.php') {?> class="active" <?php } ?> >
               <a href="?page=index.php">Home</a>
              </li>

              <li <?php if (isset($_GET['page']) and $_GET['page'] == 'aboutme.php') {?> class="active" <?php } ?> >
              <a href="?page=aboutme.php">My Skills</a>
              </li>

              <li>
                <a href="https://github.com/MarionCrp">My GitHub</a>
              </li>

              <li <?php if (isset($_GET['page']) and $_GET['page'] == 'contact.php') {?> class="active" <?php } ?> >
              <a href="?page=contact.php">Contacts</a>
              </li>

          </ul>
        </nav>
      </div>


<body>


		<div class="jumbotron">
			<div class="container">


		<?php if (!isset($_GET['page']) or $_GET['page'] == 'index.php'){
			include ("welcome.php"); 
				}
			else{
				include ($_GET['page']);
			}
		?>



			</div>
		</div>

		<footer>
		<div class="footer">
			<p> Created by Marion Craipeau, 2015</p>
		</div>
		</footer>	

</body>

</html>
