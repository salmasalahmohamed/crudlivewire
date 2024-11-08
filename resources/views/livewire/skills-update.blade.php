<div>
    <button
        type="button"
        class="btn btn-primary"
        data-bs-toggle="modal"
        data-bs-target="#basicModal"
    >
        Launch modal
    </button>
    <div class="modal fade" id="updateModal" tabindex="-1" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">add new component </h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
    <form wire:submit.prevent="submit">


        <div class="modal-body">
            <div class="row">
                <div class="col mb-3">
                    <label for="nameBasic" class="form-label">Name</label>
                    <input type="text" id="nameBasic" class="form-control" placeholder="Enter Name"  wire:model="name" />
                </div>
            </div>
            @error('name')
            {{$message}}
            @enderror
            <div class="row g-2">

                <div class="col mb-0">
                    <label for="dobBasic" class="form-label">progress</label>
                    <input type="number" id="dobBasic" class="form-control" min="1"max="100" wire:model="progress"/>
                </div>
            </div>
            @error('progress')
            {{$message}}
            @enderror
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                Close
            </button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
</div>
