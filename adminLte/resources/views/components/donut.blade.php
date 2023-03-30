<!-- component -->

<div class="shadow-lg rounded-lg overflow-hidden w-full md:w-80 mx-2 md:mx-4 mt-4 md:my-2">
  <div class="w-full h-80 md:h-full relative p-0 m-0">
    <div class="py-3 px-5 bg-gray-50 w-auto h-auto relative top-0 left-0">Participación por edades</div>
    <canvas class="p-10 w-full h-full absolute top-0 left-0" id="chartDoughnut"></canvas>
  </div>
</div>


  <!-- Required chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
  <!-- Chart doughnut -->
  <script>
    const dataDoughnutGenero = {
      labels: ["< 30", "30-45", "> 55"],
      datasets: [
        {
          label: "candidatos",
          data: [300, 50, 100],
          backgroundColor: [
            "rgb(255, 92, 0)",
            "rgb(255, 165, 0)",
            "rgb(255, 255, 0)",
          ],
          hoverOffset: 4,
        },
      ],
    };
  
    const configDoughnutGenero = {
      type: "doughnut",
      data: dataDoughnutGenero,
      options: {},
    };
  
    var chartBar = new Chart(
      document.getElementById("chartDoughnut"),
      configDoughnutGenero
    );
  </script>