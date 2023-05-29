@extends('../plantilla/plantilla')

@section('title', 'Sobre Nosotros')

@section('main')

    <div class="flex justify-center bg-[#E5E7EB]">
        <video class="h-screen object-fill w-full rounded-xl" src="{{ asset('video/islas.mp4') }}" autoplay muted
            loop></video>
        <div class="absolute top-[-5rem] left-0 w-full h-full flex justify-center items-center">
            <img class="w-60%" src="{{ asset('img/landing/icons/logoSinFondo.png') }}" alt="logo">
            <div class="absolute bottom-[10rem] left-0 w-full flex justify-center items-center">
                <span id="letters1" class="text-5xl font-bold text-gray-300 
               opacity-80"></span>
            </div>
            <div class="absolute bottom-[6rem] left-0 w-full flex justify-center items-center">
                <span id="limitedLetters"
                    class="text-7xl font-bold text-white relative underline underline-offset-3 decoration-8 decoration-[#243859]"></span>
            </div>
        </div>

    </div>
    <section class=" bg-[#E5E7EB]">
        <div class="container mx-auto">
            <div class="grid grid-rows-1">
                <div class="grid grid-cols-1 justify-items-center">
                    <div class="pt-[5rem] flex justify-center">
                        <h1 class="text-6xl font-semibold">Sobre<span
                                class="font-bold text-[#243859] underline underline-offset-3 decoration-8 decoration-[#c99924]">Howeb</span>
                        </h1>
                    </div>
                    <div class="flex justify-center">
                        <div
                            class="mt-10 bg-white rounded-xl w-[60%] flex justify-center shadow-lg flex-col items-center  gap-5 p-10">
                            <h2 class="text-3xl font-bold">HOWEB</h2>
                            <p class="text-justify">"Howeb es una aplicación de reserva de alojamientos que ofrece varias
                                opciones para diferentes tipos de usuarios. Cada usuario tiene acceso a funcionalidades
                                específicas adaptadas a sus necesidades."
                            </p>
                            <span>
                                <button id="myButton" class="underline">
                                    Terminos y condiciones
                                </button>
                            </span>
                            <div id="myModal" class="bg-slate-400 fixed inset-0 overflow-y-auto hidden z-50">
                                <div class="flex items-center justify-center min-h-screen p-6 z-50">
                                    <div class="bg-white rounded-lg shadow-xl p-4 z-50">
                                        @include('page/termsAndConditions')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <div class="grid lg:grid-cols-2 grid-cols-1 items-center w-[60%] gap-5 justify-items-center">
                            <div
                                class="mt-10 bg-white rounded-xl gap-5 flex justify-center shadow-lg flex-col items-center p-10">
                                <h2 class="text-2xl font-semibold">Objetivos</h2>
                                <p class="text-justify"><span class="font-semibold">Mejorar la experiencia de
                                        usuario:</span> Howeb puede buscar mejorar la
                                    experiencia de usuario a través de la optimización de su interfaz y la mejora de la
                                    navegación en su aplicación. Esto podría incluir la implementación de nuevas
                                    funcionalidades, una mejor organización de los contenidos y una mayor facilidad de uso.
                                    <br>

                                    <span class="font-semibold">Expandir la oferta de alojamientos:</span> Howeb podría
                                    buscar expandir su oferta de
                                    alojamientos para atraer a un público más amplio. Esto podría incluir la inclusión de
                                    alojamientos en nuevas ubicaciones o la inclusión de opciones más económicas o de mayor
                                    calidad.
                                </p>
                            </div>
                            <div
                                class="mt-10 bg-white rounded-xl flex gap-5 justify-center shadow-lg flex-col items-center p-10">
                                <h2 class="text-2xl font-semibold">Visión</h2>
                                <p class="text-justify">"En Howeb, nuestra visión es convertirnos en la aplicación líder en
                                    reservas de alojamientos, ofreciendo a nuestros usuarios la experiencia más completa y
                                    personalizada posible. Nos esforzamos por proporcionar una plataforma de reservas de
                                    alojamientos fácil de usar, que ofrezca una amplia variedad de opciones de alojamiento y
                                    que se adapte a las necesidades específicas de cada usuario. Queremos ser reconocidos
                                    como un referente en el sector de reservas de alojamientos y estamos comprometidos en
                                    seguir mejorando nuestra plataforma para satisfacer las necesidades de nuestros usuarios
                                    y superar sus expectativas."</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <div class="mt-20 flex justify-center shadow-lg rounded-xl flex-col items-center">
                            <img class="object-none h-96 w-[80rem] rounded-xl shadow-lg" src="{{ asset('img/japon.jpg') }}"
                                alt="japon">
                        </div>
                    </div>
                    <div class="pt-[5rem] flex justify-center">
                        <h1 class="text-6xl font-semibold">Sobre<span
                                class="font-bold text-[#243859] underline underline-offset-3 decoration-8 decoration-[#c99924]">Nosotros</span>
                        </h1>
                    </div>
                    <div data-aos="flip-right" class="flex justify-center mt-10">
                        <div class="grid grid-cols-1 items-center w-[60%] justify-items-center">
                            <div
                                class="mt-10 lg:flex-row flex-col bg-white rounded-xl flex justify-center shadow-lg items-center">
                                <div class="lg:w-[50%] w-full p-7 flex justify-center flex-col gap-5">
                                    <h2 class="text-2xl text-center font-bold">Álvaro Martín Crespo</h2>
                                    <p>Apasionado por aprender nuevas habilidades y tecnologías para mejorar
                                        sus capacidades y hacer que sus proyectos sean aún mejores. Su enfoque está en la
                                        creación de aplicaciones web interactivas y dinámicas que brinden una excelente
                                        experiencia de usuario.<br><br>

                                        Su pasión por la tecnología y la programación lo/la ha llevado a trabajar en
                                        diferentes proyectos, desde pequeñas aplicaciones hasta sitios web más grandes y
                                        complejos. Siempre se esfuerza por utilizar las mejores prácticas y las tecnologías
                                        más avanzadas para crear soluciones innovadoras y efectivas.</p>
                                </div>
                                <div class="lg:w-[50%] w-full">
                                    <img class="lg:rounded-e-xl object-cover h-[30rem] w-full"
                                        src="{{ asset('img/me.png') }}" alt="me">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="flip-left" class="flex justify-center mt-10">
                        <div class="grid grid-cols-1 items-center w-[60%] justify-items-center">
                            <div
                                class="mt-10 bg-white lg:gap-0 gap-5 lg:flex-row flex-col rounded-xl flex justify-center shadow-lg items-center">
                                <div class="lg:w-[50%] w-full">
                                    <img class="lg:rounded-s-xl h-[25rem] object-none" src="{{ asset('img/code.png') }}"
                                        alt="code">
                                </div>
                                <div class="lg:w-[50%] w-full px-7 lg:pb-0 pb-7 flex justify-center flex-col gap-5">
                                    <h2 class="text-2xl text-center font-bold">Proyectos</h2>
                                    <p>He realizado múltiples proyectos utilizando React junto con Vite para mejorar el
                                        rendimiento y agilidad del desarrollo. Además, he llevado a cabo diversos proyectos
                                        utilizando Laravel, un framework de PHP ampliamente reconocido y utilizado en el
                                        desarrollo web.En mi experiencia, también estoy familiarizado con tecnologías como
                                        Bootstrap y Tailwind, que son frameworks de CSS que permiten el diseño y desarrollo
                                        de interfaces de usuario modernas y responsivas. Estas herramientas me han permitido
                                        crear interfaces atractivas y funcionales en mis proyectos.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="grid lg:grid-cols-3 grid-cols-1 w-[90%] gap-7 mt-10">
                        <div data-aos="fade-down"
                            class="mt-10 p-10 gap-10 bg-white rounded-xl flex justify-center flex-col shadow-lg items-center">
                            <h2 class="text-2xl font-bold">LinkedIn</h2>
                            <a target="_blank" href="https://www.linkedin.com/in/%C3%A1lvaro-mart%C3%ADn-crespo-bb9aa5246/">
                                <img class="w-[4rem] transition-all ease-in-out duration-300 hover:scale-150"
                                    src="{{ asset('img/svg/linkedin.svg') }}" alt="linkedin">
                            </a>
                            <p class="font-bold text-sm-center flex justify-center items-center gap-2">Curriculum <span
                                    class="text-3xl">·</span> Contacto</p>
                        </div>
                        <div data-aos="fade-down"
                            class="mt-10 p-10 gap-10 bg-white rounded-xl flex justify-center flex-col shadow-lg items-center">
                            <h2 class="text-2xl font-bold">Portfolio</h2>
                            <a target="_blank" href="https://alvarodev.vercel.app/">
                                <img class="w-[4rem] transition-all ease-in-out duration-300 hover:scale-150"
                                    src="{{ asset('img/svg/vite.svg') }}" alt="linkedin">
                            </a>
                            <p class="font-bold text-sm-center flex justify-center items-center gap-2">Información <span
                                    class="text-3xl">·</span> Proyectos <span class="text-3xl">·</span> Contacto</p>
                        </div>
                        <div data-aos="fade-down"
                            class="mt-10 p-8 gap-8 bg-white justify-center rounded-xl flex flex-col shadow-lg items-center">
                            <h2 class="text-2xl font-bold">GitHub</h2>
                            <a target="_blank" href="https://github.com/AlvaroMartinCrespo">
                                <img class="w-[4rem] transition-all ease-in-out duration-300 hover:scale-150"
                                    src="{{ asset('img/svg/github.svg') }}" alt="linkedin">
                            </a>
                            <p class="font-bold text-sm-center flex justify-center items-center gap-2">Proyectos <span
                                    class="text-3xl">·</span> Trabajos</p>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </section>

@endsection

<script src="{{ asset('js/aboutUs.js') }}"></script>
