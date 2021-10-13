@props(['inputName', 'type' => 'text'])
<div class="mt-2">
    <label class="block text-sm text-gray-600"
        for="{{ $inputName }}">{{ucwords($inputName)}}</label>
    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" type="{{ $type }}" name="{{ $inputName }}"
        id="{{ $inputName }}" {{ $attributes }}>

    <x-form.error inputName="{{$inputName}}" />
</div>
