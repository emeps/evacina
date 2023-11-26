<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Dados da vacina') }}
        </h2>
    </header>

    <div class="mt-6 space-y-6">
        <div>
            <x-input-label for="nome" :value="__('Nome do Produto')" />
            <x-text-input id="nome" name="nome" type="text" class="mt-1 block w-full" disabled :value="old('nome', $vacine->nome)" required />
            <x-input-error class="mt-2" :messages="$errors->get('nome')" />
        </div>

        <div>
            <x-input-label for="fabricante" :value="__('Fabricante')" />
            <x-text-input id="fabricante" name="fabricante" type="text" class="mt-1 block w-full" disabled :value="old('fabricante', $vacine->fabricante)" required />
            <x-input-error class="mt-2" :messages="$errors->get('fabricante')" />
        </div>

        <div>
            <x-input-label for="lote" :value="__('Lote')" />
            <x-text-input id="lote" name="lote" type="text" class="mt-1 block w-full" disabled :value="old('lote', $vacine->lote)" required />
            <x-input-error class="mt-2" :messages="$errors->get('lote')" />
        </div>

        <div>
            <x-input-label for="data_validade" :value="__('Data de Validade')" />
            <x-text-input id="data_validade" name="data_validade" type="date" class="mt-1 block w-full" disabled :value="old('data_validade', $vacine->data_validade)" required />
            <x-input-error class="mt-2" :messages="$errors->get('data_validade')" />
        </div>

        <div>
            <x-input-label for="doses" :value="__('Doses')" />
            <x-text-input id="doses" name="doses" type="number" class="mt-1 block w-full" disabled :value="old('doses', $vacine->doses)" required />
            <x-input-error class="mt-2" :messages="$errors->get('doses')" />
        </div>

        <div>
            <x-input-label for="doenca" :value="__('Doença')" />
            <x-text-input id="doenca" name="doenca" type="text" class="mt-1 block w-full" disabled :value="old('doenca', $vacine->doenca)" required />
            <x-input-error class="mt-2" :messages="$errors->get('doenca')" />
        </div>
    </div>

</section>
