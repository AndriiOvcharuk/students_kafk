<p>Список замовлень</p>

<table>
    @if(count($orders))

        <tr>
            <td>ID</td>
            <td>Опис</td>
            <td>Кількість</td>
            <td>Дата створення</td>
        </tr>

        @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->description }}</td>
                <td>{{ $order->amount }}</td>
                <td>{{ $order->created_at }}</td>
            </tr>
        @endforeach

    @else
        <p>У цього користувача ще немає замовлень.(</p>
    @endif

</table>

<style>
    td {
        padding: 10px;
    }
    td {
        border: 1px solid black;
    }
</style>
