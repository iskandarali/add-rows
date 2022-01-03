<div>
    <div>
        @foreach($headers as $i => $header)
        <div class="flex mb-2">
            <div class="flex flex-col flex-grow">
                <div class="mr-2 flex-grow">
                    <input value="{{ $header['name'] }}" placeholder="Header name" type="text"
                        name="http_client_headers[{{ $i }}][name]">
                </div>
                @error("http_client_headers.{$i}.name")
                <div>
                    <strong class="form-error">
                        {{ $errors->first("http_client_headers.{$i}.name") }}
                    </strong>
                </div>
                @enderror
            </div>
        </div>
        @endforeach
    </div>
</div>
