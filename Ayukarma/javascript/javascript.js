//------------------------------------------------------------------------PAGE NAVIGATIONS

function loadPage(num) {
  if (num == 1 /*HOME*/ ) {
    open('../pages/home.php','_self');
  }
  else if (num == 2 /*LOGIN*/) {
    open('../pages/login.php','_self');
  }
  else if (num == 3 /*REGISTER*/) {
    open('../pages/Register.php','_self');
  }
  else if (num == 4 /*CENTERS*/) {
    open('../pages/centre.php','_self');
  }
  else if (num == 5 /*DOCTORS*/) {
    open('../pages/doctor.php','_self');
  }
  else if (num == 6 /*KNOWLEDGE*/) {
    open('../pages/knowledge.php','_self');
  }
  else if (num == 7 /*SELLER*/) {
    open('../pages/seller.php','_self');
  }
  else if (num == 8 /*PUBLISH*/) {
    open('../pages/publish.php','_self');
  }
  else if (num == 9 /*CART*/) {
    open('../pages/cart.php','_self');
    }
  else if (num == 10 /*buy2*/) {
    open('../pages/buy2.php','_self');
  }
  else if (num == 11 /*search*/) {
    open('../pages/search.php','_self');
  }
  else if (num == 0 /*LOG OUT*/) {
      open('../pages/login.php','_self');
  }
}

//------------------------------------------------------------------------SLIDESHOW

var slideIndex = 0;

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}

