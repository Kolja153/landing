let classChangeTimeoutId = null;

const setFeedback = (success = false) => {
  const feedbackEl = document.getElementById('order-form-feedback');
  const classNameToAdd = success ? 'success' : 'fail';
  const classNameToRemove = success ? 'fail' : 'success';
  if (!feedbackEl) {
    return;
  }
  feedbackEl.classList.remove(classNameToRemove);
  feedbackEl.classList.add(classNameToAdd);
  if (classChangeTimeoutId) {
    clearTimeout(classChangeTimeoutId);
  }
  classChangeTimeoutId = setTimeout(() => {
    feedbackEl.classList.remove(classNameToAdd);
  }, 5000);
}

const sendFormData = async (url, data, form) => {
  try {
    const response = await fetch(url, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(data)
    });
    if (response.ok) {
      setFeedback(true);
      form.reset();
    } else {
      setFeedback(false);
    }
  } catch (error) {
    setFeedback(false);
  }
}

const initializeFormHandler = () => {
  const form = document.getElementById('order-form');
  if (!form) {
    return;
  }
  const action = form.action;
  if (!action) {
    return;
  }
  form.addEventListener('submit', (ev) => {
    ev.preventDefault();
    const requestData = {};
    const formData = new FormData(ev.target);
    for (const pair of formData.entries()) {
      requestData[pair[0]] = pair[1];
    }
    sendFormData(action, requestData, form)
  });
}

document.addEventListener('DOMContentLoaded', () => {
  initializeFormHandler();
});