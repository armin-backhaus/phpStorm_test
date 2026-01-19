
document.write('hello world! from js');

function clickHandler(){
    const element = document.getElementById("my_text");
    element.hello = "world";
    const json = JSON.stringify(element);
    console.log("inside handler" + element + json + element.hello);
    console.log("inside handler" + element + json + element.value);
}
