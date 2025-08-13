<?php

namespace App\Livewire\Position;

use Livewire\Component;
use App\Models\Position;

class IndexPosition extends Component
{

    public function destroy($id)
    {
        Position::destroy($id);
        session()->flash('message', 'Data Berhasil Dihapus');
        return redirect()->route('position.index');
    }

    public function render()
    {
        return view('livewire.position.index-position', [
            'positions' => Position::all()
        ]);
    }
}
