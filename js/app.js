$(document).ready(function() {
	ko.applyBindings(new AwardWizardViewModel());
});

var AwardWizardViewModel = function() {
	var self = this;

	/* Update - Emily */
	self.tableToUpdate = ko.observable("");
	self.availableTables = ko.observableArray([]);
	
	$.getJSON("php/getTables.php", function(tables) {
		var mappedTables = $.map(tables, function(item) {
			return item.TABLE_NAME;
		});

		self.availableTables(mappedTables);
	});

	
};