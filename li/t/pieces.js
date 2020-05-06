var piece = [5, 9, 3, 8, 2, 5],
	somme = arraySum(piece),
	miSomme = Math.floor(somme / 2),
	M = [];

aff("Pièces: " + piece.join("-"));

M = initM(piece, miSomme);

// On cherche la solution
var trouve = 0,
	i = 0;
while (!trouve && i < piece.length) {
	M[i][0] = 1;
	for (j = 1; j < miSomme + 1; j++) {
		if (
			piece[i] === j ||
			(i > 0 &&
				(M[i - 1][j] === 1 || (piece[i] <= j && M[i - 1][j - piece[i]] === 1)))
		) {
			M[i][j] = 1;
		}
		trouve = M[i][16];
	}
	i++;
}
var nbPiece = affM(M),
	i = nbPiece,
	j = miSomme,
	soluce = [];

// On retrouve les pièces choisies

// Solution meilleure trouvée
while (!M[i - 1][j]) {
	j--;
}
soluce[0] = j;

while (j > 0) {
	while (i > 0 && M[i - 1][j] === 1) {
		i--;
	}
	j -= piece[i];
	if (j >= 0) {
		soluce.push(piece[i]);
	}
	i--;
}

// aff(soluce.join('-') + ' (<i>Size ' + soluce.length + '</i>)');
aff(
	"<hr>Solution = " +
		nbPiece +
		" pièces étudiées pour trouver " +
		soluce[0] +
		":"
);
soluce.shift();
aff("<b>" + soluce + "</b>");
aff("<hr>Fini.");

function initM(piece, miSomme) {
	//        aff('<hr>Ligne 0');
	var i,
		j,
		M = [];
	for (i = 0; i < piece.length; i++) {
		M[i] = [];
		for (j = 0; j < Math.floor(arraySum(piece) / 2) + 1; j++) {
			//                aff(i + ' ' + j + ' Val = ' + piece[j]);
			M[i][j] = 0;
		}
	}
	return M;
}

function affM(M) {
	var i = 0,
		nl;
	aff("<hr><pre>                           1 1 1 1 1 1 1");
	aff("<pre>Val. : 0 1 2 3 4 5 6 7 8 9 0 1 2 3 4 5 6");
	while (i < M.length && Math.max.apply(Math, M[i])) {
		rg = M[i];
		nl = i === 0 ? "<hr>" : "";
		aff(nl + "<pre>" + i + " (" + piece[i] + "): " + M[i].join(" "));
		i++;
	}
	$("pre").css("margin", "0");
	return i;
}

function arraySum(array) {
	var somme = 0;
	$.each(array, function () {
		somme += parseFloat(this) || 0;
	});
	return somme;
}

function aff(data) {
	$result = $("#result");
  $result.append(data + "<br>");
  console.log(resulte);
}
