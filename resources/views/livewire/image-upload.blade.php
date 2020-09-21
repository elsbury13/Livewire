<div>
    <h2>Image Uploading</h2>
    <!-- listen to event. IF we are not listening, then livewire knows not to do anything -->
    <form wire:submit.prevent="saveSingle">
        @if ($image)
            Image Preview:
            <img src="{{ $image->temporaryUrl() }}">
        @endif

        <input type="file" wire:model="image">
        <div wire:loading wire:target="photo">Uploading...</div>

        @error('image') <span class="error">{{ $message }}</span> @enderror

        <button type="submit">Save Image</button>
    </form>

    <!-- listen to event. IF we are not listening, then livewire knows not to do anything -->
    <form wire:submit.prevent="saveMultiple">
        <input type="file" wire:model="images" multiple>

        @error('images.*') <span class="error">{{ $message }}</span> @enderror

        <button type="submit">Save Image</button>
    </form>
</div>
