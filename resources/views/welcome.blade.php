<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <h1>Create school</h1>


    <form action="{{ route('school.store') }}" method="post">
        @csrf
        <label for="">Add school </label>
        <input name="name" type="text" placeholder="Add school">
        <button type="submit">Submit</button>
    </form>

    @foreach ($schools as $school)
        <h1>School name  is : {{ $school->name }}</h1>
    @endforeach

    <hr>
    <hr>
    <hr>

    <form action="{{ route('student.store') }}" method="post">
        @csrf
        <label for="">Add Student </label>
        <input name="name" type="text" placeholder="Add student">
        <label for="">Assign Class</label>
        <select name="school_id" id="">
            <option selected disabled value="">Choose class</option>
            @foreach ($schools as $school)
                <option value="{{ $school->id }}">{{ $school->name }}</option>
            @endforeach
        </select>
        <button type="submit">Submit</button>
    </form>



    @foreach ($students as $student)
        <h1> the student {{ $student->name }} assigned to {{ $student->school->name}}</h1>
    @endforeach
</body>

</html>
