<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        Message from {{$data['name']}}
    </h1>
    <h2>E-Mail : {{$data['email']}}</h2>
    <h2>Phone : {{$data['phone']}}</h2>
    <h2>Subject : {{$data['subject']}}</h2>
    <p>
        {{$data['msg']}}
    </p>
</body>
</html>
