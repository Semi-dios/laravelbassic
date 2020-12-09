<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Received</title>
</head>
<body>
      @if($msg)
        <p>Recibiste un mensaje de :  {{$msg['name']}} - {{$msg['email']}}</p>
        <p> <strong>Asunto: </strong> {{$msg['case']}}</p>
      @endif
</body>
</html>
