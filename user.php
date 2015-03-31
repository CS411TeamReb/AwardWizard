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
    <li><a href="http://web.engr.illinois.edu/~bifft2/AwardWizard/userperson.php">Person</a></li>
    <li><a href="http://web.engr.illinois.edu/~bifft2/AwardWizard/usermusic.php">Song or Album</a></li>
    <li><a href="http://web.engr.illinois.edu/~bifft2/AwardWizard/usertv.php">TV Show</a></li>
    <li><a href="http://web.engr.illinois.edu/~bifft2/AwardWizard/usermovie.php">Movie</a></li>
    <li><a href="http://web.engr.illinois.edu/~bifft2/AwardWizard/userstage.php">Stage</a></li>
  </ul>
</div></td>
</tr>
</table>

<?php
	include 'layout/footer.php'
?>