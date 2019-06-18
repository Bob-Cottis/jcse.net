@extends('templates.layout')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h4>{{ __('submit.authModHeader') }}</h4></div>

                <div class="card-body">
                    {!! __('submit.authModBody') !!}
                    <ol>
                        @foreach()
                        <li>

                        </li>
                    </ol>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script>
        $(document).on('change', '.auth-num', function () {

        }
    </script>