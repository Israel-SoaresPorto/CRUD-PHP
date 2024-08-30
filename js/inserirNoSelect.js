export default function inserirNoSelect(select, quantidade) {
    for (let i = 1; i <= quantidade; i++) {
      let option = document.createElement("option");
      option.value = i;
      option.textContent = `${i}° Ano`;
      select.appendChild(option);
    }
  }