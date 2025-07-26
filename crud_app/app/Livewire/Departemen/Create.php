<?php

namespace App\Livewire\Departemen;

use Livewire\Component;
use App\Models\DepartementNew;

class Create extends Component
{
    public $departement_name;
    public $departement_aliases;
    public $departement_description;

    protected $rules = [
        'departement_name' => ['required'],
        'departement_aliases' => ['required'],
        'departement_description' => ['required'],
    ];

    public function create()
    {
        $this->validate();

        DepartementNew::create([
            'departement_name' => $this->departement_name,
            'departement_aliases' => $this->departement_aliases,
            'departement_description' => $this->departement_description,
        ]);

        //flash message
        session()->flash('message', 'Data Berhasil Disimpan.');

        return redirect()->route('departement.index');
    }

    public function render()
    {
        return view('livewire.departemen.create');
    }
}
