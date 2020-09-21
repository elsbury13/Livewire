<div>
    <h2>Lifecycle Hooks</h2>
    <p>Call updated once you enter a character
        <input wire:model="name" type="text">
        Hello {{ $name }}
    </p>

    <p>Url param the name input
        <a href="{{ url('/lifecycle-hooks') }}?name=brock">url param</a>
    </p>

    <p>Call updatedNewName once you enter a character. $newName property is empty
        <input wire:model="newName" type="text">
        Hello {{ $newName }}
    </p>

</div>
