<?php
	include 'layout/header.php'
?>
<table>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Title (required)" aria-describedby="basic-addon1" data-bind="value: adminstagetitle">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Setting" aria-describedby="basic-addon1" data-bind="value: adminstagesetting">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Iteration" aria-describedby="basic-addon1" data-bind="value: adminstageiteration">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Type" aria-describedby="basic-addon1" data-bind="value: adminstagetype">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Genre" aria-describedby="basic-addon1" data-bind="value: adminstagegenre">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Song Number" aria-describedby="basic-addon1" data-bind="value: adminstagesongnum">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Year" aria-describedby="basic-addon1" data-bind="value: adminstageyear">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Theatre" aria-describedby="basic-addon1" data-bind="value: adminstagetheatre">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Date Opened" aria-describedby="basic-addon1" data-bind="value: adminstagedateopened">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Date Closed" aria-describedby="basic-addon1" data-bind="value: adminstagedateclosed">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Number of Previews" aria-describedby="basic-addon1" data-bind="value: adminstagenumpreviews">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Number of Performances" aria-describedby="basic-addon1" data-bind="value: adminstagenumperformances">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Running?" aria-describedby="basic-addon1" data-bind="value: adminstagerunning">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Place Filmed" aria-describedby="basic-addon1" data-bind="value: adminstageplacefilmed">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Stage Fictional Location" aria-describedby="basic-addon1" data-bind="value: adminstageficlocation">
</div></td>
</tr>
<tr><td>Hi</td></tr>
<tr>
<td><div class="btn-group" role="group" aria-label="...">
<button type="button" class="btn btn-default" data-bind="click: postadminStageToDB" block>Insert into database!</button>
</div></td>
</tr>
</table>



<?php
	include 'layout/footer.php'
?>