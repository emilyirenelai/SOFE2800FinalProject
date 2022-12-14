// p5.js functions named in `global`
/* global
 *    HSB, background, color, colorMode, createCanvas, ellipse, fill, height,
 *    noStroke, random, strokeWeight, text, textSize, width, hue, lightness, stroke, line
 */

let drops;
let traces;
var canvas;
const NUM_DROPS = 50;

function setup() {
  canvas = createCanvas(width*25, height*4.2);
  canvas.position(0,0);
  colorMode(HSB, 360, 100, 100);
  canvas.style('z-index', '-1');

  //Initialize empty array.
  drops = []; 
  for (let i = 0; i < NUM_DROPS; i++) {
    drops.push({
      x: random(width),
      y: 0,
      d: random(5, 15),
      velocity: random(8, 20), 
      hue: random(45),
      lightness: random(16,30)
    });
  }
  traces = [];
  for (let i = 0; i < NUM_DROPS; i++) {
    traces.push({ x: 0, d: 0, hue: 0 });
  }
}

function draw() {
  background(53, 16, 100);

  for (let i = 0; i < drops.length; i++) {
    // Code for droplet 1
    // Move droplet 1
    drops[i].y += drops[i].velocity;
    //drops[i].d -= 0.3;
    if (drops[i].d > 0.1) {
      drops[i].d *= 0.96; // make it get smaller every time, by multiplying diameter by 0.95 every time
    }
    // If it goes off the screen...
    if (drops[i].y > height) {
      //Set traces
      traces[i].x = drops[i].x;
      traces[i].d = drops[i].d;
      traces[i].hue = drops[i].hue;

      // ...reset it...
      drops[i].y = 0;
      // ...and move it somewhere random.
      drops[i].x = random(width);
      drops[i].velocity = random(8, 20);
      drops[i].d = random(5, 15);
    }

    // Display droplet 1
    noStroke();
    fill(drops[i].hue, 60, 80);
    //fill(60, 80, 80);
    ellipse(drops[i].x, drops[i].y, drops[i].d);
  }
  for (let i = 0; i < traces.length; i++) {
    if (traces[i].d > 0) {
      stroke(traces[i].hue, 80, 80);
      strokeWeight(4);
      line(
        traces[i].x - traces[i].d / 2,
        height,
        traces[i].x + traces[i].d,
        height
      );
    }
  }
}
