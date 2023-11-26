<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tienda Yupa') }}
        </h2>
    </x-slot>

    <div class="py-12 ">
        <div class=" flex flex-col max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="  bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-col p-6 text-gray-900">
                    <div class=" flex justify-center">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </div>
                    <label for="">Nombre Producto</label>
                   <input type="text" required>
                   <label for="">Referencia</label>
                   <input type="text" name="" id="" requiered>
                   <label for="">Detalles del Producto</label>
                   <textarea name="" id="" cols="30" rows="10"></textarea>
                    <button class="w-full ">Registrar</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
