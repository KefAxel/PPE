
function afficherLesMedicaments(codeDepot){
    $.ajax(
        {  
            type:"get",
            url:"index.php/Ctrl_A/afficherLesMedicaments",
            data:"codeDepot="+codeDepot,
             success:function(data)
            {
                $('#divMedicament').empty();
                $('#divMedicament').append(data);
            },
            error:function()
            {
                alert('erreur');
            }
        }
        );
}

function afficherLesIndividus(codeIndividus)
{
   
    $.ajax(
        {  
            type:"get",
            url:"index.php/Ctrl_Sncf/afficherLesIndividus",
            data:"codeIndividus="+codeIndividus,
             success:function(data)
            {
                $('#divIndividus').empty();
                $('#divIndividus').append(data);
            },
            error:function()
            {
                alert('erreur');
            }
        }
        );
}

