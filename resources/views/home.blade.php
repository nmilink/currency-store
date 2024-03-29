<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Store</title>
    <link href="{{ asset('assets/app.css') }}" rel="stylesheet" type="text/css" >
    <script src="https://unpkg.com/htmx.org@1.9.4" integrity="sha384-zUfuhFKKZCbHTY6aRR46gxiqszMk5tcHjsVFxnUo8VMus4kHGVdIYVbOYYNlKmHV" crossorigin="anonymous" defer></script>
    <script src="https://unpkg.com/htmx.org/dist/ext/response-targets.js" defer></script>
</head>

<body hx-ext="response-targets">

    <div hx-get="api/currencies" hx-trigger="load" hx-target='#table-placeholder' hx-swap="innerHTML">
    <div id="table-placeholder"></div>
    <div id="buy_currency_placeholder"></div>

</body>
<footer>
    
    
</footer>
</html>