<?php
	include 'layout/header.php'
?>

<table>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Title (required)" aria-describedby="basic-addon1" data-bind="value: adminmusictitle">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Artist (required)" aria-describedby="basic-addon1" data-bind="value: adminmusicartist">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="IsSingle?" aria-describedby="basic-addon1" data-bind="value: adminmusicissingle">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Eligibility Year" aria-describedby="basic-addon1" data-bind="value: adminmusiceligyear">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Release Year" aria-describedby="basic-addon1" data-bind="value: adminmusicreleaseyear">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Genre" aria-describedby="basic-addon1" data-bind="value: adminmusicgenre">
</div></td>
</tr>
<tr><td>Hi</td></tr>
<tr>
<td><div class="btn-group" role="group" aria-label="...">
<button type="button" class="btn btn-default" data-bind="click: postadminMusicToDB" block>Insert into database!</button>
</div></td>
</tr>
</table>


<?php
	include 'layout/footer.php'
?>