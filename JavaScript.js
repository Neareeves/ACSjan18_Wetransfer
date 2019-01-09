let formValid = document.getElementById('envoyer');
            let nom_expediteur = document.getElementById('nom_expediteur');
            let missNom = document.getElementById('missNom');
            let nom_dossier = document.getElementById('nom_dossier');
            let missNomDossier = document.getElementById('missNomDossier');
            let nomValid = /^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/;
            let emailValid = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            formValid.addEventListener('click', validation);
            
            function validation(event){
                //Si le champ est vide
                if (nom_expediteur.validity.valueMissing){
                    event.preventDefault();
                    missNom.textContent = 'Nom et Prénom manquants';
                    missNom.style.color = 'red';
                }
                //Si le format de données est incorrect
                else if (nomValid.test(nom_expediteur.value) == false){
                    event.preventDefault();
                    missNom.textContent = 'Format incorrect';
                    missNom.style.color = 'orange';
                }
                else{ 
                }
                function validation(event){
                    //Si le champ est vide
                    if (nom_dossier.validity.valueMissing){
                        event.preventDefault();
                        missNomDossier.textContent = 'Nom de dossier manquant';
                        missNomDossier.style.color = 'red';
                    }
                    //Si le format de données est incorrect
                    else if (nomValid.test(nom_dossier.value) == false){
                        event.preventDefault();
                        missNomDossier.textContent = 'Format incorrect';
                        missNomDossier.style.color = 'orange';
                    }
                    else{ 
                    }

                //Si le champ est vide
                if (email.validity.valueMissing){
                    event.preventDefault();
                    missEmail.textContent = 'Email manquant';
                    missEmail.style.color = 'red';
                }
                //Si le format de données est incorrect
                else if (emailValid.test(email.value) == false){
                    event.preventDefault();
                    missEmail.textContent = 'Format incorrect';
                    missEmail.style.color = 'orange';
                }
                else{ 
                }

                // if (objet.validity.valueMissing){
                //     event.preventDefault();
                //     missObjet.textContent = 'Objet manquant';
                //     missObjet.style.color = 'red';
                // }
               

                if (message.validity.valueMissing){
                    event.preventDefault();
                    missMessage.textContent = 'Message manquant';
                    missMessage.style.color = 'red';
                }
                
            }