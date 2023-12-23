"use strict";
const initProduktText = () => {
    if( window.location.href.indexOf("product") > -1 ) {

        //const labels = document.querySelectorAll("label");
        const labels = Array.from(document.querySelectorAll('label'));
        const textFelt = document.querySelectorAll(".textContainer");
        const pageLoadesText = document.getElementById("100g");
        const inputButton = document.getElementById("input-100g");
        
        pageLoadesText.style.display = "block";
        inputButton.setAttribute("checked", true);

        labels.forEach(label => {
            label.addEventListener("click", () => {
                //console.log(label);
                //console.log(label.querySelector(".weight"));

                label.querySelector(".weight").setAttribute("checked", true);

                labels.filter( x => x.getAttribute("for") != label.getAttribute("for") ).forEach(otherInputs => {
                    //console.log(otherInputs);
                    otherInputs.querySelector(".weight").removeAttribute("checked");
                });
                
                textFelt.forEach(textFelt => { 
                    let labelAttr = label.getAttribute("for");
                    let textFeltAttr = textFelt.getAttribute("id");

                    if ( labelAttr == textFeltAttr ) {
                        textFelt.style.display = "block";
                    } else {
                        textFelt.style.display = "none";
                    } 
                });
                
            })
        })

        const more = document.getElementById("plus");
        const less = document.getElementById("minus");
        const amount = document.getElementById("amount");

        let number = 1;

        more.addEventListener("click", () => {
            number++;
            amount.innerText = number;
        })

        less.addEventListener("click", () => {
            if (number > 1) {
                number--;
                amount.innerText = number;
            }
        })

    } else {
        console.log("Invalid URL is not /product in function initProduktText");
    }
}

window.addEventListener("load", initProduktText);