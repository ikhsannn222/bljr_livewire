<div>
    <x-flash-message></x-flash-message>
        <form wire:submit="save">
            <div class="mb-2">
                <label for="body" class="visually-hidden">Body</label>
                <textarea placeholder="What's on your mind ?" wire:model="form.body" class="form-control" id="body"></textarea>
            </div>
            @error('form.body')
                    <small class="text-danger d-block mt-1">{{ $message }}</small>
            @enderror
                <div>
            <div class="flex justify-content-end">
                <button class="btn btn-primary">
                    save
                </button>
            </div>
        </form>
    </div>
</div>
</div>
