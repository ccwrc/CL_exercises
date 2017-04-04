
document.addEventListener("DOMContentLoaded", function() {
    
    console.log("test");
    
    var next = document.querySelector("#nextPicture");
    var prev = document.querySelector("#prevPicture");
    var allLi = document.querySelectorAll("div ul li");
//    var allLiTab = [];
    var pictureIndex = 1;
    
//    for (var i=0; i<allLi.length; i++) {
//        allLiTab[i] = allLi[i];
//    }
  
    allLi[pictureIndex].classList.add("visible");
    
    
    
    
});