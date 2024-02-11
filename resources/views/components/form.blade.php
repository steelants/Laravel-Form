<form {{ $attributes }} 
    enctype="multipart/form-data" 
    @if(isset($action))
        action="{{ $action }}"
    @endif

    @if(isset($method))
        method="{{ in_array($method, ['POST', 'GET']) ? $method : 'POST' }}"
    @endif
>
    @if(isset($method))
        @csrf
    @endif

    @if(isset($method) && in_array($method, ['PUT', 'PATCH', 'DELETE']))
        @method($method)
    @endif

    {{ $slot }}
</form>
