var form = document.getElementById('contactForm');

form.addEventListener('submit', contactForm);

function contactForm(e){
  e.preventDefault();
  var contactSubmission = document.getElementById('contactSubmission').value;
  if(contactSubmission == 0) {
    alert("Message field must be completed");
  } else {
  var openWinToSend = window.open(`mailto:david@sellmysnaps.com?subject=Politi-bot contact form submission&body=${contactSubmission}`);
  setTimeout(function() {openWinToSend.close()}, 4);
}
}
