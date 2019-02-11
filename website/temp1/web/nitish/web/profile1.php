<!DOCTYPE html>
<html lang="en">
<head>
<title>Profile</title>
<style type="text/css">
	#myVideo {
    position: fixed;
    right: 0;
    bottom: -200px;
    min-width: 100%; 
    min-height: 100%;
    opacity: 75%;
}
header {
  position: relative;
  background-color: black;
  height: 50vh;
  min-height: 25rem;
  width: 100%;
  overflow: hidden;
}
header video {
  position: absolute;
  top: 90%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: ;
  -ms-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}
header .container {
  position: relative;
  z-index: 2;
}

header .overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: black;
  opacity: 0.5;
  z-index: 1;
}

@media (pointer: coarse) and (hover: none) {
  header {
    background: url('https://source.unsplash.com/XT5OInaElMw/1600x900') black no-repeat center center scroll;
  }
  header video {
    display: none;
  }

</style>
<!-- Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
<?php
include ('connect.php');
?>
<header>
	  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="hyperlapse.mp4" type="video/mp4">
  </video>
  <div class="container h-100">
    <div class="d-flex text-center h-100">
      <div class="my-auto w-100 text-white">
        <a href="../../../../hey/index.html">  <button type="button" style="margin-left:100%;" class="btn btn-outline-primary">Home</button> </a>
        <h1 class="display-3">Welcome to Faculty Profile Management View 1</h1>
        <h2>This is the first view of all the teachers profile</h2>
      </div>
    </div>
  </div>
</header>
<br><br>
<section>
  <div class="row">
    <div class="col-lg-12 page-header text-center">
      <br>
    </div>
  </div>
  <div class="container ">
    <div class="row">
      <?php
        $result=mysqli_query($con,"select * from faculties");
        $row=mysqli_num_rows($result);
        $data=mysqli_fetch_array($result);
        ?>
        <div class="col-lg-4 col-sm-12 text-center">
        <a href="<?php echo $data['resume'] ?>"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $data['photo'] ).'" style="width: 140px; height: 140px;" />'  ?></a>
        <br><br>
        <h3><?php echo $data['prefix'].' '.$data['name'] ?></h3>
        <h5><?php echo $data['qualification'] ?></h5>
        <p><?php echo $data['office_location'] ?></p>

        <br><br>
      </div>
      <?php 
        $i=0;
            while($data = mysqli_fetch_array($result)){
                $i++;
        ?>
      <div class="col-lg-4 col-sm-12 text-center"> 
        <a href="<?php echo $data['resume'] ?>"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $data['photo'] ).'" style="width: 140px; height: 140px;" />'  ?></a>
      	<br><br>
        <h3><?php echo $data['prefix'].' '.$data['name'] ?></h3>
        <h5><?php echo $data['qualification'] ?></h5>
        <p><?php echo $data['office_location'] ?></p>
        <br><br>
        <br><br>
      </div>
      <?php
        }
      ?>
    </div>   
  </div>
  <div class="jumbotron">
    <div class="container">
          <p class="lead">This website was created by: Pravesh Rawat, Nitish Sihmar, Tushar Garg and Shivam Singh. Contact us at abc@gmail.com</p>
  	</div>
  </section>
</body>
</html>
  