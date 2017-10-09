
function afficherFormation(numeroActivite){
    $.ajax(
        {  
            type:"get",
            url:"index.php/Ctrl_Sncf/afficherFormation",
            data:"numeroActivite="+numeroActivite,
             success:function(data)
            {
                $('#divFormations').empty();
                $('#divFormations').append(data);
            },
            error:function()
            {
                alert('erreur');
            }
        }
        );
}

function afficherAgents(codeFormation)
{
   
    $.ajax(
        {  
            type:"get",
            url:"index.php/Ctrl_Sncf/afficherAgents",
            data:"codeFormation="+codeFormation,
             success:function(data)
            {
                $('#divAgents').empty();
                $('#divAgents').append(data);
            },
            error:function()
            {
                alert('erreur');
            }
        }
        );
}

