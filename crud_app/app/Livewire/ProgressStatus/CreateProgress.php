<?php

namespace App\Livewire\ProgressStatus;

use Livewire\Component;
use App\Models\ProgressStatusNew;

class CreateProgress extends Component
{
    public $name;
    public $description;

    public function rules()
    {
        return [
            'name' => 'required|string|min:15|max:50',
            'description' => 'required|string|min:50|max:255'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama progress harus diisi!',
            'name.string' => 'Data nama progress harus berupa teks!',
            'name.min' => 'Nama progress harus minimal 15 karakter',
            'name.max' => 'Nama progress harus maksimal 50 karakter',
            'description.required' => 'Deskripsi progress harus diisi!',
            'description.string' => 'Data deskripsi progress harus berupa teks!',
            'description.min' => 'Deskripsi progress harus minimal 50 karakter',
            'description.max' => 'Deskripsi progress harus maksimal 255 karakter'
        ];
    }

    public function create()
    {
        $this->validate();
        ProgressStatusNew::create([
            'name' => $this->name,
            'description' => $this->description
        ]);

        session()->flash('message', 'Data Progress Berhasil Disimpan');

        return redirect()->route('progress_status.index');
    }


    public function render()
    {
        return view('livewire.progress-status.create-progress');
    }
}
