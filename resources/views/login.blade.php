<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>

<body>
<form method="post" action="{{ route('login') }}">
    @csrf
    <label for="email">Email</label>
    <input type="text" name="email" id="email">

    <label for="password">Password</label>
    <input type="password" name="password" id="password">

    <input type="submit">
</form>
</body>

</html>
