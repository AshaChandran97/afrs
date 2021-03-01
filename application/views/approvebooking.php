<html>
	<head>
		<title>MY_APPROVE_FORM</title>
	</head>
		<style>
			th,td{border:1px solid;
			padding:15px;border-collapse:collapse;text-align:center;}
			table{border-collapse:collapse;}
		</style>
			<body>
				<form method="post" action="">	
				<table>
					
						<tr>
							<th>NAME</th>
							<th>EMAIL</th>
							<th>PHONE</th>
							<th>STREET</th>
							<th>STREETNUMBER</th>
							<th>CITY</th>
							<th>POSTCODE</th>
							<th>COUNTRY</th>
							<th>ARRIVE</th>
							<th>DEPART</th>
							<th>PEOPLE</th>
							<th colspan="2">status</th>
						</tr>
							
							<?php
				
					if (isset($n))
					{
						foreach ($n->result() as $row)
						{
				?>
							<tr>
								<td><?php echo $row->name;?></td>
								<td><?php echo $row->email;?></td>
								<td><?php echo $row->phone;?></td>
								<td><?php echo $row->street;?></td>
								<td><?php echo $row->streetnumber;?></td>
								<td><?php echo $row->city;?></td>
								<td><?php echo $row->postcode;?></td>
								<td><?php echo $row->country;?></td>
								<td><?php echo $row->arrive;?></td>
								<td><?php echo $row->depart;?></td>
								<td><?php echo $row->people;?></td>
								<?php
								if($row->status==0)
								{
									?>
									<td>Approved<td>
									
									<a href="<?php echo base_url()?>main/reject/<?php echo $row->id;?>">reject</a></td>
									<?php

								}
								elseif($row->status==1)
								{
									?>
									<td>Rejected</td>
									
									<td><a href="<?php echo base_url()?>main/approve/<?php echo $row->id;?>">approve</a></td>
									<?php
								}
								else
								{
									?>
									<td><a href="<?php echo base_url()?>main/approve/<?php echo $row->id;?>">approve</a></td>
									<td><a href="<?php echo base_url()?>main/reject/<?php echo $row->id;?>">reject</a></td>
									<?php
								}
								?>

							</tr>
						<?php
						}
						}
						?>		
							
				</form>
			</body>
</html>