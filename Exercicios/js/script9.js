idade = parseInt(prompt("Digite a sua idade:"));
if (idade>=18){
    document.write("<p>Adulto</p>")
}
else if (idade>=14){
    document.write("<p>Juvenil</p>")
}
else if (idade>=9){
    document.write("<p>Infantil</p>")
}
else {
    document.write ("<p>Mirim</p>")
}
