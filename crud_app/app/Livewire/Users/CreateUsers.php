<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\UserNew;
use App\Models\Position;
use Illuminate\Support\Facades\Hash;


class CreateUsers extends Component
{
    public function render()
    {
        return view('livewire.users.create-users');
    }
}
