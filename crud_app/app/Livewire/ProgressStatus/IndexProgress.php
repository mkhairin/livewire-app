<?php

namespace App\Livewire\ProgressStatus;

use Livewire\Component;
use App\Models\ProgressStatusNew;

class IndexProgress extends Component
{
    public function destroy($id)
    {
        ProgressStatusNew::destroy($id);
        session()->flash('message', 'Data Berhasil Dihapus');
        return redirect()->route('progress_status.index');
    }
    
    public function render()
    {
        return view('livewire.progress-status.index-progress', [
            'progress_status' => ProgressStatusNew::all()
        ]);
    }
}
