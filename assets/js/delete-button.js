document.addEventListener('DOMContentLoaded', () => {
    const deleteButtons = document.querySelectorAll('.delete-button');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function () {
            const url = this.dataset.url; // Récupère l'URL
            const token = this.dataset.token; // Récupère le token CSRF

            Swal.fire({
                title: 'Êtes-vous sûr ?',
                text: "Cette action est irréversible.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Oui, supprimer',
                cancelButtonText: 'Annuler',
            }).then((result) => {
                if (result.isConfirmed) {
                    // Envoie la requête POST pour supprimer
                    fetch(url, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-Token': token
                        }
                    }).then(response => {
                        if (response.ok) {
                            Swal.fire('Supprimé !', 'L\'élément a été supprimé.', 'success')
                                .then(() => window.location.reload());
                        } else {
                            Swal.fire('Erreur', 'Impossible de supprimer l\'élément.', 'error');
                        }
                    }).catch(() => {
                        Swal.fire('Erreur', 'Une erreur est survenue.', 'error');
                    });
                }
            });
        });
    });
});
