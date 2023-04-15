@vite(['resources/js/app.js', 'resources/css/app.css'])

<form action="{{ route('bootcamps.index') }}" method="GET">
    <div class="flex items-center space-x-4">
        <div class="relative flex justify-between">
            <div><input type="text" name="search" placeholder="Buscar por nombre" value="{{ request('search') }}" class="border rounded-md py-2 px-3 w-64 sm:w-auto"></div>
            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Buscar
                </button>
            </div>
        </div>
        <!-- ... -->
    </div>
</form>
