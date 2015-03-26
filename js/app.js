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
		self.Birthdate = ko.observable(new Date(birthdate) || Date.now());
	}

	function Stage(id, setting, title, iteration, type, genre, songNumber, year, theatre, open, closed, previews, performance, running) {
		var self = this;
		self.WorkID = ko.observable(id || "");
		self.Setting = ko.observable(setting || "");
		self.Title = ko.observable(title || "");
		self.Iteration = ko.observable(iteration || 1);
		self.Type = ko.observable(type || "");
		self.Genre = ko.observable(genre || "");
		self.SongNumber = ko.observable(songNumber || 0);
		self.YEAR = ko.observable(year || 2015);
		self.Theatre = ko.observable(theatre || "");
		self.Open = ko.observable(new Date(open) || Date.now());
		self.Closed = ko.observable(new Date(closed) || Date.now());
		self.Previews = ko.observable(previews || 0);
		self.Performances = ko.observable(performance || 0);
		self.Running = ko.observable(running || 0);
	}

	function Television(id, title, episodes, seasons, running, network, camera, minr, maxr) {
		var self = this;
		self.WorkID = ko.observable(id || "");
		self.Title = ko.observable(title || "");
		self.Episodes = ko.observable(episodes || 0);
		self.Seasons = ko.observable(seasons || 0);
		self.StillRunning = ko.observable(running || 0);
		self.Network = ko.observable(network || "");
		self.CameraSetup = ko.observable(camera || "");
		self.MinimumRuntime = ko.observable(minr || 0);
		self.MaximumRuntime = ko.observable(maxr || 0);
	}

	self.tableToUpdate = ko.observable("AwardShow");
	self.availableTables = ko.observableArray(["AwardShow", "FictionalLocation", "FilmedIn", "GenreOf", "Honor", "Movies", "Music", "People", "Stage", "Television"]);

	self.updateData = ko.observableArray([]);

	self.tableToUpdate.subscribe(function(newValue) {
		$.ajax({
			url: "php/getData.php",
			type: "get",
			data: "table=" + encodeURIComponent(newValue.toString()),
			cache: false,
			success: function(data) {
				var jsonData = JSON.parse(data);
				self.updateData.removeAll();
				var mappedItems = Array();
				if (newValue === "AwardShow") {
					mappedItems = $.map(jsonData, function(item) {
						return new AwardShow(item.ShowName, item.Description, item.Year, item.Type, item.Criteria, item.VotingPanel);
					});
				}
				else if (newValue === "FictionalLocation") {
					mappedItems = $.map(jsonData, function(item) {
						return new FictionalLocation(item.WorkID, item.Location);
					});
				}
				else if (newValue === "FilmedIn") {
					mappedItems = $.map(jsonData, function(item) {
						return new FilmedIn(item.WorkID, item.Location);
					});
				}
				else if (newValue === "GenreOf") {
					mappedItems = $.map(jsonData, function(item) {
						return new GenreOf(item.WorkID, item.GenreName);
					});
				}
				else if (newValue === "Honor") {
					mappedItems = $.map(jsonData, function(item) {
						return new Honor(item.AwardID, item.AwardName, item.YearGiven, item.NominatedWon, item.ShowName, item.WorkID, item.PersonName);
					});
				}
				else if (newValue === "Movies") {
					mappedItems = $.map(jsonData, function(item) {
						return new Movie(item.WorkID, item.Title, item.Rating, item.BoxOffice, item.Budget, item.Year);
					});
				}
				else if (newValue === "Music") {
					mappedItems = $.map(jsonData, function(item) {
						return new Music(item.WorkID, item.Title, item.Rating, item.BoxOffice, item.Budget, item.Year);
					});
				}
				else if (newValue === "People") {
					mappedItems = $.map(jsonData, function(item) {
						return new People(item.Name, item.PlaceOrigin, item.Occupation, item.Gender, item.Birthdate);
					});
				}
				else if (newValue === "Stage") {
					mappedItems = $.map(jsonData, function(item) {
						return new Stage(item.WorkID, item.Setting, item.Title, item.Iteration, item.Type, item.Genre, item.SongNumber, item.YEAR, item.Theatre, item.Open, item.Closed, item.Previews, item.Performances, item.Running);
					})
				}
				else if (newValue === "Television") {
					mappedItems = $.map(jsonData, function(item) {
						return new Television(item.WorkID, item.Title, item.Episodes, item.Seasons, item.StillRunning, item.Network, item.CameraSetup, item.MinimumRuntime, item.MaximumRuntime);
					})
				}
				for (var i = 0; i < mappedItems.length; i++) {
					self.updateData.push(mappedItems[i]);
				}
			},
			error: function() {
				alert("Shit, something went wrong.");
			}
		});
		
		self.updateRow = function(index) {
			console.log(self.updateData()[index]);
		}
	});
};