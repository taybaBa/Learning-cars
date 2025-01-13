{{--<div>--}}
   <h1>hello from laravel course</h1>
{{--    <p>My name is {{$name}} {{$surname}}</p>--}}
{{--<p>Year : {{$year}}</p>--}}
{{--    {{ date ('Y') }}--}}
{{--    <p>{{strtoupper($name.' '.$surname)}}</p>--}}
{{--    <p>{{\Illuminate\Support\Str::after("hello World","hello tayba")}}</p>--}}
{{--    <p>{{\Illuminate\Foundation\Application::VERSION}}</p>--}}
{{--    {{PHP_VERSION}}--}}
{{--    <p>{!! $job !!}</p>--}}
{{--    <!-- some text -->--}}
{{--    --}}{{-- Single line coment --}}
{{--    --}}{{----}}
{{--    Multi--}}
{{--    hi--}}
{{--    line--}}
{{--    cooment --}}
{{--   {!! $hobbies !!}--}}

{{--    {{\Illuminate\Support\Js::from($hobbies)}}--}}
{{--    @if (true)--}}
{{--        this will be displayed--}}
{{--    @endif--}}
{{--    <script>--}}
{{--        const hobbies = {{\Illuminate\Support\Js::from($hobbies)}};--}}
{{--    </script>--}}
{{--    @{{ name }}--}}

{{--    @@foreach @@endforeach--}}
{{--    @verbatim--}}
{{--    <div>--}}
{{--        Name: {{ name }}--}}
{{--        Age: {{ age }}--}}
{{--        Job: {{ job }}--}}
{{--    </div>--}}
{{--    @endverbatim--}}
{{--    @foreach($hobbies as $h)--}}
{{--        {{ $loop->iteration}}--}}
{{--        {{ dd($loop )}}--}}
{{--        {!! $h !!}--}}
{{--    @endforeach--}}
{{--    <div @class(['my-class-class','pak'=> $country ==='Pakistan'])   @style([--}}
{{--    'color:white',--}}
{{--    'background-color:black' => $country === 'Pakistan'--}}

{{--])>--}}
{{--        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad aspernatur at aut expedita explicabo harum inventore ipsa iste, modi, mollitia natus nemo nihil optio, perferendis qui reiciendis reprehenderit veniam?--}}

{{--    </div>--}}

{{--</div>--}}
{{--@php--}}
{{--$cars = [1,2,3,4,5];--}}
{{--@endphp--}}
{{--@include('shared.button',['color'=>'yellow','text'=>'Click Me'])--}}
{{--@foreach($cars as $car)--}}
{{--    @include('car.view',['car'=>$car])--}}
{{--@endforeach--}}
{{--=======or======--}}
{{--@each('car.view',$cars,'car','no car found')--}}


{{--=============raw php in blade===========--}}
{{--@php--}}

{{--@endphp--}}

@include('shared.alert',['message'=>'account was created','color'=>'green'])
@include('shared.alert',['message'=>'account blocked','color'=>'red'])
