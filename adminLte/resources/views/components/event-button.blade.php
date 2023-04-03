{{-- <button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-naranja border border-transparent rounded-full font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button> --}}
<button class="flex items-center">
    <svg class="w-8 h-8 text-white bg-naranja rounded-full mr-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
        <path d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
    </svg>
</button>
    <span class="text-gray-700 font-medium">Añadir evento</span>

