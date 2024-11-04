<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Просмотр данных</title>
</head>
<body>
    <h1>Список данных</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Имя</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @forelse($data as $entry)
                <tr>
                    <td>{{ $entry['name'] ?? 'Нет данных' }}</td>
                    <td>{{ $entry['email'] ?? 'Нет данных' }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="2">Данных нет</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <a href="{{ route('home') }}">Назад на главную</a>
</body>
</html>

