<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\UserNew;
use App\Models\Position;
use Livewire\Attributes\On;

class IndexUsers extends Component
{
    public $users;

    public function mount()
    {
        $this->loadUsers();
    }

    #[On('userCreated')]
    public function loadUsers()
    {
        $this->users = UserNew::with('position')->get();
    }

    public function render()
    {
        return view('livewire.users.index-users');
    }
}
