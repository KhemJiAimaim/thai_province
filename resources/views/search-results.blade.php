<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
    <Table>
        <thead>
            <tr>
                <th>No.</th>
                <th>ตำบล</th>
                <th>อำเภอ</th>
                <th>จังหวัด</th>
                <th>รหัสไปรษณีย์</th>
            </tr>
        </thead>

        @foreach ($results as $result)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $result->name_th }}</td>
                <td>{{ $result->d_name_th }}</td>
                <td>{{ $result->province_name }}</td>
                <td> {{ $result->zip_code }}</td>
            </tr>
        @endforeach
    </Table>


</body>


</html>
