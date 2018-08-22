
<html>
<script>
    function draw() {
        var canvas = document.getElementById('canvas');
        var ctx = canvas.getContext('2d');

        for(i=0; i<5; i++) {
            // Draw slice
            ctx.drawImage(document.getElementById('source'),
                33-33, 71, 104, 124, 21+190*i, (20+50)*i, 87, 104);
            ctx.beginPath();
            ctx.moveTo(125*i,125);
            ctx.lineTo(195*i,125);
            ctx.closePath();
            ctx.stroke();
            // Draw frame
            ctx.drawImage(document.getElementById('frame'), 0+i*190, 0+50*i);
        }
    }
</script>
<body onload="draw();">
<canvas id="canvas" width="1000" height="1000"></canvas>
<div style="display:none;">
    <img id="source" src="imagens/foto_perfil.png" width="300" height="227">
    <img id="frame" src="https://mdn.mozillademos.org/files/242/Canvas_picture_frame.png" width="132" height="150">
</div>
<br>
<div style="display:none;">
    <img id="source" src="https://mdn.mozillademos.org/files/5397/rhino.jpg" width="300" height="227">
    <img id="frame" src="https://mdn.mozillademos.org/files/242/Canvas_picture_frame.png" width="132" height="150">
</div>
</body>
</html>