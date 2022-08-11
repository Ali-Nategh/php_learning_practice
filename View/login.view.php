<?php require_once 'Section/header.php' ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="col-lg-8">
                    <h2> Login </h2>
                    <hr>
                    <form action="login.php" method="post">
                        <div class="form-group">
                            <label for="username">UserName</label>
                            <input type="text" name="username" class="form-control" value="<?= old('username') ?>">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember">Remember Me
                                </label>
                            </div>
                            <button type="submit" class="btn-danger">Login</button>
                        </div>
                    </form>

                    <?php if(! is_null($status) ) : ?>
                        <div class="alert alert-danger">
                            <?= $status ?>
                        </div>
                    <?php endif; ?>

                    <h4>
                        <br><br> If you don't have an account, you can Register Here:
                    </h4>
                    <form action="register.php" method="get">
                        <div class="form-group">
                            <button type="submit" class="btn-success">Register</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

<?php require_once 'Section/footer.php' ?>