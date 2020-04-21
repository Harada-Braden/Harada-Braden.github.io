<!DOCTYPE HTML>
<html lang="en-us">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Braden Harada">
		<!-- This page is for CIT-230:14 -->
        <!-- Brother Bangerter's online class (Winter 2017) at BYU-Idaho -->
	<title>Salmon River Adventures</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
            crossorigin="anonymous"></script>
    <script>
        $(function(){
            // All jQuery code goes here
            $('.dropdownMenu > li').hover( function(){
                // Mouseover
                $(this).children("ul").slideDown(200);
            }, function(){
                // Mouseout
                $(this).children("ul").slideUp(200);
            })*/
            $('.dropdownMenu > li').hover(function(){
                $(this).children("ul").slideToggle(200);

            })

        })*/
    </script>
	
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="body">
    <div class="wrapper">
	<header class="mainHeader">
            <h1 class="pageHeader">Salmon River Adventures</h1>
	</header>
        <div class="links">
        <img class="logo" src="images/logo-salmonriveradventures.jpg">
        <nav class="mainNav"><ul class="dropdownMenu">
            <li><span><a href="http://ninjaslair.com/index.html">Home</a></span></li>
            <li><span><a href="/salmonriveradventures.html">Salmon River Adventures (Home)</a></span></li>
            <li><span><a href="#">Prices</a></span></li>
            <li class="dropdown"><span><a href="javascript:void(0)" class="dropbtn">Adventures</a></span></li>
                <ul><div class="dropdown-adventures">
                    <li><a href="#">Beginner</a></li>
                    <li><a href="#">Intermediate</a></li>
                    <li><a href="#">Expert</a></li>
                </div></ul>
            </li>
            <li><span><a href="#">Weather</a></span></li>
            <li><span><a href="#">Reservations</a></span><li>
            <li><span><a href="#">Contact Us</a></span></li>
			</ul></nav><br/>
        </div>
        <div class="top-image"><img class="top-image" src="images/header-salmonriveradventures.jpg" alt="salmonriveradventures.logo">
        </div>
	<section>
        <div class="information"><span>
            <p class="filling">Welcome to the home page of Salmon River Adventures! Whether you are just starting out or have years of experience with whitewater rafting, this is the place for you. We have several different runs for you to try, each with their own level of difficulty.
            </p>
            <p class="filling">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
            </span></div>
	</section>

    <footer class="footer-distributed">
        <div class="footer-left">
            <p class="footer-links"><a href="#">Related Links</a><br/>					
                <a href="http://ninjaslair.com/index.html">More Links</a>
                <a href="#">FAQ</a>								
            </p>
            <p class="footer-company-name">Salmon River Adventures &copy; 2017</p>
        </div>
        <div class="footer-center">
            <div>
                <a href="https://goo.gl/maps/yectrBfRvdQ2"><i class="fa fa-map-marker"></i><a/>
                <p><span>1000 S. Main St., Riggins, ID</span></p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p>(800)NO-CALLS</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:har16139@byui.edu">Email</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>Social Network</span>
                You can find us in the next social web:
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>
            </div>
        </div>
    </footer>
</body>

</html>