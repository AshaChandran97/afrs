<!DOCTYPE html>
<html>
    <head>
      <title>ADD AIRLINE DETAILS</title>
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
  </style>
    <body>
<!-- nav section start -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  <!---main nav--->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo base_url()?>main/userhome"> Home</a>  
           
           
      </div>
    </nav>
    <!---nav end--->
<!-- main section start -->
<section class="">
<div class="container ">
<div class="row">


<div class="col-6 py-5 mt-5 text-right">
<h3>you can book your journey</h3>

</div>
<div class="col-6 box1">
 
       

<form action="<?php echo base_url()?>main/bookformaction" method="POST" class="border  border-2 border-light p-5 rounded-bottom rounded">
  <?php
    if($n->num_rows()>0)
    {
      foreach($n->result() as $row)
      {
        ?>

 
             
  <div class="row mb-3">
    <div class="col-10">
      FLIGHTNUMBER:

      <input type="text" class="form-control" placeholder="" value="<?php echo $row->flightno;?>" name="flightno">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-10">
      FLIGHTNAME:
      <input type="text" placeholder="" value="<?php echo $row->flightname;?>" name="flightname" >
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-10">
      DEPARTUREAIRPORT:
      <input type="text" class="form-control" placeholder=""  value="<?php echo $row->departureairport;?>" name="departureairport">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-10">
      DEPARTUREDATE:
      <!-- <input type="date" name="date"> -->
      <input type="date" class="form-control" placeholder="" value="<?php echo $row->departuredate;?>" name="departuredate" type="date">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-10">
       DEPARTURETIME:
       <!-- <input type="time" name="time"> -->
      <input type="time" class="form-control" placeholder=""  value="<?php echo $row->departuretime;?>" name="departuretime" type="time">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-10">
      ARRRIVALAIRPORT:
    <input type="text" class="form-control" placeholder="" value="<?php echo $row->arrivalairport;?>" name="arrivalairport">

    </div>
  </div>
  CLASS:
  <select name="class" >
    <option >Select</option>
    <option value="e">Economic class</option>
    <option value="b">Bussiness class</option>
  </select>

         <?php

                  }
                        }
                    
                        ?>

<?php
    if($m->num_rows()>0)
    {
      foreach($m->result() as $row)
      {
        ?>


  <div class="row mb-3">
    <div class="col-10">
      <br>
      FIRST NAME:
      <input type="text" class="form-control" placeholder="" value="<?php echo $row->fname;?>" name="fname">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-10">
      <br>
      LAST NAME:
      <input type="text" class="form-control" placeholder="" value="<?php echo $row->lname;?>" name="lname">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-10">
      AGE:
      <input type="text" class="form-control" placeholder="" name="age" value="<?php echo $row->age;?>">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-10">
      GENDER:
      <input type="text" class="form-control" placeholder="" name="gender" value=
      "<?php echo $row->gender;?>">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-10">
      PHONENUMBER:
      <input type="text" class="form-control" placeholder="" name="phno" value="<?php echo $row->phno;?>">
    </div>
  </div>
         
  <input type="submit" class="btn btn-primary" value="BOOK NOW">

  <?php

                  }
                        }
                    
                        ?>
 </form>`
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