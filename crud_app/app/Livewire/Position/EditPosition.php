<?php

namespace App\Livewire\Position;

use Livewire\Component;
use App\Models\Position;

class EditPosition extends Component
{
    public $position_id;
    public $name;

    protected $rules = [
        'name' => ['required']
    ];

    public function mount($id)
    {
        $positions = Position::find($id);
        $this->position_id = $positions->id;
        $this->name = $positions->name;
    }

    public function update()
    {
        $this->validate();

        $positions = Position::find($this->position_id);
        $positions->update([
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
