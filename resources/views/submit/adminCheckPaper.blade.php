@extends('templates.layout')
@Section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{!! __('submit.adminCheckPaperHeader') !!}</div>

                    <div class="card-body">
                        {!! __('submit.adminCheckPaperBody',$data) !!}
                        <form method="POST" action="{{ route('adApprove') }}">
                            <input type="hidden" name="id" value="{{ $data['id'] }}">
                            <input type="hidden" name="confirmCode" value="{{ $data['confirmCode'] }}">
                            @csrf
                            <input type="checkbox" name="topMargin" value="topMargin">
                                {{ __('submit.topMargin') }}<br>
                            <input type="checkbox" name="bottomMargin" value="bottomMargin">
                                {{ __('submit.bottomMargin') }}<br>
                            <input type="checkbox" name="abstract" value="abstract">
                                {{ __('submit.abstractNeeded') }}<br>
                            <input type="checkbox" name="keywords" value="keywords">
                                {{ __('submit.keywordsNeeded') }}<br>
                            <input type="checkbox" name="lineSpacing" value="lineSpacing">
                                {{ __('submit.lineSpacing') }}<br>
                            <input type="checkbox" name="other" value="other">
                                {{ __('submit.Other') }}<br>
                            <input type="text" name="otherText" ><br>
                            <button type="submit" class="btn btn-primary" name="submit">
                            Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
