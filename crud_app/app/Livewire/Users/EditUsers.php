<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\UserNew;
use App\Models\Position;
use Livewire\Attributes\Rule as LivewireRule;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class EditUsers extends Component
{
    // Properti untuk menyimpan model user yang sedang diedit
    public UserNew $user;

    // Properti yang akan di-binding ke form input (wire:model)
    public string $name = '';
    public string $email = '';
    public ?string $password = null;  // Gunakan null sebagai default untuk field opsional
    public string $role = '';
    public ?int $position_id = null; // Bisa null jika tidak wajib

    public $positions;

    /**
     * Metode untuk aturan validasi.
     * Paling fleksibel untuk menangani kasus dinamis.
     */
    protected function rules()
    {
        return [
            'name' => 'required|string|max:50',
            'email' => [
                'required',
                'email',
                // Aturan unik yang mengabaikan ID user saat ini
                Rule::unique('user_news', 'email')->ignore($this->user->id)
            ],
            // Password hanya divalidasi jika diisi (nullable)
            'password' => 'nullable|min:8',
            'role' => 'required|in:admin,employee',
            'position_id' => 'nullable|exists:positions,id'

        ];
    }

    /**
     * Dijalankan saat komponen pertama kali dimuat.
     * Tugasnya adalah mengambil data dan mengisi properti.
     */
    public function mount($id)
    {
        // Gunakan findOrFail untuk otomatis error 404 jika user tidak ditemukan
        $this->user = UserNew::findOrFail($id);

        // Isi properti form dari data model
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->role = $this->user->role;
        $this->position_id = $this->user->position_id;

        // Ambil data posisi untuk dropdown
        $this->positions = Position::all();
    }

    /**
     * (OPSIONAL TAPI SANGAT DIREKOMENDASIKAN)
     * Validasi real-time untuk UX yang lebih baik.
     * Dijalankan setiap kali properti 'email' berubah.
     */
    public function updatedEmail()
    {
        // Hanya validasi field email untuk feedback instan
        $this->validateOnly('email');
    }

    /**
     * Metode utama untuk memproses update data.
     */
    public function update()
    {
        // Jalankan validasi menggunakan metode rules()
        $this->validate();

        // Update model user dengan data yang sudah divalidasi
        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
            'role' => $this->role,
            'position_id' => $this->position_id,
        ]);

        if (!empty($this->password)) {
            $this->password = Hash::make($this->password);
            $this->user->save();
        }

        // Kirim pesan sukses dan redirect
        session()->flash('message', 'Data Pengguna Berhasil Diupdate.');
        return redirect()->route('users.index');
    }

    public function render()
    {
        return view('livewire.users.edit-users');
    }
}
