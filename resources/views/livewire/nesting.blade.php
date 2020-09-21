<div>
    <h2>Nesting & Events</h2>
    <!-- add key so livewire can keep track of what is changing -->
    @foreach ($names as $key => $name)
        <div>
            @livewire('nesting-child', [
                'name' => $name
            ], key($key))
            <p> Can Remove a name
                <button wire:click="removeName('{{ $key }}')">Remove</button>
            </p>
            <hr>
            <br />
        </div>
    @endforeach

    <h2>{{ now() }}</h2>
    <!-- just refresh parent component, actually a feature -->
    <p>Refresh just parent component
        <button wire:click="$refresh">Refresh</button>
    </p>

    <p>Refresh all
        <button wire:click="refreshChildren">Refresh</button>
    </p>
    <p>Refresh all with Param (pikachu)
        <button wire:click="refreshChildrenWithParam">Refresh</button>
    </p>
    <p>Refresh all with different method name
        <button wire:click="refreshChildrenDifferentName">Refresh</button>
    </p>
    <p>Refresh all automatically with $refresh
        <button wire:click="refreshChildrenAuto">Refresh</button>
    </p>
    <p>Refresh Just children using Magic emit refresh
        <button wire:click="$emit('refreshChildren')">Refresh</button>
    </p>
</div>
