// Sketch.create({
// 	container: document.getElementById('canvas'),
// 	autoclear: false,
// 	touchmove: function() {

// 		for ( var i = this.touches.length - 1, touch; i >= 0; i-- ) {

// 			touch = this.touches[i];

// 			this.lineCap = 'round';
// 			this.lineJoin = 'round';
// 			this.fillStyle = this.strokeStyle = '#303030';
// 			this.lineWidth = 28;

// 			this.beginPath();
// 			this.moveTo( touch.ox, touch.oy);
// 			this.lineTo( touch.x, touch.y );
// 			this.stroke();
// 		}
// 	},

// });