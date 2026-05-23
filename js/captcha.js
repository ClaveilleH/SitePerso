console.log("Captcha JS loaded");

document.addEventListener('DOMContentLoaded', function() {
    console.log("DOM ready");
    
    var header = document.querySelector("header");
    var captchaDiv = document.getElementById("captcha");
    var checkbox = document.getElementById("captcha-checkbox");

    if (checkbox) {
        checkbox.addEventListener("change", function() {
            console.log("Checkbox state:", this.checked);
            if (this.checked) {
                console.log("Checkbox checked");
            } else {
                console.log("Checkbox unchecked");
            }
        });
    } else {
        console.error("Checkbox not found!");
    }
});