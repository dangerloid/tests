// in-line comment

/* multi-line
comment */

/* data types:
undefined, null, boolean, string, symbol, number, object, bigInt */

// variables

var myName = "Chris";

myName = 9;

console.log(myName); // displays the value 9 in the debug console

// assigment operator

var myVar = "foo"

// capitalization

var camelCase;
CamelCase = "cool"; // console outputs an error

// const

const FACT = "JavaScript is cool!" // can't be changed

// MATH //

// additions

var sum = 10 + 10;
console.log(sum) // will output 20

// subtractions

const difference = 45 - 33;
console.log(difference); // will output 12

// multiplication

const product = 8 * 10;
console.log(product); // will output 80

// division

const quotient = 66 / 33;
console.log(quotient); // will output 2

// incrementing

var inc = 87;
inc++; // 88

// decrementing

var dec = 11;
dec--; // 10

// decimal numbers

var myDecimal = 9.22; // anything that has a floating point is a decimal number

// multiplication of decimals

const decProduct = 2.0 * 2.5;
console.log(decProduct); // will output 5

// division of decimals

const decQuotient = 4.4 / 2.0;
console.log(decQuotient); // will output 2.2

// remainders

const remainder = 11 % 3;
console.log(remainder); // will output 2

// compound assignment

// addition

var compAdd = 3;
compAdd += 12;

// subtraction

var compSub = 11;
compSub -= 6;

// multiplication

var compMulti = 5;
compMulti *= 5;

// division

var compDiv = 48
compDiv /= 12;


// escaping string literals


// backslash
const doubleEsc = "I am a \"double quoted\" string inside \"double quotes\"."

// using another type of quote
const singleEsc = '<a href="http://www.example.com" target="_blank">Link</a>';

// escape sequences

const ESCAPE = "FirstLine\n\t\\SecondLine\nThirdLine";

// string concatenation

const doors = "This is the start." + " This is the end."

// string concatenation with plus equals

let strPlusEquals = "This is the first sentence. ";
strPlusEquals += "This is the second sentence.";

// string concatenation with variables

const myConcName = "Chris";
const myConcStr = "My name is " + myName + " and I am well!";

// appending variables to a string

const someAdjective = "tedious";
let complaining = "Learning to code is ";
complaining += someAdjective; // output is "Learning to code is tedious"

// finding the length of a string

let lastNameLength = 0;
const lastName = "Lovelace";

lastNameLength = lastName.length;
console.log(lastNameLength) // outputs 8

// bracket notation -> find letter in string

let firstLetterOfLastName = "";
const lastNameMarkTwo = "Lovelace";

firstLetterOfLastName = lastNameMarkTwo[0];
console.log(firstLetterOfLastName) // output will be "L"