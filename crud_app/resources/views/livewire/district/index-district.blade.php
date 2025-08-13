<div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">District Lists</h4>
                <div>
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
                <a href="{{ route('district.create') }}" wire:navigate class="btn btn-primary" tabindex="-1" role="button"
                    aria-disabled="true">Add District</a>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>District Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @forelse ($districts as $district)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $district->name }}</td>
                                    <td>
                                        <a href="{{ route('district.edit', $district->id) }}" wire:navigate
                                            class="btn btn-primary btn-sm" role="button" aria-disabled="true"><i
                                                class="fa fa-pencil"></i></a>
                                        <a wire:click="destroy({{ $district->id }})" class="btn btn-light btn-sm"
                                            role="button" aria-disabled="true"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                            @empty
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
