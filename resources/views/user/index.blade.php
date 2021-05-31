<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Bladeによるこんにちは</title>
</head>
	<body>
        <ul>
		@foreach($user as $recode)
            <ol>{{$recode->name}}</ol>
            <ol>{{$recode->email}}</ol>
		@endforeach
        </ul>
	</body>
</html