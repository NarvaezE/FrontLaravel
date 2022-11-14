<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="http://127.0.0.1:8000/users/">
        @csrf <!-- Genera un token -->
        <label>Nombre</label>
        <input type="text" name="name">
        <br>
        <label>Apellido</label>
        <input type="text" name="lastname">
        <br>
        <label>Email</label>
        <input type="email" name="email">
        <br>
        <label>Rol</label>
        <input type="number" name="rol">
        <br>
        <label>Phone</label>
        <input type="phone" name="phone_number">
        <br>
        <label>Avatar</label>
        <input type="text" name="avatar">
        <br>
        <label>Password</label>
        <input type="password" name="password">
        <br>
        <button>
          Guardar
        </button>
    </form>
</body>
</html>
