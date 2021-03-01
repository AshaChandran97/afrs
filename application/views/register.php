<!DOCTYPE html>
<html>
    <head>
      <title>USER_HOME_PAGE</title>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/style.css');?>" media="all">
      <meta charset=utf-8>
      <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
    </head>
  <style>
    .bi2{
    background-image:url("../img/18c.jpg");
    background-size:cover;
  </style>
    <body class="bi2">
      <a class="navbar-brand" href="<?php echo base_url()?>main/index"> Home</a>  
<!-- nav section start -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!-- main section start -->
<section class="">
<div class="container ">
<div class="row">


<div class="col-6 py-5 mt-5 text-right">
<h3>sign-up</h3>

</div>
<div class="col-6 box1">

<form action="<?php echo base_url()?>main/regaction" method="POST" class="border  border-2 border-light p-5 rounded-bottom rounded">

  <div class="row mb-3">
    <div class="col-10">
      <input type="text" class="form-control" placeholder="firstname" name="fname" pattern="[a-zA-Z]+"   required title="Please insert vaild data" maxlength="25" >
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-10">
      <input type="text" class="form-control" placeholder="lastname" name="lname" pattern="[a-zA-Z]+"   reqiured title="Please insert vaild data" maxlength="25">
    </div>
  </div>
   <div class="row mb-3">
    <div class="col-10">
      <input type="number" class="form-control" placeholder="age"  name="age"  title="Please insert age" required="required"></div>
  </div>
  <div class="mb-3">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" name="gender" type="radio" value="female" id=female required="required">
      <label class="form-check-label " for=female value="female">female</label>
     &nbsp;&nbsp;&nbsp;&nbsp; <input class="form-check-input" name="gender" type="radio" value="male" id=male required="required">
    <label class="form-check-label " for=male value="male">male</label>
</div>
   <div class="mb-3">
        <textarea class="form-control" placeholder="address" name="address" rows="3" required="required"></textarea>
  </div>
<div class="row mb-3">
    <div class="col-10">
      <input type="text" class="form-control" placeholder="phoneno" name="phno" required="required" pattern="[7-9]{1}[0-9]{9}">
    </div>
</div>
 
  <div class="row mb-3">
    <div class="col-10">
      <input type="email" class="form-control" placeholder="email" required="required" name="email" pattern="[a-zA-Z0-9!#$%&amp;'*+\/=?^_`{|}~.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-10">
      <input type="password" class="form-control" placeholder="password" name="password" required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign-up</button>

  
 
  </form>
 
</div>

</div>
</div>
</section>
<!-- main section end -->
<section class="">


</section>


        <!---Jquery--->
<script
  src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">
</script>

<!---Popper---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>

<!---Custom Js-->
<script src="js/script.js"></script>
    </body>
</html>
