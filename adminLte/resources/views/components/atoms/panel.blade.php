@vite(['resources/js/app.js','resources/css/app.css'])
<div class="bg-[#FF4700] rounded shadow w-full flex" >
    <div class="text-xs m-auto flex"  >
        <div class="bg-[#ffffff] rounded shadow w-full h-1/5 m-2 ml-4 " >
           <p style="text-align: center;">{{$totalPostulantes}} Inscrito </p>
        </div>
        <div class="bg-[#ffffff] rounded shadow w-full h-1/5 m-2 ml-4 ">
            <p style="text-align: center;" class="inline-block align-middle">Ejercicios terminados:{{ $countSi }}</p>
        </div>
        <div class="bg-[#ffffff] rounded shadow w-full h-1/5 m-2 ml-4">
            <p style="text-align: center; ">Ejercicios Sin terminar:{{ $countNo }}</p>
        </div>
        {{-- <div class="bg-[#ffffff] rounded shadow w-full h-1/5 m-2 ml-4">
            <p style="text-align: center; ">XX Poner algo aqui</p>
        </div> --}}
    </div>
    <div  class="text-xs m-auto flex">
        <div class="bg-[#ffffff] rounded shadow w-full h-1/5 m-2 ml-4">
            <p style="text-align: center; ">{{$eventos}}</p>
            @foreach ($event as $evento)
             <p>{{$evento->asistencias_count}}</p>
            @endforeach
           
        </div>
        
    </div>
</div>
