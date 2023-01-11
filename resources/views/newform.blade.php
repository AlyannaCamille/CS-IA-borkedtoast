<!DOCTYPE html>
<html>

<head>
    <title>Order Form</title>
    <meta charset="UTF-8">

</head>

<body>

    <h1>Order Form</h1>

    <form action="/blank" method="GET">

        @csrf


        <fieldset>
            <legend>Type</legend>

            <label>
                <input type="radio" name="type[]" value="Headshot" checked>
                Headshot
            </label>

            <br>

            <label>
                <input type="radio" name="type[]" value="Bust Up">
                Bust Up
            </label>

            <br>

            <label>
                <input type="radio" name="type[]" value="Halfbody">
                Halfbody
            </label>

            <br>

            <label>
                <input type="radio" name="type[]" value="Fullbody">
                Fullbody
            </label>

            <br>

            <label>
                <input type="radio" name="type[]" value="Custom Character">
                Custom Character
            </label>

        </fieldset>

        <fieldset>
            <legend> Add On/s </legend>

            <input type="checkbox" name="additional[]" value="None">
            None
            </label>

            <br>

            <input type="checkbox" name="additional[]" value="Detailed Background">
            Detailed Background
            </label>

            <br>

            <input type="checkbox" name="additional[]" value="Extra Character">
            Extra Character
            </label>

        </fieldset>

        <fieldset>
            <legend>Background</legend>

            <label>
                <input type="radio" name="background[]" value="White">
                White
            </label>

            <br>

            <label>
                <input type="radio" name="background[]" value="Patterned/Simple">
                Patterned/Simple
            </label>

        </fieldset>

        <br>

        <input type="submit" value="Order" />


    </form>

</body>

</html>