<!DOCTYPE html>
<html>

<head>
  <title>WVMA (mock boots navbar)</title>


<!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  
  <link rel="icon" href="resources/arabesqueIcon2Black.png">

  <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Specific css file -->
  <link rel="stylesheet" href="wvmuslim3.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">

<!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400,400i,700,900|Open+Sans:300,300i,400,600,800" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Roboto:100,400,500,700" rel="stylesheet">

  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">


<style>
/* all parallax-related css is here to make it easier to change pix */
.parallax1 { 
    /* The image used */
    background-image: url("resources/backgroundLake.jpg");

    /* Set a specific height */
    height: 600px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.parallax2 { 
    /* The image used */
    background-image: url("resources/ceilingBlackWhite.jpg");

    /* Set a specific height */
    height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    opacity: 0.6;
}

.parallax3 { 
    /* The image used */
    background-image: url("resources/alhambra.jpg");

    /* Set a specific height */
    height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    opacity: 0.6;
}

/* turn off parallax*/
@media only screen and (max-width: 736px) {

  /* Turn off parallax scrolling for all tablets and phones. Increase/decrease the pixels if needed */
  .parallax1, .parallax2, .parallax3 {
    background-attachment: scroll;
    height: 500px;
  }

}
</style>

</head>

<body>



<header>
	<nav class="navbar navbar-toggleable-md navbar-light bg-faded fixed-top">
  <button class="navbar-toggler navbar-toggler-right menuButton" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <a class="navbar-brand" href="#"><img class="logo" src="resources/arabesqueIcon1.png">WEST VALLEY MUSLIM ASSOCIATION</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">PRAYER TIMES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://sundayschool.wvmuslim.org/">SUNDAY SCHOOL</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">EVENTS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">DONATE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">MEDIA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link search fas fa-search" href="#"></a>
      </li>
    </ul>

    

  </div>
</nav>
</header>



<!-- CONTENT -->

<div class="parallax1">
  <!-- prayer times inside first parallax --> 
  <div class= "prayerTimesContainer">
    <div class="prayer_times">
      <table class="prayer_timesTable">
      <tr>
        <td class="row_title"></td>
        <td class="prayer">Fajr</td> 
        <td class="prayer">Dhuhr</td>
        <td class="prayer">Asr</td> 
        <td class="prayer">Maghreb</td>
        <td class="prayer">Isha</td>
      </tr>
      <tr>
        <td class="row_title">Jamaat</td>
        <td class="jtime">6:00 AM</td> 
        <td class="jtime">12:10 PM</td>
        <td class="jtime">2:50 PM</td> 
        <td class="jtime">5:30 PM</td>
        <td class="jtime">8:00 PM</td>
      </tr>
      <tr>
        <td class="row_title">Begins</td>
        <td class="btime">6:00 AM </td> 
        <td class="btime">12:10 PM</td>
        <td class="btime">2:50 PM</td> 
        <td class="btime">5:30 PM</td>
        <td class="btime">8:00 PM</td>
      </tr>

    </table>
    </div>
</div> <!-- end of prayer times top table -->
</div>


<!-- Container (home section) -->
<div id="home">

  <!-- qur'an quote -->
  <img class="bism" src="resources/bismillah.jpg">
  
  <div class="q_quote">

    <img src="resources/Quran_16_97.jpg">
    <p> <span class="translation"> Sahih International: </span> "Whoever does righteousness, whether male or female, while he is a believer - We will surely cause him to live a good life, and We will surely give them their reward [in the Hereafter] according to the best of what they used to do." - Qur'an 16:97 </p>
  </div>

  <!-- INTRO TEXT -->
  <div class="intro_text">
    <img class="logo_intro" src="resources/arabesqueIcon1.png">
    <p> </p>
      <div class="row">
      <div class="intro_text">
        <p> The West Valley Muslim Association offers religious services and community events to the Muslim communities in Saratoga, Sunnyvale, Campbell, and Cupertino. To become a member, please visit our <a href="#"> Membership page </a>. </p>
      </div>
    </div>

  </div>

</div> <!-- end of Home -->
  
<!-- NEWS / ANNOUNCEMENTS -->
  <div class="news">
    <div class="section_title">NEWS & ANNOUNCEMENTS<hr></div>
    <div class="row">
      <div class="col-sm-4"><img class="news_img" src="resources/ramadan1.jpg"></div>
      <div class="col-sm-6">
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#" > some link to somewhere </a> Proin mollis ipsum eget dolor fringilla, id sollicitudin turpis tincidunt. Vestibulum ultricies at enim nec pretium. </p>
      </div>
    </div>
    
    <div class="row">
      <div class="col-sm-4"><img class="news_img" src="resources/quran1.jpg"></div>
      <div class="col-sm-6">
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#" > some link to somewhere </a> Proin mollis ipsum eget dolor fringilla, id sollicitudin turpis tincidunt. Vestibulum ultricies at enim nec pretium. </p>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-4"><img class="news_img" src="resources/muslimChild2SQR.jpg"></div>
      <div class="col-sm-6">
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#" > some link to somewhere </a> Proin mollis ipsum eget dolor fringilla, id sollicitudin turpis tincidunt. Vestibulum ultricies at enim nec pretium. </p>
      </div>
    </div>
  



  </div> 

<!-- SOCIAL FEED -->
  <div class="social_feed"> 
    <div class="section_title">SOCIAL FEED<hr></div>
    <div class="fb_posts">
      <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fwvmuslim%2Fposts%2F1467985953299924&width=500" width="500" height="730" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
    </div>  
</div>


<!-- Container (about section) -->
<div id="about">

  <!-- contact info -->
  <div class="contact">
    <div class="section_title">CONTACT US<hr></div>
    <div class="container-fluid">
      <div class="map-responsive">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3174.275426619937!2d-122.03413878495473!3d37.28860564775416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb525d4884c33%3A0x254da2699fe5961f!2sWest+Valley+Muslim+Association+-+Saratoga+Mosque!5e0!3m2!1sen!2sus!4v1518728118589" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  </div>


  <!-- board pictures and short bios -->
  <div class="board">
    <div class="section_title">BOARD OF DIRECTORS<hr></div>
    <div class="row">

      <div class="col-sm-2"><img class="board_img" src="resources/muslimChild2SQR.jpg"></div>

      <div class="col-sm-3">
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#" > some link to somewhere </a> Proin mollis ipsum eget dolor fringilla, id sollicitudin turpis tincidunt. Vestibulum ultricies at enim nec pretium. </p>
      </div> 

        <div class="col-sm-2"><img class="board_img" src="resources/reciting-quran2SQR.jpg"></div>

      <div class="col-sm-3">
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#" > some link to somewhere </a> Proin mollis ipsum eget dolor fringilla, id sollicitudin turpis tincidunt. Vestibulum ultricies at enim nec pretium. </p>
      </div>
      </div>

    </div>
        

    <section id="contact">
      <div class="section-content">
        <div class="section_title">ASK THE BOARD<hr></div>
        <p class="intro_text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#" > some link to somewhere </a> Proin mollis ipsum eget dolor fringilla, id sollicitudin turpis tincidunt. Vestibulum ultricies at enim nec pretium. </p>
      </div>
      <div class="contact-section">
      <div class="container">
        <form>
          <div class="col-md-6 form-line">
              <div class="form-group">
                <label for="exampleInputUsername">Your name</label>
                <input type="text" class="form-control" id="" placeholder=" Enter Name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail">Email Address</label>
                <input type="email" class="form-control" id="exampleInputEmail" placeholder=" Enter Email id">
              </div>  
              <div class="form-group">
                <label for="telephone">Mobile No.</label>
                <input type="tel" class="form-control" id="telephone" placeholder=" Enter 10-digit mobile no.">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for ="description"> Message</label>
                <textarea  class="form-control" id="description" placeholder="Enter Your Message"></textarea>
              </div>
              <div>

                <button type="button" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
              </div>
              
          </div>
        </form>
      </div>
    </section>

  </div>


  </div>
  <div class="imam">
    <div class="section_title">MEET THE IMAM<hr></div>
    <img src="resources/brotherPraying5SQR.jpg">
    <p class="intro_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#" > some link to somewhere </a> Proin mollis ipsum eget dolor fringilla, id sollicitudin turpis tincidunt. Vestibulum ultricies at enim nec pretium. </p>
    <p class="intro_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#" > some link to somewhere </a> Proin mollis ipsum eget dolor fringilla, id sollicitudin turpis tincidunt. Vestibulum ultricies at enim nec pretium. </p>
  </div>
</div>



  


<!-- Parallax Image: EVENTS -->
<div class="parallax2">
  <div class="parallax_title">EVENTS</div>

  <div class="parallax_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#" > some link to somewhere </a> Proin mollis ipsum eget dolor fringilla, id sollicitudin turpis tincidunt. Vestibulum ultricies at enim nec pretium. </div>
</div>

<!-- Container (events content section) -->
<div id="events">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#" > some link to somewhere </a> Proin mollis ipsum eget dolor fringilla, id sollicitudin turpis tincidunt. Vestibulum ultricies at enim nec pretium. </p>
</div>

<!-- Container (media Section) --> 
<div id="media">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#" > some link to somewhere </a> Proin mollis ipsum eget dolor fringilla, id sollicitudin turpis tincidunt. Vestibulum ultricies at enim nec pretium. </p>
</div>



<!-- Parallax Image: DONATION-->
<div class="parallax3">
  
  <div class="parallax_title">DONATIONS</div>

  <div class="parallax_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#" > some link to somewhere </a> Proin mollis ipsum eget dolor fringilla, id sollicitudin turpis tincidunt. Vestibulum ultricies at enim nec pretium. </div>
</div>


<!-- Container (donations content section) -->
<div id="donate">
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#" > some link to somewhere </a> Proin mollis ipsum eget dolor fringilla, id sollicitudin turpis tincidunt. Vestibulum ultricies at enim nec pretium. </p>
</div>

</body>

<!-- Footer -->
<footer>
    <div class="icons">

      <i class="fab fa-twitter icon" title="twitter" href="#"></i>
      <i class="fab fa-facebook-f icon" title="facebook" href="https://www.facebook.com/search/top/?q=west%20valley%20muslim%20association"></i>
      <i class="fab fa-youtube icon" title="youtube" href="https://www.youtube.com/watch?v=5qvp93COVLw"></i>
      <i class="far fa-clock icon" title="Prayer Times" href="#"></i>
    </div>
    
</footer>



<!-- last, before end of body: jQuery first, then Tether, then Bootstrap JS. -->
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>






</html>






















