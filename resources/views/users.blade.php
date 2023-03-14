<p>Список користуачів</p>

<table>
    <tr>
        <td>ID</td>
        <td>Ім'я</td>
        <td>Email</td>
    </tr>

    @foreach($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td><a href="/orders?user_id={{$user->id}}" target="_blank">{{ $user->name }}</a></td>
        <td>{{ $user->email }}</td>
    </tr>
    @endforeach


</table>

<style>
    td {
        padding: 10px;
    }
    td {
        border: 1px solid black;
    }
</style>
