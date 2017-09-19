function start(img) {
    console.log(img);
    var canvas = document.getElementById("miCanvas");
    if (canvas && canvas.getContext) {
        var ctx = canvas.getContext("2d");
        if (ctx) {
            /*ctx.lineWidth = 2;
            ctx.strokeStyle = "black";
            ctx.fillStyle = "red";*/

            var png = new Image();

            png.src = img;

            png.onload = function () {
                var patron = ctx.createPattern(png,"repeat");
                ctx.fillStyle = patron;
                ctx.fillRect(0,0,canvas.Width,canvas.height);
                // ctx.strokeRect(350,50,100,100);
            };



            // ctx.fillStyle = "rgba(19,52,149,1)";

            // ctx.fillRect(350,50,100,50);
            // ctx.strokeRect(350,50,100,50);

        } else {
            alert("NO cuentas con CANVAS");
        }
    }
}



//Path
/*ctx.beginPath();
ctx.moveTo(50, 100);
ctx.lineTo(100, 50);
ctx.lineTo(150, 100);
ctx.lineTo(100, 150);
ctx.stroke();

//Path
ctx.beginPath();
ctx.moveTo(200, 100);
ctx.lineTo(250, 50);
ctx.lineTo(300, 100);
ctx.lineTo(250, 150);
//			ctx.fill();
ctx.closePath();
ctx.stroke();

//Path
ctx.beginPath();
ctx.moveTo(350, 100);
ctx.lineTo(400, 50);
ctx.lineTo(450, 100);
ctx.lineTo(400, 150);
ctx.fill();
ctx.closePath();
ctx.stroke();*/