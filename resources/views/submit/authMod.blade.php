@extends('templates.layout')
@section('header')
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header"><h4>{{ __('submit.authModHeader') }}</h4>
                    </div>
                    <div class="card-body">
                        {!! __('submit.authModBody') !!}
                        @foreach($auths as $auth)
                            <div class="form-row author-row">
                                <div class="col-md-1">&nbsp;</div>
                                <div class="col-md-3 text-md-right">
                                    <input type="hidden" class="auth-id" value="{{ $auth['id'] }}">
                                    <button class="btn btn-primary delete"><i class="far fa-trash-alt"></i></button>
                                    <button class="btn btn-primary move-up"><i class="fas fa-angle-up"></i></button>
                                    <button class="btn btn-primary move-down"><i class="fas fa-angle-down"></i></button>
                                </div>
                                <div class="col-md-6">
                                    <span class="authorNum">{{ $auth['authorNum'] }}</span>
                                    : <span class="authorName">{{ $auth['name'] }}</span>
                                    ( <span class="authorEmail">{{$auth['email']}}</span>)
                                </div>
                            </div>
                        @endforeach
                        <div class="form-row line-height:200%">
                            <div class="col-md-3">&nbsp;
                            </div>
                        </div>
                        <div class="alert alert-success d-none"></div>
                        <div class="new-author" line-height="150%">
                            <div class="form-row">
                                <div class="col-md-4 text-md-right">
                                    <button class="btn btn-primary" id="add-auth">{{ __('submit.addAuthor') }}</button>
                                </div>
                            </div>
                            <div class="d-none" id="new-email-box">
                                <div class="form-row">
                                    <div class="col-md-2 offset-md-2">
                                        <label for="new-title" class="col-form-label text-align:right">{{ __('submit.EmailAddress') }}</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="new-email" placeholder="{{ __('submit.EmailAddress') }}" id="new-email">
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="form-row">
                                <div class="col-md-4 text-md-right">
                                    <button type="button" class="btn btn-primary d-none" id="check-and-add-btn">{{ __('submit.checkNewAuthor') }}</button>
                                </div>
                            </div>

                            <div class="d-none" id="new-address">
                                {{ __('submit.AddressHelp') }}<br/>
                                <div class="form-row">
                                    <div class="col-md-2">
                                        <label for="new-title" class="col-form-label offset-md-1">{{ __('submit.title') }}</label>
                                    </div>
                                    <div class="col-md-6">
                                        <select type="text"
                                                class="new-title" id="new-title_id" autofocus>
                                            {!! \App\Http\Controllers\Auth\RegisterController::title_select(0) !!}
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-2">
                                        <label for="new-givenName" class="col-form-label offset-md-1">{{ __('submit.givenName') }}</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" id="new-givenName">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-2">
                                        <label for="new-familyName" class="col-form-label offset-md-1">{{ __('submit.familyName') }}</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" id="new-familyName">
                                    </div>
                                </div><div class="form-row">
                                    <div class="col-md-2">
                                        <label for="new-organization" class="col-form-label offset-md-1">{{ __('submit.organization') }}</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" id="new-organization">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-2">
                                        <label for="new-country_id" class="col-form-label offset-md-">{{ __('submit.country') }}</label>
                                    </div>
                                    <div class="col-md-6">
                                        <select type="text"
                                                class="new-country_id" id="new-country_id"
                                                autofocus>
                                            {!! \App\Http\Controllers\Auth\RegisterController::country_select(0) !!}
                                            }
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-4 text-md-right">
                                        <button type="button" class="btn btn-primary" id="save-add-btn">{{ __('submit.saveAndAdd') }}</button>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                &nbsp;
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 text-md-right">
                                    <button type="button" class="btn btn-primary" id="save-btn">{{ __('submit.Save') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>

        function renumber() {
            $('.authorNum').each(function(i, obj) {
                //test
                //var newNum = toString(i);
                $(this).text(i+1);
            });
        }

        function hideEntryForm(){
            // hide data entry section and clear fields
            // hide new author form
            $('#new-email-box').addClass('d-none').removeClass('d-all');
            $('#list-add-btn').addClass('d-none').removeClass('d-all');
            $('#check-and-add-btn').addClass('d-none').removeClass('d-all');
            $('#new-address').addClass('d-none').removeClass('d-all');
            // and clear data fields
            $('#new-email').val('');
            $('#new-title_id').val('');
            $('#new-givenName').val('');
            $('#new-familyName').val('');
            $('#new-organization').val('');
            $('#new-country_id').val('');
        }

        function addNewAuthor(id,email) {
            var lastRepeatingGroup = $('.author-row').last();
            var newNum = parseInt(lastRepeatingGroup.find('.authorNum').text())+1;
            var template = $('.author-row').first();
            var newSection = template.clone();

            newSection.find('.auth-id').val(id);
            newSection.find('.authorNum').text(newNum);
            newSection.find('.authorName').text('');
            newSection.find('.authorEmail').text(email);
            newSection.insertAfter(lastRepeatingGroup).slideDown(1000);
            // clear email entry field
            hideEntryForm();
            /*$('#new-email-box').addClass('d-none').removeClass('d-all');
            $('#list-add-btn').addClass('d-none').removeClass('d-all').addClass('list-add-btn').removeClass('save-user-btn').text("{{ __('submit.AddNewAuthor') }}");
            $('#new-email').val('');*/
        }
        $('#add-auth').click(function () {
            $('#new-email-box').addClass('d-all').removeClass('d-none');
            $('#check-and-add-btn').addClass('d-all').removeClass('d-none');
            return false;
        });

        $('#check-and-add-btn').on('click', function() {
            $.get("/CheckEmail/" + $('#new-email').val(), function (data,status) {
                var dat = JSON.parse(data);
                if (dat.status==1) {
                    // add new author
                    addNewAuthor(dat.id,$('#new-email').val());
                    // hide address entry form
                    hideEntryForm();
                }
                else
                {
                    // email not known, expose data entry fields
                    $('#new-address').addClass('d-all').removeClass('d-none');
                }
                return false;
            });
        });

        $('#save-btn').on('click', function() {
            var data = '{"authors":[';
            $('.author-row').each(function (i, el) {
                data += '{"id":"' + $(this).find('.auth-id').val() + '","authorNum":"' + $(this).find('.authorNum').text() + '"},'
            });
            // remove the lst comma
            data = data.slice(0,-1);
            data += ']}';
            alert(data);
            dat = {id:'{{ $id }}',authors:data};

            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                method: "POST",
                url: "{{ url('updateAuthors') }}",
                data: dat,
                success: function (result) {
                    $('.alert').html(result.success).addClass('d-all').removeClass('d-none');
                }
            });
            alert(document.referrer + '?t=' + Date());
            window.location = document.referrer;
            return false;
        });

        $('#save-add-btn').on('click', function() {
            var email = $('#new-email').val();
            var data = {"email":email,
                "title_id":$('#new-title_id').val(),
                "givenName":$('#new-givenName').val(),
                "familyName":$('#new-familyName').val(),
                "organization":$('#new-organization').val(),
                "country_id":$('#new-country_id').val(),
                "source":"addAuthor"};
            // alert(JSON.stringify(data));
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                method: "POST",
                url: "{{ url('thirdPartyAddUser') }}",
                data: data,
                success: function(result) {
                $('.alert').html(result.success).addClass('d-all').removeClass('d-none');
                addNewAuthor(result.id,email);
                }
            });
            hideEntryForm();
        })

        $(document).on('click','.delete',function() {
            $(this).closest('.author-row').remove();
            renumber();
            return false;
        });

        $(document).on('click','.move-up', function() {
            $currentElement = $(this).closest('.author-row');
            moveUp($currentElement);
            renumber();
        });

        $(document).on('click','.move-down', function() {
            $currentElement = $(this).closest('.author-row');
            moveDown($currentElement);
            renumber();
        });

        function moveUp($curEl) {
            var hook = $curEl.prev('.author-row');
            if (hook.length) {
                var elementToMove = $curEl.detach();
                hook.before(elementToMove);
            }
        }

        var moveDown = function ($curEl) {
            var hook = $curEl.next('.author-row');
            if (hook.length) {
                var elementToMove = $curEl.detach();
                hook.after(elementToMove);
            }
        };

    </script>
@endsection
