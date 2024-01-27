<button
   {{ $attributes->class('btn') }}
    @if (isset($id) && !empty($id)) id="{{$id}}" @endif
    @if (isset($name) && !empty($name)) name="{{$name}}" @endif
    @if (isset($confirmation) && $confirmation) onclick="return confirm('form:ui.configmation')" @endif
>
    {{ $text ?? $slot ?? '' }}
</button>
