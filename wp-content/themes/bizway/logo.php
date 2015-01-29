<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name = "viewport" content = "user-scalable=no, width=device-width">
<title>Flexisel - A responsive jQuery Carousel</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>

</head>

<body>

<h1>Flexisel</h1>

<p>Flexisel will adapt responsively as the screen width gets smaller...</p>

<ul id="flexiselDemo1"> 
    <li><img src="images/logo-nyt.png" /></li>
    <li><img src="images/logo-microsoft.png" /></li>    
    <li><img src="images/logo-ebay.png" /></li>     
    <li><img src="images/logo-hp.png" /></li> 
    <li><img src="images/logo-youtube.png" /></li>                                                          
</ul>
 
<div class="clearout"></div> 

<p>You can also change the number of items shown depending on the screen width!</p>

<ul id="flexiselDemo2"> 
    <li><img src="images/logo-adidas.png" /></li>   
    <li><img src="images/logo-nike.png" /></li> 
    <li><img src="images/logo-amazon.png" /></li> 
    <li><img src="images/logo-spotify.png" /></li> 
    <li><img src="images/logo-android.png" /></li>                                                                          
</ul>
       
<div class="clearout"></div>
       
<p>Other options include autoplay, animation speed when scrolling right and left, initial number of visible items, and more!</p>   

<div class="nbs-flexisel-container">
<div class="nbs-flexisel-inner">								    	  	       	   	    	
<ul id="flexiselDemo3" class="nbs-flexisel-ul">
    <li class="nbs-flexisel-item"><img src="images/1.jpg" /></li>
    <li class="nbs-flexisel-item"><img src="images/2.jpg" /></li>
    <li class="nbs-flexisel-item"><img src="images/3.jpg" /></li>
    <li class="nbs-flexisel-item"><img src="images/4.jpg" /></li>                                                 
</ul>
</div></div>    

<div class="clearout"></div>
<p>Option not clone.</p>   
   
<ul id="flexiselDemo4">
    <li><img src="images/chevrolet.png" /></li>
    <li><img src="images/ford.png" /></li>
    <li><img src="images/aston-martin.png" /></li>
    <li><img src="images/mini.png" /></li>                                                 
</ul> 

<script type="text/javascript">

$(window).load(function() {
    $("#flexiselDemo1").flexisel();
    $("#flexiselDemo2").flexisel({
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3
            }
        }
    });

    $("#flexiselDemo3").flexisel({
        visibleItems: 5,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,            
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3
            }
        }
    });

    $("#flexiselDemo4").flexisel({
        clone:false
    });
    
});
</script>
    
    
</body>
</html>