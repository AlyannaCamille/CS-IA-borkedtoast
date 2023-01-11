<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title> New Form </title>
</head>

<body>

    <?php
    $names = $_GET['name'];
    $payments = $_GET['payment'];
    $types = implode($_GET['type']);
    $additionals = implode($_GET['additional']);
    $backgrounds = implode($_GET['background']);
    $messages = $_GET['message'];
    $refs = $_GET['ref'];
    ?>



    <form action="{{ route('orders.store') }}" method="get">

        @csrf

        <fieldset>
            <label>
                <input type="checkbox" name="name" value= "$names">
                <?php echo $_GET['name'] ?>
            </label>

        </fieldset>

        <fieldset>
            <label>

                <input type="checkbox" name="payment" value="ba">
                <?php echo $_GET['payment'] ?>

            </label>
        </fieldset>

        <fieldset>
            <label>
                <input type="checkbox" name="type" value="ab">
                <?php echo $types ?>
            </label>
        </fieldset>

        <fieldset>
            <label>
                <input type="checkbox" name="additional" value="idk">
                <?php echo $additionals ?>
            </label>
        </fieldset>

        <fieldset>
            <label>
                <input type="checkbox" name="background" value="ha">
                <?php echo $backgrounds ?>
            </label>
        </fieldset>

        <fieldset>
            <label>

                <input type="checkbox" name="message" value="nothing">
                <?php echo $_GET['message'] ?>


            </label>
        </fieldset>

        <fieldset>
            <label>
                <input type="checkbox" name="ref" value="what">
                <?php echo $_GET['ref'] ?>

            </label>
        </fieldset>

        <button> send </button>

    </form>
</body>

</html>