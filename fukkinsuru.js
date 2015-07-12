var count = Number(0);
var countflag=0;
window.addEventListener('deviceorientation', function(event2) {
  var alpha = Math.round(event2.alpha * 10) / 10 ;
  var beta = Math.round(event2.beta * 10) / 10 ;
  var gamma = Math.round(event2.gamma * 10) / 10 ;


  result2.innerHTML =
  "Yaw："+ alpha  +"<br>" +
  "pitch："+ beta+"<br>" +
  "roll："+ gamma ;

  if(beta>70){
    if(countflag==0){
      count++;
      countflag=1;
    }
  }
  if(beta<40){
    countflag=0;
  }

  result1.innerHTML =count;

}, true);
