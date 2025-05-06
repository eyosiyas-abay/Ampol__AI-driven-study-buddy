<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>{{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="color-scheme" content="light">
    <meta name="supported-color-schemes" content="light">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    {{ $head ?? '' }}

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

        body,
        div,
        a,
        h1,
        h2,
        h3,
        h4,
        p,
        span {
            font-family: 'Open Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>
</head>

<body>
    <div
        style="box-shadow: -10px -10px 30px 4px rgba(0,0,0,0.1), 10px 10px 30px 4px rgba(45,78,255,0.15); width: 650px; margin: 24px auto 0 auto; border-radius: 6px; position: relative; background-size: cover; background-repeat: no-repeat; background-position: top;">
        <div
            style="position: absolute; inset: 0; background: linear-gradient(to bottom, #3b82f6, #ffffff); opacity: 0.1;">
        </div>
        <div style="position: relative; z-index: 10;">
            {{ $header ?? '' }}
            {{ $slot }}
            {{ $footer ?? '' }}
        </div>
    </div>
</body>

</html>
