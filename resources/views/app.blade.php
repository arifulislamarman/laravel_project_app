<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
.navbar {
    width: 1000px;
    margin: 0 auto;
    background: burlywood;
    padding: 20px;
}
.navbar ul {
    display: flex;
    justify-content: space-around;
    list-style: none;
}
.container{
    width: 1000px;
    margin: 0 auto;
    padding: 20px;
    background: #ebebeb;
}

ul.pagination {
    display: flex;
    width: 300px;
    list-style: none;
    padding: 0;
    justify-content: space-between;
}
</style>
<body>

    @include('layout/nav')
<div class="container">
    @yield('content')
</div>
</body>
</html>