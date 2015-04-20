<?php
	include 'layout/header.php'
?>
<div class="main">
	<label for="tableDropdown">Choose Table: </label>
	<select id="tableDropdown" class="form-control" data-bind="options: availableTables, value: tableToUpdate"></select>
	<div class="modal fade" id="locationGenreModal" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
					<h4 class="modal-title">Location and Genre Information</h4>
				</div>
				<div class="modal-body">
					<table class="table">
						<thead>
							<tr>
								<th>Genre</th>
							</tr>
						</thead>
						<tbody data-bind="foreach: updateGenreData">
							<tr>
								<td><input class="form-control" data-bind="value: GenreName" /></td>
							</tr>
						</tbody>
					</table>
					<table class="table">
						<thead>
							<tr>
								<th>Location</th>
								<th>Filmed Or Fiction</th>
								<th>Latitude</th>
								<th>Longitude</th>
							</tr>
						</thead>
						<tbody data-bind="foreach: updateLocationData">
							<tr>
								<td><input class="form-control" data-bind="value: Location" /></td>
								<td><input class="form-control" data-bind="value: FilmedOrFiction" /></td>
								<td><input class="form-control" data-bind="value: Latitude" /></td>
								<td><input class="form-control" data-bind="value: Longitude" /></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-bind="click: updateLocationGenre">Save</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
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
					<th>Delete</th>
				</tr>
			</thead>
			<tbody data-bind="foreach: updateAwardData">
				<tr>
					<td data-bind="text: ShowName"></td>
					<td><textarea class="form-control" data-bind="value: Description"></textarea></td>
					<td><input class="form-control" data-bind="value: Year"></input></td>
					<td><input class="form-control" data-bind="value: Type"></input></td>
					<td><textarea class="form-control" data-bind="value: Criteria"></textarea></td>
					<td><textarea class="form-control" data-bind="value: VotingPanel"></textarea></td>
					<td><button class="btn btn-default" data-bind="click: function() { $root.updateRow($index(), $root.tableToUpdate())}">Update</button></td>
					<td><button class="btn btn-default" data-bind="click: function() { $root.deleteRow($index(), $root.tableToUpdate())}">Delete</button></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div id="honorUpdate" data-bind="visible: tableToUpdate() == 'Honor'">
		<p>Update Honor</p>
		<table class="table">
			<thead>
				<tr>
					<th>AwardName</th>
					<th>YearGiven</th>
					<th>NominatedWon</th>
					<th>ShowName</th>
					<th>PersonName</th>
					<th>TitleName</th>
					<th>Update</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody data-bind="foreach: updateHonorData">
				<tr>
					<td data-bind="text: AwardName"></td>
					<td><input class="form-control" data-bind="value: YearGiven"></input></td>
					<td><input class="form-control" data-bind="value: NominatedWon"></input></td>
					<td><input class="form-control" data-bind="value: ShowName"></input></td>
					<td><input class="form-control" data-bind="value: PersonName"></input></td>
					<td><input class="form-control" data-bind="value: TitleName"></input></td>
					<td><button class="btn btn-default" data-bind="click: function() { $root.updateRow($index(), $root.tableToUpdate())}">Update</button></td>
					<td><button class="btn btn-default" data-bind="click: function() { $root.deleteRow($index(), $root.tableToUpdate())}">Delete</button></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div id="moviesUpdate" data-bind="visible: tableToUpdate() == 'Movies'">
		<p>Update Movies</p>
		<table class="table">
			<thead>
				<tr>
					<th>Title</th>
					<th>Rating</th>
					<th>BoxOffice (in millions)</th>
					<th>Budget (in millions)</th>
					<th>Year</th>
					<th>Details</th>
					<th>Update</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody data-bind="foreach: updateMovieData">
				<tr>
					<td><input class="form-control" data-bind="value: Title" /></td>
					<td><input class="form-control" data-bind="value: Rating" /></td>
					<td><input class="form-control" data-bind="value: BoxOffice" /></td>
					<td><input class="form-control" data-bind="value: Budget" /></td>
					<td><input class="form-control" data-bind="value: Year" /></td>
					<td><button class="btn btn-default" data-bind="click: function() { $root.populateLocationsAndGenres(WorkID) }" data-toggle="modal" data-target="#locationGenreModal">Edit</button></td>
					<td><button class="btn btn-default" data-bind="click: function() { $root.updateRow($index(), $root.tableToUpdate())}">Update</button></td>
					<td><button class="btn btn-default" data-bind="click: function() { $root.deleteRow($index(), $root.tableToUpdate())}">Delete</button></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div id="musicUpdate" data-bind="visible: tableToUpdate() == 'Music'">
		<p>Update Music</p>
		<table class="table">
			<thead>
				<tr>
					<th>Title</th>
					<th>Artist</th>
					<th>isSingle</th>
					<th>EligibilityYear</th>
					<th>Genre</th>
					<th>ReleaseYear</th>
					<th>Update</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody data-bind="foreach: updateMusicData">
				<tr>
					<td><input class="form-control" data-bind="value: Title" /></td>
					<td><input class="form-control" data-bind="value: Artist" /></td>
					<td><input class="form-control" data-bind="value: isSingle" /></td>
					<td><input class="form-control" data-bind="value: EligibilityYear" /></td>
					<td><input class="form-control" data-bind="value: Genre" /></td>
					<td><input class="form-control" data-bind="value: ReleaseYear" /></td>
					<td><button class="btn btn-default" data-bind="click: function() { $root.updateRow($index(), $root.tableToUpdate())}">Update</button></td>
					<td><button class="btn btn-default" data-bind="click: function() { $root.deleteRow($index(), $root.tableToUpdate())}">Delete</button></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div id="peopleUpdate" data-bind="visible: tableToUpdate() == 'People'">
		<p>Update People</p>
		<p>Please enter date changes in the format of mm/dd/yyyy.</p>
		<table class="table">
			<thead>
				<tr>
					<th>Name</th>
					<th>PlaceOrigin</th>
					<th>Occupation</th>
					<th>Gender</th>
					<th>Birthdate</th>
					<th>Update</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody data-bind="foreach: updatePeopleData">
				<tr>
					<td data-bind="text: Name"></td>
					<td><input class="form-control" data-bind="value: PlaceOrigin"></td>
					<td><input class="form-control" data-bind="value: Occupation" /></td>
					<td><input class="form-control" data-bind="value: Gender" /></td>
					<td><input class="form-control" data-bind="value: Birthdate" /></td>
					<td><button class="btn btn-default" data-bind="click: function() { $root.updateRow($index(), $root.tableToUpdate())}">Update</button></td>
					<td><button class="btn btn-default" data-bind="click: function() { $root.deleteRow($index(), $root.tableToUpdate())}">Delete</button></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div id="stageUpdate" data-bind="visible: tableToUpdate() == 'Stage'">
		<p>Update Stage</p>
		<p>Please enter date changes in the format of mm/dd/yyyy.</p>
		<table class="table">
			<thead>
				<tr>
					<th>Setting</th>
					<th>Title</th>
					<th>Iteration</th>
					<th>Type</th>
					<th>Genre</th>
					<th>SongNumber</th>
					<th>YEAR</th>
					<th>Theatre</th>
					<th>Open</th>
					<th>Closed</th>
					<th>Previews</th>
					<th>Performances</th>
					<th>Running</th>
					<th>Details</th>
					<th>Update</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody data-bind="foreach: updateStageData">
				<tr>
					<td><input class="form-control" data-bind="value: Setting" /></td>
					<td><input class="form-control" data-bind="value: Title" /></td>
					<td><input class="form-control" data-bind="value: Iteration" /></td>
					<td><input class="form-control" data-bind="value: Type" /></td>
					<td><input class="form-control" data-bind="value: Genre" /></td>
					<td><input class="form-control" data-bind="value: SongNumber" /></td>
					<td><input class="form-control" data-bind="value: YEAR" /></td>
					<td><input class="form-control" data-bind="value: Theatre" /></td>
					<td><input class="form-control" data-bind="value: Open" /></td>
					<td><input class="form-control" data-bind="value: Closed" /></td>
					<td><input class="form-control" data-bind="value: Previews" /></td>
					<td><input class="form-control" data-bind="value: Performances" /></td>
					<td><input class="form-control" data-bind="value: Running" /></td>
					<td><button class="btn btn-default" data-bind="click: function() { $root.populateLocationsAndGenres(WorkID) }" data-toggle="modal" data-target="#locationGenreModal">Edit</button></td>
					<td><button class="btn btn-default" data-bind="click: function() { $root.updateRow($index(), $root.tableToUpdate())}">Update</button></td>
					<td><button class="btn btn-default" data-bind="click: function() { $root.deleteRow($index(), $root.tableToUpdate())}">Delete</button></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div id="televisionUpdate" data-bind="visible: tableToUpdate() == 'Television'">
		<p>Update Television</p>
		<table class="table">
			<thead>
				<tr>
					<th>Title</th>
					<th>Episodes</th>
					<th>Seasons</th>
					<th>StillRunning</th>
					<th>Network</th>
					<th>CameraSetup</th>
					<th>MinimumRuntime</th>
					<th>MaximumRuntime</th>
					<th>Details</th>
					<th>Update</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody data-bind="foreach: updateTVData">
				<tr>
					<td><input class="form-control" data-bind="value: Title" /></td>
					<td><input class="form-control" data-bind="value: Episodes" /></td>
					<td><input class="form-control" data-bind="value: Seasons" /></td>
					<td><input class="form-control" data-bind="value: StillRunning" /></td>
					<td><input class="form-control" data-bind="value: Network" /></td>
					<td><input class="form-control" data-bind="value: CameraSetup" /></td>
					<td><input class="form-control" data-bind="value: MinimumRuntime" /></td>
					<td><input class="form-control" data-bind="value: MaximumRuntime" /></td>
					<td><button class="btn btn-default" data-bind="click: function() { $root.populateLocationsAndGenres(WorkID) }" data-toggle="modal" data-target="#locationGenreModal">Edit</button></td>
					<td><button class="btn btn-default" data-bind="click: function() { $root.updateRow($index(), $root.tableToUpdate())}">Update</button></td>
					<td><button class="btn btn-default" data-bind="click: function() { $root.deleteRow($index(), $root.tableToUpdate())}">Delete</button></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<?php
	include 'layout/footer.php'
?>