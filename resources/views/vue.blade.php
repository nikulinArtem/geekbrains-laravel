@extends('layouts.main')

@section('title', 'Vue demo')

@section('menu')
    @include('menu')
@endsection

@section('content')
    <div id="app">
        <example-component></example-component>
    </div>
@endsection
<script>
    import ExampleComponent from "../js/components/ExampleComponent";
    export default {
        components: {ExampleComponent}
    }
</script>
