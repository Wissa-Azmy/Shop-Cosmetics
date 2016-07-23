<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <!-- <link rel="stylesheet" href="/css/style.css"> -->

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
            .row {
                margin-bottom: 60px;
            }
        </style>


<div class="row">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">

        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
            <!--<span class="glyphicon glyphicon-apple"></span>-->

                </button>
                <div class="navbar-brand">Shenouda Cosmetics</div>
            </div>
            <div class="collapse navbar-collapse">

                <ul class="nav navbar-nav">
                    <li  ><a href="/" class="">Home</a></li>
                    <li  ><a href="/items" class="">Items</a></li>
                    <li  ><a href="/suppliers" class="">Suppliers</a></li>
                    <li  ><a href="/customers" class="">Customers</a></li>
                    <li  ><a href="/invoices" class="">Invoices</a></li>
                </ul>

                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown">
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" rel="Profile">Profile</a></li>
                            <li><a href="admin_logout.php" rel="Log out">Log Out</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</div>

    </head>
    <body>
        @yield('content')
    </body>
</html>
