<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
    <h1>Data Pemain</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Posisi</th>
                <th>Nomor Punggung</th>
                <th>Negara</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pemain as $p)
            <tr>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->posisi }}</td>
                <td>{{ $p->nomor_punggung }}</td>
                <td>{{ $p->negara }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
