{{--<!DOCTYPE HTML>--}}
{{--<html>--}}
{{--<header>--}}
{{--<meta charset="utf-8">--}}
{{--<title>@yield('title')</title>--}}
{{--<link rel="stylesheet" href="{{Asset('assets/css/bootstrap.css')}}">--}}
{{--<link rel="stylesheet" href="{{Asset('assets/css/style.css')}}">--}}
{{--<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>--}}
{{--<script type="text/javascript" src="{{Asset('assets/js/jquery-validate/jquery.validate.js')}}"></script>--}}
{{--</header>--}}
{{--<body>--}}
{{--<div class="container">--}}
{{--@yield("content")--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}

<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {
            height: 450px
        }

        .navbar-inverse {
            background-color: #0f1d16;

        }

        /* Set gray background color and 100% height */
        .sidenav {
            padding-top: 20px;
            background-color: #0f0727;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }

            .row.content {
                height: auto;
            }
        }
    </style>
    <script language="javascript">
        function setURL(url) {
            document.getElementById('iframe').src = url;
        }

    </script>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Tích hợp hệ thống</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">| Nhóm 6 |</a></li>
                <li>
                    <form>
                        <input class="btn btn-success" type="button" style="margin-top: 10px;margin-left: 15px;"
                               name="btnFreeSchool"
                               id="btnFreeSchool"
                               onclick="setURL('http://localhost:83/freeschool')" value="Quản lý trường học"/>
                    </form>
                </li>

                <li>
                    <form>
                        <input class="btn btn-success" type="button" style="margin-top: 10px;margin-left: 15px;"
                               name="btnEduSec" id="btnEduSec"
                               onclick="setURL('http://localhost:83/edusec')" value="Quản lý Khóa học"/>
                    </form>
                </li>
                <li>
                    <form>
                        <input class="btn btn-success" type="button" style="margin-top: 10px;margin-left: 15px;"
                               name="btnEduSec" id="btnEduSec"
                               onclick="setURL('http://localhost:83/edusec')" value="Quản lý Khóa học"/>
                    </form>
                </li>
            </ul>
            <ul class="nav navbar-nav" >
                <form method="post" action="login">
                    {{ csrf_field() }}
                    <li>
                        <button class="btn btn-warning" style="margin-top: 10px;margin-left: 280px;" name="button" value="login"><span
                                    class="glyphicon glyphicon-log-in"></span> Đăng nhập
                        </button>
                    </li>
                </form>


            </ul>
            <ul class="nav navbar-nav">
                <form method="post" action="logout">
                    {{ csrf_field() }}
                    <li>
                        <button class="btn btn-warning" style="margin-top: 10px;margin-left: 20px;" name="button" value="login"><span
                                    ></span> Đăng xuất
                        </button>
                    </li>
                </form>
            </ul>


        </div>
    </div>
</nav>
<div class="container" style="margin-left: 6px;">
    <div class="container-fluid text-center">
        <div class="row content">

            <div class="col-sm-8 text-left">
                @yield("content")
                <iframe id="iframe" style="margin : 10px 10px 10px 10px;" width="1200px" height="550px"
                        frameborder="0"/>
            </div>

        </div>
    </div>
</div>


</body>
</html>