<div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Position Lists</h4>
                <div>
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
                <a href="{{ route('position.create') }}" wire:navigate class="btn btn-primary" tabindex="-1" role="button"
                    aria-disabled="true">Add Position</a>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Position Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach ($positions as $position)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $position->name }}</td>
                                    <td>
                                        <a href="{{ route('position.edit', $position->id) }}" wire:navigate
                                            class="btn btn-primary btn-sm" role="button" aria-disabled="true"><i
                                                class="fa fa-pencil"></i></a>
                                        <a wire:click="destroy({{ $position->id }})" class="btn btn-light btn-sm"
                                            role="button" aria-disabled="true"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
