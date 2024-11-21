import React from 'react';
import ReactDOM from 'react-dom/client';
import Swal from 'sweetalert2'; // Import SweetAlert2
import '../styles/app.css';
import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/navigation';
import ImageSlider from './components/ImageSlider';

const App = () => {
  return (
    <div>
      <ImageSlider />
      {/* Retirer le bouton Supprimer de la structure générale */}
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
