		<?php
		include "connection.php";
		$select="SELECT * FROM user WHERE level != 'admin'";
		$hasil=mysqli_query($conn, $select);
		$no =1;
		?>
		
		<table class="table-user" width="600px" border="1" style="table-layout:fixed">
			<col width="35px" />
			<col width="180px" />
			<col width="200px" />
			<col width="100px" />
			<col width="100px" />
			<col width="245.5px" />
			<tr>
				<td style="overflow:hidden; text-overflow:ellipsis;">No</td>
				<td style="overflow:hidden; text-overflow:ellipsis;">Username</td>
				<td style="overflow:hidden; text-overflow:ellipsis;">Password</td>
				<td style="overflow:hidden; text-overflow:ellipsis;">Level</td>
				<td style="overflow:hidden; text-overflow:ellipsis;">Family Number</td>
				<td style="overflow:hidden; text-overflow:ellipsis;">Aksi</td>
			</tr>
		</table>
		
		<?php
		while($buff=mysqli_fetch_array($hasil)){
			?>
			<table class="table-user" width="600px" border="1" style="table-layout:fixed" >
				<col width="35px"/>
				<col width="180px" />
				<col width="200px" />
				<col width="100px" />
				<col width="100px" />
				<col width="80px" />
				<col width="80px" />
				<col width="80px" />
				<tr>
					<td style="overflow:hidden; text-overflow:ellipsis;"><?php echo $no;?></td>
					<td style="overflow:hidden; text-overflow:ellipsis;"><?php echo $buff['username'];?></td>
					<td style="overflow:hidden; text-overflow:ellipsis;"><?php echo $buff['password'];?></td>
					<td style="overflow:hidden; text-overflow:ellipsis;"><?php echo $buff['level'];?></td>
					<td style="overflow:hidden; text-overflow:ellipsis;"><?php echo $buff['no_family'];?></td>
					<td style="overflow:hidden; text-overflow:ellipsis;"><a href="?module=edit&no_family=<?php echo $buff['no_family'];?>">Edit</td>
					<td style="overflow:hidden; text-overflow:ellipsis;"><a href="?module=removeproc&no_family=<?php echo $buff['no_family'];?>">Remove</td>
					<td style="overflow:hidden; text-overflow:ellipsis;"><a href="?module=family&no_family=<?php echo $buff['no_family'];?>">Family</td>
				</tr>
		</table>
		
		<?php 
		$no++;
		};
		mysqli_close($conn);
		?>