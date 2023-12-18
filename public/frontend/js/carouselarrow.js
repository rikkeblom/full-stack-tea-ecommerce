const initCarousel = () => {
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
}

window.addEventListener("load", initCarousel);