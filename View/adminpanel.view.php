<?php require_once 'Section/header.php' ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <h1> Welcome <?= $username ?> </h1>

                <br>

                <h2>
                    You can now access the pages that require login. <br>
                    Your info is saved in a session untill you decide to logout. <br>
                    But till then, enjoy the site!
                </h2>

                <br> <br> <br>

                <form action="index.php" method="post">
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Index page</button>
                    </div>
                </form>

                <br>

                <form action="logout.php" method="post">
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

<?php require_once 'Section/footer.php' ?>