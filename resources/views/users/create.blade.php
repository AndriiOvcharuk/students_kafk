<p>Створення користуача</p>

<form method="POST" action="/users/store">
    @csrf

    <input type="text" placeholder="Ім'я..." name="name">
    <br>
    <br>
    <input type="text" placeholder="Email..." name="email">
    <br>
    <br>
    <input type="password" placeholder="Пароль..." name="password">
    <br>
    <br>
    <input type="submit" value="Створити">
</form>

@if ($errors->any())
    <div class="text-red">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<style>
    .text-red {
        color: red;
    }
</style>

