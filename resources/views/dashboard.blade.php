<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Panel principal') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-3xl font-bold text-indigo-600 mb-2">
                        ¡Bienvenido de nuevo, {{ Auth::user()->name }}!
                    </h1>
                    
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-bold mb-4 text-gray-800 dark:text-gray-200 border-b pb-2">Tus datos</h3>
                    <p><strong>Correo:</strong> {{ Auth::user()->email }}</p>
                    <p><strong>ID de Usuario:</strong> #{{ Auth::user()->id }}</p>
                    <p class="mt-4 text-sm text-gray-500">Cuenta creada el: {{ Auth::user()->created_at->format('d/m/Y') }}</p>
                </div>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-bold mb-4 text-gray-800 dark:text-gray-200 border-b pb-2">Seguridad</h3>
                    
                    @if(Auth::user()->google_id)
                        <div class="flex items-center bg-green-50 dark:bg-green-900 p-4 rounded-lg border border-green-200">
                            <div class="text-3xl mr-4">🔒</div>
                            <div>
                                <p class="font-bold text-green-700 dark:text-green-300">Google Auth Activo</p>
                                <p class="text-sm text-green-600 dark:text-green-400">Tu cuenta está protegida y vinculada a Google.</p>
                            </div>
                        </div>
                    @else
                        <div class="flex items-center bg-yellow-50 dark:bg-yellow-900 p-4 rounded-lg border border-yellow-200">
                            <div class="text-3xl mr-4">🔑</div>
                            <div>
                                <p class="font-bold text-yellow-700 dark:text-yellow-300">Acceso estándar</p>
                                <p class="text-sm text-yellow-600 dark:text-yellow-400">Has ingresado usando contraseña tradicional.</p>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>