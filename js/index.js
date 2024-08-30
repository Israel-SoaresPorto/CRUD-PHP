import inserirNoSelect from './inserirNoSelect.js';

const escolaridadeSelect = document.querySelector("#escolaridade");
const serieSelect = document.querySelector("#serie");

escolaridadeSelect.addEventListener("change", (event) => {
  serieSelect.innerHTML = "";

  if (event.target.value === "fundamental") {
    inserirNoSelect(serieSelect, 9);
  } else if (event.target.value === "medio") {
    inserirNoSelect(serieSelect, 3);
  }
});

inserirNoSelect(serieSelect, 9);
