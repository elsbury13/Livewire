<?php

declare(strict_types = 1);

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class ImageUpload extends Component
{
    use WithFileUploads;

    public $image;
    public $images = [];

    public function updatedImage()
    {
        $this->validate([
            'image' => 'image|max:1024', // 1MB Max
        ]);
    }

    // Save single image
    public function saveSingle()
    {
        $this->image->store('image');
    }

    // Save multiple images
    public function saveMultiple()
    {
        $this->validate([
            'images.*' => 'image|max:1024', // 1MB Max
        ]);

        foreach ($this->images as $image) {
            $image->store('images');
        }
    }

    public function render()
    {
        return view('livewire.image-upload');
    }
}
