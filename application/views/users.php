<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zalego</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
-->
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></head>
    <script type="text/javascript"src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</head>

<body>
<div class="container">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="#">Zalego Users</a>
            </div>
            <div style="float: right;">
                <ul class="nav navbar-nav">
                    <li><img src="<?php echo base_url("assets")?>/img/userIcon.jpeg" style="width: 40px;height: 40px; margin: 10px"/></li>
                    <li class="active"><a href="#"><?php echo $user?></a></li>
                </ul>

                <a href="logout"><button class="btn btn-danger navbar-btn">LogOut</button></a>
            </div>
        </div>
    </nav>
<table id="users" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
        </tr>
        </tfoot>
        <tbody>
        <?
        foreach ($list as $users) :
            ?>
            <tr>
                <td><? echo $users['fname'];?></td>
                <td><? echo $users['lname'];?></td>
                <td><? echo $users['username'];?></td>
            </tr>
        <?  endforeach;?>
        </tbody>
    </table>

    <script>
     $(document).ready(function(){
        $('#users').dataTable();
    });
    </script>
</body>

</html>
