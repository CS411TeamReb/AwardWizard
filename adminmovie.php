<?php
	include 'layout/header.php'
?>

<table>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Title (required)" aria-describedby="basic-addon1" data-bind="value: adminmovietitle">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Rating" aria-describedby="basic-addon1" data-bind="value: adminmovierating">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Box Office (in millions)" aria-describedby="basic-addon1" data-bind="value: adminmovieboxoffice">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Budget (in millions)" aria-describedby="basic-addon1" data-bind="value: adminmoviebudget">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Year Nominated" aria-describedby="basic-addon1" data-bind="value: adminmovieyearnom">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Place Filmed" aria-describedby="basic-addon1" data-bind="value: adminmovieplacefilmed">
</div></td>
</tr>
<tr>
<td><div class="input-group">
  <input type="text" class="form-control" placeholder="Movie Fictional Location" aria-describedby="basic-addon1" data-bind="value: adminmovieficlocation">
</div></td>
</tr>
<tr><td>Hi</td></tr>
<tr>
<td><div class="btn-group" role="group" aria-label="...">
<button type="button" class="btn btn-default" data-bind="click: postadminMovieToDB" block>Insert into database!</button>
</div></td>
</tr>
</table>


<?php
	include 'layout/footer.php'
?>