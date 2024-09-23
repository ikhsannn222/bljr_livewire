<div class="card">
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">New Post</h5>
            <form wire:submit="save">
                <div class="mb-4">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" wire:model="title" class="form-control" id="title" rows="3"></textarea>
                    @error('title')
                        <small class="text-danger d-block mt-1">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="body" class="form-label">Body</label>
                    <textarea wire:model="body" class="form-control" id="body" rows="3"></textarea>
                </div>
                @error('body')
                        <div class="text-danger d-block mt-1">{{ $message }}</div>
                    @enderror
                <button class="btn btn-primary">
                    save
                </button>
            </form>
        </div>
    </div>
</div>
