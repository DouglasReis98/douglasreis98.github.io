var options = {
    series: [44, 55, 13],
    chart: {
    width: 470,
    type: 'pie',
  },
  labels: ['Site', 'Aplicação Web', 'Aplicação Mobile'],
  responsive: [{
    breakpoint: 480,
    options: {
      chart: {
        width: 200
      },
      legend: {
        position: 'bottom'
      }
    }
  }]
  };

  var chart = new ApexCharts(document.querySelector(".grafico"), options);
  chart.render();