const loginForm = document.querySelector("#new-user-form");
const successModal = new bootstrap.Modal("#success-modal");

loginForm.addEventListener("submit", (event) => {
  event.preventDefault();

  let formData = new FormData(loginForm);

  fetch("./app/novo_usuario.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.status === "ok") {
        successModal.show();
      } else {
        showAlert(data.status, "danger");
      }
    });
});