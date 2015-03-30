<?php
	include 'layout/header.php';
?>
<div class="btn-group" role="group" aria-label="...">
<label>Search Term:</label>
<input type="text" data-bind="value: search"></input>
<button data-bind="click: searchForMV">Send</button>
</div>
</br>
<div class="btn-group" role="group" aria-label="...">
<table>
<tr>
		<thead>
				<td>Title</td>
				<td>Rating</td>
				<td>Box Office</td>
				<td>Budget</td>
				<td>Year</td>
		</thead>
</tr>
</br>

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
</div>
</br>
<?php
	include 'layout/footer.php';
?>