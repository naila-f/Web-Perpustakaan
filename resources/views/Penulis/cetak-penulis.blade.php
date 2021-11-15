<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        table.static {
            position: relative;
            border: 1px solid #543535;
        }
    </style>
    <title>Cetak Data Penulis</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Penulis</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%">
            <tr>
                <th>Id Penulis</th>
                <th>Nama Penulis</th>
                <th>No Hp</th>
            </tr>
                @foreach ($dtCetakPenulis as $item)
                    <tr>
                        <td>{{ $item->id_penulis }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->no_hp }}</td>
                    </tr>
                @endforeach
        </table>
    </div>

    <script type="text/javascript">
    window.print();
    </script>

</body>
</html>
