$(document).ready(function() {
	ko.applyBindings(new AwardWizardViewModel());
});

var AwardWizardViewModel = function() {
	var self = this;

	function AwardShow(name, description, year, type, criteria, panel) {
		var self = this;
		self.ShowName = ko.observable(name || "");
		self.Description = ko.observable(description || "");
		self.Year = ko.observable(year || 2015);
		self.Type = ko.observable(type || "");
		self.Criteria = ko.observable(criteria || "");
		self.VotingPanel = ko.observable(panel || "");
	}

	function FictionalLocation(id, location) {
		var self = this;
		self.WorkID = ko.observable(id || "");
		self.Location = ko.observable(location || "");
	}

	function FilmedIn(id, location) {
		var self = this;
		self.WorkID = ko.observable(id || "");
		self.Location = ko.observable(location || "");
	}

	function GenreOf(id, genre) {
		var self = this;
		self.WorkID = ko.observable(id || "");
		self.GenreName = ko.observable(genre || "");
	}

	function Honor(id, name, year, nominatedWon, showName, workId, personName) {
		var self = this;
		self.AwardID = ko.observable(id || "");
		self.AwardName = ko.observable(name || "");
		self.YearGiven = ko.observable(year || 2015);
		self.NominatedWon = ko.observable(nominatedWon || "");
		self.ShowName = ko.observable(showName || "");
		self.WorkID = ko.observable(workId || "");
		self.PersonName = ko.observable(personName || "");
	}

	function Movie(id, title, rating, boxOffice, budget, year) {
		var self = this;
		self.WorkID = ko.observable(id || "");
		self.Title = ko.observable(title || "");
		self.Rating = ko.observable(rating || "");
		self.BoxOffice = ko.observable(boxOffice || 0.0);
		self.Budget = ko.observable(budget || 0.0);
		self.Year = ko.observable(year || 2015);
	}

	function Music(id, title, artist, single, eYear, genre, rYear) {
		var self = this;
		self.WorkID = ko.observable(id || "");
		self.Title = ko.observable(title || "");
		self.Artist = ko.observable(artist || "");
		self.isSingle = ko.observable(single || 0);
		self.EligibilityYear = ko.observable(eYear || 2015);
		self.Genre = ko.observable(genre || "");
		self.ReleaseYear = ko.observable(rYear || "");
	}

	function People(name, place, occupation, gender, birthdate) {
		var self = this;
		self.Name = ko.observable(name || "");
		self.PlaceOrigin = ko.observable(place || "");
		self.Occupation = ko.observable(occupation || "");
		self.Gender = ko.observable(gender || "");
		self.Birthdate = ko.observable(birthdate || "");
	}

	function Stage(id, setting, title, iteration, type, genre, songNumber, year, theatre, open, closed, previews, performance, running) {
		var self = this;
		
	}

	self.awardShows = ko.observableArray([]);
	
	$.getJSON("php/getSample.php", function(shows) {
		var mappedAwards = $.map(shows, function(item) {
			return new AwardShow(item.ShowName, item.Description, item.Year, item.Type, item.Criteria, item.VotingPanel);
		});

		self.awardShows(mappedAwards);
	});




	self.tableToUpdate = ko.observable("AwardShow");
	self.availableTables = ko.observableArray(["AwardShow", "FictionalLocation", "FilmedIn", "GenreOf", "Honor", "Movies", "Music", "People", "Stage", "Television"]);

	self.awardShows = ko.observableArray([]);
};