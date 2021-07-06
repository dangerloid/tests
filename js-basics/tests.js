// variables //

// using them

let user, admin;

user = "John";

admin = user;

alert(admin);

// naming them

let ourPlanetName = "Earth";

let currentUserName = "John";

// uppercase const

const BIRTHDAY = "18.04.1982";

const age = someCode(BIRTHDAY);

// numbers //

// postfix + prefix

let a = 1,
  b = 1;

let c = ++a; // 2
let d = b++; // 1

/* a = 2;
b = 2;
c = 2;
d = 1; */

// assignment result

let a = 2;

let x = 1 + (a *= 2);

/* a = 4;
x = 5; */

// type conversion

"" + 1 + 0; // "10"
/* "" + 1 converts 1 to a string.
"1" + 0 does the same thing */

"" - 1 + 0; // -1
/* - only works with numbers
and converts empty strings to 0 */

true + false; // 1
// 1 + 0 = 1

6 / "3"; // 2
// division converts string to number

"2" * "3"; // 6
// same as above

4 + 5 + "px"; // "9px"
/* js does 4 + 5 = 9,
then converts 9 into a string
upon doing 9 + "px" */

"$" + 4 + 5; // $45
/* opposite of above
js does "$" + 4 = "$4" and converts 5 to a string
when "$4" + 5 */

"4" - 2; // 2
// subtraction converts string to number 

"4px" - 2; // NaN
// "4px" is not a number and can't be added to one

"  -9  " + 5; // " -9 5"
/* addition appends number to string
converts number to string */

"  -9  " - 5; // -14
// opposite of above

null + 1; // 1
// null = 0 after numeric conversion

undefined + 1; // NaN
// undefined = NaN after numeric conversion

" \t \n" - 2; // -2
/* "\t" and "\n" are space characters
" \t \n" is an empty string and = 0 */

// fix the addition (should return 3)

let a = prompt("First number?", 1);
let b = prompt("Second number?", 2);

alert(a + b); // 12

// incorrect because the prompt returns input as a string

let a = prompt("First number?", 1);
let b = prompt("Second number?", 2);

alert(+a + +b); // 3