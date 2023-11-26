<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
             {{__('Informações sobre aplicação da vacina')}}
        </h2>
    </x-slot>
    <div class="py-12 flex justify-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('application.partials.dados-application-details')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <div class="space-y-6">
                    </div>
                    <section class="space-y-6" >
                        <header>
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                {{ __('Sobre as informações') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                {{ __('As informações dadas acima é de responsabilidade do agente de saúde. Em caso de inconsistência procurar o responsável para que seja corrigido!') }}
                            </p>
                        </header>
                    </section>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
