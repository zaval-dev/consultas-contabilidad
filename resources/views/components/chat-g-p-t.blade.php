<div>
    <button id="compose-btn" class="bg-blue-500 text-white font-bold py-2 px-4 rounded fixed top-20 right-4 shadow-lg">
        Consultar a la IA
    </button>

    <div id="compose-modal" class="hidden fixed bottom-0 right-0 bg-white border border-gray-300 shadow-lg p-4 rounded-lg w-1/3 h-auto mr-4 mb-4">
        <div class="flex justify-between items-center">
            <h3 class="text-lg font-semibold">Pregunta a Arnie</h3>
            <button id="close-modal" class="text-gray-500 hover:text-gray-700">&times;</button>
        </div>
        <div class="mt-4 space-y-4">
            <label for="query" class="sr-only">Pregunta a Arnie</label>
            <textarea id="query" rows="3" class="block w-full resize-none border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 text-sm placeholder-gray-400 text-gray-900 sm:text-sm sm:leading-6" placeholder="Escribe tu consulta..."></textarea>

            <div class="flex justify-end">
                <button id="send-btn" class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-600">
                    Enviar
                </button>
            </div>

            <label for="response" class="sr-only">GPT Response</label>
            <textarea id="response" rows="5" class="block w-full resize-none border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 text-sm text-gray-900 sm:text-sm sm:leading-6" readonly placeholder="La respuesta aparecerá aquí..."></textarea>
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

    document.getElementById('send-btn').addEventListener('click', function() {
        let query = document.getElementById('query').value;

        fetch('{{ route('ask.gpt') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ query: query })
        })
        .then(response => response.json())
        .then(data => {
            document.getElementById('response').value = data.response;
        })
        .catch(error => console.error('Error:', error));
    });
</script>
