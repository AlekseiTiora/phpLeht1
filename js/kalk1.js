var vastus=document.getElementById("vastus");
var kogus=document.getElementById("kogus");
var vastus2=document.getElementById("vastus2");
var kogus2=document.getElementById("kogus2");
var pilt=document.getElementById("pilt");


const dollar=1.16;
const yen=128.87;
const pound=0.85;
const rub=84.20;
const gramm=1000.00;
const tonn=0.001;
const milligrammi=1000000.00;
const mikrogrammi =1000000000.00;
// перемножает

function validateForm() {
    let x = document.forms["var1"]["kogus"].value;
    if (x == "") {
        alert("Sisesta kogus");
        return false;
    }
}

function calculate(val,currency){
    return(val* currency).toFixed(3);
    // toFixed(3) - знаков после запитой
}
function radioChange(event){
    var inputValue=kogus.value;

    if(event.target.id=="dollar"){
        vastus.innerHTML=calculate(kogus.value,dollar) +"$";
        pilt.src="img/dollar.PNG"
    }
    else if(event.target.id=="yen") {
        vastus.innerHTML = calculate(kogus.value, yen) + "¥";
        pilt.src="img/yen.PNG"
    }
    else if(event.target.id=="pound") {
        vastus.innerHTML = calculate(kogus.value, pound) + "£";
        pilt.src="img/pound.PNG"
    }
    else if(event.target.id=="rub") {
        vastus.innerHTML = calculate(kogus.value, rub) + "₽";
        pilt.src="img/rub.PNG"
    }

}

function selectOptionChange(event) {
    var inputValue = kogus2.value;

    if(event.target.value==="dollar"){
        vastus2.innerHTML=calculate(inputValue,dollar) +"$";
        pilt.src="img/dollar.png"
    }
    else if(event.target.value==="yen") {
        vastus2.innerHTML = calculate(inputValue, yen) + "¥";
        pilt.src="img/yen.png"
    }
    else if(event.target.value==="pound") {
        vastus2.innerHTML = calculate(inputValue, pound) + "£";
        pilt.src="img/pound.png"
    }
    else if(event.target.value==="rub") {
        vastus2.innerHTML = calculate(inputValue, rub) + "₽";
        pilt.src="img/rub.png"
    }
}
function inputCurrencyText(){
    var inputValue=document.getElementById("kogus3").value
    var inputText=document.getElementById("valuutanimi")
    var vastus3=document.getElementById("vastus3")

    if(inputText.value=="dollar") {
        vastus3.innerHTML = calculate(inputValue, dollar) + "$";
    }

    else if(inputText.value=="yen"){
        vastus3.innerHTML=calculate(inputValue,yen) +"¥";
    }

    else if(inputText.value=="rub"){
        vastus3.innerHTML=calculate(inputValue,rub) +"₽";
    }

    else if(inputText.value=="pound"){
        vastus3.innerHTML=calculate(inputValue,pound) +"£";
    }
}

function kilogramText() {
    var inputValue = document.getElementById("kogus4").value
    var inputText = document.getElementById("kgnimi")
    var vastus4 = document.getElementById("vastus4")

    if (inputText.value == "gramm") {
        vastus4.innerHTML = calculate(inputValue, gramm) + " grammi"
    } else if (inputText.value == "tonn") {
        vastus4.innerHTML = calculate(inputValue, tonn) + " tonn"
    } else if (inputText.value == "milligrammi") {
        vastus4.innerHTML = calculate(inputValue, milligrammi) + " milligrammi"
    } else if (inputText.value == "mikrogrammi") {
        vastus4.innerHTML = calculate(inputValue, mikrogrammi) + " mikrogrammi"
    }
}



