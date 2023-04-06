        <div class="min-h-screen bg-gray-100 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
            <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                    <div class="mt-6">
                        <div class="relative">
                            <div class="text-center">
                                <h3 class="text-lg font-medium text-gray-900">Acceso denegado</h3>
                                <p class="mt-2 text-sm text-gray-500">
                                    Lo siento, no tienes acceso a esta página.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6">
                        <a href="{{ url()->previous() }}"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Volver
                        </a>
                    </div>
                </div>
            </div>
        </div>
