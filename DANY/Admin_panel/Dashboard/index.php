<!DOCTYPE html>
<?php 
session_start();
// print_r($_SESSION['Username']);
$dd=$_SESSION['Username'];
// echo "ass $dd";
$user=$_SESSION['Username'];
$ss=false;
if(!empty($user)||$user!=""){
  $ss=true;
}
if($ss==true){
  echo '
<html lang="en">


    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta
          name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <title>ILLUSIONAIRE</title>
        <!-- Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
          href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet"
        />
        <!-- Normalize -->
        <link rel="stylesheet" href="../../CSS/normalize.css" />
        <!-- Bootstrap -->
        <link
          rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous"
        />
        <!-- Custom CSS -->
        <link rel="stylesheet" href="../../CSS/panel.css" />
        <link rel="stylesheet" href="../../CSS/style.css" />
      </head>
      <body>
        <div class="container">
 
            <div class="img_center1">
              <img src="../imgs/LOGOILL.png"  class="img_center" >
                       
            <h2 id="leh">illusionaire panel</h2>
            <div class="img_center">
            <div class="arrow" style="float:left"><div class="arrow-top"></div><div class="arrow-bottom"></div></div>
            <div class="arrow" style="float:right"><div class="arrow-top"></div><div class="arrow-bottom"></div></div>

</div>
            <!-- <input type="button" value="contact us"> -->

            <!-- <input type="button" > -->
            
      
           <!-- <div id="showdata" > -->

   <table class="table">
    <thead>
      <tr>
        <th>Full Name</th>
        <th>Email</th>
        <th>Message</th>
      </tr>
    </thead>
    <tbody>';
      
   $dbservername="localhost";
   $dbusername="root";
   $dbpassword="";
   $dbname="illusionaire";
   $conn = mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
      $sql ="SELECT * FROM `contact_us`";
    $result =mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>".$row["full_name"]."</td>";
        echo "<td>".$row["Email"]."</td>";
        echo "<td>".$row["Message"]."</td>";
        echo "</tr>";

    }
      
      

   echo' </tbody>
  </table>
          <!-- </div> -->
       
        </div></div>
       
        <footer class="footer-container">
          <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
        
          </div>
          <ul class="social-icon">
            <li><a href="https://www.facebook.com/110217511736688/posts/114471421311297/?substory_index=0&mibextid=gLrg5J&fs=e&s=cl
              "><ion-icon name="logo-facebook"></ion-icon></a></li>
            <li><a href="https://twitter.com/illusionaire_vr/status/1547391352387813377?s=21&t=l2Hgh59-FtMyS04NSSKZTghttps://www.facebook.com/110217511736688/posts/114471421311297/?substory_index=0&mibextid=gLrg5J&fs=e&s=cl
              "><ion-icon name="logo-twitter"></ion-icon></li>
            <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></li>
            <li><a href="https://www.instagram.com/illusionaire.vr/"><ion-icon name="logo-instagram"></ion-icon></li>
            <li><a href="#"><ion-icon name="logo-tiktok"></ion-icon></li>
          
        
          </ul>
          <ul class="footer-menu">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#features">Features</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact Us</a></li>
            <li><a href="#book-online">Book Online</a></li>
        
        
          </ul>
          <p>@2022, illusionaire Empire</p>
        </footer>
         <!-- Bootstrap & Main Js -->
    <script
    src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"
  ></script>
  <!-- Footer ionicons -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="../../JS/main.js"></script>
  <script>

    var d=document.getElementById("showdata");
    var data= localStorage.getItem("data");
    console.log(data)
    d.innerHTML=data;
  </script>
      </body>
</html>
';}
?>