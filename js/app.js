$(document).ready(function() {
	ko.applyBindings(new TestViewModel());
});

var TestViewModel = function() {
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
        function People(name, placeorigin, occupation, gender, birthdate) {
		var self = this;
		self.Name = ko.observable(name || "");
		self.PlaceOrigin = ko.observable(placeorigin || "");
		self.Occupation = ko.observable(occupation || "");
		self.Gender = ko.observable(gender || "");
		self.Birthdate = ko.observable(birthdate || "");
	}
        function Television(title, episodes, seasons, stillrunning, network, camerasetup, minimumruntime, maximumruntime) {
		var self = this;
		self.Title = ko.observable(title|| "");
		self.Episodes = ko.observable(episodes|| "");
		self.Seasons = ko.observable(seasons|| "");
		self.StillRunning = ko.observable(stillrunning|| "");
		self.Network = ko.observable(network|| "");
		self.CameraSetup = ko.observable(camerasetup|| "");
		self.MinimumRuntime = ko.observable(minimumruntime|| "");
		self.MaximumRuntime = ko.observable(maximumruntime|| "");
	}
        function Stage(setting, title, iteration, type, genre, songnumber, year, theatre, open, closed, previews, performances, running){
                var self = this;
                self.Title = ko.observable(title||"");
                self.Setting = ko.observable(setting||"");
                self.Iteration = ko.observable(iteration||"");
                self.Type = ko.observable(type||"");
                self.Genre = ko.observable(genre||"");
                self.SongNumber = ko.observable(songnumber||"");
                self.Year = ko.observable(year||"");
                self.Theatre = ko.observable(theatre||"");
                self.Open = ko.observable(open||"");
                self.Closed = ko.observable(closed || "");
                self.Previews = ko.observable(previews || "");
                self.Performances = ko.observable(performances || "");
                self.Running = ko.observable(running || "");
        }
        function Movie(title, rating, boxoffice, budget, year){
                var self = this;
                self.Title = ko.observable(title||"");
                self.Rating = ko.observable(rating||"");
                self.BoxOffice = ko.observable(boxoffice||"");
                self.Budget = ko.observable(budget||"");
                self.Year = ko.observable(year||"");
                
        }
        function Music(title, artist, issingle, eligibilityyear, genre, releaseyear){
                var self = this;
                self.Title = ko.observable(title||"");
                self.Artist = ko.observable(artist||"");
                self.isSingle = ko.observable(issingle||"");
                self.EligibilityYear = ko.observable(eligibilityyear||"");
                self.Genre = ko.observable(genre||"");
                self.ReleaseYear = ko.observable(releaseyear || "");
                
        }
        function Honor(awardname, nominated, person, show, year){
        		var self=this;
        		self.AwardName = ko.observable(awardname||"");
        		self.Nominated = ko.observable(nominated||"");
        		self.Person = ko.observable(person||"");
        		self.Show = ko.observable(show||"");
        		self.Year = ko.observable(year||"");
    	}
        self.search = ko.observable();

	self.awardShowSearchResults = ko.observableArray([new AwardShow()]);
        self.personSearchResults = ko.observableArray([new People()]);
        self.televisionSearchResults = ko.observableArray([new Television()]);
        self.stageSearchResults = ko.observableArray([new Stage()]);
        self.movieSearchResults = ko.observableArray([new Movie()]);
        self.musicSearchResults = ko.observableArray([new Music()]);
        self.honorSearchResults = ko.observableArray([new Honor()]);

        self.searchForH = function() {
		$.ajax({
			url: "php/honorSearch.php",
			type: "get",
			data: "search=" + encodeURIComponent(self.search().toString()),
			cache: false,
			success: function(shows) {
            	var showData = JSON.parse(shows);
            	var mappedShows = $.map(showData, function(item) {
                	return new Honor(item.AwardName, item.NominatedWon, item.PersonName, item.ShowName, item.YearGiven);
                });
                self.honorSearchResults.removeAll();
                for(var i = 0; i < mappedShows.length; i++) {
                	self.honorSearchResults.push(mappedShows[i]);
                }
				alert("Submitted to search!");
			},
			error: function() {
				alert("Shit, something went wrong.");
			}
		});
	}

        self.searchForMU = function() {
		$.ajax({
			url: "php/musicSearch.php",
			type: "get",
			data: "search=" + encodeURIComponent(self.search().toString()),
			cache: false,
			success: function(shows) {
            	var showData = JSON.parse(shows);
            	var mappedShows = $.map(showData, function(item) {
                	return new Music(item.Title, item.Artist, item.isSingle, item.EligibilityYear, item.Genre, item.ReleaseYear);
                });
                self.musicSearchResults.removeAll();
                for(var i = 0; i < mappedShows.length; i++) {
                	self.musicSearchResults.push(mappedShows[i]);
                }
				alert("Submitted to search!");
			},
			error: function() {
				alert("Shit, something went wrong.");
			}
		});}

        self.searchForMV = function() {
		$.ajax({
			url: "php/movieSearch.php",
			type: "get",
			data: "search=" + encodeURIComponent(self.search().toString()),
			cache: false,
			success: function(shows) {
            	var showData = JSON.parse(shows);
            	var mappedShows = $.map(showData, function(item) {
                	return new Movie(item.Title, item.Rating, item.BoxOffice, item.Budget, item.Year);
                });
                self.movieSearchResults.removeAll();
                for(var i = 0; i < mappedShows.length; i++) {
                	self.movieSearchResults.push(mappedShows[i]);
                }
				alert("Submitted to search!");
			},
			error: function() {
				alert("Shit, something went wrong.");
			}
		});
	}

        self.searchForS = function() {
		$.ajax({
			url: "php/stageSearch.php",
			type: "get",
			data: "search=" + encodeURIComponent(self.search().toString()),
			cache: false,
			success: function(shows) {
            	var showData = JSON.parse(shows);
            	var mappedShows = $.map(showData, function(item) {
                	return new Stage(item.Setting, item.Title, item.Iteration, item.Type, item.Genre, item.SongNumber, item.Year, item.Theatre, item.Open, item.Closed, item.Previews, item.Performances, item.Running);
                });
                self.stageSearchResults.removeAll();
                for(var i = 0; i < mappedShows.length; i++) {
                	self.stageSearchResults.push(mappedShows[i]);
                }
				alert("Submitted to search!");
			},
			error: function() {
				alert("Shit, something went wrong.");
			}
		});
	}

        self.searchForAS = function() {
		$.ajax({
			url: "php/awardShowSearch.php",
			type: "get",
			data: "search=" + encodeURIComponent(self.search().toString()),
			cache: false,
			success: function(shows) {
            	var showData = JSON.parse(shows);
            	var mappedShows = $.map(showData, function(item) {
                	return new AwardShow(item.ShowName, item.Description, item.Year, item.Type, item.Criteria, item.VotingPanel);
                });
                self.awardShowSearchResults.removeAll();
                for(var i = 0; i < mappedShows.length; i++) {
                	self.awardShowSearchResults.push(mappedShows[i]);
                }
				alert("Submitted to search!");
			},
			error: function() {
				alert("Shit, something went wrong.");
			}
		});
	}
        self.searchForP = function() {
		$.ajax({
			url: "php/personSearch.php",
			type: "get",
			data: "search=" + encodeURIComponent(self.search().toString()),
			cache: false,
			success: function(shows) {
            	var showData = JSON.parse(shows);
            	var mappedShows = $.map(showData, function(item) {
                	return new People(item.Name, item.PlaceOrigin, item.Occupation, item.Gender, item.Birthdate);
                });
                self.personSearchResults.removeAll();
                for(var i = 0; i < mappedShows.length; i++) {
                	self.personSearchResults.push(mappedShows[i]);
                }
				alert("Submitted to search!");
			},
			error: function() {
				alert("Shit, something went wrong.");
			}
		});
	}
        self.searchForTV = function() {
		$.ajax({
			url: "php/tvSearch.php",
			type: "get",
			data: "search=" + encodeURIComponent(self.search().toString()),
			cache: false,
			success: function(shows) {
            	var showData = JSON.parse(shows);
            	var mappedShows = $.map(showData, function(item) {
                	return new Television(item.Title, item.Episodes, item.Seasons, item.StillRunning, item.Network, item.CameraSetup, item.MinimumRuntime, item.MaximumRuntime);
                });
                self.televisionSearchResults.removeAll();
                for(var i = 0; i < mappedShows.length; i++) {
                	self.televisionSearchResults.push(mappedShows[i]);
                }
				alert("Submitted to search!");
			},
			error: function() {
				alert("Shit, something went wrong.");
			}
		});
	}
};