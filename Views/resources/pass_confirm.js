document.addEventListener('DOMContentLoaded', function() {
    const confirmPasswordInput = document.getElementById('password_confirm');
    const errorMessage = document.querySelector('.form__error-message-pass-s');
    const form = document.getElementById('register_form');

    errorMessage.style.display = "none";

    function checkPasswordMatch() {
        let passwordInput = document.getElementById('password');
        let confirmPasswordValue = confirmPasswordInput.value.trim();
        let passwordValue = passwordInput.value.trim();

        if (confirmPasswordValue !== "" && passwordValue !== confirmPasswordValue) {
            errorMessage.style.display = "block";
            return false; 
        } else {
            errorMessage.style.display = "none"; 
            return true; 
        }
    }

    confirmPasswordInput.addEventListener('input', checkPasswordMatch);

    confirmPasswordInput.addEventListener('focus', checkPasswordMatch);

    form.addEventListener('submit', function(event) {
        if (!checkPasswordMatch()) 
        {
            event.preventDefault(); 
        }
    });
});




