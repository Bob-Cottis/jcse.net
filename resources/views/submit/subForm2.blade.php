@extends('templates.layout')
@section('headercss')
    <link href=" {{ asset('css/typeaheadjs.css') }}" rel="stylesheet">
    @endsection
@section('content')
    @guest
        <H4>Paper Submission</H4>
        <p><strong>{{ __('submit.mustRegister') }}</strong></p>
        <a href="{!! route('register') !!}" class="btn btn-primary" role="button">Register</a>
        <a href="{!! route('login') !!}" class="btn btn-primary" role="button">Login</a> &nbsp;&nbsp;
    @endguest
    @auth
    <!--suppress HtmlFormInputWithoutLabel -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header"><h4>{{ __('submit.form_header') }}</h4></div>

                    <div class="card-body">
                        <form method="POST" action="{!! url('createPaper') !!}">
                            @csrf
                            <input type="hidden" id="leadAuthor" name="leadAuthor" value="{{ auth()->user()->id }}">
                            <button type="submit" disabled style="display: none"></button> {{--prevents Enter from submitting form--}}
                            <div class="form-group row">
                                <label for="title"
                                       class="col-md-2 col-form-label text-md-right">{{ __('submit.paperTitle') }}</label>

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
                                              name="abstract" placeholder="{{ __('submit.Enter') }} {{ __('submit.Abstract') }}"
                                              required autofocus>{{ old('abstract') }}</textarea>
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
                                    <input type="text" class="typeahead tt-query" autocomplete="off" spellcheck="false" id="keywd">
                                    <button type="button" id="set-keywd" class="btn-primary">Use Keyword</button>
                                    <textarea rows="3" id="keywords" type="text" readonly
                                              class="form-control{{ $errors->has('keywords') ? ' is-invalid' : '' }}"
                                              name="keywords" placeholder="{{ __('submit.Enter') }} {{__('submit.keywordsOrPhrases') }}"
                                              required autofocus>{{ old('keywords') }}</textarea>
                                    @if ($errors->has('keywords'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('keywords') }}</strong>
                                    </span>
                                    @endif
                                    <button type="button" id="copy-keywords" class="btn-primary">Copy Keywords</button>
                                </div>
                            </div>

                            <div>
                                {!! __('submit.authorHelp') !!}
                            </div>
                            @if (is_null(old('authemail')))
                                <div class="repeat-role">
                                    <div class="card bg-light">
                                        <div class="card-header h4">{!! __('submit.Author') !!} 1
                                        </div>
                                        <div class="form-group row">
                                            <label for="authemail[]"
                                                   class="col-md-2 col-form-label text-md-right">{{ __('submit.Email') }}</label>

                                            <div class="col-md-6">
                                                <input type="email" class="authemail" name="authemail[]" required
                                                       autofocus value="{{ auth()->user()->email }}">
                                            </div>
                                            <div class="col-md-2 email-check text-success">
                                                    {!! __('submit.AuthReg') !!}
                                            </div>
                                            <div class="col-md-2">
                                                <button class="btn-primary auth-noEmail-btn" type="button">
                                                    {!! __('NoEmail') !!}
                                                </button>
                                            </div>
                                        </div>
                                        <input type="hidden" class="auth_id" name="auth_id[]" value="{{ auth()->user()->id }}">
                                        <div class="auth-details d-none">
                                            <div class="col-md-8 offset-md-2">{{ __('submit.EnterAuthDetails') }}
                                            </div>
                                            <div class="form-group row">
                                                <label for="authtitle[]"
                                                       class="col-md-2 col-form-label text-md-right">{{ __('submit.title') }}</label>
                                                <div class="col-md-8">
                                                    <select type="text"
                                                            class="authtitle" name="authtitle[]" autofocus>
                                                        {!! \App\Http\Controllers\Auth\RegisterController::title_select(0) !!}
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
                                                    <input type="text" class="authfamilyName" name="authfamilyName[]"
                                                           autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="authorganization[]"
                                                       class="col-md-2 col-form-label text-md-right">{{ __('submit.organization') }}</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="authorganization"
                                                           name="authorganization[]" autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="authcountry_id[]"
                                                       class="col-md-2 col-form-label text-md-right">{{ __('submit.country') }}</label>
                                                <div class="col-md-8">
                                                    <select type="text"
                                                            class="authcountry_id" name="authcountry_id[]"
                                                            autofocus>
                                                        {!! \App\Http\Controllers\Auth\RegisterController::country_select(0) !!}
                                                        }
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                @php
                                    $count = 0;
                                    $old_email = old('authemail.0');
                                @endphp
                                @while (!is_null(old('authemail.'.$count)) || $errors->has('authemail.'.$count))
                                    <div class="repeat-role">
                                        <div class="card bg-light">
                                            <div class="card-header h4">{{ __('submit.Author') }} {{ $count+1 }}
                                            </div>
                                            <div class="form-group row">
                                                <label for="authemail[{{$count}}]"
                                                       class="col-md-2 col-form-label text-md-right">{{ __('submit.Email') }}</label>
                                                <div class="col-md-7">
                                                    <input type="email"
                                                           class="authemail form-control{{ $errors->has('authemail.'.$count) ? ' is-invalid' : '' }}"
                                                           name="authemail[{{ $count }}]"
                                                           value="{{ old('authemail.'.$count) }}" required autofocus>
                                                @if ($errors->has('authemail.'.$count))
                                                                   <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('authemail.'.$count) }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                <div class="col-md-2 email-check text-primary">
                                                    {!! __('submit.NotReg') !!}
                                                </div>
                                                <div class="col-md-2">
                                                    <button class="btn-primary auth-noEmail-btn" type="button">
                                                        {!! __('NoEmail') !!}
                                                    </button>
                                                </div>
                                            </div>
                                            @if (is_null( old('auth_id.'.$count)))
                                                <input type="hidden" name="auth_id[{{ $count }}]" value="">
                                                <div class="auth-details d-all">
                                                @else
                                                        <input type="hidden" name="auth_id[{{ $count }}]" value="">
                                                        <div class="auth-details d-none">
                                                    @endif
                                                    <div class="col-md-8 offset-md-2">{{ __('submit.EnterAuthDetails') }}
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="authtitle[{{$count}}]"
                                                               class="col-md-2 col-form-label text-md-right">{{ __('submit.title') }}</label>
                                                        <div class="col-md-8">
                                                            <select type="text"
                                                                    class="authtitle" name="authtitle[{{ $count }}]"
                                                                    autofocus>
                                                                {!! \App\Http\Controllers\Auth\RegisterController::title_select(old('authtitle.'.$count)) !!}
                                                                }
                                                            </select>
                                                            @if ($errors->has('authcountry_id.'.$count))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('authcountry_id.'.$count) }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="authgivenName[{{ $count }}]"
                                                               class="col-md-2 col-form-label text-md-right">{{ __('submit.givenName') }}</label>
                                                        <div class="col-md-8">
                                                            <input type="text"
                                                                   class="authgivenName form-control{{ $errors->has('authgivenName.'.$count) ? ' is-invalid' : '' }}"
                                                                   autofocus
                                                                   name="authegivenName[{{ $count }}]"
                                                                   value="{{ old('authgivenName.'.$count) }}" required autofocus>
                                                                    @if ($errors->has('authgivenName.'.$count))
                                                                           <span class=" invalid-feedback"
                                                                                role="alert">
                                                                            <strong>{{ $errors->first('authgivenName.'.$count) }}</strong>
                                                                            </span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="authfamilyName[{{$count}}]"
                                                                       class="col-md-2 col-form-label text-md-right">{{ __('submit.authfamilyName') }}</label>
                                                                <div class="col-md-8">
                                                                    <input type="text"
                                                                           class="authfamilyName form-control{{ $errors->has('authfamilyName.'.$count) ? ' is-invalid' : '' }}"
                                                                           autofocus
                                                                           name="authfamilyName[{{ $count }}]"
                                                                           value="{{ old('authfamilyName.'.$count) }}" required autofocus>
                                                @if ($errors->has('authfamilyName.'.$count))
                                                                                   <span class=" invalid-feedback"
                                                                    role="alert">
                                                                    <strong>{{ $errors->first('authfamilyName.'.$count) }}</strong>
                                                                    </span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="organization[{{$count}}]"
                                                                       class="col-md-2 col-form-label text-md-right">{{ __('submit.organization') }}</label>
                                                                <div class="col-md-8">
                                                                    <input type="text"
                                                                           class="organization form-control{{ $errors->has('organization.'.$count) ? ' is-invalid' : '' }}"
                                                                           autofocus
                                                                           name="organization[{{ $count }}]"
                                                                           value="{{ old('organization.'.$count) }}" required autofocus>
                                                                    @if ($errors->has('organization.'.$count))
                                                                                   <span class=" invalid-feedback"
                                                                    role="alert">
                                                                    <strong>{{ $errors->first('organization.'.$count) }}</strong>
                                                                    </span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="authcountry_id[{{$count}}]"
                                                                       class="col-md-2 col-form-label text-md-right">{{ __('submit.country') }}</label>
                                                                <div class="col-md-8">
                                                                    <select type="text"
                                                                            class="authcountry_id" name="authcountry_id[{{ $count }}]"
                                                                            autofocus>
                                                                        {!! \App\Http\Controllers\Auth\RegisterController::country_select(old('authcountry_id.'.$count)) !!}

                                                                    </select>
                                                                    @if ($errors->has('authcountry_id.'.$count))
                                                                        <span class=" invalid-feedback"
                                                                              role="alert">
                                                                    <strong>{{ $errors->first('authcountry_id.'.$count) }}</strong>
                                                                    </span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                         </div>
                                                </div>
                                        </div>
                                    </div>
                                    @php
                                    $count++;
                                    @endphp
                                @endwhile
                            @endif
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
    @endauth
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/corejs-typeahead/1.2.1/typeahead.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            // Set the Options for "Bloodhound" suggestion engine
            var keywords = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.whitespace,
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                prefetch: "{{ config('jrnl.URL') }}/autocomplete/1",
                remote:
                    {
                        url: "{{ config('jrnl.URL') }}/autocomplete/0/%QUERY",
                        wildcard: "%QUERY"
                    }
                //local: keywords
            });

            $("#keywd").typeahead({
                    hint: true,
                    highlight: true,
                    minLength: 1
                },
                {
                    name: 'keywords',
                    source: keywords
                });
        });

        $("#set-keywd").click(function() {
            if ($("#keywords").val()=="") {
                var $key = $("#keywd").val();
                $("#keywords").val($key.charAt(0).toUpperCase() + $key.slice(1));
            }
            else {
                $("#keywords").val($("#keywords").val() + ', ' + $("#keywd").val());
            }
            $("#keywd").val("");
        })
        $("#copy-keywords").click(function() {
            $("#keywords").focus();
            $("#keywords").select();
            document.execCommand('copy');
        })

    </script>
    <script>
        $(document).on('change', '.authemail', function () {
            var $block = $(this).closest('.repeat-role');
            $.get("CheckEmail/" + $block.find('.authemail').val(), function (data, success) {
                var dat = JSON.parse(data);
                var $details = $block.find('.auth-details');
                if (dat.status == 1) {
                    $block.find('.auth_id').val(dat.id);
                    $block.find('.email-check').text("{{ __('submit.AuthReg') }}").addClass('text-success').removeClass('text-primary');
                    $details.removeClass('d-all').addClass('d-none');
                    $details.find('input').removeAttr('required', 'required');
                } else {
                    $block.find('.auth_id').val('');
                    $block.find('.email-check').text("{{ __('submit.NotReg') }}").addClass('text-primary').removeClass('text-success');
                    $block.find('input').attr('required', 'required');
                    $details.removeClass('d-none').addClass('d-all');
                }
            });
        });
        /*$(document).on('change','.authEmail', function() {
            var $block = $(this).closest('.repeat-role');
            $block.find('button.auth-check-btn').removeClass('btn-success').addClass('btn-primary').text('{{ __('submit.Check') }}')
        });*/
        $(document).on('click', 'button.auth-noEmail-btn', function () {
            var $block = $(this).closest('.repeat-role');
            $block.find('.authemail').val('not.known@none.com');
            $block.find('.auth-details').removeClass('d-none').addClass('d-all');
        });
        $('#add-author').click(function () {
            var currentCount = $('.repeat-role').length;
            var newCount = currentCount + 1;
            var lastRepeatingGroup = $('.repeat-role').last();
            var template = $('.repeat-role').first();
            var newSection = template.clone();

            lastRepeatingGroup.removeClass('current-role');
            newSection.find('.card-header').text('{{ __('submit.Author') }} ' + newCount);
            newSection.find('.auth-details').removeClass('d-all').addClass('d-none');
            newSection.find('.auth_id').val('');
            newSection.find('.authemail').val('').html('');
            newSection.find('.authtitle').val(1);
            newSection.find('.authgivenName').val('');
            newSection.find('.authfamilyName').val('');
            newSection.find('.authorganization').val('');
            newSection.find('.authcountry').val(1);
            newSection.find('.email-check').text('{{ __('submit.Check') }}').removeClass('text-success').addClass('text-primary');
            newSection.insertAfter(lastRepeatingGroup).hide().addClass('current-role new-role').slideDown(1000);
            return false;
        });
    </script>
@endsection
