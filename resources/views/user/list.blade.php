<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Cidadãos cadastrados
        </h2>
    </x-slot>

    <div class="py-12 flex justify-center">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 w-full">


                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 w-full">
                            <table class="w-full  text-white">
                                <thead>
                                @if($citizens->count() <=0)
                                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                        Não encontramos nehuma pessoa cadastrada!
                                    </h2>
                                @else
                                <tr class="w-full flex justify-between">
                                    <th class="py-3 px-6 text-center text-white">Nome</th>
                                    <th class="py-3 px-6 text-left">Ações</th>
                                </tr>
                                @endif
                                </thead>
                                <tbody>
                                @foreach($citizens as $citizen)
                                        <tr class=" w-full flex justify-between">
                                            <td class="py-3 px-6 w-3/4">{{ $citizen->nome }}</td>
                                            <td class="py-3 px-6 gap-4 w-full flex flex-1 justify-items-center">
                                               <form action="{{ route('citizen.show', $citizen->id_cidadao) }}" method="post" class="inline">
                                                    @csrf
                                                    @method('GET')
                                                    <x-primary-button>{{ __('Editar') }}</x-primary-button>
                                                </form>
                                                <form action="{{ route('citizen.destroy', 1) }}" method="post" class="inline">
                                                    @csrf
                                                    @method('GET')
                                                    <x-primary-button>{{ __('Vacinas') }}</x-primary-button>
                                                </form>
                                                <form action="{{ route('citizen.destroy', $citizen->id_cidadao) }}" method="post" class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <x-primary-button>{{ __('Deletar') }}</x-primary-button>
                                                </form>
                                            </td>
                                        </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>



        </div>
    </div>
</x-app-layout>
