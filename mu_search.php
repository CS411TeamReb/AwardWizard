<?php
	include 'layout/header.php';
?>
<div class="btn-group" role="group" aria-label="...">
<label>Search Term:</label>
<input type="text" data-bind="value: search"></input>
<button data-bind="click: searchForMU">Send</button>
</div>
</br>
<div class="btn-group" role="group" aria-label="...">
<table>
<tr>
		<thead>
				<td>Title</td>
				<td>Artist</td>
				<td>Is Single</td>
				<td>Eligibility Year</td>
				<td>Genre</td>
				<td>Release Year</td>

		</thead>
</tr>
</br>

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
</br>
<?php
	include 'layout/footer.php';
?>