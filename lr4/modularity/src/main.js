import { Timer } from "./timer.js";

const timer1 = new Timer(5);
timer1.start.then( x=>document.title=x );