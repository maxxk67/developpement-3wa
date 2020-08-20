'use strict';

let form = document.getElementById('register');
/////////////////////////////////////////////////////////////////////////////////////////
// FONCTIONS                                                                           //
/////////////////////////////////////////////////////////////////////////////////////////
function verifForm( name, errorMessage , event )
{
    let field = document.getElementById(name);
    
    if ( field.value.length == 0 )
    {
        document.getElementById(name+'_error').textContent = errorMessage;
        field.classList.add('error');
        // annuler un evenement
        // bloquer le submit du formulaire
        event.preventDefault();
    }
}

function resetErrors()
{
    // retirer les bordures rouges
    
    let inputs = document.querySelectorAll('#register input');
    
    for( let i = 0; i < inputs.length; i++ )
    {
        inputs[i].classList.remove('error');
    }
    
    // retirer les textes 
    
    let texts = document.querySelectorAll('#register fieldset p');
    
    for( let i = 0; i < texts.length; i++ )
    {
        texts[i].textContent = "";
    }
}

function verif( event )
{
    resetErrors();
    
    verifForm( 'firstname', "Le prenom ne doit pas etre vide", event );
    verifForm( 'lastname', "Le nom ne doit pas etre vide", event );
    verifForm( 'address', "L'adresse ne doit pas etre vide", event );
    verifForm( 'phone', "Le telephone ne doit pas etre vide", event  );
    verifForm( 'email', "L'email ne doit pas etre vide", event  );
    verifForm( 'password', "Le mot de passe ne doit pas etre vide", event  );
    verifForm( 'city', "La ville ne doit pas etre vide", event  );
    verifForm( 'zipcode', "Le code postal ne doit pas etre vide", event  );
    
    let zipcode = document.getElementById('zipcode');
    
    if ( zipcode.value.length != 5 )
    {
        document.getElementById('zipcode_error').textContent = "Le code postal doit faire 5 caracteres";
        zipcode.classList.add('error');
        // annuler un evenement
        // bloquer le submit du formulaire
        event.preventDefault();
    }
}


/////////////////////////////////////////////////////////////////////////////////////////
// CODE PRINCIPAL                                                                      //
/////////////////////////////////////////////////////////////////////////////////////////
document.addEventListener('DOMContentLoaded', function() 
{

form.addEventListener('submit', verif);


});