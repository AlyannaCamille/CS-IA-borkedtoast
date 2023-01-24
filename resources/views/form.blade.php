<!DOCTYPE html>
<html>

<head>
    <title>Order Form</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
</head>

<body>

    <h1>Order Form</h1>

    <form action="{{ route('orders.store') }}" method="POST" enctype = "multipart/form-data">

        @csrf

        <label for="name">Name</label>
        <input type="text" id="name" name="name">


        <label for="payment">Payment Method</label>
        <select id="payment" name="payment">
            <option value="USD">USD</option>
            <option value="DA Points" selected>DA Points</option>
            <option value="Mixed">Mixed</option>
        </select>

        <fieldset>
            <legend>Type</legend>

            <label>
                <input type="radio" name="type" value="Headshot" checked>
                Headshot
            </label>

            <br>

            <label>
                <input type="radio" name="type" value="Bust Up">
                Bust Up
            </label>

            <br>

            <label>
                <input type="radio" name="type" value="Halfbody">
                Halfbody
            </label>

            <br>

            <label>
                <input type="radio" name="type" value="Fullbody">
                Fullbody
            </label>

            <br>

            <label>
                <input type="radio" name="type" value="Custom Character">
                Custom Character
            </label>

        </fieldset>

        <fieldset>
            <legend> Add On/s </legend>

            <input type="checkbox" name="additional" value="None">
            None
            </label>

            <br>

            <input type="checkbox" name="additional" value="Detailed Background">
            Detailed Background
            </label>

            <br>

            <input type="checkbox" name="additional" value="Extra Character">
            Extra Character
            </label>

        </fieldset>

        <fieldset>
            <legend>Background</legend>

            <label>
                <input type="radio" name="background" value="White">
                White
            </label>

            <br>

            <label>
                <input type="radio" name="background" value="Patterned/Simple">
                Patterned/Simple
            </label>

        </fieldset>


        <label for="message">Any other details you would like to add? (Like poses, and specific detailed backgrounds, any due date and reason for it, any other characters and concepts.) If none, just type "None."</label>
        <textarea id="message" name="message"></textarea>

        <label for="ref">Please put in a link to your character/s'(s) reference sheet or attach the reference in the dropbox below.</label>
        <textarea id="ref" name="ref"></textarea>

        <label for="ref">Reference Dropbox:</label>
        <input type="file" id="ref" name="ref"> 


        <label>
            <input type="checkbox" name="confirm">
            I confirm the details above are correct.
        </label>

        <br>

        <button>Send</button>

    </form>

</body>

</html>