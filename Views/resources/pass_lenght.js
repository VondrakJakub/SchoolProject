document.addEventListener('DOMContentLoaded', function() {
    const passwordInput = document.getElementById('password');
    const errorMessage = document.querySelector('.form__error-message-pass-l');
    const form = document.querySelector('form');

    errorMessage.style.display = "none";

    passwordInput.addEventListener('keyup', (event) => {
        let value = event.target.value;

        if (value.length < 8) {
            errorMessage.style.display = "block";
        } else {
            errorMessage.style.display = "none";
        }

        if (value === "") {
            errorMessage.style.display = "none";
        }
    });

    form.addEventListener('submit', function(event) {
        const passwordValue = passwordInput.value;

        if (passwordValue.length < 8) {
            errorMessage.style.display = "block";
            event.preventDefault();
        }
    });

    confirmPasswordInput.addEventListener('input', (event) => {
        if (event.target.value === "") {
            errorMessage.style.display = "none";
        }
    });
});


