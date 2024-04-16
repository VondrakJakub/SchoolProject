<?php Core\View::render('header', ['title' => 'Register']);

$errors = 
[
    'email_taken'=>'Email is already taken',
];
?>

<body>
    <main class="container--center">
        <form id="register_form" action="/Project/register" class="form" method="post">
            <h1 class="form__heading">Register</h1>
            <input type="email" name="email" placeholder="Email" autofocus>
            <?php if(isset($_GET['error'])) echo '<small class="form__error-message">'.$errors[$_GET['error']].'</small>'; ?>
            <input type="password" name="password" id="password" placeholder="Password">
            <small class="form__error-message-pass-l">Password must contain at least 8 characters.</small>
            <input type="password" id="password_confirm" placeholder="Password confirm" required>
            <small class="form__error-message-pass-s">Password does not match.</small>
            <button class="button--primary" type="submit">Create account</button>
            <div class="form__footer">
                <p>Already have an account? <a href="/Project/login">Login</a></p>
            </div>
        </form>
    </main>
    <script src="/Project/Views/resources/pass_lenght.js"></script>
    <script src="/Project/Views/resources/pass_confirm.js"></script>
</body>
</html>