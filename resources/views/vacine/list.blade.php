<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Vacinas cadastradas
        </h2>
    </x-slot>

    <div class="py-12 flex justify-center">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 w-full">

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 w-full">
                    <table class="w-full  text-white">
                        <thead>
                        @if($vacines->count() <=0)
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Não encontramos nehuma vacina cadastrada!
                            </h2>
                        @else
                            <tr class="w-full flex justify-between p-6">
                                <th class="py-3 px-6 text-center text-white">Nome</th>
                                <th class="py-3 px-6 text-left">Ações</th>
                            </tr>
                        @endif
                        </thead>
                        <tbody>
                        @foreach($vacines as $vacine)
                            <tr class="w-full flex justify-between items-center p-6 border-t border-gray-200">
                                <td class="py-3 px-6 w-3/4">{{ $vacine->nome }}</td>
                                <td class="py-3 px-6 gap-4 w-full flex flex-1 justify-items-center">
                                    <form action="{{ route('vacine.edit', $vacine->id_vacina) }}" method="post" class="inline">
                                        @csrf
                                        @method('GET')
                                        <x-primary-button>{{ __('Editar') }}</x-primary-button>
                                    </form>
                                    <form action="{{ route('vacine.show', $vacine->id_vacina) }}" method="post" class="inline">
                                        @csrf
                                        @method('GET')
                                        <x-primary-button>{{ __('Detalhes') }}</x-primary-button>
                                    </form>
                                    <form action="{{ route('vacine.destroy', $vacine->id_vacina) }}" method="post" class="inline">
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
