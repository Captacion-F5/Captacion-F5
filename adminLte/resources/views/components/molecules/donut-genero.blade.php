<!-- component -->

<div class="shadow-lg rounded-lg overflow-hidden w-full md:w-80 mx-2 md:mx-4 mt-4 md:my-2">
  <div class="w-full h-80 md:h-full relative p-0 m-0">
    <div class="py-3 px-5 bg-gray-50 w-auto h-auto relative top-0 left-0">Participación por género</div>
    <canvas class="p-10 w-full h-full absolute top-0 left-0" id="chartDoughnutGenero"></canvas>
  </div>
</div>


  <!-- Required chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script>
    fetch('/obtener_datos_bootcamp/1') 
      .then(response => response.json())
      .then(data => {
        // Procesar los datos obtenidos para el gráfico

        const femenino = data.generos.filter(genero => genero === 'hombre').length;
        const masculino = data.generos.filter(genero => genero === 'mujer').length;
        const noBinario = data.generos.filter(genero => genero === 'no binario').length;
        const noContestar = data.generos.filter(genero => genero === 'prefiero no contestar').length;

        const dataDoughnut = {
          labels: ["hombre", "mujer", "no binario", "prefiero no contestar"],
          datasets: [
            {
              label: "candidatos por genero",
              data: [femenino, masculino, noBinario, noContestar],
              backgroundColor: [
                "rgb(255, 92, 0)",
                "rgb(255, 165, 0)",
                "rgb(255, 255, 0)",
                "rgb(128, 128, 128)"
              ],
              hoverOffset: 4,
            },
          ],
        };

        const configDoughnut = {
          type: "doughnut",
          data: dataDoughnut,
          options: {},
        };

        var chartBar = new Chart(
          document.getElementById("chartDoughnutGenero"),
          configDoughnut
        );
      })
      .catch(error => {
        console.error('Error al obtener los datos del servidor:', error);
      });

  </script>