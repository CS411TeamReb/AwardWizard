<?php
	include 'layout/header.php';
?>
<div class="main">
	<div class="panel-group" id="breakdowns" role="tablist" aria-multiselectable="true">
		<div class="panel panel-default">
			<div class="panel-heading" role="tab" id="pieChartsHeading">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#breakdowns" href="#pieCharts" aria-expanded="true" aria-controls="pieCharts">Pie Chart Breakdowns</a>
				</h4>
			</div>
			<div id="pieCharts" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="pieChartsHeading">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-3">
							<p><b>Breakdown: </b></p>
							<label for="tableDropdown">Choose Table: </label>
							<select id="tableDropdown" class="form-control" data-bind="options: tablesToBreakdown, value: tableToBreakdown"></select>
							<label><span data-bind="text: tableToBreakdown"></span> Attributes: </label>
							<select class="form-control dropdownOptions" data-bind="options: columnsBreakdown, value: columnToBreakdown"></select>
							<br/>
							<button class="btn btn-default" data-bind="click: viewBreakdown">Send</button>
						</div>
						<div class="col-md-9">
							<svg id="pieChart"></svg>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading" role="tab" id="barChartsHeading">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#breakdowns" href="#barCharts" aria-expanded="true" aria-controls="barCharts">Bar Chart Breakdowns</a>
				</h4>
			</div>
			<div id="barCharts" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="barChartsHeading">
				<div class="panel-body">
					<button class="btn btn-default" data-bind="click: function() {viewBarChart('Genre')}">Genre Counts</button>
					<button class="btn btn-default" data-bind="click: function() {viewBarChart('Show')}">Show Sums</button>
					<button class="btn btn-default" data-bind="click: function() {viewBarChart('Location')}">Location Counts</button>
					<button  class="btn btn-default" data-bind="click: viewGroupBarChart">Box Office, Budget, Nomination Correlation</button>
					<svg id="barChart"></svg>
					<svg id="groupBarChart"></svg>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	include 'layout/footer.php';
?>
