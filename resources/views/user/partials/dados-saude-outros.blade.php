<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Dados da saúde e outros') }}
        </h2>
    </header>


    <div class="mt-6 space-y-6">
        <div>
            <x-input-label for="cns" :value="__('Cartão Nacional do SUS')" />
            <x-text-input id="cns" name="cns" type="text" class="mt-1 block w-full" :value="old('cns', $user->cns)" required autofocus autocomplete="cns" />
            <x-input-error class="mt-2" :messages="$errors->get('cns')" />
        </div>

        <div>
            <x-input-label for="comorbidade" :value="__('Comorbidade')" />
            <x-text-input id="comorbidade" name="comorbidade" type="text" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" :value="old('comorbidade', $user->comorbidade)" required autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('comorbidade')" />
        </div>

        <div>
            <x-input-label for="plano_saude" :value="__('Plano de saúde')" />

            <div class="flex mt-1 space-x-4">
                <div class="flex items-center jus">
                    <input type="radio" id="plano_saude" name="plano_saude" value="Sim" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" @if(old('plano_saude', $user->plano_saude) === 'Sim') checked @endif required>
                    <label for="plano_saude" class="ml-2 text-sm text-gray-600 dark:text-gray-400 p-4">Sim</label>
                </div>

                <div class="flex items-center">
                    <input type="radio" id="plano_saude" name="plano_saude" value="Não" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" @if(old('plano_saude', $user->plano_saude) === 'Não') checked @endif required>
                    <label for="plano_saude" class="ml-2 text-sm text-gray-600 dark:text-gray-400 p-4">Não</label>
                </div>
            </div>
            <x-input-error class="mt-2" :messages="$errors->get('plano_saude')" />
        </div>
        <div>
            <x-input-label for="funcionario" :value="__('Funcionário da Saúde')" />

            <div class="flex mt-1 space-x-4 ">
                <div class="flex items-center">
                    <input type="radio" id="funcionario" name="funcionario" value=1 class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" @if(old('funcionario', $user->funcionario) === 1) checked @endif required>
                    <label for="funcionario" class="ml-2 text-sm text-gray-600 dark:text-gray-400 p-4">Sim</label>
                </div>

                <div class="flex items-center">
                    <input type="radio" id="funcionario" name="funcionario" value=0 class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" @if(old('funcionario', $user->funcionario) === 0) checked @endif required>
                    <label for="funcionario" class="ml-2 text-sm text-gray-600 dark:text-gray-400 p-4">Não</label>
                </div>
            </div>
            <x-input-error class="mt-2" :messages="$errors->get('funcionario')" />
        </div>
    </div>
</section>
