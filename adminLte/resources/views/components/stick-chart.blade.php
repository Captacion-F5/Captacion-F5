  <div class="shadow-lg rounded-lg overflow-hidden  w-auto md:w-80 mx-2 md:mx-4 mt-4 md:my-2">
    <div class="w-full h-80 relative p-0 m-0">
      <canvas  class="w-full h-full relative top-0 left-0" id="myChartF5"></canvas>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
  <script>
      const data = {
    labels: ['RIC', 'JPA', 'TalleresF5', 'Prebootcamp'],
    datasets: [{
      label: 'Totales',
      data: [65, 59, 80, 300],
      backgroundColor: 'rgba(255, 99, 132, 0.2)',
      borderColor: 'rgb(255, 99, 132)',
      borderWidth: 1
    }, {
      label: 'Asistentes',
      data: [45, 50, 70, 250],
      backgroundColor: 'rgba(54, 162, 235, 0.2)',
      borderColor: 'rgb(54, 162, 235)',
      borderWidth: 1
    }, {
      label: 'Apuntados',
      data: [80, 70, 90, 400],
      backgroundColor: 'rgba(255, 206, 86, 0.2)',
      borderColor: 'rgb(255, 206, 86)',
      borderWidth: 1
    }]
  };

    const config = {
      type: 'bar',
      data: data,
      options: {},
    };
     
    var myChartF5 = new Chart (
      document.getElementById("myChartF5"),
      config
    );
  </script>
 
