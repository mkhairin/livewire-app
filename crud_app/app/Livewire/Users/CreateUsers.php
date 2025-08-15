<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\UserNew;
use App\Models\Position;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Rule as LivewireRule;
use Illmunate\Validation\Rule;

class CreateUsers extends Component
{

    public UserNew $user;

    public string $name;
    public string $email;
    public ?string $password;
    public string $role = '';
    public ?int $position_id;

    public $positions;

    protected function rules()
    {
        return [
            'name' => 'required|string|max:50',
            'email' => 'required|email|unique:user_news,email',
            'password' => 'required|min:8',
            'role' => 'required|in:admin,employee',
            'position_id' => 'nullable|exists:positions,id'
        ];
    }

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

        session()->flash('message', 'Data Pengguna Berhasil Ditambahkan');
        return redirect()->route('users.index');
    }

    public function render()
    {
        return view('livewire.users.create-users');
    }
}
