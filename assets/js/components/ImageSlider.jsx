// assets/js/components/ImageSlider.jsx

import React, { useState, useEffect } from 'react';
import { Swiper, SwiperSlide } from 'swiper/react';
import '../../styles/slider.css';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';
import 'swiper/css';
import slidesData from '../../../public/images/slides/slides.json';

const ImageSlider = () => {
  const [slides, setSlides] = useState([]);

  useEffect(() => {
    // Débogage : vérifie si les données de slidesData sont correctement chargées
    console.log("Chargement des données pour le slider...");
    console.log("Données des slides (JSON):", slidesData);

    // Met à jour l'état des slides
    setSlides(slidesData);
  }, []);

  console.log("Slides actuels dans le composant:", slides); // Affiche les slides après le chargement

  return (
    <Swiper
      onInit={() => console.log("Swiper initialisé !")}
      onSlideChange={() => console.log("Slide changé !")}
      onReachEnd={() => console.log("Dernière slide atteinte !")}
      spaceBetween={50}
      slidesPerView={1}
      pagination={{ clickable: true }}
      navigation
      autoplay={{ delay: 3000 }} // Configuration de l'autoplay, delay en millisecondes
      modules={[Pagination, Navigation, Autoplay]}
      className="mySwiper"
    >
      {slides.map((slide, index) => {
        console.log(`Slide ${index + 1}:`, slide); // Débogage pour chaque slide
        return (
          <SwiperSlide key={slide.id}>
            <img src={slide.imageUrl} alt={slide.title} style={{ width: '100%', height: 'auto' }} />
          </SwiperSlide>
        );
      })}
    </Swiper>
  );
};

export default ImageSlider;
