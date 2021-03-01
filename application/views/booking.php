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
  <body>
   <center><h1>AIRLINE BOOKING SYSTEM</h1>
    <h2>BOOK AIRLINES</h2></center> 
    <form action="" method="post">
    <table  class="table table-success table-striped table-hover">
    <tr>
    <td>FLIGHTNUMBER</td>
        <td>FLIGHTNAME</td>
        <td>DEPARTURE AIRPORT</td>
        <td>DEPARTURE TIME</td>
        <td>DEPARTURE DATE</td>
        <td>ARRIVAL AIRPORT</td>
        <td>ARRIVAL TIME</td>
        <td>DEPARTURE DATE</td>
        <td>ECONOMY CAPACITY</td>
        <td>ECONOMY PRICE</td>
        <td>BUSSINESS CAPACITY</td>
        <td>BUSSINESS PRICE</td>
         <td>BOOK NOW</td>

    

      
    </tr>
    <?php
    if($n->num_rows()>0)
    {
      foreach($n->result() as $row)
      {
        ?>
        <tr>
              <td>
                <?php echo $row->flightno;?></td>
                            <td>
                            <?php echo $row->flightname;?></td>
                             <td>
                            <?php echo $row->departureairport;?></td>
                             <td>
                            <?php echo $row->departuretime;?></td>
                            <td>
                            <?php echo $row->departuredate;?></td>
                             <td>
                            <?php echo $row->arrivalairport;?></td>
                             <td>
                            <?php echo $row->arrivaltime;?></td>
                            <td>
                            <?php echo $row->departuredate;?></td>
                             <td>
                            <?php echo $row->economycapacity;?></td>
                             <td>
                            <?php echo $row->economyprice;?></td>
                             <td>
                            <?php echo $row->bussinesscapacity;?></td>
                             <td>
                            <?php echo $row->bussinessprice;?></td>
                            
                      <td>
                        <a href="<?php echo base_url()?>main/idsave/<?php echo $row->id;?>">BOOK NOW</a>
                      </td>
                
                            </tr>
                                <?php

                  }
                        }
                    
                        ?>
  </table>
</form>
</body>
</html>