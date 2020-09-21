<div>
    <h2>Search</h2>
    <input type="text" wire:model="searchTerm" />

    <ul>
        @foreach ($people as $person)
        <li>
            {{ $person->name }} ({{ $person->phone }})
        </li>
        @endforeach
    </ul>

    {{ $people->links() }}
</div>
