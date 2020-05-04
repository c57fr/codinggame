document.addEventListener("DOMContentLoaded", function () {
	var n = 0,
		rep,
		i = 0;

	var fibo = function (n, f = [0, 1]) {
		if (n > 1)
			for (i = 2; i < n + 1; i++) {
				f[i] = f[i - 1] + f[i - 2];
				//aff.innerHTML = i;
			}
		//  return i;
		return f[n];
	};
	// rep = fibo(14760); // maxi 1476

	var timerId = setInterval(function (f) {
		aff(i + " : " + new Intl.NumberFormat("fr-FR").format(fibo(n)));
		// i++;
		n++;
		if (i > 1477) {
			clearInterval(timerId);
			aff("Valeur 1477 (maxi) atteinte<hr>" + 1476 + " : " + fibo(1476));
			// aff(
			//   // aff.val() +
			// 	i + " : " + f[i]
			//   );
			// } else
		}
	}, 100);
});

function aff(result) {
	myP = document.getElementById("aff");
	myP.innerHTML = result;
}
