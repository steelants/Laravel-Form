<div class="input-group mb-3">
    <input
        type="button"
        class="btn btn-primary mb-3"
        @if (isset($id) && !empty($id)) id="{{$id}}" @endif
        @if (isset($name) && !empty($name)) name="{{$name}}" @endif
        value = "@if (isset($text) && !empty($text)) {{$text}} @endif"
    />
</div>
