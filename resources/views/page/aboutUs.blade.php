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
                class="text-7xl font-bold text-white relative underline underline-offset-3 decoration-8 decoration-blue-400">Limites</span>
        </div>
    </div>
    <section class=" bg-[#E5E7EB]">
        <div class="container mx-auto">
            <div class="grid grid-rows-1">
                <div class="grid grid-cols-1">
                    <div class="mt-10 flex justify-center">
                        <h1 class="text-4xl font-bold">Sobre Nosotros</h1>
                    </div>
                    <div class="flex justify-center">
                        <div
                            class="mt-10 bg-white rounded-xl w-[60%] flex justify-center shadow-lg flex-col items-center p-10">
                            <h2 class="text-xl font-semibold">Lorem Ipsum</h2>
                            <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem
                                Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un
                                impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de
                                textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo
                                sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos
                                electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la
                                creación de las hojas " Letraset", las cuales contenian pasajes de Lorem Ipsum, y más
                                recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye
                                versiones de Lorem
                                Ipsum.</p>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <div class="grid grid-cols-2 items-center w-[60%] gap-5 justify-items-center">
                            <div class="mt-10 bg-white rounded-xl flex justify-center shadow-lg flex-col items-center p-10">
                                <h2 class="text-xl font-semibold">Lorem Ipsum</h2>
                                <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
                                    Lorem
                                    Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando
                                    un
                                    impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de
                                    textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo
                                    sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos
                                    electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con
                                    la
                                    creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más
                                    recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual
                                    incluye
                                    versiones de Lorem Ipsum.</p>
                            </div>
                            <div class="mt-10 bg-white rounded-xl flex justify-center shadow-lg flex-col items-center p-10">
                                <h2 class="text-xl font-semibold">Lorem Ipsum</h2>
                                <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
                                    Lorem
                                    Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando
                                    un
                                    impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de
                                    textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo
                                    sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos
                                    electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con
                                    la
                                    creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más
                                    recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual
                                    incluye
                                    versiones de Lorem Ipsum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <div class="mt-20 flex justify-center shadow-lg rounded-xl flex-col items-center">
                            <img class="rounded-xl" src="https://via.placeholder.com/1000x400" alt="">
                        </div>
                    </div>
                    <div data-aos="flip-right" class="flex justify-center mt-10">
                        <div class="grid grid-cols-1 items-center w-[60%] justify-items-center">
                            <div class="mt-10 bg-white rounded-xl flex justify-center shadow-lg items-center">
                                <div class="w-[50%] p-7">
                                    <h2 class="text-2xl">Lorem Ipsum</h2>
                                    <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
                                        Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año
                                        1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido
                                        usó una galería de textos y los mezcló de tal manera que logró hacer un libro de
                                        textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto
                                        de relleno en documentos electrónicos, quedando esencialmente igual al original.</p>
                                </div>
                                <div class="w-[50%]">
                                    <img class="h-full rounded-e-xl" src="https://via.placeholder.com/500x500"
                                        alt="">
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
                                <div class="w-[50%] p-7">
                                    <h2 class="text-2xl">Lorem Ipsum</h2>
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
