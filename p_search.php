<?php
	include 'layout/header.php';
?>
<div class="btn-group" role="group" aria-label="...">
<label>Search Term:</label>
<input type="text" data-bind="value: search"></input>
<button data-bind="click: searchForP">Send</button>
</div>
</br>
<div class="btn-group" role="group" aria-label="...">
<table>
<tr>
		<thead>
				<td>Name</td>
				<td>Place of Origin</td>
				<td>Occupation</td>
				<td>Gender</td>
				<td>Birthdate</td>
		</thead>
</tr>
</br>

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
</div>
</br>
<?php
	include 'layout/footer.php';
?>