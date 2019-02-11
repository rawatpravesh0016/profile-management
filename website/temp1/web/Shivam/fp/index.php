<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Faculty Profile</title>
    
<!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
	<link href='http://fonts.googleapis.com/css?family=Lato:300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body style="background-color: #BCB9B8;">
    
    <!--HEADER-->
    
<div class="">
  <div class="jumbotron" style="height:30px;">
    <h1 style="margin-left:500px;font-family: Impact,Charcoal,sans-serif">MNNIT FACULTY PROFILE</h1> 
    <p></p> 
  
    
     <a href="../../../../hey/index.html"> <button type="button" style="margin-left:90%;" class="btn btn-outline-primary">Home</button></a>

    
    </div> 

    
    </div>    
    
    
    
	<?php
     include ('connect.php');
    ?>
    
    <?php
    
    	$data1=mysqli_query($con,"select * from faculties");
    	//$row=mysqli_num_rows($data);
    	//$arr=mysqli_fetch_array($data);
    	$i=0;
    
            while($data = mysqli_fetch_array($data1)){
                $i++;
        ?>
	<header style="position: relative;">
		<?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $data['photo'] ).'" style="width: 384px; height: 384px;position: relative; border:1px solid #ffffff; border-width: 7px;border-radius: 25px;" />' ?>
		<p style="position: relative;"><?php echo $data['designation'] ?></p>
		<h1 style="position: relative;"><?php echo $data['name'] ?></h1>
	</header>
	<div class="container">
	<section class="education">	<hr>
		<table>
			<tr><td style="color: black; font-weight: bold;">Qualifications:</td>
			<td style="color: black;"><?php echo $data['qualification'] ?></td></tr></table><hr>
		</section>
		<section class="experience">
			<div class="row">
					<h2 style="color: black; font-weight: bold;">Experienced In:</h2>
					<p style="color: black; margin-left:5px; margin-top:8px;"><?php echo $data['aoi'] ?></p>
			</div>
		</section><hr>
		<h2 style="color: black; font-weight: bold;">Contact:</h2>
		<p style="color: black; font-weight: bold; display:inline;">Phone:</p><p style="display: inline; color: black;"> <?php echo $data['phone_no'] ?></p><br>
			<p style="color: black; font-weight: bold; display:inline;">Email:</p><p style="display: inline; color: black;"> <?php echo $data['email'] ?></p>
			<hr>
			<h2 style="color: black; font-weight: bold;">Achievements</h2>
			<p style="color: black;"><?php echo $data['achievements'] ?></p>
			<hr>
			<a href="<?php echo $data['resume'] ?>"> Curriculum Vitae</a>
			<br>
			<br>
			<br>
		
	</div>
	</div>
	<?php
        }
      ?>
</body>
</html>