<div>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">District Form</h4>
                <p class="card-description"> Basic form elements </p>
                <form class="forms-sample" wire:submit="create">
                    <div class="form-group">
                        <label>District Name</label>
                        <input type="text" class="form-control" placeholder="District Name" wire:model="name">
                        <!-- error message untuk title -->
                        @error('name')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Submit <span wire:loading
                            wire:target="create">Menyimpan...</span></button>
                    <a href="{{ route('district.index') }}" wire:navigate.hover class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
