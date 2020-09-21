<?php

declare(strict_types = 1);

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class FileDownload extends Component
{
    public function export()
    {
        return Storage::disk('local')->download('export.csv');
        // return response()->download(storage_path('exports/export.csv'));
        /*
        return response()->streamDownload(function () {
            echo 'CSV Contents...';
        }, 'export.csv');
        */
    }

    public function render()
    {
        return view('livewire.file-download');
    }
}
