function deleteText(){
    var table = document.getElementById("ajouteLangue");
    var len = table.rows.length;
    table.deleteRow(len-1);
}