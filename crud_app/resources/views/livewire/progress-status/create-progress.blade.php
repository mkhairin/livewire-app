<div>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Progress Status Form</h4>
                <p class="card-description"> Basic form elements </p>
                <form class="forms-sample" wire:submit="create">
                    <div class="form-group">
                        <label>Progress Status Name</label>
                        <input type="text" class="form-control" placeholder="Prograss Status Name" wire:model="name">
                        <!-- error message untuk title -->
                        @error('name')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" placeholder="Description Status"
                            wire:model="description">
                        <!-- error message untuk title -->
                        @error('description')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Submit <span wire:loading
                            wire:target="create">Menyimpan...</span></button>
                    <a href="{{ route('progress_status.index') }}" wire:navigate.hover class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
