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
<div class="container">
    <div class="col-12 mt-3">
        <a class="btn btn-primary" href="{{route('reports.index')}}">Добавить новый отчет</a>
        <a class="btn btn-primary" href="{{route('reports.weekReport')}}">Показать отчеты за 7 дней</a>
        <a class="btn btn-primary" href="{{route('reports.show')}}">Показать все отчеты</a>
    </div>
    <div class="table-responsive mt-3">
        <table class="table align-middle">
            <thead>
            <tr>
                <th scope="col">Дата</th>
                <th scope="col">Завтрак</th>
                <th scope="col">Обед</th>
                <th scope="col">Ужин</th>
                <th scope="col">Перекус</th>
                <th scope="col">Перекус</th>
                <th scope="col">Перекус</th>
                <th scope="col">Коммент</th>
            </tr>
            </thead>
            @foreach($reports as $report)
                <tr>
                    <td>{{$report->created_at}}</td>
                    <td><img class="img-fluid img-thumbnail" src="{{asset('storage/' . $report->breakfastPhoto)}}" alt="123"></td>
                    <td><img class="img-fluid img-thumbnail" src="{{asset('storage/' . $report->lunchPhoto)}}" alt="123"></td>
                    <td><img class="img-fluid img-thumbnail" src="{{asset('storage/' . $report->dinnerPhoto)}}" alt="123"></td>
                    <td><img class="img-fluid img-thumbnail" src="{{asset('storage/' . $report->snack1Photo)}}" alt="123"></td>
                    <td><img class="img-fluid img-thumbnail" src="{{asset('storage/' . $report->snack2Photo)}}" alt="123"></td>
                    <td><img class="img-fluid img-thumbnail" src="{{asset('storage/' . $report->snack3Photo)}}" alt="123"></td>
                    <td>{{$report->comment}}</td>
                </tr>
            @endforeach
            <tbody>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
