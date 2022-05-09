import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    click() {
        this.element.classList.toggle('open');
        
        let navList = document.getElementById('nav_list');
        navList.classList.toggle('slide');

        let caroussel = document.getElementsByClassName('caroussel');
        if (this.element.classList[1] == 'open') {
            caroussel[0].style.visibility = 'hidden';
        } else {
            caroussel[0].style.visibility = 'visible';
        }
    }

}
