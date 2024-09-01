export function insertOnSelect(select, quantidade) {
  for (let i = 1; i <= quantidade; i++) {
    let option = document.createElement("option");
    option.value = i;
    option.textContent = `${i}° Ano`;
    select.appendChild(option);
  }
}

export function showAlert(message, type) {
  const alertPlace = document.querySelector("#alert-message");

  alertPlace.innerHTML = `<div class="alert alert-${type} alert-dismissible" role="alert">
      <div>${message}</div>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>`;
}

export function insertOnTable(data) {
  const table = document.querySelector(".table");
  const tableBody = table.querySelector("tbody");

  tableBody.innerHTML = "";

  data.forEach((d) => {
    let tr = document.createElement("tr");

    let escolaridade =
      d.escolaridade === "medio"
        ? d.escolaridade.replace("me", "Mé")
        : d.escolaridade.replace(
            d.escolaridade[0],
            d.escolaridade[0].toUpperCase()
          );

    tr.innerHTML = `<td>${d.id}</td>
                    <td>${d.nome}</td>
                    <td>Ensino ${escolaridade}</td>
                    <td>${d.serie}° Ano`;

    tableBody.appendChild(tr);
  });
}