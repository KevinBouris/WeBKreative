import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    click() {
        this.element.classList.toggle('open');
        
        let navList = document.getElementById('nav_list');
        navList.classList.toggle('slide');
    }

}
