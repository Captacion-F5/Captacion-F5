@vite(['resources/js/app.js','resources/css/app.css'])

<!--Tabla-->
<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-12 mt-10">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200 ">
            <thead class="bg-gray-50 ">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-naranja uppercase tracking-wider ">
                  Apellidos, nombre
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-naranja uppercase tracking-wider">
                  Perfil Code
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-naranja uppercase tracking-wider">
                  Ejercicios > 50%
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-naranja uppercase tracking-wider">
                  RIC
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  JPA
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  PreBootcamp
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Talleres F5
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Estatus
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">

                    <tr class="hover:bg-orange-100">
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{-- <div class="relative inline-block text-left"> --}}
                            <div>
                              <button type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                <span>Santos, Ana</span>
                                <!-- Flecha hacia abajo para indicar que hay opciones desplegables -->
                                <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                  <path fill-rule="evenodd" d="M10 14l6-6H4z" />
                                </svg>
                              </button>
                            </div>
                            <!-- Opciones desplegables -->
                            <div class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                              <div class="py-1" role="none">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">
                                  Teléfono: 123456789
                                </a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">
                                  email: ejemplo@ejemplo.com
                                </a>
                              </div>
                            </div>
                          </div>

                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        https://www.codecademy.com/
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-500">
                        SI
                        {{-- <div class="form-group">
                            <label>Opciones</label>
                            <select name="name" id="name" class="form-control" multiple>
                                <option value="" disabled selected>Nombre</option>
                                <option value="phone">666 444 555</option>
                                <option value="email">ejemplo@gmail.com</option>
                            </select>
                        </div> --}}
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        SI
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        SI
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        SI
                      </td>

                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                       NO
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-yellow-400">
                        Preseleccionado
                      </td>
                    </tr>
                    <tr class="hover:bg-orange-100">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            {{-- <div class="relative inline-block text-left"> --}}
                                <div>
                                  <button type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                    <span>Rodríguez, Alex</span>
                                    <!-- Flecha hacia abajo para indicar que hay opciones desplegables -->
                                    <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                      <path fill-rule="evenodd" d="M10 14l6-6H4z" />
                                    </svg>
                                  </button>
                                </div>
                                <!-- Opciones desplegables -->
                                <div class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                  <div class="py-1" role="none">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">
                                      Teléfono: 123456789
                                    </a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">
                                      email: ejemplo@ejemplo.com
                                    </a>
                                  </div>
                                </div>
                              </div>

                          </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        https://www.codecademy.com/
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-500">
                        SI
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        NO
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        SI
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        NO
                      </td>

                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        SI
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-green-500">
                        Seleccionado
                      </td>
                    </tr>
                    <tr class="hover:bg-orange-100">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            {{-- <div class="relative inline-block text-left"> --}}
                                <div>
                                  <button type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                    <span>Pérez, Juan</span>
                                    <!-- Flecha hacia abajo para indicar que hay opciones desplegables -->
                                    <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                      <path fill-rule="evenodd" d="M10 14l6-6H4z" />
                                    </svg>
                                  </button>
                                </div>
                                <!-- Opciones desplegables -->
                                <div class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                  <div class="py-1" role="none">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">
                                      Teléfono: 123456789
                                    </a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">
                                      email: ejemplo@ejemplo.com
                                    </a>
                                  </div>
                                </div>
                              </div>

                          </td>
                      <td class="px-6 py-4 whitespace-nowrap text-md font-medium text-gray-900">
                        https://www.codecademy.com/
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-md text-center text-gray-500">
                        NO
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-md text-gray-500">
                        NO
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-md text-gray-500">
                        NO
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-md text-gray-500">
                        SI
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-md text-gray-500">
                        SI
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-red-500">
                        Descartado
                      </td>
                    </tr>


            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
