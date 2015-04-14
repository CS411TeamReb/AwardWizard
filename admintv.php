<?php
	include 'layout/header.php'
?>

<table>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Title (required)" aria-describedby="basic-addon1" data-bind="value: admintvtitle">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Number of Episodes" aria-describedby="basic-addon1" data-bind="value: admintvnumepisodes">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Number of Seasons" aria-describedby="basic-addon1" data-bind="value: admintvnumseasons">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Still running?" aria-describedby="basic-addon1" data-bind="value: admintvstillrunning">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Network" aria-describedby="basic-addon1" data-bind="value: admintvnetwork">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Camera Setup" aria-describedby="basic-addon1" data-bind="value: admintvcamerasetup">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Minimum Runtime" aria-describedby="basic-addon1" data-bind="value: admintvminruntime">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Maximum Runtime" aria-describedby="basic-addon1" data-bind="value: admintvmaxruntime">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Place Filmed" aria-describedby="basic-addon1" data-bind="value: admintvplacefilmed">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="TV Show Fictional Location" aria-describedby="basic-addon1" data-bind="value: admintvficlocation">
</div></td>
</tr>
<tr><td>Hi</td></tr>
<tr>
<td><div class="btn-group" role="group" aria-label="...">
<button type="button" class="btn btn-default" data-bind="click: postadminTvToDB" block>Insert into database!</button>
</div></td>
</tr>
</table>


<?php
	include 'layout/footer.php'
?>