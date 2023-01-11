<!DOCTYPE html>
<html>
<h1> PLEASE ADD YOUR CONTACTS </h1>


<form action="{{route('contacts.store')}}" method="POST">

    @csrf

    <label for="name"> Name </label>
    <input type="text" id="name" name="name">

    <label for="email"> Email </label>
    <input type="text" id="email" name="email">

    <label for="source">Source</label>
    <select id="source" name="source">
        <option value="Instagram">Instagram</option>
        <option value="Twitter" selected>Twitter</option>
        <option value="Deviant Art" selected>Deviant Art</option>
        <option value="Friends/Family">Friends/Family</option>
    </select>

    <button>Submit</button>



</form>


</html>