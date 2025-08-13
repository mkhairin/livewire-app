<div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Users Lists</h4>
                <div>
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
                <a href="{{ route('departement.create') }}" wire:navigate class="btn btn-primary" tabindex="-1"
                    role="button" aria-disabled="true">Add Users</a>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @forelse ($users as $user)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    @if($user->name)
                                    <td>{{ $user->name }}</td>
                                    @else
                                    <td>Belum ada Nama</td>
                                    @endif
                                    <td>{{ $user->position->name ?? 'Belum ada Nama' }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->password }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>
                                        <a href="#" wire:navigate class="btn btn-primary btn-sm" role="button"
                                            aria-disabled="true"><i class="fa fa-pencil"></i></a>
                                        <a wire:click="#" class="btn btn-light btn-sm" role="button"
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
