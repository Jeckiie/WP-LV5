<head>
    <title>Add fighter</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style>
        .container {
            width: 250px;
            clear: both;
        }

        .container input {
            width: 100%;
            clear: both;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="insert.php" method="post">
            <label for="fname">Cat name:</label>
            <input type="text" id="catname" name="catname"><br><br>

            <label for="lname">Cat age:</label>
            <input type="number" id="catage" name="catage"><br><br>

            <label for="email">Cat info:</label>
            <input type="text" id="catinfo" name="catinfo"><br><br>

            <label for="uname">Wins:</label>
            <input type="number" id="wins" name="wins"><br><br>

            <label for="age">Loss:</label>
            <input type="number" id="loss" name="loss"><br><br>

            <label for="age">Cat image url:</label>
            <input type="url" id="imgUrl" name="imgUrl"><br><br>

            <input type="submit" id="btn" value="Add fighter">
        </form>
    </div>
    <p>Please fill all fields!</p>
</body>