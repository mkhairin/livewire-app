<div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Departement Lists</h4>
                <div>
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
                <a href="{{ route('departement.create') }}" wire:navigate class="btn btn-primary" tabindex="-1"
                    role="button" aria-disabled="true">Add Departement</a>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Departement Name</th>
                                <th>Aliases</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @forelse ($departements as $departement)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $departement->departement_name }}</td>
                                    <td>{{ $departement->departement_aliases }}</td>
                                    <td>{{ $departement->departement_description }}</td>
                                    <td>
                                        <a href="{{ route('departement.edit', $departement->id) }}" wire:navigate
                                            class="btn btn-primary btn-sm" role="button" aria-disabled="true"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="" wire:navigate class="btn btn-light btn-sm" role="button"
                                            aria-disabled="true"><i class="fa fa-trash-o"></i></a>
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
