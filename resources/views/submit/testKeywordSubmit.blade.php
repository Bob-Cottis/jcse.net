<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel and Typeahead Tutorial</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<h1>Laravel and Typeahead Tutorial</h1>
<hr>
<div class="bs-example" id="prefetch">
        <input type="text" class="typeahead tt-query" autocomplete="off" spellcheck="false">
    </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins  and Typeahead) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- Typeahead.js Bundle -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/corejs-typeahead/1.2.1/typeahead.bundle.min.js"></script>
<!-- Typeahead Initialization -->
<script>
    $(document).ready(function() {

        //var keywords = ['Corrosion','Stress Corrosion Cracking','SCC'];

        // Set the Options for "Bloodhound" suggestion engine
        var keywords = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.whitespace,
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch: "http://192.168.10.10/autocomplete/1",
            remote:
                {
                    url: "http://192.168.10.10/autocomplete/0/%QUERY",
                    wildcard: "%QUERY"
                }
            //local: keywords
        });

        $("#prefetch .typeahead").typeahead({
            hint: true,
            highlight: true,
            minLength: 1
            },
            {
            name: 'keywords',
            source: keywords
        });
    });
</script>
</body>
</html>

