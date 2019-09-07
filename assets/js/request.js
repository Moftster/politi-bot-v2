
var form = document.getElementById('theForm');

form.addEventListener('submit', botRequest);

function botRequest(e){
  e.preventDefault();
  var userName = document.getElementById('userName').value;
  var request = document.getElementById('request').value;
  if(userName == 0 || request == 0) {
    alert("All fields must be completed");
  } else {
  var openWinToSend = window.open(`mailto:david@sellmysnaps.com?subject=Politi-bot request&body=Hi,%0D%0A%0D%0AI\'d like to request ${request} as a Politi-bot.%0D%0A%0D%0AThanks,%0D%0A%0D%0A${userName}`);
  setTimeout(function() {openWinToSend.close()}, 4);
}
}
