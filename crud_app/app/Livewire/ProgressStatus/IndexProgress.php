<?php

namespace App\Livewire\ProgressStatus;

use Livewire\Component;
use App\Models\ProgressStatusNew;

class IndexProgress extends Component
{
    public function render()
    {
        return view('livewire.progress-status.index-progress', [
            'progress_status' => ProgressStatusNew::all()
        ]);
    }
}
