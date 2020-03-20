@extends('templates.layout')
@section('header')
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
    @if(! isset($paper))
        <h4>Paper not found</h4>
        <button class="btn" type="button" data-toggle="collapse" data-target="#{{ $targetKey }}"
                aria-expanded="false" aria-controls="{{ $targetKey }}">
            <i class="fa fa-chevron-down hidetoggle" aria-hidden="true"></i>
            The paper that you are trying to view has not been found. If you got here from the main administration
            screen this
            should not happen. Please try again in a few minutes, then if you still get the error please
            contact {{ $shortName }} support.
    @else
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit or view paper <small>
                                    <button class="btn btn-outline-primary" type="button" data-toggle="collapse"
                                            data-target="#target"
                                            aria-expanded="false" aria-controls="#target">Show/Hide Help
                                    </button>
                                </small></h4>
                        </div>
                        <div class="card-body">
                            <div class="collapse" id="target">
                                <p>This page allows the modification of the metadata for {{ $shortName }}
                                    Volume {{$paper['volume']}}, Paper {{$paper['paperNumber']}}. Only
                                    the metadata can be changed, as the PDF file is fixed. For this reason you
                                    should avoid changing details such that
                                    they will disagree with the PDF text. For the paper title, abstract and list
                                    of authors click the save icon next
                                    to the revised text in order to save the modified data (note that the icon
                                    <em>only</em> saves the data next to
                                    it, unlike the registered authors). Note that there are two views of the
                                    paper's authors - the first shows all of the
                                    the authors as listed in the paper (if the authors have followed the
                                    submission instructions correctly), while the
                                    second lists the individual authors as they have been registered. From V3 of
                                    the journal software these should be
                                    consistent with each other, but for earlier versions the two descriptions
                                    are often inconsistent, commonly with
                                    co-authors missing. </p>
                                <p>When adding an author you can search the registered user database by entering
                                    the author's family name, or their
                                    email address and this will list all matching registered users. If you enter
                                    an email address that is not found in
                                    the database you can also enter a new user into the database (for example
                                    the email address may be listed
                                    in the paper). Authors who are unavailable can be included in the database
                                    using fake email addresses of the form
                                    "givenName.familyName.*reason*@example.com" where *reason* is one of
                                    'deceased' or 'unknown'. Thus the late Fred
                                    Smith would be registered as fred.smith.deceased@example.com. The
                                    example.com domain is reserved for testing
                                    so these addresses cannot refer to an existing person. There is a slight
                                    possibility that two people will be registered
                                    in the journal with exactly the same name, and to ensure that each address
                                    is distinct, an additional number will
                                    be added to the address (so Dr Smith's address might become
                                    fred.smith.deceased.12345@example.com). When editing the
                                    list of registered authors, you should ensure that the author number matches
                                    the position in the list of authors. The system
                                    will save all registered authors whenever the Save Registered Authors button is
                                    clicked; the save will fail if two authors
                                    are assigned the same author number.</p>
                            </div>
                        </div>
                        <div class="card-body">
                            @csrf
                            <input type="hidden" id="paper_id" name="paper_id" value="{{ $paper['id'] }}">
                            <button type="submit" disabled
                                    style="display: none"></button> {{--prevents Enter from submitting form--}}
                            <div class="form-group">
                                <div class="row mb-2">
                                    <div class="col-md-2 text-md-right mb-1">
                                        Title:
                                    </div>
                                    <div class="col-md-10">
                            <textarea rows="1" cols="60" id="paperTitle" style="min-width: 100%"
                            @if($paper['title'] <> "") >{{ $paper['title'] }}</textarea>
                                        @else placeholder="Enter text here ..."></textarea>
                                        @endif
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-2 text-md-right mb-1">
                                        Astract:
                                    </div>
                                    <div class="col-md-10">
                            <textarea rows="5" cols="60" id="abstract" style="min-width: 100%"
                            @if($paper['abstract'] <> "") >{{ $paper['abstract'] }}</textarea>
                                        @else placeholder="Enter text here ..."></textarea>
                                        @endif
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-2 text-md-right mb-1">
                                        Authors:
                                    </div>
                                    <div class="col-md-10">
                            <textarea rows="1" cols="60" id="authors" style="min-width: 100%"
                            @if($paper['authors'] <> "") >{{ $paper['authors'] }}</textarea>
                                        @else placeholder="Enter text here ..."></textarea>
                                        @endif
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="offset-md-2 col-md 10">
                                        <button type="button" id="saveMetaData" class="btn btn-primary">Save
                                            Title, Abstract and Author List
                                        </button>
                                        <button type="button" id="reloadMetaData" class="btn btn-primary ml-3">
                                            Cancel Changes
                                        </button>
                                        <br>
                                    </div>
                                </div>
                                @for($i=1;$i<=$authCount;$i++)
                                    <div class="form-row author-row mb-2">
                                        @if(array_key_exists($i,$regAuths))
                                            @php
                                                $auth = $regAuths[$i]
                                            @endphp
                                        @else
                                            @php
                                                $auth = ["id" => -1,"salutation" => " ",
                                                "name" => ' ',
                                                "organization" => " ","country" => " ","email" => " "]
                                            @endphp
                                        @endif
                                        <input type="hidden" class="auth-id" id="auth_id_{{$i}}" value="{{ $auth['id'] }}">
                                        <div class="col-md-2 text-md-right">
                                            Author <select class="authorNum" id="authNum_{{$i}}">
                                                @for($k=1;$k<=$authCount;$k++)
                                                    <option value="{{ $k }}" @if($k==$i) selected
                                                        @endif>{{ $k }}
                                                    </option>
                                                @endfor
                                            </select> :
                                        </div>
                                        <div class="col-md-10">
                                            <span class="authorName" id="authorName_{{$i}}">{!!  $auth['name'] !!}</span>
                                            ( <span class="authorEmail" id="authorEmail_{{$i}}">{{$auth['email']}}</span><span class="add_email
@if($auth['id']==-1)
                                                    d-all
@else
                                                    d-none
@endif
                                                    "><input type="email" class="add_email" placeholder="Enter email address">)
                                            <button type="button" class="add-name btn btn-outline-primary">Add author</button></span>
                                        </div>
                                    </div>
                                @endfor
                            </div>

                            <div class="alert alert-success d-none"></div>
                            <div class="row">
                                <div class="col-md-2 text-md-left"></div>
                                    <button type="button" class="btn btn-primary" id="saveRegAuth">
                                        Save Registered Authors
                                    </button>
                                    <button type="button" class="btn btn-primary ml-5" id="reloadRegAuth">
                                        Cancel Change
                                    </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   @endif
@endsection
@section('scripts')
    <script>
        $("#saveMetaData").on('click', function () {
            var data = {
                "title": $("#paperTitle").val(),
                "abstract": $("#abstract").val(),
                "authors": $("#authors").val(),
                "id": $("#paper_id").val()};
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                method: "POST",
                url: "{{ route('saveMetaData') }}",
                data: data,
                success: function (result) {
                    $('#titleAlert').html(result.success).addClass('d-all').removeClass('d-none');
                }
            })
        });

        $("#reloadMetaData").on('click', function () {
            var id = $("#paper_id").val();
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                method: "POST",
                url: "{{ route('reloadMetaData') }}",
                data: {id:id},
                success:function(data){
                    $("#paperTitle").val(data.data.title);
                    $("#abstract").val(data.data.abstract);
                    $("#authors").val(data.data.authors);
                },
                error: function(xhr, status) {
                    alert(xhr.responseText);
                }
            });
        })

        $("#saveRegAuth").on('click', function() {
            var paper_id = $("#paper_id").val();
            var data = 'data={"id":'+paper_id+',"regAuths":[';
            var regAuths = [];
            @for($i=1;$i <= $authCount ;$i++)
                var authNum = $("#authNum_{{$i}}").val();
                var auth_id = $("#auth_id_{{$i}}").val();
            if(auth_id != -1) {
                data += '{"authNum": '+authNum+', "auth_id": '+auth_id+'},';
                alert('data = '+data);
            }
            @endfor
                data = data.slice(0,-1)+']}'

            alert(JSON.stringify(data));
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                method: "GET",
                'dataType': 'json',
                'contentType': 'application/json',
                processData: false,
                url: "{{ route('saveRegAuth') }}",
                data: data,
                success: function (result) {
                    /*$('#titleAlert').html(result.success).addClass('d-all').removeClass('d-none');*/
                    alert(data.success);
                }
            })
        });

        $("#reloadRegAuth").on('click', function() {
            var paper_id = $("#paper_id").val();
            alert('Paper id = '+paper_id);
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                method: "GET",
                url: "{{ route('reloadRegAuth') }}",
                data: {id:paper_id},
                success: function (result) {
                    result = JSON.parse(result);
                    /*$('#titleAlert').html(result.success).addClass('d-all').removeClass('d-none');*/
                    alert(result.success);
                    // clear the current data
                    $(".auth_id").val("");
                    $(".authorName").val("");
                    $(".authorEmail").val("");
                    @for($i=1;$i<=$authCount;$i++)
                        $('authNum_{{$i}}').val({{$i}});
                    @endfor

                    })
                })
            })

        })
    </script>
@endsection
