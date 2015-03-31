<?php
	include 'layout/header.php'
?>

<table>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="User ID" aria-describedby="basic-addon1" data-bind="value: userid">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="TV Show Title" aria-describedby="basic-addon1" data-bind="value: usertvtitle">
</div></td>
</tr>
<tr><td>Hi</td></tr>
<tr>
<td><div class="btn-group" role="group" aria-label="...">
<button type="button" class="btn btn-default" data-bind="click: postuserTVToDB" block>Add to favorites</button>
</div></td>
</tr>
</table>


<?php
	include 'layout/footer.php'
?>