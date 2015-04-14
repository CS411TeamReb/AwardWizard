<?php
	include 'layout/header.php';
?>
<div class="main">
<div class="row">
    <button type="button" class="btn btn-default" block data-bind="click: function() {tableToSearch.changeto('AwardShow')}">Award Show</button>
    <button type="button" class="btn btn-default" block data-bind="click: function() {tableToSearch.changeto('People')}">People</button>
    <button type="button" class="btn btn-default" block data-bind="click: function() {tableToSearch.changeto('Television')}">TV Show</button>
    <button type="button" class="btn btn-default" block data-bind="click: function() {tableToSearch.changeto('Stage')}">Stage Performance</button>
    <button type="button" class="btn btn-default" block data-bind="click: function() {tableToSearch.changeto('Movies')}">Movie</button>
    <button type="button" class="btn btn-default" block data-bind="click: function() {tableToSearch.changeto('Music')}">Music</button>
    <button type="button" class="btn btn-default" block data-bind="click: function() {tableToSearch.changeto('Honor')}">Awards</button>
</div>
<br/>
<div class="row searchThings">
    <label>Search Term:</label>
    <input class="form-control searchTerm" type="text" data-bind="value: search"></input>
    <select class="form-control dropdownOptions" data-bind="options: columns, value: columnToSearch"></select>
    <button class="btn btn-default" data-bind="click: searchTable">Search</button>
</div>
<br/>
<table class="table" data-bind="visible: tableToSearch() == 'AwardShow'">
    <thead>
        <tr>
            <td>Show Name</td>
            <td>Description</td>
            <td>Year</td>
            <td>Type</td>
            <td>Criteria</td>
            <td>Voting Panel</td>
        </tr>
    </thead>
    <tbody data-bind="foreach: awardShowSearchResults">
        <tr>
            <td data-bind="text: ShowName"></td>
            <td data-bind="text: Description"></td>
            <td data-bind="text: Year"></td>
            <td data-bind="text: Type"></td>
            <td><a data-bind="attr: {href: Criteria}"><span data-bind="text: Criteria"></span></a></td>
            <td data-bind="text: VotingPanel"></td>
        </tr>
    </tbody>
</table>
<table class="table" data-bind="visible: tableToSearch() == 'People'">
    <thead>
        <tr>
            <td>Name</td>
            <td>Place of Origin</td>
            <td>Occupation</td>
            <td>Gender</td>
            <td>Birthdate</td>
        </tr>
    </thead>
    <tbody data-bind="foreach: personSearchResults">
        <tr>
            <td data-bind="text: Name"></td>
            <td data-bind="text: PlaceOrigin"></td>
            <td data-bind="text: Occupation"></td>
            <td data-bind="text: Gender"></td>
            <td data-bind="text: Birthdate"></td>
        </tr>
    </tbody>
</table>
<table class="table" data-bind="visible: tableToSearch() == 'Television'">
    <tr>
    <thead>
        <td>Title</td>
        <td>Episodes</td>
        <td>Seasons</td>
        <td>Still Running</td>
        <td>Network</td>
        <td>Camera Set-up</td>
        <td>Minimum Runtime</td>
        <td>Maximum Runtime</td>
    </thead>
    </tr>
    <br/>
    <tbody data-bind="foreach: televisionSearchResults ">
        <tr>
            <td data-bind="text: Title"></td>
            <td data-bind="text: Episodes"></td>
            <td data-bind="text: Seasons"></td>
            <td data-bind="text: StillRunning"></td>
            <td data-bind="text: Network"></td>
            <td data-bind="text: CameraSetup"></td>
            <td data-bind="text: MinimumRuntime"></td>
            <td data-bind="text: MaximumRuntime"></td>
        </tr>
    </tbody>
</table>
<table class="table" data-bind="visible: tableToSearch() == 'Stage'">
    <thead>
        <tr>
            <td>Title</td>
            <td>Setting</td>
            <td>Iteration</td>
            <td>Type</td>
            <td>Genre</td>
            <td>Number of Songs</td>
            <td>Year</td>
            <td>Theatre</td>
            <td>Open</td>
            <td>Closed</td>
            <td>Previews</td>
            <td>Performances</td>
            <td>Still Running?</td>
        </tr>
    </thead>
    <tbody data-bind="foreach: stageSearchResults ">
        <tr>
            <td data-bind="text: Title"></td>
            <td data-bind="text: Setting"></td>
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
        </tr>
    </tbody>
</table>
<table class="table" data-bind="visible: tableToSearch() == 'Movies'">
    <thead>
        <tr>
            <td>Title</td>
            <td>Rating</td>
            <td>Box Office</td>
            <td>Budget</td>
            <td>Year</td>
        </tr>
    </thead>
    <tbody data-bind="foreach: movieSearchResults ">
        <tr>
            <td data-bind="text: Title"></td>
            <td data-bind="text: Rating"></td>
            <td data-bind="text: BoxOffice"></td>
            <td data-bind="text: Budget"></td>
            <td data-bind="text: Year"></td>
        </tr>
    </tbody>
</table>
<table class="table" data-bind="visible: tableToSearch() == 'Music'">
    <thead>
        <tr>
            <td>Title</td>
            <td>Artist</td>
            <td>Is Single</td>
            <td>Eligibility Year</td>
            <td>Genre</td>
            <td>Release Year</td>
        </tr>
    </thead>
    <tbody data-bind="foreach: musicSearchResults ">
        <tr>
            <td data-bind="text: Title"></td>
            <td data-bind="text: Artist"></td>
            <td data-bind="text: isSingle"></td>
            <td data-bind="text: EligibilityYear"></td>
            <td data-bind="text: Genre"></td>
            <td data-bind="text: ReleaseYear"></td>
        </tr>
    </tbody>
</table>
<table class="table" data-bind="visible: tableToSearch() == 'Honor'">
    <thead>
        <tr>
            <td>Award Name</td>
            <td>Nominated or Won</td>
            <td>Person</td>
            <td>Award Show</td>
            <td>Year Given</td>
            <td>Work Name</td>
        <tr/>
    </thead>
    <tbody data-bind="foreach: honorSearchResults ">
        <tr>
            <td data-bind="text: AwardName"></td>
            <td data-bind="text: NominatedWon"></td>
            <td data-bind="text: PersonName"></td>
            <td data-bind="text: ShowName"></td>
            <td data-bind="text: YearGiven"></td>
            <td data-bind="text: WorkName"></td>
        </tr>
    </tbody>
</table>
</div>
<?php
	include 'layout/footer.php';
?>