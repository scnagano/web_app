<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
</head>
<body>
    <form action="/create" method="POST">
        @csrf
        <input type="text" name="email"/>
        <button type="submit">登録</button>
    </form>
</body>
</html>