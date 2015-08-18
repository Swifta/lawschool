(function($) {
	 $.dateSet = function(date) {
	
	var slash = date.search("/");
	var dash = date.search("-");
	var sDate;
	var mn;
	var dy;

	if(slash > 1) {	
	sDate = date.split('/');
	}
	else if(dash > 1) {
		sDate = date.split('-');
	}
	else {
		return date;
	}
	
	var d = sDate[0];
	var m = sDate[1];
	var y = sDate[2];
	
	if(d.charAt(0) == "0") {
		d = d.substr(1);
	}
	if(m.charAt(0) == "0") {
		m = m.substr(1);
	}
	
	if(d.length == 2 && d.charAt(0) !== "1") {
		var ln = d.charAt(d.length - 1) 
		switch (ln) {
			case "1" : dy = d + "st";
			break;
			case "2" : dy = d + "nd"
			break;
			case "3" : dy = d + "rd";
			break;
			default:
			dy = d + "th";
		}
	}
	else if(d.length == 1) {
		var ln = d.charAt(d.length - 1) 
		switch (ln) {
			case "1" : dy = d + "st";
			break;
			case "2" : dy = d + "nd"
			break;
			case "3" : dy = d + "rd";
			break;
			default:
			dy = d + "th";
		}
	}
	else {
		dy = d + "th";
	}
	
	switch (m) {
		case "1" : mn = "January";
		break;
		case "2" : mn = "Feburary";
		break;
		case "3" : mn = "March";
		break;
		case "4" : mn = "April";
		break;
		case "5" : mn = "May";
		break;
		case "6" : mn = "June";
		break;
		case "7" : mn = "July";
		break;
		case "8" : mn = "August";
		break;
		case "9" : mn = "September";
		break;
		case "10" : mn = "October";
		break;
		case "11" : mn = "November";
		break;
		case "12" : mn = "December";
	};
	
	var newDate;
	if (options.dateView == "slashNumDmmddyy") {
		newDate = m + "/" + d + "/" + y;	
	}
	
	else if(options.dateView == "dashNumDmmddyy") {
		newDate = m + "-" + d + "-" + y;	
	}
	else if(options.dateView == "dashNumDddmmyy") {
		newDate = d + "-" + m + "-" + y;	
	}
	else if(options.dateView == "slashNumDddmmyy") {
		newDate = d + "/" + m + "/" + y;	
	}
	
	else if(options.dateView == "mfFullWordDate") {
		newDate = mn+ " " + dy + ", " + y;	
	}
	
	else if(options.dateView == "dfFullWordDate") {
		newDate = dy+ " " + mn + ", " + y;	
	}
	
	else if(options.dateView == "dfHalfWordDate") {
		newDate = dy+ " " + mn.substr(0, 3) + ", " + y;	
		return newDate;
	}
	
	else if(options.dateView == "mfHalfWordDate") {
		newDate = mn.substr(0, 3)+ " " + dy + ", " + y;	
	}
	
	newDate = mn.substr(0, 3)+ " " + dy + ", " + y;
	
		 return newDate;
		 
	 };
	
	 
 })(jQuery);
	 