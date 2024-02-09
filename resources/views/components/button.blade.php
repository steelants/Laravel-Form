<button
   {{ $attributes->class('btn') }}
    @if (!empty($confirm)) onclick="return confirm('form:ui.configmation')" @endif
>
    {{ $text ?? $slot ?? '' }}
</button>
