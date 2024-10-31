@props(['color', 'bgColor' => 'white'])

<div {{$attributes->class("card card-text-$color card-bg-$bgColor")}}>
    <div {{ $header->attributes->class('card-header') }}>
        {{ $header }}
    </div>

    @if ($slot->isEmpty())
        <p>Please provide some content</p>
    @else
        {{ $slot }}
    @endif
    <div {{ $footer->attributes->class('card-footer') }}>
        {{ $footer }}
    </div>
</div>