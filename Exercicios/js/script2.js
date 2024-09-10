var ano = parseInt(prompt("Digite o ano atual:"));
var nasc = parseInt(prompt("Digite o ano de nascimento:"));
 
idade = ano-nasc

if (nasc>=16){
    document.write("<p>Você pode votar</p>")
}
else{
    document.write("<p>Você não pode votar</p>")
}