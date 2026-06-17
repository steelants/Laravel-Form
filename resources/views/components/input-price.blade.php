@php
    $wireModel = $attributes
        ->whereStartsWith('wire:model')
        ->filter(fn ($value, $key) => $key !== 'wire:model.vat')
        ->first() ?? false;
    $wireVatModel = $attributes->get('wire:model.vat') ?? false;
    $nameKey = $wireModel ?? $name ?? '';
@endphp

<div class="{{ $groupClass }}" x-data="{
    @if($wireModel)
        priceWithout: $wire.entangle(@js($wireModel)),
    @else
        priceWithout: @js(old($name, $value)),
    @endif
    inputValue: 0,
    decimals: {{ $decimals }},
    @if($wireVatModel)
        vatPercent: $wire.entangle(@js($wireVatModel)),
    @else
        vatPercent: @js($vat),
    @endif
    updateInput() {
        const value = parseFloat(
            this.mode === 'with'
            ? (this.priceWithout * (1 + this.vatRate))
            : this.priceWithout
        );
        this.inputValue = Number.isFinite(value) ? value.toFixed(this.decimals) : 0;
    },
    updateWithout() {
        const value = parseFloat(
            this.mode === 'with'
            ? this.inputValue / (1 + this.vatRate)
            : this.inputValue
        );
        this.priceWithout = Number.isFinite(value) ? value.toFixed({{ $realDecimals }}) : 0;
    },
    get withoutVat() {
        const value = parseFloat(this.priceWithout);
        return Number.isFinite(value) ? value.toFixed(this.decimals) : 0;
    },
    get withVat() {
        const value = parseFloat(this.priceWithout) * (1 + this.vatRate);
        return Number.isFinite(value) ? value.toFixed(this.decimals) : 0;
    },
    get vatRate() {
        return (this.vatPercent ?? 0) / 100;
    },
    mode: @js($mode),
}" x-init="updateInput(); $watch('vatPercent', () => updateInput())">
    @if (!empty($label))
        <label class="form-label"
            @isset($id) for="{{ $id }}" id="{{ $id }}-label" @endisset
        >
            {{ $label }}
        </label>
    @endif

    @if(!$wireModel)
        <input
            type="text"
            name="{{ $name }}"
            x-model="priceWithout"
        >
    @endif

    <div class="input-group">
        <input
            type="number"
            step="{{ $step }}"
            class="form-control border-end-0 pe-0 {{ $errors->has($nameKey) ? 'is-invalid' : '' }}"
            x-model="inputValue" x-on:input="updateWithout()"
        >
        <div class="input-group-text bg-body ps-0 {{ $errors->has($nameKey) ? 'border-danger' : '' }}">{{ $currency }}</div>
        <select class="form-select flex-grow-0 w-26 {{ $errors->has($nameKey) ? 'is-invalid' : '' }}" x-model="mode" x-on:change="updateInput()">
            <option value="with">{{ __('s DPH') }}</option>
            <option value="without">{{ __('bez DPH') }}</option>
        </select>
    </div>

    @error($nameKey)
        <div class="invalid-feedback d-block" role="alert">{{ $message }}</div>
    @enderror

    <div class="form-text">
        <template x-if="mode=='without'">
            <span><span x-text="withVat"></span> {{ $currency }} {{ __('s DPH') }}</span>
        </template>
        <template x-if="mode=='with'">
            <span><span x-text="withoutVat"></span> {{ $currency }} {{ __('bez DPH') }}</span>
        </template>
        &shy;
    </div>

    @if (isset($help) && !empty($help))
        <div class="form-text">{{ $help }}</div>
    @endif
</div>