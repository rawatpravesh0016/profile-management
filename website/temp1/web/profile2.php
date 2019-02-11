<!DOCTYPE html>
<?php include 'connect.php' ?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>

table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 80%;
    resize: both;
    height: 100px;
    border: 1px solid #ddd;
    margin-left: 10%;
    margin-right: 10%;
}

th, td {
    text-align: left;
    padding: 25px;
}

tr:nth-child(even){background-color: #f2f2f2}
a:link {
    color: green; 
    text-decoration: none;
}
a:hover {
    color: red;
    text-decoration: underline;
}

a:active {
    color: yellow;
    text-decoration: underline;
}
.hero-image {
  background-image: "";
  background-color: #cccccc;
  height: 500px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
</style>
</head>
<body>
<?php 
	$result = mysqli_query($con,'select prefix,name,qualification,office_location,resume from faculties;'); 
	$count= mysqli_num_rows($result);
?>
<br><br>
<div class="jumbotron" style="-webkit-box-shadow: -1px 9px 9px -1px rgba(232,232,232,0.88);
-moz-box-shadow: -1px 9px 9px -1px rgba(232,232,232,0.88);
box-shadow: -1px 9px 9px -1px rgba(232,232,232,0.88);background-color: LightSteelBlue  !important">
      <a href="../../../../hey/index.html">  <button type="button" style="position:absolute; margin-left:1350px; top:40px; " class="btn btn-outline-primary">Home</button> </a>
  <h1 style="text-align: center; color: white; text-shadow: 1px 1px 2px #000000;">MNNIT Faculty Profile</h1>
  
</div>

<br><br><br><br>
<div style="overflow-x:auto;">
  <table >
    <tr>
      <th>Sno.</th>
      <th>Name</th>
      <th>Qualifications</th>
      <th>Office Location</th>
      <th>Resume</th>
    </tr>
 <?php
 		$i=0;
 		if($count >0)
 		{
 			while($row = mysqli_fetch_array($result))
 			{
        $i++;
 ?>
 				<tr>
     			 <td><?php echo $i; ?></td>
     			 <td><?php echo $row[0]." ".$row[1]; ?> </td>
     			 <td><?php echo $row[2]; ?></td>
     			 <td><?php echo $row[3]; ?></td>
      			 <td><a href="<?php echo $row[4]; ?>" >View</a></td>
   				 </tr>
   			<?php
 			}
 		}
  ?>
    
    
  </table>
</div>
<br><br><br><br><br>
</body>
</html>