<?php



// Reconstitution T1

// Reconstitution T2

// Reconstitution T3

// https://www.codingame.com/training/easy/bank-robbers
//##################################################################
// Solution validée dans codding :

/*

A gang of R foolish robbers decides to heist a bank. In the bank there are V vaults (indexed from 0 to V - 1). The robbers have managed to extract some information from the bank's director:
- The combination of a vault is composed of C characters (digits/vowels).
- The first N characters consist of digits from 0 to 9.
- The remaining characters consist of vowels (A, E, I, O, U).
- C and N may be the same or different for different vaults.

All the robbers work at the same time. A robber can work on one vault at a time, and a vault can be worked on by only one robber. Robbers deal with the different vaults in increasing order.

A robber tries the combinations at the speed of 1 combination per second. He tries all the possible combinations, i.e. he continues to try the untried combinations even after he has found the correct combination. Once he finishes one vault, he moves on to the next available vault, that is the vault with the smallest index among all the vaults that have not been worked on yet. The heist is finished when the robbers have worked on all the vaults.

Assume it takes no time to move from one vault to another.

You have to output the total time the heist takes.
Entrée
Line 1: An integer R for the number of robbers.
Line 2: An integer V for the number of vaults.
Next V lines: For each vault, one line of two space-separated integers C and N for the total number of characters (C) and the total number of digits (N) in the vault's combination. The vaults are ordered by their index.
Sortie
Line 1: An integer for the total time the heist takes in seconds.
Contraintes
1 ≤ R ≤ 5
1 ≤ V ≤ 20
3 ≤ C ≤ 8
0 ≤ N ≤ C

*/

/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 */
fscanf(STDIN, '%d', $R);
fscanf(STDIN, '%d', $V);
error_log(var_export($R.' '.$V, true));
for ($i = 0; $i < $V; ++$i) {
    fscanf(STDIN, '%d %d', $C, $N);
    error_log(var_export($i.' '.$C.' '.$N, true));
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo "1\n";
