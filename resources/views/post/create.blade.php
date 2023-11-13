<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Createn New Post</title>
</head>
<body>
    <form action="#">
        <select name="channel_id" id="channel_id">
            @foreach ($channels as $channel)
                <option value="{{ $channel->id }}">{{ $channel->name }}</option>
            @endforeach
        </select>
    </form>
</body>
</html>