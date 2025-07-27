<?php

namespace App\Livewire\Position;

use Livewire\Component;
use App\Models\Position;

class CreatePosition extends Component
{
    public $name;

    protected $rules = [
        'name' => ['required']
    ];

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
