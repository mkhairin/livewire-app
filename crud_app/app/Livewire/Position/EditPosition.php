<?php

namespace App\Livewire\Position;

use Livewire\Component;
use App\Models\Position;

class EditPosition extends Component
{
    public Position $position;
    public $name;
    public $position_id;

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

    public function mount($id)
    {
        $this->position = Position::findOrFail($id);
        $this->name = $this->position->name;
    }

    public function update()
    {
        $this->validate();

        $this->position->update([
            'name' => $this->name
        ]);


        session()->flash('message', 'Data Berhasil Diupdate.');
        return redirect()->route('position.index');
    }

    public function render()
    {
        return view('livewire.position.edit-position');
    }
}
