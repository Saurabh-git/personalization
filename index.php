<?php
		$con = mysql_connect('localhost','root','');

			if (!$con)
			{
				echo'not connected';
			}

			$sel_db= mysql_select_db('personalization',$con);
	?>
	
<?php 
	
  
    //$sql = mysql_query("INSERT INTO estcontact (name,email,mobile,message) values('$name','$email','$mobile','$message')");
	$sql = mysql_query("SELECT * from jira_tickets where status=1");
	$sql1 = mysql_fetch_array($sql);
	print_r($sql1);
	die();
    if(!$sql)
    {
   	 	echo'not inserted';
    }
    else
    {
    	echo' inserted';
    }	
    
    ?>	

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Personalization</title>
	<link href="css/datatables.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">	
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->	
  </head>
  <body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <!-- The mobile navbar-toggle button can be safely removed since you do not need it in a non-responsive implementation -->
          <a class="navbar-brand" href="#">Personalization</a>
        </div>
        <!-- Note that the .navbar-collapse and .collapse classes have been removed from the #navbar -->
        <div id="navbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>         
          </ul>          
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="page-header">
        <h1></h1>
      </div>
	  
	  <div class="row">		
        <div class="col-md-12">
		     <table id="tbl-data" class="table table-bordered table-striped tbl-info">
			    <thead>
				   <tr> 
				     <th style="width:40px;">S.No.</th>
					 <th style="width:50px;">JIRA#</th>
					 <th>Campaign Name</th>
					 <th class="text-center" style="width:80px;">Action</th>
				   </tr>				   
				</thead>
				<tbody>
				   <tr>
				     <td>1</td>
					 <td>VSD-6659</td>
					 <td><a href="#">PRODUCTION1111 | AMER Financial Services - 6659</a></td>
					 <td>
					   <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-plus"></button>
					   <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-pencil"></button>		 
					 </td>
				   </tr>
				   
				   <tr>
				     <td>2</td>
					 <td>VSD-6278</td>
					 <td><a href="#">VSAN Inbound Strategy Q32016</a></td>
					 <td>
					   <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-plus"></button>
					   <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-pencil"></button>		 
					 </td>
				   </tr>
				   
				   
				   <tr>
				     <td>3</td>
					 <td>VSD-6185</td>
					 <td><a href="#">vSAN</a></td>
					 <td>
					   <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-plus"></button>
					   <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-pencil"></button>		 
					 </td>
				   </tr>
				   
				   
				   <tr>
				     <td>4</td>
					 <td>VSD-6666</td>
					 <td><a href="#">Cloud Foundation - ISBU</a></td>
					 <td>
					   <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-plus"></button>
					   <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-pencil"></button>		 
					 </td>
				   </tr>
				   
				   
				   <tr>
				     <td>5</td>
					 <td>VSD-6665</td>
					 <td><a href="#">AMER vRealize Personalization</a></td>
					 <td>
					   <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-plus"></button>
					   <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-pencil"></button>		 
					 </td>
				   </tr>
				   
				   
				   <tr>
				     <td>6</td>
					 <td>VSD-6654</td>
					 <td><a href="#">AMER vSOM/vSphere personalization</a></td>
					 <td>
					   <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-plus"></button>
					   <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-pencil"></button>		 
					 </td>
				   </tr>
				   
				   
				   <tr>
				     <td>7</td>
					 <td>VSD-6662</td>
					 <td><a href="#">AMER vCloud Air Personalization</a></td>
					 <td>
					   <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-plus"></button>
					   <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-pencil"></button>		 
					 </td>
				   </tr>
				   
				   <tr>
				     <td>8</td>
					 <td>VSD-6658</td>
					 <td><a href="#">eStore Personalization for shopping cart abandonment</a></td>
					 <td>
					   <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-plus"></button>
					   <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-pencil"></button>		 
					 </td>
				   </tr>
				   
				   <tr>
				     <td>9</td>
					 <td>VSD-6280</td>
					 <td><a href="#">NSX</a></td>
					 <td>
					   <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-plus"></button>
					   <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-pencil"></button>		 
					 </td>
				   </tr>
				   
				   <tr>
				     <td>10</td>
					 <td>AMR-1513</td>
					 <td><a href="#">PRODUCTION | Last Visited Homepage JP locale</a></td>
					 <td>
					   <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-plus"></button>
					   <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-pencil"></button>		 
					 </td>
				   </tr>

 				   
				   
				</tbody>
				
				
			 </table>
   
          

			
		</div>

		</div>
	  


    </div> <!-- /container -->

	<!--Footer-->
	  <footer class="footer">
	     <div class="container">
		   <p>© 2016. Maintained by Nvish Front End Devs</p>
		 </div>
		 
	  </footer>
	<!--//Footer-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
	<script src="js/custom.js"></script>
    <script src="js/bootstrap.min.js"></script>		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>
	
	
	
  </body>
  </html>
  
  
  