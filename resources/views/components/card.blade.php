@props(['color','bgColor'=>'white'])

<div {{$attributes->merge()->class("card card-text-$color card-bg-$bgColor")}} >
    <div {{$title->attributes->class("card-header")->merge(['lang'=>'ka'])}}>{{$title}}</div>
    @if($slot->isEmpty())
        <p>Please provide some contents</p>
    @else
    {{$slot}}
    @endif
    <div class="card-footer">{{$footer}}</div>
</div>
