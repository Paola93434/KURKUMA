const signUpButton = document.getElementById('signUp');
const container = document.querySelector('.container');

signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});
