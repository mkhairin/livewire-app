<?php

namespace App\Livewire\Departemen;

use Livewire\Component;
use App\Models\DepartementNew;

class Edit extends Component
{
    public DepartementNew $departements;
    public $departement_name;
    public $departement_aliases;
    public $departement_description;

    public function rules()
    {
        return [
            'departement_name' => 'required|string|min:8|max:100',
            'departement_aliases' => 'required|string|min:3|max:10',
            'departement_description' => 'required|string|min:8|max:255',
        ];
    }

    public function messages()
    {
        return [
            'departement_name.required' => 'Nama departemen harus diisi!',
            'departement_name.string' => 'Data nama departemen harus berupa teks!',
            'departement_name.min' => 'Nama minimal harus 8 karakter.',
            'departement_name.max' => 'Nama maksimal harus 100 karakter.',
            'departement_aliases.required' => 'Nama alias harus diisi!',
            'departement_aliases.string' => 'Data nama alias harus berupa teks!',
            'departement_aliases.min' => 'Nama alias minimal harus 3 karakter.',
            'departement_aliases.max' => 'Nama alias maksimal harus 10 karakter.',
        ];
    }

    public function mount($id)
    {
        $this->departements = DepartementNew::findOrFail($id);

        $this->departement_name = $this->departements->departement_name;
        $this->departement_aliases = $this->departements->departement_aliases;
        $this->departement_description = $this->departements->departement_description;
    }

    public function update()
    {
        $this->validate();
        $this->departements->update([
            'departement_name' => $this->departement_name,
            'departement_aliases' => $this->departement_aliases,
            'departement_description' => $this->departement_description,
        ]);

        session()->flash('message', 'Data Berhasil Diupdate');
        return redirect()->route('departement.index');
    }

    public function render()
    {
        return view('livewire.departemen.edit');
    }
}
