window.onload = function() { //executes code after DOM loads
    //--- select all <video> on the page
    vids = document.getElementsByTagName('video')
    /*
    for (let i = 0; i < vids.length; i++){
      vids[i].currentTime = 1.55;
    }
    */
    // Loop over the selected elements and add event listeners
    for (let i = 0; i < vids.length; i++) {
      vids[i].addEventListener('mouseover', function(e) {         
        vids[i].play()
      })
      vids[i].addEventListener('mouseout', function(e) {
        vids[i].pause()
        vids[i].currentTime = 0;
      })
    }
   }