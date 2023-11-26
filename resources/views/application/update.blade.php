<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
             {{__('Editar as informações da aplicação')}}
        </h2>
    </x-slot>
        <form method="post" action="{{ route('application.update', request()->route()->parameters) }}" class="py-12 flex justify-center">
        @csrf
        @method('PUT')
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('application.partials.dados-application')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('application.partials.confirm-send-form')
                </div>
            </div>
        </div>
    </form>
</x-app-layout>
