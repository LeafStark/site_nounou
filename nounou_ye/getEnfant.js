
$(document).ready(function(){
                $("button").click(function(){
                    $("#ajouteEnfant").find("tr").each(function(){
                        var tdArr = $(this).children();
                        var nom = tdArr.find("#td1").val();
                        alert(nom);
                        $.post("getEnfant.php",{
                            nom : nom
                        })
                    });
                });
            });

