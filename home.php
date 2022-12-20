<?php
require_once "conf.php";
if(isset($_POST['name'])){
    $name=$_POST['name'];

    $sql="INSERT INTO `review` (`review`) VALUES ('$name');";
    // echo $sql;
    
    if($con->query($sql)==true){
        // echo "sussessfully inserted";
    }else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con -> close();
}
?>

<?php 
   $server = "localhost";
   $username = "root";
   $password = "";
   $database="trip";

   $con = mysqli_connect($server, $username, $password,$database);

   if(!$con){
       die("connection to this database is failed due to". mysqli_connect_error());
   }else{
    // echo "connection was successful";
   }

   $query="SELECT * FROM review";
   $result=mysqli_query($con,$query);

  
?>




<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Ansh Eventography</title>
  <!-- Bootstrap java script link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- Google fonts link -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
  <!-- Bootstrap css link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!-- css file link -->
  <link rel="stylesheet" href="style.css">
  <!-- fontAwesome link -->
  <script src="https://kit.fontawesome.com/7f5971d884.js" crossorigin="anonymous">
  </script>

</head>

<body>

  <section id="title">
    <div class="container-fluid ">

      <!-- Nav Bar -->
      <div class="navbar  navbar-expand-lg  navbar-dark ">
        <a class="navbar-brand" href="" style=" font-weight: 700; font-family: 'Montserrat-Bolder', sans-serif; "><h3>Ansh Eventography</h3></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#footer">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#pricing">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>

        </div>
      </div>





      <!-- Title -->
      <div class="row">
        <div class="col-lg-6">
          <h1 >A Nanded based Event Photographers team.</h1>
          <button type="button" class="btn btn-outline-light btn-lg"> Know more</button>
        </div>
        <div class="col-lg-6">
            <img src="https://tse3.mm.bing.net/th?id=OIP.TuZZuP6cff1sZ3GMAVX_gQHaHW&pid=Api&P=0" alt="" style="width:400px; border-radius: 100%;" >
        </div>
      </div>


  </section>


  <!-- Features -->

  <section id="features">
    <div class="row">
      <div class="feature-box col-lg-4 ">
        <i class="icon fa-solid fa-circle-check fa-4x"></i>
        <h3>1000 +</h3>
        <p>Projects Completed</p>
      </div>
      <div class="feature-box col-lg-4 ">
        <i class="fa-solid fa-user fa-4x"></i>
        <h3>1000 +</h3>
        <p>Happy Customers</p>
      </div>
      <div class="feature-box col-lg-4">
        <i class="fa-solid fa-users-line fa-4x"></i>
        <h3>20 +</h3>
        <p>Employees</p>
      </div>
    </div>
    </div>
  </section>

  <div class="container">
        <h1>Write a Review</h1>

        <form action="" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your Name" required>
            <br><br><br>
            <button class="btn">Submit</button>
        </form>
    </div>
 
  <!-- Pricing -->

  <section id="testimonial">

    <h2 class="abc" style="color: white;">Testimonials</h2>
    
    <div class="row" >
      
        <?php 
        while( $row = mysqli_fetch_assoc($result)){
       ?>
       <div class="pricing-colom col-lg-4 col-md-6" >
       <div class="card">
        <?php echo  $row['review'];
       ?>
         </div>
         </div>
       <?php
        }
        ?>
      </div>

    </div>

  </section>


 <footer id="footer">
    <a href="https://www.facebook.com/ansheventsnanded" style="padding:0 15px 0 0;"><i class="footer-icon fa-brands fa-facebook-f"></i></a>
     <a href="https://www.instagram.com/ansheventphotography/?r=nametag" style="padding:0 15px 0 0;"><i class="footer-icon fa-brands fa-instagram"></i></a>
     <a href="https://www.youtube.com/channel/UC12t5z6Ofe5i6E0mMQNBsbA"><i class="fa-brands fa-youtube"></i></a>
      <br>
      <p style="color:grey; ">© Copyright 2022 Ansh Eventography</p
    </footer>


   <div id="my-contact">
        <a class="contact-btn btn btn-lg btn-dark " type="button" name="button" href="contact.php">Contact us</a>
   </div>

</body>

</html>