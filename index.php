<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>just... forget it</title>
</head>
<body>
    <h1>what do you need to let go of?</h1>
    <textarea id="dropoff" rows="10" cols="50"></textarea>
    <button onclick="storeForgotten()">forget it</button>

    <!-- <div>Current PHP user: <?php echo exec('whoami'); ?></div> -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            function storeForgotten() {
                let content = $("#dropoff").val();

                $.ajax({
                    type: 'POST',
                    url: 'forget_it.php',
                    data: {content: content},
                    success: function(response) {
                        alert(response); // success message
                    }
                });
            }
        </script>
</body>
</html>