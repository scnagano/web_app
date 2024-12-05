<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
</head>
<body>
    <h2>店舗一覧</h2>
    <table>
        <thead>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>phone number</th>
            <th></th>
        </thead>
    @isset ($shops)
    @foreach ($shops as $shop)
        <tbody>
            <td>{{$shop->id}}</td>
            <td>{{$shop->name}}</td>
            <td>{{$shop->email}}</td>
            <td>{{$shop->phone_number}}</td>
            <td></td>
        </tbody>
    @endforeach
    @endisset
</table>

</body>
</html>
