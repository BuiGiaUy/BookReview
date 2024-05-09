<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Post</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/js/app.js'])
</head>
<body>
<h2>Thêm bài viết </h2>
<form action={{route('post.store')}} method="POST">
    @csrf
    <div class="mb-3">
        <label for="pwd">Name: </label>
        <input type="text" name="name">
    </div>
    <div class="mb-3">
        <label for="pwd">Bài viết : </label>
        <textarea class="tinyMce" name="content"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
