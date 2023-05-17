displayDice();
function displayDice() {
  for (let i = 0; i < results.length; i++) {
    for (let j = 0; j < results[i].length; j++) {
      const slika = document.createElement("img");
      slika.src = "images/dice" + results[i][j] + ".png";
      document.getElementsByClassName("containerKocke")[i].appendChild(slika);
    }
  }
}
