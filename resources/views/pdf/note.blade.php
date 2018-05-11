<!DOCTYPE html>
<html>
<head>
    <title>User list - PDF</title>
    {{--<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min1.css')}}">
</head>
<body>
<div class="container">
  <div style="margin:8px 0 8px 0;">
      <a href="{{url('sendPdf/'.$id)}}">Send PDF</a>

      <input type="hidden" value="{{$id}}">

  </div>

    <div style="margin:10px 0 10px 0;">
       <span>
        <strong><u>Doctor Details</u></strong>
    </span>
    </div>

    <table class="table table-bordered">
        <thead>
        <th>Doctor Full Name</th>
        <th>Doctor Email</th>
        </thead>

        <tbody>

        <tr>
            <td>{{$doctor->name }} {{$doctor->surname}}</td>
            <td>{{$doctor->email }}</td>

        </tr>

        </tbody>
    </table>
    <div style="margin:10px 0 10px 0;">
       <span>
        <strong><u>Patient Details</u></strong>
    </span>
    </div>

    <table class="table table-bordered">
        <thead>
        <th>Patient Full Name</th>
        <th>Patient Address</th>
        <th>Patient Gender</th>
        <th>Patient Email</th>
        <th>National Id</th>
        </thead>

        <tbody>

            <tr>

                <td>{{$patient->name }} {{$patient->surname}}</td>
                <td>{{$patient->address }}</td>
                <td>{{$patient->gender }}</td>
                <td>{{$patient->email }}</td>
                <td>{{$patient->nationalId }}</td>
            </tr>

        </tbody>
    </table>
    <div style="margin:10px 0 10px 0;">
       <span>
        <strong><u>Medication Details</u></strong>
    </span>
    </div>
    <table class="table table-bordered">
        <thead>
        <th>Medication Name</th>
        <th>Dosage</th>
        </thead>
        <tbody>
        <tr>
            <td>{{$drug }}</td>
            <td>{{$dose }}</td>
        </tr>
        </tbody>
    </table>


    <div style="margin:10px 0 10px 0;">
       <span>
        <strong><u>Pharmacist Details</u></strong>
    </span>
    </div>
    <table class="table table-bordered">
        <thead>
        <th>Pharmacy Name</th>
        <th>Address</th>
        </thead>
        <tbody>
        <tr>
            <td>{{$pharmacist->pharmacyName }}</td>
            <td>{{$pharmacist->address}}</td>
        </tr>
        </tbody>
    </table>
    <div style="margin:10px 0 10px 0;">
       <span>
        <strong><u>Signature and Date</u></strong>
    </span>
    </div>
    <table class="table table-bordered">
        <thead>
        <th>Signatured By</th>
        <th>Date</th>
        </thead>
        <tbody>
        <tr>

            <td>DR .{{$doctor->name[0]}}.{{$doctor->surname}}</td>
            <td>{{$now}}</td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>