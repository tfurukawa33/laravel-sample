<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Bladeによるこんにちは</title>
</head>
	<body>
        <ul>
		@foreach($artistsList as $artistList)
            <ol>{{ $artistList->Name }}</ol>
		@endforeach
        </ul>
	</body>
</html