var count1 = 0;
var countFlower1 = document.getElementById("nb1");

function ajouter1(){
    count1++;
    countFlower1.value = count1;
}
function enlever1(){
    if (count1 > 0) {
        count1--;
        countFlower1.value = count1;
    }
}