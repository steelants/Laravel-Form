<div>
    <button type="submit" class="btn {{!empty($class) ? $class : 'btn-primary'}}"
        @if (isset($confirmation) && $confirmation) onclick="return confirm('form:ui.configmation')" @endif
    >
        @if (isset($text) && !empty($text)) {{$text}} @endif
    </button>
</div>
