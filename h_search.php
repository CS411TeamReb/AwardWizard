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
<tr>
		<thead>
				<td>Award Name</td>
				<td>Nominated or Won</td>
				<td>Person</td>
				<td>Award Show</td>
				<td>Year Given</td>
                <td>Work Name</td>

		</thead>
</tr>
</br>

		<tbody data-bind="foreach: honorSearchResults ">
<tr>
				<td data-bind="text: AwardName"></td>
				<td data-bind="text: Nominated"></td>
				<td data-bind="text: Person"></td>
				<td data-bind="text: Show"></td>
				<td data-bind="text: Year"></td>
                <td data-bind="text: WorkName"></td>
</tr>
		</tbody>
</table>
</div>
</br>
<?php
	include 'layout/footer.php';
?>