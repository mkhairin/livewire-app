<?php

namespace App\Livewire\Position;

use Livewire\Component;
use App\Models\Position;

class CreatePosition extends Component
{
    public $name;

    public function rules()
    {
        return [
            'name' => 'required|string|min:8|max:100'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama posisi harus diisi!',
            'name.string' => 'Data nama harus berupa teks!',
            'name.min' => 'Posisi minimal harus 8 karakter.',
            'name.max' => 'Posisi maksimal harus 100 karakter.',
        ];
    }

    public function create()
    {
        $this->validate();

        Position::create([
            'name' => $this->name
        ]);

        //flash message
        session()->flash('message', 'Data Berhasil Disimpan.');

        return redirect()->route('position.index');
    }

    public function render()
    {
        return view('livewire.position.create-position');
    }
}
