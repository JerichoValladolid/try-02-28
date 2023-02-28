<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Person</h2>
    <h1>Welcome</h1>

    <p><b>Name:</b> {{ $name }}</p>
    <p><b>Age:</b> {{ $age }}</p>
    <p><b>Address:</b> {{ $address }}</p>

    <hr>
    @if($age < 18) <p style="color: blue">Cannot Vote</p>
        @else
        <p style="color: blue">Can Vote</p>
        @endif

        <hr>
        <hr3>Siblings</h3>
            <ol>
                @foreach($siblings as $siblings)
                <li>
                   <td> {{ $siblings['name']}} </td>
                    <td>{{ $siblings['age']}} </td>
                    <td>
                     @if($siblings['age'] < 18)
                       <p style="color: blue">Cannot Vote</p>
                     @else
                       <p style="color: blue">Can Vote</p>
                     @endif
                    </td>
                </li>
                @endforeach
            </ol>
</body>

</html>