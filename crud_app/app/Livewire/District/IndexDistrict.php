<?php

namespace App\Livewire\District;

use Livewire\Component;
use App\Models\District;


class IndexDistrict extends Component
{
    public function destroy($id)
    {
        District::destroy($id);
        session()->flash('message', 'Data Berhasil Dihapus');
        return redirect()->route('district.index');
    }

    public function render()
    {
        return view('livewire.district.index-district', [
            'districts' => District::all()
        ]);
    }
}
