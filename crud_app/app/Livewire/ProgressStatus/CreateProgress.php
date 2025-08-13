<?php

namespace App\Livewire\ProgressStatus;

use Livewire\Component;
use App\Models\ProgressStatusNew;
use Livewire\Attributes\Rule;

class CreateProgress extends Component
{
    #[Rule('required|min:3|max:15|string', message: 'Masukkan Nama Progress')]
    public $name;

    #[Rule('required|min:3|max:255|string', message: 'Masukkan Deskripsi Progress')]
    public $description;


    public function create()
    {
        $this->validate();
        ProgressStatusNew::create([
            'name' => $this->name,
            'description' => $this->description
        ]);
        session()->flash('message', 'Data Berhasil Disimpan');
        return redirect()->route('progress_status.index');
    }

    
    public function render()
    {
        return view('livewire.progress-status.create-progress');
    }
}
