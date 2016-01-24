/**
 * JS file for single use template, "engineering"
 */
function doTheBlockyWocky()
{
	var requestAnimationFrame = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame || window.mozRequestAnimationFrame;
	var blockywocky = document.getElementById( 'buildingblocks' );
	var w = blockywocky.offsetWidth;
	var h = blockywocky.offsetHeight;
	blockywocky.innerHTML = '<canvas id="blockywockycanvas" width="'+w+'" height="'+h+'"></canvas>';
	var canvas = document.getElementById( 'blockywockycanvas' );
	var c = canvas.getContext('2d');
	c.fillStyle = 'rgba( 255, 255, 255, 1 )';
	c.fillRect(0,0,w,h);
	var x = 0;
	var y = 0;
	var blocks = [];
	var block_size = 50;
	var timer = 0;

	function setupBlocks()
	{
		for(y = 0; y <= h; y = y + block_size)
		{
			for(x = 0; x <= w; x = x + block_size)
			{
				blocks[blocks.length] = { 'x': x, 'y': y };
			}
		}
		drawBlocks();
	}

	function countBlocks()
	{
		
		if( timer >= 150 )
		{
			drawBlocks();
			timer = 0;
		}
		else
		{
			timer++;
		}
		
	}

	function drawBlocks()
	{
		for ( i = 0; i < blocks.length; i++ )
		{
			clr = Math.floor((Math.random() * 238) + 1);
			c.fillStyle = 'rgba(' + clr + ', ' + clr + ', ' + clr + ', 1)';
			c.fillRect(blocks[i].x,blocks[i].y,block_size,block_size);
		}
	}

	function main()
	{
		countBlocks();
		requestAnimationFrame(main);
	}

	setupBlocks();
	main();

}

jQuery( document ).ready( function( $ ){

	doTheBlockyWocky();

	var rtime;
	var timeout = false;
	var delta = 200;
	$(window).resize(function() {
	    rtime = new Date();
	    if (timeout === false) {
	        timeout = true;
	        setTimeout(resizeend, delta);
	    }
	});

	function resizeend() {
	    if (new Date() - rtime < delta) {
	        setTimeout(resizeend, delta);
	    } else {
	        timeout = false;
	        doTheBlockyWocky();
	    }               
	}

});
