<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col">
            <!-- Formulaire classique -->
            <form method="POST" action="insert-article.php" id="contact_form">
                <div class="text-center">
                    <h6>Auteur :</h6>
                </div>
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="form-group">
                            <input class="form-control w-100" type="text" id="name" name="name" required>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <h6>Titre :</h6>
                </div>

                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="form-group">
                            <input class="form-control w-100" type="text" id="title" name="title" required>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <h6>Article :</h6>
                </div>

                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="form-group">
                            <input class="form-control w-100" type="text" id="article" name="article" required>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <input type="submit" title="Send your message." value="Send It !" class="btn btn-sm btn-info">
                </div>
            </form>
        </div>
    </div>
</div>

<?php require 'list-article.php' ?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>