<div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Login</h5>
            <form wire:submit="login">
                <div class="mb-4">
                    <label for="email" class="form-label">email</label>
                    <input class="form-control" wire:model="email" type="email" name="email" id="email">
                    @error('email')
                    <small class="d-block mt-1 text-danger">{{ $message }}</small>
                    @enderror
                <div class="mb-4">
                    <label for="password" class="form-label">password</label>
                    <input class="form-control" wire:model="password" type="password" name="password" id="password">
                    @error('password')
                    <small class="d-block mt-1 text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>
