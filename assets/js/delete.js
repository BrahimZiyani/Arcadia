import Swal from 'sweetalert2';
console.log('delete.js : chargé et exécuté.');


// Vérification de l'exécution initiale
console.log('delete.js est bien exécuté.');

// Initialisation des boutons "Supprimer"
const initDeleteButtons = () => {
    console.log('Initialisation des boutons de suppression.');

    // Sélection de tous les boutons avec la classe "delete-button"
    const deleteButtons = document.querySelectorAll('.delete-button');
    console.log(`Nombre de boutons détectés : ${deleteButtons.length}`);

    // Attachement des événements "click" à chaque bouton détecté
    deleteButtons.forEach((button) => {
        console.log('Bouton détecté :', button);

        button.addEventListener('click', () => {
            // Récupération des attributs "data-url" et "data-token"
            const url = button.dataset.url;
            const token = button.dataset.token;

            console.log('URL :', url);
            console.log('Token CSRF :', token);

            // Affichage de la fenêtre de confirmation avec SweetAlert2
            Swal.fire({
                title: 'Êtes-vous sûr ?',
                text: 'Cette action est irréversible.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Oui, supprimer',
                cancelButtonText: 'Annuler',
            }).then((result) => {
                if (result.isConfirmed) {
                    console.log('Confirmation de suppression.');

                    // Envoi de la requête POST au serveur
                    fetch(url, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': token,
                        },
                    })
                        .then((response) => {
                            if (response.ok) {
                                console.log('Requête réussie, rechargement de la page.');
                                Swal.fire('Supprimé !', 'L\'élément a été supprimé.', 'success')
                                    .then(() => location.reload());
                            } else {
                                console.error('Erreur dans la réponse du serveur.');
                                Swal.fire('Erreur', 'La suppression a échoué.', 'error');
                            }
                        })
                        .catch((error) => {
                            console.error('Erreur lors de la requête :', error);
                            Swal.fire('Erreur', 'Une erreur est survenue.', 'error');
                        });
                } else {
                    console.log('Suppression annulée.');
                }
            });
        });
    });
};

// Attachement de l'initialisation à l'événement "DOMContentLoaded"
document.addEventListener('DOMContentLoaded', initDeleteButtons);