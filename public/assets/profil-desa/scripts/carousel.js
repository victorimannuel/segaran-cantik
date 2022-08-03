

let wIndex = 2;

let carouselContainer = document.getElementsByClassName('carousel-container')
let wisataDetail = document.getElementsByClassName('wisata-detail')

function update(){
    for(i = 0; i < 3; i++){
        if(i == wIndex){
            carouselContainer[wIndex].setAttribute("data-active", "");
            wisataDetail[wIndex].setAttribute("data-active", "");
        }
        else{
            carouselContainer[i].removeAttribute("data-active");
            wisataDetail[i].removeAttribute("data-active");
        }
    }    
}
update()

function next(){
    if(wIndex == 2){
        wIndex = 0
    } 
    else{
        wIndex += 1
    }
    update()
}
function back(){
    if(wIndex == 0){
        wIndex = 2
    } 
    else{
        wIndex -= 1
    }
    update()
}

// // Thumbnail image controls
// function currentSlide(n) {
//   showSlides(slideIndex = n);
// }

// function showSlides(n) {
//   let i;
//   let slides = document.getElementsByClassName("mySlides");
//   let dots = document.getElementsByClassName("dot");
//   if (n > slides.length) {slideIndex = 1}
//   if (n < 1) {slideIndex = slides.length}
//   for (i = 0; i < slides.length; i++) {
//     slides[i].style.display = "none";
//   }
//   for (i = 0; i < dots.length; i++) {
//     dots[i].className = dots[i].className.replace(" active", "");
//   }
//   slides[slideIndex-1].style.display = "block";
//   dots[slideIndex-1].className += " active";
// } 

