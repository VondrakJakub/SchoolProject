<?php Core\View::render('header', ['title' => 'Login']);
$errors = 
[
    'wrong_credentials'=>'Invalid email or password',
];
?>

<body>
    <main class="container--center">
        <form action="/Project/login" class="form" method="post">
            <h1 class="form__heading">Login</h1>
            <input type="email" name="email" placeholder="E-mail" autofocus>
            <input id="password" type="password" name="password" placeholder="Heslo">
            <?php if(isset($_GET['error'])) echo '<small class="form__error-message">'.$errors[$_GET['error']].'</small>'; ?>
            <button class="button--primary" type="submit">Login</button>
            <div class="form__footer">
                <p>Not sign up yet? <a href="/Project/register">Create account</a></p>
            </div>
        </form>
    </main>
</body>
</html>