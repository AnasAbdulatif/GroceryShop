var imgs = Array.from( document.querySelectorAll(".items img"));
var lightBoxContainer= document.getElementById("lightBoxContainer");
var lightBoxIitem= document.getElementById("lightBoxIitem");
var nextBtn = document.getElementById("next");
var prevBtn = document.getElementById("prev");
var closeBtn = document.getElementById("close");
currentIndex = 0;




for( var i = 0; i < imgs.length; i++ )
{
  imgs[i].addEventListener("click", function(eventInfo){


    currentIndex = imgs.indexOf(eventInfo.target);

    
    var imgSrc =  eventInfo.target.getAttribute("src");
    lightBoxIitem.style.backgroundImage = "url("+imgSrc+")";
    lightBoxContainer.style.display = "flex";
  })
}




function nextSlide()
{
  currentIndex++;

  if(currentIndex == imgs.length){
    currentIndex =0;
  }
  var imgSrc = imgs[currentIndex].getAttribute("src");
  lightBoxIitem.style.backgroundImage = "url("+imgSrc+")";
}
nextBtn.addEventListener("click",nextSlide);





function prevSlide()
{
  if(currentIndex < 0){
    currentIndex =imgs.length;
  }
  currentIndex--;
  var imgSrc = imgs[currentIndex].getAttribute("src");
  lightBoxIitem.style.backgroundImage = "url("+imgSrc+")";
}
prevBtn.addEventListener("click",prevSlide);







function closeSlide(){
  lightBoxContainer.style.display = "none";
}
closeBtn.addEventListener("click",closeSlide);




document.addEventListener("keydown",function(eventInfo){
  if(eventInfo.code == "Escape")
  {
    closeSlide();
  }
  else if(eventInfo.code == "ArrowRight")
  {
    nextSlide();
  }
  else if(eventInfo.code == "ArrowLeft")
  {
    prevSlide();
  }
})

