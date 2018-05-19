function addText(){
    var table = document.getElementById("ajouteLangue");
    var tr = table.insertRow();
    var td1 = tr.insertCell(0);
    td1.innerHTML = "<input type='text' placeHolder='langue' name='langue'/>";
}
