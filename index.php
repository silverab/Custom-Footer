<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css" type="text/css">
    <title>Josh</title>
    </style>
  </head>
  <body>
	
	<div class="container-fluid bg-light">
   
   <section>             
    <div class="col-sm-12 col-md-10 offset-md-1">
      <div class="row">           

      <!-- Gallery Item Loop  -->

         <div onclick="changeActiveState(1)" class="col-md-6 col-lg-4 py-4" data-toggle="modal" data-target="#exampleModal">
          <div class="gallery-container">
          <img src="https://www.ravenshoegroup.com/concept/codepen/gallery1.jpg" alt="Alt Name" class="image">

             <div class="overlay">
              <p class="text p-2">
                <span>Gallery Title</span><br>
                <span class="small">Gallery Sub Title</span>
                <button class="btn view-btn">VIEW</button>
              </p>                            
             </div>

          </div>
         </div> 

      <!--  End  -->
         
        
         <div onclick="changeActiveState(2)" class="col-md-6 col-lg-4 py-4" data-toggle="modal" data-target="#exampleModal">
            <div class="gallery-container">
               <img src="https://www.ravenshoegroup.com/concept/codepen/gallery2.jpg" alt="Alt Name" class="image">

               <div class="overlay">
                  <p class="text p-2">
                     <span>Gallery Title 2</span><br>
                     <span class="small">Gallery Sub Title 2</span>
                     <button class="btn view-btn">VIEW</button>
                  </p>                            
               </div>

            </div>
         </div> 

         <div onclick="changeActiveState(3)" class="col-md-6 col-lg-4 py-4" data-toggle="modal" data-target="#exampleModal">
            <div class="gallery-container">
               <img src="https://www.ravenshoegroup.com/concept/codepen/gallery3.jpg" alt="Alt Name" class="image">

               <div class="overlay">
                  <p class="text p-2">
                     <span>Gallery Title 3</span><br>
                     <span class="small">Gallery Sub Title 3</span>
                     <button class="btn view-btn">VIEW</button>
                  </p>                            
               </div>

            </div>
         </div>

    
       <div>
     </div>
   </section>
    
</div>

      
<!-- MODAL -->
<div class="modal fadeIn" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-lg modal-dialog-centered" role="document">   
     
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
   <div class="carousel-inner">
     
     <!--  Item 1 Loop  -->
     <div class="carousel-item active" id="carousel-1">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Gallery Title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>

         <div class="modal-body">
            <img src="https://www.ravenshoegroup.com/concept/codepen/gallery1.jpg" id="currentImg-1" Title="" alt="Alt Name" class="image">
         </div>
         
         <div class="modal-thumbs px-3 py-3">
            <label>Gallery Images</label>
            <ul>
               <li class="px-1" onclick="showImage('https://www.ravenshoegroup.com/concept/codepen/gallery1.jpg','Title',1);">
                  <div class="border"><img src="https://www.ravenshoegroup.com/concept/codepen/gallery1.jpg" alt="Alt Name" class="image"></div>                  
               </li>
               <li class="px-1" onclick="showImage('https://www.ravenshoegroup.com/concept/codepen/gallery2.jpg','Title',1);">
                  <div class="border"><img src="https://www.ravenshoegroup.com/concept/codepen/gallery2.jpg" alt="Alt Name" class="image"></div>                  
               </li>
               <li class="px-1" onclick="showImage('https://www.ravenshoegroup.com/concept/codepen/gallery3.jpg','Title',1);">
                  <div class="border"><img src="https://www.ravenshoegroup.com/concept/codepen/gallery3.jpg" alt="Alt Name" class="image"></div>                  
               </li>
               <li class="px-1" onclick="showImage('https://www.ravenshoegroup.com/concept/codepen/gallery1.jpg','Title',1);">
                  <div class="border"><img src="https://www.ravenshoegroup.com/concept/codepen/gallery1.jpg" alt="Alt Name" class="image"></div>                  
               </li>
            </ul>
         </div>              
      </div>
     </div>  
     <!-- Item 1 End  -->
       
     <!--  Item 2 Loop  -->
     <div class="carousel-item" id="carousel-2">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Gallery Title 2</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>

         <div class="modal-body">
            <img src="https://www.ravenshoegroup.com/concept/codepen/gallery2.jpg" id="currentImg-2" alt="Alt Name" class="image">
         </div>
         
         <div class="modal-thumbs px-3 py-3">
            <label>Gallery Images</label>
            <ul>
               <li class="px-1" onclick="showImage('https://www.ravenshoegroup.com/concept/codepen/gallery2.jpg','Title',2);">
                  <div class="border"><img src="https://www.ravenshoegroup.com/concept/codepen/gallery2.jpg" alt="Alt Name" class="image"></div>                  
               </li>
               <li class="px-1" onclick="showImage('https://www.ravenshoegroup.com/concept/codepen/gallery3.jpg','Title',2);">
                  <div class="border"><img src="https://www.ravenshoegroup.com/concept/codepen/gallery3.jpg" alt="Alt Name" class="image"></div>                  
               </li>
               <li class="px-1" onclick="showImage('https://www.ravenshoegroup.com/concept/codepen/gallery1.jpg','Title',2);">
                  <div class="border"><img src="https://www.ravenshoegroup.com/concept/codepen/gallery1.jpg" alt="Alt Name" class="image"></div>                  
               </li>
            </ul>
         </div>              
      </div>
     </div>  
     <!-- Item 2 End  -->
      
     <!--  Item 3 Loop  -->
     <div class="carousel-item" id="carousel-3">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Gallery Title 3</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>

         <div class="modal-body">
            <img src="https://www.ravenshoegroup.com/concept/codepen/gallery3.jpg" id="currentImg-3" alt="Alt Name" class="image">
         </div>
         
         <div class="modal-thumbs px-3 py-3">
            <label>Gallery Images</label>
            <ul>
               <li class="px-1" onclick="showImage('https://www.ravenshoegroup.com/concept/codepen/gallery3.jpg','Title',3);">
                  <div class="border"><img src="https://www.ravenshoegroup.com/concept/codepen/gallery3.jpg" alt="Alt Name" class="image"></div>                  
               </li>
               <li class="px-1" onclick="showImage('https://www.ravenshoegroup.com/concept/codepen/gallery2.jpg','Title',3);">
                  <div class="border"><img src="https://www.ravenshoegroup.com/concept/codepen/gallery2.jpg" alt="Alt Name" class="image"></div>                  
               </li>
            </ul>
         </div>              
      </div>
     </div>  
     <!-- Item 3 End  -->
    
     
   </div> 
  </div><!-- Carousel End -->
   
</div>   
   
<!-- Prev Next Arrows -->
<a href="#carouselExampleFade" role="button" data-slide="prev" class="carousel-control-prev"><div class="arrow-left d-flex align-items-center text-center" href="#carouselExampleFade" role="button" data-slide="prev"><img src="https://www.ravenshoegroup.com/concept/codepen/arrow-left.png" width="20px" alt="Left Arrow"></div></a>
<a href="#carouselExampleFade" role="button" data-slide="prev" class="carousel-control-next"><div class="arrow-right d-flex align-items-center text-center" href="#carouselExampleFade" role="button" data-slide="next"><img src="https://www.ravenshoegroup.com/concept/codepen/arrow-right.png" width="20px" alt="Right Arrow"></div></a>
<!--  Arrows End   -->
   
</div><!-- Modal End  -->

	<footer style="text-align: center; padding: 0%; position: absolute; bottom: 250px; left: 0px; width: 100%;">
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
    <script src="js/script.js" type="text/JavaScript"></script>
</html>