<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список клієнтів</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Список клієнтів</h1>
        <a href="{{ route('clients.create') }}" class="btn btn-primary mb-3">Додати клієнта</a>
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
<table class="table table-bordered">
    <thead>
    <tr>
        <th>#</th>
        <th>Ім'я</th>
        <th>Telegram</th>
        <th>Дії</th>
    </tr>
    </thead>
    <tbody>
    @foreach($clients as $client)
        <tr>
            <td>{{ $client->id }}</td>
            <td>{{ $client->name }}</td>
            <td><a href="{{ $client->contact }}" target="_blank">{{ $client->contact }}</a></td>
            <td>
                <a href="{{ route('clients.edit', $client) }}" class="btn btn-warning btn-sm">Редагувати</a>
                <form action="{{ route('clients.destroy', $client) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Ви впевнені?')">Видалити</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
</body>
</html>
