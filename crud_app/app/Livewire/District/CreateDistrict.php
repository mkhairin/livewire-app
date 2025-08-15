<?php

namespace App\Livewire\District;

use Livewire\Component;
use App\Models\District;

class CreateDistrict extends Component
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
            'name.required' => 'Nama distrik harus diisi!',
            'name.string' => 'Data nama harus berupa teks!',
            'name.min' => 'Nama minimal harus 8 karakter.',
            'name.max' => 'Nama maksimal harus 100 karakter.',
        ];
    }

    public function realtimeValidation()
    {
        $this->validateOnly('name');
    }

    public function create()
    {
        $this->validate();

        District::create([
            'name' => $this->name
        ]);

        session()->flash('message', 'Data District Berhasil Disimpan');
        return redirect()->route('district.index');
    }

    public function render()
    {
        return view('livewire.district.create-district');
    }
}
