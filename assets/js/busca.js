import { insertOnSelect } from "./utils.js";

const tipoDeBusca = document.querySelector("#buscar-por");
const campoDeBusca = document.querySelector("#campo-de-busca");

tipoDeBusca.addEventListener("change", (event) => {
  campoDeBusca.innerHTML = "";

  if (event.target.value === "nome") {
    let label = document.createElement("label");
    label.htmlFor = "param";
    label.className = "input-group-text";
    label.textContent = "Nome";

    let input = document.createElement("input");
    input.type = "text";
    input.name = "param";
    input.id = "param";
    input.className = "form-control";

    campoDeBusca.appendChild(label);
    campoDeBusca.appendChild(input);
  } else if (event.target.value === "escolaridade") {
    let label = document.createElement("label");
    label.htmlFor = "param";
    label.className = "input-group-text";
    label.textContent = "Escolaridade";

    let select = document.createElement("select");
    select.name = "param";
    select.id = "param";
    select.className = "form-select";

    select.innerHTML =
      "<option value='fundamental'>Ensino Fundamental</option><option value='medio'>Ensino Médio</option>";

    campoDeBusca.appendChild(label);
    campoDeBusca.appendChild(select);
  } else if (event.target.value === "serie") {
    let label = document.createElement("label");
    label.htmlFor = "param";
    label.className = "input-group-text";
    label.textContent = "Série";

    let select = document.createElement("select");
    select.name = "param";
    select.id = "param";
    select.className = "form-select";

    insertOnSelect(select, 9);

    campoDeBusca.appendChild(label);
    campoDeBusca.appendChild(select);
  }
});
