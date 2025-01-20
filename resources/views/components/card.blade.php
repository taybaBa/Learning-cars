<div class="class">
    <div class="card-header">{{$title}}</div>
    @if($slot->isEmpty())
        <p>Please provide some contents</p>
    @else
    {{$slot}}
    @endif
    <div class="card-footer">{{$footer}}</div>
</div>
