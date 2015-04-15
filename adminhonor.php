<?php
	include 'layout/header.php'
?>

<table>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Award Show Name (required)" aria-describedby="basic-addon1" data-bind="value: adminhonorshowname">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Award Name" aria-describedby="basic-addon1" data-bind="value: adminhonorawardname">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Work Name" aria-describedby="basic-addon1" data-bind="value: adminhonorworkname">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Person Name (if applicable)" aria-describedby="basic-addon1" data-bind="value: adminhonorpersonname">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Year Given" aria-describedby="basic-addon1" data-bind="value: adminhonoryeargiven">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Nominated or Won?" aria-describedby="basic-addon1" data-bind="value: adminhonornomorwon">
</div></td>
</tr>
<tr><td>Hi</td></tr>
<tr>
<td><div class="btn-group" role="group" aria-label="...">
<button type="button" class="btn btn-default" data-bind="click: postadminHonorToDB" block>Insert into database!</button>
</div></td>
</tr>
</table>


<?php
	include 'layout/footer.php'
?>