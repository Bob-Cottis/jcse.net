@extends('templates.layout')
@section('content')
    @if($errors->any())
        @php dd($errors);
        @endphp
    @endif
    <div class="card">
        <div class="card-header">{{ __('myjrnl.contactEditorHdr',['vol'=>$vol,'pap'=>$pap]) }}</div>
        <form method="post" action="{{ route('emailEditor') }}">
            @csrf
            <button type="submit" disabled style="display: none"></button> {{--prevents Enter from submitting form--}}
            <input hidden name="paper_id" value="{{ $paper_id }}">
            <input hidden name="user_id" value="{{ $user_id }}">
            <input hidden name="confirmCode" value="{{ $confirmCode }}">
            <input hidden name="prevMsg" value="{{ $replyTo }}">
            <div class="form-group row"><label for="subject"
                                               class="col-md-2 col-form-label text-md-right">Subject:</label>
                <div class="col-md-10">
                    <input type="text" class="form-control {{ $errors->has('subject') ? ' is-invalid' : '' }}"
                           name="subject"
                           value="{{ $errors->has('subject') ? old('subject') : '['.config('jrnl.shortName').'] Volume '.$vol.' Paper '.$pap.' - message from author' }}">
                    @if ($errors->has('subject'))
                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('subject') }}</strong></span>
                    @endif
                </div>
            </div>
            <div class="form-group row"><label for="message"
                                               class="col-md-2 col-form-label text-md-right">Message:</label>
                <div class="col-md-10">
                <textarea class="form-control {{ $errors->has('message') ? ' is-invalid' : '' }}" rows="6" type="text"
                          placeholder="Enter message" name="message" required autofocus>{{ old('message') }}</textarea>
                    @if ($errors->has('message'))
                        <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('message') }}</strong></span>
                    @endif
                </div>
            </div>
            @if(! is_null($message))
                <div class="form-group row">Previous Messages:</div>
                @foreach($message as $msg)
                    <div class="form-group row">
                        <div class="col-md-2">
                            {{ $msg['created_at'] }}
                        </div>
                        <div class="col-md-10">
                            {{ $msg['subject'] }}<br>
                            {!! __(json_decode($msg['params'])->message) !!}
                        </div>
                        <hr>
                    </div>
                @endforeach
            @endif
            <div class="form-group-row form-check">
                <div class="col-md-3 offset-md-2 mb-2">
                    <input type="checkbox" class="form-check-input" name="copySelf">
                    <label class="form-check-label" for="copySelf">Send me a copy</label>
                </div>
                <div class="col-md-3 offset-md-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-primary hBack" action="">Cancel</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('scripts')
    $(".hBack").on("click", function(e){
    e.preventDefault();
    window.history.back();
    });
@endsection
