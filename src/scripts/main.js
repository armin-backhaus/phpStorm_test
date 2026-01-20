
document.write('hello world! from js');

function clickHandler(){
    const inputField = document.getElementById("my_text");
    const inputLength = inputField.value.length;
    if (inputLength < 3){
        alert("muss länger sein als 3, ist " + inputLength);
    }
}
