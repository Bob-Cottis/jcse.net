@extends('templates.layout')
@section('header')
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('title')
    config('jrnl.shortName') {{ __('submit.Nominate Reviewers') }}
    @endsection
@section('header')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
    @endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h4 class="jrnl-text">{{ __('submit.Nominate Reviewers',['shortName'=>$shortName,'vol'=>$vol,'pap'=>$pap]) }}</h4>
                </div>
                <form method="post" action="{{ route('paUpdateRevs') }}">
                    @csrf
                    <input type="hidden" name="paper_id" value="{{ $id }}">
                    <input type="hidden" name="confirmCode" value="{{ $confirmCode }}">
                    {!! __('submit.selectTopics') !!}
                    {{--select with multiple checkboxes--}}
                    @php( $old_group = '' )
                    @foreach($topics as $topic)
                        @if ($topic['topicGroup']!= $old_group)
                            <h5 class="jrnl-text">{{ $topic['topicGroup'] }}</h5>
                            @php($old_group = $topic['topicGroup'])
                        @endif
                        <div class="form-check-inline col-md-3">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="topics[]" value="{{ $topic['id'] }}">{{ $topic['topic'] }}
                            </label>
                        </div>
                    @endforeach
                    <div class="card-body">
                   {{-- --}}{{--display multiple select for topics--}}{{--
                    <select class="selectpicker show-tick" data-icon-base="fas" data-tick-icon="fa-check" multiple>
                        @foreach ($topics as $topic)
                            <option class="topic" value="{{ $topic->id }}">{{ $topic->name }}</option>
                        @endforeach
                    </select>
--}}
                </div>
                <div class="card-body">
                    {!! __('submit.NomRevHeader',['shortName'=>$shortName]) !!}
                    @empty($revs)
                        <div class="form-row rev-row d-none">
                            <div class="col-md-1">&nbsp;</div>
                            <div class="col-md-3 text-md-right">
                                <input type="hidden" class="rev-id" name="revs[]" value="0">
                                <button class="btn btn-primary delete"><i class="far fa-trash-alt"></i></button>
                            </div>
                            <div class="col-md-6">
                                <span class="revName"></span>
                                ( <span class="revEmail"></span>)
                            </div>
                        </div>
                    @endempty
                    @isset($revs)
                        @foreach($revs as $rev)
                            <div class="form-row rev-row">
                                <div class="col-md-1">&nbsp;</div>
                                <div class="col-md-3 text-md-right">
                                    <input type="hidden" class="rev-id" name="revs[]" value="{{ $rev['id'] }}">
                                    <button class="btn btn-primary delete"><i class="far fa-trash-alt"></i></button>
                                </div>
                                <div class="col-md-6">
                                    <span class="revName">{{ $rev['name'] }}</span>
                                    ( <span class="revEmail">{{$rev['email']}}</span>)
                                </div>
                            </div>
                        @endforeach
                    @endisset
                        <div class="form-row line-height:200%">
                        <div class="col-md-3">&nbsp;
                        </div>
                    </div>
                    <div class="alert alert-success d-none"></div>
                    <div class="new-rev" line-height="150%">
                        <div class="d-all" id="new-email-box">
                            <div class="form-row">
                                <div class="col-md-2 offset-md-2">
                                    <label for="new-email" class="col-form-label text-align:right">{{ __('submit.EmailAddress') }}</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="new-email" placeholder="{{ __('submit.EmailAddress') }}" id="new-email">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 text-md-right">
                            <button type="button" class="btn btn-primary d-all" id="check-and-add-btn">{{ __('submit.checkNewrev') }}</button>
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
                            <button type="submit" class="btn btn-primary" id="save-btn">{{ __('submit.submitRev') }}</button>
                        </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
    <script>

        function hideEntryForm(){
            // hide data entry section and clear fields
            // hide new rev form
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

        function addNewrev(id,email) {
            var lastRepeatingGroup = $('.rev-row').last();
            var template = $('.rev-row').first();
            var newSection = template.clone();

            newSection.removeClass('d-none').addClass('d-all');
            newSection.find('.rev-id').val(id);
            newSection.find('.revName').text('');
            newSection.find('.revEmail').text(email);
            newSection.insertAfter(lastRepeatingGroup).slideDown(1000);
            // clear email entry field
            hideEntryForm();
        }

        $('#add-rev').click(function () {
            $('#new-email-box').addClass('d-all').removeClass('d-none');
            $('#check-and-add-btn').addClass('d-all').removeClass('d-none');
            $('.alert-success').addClass('d-none').removeClass('d-all').text('');
            return false;
        });

        $('#check-and-add-btn').on('click', function() {
            $.get("/CheckEmail/" + $('#new-email').val(), function (data,status) {
                var dat = JSON.parse(data);
                if (dat.status==1) {
                    // add new rev
                    addNewrev(dat.id,$('#new-email').val());
                    // hide address entry form
                    // hideEntryForm();
                }
                else
                {
                    // email not known, expose data entry fields
                    $('#new-address').addClass('d-all').removeClass('d-none');
                }
                return false;
            });
        });

/*
        $('#save-btn').on('click', function() {
            var data = {paper_id:{{ $id }},confirmCode:"{{ $confirmCode }}"};
            var r = [];
            $('.rev-row').each(function (i, el) {
                rev = $(this).find('.rev-id').val();
                if (rev!=0) {
                    r.push({id:rev});
                }
            });

            data["revs"] = r;
            var t = [];
            $.each($("input[name='topic']:checked"), function(){
                t.push($(this).val());
            });
            data["topics"] = t;
            if (t==[]) {
                alert('You must selet at least one topic');
                return false
            }
            dat = JSON.stringify(data);
            alert(dat);
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                method: "POST",
                url: "{{ route('paUpdateRevs') }}",
                contentType : "application/json",
                data: dat,
                success: function (result) {
                    $('.alert').html(result.success).addClass('d-all').removeClass('d-none').addClass('alert-success').removeClass('alert-danger');
                    window.location.replace("/paConfirmRevNom/"+paper_id);
                },
                error: function (xhr,textStatus,errorThrown) {
                    $('.alert').html(xhr.statusText).addClass('d-all').removeClass('d-none').addClass('alert-danger').removeClass('alert-success');
                }
            });
            //alert(result.success);
            //alert(document.referrer + '?t=' + Date());
            return false
        });
*/

        $('#save-add-btn').on('click', function() {
            var email = $('#new-email').val();
            var data = {"email":email,
                "title_id":$('#new-title_id').val(),
                "givenName":$('#new-givenName').val(),
                "familyName":$('#new-familyName').val(),
                "organization":$('#new-organization').val(),
                "country_id":$('#new-country_id').val(),
                "source":"addrev"};
            // alert(JSON.stringify(data));
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                method: "POST",
                url: "{{ url('thirdPartyAddUser') }}",
                data: data,
                success: function(result) {
                    $('.alert').html(result.success).addClass('d-all').removeClass('d-none');
                    addNewrev(result.id,email);
                }
            });
            // hideEntryForm();
        })

        $(document).on('click','.delete',function() {
            $(this).closest('.rev-row').remove();
            return false;
        });

    </script>
@endsection
