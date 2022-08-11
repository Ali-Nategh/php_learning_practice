<?php require_once 'Section/header.php' ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="col-lg-8">
                    <h2> Register </h2>
                    <hr>
                    <form action="register.php" method="post">
                        <div class="form-group">
                            <label for="username">UserName</label>
                            <input type="text" name="username" class="form-control" value="<?= old('username') ?>">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn-danger">Register</button>
                        </div>
                    </form>
                    <?php if(! is_null($status) ) : ?>
                        <div class="alert alert-danger">
                            <?= $status ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

<?php require_once 'Section/footer.php' ?>