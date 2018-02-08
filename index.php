<!DOCTYPE html>
<html>
<head>
<title>Mock WVMA</title>
<meta charset="UTF-8">



<link rel="icon" href="resources/arabesqueIcon2Black.png">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="w3.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400,400i,700,900|Open+Sans:300,300i,400,600,800" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Roboto:100,400,500,700" rel="stylesheet">

<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

a {
    text-decoration: none;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* menu text */
.menuText {
  font-size:1.8em;
  font-family: 'Roboto', sans-serif;
}

.socialMedia{
  text-decoration-line: none;
  padding-left: 0.5em;
  padding-right: 0.5em;
  padding-top: 0.4em;
  font-size:1.8em;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('resources/mosqueNight.jpg');  
    min-height: 100%;
    opacity: 1;
}

.mainTitle {
    font-weight: 400;
    font-family: 'Roboto', sans-serif;
    font-size: 2.5em;
    color: #ffffff;
}

.mainTitle-display{
  position:absolute;
  top:20%;
  left:50%;
  transform:translate(-50%,-50%);
  -ms-transform:translate(-50%,-50%)
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url('resources/mosaic3.jpg');
    min-height: 400px;
    opacity: 0.8;
}

/* Third image (Contact) */
.bgimg-3 {
    background-image: url('resources/mosaic4.jpg');
    min-height: 80%;
}

.w3-wide {letter-spacing: 10px;}

.w3-hover-opacity {cursor: pointer;}



.footer-social-media{
  color: #4286f4;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropbtn{
  padding: 4px 10px 0 10px;
  border: none;
  outline: none;
  display:inline-block;
  vertical-align:middle;
  overflow:hidden;
  text-decoration:none;
  color:inherit;
  background-color:inherit;
  text-align:center;
  cursor:pointer;
  white-space:nowrap;
  width:100%;
  white-space:normal;
}

.dropbtn:hover {
  color:#000;
  background-color:#ccc;

}

.dropdown-content {
    display: none;
    position: fixed;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    font-weight: 400;
    font-family: 'Roboto', sans-serif;
    margin-top: 0px;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 5px 16px 5px 20px;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
    z-index: 1;
}

.card2 {
  box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
}

.animate-top{
  position:relative;animation:animatetop 0.4s}@keyframes animatetop{from{top:-300px;opacity:0} to{top:0;opacity:1}}

.white,.hover-white:hover{
  color:#000!important;
  background-color:#fff!important;
}

.text{
  padding: 50px;
}

/* Turn off parallax scrolling for tablets and phones 1024*/
@media only screen and (max-width: 900px) {

  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
  }

  .bgimg-1 {
    background-image: url('resources/mosqueNight.jpg');  
      /*opacity: 0.8;*/
  }

  .menuText {
    font-size:1em;
}

  .mainTitle{
    font-size: 2em;
  }

  .socialMedia{
    text-decoration-line: none;
    padding-left: 0.5em;
    padding-right: 0.5em;
    padding-top: 0.5em;
    font-size: 1.5em; 
  }
}
/
</style>

</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-text-light-grey w3-hide-medium w3-hide-large w3-right " href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <!-- minimized menu icon -->
      <i class="fa fa-bars"></i> 
    </a>
    <img src="resources/arabesqueIcon3.png" width=50 height=50 style="float: left;">
    <a href="#home" class="w3-bar-item w3-button w3-hide-small menuText">HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small menuText"> ABOUT</a>
    <a href="https://sundayschool.wvmuslim.org/" class="w3-bar-item w3-button w3-hide-small menuText"> SUNDAY SCHOOL</a>
    <a href="#donate" class="w3-bar-item w3-button w3-hide-small menuText"> DONATE</a>
 
    <a href="#" class="w3-bar-item w3-hide-small socialMedia" >
      
      <a class="fab fa-twitter w3-right  w3-button socialMedia" title="twitter" href="#"></a>

      <a class="fab fa-facebook-f w3-right  w3-button socialMedia" title="facebook" href="https://www.facebook.com/search/top/?q=west%20valley%20muslim%20association"></a>

      <a class="fab fa-youtube w3-right  w3-button socialMedia" title="youtube" href="https://www.youtube.com/watch?v=5qvp93COVLw"></a>

      <a class="far fa-clock w3-right  w3-button socialMedia" title="Prayer Times" href="#"></a>
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#home" class="w3-bar-item w3-button" onclick="toggleFunction()">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="https://sundayschool.wvmuslim.org/" class="w3-bar-item w3-button" onclick="toggleFunction()">SUNDAY SCHOOL</a>
    <a href="#donate" class="w3-bar-item w3-button" onclick="toggleFunction()">DONATE</a>

  </div>
</div>

<!-- First Parallax Image with Logo Text w3-xxlarge w3-hover-text-white w3-text-light-grey w3-wide  -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="mainTitle-display">
    <span class="mainTitle ">West Valley Muslim Association</span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">ABOUT WVMA</h3>
  <!-- not sure if I'll ask permission  to post this... I might use some other motto -->
      <p class="w3-center"> quote here</p>


  
  <div class="w3-row">
    <div class="text" style="text-align: justify;">
      <p>The West Valley Muslim Association serves offers religious services and community events to the Muslim communities in Saratoga, Sunnyvale, Campbell, and Cupertino. To become a member, please visit our Membership page. </p>
      
    </div>
  </div>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-hover-text-white w3-text-black w3-wide ">DONATE</span>
  </div>
</div>

<!-- Container (donate Section) -->
<div class="w3-content w3-container w3-padding-64" id="donate">
  
  <p class="w3-center"><em>donate</em></p><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width)  -->
  <div class="w3-row-padding w3-center">
    <div class="w3-col m3">
      <a href="SATproject.php"><img src="pix/SATvocabIcon.jpg" style="width:100%" class="w3-hover-opacity" alt="SAT Vocab" ></a>
    </div>

    <div class="w3-col m3">
      <a href="Bubblesproject.php"><img src="pix/bubblesIcon2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Speculative Bubbles"></a>
    </div>

    <div class="w3-col m3">
      <a href="MediaPlayerproject.php"><img src="pix/mediaPlayer3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Media player"></a>
    </div>

    <div class="w3-col m3">
      <a href="Dirsproject.php"><img src="pix/handlingDirs1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Handling Directories"></a>
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m3">
      <a href="Loginproject.php"><img src="pix/loginProj.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Login"></a>
    </div>

    <div class="w3-col m3">
      <a href="Spiderproject.php"><img src="pix/spiderProj.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Spider News"></a>
    </div>

    <div class="w3-col m3">
      <a href="Imageproject.php"><img src="pix/mlProj.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Image feature"></a>
    </div>

    <div class="w3-col m3">
      <a href="WhatsNext.php"><img src="pix/whatsNext.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="whatsNext"></a>
    </div>
    <!-- <button class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px">LOAD MORE</button> -->
  </div>
</div> 


<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-hover-text-white w3-text-black w3-wide ">WORK</span>
  </div>
</div>





<!-- Footer -->
<footer class="w3-center w3-light-white w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <a class="fa fa-github w3-button footer-social-media " style="font-size: 32px;" id="github" title="my github page" href="www.github.com/MarileneSoaresDaCosta" ></a>
    <a class="fa fa-linkedin w3-button footer-social-media "  style="font-size: 32px;" id="linkedin" title="my linkedIn" href="www.linkedin.com/in/marilenesdacosta/"></a>
    <a class="fa fa-file-pdf-o w3-button footer-social-media "  style="font-size: 32px;" id="pdf" title="Resume" href="pdf/msccv.pdf" ></a> 
  </div>
  
</footer>
 
<script>


// // Modal Image Gallery
// function onClick(element) {
//   document.getElementById("img01").src = element.src;
//   document.getElementById("modal01").style.display = "block";
//   var captionText = document.getElementById("caption");
//   captionText.innerHTML = element.alt;
// }

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " card2" + " animate-top" + " white";
    } else {
        navbar.className = navbar.className.replace(" card2 animate-top white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>


</body>
</html>
