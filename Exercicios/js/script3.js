var num1 = parseInt(prompt("Digite o número 1:"));
var num2 = parseInt(prompt("Digite o número 2:"));
var num3 = parseInt(prompt("Digite o número 3:"));

if (num1>num2 && num1>num3 && num3>num2){
 document.write("O número 1 é maior e o número 2 é o menor")
 }
 else if (num2>num1 && num2>num3 && num3>num1){
    document.write("O número 2 é maior e o número 1 é o menor")
 }
 else if (num1>num3 && num1>num2 && num2>num3){
    document.write("O número 1 é maior e o número 3 é o menor")
 }
 else if (num3>num1 && num3>num2 && num2>num1){
    document.write("O número 3 é maior e o número 1 é o menor")
 }
 else if (num2>num3 && num2>num1 && num1>num3){
    document.write("O número 2 é maior e o número 3 é o menor")
 }
 else if (num3>num2 && num3>num1 && num2){

    document.write("O número 3 é maior e o número 2 é o menor")
 }
 else{
    document.write("Os números são iguais")
    }
   
 
 