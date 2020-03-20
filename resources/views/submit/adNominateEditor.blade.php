@extends('templates.layout')
@section('content')
{!! __('review.adNominateEditorHeader',$data['dispData']) !!}
    <form method="post" action="{{ route('adNomEditor') }}">
        @csrf
        <input type="hidden" name="paper_id" value="{{ $data['id'] }}">
        <input type="hidden" name="confirmCode" value="{{ $data['confirmCode'] }}">
        @foreach ($data['randEditors'] as $ed)
       <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="optradio" value="{{ $ed['id'] }}">{{ $ed['name'].', '.
            $ed['organization'].', '.$ed['country'] }}<br>
            Keywords:
            @foreach($ed['keywords'] as $id=>$k)
                {{ $k['keyword'].', ' }}
                @endforeach
        </label>
        </div>
        <br>
    @endforeach
        <button type="submit" class="btn btn-info">Submit</button>
    </form>

    @endsection
