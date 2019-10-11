@extends('templates.layout')
@section('head')
    <style>
        .ui-autocomplete-loading {
            background: white url("images/ui-anim_basic_16x16.gif") right center no-repeat;
        }
    </style>

@section('content')
    <h3>Enter Keywords</h3>
    <p>Please enter keywords of phrases; type teh first three or four letters of the keyword, than all existing keywords
        will be shown as you type, if possible select one of the keywords shown and press Enter. The keywords will be
        used to guide the selection of reviewers, and it will be most effective if you select existing keywords. However,
        if none of the keywords are suitable, type the full word or phrase, press Enter and a new keyword will be added.</p>
    <p>A new entry box will be displayed as each entry is completed.</p>
    <p>Press the Submit button when you have finished.</p>
    <form class="form-inline" action="/submitKeywords.php">
        <div class="keyword_entry">
            <label for="keyword">Keyword:</label>
            <input type="text" class="form-control keyword" name="keyword[]">
            <input type="hidden" class="keyword_id" name="keyword_id[]">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endsection
@section{'scripts')
<script>
    $( function() {
        function log( keyword_id ) {
            $( "<div>" ).text( message ).prependTo( "#log" );
            $( "#log" ).scrollTop( 0 );
        }

        $( ".keyword" ).autocomplete({
            source: "getKeywords.php",
            minLength: 3,
            select: function( event, ui ) {
                log( "Selected: " + ui.item.value + " aka " + ui.item.id );
            }
        });
    } );
</script>
@endsection
