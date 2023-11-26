<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Aplicações de vacinas
        </h2>
    </x-slot>

    <div class="py-12 flex justify-center">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 w-full">

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 w-full">
                    <table class="w-full text-white">
                        <thead>
                        @if($applications->count() <=0)
                            <h2 class="font-semibold text-xl text-gray-800  leading-tight">
                                Não encontramos nenhum aplicação cadastrada!
                            </h2>
                        @else
                            <tr class="w-full flex justify-between p-6 text-justify">
                                <th class="py-3 px-6 w-3/4">Nome</th>
                                <th class="py-3 px-6 w-3/4">Vacina</th>
                                <th class="py-3 px-6 w-3/4">Ações</th>
                            </tr>
                        @endif
                        </thead>
                        <tbody>
                        @foreach($applications as $application)
                            <tr class="w-full flex justify-between items-center p-6 border-t border-gray-200 ">
                                <td class="py-3 px-6 w-3/4">{{ $application->nome }}</td>
                                <td class="py-3 px-6 w-3/4">{{ $application->vacina }}</td>
                                <td class="py-3 px-6 gap-4 w-full flex flex-1 justify-items-center">
                                    <form action="{{ route('application.edit', $application->id_campanha) }}" method="post" class="inline">
                                        @csrf
                                        @method('GET')
                                        <x-primary-button>{{ __('Editar') }}</x-primary-button>
                                    </form>
                                    <form action="{{ route('application.show', $application->id_campanha) }}" method="post" class="inline">
                                        @csrf
                                        @method('GET')
                                        <x-primary-button>{{ __('Detalhes') }}</x-primary-button>
                                    </form>
                                    <form action="{{ route('application.destroy', $application->id_campanha) }}" method="post" class="inline">
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

'


        </div>
    </div>
</x-app-layout>
