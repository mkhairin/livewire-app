<div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Departement Lists</h4>
                <a href="{{ route('departement.create') }}" wire:navigate class="btn btn-primary" tabindex="-1"
                    role="button" aria-disabled="true">Add Departement</a>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Departement Name</th>
                                <th>Aliases</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($departements as $departement)
                                <tr>
                                    <td>{{ $departement->departement_name }}</td>
                                    <td>{{ $departement->departement_aliases }}</td>
                                    <td>{{ $departement->departement_description }}</td>
                                    <td><label class="badge badge-danger">Pending</label></td>
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
