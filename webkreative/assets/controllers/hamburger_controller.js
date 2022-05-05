import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    click() {
        this.element.classList.toggle('open')
    }
}
