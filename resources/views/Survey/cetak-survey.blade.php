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
    <title>Cetak Data Survey</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Survey</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%">
            <tr>
                <th>Id Survey</th>
                <th>Pertanyaan</th>
                <th>Jawaban</th>
            </tr>
                @foreach ($dtCetakSurvey as $item)
                    <tr>
                        <td>{{ $item->id_survey }}</td>
                        <td>{{ $item->pertanyaan }}</td>
                        <td>{{ $item->jawaban }}</td>
                    </tr>
                @endforeach
        </table>
    </div>

    <script type="text/javascript">
    window.print();
    </script>

</body>
</html>
