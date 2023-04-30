@extends('../plantilla/plantilla')

@section('title', 'Sobre Nosotros')

@section('main')

    <div class="flex justify-center bg-[#E5E7EB]">
        <video class="h-screen object-fill w-full rounded-xl" src="{{ asset('video/islas.mp4') }}" autoplay muted
            loop></video>
        <div class="absolute top-[-5rem] left-0 w-full h-full flex justify-center items-center">
            <img class="w-60%" src="{{ asset('img/landing/icons/logoSinFondo.png') }}" alt="logo">
        </div>
        <div class="absolute top-[7rem] left-0 w-full h-full flex justify-center items-center">
            <span class="text-5xl font-bold text-gray-300 
               opacity-80">No te pongas</span>
        </div>
        <div class="absolute top-[10rem] left-0 w-full h-full flex justify-center items-center">
            <span
                class="text-7xl font-bold text-white relative underline underline-offset-3 decoration-8 decoration-[#243859]">Limites</span>
        </div>
    </div>
    <section class=" bg-[#E5E7EB]">
        <div class="container mx-auto">
            <div class="grid grid-rows-1">
                <div class="grid grid-cols-1">
                    <div class="mt-10 flex justify-center">
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
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <div class="grid grid-cols-2 items-center w-[60%] gap-5 justify-items-center">
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
                            <img class="object-none h-96 w-[80rem] rounded-xl" src="{{ asset('img/japon.jpg') }}"
                                alt="japon">
                        </div>
                    </div>
                    <div class="mt-10 flex justify-center">
                        <h1 class="text-6xl font-semibold">Sobre<span
                                class="font-bold text-[#243859] underline underline-offset-3 decoration-8 decoration-[#c99924]">Nosotros</span>
                        </h1>
                    </div>
                    <div data-aos="flip-right" class="flex justify-center mt-10">
                        <div class="grid grid-cols-1 items-center w-[60%] justify-items-center">
                            <div class="mt-10 bg-white rounded-xl flex justify-center shadow-lg items-center">
                                <div class="w-[50%] p-7 flex justify-center flex-col gap-5">
                                    <h2 class="text-2xl text-center">Lorem Ipsum</h2>
                                    <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
                                        Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año
                                        1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido
                                        usó una galería de textos y los mezcló de tal manera que logró hacer un libro de
                                        textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto
                                        de relleno en documentos electrónicos, quedando esencialmente igual al original.</p>
                                </div>
                                <div class="w-[50%]">
                                    <img class=" rounded-e-xl" src="{{ asset('img/me.png') }}" alt="me">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="flip-left" class="flex justify-center mt-10">
                        <div class="grid grid-cols-1 items-center w-[60%] justify-items-center">
                            <div class="mt-10 bg-white rounded-xl flex justify-center shadow-lg items-center">
                                <div class="w-[50%]">
                                    <img class="h-full rounded-s-xl" src="https://via.placeholder.com/500x500"
                                        alt="">
                                </div>
                                <div class="w-[50%] p-7 flex justify-center flex-col gap-5">
                                    <h2 class="text-2xl text-center">Lorem Ipsum</h2>
                                    <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
                                        Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año
                                        1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido
                                        usó una galería de textos y los mezcló de tal manera que logró hacer un libro de
                                        textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto
                                        de relleno en documentos electrónicos, quedando esencialmente igual al original.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center mt-10 mb-24">
                        <div class="grid grid-cols-3 w-[90%] gap-7">

                            <div data-aos="fade-down"
                                class="mt-10 p-10 gap-10 bg-white rounded-xl flex justify-center flex-col shadow-lg items-center">
                                <h2 class="text-2xl font-bold">LinkedIn</h2>
                                <a target="_blank"
                                    href="https://www.linkedin.com/in/%C3%A1lvaro-mart%C3%ADn-crespo-bb9aa5246/">
                                    <img class="w-[4rem] transition-all ease-in-out duration-300 hover:w-[6rem]"
                                        src="{{ asset('img/svg/linkedin.svg') }}" alt="linkedin">
                                </a>
                            </div>
                            <div data-aos="fade-down"
                                class="mt-10 p-10 gap-10 bg-white rounded-xl flex justify-center flex-col shadow-lg items-center">
                                <h2 class="text-2xl font-bold">Portfolio</h2>
                                <a target="_blank" href="https://alvarodev.vercel.app/">
                                    <img class="w-[4rem] transition-all ease-in-out duration-300 hover:w-[6rem]"
                                        src="{{ asset('img/svg/vite.svg') }}" alt="linkedin">
                                </a>
                            </div>
                            <div data-aos="fade-down"
                                class="mt-10 p-10 gap-10 bg-white rounded-xl flex justify-center flex-col shadow-lg items-center">
                                <h2 class="text-2xl font-bold">GitHub</h2>
                                <a target="_blank" href="https://github.com/AlvaroMartinCrespo">
                                    <img class="w-[4rem] transition-all ease-in-out duration-300 hover:w-[6rem]"
                                        src="{{ asset('img/svg/github.svg') }}" alt="linkedin">
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
