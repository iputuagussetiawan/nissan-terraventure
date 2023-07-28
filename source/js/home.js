import {Offcanvas,Modal} from 'bootstrap';
import CustomSwiper from './modules/CustomSwiper'
import CustomModal from './modules/CustomModal'
const customSwiper=new CustomSwiper();

document.addEventListener("DOMContentLoaded", () => {
    customSwiper.bannerSwiper();
});

