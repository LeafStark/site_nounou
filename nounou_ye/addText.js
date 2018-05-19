function addText(){
    var table = document.getElementById("ajouteEnfant");
    var tr = table.insertRow();
    var td1 = tr.insertCell(0);
    var td2= tr.insertCell(1);
    var td3= tr.insertCell(2);
    td1.innerHTML = "<input type='text' placeHolder='Préom d&apos;enfant' name='prenomEnfant'/>";
    td2.innerHTML = "<input type='date' placeHolder='Date de naissance' name='dateDeNaissance'/>";
   td3.innerHTML = "<input type='text' placeHolder='Restriction Alimentaire' name='restriction'/>";
    /* var td = document.createElement("td");
    var input = document.createElement("<input name='prenomEnfant'/>");
    input.setAttribute("type","text");
    input.setAttribute("placeholder","Préom d'enfant");
    td.innerText="Nom d'enfant";
    
    td.appendChild(input);
    tr.appendChild(td);*/
    

    /*if(row !== null){
        cell = row.insertCell();
        cell.innerHTML = "<div>\n\
\n\
<input type='date' placeHolder='Date de naissance' name='dateDeNaissance'/>\n\
<input type='text' placeHolder='Retrictions alimentaires' name='restriction'/>\n\
<input type='button' value='Ajouter' onclick='addText()'>\n\
<input type='button' value='Supprimer' onclick='deleteText(this)'></div>";
    }*/
}
