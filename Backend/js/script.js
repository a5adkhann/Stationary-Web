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


const xValues = [100,200,300,400,500,600,700,800,900,1000];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
      borderColor: "red",
      fill: false
    },{
      data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
      borderColor: "green",
      fill: false
    },{
      data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
      borderColor: "blue",
      fill: false
    }]
  },
  options: {
    legend: {display: false}
  }
});