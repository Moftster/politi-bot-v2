var currentPlayer;

function play(element) {
    var audio = document.getElementById(element);

 if(currentPlayer && currentPlayer != audio) {
      currentPlayer.pause();
 }
   if (audio.paused)
      audio.play();

   else
      audio.play();
      audio.currentTime = 0;
      currentPlayer = audio;
}


// function play(element) {
//   var audio = document.getElementById(element);
//   audio.currentTime = 0;
//   audio.play();
// }

// const onClick = document.addEventListener('click', playSound);

// function playSound(e) {
//   const audio = document.querySelector(`audio[data-sound="2"]`);
//   const button = document.querySelector(`button`);
//   if(!audio) return;
//
//   audio.currentTime = 0;
//   audio.play();
//   // console.log("You clicked");
// }
//
// document.addEventListener('click', playSound);

// const soundSnippets = Array.from()




//
// var request = document.getElementsByName('request').value;
//
// var form = document.querySelector('form');
//
// form.addEventListener('submit', sendMail);
//
// function sendMail(userName, request) {
//
//   console.log(userName);
//   if(userName.length == 0) {
//     alert("All fields must be completed");
//   } else {
//   var bot = "Tony Benn";
//   var name = "Tester";
//   window.open(`mailto:david@sellmysnaps.com?subject=Politi-bot request&body=Hi,%0D%0A%0D%0AI\'d like to request ${bot} as a Politi-bot.%0D%0A%0D%0AThanks,%0D%0A%0D%0A${name}`);
//   console.log("You've sent an email");
// }
// }
