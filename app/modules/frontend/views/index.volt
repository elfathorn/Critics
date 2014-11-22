<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        {{ get_title() }}
        {{ stylesheet_link('css/bootstrap/bootstrap.min.css') }}
        {{ stylesheet_link('css/carousel/carousel.css') }}
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Your invoices">
        <meta name="author" content="Phalcon Team">
    </head>
    <body>
        {{ content() }}
        {{ javascript_include('js/jquery/jquery.min.js') }}
        {{ javascript_include('js/bootstrap/bootstrap.min.js') }}
        {{ javascript_include('js/docs/docs.min.js') }}
    </body>
</html>