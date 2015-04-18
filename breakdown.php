<?php
	include 'layout/header.php';
?>
<div class="main">
	<div class="row">
		<div class="col-md-3">
			<p><b>Breakdown: </b></p>
			<label for="tableDropdown">Choose Table: </label>
			<select id="tableDropdown" class="form-control" data-bind="options: availableTables, value: tableToSearch"></select>
			<label><span data-bind="text: tableToSearch"></span> Attributes: </label>
			<select class="form-control dropdownOptions" data-bind="options: columns, value: columnToSearch"></select>
			<br/>
			<button class="btn btn-default" data-bind="click: viewBreakdown">Send</button>
		</div>
		<div class="col-md-9">
			<svg id="chart"></svg>
		</div>
	</div>
</div>
<?php
	include 'layout/footer.php';
?>
