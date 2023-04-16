@vite(['resources/js/app.js', 'resources/css/app.css'])

<form action="{{ route('bootcamps.index') }}" method="GET">
    <div class="flex items-center space-x-4">
      <div class="relative">
        <input type="text" name="search" placeholder="Buscar por nombre" value="{{ request('search') }}" class="border rounded-md py-2 px-3 w-64 sm:w-auto">
      </div>
      <div>
        <button type="submit" class="bg-naranja hover:bg-cd ad  melocoton text-white font-bold py-2 px-4 rounded">
          Buscar
        </button>
      </div>
    </div>
  </form>

