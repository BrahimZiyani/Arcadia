// assets/js/app.js
import React from 'react';
import ReactDOM from 'react-dom/client';
import Swal from 'sweetalert2'; // Import SweetAlert2
import '../styles/app.css';
import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/navigation';
import './delete-button'; // Import du fichier delete-button.js
import ImageSlider from './components/ImageSlider';

const App = () => {
  // Fonction pour déclencher SweetAlert2 et envoyer une requête
  const handleDelete = () => {
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
        // Simulation d'une requête POST (vous pouvez adapter à votre backend)
        fetch('/delete-endpoint', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify({ id: 123, csrf_token: 'votre_token_csrf' }),
        })
          .then((response) => {
            if (response.ok) {
              Swal.fire('Supprimé !', 'Votre élément a été supprimé.', 'success');
            } else {
              Swal.fire('Erreur !', 'Impossible de supprimer l\'élément.', 'error');
            }
          })
          .catch((error) => {
            Swal.fire('Erreur !', 'Une erreur est survenue.', 'error');
          });
      }
    });
  };

  return (
    <div>
      <ImageSlider />
      {/* Bouton pour déclencher SweetAlert2 */}
      <button onClick={handleDelete} className="btn btn-danger">
        Supprimer
      </button>
    </div>
  );
};

// Vérifie que le conteneur React existe avant de le monter
const container = document.getElementById('react-root');
if (container) {
  console.log('Conteneur React trouvé.');
  const root = ReactDOM.createRoot(container);
  root.render(<App />);
} else {
  console.error('Conteneur React introuvable dans le DOM.');
}
