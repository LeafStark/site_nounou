
$(document).ready(function(){
                $("button").click(function(){
                    $("#ajouteEnfant").find("tr").each(function(){
                        var tdArr = $(this).children();
                        var nom = tdArr.eq(0).find('input').val();
                        
                        $.post('getEnfant.php',{
                            nom1 : nom,
                            prenom :"aa"
                        },function(data){
                            alert(data);
                        });
                    });
                });
            });

