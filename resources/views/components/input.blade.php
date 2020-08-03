
 <div class="form-group">
    <input type="{{$type}}" name="{{$name}}" value="{{ $value }}" required="{{$required}}" autocomplete="{{$type}}"  
        class="form-control @error(`{{$name}}`) is-invalid @enderror" placeholder="{{ $placeholder }}">
        @error(`{{$name}}`)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>