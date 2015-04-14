<?php
	include 'layout/header.php'
?>

<table>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Name (required)" aria-describedby="basic-addon1" data-bind="value: adminpersonname">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Place of Origin" aria-describedby="basic-addon1" data-bind="value: adminpersonorigin">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Occupation" aria-describedby="basic-addon1" data-bind="value: adminpersonoccupation">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Gender" aria-describedby="basic-addon1" data-bind="value: adminpersongender">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Birthdate" aria-describedby="basic-addon1" data-bind="value: adminpersonbirthdate">
</div></td>
</tr>
<tr><td>Hi</td></tr>
<tr>
<td><div class="btn-group" role="group" aria-label="...">
<button type="button" class="btn btn-default" data-bind="click: postadminPersonToDB" block>Insert into database!</button>
</div></td>
</tr>
</table>

<?php
	include 'layout/footer.php'
?>