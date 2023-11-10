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
    <h3>Добавить запись</h3>
    @isset($path)
        <img class="img-fluid" src="{{asset('storage/' . $path)}}" alt="123">
    @endisset
    <form action="{{route('reports.store')}}" class="row g-3" id="createReport" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-md-4">
            <label for="breakfastPhoto" class="form-label">Завтрак</label>
            <input type="file" class="form-control" name="breakfastPhoto" id="breakfastPhoto">
        </div>
        <div class="col-md-4">
            <label for="lunchPhoto" class="form-label">Обед</label>
            <input type="file" class="form-control" name="lunchPhoto" id="lunchPhoto">
        </div>
        <div class="col-md-4">
            <label for="dinnerPhoto" class="form-label">Ужин</label>
            <input type="file" class="form-control" name="dinnerPhoto" id="dinnerPhoto">
        </div>
        <div class="col-md-4">
            <label for="snack1Photo" class="form-label">Перекус1</label>
            <input type="file" class="form-control" name="snack1Photo" id="snack1Photo">
        </div>
        <div class="col-md-4">
            <label for="snack2Photo" class="form-label">Перекус2</label>
            <input type="file" class="form-control" name="snack2Photo" id="snack2Photo">
        </div>
        <div class="col-md-4">
            <label for="snack3Photo" class="form-label">Перекус3</label>
            <input type="file" class="form-control" name="snack3Photo" id="snack3Photo">
        </div>
        <div class="col-md-8">
            <label for="comment" class="form-label">Комментарий</label>
            <input type="text" class="form-control" name="comment" id="comment">
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Добавить</button>
        </div>
        <div class="col-12">
            <a class="btn btn-primary" href="{{route('reports.show')}}">Посмотреть отчеты</a>
        </div>
    </form>
</div>
</body>
</html>
