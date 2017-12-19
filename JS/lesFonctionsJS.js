
function afficherLesMedicament(codeDepot){
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
function afficherLesFamilles(codeFam){
    $.ajax(
        {  
            type:"get",
            url:"index.php/Ctrl_A/afficherLesFamilles",
            data:"codeFam="+codeFam,
             success:function(data)
            {
                $('#divFamille').empty();
                $('#divFamille').append(data);
            },
            error:function()
            {
                alert('erreur');
            }
        }
        );
}
function afficherLesIndividu(codeIndividus)
{
   
    $.ajax(
        {  
            type:"get",
            url:"index.php/Ctrl_A/afficherLesIndividus",
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
function afficherLesDosages(codeDosage)
{
   
    $.ajax(
        {  
            type:"get",
            url:"index.php/Ctrl_A/afficherLesDosages",
            data:"codeDosage="+codeDosage,
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
function afficherMedDeconseiller()
{
    $.ajax(
    {
        type:"get",
        url:"index.php/Ctrl_A/afficherMedDeconseiller",
        data:"$MED_MED_PERTURBE="+$('#lstMedicament').val(),
        success:function(data)
        {
            $('#divDeconMed').empty();
            $('#divDeconMed').append(data);
        },
        error:function()
        {
            alert('Erreur SQL');
        }
    }
    );
}