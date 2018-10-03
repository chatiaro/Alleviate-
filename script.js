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
  document.getElementById("parallax1").style.display = "block";  
  document.getElementById("text1").style.display = "block";
  document.getElementById("parallax2").style.display = "block";
}

