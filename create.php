<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>

<body>
    <form action="store.php" method="POST">
    <div class="container">
        <fieldset>
            <legend>Add New Etudiant</legend>
            <div class="form-group">
                    <label for="id">id</label>
                    <input type="number" class="form-control" name="id" id="id">
                </div>
                <div class="form-group">
                    <label for="firstname">firstname</label>
                    <input type="text" class="form-control" name="firstname" id="firstname">
                </div>
                <div class="form-group">
                    <label for="lastname">lastname</label>
                    <input type="text" class="form-control" name="lastname" id="lastname">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="phone">phone</label>
                    <input type="number" class="form-control" name="phone" id="phone">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-danger">Envoyer</button>
                </div>
            </form>
        </fieldset>
    </div>



    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
