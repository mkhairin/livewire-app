<div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Progress Lists</h4>
                <div>
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
                <a href="{{ route('progress_status.create') }}" wire:navigate class="btn btn-primary" tabindex="-1"
                    role="button" aria-disabled="true">Add Progress Status</a>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Progress Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @forelse ($progress_status as $progress)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>
                                        @if ($progress->name == 'Pending')
                                            <span
                                                class="bg-primary p-2 px-3 rounded-pill text-white fw-medium">{{ $progress->name }}</span>
                                        @elseif($progress->name == 'In Progress')
                                            <span
                                                class="bg-info p-2 px-3 rounded-pill text-white fw-medium">{{ $progress->name }}</span>
                                        @elseif($progress->name == 'On Hold')
                                            <span
                                                class="bg-warning p-2 px-3 rounded-pill text-white fw-medium">{{ $progress->name }}</span>
                                        @elseif($progress->name == 'Completed')
                                            <span
                                                class="bg-success p-2 px-3 rounded-pill text-white fw-medium">{{ $progress->name }}</span>
                                        @elseif($progress->name == 'Cancelled')
                                            <span
                                                class="bg-danger p-2 px-3 rounded-pill text-white fw-medium">{{ $progress->name }}</span>
                                        @elseif($progress->name == 'Review')
                                            <span
                                                class="bg-warning p-2 px-3 rounded-pill text-white fw-medium">{{ $progress->name }}</span>
                                        @endif
                                    </td>
                                    <td>{{ $progress->description }}</td>
                                    <td>
                                        <a href="{{ route('progress_status.edit', $progress->id) }}" wire:navigate
                                            class="btn btn-primary btn-sm" role="button" aria-disabled="true"><i
                                                class="fa fa-pencil"></i></a>
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
