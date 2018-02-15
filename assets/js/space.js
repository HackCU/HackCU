// Based mainly on https://codepen.io/Amaj/pen/azXvXY?q=space%20animation&order=popularity&depth=everything&show_forks=false
// Coded by Gerard Casas - @casassg for HackCU 2018

var renderer = null;
$(function () {

    renderer = PIXI.autoDetectRenderer(800, 400, {transparent: true});

    document.body.insertBefore(renderer.view, document.body.childNodes[0]);

    var stage = new PIXI.Container();
    var startTime = null;
    // Init sprites
    var circle = createCircleSprite();

    var logo_animation = $('#logo-animation');
    var center_x = logo_animation.offset().left + (logo_animation.width() / 2) - 10;
    var center_y = logo_animation.offset().top + (logo_animation.height() / 2) - 8;
    var max_radius = 0;

    var numMoons = 500;


    // circle radius
    var circleRadius = 0;


    function update(dt) {


        for (var i = 0; i < numMoons; i++) {
            var moon = moons[i];
            var inc_angle = 2 * dt / 30.0;

            if (moon != undefined) {
                // 70% of moons move around, the rest stay where they are
                if (i % 10 > 2) {
                    moon.angle += (moon.weight * dt / 30.0) - inc_angle;
                    moon.radius = Math.max(moon.radius - (moon.weight / 15.0), circleRadius);
                }
                moon.y = (Math.sin(moon.angle) * moon.radius) + center_y;
                moon.x = (Math.cos(moon.angle) * moon.radius) + center_x;

                // if moon get to the circle, restart some of them
                if (moon.radius === circleRadius) {
                    if (i % 2 > 0) /* 50% possibility of restart */ {
                        if (Math.random() < 0.005) {
                            moon.radius += max_radius;
                        }
                    }
                    //    If moon inside the circle, move away!
                } else if (moon.radius < circleRadius) {
                    moon.radius += circleRadius;
                    moon.y = (Math.sin(moon.angle) * moon.radius) + center_y;
                    moon.x = (Math.cos(moon.angle) * moon.radius) + center_x;
                }
            }
        }
    }


    function mainLoop(timestamp) {

        requestAnimationFrame(mainLoop);

        if (startTime == null) startTime = timestamp;
        var dt = (timestamp - startTime) / 700;
        // If user has been away then dt increases to over 3 in most cases. In that case we want to avoid dt so high as
        // and stop background animation
        if (dt > 3) {
            dt = 0;
        }
        startTime = timestamp;
        update(dt);
        renderer.render(stage);
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


// Element constructors

    function createMoon() {
        var moon = new PIXI.Sprite(circle);
        max_radius = Math.sqrt(Math.pow(document.body.clientWidth, 2) + Math.pow(window.innerHeight, 2));
        var angle = Math.random() * 2 * Math.PI;
        var rad = Math.max(Math.random() * max_radius, circleRadius);
        moon.radius = rad;
        moon.angle = angle;
        moon.x = Math.cos(angle) * rad + center_x;
        moon.y = Math.sin(angle) * rad + center_y;
        moon.alpha = 0.7;
        var scale = Math.random() + 0.2;
        moon.weight = scale * 4;
        moon.scale.x = scale;
        moon.scale.y = scale;
        return moon;
    }

    // Resize renderer and recalculate variable
    function resize() {
        renderer.resize(document.body.clientWidth, window.innerHeight + $('#about').height() * 2);
        center_x = logo_animation.offset().left + (logo_animation.width() / 2) - 10;
        center_y = logo_animation.offset().top + (logo_animation.height() / 2) - 8;
        circleRadius = Math.floor(logo_animation.width() / 2);
        max_radius = Math.sqrt(Math.pow(document.body.clientWidth, 2) + Math.pow(window.innerHeight, 2));

    }

    window.addEventListener('resize', resize, false);

    resize();
    // Init moons
    var moons = [];
    for (var i = 0; i < numMoons; i++) {
        var f = createMoon();
        moons.push(f);
        stage.addChild(f);
    }
    // THE GAME IS ON!
    renderer.render(stage);
    requestAnimationFrame(mainLoop);


});
