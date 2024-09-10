nota1 = parseInt(prompt("Digite a sua primeira nota:"));
nota2 = parseInt(prompt("Digite a sua segunda nota:"));
nota3 = parseInt(prompt("Digite a sua terceira nota:"));

media = (nota1+nota2+nota3)/3
if (media>=8){
    document.write("<p>Sua nota MB</p>")
}
else if(media<8 && media>=6){
    document.write("<p>Sua nota é B</p>")
}
    else if(media<6 && media>=5){
        document.write("<p>Sua nota é R</p>")
    }
    else{
        document.write("<p>Sua nota é I</p>")
    }