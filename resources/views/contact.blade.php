@extends('template')
@section('title', 'Admin')

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    @section('styles')
    <style>
        img {
            width: 100px;
        }

        .list-1 {
            color: black;
            display: flex;
            text-decoration: none;
            list-style: none;


        }

        .list-1>li {
            position: relative;
            left: 80px;
            margin: 10px 50px 0 50px;
            border-right: 1px solid black;


        }

        .list-2 {
            display: flex;
            text-decoration: none;
            list-style: none;
            color: blue;

        }

        .list-3 {

            display: flex;
            text-decoration: none;
            list-style: none;

        }

        .Navegar {
            position: relative;
            right: 120px;
        }

        li {
            padding: 8px;
        }

        .nav {
            display: flex;
        }

        .Buscar {

            width: 400px;
        }

        .box {
            display: flex;
        }

        .cajaG {

            width: 100%;
            height: 530px;
            display: flex;
            



        }

        hr {
            height: 3px;
            background-color: black;
        }

        .video1 {
            background-color: pink;
            display: flex;
            width: 100px;
            height: 100px;

        }

        .destacados {
            background-color: #7F8487;
            width: 70%;
            height: 500px;
            margin-right: 16px;
            display: flex;
            border: 2px solid black;
        }

        .cuadrado {
            background-color: #D8D8D8;
            width: 30%;
            height: 500px;


        }

        .box-1 {
            background-color: whitesmoke;
            height: 95%;
            width: 55%;
            margin: 17px;
            border: 1px solid black;


        }

        .box-2 {

            height: 95%;
            width: 40%;
            margin: 17px 17px 17px 0;

        }

        .box-K {

            width: 95%;
            height: 30%;
            margin: 10px;
            display: flex;


        }

        .C-box{
            width: 50%;
            height: 90%;
            margin: 10px;
            border: 1px solid black;


            background-color: white;

        }

        .C-g {
            width: 100%;
            height: 80%;
            border: 1px solid black;
            display: flex;
            background-color: white;
        }

        .container-S {
            background-color: #DDDDDD;
            width: 100%;
            height: 400px;
            display: flex;
            border: 2px solid black;
            display: block;
          

        }

        .Row-1 {
            display: flex;
        }

        .Row-2 {
            display: flex;
        }


        .drawer-1 {

            width: 310px;
            height: 170px;
            margin: 15px;
            display: flex;

        }


        .C-F {
            background-color: white;
            height: 160px;
            width: 150px;
            margin: 5px;
            border: 1px solid black;
        }

        h3 {
            margin: 2px;
        }
    </style>
    @stop
</head>

@section('navbar')
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            <img src="YouTube-logo.png" alt="">
        </div>
        <div class="col-6 Navegar">
            <nav class="navbar bg-light">
                <div class="container Buscar">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2 buscador" type="search" placeholder=" " aria-label="Search">
                        <button class="btn btn-outline-dark" type="submit">Search</button>
                    </form>
                </div>
            </nav>
            <ul class="list-1">
                @foreach ($linkUser as $linksUsers)
                <li style="color: gray">{{$linksUsers}}</li>
                @endforeach
                
            </ul>
        </div>
        <div class="col-3">
            <ul class="list-2">
                <li><a>Create</a></li>
                <li><a>Account</a></li>
                <li><a style="color: black; font-weight: bold;">Or</a></li>
                <li><a>Sign-in</a></li>
            </ul>
            @if($miArray === 'admin')
            <ul class="list-3">
            @foreach ($linkAdmin as $linksadmin)
                    <li><a>{{$linksadmin}}</a></li>
            @endforeach
                
               
            </ul>
            @endif
        </div>
    </div>
</div>
<hr>
@stop
@section('content')
<div class="cajaG">

    <div class="destacados">

        <div class="box-1">

        </div>
        <div class="box-2">
            <div class="box-K">
                <div class="C-box"></div>
                <div class="lineas">
                    <h6>_________________________</h6>
                    <h6>_________________________</h6>
                    <h6>_________________________</h6>
                    <h6>_________________________</h6>
                </div>
            </div>
            <div class="box-K">
                <div class="C-box"></div>
                <div class="lineas">
                    <h6>________________________</h6>
                    <h6>________________________</h6>
                    <h6>________________________</h6>
                    <h6>________________________</h6>
                </div>
            </div>
            <div class="box-K">
                <div class="C-box"></div>
                <div class="lineas">
                    <h6>________________________</h6>
                    <h6>________________________</h6>
                    <h6>________________________</h6>
                    <h6>________________________</h6>
                </div>
            </div>

        </div>
    </div>
    <div class="cuadrado">
        <div class="C-g">
        </div>
        <div class="lineas-G">
            <h6>_______________________________________________</h6>
            <h6>_______________________________________________</h6>
            <h6>_______________________________________________</h6>
        </div>
    </div>

</div>

<div class="container-S">
    <div class="Row-1">
        <div class="drawer-1">
            <div class="C-F"></div>
            <div class="T-F">
                <h6>________________</h6>
                <h6>________________</h6>
                <h6>________________</h6>

            </div>
        </div>
        <div class="drawer-1">
            <div class="C-F"></div>
            <div class="T-F">
                <h6>________________</h6>
                <h6>________________</h6>
                <h6>________________</h6>

            </div>
        </div>
        <div class="drawer-1">
            <div class="C-F"></div>
            <div class="T-F">
                <h6>________________</h6>
                <h6>________________</h6>
                <h6>________________</h6>

            </div>
        </div>
        <div class="drawer-1">
            <div class="C-F"></div>
            <div class="T-F">
                <h6>________________</h6>
                <h6>________________</h6>
                <h6>________________</h6>

            </div>
        </div>

    </div>

    <div class="Row-2">
        <div class="drawer-1">
            <div class="C-F"></div>
            <div class="T-F">
                <h6>________________</h6>
                <h6>________________</h6>
                <h6>________________</h6>

            </div>
        </div>
        <div class="drawer-1">
            <div class="C-F"></div>
            <div class="T-F">
                <h6>________________</h6>
                <h6>________________</h6>
                <h6>________________</h6>

            </div>
        </div>
        <div class="drawer-1">
            <div class="C-F"></div>
            <div class="T-F">
                <h6>________________</h6>
                <h6>________________</h6>
                <h6>________________</h6>

            </div>
        </div>
        <div class="drawer-1">
            <div class="C-F"></div>
            <div class="T-F">
                <h6>________________</h6>
                <h6>________________</h6>
                <h6>________________</h6>

            </div>
        </div>

    </div>

</div>
@stop