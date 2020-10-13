$(document).ready(function (){
  
    function timer(n) {
    
        var value = n + "%";
        $(".html").css("width", value).text(value)
        if(n < 80) {
            setTimeout(function() {
            timer(n + 5);
            }, 50);
        }
      }
    
      function timer2(m) {
      
      var value2 = m + "%";
      $(".css").css("width", value2).text(value2)
      if(m < 75) {
          setTimeout(function() {
          timer2(m + 5);
          }, 50);
      }
    }
    
    function timer3(o) {
      
      var value3 = o + "%";
      $(".js").css("width", value3).text(value3)
      if(o < 40) {
          setTimeout(function() {
          timer3(o + 5);
          }, 50);
      }
    }
    
    function timer4(p) {
      
      var value4 = p + "%";
      $(".php").css("width", value4).text(value4)
      if(p < 35) {
          setTimeout(function() {
          timer4(p + 5);
          }, 50);
      }
    }
    
    function timer5(q) {
      
      var value5 = q + "%";
      $(".bootstrap").css("width", value5).text(value5)
      if(q < 50) {
          setTimeout(function() {
          timer5(q + 5);
          }, 50);
      }
    }
  
    function timer6(r) {
      
      var value6 = r + "%";
      $(".wordpress").css("width", value6).text(value6)
      if(r < 35) {
          setTimeout(function() {
          timer6(r + 5);
          }, 50);
      }
    }
        
        $(function (){
        $("#animer").click(function() {
        timer(0,0);
        timer2(0,0);
        timer3(0,0);
        timer4(0,0);
        timer5(0,0);
        timer6(0,0);
        });
        });
});

//Carousel
$('.carousel').carousel({
  interval: false
});


var angle = 0;
function carrousel(sign)
{
  spinner=document.querySelector(".carrousel");

  if(!sign)
  {
    angle = angle + 60
  }
  
  else
  { 
    angle = angle - 60
  }
  
  spinner.setAttribute("style","transform:rotateY("+ angle +"deg);")

}
