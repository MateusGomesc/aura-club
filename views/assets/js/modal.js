const btn = document.querySelector('.btnModal')
const modal = document.querySelector('.modalOverlay')
btn.addEventListener('click', () => {
    modal.classList.remove('active')
})