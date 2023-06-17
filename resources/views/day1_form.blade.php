
@extends('layout.master')

@section('judul')
    Form Sign Up
@endsection


@section('content')    
<h1>Buat Account Baru</h1>
<h3>Sign Up Form</h3>

<!--isiian form-->
<form action="/welcome" method="post">
    @csrf
    <label >First Name:</label><br>
    <input type="text" name="first_name"><br><br>
    
    <label >Last Name:</label><br>
    <input type="text" name="last_name"><br><br>
    
    <label> Gender:</label><br>
    <input type="radio"name="gender">Male<br>
    <input type="radio" name="gender">Female<br>
    <input type="radio"name="gender">Other<br><br>
    <label >Nationality:</label><br>
    
    <select name="nationality" >
        <option value="indonesia">Indonesia</option>
        <option value="wakanda">Wakanda</option>
        <option value="malaysia">Malaysia</option>
    </select><br><br>
    
    <label> Laguange Spoken:</label><br>
    <input type="checkbox">Bahasa Indonesia<br>
    <input type="checkbox">English<br>
    <input type="checkbox">Other<br><br>

    <label >Bio:</label><br>
    <textarea name="bio"  cols="30" rows="10"></textarea><br>
    <input type="submit" name="submit" value="Sign Up" >
</form>
@endsection