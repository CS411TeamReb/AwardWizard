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
			<tbody data-bind="foreach: updateAwardData">
				<tr>
					<td data-bind="text: ShowName"></td>
					<td data-bind="text: Description"></td>
					<td data-bind="text: Year"></td>
					<td data-bind="text: Type"></td>
					<td data-bind="text: Criteria"></td>
					<td data-bind="text: VotingPanel"></td>
					<td><button class="btn btn-default" data-bind="click: function() {updateRow($index)}">Update</button></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div id="honorUpdate" data-bind="visible: tableToUpdate() == 'Honor'">
		<p>Update Honor</p>
		<table class="table">
			<thead>
				<tr>
					<th>AwardID</th>
					<th>AwardName</th>
					<th>YearGiven</th>
					<th>NominatedWon</th>
					<th>ShowName</th>
					<th>WorkID</th>
					<th>PersonName</th>
				</tr>
			</thead>
			<tbody data-bind="foreach: updateHonorData">
				<tr>
					<td data-bind="text: AwardID"></td>
					<td data-bind="text: AwardName"></td>
					<td data-bind="text: YearGiven"></td>
					<td data-bind="text: NominatedWon"></td>
					<td data-bind="text: ShowName"></td>
					<td data-bind="text: WorkID"></td>
					<td data-bind="text: PersonName"></td>
					<td><button class="btn btn-default" data-bind="click: function() {updateRow($index)}">Update</button></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div id="moviesUpdate" data-bind="visible: tableToUpdate() == 'Movies'">
		<p>Update Movies</p>
		<table class="table">
			<thead>
				<tr>
					<th>WorkID</th>
					<th>Title</th>
					<th>Rating</th>
					<th>BoxOffice</th>
					<th>Budget</th>
					<th>Year</th>
				</tr>
			</thead>
			<tbody data-bind="foreach: updateMovieData">
				<tr>
					<td data-bind="text: WorkID"></td>
					<td data-bind="text: Title"></td>
					<td data-bind="text: Rating"></td>
					<td data-bind="text: BoxOffice"></td>
					<td data-bind="text: Budget"></td>
					<td data-bind="text: Year"></td>
					<td><button class="btn btn-default" data-bind="click: function() {updateRow($index)}">Update</button></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div id="musicUpdate" data-bind="visible: tableToUpdate() == 'Music'">
		<p>Update Music</p>
		<table class="table">
			<thead>
				<tr>
					<th>WorkID</th>
					<th>Title</th>
					<th>Artist</th>
					<th>isSingle</th>
					<th>EligibilityYear</th>
					<th>Genre</th>
					<th>ReleaseYear</th>
				</tr>
			</thead>
			<tbody data-bind="foreach: updateMusicData">
				<tr>
					<td data-bind="text: WorkID"></td>
					<td data-bind="text: Title"></td>
					<td data-bind="text: Artist"></td>
					<td data-bind="text: isSingle"></td>
					<td data-bind="text: EligibilityYear"></td>
					<td data-bind="text: Genre"></td>
					<td data-bind="text: ReleaseYear"></td>
					<td><button class="btn btn-default" data-bind="click: function() {updateRow($index)}">Update</button></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div id="peopleUpdate" data-bind="visible: tableToUpdate() == 'People'">
		<p>Update People</p>
		<table class="table">
			<thead>
				<tr>
					<th>Name</th>
					<th>PlaceOrigin</th>
					<th>Occupation</th>
					<th>Gender</th>
					<th>Birthdate</th>
				</tr>
			</thead>
			<tbody data-bind="foreach: updatePeopleData">
				<tr>
					<td data-bind="text: Name"></td>
					<td data-bind="text: PlaceOrigin"></td>
					<td data-bind="text: Occupation"></td>
					<td data-bind="text: Gender"></td>
					<td data-bind="text: Birthdate"></td>
					<td><button class="btn btn-default" data-bind="click: function() {updateRow($index)}">Update</button></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div id="stageUpdate" data-bind="visible: tableToUpdate() == 'Stage'">
		<p>Update Stage</p>
		<table class="table">
			<thead>
				<tr>
					<th>WorkID</th>
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
				</tr>
			</thead>
			<tbody data-bind="foreach: updateStageData">
				<tr>
					<td data-bind="text: WorkID"></td>
					<td data-bind="text: Setting"></td>
					<td data-bind="text: Title"></td>
					<td data-bind="text: Iteration"></td>
					<td data-bind="text: Type"></td>
					<td data-bind="text: Genre"></td>
					<td data-bind="text: SongNumber"></td>
					<td data-bind="text: YEAR"></td>
					<td data-bind="text: Theatre"></td>
					<td data-bind="text: Open"></td>
					<td data-bind="text: Closed"></td>
					<td data-bind="text: Previews"></td>
					<td data-bind="text: Performances"></td>
					<td data-bind="text: Running"></td>
					<td><button class="btn btn-default" data-bind="click: function() {updateRow($index)}">Update</button></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div id="televisionUpdate" data-bind="visible: tableToUpdate() == 'Television'">
		<p>Update Television</p>
		<table class="table">
			<thead>
				<tr>
					<th>WorkID</th>
					<th>Title</th>
					<th>Episodes</th>
					<th>Seasons</th>
					<th>StillRunning</th>
					<th>Network</th>
					<th>CameraSetup</th>
					<th>MinimumRuntime</th>
					<th>MaximumRuntime</th>
				</tr>
			</thead>
			<tbody data-bind="foreach: updateTVData">
				<tr>
					<td data-bind="text: WorkID"></td>
					<td data-bind="text: Title"></td>
					<td data-bind="text: Episodes"></td>
					<td data-bind="text: Seasons"></td>
					<td data-bind="text: StillRunning"></td>
					<td data-bind="text: Network"></td>
					<td data-bind="text: CameraSetup"></td>
					<td data-bind="text: MinimumRuntime"></td>
					<td data-bind="text: MaximumRuntime"></td>
					<td><button class="btn btn-default" data-bind="click: function() {updateRow($index)}">Update</button></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<?php
	include 'layout/footer.php'
?>