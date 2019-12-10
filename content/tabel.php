		<?php
		include "connection.php";
		$select="select * from user";
		$hasil=mysqli_query($conn, $select);
		$no =1;
		?>
		
		<table width="600px" border="1" style="table-layout:fixed">
			<col width="35px" />
			<col width="140px" />
			<col width="140px" />
			<col width="100px" />
			<col width="100px" />
			<col width="122px" />
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
			<table width="600px" border="1" style="table-layout:fixed" >
				<col width="35px" />
				<col width="140px" />
				<col width="140px" />
				<col width="100px" />
				<col width="100px" />
				<col width="60px" />
				<col width="60px" />
				<tr>
					<td style="overflow:hidden; text-overflow:ellipsis;"><?php echo $no;?></td>
					<td style="overflow:hidden; text-overflow:ellipsis;"><?php echo $buff['username'];?></td>
					<td style="overflow:hidden; text-overflow:ellipsis;"><?php echo $buff['password'];?></td>
					<td style="overflow:hidden; text-overflow:ellipsis;"><?php echo $buff['level'];?></td>
					<td style="overflow:hidden; text-overflow:ellipsis;"><?php echo $buff['no_family'];?></td>
					<td style="overflow:hidden; text-overflow:ellipsis;"><a href="?module=edit&id=<?php echo $buff['id'];?>">edit</td>
					<td style="overflow:hidden; text-overflow:ellipsis;"><a href="?module=hapus&id=<?php echo $buff['id'];?>">hapus</td>
				</tr>
				
		</table>
		
		<?php 
		$no++;
		};
		mysqli_close($conn);
		?>