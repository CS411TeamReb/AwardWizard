<?php
	include 'layout/header.php'
?>

<table>
<tr>
<td><div class="input-group">
  <input type="number" class="form-control" placeholder="User ID" aria-describedby="basic-addon1" data-bind="value: userid">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Person's Name" aria-describedby="basic-addon1" data-bind="value: userpersonname">
</div></td>
</tr>
<tr><td>Hi</td></tr>
<tr>
<td><div class="btn-group" role="group" aria-label="...">
<button type="button" class="btn btn-default" data-bind="click: postuserPersonToDB" block>Add to favorites!</button>
</div></td>
</tr>
</table>


<?php
	include 'layout/footer.php'
?>