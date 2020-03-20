@extends('templates.layout')
@section('content')
    @php $hasErrors = ($errors->any()); $hasSaved = isset($savedReview); @endphp
    {{--@php if($hasErrors) dd($errors) @endphp--}}
    {{--@php if($hasErrors) dd(session()->getOldInput()) @endphp--}}
{{--@php if($hasSaved) dd($savedReview); @endphp--}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header"><h4>
                            @if($hasErrors)
                                {!! __('reviewForm.formErrorsHdr') !!}
                            @else
                                {!!  __('reviewForm.formHeader',$data) !!}
                            @endif
                        </h4></div>
                    <div class="card-body">
                        {!! __('reviewForm.formHeaderText',$data) !!}
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{!! url('submitReview') !!}">
                            @csrf
                            <input type="hidden" id="reviewer" name="reviewer" value="{{ auth()->user()->id }}">
                            <input type="hidden" id="paper_id" name="paper_id" value="{{ $paper_id }}">
                            <input type="hidden" id="confirmCode" name="confirmCode" value="{{ $confirmCode }}">
                            <button type="submit" disabled style="display: none"></button> {{--prevents Enter from submitting form--}}
                            @foreach ($qArray as $key=>$value)
                                @php $commentKey = $key.'Comment'; $ratingKey = $key.'Rating'; $targetKey = $key.'-target'; @endphp
                            <div class="form-group">
                                <label for="questionHeader"
                                       class="col-md-12 col-form-label text-md-left"><h4>{{ __('reviewForm.'.$key.'Hdr') }}
                                        <button class="btn" type="button" data-toggle="collapse" data-target="#{{ $targetKey }}"
                                                aria-expanded="false" aria-controls="{{ $targetKey }}">
                                            <i class="fa fa-chevron-down hidetoggle" aria-hidden="true"></i>
                                        </button></h4>
                                </label>
                                <div class="row">
                                    <div class="collapse" id="{{ $targetKey }}">{{ __('reviewForm.'.$key) }}<br>&nbsp;
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 text-md-right mb-2">
                                        {{ __('reviewForm.rating') }}
                                    </div>
                                    <div class="col-md-10 mb-2">
                                        <select name="{{$ratingKey}}" class="form-control{{ $errors->has($ratingKey) ? ' is-invalid' : '' }}"
                                                value="{{ ($hasSaved) ? $savedReview[$ratingKey] : old($ratingKey) }}">
                                            <option value="8">Please select ...</option>
                                            @for($i=6;$i>=0;$i--)
                                                @if($hasSaved)
                                                    <option value="{{ $i+1 }}"
                                                    @if ($savedReview[$ratingKey] == $i+1)
                                                        selected="selected"
                                                    @endif
                                                @elseif (old($ratingKey)==$i+1)
                                                    <option value="{{ $i+1 }}" selected="selected"
                                                @else
                                                    <option value="{{ $i+1 }}"
                                                @endif
                                            >{{ $i+1 }} | {!! $recArray[$value[$i]] !!}</option>
                                                @endfor
                                        </select>
                                        @if ($errors->has($ratingKey))
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first($ratingKey) }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                    <div class="col-md-2 text-md-right " name="{{ $commentKey }}">
                                        {!! __('reviewForm.comment') !!}
                                    </div>
                                    <div class="col-md-10">
                                        <textarea rows="4" cols="60" class="form-control{{ $errors->has($commentKey) ? ' is-invalid' : '' }}"
                                                  name="{{ $commentKey }}"
                                     @if ($hasErrors)
                                          @if ($errors->has($commentKey))
                                               placeholder="{{ $errors->first($commentKey) }}"></textarea>
                                          @else
                                               placeholder="Enter text here ...">{{ old($commentKey) }}</textarea>
                                          @endif
                                     @elseif ($hasSaved)
                                         @if($savedReview[$commentKey] <> "")
                                             >{{ $savedReview[$commentKey] }}</textarea>
                                         @else
                                              placeholder="Enter text here ..."></textarea>
                                         @endif
                                    @else
                                         placeholder="Enter text here ..."></textarea>
                                    @endif

                                    </div>

                                </div>
                            </div>
                            @endforeach
                            <div class="row">
                                <label for="CommentforAuthor"
                                       class="col-md-12 col-form-label text-md-left"><h4>{{ __('reviewForm.CommentforAuthorHdr') }}
                                        <button class="btn" type="button" data-toggle="collapse" data-target="#authorComments" aria-expanded="false" aria-controls="collapseExample">
                                            <i class="fa fa-chevron-down hidetoggle" aria-hidden="true"></i>
                                        </button></h4>
                                </label>
                                <div class="row d-none help-text collapse" id="authorComments">{{ __('reviewForm.CommentforAuthor') }}</div>
                                <div class="col-md-12">
                                    <textarea rows="4" cols="60" class="form-control" name="authorComments"
                                    @if ($hasErrors)
                                        @if ($errors->has('authorComment'))
                                            placeholder="{{ $errors->first('authorComments') }}"></textarea>
                                    @else
                                            placeholder="Enter text here ...">{{ old('authorComments') }}</textarea>
                                    @endif
                                    @elseif ($hasSaved)
                                        @if(isset($savedReview['authorComments']))
                                            >{{ $savedReview['authorComments'] }}</textarea>
                                        @else
                                            placeholder="Enter text here ..."></textarea>
                                        @endif
                                    @else
                                        placeholder="Enter text here ..."></textarea>
                                    @endif

                                </div>
                            </div>
                            <div class="row">
                                <label for="CommentforEditor"
                                       class="col-md-12 col-form-label text-md-left"><h4>{{ __('reviewForm.CommentforEditorHdr') }}
                                        <button class="btn" type="button" data-toggle="collapse" data-target="#editorComments-target" aria-expanded="false" aria-controls="collapseExample">
                                            <i class="fa fa-chevron-down hidetoggle" aria-hidden="true"></i>
                                        </button></h4>
                                </label>
                                <div class="row d-none help-text collapse" id="editorComments">{{ __('reviewForm.CommentforEditor') }}</div>
                                <div class="col-md-12">
                                    <textarea rows="4" cols="60" class="form-control" name="editorComments" style="min-width: 100%"
                                    @if ($hasErrors)
                                        @if ($errors->has('editorComments'))
                                            placeholder="{{ $errors->first('editorComments') }}"></textarea>
                                        @else
                                            placeholder="Enter text here ...">{{ old('editorComments') }}</textarea>
                                    @endif
                                    @elseif ($hasSaved)
                                        @if(isset($savedReview['editorComments']))
                                            >{{ $savedReview['editorComments'] }}</textarea>
                                        @else
                                            placeholder="Enter text here ..."></textarea>
                                        @endif
                                    @else
                                        placeholder="Enter text here ..."></textarea>
                                    @endif
                                </div>
                            </div>
                            <br>
                            <div class="offset-md-2 col-md-2"><div class="btn-group" role="group" aria-label="Basic example">
                            <button type="submit" id="save-form" name="save-form" class="btn btn-primary" formaction="{{ route('saveReview') }}">Save</button>&nbsp;&nbsp;&nbsp;
                                    <button type="submit" id="submit-form" name="submit-form" class="btn btn-primary">Submit</button></div></div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
