<?php

namespace App\Livewire\District;

use Livewire\Component;
use App\Models\District;

class EditDistrict extends Component
{
    // Membuat var untuk update data district
    public District $district;

    public $name;

    public function rules()
    {

        return [
            'name' => 'required|string|min:8|max:100'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama distrik harus diisi!',
            'name.string' => 'Data nama harus berupa teks!',
            'name.min' => 'Nama minimal harus 8 karakter.',
            'name.max' => 'Nama maksimal harus 100 karakter.',
        ];
    }

    // Fungsi untuk menampilkan dan get data ke update
    public function mount($id)
    {
        // get districts dari database berdasarkan id
        $this->district = District::findOrFail($id);

        // Lalu di assign ke dalam var yang sdh dibuat
        $this->name = $this->district->name;
    }

    // Fungsi untuk update data
    public function update()
    {
        // Memanggil fungsi validate untuk validasi
        $this->validate();

        // Update data
        $this->district->update([
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
