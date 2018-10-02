$(document).ready(function(){    
    $("a").on('click', function(event) {              
      if (this.hash !== "") {  
        event.preventDefault();
    
        var hash = this.hash;
          
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){             
          window.location.hash = hash;
        });
      }                     
    });
});

function myFunction() {
  var x = document.getElementById("parallax1");
  if (x.style.display === "none") {
      x.style.display = "block";
  } else {
      x.style.display = "none";
  }
}