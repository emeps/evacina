<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Dados pessoais') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Ao inserir seus dados, você concorda com nossa política de privacidade. Essas informações são essenciais para oferecermos um serviço personalizado e serão mantidas de forma segura. ") }}
        </p>
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Certifique de fornecer as informações com precisão. Essa informações são importantes para garantir experiência personalizada e segura.") }}
        </p>
    </header>


    <div class="mt-6 space-y-6">
        <div>
            <x-input-label for="nome" :value="__('Nome completo')" />
            <x-text-input id="nome" name="nome" type="text" class="mt-1 block w-full" :value="old('nome', $user->nome)" required autofocus autocomplete="nome" />
            <x-input-error class="mt-2" :messages="$errors->get('nome')" />
        </div>

        <div>
            <x-input-label for="cpf" :value="__('CPF')" />
            <x-text-input id="cpf" name="cpf" type="text" class="mt-1 block w-full" :value="old('cpf', $user->cpf)" required autocomplete="cpf" />
            <x-input-error class="mt-2" :messages="$errors->get('cpf')" />
        </div>
        <div>
            <x-input-label for="data_nascimento" :value="__('Data de Nascimento')" />
            <x-text-input id="data_nascimento" name="data_nascimento" type="date" class="mt-1 block w-full" :value="old('data_nascimento', $user->data_nascimento)" required autofocus autocomplete="data_nascimento" />
            <x-input-error class="mt-2" :messages="$errors->get('data_nascimento')" />
        </div>

        <div>
            <x-input-label for="nome_mae" :value="__('Nome da mãe')" />
            <x-text-input id="nome_mae" name="nome_mae" type="text" class="mt-1 block w-full" :value="old('nome_mae', $user->nome_mae)"  autocomplete="nome_mae" />
            <x-input-error class="mt-2" :messages="$errors->get('nome_mae')" />
        </div>
        <div>
            <x-input-label for="nome_pai" :value="__('Nome do pai')" />
            <x-text-input id="nome_pai" name="nome_pai" type="text" class="mt-1 block w-full" :value="old('nome_pai', $user->nome_pai)"  autofocus autocomplete="nome_pai" />
            <x-input-error class="mt-2" :messages="$errors->get('nome_pai')" />
        </div>

        <div>
            <x-input-label for="sexo" :value="__('Gênero')" />
            <div class="flex mt-1 space-x-4 justify-between">
                <div class="flex items-center">
                    <input type="radio" id="masculino" name="sexo" value="m" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" @if(old('sexo', $user->sexo) === 'Masculino') checked @endif required>
                    <label for="masculino" class="ml-2 text-sm text-gray-600 dark:text-gray-400 p-4">Masculino</label>
                </div>

                <div class="flex items-center">
                    <input type="radio" id="feminino" name="sexo" value="f" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" @if(old('sexo', $user->sexo) === 'Feminino') checked @endif required>
                    <label for="feminino" class="ml-2 text-sm text-gray-600 dark:text-gray-400 p-4">Feminino</label>
                </div>

                <div class="flex items-center">
                    <input type="radio" id="nao-informar" name="sexo" value="n" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" @if(old('sexo', $user->sexo) === 'Não informar') checked @endif required>
                    <label for="nao-informar" class="ml-2 text-sm text-gray-600 dark:text-gray-400p-4 p-4">Não informar</label>
                </div>
            </div>
            <x-input-error class="mt-2" :messages="$errors->get('sexo')" />
        </div>
    </div>
</section>
