<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>School Applications</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/customer.css') }}">
</head>
<body >
<div class="row">
    <div class="col-6 studentAdd">

        <div>
            @if (Session::has('message'))
            <p>{{Session::get('message')}}</p>
            @endif
        </div>

        <h1>Student Add</h1>

        <form method="post" action="{{route('student.save')}}">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Student Name </label>
                <input type="text" class="form-control" id="studentName" placeholder="Kamala siriwardana">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="dob" class="form-label">Student Birthday</label>
                <input type="date" class="form-control" id="studentDOB" placeholder="date of birth">
            </div>


            <input type="submit" class="btn btn-success" value="Add Student"/>
            <input type="cancel" class="btn btn-warring" value="Cansel Teacher"/>
        </form>

    </div>
    <div class="col-6">

    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
