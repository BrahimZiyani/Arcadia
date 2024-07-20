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
    // Fetch slides data from the JSON file or an API
    setSlides(slidesData);
  }, []);

  return (
    <Swiper
      spaceBetween={50}
      slidesPerView={1}
      pagination={{ clickable: true }}
      navigation
      autoplay={{ delay: 3000 }} // Configuration de l'autoplay, delay en millisecondes
      modules={[Pagination, Navigation, Autoplay]}
      className="mySwiper"
    >
      {slides.map(slide => (
        <SwiperSlide key={slide.id}>
          <img src={slide.imageUrl} alt={slide.title} style={{ width: '100%', height: 'auto' }} />
        </SwiperSlide>
      ))}
    </Swiper>
  );
};

export default ImageSlider;
