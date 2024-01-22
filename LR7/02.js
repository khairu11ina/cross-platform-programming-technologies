$(document).ready(function() {
    paper.install(window);
    paper.setup("myCanvas");
    var canvas_width = $("#myCanvas").width();
    var canvas_height = $("#myCanvas").height();
    var r = 20;
    var x = Math.floor(Math.random()*(canvas_width-r))+r;
    var y = Math.floor(Math.random()*(canvas_height-r))+r;
    var myCircle = new paper.Path.Circle(new Point(x, y), r);
    $("#draw").click(function() {
    var x = parseInt($("#x").val());
    var y = parseInt($("#y").val());
    var r = parseInt($("#r").val());
    if (x>=(0+r) && x<= (canvas_width-r) && y >=(0+r) &&
    y<=(canvas_height-r) && r >0 )
    {
    var myCircle = new paper.Path.Circle(new Point(x, y), r);
    myCircle.strokeColor = document.getElementById("stroke").value;
    myCircle.fillColor = document.getElementById("fill").value;
    myCircle.strokeWidth = document.getElementById("thickness").value;
    view.draw();
    }
    });
    $("#clean").click(function() {
    paper.project.clear();
    view.draw();
    });
    $("#generator").click(function() {
    paper.project.clear();
    for(var i=0; i<10; i++)
    {
    var x = Math.floor(Math.random()*(canvas_width-r))+r;
    var y = Math.floor(Math.random()*(canvas_height-r))+r;
    var myCircle = new paper.Path.Circle(new Point(x, y), r);
    myCircle.strokeColor = myCircle.fillColor = Color.random();
    myCircle.strokeWidth = 1;
    }
    view.draw();
    });
    })
