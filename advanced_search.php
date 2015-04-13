<?php
	include 'layout/header.php'
?>
<div class="main">
	<label for="tableDropdown">Choose Table: </label>
	<select id="tableDropdown" class="form-control" data-bind="options: availableTables, value: tableToSearch"></select>
	

	<label for="columnsDropdown"><span data-bind="text: tableToSearch"></span> Attributes: </label>
	<select id="columnsDropdown" class="form-control" data-bind="options: columns, value: columnToSearch"></select>
</div>
<?php
	include 'layout/footer.php'
?>