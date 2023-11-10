<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <table class="table align-middle">
        <thead>
        <tr>
            <th scope="col">Завтрак</th>
            <th scope="col">Комментарий</th>
            <th scope="col">Обед</th>
            <th scope="col">Комментарий</th>
            <th scope="col">Ужин</th>
            <th scope="col">Комментарий</th>
            <th scope="col">Перекус</th>
            <th scope="col">Комментарий</th>
        </tr>
        </thead>
        @foreach($reports as $report)
            <tr>
                <td><img class="img-fluid " src="{{asset('storage/' . $report->breakfastPhoto)}}" alt="123"></td>
                <td>{{$report->breakfastComm}}</td>
                <td><img class="img-fluid" src="{{asset('storage/' . $report->lunchPhoto)}}" alt="123"></td>
                <td>{{$report->lunchComm}}</td>
                <td><img class="img-thumbnail" src="{{asset('storage/' . $report->dinnerPhoto)}}" alt="123"></td>
                <td>{{$report->dinnerComm}}</td>
                <td><img class="img-thumbnail" src="{{asset('storage/' . $report->snack1Photo)}}" alt="123"></td>
                <td>{{$report->snack1Comm}}</td>
            </tr>
        @endforeach
        <tbody>
        </tbody>

    </table>


</body>
</html>
