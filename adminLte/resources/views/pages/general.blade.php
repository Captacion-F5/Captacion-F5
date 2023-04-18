@vite(['resources/js/app.js','resources/css/app.css'])
@extends('adminlte::page')
@section('title', 'Captación F5')
@section('plugins.Sweetalert2', true)


@section('content')
<h2 class="text-naranja text-lg mt-2">Bienvenida a tu panel de administradora</h2>
    <br>
    <x-atoms.panel class="ml-3"></x-atoms.panel>
    <br>
    {{-- grafica por genero --}}
    <div class="flex flex-row">
        <div class="shadow-lg rounded-lg overflow-hidden w-full md:w-80 mx-2 md:mx-4 mt-4 md:my-2">
            <div class="w-full h-80 md:h-full relative p-0 m-0">
              <div class="py-3 px-5 bg-gray-50 w-auto h-auto relative top-0 left-0">{{$bootcamp->nombre}}</div>
              <canvas class="p-10 w-full h-full absolute top-0 left-0" id="chartDoughnutGenero"></canvas>
            </div>
        </div>
            <!-- Required chart.js -->
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
              fetch('/obtener_datos_bootcamp/{{ $bootcamp->id }}') 
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
        <x-molecules.donut></x-molecules.donut>
        <x-molecules.stick-chart></x-molecules.stick-chart>
    </div>
<div class="flex justify-between">
    <div class="m-10">
        <a href="{{ url('/general') }}">
            <x-section-button class="m-auto">
                {{ __('General') }}
            </x-section-button>
        </a>
        <a href="{{ url('/exercises') }}">
            <x-section-button class="">
                {{ __('Ejercicios') }}
            </x-section-button>
        </a>
        <x-section-button class="">
            {{ __('RIC') }}
        </x-section-button>
        <x-section-button class="">
            {{ __('JPA') }}
        </x-section-button>
        <x-section-button class="">
            {{ __('TF5') }}
        </x-section-button>
        <x-section-button class="">
            {{ __('TPB') }}
        </x-section-button>
        <a href="{{ url('/postulado') }}">
            <x-section-button class="">
                {{ __('Datos Postulantes') }}
            </x-section-button>
        </a>
    </div>
</div>


<x-atoms.searchbar></x-atoms.searchbar>
@vite(['resources/js/app.js', 'resources/css/app.css'])
<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="px- py-2 text-xs text-white uppercase bg-naranja dark:bg-naranja-700 dark:text-gray-400">
        <tr class="">

            <th scope="col" class="px-6 py-4">
                Aplicante
            </th>
            <th scope="col" class="px-6 py-4">
                Teléfono
            </th>
            <th scope="col" class="px-6 py-4">
                Ejercicios > 50%
            </th>
            <th scope="col" class="px-6 py-4">
                RIC
            </th>
            <th scope="col" class="px-6 py-4">
                JPA
            </th>
            <th scope="col" class="px-6 py-4">
                TPB
            </th>
            <th scope="col" class="px-6 py-4">
                TF5
            </th>
            <th scope="col" class="px-6 py-4">
                Estatus
            </th>
        </tr>
    </thead>
    <tbody>
        {{-- @foreach ($bootcamp->postulado->sortbyDesc('ejercicios') as $postulado) --}}
        @foreach ($bootcamp->postulado as $postulado)
        <tr class="hover:bg-orange-200 ">
            <td  class="px-4 py-2 font-medium text-gray-900  whitespace-nowrap">
                {{$postulado->nombre}}
            </td>

            <td class="px-2 py-4 font-medium text-gray-900  whitespace-nowrap">
                {{ $postulado->telefono }}
            </td>
            <td class="px-5 py-4">
                <span
                    class="inline-block rounded-full text-center px-2 py-1 font-semibold {{ $postulado->ejercicios ? 'bg-green-500 text-white' : 'bg-red-500 text-white' }}">
                    {{ $postulado->ejercicios ? 'Si' : 'No' }}
                </span>
            </td>
            <td class="px-3 py-4">
                <input id="checkbox-all-search" type="checkbox"
                    class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja  dark:border-gray-600">
                <label for="checkbox-all-search" class="sr-only">checkbox</label>
            </td>
            <td class="px-3 py-4">
                <input id="checkbox-all-search" type="checkbox"
                    class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja  dark:border-gray-600">
                <label for="checkbox-all-search" class="sr-only">checkbox</label>
            </td>
            <td class="px-3 py-4">
                <input id="checkbox-all-search" type="checkbox"
                    class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja  dark:border-gray-600">
                <label for="checkbox-all-search" class="sr-only">checkbox</label>
            </td>
            <td class="px-3 py-4">
                <input id="checkbox-all-search" type="checkbox"
                    class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja  dark:border-gray-600">
                <label for="checkbox-all-search" class="sr-only">checkbox</label>
            </td>
            <td class="py-4">
                <form action="{{ route('postulado.update_status', $postulado->id) }}" method="post">
                    @csrf
                    @method('put')
                    <select name="estado" onchange="this.form.submit()" class="inline-block rounded-full text-center appearance-none w-full px-2 py-1 font-semibold {{ $postulado->estado === 'seleccionado' ? 'bg-green-300 text-white' : ($postulado->estado === 'descartado' ? 'bg-red-400 text-white' : 'bg-blue-300 text-white')}}">
                        {{ $postulado->estado === 'seleccionado' ? 'seleccionado' : ($postulado->estado === 'descartado' ? 'descartado' : 'en proceso')}}">
                        <option class='bg-green-300 text-white'value="seleccionado" {{ $postulado->estado === 'seleccionado' ? 'selected'  : '' }}>Seleccionado</option>
                        <option  class='bg-red-400 text-white' value="descartado" {{ $postulado->estado === 'descartado' ? 'selected' : '' }}>Descartado</option>
                        <option class= 'bg-blue-300 text-white' value="en proceso" {{ $postulado->estado === 'en proceso' ? 'selected' : '' }}>En Proceso</option>
                    </select>
                </form>
            </td>
        </tr>
        @endforeach
        </tr>
    </tbody>
</table>
</div>
</div>
@stop





