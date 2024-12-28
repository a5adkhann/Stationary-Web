let sidebarLinkToggles = document.querySelectorAll(".sidebar-link-toggle");
let dropdownItems = document.querySelectorAll(".dropdown-item");

sidebarLinkToggles.forEach((toggle, index) => {
  toggle.classList.add("fa-arrow-right"); 

  toggle.addEventListener("click", () => {
      let dropdownItem = dropdownItems[index]; 

      dropdownItem.classList.toggle("hide");

      if (toggle.classList.contains("fa-arrow-right")) {
          toggle.classList.remove("fa-arrow-right");
          toggle.classList.add("fa-arrow-down");
      } else {
          toggle.classList.remove("fa-arrow-down");
          toggle.classList.add("fa-arrow-right");
      }
  });
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