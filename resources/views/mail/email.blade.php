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
    Name: {{ $emailData['name'] }} 
    <br>
    Phone: {{ $emailData['phone'] }} 
    <br>
    Email: {{ $emailData['email'] }} 
    <br><br>
    {{ $emailData['message'] }}
  </div>
</body>
</html>