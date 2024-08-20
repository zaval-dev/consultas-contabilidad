<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Responsabilidad Social Empresarial') }}
        </h2>
        <x-chat-g-p-t />
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div
                    class="p-6 lg:p-8 bg-gray-800 dark:bg-gray-800 dark:via-transparent border-b border-gray-200 dark:border-gray-700 text-white">



                    <!-- Mapa Estratégico -->
                    <section id="mapa-estrategico" class="my-8">
                        <h2 class="text-3xl font-bold mb-4">DEFINICIÓN</h2>
                        <div class="bg-gray-800 shadow-md rounded p-6 mb-8">
                            <h3 class="text-xl font-semibold mb-4">DEFINICIÓN</h3>
                            <p class="mb-4">
                                Es la practica voluntaria de las empresas que
                                refleja el cómo estas se hacen responsables del
                                impacto económico, social y ambiental que tienen
                                en la sociedad, con el fin de apoyar el desarrollo
                                sostenible.

                            </p>
                        </div>

                        <div class="bg-gray-800 shadow-md rounded p-6 mb-8">
                            <h3 class="text-xl font-semibold mb-4">Objetivos de la Responsabilidad Social Empresarial
                            </h3>
                            <ul class="list-disc list-inside">
                                <li class="mb-2">**Contribuir al desarrollo sostenible**: Equilibrar la sostenibilidad
                                    con la productividad, asegurando que las operaciones no dañen el medio ambiente y
                                    promoviendo el desarrollo social y económico de las comunidades locales.</li>
                                <li class="mb-2">**Mejorar la imagen de la empresa**: Realizar prácticas éticas y
                                    transparentes, como el respeto a los derechos humanos y laborales, mejorando la
                                    imagen ante la sociedad.</li>
                                <li class="mb-2">**Aumentar la competitividad**: Mejorar la eficiencia, reducir
                                    costos, y aumentar la innovación y creatividad en la empresa.</li>
                                <li class="mb-2">**Mejorar el clima laboral**: Promover la equidad, la igualdad de
                                    oportunidades y el respeto a los derechos de los trabajadores, contribuyendo a la
                                    motivación, productividad y satisfacción de los empleados.</li>
                            </ul>
                        </div>
                    </section>

                    <!-- Tipos de Responsabilidad Social Empresarial -->
                    <section id="tipos-rse" class="my-8">
                        <h2 class="text-3xl font-bold mb-4">Tipos de Responsabilidad Social Empresarial</h2>
                        <div class="bg-gray-800 shadow-md rounded p-6 mb-8">
                            <h3 class="text-xl font-semibold mb-4">Responsabilidad Social Corporativa Interna</h3>
                            <ul class="list-disc list-inside">
                                <li class="mb-2">**Condiciones Laborales**: Garantizar un entorno de trabajo seguro y
                                    saludable.</li>
                                <li class="mb-2">**Desarrollo Profesional**: Invertir en la capacitación y desarrollo
                                    profesional de los empleados.</li>
                                <li class="mb-2">**Salud y Bienestar**: Implementar programas para mejorar la calidad
                                    de vida de los empleados.</li>
                            </ul>
                        </div>

                        <div class="bg-gray-800 shadow-md rounded p-6 mb-8">
                            <h3 class="text-xl font-semibold mb-4">Responsabilidad Social Corporativa Externa</h3>
                            <ul class="list-disc list-inside">
                                <li class="mb-2">**Responsabilidad Ambiental**: Implementar prácticas sostenibles para
                                    reducir la huella de carbono.</li>
                                <li class="mb-2">**Compromiso Comunitario**: Participar en el desarrollo de la
                                    comunidad local.</li>
                                <li class="mb-2">**Prácticas de Negocios Éticas**: Adoptar estándares éticos en todas
                                    las operaciones comerciales.</li>
                            </ul>
                        </div>

                        <!-- Responsabilidad Económica -->
                        <div class="flex flex-col md:flex-row bg-gray-800 shadow-md rounded p-6 mb-8">
                            <div class="md:w-1/3 flex items-center justify-center mb-4 md:mb-0">
                                <img src="/img/economica.png" alt="Responsabilidad Económica"
                                    class="rounded-lg shadow-md">
                            </div>
                            <div class="md:w-2/3">
                                <h3 class="text-xl font-semibold mb-4">Responsabilidad Económica</h3>
                                <ul class="list-disc list-inside">
                                    <li class="mb-2">**Sostenibilidad Financiera**: Garantizar la viabilidad económica
                                        a largo plazo de la empresa, creando valor para los accionistas y contribuyendo
                                        al bienestar económico de la sociedad.</li>
                                    <li class="mb-2">**Inversiones Responsables**: Invertir en proyectos que generen
                                        beneficios económicos y sociales, como energías renovables y tecnologías verdes.
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Responsabilidad Cultural -->
                        <div class="flex flex-col md:flex-row bg-gray-800 shadow-md rounded p-6 mb-8">
                            <div class="md:w-1/3 flex items-center justify-center mb-4 md:mb-0">
                                <img src="/img/cultural.png" alt="Responsabilidad Cultural"
                                    class="rounded-lg shadow-md">
                            </div>
                            <div class="md:w-2/3">
                                <h3 class="text-xl font-semibold mb-4">Responsabilidad Cultural</h3>
                                <ul class="list-disc list-inside">
                                    <li class="mb-2">**Preservación Cultural**: Apoyar y promover la conservación del
                                        patrimonio cultural y las tradiciones locales.</li>
                                    <li class="mb-2">**Educación y Cultura**: Financiar proyectos educativos y
                                        culturales que beneficien a la comunidad y promuevan el desarrollo intelectual y
                                        artístico.</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Responsabilidad con los Clientes -->
                        <div class="flex flex-col md:flex-row bg-gray-800 shadow-md rounded p-6 mb-8">
                            <div class="md:w-1/3 flex items-center justify-center mb-4 md:mb-0">
                                <img src="/img/clientes.png" alt="Responsabilidad con los Clientes"
                                    class="rounded-lg shadow-md">
                            </div>
                            <div class="md:w-2/3">
                                <h3 class="text-xl font-semibold mb-4">Responsabilidad con los Clientes</h3>
                                <ul class="list-disc list-inside">
                                    <li class="mb-2">**Calidad y Seguridad del Producto**: Asegurar que los productos
                                        y servicios ofrecidos sean seguros, de alta calidad y cumplan con las normativas
                                        vigentes.</li>
                                    <li class="mb-2">**Satisfacción del Cliente**: Implementar políticas y prácticas
                                        para garantizar la satisfacción del cliente y la resolución de sus quejas y
                                        sugerencias.</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Responsabilidad Filantrópica -->
                        <div class="flex flex-col md:flex-row bg-gray-800 shadow-md rounded p-6 mb-8">
                            <div class="md:w-1/3 flex items-center justify-center mb-4 md:mb-0">
                                <img src="/img/filantropica.png" alt="Responsabilidad Filantrópica"
                                    class="rounded-lg shadow-md">
                            </div>
                            <div class="md:w-2/3">
                                <h3 class="text-xl font-semibold mb-4">Responsabilidad Filantrópica</h3>
                                <ul class="list-disc list-inside">
                                    <li class="mb-2">**Donaciones y Patrocinios**: Realizar contribuciones financieras
                                        a causas benéficas y organizaciones sin fines de lucro.</li>
                                    <li class="mb-2">**Voluntariado Corporativo**: Fomentar la participación de los
                                        empleados en actividades de voluntariado durante su tiempo libre o como parte de
                                        sus funciones laborales.</li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <!-- Beneficios de la RSE -->
                    <section id="beneficios-rse" class="my-8">
                        <h2 class="text-3xl font-bold mb-4">Beneficios de la Responsabilidad Social Empresarial (RSE)
                        </h2>
                        <div class="bg-gray-800 shadow-md rounded p-6 mb-8">
                            <ul class="list-disc list-inside">
                                <li class="mb-2">**Contribuye al desarrollo sostenible**: Disminuye el impacto
                                    ambiental negativo, beneficiando a futuras generaciones.</li>
                                <li class="mb-2">**Mejora la reputación y la imagen de la empresa**: Fortalece las
                                    relaciones con grupos de interés.</li>
                                <li class="mb-2">**Fomenta la lealtad de los clientes**: Los clientes prefieren marcas
                                    con impacto social y ambiental positivo.</li>
                                <li class="mb-2">**Aumenta la motivación y la satisfacción de los empleados**: Los
                                    empleados se sienten más orgullosos y motivados cuando la empresa tiene un impacto
                                    positivo.</li>
                                <li class="mb-2">**Genera eficiencia y ahorros**: Reduce el uso de recursos, energía,
                                    y costos operativos, aumentando la rentabilidad.</li>
                            </ul>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
