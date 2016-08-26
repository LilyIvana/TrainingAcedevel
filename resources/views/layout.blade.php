<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="Content-Language" content="es" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Training</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/estilo2.css') }}">
  <link href='//fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

  
</head>
<body>
  <div class="menu">
    <div id="logo" class="col-xs-6 col-sm-6 col-md-6 col-lg-6" >
      <img src="{{ asset('assets/imagenes/logo.jpg') }}">      
    </div>
    
    <div>
      <nav role="navigation" class="nav">
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle desplegable">
                <li><a href=""><font color="Black"><h4>☰ Menu</h4></font></a></li>
            </button>
        </div>
        <div id="navbarCollapse" class="collapse navbar-collapse" >
            <ul class="nav navbar-nav" >
                <li id="home" class="active"><a href="/">HOME</a></li>
                <li ><a href="">PAGES</a></li>
                <li ><a href="">FEATURE</a></li>
                <li ><a href="">BLOG</a></li>
                <li ><a href="">CONTACT</a></li>     
                <li ><a href="index">ADMIN</a></li>                
            </ul>
        </div>   
      </nav> 
    </div>  
  </div>

  @yield('content')
  @yield('content5')

 

  <footer class="footer" >
    <div class="pie"  >
        <div class="seccionpie1  col-xs-12 col-sm-4 col-md-4 col-lg-4" >
           <h3 ><strong>ABOUT US</strong></h3>
           <p>Lorem ipsum dolor sit amet, consectetur<br/>
           adipiscing elit. Sed vitae sapienac <br/>
           ac metus ut tempor tristique. In lacus in sapien.Ut<br/>
           enim sagittis eu, vulputate quis nestrud<br/>
           excercitation laboris ni su malesuada aliquip ex<br/>
           ea commodo consequat.</p>           
        </div> 
        <div class="seccionpie2  col-xs-12 col-sm-4 col-md-4 col-lg-4 "  >
          <h3><strong>QUICK LINKS</strong></h3>
          <ul>
         
            <li><a href=""><i class='glyphicon glyphicon-chevron-right' ></i>&nbsp;&nbsp; ALERTS AND STUFFS</a></li>            
            <li><a href=""><i class='glyphicon glyphicon-chevron-right'></i>&nbsp;&nbsp; CUSTOM SHORTCODES</a></li>
            <li><a href=""><i class='glyphicon glyphicon-chevron-right'></i>&nbsp;&nbsp; PRICING PLAN5</a></li>
            <li><a href=""><i class='glyphicon glyphicon-chevron-right'></i>&nbsp;&nbsp; TOGGLE ELEMENTS</a></li>
            <li><a href=""><i class='glyphicon glyphicon-chevron-right'></i>&nbsp;&nbsp; TYPOGRAPHY</a></li>
          </ul>       
          
        </div>
       
        <div class="seccionpie3  col-xs-12 col-sm-4 col-md-4 col-lg-4"  >
          <h3><strong>GET IN TOUCH</strong></h3>
          <div>
            <i class='glyphicon glyphicon-home' ></i>
             &nbsp;&nbsp;&nbsp;66 Scuth Street, <br/><font color="Black">espa</font>Windows ó Wanderland<br/>     
                
          </div>
            
          <div>
          <i class='glyphicon glyphicon-earphone' ></i>
          &nbsp;&nbsp;&nbsp;+440 875369208 - Office<br/><font color="Black">espa</font>+440 353363114 - Fax<br/> 
          </div>
          <div>
          <i class='glyphicon glyphicon-envelope' ></i>
          &nbsp;&nbsp;&nbsp;freepik@sitename.com
          </div>          
           
        </div>
        
  </div> <!-- Fin div pie -->
      
  </footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.min.js" type="text/javascript"></script>


<script type="text/javascript">
    $(document).ready(function () {
        $('#home').addClass('active');
    });
</script>
<script type="text/javascript">
  
$('.multi-item-carousel').carousel({
  interval: 2500
});

// for every slide in carousel, copy the next slide's item in the slide.
// Do the same for the next, next item.
$('.multi-item-carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  if (next.next().length>0) {
    next.next().children(':first-child').clone().appendTo($(this));
  } else {
    $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
  }
});
</script>


</body>
</html>