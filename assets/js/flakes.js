// Based mainly on https://github.com/Reynau/space/ by @reynau
// Edited by @casassg
// It looks good mate!


$(function () {
  var renderer = PIXI.autoDetectRenderer(1920, 1080, { antialias: true, transparent: true });
  renderer.view.style.width = "100%";
  renderer.view.style.height = "100%";
  document.body.insertBefore(renderer.view, document.body.childNodes[0]);

  var stage = new PIXI.Container();
  var startTime = null;
  var angle = 0;
  // Init sprites
  var circle = createCircleSprite();

  // Constants
  var numFlakes = 300;

  // Init flakes
  var flakes = [];
  for (var i = 0; i < numFlakes; i++) {
    var f = createFlake();
    flakes.push(f);
    stage.addChild(f);
  }
  renderer.render(stage);


  function update(dt) {
    angle += 0.6 * dt;

    var W = renderer.view.width;
    var H = renderer.view.height;
    var sinInc = Math.sin(angle) * 50 * dt / 2;

    for (var i = 0; i < numFlakes; i++) {
      var flake = flakes[i];

      if (flake != undefined) {
        flake.y += (Math.cos(angle + flake.weight) + 1 + flake.width / 25) * 22 * dt;
        flake.x += sinInc;

        // Sending flakes back from the top when it exits
        // Lets make it a bit more organic and let flakes enter from the left and right also.
        if (flake.x > W + 5 || flake.x < -5 || flake.y > H) {
          if (i % 20 > 1) /* 90% of the flakes */ {
            flakes[i].x = Math.random() * W;
            flakes[i].y = - 5;
          } else {
            // If the flake is exitting from the right
            if (Math.sin(angle) > 0) {
              flakes[i].x = -5;
              flakes[i].y = Math.random() * H;
            } else {
              flakes[i].x = W + 5;
              flakes[i].y = Math.random() * H;
            }
          }
        }
      }
    }
  }


  function mainLoop(timestamp) {

    requestAnimationFrame(function (ts) { mainLoop(ts) });

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
    var scale = (Math.random() * 1.5) + 0.8;
    f.position.x = Math.random() * renderer.width;
    f.position.y = Math.random() * renderer.height;
    f.alpha = Math.random();
    f.weight = Math.random() * 20;
    f.scale.x = scale;
    f.scale.y = scale;
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

  requestAnimationFrame(function (ts) { mainLoop(ts) });


})