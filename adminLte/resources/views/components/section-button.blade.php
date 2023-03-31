@vite(['resources/js/app.js','resources/css/app.css'])

<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 mt-5 bg-naranja border border-transparent rounded-full font-semibold text-xs text-white uppercase tracking-widest hover:bg-melocoton active:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
