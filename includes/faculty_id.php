<?php
$select="select *from faculty";
$res=mysqli_query($conn,$select);

?>
<div class="container">
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
			<th>Name</th>
                <th>Faculty id</th>
				 <th>Action</th>
                
               
            </tr>
        </thead>
        <tbody>
            <?php
            while($row=mysqli_fetch_array($res))
            {
            ?>

            <tr>
                <td><?php echo $row['name']; ?> </td>
                <td><?php echo $row['faculty_id']; ?> </td>
				<td><a href="?p=delete&id=<?php echo $row['faculty_id']; ?>"><button>Deleted</button></a></td>
                
               
               
            </tr>
            <?php
             }
             ?>
      
    </tbody>        
</table>
</div>






<script>
$(document).ready(function() {
    $('#example').DataTable({
        "pageLength": 10
    });
    
} );
</script>