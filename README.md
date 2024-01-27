# Laravel Form

## Currently WIP

### Created by: [SteelAnts s.r.o.](https://www.steelants.cz/)

[![Total Downloads](https://img.shields.io/packagist/dt/steelants/form.svg?style=flat-square)](https://packagist.org/packages/steelants/form)


## Examples
```html
<x-form livewireAction="store" method="post">
    <x-form-input groupClass="mb-3" id="name" livewireModel="name" name="name" value="{{ old('name') }}" label="Name" />
    <x-form-input groupClass="mb-3" id="email" livewireModel="email" name="email" type="email" value="{{ old('email') }}" label="E-mail" />
    <x-form-input groupClass="mb-3" id="password" livewireModel="password" name="password" type="password" value="{{ old('password') }}" label="Password" />
    <x-form-input groupClass="mb-3" id="password_confirmation" livewireModel="password_confirmation" name="password_confirmation" type="password"  value="{{ old('password') }}" label="Password again" />
    <x-form-submit>Create</x-form-submit>
</x-form>
```

## Summernote support
Include JS and CSS files from [Summernote github](https://github.com/summernote/summernote/)
