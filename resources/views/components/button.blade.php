<div>
    <button type="button"
        class="btn btn-secondary"
        @if (isset($id) && !empty($id)) id="{{$id}}" @endif
        @if (isset($name) && !empty($name)) name="{{$name}}" @endif
    >
        @if (isset($text) && !empty($text)) {{$text}} @endif
    </button>
</div>
