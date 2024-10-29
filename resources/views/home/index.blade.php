<h1>Hello from Laravel Cource</h1>
{{--{{ date('Y') }}--}}
{{--<p>{{ strtoupper($name . ' ' . $surname) }}</p>--}}
{{--<p>{{ $job }}</p>--}}
{{--<p>{!! $job !!}</p>--}}
{{--<p>{{ Illuminate\Support\Str::after("Hello World", "Hello") }}</p>--}}
{{--<p>{{ Illuminate\Foundation\Application::VERSION }}</p>--}}
{{--<p>{{ PHP_VERSION }}</p>--}}

{{--@{{ name }}--}}
{{--@@for--}}

{{--<div>--}}
{{--    Name: @{{ name }}--}}
{{--    Age: @{{ age }}--}}
{{--    Job: @{{ job }}--}}
{{--    Hobbies: @{{ hobbies }}--}}
{{--    @@if--}}
{{--</div>--}}

{{--@verbatim--}}
{{--    <div>--}}
{{--        Name: {{ name }}--}}
{{--        Age: {{ age }}--}}
{{--        Job: {{ job }}--}}
{{--        Hobbies: {{ hobbies }}--}}
{{--        @if--}}
{{--    </div>--}}
{{--@endverbatim--}}

{{--{{ \Illuminate\Support\Js::from($hobbies) }}--}}

<script>
    const hobbies = {{ \Illuminate\Support\Js::from($hobbies) }}
</script>