@extends('templates.layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header"><h3>{{ __('comments.Reject Comment') }}</h3></div>
                <div class="card-body">
                    {!! __('comments.ED_REJECT_HEADER') !!}
                    {!! $commentListing !!}
                    <form method="POST" action="{{ route('RejectCommentPost') }}">
                        @csrf
                        <input type="hidden" name="comment_id" value="{{ $id }}" required>
                        <input type="hidden" name="confirmCode" value="{{ $confirmCode }}" required>
                        <input type="hidden" name="src" value="{{ $src }}" required>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-1 col-form-label">
                                <strong>{{ __('comments.MESSAGE_TEXT') }}</strong>
                            </div>
                            <div class="col-md-5 text-info">
                                <strong>{{ __('comments.MESSAGE_EXPLANATION') }}</strong>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-1 text-md-right">
                                <input type="radio" name="reject-text" value="irrelevant" required>
                            </div>
                            <label for="reject_btn_1" class="col-md-6 col-form-label">
                                {{ __('comments.REJECT_MSG_IRRELEVANT',['src'=>__($src)]) }}
                            </label>
                            <div class="col-md-5 text-info">
                                {{ __('comments.REJECT_IRRELEVANT_EXPLANATION') }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-1 text-md-right">
                                <input type="radio" name="reject-text" value="illegal" required>
                            </div>
                            <label for="reject_btn_2" class="col-md-6 col-form-label">
                                {!! __('comments.REJECT_MSG_ILLEGAL1',['src'=>__($src)]) !!}
                                {!! __('comments.REJECT_MSG_ILLEGAL2',['src'=>__($src),'reason'=>__('comments.Reason')]) !!}
                                {!! __('comments.REJECT_MSG_ILLEGAL3',['src'=>__($src)]) !!}
                            </label>
                            <div class="col-md-5 text-info">
                                {{ __('comments.REJECT_ILLEGAL_EXPLANATION') }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-1 text-md-right">
                                <input type="radio" name="reject-text" value="incorrect">
                            </div>
                            <label for="reject_btn_3" class="col-md-6 col-form-label">
                                {!! __('comments.REJECT_MSG_INCORRECT',['src'=>__($src),'reason'=>__('comments.Reason')]) !!}
                            </label>
                            <div class="col-md-5 text-info">
                                {{ __('comments.REJECT_INCORRECT_EXPLANATION') }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-1 text-md-right">
                                <input type="radio" name="reject-text" value="other">
                            </div>
                            <label for="reject_btn_4" class="col-md-6 col-form-label">
                                {!! __('comments.REJECT_MSG_OTHER',['src'=>__($src),'reason'=>__('comments.Reason')]) !!}
                            </label>
                            <div class="col-md-5 text-info">
                                {{ __('comments.REJECT_OTHER_EXPLANATION') }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="reason" class="col-md-1 col-form-label">
                                {{ __('comments.Reason') }}
                            </label>

                            <div class="col-md-9">
                                <textarea rows="4" id="reasonText" type="text" class="form-control{{ $errors->has('reasonText') ? ' is-invalid' : '' }}"
                                          name="reasonText" value="{{ old('reasonText') }}" placeholder="Enter reason for rejection" autofocus></textarea>

                                @if ($errors->has('reasonText'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('reasonText') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('comments.Confirm_Rejection') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
