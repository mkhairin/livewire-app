<?php

namespace App\Livewire\Position;

use Livewire\Component;
use App\Models\Position;
use Livewire\WithPagination;

class IndexPosition extends Component
{

    public function destroy(Position $position)
    {
        $position->delete();
        session()->flash('message', 'Data Berhasil Dihapus');
    }

    public function render()
    {
        $positions = Position::latest()->paginate(10);
        return view('livewire.position.index-position', [
            'positions' => $positions
        ]);
    }
}
