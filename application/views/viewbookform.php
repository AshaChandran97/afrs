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

	<body>
		
		<h2 class="text-center">VIEW PASSENGERS</h2>
		<form action="" method="post">
		<table class="table table-success table-striped table-hover">
		<tr>
		      <td>FLIGHT NO</td>
          <td>FLIGHTNAME:</td>
          <td>DEPARTUREAIRPORT:</td>
          <td>DEPARTUREDATE:</td>
          <td>DEPARTURETIME:</td>
          <td>ARRRIVALAIRPORT:</td>
          <td>NAME:</td>
          <td>AGE:</td>
          <td>GENDER:</td>
          <td>PHONENO:</td>
          <td>EMAIL:</td>
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
                            <?php echo $row->departuredate;?></td>
                             <td>
                            <?php echo $row->departuretime;?></td>
                             <td>
                            <?php echo $row->arrivalairport;?></td>
                            <td>
                            <?php echo $row->name;?></td>
                            <td>
                            <?php echo $row->age;?></td>
                            <td>
                            <?php echo $row->gender;?></td>
                            <td>
                            <?php echo $row->phno;?></td>
                            <td>
                            <?php echo $row->email;?></td>
                            
                            </tr>
                                <?php
        					}
                        }
                    
                        ?>
	</table>
</form>


</body>

<!---Popper---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>
<!---Custom Js-->
<script src="js/script.js"></script>

</html>