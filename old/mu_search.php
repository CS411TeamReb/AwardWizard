<?php
	include 'layout/header.php';
?>
<div class="btn-group" role="group" aria-label="...">
<label>Search Term:</label>
<input type="text" data-bind="value: search"></input>
<button data-bind="click: searchForMU">Send</button>
</div>
<div class="btn-group" role="group" aria-label="...">
<table>
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
</div>
<?php
	include 'layout/footer.php';
?>