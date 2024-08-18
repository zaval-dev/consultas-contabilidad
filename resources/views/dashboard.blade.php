<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Inicio') }}
        </h2>
        <x-chat-g-p-t />
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-welcome /> --}}
                <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                    <h1 class="text-2xl font-medium text-gray-900 dark:text-white">
                        Especificaciones
                    </h1>

                    {{-- <ul class="mt-6 text-gray-500 dark:text-gray-400 leading-relaxed space-y-4">
                        <li>La pantalla principal debe centrarse en la visualización de información clave con una navegación clara que permita acceder rápidamente a mapas, gráficos, y ejemplos relevantes para el rubro y tipo de empresa del usuario.</li>
                        <h3>Especificaciones (No definitivas aún):</h3>
                        <ul class="px-2">
                            <li>(1) Aquí se mostrará un apartado para realizar consultas (preguntas de cierto tema).</li>
                            <li>(2) El apartado debería mostrar opciones para elegir el rubro, tipo de empresa y el tema de la pregunta (Los apartados del nav).</li>
                            <li>(3) Según eso se enviará la consulta a la API de OPENAI y se redirigirá a una vista (Correspondiente al tema o apartado de la consulta), allí se mostrará la respuesta generada por GPT a la consulta realizada además del contenido estático ya establecido para el apartado (Mapas, gráficos).</li>
                            <li>(4) Al iniciar sesión por primera vez el usuario puede configurar preferencias (rubro y tipo de empresa) para que no sea necesario especificar cada que se realiza un consulta</li>
                            <li>(5) Se aceptan ideas xd</li>
                        </ul>
                    </ul> --}}
                    {{-- <h2>Especificaciones de la Aplicación</h2> --}}
                    <ol class="mt-6 text-gray-500 dark:text-gray-400 leading-relaxed space-y-4">
                    <li>
                        <h3>Estructura General de la Aplicación</h3>
                        <ol>
                        <li class="px-3">Pantalla Principal (Dashboard)
                            <ul>
                            <li>Bienvenida y Resumen</li>
                            <li>Sección Destacada con Visualizaciones (Mapas, Gráficos)</li>
                            <li>Navegación Clara y Acceso Rápido a Secciones Temáticas</li>
                            </ul>
                        </li>
                        <li class="mt-2 px-3">Secciones Temáticas Principales
                            <ul>
                            <li>Estrategias</li>
                            <li>Cuadro de Mando Integral</li>
                            <li>RSE (Responsabilidad Social Empresarial)</li>
                            <li>Riesgos</li>
                            <li>CRM (Customer Relationship Management)</li>
                            <li>Gestión del Rendimiento</li>
                            </ul>
                        </li>
                        </ol>
                    </li>

                    <li>
                        <h3>Especificaciones para Cada Sección Temática</h3>
                        <ol>
                        <li class="px-3">Tips
                            <ul>
                            <li>Consejos prácticos presentados en tarjetas informativas</li>
                            <li>Visualizaciones pequeñas acompañando los tips (gráficos, diagramas)</li>
                            </ul>
                        </li>
                        <li class="mt-2 px-3">Teoría
                            <ul>
                            <li>Fundamentos teóricos en formato de texto largo</li>
                            <li>Infografías y resúmenes visuales</li>
                            </ul>
                        </li>
                        <li class="mt-2 px-3">Ejemplos
                            <ul>
                            <li>Casos de estudio detallados</li>
                            <li>Plantillas y guías descargables</li>
                            </ul>
                        </li>
                        <li class="mt-2 px-3">Visualizaciones (Mapas y Gráficos)
                            <ul>
                            <li>Mapas interactivos con datos geoespaciales</li>
                            <li>Gráficos dinámicos con herramientas de exploración</li>
                            </ul>
                        </li>
                        <li class="mt-2 px-3">Consultas Adicionales (Integradas)
                            <ul>
                            <li>Panel lateral para consultas rápidas a la API de OpenAI</li>
                            <li>Respuestas generadas contextualizadas dentro de la sección actual</li>
                            </ul>
                        </li>
                        </ol>
                    </li>
                    <li>
                        <h3>Experiencia del Usuario (UX)</h3>
                        <ol>
                            <li>Configuración Inicial Guiada
                                <ul>
                                <li>Primera sesión con wizard para configurar preferencias</li>
                                <li>Tour interactivo para explicar las funcionalidades principales</li>
                                </ul>
                            </li>
                        </ol>
                    </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
