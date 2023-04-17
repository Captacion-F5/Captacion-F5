@extends('adminlte::page')
@vite(['resources/js/app.js','resources/css/app.css'])



@section('content_header')
<div class="m-auto pt-5 pb-5">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="search filter d-flex">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="px-1 py-2 text-center text-xs text-white uppercase bg-naranja">
                    <tr>

                        <th scope="col">
                            Aplicante
                        </th>
                        <th scope="col">
                            Invitación
                        </th>
                        <th scope="col" class="px-10">
                            Fecha
                        </th>
                        <th scope="col" class="">
                            Inscripción
                        </th>
                        <th scope="col">
                            Notificación
                        </th>
                        <th scope="col">
                            Asistencia
                        </th>
                        <th scope="col">
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
                        <th scope="row" class="px-2 py-4 font-medium text-gray-900  whitespace-nowrap">
                            Ríos, Jéssica
                        </th>
                        <td class="px-5 py-4">
                            <x-mail-button></x-mail-button>
                        </td>
                        <td class="">
                            12-04-2023
                        </td>
                        {{-- <td class="px-3 py-4">
                            <input id="checkbox-all-search" type="checkbox"
                                class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-all-search" class="sr-only">checkbox</label>
                        </td> --}}
                        <td class="text-center">
                            <select id="activo" name="activo">
                                <option value="1">No</option>
                                <option value="0">Sí</option>
                            </select>
                        </td>
                        <td class="">
                            <x-mail-button></x-mail-button>
                        </td>
                        <td class="px-3 py-4 text-center">
                            <select id="activo" name="activo">
                                <option value="1">No</option>
                                <option value="0">Sí</option>
                            </select>
                        </td>
                        <td class="">
                            <div class="flex">
                                <div class="w-4 mr-2 transform hover:text-naranja hover:scale-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </div>
                                <div class="w-4 mr-2 transform hover:text-red-800 hover:scale-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </div>
                            </div>
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
                        <th scope="row" class="px-2 py-4 font-medium text-gray-900  whitespace-nowrap">
                            Raña, Mónica
                        </th>
                        <td class="px-5 py-4">
                            <x-mail-button></x-mail-button>
                        </td>
                        <td class="">
                            12-04-2023
                        </td>
                        {{-- <td class="px-3 py-4">
                            <input id="checkbox-all-search" type="checkbox"
                                class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-all-search" class="sr-only">checkbox</label>
                        </td> --}}
                        <td class="text-center">
                            <select id="activo" name="activo">
                                <option value="1">No</option>
                                <option value="0">Sí</option>
                            </select>
                        </td>
                        <td class="">
                            <x-mail-button></x-mail-button>
                        </td>
                        <td class="px-3 py-4 text-center">
                            <select id="activo" name="activo">
                                <option value="1">No</option>
                                <option value="0">Sí</option>
                            </select>
                        </td>
                        <td class="">
                            <div class="flex">
                                <div class="w-4 mr-2 transform hover:text-naranja hover:scale-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </div>
                                <div class="w-4 mr-2 transform hover:text-red-800 hover:scale-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </div>
                            </div>
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
                        <th scope="row" class="px-2 py-4 font-medium text-gray-900  whitespace-nowrap">
                            Díaz, Tania
                        </th>
                        <td class="px-5 py-4">
                            <x-mail-button></x-mail-button>
                        </td>
                        <td class="">
                            12-04-2023
                        </td>
                        {{-- <td class="px-3 py-4">
                            <input id="checkbox-all-search" type="checkbox"
                                class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-all-search" class="sr-only">checkbox</label>
                        </td> --}}
                        <td class="text-center">
                            <select id="activo" name="activo">
                                <option value="1">No</option>
                                <option value="0">Sí</option>
                            </select>
                        </td>
                        <td class="">
                            <x-mail-button></x-mail-button>
                        </td>
                        <td class="px-3 py-4 text-center">
                            <select id="activo" name="activo">
                                <option value="1">No</option>
                                <option value="0">Sí</option>
                            </select>
                        </td>
                        <td class="">
                            <div class="flex">
                                <div class="w-4 mr-2 transform hover:text-naranja hover:scale-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </div>
                                <div class="w-4 mr-2 transform hover:text-red-800 hover:scale-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </div>
                            </div>
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
                        <th scope="row" class="px-2 py-4 font-medium text-gray-900  whitespace-nowrap">
                            García, Ana
                        </th>
                        <td class="px-5 py-4">
                            <x-mail-button></x-mail-button>
                        </td>
                        <td class="">
                            12-04-2023
                        </td>
                        {{-- <td class="px-3 py-4">
                            <input id="checkbox-all-search" type="checkbox"
                                class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-all-search" class="sr-only">checkbox</label>
                        </td> --}}
                        <td class="text-center">
                            <select id="activo" name="activo">
                                <option value="1">No</option>
                                <option value="0">Sí</option>
                            </select>
                        </td>
                        <td class="">
                            <x-mail-button></x-mail-button>
                        </td>
                        <td class="px-3 py-4 text-center">
                            <select id="activo" name="activo">
                                <option value="1">No</option>
                                <option value="0">Sí</option>
                            </select>

                        </td>
                        <td class="">
                            <div class="flex">
                                <div class="w-4 mr-2 transform hover:text-naranja hover:scale-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </div>
                                <div class="w-4 mr-2 transform hover:text-red-800 hover:scale-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </div>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    @stop
