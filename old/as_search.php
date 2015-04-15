<?php
	include 'layout/header.php';
?>
<div class="btn-group" role="group" aria-label="...">
<label>Search Term:</label>
<input type="text" data-bind="value: search"></input>
<button data-bind="click: searchForAS">Send</button>
</div>
<br/>
<div class="btn-group" role="group" aria-label="...">
<table>
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
</div>
<br/>
<?php
	include 'layout/footer.php';
?>