            {{-- grafica eventos --}}
            <div class="shadow-lg rounded-lg overflow-hidden  w-auto md:w-80 mx-2 md:mx-4 mt-4 md:my-2">
                <div class="w-full h-80 relative p-0 m-0">
                    <div class="py-3 px-5 bg-gray-50 w-auto h-auto relative top-0 left-0">{{$bootcamp->nombre}}</div>
                    <canvas class="w-full h-full relative top-0 left-0" id="myChartF5"></canvas>
                </div>
            </div> 
               
             <script>
               
                fetch('/obtener_datos_event/{{$bootcamp->id}}')
                .then(response => response.json())
                .then(data => {
                    if (!data.eventos) {
                        throw new Error('Los datos de eventos no están disponibles');
                    }
                    const eventos = data.eventos;
                    const postuladosPorEvento = data.postuladosPorEvento;
                    const nombresEventos = Object.keys(postuladosPorEvento);
                    const asistencia = data.asistencia; // Ejemplo de nuevos datos de asistencia
                    const inscripcion = data.inscripcion; // Ejemplo de nuevos datos de inscripción

                    const postulados = nombresEventos.map(evento => postuladosPorEvento[evento].asistencia + postuladosPorEvento[evento].inscripcion);
                    const totalPostulados = postulados.reduce((total, count) => total + count, 0);


                    const dataEvent = {
                        labels: nombresEventos,
                        datasets: [{
                            label: 'Totales',
                            data: postulados,
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            borderColor: 'rgb(255, 99, 132)',
                            borderWidth: 1
                        }, {
                            label: 'Asistentes',
                            data: asistencia,
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgb(54, 162, 235)',
                            borderWidth: 1
                        }, {
                            label: 'Inscritos',
                            data: inscripcion,
                            backgroundColor: 'rgba(255, 206, 86, 0.2)',
                            borderColor: 'rgb(255, 206, 86)',
                            borderWidth: 1
                        }]
                    };
                    const config = {
                            type: 'bar',
                            data: dataEvent,
                            options: {
                                scales: {
                                    y: {
                                        beginAtZero: true,
                                        max: 100,
                                        ticks: {
                                            stepSize: 10
                                        }
                                    }
                                }
                            }
                        };

                    var myChartF5 = new Chart(
                        document.getElementById("myChartF5"),
                        config
                    );
                    myChartF5.update();
                });
            </script>
