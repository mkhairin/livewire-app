<?php

namespace App\Livewire\District;

use Livewire\Component;
use App\Models\District;
use Livewire\Attributes\Rule;

class EditDistrict extends Component
{
    // Membuat var untuk update data district
    public $district_id;

    // Rule digunakan dengan memakai Livewire Atribut Rule
    #[Rule('required|min:3|string', message: 'Masukkan Nama District')]
    public $name;

    // Fungsi untuk menampilkan dan get data ke update
    public function mount($id)
    {
        // get districts dari database berdasarkan id
        $districts = District::find($id);

        // Lalu di assign ke dalam var yang sdh dibuat
        $this->district_id = $districts->id;
        $this->name = $districts->name;
    }

    // Fungsi untuk update data
    public function update()
    {
        // Memanggil fungsi validate untuk validasi
        $this->validate();

        // Mencari data di table berdasarkan id district
        $districts = District::find($this->district_id);

        // Update data
        $districts->update([
            'name' => $this->name
        ]);

        session()->flash('message', 'Data Berhasil Diupdate');
        return redirect()->route('district.index');
    }


    public function render()
    {
        return view('livewire.district.edit-district');
    }
}
