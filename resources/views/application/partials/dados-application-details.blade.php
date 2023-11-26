<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Dados da Aplicação') }}
        </h2>
    </header>
    <div class="mt-6 space-y-6">
        <div>
            <x-input-label for="id_cidadao" :value="__('Cidadão')" />
            <select id="id_cidadao" name="id_cidadao" disabled class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required autofocus>
                    <option value="{{$application->nome}}" @if(old('id_cidadao', $application->id_cidado)) disabled selected @endif>{{$application->nome}}</option>
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('id_cidadao')" />
        </div>

        <div>
            <x-input-label for="id_vacina" :value="__('Vacina aplicada')" />
            <select id="id_vacina" name="id_vacina" disabled class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required autofocus>

                    <option value="{{$application->vacina}}" disabled @if(old('id_vacina', $application->vacina)) selected @endif>{{$application->vacina}}</option>

            </select>
            <x-input-error class="mt-2" :messages="$errors->get('id_vacina')" />
        </div>
        <div>
            <x-input-label for="lote" :value="__('Lote')" />
            <x-text-input id="lote" name="lote" disabled type="text" class="mt-1 block w-full" :value="old('lote', $application->lote)" required />
            <x-input-error class="mt-2" :messages="$errors->get('lote')" />
        </div>
        <div>
            <x-input-label for="dose" :value="__('Dose')" />
            <x-text-input id="dose" name="dose" disabled type="number" class="mt-1 block w-full" :value="old('dose', $application->dose)" required />
            <x-input-error class="mt-2" :messages="$errors->get('dose')" />
        </div>

        <div>
            <x-input-label for="data_aplicacao" :value="__('Data da aplicação')" />
            <x-text-input id="data_aplicacao" disabled name="data_aplicacao" type="date" class="mt-1 block w-full" :value="old('data_aplicacao', $application->data_aplicacao)" required />
            <x-input-error class="mt-2" :messages="$errors->get('data_aplicacao')" />
        </div>

        <div>
            <x-input-label for="nome_aplicador" :value="__('Agente aplicador')" />
            <x-text-input id="nome_aplicador" disabled name="nome_aplicador" type="text" class="mt-1 block w-full " disabled :value="old('nome_aplicador', $application->nome_aplicador)" required />
            <x-input-error class="mt-2" :messages="$errors->get('nome_aplicador')" />
        </div>

        <div>
            <x-input-label for="unidade_saude" :value="__('Unidade de saúde')" />
            <x-text-input id="unidade_saude" disabled name="unidade_saude" type="text" class="mt-1 block w-full" :value="old('unidade_saude', $application->unidade_saude)" required />
            <x-input-error class="mt-2" :messages="$errors->get('unidade_saude')" />
        </div>
    </div>
</section>
