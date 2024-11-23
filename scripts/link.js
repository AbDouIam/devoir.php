let links = document.getElementById("exo-links")
links.innerHTML = ""
for (let i = 1; i <18 ; i++) {
  links.innerHTML +=`<a href="exo${i}.php">Exercice ${i}</a><br>`
}
