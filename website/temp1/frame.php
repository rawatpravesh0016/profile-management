<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>
 <head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  
<!-- Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">         
     
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

<script>
$(document).ready(function(){
    $('.modal').modal();
  })
</script>
</head>

<body>

<div class="">
  <div class="jumbotron" style="height:30px;">
    <h1 style="margin-left:500px;font-family: Impact,Charcoal,sans-serif">MNNIT FACULTY PROFILE</h1> 
    <p></p> 
      
     <a href="../../../../hey/index.html"> <button type="button" style="margin-left:90%; margin-top:10px; position:absolute;" class="btn btn-outline-primary">Home</button></a>
    
    </div> 
  
</div>          
        
<div class="container ">
    <div class="row">
      <?php
        $result=mysql_query("select * from faculties");
        $row=mysql_num_rows($result);
        $data=mysql_fetch_array($result);
        ?>
        <div class="col-lg-4 col-sm-12 text-center">
            
        <a class="waves-effect waves-light modal-trigger" href="#demo-modal"><?php echo '<img style="height: 140px; width:140px;"src="data:image/png;base64,'.base64_encode($data['photo']).'"/>'; ?></a>
        <br><br>
        <h3><?php echo $data['prefix'].' '.$data['name'] ?></h3>
        <h5><?php echo $data['qualification'] ?></h5>
        <p><?php echo $data['office_location'] ?></p>

        <br><br>
      </div>
      <?php 
        $i=0;
            while($data = mysql_fetch_array($result)){
                $i++;
        ?>
      <div class="col-lg-4 col-sm-12 text-center"> 
        <a class="waves-effect waves-light modal-trigger" href="#demo-modal"><?php echo '<img style="height: 140px; width:140px;" src="data:image/png;base64,'.base64_encode($data['photo']).'"/>'; ?></a>
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
    
    
    
    
    
<!-- This is the beginning of modal-->
  <div id="demo-modal" class="modal" style="height:330px;">
    <div class="modal-content">
        
    <?php $var = mysql_query("select * from faculties");
    while($row = mysql_fetch_assoc($var)) {?>
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
                                            echo "Visit Resume : </td><td>";
                                            echo "<a href=";                                    
                                            echo $row['resume'].">Resume</a></td></tr>";}
                                           ?> 
                            </table>
                                    
         
    </div>
      
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-red btn lighten-1" style="margin-top:10%;">Close</a>
        
    </div>
       
  </div>
    
    <!-- This is the end of modal-->
</div>
  
<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">

    <!-- Footer Elements -->
    <div class="container">

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-6 mb-4">


        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">


        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3" style="margin-left:50%;">
        © 2018 Copyright
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->    
    
</body>   
</html>