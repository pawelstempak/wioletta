import './bootstrap';

import { Dropdown, Carousel, Stepper, Collapse, Modal, Ripple, Input, initTE } from "tw-elements";
initTE({ Dropdown, Carousel, Stepper, Collapse, Modal, Ripple, Input });

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
import intersect from '@alpinejs/intersect'
window.Alpine = Alpine;

Alpine.plugin(focus, intersect);

Alpine.start();


