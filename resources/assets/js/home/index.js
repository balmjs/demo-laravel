import { DEBUG } from '../config/global';
import '../components/navigation';

if (DEBUG) {
  console.log('home');
}

function sayHello() {
  console.log('Hello World');
}

sayHello();
