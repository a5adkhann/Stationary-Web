let hamburgerIcon = document.getElementById("hamburger-icon");
let mobileNavbar = document.getElementById("navbar-mobile-view");
let cartIcon = document.getElementById("cart-icon");
let cart = document.getElementById("cart");
let closeIcon = document.getElementById("close-icon");


hamburgerIcon.addEventListener("click", () => {
    if(mobileNavbar){
    mobileNavbar.classList.toggle("hide");
}
})

cartIcon.addEventListener("click", () => {
    if(cart) {
        cart.classList.toggle("show");
    }
})

closeIcon.addEventListener("click", () => {
    cart.classList.toggle("show");
})