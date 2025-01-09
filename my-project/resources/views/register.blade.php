<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
</head>
<body>
    <form action="/create" method="POST">
        @csrf
        <label>店舗名</label>
        <input type="text" name="shop_name"/>

        <label>メールアドレス</label>
        <input type="text" name="email"/>
        
        <button type="submit">登録</button>
    </form>
</body>
</html>