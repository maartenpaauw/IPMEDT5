<form method="POST" action="/login">
    {{ csrf_field() }}

    <label for="email">E-mail: </label>
    <input type="email" id="email" name="email" />

    <label for="password">Password: </label>
    <input type="password" id="password" name="password" />

    <button type="submit">Verzend</button>
</form>