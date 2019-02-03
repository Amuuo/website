window.onload = function() { //executes code after DOM loads
    //--- select all <video> on the page
    const vids = document.getElementsByTagName('video')
    vids.foreach(function(item) {
        item.currentTime = 500;
    });
    // Loop over the selected elements and add event listeners
    for (let i = 0; i < vids.length; i++) {
      vids[i].addEventListener('mouseover', function(e) { 
        vids[i].play()
      })
      vids[i].addEventListener('mouseout', function(e) {
        vids[i].pause()
        vids[i].currentTime = 50;
      })
    }
   }