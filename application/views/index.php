<!DOCTYPE html>
<html>
<head>
<title>Airline </title>
<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


<link rel="stylesheet" href="../css/style.css">
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color:blue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
 /* width: 100%;*/
}

button:hover {
  opacity: 0.5;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
  <!---section 1 started-->
  
  <nav>
    <div class="container-fluid">
      <div class="row na">
        <div class="col-5">
          <i class="fas fa-plane-departure text-white  fa-2x"></i>
          <h3 class="text-white"><i>Airline Booking System</i></h3>
        </div>
        <div class="col-3 font">
          <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="btn btn-primary">LOGIN</button>

         <!--  <button class="text-white text-decoration-none btn btn-primary"  style="width:auto;" action="<?php echo base_url()?>main/register">REGISTER</button> -->
          <button style="width:auto;" class="btn btn-primary"><a  class="text-white text-decoration-none" href="<?php echo base_url()?>main/register">REGISTER</a></button>
        </div>
      <div class="col-4 text-dark text-end fa-2x">
        <i class="fab fa-facebook text-white"></i>
        <i class="fab fa-instagram text-white"></i>
        <i class="fab fa-youtube text-white"></i>
        <i class="fab fa-google text-white"></i>
      </div>
    </div>
  </div>
    </nav>
<section>
  <!----Carosel Start-->
    <div id="carouselExampleSlidesOnly" class="carousel slide " data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item ">
          <img src="../img/38c.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item active">
          <img src="../img/23c.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item ">
          <img src="../img/33c.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   <span class="visually-hidden">Previous</span>
 </button>
 <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
   <span class="carousel-control-next-icon" aria-hidden="true"></span>
   <span class="visually-hidden">Next</span>
 </button>

    </div>
  </section>

      <!----Carosel End-->

  <section class="search-sec py bgblack">
    <div class="container">
            <div class="row">
                <form action="<?php echo base_url()?>main/searchaction" method="post" novalidate="novalidate">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0 mt-2">
                            <input type="date" class="form-control search-slt" placeholder="Enter your date" name=departuredate>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0 mt-2">
                            <select class="form-control search-slt" id="exampleFormControlSelect1" name="departureairport">
                              <option>FROM</option>
                                <option>TRIVANDRUM</option>
                                <option>KANNUR</option>
                                <option>KOCHI</option>
                                <option>KOZHIKODE</option>
                                <option>BANGLOUR</option>
                                <option>CHENNAI</option>
                                <option>GOA</option>
                                <option>PUNE</option>
                                <option>JAIPUR</option>
                                <option>COIMBATOR</option>
                                <option>VISHAKAPATTANAM</option>
                                <option>AGRA</option>

                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0 mt-2">
                            <select class="form-control search-slt" id="exampleFormControlSelect1" name="arrivalairport">
                                <option>TO</option>
                                
                                <option>KANNUR</option>
                                <option>KOCHI</option>
                                <option>KOZHIKODE</option>
                                <option>BANGLOUR</option>
                                <option>CHENNAI</option>
                                <option>GOA</option>
                                <option>PUNE</option>
                                <option>JAIPUR</option>
                                <option>COIMBATOR</option>
                                <option>VISHAKAPATTANAM</option>
                                <option>AGRA</option>
                                <option>TRIVANDRUM</option>
        
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                          <button class="btn btn-danger wrn-btn"
                          type="submit" value="search" name="submit">search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
</div>
</div>
</div>
</div>
</div>
</section> 
<section class=" py-2 bg">
  <div class="imgs">

  <h1 class="text-center text-primary">GET IN TOUCH</h1>

    <div class="row mt-5">
      <div class="col-4">

        <h4 class="color text-center">COVID PROTOCOL</h4>
        <strong><p class="mt-4 text-center">As we resume operations, considering the COVID-19 situation, different state governments have laid out their respective protocols for passengers arriving at their airports. </p></strong>
      </div>  
      <div class="col-4 ">
        <h4 class="px-5 color text-center">CONTACT US</h4>
        <strong><p class="mt-4 text-center"> International Airport Ltd.
CIN: U63033KL1994PLC007803
Registered office:
Room no.35, 4th floor,
GCDA commercial complex,
Marine Drive, Cochin-682 031.</p></strong>
      </div>  
      <div class="col-4 ">  
        <h4 class="px-5 color text-center">GET INFO</h4>
        <strong><p class="mt-4 text-center">An airport is an aerodrome with extended facilities, mostly for commercial air transport. Airports often have facilities to store and maintain aircraft, and a control towe.</p></strong>
      </div> 
</div>
</div>
</section>
<section class="py-3">
  
  <div class="row footer">
    <div class="col-4 text-center">
      <h5 class="py-3">
          <p>AIRLINE Trains</p>
<p>General Information</p>
<p>Important Information</p>
<p>Agents</p>
<p>Enquiries</p>
      </h5>
    </div>
    <div class="col-4 text-center">
      <h5 class="py-3">
        
     <p> How To</p>
<p>AIRLINE Official App</p>
<p>Advertise with us</p>
<p>Refund Rules</p>
<p>Divyangan Facilities</p>
    </h5>
    </div>
    <div class="col-4 text-center">
      <h5 class="py-3">
      <p>AIRLINE eWallet</p>
<p>AIRLINE Loyalty Program</p>
<p>About us</p>
<p>AIRLINE Zone</p>
<p>MP/Ex-MP Ticket Booking</p>
    </h5>
    </div>
  </div>
</section>
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="<?php echo base_url()?>main/techlog" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src=""  class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Emailid</b></label>
      <input type="text" placeholder="Enter Username" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit" name="submit" value="login" style="width:100%;">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>
<footer class="container-fluid text-center">  
  </footer>

<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script src="js/script.js"></script>
</body>
</html>