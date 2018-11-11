/* 
Add div with id "danvopCarousel" to init carousel
Add var slides like:
var slides = [
  {
    "img" : "http://via.placeholder.com/300x300/?text=slide0",
    "header" : "slide0",
    "content" : "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt "
  },
  {
    "img" : "http://via.placeholder.com/300x300/?text=slide1",
    "header" : "slide1",
    "content" : "Lorem ipsum <b>dolor sit</b> amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt "
  },
  {
    "img" : "http://via.placeholder.com/300x300/?text=slide2",
    "header" : "slide2",
    "content" : "Lorem ipsum dolor sit amet, 
    consectetur adipiscing elit, sed do eiusmod tempor incididunt "
  }
];
*/


var slides = [
  {
    "img" : "img/colorme_400x400.png",
    "header" : "Coloring pages",
    "content" : "<p>Color by number pages. You can make your coloring pages for kids</p>\
                <a href='https://colorme.danvop.com' target='_blank'>colorme.danvop.com</a>"
  },
  {
    "img" : "img/colorme2_400x400.png",
    "header" : "Custom pdf",
    "content" : "<p>Coloring pages uses custom pdf generation script</p>\
                <a href='https://colorme.danvop.com/pdf/10?pageSize=A4&hint=on' target='_blank'>See it</a>"
  },
  {
    "img" : "img/syslog_400x400.png",
    "header" : "Syslog view",
    "content" : "<p>Simple syslog visualization example</p>\
                <a href='https://syslog.danvop.com' target='_blank'>syslog.danvop.com</a>"
  },
  {
    "img" : "img/charts_400x400.png",
    "header" : "Custom charts",
    "content" : "<p>Render datasets by using Chart.js library</p>\
                <a href='https://charts.danvop.com' target='_blank'>charts.danvop.com</a>"
  },
  {
    "img" : "img/ekoterm30_400x400.png",
    "header" : "Langing page",
    "content" : "<p>Simple landing page for heating & plumbing company</p>\
                <a href='https://ekoterm30.ru' target='_blank'>ekoterm30.ru</a>"
  }

];

var images = new Array();

preload();

document.getElementById("danvopCarousel").innerHTML = 
  '<div id="carousel" class="slide">\
    <div class="slide-image">\
      <img id="slideImg"src="">\
    </div>\
   <div class="slide-content">\
    <h4 id="slideHeader"></h4>\
    <div id="slideContent"></div>\
    <div class="slide-navs">\
    </div>\
   </div>\
  </div>';



var slideIndex = 0;
var slidesTimeout;

addDots();
showSlides();

function preload() {
  for (i = 0; i < slides.length; i++) {
    images[i] = new Image()
    images[i].src = slides[i].img;
  }
}

function addDots(){
  var dots = [];
  for (var i = 0; i < slides.length; i++) {
    dots[i] = document.createElement("span");
    dots[i].className = "dot";
    dots[i].setAttribute("onclick", "currentSlide(" + i + ")");
    document.querySelector(".slide-navs").appendChild(dots[i]);
    delete dot;
  }
}

function showSlides() {
    var carousel = document.getElementById("carousel");
    var slideImg = document.getElementById("slideImg");
    var slideHeader = document.getElementById("slideHeader");
    var slideContent = document.getElementById("slideContent");
    var slide;
    var dots = document.getElementsByClassName("dot");
  
    
    if (slideIndex >= slides.length) {slideIndex = 0;}
    if (slideIndex < 0) {slideIndex = slides.length - 1;}
    
    slide = slides[slideIndex];
    
    //render slides
    carousel.style.opacity = "";
    fadeInCust(carousel);
           
    slideImg.src = slide.img;
    slideHeader.innerHTML = slide.header;
    slideContent.innerHTML = slide.content;

    //highlight dots
    for (var i = 0; i < dots.length; i++) {
      //replace class active to ""
      dots[i].className = dots[i].className.replace(" active", "");
    }
    dots[slideIndex].className += " active";
  
    slideIndex++;
    
    slidesTimeout = setTimeout(showSlides, 5000); // Change image every 2 seconds
    
}

function currentSlide(n) {
  slideIndex = n;
  clearTimeout(slidesTimeout);
  showSlides();
}

function fadeInCust(elem) {
  var op = elem.style.opacity;
  if ((op === "") || (op < 1)) {
    op = (op * 100 + 0.05 * 100)/100;
    elem.style.opacity = op;
    
    setTimeout(function(){
      fadeInCust(elem);
      }, 50);
  }
}



