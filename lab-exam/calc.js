const display = document.getElementById('res')

function num (val){
    display.value += val;
}

function c(){
    display.value = "";
}


function calc (){
    try {
        display.value = eval(display.value)
    } catch (error) {
        display.value = "EROR"
    }
}