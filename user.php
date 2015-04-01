<?php
	include 'layout/header.php'
?>

<table>
<tr>
<td><div class="btn-group" role="group" aria-label="...">
  <button type="button" class="btn btn-default" block><a href="admin.php">Admin</a></button>
  <button type="button" class="btn btn-default" block><a href="user.php">User</a></button>
</div></td>
</tr>

<tr><td>Hi</td></tr>

<tr>
<td><div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" block>
    Choose Insert Type <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="userperson.php">Person</a></li>
    <li><a href="usermusic.php">Song or Album</a></li>
    <li><a href="usertv.php">TV Show</a></li>
    <li><a href="usermovie.php">Movie</a></li>
    <li><a href="userstage.php">Stage</a></li>
  </ul>
</div></td>
</tr>
</table>

<?php
	include 'layout/footer.php'
?>