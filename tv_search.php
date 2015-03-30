<?php
	include 'layout/header.php';
?>
<div class="btn-group" role="group" aria-label="...">
<label>Search Term:</label>
<input type="text" data-bind="value: search"></input>
<button data-bind="click: searchForTV">Send</button>
</div>
</br>
<div class="btn-group" role="group" aria-label="...">
<table>
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
</br>

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
</div>
</br>
<?php
	include 'layout/footer.php';
?>