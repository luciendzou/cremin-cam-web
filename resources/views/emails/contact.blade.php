<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nouveau message</title>
</head>
<body style="font-family:Arial,Helvetica,sans-serif;color:#222;">
    <h3>Nouveau message de contact</h3>
    <p><strong>Nom :</strong> {{ $data['name'] }}</p>
    <p><strong>Email :</strong> {{ $data['email'] }}</p>
    <p><strong>Destination :</strong> {{ $data['destination'] }}</p>
    @if(!empty($data['subject']))
        <p><strong>Sujet :</strong> {{ $data['subject'] }}</p>
    @endif
    <hr>
    <p style="white-space:pre-wrap;">{{ $data['message'] }}</p>
</body>
</html>