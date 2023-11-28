<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Carteira de vacina') }}
        </h2>
    </header>

    <div class="mt-6 space-y-6 ">
        @if(request()->routeIs('citizen.search'))
            <div>
                <x-input-label for="cpf" :value="__('Informe o CPF')" />
                <x-text-input id="cpf" name="cpf" type="text" class="mt-1 block w-full"  :value="old('cpf', ' ')" required />
                <x-input-error class="mt-2" :messages="$errors->get('cpf')" />
            </div>
        @endif
            @if(request()->routeIs('citizen.searchByInlness'))
                <div>
                    <x-input-label for="doenca" :value="__('Informe a cobertura do imunizante')" />
                    <x-text-input id="doenca" name="doenca" type="text" class="mt-1 block w-full"  :value="old('doenca', ' ')" required />
                    <x-input-error class="mt-2" :messages="$errors->get('cpf')" />
                </div>
            @endif

        <x-primary-button href="{{request()->routeIs('citizen.search')? route('citizen.search'): route('citizen.searchByInlness')}}">
            {{request()->routeIs('citizen.search')? __('Buscar carteira do cidadão'): __('Buscar carteiras por doença')}}
        </x-primary-button>
    </div>

</section>
