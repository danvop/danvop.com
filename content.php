<nav class="navbar navbar-dark bg-info">
  <a class="navbar-brand" href="#">Danvop development team</a>
</nav>

    
        
       <!--   -->

        <!-- Carousel -->
         <!-- Slideshow container -->
        
        
<div class="container-fluid">
<div class="row">

    
    <div class='col-md-6 col-lg-8 my-3'>
        <!-- marketing slogan -->
        <h3 class='p-4 bg-info text-white'>We make minimalist website designs and custom online applications</h3>
        <!--    <div class='p-4 bg-info text-white'>
        <img class="img-fluid" src="img/syslog.png">
        </div> -->
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="img/colorme_4_3.gif" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="img/colorme_rocket_4_3.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="img/syslog_4_3.gif" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="img/charts.gif" style="width:100%">
            </div>

        <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a> -->
        <!-- <a class="next" onclick="plusSlides(1)">&#10095;</a> -->

        </div>
        

        <!-- <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
        </div> -->

    </div>

    <!-- Carousel -->
    

    <!-- faces -->
    <div class="col-md-6 col-lg-4 my-3 pb-4 bg-info text-white">
    <h3 class="p-2 border-bottom">Our team</h3>
    
        <div class="media mb-3">
          <img class="align-self-center mr-2 rounded" src="img/danvop_founder_100.png" alt="Danila Popov photo">
            <div class="media-body my-auto">
                <h5 class="mt-0">Danila Popov</h5>
                <p>Founder and CEO</p>
                <p><i>Moscow, Russia</i></p>
            </div>
        </div>
        <div class="media mb-3">
          <img class="align-self-center mr-2 rounded" src="img/omar kumar_v2.jpg" alt="Omar Kumar photo">
          <div class="media-body my-auto">
            <h5 class="mt-0 strong">Omar Kumar</h5>
            <p>BackEnd developer</p>
            <p><i>Delhi, India</i></p>
          </div>
        </div>
        
        <div class="media mb-3">
          <img class="align-self-center mr-2  rounded" src="img/rulon aboev_v2.jpg" alt="Rulon Aboev photo">
          <div class="media-body my-auto">
            <h5 class="mt-0">Rulon Aboev</h5>
            <p>Art and Design</p>
            <p><i>Antwerp, Belgium</i></p>

          </div>
        </div>

    </div>    

</div> <!-- row -->
</div> <!-- Container -->



<footer class="footer bg-info text-white text-center mt-3">
<a class="text-white align-middle" href="https://twitter.com/danilaapopov" target="_blank"><i class="fab fa-twitter" style="font-size:30px"></i></a>
<a class="text-white align-middle" href="https://github.com/danvop" target="_blank"><i class="fab fa-github" style="font-size:30px"></i></a>
</footer>
<script>
var slideIndex = 0;
showSlides();

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 3000); // Change image every 2 seconds
} 
</script>

