@extends('templates.layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header"><h4>{{ __('submit.form_header') }}</h4></div>

                    <div class="card-body">
                        <form method="POST" action="{!! url('/createPaper') !!}">
                            @csrf

                            <div class="form-group row">
                                <label for="title"
                                       class="col-md-2 col-form-label text-md-right">{{ __('submit.title') }}</label>

                                <div class="col-md-10">
                                    <input id="title" type="text"
                                           class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                           name="title" value="{{ old('title') }}" required autofocus>


                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="abstract"
                                       class="col-md-2 col-form-label text-md-right">{{ __('submit.Abstract') }}</label>

                                <div class="col-md-10">
                                    <textarea rows="8" id="abstract" type="text"
                                              class="form-control{{ $errors->has('abstract') ? ' is-invalid' : '' }}"
                                              name="abstract" value="{{ old('abstract') }}"
                                              placeholder="{{ __('submit.Enter') }} {{ __('submit.Abstract') }}"
                                              required autofocus></textarea>

                                    @if ($errors->has('abstract'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('abstract') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="keywords"
                                       class="col-md-2 col-form-label text-md-right">{{ __('submit.Keywords') }}</label>

                                <div class="col-md-10">
                                    <textarea rows="3" id="keywords" type="text"
                                              class="form-control{{ $errors->has('keywords') ? ' is-invalid' : '' }}"
                                              name="keywords" value="{{ old('keywords') }}"
                                              placeholder="{{ __('submit.Enter') }} {{__('submit.keywordsOrPhrases') }}"
                                              required autofocus></textarea>

                                    @if ($errors->has('keywords'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('keywords') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div>
                                {!! __('submit.authorHelp') !!}
                            </div>
                            <div class="repeat-role">
                                <div class="card bg-light">
                                    <div class="card-header h4">{!! __('submit.Author') !!} 1
                                    </div>
                                    <div class="form-group row">
                                        <label for="authemail[]"
                                               class="col-md-2 col-form-label text-md-right">{{ __('submit.Email') }}</label>

                                        <div class="col-md-7">
                                            <input type="email" class="authemail" name="authemail[]" required autofocus>
                                        </div>
                                        <div class="col-md-3">
                                            <button class="btn-primary auth-check-btn" type="button">
                                                {!! __('submit.Check') !!}
                                            </button>
                                        </div>
                                    </div>
                                    <input hidden class="auth-id" name="id[]" value="">
                                    <div class="auth-details d-none">
                                        <div class="col-md-8 offset-md-2">{{ __('submit.EnterAuthDetails') }}
                                        </div>
                                        <div class="form-group row">
                                            <label for="authtitle[]"
                                                   class="col-md-2 col-form-label text-md-right">{{ __('submit.title') }}</label>
                                            <div class="col-md-8">
                                                <select type="text"
                                                        class="authtitle" name="authtitle[]" autofocus>
                                                    @include('titleSelect')
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="authgivenName[]"
                                                   class="col-md-2 col-form-label text-md-right">{{ __('submit.givenName') }}</label>
                                            <div class="col-md-8">
                                                <input type="text"
                                                       class="authgivenName" name="authgivenName[]" autofocus>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="authfamilyName[]"
                                                   class="col-md-2 col-form-label text-md-right">{{ __('submit.familyName') }}</label>
                                            <div class="col-md-8">
                                                <input type="text" class="authfamilyName" name="authfamilyName[]" autofocus>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="authorganization[]"
                                                   class="col-md-2 col-form-label text-md-right">{{ __('submit.organization') }}</label>
                                            <div class="col-md-8">
                                                <input type="text" class="authorganization" name="authorganization[]" autofocus>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-3 offset-md-2">
                                    <button class="btn-primary" id="add-author" type="button">
                                        {!! __('submit.addAuthor') !!}
                                    </button>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <p></p>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-2 offset-md-2">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('submit.Submit') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).on("click","button.auth-check-btn",function () {
            var $block = $(this).closest('.repeat-role');
            $.get("CheckEmail/"+$block.find('.authemail').val(), function(data,success) {
                var dat = JSON.parse(data);
                var $details = $block.find('.auth-details');
                if (dat.status ==1){
                    $block.find('.auth-id').val(dat.id);
                    $block.find('.auth-check-btn').text("{{ __('submit.AuthReg') }}").addClass('btn-success').removeClass('btn-primary');
                    $details.removeClass('d-all').addClass('d-none');
                    $details.find('input').removeAttr('required','required');
                }
                else {
                    $block.find('.auth-check-btn').text("{{ __('submit.Check') }}").addClass('btn-primary').removeClass('btn-success');
                    $block.find('input').attr('required','required');
                    $details.removeClass('d-none').addClass('d-all');
                }
            });
        });
    </script>
    <script>
        $('#add-author').click(function () {
            var currentCount = $('.repeat-role').length;
            var newCount = currentCount + 1;
            var lastRepeatingGroup = $('.repeat-role').last();
            var template = $('.repeat-role').first();
            var newSection = template.clone();

            lastRepeatingGroup.removeClass('current-role');
            newSection.find('.card-header').text('{{ __('submit.Author') }} '+newCount);
            newSection.find('.auth-details').removeClass('d-all').addClass('d-none');
            newSection.find('.authemail').val('').html('');
            newSection.find('.authtitle').val(0);
            newSection.find('.authgivenName').val('');
            newSection.find('.authfamilyName').val('');
            newSection.find('.auth-check-btn').text('Check').removeClass('btn-success').addClass('btn-primary');
            newSection.insertAfter(lastRepeatingGroup).hide().addClass('current-role new-role').slideDown(1000);
            return false;
        });
    </script>
@endsection
