let sidebarLinkToggle = document.getElementById("sidebar-link-toggle");
let dropdownItem = document.getElementById("dropdown-item");

sidebarLinkToggle.classList.add("fa-arrow-right");

sidebarLinkToggle.addEventListener("click", () => {
    if (dropdownItem) {
        dropdownItem.classList.toggle("hide");
        
        if (sidebarLinkToggle.classList.contains("fa-arrow-right")) {
            sidebarLinkToggle.classList.remove("fa-arrow-right");
            sidebarLinkToggle.classList.add("fa-arrow-down");
        } else {
            sidebarLinkToggle.classList.remove("fa-arrow-down");
            sidebarLinkToggle.classList.add("fa-arrow-right");
        }
    }
});

// Chart Logics
var xValues = ["Category", "Products", "Total Revenue", "Total Registrations"];
var yValues = [55, 49, 44, 24];
var barColors = ["red", "green","blue","orange","brown"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Stationary Shop Web Application"
    }
  }
});