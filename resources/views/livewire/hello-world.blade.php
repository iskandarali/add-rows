<div>
    <div class="card">
        <div class="card-header">Profile</div>
        <div class="card-body">
            <form action="{{ route('profile.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text" name="name" value="{{ $product }}" class="form-control @error('name') is-invalid @enderror">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                @foreach ($profiles as $index => $profile)
                <div class="p-2 border mb-2">
                    <div class="row">
                        <div class="col">
                            <label for="title" class="visually-hidden">Title</label>
                            <input type="text" value="{{ $profile['title'] }}" name="profiles[{{ $index }}][title]"
                                wire:model="profiles.{{$index}}.title"
                                class="form-control @error('profiles.'.$index.'.title') is-invalid @enderror"
                                placeholder="Title">
                            @error('profiles.'.$index.'.title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="body" class="visually-hidden">Body</label>
                            <input type="text" value="{{ $profile['body'] }}" name="profiles[{{ $index }}][body]"
                                wire:model="profiles.{{$index}}.body"
                                class="form-control @error('profiles.{$index}.body') is-invalid @enderror"
                                placeholder="Body">
                            @error('profiles.{$index}.body')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <a href="#" wire:click.prevent="removeProduct({{ $index }})">Delete</a>
                        </div>
                    </div>
                </div>
                @endforeach
                <button class="btn btn-sm btn-secondary" wire:click.prevent="addProduct">+ Add Another Product</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
