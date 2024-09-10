var nome = parseInt(prompt("Digite o seu nome:"));
var salario = parseInt(prompt("Digite o seu salário:"));


document.write("<p>Seu nome é: ", nome,"</p>")
if (salario >=2000){
    document.write ("<p>Nome: ",nome, "</p>")
    document.write ("<p>Sálario: ",salario,"</p>")
    document.write ("<p>Sua faixa de reajuste será de 20%</p>")
    fR = salario * 2 / 100
    document.write ("<p> O valor do reajuste será de: R$",fR)
    sF = salario + fR
    document.write ("<p> Seu salário final é: R$",sF)
}
else{
    document.write ("<p>Nome: ",nome, "</p>")
    document.write ("<p>Sálario: ",salario,"</p>")
    document.write ("<p>Sua faixa de reajuste será de 30%</p>")
    fR2 = salario * 3 / 100
    document.write ("<p> O valor do reajuste será de: R$",fR2)
    sF2 = salario + fR2
    document.write ("<p> Seu salário final é: R$",sF2)
}

    


