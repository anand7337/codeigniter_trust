


<table>
<tr>
	<th>ID</th>
	<th>NAME</th>
	<th>GENDER</th>
	<th>EMAIL</th>
	<th>REACH</th>
	<th>MOBILE</th>
	<th>EXPERIENCE</th>
	<th>DELETE</th>
</tr>

<?php 
if(isset($table)){
	foreach($table as $row){
 ?>
<tr>
	<td><?= $row->id ?></td>
	<td><?= $row->name ?></td>
	<td><?= $row->gender ?></td>
	<td><?= $row->email ?></td>
	<td><?= $row->reach ?></td>
	<td><?= $row->mobile ?></td>
	<td><?= $row->experience ?></td>
	<td><a href="">Delete</a></td>
</tr>
<?php	
		}
	}
?>
</table>


