<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mensaje Recibido</title>
</head>
<body>
	Contenido del email

	<p>Recibiste un mensaje de:{{ $msg['name'] }} - {{ $msg['email'] }}</p>

		<p><strong>ASUNTO:</strong> {{ $msg['subject'] }} </p>

		<p><strong>CONTENIDO:</strong> {{ $msg['content'] }} </p>
</body>
</html>