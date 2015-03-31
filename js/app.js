$(document).ready(function() {
	ko.applyBindings(new AwardWizardViewModel());
});

var AwardWizardViewModel = function() {
	var self = this;

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
