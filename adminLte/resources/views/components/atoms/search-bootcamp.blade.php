@vite(['resources/js/app.js', 'resources/css/app.css'])

<form action="{{ route('bootcamps.index') }}" method="GET">
    <div class="flex space-x-4 justify-start">
      <div class="relative">
        <input type="text" name="search" placeholder="Buscar por nombre" value="{{ request('search') }}" class="border-1 rounded-md py-2 px-3 w-96">
      </div>
      <div>
        <button type="submit" class="bg-naranja hover:bg-melocoton text-white text-lg py-1 px-3 rounded border-2 border-orange-700">
          Buscar
        </button>
      </div>
    </div>
  </form>

