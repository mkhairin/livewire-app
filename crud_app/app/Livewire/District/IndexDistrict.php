<?php

namespace App\Livewire\District;

use Livewire\Component;
use App\Models\District;
use Livewire\WithPagination;

class IndexDistrict extends Component
{
    use WithPagination;

    public function destroy($id)
    {
        District::destroy($id);
        session()->flash('message', 'Data Distrik Berhasil Dihapus');
    }

    public function render()
    {
        $districts = District::latest()->paginate(10);
        return view('livewire.district.index-district', [
            'districts' => $districts
        ]);
    }
}
