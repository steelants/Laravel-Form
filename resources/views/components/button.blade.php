<button
   {{ $attributes->class('btn') }}
    @if (!empty($confirm)) onclick="return confirm(__('Are you shure?'))" @endif
>
    {{ $text ?? $slot ?? '' }}
</button>
