// Based mainly on https://github.com/Reynau/space/ by @reynau
// Edited by @casassg
// It looks good mate!


$(function () {
  var renderer = PIXI.autoDetectRenderer(1920, 1080, { transparent: true });
  document.body.insertBefore(renderer.view, document.body.childNodes[0]);

  var stage = new PIXI.Container();
  var startTime = null;
  var angle = 0;

  // Init sprites
  var circle = createCircleSprite();

  // Constants
  var numFlakes = 300;


  function update(dt) {
    angle += 0.6 * dt;

    var W = renderer.view.width;
    var H = renderer.view.height;
    var sinInc = Math.sin(angle) * 50 * dt / 2;

    for (var i = 0; i < numFlakes; i++) {
      var flake = flakes[i];

      flake.y += (Math.cos(angle + flake.weight) + 1 + flake.width / 25) * 22 * dt;
      flake.x +=  Math.sin(angle) * 50 * dt / 2;

      // Sending flakes back from the top when it exits
      // Lets make it a bit more organic and let flakes enter from the left and right also.
      if (flake.x > W + 5 || flake.x < -5 || flake.y > H) {
        if (i % 20 > 1) /* 90% of the flakes */ {
          flake.x = Math.random() * W;
          flake.y = - 5;
        } else {
          // If the flake is exitting from the right
          if (Math.sin(angle) > 0) {
            flake.x = -5;
            flake.y = Math.random() * H;
          } else {
            flake.x = W + 5;
            flake.y = Math.random() * H;
          }
        }

      }
    }
  }


  function mainLoop(timestamp) {

    requestAnimationFrame(mainLoop);

    if (startTime == null) startTime = timestamp;
    var dt = (timestamp - startTime) / 700;
    // If user has been away then dt increases to over 3 in most cases. In that case we want to avoid dt so high as all the flakes will 
    // be restarted from the top
    if (dt > 3) {
      dt = 0;
    }
    startTime = timestamp;
    renderer.render(stage);
    update(dt);
  }

  // Sprite constructors
  function createCircleSprite() {
    var circle = new PIXI.RenderTexture(renderer, 16, 16);
    var graphics = new PIXI.Graphics();
    graphics.beginFill(0xFFFFFF);
    graphics.drawCircle(8, 8, 1);
    graphics.endFill();
    circle.render(graphics);
    return circle;
  }

  // Element constructors
  function createFlake() {
    var f = new PIXI.Sprite(circle);
    var scale = (Math.random() * 0.7) + 0.3;
    f.position.x = Math.random() * renderer.view.width;
    f.position.y = Math.random() * renderer.view.height;
    f.alpha = 0.9;
    f.weight = Math.random() * 20;
    f.scale.x = scale*2;
    f.scale.y = scale*2;
    return f;
  }

  function resize() {
    renderer.resize(window.innerWidth, window.innerHeight);
    var parent = $('#parent');
    var background = $('#background');
    background.height(parent.height());

  }

  window.addEventListener('resize', resize, false)
  resize()

  // Init flakes
  var flakes = [];
  for (var i = 0; i < numFlakes; i++) {
    var f = createFlake();
    flakes.push(f);
    stage.addChild(f);
  }
  renderer.render(stage);
  requestAnimationFrame(mainLoop);


})