<?php

namespace App\Livewire\Position;

use Livewire\Component;
use App\Models\Position;

class IndexPosition extends Component
{
    public function render()
    {
        return view('livewire.position.index-position', [
            'positions' => Position::all()
        ]);
    }
}
