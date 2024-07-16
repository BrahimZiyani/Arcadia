// assets/js/app.js
import React from 'react';
import '../styles/app.css';
import { createRoot } from 'react-dom/client'; // Importation de createRoot depuis react-dom/client
import HelloWorld from './HelloWorld';

// Assurez-vous que l'élément avec l'ID 'react-root' existe dans votre HTML
const container = document.getElementById('react-root');
const root = createRoot(container); // Créez la racine

root.render(
    <HelloWorld name="Arcadia Zoo" />
);
