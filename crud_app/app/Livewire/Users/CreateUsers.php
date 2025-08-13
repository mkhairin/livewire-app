<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\UserNew;
use App\Models\Position;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Rule;

class CreateUsers extends Component
{
    #[Rule('required|string|max:50')]
    public $name;
    #[Rule('required|string|unique:user_news,email')]
    public $email;
    #[Rule('required|min:8')]
    public $password;
    #[Rule('required|in:admin,employee')]
    public $role = 'employee';
    #[Rule('nullable|exists:positions,id')]
    public $position_id;
    public $positions;


    public function mount()
    {
        $this->positions = Position::all();
    }

    public function create()
    {
        $this->validate();
        UserNew::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role' => $this->role,
            'position_id' => $this->position_id,
        ]);

        $this->dispatch('userCreated');
        $this->reset();

        session()->flash('message', 'Data Berhasil Ditambahkan');
        return redirect()->route('users.index');
    }

    public function render()
    {
        return view('livewire.users.create-users');
    }
}
