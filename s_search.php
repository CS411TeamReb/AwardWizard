<?php
	include 'layout/header.php';
?>
<div class="btn-group" role="group" aria-label="...">
<label>Search Term:</label>
<input type="text" data-bind="value: search"></input>
<button data-bind="click: searchForS">Send</button>
</div>
</br>
<div class="btn-group" role="group" aria-label="...">
<table>
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
				<td data-bind="text: Year"></td>
				<td data-bind="text: Theatre"></td>
				<td data-bind="text: Open"></td>
				<td data-bind="text: Closed"></td>
				<td data-bind="text: Previews"></td>
				<td data-bind="text: Performances"></td>
				<td data-bind="text: Running"></td>


</tr>
		</tbody>
</table>
</div>
<?php
	include 'layout/footer.php';
?>