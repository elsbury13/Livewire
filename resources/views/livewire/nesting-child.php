<div>
    Hello {{ $name }}
    <input wire:model="name" type="text">
    {{ now() }}

    <!-- magic call, will refresh the compnent -->
    <button wire:click="$refresh">Refresh</button>
    <p>Can do this in php with emitEvolve, will refresh this child and parent
        <button wire:click="emitEvolve">Refresh</button>
    </p>
</div>
