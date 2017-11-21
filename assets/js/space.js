// Based mainly on https://codepen.io/Amaj/pen/azXvXY?q=space%20animation&order=popularity&depth=everything&show_forks=false
// Edited by @casassg


$(function () {
    var renderer = PIXI.autoDetectRenderer(800, 600, {antialias: true, transparent: true});
    renderer.view.style.width = "100%";
    renderer.view.style.height = "100%";
    document.body.insertBefore(renderer.view, document.body.childNodes[0]);

    var stage = new PIXI.Container();
    var startTime = null;
    // Init sprites
    var circle = createCircleSprite();

    var logo_animation = $('#logo-animation');
    var center_x = logo_animation.offset().left + (logo_animation.width() / 2) - 10;
    var center_y = logo_animation.offset().top + (logo_animation.height() / 2) - 8;


    // Constants
    var numFlakes = 1000;

    // circle radius
    var circleRadius = logo_animation.width() / 2;

    // Init flakes
    var flakes = [];
    for (var i = 0; i < numFlakes; i++) {
        var f = createFlake();
        flakes.push(f);
        stage.addChild(f);
    }
    renderer.render(stage);


    function update(dt) {

        var W = renderer.view.width;
        var H = renderer.view.height;

        for (var i = 0; i < numFlakes; i++) {
            var flake = flakes[i];

            if (flake != undefined) {
                if (i % 5 > 1) {
                    flake.angle += ((2 - flake.weight) / 20.0) * dt;
                    flake.radius = Math.max(flake.radius - (flake.weight / 15), circleRadius);
                }
                flake.y = Math.cos(flake.angle) * flake.radius + center_y;
                flake.x = Math.sin(flake.angle) * flake.radius + center_x;

                // Sending flakes back from the top when it exits
                // Lets make it a bit more organic and let flakes enter from the left and right also.
                if (flake.radius === circleRadius) {
                    if (i % 5 > 2) {
                        if (Math.random() < 0.005) /* 10% possibility of restart */ {
                            flake.radius += Math.max(W / 2, H / 2);
                        }
                    }
                } else if (flake.radius < circleRadius) {
                    flake.radius += Math.max(W / 2, H / 2);
                }
            }
        }
    }


    function mainLoop(timestamp) {

        requestAnimationFrame(function (ts) {
            mainLoop(ts)
        });

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
        graphics.drawCircle(8, 8, 2);
        graphics.endFill();
        circle.render(graphics);
        return circle;
    }


    function restartFlake(f) {
        var W = renderer.width;
        var H = renderer.height;

        var max_rad = Math.sqrt(Math.pow(W, 2) + Math.pow(H, 2));
        var angle = Math.random() * 2 * Math.PI;
        var rad = Math.random() * (max_rad - circleRadius) + circleRadius;
        f.radius = rad;
        f.angle = angle;
        f.position.x = Math.cos(angle) * rad + center_x;
        f.position.y = Math.sin(angle) * rad + center_y;
        f.alpha = 0.7;
        var scale = Math.random() + 0.2;
        f.weight = scale * 4;
        f.scale.x = scale;
        f.scale.y = scale;
        return f;
    }

// Element constructors
    function createFlake() {
        var f = new PIXI.Sprite(circle);
        return restartFlake(f)
    }

    function resize() {
        renderer.resize(window.innerWidth, window.innerHeight);
        center_x = logo_animation.offset().left + (logo_animation.width() / 2) - 10;
        center_y = logo_animation.offset().top + (logo_animation.height() / 2) - 8;
        circleRadius = logo_animation.width() / 2;
    }

    window.addEventListener('resize', resize, false);
    resize();

    requestAnimationFrame(function (ts) {
        mainLoop(ts)
    });


})