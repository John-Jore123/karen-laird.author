<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <div>
    Name: {{ $mailData['name'] }} <br>
    Phone: {{ $mailData['phone'] }} <br>
    Email: {{ $mailData['email'] }} <br>
    Message: {{ $mailData['message'] }}

    {{-- {{ $data }} --}}


  </div>
</body>
</html>