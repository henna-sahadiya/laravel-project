<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: Arial;
        }

        * {
            box-sizing: border-box;
        }

        form.example input[type=text] {
            padding: 10px;
            font-size: 17px;
            border: 1px solid grey;
            float: left;
            width: 70%;
            background: #f1f1f1;
        }

        form.example select {
            padding: 10px;
            font-size: 17px;
            border: 1px solid grey;
            float: left;
            width: 20%;
            background: #f1f1f1;
        }

        form.example button {
            float: left;
            width: 10%;
            padding: 10px;
            background: #2196F3;
            color: white;
            font-size: 17px;
            border: 1px solid grey;
            border-left: none;
            cursor: pointer;
        }

        form.example button:hover {
            background: #0b7dda;
        }

        form.example::after {
            content: "";
            clear: both;
            display: table;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 50px;
            width: 100%;
            max-width: 1000px;
            background-color: white;
        }

        .box {
            padding: 20px;
            border: 1px solid #ccc;
            text-align: left;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        #noResults {
            display: none;
            color: red;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div>
        <h3>Search</h3>
        <form method="get" action="/search" class="example" id="searchForm">
            <input type="text" placeholder="Search name/designation/department" name="search" id="searchInput">
            <button type="button" id="searchButton">Search</button>
        </form>
    </div><br><br>

    <div class="container">
        <div class="box">
            <h2>John Due</h2>
            <h3>Marketing Manager</h3>
            <h4>Sales and marketing</h4>
        </div>
        <div class="box">
            <h2>Tommy Mark</h2>
            <h3>Mobile Application Dev.</h3>
            <h4>Application development</h4>
        </div>
        <div class="box">
            <h2>John Due</h2>
            <h3>Marketing Manager</h3>
            <h4>Sales and marketing</h4>
        </div>
        <div class="box">
            <h2>Tommy Mark</h2>
            <h3>Mobile Application Dev.</h3>
            <h4>Application development</h4>
        </div>
    </div>

    <table id="results-table">
        <thead>
            <tr>
                <th>S.I no</th>
                <th>Name</th>
                <th>Department</th>
                <th>Designation</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($record as $user)  
            <tr>
                <th scope="row">{{ $user->id}}</th>
                <td>{{$user->name}}</td> 
                <td>{{$user->fk_department}}</td> 
                <td>{{$user->fk_designation}}</td> 
    </tr>
    @endforeach
        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="search.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>
</html>
