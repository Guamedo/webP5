let canvas;

function setup(){
    canvas = createCanvas(windowWidth, windowHeight);
    canvas.position(0, 0);
    canvas.style('z-index', '-1');
}

function draw(){
    if(mouseIsPressed){
        document.getElementsByTagName("body")[0].classList.add("unselectable");
        let col = color(round(random(0, 255)), round(random(0, 255)), round(random(0, 255)));

        stroke(red(col), green(col), blue(col));
        strokeWeight(4);
        line(pmouseX, pmouseY, mouseX, mouseY);
    }else{
        document.getElementsByTagName("body")[0].classList.remove("unselectable");
        clear();
    }
}

function windowResized(){
    resizeCanvas(windowWidth, windowHeight);
}