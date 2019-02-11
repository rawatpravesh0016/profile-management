<!DOCTYPE HTML>
<?php 
include 'connect.php';
?>
<html>
	<head>
		<title>MNNIT PROFILE VIEW</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="landing">

	

		<!-- Banner -->
			<section id="banner">
                  <a href="../hey/index.html">  <button type="button" style="margin-left:630px; top:30px; position: absolute;" class="btn btn-outline-primary">Home</button> </a>
				<i class="icon fa-diamond"></i>
				<h2>FACULTY PROFILE</h2>
                <p></p>
                <p></p>
				<ul class="actions">
					<li><a href="#one" class="button big special">Learn More</a></li>
				</ul>
			</section>

		<!-- One -->
			<section name="one" id="one" class="wrapper style1">
				<div class="inner">
                    
                            <?php $var = mysql_query("select * from faculties");
                                        while($row = mysql_fetch_assoc($var)) {?>
					<article class="feature left">
						<span class="image"><?php echo '<img src="data:image/png;base64,'.base64_encode( $row['photo'] ).'"/>'; ?></span> 
						<div class="content">
                            
                            <table>
                                       <?php     echo "<tr><td>";
                                            echo "Name : </td><td>";
                                            echo $row['prefix']." ".$row['name']."</td></tr>";
                                            
                                            echo "<tr><td>";
                                            echo "Designation : </td><td>";
                                            echo $row['designation']."</td></tr>";
                                            
                                            echo "<tr><td>";
                                            echo "Qualification : </td><td>";
                                            echo $row['qualification']."</td></tr>";
                                            
                                            echo "<tr><td>";
                                            echo "Phone Number : </td><td>";
                                            echo $row['phone_no']."</td></tr>";
                                            
                                            echo "<tr><td>";
                                            echo "Email : </td><td>";
                                            echo $row['email']."</td></tr>";
                                            
                                            echo "<tr><td>";
                                            echo "Description : </td><td>";
                                            echo $row['description']."</td></tr>";
                                                                               
                                            
                                            echo "<tr><td>";
                                            echo "Visit Resume : </td><td>";
                                            echo "<a href=";                                    
                                            echo $row['resume'].">Resume</a></td></tr>";
                                    ?> 
                            </table>
                                
                            
                            
						</div>
					</article>
                    
                    <?php } ?>
                    
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook">
							<span class="label">Facebook</span>
						</a></li>
						<li><a href="#" class="icon fa-twitter">
							<span class="label">Twitter</span>
						</a></li>
						<li><a href="#" class="icon fa-instagram">
							<span class="label">Instagram</span>
						</a></li>
						<li><a href="#" class="icon fa-linkedin">
							<span class="label">LinkedIn</span>
						</a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; MGK FANS</li>
						</ul>
				</div>
			</footer>


	</body>
</html>