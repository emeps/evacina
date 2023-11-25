<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Dados socioeconomicos') }}
        </h2>
    </header>


    <div class="mt-6 space-y-6">
        <div>
            <x-input-label for="estado_civil" :value="__('Estado civil')" />
            <select id="estado_civil" name="estado_civil" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required autofocus>
                <option value="solteiro" @if(old('estado_civil', $user->estado_civil) === 'solteiro') selected @endif>Solteiro(a)</option>
                <option value="casado" @if(old('estado_civil', $user->estado_civil) === 'casado') selected @endif>Casado(a)</option>
                <option value="divorciado" @if(old('estado_civil', $user->estado_civil) === 'divorciado') selected @endif>Divorciado(a)</option>
                <option value="viuvo" @if(old('estado_civil', $user->estado_civil) === 'viuvo') selected @endif>Viúvo(a)</option>
                <!-- Adicione outras opções conforme necessário -->
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('estado_civil')" />
        </div>

        <div>
            <x-input-label for="escolaridade" :value="__('Escolaridade')" />
            <select id="escolaridade" name="escolaridade" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required autofocus>
                <option value="ensino_fundamental" @if(old('escolaridade', $user->escolaridade) === 'ensino_fundamental') selected @endif>Ensino Fundamental</option>
                <option value="ensino_medio" @if(old('escolaridade', $user->escolaridade) === 'ensino_medio') selected @endif>Ensino Médio</option>
                <option value="graduacao" @if(old('escolaridade', $user->escolaridade) === 'graduacao') selected @endif>Graduação</option>
                <option value="pos_graduacao" @if(old('escolaridade', $user->escolaridade) === 'pos_graduacao') selected @endif>Pós-Graduação</option>
                <option value="mestrado" @if(old('escolaridade', $user->escolaridade) === 'mestrado') selected @endif>Mestrado</option>
                <option value="doutorado" @if(old('escolaridade', $user->escolaridade) === 'doutorado') selected @endif>Doutorado</option>
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('escolaridade')" />
        </div>

        <div>
            <x-input-label for="etnia" :value="__('Etnia')" />
            <select id="etnia" name="etnia" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required autofocus>
                <option value="branca" @if(old('etnia', $user->etnia) === 'branca') selected @endif>Branca</option>
                <option value="preta" @if(old('etnia', $user->etnia) === 'preta') selected @endif>Preta</option>
                <option value="parda" @if(old('etnia', $user->etnia) === 'parda') selected @endif>Parda</option>
                <option value="amarela" @if(old('etnia', $user->etnia) === 'amarela') selected @endif>Amarela</option>
                <option value="indigena" @if(old('etnia', $user->etnia) === 'indigena') selected @endif>Indígena</option>
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('etnia')" />
        </div>
    </div>
</section>
