const initializeInputs = () => {
  const inputs = document.querySelectorAll('input.input-field');
  if (inputs) {
    inputs.forEach(input => {
      setTimeout(() => {
        input.dataset.len = input.value.length || '';
      }, 300);
      input.addEventListener('change', () => {
        input.dataset.len = input.value.length || '';
      })
    })
  }
}

document.addEventListener('DOMContentLoaded', () => {
  initializeInputs();
});