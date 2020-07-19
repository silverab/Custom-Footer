<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <title>Josh</title>
    </style>
  </head>
  <body>



<footer style="text-align: center; padding: 0%; position: absolute; bottom: 0px; left: 0px; width: 100%;">
<p class="cp-text" style="background-color: #188fe1; color: black; padding: 10px;">
    © 2020 Josh // Josh Zone Development, All Rights Reserved. <span id="datetime" style="color: white;"></span>
</p>
</footer>

  </body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
	

	
	function formatAMPM(date) {
	  var hours = date.getHours();
	  var minutes = date.getMinutes();
	  var ampm = hours >= 12 ? 'PM' : 'AM';
	  hours = hours % 12;
	  hours = hours ? hours : 12; // the hour '0' should be '12'
	  minutes = minutes < 10 ? '0'+minutes : minutes;
	  var strTime = hours + ':' + minutes + ' ' + ampm;
	  return strTime;
	}

	var d = new Date();
	var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
	var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
	document.getElementById("datetime").innerHTML = days[d.getDay()] +", "+ d.getDate() + " " + months[d.getMonth()] + " " + formatAMPM(new Date);
 
 // var footer = document.getElementById('footer');
 // footer.

// 	var d = new Date();
// var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
// document.getElementById("").innerHTML = months[d.getMonth()];


// console.log(formatAMPM(new Date));
	// var new = formatAMPM(new Date);
	// var n = d.getHours();
  // document.getElementById("demo").innerHTML = n;
// document.getElementById("datetime").innerHTML = days[d.getDay()];

// var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
// document.getElementById("datetime").innerHTML = days[d.getDay()] + ", " + + " " + d.getHours() +":"+ d.getMinutes();


// var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
// document.getElementById("datetime").innerHTML = days[d.getDay()] + " " + d.toLocaleTimeString();

	
	// var dt = new Date();
	  // var n = d.toLocaleTimeString();
	// document.getElementById("datetime").innerHTML = dt.toLocaleTimeString();

	// document.getElementById("datetime").innerHTML = dt.toLocaleString();
    	// let d;
    	// d = new Date();
    	// console.log(d.toString());


    </script>
</html>