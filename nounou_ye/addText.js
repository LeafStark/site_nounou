function addText() {
    var table = document.getElementById("ajouteEnfant");
    var tr = table.insertRow();
    var td1 = tr.insertCell(0);
    var td2 = tr.insertCell(1);
    var td3 = tr.insertCell(2);
    td1.innerHTML = "<input type='text' placeHolder='Préom d&apos;enfant' name='prenomEnfant'/>";
    td2.innerHTML = "<input type='date' placeHolder='Date de naissance' name='dateDeNaissance'/>";
    td3.innerHTML = "<input type='text' placeHolder='Restriction Alimentaire' name='restriction'/>";
}
