let sidebarLinkToggle = document.getElementById("sidebar-link-toggle");
let dropdownItem = document.getElementById("dropdown-item");

sidebarLinkToggle.classList.add("fa-arrow-right");

sidebarLinkToggle.addEventListener("click", () => {
    if (dropdownItem) {
        dropdownItem.classList.toggle("hide");
        
        if (sidebarLinkToggle.classList.contains("fa-arrow-right")) {
            sidebarLinkToggle.classList.remove("fa-arrow-right");
            sidebarLinkToggle.classList.add("fa-angle-down");
        } else {
            sidebarLinkToggle.classList.remove("fa-angle-down");
            sidebarLinkToggle.classList.add("fa-arrow-right");
        }
    }
});