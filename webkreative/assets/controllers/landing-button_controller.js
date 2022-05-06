import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    connect() {
        let width = window.innerWidth;

        if (width >= 740) {
            this.element.setAttribute('width', 400)
        }
    }
}
