<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\UserNew;
use App\Models\Position;

class IndexUsers extends Component
{
    public $users;
    public $positions;

    public function mount()
    {
        $this->users = UserNew::with('position')->get();
        $this->positions = Position::all();
    }


    public function render()
    {
        return view('livewire.users.index-users');
    }
}
