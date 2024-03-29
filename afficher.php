<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="affiche.js"></script>
	<link href="afficher.css" rel="stylesheet" type="text/css" >
	 <script src="affiche.js"></script>
  <link href="afficher.css" rel="stylesheet" type="text/css" >
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DC Admin - Charts</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>
<body id="page-top">
 <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">DolceCasa</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>
	 <!-- Navbar Search -->
    <form method="get" action="afficher.php">
  <input type="text" name="search_key" placeholder="chercher..." />
  <input type="submit"  value="chercher" placeholder="chercher..." class="btn btn-default btn-primary" />
  </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">
  

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
	  
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Login Screens:</h6>
          <a class="dropdown-item" href="login.html">Login</a>
          <a class="dropdown-item" href="register.html">Register</a>
          <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Other Pages:</h6>
          <a class="dropdown-item" href="404.html">404 Page</a>
          <a class="dropdown-item" href="blank.html">Blank Page</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>
	 
	  <li class="nav-item">
        <a class="nav-link" href="livraison.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Livraison</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="reclamation.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Reclamation</span></a>
      </li>
	  
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

	
	
  <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Livraison</li>
        </ol>
<style>
table {
border-collapse: collapse;
width: 100%;
color: black;
font-family: arial;
font-size: 15px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
<!------------------------------------------------------------------------------------------------------------------------------------------>
		<center><h1 class="nav-link">Liste des livraisons:</h1></center>
	
	<?php
include('../Core/livraisonCore.php');

$livraisonCore= new livraisonCore();




if (isset($_GET['search_key']))
{
$listeevent=$livraisonCore->recherchechef($_GET['search_key']);
}
else
{
$listeevent=$livraisonCore->affiche_return(); 
}
?>
		
 <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="icon_profile"></i> id</th>
                                 <th><i class="icon_calendar"></i>number</th>
                                 <th><i class="icon_mail_alt"></i> town</th>
                                 <th><i class="icon_profile"></i>adresse</th>
                                  <th><i class="icon_profile"></i>name  </th>
                                  <th><i class="icon_profile"></i>reference</th>
                                  <th><i class="icon_profile"></i>datel</th>
								  <th><i class="icon_profile"></i>Cost</th>
								  <th><i class="icon_profile"></i></th>
								  <th><i class="icon_profile"></i></th>
								  <th><i class="icon_profile"></i></th>
                                  
                                    
                              </tr>
                         </tbody>
	

	
	 <?php
    while ($donne=$listeevent->fetch())
    {
    ?>
    <tbody> 
    <tr>     
    <td><?php echo $donne['id'] ?></td>
    <td><?php echo $donne['number'] ?></td>
    <td><?php echo $donne['town'] ?></td>
    <td><?php echo $donne['adresse']?></td>
    <td><?php echo $donne['name']?></td>
	<td><?php echo $donne['ref']?></td>
	<td><?php echo $donne['datel']?></td>
			<?php
			if($donne['town']=='tunis' || $donne['town']=='tunisia')
			{
			?>
			<td><?php echo '10.00$';?></td>
			<?php 
			}
			else
			{
			?>
			<td><?php echo '30.00$';?></td>
			<?php 
			}
			?>
	<td><a class="btn btn-success" href="edit.php?edit_id=<?php echo $donne['id']; ?>" alt="edit" >Modifier</a></td>
	<form method="POST" action="supprimer.php">
    <td><input type="submit" name="supprimer" class="btn btn-danger" value="supprimer">
    <input type="hidden" value="<?php echo $donne['id'];?>" name="id">
    </td>
    </form>
	<form action="pdff.php" method="post">
	<td>
	<input type="submit" name="create_pdf" class="btn btn-primary" value="create PDF"/>
	</td>
	</form>
		</tr>
		
			
    <?php
		}
		
            
	?>

</table>

<form method="POST" action="livraison.html" name="f4">
<input type="submit" value="ok" onclick="test1()" class="bouton1" />
</form>
<form method="POST" action="livraison.html" name="f4">
<input type="submit" value="Retour"  class="bouton1" />
</form>
</center>

</body>
</html>