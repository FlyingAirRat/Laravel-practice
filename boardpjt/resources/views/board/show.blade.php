<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$data->title}}</title>
</head>

<body>
    <div id="ldata" data-id="{{$data->id}}"></div>
        <a href="{{url('/boards')}}"><button>home</button></a>
        <button id="btnDel">del</button>
        <div>제목 : {{$data->title}}</div>
        <div>조회수 : {{$data->hits}}</div>
        <div>등록일 : {{$data->created_at}}</div>
        <div>수정일 : {{$data->updated_at}}</div>
        <div>내용 : {{$data->ctnt}}</div>
        <div>{{$data->ctnt}}</div>
    
    <script>
        const ldata = document.querySelector('#ldata');
        const btnDel = document.querySelector('#btnDel');
        if (btnDel) {
            btnDel.addEventListener('click', e => {
                if (!confirm('삭제?')) {
                    return;
                };
                location.href = `/boards/destroy?id=${ldata.dataset.id}`;
                //board가 아니라 boards.
            });
        }
    </script>
</body>

</html>