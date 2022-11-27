// Name any p5.js functions in 'global'.
/* global
 *    HSB, background, color, colorMode, createCanvas, ellipse, fill, height,
 *    noStroke, random, strokeWeight, text, textSize, width, hue, lightness, stroke, line, detail&, position, createSlider, style, rotateY, ellipsoid
 */



// function setup() {
//   createCanvas(w,h);
//   colorMode(HSB, 360, 100, 100);

// }

// function draw() {
//   background(0, 80, 95);

// }

// slide to see how detailY works
let detailY;
function setup() {
  createCanvas(10, 10, WEBGL);
  detailY = createSlider(2, 24, 6);
  detailY.position(10, height + 5);
  detailY.style('width', '80px');
  describe(
    'a rotating white ellipsoid with limited Y detail, with a slider that adjusts detailY'
  );
}

function draw() {
  background(205, 105, 9);
  rotateY(millis() / 1000);
  ellipsoid(30, 40, 40, 12, detailY.value());
}