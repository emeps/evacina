<section class="space-y-6" >
    <header>
    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
        {{request()->routeIs('application.create') ?  __('Finalizar cadastro'): __('Atualizar cadastro')}}
    </h2>

    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
        {{request()->routeIs('application.create') ?  __('Obrigado por se cadastrar! Agora você poderá realizar sua vacinação.') :
             __('Obrigado por manter seu cadastro atualizado! Se necessita de correção, procure um profissional habilitado') }}

    </p>
    </header>

    <x-primary-button href="{{ route('application.list') }}">
        {{request()->routeIs('application.create') ?  __('Cadastrar novo'): __('Atualizar cadastro')}}
    </x-primary-button>
</section>
