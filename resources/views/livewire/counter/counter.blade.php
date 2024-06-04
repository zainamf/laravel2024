<div>
<div class="text-center">
        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">{{  $counter }}</h1>
        <p class="mt-6 text-lg leading-8 text-gray-600">Mari Berzikir ...</p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="#" wire:click='add' class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Plus (+)</a>
                <a href="#" wire:click='minus' class="rounded-md bg-red-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Minus (-)</a>
         </div>

</div>

<x-modal name="say-thanks" :show="$close" focusable>

         <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Alhamdullillah') }}
        </h2>
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Thanks for using this apps') }}
        </p>
        <div class="mt-6 flex justify-end">
            <x-secondary-button x-on:click="$dispatch('close')">
                {{ __('Cancel') }}
            </x-secondary-button>


        </div>

</x-modal>
<div>
