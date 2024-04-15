document.addEventListener('DOMContentLoaded', function() {
    const confirmPasswordInput = document.getElementById('password_confirm');
    const errorMessage = document.querySelector('.form__error-message');

    errorMessage.style.display = "none";

    confirmPasswordInput.addEventListener('keyup', (event) => {
        checkPasswordMatch();
    });

    confirmPasswordInput.addEventListener('focus', (event) => {
        checkPasswordMatch();
    });

    function checkPasswordMatch() {
        let passwordInput = document.getElementById('password');
        let confirmPasswordValue = confirmPasswordInput.value.trim();
        let passwordValue = passwordInput.value.trim();

        if (confirmPasswordValue !== "" && passwordValue !== confirmPasswordValue) {
            errorMessage.style.display = "block";
        } else {
            errorMessage.style.display = "none";
        }
    }

    confirmPasswordInput.addEventListener('input', (event) => {
        if (event.target.value === "") {
            errorMessage.style.display = "none";
        }
    });
});


