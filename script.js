let hamburgerIcon = document.getElementById("hamburger-icon");
let mobileNavbar = document.getElementById("navbar-mobile-view");


hamburgerIcon.addEventListener("click", () => {
    if(mobileNavbar){
    mobileNavbar.classList.toggle("hide");
}
})