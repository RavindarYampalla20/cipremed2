<!-- 
  Author - Anjana Wijesundara
  Content - wsanjana951@gmail.com
-->
<table class="table table-hover">
  <thead>
    <tr>
      <th>Username</th>
      <th>Full Name</th>
      <th>Email</th>
      <th>View</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($users as $cus ) : ?>
      <tr>
        <td><?php echo $cus['username'];?></td>
      	<td><?php echo $cus['full_name'];?></td>
      	<td><?php echo $cus['email'];?></td>
        <td><a href="/user/view/<?php echo $cus['id'] ?>">view</a></td>
        <td><a href="/user/edit/<?php echo $cus['id'] ?>" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-pencil"></i></a></td>
        <td><a href="/user/delete/<?php echo $cus['id'] ?>">Delete</a></td>
      </tr>
	<?php endforeach ?>
  </tbody>
</table>
<a class="btn btn-primary" href="/user/create">Add New User</a>
