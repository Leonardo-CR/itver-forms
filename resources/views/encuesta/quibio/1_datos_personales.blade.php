<x-layouts.app>
<form action="{{ route('quibio.store') }}" method="POST">
  @csrf
{{-- Ejemplo sección 1: Información laboral --}}
<h2 class="text-lg font-bold mb-2">Sección 1: Información Laboral</h2>

{{-- Pregunta 1: ¿Trabajas actualmente? (radio) --}}
<div class="mb-4">
    <label class="block mb-1 font-medium">¿Trabajas actualmente?</label>
    <div class="flex items-center mb-2">
        <input type="radio" id="trabaja_si" name="respuesta[s1_p1]" value="1" class="mr-2">
        <label for="trabaja_si">Sí</label>
    </div>
    <div class="flex items-center">
        <input type="radio" id="trabaja_no" name="respuesta[s1_p1]" value="0" class="mr-2">
        <label for="trabaja_no">No</label>
    </div>
</div>

{{-- Pregunta 2: Nivel de satisfacción con su trabajo actual (select) --}}
<div class="mb-4">
    <label for="satisfaccion" class="block mb-1 font-medium">¿Qué tan satisfecho estás con tu trabajo actual?</label>
    <select name="respuesta[s1_p3]" id="satisfaccion" class="border rounded p-1">
        <option value="5">Muy satisfecho</option>
        <option value="4">Satisfecho</option>
        <option value="3">Neutral</option>
        <option value="2">Insatisfecho</option>
        <option value="1">Muy insatisfecho</option>
    </select>
</div>

{{-- Pregunta 3: Comentarios sobre el trabajo (cualitativa - textarea) --}}
<div class="mb-4">
    <label for="comentario" class="block mb-1 font-medium">¿Tienes algún comentario sobre tu experiencia laboral?</label>
    <textarea name="respuesta[s1_p2]" id="comentario" rows="3" class="w-full border rounded p-1"></textarea>
</div>


{{-- Pregunta 4: Checkbox cuantitativa múltiple (1 pregunta, varias respuestas) --}}
<div class="mb-4">
  <label class="block mb-1 font-medium">¿Qué factores consideraste para aceptar tu empleo actual? (cuantitativa, puedes seleccionar varios)</label>
  <div class="flex items-center mb-1">
      <input type="checkbox" id="salario" name="respuesta[s1_p2][]" value="1" class="mr-2">
      <label for="salario">Salario competitivo</label>
  </div>
  <div class="flex items-center mb-1">
      <input type="checkbox" id="ubicacion" name="respuesta[s1_p2][]" value="2" class="mr-2">
      <label for="ubicacion">Ubicación cercana</label>
  </div>
  <div class="flex items-center">
      <input type="checkbox" id="oportunidad" name="respuesta[s1_p2][]" value="3" class="mr-2">
      <label for="oportunidad">Oportunidad de crecimiento</label>
  </div>
</div>

{{-- Pregunta 5: Checkbox cualitativa múltiple (1 pregunta, varias respuestas) --}}
{{-- <div class="mb-4">
  <label class="block mb-1 font-medium">¿Qué herramientas digitales utilizas frecuentemente en tu trabajo? (cualitativa, puedes seleccionar varias)</label>
  <div class="flex items-center mb-1">
      <input type="checkbox" id="excel" name="respuesta[s1_p2][]" value="Microsoft Excel" class="mr-2">
      <label for="excel">Microsoft Excel</label>
  </div>
  <div class="flex items-center mb-1">
      <input type="checkbox" id="teams" name="respuesta[s1_p2][]" value="Microsoft Teams" class="mr-2">
      <label for="teams">Microsoft Teams</label>
  </div>
  <div class="flex items-center mb-1">
      <input type="checkbox" id="slack" name="respuesta[s1_p2][]" value="Slack" class="mr-2">
      <label for="slack">Slack</label>
  </div>
</div> --}}


<button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Enviar</button>
</form>

</x-layouts.app>