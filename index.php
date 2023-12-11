<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>

<!DOCTYPE html>
<html lang="zxx">
   <head>
   <style>
body, html {
  height: 100%;
}

.parallax {
  /* The image used */
  background-image: url('images/parallel-x.jpg');

  /* Full height */
  height: 100%; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
      <title>Art Gallery Management System | Home Page</title>
      
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!-- For Clients slider -->
      <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
      <!--flexs slider-->
      <link href="css/JiSlider.css" rel="stylesheet">
      <!--Shoping cart-->
      <link rel="stylesheet" href="css/shop.css" type="text/css" />
      <!--//Shoping cart-->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
      <script src="https://kit.fontawesome.com/44f1fd7011.js" crossorigin="anonymous"></script>
   </head>
   <body>
     <?php include_once('includes/header.php');?>
 
<section id="header" >
  <nav class="navbar navbar-light" >
  <div class="container-fluid">
    <img src="images/cover.jpg">
   </div>
   </nav>
  </section>
 
<!-------Welcome text------>
   <section id="welcome">
       <div class="container" >
          <div class="welcome text-center">
             <h1>WELCOME TO OM FRAME HOUSE AND ART GALLERY<br>
                 An extraordinary Art Collection in the heart of Kathmandu</h1> 
             <a href="collections.php"><button type="submit" class="btn home-btn">Browse</button> 
         </a>
        </div>
      </div>
   </section>
    
<!---------About--------->
   <section id="about">
       <div class="container" data-aos="fade-in">
          <div class="row">
            <div class="col-md-12 text-center">
                 <h3>Ignite. Inspire. Influence.</h3>
                 <p>OM ART GALLERY inspires local and regional artists through active involvement with the international contemporary art community. OAG strives to be viewed as a credible and internationally respected art establishment; while empowering artists with the facilities, environment and experience to excel in their medium and enrich their lives.</p>
            </div> 
          </div>
        </div>
    </section>


  <!----parallax------>
<div class="parallax">

<div style="height:1000px;background:url('images/parallel-x')">
    <div class="container">
      <div class="content-row">
         <div class="col-md-6 left">
           <p>Om Frame House and Art Gallery believes that culture
          is an important component of development and 
          co- ordinates special events that brings together
           artists, writers and musicians. The Gallery focuses 
           on a myriad areas such as socio-cultural and political
            issues, as it believes that art can play a significant 
            role in shaping national and international perceptions.</p>
           <button class="button">READ MORE</button>
        </div>
      </div>
    </div>
  </div>
</div>
          
<!---About the Founder----->
<section class="about">

  
       <div class="row">
         <div class="image">
            <img src="images/founder.jpg" alt="">
         </div>

         <div class="content">
            <h5>Founder/Director</h5>
         <h4>Shiva Pandey</h4>
         <p>Shiva Pandey founded Om Frame House and Art Gallery in 2045 with eminent artist Shashikala Tiwari.
             He has curated over 600 shows of Nepali and international artists. He regularly gives consultations
             to collectors of Nepali art and initiates community art projects.</p>
           <a href="founder.php" class="btn">READ MORE</a>
          </div>
      </div>

</section>




<!--------Featured categories

<div class="categories">
  <h2 class="title" data-aos="fade-in">EXPLORE COLLECTIONS</h2>
    <div class="row">
      <div class="col-3">
        <div class="card">
          <div class="imgBx" data-aos="fade-in">
            <img src="images/f (1).jpg">
          </div>
              <div class="content">
               <span class="topic">
                 <a href="bestsellers.html">New Collections</a>
               </span>
              </div>
        </div>
      </div>

       <div class="col-3">
        <div class="card">
          <div class="imgBx" data-aos="fade-in">
            <img src="images/f(2).jpg">
          </div>
             <div class="content">
              <span class="topic">
               <a href="abstract.html">Abstract Art</a>
              </span>
             </div>
         </div>
       </div>

<div class="col-3">
<div class="card">

  <div class="imgBx" data-aos="fade-in">
      <img src="images/b (39).jpg" >
  </div>
  <div class="content">

        <span class="topic">
            <a href="modern-art.html">Modern Art</a>
        </span>
       
  </div>

</div>
</div>

<div class="col-3">
   <div class="card">
      <div class="imgBx">
         <img src="images/f(5).jpg" >
      </div>
         <div class="content">
            <span class="topic">
              <a href="landscape.html">Landscapes</a>
            </span>
         </div>
   </div>
</div>

</div>
</div>
----->
<!--collections--->
      <section class="blog py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">NOW ON VIEW</h3>
            <div class="slid-img">
               <ul id="flexiselDemo1">
               <?php
$ret=mysqli_query($con,"select tblarttype.ID as atid,tblarttype.ArtType as typename,tblartproduct.ID 
as apid,tblartproduct.Title,tblartproduct.Image,tblartproduct.ArtType from tblartproduct join tblarttype
 on tblarttype.ID=tblartproduct.ArtType");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                  <li>
                   
                     <div class="agileinfo_port_grid">
                        <img src="admin/images/<?php echo $row['Image'];?>" width="300" height="300" alt=" " class="img-fluid" />
                        <div class="banner-right-icon">
                           <h4 class="pt-3"><?php echo $row['typename'];?></h4>
                        </div>
                        <div class="outs_more-buttn">
                           <a href="art-enquiry.php?eid=<?php echo $row['apid'];?>">ENQUIRE</a>
                        </div>
                     </div>
                  </li><?php }?>
                
               </ul>
            </div>
         </div>
      </section>
      <!--//about -->
      
      <!-- footer -->
      <?php include_once('includes/footer.php');?>
     
     <script src='js/jquery-2.2.3.min.js'></script>
     <script src="js/minicart.js"></script>
      <script>
         toys.render();
          toys.cart.on('toys_checkout', function (evt) {
         	var items, len, i;
         
         	if (this.subtotal() > 0) {
         		items = this.items();
         
         		for (i = 0, len = items.length; i < len; i++) {}
         	}
         });
      </script>
       <script src="js/responsiveslides.min.js"></script>
      <script>
        $(function () {
         	$("#slider4").responsiveSlides({
         		auto: true,
         		pager:false,
         		nav:true ,
         		speed: 900,
         		namespace: "callbacks",
         		before: function () {
         			$('.events').append("<li>before event fired.</li>");
         		},
         		after: function () {
         			$('.events').append("<li>after event fired.</li>");
         		}
         	});
         
         });
      </script>
     
      <script src="js/jquery.flexisel.js"></script>
      <script>
         $(window).load(function() {
         	$("#flexiselDemo1").flexisel({
         		visibleItems: 3,
         		animationSpeed: 3000,
         		autoPlay:true,
         		autoPlaySpeed: 2000,    		
         		pauseOnHover: true,
         		enableResponsiveBreakpoints: true,
         		responsiveBreakpoints: { 
         			portrait: { 
         				changePoint:480,
         				visibleItems: 1
         			}, 
         			landscape: { 
         				changePoint:640,
         				visibleItems:2
         			},
         			tablet: { 
         				changePoint:768,
         				visibleItems: 2
         			}
         		}
         	});
         	
         });
      </script>
     
      <script src="js/move-top.js"></script>
      <script src="js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({
         			scrollTop: $(this.hash).offset().top
         		}, 900);
         	});
         });
      </script>
    
      <script>
         $(document).ready(function () {
         
         	var defaults = {
         		containerID: 'toTop', 
         		containerHoverID: 'toTopHover', 
         		scrollSpeed: 1200,
         		easingType: 'linear'
         	};
         	$().UItoTop({
         		easingType: 'easeOutQuart'
         	});
         
         });
      </script>
    
     
   </body>
</html>