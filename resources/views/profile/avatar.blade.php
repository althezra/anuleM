@php
    $text = request()->get('name', 'M');
    $words = explode(' ', trim($text));

    if (count($words) >= 2) {
        // Ambil huruf pertama dari dua kata pertama
        $displayText = strtoupper(substr($words[0], 0, 1) . substr($words[1], 0, 1));
    } else {
        // Jika hanya satu kata, ambil dua huruf pertama
        $displayText = strtoupper(substr($words[0], 0, 2));
    }
@endphp

<svg xmlns="http://www.w3.org/2000/svg" width="512px" height="512px" viewBox="0 0 64 64">
    <rect fill="#{{ request()->get('background', '302995') }}" width="64" height="64"/>
    <text x="50%" y="50%"
          style="line-height: 1; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif;"
          alignment-baseline="middle" text-anchor="middle" font-size="28" font-weight="400" dy=".1em" dominant-baseline="middle"
          fill="#{{ request()->get('color', 'BCB7F2') }}">
        {{ $displayText }}
    </text>
</svg>
