document.addEventListener('DOMContentLoaded', function () {
    var modalBtns = document.querySelectorAll('.modal_btn');
    modalBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            var modalId = this.dataset.modalId;
            var modal = document.getElementById(modalId);
            modal.style.display = 'block';
        });
    });

    var closeBtns = document.querySelectorAll('.close');
    closeBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            var modal = this.parentElement.parentElement;
            modal.style.display = 'none';
        });
    });

    window.addEventListener('click', function(event) {
        var modals = document.querySelectorAll('.desc_modal');
        modals.forEach(function (modal) {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        });
    });
});