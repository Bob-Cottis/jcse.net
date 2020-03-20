@extends('templates.layout')

@section('content')
    <div class="row">
        <label for="comment_for_author"
               class="col-md-12 col-form-label text-md-left"><h4>{{ __('reviewForm.comment_for_authorHdr') }}
                <button class="btn" type="button" data-toggle="collapse" data-target="#comment_for_author-target" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fa fa-chevron-down hidetoggle" aria-hidden="true"></i>
                </button></h4>
        </label>
        <div class="row"><div class="collapse" id="comment_for_author-target">{{ __('reviewForm.comment_for_author') }}</div></div>
{{--        <div class="col-md-12">
            <textarea rows="5" cols="60" class="form-control" name="comment_for_author" placeholder="Enter text here ...">{{ old('CommentforAuthor') }}</textarea>
        </div>--}}
    </div>

@endsection
