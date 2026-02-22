@php
    $wireModel = $attributes
        ->whereStartsWith('wire:model')
        ->first() ?? false;
    $nameKey = $wireModel ?? $name ?? '';
@endphp

<div class="{{ $groupClass }}" x-data="{
    @if($wireModel)
        phone: $wire.entangle(@js($wireModel)),
    @else
        phone: @js(old($name, $value)),
    @endif
    preselections: @js($preselections),
    preselection: '',
    inputValue: '',
    updateInput() {
        console.log('updating');
        this.phone = this.preselection + this.inputValue;
        console.log(this.phone);
    },
    parsePhone() {
        if(!this.phone || this.phone.length == 0) return;

        const sortedCodes = [...this.preselections].sort((a, b) => b.length - a.length);

        let cleaned = String(this.phone).trim().replace(/[\s\-\(\)]/g, '');

        if (!cleaned.startsWith('+') && !/^\d{1,3}\d{6,}$/.test(cleaned)) {
            cleaned = '+' + cleaned;
        }

        for (const code of sortedCodes) {
            if (cleaned.startsWith(code)) {
                const phone = cleaned.slice(code.length);
                if (/^\d{6,}$/.test(phone)) {
                    console.log(code, phone);
                    this.preselection = code;
                    this.inputValue = phone;
                    return;
                }
            }
        }

        console.log('fallback', this.preselections[0], this.phone)

        // fallback
        this.inputValue = this.phone;
        this.preselection = this.preselections[0];
    },
}" x-init="parsePhone()">
    @if (!empty($label))
        <label class="form-label"
            @isset($id) for="{{ $id }}" id="{{ $id }}-label" @endisset
        >
            {{ $label }}
        </label>
    @endif

    @if(!$wireModel)
        <input
            type="hidden"
            name="{{ $name }}"
            x-model="phone"
        >
    @endif

    <div class="input-group {{ $errors->has($nameKey) ? 'is-invalid' : '' }}">
        <select class="form-select flex-grow-0 flex-shrik-0 w-22" x-model="preselection" x-on:change="updateInput()">
            @foreach($preselections as $val)
                <option value="{{ $val }}">{{ $val }}</option>
            @endforeach
        </select>
        <input
            type="tel"
            class="form-control {{ $errors->has($nameKey) ? 'is-invalid' : '' }}"
            x-model="inputValue" x-on:input="updateInput()"
        >
    </div>

    @error($nameKey)
        <div class="invalid-feedback" role="alert">{{ $message }}</div>
    @enderror

    @if (isset($help) && !empty($help))
        <div class="form-text">{{ $help }}</div>
    @endif
</div>
