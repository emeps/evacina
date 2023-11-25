<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Finalizar cadastro') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Obrigado por se cadastrar! Agora você poderá realizar sua vacinação.') }}
        </p>
    </header>

    <x-primary-button href="{{ route('dashboard') }}">
        {{ __('Cadastrar e voltar para dashboard') }}
    </x-primary-button>
</section>
