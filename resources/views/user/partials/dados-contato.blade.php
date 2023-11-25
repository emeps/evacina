<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Dados de contato') }}
        </h2>
    </header>

    <div class="mt-6 space-y-6">
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="email" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>
        <div>
            <x-input-label for="telefone" :value="__('Telefone')" />
            <x-text-input id="telefone" name="telefone" type="text" class="mt-1 block w-full" :value="old('telefone', $user->telefone)" required autofocus autocomplete="telefone" />
            <x-input-error class="mt-2" :messages="$errors->get('telefone')" />
        </div>

        <div>
            <x-input-label for="logradouro" :value="__('Logradouro')" />
            <x-text-input id="logradouro" name="logradouro" type="text" class="mt-1 block w-full" :value="old('logradouro', $user->logradouro)" required autofocus autocomplete="logradouro" />
            <x-input-error class="mt-2" :messages="$errors->get('logradouro')" />
        </div>

        <div>
            <x-input-label for="numero" :value="__('Número')" />
            <x-text-input id="numero" name="numero" type="text" class="mt-1 block w-full" :value="old('numero', $user->numero)" required autofocus autocomplete="numero" />
            <x-input-error class="mt-2" :messages="$errors->get('numero')" />
        </div>

        <div>
            <x-input-label for="bairro" :value="__('Bairro')" />
            <x-text-input id="bairro" name="bairro" type="text" class="mt-1 block w-full" :value="old('bairro', $user->bairro)" required autofocus autocomplete="bairro" />
            <x-input-error class="mt-2" :messages="$errors->get('bairro')" />
        </div>

        <div>
            <x-input-label for="cidade" :value="__('Cidade')" />
            <x-text-input id="cidade" name="cidade" type="text" class="mt-1 block w-full" :value="old('cidade', $user->cidade)" required autofocus autocomplete="cidade" />
            <x-input-error class="mt-2" :messages="$errors->get('cidade')" />
        </div>

        <div>
            <x-input-label for="cep" :value="__('CEP')" />
            <x-text-input id="cep" name="cep" type="text" class="mt-1 block w-full" :value="old('cep', $user->cep)" required autofocus autocomplete="cep" />
            <x-input-error class="mt-2" :messages="$errors->get('cep')" />
        </div>

        <div>
            <x-input-label for="uf" :value="__('UF')" />
            <x-text-input id="uf" name="uf" type="text" class="mt-1 block w-full" :value="old('uf', $user->uf)" required autofocus autocomplete="uf" />
            <x-input-error class="mt-2" :messages="$errors->get('uf')" />
        </div>
    </div>
</section>
