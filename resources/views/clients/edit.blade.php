<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редагувати клієнта</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Редагувати клієнта</h1>
    <form action="{{ route('clients.update', $client) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Ім'я</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $client->name }}" required>
        </div>
        <div class="mb-3">
            <label for="contact" class="form-label">Telegram</label>
            <input type="url" name="contact" id="contact" class="form-control" value="{{ $client->contact }}" required>
        </div>
        <button type="submit" class="btn btn-warning">Оновити</button>
    </form>
</div>
</body>
</html>
