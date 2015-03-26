<?php
	include 'layout/header.php'
?>
<div class="main">
	<label for="tableDropdown">Choose Table: </label>
	<select id="tableDropdown" class="form-control" data-bind="options: availableTables, value: tableToUpdate"></select>
	<div id="awardShowUpdate" data-bind="visible: tableToUpdate() == 'AwardShow'">
		<p>Update Award Show</p>
		<table class="table">
			<thead>
				<tr>
					<th>ShowName</th>
					<th>Description</th>
					<th>Year</th>
					<th>Type</th>
					<th>Criteria</th>
					<th>VotingPanel</th>
					<th>Update</th>
				</tr>
			</thead>
			<tbody data-bind="foreach: awardShows">
				<tr>
					<td data-bind="text: ShowName"></td>
					<td data-bind="text: Description"></td>
					<td data-bind="text: Year"></td>
					<td data-bind="text: Type"></td>
					<td data-bind="text: Criteria"></td>
					<td data-bind="text: VotingPanel"></td>
					<td><button class="btn btn-default">Update</button></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div id="fictionalLocationUpdate" data-bind="visible: tableToUpdate() == 'FictionalLocation'">
		<p>Update Fictional Location</p>
	</div>
	<div id="filmedInUpdate" data-bind="visible: tableToUpdate() == 'FilmedIn'">
		<p>Update Filmed In</p>
	</div>
	<div id="genreOfUpdate" data-bind="visible: tableToUpdate() == 'GenreOf'">
		<p>Update Genre</p>
	</div>
	<div id="honorUpdate" data-bind="visible: tableToUpdate() == 'Honor'">
		<p>Update Honor</p>
	</div>
	<div id="moviesUpdate" data-bind="visible: tableToUpdate() == 'Movies'">
		<p>Update Movies</p>
	</div>
	<div id="musicUpdate" data-bind="visible: tableToUpdate() == 'Music'">
		<p>Update Music</p>
	</div>
	<div id="peopleUpdate" data-bind="visible: tableToUpdate() == 'People'">
		<p>Update People</p>
	</div>
	<div id="stageUpdate" data-bind="visible: tableToUpdate() == 'Stage'">
		<p>Update Stage</p>
	</div>
	<div id="televisionUpdate" data-bind="visible: tableToUpdate() == 'Television'">
		<p>Update Television</p>
	</div>
</div>
<?php
	include 'layout/footer.php'
?>