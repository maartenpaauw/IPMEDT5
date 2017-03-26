<form method="POST" action="/register">
    {{ csrf_field() }}

    <label for="name">Name: </label>
    <input type="text" id="name" name="name" />

    <label for="email">E-mail: </label>
    <input type="email" id="email" name="email" />

    <label for="password">Password: </label>
    <input type="password" id="password" name="password" />

    <button type="submit">Verzend</button>
</form>