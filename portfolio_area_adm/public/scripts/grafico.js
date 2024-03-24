const numSites = Number(document.getElementById("numSites").defaultValue);
const numAppWeb = Number(document.getElementById("numAppWeb").defaultValue);
const numAppMobile = Number(document.getElementById("numAppMobile").defaultValue);

var options = {
    series: [numSites, numAppWeb, numAppMobile],
    chart: {
    width: 470,
    type: 'pie',
  },
  labels: ['Site', 'Aplicação Web', 'Aplicação Mobile'],
  responsive: [{
    breakpoint: 480,
    options: {
      chart: {
        width: 300
      },
      legend: {
        position: 'bottom'
      }
    }
  }]
  };

  var chart = new ApexCharts(document.querySelector(".grafico"), options);
  chart.render();