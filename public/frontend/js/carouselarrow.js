const initCarousel = () => {
    if( window.location.href.indexOf("home") > -1 ) {

        const slideButtons = document.querySelectorAll(".arrowContainer .sliderButton");
        const carousel = document.querySelector(".arrowContainer .carousel");

        slideButtons.forEach(button => {
            button.addEventListener("click", () => {
                //console.log(button);
                const direction = button.id === "PrevSlider" ? -1 : 1;
                const scrollAmount = carousel.clientWidth * direction;
                carousel.scrollBy({ left: scrollAmount, behavior: "smooth"})
            })
        })

    } else {
        console.log("Invalid URL is not /home in function initCarousel");
    }
}

window.addEventListener("load", initCarousel);