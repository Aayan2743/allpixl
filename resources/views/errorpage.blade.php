<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    
    @if (!empty($failures))
    <div class="alert alert-danger">
        <p>The following Errors occurred:</p>
        <ul>
            @foreach ($failures as $failure)
                <li>Row {{ $failure->row() }}: {{ $failure->errors()[0] }}</li>
            @endforeach
        </ul>
    </div>
@endif

<a href="{{route('admin.leads')}}">Re Upload </a>
    
</body>
</html>