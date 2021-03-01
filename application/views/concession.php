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
  	table,tr,td,input
  	{
  		padding:10px;

  	}
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
<div class="container" id="homepage">
<?php
if($n->num_rows()>0)
{
foreach ($n->result() as $row)
{

?>
<form action="<?php echo base_url()?>main/pay" method="post">


<table>
<h1>CHECK SEAT AVAILABILITY</h1>
<tr><td>
FLIGHTID :</td><td><input type="text" name="flightno"   value="<?php echo $row->id;?>"></td></tr>
<tr><td>

<tr><td>SEAT COST:</td><td>





<?php
if($m->num_rows()>0)
{
foreach ($m->result() as $row1)
{

if(($row1->age)>65)
{
	if($s=='e')
	{
		?>
		<input type="text" value="<?php echo $row->ceconomic;?>">
		<?php
	}
	else
	{
		?>
		<input type="text" value="<?php echo $row->cbusiness;?>">
		<?php
	}
}


else
{
	if($s=='e')
	{ echo "heyy";
		?>

		cost:<input type="text" value="<?php echo $row->economyprice;?>">
		<?php
	}
	else
	{
		?>
		cost:<input type="text" value="<?php echo $row->bussinessprice;?>">
		<?php
	}
}
}
}
}
}

?>



</div>
<tr><td colspan="2" ><input type="submit" value="ARE YOU READY FOR PAYMENT" name="submit" align="center"></td></tr>

</form>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>
<!---Custom Js-->
<script src="js/script.js"></script>

</html>

