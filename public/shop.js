const dropbtn = document.getElementById("dropmenu-btn");
const dropmenu = document.getElementById("dropmenu");
const btn = document.querySelectorAll(".back-next-btn");
const slider = document.getElementById("slider");
const cartbtn = document.getElementById("cart-btn");
const cartdetail = document.getElementById("cart-detail");
const filter = document.getElementById("filters");
const filterbtn = document.getElementById("filter-btn");
const image = ["carousel-1", "carousel-2"];
var i = 0;
const toggle = document.getElementById("toggle");
const toggleContent = document.getElementById("toggle-content");
const plusbtn = document.getElementById("plusbtn");
const minusbtn = document.getElementById("minusbtn");
const number = document.querySelector("#number");
const detailsbtn = document.querySelectorAll(".detailsbtn");
const infosection = document.querySelectorAll(".info .child");



    if (infosection) {

        detailsbtn.forEach((btn) => {
            btn.addEventListener("click", (e) => {
                e.preventDefault();

                Array.from(infosection).map((info) => {
                    if (info.classList.contains(btn.innerHTML)) {
                        info.classList.toggle("hidden");
                    } else {
                        info.classList.add("hidden");
                    }
                });
            });
        });
    }

    if (plusbtn && minusbtn) {
        plusbtn.addEventListener("click", (e) => {
            e.preventDefault();
            console.log(number.innerHTML);
            number.innerHTML = parseInt(number.innerHTML) + 1;
        });

        minusbtn.addEventListener("click", (e) => {
            e.preventDefault();
            console.log(number.innerHTML);
            number.innerHTML = parseInt(number.innerHTML) - 1;
        });
    }

    toggle.addEventListener("click", () => {
        toggleContent.classList.toggle("hidden");
        toggleContent.classList.toggle("active");
    });

    if (slider) {
        btn.forEach((btn) => {
            btn.addEventListener("click", (e) => {
                if (btn.dataset.btn == "next") {
                    i++;
                    slid();
                } else {
                    i--;
                    slid();
                }
                return (slider.style.backgroundImage =
                    "url(http://127.0.0.1:8000/img/" + image[i] + ".jpg)");
            });
        });

    setInterval(() => {
        i++;
        slid();
        slider.style.backgroundImage =
            "url(http://127.0.0.1:8000/img/" + image[i] + ".jpg)";
    }, 2000);

    function slid(numofimag = image.length) {
        if (i > numofimag - 1) i = 0;
        if (i < 0) i = 1;
        return i;
    }
}

    function getcart(element) {
        element.classList.toggle("hidden");
        console.log("clicked");
    }

    if (cartbtn) {
        cartbtn.addEventListener("click", () => {
            getcart(cartdetail);
        });
    }
    if (filterbtn) {
        filterbtn.addEventListener("click", () => {
            getcart(filter);
        });
    }
    if (dropbtn) {
        dropbtn.addEventListener("click", () => {
            getcart(dropmenu);
        });
    }
