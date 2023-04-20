 <!-- grafica ejercicios -->
<div class="shadow-lg rounded-lg overflow-hidden w-full md:w-80 mx-2 md:mx-4 mt-4 md:my-2">
    <div class="w-full h-80 md:h-full relative p-0 m-0">
      <div class="py-3 px-5 bg-gray-50 w-auto h-auto relative top-0 left-0">{{$bootcamp->nombre}}</div>
      <canvas class="p-10 w-full h-full absolute top-0 left-0" id="chartDoughnutEjercicios"></canvas>
    </div>
</div>

<script>
    fetch('/obtener_datos_ejercicios/{{ $bootcamp->id }}') 
        .then(response => response.json())
        .then(data => {
            
            // Obtener los datos del JSON
            const postulados = data.postulados;
            const ejercicios = data.ejercicios;

            // Calcular el total de ejercicios completados y por completar
            const si = ejercicios.filter(ejercicio => ejercicio).length;
            const no = ejercicios.filter(ejercicio => !ejercicio).length;

            // Configurar el gráfico
            const dataDoughnutEjercicios = {
                labels: ["Terminados", "Por Terminar"],
                datasets: [
                    {
                        label: "Candidatos por ejercicios",
                        data: [si, no],
                        backgroundColor: [
                            "rgb(255, 92, 0)",
                            "rgb(255, 165, 0)",
                        ],
                        hoverOffset: 4,
                    },
                ],
            };

            const configDoughnutEjercicios = {
                type: "doughnut",
                data: dataDoughnutEjercicios,
                options: {},
            };

            var chartDoughnutEjercicios = new Chart(
                document.getElementById("chartDoughnutEjercicios"),
                configDoughnutEjercicios
            );
        })
        .catch(error => {
            console.error('Error al obtener los datos del servidor:', error);
        });
</script>
