<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    {{--Font Awesome--}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/jcseStyle.css') }}" rel="stylesheet">

</head>

<body>
<form method="POST" action="{!! url('/postTest') !!}">
    @csrf
    @if ($errors->any())
        @php
            $count = 0;
            $old_email = old('email.0');
        @endphp
        @while (!is_null($old_email) || $errors->has('email.'.$count))
            <div class="repeat-block">
                <div class="card bg-light">
                    <div class="form-group row">
                        <label for="email[{{ $count+1 }}]"  class="col-md-2 col-form-label text-md-right">Email {{ $count+1 }}</label>
                        <div class="col-md-6">
                            <input name="email[{{ $count }}]" type="text" class="form-control{{ $errors->has('email.'.$count) ? ' is-invalid' : '' }}" value="{{ old('email.'.$count) }}">
                            @if ($errors->has('email.'.$count))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email.'.$count) }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @php
                $count = $count+1;
                $old_email = old('email.'.$count);
            @endphp
        @endwhile
    @else
        <div class="repeat-block">
            <div class="card bg-light">
                <div class="form-group row">
                    <label for="email[]" class="col-md-2 col-form-label text-md-right">Email 1</label>
                    <div class="col-md-6">
                        <input name="email[]" type="text">
                    </div>
                </div>
            </div>
        </div>
    @endif
        <button class="btn-primary" id="add-email" type="button">
            Add Email
        </button>
        <button class="btn-primary" type="submit">
            Submit
        </button>
    </form>


<script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous">
    </script>
<script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous">
</script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"><!-- Menu Toggle Script -->

<script>
    $('#add-email').click(function () {
        var currentCount = $('.repeat-block').length;
        var newCount = currentCount + 1;
        var lastRepeatingGroup = $('.repeat-block').last();
        var template = $('.repeat-block').first();
        var newSection = template.clone();

        newSection.find('label').text('Email '+newCount);
        newSection.find('input').val('');
        newSection.insertAfter(lastRepeatingGroup).slideDown(1000);

        return false;});
</script>
