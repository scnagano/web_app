<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
</head>
<body>
    <h2>店舗一覧画面</h2>
    @foreach ($shops as $shop)
        <p>
            {{$shop->id}}
            {{$shop->name}}
            {{$shop->email}}
            {{$shop->phone_number}}
        </p>
    @endforeach
</body>
</html>