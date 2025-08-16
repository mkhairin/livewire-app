<?php

namespace App\Livewire\ProgressStatus;

use Livewire\Component;
use App\Models\ProgressStatusNew;

class EditProgress extends Component
{
    public ProgressStatusNew $progress;
    public $name;
    public $description;

    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:15',
            'description' => 'required|string|min:3|max:25'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama progress harus diisi!',
            'name.string' => 'Data nama progress harus berupa teks!',
            'name.min' => 'Nama progress harus minimal 3 karakter',
            'name.max' => 'Nama progress harus maksimal 15 karakter',
            'description.required' => 'Deskripsi progress harus diisi!',
            'description.string' => 'Data deskripsi progress harus berupa teks!',
            'description.min' => 'Deskripsi progress harus minimal 3 karakter',
            'description.max' => 'Deskripsi progress harus maksimal 25 karakter'
        ];
    }

    public function mount($id)
    {
        $this->progress = ProgressStatusNew::findOrFail($id);
        $this->name = $this->progress->name;
        $this->description = $this->progress->description;
    }

    public function update()
    {
        $this->validate();
        $this->progress->update([
            'name' => $this->name,
            'description' => $this->description
        ]);

        session()->flash('message', 'Data Progress Berhasil Diupdate');
        return redirect()->route('progress_status.index');
    }

    public function render()
    {
        return view('livewire.progress-status.edit-progress');
    }
}
