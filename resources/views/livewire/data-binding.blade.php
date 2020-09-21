<div>
    <h2>Data Binding & Actions</h2>
    <!-- text binding -->
    <!-- wire:model tells input to keep name in sync with backend -->
    <p>tells input to keep name in sync with backend
        <input wire:model="name" type="text">
    </p>

    <p>If checked display exclmation mark after name <input wire:model="loud" type="checkbox"></p>

    <p>Can select mutiple values </p>
    <select wire:model="greeting" multiple>
        <option>Hello</option>
        <option>Goodbye</option>
        <option>Adios</option>
    </select>

   <p>Calling the component directly to set name to default in param (Ash)
    <button wire:click="resetName()">Reset name</button>
   </p>

   <p>Calling the component directly to set name to Misty in param
   <button wire:click="resetName('Misty')">Reset name</button>
   </p>

   <p>Calling the component directly to set name with innerText
   <button wire:click="resetName($event.target.innerText)">Brock</button>
   </p>

   <p>Calling the component method resetName() with param of Gary to set the name on form submit
   <form action="#" wire:submit.prevent="resetName('Gary')">
    <button>Reset name</button>
   </form>
   </p>

   <p>Calling the component directly to set name on form submit to Professor Oak
   <form action="#" wire:submit.prevent="$set('name', 'Professor Oak')">
    <button>Reset name</button>
   </form>
   </p>

   <h2>{{ implode(',', $greeting) }} {{ $name }} @if ($loud) ! @endif</h2>

</div>
