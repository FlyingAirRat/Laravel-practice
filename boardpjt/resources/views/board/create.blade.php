<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>boards create</h1>
    <form action="<?= route('boards.store') ?>" method="POST">
        <div><label for="">제목 : <input type="text" name="title" id=""></label></div>
        <div><label for="">내용 : <textarea name="ctnt" id="" cols="30" rows="10"></textarea></label></div>
        <input type="submit" value="저장">
        @csrf
    </form>
</body>

</html>