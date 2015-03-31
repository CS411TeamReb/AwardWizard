<?php
	include 'layout/header.php'
?>

<table>
<tr>
<td><div class="btn-group" role="group" aria-label="...">
  <button type="button" class="btn btn-default" block><a href="http://web.engr.illinois.edu/~bifft2/AwardWizard/admin.php">Admin</a></button>
  <button type="button" class="btn btn-default" block><a href="http://web.engr.illinois.edu/~bifft2/AwardWizard/user.php">User</a></button>
</div></td>
</tr>

<tr><td>Hi</td></tr>

<tr>
<td><div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" block>
    Choose Insert Type <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="http://web.engr.illinois.edu/~bifft2/AwardWizard/adminperson.php">Person</a></li>
    <li><a href="http://web.engr.illinois.edu/~bifft2/AwardWizard/adminmusic.php">Song or Album</a></li>
    <li><a href="http://web.engr.illinois.edu/~bifft2/AwardWizard/admintv.php">TV Show</a></li>
    <li><a href="http://web.engr.illinois.edu/~bifft2/AwardWizard/adminmovie.php">Movie</a></li>
    <li><a href="http://web.engr.illinois.edu/~bifft2/AwardWizard/adminstage.php">Stage</a></li>
    <li><a href="http://web.engr.illinois.edu/~bifft2/AwardWizard/adminhonor.php">Honor</a></li>
  </ul>
</div></td>
</tr>
</table>

<?php
	include 'layout/footer.php'
?>