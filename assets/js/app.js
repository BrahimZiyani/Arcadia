// assets/js/app.js
import React from 'react';
import ReactDOM from 'react-dom';
import '../styles/app.css';
import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/navigation';
import ImageSlider from './components/ImageSlider';

const App = () => {
  return (
    <div>
      <ImageSlider />
    </div>
  );
};

const root = ReactDOM.createRoot(document.getElementById('react-root'));
root.render(<App />);
