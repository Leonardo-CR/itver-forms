<x-layouts.app> 
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />

    <div class="bg-gradient-to-r from-indigo-100 to-blue-100 p-6 rounded-lg shadow-md mb-8 mt-6">
        <h2 class="text-4xl font-extrabold text-indigo-700 mb-4">📢 Sección de Avisos</h2>
        <p class="text-justify text-base md:text-lg text-gray-700 leading-relaxed md:w-[85%]">
            ¡Nos alegra tenerte aquí! En esta sección encontrarás todos los avisos importantes que hemos preparado para ti. 
            Mantente informado sobre novedades, recordatorios, eventos y comunicados relevantes. 
            Cada aviso está diseñado para mantenerte al día y facilitar tu experiencia con nosotros. 
        </p>
    </div>

    <ul class="space-y-6 mb-4">
        @foreach ($avisos as $aviso)
        <li class="flex justify-center items-center">
            <article class="bg-[#f0f0f0] rounded-2xl shadow-md hover:shadow-xl transition-shadow duration-300 flex flex-col md:flex-row w-full md:w-[80%] overflow-hidden">
                <div class="flex justify-center items-center w-full md:w-[40%] bg-gray-100">
                    <img 
                        class=" bg-[#f0f0f0] w-full h-auto object-contain p-4" 
                        src="{{ asset('storage/' . $aviso->imagen_ruta) }}" 
                        alt=""> 
                </div>

                <div class="px-6 py-1 w-full md:w-[60%]">
                    <h1 class="font-bold text-3xl  mb-1">
                        <a href="" class="hover:underline">
                            {{ $aviso->titulo }}
                        </a>
                    </h1>

                    <div class="ql-editor text-gray-800">
                        {!! $aviso->contenido !!}
                    </div>
                </div>
            </article>
        </li>
        @endforeach
    </ul>

    <div class="flex justify-center mt-8">
        {{ $avisos->links() }}
    </div>
</x-layouts.app>
