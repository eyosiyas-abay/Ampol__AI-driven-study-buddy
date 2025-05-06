@props(['url', 'align' => 'center'])

<a href={{ $url }}
    style="margin-top: 28px; padding: 10px 32px; background-color: #3b82f6; border-radius: 6px; color: white; text-decoration: none; display: inline-block;">{{ $slot }}</a>
