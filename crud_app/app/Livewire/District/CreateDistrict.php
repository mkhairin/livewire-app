<?php

namespace App\Livewire\District;

use Livewire\Component;
use App\Models\District;

class CreateDistrict extends Component
{

    public $name;

    protected $rules = [
        'name' => ['required']
    ];

    public function create()
    {
        $this->validate();

        District::create([
            'name' => $this->name
        ]);

        session()->flash('message', 'Data Berhasil Disimpan');
        return redirect()->route('district.index');
    }

    public function render()
    {
        return view('livewire.district.create-district');
    }
}
