<div>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">User Form</h4>
                <p class="card-description"> Basic form elements </p>
                <form class="forms-sample" wire:submit.prevent="create">
                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama Pengguna" wire:model="name">
                        <!-- error message untuk title -->
                        @error('name')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama Pengguna"
                            wire:model="email">
                        <!-- error message untuk title -->
                        @error('email')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Masukkan Nama Pengguna"
                            wire:model="password">
                        <!-- error message untuk title -->
                        @error('password')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <select wire:model="position_id" class="form-control">
                            <option id="">Pilih Jabatan</option>
                            @foreach ($positions as $position)
                                <option value="{{ $position->id }}">{{ $position->name }}</option>
                            @endforeach
                        </select>

                        <!-- error message untuk title -->
                        @error('position_id')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Role</label>
                          <select wire:model="role" class="form-control">
                            <option value="employee">Karyawan</option>
                            <option value="admin">Admin</option>
                        </select>
                        <!-- error message untuk title -->
                        @error('role')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit <span wire:loading
                            wire:target="create">Menyimpan...</span></button>
                    <a href="#" wire:navigate.hover class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
