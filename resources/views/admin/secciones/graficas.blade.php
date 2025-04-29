<x-layouts.administrarum >
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <div class="mb-4 flex justify-between items-left text-xs">
        <flux:breadcrumbs >
            <flux:breadcrumbs.item href="{{ route('dashboard') }}">Dashboard</flux:breadcrumbs.item>
            <flux:breadcrumbs.item>Gráficas Preguntas Sección {{ $seccion->nombre }}</flux:breadcrumbs.item>
        </flux:breadcrumbs>
    </div>
    <div class="space-y-6">
        @foreach($preguntas as $index => $pregunta)
            <p class="font-bold">{{ $pregunta->descripcion }}</p>
            @php
                $frecuencias = [];
                foreach ($pregunta->respuestas as $respuesta) {
                    $valor = $respuesta->valor;
                    if (!isset($frecuencias[$valor])) {
                        $frecuencias[$valor] = 0;
                    }
                    $frecuencias[$valor]++;
                }
            @endphp

            <div class="w-[700px] h-[700px]">
                <canvas id="chart-{{ $index }}" width="400" height="400"></canvas>

<script>
    const ctx{{ $index }} = document.getElementById('chart-{{ $index }}').getContext('2d');

    new Chart(ctx{{ $index }}, {
        type: 'pie',
        data: {
            labels: [
                @foreach($frecuencias as $valor => $conteo)
                    "{{ $valor }}",
                @endforeach
            ],
            datasets: [{
                data: [
                    @foreach($frecuencias as $valor => $conteo)
                        {{ $conteo }},
                    @endforeach
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(255, 206, 86, 0.6)',
                    'rgba(75, 192, 192, 0.6)',
                    'rgba(153, 102, 255, 0.6)',
                    'rgba(255, 159, 64, 0.6)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom',
                },
                title: {
                    display: true,
                    text: '{{ $pregunta->descripcion }}'
                }
            }
        }
    });
</script>

            </div>
        @endforeach
    </div>
</x-layouts.administrarum>