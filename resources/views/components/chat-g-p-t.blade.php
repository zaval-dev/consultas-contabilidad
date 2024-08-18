<div>
    <button id="compose-btn" class="bg-blue-500 text-white font-bold py-2 px-4 rounded fixed top-20 right-4 shadow-lg">
        Consultar a la IA
    </button>

    <div id="compose-modal" class="hidden fixed bottom-0 right-0 bg-white border border-gray-300 shadow-lg p-4 rounded-lg w-1/3 h-auto mr-4 mb-4">
        <div class="flex justify-between items-center">
            <h3 class="text-lg font-semibold">Nuevo Mensaje</h3>
            <button id="close-modal" class="text-gray-500 hover:text-gray-700">&times;</button>
        </div>
        <div class="mt-4 space-y-4">
            <input type="text" id="para" placeholder="Ask GPT..." class="w-full border border-gray-300 p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded w-full">Submit</button>
            <div id="gpt-response" class="mt-4 border border-gray-300 p-4 rounded-lg h-32 overflow-y-auto">
                GPT Response
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('compose-btn').addEventListener('click', function() {
        document.getElementById('compose-modal').classList.remove('hidden');
    });

    document.getElementById('close-modal').addEventListener('click', function() {
        document.getElementById('compose-modal').classList.add('hidden');
    });

    // Recargar el estado previo
    window.addEventListener('load', function() {
        if (localStorage.getItem('modalVisible') === 'true') {
            document.getElementById('compose-modal').classList.remove('hidden');
        }

        document.getElementById('para').value = localStorage.getItem('para') || '';
    });

    // Guardar el estado del modal y contenido
    window.addEventListener('beforeunload', function() {
        localStorage.setItem('modalVisible', !document.getElementById('compose-modal').classList.contains('hidden'));
        localStorage.setItem('para', document.getElementById('para').value);
    });
</script>
