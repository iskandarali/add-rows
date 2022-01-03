<div>
    <div class="card">
        <div class="card-header">Profile</div>
        <div class="card-body">
            <form action="{{ route('profile.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col">
                        <label for="body" class="visually-hidden">Name</label>
                        <input type="text" name="profiles[][name]" class="form-control @error('profiles.*.name') is-invalid @enderror" id="name" placeholder="Name">
                        @error('profiles.*.name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="email" class="visually-hidden">Email address</label>
                        <input type="email" name="profiles[][email]" class="form-control @error('profiles.*.email') is-invalid @enderror"" id="email" placeholder="Email address">
                        @error('profiles.*.email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
