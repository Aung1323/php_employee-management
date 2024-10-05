<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .sidebar {
            margin: 0;
            padding: 0;
            width: 200px;
            background-color: #f1f1f1;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
        }
        
        .sidebar a.active {
            background-color: blue;
            color: white;
        }

        .sidebar a:hover:not(.active) {
            background-color: #555;
            color: white;
        }

        @media screen and (max-width: 993px) {
            .sidebar {
                width: 12%;
            }
        }
        @media screen and (max-width: 770px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
            .sidebar a {float: left;}
            div.content {margin-left: 0;}
        }

        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#"><h2>Employee Management</h2></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="sidebar">
                    <a href="{{ url('/employees') }}" class="{{ request()->is('employees*') ? 'active' : '' }}">Employee</a>
                    <a href="{{url('/admins')}}" class="{{ request()->is('admins*') ? 'active' : '' }}">HR(Admin)</a>
                    <a href="{{url('/roles')}}" class="{{ request()->is('roles*') ? 'active' : '' }}">Interns</a>
                    <a href="{{url('/departments')}}" class="{{ request()->is('departments*') ? 'active' : '' }}">Departments</a>
                    <a href="{{url('/enrollments')}}" class="{{ request()->is('enrollments*') ? 'active' : '' }}">Enrollment</a>
                    <a href="{{url('/payments')}}" class="{{ request()->is('payments*') ? 'active' : '' }}">Payment</a>
                </div>
            </div>
            <div class="col-md-9">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>