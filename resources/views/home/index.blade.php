<h1>Hello from Laravel Cource</h1>

{{--COMMENTS--}}
<!-- Some Text -->

{{-- Single Line Comment --}}

{{--
Multi
Line
Comment
--}}

{{--Conditionals--}}
{{--@if (true)--}}
{{--    This will be displayed--}}
{{--@endif--}}
{{--@if (false)--}}
{{--    This will not be displayed--}}
{{--@endif--}}

{{--@continue & @break--}}
{{--@foreach ([1, 2, 3, 4, 5] as $n)--}}
{{--    @if ($n == 2)--}}
{{--        @continue--}}
{{--    @endif--}}
{{--    <p>{{$n}}</p>--}}
{{--@endforeach--}}

{{--@foreach ([1, 2, 3, 4, 5] as $n)--}}

{{--    @continue($n == 2)--}}

{{--    <p>{{$n}}</p>--}}
{{--@endforeach--}}
{{--@foreach ([1, 2, 3, 4, 5] as $n)--}}
{{--    <p>{{$n}}</p>--}}
{{--    @if ($n == 4)--}}
{{--        @break--}}
{{--    @endif--}}
{{--@endforeach--}}

{{--@foreach ([1, 2, 3, 4, 5] as $n)--}}
{{--    <p>{{$n}}</p>--}}
{{--    @break($n == 4)--}}
{{--@endforeach--}}

{{--@foreach ($hobbies as $h)--}}
{{--    {{ $h }}--}}
{{--@endforeach--}}

{{--@foreach ($hobbies as $h)--}}
{{--    {{ dd($loop) }}--}}
{{--@endforeach--}}

{{--<div @class([--}}
{{--        'my-css-class',--}}
{{--        'georgia' => $country === 'nl'])--}}
{{--        @style([--}}
{{--                'color: green',--}}
{{--                'color: red' => $country === 'nl'--}}
{{--        ])--}}
{{-->--}}
{{--    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum semper felis nec ante iaculis, sed cursus diam--}}
{{--    tempor. Quisque consectetur.--}}
{{--</div>--}}

@include ('shared.button', ['color' => 'yellow', 'text' => 'submit'])
@include ('shared.alert', ['bgcolor' => 'red', 'color' => 'white', 'text' => 'You fool'])