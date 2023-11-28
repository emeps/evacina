<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Dados da carteira') }}
        </h2>
    </header>

    <div class="mt-6 space-y-6">
        @if($resultados->count() == 0)
            <h4 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Dados da carteira solicitada não foram encontradas') }}
            </h4>
        @else
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Aplicações') }}
            </h2>
        @endif
            <div class="flex flex-wrap justify-items-center justify-between ">

                @foreach($resultados as $resultado)
                    <div class="p-4 rounded-lg shadow-md ">
                        <div>
                            <x-input-label for="nome" :value="__('Nome do cidadão')" />
                            <x-text-input id="nome" name="nome" type="text" class="my-2 block w-full" disabled :value="old('nome', $resultado->nome)" required />
                            <x-input-error class="mt-2" :messages="$errors->get('nome')" />
                        </div>

                        <div>
                            <x-input-label for="fabricante" :value="__('Número da Carteira Nacional de Saúde')" />
                            <x-text-input id="fabricante" name="fabricante" type="text" class="my-2 block w-full" disabled :value="old('fabricante', $resultado->cns)" required />
                            <x-input-error class="mt-2" :messages="$errors->get('fabricante')" />
                        </div>
                        <div>
                            <x-input-label for="cpf" :value="__('CPF')" />
                            <x-text-input id="cpf" name="cpf" type="text" class="my-2 block w-full" disabled :value="old('cpf', $resultado->cpf)" required />
                            <x-input-error class="mt-2" :messages="$errors->get('doenca')" />
                        </div>

                        <div>
                            <x-input-label for="lote" :value="__('Data da aplicação')" />
                            <x-text-input id="lote" name="lote" type="date" class="my-2 block w-full" disabled :value="old('lote', $resultado->data_aplicacao)" required />
                            <x-input-error class="mt-2" :messages="$errors->get('lote')" />
                        </div>

                        <div>
                            <x-input-label for="data_validade" :value="__('Doses tomadas')" />
                            <x-text-input id="data_validade" name="data_validade" type="number" class="my-2 block w-full" disabled :value="old('dose', $resultado->dose)" required />
                            <x-input-error class="mt-2" :messages="$errors->get('data_validade')" />
                        </div>

                        <div>
                            <x-input-label for="doses" :value="__('Vacina')" />
                            <x-text-input id="doses" name="doses" type="text" class="my-2 block w-full" disabled :value="old('vacina', $resultado->vacina)" required />
                            <x-input-error class="mt-2" :messages="$errors->get('doses')" />
                        </div>

                        <div>
                            <x-input-label for="doenca" :value="__('Lote')" />
                            <x-text-input id="doenca" name="doenca" type="text" class="my-2 block w-full" disabled :value="old('lote', $resultado->lote)" required />
                            <x-input-error class="mt-2" :messages="$errors->get('doenca')" />
                        </div>

                        <div>
                            <x-input-label for="doenca" :value="__('Unidade de Saúde')" />
                            <x-text-input id="doenca" name="doenca" type="text" class="my-2 block w-full" disabled :value="old('unidade_saude', $resultado->unidade_saude)" required />
                            <x-input-error class="mt-2" :messages="$errors->get('doenca')" />
                        </div>


                    </div>
                @endforeach
            </div>

    </div>
</section>
