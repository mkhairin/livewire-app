<?php

namespace App\Livewire\Departemen;

use Livewire\Component;
use App\Models\DepartementNew;
use Symfony\Component\ErrorHandler\Debug;

class Edit extends Component
{
    public $departement_id;
    public $departement_name;
    public $departement_aliases;
    public $departement_description;

    protected $rules = [
        'departement_name' => ['required'],
        'departement_aliases' => ['required'],
        'departement_description' => ['required'],
    ];

    public function mount($id)
    {
        $departements = DepartementNew::find($id);

        $this->departement_id = $departements->id;
        $this->departement_name = $departements->departement_name;
        $this->departement_aliases = $departements->departement_aliases;
        $this->departement_description = $departements->departement_description;
    }

    public function update()
    {
        $this->validate();

        $departements = DepartementNew::find($this->departement_id);

        $departements->update([
            'departement_name' => $this->departement_name,
            'departement_aliases' => $this->departement_aliases,
            'departement_description' => $this->departement_description,
        ]);

        //flash message
        session()->flash('message', 'Data Berhasil Diupdate.');

        return redirect()->route('departement.index');
    }

    public function render()
    {
        return view('livewire.departemen.edit');
    }
}
