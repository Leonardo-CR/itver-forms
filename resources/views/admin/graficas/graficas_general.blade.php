<x-layouts.administrarum>
  <div class="flex h-full w-full items-center justify-center">
    <div class="grid h-full w-full gap-4 bg-gray-200 p-2 grid-cols-1 sm:grid-cols-6 sm:grid-rows-4 md:grid-rows-4 rounded-lg shadow-md">
    
      <!-- Gráfico de Pie Chart -->
      <div class="h-32 sm:h-48 md:h-auto sm:col-span-2 sm:row-span-2 bg-white rounded-lg shadow-md flex items-center justify-center p-2">
        <canvas id="myPieChart"></canvas>
      </div>
    
      <!-- Gráfico de Line Chart (Broccoli) -->
      <div class="h-32 sm:h-48 md:h-auto sm:col-span-4 sm:row-span-2 bg-white rounded-lg shadow-md flex items-center justify-center p-2">
        <canvas id="myLineChart"></canvas>
      </div>
    
      <!-- Gráfico de Radar Chart (Tamago) -->
      <div class="h-32 sm:h-48 md:h-auto sm:col-span-2 sm:row-span-2 bg-white rounded-lg shadow-md flex items-center justify-center p-2">
        <canvas id="myRadarChart"></canvas>
      </div>
    
      <!-- Gráfico de Polar Area Chart (Pork) -->
      <div class="h-32 sm:h-48 md:h-auto sm:col-span-2 sm:row-span-2 bg-white rounded-lg shadow-md flex items-center justify-center p-2">
        <canvas id="myPolarChart"></canvas>
      </div>
    
      <!-- Gráfico de Bar Chart (Edamame) -->
      <div class="h-32 sm:h-48 md:h-auto sm:col-span-2 sm:row-span-2 bg-white rounded-lg shadow-md flex items-center justify-center p-2">
        <canvas id="myBarChart"></canvas>
      </div>
    
    </div>
  </div>

  <!-- Script para los gráficos -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
       // Configuración del Pie Chart con datos reales
    const pieCtx = document.getElementById('myPieChart').getContext('2d');
    const pieChart = new Chart(pieCtx, {
      type: 'pie',
      data: {
        labels: {!! json_encode($datosPie->pluck('valor')) !!}, // ["Trabaja", "Estudia", ...]
        datasets: [{
          data: {!! json_encode($datosPie->pluck('total')) !!}, // [23, 40, ...]
          backgroundColor: [
            'rgba(54, 162, 235, 0.7)',   // Azul
            'rgba(255, 99, 132, 0.7)',   // Rojo
            'rgba(255, 206, 86, 0.7)',   // Amarillo
            'rgba(75, 192, 192, 0.7)'    // Verde
          ],
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            position: 'right',
          },
          title: {
            display: true,
            text: 'Actividad a la que se dedican actualmente los egresados:',
            font: {
              size: 14
            }
          }
        }
      }
    });


     // Configuración del Line Chart (Calidad de los docentes)
const lineCtx = document.getElementById('myLineChart').getContext('2d');
new Chart(lineCtx, {
  type: 'line',
  data: {
    labels: {!! json_encode($datosLine->pluck('valor')) !!}, // Ej: ["Muy buena", "Buena", "Regular", "Mala"]
    datasets: [{
      label: 'Respuestas sobre calidad de los docentes',
      data: {!! json_encode($datosLine->pluck('total')) !!}, // Ej: [25, 40, 10, 5]
      backgroundColor: 'rgba(75, 192, 192, 0.2)',
      borderColor: 'rgba(75, 192, 192, 1)',
      borderWidth: 2,
      tension: 0.3,
      fill: true
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      legend: { display: true },
      title: { 
        display: true, 
        text: 'Opiniones sobre la calidad de los docentes',
        font: { size: 14 }
      }
    },
    scales: {
      y: {
        beginAtZero: true,
        title: {
          display: true,
          text: 'Cantidad de respuestas'
        }
      },
      x: {
        title: {
          display: true,
          text: 'Valoración'
        }
      }
    }
  }
});



      // Configuración del Radar Chart con datos reales
const radarCtx = document.getElementById('myRadarChart').getContext('2d');
new Chart(radarCtx, {
  type: 'radar',
  data: {
    labels: {!! json_encode($datosRadar->pluck('valor')) !!}, // etiquetas como ['Claridad', 'Dominio', etc.]
    datasets: [{
      label: 'Metricas de evaluación',
      data: {!! json_encode($datosRadar->pluck('total')) !!}, // valores numéricos como [12, 30, 25, ...]
      backgroundColor: 'rgba(153, 102, 255, 0.2)',
      borderColor: 'rgba(153, 102, 255, 1)',
      pointBackgroundColor: 'rgba(153, 102, 255, 1)',
      pointBorderColor: '#fff',
      pointHoverBackgroundColor: '#fff',
      pointHoverBorderColor: 'rgba(153, 102, 255, 1)',
      borderWidth: 2
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      legend: { display: true },
      title: { 
        display: true, 
        text: '¿Cómo califica su formación académica con respecto a su desempeño laboral?',
        font: { size: 14 }
      }
    },
    scales: {
      r: {
        angleLines: {
          display: true
        },
        suggestedMin: 0,
        suggestedMax: {{ $maxRadar }} // Puedes ajustar este valor según tus datos reales
      }
    }
  }
});


      // Configuración del Polar Area Chart (Pork)
      const polarCtx = document.getElementById('myPolarChart').getContext('2d');
new Chart(polarCtx, {
  type: 'polarArea',
  data: {
    labels: {!! json_encode($datosPolar->pluck('valor')) !!},
    datasets: [{
      data: {!! json_encode($datosPolar->pluck('total')) !!},
      backgroundColor: [
        'rgba(255, 99, 132, 0.7)',
        'rgba(54, 162, 235, 0.7)',
        'rgba(255, 206, 86, 0.7)',
        'rgba(75, 192, 192, 0.7)',
        'rgba(153, 102, 255, 0.7)',
        'rgba(255, 159, 64, 0.7)'
      ],
      borderColor: [
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      legend: {
        position: 'right',
      },
      title: {
        display: true,
        text: 'Eficiencia para realizar las actividades laborales, en relación con su formación académica',
        font: {
          size: 14
        }
      }
    },
    scales: {
      r: {
        suggestedMin: 0,
        suggestedMax: {{ $maxPolar }}
      }
    }
  }
});


      // Configuración del Bar Chart (Edamame)
const barCtx = document.getElementById('myBarChart').getContext('2d');
new Chart(barCtx, {
  type: 'bar',
  data: {
    labels: {!! json_encode($datosBar->pluck('valor')) !!},
    datasets: [{
      label: 'Resultados de la pregunta 3',
      data: {!! json_encode($datosBar->pluck('total')) !!},
      backgroundColor: 'rgba(134, 239, 172, 0.7)',
      borderColor: 'rgba(134, 239, 172, 1)',
      borderWidth: 1
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      legend: {
        display: true,
        position: 'top',
      },
      title: {
        display: true,
        text: 'Oportunidad de participar en proyectos de investigación y desarrollo:',
        font: {
          size: 14
        }
      }
    },
    scales: {
      y: {
        beginAtZero: true,
        suggestedMax: {{ $maxBar }},
        title: {
          display: true,
          text: 'Metricas de evaluación'
        }
      },
      x: {
        title: {
          display: true,
          text: 'Valor'
        }
      }
    }
  }
});

    });
  </script>
</x-layouts.administrarum>