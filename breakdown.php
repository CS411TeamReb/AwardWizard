<?php
	include 'layout/header.php';
?>
<div class="btn-group" role="group" aria-label="...">
<label>Breakdown: </label>
	<label for="tableDropdown">Choose Table: </label>
	<select id="tableDropdown" class="form-control" data-bind="options: availableTables, value: tableToSearch"></select>
	
	<label for="columnsDropdown"><span data-bind="text: tableToSearch"></span> Attributes: </label>
	<select id="columnsDropdown" class="form-control" data-bind="options: columns, value: columnToSearch"></select>

<button data-bind="click: viewBreakdown">Send</button>
</div>
<br/>
<div class="btn-group" role="group" aria-label="...">
<table>
	<thead>
		<tr>
			<td>Category</td>
			<td>Percentage</td>

		</tr>
	</thead>
	<tbody data-bind="foreach: breakdownResults">
		<tr>
			<td data-bind="text: Category"></td>
			<td data-bind="text: Percentage"></td>
		</tr>
	</tbody>
</table>
</div>
<br/>
<?php
	include 'layout/footer.php';
?>
