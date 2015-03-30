<?php
	include 'layout/header.php';
?>
<div class="btn-group" role="group" aria-label="...">
<label>Search Term:</label>
<input type="text" data-bind="value: search"></input>
<button data-bind="click: searchForH">Send</button>
</div>
</br>
<div class="btn-group" role="group" aria-label="...">
<table>
		<thead>
			<tr>
				<td>Award Name</td>
				<td>Nominated or Won</td>
				<td>Person</td>
				<td>Award Show</td>
				<td>Year Given</td>
			<tr/>
		</thead>
		<tbody data-bind="foreach: honorSearchResults ">
			<tr>
				<td data-bind="text: AwardName"></td>
				<td data-bind="text: NominatedWon"></td>
				<td data-bind="text: PersonName"></td>
				<td data-bind="text: ShowName"></td>
				<td data-bind="text: YearGiven"></td>
			</tr>
		</tbody>
	</table>
</div>
<?php
	include 'layout/footer.php';
?>