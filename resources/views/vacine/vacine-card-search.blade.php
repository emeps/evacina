<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
             {{__('Buscar carteira de vacina')}}
        </h2>
    </x-slot>
    <form method="get" action="{{ request()->routeIs('citizen.search')? route('citizen.search'): route('citizen.searchByInlness') }}" class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg ">
                <div class="max-w-5xl "> <!-- Adicione a classe mx-auto aqui -->
                    @include('vacine.partials.search-form')
                </div>
            </div>
        </div>
    </form>


    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div >
                    @if(request()->routeIs('citizen.search'))
                        @include('vacine.partials.card-vacina-details')
                    @endif
                    @if(request()->routeIs('citizen.searchByInlness'))
                        @include('vacine.partials.card-vacina-by-doenca-details')
                    @endif
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
