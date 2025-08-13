<div>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Departement Form</h4>
                <p class="card-description"> Basic form elements </p>
                <form class="forms-sample" wire:submit.prevent="create">
                    <div class="form-group">
                        <label>Departement Name</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama Departemen"
                            wire:model="departement_name">
                        <!-- error message untuk title -->
                        @error('departement_name')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Departement Aliases</label>
                        <input type="text" class="form-control" placeholder="Masukkan Alias Nama Departemen"
                            wire:model="departement_aliases">
                        <!-- error message untuk title -->
                        @error('departement_aliases')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Departement Description</label>
                        <input type="text" class="form-control" placeholder="Masukkan Deskripsi dari Departemen"
                            wire:model="departement_description">
                        <!-- error message untuk title -->
                        @error('departement_description')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit <span wire:loading
                            wire:target="create">Menyimpan...</span></button>
                    <a href="{{ route('departement.index') }}" wire:navigate.hover class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
