<div class="card-body">

    <form wire:submit.prevent="submit">
        <div>
            @if (session()->has('message'))
                <div class="alert alert-success  success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <div>
            <label for="defaultFormControlInput" class="form-label">Name</label>
            <input
                type="text"
                class="form-control"
                id="defaultFormControlInput"
                aria-describedby="defaultFormControlHelp" wire:model="settings.name"/>
        </div>
        @error('settings.name')
        <span>{{$message}}</span>
        @enderror
        <div id="defaultFormControlHelp" class="form-text">
            <label for="defaultFormControlInput" class="form-label">email</label>
            <input
                type="text"
                class="form-control"
                id="defaultFormControlInput"
                placeholder="John Doe"
                aria-describedby="defaultFormControlHelp" wire:model="settings.email"/>
        </div>
        <div id="defaultFormControlHelp" class="form-text">
            <label for="defaultFormControlInput" class="form-label">phone</label>
            <input
                type="text"
                class="form-control"
                id="defaultFormControlInput"
                placeholder="John Doe"
                aria-describedby="defaultFormControlHelp" wire:model="settings.phone"/>
        </div>

        <div id="defaultFormControlHelp" class="form-text">
            <label for="defaultFormControlInput" class="form-label">address</label>
            <input
                type="text"
                class="form-control"
                id="defaultFormControlInput"
                placeholder="John Doe"
                aria-describedby="defaultFormControlHelp" wire:model="settings.address"/>
        </div>

        <div id="defaultFormControlHelp" class="form-text">
            <label for="defaultFormControlInput" class="form-label">facebook</label>
            <input
                type="text"
                class="form-control"
                id="defaultFormControlInput"
                placeholder="John Doe"
                aria-describedby="defaultFormControlHelp" wire:model="settings.facebook"/>
        </div>

        <div id="defaultFormControlHelp" class="form-text">
            <label for="defaultFormControlInput" class="form-label">instagram</label>
            <input
                type="text"
                class="form-control"
                id="defaultFormControlInput"
                placeholder="John Doe"
                aria-describedby="defaultFormControlHelp" wire:model="settings.instagram"/>
        </div>

        <div id="defaultFormControlHelp" class="form-text">

            <label for="defaultFormControlInput" class="form-label">twitter</label>
            <input
                type="text"
                class="form-control"
                id="defaultFormControlInput"
                placeholder="John Doe"
                aria-describedby="defaultFormControlHelp" wire:model="settings.twitter"/>
        </div>

        <div id="defaultFormControlHelp" class="form-text">
            <label for="defaultFormControlInput" class="form-label">linkedin</label>
            <input
                type="text"
                class="form-control"
                id="defaultFormControlInput"
                placeholder="John Doe"
                aria-describedby="defaultFormControlHelp" wire:model="settings.linkedin"/>
        </div>
        <div>
            <button type="submit"> submit</button>
        </div>
    </form>
</div>

