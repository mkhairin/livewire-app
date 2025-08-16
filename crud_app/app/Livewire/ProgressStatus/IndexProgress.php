<?php

namespace App\Livewire\ProgressStatus;

use Livewire\Component;
use App\Models\ProgressStatusNew;
use Livewire\WithPagination;

class IndexProgress extends Component
{
    use WithPagination;

    public function destroy(ProgressStatusNew $progress)
    {
        $progress->delete();
        session()->flash('message', 'Data Berhasil Dihapus');
    }

    public function render()
    {
        $progress = ProgressStatusNew::latest()->paginate(10);

        return view('livewire.progress-status.index-progress', [
            'progress_status' => $progress
        ]);
    }
}
