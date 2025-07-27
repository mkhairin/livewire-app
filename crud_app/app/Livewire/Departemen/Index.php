<?php

namespace App\Livewire\Departemen;

use App\Models\DepartementNew;
use Livewire\Component;

class Index extends Component
{
    public function destroy($id)
    {
        DepartementNew::destroy($id);

        session()->flash('message', 'Data Berhasil Dihapus.');

        return redirect()->route('departement.index');
    }

    public function render()
    {
        return view('livewire.departemen.index', [
            'departements' => DepartementNew::all()
        ]);
    }
}
