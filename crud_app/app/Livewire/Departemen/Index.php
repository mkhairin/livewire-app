<?php

namespace App\Livewire\Departemen;

use App\Models\DepartementNew;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.departemen.index', [
            'departements' => DepartementNew::all()
        ]);
    }
}
