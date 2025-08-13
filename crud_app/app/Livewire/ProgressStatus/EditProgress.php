<?php

namespace App\Livewire\ProgressStatus;

use Livewire\Component;
use App\Models\ProgressStatusNew;
use Livewire\Attributes\Rule;

class EditProgress extends Component
{
    public $progress_id;
    #[Rule('required|min:3|max:15|string', message: 'Masukkan Nama Progress')]
    public $name;
    #[Rule('required|min:3|max:255|string', message: 'Masukkan Deskripsi Progress')]
    public $description;

    public function mount($id)
    {
        $progress = ProgressStatusNew::find($id);
        $this->progress_id = $progress->id;
        $this->name = $progress->name;
        $this->description = $progress->description;
    }

    public function update()
    {
        $this->validate();

        $progress = ProgressStatusNew::find($this->progress_id);
        $progress->update([
            'name' => $this->name,
            'description' => $this->description
        ]);

        session()->flash('message', 'Data Berhasil Diupdate');
        return redirect()->route('progress_status.index');
    }

    public function render()
    {
        return view('livewire.progress-status.edit-progress');
    }
}
