<button
   {{ $attributes->class('btn') }}
    @if (!empty($confirm)) onclick="return confirm('Confirmation')" @endif
>
    {{ $text ?? $slot ?? '' }}
</button>
