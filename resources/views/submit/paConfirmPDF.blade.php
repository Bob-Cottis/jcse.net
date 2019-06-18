@extends('templates.layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header"><h4>
                            @if ($data['modify'])
                                {{ __('submit.paModifyPDFHeader') }}
                            @else
                                {{ __('submit.paConfirmPDFHeader') }}
                            @endif
                        </h4></div>
                    <div class="card-body">
                        <p>
                            @if ($data['modify'])
                                {!! __('submit.paModifyPDFBody') !!}
                            @else
                                {!! __('submit.paConfirmPDFBody',$data) !!}
                            @endif
                        </p>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <a href="{{ $data['reviseLink'] }}" class="btn btn-info btn-block" role="button">{{ __('submit.pdfReviseBtn') }}</a>
                            </div>
                            <div class="col-md-8 text-info">
                                {{ __('submit.pdfRevise') }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <a href="{{ $data['modAuthLink'] }}" class="btn btn-info btn-block" role="button">{{ __('submit.pdfModAuthBtn') }}</a>
                            </div>
                            <div class="col-md-8 text-info">
                                {{ __('submit.pdfModAuth') }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <a href="{{ $data['confirmedLink'] }}" class="btn btn-success btn-block" role="button">{{ __('submit.pdfConfirmBtn') }}</a>
                            </div>
                            <div class="col-md-8 text-success">
                                {!! __('submit.pdfConfirm') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection