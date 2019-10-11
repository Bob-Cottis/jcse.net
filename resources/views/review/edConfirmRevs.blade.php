@extends('templates.layout')
@section('title')
    {{ __('submit.Confirm Reviewers',['shortName'=>$shortName]) }}
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header"><h4>{{ __('review.Confirm Reviewers',['shortName'=>$shortName]) }}</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ $link }}" method="post">
                            @csrf
                            <input type="hidden" name="paper_id" value="{{ $paper_id }}">
                            <input type="hidden" name="confirmCode" value="{{ $confirmCode }}">
                        {!! __('review.edConfRevHeader0',['shortName'=>$shortName]) !!}
                        @isset($authRevs)
                            {!! __('review.edConfRevHeader1',['shortName'=>$shortName,'vol'=>$vol,'pap'=>$pap]) !!}
                            @foreach($authRevs as $authRev)
                                <div class="form-row rev-row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="{{ $authRev['id'] }}"
                                               name="authRevs[]" checked>
                                        <label class="form-check-label" for="defaultCheck1">
                                            {{ $authRev['person'] }}
                                        </label>
                                    </div>
                                </div>
                            @endforeach
                            {!! __('review.edConfRevHeader2',['shortName'=>$shortName,'vol'=>$vol,'pap'=>$pap]) !!}
                        @endisset
                        @empty($authRevs)
                            {!! __('review.edConfRevHeader3',['shortName'=>$shortName,'vol'=>$vol,'pap'=>$pap]) !!}
                        @endempty
                        @foreach($randRevs as $randRev)
                            <div class="form-row rev-row">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="{{ $randRev['id'] }}"
                                           name="revs[]">
                                    <label class="form-check-label" for="defaultCheck1">
                                        {{ $randRev['person'] }}
                                    </label>
                                </div>
                            </div>
                        @endforeach
{!! __('review.edConfRevHeader4') !!}
                        @php( $old_group = '' )
                        @foreach($topics as $topic)
                            @if ($topic['topicGroup']!= $old_group)
                                <h5 class="jrnl-text">{{ $topic['topicGroup'] }}</h5>
                                @php($old_group = $topic['topicGroup'])
                            @endif
                            <div class="form-check-inline col-md-3">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="topics[]" value="{{ $topic['id'] }}"
                                       @if ($topic['checked'])
                                           checked
                                        @endif
                                    >{{ $topic['topic'] }}
                                </label>
                            </div>
                        @endforeach
                            <p>&nbsp;</p>
                        <div class="form-row">
                            <div class="col-md-4 text-md-right">
                                <button type="submit" class="btn btn-primary"
                                        id="save-btn">{{ __('review.submitRev') }}</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
