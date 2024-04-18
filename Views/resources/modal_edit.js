function openModal(modalId) {
    const modal = document.getElementById(modalId);

    const previousModal = document.querySelector('.desc_modal.open');
    if (previousModal) {
        previousModal.style.display = 'none';
        previousModal.classList.remove('open');
    }

    modal.style.display = 'block';
    modal.classList.add('open');
}

const modalButtons = document.querySelectorAll('.modal_btn_two');

modalButtons.forEach(button => {
    button.addEventListener('click', () => {
        const modalId = button.getAttribute('data-modal-id');
        openModal(modalId);
    });
});

const closeButtons = document.querySelectorAll('.close');

closeButtons.forEach(closeButton => {
    closeButton.addEventListener('click', () => {
        const modal = closeButton.closest('.desc_modal');
        modal.style.display = 'none';
        modal.classList.remove('open');
    });
});

window.addEventListener('click', event => {
    const modals = document.querySelectorAll('.desc_modal_edit');
    modals.forEach(modal => {
        if (event.target === modal) {
            modal.style.display = 'none';
            modal.classList.remove('open');
        }
    });
});