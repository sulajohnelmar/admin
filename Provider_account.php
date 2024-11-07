<?php

/*require_once('config/db.php');
$query = "select * from users_account";
$result = mysqli_query($con,$query);
*/
require_once 'config/db.php';
require_once 'config/functionss.php';

$result = display_data();

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>crud dashboard</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
	    <!----css3---->
        <link rel="stylesheet" href="css/custom.css">
		
		
		<!--google fonts -->
	
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	
	
	<!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

  </head>
  <body>

		   
		   
		   <!--------main-content------------->
		   
	<div class="main-content">
		<div class="row">
			    
			<div class="col-md-12">
				<div class="table-wrapper">
                <div class="table-title">
                  <div class="row">
                    <div class="col-sm-6 p-0 d-flex justify-content-lg-start justify-content-center">
                      <h2 class="ml-lg-2">Service Provider Account</h2>
                    </div>
                  </div>
                </div>
                <table class="table table-bordered table-striped text-center">
                  <thead>
                      <tr class="bg-dark text-white">
                          <th>Provider Id</th>
                          <th>Name</th>
                          <th>location_lat</th>
                          <th>location_lng<th>
                      </tr>
                      <tr>
                          <?php
                  
                            while($row = mysqli_fetch_assoc($result))
                            {
                          ?> 
                          <td><?php  echo $row['provider_id']; ?></td>
                          <td><?php  echo $row['name']; ?></td>
                          <td><?php  echo $row['location_lat']; ?></td>
                          <td><?php  echo $row['location_lng']; ?></td>
                      </tr>     

                          <?php 
                          }

                          ?>
                      
                  </thead>  
              </table>

    
			 
			 
			 
        </div>
      </div> 
	  </div>
  </div>



<!----------html code compleate----------->








  
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
  
  
  <script type="text/javascript">
        
		$(document).ready(function(){
		  $(".xp-menubar").on('click',function(){
		    $('#sidebar').toggleClass('active');
			$('#content').toggleClass('active');
		  });
		  
		   $(".xp-menubar,.body-overlay").on('click',function(){
		     $('#sidebar,.body-overlay').toggleClass('show-nav');
		   });
		  
		});
		
</script>
  
  



  </body>
  
  </html>
