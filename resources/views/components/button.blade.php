<div>
    <button
        class="btn {{!empty($class) ? 'btn-secondary' : $class}}"
        type="{{$type ?? 'button'}}"
        @if (isset($id) && !empty($id)) id="{{$id}}" @endif
        @if (isset($name) && !empty($name)) name="{{$name}}" @endif
        @if (isset($confirmation) && $confirmation) onclick="return confirm('form:ui.configmation')" @endif
        @if (isset($text) && !empty($text)) {{$text}} @endif
    </button>
</div>
