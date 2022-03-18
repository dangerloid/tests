document.write("Hello, world!<br>");

/* ------------------------------- */

var voto1 = 5;
var voto2 = 2;
var voto3 = 6;

var media = (voto1 + voto2 + voto3) / 3;

if (media >= 8) {
  document.write("Complimenti, promosso con ottimi voti.<br>");
} else if (media >= 6) {
  document.write("Promosso con media " + media + ".<br>");
} else if (media >= 5) {
  document.write("Bocciato ma sei stato fortunato.");
} else {
  document.write("Mi dispiace, sei stato bocciato.<br>");
}

document.write("Fine programma<br>");

/* ------------------------------- */

var numero = 3;
var numeroUser = prompt("indovina numero");
var risultato = numeroUser;

if (numero == risultato) {
  document.write("ok il numero è stato indovinato<br>");
} else if (risultato > numero) {
  document.write("troppo alto<br>");
} else if (risultato < numero) {
  document.write("troppo basso<br>");
}

/* ------------------------------- */

var corrente = 1;
var precedente = 1;
var quanti = 10;

document.write(precedente + "<br>");
document.write(corrente + "<br>");

for (ind = 1; ind <= quanti; ind++) {
  nuovo = corrente + precedente;
  precedente = corrente;
  corrente = nuovo;

  document.write(nuovo + "<br>");
}

document.write("fine");

/* ------------------------------- */

// JQUERY OMMIODDIO

