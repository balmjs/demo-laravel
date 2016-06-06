import {
  DEBUG
} from '../config/global';
import '../components/navigation';
// import $ from 'jquery';

if (DEBUG) {
  console.log('about');
}

function showWidth() {
  let width = $(window).width();
  console.log(width);
}

showWidth();

$(window).on('resize', () => {
  showWidth();
});
