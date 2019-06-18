@extends('templates.layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header"><h4>{{ __('submit.adCheckRevTitle') }}</h4>
                    </div>
                    <div class="card-body">
                        {!! __('submit.adCheckRevHeader') !!}
                        <form
                            <div class="form-row rev-row d-none">
                                @foreach ($revs as $rev)
                                    <input type="checkbox" name="revviewer" value="{{ $rev['id'] }}">
                                    {{ $rev->person }}<br>
                                @endforeach




@endsection