let num1 = document.getElementById ('num1');
let num2 = document.getElementById  ('num2');






function soma (a, b) {
    resultado = parseFloat(a)+parseFloat(b);
    return resultado
}
function subtracao  (a,b) {
    resultado = parseFloat(a)-parseFloat(b);
    return resultado;
}

document.getElementById ('soma').onclick = function () {
    const resultado = soma (num1.value, num2.value)
    const saida = document.getElementById ('saida')
    saida.value = resultado
       
}

document.getElementById ('subtracao').onclick = function () {
    const resultado = subtracao (num1.value, num2.value);
    document.getElementById ('saida'.value = resultado;
       
}