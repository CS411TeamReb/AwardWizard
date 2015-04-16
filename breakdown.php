<?php
	include 'layout/header.php';
?>
<div class="main">
<div class="btn-group" role="group" aria-label="...">
<p><b>Breakdown: </b></p>
<label for="tableDropdown">Choose Table: </label>
<select id="tableDropdown" class="form-control" data-bind="options: availableTables, value: tableToSearch"></select>
<label><span data-bind="text: tableToSearch"></span> Attributes: </label>
<select class="form-control dropdownOptions" data-bind="options: columns, value: columnToSearch"></select>
<br/>
<button class="btn btn-default" data-bind="click: viewBreakdown">Send</button>
</div>
<br/>
<div class="btn-group" role="group" aria-label="...">
<table class="table">
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
<svg id="chart"></svg>
</div>
<?php
	include 'layout/footer.php';
?>
