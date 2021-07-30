<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        * {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }

        table {
            width: 100%;
        }

        table, th, td {
          border: 1px solid black;
          border-collapse: collapse;
          padding-left: 5px;
          padding-right: 5px;
        }

        thead {
            background: lightgrey;
            font-weight: bold;
            font-size: 12px;
        }

        td {
            font-size: 12px;
        }
    </style>
</head>
<body>
    <h4>SENARAI NAMA PEGAWAI KADET PERINGKAT {{$training->level}} 
        UNTUK {{$training->trainingName}} {{$training->year}} 
        PADA {{\Carbon\Carbon::parse($training->startDate)->format('d/m/Y')}} 
        HINGGA {{\Carbon\Carbon::parse($training->endDate)->format('d/m/Y')}}</h4>
    <table>
        <thead>
            <tr>
                <th>BIL</th>
                <th>NO. TENTERA</th>
                <th>PKT</th>
                <th>NAMA</th>
                <th>TARIKH MASUK</th>
                <th>TARIKH KELUAR</th>
                <th>JUMLAH HARI</th>
            </tr>
            <tr>
                <th>(a)</th>
                <th>(b)</th>
                <th>(c)</th>
                <th>(d)</th>
                <th>(e)</th>
                <th>(f)</th>
                <th>(g)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cadets as $index => $cadet)
            <tr>
                <td>{{$index + 1}}</td>
                <td>{{$cadet->cadetID}}</td>
                <td>{{$cadet->cadetRank}}</td>
                <td>{{$cadet->cadetName}}</td>
                <td>{{\Carbon\Carbon::parse($cadet->pivot->dateIn)->format('d/m/Y')}}</td>
                <td>{{\Carbon\Carbon::parse($cadet->pivot->dateOut)->format('d/m/Y')}}</td>
                <td>{{$cadet->registeredDays}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>