document.addEventListener('DOMContentLoaded', function() {
  const formLogin = document.querySelector('.login-form.sign-in');
  const formRegister = document.querySelector('.login-form.sign-up');

  function validateForm(form) {
      const inputs = form.querySelectorAll('input');
      for (let input of inputs) {
          if (!input.value) {
              alert("Todos los campos son obligatorios.");
              return false; // Detener la validación si hay un campo vacío
          }
      }
      return true; // Todos los campos están llenos
  }

  formLogin.addEventListener('submit', function(e) {
      if (!validateForm(formLogin)) {
          e.preventDefault(); // Detener el envío del formulario
      }
  });

  formRegister.addEventListener('submit', function(e) {
      if (!validateForm(formRegister)) {
          e.preventDefault(); // Detener el envío del formulario
      }
  });
});
