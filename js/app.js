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
		self.Birthdate = ko.observable(new Date(birthdate) || new Date());
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
		self.Open = ko.observable(new Date(open) || new Date());
		self.Closed = ko.observable(new Date(closed) || new Date());
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
	self.availableTables = ko.observableArray(["AwardShow", "Honor", "Movies", "Music", "People", "Stage", "Television"]);

	self.updateAwardData = ko.observableArray([]);
	self.updateHonorData = ko.observableArray([]);
	self.updateMovieData = ko.observableArray([]);
	self.updateMusicData = ko.observableArray([]);
	self.updatePeopleData = ko.observableArray([]);
	self.updateStageData = ko.observableArray([]);
	self.updateTVData = ko.observableArray([]);

	function refresh(newValue) {
		$.ajax({
			url: "php/getData.php",
			type: "get",
			data: "table=" + encodeURIComponent(newValue.toString()),
			cache: false,
			success: function(data) {
				var jsonData = JSON.parse(data);
				if (newValue === "AwardShow") {
					var mappedAwardShows = $.map(jsonData, function(item) {
						return new AwardShow(item.ShowName, item.Description, item.Year, item.Type, item.Criteria, item.VotingPanel);
					});
					self.updateAwardData.removeAll();
					self.updateAwardData(mappedAwardShows);
				}
				else if (newValue === "Honor") {
					var mappedHonors = $.map(jsonData, function(item) {
						return new Honor(item.AwardID, item.AwardName, item.YearGiven, item.NominatedWon, item.ShowName, item.WorkID, item.PersonName);
					});
					self.updateHonorData.removeAll();
					self.updateHonorData(mappedHonors);
				}
				else if (newValue === "Movies") {
					var mappedMovies = $.map(jsonData, function(item) {
						return new Movie(item.WorkID, item.Title, item.Rating, item.BoxOffice, item.Budget, item.Year);
					});
					self.updateMovieData.removeAll();
					self.updateMovieData(mappedMovies);
				}
				else if (newValue === "Music") {
					var mappedMusic = $.map(jsonData, function(item) {
						return new Music(item.WorkID, item.Title, item.Artist, item.isSingle, item.EligibilityYear, item.Genre, item.ReleaseYear);
					});
					self.updateMusicData.removeAll();
					self.updateMusicData(mappedMusic);
				}
				else if (newValue === "People") {
					var mappedPeople = $.map(jsonData, function(item) {
						return new People(item.Name, item.PlaceOrigin, item.Occupation, item.Gender, item.Birthdate);
					});
					self.updatePeopleData.removeAll();
					self.updatePeopleData(mappedPeople);
				}
				else if (newValue === "Stage") {
					var mappedStage = $.map(jsonData, function(item) {
						return new Stage(item.WorkID, item.Setting, item.Title, item.Iteration, item.Type, item.Genre, item.SongNumber, item.YEAR, item.Theatre, item.Open, item.Closed, item.Previews, item.Performances, item.Running);
					});
					self.updateStageData.removeAll();
					self.updateStageData(mappedStage);
				}
				else if (newValue === "Television") {
					var mappedTelevision = $.map(jsonData, function(item) {
						return new Television(item.WorkID, item.Title, item.Episodes, item.Seasons, item.StillRunning, item.Network, item.CameraSetup, item.MinimumRuntime, item.MaximumRuntime);
					});
					self.updateTVData.removeAll();
					self.updateTVData(mappedTelevision);
				}
			},
			error: function() {
				alert("Shit, something went wrong.");
			}
		});
	}

	self.tableToUpdate.subscribe(function(newValue) {
		refresh(newValue);
	});

	self.updateRow = function(index, table) {
		var sendData = {};
		if (table === "AwardShow") {
			sendData = ko.toJS({
				"table": table,
				"data": self.updateAwardData()[index]
			});
		}
		else if (table === "Honor") {
			sendData = ko.toJS({
				"table": table,
				"data": self.updateHonorData()[index]
			});
		}
		else if (table === "Movies") {
			sendData = ko.toJS({
				"table": table,
				"data": self.updateMovieData()[index]
			});
		}
		else if (table === "Music") {
			sendData = ko.toJS({
				"table": table,
				"data": self.updateMusicData()[index]
			});
		}
		else if (table === "People") {
			sendData = ko.toJS({
				"table": table,
				"data": self.updatePeopleData()[index]
			});
		}
		else if (table === "Stage") {
			sendData = ko.toJS({
				"table": table,
				"data": self.updateStageData()[index]
			});
		}
		else if (table === "Television") {
			sendData = ko.toJS({
				"table": table,
				"data": self.updateTVData()[index]
			});
		}

		$.ajax({
			url: 'php/update.php', 
			type: 'post',
			data: sendData,
			success: function() {
				refresh(table);
				alert("Your update was successful!");
			},
			error: function() {
				alert("Shit, something went wrong.");
			}
		});
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
                	return new Honor(item.AwardID, item.AwardName, item.YearGiven, item.NominatedWon, item.ShowName, item.WorkID, item.PersonName);
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
                	return new Music(item.WorkID, item.Title, item.Artist, item.isSingle, item.EligibilityYear, item.Genre, item.ReleaseYear);
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
		});
	}

    self.searchForMV = function() {
		$.ajax({
			url: "php/movieSearch.php",
			type: "get",
			data: "search=" + encodeURIComponent(self.search().toString()),
			cache: false,
			success: function(shows) {
            	var showData = JSON.parse(shows);
            	var mappedShows = $.map(showData, function(item) {
                	return new Movie(item.WorkID, item.Title, item.Rating, item.BoxOffice, item.Budget, item.Year);
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
                	return new Stage(item.WorkID, item.Setting, item.Title, item.Iteration, item.Type, item.Genre, item.SongNumber, item.YEAR, item.Theatre, item.Open, item.Closed, item.Previews, item.Performances, item.Running);
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
                	return new Television(item.WorkID, item.Title, item.Episodes, item.Seasons, item.StillRunning, item.Network, item.CameraSetup, item.MinimumRuntime, item.MaximumRuntime);
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

	self.userid = ko.observable("");
		self.userpersonname = ko.observable("");
        self.usermusictitle = ko.observable("");
        self.usermusicartist = ko.observable("");
        self.usertvtitle = ko.observable("");
        self.usermovietitle = ko.observable("");
        self.userstagetitle = ko.observable("");

	self.postuserPersonToDB = function() {
		$.ajax({
			url: "php/postuserperson.php",
			type: "post",
			data: "userid=" + parseInt(self.userid()) + "&userpersonname=" + encodeURIComponent(self.userpersonname().toString()) ,
			cache: false,
			success: function() {
				alert("Your data was successfully submitted!");
			},
			error: function() {
				alert("Shit, something went wrong.");
			}
		});
	}

        self.postuserMusicToDB = function() {
		$.ajax({
			url: "php/postusermusic.php",
			type: "post",
			data: "userid=" + parseInt(self.userid()) + "&usermusictitle=" + encodeURIComponent(self.usermusictitle().toString()) + "&usermusicartist=" + encodeURIComponent(self.usermusicartist().toString()),
			cache: false,
			success: function() {
				alert("Your data was successfully submitted!");
			},
			error: function() {
				alert("Shit, something went wrong.");
			}
		});
	}

        self.postuserTVToDB = function() {
		$.ajax({
			url: "php/postusertv.php",
			type: "post",
			data: "userid=" + parseInt(self.userid()) + "&usertvtitle=" + encodeURIComponent(self.usertvtitle().toString()) ,
			cache: false,
			success: function() {
				alert("Your data was successfully submitted!");
			},
			error: function() {
				alert("Shit, something went wrong.");
			}
		});
	}

        self.postuserMovieToDB = function() {
		$.ajax({
			url: "php/postusermovie.php",
			type: "post",
			data: "userid=" + parseInt(self.userid()) + "&usermovietitle=" + encodeURIComponent(self.usermovietitle().toString()) ,
			cache: false,
			success: function() {
				alert("Your data was successfully submitted!");
			},
			error: function() {
				alert("Shit, something went wrong.");
			}
		});
	}

        self.postuserStageToDB = function() {
		$.ajax({
			url: "php/postuserstage.php",
			type: "post",
			data: "userid=" + parseInt(self.userid()) + "&userstagetitle=" + encodeURIComponent(self.userstagetitle().toString()) ,
			cache: false,
			success: function() {
				alert("Your data was successfully submitted!");
			},
			error: function() {
				alert("Shit, something went wrong.");
			}
		});
	}

};