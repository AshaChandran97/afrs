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
      <a class="navbar-brand" href="<?php echo base_url()?>main/adminhome"> Home</a>      
         
      </div>
    </nav>
    <!---nav end--->
  <?php
        if(isset($user_data))
        {
            foreach($user_data->result() as $row)
            {
        ?>

<!-- main section start -->
<section class="">
<div class="container ">
<div class="row">


<div class="col-6 py-5 mt-5 text-right">
<h3>AIRLINES</h3>

</div>
<div class="col-6 box1">

<form action="<?php echo base_url()?>main/updateairlineaction" method="POST" class="border  border-2 border-light p-5 rounded-bottom rounded">

  <div class="row mb-3">
    <div class="col-10">
      FLIGHTNO:
      <input type="text" class="form-control" placeholder="" name="flightno"  
      required maxlength="25" value="<?php echo $row->flightno;?>" >
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-10">
      FLIGHTNAME:
      <input type="text" class="form-control" placeholder="" name="flightname"
      reqiured maxlength="25" value="<?php echo $row->flightname;?>">
    </div>
  </div>
   <div class="row mb-3">
    <div class="col-10">
      DEPARTURE AIRPORT:
      <select type="text" class="form-control" placeholder=""  name="departureairport"  
       required="required" value="<?php echo $row->departureairport;?>">
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
  </div>
<div class="row mb-3">
    <div class="col-10">
      DEPARTURE TIME:
      <input type="time" class="form-control" placeholder=""  name="departuretime"
      required="required" value="<?php echo $row->departuretime;?>">
    </div>
  </div>
  <div class="row mb-3">
 <div class="col-10">
  DEPARTURE DATE:
      <input type="date" class="form-control" placeholder=""  name="departuredate"
      required="required" value="<?php echo $row->departuredate;?>">
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-10">
      ARRIVAL AIRPORT:
      <select type="text" class="form-control" placeholder=""
       name="arrivalairport"required="required" value="<?php echo $row->arrivalairport;?>">
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
  </div>
  <div class="row mb-3">
    <div class="col-10">
      AIRVAL TIME:
      <input type="time" class="form-control" placeholder=""  name="arrivaltime"  
      required="required" value="<?php echo $row->arrivaltime;?>">
    </div>
  </div>
<div class="row mb-3">
    <div class="col-10">
      AIRVAL DATE:
      <input type="date" class="form-control" placeholder=""  name="arrivaldate"  
      required="required" value="<?php echo $row->arrivaldate;?>">
    </div>
  </div>
     <div class="row mb-3">
    <div class="col-10">
      ECONOMY CAPACITY:
      <input type="text" class="form-control" placeholder=""  name="economycapacity"
      required="required" value="<?php echo $row->economycapacity;?>">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-10">
      ECONOMY PRICE:
      <input type="text" class="form-control" placeholder=""  name="economyprice"
       required="required" value="<?php echo $row->economyprice;?>">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-10">
      BUSSINESS CAPACITY:
      <input type="text" class="form-control" placeholder=""  name="bussinesscapacity"
      required="required" value="<?php echo $row->bussinesscapacity;?>">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-10">
      BUSSINESS PRICE:
      <input type="text" class="form-control" placeholder=""  name="bussinessprice"  
      required="required" value="<?php echo $row->bussinessprice;?>">
    </div>
  </div>
  <input type="hidden" name="id" value="<?php echo $row->id;?>">
  <input  type="submit" value="update" name="update" class="btn btn-primary">
  </form>
 
</div>

</div>
</div>
</section>
<!-- main section end -->
<section class="">


</section>

<?php

                            }
                        }
                   
                        ?>
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

   <footer class="container-fluid text-center">  
  </footer>
</body>
</html>

