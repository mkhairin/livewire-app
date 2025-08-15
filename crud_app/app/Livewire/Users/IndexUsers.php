<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\UserNew;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class IndexUsers extends Component
{
    use WithPagination;

    public function destroy(UserNew $user)
    {
        $user->delete();
        session()->flash('message', 'Data Pengguna Berhasil Dihapus');
    }

    public function render()
    {
        $users = UserNew::with('position')->latest()->paginate(10);

        return view('livewire.users.index-users', [
            'users' => $users
        ]);
    }
}
