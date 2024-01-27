<button type="submit" {{ $attributes->class('btn btn-primary') }}
    @if (isset($confirmation) && $confirmation) onclick="return confirm('form:ui.configmation')" @endif
>
    {{ $text ?? $slot ?? '' }}
</button>
