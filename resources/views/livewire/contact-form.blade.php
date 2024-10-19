<div>
    <div>
        <h4>{{ $title }}</h4>
    </div>
    <form method="post" enctype="multipart/form-data" wire:submit="submit">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" wire:model="name" class="form-control" id="name" aria-describedby="nameHelp">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" wire:model="email" class="form-control" id="email" aria-describedby="emailHelp">
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" wire:model="message" id="message" rows="3"></textarea>
            @error('message') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>