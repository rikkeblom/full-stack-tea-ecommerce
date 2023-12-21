"use strict";
const initProduktText = () => {
    //if( window.location.pathname.split('/')[1] == "porduct" ) {
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
    //}
}

window.addEventListener("load", initProduktText);