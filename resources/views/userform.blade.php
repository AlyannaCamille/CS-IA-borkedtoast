<!DOCTYPE html>
<html>

<head>
    <title>User Form</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
</head>

<body>

    <h1>User Form</h1>

    <form action="{{ route('users.store') }}" method="POST">

        @csrf

        <label for="name">Name</label>
        <input type="text" id="name" name="name">
        <br>

        <label for="email">E-mail</label>
        <input type="text" id="email" name="email">
        <br>

        <label for="password">Password</label>
        <input type="text" id="password" name="password">
        <br>

        <button>Send</button>

    </form>

</body>

</html>