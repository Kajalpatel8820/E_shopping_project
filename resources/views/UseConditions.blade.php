<h1>This is If condition section</h1>

@if(strlen($name) > 0)
    string is greater than 0
@else
    string is less than 0
@endif

<h1>This is If else condition section</h1>

@if(strlen($name) < 0)
    first block run
@elseif(strlen($name) > 0 && strlen($name) < 8)
    second block run
@else
    Last block run
@endif

<h1>This is for loop section</h1>

@for ($i = 0; $i < 10; $i++)
    The current value is {{ $i }}
@endfor
 
 