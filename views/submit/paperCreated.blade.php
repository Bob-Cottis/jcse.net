@extends('templates.layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{!! __('submit.paperCreated') !!}
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('/loadPaper') }}" enctype="multipart/form-data">
                            @csrf
                            <label class="control-label col-md-2 text-md-right">PDF file</label>
                            <input type="file" name="image_path" class="form-control col-md-4">

                            @if ($errors->has('file'))
                            <span class="invalid-feedback" role="alert"><strong>{{ $errors->first('file') }}</strong></span>
                            @endif
                            <input hidden name="paper_id" value="{{ $paper_id }}">
                            <button type="submit">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection