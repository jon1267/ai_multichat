<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="flex flex-1 flex-col min-w-0">

    {{-- Header --}}

    <header class="px-6 py-4 border-b border-zinc-800 bg-zinc-900/50 flex items-center justify-between shrink-0">
        <div>
            <h1 class="text-sm font-semibold text-white">New Conversation</h1>
            <p class="text-xs text-zinc-500 mt-0.5">Ask me anything</p>
        </div>

        {{--Clear button--}}
        <button
                class="text-xs text-zinc-500 hover:text-zinc-300 px-3 py-1.5 rounded-md hover:bg-zinc-800 transition-colors cursor-pointer">
            Clear
        </button>
    </header>

    {{-- Welcome screen --}}
</div>