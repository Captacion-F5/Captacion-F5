@vite(['resources/js/app.js', 'resources/css/app.css'])

<!--Tabla-->
{{-- <div class="flex flex-col"> --}}

{{-- <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-12 mt-10">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200 ">
            <thead class="bg-naranja text-white text-left text-xs font-medium  uppercase">
              <tr>
                <th scope="col" class="px-6 py-3  tracking-wider ">
                  Apellidos
                </th>
                <th scope="col" class="px-6 py-3 tracking-wider">
                  Nombre
                </th>
                <th scope="col" class="px-6 py-3 tracking-wider">
                  Email
                </th>

                <th scope="col" class="px-6 py-3 tracking-wider">
                  Comunidad autónoma
                </th>
                <th scope="col" class="px-6 py-3 tracking-wider">
                  Edad
                </th>

                <th scope="col" class="px-6 py-3 tracking-wider">
                  Nivel de Estudios
                </th>
                <th scope="col" class="px-6 py-3 tracking-wider">
                  Homologado
                </th>
                <th scope="col" class="px-6 py-3 tracking-wider">
                  Género
                </th>
                <th scope="col" class="px-6 py-3 tracking-wider">
                  Situación laboral
                </th>

              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr class="hover:bg-orange-100">
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        Santos
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        Ana
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        anasantos@example.com
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        Asturias
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        32
                      </td>

                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        ESO
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        Si
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        Mujer
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        Desempleado
                      </td>
                    </tr>
                    <tr class="hover:bg-orange-100">
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        Rodríguez
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        Alex
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        alex@example.com
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        Galicia
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        25
                      </td>

                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        Ciclo Grado Superior
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        No
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        No binario
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        Desempleado
                      </td>
                    </tr>
                    <tr class="hover:bg-orange-100">
                      <td class="px-6 py-4 whitespace-nowrap text-md font-medium text-gray-900">
                        Perez
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-md font-medium text-gray-900">
                        Juan
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-md text-gray-500">
                        juan.perez@example.com
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-md text-gray-500">
                        Cantabria
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-md text-gray-500">
                        40
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-md text-gray-500">
                        Bachillerato
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-md text-gray-500">
                        Si
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        Hombre
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        Trabajando
                      </td>
                    </tr>


            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div> --}}

<!-- component -->
<!-- This is an example component -->
<div class="m-auto">

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="p-3">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative mt-1">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-800 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="text" id="table-search"
                    class="bg-gray-100 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-naranja focus:border-naranja block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-naranja dark:focus:border-naranja"
                    placeholder="Buscar aplicante">
            </div>
        </div>
        <div>
            <x-dropdown-link class="w-100">
            </x-dropdown-link>
        </div>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-white uppercase bg-naranja dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="p-4">
                        <div class="flex items-center">
                            <input id="checkbox-all-search" type="checkbox"
                                class="w-4 h-4 text-naranja bg-gray-100 border-gray-800 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-all-search" class="sr-only">checkbox</label>
                        </div>
                    </th>
                    <th scope="col" class="px-2 py-3">
                        Aplicante
                    </th>
                    <th scope="col" class="px-2 py-3">
                        Ejercicios > 50%
                    </th>
                    <th scope="col" class="px-2 py-3">
                        RIC
                    </th>
                    <th scope="col" class="px-2 py-3">
                        JPA
                    </th>
                    <th scope="col" class="px-2 py-3">
                        TPB
                    </th>
                    <th scope="col" class="px-2 py-3">
                        TF5
                    </th>
                    <th scope="col" class="px-2 py-3">
                        Estatus
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-orange-200">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-search-1" type="checkbox"
                                class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <th scope="row" class="px-2 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        Ríos, Jéssica
                    </th>
                    <td class="px-5 py-4">
                        Si
                    </td>
                    <td class="px-3 py-4">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </td>
                    <td class="px-3 py-4">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </td>
                    <td class="px-3 py-4">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </td>
                    <td class="px-3 py-4">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </td>
                    <td class="py-4">
                        <a href="#" class=" rounded font-medium text-blue bg-blue-100 hover:underline">En proceso</a>
                    </td>
                </tr>
                <tr class="hover:bg-orange-200">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-search-1" type="checkbox"
                                class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <th scope="row" class="px-2 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        Raña, Mónica
                    </th>
                    <td class="px-5 py-4">
                        Si
                    </td>
                    <td class="px-3 py-4">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </td>
                    <td class="px-3 py-4">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </td>
                    <td class="px-3 py-4">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </td>
                    <td class="px-3 py-4">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </td>
                    <td class=" py-4">
                        <a href="#" class="p-2 rounded font-medium text-green bg-green-100 hover:underline">Admisión</a>

                    </td>
                </tr>
                <tr class="hover:bg-orange-200">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-search-1" type="checkbox"
                                class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <th scope="row" class="px-2 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        Tania
                    </th>
                    <td class="px-5 py-4">
                        No
                    </td>
                    <td class="px-3 py-4">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </td>
                    <td class="px-3 py-4">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </td>
                    <td class="px-3 py-4">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </td>
                    <td class="px-3 py-4">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </td>
                    <td class=" py-4">
                        <a href="#" class="p-2 rounded font-medium text-red bg-red-100 hover:underline">Descarte</a>
                    </td>
                </tr>
                <tr class="hover:bg-orange-200">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-search-1" type="checkbox"
                                class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <th scope="row" class="px-2 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        García, Ana
                    </th>
                    <td class="px-5 py-4">
                        No
                    </td>
                    <td class="px-3 py-4">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </td>
                    <td class="px-3 py-4">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </td>
                    <td class="px-3 py-4">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </td>
                    <td class="px-3 py-4">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </td>
                    <td class=" py-4">
                        <a href="#" class="p-2 rounded font-medium text-blue bg-blue-100 hover:underline">En proceso</a>

                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
