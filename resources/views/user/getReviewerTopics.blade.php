@extends('templates.layout')
@section('content')
    {!! __('topics.getTopics',$data) !!}
    <form action="{{ $link }}" method="post">
        @csrf
    @php( $old_group = '' )
    @foreach($topics as $topic)
        @if ($topic['topicGroup']!= $old_group)
        <h5 class="jrnl-text">{{ $topic['topicGroup'] }}</h5>
            @php($old_group = $topic['topicGroup'])
        @endif
        <div class="form-check-inline col-md-3">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="topics[]" value="{{ $topic['id'] }}"
                @if (in_array($topic['id'],$t))
                    checked
                @endif
                    >{{ $topic['topic'] }}
            </label>
        </div>
    @endforeach
    <br><input type="submit" class="btn btn-primary" value="Submit">
    </form>
@endsection
