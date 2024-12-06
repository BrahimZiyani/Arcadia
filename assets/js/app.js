// Import des scripts globaux nécessaires
import './delete.js';

// Import des styles tiers (Swiper en premier pour le slider)
import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/navigation';

// Import des styles globaux personnalisés
import '../styles/app.css';
import '../styles/slider.css'; // Ensure these files exist in the ../styles/ directory

// Import du composant React ImageSlider
import React from 'react';
import ReactDOM from 'react-dom/client';
import ImageSlider from './components/ImageSlider';

// Vérification du chargement
console.log('Chargement des scripts principaux.');

// Définition du composant principal avec le slider
const App = () => {
  return (
    <div>
      <ImageSlider />
    </div>
  );
};

// Montage du composant React dans la div avec l'ID `react-root`
const container = document.getElementById('react-root');
if (container) {
  console.log('Conteneur React trouvé.');
  const root = ReactDOM.createRoot(container);
  root.render(<App />);
} else {
  console.error('Conteneur React introuvable dans le DOM.');
}
