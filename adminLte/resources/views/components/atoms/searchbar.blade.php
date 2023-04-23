
@vite(['resources/js/app.js', 'resources/css/app.css'])

<form action="{{ route('postulado') }}" method="GET">
    <div class="flex items-center ">
      <div class="relative">
        <input type="text" name="search" placeholder="Buscar por nombre o email" value="{{ request('search') }}" class="border rounded-md py-2 px-3 w-64">
      </div>
      <div>
        <button type="submit" class="bg-naranja hover:bg-melocoton text-white font-bold py-2 px-4 m-3 rounded">
          Buscar
        </button>
      </div>
    </div>
  </form>

