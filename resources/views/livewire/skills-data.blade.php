
<div>
    <div class="mb-3">
        <input type="text" class="form-control" placeholder="search" wire:model.live="search">
    </div>
<table class="table table-dark">
    <thead>
    <tr>
        <th>name</th>
        <th>progress</th>

        <th>Actions</th>
    </tr>
    </thead>
    <tbody class="table-border-bottom-0">
    @foreach($data as $record)
    <tr>
        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$record->name}}</strong></td>
        <td>{{$record->progress}}</td>
        <td>
            <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item"  wire:click.prevent="$dispatch('skillupdate',{id: {{$record->id}}})"
                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                    >
                    <a class="dropdown-item" wire:click.prevent="$dispatch('skilldelete',{id: {{$record->id}}})"
                    ><i class="bx bx-trash me-1"></i> Delete</a
                    >
                </div>
            </div>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
{{$data->links()}}
</div>
