<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<script type="text/javascript">
    ruta = "{{route('formulario')}}";
</script>
<body>
    <div class="container">
        <div class="content">
            <h1>Bienvenido a su curso (MASTER)</h1>
            <form action="{{ route('formulario') }}" method="post">
            	<label for="name">Nombre</label>
            	<input type="text" name="name">
            	<input type="hidden" name="_token" value="{{ csrf_token() }}">
            	<input type="submit" value="Enviar">
            </form>
        </div>
    </div>
</body>
</html>