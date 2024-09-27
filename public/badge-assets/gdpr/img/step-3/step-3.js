(function (lib, img, cjs, ss, an) {

var p; // shortcut to reference prototypes
lib.ssMetadata = [];


// symbols:
// helper functions:

function mc_symbol_clone() {
	var clone = this._cloneProps(new this.constructor(this.mode, this.startPosition, this.loop));
	clone.gotoAndStop(this.currentFrame);
	clone.paused = this.paused;
	clone.framerate = this.framerate;
	return clone;
}

function getMCSymbolPrototype(symbol, nominalBounds, frameBounds) {
	var prototype = cjs.extend(symbol, cjs.MovieClip);
	prototype.clone = mc_symbol_clone;
	prototype.nominalBounds = nominalBounds;
	prototype.frameBounds = frameBounds;
	return prototype;
	}


(lib.Tween32 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#DEEBF3").s().p("AhuBqQgNgKAAgYQAAgZANgZQANgYATgKICdhcQASgKANAJQANALAAAYQAAAYgNAaQgMAXgTALIidBbQgKAFgIAAQgHAAgHgEg");
	this.shape.setTransform(23.5,216.7,0.294,0.294);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#DEEBF3").s().p("AlADiQgNgJAAgZQAAgZANgYQANgZASgLIJDlLQASgLANAKQANAKAAAYQAAAZgNAYQgNAZgSAKIpDFMQgJAGgIAAQgIAAgGgFg");
	this.shape_1.setTransform(8.2,225.6,0.294,0.294);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#DEEBF3").s().p("AhuBpQgNgJAAgZQAAgZANgYQANgYATgLICdhbQATgKANAKQANAJAAAZQAAAYgNAZQgNAXgTALIidBcQgKAFgIAAQgIAAgGgFg");
	this.shape_2.setTransform(-10.9,251.3,0.294,0.294);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#DEEBF3").s().p("AicCEQgNgKAAgYQAAgZANgZQANgZATgKID5iPQATgLANAKQANAKAAAYQAAAZgNAZQgNAYgTALIj5CPQgKAGgIAAQgHAAgHgFg");
	this.shape_3.setTransform(-21.4,257.5,0.294,0.294);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#DEEBF3").s().p("AjNChQgNgKAAgZQAAgYANgZQANgZASgKIFdjJQASgLANAKQANAKAAAZQAAAYgNAZQgNAZgSAKIldDJQgJAFgIAAQgIAAgGgEg");
	this.shape_4.setTransform(-13.7,266.2,0.294,0.294);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#DEEBF3").s().p("AlADiQgNgJAAgZQAAgYANgZQANgZATgKIJBlNQATgKANAKQANAKAAAYQAAAZgNAZQgNAYgTALIpBFMQgKAFgIAAQgIAAgGgFg");
	this.shape_5.setTransform(-17.1,261.3,0.294,0.294);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#DEEBF3").s().p("AlADiQgNgJAAgZQAAgYANgZQANgZATgLIJBlMQATgKANAKQANAJAAAZQAAAYgNAZQgNAZgTALIpBFMQgKAFgIAAQgIAAgGgFg");
	this.shape_6.setTransform(-17.1,248,0.294,0.294);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#DEEBF3").s().p("AhuBqQgNgLAAgYQAAgYANgZQANgYATgKICdhcQATgLANALQANAJAAAYQAAAZgNAZQgNAXgTALIieBcQgJAFgIAAQgHAAgHgEg");
	this.shape_7.setTransform(23.6,177.9,0.294,0.294);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#DEEBF3").s().p("AhuBpQgNgJAAgZQAAgYANgZQANgYATgKICehcQASgLANAKQANAKAAAZQAAAYgNAZQgNAYgSAKIieBcQgKAFgIAAQgHAAgHgFg");
	this.shape_8.setTransform(1.8,183.6,0.294,0.294);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#DEEBF3").s().p("At5J0QgkgcAAhEQABhEAkhEQAkhFAzgdIZEubQAzgdAkAbQAkAbAABEQAABEgkBFQglBFgzAdI5EObQgaAPgXAAQgUAAgSgNg");
	this.shape_9.setTransform(-0.4,218.6,0.294,0.294);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#DEEBF3").s().p("At5J0QgkgbABhEQAAhEAkhFQAjhFA0gdIZDubQA0gdAkAbQAkAcAABEQAABEgkBEQgkBFg0AdI5DObQgbAPgXAAQgVAAgRgNg");
	this.shape_10.setTransform(-0.3,204.1,0.294,0.294);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#DEEBF3").s().p("AlADiQgNgJAAgZQAAgZANgYQANgZATgLIJClMQASgLANAKQANALAAAYQAAAYgNAZQgNAYgSALIpCFMQgKAGgIAAQgIAAgGgFg");
	this.shape_11.setTransform(8.2,186.8,0.294,0.294);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#C2DBEE").s().p("AlADiQgNgJAAgZQAAgYANgZQANgZASgLIJClMQATgKANAKQANAJAAAZQAAAYgNAZQgNAZgTALIpCFMQgJAFgIAAQgHAAgHgFg");
	this.shape_12.setTransform(17.4,174.6,0.294,0.294);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#DEEBF3").s().p("AmaKTQgyAAgjgiQgigjAAgxIABncQAAhcAuhRQAvhRBQgvILDmXQAcgPAfAAQAyAAAjAjQAiAjAAAxIgBHcQAABcguBRQgvBQhQAvIrEGXQgaAPgdAAIgDAAg");
	this.shape_13.setTransform(11.8,243.3,0.294,0.294);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#DEEBF3").s().p("AkIFAQgKgKAAgPIABkTQAAgaANgYQAOgYAXgNIG+kBQAIgFAJAAQAOAAALAKQAKALAAAOIAAETQAAAbgOAXQgOAYgYAOIm9EBQgIAEgJAAIgBAAQgOAAgKgKg");
	this.shape_14.setTransform(0.1,156.2);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#DEEBF3").s().p("AhuBqQgNgKAAgYQAAgZANgZQANgYATgKICdhcQASgKANAJQANALAAAYQAAAYgNAaQgMAXgTALIidBbQgKAFgIAAQgHAAgHgEg");
	this.shape_15.setTransform(23.5,85.4,0.294,0.294);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#DEEBF3").s().p("AlADiQgNgJAAgZQAAgZANgYQANgZASgLIJDlLQASgLANAKQANAKAAAYQAAAZgNAYQgNAZgSAKIpDFMQgJAGgIAAQgIAAgGgFg");
	this.shape_16.setTransform(8.2,94.3,0.294,0.294);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#DEEBF3").s().p("AhuBpQgNgJAAgZQAAgZANgYQANgYATgLICdhbQATgKANAKQANAJAAAZQAAAYgNAZQgNAXgTALIidBcQgKAFgIAAQgIAAgGgFg");
	this.shape_17.setTransform(-10.9,120,0.294,0.294);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#DEEBF3").s().p("AicCEQgNgKAAgYQAAgZANgZQANgZATgKID5iPQATgLANAKQANAKAAAYQAAAZgNAZQgNAYgTALIj5CPQgKAGgIAAQgHAAgHgFg");
	this.shape_18.setTransform(-21.4,126.2,0.294,0.294);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#DEEBF3").s().p("AjNChQgNgKAAgZQAAgYANgZQANgZASgKIFdjJQASgLANAKQANAKAAAZQAAAYgNAZQgNAZgSAKIldDJQgJAFgIAAQgIAAgGgEg");
	this.shape_19.setTransform(-13.7,134.9,0.294,0.294);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#DEEBF3").s().p("AlADiQgNgJAAgZQAAgYANgZQANgZATgKIJBlNQATgKANAKQANAKAAAYQAAAZgNAZQgNAYgTALIpBFMQgKAFgIAAQgIAAgGgFg");
	this.shape_20.setTransform(-17.1,130,0.294,0.294);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#DEEBF3").s().p("AlADiQgNgJAAgZQAAgYANgZQANgZATgLIJBlMQATgKANAKQANAJAAAZQAAAYgNAZQgNAZgTALIpBFMQgKAFgIAAQgIAAgGgFg");
	this.shape_21.setTransform(-17.1,116.7,0.294,0.294);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#DEEBF3").s().p("AhuBqQgNgLAAgYQAAgYANgZQANgYATgKICdhcQATgLANALQANAJAAAYQAAAZgNAZQgNAXgTALIieBcQgJAFgIAAQgHAAgHgEg");
	this.shape_22.setTransform(23.6,46.6,0.294,0.294);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#DEEBF3").s().p("AhuBpQgNgJAAgZQAAgYANgZQANgYATgKICehcQASgLANAKQANAKAAAZQAAAYgNAZQgNAYgSAKIieBcQgKAFgIAAQgHAAgHgFg");
	this.shape_23.setTransform(1.8,52.3,0.294,0.294);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("#DEEBF3").s().p("At5J0QgkgcAAhEQABhEAkhEQAkhFAzgdIZEubQAzgdAkAbQAkAbAABEQAABEgkBFQglBFgzAdI5EObQgaAPgXAAQgUAAgSgNg");
	this.shape_24.setTransform(-0.4,87.3,0.294,0.294);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#DEEBF3").s().p("At5J0QgkgbABhEQAAhEAkhFQAjhFA0gdIZDubQA0gdAkAbQAkAcAABEQAABEgkBEQgkBFg0AdI5DObQgbAPgXAAQgVAAgRgNg");
	this.shape_25.setTransform(-0.3,72.8,0.294,0.294);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f("#DEEBF3").s().p("AlADiQgNgJAAgZQAAgZANgYQANgZATgLIJClMQASgLANAKQANALAAAYQAAAYgNAZQgNAYgSALIpCFMQgKAGgIAAQgIAAgGgFg");
	this.shape_26.setTransform(8.2,55.5,0.294,0.294);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f("#C2DBEE").s().p("AlADiQgNgJAAgZQAAgYANgZQANgZASgLIJClMQATgKANAKQANAJAAAZQAAAYgNAZQgNAZgTALIpCFMQgJAFgIAAQgHAAgHgFg");
	this.shape_27.setTransform(17.4,43.3,0.294,0.294);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f("#DEEBF3").s().p("AmaKTQgyAAgjgiQgigjAAgxIABncQAAhcAuhRQAvhRBQgvILDmXQAcgPAfAAQAyAAAjAjQAiAjAAAxIgBHcQAABcguBRQgvBQhQAvIrEGXQgaAPgdAAIgDAAg");
	this.shape_28.setTransform(11.8,112,0.294,0.294);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f("#DEEBF3").s().p("AkIFAQgKgKAAgPIABkTQAAgaANgYQAOgYAXgNIG+kBQAIgFAJAAQAOAAALAKQAKALAAAOIAAETQAAAbgOAXQgOAYgYAOIm9EBQgIAEgJAAIgBAAQgOAAgKgKg");
	this.shape_29.setTransform(0.1,24.9);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f("#DEEBF3").s().p("AhuBqQgNgKAAgYQAAgZANgZQANgYATgKICdhcQASgKANAJQANALAAAYQAAAYgNAaQgMAXgTALIidBbQgKAFgIAAQgHAAgHgEg");
	this.shape_30.setTransform(23.5,-46.2,0.294,0.294);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f("#DEEBF3").s().p("AlADiQgNgJAAgZQAAgZANgYQANgZASgLIJDlLQASgLANAKQANAKAAAYQAAAZgNAYQgNAZgSAKIpDFMQgJAGgIAAQgIAAgGgFg");
	this.shape_31.setTransform(8.2,-37.3,0.294,0.294);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f("#DEEBF3").s().p("AhuBpQgNgJAAgZQAAgZANgYQANgYATgLICdhbQATgKANAKQANAJAAAZQAAAYgNAZQgNAXgTALIidBcQgKAFgIAAQgIAAgGgFg");
	this.shape_32.setTransform(-10.9,-11.6,0.294,0.294);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f("#DEEBF3").s().p("AicCEQgNgKAAgYQAAgZANgZQANgZATgKID5iPQATgLANAKQANAKAAAYQAAAZgNAZQgNAYgTALIj5CPQgKAGgIAAQgHAAgHgFg");
	this.shape_33.setTransform(-21.4,-5.4,0.294,0.294);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f("#DEEBF3").s().p("AjNChQgNgKAAgZQAAgYANgZQANgZASgKIFdjJQASgLANAKQANAKAAAZQAAAYgNAZQgNAZgSAKIldDJQgJAFgIAAQgIAAgGgEg");
	this.shape_34.setTransform(-13.7,3.3,0.294,0.294);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f("#DEEBF3").s().p("AlADiQgNgJAAgZQAAgYANgZQANgZATgKIJBlNQATgKANAKQANAKAAAYQAAAZgNAZQgNAYgTALIpBFMQgKAFgIAAQgIAAgGgFg");
	this.shape_35.setTransform(-17.1,-1.6,0.294,0.294);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f("#DEEBF3").s().p("AlADiQgNgJAAgZQAAgYANgZQANgZATgLIJBlMQATgKANAKQANAJAAAZQAAAYgNAZQgNAZgTALIpBFMQgKAFgIAAQgIAAgGgFg");
	this.shape_36.setTransform(-17.1,-14.9,0.294,0.294);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f("#DEEBF3").s().p("AhuBqQgNgLAAgYQAAgYANgZQANgYATgKICdhcQATgLANALQANAJAAAYQAAAZgNAZQgNAXgTALIieBcQgJAFgIAAQgHAAgHgEg");
	this.shape_37.setTransform(23.6,-85,0.294,0.294);

	this.shape_38 = new cjs.Shape();
	this.shape_38.graphics.f("#DEEBF3").s().p("AhuBpQgNgJAAgZQAAgYANgZQANgYATgKICehcQASgLANAKQANAKAAAZQAAAYgNAZQgNAYgSAKIieBcQgKAFgIAAQgHAAgHgFg");
	this.shape_38.setTransform(1.8,-79.3,0.294,0.294);

	this.shape_39 = new cjs.Shape();
	this.shape_39.graphics.f("#DEEBF3").s().p("At5J0QgkgcAAhEQABhEAkhEQAkhFAzgdIZEubQAzgdAkAbQAkAbAABEQAABEgkBFQglBFgzAdI5EObQgaAPgXAAQgUAAgSgNg");
	this.shape_39.setTransform(-0.4,-44.3,0.294,0.294);

	this.shape_40 = new cjs.Shape();
	this.shape_40.graphics.f("#DEEBF3").s().p("At5J0QgkgbABhEQAAhEAkhFQAjhFA0gdIZDubQA0gdAkAbQAkAcAABEQAABEgkBEQgkBFg0AdI5DObQgbAPgXAAQgVAAgRgNg");
	this.shape_40.setTransform(-0.3,-58.8,0.294,0.294);

	this.shape_41 = new cjs.Shape();
	this.shape_41.graphics.f("#DEEBF3").s().p("AlADiQgNgJAAgZQAAgZANgYQANgZATgLIJClMQASgLANAKQANALAAAYQAAAYgNAZQgNAYgSALIpCFMQgKAGgIAAQgIAAgGgFg");
	this.shape_41.setTransform(8.2,-76.1,0.294,0.294);

	this.shape_42 = new cjs.Shape();
	this.shape_42.graphics.f("#C2DBEE").s().p("AlADiQgNgJAAgZQAAgYANgZQANgZASgLIJClMQATgKANAKQANAJAAAZQAAAYgNAZQgNAZgTALIpCFMQgJAFgIAAQgHAAgHgFg");
	this.shape_42.setTransform(17.4,-88.3,0.294,0.294);

	this.shape_43 = new cjs.Shape();
	this.shape_43.graphics.f("#DEEBF3").s().p("AmaKTQgyAAgjgiQgigjAAgxIABncQAAhcAuhRQAvhRBQgvILDmXQAcgPAfAAQAyAAAjAjQAiAjAAAxIgBHcQAABcguBRQgvBQhQAvIrEGXQgaAPgdAAIgDAAg");
	this.shape_43.setTransform(11.8,-19.6,0.294,0.294);

	this.shape_44 = new cjs.Shape();
	this.shape_44.graphics.f("#DEEBF3").s().p("AkIFAQgKgKAAgPIABkTQAAgaANgYQAOgYAXgNIG+kBQAIgFAJAAQAOAAALAKQAKALAAAOIAAETQAAAbgOAXQgOAYgYAOIm9EBQgIAEgJAAIgBAAQgOAAgKgKg");
	this.shape_44.setTransform(0.1,-106.7);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_44},{t:this.shape_43},{t:this.shape_42},{t:this.shape_41},{t:this.shape_40},{t:this.shape_39},{t:this.shape_38},{t:this.shape_37},{t:this.shape_36},{t:this.shape_35},{t:this.shape_34},{t:this.shape_33},{t:this.shape_32},{t:this.shape_31},{t:this.shape_30},{t:this.shape_29},{t:this.shape_28},{t:this.shape_27},{t:this.shape_26},{t:this.shape_25},{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-27.5,-139.7,55.1,410.8);


(lib.Tween8 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#79C9FF").s().p("AgSAXQADgPAFgGQAFgEADgkIATAwQAGAPgJAHQgGAFgQACIgCAAQgKAAACgQg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-1.9,-3.9,3.9,7.8);


(lib.Tween7 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#79C9FF").s().p("AgSAXQADgPAFgGQAFgEADgkIATAwQAGAPgJAHQgGAFgQACIgCAAQgKAAACgQg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-1.9,-3.9,3.9,7.8);


(lib.Tween6 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#79C9FF").s().p("AouHjQgigjAAgxQAAgmAVgeQAWgfAjgNIAcgKQCig7BOgjQCCg6BhhGQDvisCSlKQAVgtAugRQAugRAtAUQAsAVARAtQASAtgTAsQitGEkjDSQhzBTiTBDQhZAoiuA/IgcAKQgTAHgWABQgxAAgjgjg");
	this.shape.setTransform(0,0,0.691,0.691);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-41,-35.7,82,71.5);


(lib.Tween5 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#6F4024").s().p("AAeCbQgaAAgVgNQg/gkgoiKQgLgmASgiQATgjAmgLQAmgLAhATQAjATALAmQALAnASAhQAfAYAEAoQADAngZAeQgNARgTAJQgUAJgVAAg");
	this.shape.setTransform(-53.1,10.4,0.691,0.691);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#6F4024").s().p("AAACcQgogLgZgkQgkgzgQhrQgGgnAXgfQAXggAngGQAmgHAgAYQAgAXAGAnQAFAiAMAmQAeAZACAnQADAogaAdQgcAhgrAAQgOAAgLgEg");
	this.shape_1.setTransform(-15.2,32.1,0.691,0.691);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#D8D1F1").s().p("AlFhbIAAjAIKLF4IAAC/g");
	this.shape_2.setTransform(-28.5,0.4,0.691,0.691);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#B4ACCC").s().p("AkbBEII3lHIAADAIo3FHg");
	this.shape_3.setTransform(13.7,2.1,0.691,0.691);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#ECE9F8").s().p("AphgYII4lHIKLF3Io4FIg");
	this.shape_4.setTransform(-8.9,-17.5,0.691,0.691);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#D8D1F1").s().p("AlFhbIAAjAIKLF4IAAC/g");
	this.shape_5.setTransform(-29.2,15.2,0.691,0.691);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#B4ACCC").s().p("AkbBEII3lHIAADAIo3FHg");
	this.shape_6.setTransform(12.9,16.9,0.691,0.691);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#ECE9F8").s().p("AphgYII3lHIKMF3Io3FIg");
	this.shape_7.setTransform(-9.6,-2.8,0.691,0.691);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#79C9FF").s().p("Al8GXQgZgZAAgiQAAgTAJgRQAIgRAQgMQAhgZAvgeIBag3QBjg8AwghQBQg3A3g3QCNiMAVi7QAEgiAbgUQAbgVAiADQAhAEAVAbQAVAagEAhQgNB6gyBoQgzBohZBZQhBBChdBBQg2AmhsBAQhtBCguAiQgVARgcAAQgjAAgXgXg");
	this.shape_8.setTransform(21.2,0);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-61.7,-43,123.5,86.2);


(lib.Tween4 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#CD7646").s().p("AgYAZQgLgLAAgOQAAgOALgKQAKgKAOAAQAPAAAKAKQAKAKAAAOQAAAOgKALQgKAKgPAAQgOAAgKgKg");
	this.shape.setTransform(-2.5,7.4,0.691,0.691);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#F2A161").s().p("AgqArQgRgSAAgZQAAgYARgSQATgRAXAAQAZAAASARQARASAAAYQAAAZgRASQgSARgZAAQgYAAgSgRg");
	this.shape_1.setTransform(-2.5,7.4,0.691,0.691);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#1D0264").s().p("ACHD9QgogNgrg0QgqgygqgLQgWgFgaAGQgfAHgfgEQgkgFghgNQg4gXgcgpQgZgkAIg5QAFgiAMgYQAjhSBhgtQBjguBkAVQBqAXBNBYQBKBVgKBJQgCARgJAqQgFAqAPAfQAGAOARASQALANgCAJQgDAdg6AUQghALggAAQgbAAgagIg");
	this.shape_2.setTransform(0,-2.3,0.691,0.691);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#F2A161").s().p("AgCDAIgUgBQhPgJgxg/Qgxg+AJhOQAKhPA+gxQA+gyBOAKQBPAJAxA+QAyA/gJBOQgJBJg3AxQg3AvhIAAIgCAAg");
	this.shape_3.setTransform(-0.7,1.1);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-21.7,-20.3,43.5,40.7);


(lib.Tween3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#4F2D1A").s().p("AiOBQQgVgVgBgeQAAgdAWgWIAWgRQAZgTAcgNQBZgqBbATQAdAJAOAaQAOAagIAcQgIAZgWAOQgWAPgbgEQgsgJgtAVIglAXQgTAUgeABQgdAAgVgVg");
	this.shape.setTransform(32.4,3.4,0.691,0.691);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#80779B").s().p("Ag/BFQgmgLgHgcQgIgcAbgcQAagcAugMQAsgNAlAMQAmALAHAcQAIAcgbAbQgbAcgtAMQgXAHgWAAQgTAAgRgFg");
	this.shape_1.setTransform(35,6.5,0.691,0.691);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#F142C4").s().p("AgND7QhFgqhLhdQhMhdhoipQgVghAIgnQAIgoAigWQAigWAnAJQAnAIAWAiIADAEQCrEWBYA4QAaAQAeAAQAWAABBgOIAFgCQAngIAiAVQAiAWAIAnQAJAngVAiQgWAignAJIgFABQg/AQhFADIgDAAQhTAAhEgug");
	this.shape_2.setTransform(-19.4,0,0.691,0.691);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#4F2D1A").s().p("AiiBDQgPgPAAgUQABgRAKgNQAKgNARgEIEBhBQAUgEARALQARAKAFAUQAEAUgKARQgKAQgTAFIkBBCIgNABQgUAAgOgPg");
	this.shape_3.setTransform(12.3,8.7);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-43.7,-20.4,87.6,41);


(lib.Tween2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#CD7646").s().p("AgYAZQgKgLAAgOQAAgOAKgKQALgKANAAQAPAAAKAKQAKAKAAAOQAAAOgKALQgKAKgPAAQgNAAgLgKg");
	this.shape.setTransform(-9,12.6,0.691,0.691);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#2D059C").s().p("AhyBzQgvgwAAhDQAAhCAvgwQAwgvBCAAQBDAAAwAvQAvAwAABCQAABDgvAwQgwAvhDAAQhCAAgwgvg");
	this.shape_1.setTransform(-12.1,-16.4,0.691,0.691);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#2D059C").s().p("AgNAOQgGgGAAgIQAAgIAGgFQAGgGAHAAQAJAAAFAGQAGAGAAAHQAAAIgGAGQgFAGgJAAQgHAAgGgGg");
	this.shape_2.setTransform(-8.1,16.8,0.691,0.691);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#F2A161").s().p("AgqAqQgRgRAAgZQAAgYARgSQASgRAYAAQAZAAASARQARASAAAYQAAAZgRARQgSASgZAAQgYAAgSgSg");
	this.shape_3.setTransform(-8.8,12.6,0.691,0.691);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#2D059C").s().p("AjnD1QgfgjgWg1Qg7iKAzh1QAfhIBAgxQBDgyBMgFQBAgEBGAXQBLAYA4AyQCKB6gqDOQgEATgPASQgRAUgTADQgTADgUgTQgKgKgaglQg4hMg2gQQgrgMgwAPQgsAMghAdQgtAngPBLIgJAtQgFATgKACIgCAAQgRAAgbgfg");
	this.shape_4.setTransform(1.5,2.6,0.691,0.691);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#F2A161").s().p("AgJDAQhKgEg0g1IgNgOQgyg+AIhOQAIhPA+gyQA+gzBOAJQBPAIAyA+QAyA+gIBOQgJBPg9AyQg2ArhDAAIgJAAg");
	this.shape_5.setTransform(1.9,8.5);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-23.3,-27.6,46.7,55.3);


(lib.Tween1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#79C9FF").s().p("AEIEBIgBAAQiMgBhCgKQhYgOhAgoQhCgrg0hRQg0hPg7iYQgLgZAKgaQALgZAZgLQAagLAZAKQAaAKALAaIACAEQAyCAAmBAQApBEAvAeQAsAdBIAJQAuAFB9ABQAcAAATAUQAUAUAAAcQgBAbgTAUQgUATgbAAg");
	this.shape.setTransform(-4.9,0);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#F8A260").s().p("AhTBOQgdgCgUgWQgTgXACgdQACgbAVgUQAVgTAcAAQAmABAngCQAmgCALgEQAbgNAcALQAbALANAbQAMAbgLAbQgKAbgbANIgGACQgtAShnAAQgdAAgIgBg");
	this.shape_1.setTransform(27.7,18.5,0.691,0.691);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#2D059C").s().p("ABmBSQgDAAgDgCIjMiNQgDgDgBgEQAAgFACgDQAGgIAIAFIDMCNQAEADABAEQABAFgDADQgDAFgFAAIgBAAg");
	this.shape_2.setTransform(29.2,13.2,0.691,0.691);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-38,-25.7,76.1,51.4);


(lib.Path_195 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#FFFAFD","#F7F9FE","#F4F9FF"],[0,0.741,1],-406.5,0,406.6,0).s().p("A4uduQrZicozkeQozkek0lyQlAmAAAmkQAAmjFAmAQE0lyIzkeQIzkeLZicQL0iiM6gBQM7ABLzCiQLaCcIzEeQIyEeE1FyQFAGAAAGjQAAGklAGAQk0FyozEeQozEeraCcQrzCis7ABQs6gBr0iig");
	this.shape.setTransform(406.6,206.5);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Path_195, new cjs.Rectangle(0,0,813.2,412.9), null);


(lib.Path_194 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#FEF5FB","#F7F5FC","#E8F4FE"],[0,0.451,1],-398.3,0,398.4,0).s().p("A4OdIQrLiZomkZQookYkulqQk5l5gBmbQABmbE5l3QEulrIokZQImkXLLiaQLkifMqAAQMqAALlCfQLKCaIoEXQInEZEuFrQE6F3gBGbQABGbk6F5QkuFqonEYQooEZrKCZQrlCfsqAAQsqAArkifg");
	this.shape.setTransform(398.4,202.3);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Path_194, new cjs.Rectangle(0,0,796.7,404.6), null);


(lib.Path_193 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#FDF0F9","#F6F0FA","#E2EEFE","#DDEEFF"],[0,0.349,0.878,1],-390.1,0,390.2,0).s().p("A3uciQq8iXockSQockSkolkQkzlwAAmTQAAmSEzlwQEolkIckSQIckSK8iXQLVibMZAAQMaAALVCbQK8CXIcESQIcESEoFkQEzFwAAGSQAAGTkzFwQkoFkocESQocESq8CXQrVCbsaAAQsZAArVibg");
	this.shape.setTransform(390.2,198.1);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Path_193, new cjs.Rectangle(0,0,780.4,396.3), null);


(lib.Path_192 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#FCECF8","#F5EBF9","#E2EAFC","#D1E8FE"],[0,0.278,0.71,1],-381.9,0,382,0).s().p("A3Ob7QqtiToRkMQoRkNkilcQksloAAmLQAAmJEslpQEilcIRkNQIRkMKtiTQLGiZMIAAQMJAALGCZQKtCTIREMQIRENEiFcQEsFpAAGJQAAGLksFoQkiFcoRENQoREMqtCTQrGCZsJAAQsIAArGiZg");
	this.shape.setTransform(382,194);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Path_192, new cjs.Rectangle(0,0,764,388), null);


(lib.Path_191 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#FCE7F6","#F5E6F8","#E2E5FA","#C6E2FE"],[0,0.239,0.612,1],-373.7,0,373.8,0).s().p("A2ubVQqfiQoFkHQoFkHkclUQkmlhAAmCQAAmBEmlhQEclVIFkGQIFkHKfiQQK3iVL3AAQL5AAK2CVQKfCQIFEHQIFEGEcFVQEmFhAAGBQAAGCkmFhQkcFUoFEHQoFEHqfCQQq2CVr5AAQr3AAq3iVg");
	this.shape.setTransform(373.8,189.8);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Path_191, new cjs.Rectangle(0,0,747.6,379.7), null);


(lib.Path_190 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#FCE2F4","#F4E1F6","#E1E0F9","#C1DEFD","#BBDDFE"],[0,0.212,0.529,0.929,1],-365.5,0,365.6,0).s().p("A2OauQqQiMn6kBQn6kBkVlNQkglZAAl6QAAl5EglYQEVlOH6kBQH6kAKQiOQKniSLnAAQLoAAKnCSQKQCNH6EBQH6EBEWFOQEfFYAAF5QAAF6kfFZQkWFNn6EBQn6EBqQCMQqnCTroAAQrnAAqniTg");
	this.shape.setTransform(365.6,185.7);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Path_190, new cjs.Rectangle(0,0,731.2,371.3), null);


(lib.Path_189 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#FADDF3","#F3DCF4","#E0DBF7","#BFD8FB","#B0D7FE"],[0,0.188,0.478,0.839,1],-357.4,0,357.4,0).s().p("A1uaJQqCiLnuj6Qnvj8kPlFQkZlRAAlyQAAlxEZlQQEPlGHvj7QHuj7KCiLQKYiOLWAAQLXAAKYCOQKCCLHuD7QHvD7EPFGQEZFQAAFxQAAFykZFRQkPFFnvD8QnuD6qCCLQqYCOrXAAQrWAAqYiOg");
	this.shape.setTransform(357.4,181.5);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Path_189, new cjs.Rectangle(0,0,714.8,363), null);


(lib.Path_188 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#FAD8F1","#F3D7F2","#DFD6F5","#BFD3F9","#A5D1FE"],[0,0.169,0.439,0.761,1],-349.2,0,349.2,0).s().p("A1OZiQpziHnjj1Qnjj2kKk+QkSlJAAlpQAAloESlJQEKk+Hjj2QHjj1JziHQKIiLLGAAQLHAAKICLQJzCHHjD1QHjD2EKE+QESFJAAFoQAAFpkSFJQkKE+njD2QnjD1pzCHQqICLrHAAQrGAAqIiLg");
	this.shape.setTransform(349.2,177.3);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Path_188, new cjs.Rectangle(0,0,698.4,354.7), null);


(lib.Path_187 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#FAD3EF","#F2D2F0","#DFD1F3","#BFCFF8","#9ACCFE"],[0,0.161,0.4,0.698,1],-341,0,341,0).s().p("A0uY8QpkiEnYjvQnYjwkDk3QkMlCAAlgQAAlfEMlCQEDk3HYjvQHYjwJkiEQJ6iIK0AAQK1AAJ7CIQJjCEHYDwQHYDvEDE3QEMFCAAFfQAAFgkMFCQkDE3nYDwQnYDvpjCEQp6CIq2AAQq0AAp6iIg");
	this.shape.setTransform(341,173.2);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Path_187, new cjs.Rectangle(0,0,682,346.4), null);


(lib.Path_186 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#F9CEED","#F2CDEE","#DFCCF1","#BECAF6","#93C7FC","#8FC7FD"],[0,0.149,0.369,0.651,0.969,1],-332.8,0,332.8,0).s().p("A0PYVQpViAnMjqQnNjqj8kvQkGk6AAlYQAAlXEGk6QD8kvHNjqQHMjqJViAQJriFKkAAQKlAAJqCFQJVCAHODqQHMDqD9EvQEFE6AAFXQAAFYkFE6Qj9EvnMDqQnODqpVCAQpqCFqlAAQqkAApriFg");
	this.shape.setTransform(332.8,169);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Path_186, new cjs.Rectangle(0,0,665.6,338), null);


(lib.Path_185 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#F8CAEC","#F1C9ED","#DDC8F0","#BDC5F5","#92C2FB","#83C1FD"],[0,0.141,0.349,0.612,0.898,1],-324.6,0,324.6,0).s().p("AzuXvQpHh9nBjkQnCjlj2koQj/kxAAlQQAAlOD/kyQD2koHCjkQHBjlJHh9QJbiCKTAAQKVAAJbCCQJGB9HBDlQHCDkD2EoQD/EyAAFOQAAFQj/ExQj2EonCDlQnBDkpGB9QpbCBqVAAQqTAApbiBg");
	this.shape.setTransform(324.6,164.9);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Path_185, new cjs.Rectangle(0,0,649.3,329.7), null);


(lib.Path_184 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#F8C5EA","#F0C4EB","#DCC3EE","#BCC0F3","#91BDF8","#79BBFC"],[0,0.129,0.329,0.569,0.851,1],-316.4,0,316.4,0).s().p("AzPXJQo4h6m2jfQm1jejxkgQj4krAAlHQAAlGD4kqQDxkhG1jeQG2jeI4h6QJMh/KDAAQKDAAJMB/QI4B5G2DfQG2DeDxEhQD4EqAAFGQAAFHj4ErQjxEgm2DeQm2Dfo4B6QpLB+qEAAQqDAApMh+g");
	this.shape.setTransform(316.4,160.7);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Path_184, new cjs.Rectangle(0,0,632.9,321.4), null);


(lib.Path_183 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#F7C0E8","#F0BFE9","#DCBEEC","#BCBBF1","#90B9F7","#6FB6FD"],[0,0.122,0.31,0.541,0.8,1],-308.2,0,308.2,0).s().p("AyvWiQoph3mqjZQmrjYjqkZQjykjAAk+QAAk9DykjQDqkZGrjZQGqjZIph2QI9h7JyAAQJzAAI9B7QIpB2GrDZQGqDZDqEZQDyEjAAE9QAAE+jyEjQjqEZmqDYQmrDZopB3Qo9B7pzAAQpyAAo9h7g");
	this.shape.setTransform(308.2,156.5);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Path_183, new cjs.Rectangle(0,0,616.5,313), null);


(lib.Path_182 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#F7BBE6","#F0BAE7","#DBB9EA","#BBB6EF","#90B4F5","#65B0FD"],[0,0.122,0.29,0.51,0.761,1],-300,0,300.1,0).s().p("AyPV8Qobh0mfjSQmfjTjkkSQjrkbAAk2QAAk1DrkbQDkkRGfjTQGgjTIah0QIth4JiAAQJiAAIuB4QIaB0GgDTQGfDTDkERQDrEbAAE1QAAE2jrEbQjkESmfDTQmgDSoaB0QouB4piAAQpiAAoth4g");
	this.shape.setTransform(300,152.4);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Path_182, new cjs.Rectangle(0,0,600.1,304.8), null);


(lib.Path_181 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#F6B6E4","#EEB5E5","#DAB4E8","#BAB1ED","#8EAFF3","#5DAAFC","#5BAAFC"],[0,0.11,0.278,0.49,0.729,0.988,1],-291.8,0,291.9,0).s().p("AxvVWQoLhxmVjNQmUjNjdkKQjlkUgBktQABktDlkTQDdkKGUjNQGVjNILhxQIfh0JQAAQJSAAIeB0QIMBxGUDNQGTDNDeEKQDmETAAEtQAAEtjmEUQjeEKmTDNQmUDNoMBxQoeB0pSAAQpQAAofh0g");
	this.shape.setTransform(291.9,148.2);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Path_181, new cjs.Rectangle(0,0,583.7,296.5), null);


(lib.Path_180 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#F6B1E2","#EEB0E3","#DAAFE6","#BAADEB","#8EAAF1","#5CA6FA","#52A5FC"],[0,0.11,0.271,0.471,0.698,0.949,1],-283.6,0,283.7,0).s().p("AxPUvQn9htmJjIQmIjHjXkDQjgkLAAklQAAkkDgkMQDXkCGIjIQGJjHH9htQIPhxJAAAQJBAAIPBxQH9BtGIDHQGKDIDXECQDeEMAAEkQAAEljeELQjYEDmJDHQmIDIn9BtQoPBxpBAAQpAAAoPhxg");
	this.shape.setTransform(283.7,144);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Path_180, new cjs.Rectangle(0,0,567.3,288.1), null);


(lib.Path_179 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#F5ACE0","#EEABE1","#D9AAE5","#B9A7E9","#8DA5F0","#5BA1F9","#4A9FFC"],[0,0.098,0.259,0.451,0.671,0.91,1],-275.4,0,275.5,0).s().p("AwvUJQnvhql9jCQl9jCjRj7QjZkEAAkcQAAkcDZkEQDRj7F9jBQF+jCHuhqQIAhuIvAAQIxAAH/BuQHvBqF9DCQF9DBDRD7QDZEEAAEcQAAEcjZEEQjRD7l9DCQl9DCnvBqQn/BuoxAAQovAAoAhug");
	this.shape.setTransform(275.5,139.9);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Path_179, new cjs.Rectangle(0,0,551,279.8), null);


(lib.Path_178 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#F5A8DF","#EEA7E0","#D9A6E4","#B9A3E8","#8DA1EE","#5A9CF6","#4199FB"],[0,0.098,0.251,0.431,0.639,0.871,1],-267.2,0,267.3,0).s().p("AwQTiQnfhmlyi8Qlxi8jMj0QjRj8gBkUQABkTDRj8QDMjzFxi8QFyi8HfhoQHxhqIfAAQIgAAHxBqQHfBoFyC8QFyC8DLDzQDRD8ABETQgBEUjRD8QjLD0lyC8QlyC8nfBmQnxBrogAAQofAAnxhrg");
	this.shape.setTransform(267.3,135.7);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Path_178, new cjs.Rectangle(0,0,534.5,271.4), null);


(lib.Path_177 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#F4A3DD","#ECA2DE","#D8A1E2","#B89EE6","#8B9BED","#5897F5","#3B93FB"],[0,0.09,0.239,0.412,0.62,0.839,1],-259,0,259.1,0).s().p("AvvS8QnShklmi2Qlmi2jFjsQjLj1gBkLQABkKDLj1QDFjsFmi2QFmi3HShjQHhhoIOAAQIPAAHiBoQHQBjFmC3QFnC2DFDsQDMD1AAEKQAAELjMD1QjFDslnC2QlmC2nQBkQniBnoPAAQoOAAnhhng");
	this.shape.setTransform(259.1,131.6);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Path_177, new cjs.Rectangle(0,0,518.1,263.1), null);


(lib.Path_176 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#F49EDB","#EC9DDC","#D89CE0","#B799E4","#8B97EB","#5792F2","#368EFA"],[0,0.09,0.231,0.4,0.6,0.812,1],-250.8,0,250.9,0).s().p("AvPSWQnDhhlbiwQlbiwi/jlQjFjtAAkDQAAkCDFjtQC/jkFbixQFbiwHDhhQHRhkH+AAQH+AAHSBkQHDBhFbCwQFbCxC/DkQDFDtAAECQAAEDjFDtQi/DllbCwQlbCwnDBhQnSBkn+AAQn+AAnRhkg");
	this.shape.setTransform(250.9,127.4);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Path_176, new cjs.Rectangle(0,0,501.8,254.8), null);


(lib.Sweat = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2
	this.instance = new lib.Tween8("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(-12.9,0.1);
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(21).to({_off:false},0).to({x:-12.4,y:16.2},21).to({scaleX:0.32,scaleY:0.32,y:20.6},5).wait(1));

	// Layer 1
	this.instance_1 = new lib.Tween7("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(1.9,3.9);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({y:21.6},20).to({scaleX:0.42,scaleY:0.42,y:26.9},4).to({_off:true},1).wait(23));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,3.9,7.8);


(lib.Shakyman = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2
	this.instance = new lib.Tween5("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(61.7,104.4);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({rotation:-0.8,x:62.3,y:105.1},2).to({rotation:0,x:61.7,y:104.4},2).wait(1));

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#2D059C").s().p("AgHDFQAAgFACgCQA+hNgQgsQgEgLgJgIQgFgEgPgKQgRgLgRgRQg6g/AdiQQACgEAEgDQAEgCAEABQAJADgBAJQgcCFAzA4QAPAPAPAJQARALAGAGQAMAMAGAOQAVA4hHBXQgDADgFABQgKgBAAgKg");
	this.shape.setTransform(90.1,68,0.691,0.691);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#79C9FF").s().p("AhHGdQgJgigBg4IABgxQAmgMAlgxQAlgyAXhFQA3ikg7iSQg2iDhGgxQgkgZghABQgJABgBgSQAAgSAKgBQAyAAAtAVQAtAWAfAmQBfBzAXC5QAdDph9DOQg3BdghAAQgXAAgLgsg");
	this.shape_1.setTransform(91.4,31.5,0.691,0.691);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#F08B52").s().p("ACNCsQgXAAgQgQQgQgQAAgWQAAgJADgJQgSAHgSgGQgSgFgLgQQgIAIgIADQgTAJgWgIQgVgIgJgUQgJAKgMAFQgVAIgVgJQgVgJgIgVQgQALgUgCQgWgCgOgSQgOgSACgVQACgXASgOQARgOAXACQAAgWAQgQQAQgQAWAAIADAAIABgMQAEgWATgMQATgNAWAFQAPgMAUAAQAUAAAOAMIALgFQAWgHAUAKQAUALAHAVIADAAQAWAEANASQAOASgEAWQATALAGAUQAGAVgKASIACAAQAWAEANATQANATgEAWIgBAAQAQAGAJAOQAJAOAAARQABAWgQAQQgQAQgXAAQgWgKgXAKg");
	this.shape_2.setTransform(83.6,16,0.691,0.691);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#2D059C").s().p("AgFC+QgIABgCgGQgKgSgCgVQgDgWAIgVQAEgMAMgVIAMgXQAFgMAAgMQAAgPgIgNQgFgJgOgPQgPgQgGgKQgKgSAAgSQACgyBMgwQAEgCAEABQAEABADAEQACAEgBAEQgBAFgEACQhBAogCAoQAAANAIAMQAEAIANAOQAQARAGALQALASAAAVQgCAfgTAbQgLASgDAKQgGAQACASQACAQAHAPQACAEgBAEQgBAEgDADIgGABg");
	this.shape_3.setTransform(76.3,66.9,0.691,0.691);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#3288FA").s().p("AiZHGQALgWAPhOQAPhOAMgWIBokTIhik6Iiqh4IBAAFQBFAGAYAHQCnA0BpB1QBnBygEB9QgDBlgpB5QgUA8gUAoQgSAUgZAUQhRA9hYAjQhCAbgmAAQgJAAgIgCg");
	this.shape_4.setTransform(99.8,31.5,0.691,0.691);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#6F4024").s().p("AgDEWIgcgCQhzgNhHhbQhHhaANhxQANhzBbhHQBahHByANQByAOBHBaQBHBagNByQgNBqhPBGQhPBFhpAAIgDAAg");
	this.shape_5.setTransform(85.8,24.8,0.691,0.691);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#1D0264").s().p("AiMDsQhShrgThxQgGgjAAgkIACgjQAXhkA4hFQBBhQBZgHQBRgHBBBDQA5A7AfBpQAeBigFBlQgEBpgoBAQg8BghbAGIgKAAQhgAAhWhwg");
	this.shape_6.setTransform(81.5,26.5,0.691,0.691);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#79C9FF").s().p("Ag6G0QgkgTgggeQglghgsg5Qg/hTgrhgQgehDgNg5QgRhTAOhPQAOhEAgg8QA+hyBrghQBOgXBUAYQAwANAoAZIB+EzIBEBwIBDEXQhJA+haAuQhnA1hNAAQguAAgkgTg");
	this.shape_7.setTransform(86.9,31.4,0.691,0.691);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#3288FA").s().p("AguOnQibgUh3g5QiCg/gdhRQgphyDp09QAShoB8g5QB0g1CTAPQCaAPBkBUQByBfAACdQAACageGoQgoI0g4ELQgQBPh7AeQhAAPhNAAQg7AAhDgJg");
	this.shape_8.setTransform(90.4,112.5,0.691,0.691);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#79C9FF").s().p("ABWFcIlLjVQgigWgSgjQgSgkACgoIALjmQADg+AugpQAtgqA+ADIATACIE/A5QA1AKAjApQAiApAAA3IAAGDQAAA9grAsQgsArg9AAQgsAAgkgXg");
	this.shape_9.setTransform(88.6,144.8,0.691,0.691);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(5));

	// Layer 3
	this.instance_1 = new lib.Tween6("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(46.1,89.2);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({rotation:-0.8,x:46.5,y:90.2},2).to({rotation:0,x:46.1,y:89.2},2).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,124,177.7);


(lib.Screen = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AldCBIAAp/IK7GQIglJtg");
	mask.setTransform(30.7,36.6);

	// Layer 1
	this.instance = new lib.Tween32("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(27.6,139.7,1,1,0,0,180);

	var maskedShapeInstanceList = [this.instance];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.instance).to({y:12},59).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,55.1,87.7);


(lib.PenWoman = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Pen Arm
	this.instance = new lib.Tween1("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(7.5,82.5,1,1,0,0,0,-30.5,-19);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({regX:-30.4,regY:-18.9,rotation:-9.2,x:7.7,y:82.6},4).to({regX:-30.5,regY:-19,rotation:0,x:7.5,y:82.5},4).to({regX:-30.4,rotation:-10.2,x:7.7},4).to({regX:-30.5,rotation:0,x:7.5},4).wait(45));

	// Pen head
	this.instance_1 = new lib.Tween2("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(30.9,52.4,1,1,0,0,0,0,24.8);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({startPosition:0},20).to({rotation:-10.2,x:33.2},9).to({startPosition:0},20).to({rotation:0,x:30.9},11).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,76.1,127.2);


(lib.Mousehand = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Tween3("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(4.5,5,1,1,0,0,0,-39.3,-15.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({regX:-39.2,rotation:-3.2,x:4.6},9).to({rotation:9.2},15).to({rotation:2.5},6).to({rotation:-4.5},11).to({regX:-39.3,rotation:0,x:4.5},6).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,87.6,41);


(lib.DeskMan = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2
	this.instance = new lib.Tween4("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(51.7,35.9,1,1,0,0,0,9,15.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({regX:9.1,regY:15.6,rotation:-15,x:51.8},7).to({startPosition:0},25).to({rotation:15,x:51.7,y:36},7).to({startPosition:0},26).to({regX:9,regY:15.5,rotation:0,y:35.9},6).wait(1));

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#4B0CEF").s().p("AjnIlQgjgjAAgxQAAgZAKgWQA6iFA3h3QBNimAWhSQAXhUAzk9QAIgxAogcQAogdAxAIQAwAIAdAoQAdAogIAxQg3FMgaBhQgbBfhVC5QhLCogjBPQgOAhgeATQgeAUgjAAQgxAAgjgjg");
	this.shape.setTransform(42.7,98.5,0.691,0.691);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#2D059C").s().p("Ah6CqQglgmAAg1QAAgYAJgYIBCijQAWgwAygSQAxgTAwAWQAtAVAUAuQATAtgQAvIhCCjQgOAkghAWQggAWgnABQg1gBgmglg");
	this.shape_1.setTransform(30.2,136.5,0.691,0.691);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#2D059C").s().p("AicBmQAPhTAOgXQAPgZBrhNQA1gnAzgiIBFA0QAAAHgKANQgTAagxAcQhbA1gyAmQhWBFgeBJQAEgkAHgqg");
	this.shape_2.setTransform(57,47.4,0.691,0.691);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#F142C4").s().p("AhuBFQAFgfAPgQQAXgYCIheIAsAkIjhCdQAAgNACgPg");
	this.shape_3.setTransform(56.2,40.7,0.691,0.691);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#1D0264").s().p("AhpEOIDTr3IgxGpQg8G+hBBtg");
	this.shape_4.setTransform(53.8,100.3,0.691,0.691);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#2D059C").s().p("AhWDGIhIk4QBPgEBXgsQAsgVAdgVIBOFaQgwAWg3ASQhEAXgnAAQgWAAgNgHg");
	this.shape_5.setTransform(59.9,128.3,0.691,0.691);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#4B0CED").s().p("Ak7LaQhLlAgRjyQgIkKgNi0QgLirA5iHQAzh4BehCQBZg+BeAIQBhAIA/BQQBiB8BtG4QA6DkA6EkQAQBJh5B3QgCACgcgbQgbgZAAACQAJArgFAhQgFAXgJAIQiuCbirA2Qg7ASgtAAQhlAAgWhgg");
	this.shape_6.setTransform(73.5,95.6,0.691,0.691);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#EC42C2").s().p("AgXCYQgoAAgbgcQgcgcAAgoQABgUAHgQIAvhxQAQgkAkgPQAkgPAkAQQAlAPAOAlQAPAkgPAlIgwBwQgMAagXAQQgYAQgbAAIgBAAg");
	this.shape_7.setTransform(26.3,145.8,0.691,0.691);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#F8A260").s().p("AAnDOQgWgLgNgTIikjzQgWghAHgnQAHgnAhgWQAggWAnAIQAnAHAWAhICkDzQAWAggHAnQgHAnggAWQgZAQgdAAQgYAAgUgLg");
	this.shape_8.setTransform(56.6,42.8,0.691,0.691);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#F2A161").s().p("AjCBvQgcgbAAgoQgBgeASgYQASgZAdgKID/hYQAlgNAjARQAkASAMAlQANAlgRAkQgRAigmANIj+BYQgPAFgQAAQgoAAgbgcg");
	this.shape_9.setTransform(15.4,153.6,0.691,0.691);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#F2A161").s().p("AAwAlIhpgVQgLgCgHgJQgGgJACgLQADgLAJgGQAJgGALACIBpAVQALACAGAKQAHAIgDALQgCAJgHAHQgIAFgJABg");
	this.shape_10.setTransform(13.3,146.8,0.691,0.691);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(72));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,103.2,163.3);


// stage content:
(lib.step3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 4
	this.instance = new lib.Sweat();
	this.instance.parent = this;
	this.instance.setTransform(486.2,29.5,1,1,0,0,0,1.9,3.9);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

	// Shaky man
	this.instance_1 = new lib.Shakyman();
	this.instance_1.parent = this;
	this.instance_1.setTransform(460.2,91.7,1,1,0,0,0,62,88.8);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(1));

	// Layer 2
	this.instance_2 = new lib.DeskMan();
	this.instance_2.parent = this;
	this.instance_2.setTransform(380.3,174.4,1,1,0,0,0,51.6,81.6);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(1));

	// Mouse Hand
	this.instance_3 = new lib.Mousehand();
	this.instance_3.parent = this;
	this.instance_3.setTransform(254.5,201.1,1,1,0,0,0,43.8,20.4);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(1));

	// Pen Arm
	this.instance_4 = new lib.PenWoman();
	this.instance_4.parent = this;
	this.instance_4.setTransform(132.1,63.6,1,1,0,0,0,38,63.6);

	this.timeline.addTween(cjs.Tween.get(this.instance_4).wait(1));

	// Layer 5
	this.instance_5 = new lib.Screen();
	this.instance_5.parent = this;
	this.instance_5.setTransform(327.7,283.1,1,1,0,0,0,27.6,205.3);

	this.timeline.addTween(cjs.Tween.get(this.instance_5).wait(1));

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#381F14").s().p("AgYAZQgKgLAAgOQAAgOAKgKQAKgKAOAAQAOAAALAKQAKAKAAAOQAAAOgKALQgLAKgOAAQgOAAgKgKg");
	this.shape.setTransform(231.6,145.3,0.691,0.691);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#4F2D1A").s().p("AhDAoQgIgIAAgLQAAgRAQgHIBhgqQALgEAKAEQALAEAEAKQAEALgEAKQgEAKgKAEIhiAqQgEACgGAAQgLAAgIgIg");
	this.shape_1.setTransform(264.6,171.7,0.691,0.691);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#4F2D1A").s().p("AgpAqQgSgRAAgZQAAgYASgRQARgSAYAAQAZAAARASQASARAAAYQAAAZgSARQgRASgZAAQgYAAgRgSg");
	this.shape_2.setTransform(231.6,145.3,0.691,0.691);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#1D0264").s().p("AjEIfQgYgIgVgaQgbgjgcgUQgfgWgugNQgxgOglgYQgkgYgPgPQgagZgJgeQgUg8AvhRQATgjAmgaQApgdAYghQAZghAQgyQAMgoAagWQAZgVAqgJQAngIAWgWQAWgXAJgrQAHgqAZgXQAPgPAkgQQAigPAZgYQAOgNAKgTIARgXQA2g3BLgfQBagkBUAQQAsAHApAUQBJAjAiBBQAyBdgcA+QgOAfghATQgSALgyARQhkAkgnA9IgXAuQgMAWgTAMQgeASg5gFQgygEgKAOQgJALAJAZQAQAsAEAYQAGAtgLAsQgLAsgaAlQgSAZglAWQgdATgLAbQgKAYACAkQACAfgMATQgUAhgtAQQgYAIgVAAQgUAAgSgHg");
	this.shape_3.setTransform(209,154.5,0.691,0.691);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#FFFFFF").s().p("AhQgOIA3ggIBqA9Ig3Afg");
	this.shape_4.setTransform(166.2,237.6,0.691,0.691);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#B4ACCC").s().p("AgIFLQgugMgYgqQgQgbABgeIAAoLIA2gfIAAIVQAAAeAVAVQAUAVAeAAQAUAAAQgJIAbgQIAABAIgQAKQgcAPgdAAQgPAAgPgEg");
	this.shape_5.setTransform(174.5,261.8,0.691,0.691);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#D8D1F1").s().p("AgtAkIgXhGIAfgSIBqA9IgzAsIgBAAQgIAAg2gRg");
	this.shape_6.setTransform(176.2,278.2,0.691,0.691);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#D8D1F1").s().p("AgoEmQgagQgOgaQgOgaABgdIAAoLIA2ggIAAA/IAzAeIAwH8IAjgUIAABAIgdAQIAEA4g");
	this.shape_7.setTransform(167.1,259.1,0.691,0.691);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#D8D1F1").s().p("AFyJJIrTmoQgugbgagtQgbgvAAg0IgLoIQAAgRAIgPQANgWAagHQAZgGAWANILfGiQAuAbAaAuQAaAuAAA0IAAIOQAAARgIAOQgNAXgZAHQgJACgIAAQgQAAgPgJg");
	this.shape_8.setTransform(168.1,228.9,0.691,0.691);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#B4ACCC").s().p("ACxEeIAMgGIn3kmIJilgQATAoAAAsIAAIPQAAAQgJAPQgJAPgQAJIh2BDg");
	this.shape_9.setTransform(186.8,244,0.691,0.691);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#FFFFFF").s().p("AF0IfIANgGIq1mXQgtgagbguQgaguAAg1IgMnMIhbgsIB5hFQAOgJASAAQASgBAPAJILeGiQAuAbAaAuQAbAuAAA1IAAIOQgBASgIAPQgKAOgPAJIh2BDg");
	this.shape_10.setTransform(173.4,226.2,0.691,0.691);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#4B0CED").s().p("Ag+BeQgSgSAAgZQAAgNAFgLQANgdANgjIALgeQAHgYAWgMQAVgMAYAGQAYAHANAWQAMAWgHAYIgCAHIgMAgIgcBGQgHARgQAKQgOAKgSAAQgaAAgRgSg");
	this.shape_11.setTransform(377,195.7,0.691,0.691);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#1D0264").s().p("AkzAQIJqkEIACAeQgWBdhZBoQiyDQlQA2g");
	this.shape_12.setTransform(408.4,235.4,0.691,0.691);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#2D059B").s().p("AkOFIQgsgsAAg+IAAmDQAAg2AjgpQAjgqA1gJIE/g5QA9gLAyAkQAzAjAKA9IADASIALDnQACAogSAjQgSAkgiAVIlLDVQglAYgrAAQg+AAgrgrg");
	this.shape_13.setTransform(408.9,232.6,0.691,0.691);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#2D059B").s().p("AAJQuQg8AAgrgqQgrgrgCg8QgNn3gDleQgDl8AFplQABg9ArgsQAsgrA9AAIABAAQA9ABArAsQAsAsgBA9QgFJbADGCQADFTAMH8QACA+gqAtQgrAsg9ACg");
	this.shape_14.setTransform(420.7,296.8,0.691,0.691);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#2D059B").s().p("AiaQjQgrgogEg7QgMi7gKjGQgSmJAKiSQALijBQmwIBSmnQAOg8AzghQA1ghA8AOQA6AOAhAyQAgAxgKA7IhPGSQhPGrgLCVQgJCGATGBQAKDCALCrQAEA+goAuQgpAvg8AEIgKAAQg7AAgrgog");
	this.shape_15.setTransform(391.4,313.8,0.691,0.691);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#EC42C2").s().p("AhCCuQgcgcAAgnIAAjQQgCgoAbgdQAagdAogCQAmgCAdAbQAdAaACAoIAADZQAAAngcAcQgbAcgoAAQgmAAgcgcg");
	this.shape_16.setTransform(420.6,366.3,0.691,0.691);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#EC42C2").s().p("AgNCyQgngDgZgeQgageADgnIAAAAIAMikQADgoAegZQAegaAmADQAnADAaAeQAaAdgDAoIgMCkQgDAlgcAaQgbAZgkAAg");
	this.shape_17.setTransform(387.6,383.4,0.691,0.691);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#1D0264").s().p("AgjBEQgqgOgXgoQgRgcAVgaQATgXApgJQApgJAlANQAqAPATAnQAOAdgUAZQgTAYglAJQgQADgQAAQgWAAgWgIg");
	this.shape_18.setTransform(420.3,376.1,0.691,0.691);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#4B0CED").s().p("ACDCdQg5gGiRhEIiHhCQgsgXgPgQQgSgSAFgWQAGgfAWgZQAegiAtgEQAegDB5APQCYATAmADQBMAGAaBFQAUA1gOBBQgJAsg0AZQgkASghAAIgNgBg");
	this.shape_19.setTransform(410.3,378.1,0.691,0.691);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#1D0264").s().p("ACECRQg2gPiShAIiIg9QgqgUgMgKQgPgMgEgRIgBhQIAcAAIAAAUQAigaArgIQAcgGChAmQBSATBMAUQAqAEAdAdIAiAPIAABAQgBAQgCAIQgLAygmAZQgaAQgfAAQgSAAgUgFg");
	this.shape_20.setTransform(410.2,383.5,0.691,0.691);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#1D0264").s().p("AgbBIQgsgKgbgkQgUgbASgcQARgZAngNQApgNAlAJQAsAKAWAlQASAbgRAbQgQAaglANQgWAHgWAAQgPAAgQgEg");
	this.shape_21.setTransform(387.1,391.7,0.691,0.691);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#4B0CED").s().p("ACKCNIldhMQgpgLgTgXQgSgVAFgXQAFgZAbgaQAdgdAqgPQAogOB0gLQB5gLBMAGQBMAGAbBFQAUA2gOBAQgKAvgoAWQggARgtAAIgQAAg");
	this.shape_22.setTransform(376.7,395.4,0.691,0.691);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#1D0264").s().p("ACKBzIldhLQhAgTgIgoIgBhQIAcAAIAAAUQAjgbAqgHQAcgGCoAFICjAHQAqADAdAdIAiAPIgBBBQAAAOgCAKQgLAxglAWQgcARgnAAQgOAAgPgCg");
	this.shape_23.setTransform(376.6,401.7,0.691,0.691);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("#454AEB").s().p("AAAARQgNgJgBgQQAAgHAEgCQAEgDAGAEQAOAJABAQQAAAHgFACIgDABQgDAAgEgCg");
	this.shape_24.setTransform(334.5,85.6,0.691,0.691);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#80779B").s().p("AAZArIgxgcQgYgPgCgcQAAgMAIgEQAHgFALAHIAxAcQAYAPACAcQAAAMgIAEQgDACgEAAQgFAAgGgEg");
	this.shape_25.setTransform(332.8,84.4,0.691,0.691);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f("#D8D1F1").s().p("AA9BPIh+hJQgRgJgJgQQgKgSAAgTQAAgLAIgHQAIgIALAAQAHAAAGADIB/BLQAQAIAKARQAJAQAAAUQABAKgIAIQgIAIgLAAQgGAAgIgEg");
	this.shape_26.setTransform(330.4,82.8,0.691,0.691);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f("#B4ACCC").s().p("AAnAlIhdgmQgPgJgFgWQgDgKAAgUIAAArIgdgzIAYgOQANgHANAHIB/BKQAQAKAKAPQAJARABATQAAAQgOAHIgYAOg");
	this.shape_27.setTransform(331.7,82.3,0.691,0.691);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f("#FFFFFF").s().p("ApzBpIAAunITnLWIAAOng");
	this.shape_28.setTransform(330.1,114.9,0.691,0.691);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f("#B4ACCC").s().p("AKNN4I0fr1QgRgKABgTIAAvQQgBgDADgEQADgFAGgCQAGgCAFADIUfL2QAQAJAAATIAAPQQAAAFgCACQgDAGgGACIgDAAQgEAAgEgCg");
	this.shape_29.setTransform(330.1,114.9,0.691,0.691);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f("#80779B").s().p("AJ/NVI0LrpIAAu4IgsgaIAzgeQAIgFAHAFIUfL1QAQAKABASIAAPRQgBAHgGAEIgCAAIgzAeg");
	this.shape_30.setTransform(332.1,113.8,0.691,0.691);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f("#B4ACCC").s().p("AjWAtQAWgTAMgaQAMgaAAgdIAAivIAGgkIC2BPIDDBnIAAD5QAAAdgMAbQgMAagWAUg");
	this.shape_31.setTransform(324.7,150.4,0.691,0.691);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f("#D8D1F1").s().p("AA1CGIkYihQgRgKgBgSIAAgJQABgRARgKIBFgoQAKgGAMgJIF+DcQgHAIgOAIIhNAsQgWANgaAAQgaAAgVgNg");
	this.shape_32.setTransform(319.4,163.6,0.691,0.691);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f("#80779B").s().p("AglCcQAWgUAMgaQALgbAAgdIAAj5IAeAPIAADxQAAApgVAlQgSAjgkAWg");
	this.shape_33.setTransform(339,158,0.691,0.691);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f("#B4ACCC").s().p("AA1BrIkYihQgTgLAAgVIAAghQADATAQAJIEYChQAWANAaAAQAZAAAWgNIBNgsQAOgIAIgIIAAAoIhjA5QgWANgZAAQgaAAgWgNg");
	this.shape_34.setTransform(319.4,168.1,0.691,0.691);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f("#EC42C2").s().p("AA0AnQg8gthmg7QgxgcgTgaIgKgUIBFg1IBpBJQBqBOAPAYQAXAmA7CsQgdhJhshRg");
	this.shape_35.setTransform(214.9,169.3,0.691,0.691);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f("#A53789").s().p("Ah5j/IDzFkQgbBRgkBKg");
	this.shape_36.setTransform(219.9,206.6,0.691,0.691);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f("#FFFFFF").s().p("Ahwg8IAsgkIBHAzQBKA0AOAPQAPAQAFAfQADAPgBANg");
	this.shape_37.setTransform(214.2,161.8,0.691,0.691);

	this.shape_38 = new cjs.Shape();
	this.shape_38.graphics.f("#D8D1F1").s().p("AgKEGIm7j/QgLgHABgIQABgJANgHIGWjrQAbgPAbANIG7EAQALAFgBAJQgBAJgNAHImWDrQgOAIgPAAQgNAAgMgGg");
	this.shape_38.setTransform(283.5,209.8,0.691,0.691);

	this.shape_39 = new cjs.Shape();
	this.shape_39.graphics.f("#F399D9").s().p("AiPJbQh0gWg9gzQhGg7AehRQAbgyAPhPIAZinQAdi6AKg5QAKg6AfieQAThmApg0QA4hHBzgWQBbgRBPBuQAuA+BSC1QBmDghbEEQgbBPg6ByQg7B1gMAiQgQArhiAPQglAFgmAAQg8AAhBgMg");
	this.shape_39.setTransform(205.4,200.1,0.691,0.691);

	this.shape_40 = new cjs.Shape();
	this.shape_40.graphics.f("#4F2D1A").s().p("AiGDAQgcgcAAgnQAAgYALgWICIj4QASgjAmgLQAlgLAjATQAjATALAlQALAmgTAjIiHD4QgNAXgVANQgXAOgaAAQgoAAgbgcg");
	this.shape_40.setTransform(212.7,163.7,0.691,0.691);

	this.shape_41 = new cjs.Shape();
	this.shape_41.graphics.f("#4F2D1A").s().p("Ai2DRQhQhGgNhqQgNhyBHhaQBHhaBygOQBygNBaBHQBaBHAOBzQANBxhHBaQhHBbhyANQgOACgPAAIgFAAQhnAAhOhFg");
	this.shape_41.setTransform(225.6,137.6,0.691,0.691);

	this.shape_42 = new cjs.Shape();
	this.shape_42.graphics.f("#F399D9").s().p("AlJgPQgbgdACgpQABgoAegbQAegbAoACQAoACAbAeIADADQBmB1BiAJQBIAGCAg6QAlgRAlAOQAmANARAlQARAjgOAmQgNAlglASIgCABQhHAggsAOQhNAYhFAAQjGAAinjBg");
	this.shape_42.setTransform(217.4,179.2,0.691,0.691);

	this.shape_43 = new cjs.Shape();
	this.shape_43.graphics.f("#4F2D1A").s().p("AkgC5QgVgWAAgdQAAgWAMgSQAMgSATgIIFHiNICChzQAXgTAeADQAeACATAXQASAWgCAdQgCAdgVATIiLB5QgHAHgLAFIlSCTQgNAGgPAAQgeAAgVgVg");
	this.shape_43.setTransform(251.2,171.1,0.691,0.691);

	this.shape_44 = new cjs.Shape();
	this.shape_44.graphics.f("#B4ACCC").s().p("AAkAuIhzhCQgHgEABgFQABgGAHgEIAJgFQAQgJARAHIAPAJQAQAIAPgJIAJgFQAQgJARAIIAZAOQAHAEgBAGQgBAFgHAEIgJAFQgHAEgBAFQAAAFAGAEIAPAJQAHAEgBAFQgBAGgHAEIgJAFQgJAFgJAAQgHAAgIgEg");
	this.shape_44.setTransform(273.5,177.7,0.691,0.691);

	this.shape_45 = new cjs.Shape();
	this.shape_45.graphics.f("#B4ACCC").s().p("AHcEpIvdo7QgHgDABgHQAAgGAIgEQARgKASAIIPeI8QAHADgBAGQgBAGgHAEQgKAGgJAAQgIAAgJgEg");
	this.shape_45.setTransform(281.9,156.5,0.691,0.691);

	this.shape_46 = new cjs.Shape();
	this.shape_46.graphics.f("#B4ACCC").s().p("ACTEBIpPlVQgHgEABgFQABgHAIgEIEEiWQARgKASAIIJPFVQAHADgBAHQgBAFgHAFIkFCXQgJAFgKAAQgIAAgIgEg");
	this.shape_46.setTransform(254.3,156.5,0.691,0.691);

	this.shape_47 = new cjs.Shape();
	this.shape_47.graphics.f("#B4ACCC").s().p("AgmBYIhyhCQgHgEABgFQABgGAHgFICahYQARgJASAIIByBCQAHADgBAGQgBAGgIAFIiYBXQgKAGgJAAQgJAAgIgEg");
	this.shape_47.setTransform(285.9,170.4,0.691,0.691);

	this.shape_48 = new cjs.Shape();
	this.shape_48.graphics.f("#B4ACCC").s().p("Ag7CKIizhoQgHgEABgGQABgGAIgEIEDiVQASgKASAIICzBoQAGADAAAGQgBAGgIAFIkECVQgJAFgJAAQgIAAgJgDg");
	this.shape_48.setTransform(295.9,180.5,0.691,0.691);

	this.shape_49 = new cjs.Shape();
	this.shape_49.graphics.f("#D8D1F1").s().p("AEfGYIvgo9QgHgDgEgHQgFgJADgLQADgLAKgGIFRjDQAUgLAXAAQAXAAAUALIPdI7QAHAEADAGQAGAKgDALQgDALgKAFIlUDFQgTALgVAAQgVAAgTgLg");
	this.shape_49.setTransform(270.5,162.9,0.691,0.691);

	this.shape_50 = new cjs.Shape();
	this.shape_50.graphics.f("#B4ACCC").s().p("AEgGYIvio8QgOgIAAgQIAAghIAHAPQACgDAFgDIFSjDQAUgLAWAAQAYAAATALIPeI7IAGAEIAIgNIAAAjQgBAPgNAHIlTDEQgTALgWAAQgVAAgSgLg");
	this.shape_50.setTransform(270.5,165.2,0.691,0.691);

	this.shape_51 = new cjs.Shape();
	this.shape_51.graphics.f("#FFFFFF").s().p("AG/TbMgqEgWzQgTgJgLgUQgOgaAIgeQAJgdAbgPIY5uCQAwgbA3AAQA3AAAwAbMAqFAWzQATALAKASQAOAbgIAdQgJAegaAOI45OCQgxAcg3AAQg3AAgwgcg");
	this.shape_51.setTransform(290.7,187.4,0.691,0.691);

	this.shape_52 = new cjs.Shape();
	this.shape_52.graphics.lf(["#9BF1FF","#9BF1FF","#FFFFFF"],[0,0.369,1],64,-497.8,-491.8,64.8).s().p("AgjAXQgPgKAAgNQAAgMAPgKQAPgJAUAAQAVAAAPAJQAOAKABAMQgBANgOAKQgPAJgVAAQgUAAgPgJg");
	this.shape_52.setTransform(441.2,205.9,0.691,0.691);

	this.shape_53 = new cjs.Shape();
	this.shape_53.graphics.f("#B4ACCC").s().p("AG/MZMgqEgWzQgTgKgKgSQgKgSAAgUIAAhXMAr6AX3IYGtlIDZhfIAABXQAAAUgKASQgKARgSAKI45OBQgxAbg3AAQg3AAgwgbg");
	this.shape_53.setTransform(290.7,224.5,0.691,0.691);

	this.shape_54 = new cjs.Shape();
	this.shape_54.graphics.f("#FFFFFF").s().p("AkaC7IgjgSQgGgDgEgGQgFgKADgKQACgKAKgGIIZk1QAQgKAUAAQATAAAQAKIAbAPQAHAEACAGQAGAJgDAKQgCALgKAFIoTE3QgQAJgSABQgTAAgQgJg");
	this.shape_54.setTransform(246.5,243.9,0.691,0.691);

	this.shape_55 = new cjs.Shape();
	this.shape_55.graphics.f("#B4ACCC").s().p("AkaC9IgigSQgPgJABgQIAAgwIAWAWIIQkwQARgKATAAQATAAARAKIAXANIAQgZIAAAzQgBAPgLAGIoUE3QgQAJgSABIgCAAQgSAAgPgIg");
	this.shape_55.setTransform(246.4,247.4,0.691,0.691);

	this.shape_56 = new cjs.Shape();
	this.shape_56.graphics.f("#D8D1F1").s().p("AgyEcIgLgGIAAgqIARAKQALAGAOAAQATAAANgOQAOgOAAgTIAAnyIAjAVIAAHqQAAAVgKARQgQAbgeAIQgJADgKAAQgTAAgSgKg");
	this.shape_56.setTransform(244,266.2,0.691,0.691);

	this.shape_57 = new cjs.Shape();
	this.shape_57.graphics.f("#D8D1F1").s().p("AgsAFIBFgmIAUALIgPAtQgXAIgSAEg");
	this.shape_57.setTransform(242.8,282.1,0.691,0.691);

	this.shape_58 = new cjs.Shape();
	this.shape_58.graphics.f("#B4ACCC").s().p("AgpERIgUgLIAAgqIAXAOIAfnhIAhgUIAAgpIAkAVIAAHrQAAASgJASQgKARgQAKIgCABIhGApg");
	this.shape_58.setTransform(248.8,264.4,0.691,0.691);

	this.shape_59 = new cjs.Shape();
	this.shape_59.graphics.f("#EC42C2").s().p("ApGDxQg4gygYgfQgsg2gRg+QgYhVAihaQAHgQBUifQB8glBHgDQAigCBIALQBDAKBMgGQB0gJDAguQBFgQCAAyQB7AxBvBRQB3BXAmBOQAtBYhOAyQiBBUhKAuQiGBRhYAdQi1A7iMAMQgrADgoAAQkMAAiqiYg");
	this.shape_59.setTransform(223.5,248.3,0.691,0.691);

	this.shape_60 = new cjs.Shape();
	this.shape_60.graphics.f("#FFFFFF").s().p("AgnG5IrPmfQgXgNgMgVQgUgjALgmQAKgnAigTIIIksQBCgmBLAAQBLAABAAmILNGeQAWAMANAWQAUAhgLAnQgKAmgiAUIoLEuQhAAlhKAAQhKAAg/glg");
	this.shape_60.setTransform(204.1,257.5,0.691,0.691);

	this.shape_61 = new cjs.Shape();
	this.shape_61.graphics.f("#B4ACCC").s().p("AlYm1IJLFTIAAgmIBmAAIAACaQAAAZgNAWQgNAVgVANIoKEuQg4AghAAFg");
	this.shape_61.setTransform(236,270.7,0.691,0.691);

	this.shape_62 = new cjs.Shape();
	this.shape_62.graphics.f("#D8D1F1").s().p("AgnG5IrPmfQgXgNgMgWQgNgYABgaIAAiaIBnAAIAAAqIHRkNQBBglBLAAQBMAABAAlIKVF+IAAgmIBnAAIAACaQgBAZgNAWQgMAVgWANIoLEuQhAAlhKAAQhKAAg/glg");
	this.shape_62.setTransform(204.2,268,0.691,0.691);

	this.shape_63 = new cjs.Shape();
	this.shape_63.graphics.f("#4F2D1A").s().p("AE7ItQgYgQgLgcQj9qZhbjaQgrAWhDAxQhGAyg+A3QgdAagogDQgngCgageQgagdACgnQADgoAdgaQBFg9BPg5QBhhHBDgbQBDgcAyALQAcAGAYATQAYASANAcQBECREwMfQAOAlgQAkQgQAkglAOQgQAGgSAAQgdAAgZgRg");
	this.shape_63.setTransform(255.5,253.8,0.691,0.691);

	this.shape_64 = new cjs.Shape();
	this.shape_64.graphics.f("#4F2D1A").s().p("AgIKOQgcgbAAgoIABgRQAtj3AlkFQA3l6gFibQgsAZg8AtQg/Avg6AzQgdAagogCQgngDgagdQgageACgnQADgnAdgaQBFg9BPg6QBhhHBCgbQBDgbAyAKQAdAGAYATQAYATANAbQAWAvABBgQACCsg0FyQgnEOgvECQgHAhgaAWQgaAWgiAAQgoAAgagcg");
	this.shape_64.setTransform(263.9,273.3,0.691,0.691);

	this.shape_65 = new cjs.Shape();
	this.shape_65.graphics.f("#B4ACCC").s().p("AgrGZQgTgKAAgOIAAshQABAMASAJQASAKAZAAQAaAAASgKQASgJABgNIAAMiQAAAOgTAKQgSAJgaAAQgZAAgSgJg");
	this.shape_65.setTransform(210.7,285.4,0.691,0.691);

	this.shape_66 = new cjs.Shape();
	this.shape_66.graphics.f("#B4ACCC").s().p("Ag3BaQgXgNAAgRIAAihQAAARAXANQAYAMAfAAQAhAAAXgMQAXgNAAgRIAAChQAAARgXANQgXAMghgBQgfABgYgMg");
	this.shape_66.setTransform(210.7,319,0.691,0.691);

	this.shape_67 = new cjs.Shape();
	this.shape_67.graphics.f("#D8D1F1").s().p("Ag3AdQgXgMAAgRQAAgQAXgMQAYgMAfAAQAhAAAXAMQAXAMAAAQQAAARgXAMQgXAMghAAQgfAAgYgMgAgrgWQgSAKAAAMQAAANASAKQASAJAZAAQAaAAASgJQASgKAAgNQAAgMgSgKQgTgKgZAAQgYAAgTAKg");
	this.shape_67.setTransform(210.7,311.9,0.691,0.691);

	this.shape_68 = new cjs.Shape();
	this.shape_68.graphics.f("#FFFFFF").s().p("Ah4IiQgXgDgOgSQgOgTADgXIABgIIB8oRIsHCxQgVACgRgMQgRgMgFgUQgGgWAMgUQAMgUAXgGQAEgBAEAAIMEiyIj0knQgMgTAGgXQAFgWAUgMQAHgFAKgCQASgEAQAHQARAHAJAPID8E3IIcjQQAOgIAQAAQAQAAANAJQATAMAFAXQAFAWgMAUQgHALgMAHIniCwIKiDsQAWAEANAUQANATgEAXQgBAFgEAJQgJAQgRAIQgQAJgTgEIrnj5IiCIqQgGAUgRALQgOAJgQAAIgIAAg");
	this.shape_68.setTransform(208.9,331.8,0.691,0.691);

	this.shape_69 = new cjs.Shape();
	this.shape_69.graphics.f("#B4ACCC").s().p("Ah4IiQgWgDgOgQQgOgRABgWIAAgxIAKAIIB0nIIsHCEQgVACgRgMQgRgMgFgUQgBgFAAgFIAAgBQgBgDABgDIAAgzIAUAEIgEALQAOgPAUgBIMEiEIjzlVQgKgOACgSIAAgyIATALQARgPAYACQAXABAPASIEBFsIIcj/QAOgIAQABQAQAAANAJQAHAEAGAHIANgPIAAAwQABAQgIAOQgIANgNAIIniDdIKiC/QAWAEANAUQANATgEAXQgBAFgEAJQgJAQgRAIQgQAJgTgEIrnjMIiCH9QgGAUgRALQgOAKgRAAIgHgBg");
	this.shape_69.setTransform(208.9,335.4,0.691,0.691);

	this.shape_70 = new cjs.Shape();
	this.shape_70.graphics.f("#80779B").s().p("AglBAQgQgIAAgZQACgcAOgXQAOgYAXgPQAWgNARAIQAPAJAAAZQgBAbgPAYQgOAYgYAPQgMAIgLAAQgHAAgHgEg");
	this.shape_70.setTransform(202.5,374.1,0.691,0.691);

	this.shape_71 = new cjs.Shape();
	this.shape_71.graphics.f("#D8D1F1").s().p("Ag4A0QgQgMABgVQACgbAOgYQAPgYAXgQQAYgOAPALIAyAdIgDAFQgTgIgQAMQgWAOgMAWQgNAVgCAaQgCASAOALIgDAGg");
	this.shape_71.setTransform(200.2,372.9,0.691,0.691);

	this.shape_72 = new cjs.Shape();
	this.shape_72.graphics.f("#80779B").s().p("AglBBQgQgJAAgZQACgcAOgXQAPgYAWgPQAXgNAPAJQAQAIAAAZQgCAcgOAXQgOAYgYAPQgMAIgLAAQgIAAgGgDg");
	this.shape_72.setTransform(264.4,352.2,0.691,0.691);

	this.shape_73 = new cjs.Shape();
	this.shape_73.graphics.f("#D8D1F1").s().p("Ag4A0QgRgMACgVQACgbAOgYQAPgYAXgPQAXgOAQAKIAyAdIgDAFQgTgIgQAMQgWAOgNAWQgNAVgBAaQgDASAPALIgDAGg");
	this.shape_73.setTransform(262.1,351,0.691,0.691);

	this.shape_74 = new cjs.Shape();
	this.shape_74.graphics.f("#D8D1F1").s().p("AAAA8QgWgPgPgYQgOgXgCgcQAAgZAQgJQAQgIAVANQAYAPAOAYQAOAXACAcQAAAZgQAJQgGADgHAAQgLAAgOgIg");
	this.shape_74.setTransform(247.3,316.6,0.691,0.691);

	this.shape_75 = new cjs.Shape();
	this.shape_75.graphics.f("#80779B").s().p("AAEBLQAOgLgCgSQgBgagOgVQgMgWgWgOQgQgMgTAIIgDgFIAygdQAQgLAXAOQAXAQAPAYQAOAYACAbQACAVgRAMIgyAdg");
	this.shape_75.setTransform(249.7,315.4,0.691,0.691);

	this.shape_76 = new cjs.Shape();
	this.shape_76.graphics.f("#D8D1F1").s().p("AAAA8QgXgPgOgYQgPgXgBgcQAAgZAQgIQAQgJAVANQAXAPAPAYQAOAXACAcQAAAZgQAJQgGADgHAAQgLAAgOgIg");
	this.shape_76.setTransform(187.8,308.6,0.691,0.691);

	this.shape_77 = new cjs.Shape();
	this.shape_77.graphics.f("#80779B").s().p("AAEBLQAPgLgDgSQgBgagNgVQgNgWgWgOQgQgMgTAIIgDgFIAygdQAQgLAXAOQAYAQAOAYQAOAYACAbQACAVgRAMIgyAdg");
	this.shape_77.setTransform(190.1,307.4,0.691,0.691);

	this.shape_78 = new cjs.Shape();
	this.shape_78.graphics.f("#D8D1F1").s().p("AAAA8QgWgPgPgYQgOgXgCgcQAAgZAQgIQAQgJAVANQAYAPAOAYQAPAXABAcQAAAZgQAJQgGADgHAAQgLAAgOgIg");
	this.shape_78.setTransform(152.8,347,0.691,0.691);

	this.shape_79 = new cjs.Shape();
	this.shape_79.graphics.f("#80779B").s().p("AAEBLQAOgLgCgSQgBgagOgVQgMgWgWgOQgQgMgTAIIgDgFIAygdQAQgKAXAOQAXAPAPAYQAOAYACAbQACAVgRAMIgyAdg");
	this.shape_79.setTransform(155.1,345.8,0.691,0.691);

	this.shape_80 = new cjs.Shape();
	this.shape_80.graphics.f("#FFFFFF").s().p("AAiCxQgdABgXgRQgXgQgMgaIhEikQgQgkAQgkQAPglAkgPQAkgPAjAPQAlAOAPAlIBFCjQAPAlgOAlQgQAkgkAPQgRAHgUAAg");
	this.shape_80.setTransform(282.6,291.4,0.691,0.691);

	this.shape_81 = new cjs.Shape();
	this.shape_81.graphics.f("#FFFFFF").s().p("AhRCXQgcgcAAgoIABgQIAdimQAHgnAggWQAggXAmAGQAnAHAXAgQAXAhgHAmIgdCnQgGAigbAWQgaAXgiAAQgnAAgcgcg");
	this.shape_81.setTransform(267.4,316.4,0.691,0.691);

	this.shape_82 = new cjs.Shape();
	this.shape_82.graphics.f("#1D0264").s().p("AgcBOQgngDgWgVQgXgWAJggQANgoAogVQAjgSApACQAqADAWAUQAZAWgNAgQgRApgnAVQgeAQghAAIgLAAg");
	this.shape_82.setTransform(285.6,299.4,0.691,0.691);

	this.shape_83 = new cjs.Shape();
	this.shape_83.graphics.f("#F399D9").s().p("AifCUQgwgPgNgkQgVg2ALgvQAOg+A/gPQAhgHB+gkQBkgcAagCQAhgBAcATQAbASAMAgQAHASgNARQgLAPgiAaQgxAjg5AmQhzBMgwANQgMADgOAAQgVAAgYgHg");
	this.shape_83.setTransform(293.6,300.2,0.691,0.691);

	this.shape_84 = new cjs.Shape();
	this.shape_84.graphics.f("#1D0264").s().p("AipCPQgjgQgQgqQgEgJgBgLIgJg3IAbgRQAVgcAjgIICBg1QCFg1AYABQAlABAgASIgCgRIAYgDIAJBEQgBAPgLAMQgJAJghAYQjECBhIAgQgYAKgWAAQgTAAgRgHg");
	this.shape_84.setTransform(294.2,304.8,0.691,0.691);

	this.shape_85 = new cjs.Shape();
	this.shape_85.graphics.f("#1D0264").s().p("AgvBFQglgNgQgaQgRgbARgbQAXglAsgKQAmgJAoANQAnANARAZQASAcgUAbQgbAkgsAKQgQAEgPAAQgWAAgWgHg");
	this.shape_85.setTransform(266.7,324.4,0.691,0.691);

	this.shape_86 = new cjs.Shape();
	this.shape_86.graphics.f("#F399D9").s().p("Ai/BnQgigSgIgnQgMg2ARgtQAWg5A/gFQBBgFBkAJQBhAJAhAMQAjANAZAYQAWAVAEAVQAEAUgOARQgQATgiAJIkjA/IgOABQgmAAgagPg");
	this.shape_86.setTransform(273.6,327.3,0.691,0.691);

	this.shape_87 = new cjs.Shape();
	this.shape_87.graphics.f("#1D0264").s().p("AjCBUQgfgTgKgpQgCgIABgMIgBg2IAcgMQAYgZAkgDICIgFQCMgEAXAFQAkAGAcAWIAAgRIAYAAIgBBDQgDAQgPALQgPAOgbAIIkjA/QgNACgMAAQggAAgXgOg");
	this.shape_87.setTransform(273.7,332.6,0.691,0.691);

	this.shape_88 = new cjs.Shape();
	this.shape_88.graphics.f("#F8A260").s().p("AhSAiQgUgVAAgcQAAgeAVgVQAUgTAbgBQAbgCAVARQAdgHAZAPQAaAPAHAdQADANgBAHQgBAbgPAWQgPAWgZAJQgOAGgQAAQguAAg1g1g");
	this.shape_88.setTransform(162.8,131.8,0.691,0.691);

	this.shape_89 = new cjs.Shape();
	this.shape_89.graphics.f("#2D059C").s().p("AgFg4IApggIgcCRIgrAgg");
	this.shape_89.setTransform(184,100.3,0.691,0.691);

	this.shape_90 = new cjs.Shape();
	this.shape_90.graphics.f("#FFFFFF").s().p("AirgJIGck6Ig+FQImjE3g");
	this.shape_90.setTransform(168.9,112.1,0.691,0.691);

	this.shape_91 = new cjs.Shape();
	this.shape_91.graphics.f("#2D059C").s().p("AjVgaIIFmAIhRG0IoOGBg");
	this.shape_91.setTransform(167,113.5,0.691,0.691);

	this.shape_92 = new cjs.Shape();
	this.shape_92.graphics.f("#FFFFFF").s().p("AgpA8QhIiNAGhPIAygZQgBAqBTBpQApA0AqAsIhNCAQgkg3gkhHg");
	this.shape_92.setTransform(116.1,68.8,0.691,0.691);

	this.shape_93 = new cjs.Shape();
	this.shape_93.graphics.f("#3288FA").s().p("AAkFdIgKgRQhmirhVkpQgbhdgVheIgRhMIHFKRIgBApQgDBNhKATQgRAFgPAAQgzAAgegzg");
	this.shape_93.setTransform(110.1,108.1,0.691,0.691);

	this.shape_94 = new cjs.Shape();
	this.shape_94.graphics.f("#3288FA").s().p("ABgGhQAOlwgUhCIg5i9IArhKIhLAVQhVh0gpicQgZhfgEhYQAsggAvgZQAVBgBbC6QBXCwALBLQANBVgHGOQgEEcgJDgQgeAKggAJQALirAHi4g");
	this.shape_94.setTransform(116,110.7,0.691,0.691);

	this.shape_95 = new cjs.Shape();
	this.shape_95.graphics.f("#79C9FF").s().p("AhgLaQiNg1AAh/QAAhmAciiQAcimABguQACiFgTivQgQiRAJheQAHhQA0hLQAvhGBOg5QAEBYAYBgQApCbBWB0IBLgVIgrBKIA5C9QAUBCgJFOQgFCmgICZIgKBGQhWAZhMAAQhNAAhFgag");
	this.shape_95.setTransform(106.8,113.5,0.691,0.691);

	this.shape_96 = new cjs.Shape();
	this.shape_96.graphics.f("#F08B52").s().p("AhcDUQgcgbAAgoIABgRIA0khQAHgmAhgXQAfgWAnAGQAnAHAWAhQAXAggHAnIg0EhQgHAigaAWQgaAWgiAAQgnAAgcgcg");
	this.shape_96.setTransform(124,52.2,0.691,0.691);

	this.shape_97 = new cjs.Shape();
	this.shape_97.graphics.f("#FFFFFF").s().p("AgxBrQAnh1gghcQgKgcgPgWIgOgRIBRgKQBGA+AKCaQAFBNgJBCg");
	this.shape_97.setTransform(132.4,63.5,0.691,0.691);

	this.shape_98 = new cjs.Shape();
	this.shape_98.graphics.f("#D8D1F1").s().p("AgegmIBPAXIhhA2g");
	this.shape_98.setTransform(131,73.5,0.691,0.691);

	this.shape_99 = new cjs.Shape();
	this.shape_99.graphics.f("#D8D1F1").s().p("AALgZIA7AwIiLADg");
	this.shape_99.setTransform(122.8,74.7,0.691,0.691);

	this.shape_100 = new cjs.Shape();
	this.shape_100.graphics.f("#3288FA").s().p("AhDjaIgCkMQgDjMgfg+IBNgMQAzAfAZCrQANBWACBPIg8BiIBOgbIgmIBIA7IsIhDAWQhgtwgIhng");
	this.shape_100.setTransform(138.1,105.2,0.691,0.691);

	this.shape_101 = new cjs.Shape();
	this.shape_101.graphics.f("#F2A161").s().p("AAiBrQgtgqglgpQhvh7A/gVQDWhHACCgQABBPgqBfIAAAAQgFAAgogkg");
	this.shape_101.setTransform(122.2,66.4,0.691,0.691);

	this.shape_102 = new cjs.Shape();
	this.shape_102.graphics.f("#D8D1F1").s().p("AhdA/IAFhTICrhIIAJAsQAGArgMgBQgMgBhGAxIhDAzg");
	this.shape_102.setTransform(118.3,57.5,0.691,0.691);

	this.shape_103 = new cjs.Shape();
	this.shape_103.graphics.f("#79C9FF").s().p("AhxkUIA4jkIg7j5IAVAEQAcAEAYAKQBKAeAOA8QAvDPAADlQgBCHgLEsQgBB9ATCzQAKBZAKBAQgBAUgxAbQgYAPgZAJg");
	this.shape_103.setTransform(143.9,104.4,0.691,0.691);

	this.shape_104 = new cjs.Shape();
	this.shape_104.graphics.f("#FFFFFF").s().p("AhAB0QgVgVAAgeQAAgIACgHIAbh8QAEgdAYgSQAXgSAdAEQAdAEASAYQASAXgEAeIgdCHQgFAZgUAPQgUAQgYAAQgeAAgVgVg");
	this.shape_104.setTransform(166.7,128.2,0.691,0.691);

	this.shape_105 = new cjs.Shape();
	this.shape_105.graphics.f("#FFFFFF").s().p("AjfMbQjFgHAAiPQAAhmAbiiQAdilAAgvQACiGgTiuQgQiSAJhdQAMiEB9hwQBxhmCagtQCcguBtAnQB5ArAHCHQANDtgBGLQgBGDgMBvQgEAlgzArQgwAohNAkQgDABgPhGQgPhEgBACIgQBmQgJA2gGADQjLBTijAAIgUAAg");
	this.shape_105.setTransform(119.5,107,0.691,0.691);

	this.shape_106 = new cjs.Shape();
	this.shape_106.graphics.f("#79C9FF").s().p("ABgIjQgcgcAAgoQAAgNADgMQAqidAMg5QARhTgGgnQgFgfgdgnQgYgehOhSQhThZgwg2QhahkhXhuQgagfAEgoQAFgoAfgZQAfgZAoAEQAoAEAZAfIABABQCDCkCnCxQBfBlAgAsQAwBEAMBIQAKBDgSBiQgMA/gyC8QgIAggaAUQgaAUghAAQgoAAgdgdg");
	this.shape_106.setTransform(155.7,93.5,0.691,0.691);

	this.shape_107 = new cjs.Shape();
	this.shape_107.graphics.f("#3288FA").s().p("AkLLeQh1gcADhwQAChhgBiJIgBi7IACkoQACh+AKhrQAMh6BzhoQBphfCPgqQCRgqBlAkQBxAoAGB9QALDJgDGCQgCFGgHCIQgDA3h3BGQh0BEiQAkQhjAZhLAAQguAAglgJg");
	this.shape_107.setTransform(119.6,170.9,0.691,0.691);

	this.shape_108 = new cjs.Shape();
	this.shape_108.graphics.f("#F08B52").s().p("AAXPHQglAAgcgbQgcgbgBgmQgFjaAElsQAElCgGi1QgIkogkloQgCgnAbgdQAagdAngDQAkgCAdAYQAdAXAFAlQAkFuAIEzQAGC7gEE/QgEFpAFDWQABAngbAdQgbAcgnABg");
	this.shape_108.setTransform(134.6,216.1,0.691,0.691);

	this.shape_109 = new cjs.Shape();
	this.shape_109.graphics.f("#F08B52").s().p("AhZPmQgogDgZgeQgZgfAEgnICj8OQAEgnAdgZQAegZAnADQAoAEAZAeQAZAegEAoIijcNQgDAlgaAZQgbAYglAAg");
	this.shape_109.setTransform(108.3,232.8,0.691,0.691);

	this.shape_110 = new cjs.Shape();
	this.shape_110.graphics.f("#3785F9").s().p("AgpBhQgtgPgZgjQgaglAPgnQATg0AxgRQArgOAyAQQAwAQAZAiQAcAlgTAnQgYA0gwARQgVAHgVAAQgXAAgZgJg");
	this.shape_110.setTransform(102.7,296.6,0.691,0.691);

	this.shape_111 = new cjs.Shape();
	this.shape_111.graphics.f("#3785F9").s().p("AhCBDQgkgXgLghQgLgiAZgcQAggkAxgCQAqgCAnAZQAnAYAMAhQAMAigcAcQgmAjgwACIgFAAQgnAAgigXg");
	this.shape_111.setTransform(136.8,278.6,0.691,0.691);

	this.shape_112 = new cjs.Shape();
	this.shape_112.graphics.f("#79C7FF").s().p("AA5C4QgigGgXgMQgtgagtgrQg4g1gWg1QgNggAJgzQALg/AqgUQAlgRA5AJQA5AKAcAeQAdAeApBfQApBdAFAqQACATgMASQgOAWgcAHQgQAEgTAAQgPAAgRgDg");
	this.shape_112.setTransform(139.4,284.6,0.691,0.691);

	this.shape_113 = new cjs.Shape();
	this.shape_113.graphics.f("#2D059C").s().p("AAACHQgpgagxgyQg1g2gZgtQgGgLgBgLIAAheIAuAAIAAAoQBVgkA0ACQAwACAdAfQAUAVAVApQAUAnAOAoIAQAAIAABCQAAAXgPASQgPARgWAFQgUAEgUAAQgrAAgpgWg");
	this.shape_113.setTransform(139.4,291.5,0.691,0.691);

	this.shape_114 = new cjs.Shape();
	this.shape_114.graphics.f("#79C7FF").s().p("AhYDlQgqgPgVgkQgYgoAMgxIA1jZIAGgSQAVg3A2gXQA0gXA3AVIAIAEQA1AZAUA3QAUA4gZA1IhfDJQgWAugrAQQgTAHgUAAQgVAAgWgIg");
	this.shape_114.setTransform(100.7,302.9,0.691,0.691);

	this.shape_115 = new cjs.Shape();
	this.shape_115.graphics.f("#2D059C").s().p("AhXDlQgqgPgWgkQgYgoAMgxIA7jrQAVg3A2gXQA0gXA3AVIAJAEQA1AZAUA4QAUA3gZA1IhgDJQgWAugqAQQgUAHgUAAQgVAAgVgIg");
	this.shape_115.setTransform(100.5,306.1,0.691,0.691);

	this.shape_116 = new cjs.Shape();
	this.shape_116.graphics.f("#79C9FF").s().p("AhORXQgsgqgBg9QgFi6gPmhQgQmigGjmQgJmBADl4QABg9ArgsQAsgrA9AAIABAAQA9ABArAsQArAsAAA9QgEFzAKF+QAFDcAQGnQAOF6AGDkQABA+gqAtQgqAsg+ACIgDAAIgCAAQg6AAgrgqg");
	this.shape_116.setTransform(499.6,229.6,0.691,0.691);

	this.shape_117 = new cjs.Shape();
	this.shape_117.graphics.f("#79C9FF").s().p("AgWQoQg9gCgrgsQgrgtACg9IAn8iQAAg/AsgqQAsgsA9AAQA9ABAsAsQArAsgBA+IgncmQgBA9gsAqQgrArg7AAg");
	this.shape_117.setTransform(473.7,208.6,0.691,0.691);

	this.shape_118 = new cjs.Shape();
	this.shape_118.graphics.f("#FFFFFF").s().p("AADCzQglAAgcgaQgcgbgBgmIgGilQgCgoAagdQAageAngCQAmgDAeAaQAeAaACAoIAGCqQABAngaAdQgbAdgoABg");
	this.shape_118.setTransform(501.4,304.6,0.691,0.691);

	this.shape_119 = new cjs.Shape();
	this.shape_119.graphics.f("#FFFFFF").s().p("AgMCyQgogDgZgeQgageADgnIAAAAIAMikQADgoAegZQAegaAmADQAoADAZAeQAaAdgDAoIgMCkQgDAlgcAaQgbAZgkAAg");
	this.shape_119.setTransform(472.1,278.5,0.691,0.691);

	this.shape_120 = new cjs.Shape();
	this.shape_120.graphics.f("#1D0264").s().p("AgMBbQgwgCgmgkQgcgbANgjQALghAngYQAogZAqACQAxACAhAkQAZAcgLAjQgMAhgkAXQgjAXgnAAIgFAAg");
	this.shape_120.setTransform(501.9,312.4,0.691,0.691);

	this.shape_121 = new cjs.Shape();
	this.shape_121.graphics.f("#3288FA").s().p("AiJDMQgfgIgQgZQgNgUABgUQAGgvAuhoQAuhqAgghQAgghA/gLQBAgLApATQAvAWAMBGQAKA5gPAkQgYA7g/A8QgyAwgzAcQgZAOglAGQgUADgRAAQgVAAgRgEg");
	this.shape_121.setTransform(497.9,319,0.691,0.691);

	this.shape_122 = new cjs.Shape();
	this.shape_122.graphics.f("#1D0264").s().p("AgRBZQg0gDgmgkQgdgcAPgiQAOghArgWQArgYAtADQA1ADAhAlQAaAdgOAiQgOAggnAWQgkAVgnAAIgLgBg");
	this.shape_122.setTransform(471.7,285.7,0.691,0.691);

	this.shape_123 = new cjs.Shape();
	this.shape_123.graphics.f("#3288FA").s().p("AjRCeQgqgRgJgiQgHgdAqguQAeggAlgaQClhzBFgTQBQgVAyAdQA+AkgHBsQgCApgjAnQgnAtg/ANIjsAlQgSADgQAAQghAAgcgMg");
	this.shape_123.setTransform(464.6,290.5,0.691,0.691);

	this.shape_124 = new cjs.Shape();
	this.shape_124.graphics.f("#1D0264").s().p("AjRB2QgqgRgJgiQgBgGAAgIIAAhNIA6AAQAUgLAZgHIDlhKQA6gMA5AQIAAgRIBMAAIAABpIgBAAQgDAlglAgQgoAhg6AMIjtAlQgRADgQAAQgiAAgcgMg");
	this.shape_124.setTransform(464.6,299,0.691,0.691);

	this.shape_125 = new cjs.Shape();
	this.shape_125.graphics.f("#1D0264").s().p("AiJCqQgegIgQgWQgNgTAAgUIAAhKIASAAQAQguAWgrQAYgtAWgXQAigjA0gCQA7gCBeAnIAAgsIA0AAIgBBoQgBANgHANQgbAxg8A9Qg2A3gvAeQgWAPgoAGQgSADgRAAQgWAAgSgFg");
	this.shape_125.setTransform(497.9,326.7,0.691,0.691);

	this.shape_126 = new cjs.Shape();
	this.shape_126.graphics.f("#ECE9F8").s().p("AFDTcIoPkeQiTCEkCBOQkJBQk2AAQnSAAlJinQichPhVhnQhZhqAAh0QAAhxBThnQi5Awi+gCQlSAAjuh5Qjvh5AAisQAAiqDvh5QDvh6FRAAQBmAABgANQAKgZAXgMIY5uDQAwgbA3AAQA3AAAxAbMAmHAUqQBlhoDCg/QDIhBDuAAQFRAADvB6QBxA4A+BLQBABNAABUQAACrjvB5QjvB6lRAAQjdAAi9g4Qi4g3hshdI1bMFQgwAbg3AAQg3AAgwgbg");
	this.shape_126.setTransform(299.3,294.4,0.691,0.691);

	this.shape_127 = new cjs.Shape();
	this.shape_127.graphics.f("#ECE9F8").s().p("ApAElQjuh6AAirQAAiqDuh6QDvh5FRAAQFSAADuB5QDwB6AACqQAACrjwB6QjuB5lSAAQlRAAjvh5g");
	this.shape_127.setTransform(394.5,393.8,0.691,0.691);

	this.shape_128 = new cjs.Shape();
	this.shape_128.graphics.f("#FFFFFF").s().p("A5OeUQroifo+kkQo+kjk7l7QlGmGAAmtQAAmsFGmHQE7l6I+kjQI+kkLoifQMDimNLAAQNMAAMCCmQLoCfI/EkQI9EjE7F6QFHGHAAGsQAAGtlHGGQk7F7o9EjQo/EkroCfQsCCmtMAAQtLAAsDimg");
	this.shape_128.setTransform(286.4,318.8,0.691,0.691);

	this.shape_129 = new cjs.Shape();
	this.shape_129.graphics.lf(["#F399D9","#EC98DA","#D797DE","#B794E2","#8A92E9","#568DF1","#3288FA"],[0,0.09,0.22,0.388,0.58,0.78,1],-414.7,0,414.8,0).s().p("A5OeUQroifo+kkQo+kkk7l5QlGmHAAmtQAAmrFGmHQE7l7I+kjQI+kkLoigQMDilNLAAQNMAAMCClQLoCgI/EkQI9EjE7F7QFHGHAAGrQAAGtlHGHQk7F5o9EkQo/EkroCfQsCCmtMAAQtLAAsDimg");
	this.shape_129.setTransform(286.4,329.6,0.691,0.691);

	this.shape_130 = new cjs.Shape();
	this.shape_130.graphics.lf(["#F399D9","#EC98DA","#D797DE","#B794E2","#8A92E9","#568DF1","#3288FA"],[0,0.09,0.22,0.388,0.58,0.78,1],-242.6,0,242.7,0).s().p("AuwRvQmzhdlQirQlQiqi4jeQi/jlAAj6QAAj6C/jlQC4jdFQiqQFQirGzhdQHDhhHtAAQHtAAHDBhQG0BdFQCrQFQCqC4DdQC/DlAAD6QAAD6i/DlQi4DelQCqQlQCrm0BdQnCBhnuAAQntAAnDhhg");
	this.shape_130.setTransform(285.4,384.1,0.691,0.691);

	this.instance_6 = new lib.Path_176();
	this.instance_6.parent = this;
	this.instance_6.setTransform(285.5,384.2,0.691,0.691,0,0,0,250.9,127.4);
	this.instance_6.alpha = 0.949;

	this.instance_7 = new lib.Path_177();
	this.instance_7.parent = this;
	this.instance_7.setTransform(285.5,384.3,0.691,0.691,0,0,0,259.1,131.6);
	this.instance_7.alpha = 0.898;

	this.instance_8 = new lib.Path_178();
	this.instance_8.parent = this;
	this.instance_8.setTransform(285.6,384.4,0.691,0.691,0,0,0,267.3,135.8);
	this.instance_8.alpha = 0.859;

	this.instance_9 = new lib.Path_179();
	this.instance_9.parent = this;
	this.instance_9.setTransform(285.6,384.4,0.691,0.691,0,0,0,275.5,139.9);
	this.instance_9.alpha = 0.809;

	this.instance_10 = new lib.Path_180();
	this.instance_10.parent = this;
	this.instance_10.setTransform(285.7,384.5,0.691,0.691,0,0,0,283.7,144.1);
	this.instance_10.alpha = 0.762;

	this.instance_11 = new lib.Path_181();
	this.instance_11.parent = this;
	this.instance_11.setTransform(285.7,384.5,0.691,0.691,0,0,0,291.9,148.2);
	this.instance_11.alpha = 0.711;

	this.instance_12 = new lib.Path_182();
	this.instance_12.parent = this;
	this.instance_12.setTransform(285.7,384.5,0.691,0.691,0,0,0,300,152.3);
	this.instance_12.alpha = 0.672;

	this.instance_13 = new lib.Path_183();
	this.instance_13.parent = this;
	this.instance_13.setTransform(285.8,384.7,0.691,0.691,0,0,0,308.3,156.5);
	this.instance_13.alpha = 0.621;

	this.instance_14 = new lib.Path_184();
	this.instance_14.parent = this;
	this.instance_14.setTransform(285.8,384.7,0.691,0.691,0,0,0,316.4,160.7);
	this.instance_14.alpha = 0.57;

	this.instance_15 = new lib.Path_185();
	this.instance_15.parent = this;
	this.instance_15.setTransform(285.9,384.8,0.691,0.691,0,0,0,324.6,164.8);
	this.instance_15.alpha = 0.52;

	this.instance_16 = new lib.Path_186();
	this.instance_16.parent = this;
	this.instance_16.setTransform(285.9,384.9,0.691,0.691,0,0,0,332.8,169.1);
	this.instance_16.alpha = 0.48;

	this.instance_17 = new lib.Path_187();
	this.instance_17.parent = this;
	this.instance_17.setTransform(286,385,0.691,0.691,0,0,0,341.1,173.2);
	this.instance_17.alpha = 0.43;

	this.instance_18 = new lib.Path_188();
	this.instance_18.parent = this;
	this.instance_18.setTransform(286.1,385,0.691,0.691,0,0,0,349.3,177.3);
	this.instance_18.alpha = 0.379;

	this.instance_19 = new lib.Path_189();
	this.instance_19.parent = this;
	this.instance_19.setTransform(286.1,385.1,0.691,0.691,0,0,0,357.4,181.5);
	this.instance_19.alpha = 0.328;

	this.instance_20 = new lib.Path_190();
	this.instance_20.parent = this;
	this.instance_20.setTransform(286.1,385.2,0.691,0.691,0,0,0,365.6,185.7);
	this.instance_20.alpha = 0.289;

	this.instance_21 = new lib.Path_191();
	this.instance_21.parent = this;
	this.instance_21.setTransform(286.2,385.2,0.691,0.691,0,0,0,373.9,189.8);
	this.instance_21.alpha = 0.238;

	this.instance_22 = new lib.Path_192();
	this.instance_22.parent = this;
	this.instance_22.setTransform(286.2,385.4,0.691,0.691,0,0,0,382,194.1);
	this.instance_22.alpha = 0.191;

	this.instance_23 = new lib.Path_193();
	this.instance_23.parent = this;
	this.instance_23.setTransform(286.3,385.4,0.691,0.691,0,0,0,390.2,198.2);
	this.instance_23.alpha = 0.141;

	this.instance_24 = new lib.Path_194();
	this.instance_24.parent = this;
	this.instance_24.setTransform(286.3,385.5,0.691,0.691,0,0,0,398.4,202.3);
	this.instance_24.alpha = 0.102;

	this.instance_25 = new lib.Path_195();
	this.instance_25.parent = this;
	this.instance_25.setTransform(286.4,385.6,0.691,0.691,0,0,0,406.7,206.5);
	this.instance_25.alpha = 0.051;

	this.shape_131 = new cjs.Shape();
	this.shape_131.graphics.f("rgba(255,255,255,0)").s().p("A5OeUQroifo+kkQo+kjk7l6QlGmHAAmtQAAmsFGmHQE7l6I+kjQI+kjLoigQMDimNLAAQNMAAMCCmQLoCgI/EjQI9EjE7F6QFHGHAAGsQAAGtlHGHQk7F6o9EjQo/EkroCfQsCCmtMAAQtLAAsDimg");
	this.shape_131.setTransform(286.4,385.6,0.691,0.691);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_131},{t:this.instance_25},{t:this.instance_24},{t:this.instance_23},{t:this.instance_22},{t:this.instance_21},{t:this.instance_20},{t:this.instance_19},{t:this.instance_18},{t:this.instance_17},{t:this.instance_16},{t:this.instance_15},{t:this.instance_14},{t:this.instance_13},{t:this.instance_12},{t:this.instance_11},{t:this.instance_10},{t:this.instance_9},{t:this.instance_8},{t:this.instance_7},{t:this.instance_6},{t:this.shape_130},{t:this.shape_129},{t:this.shape_128},{t:this.shape_127},{t:this.shape_126},{t:this.shape_125},{t:this.shape_124},{t:this.shape_123},{t:this.shape_122},{t:this.shape_121},{t:this.shape_120},{t:this.shape_119},{t:this.shape_118},{t:this.shape_117},{t:this.shape_116},{t:this.shape_115},{t:this.shape_114},{t:this.shape_113},{t:this.shape_112},{t:this.shape_111},{t:this.shape_110},{t:this.shape_109},{t:this.shape_108},{t:this.shape_107},{t:this.shape_106},{t:this.shape_105},{t:this.shape_104},{t:this.shape_103},{t:this.shape_102},{t:this.shape_101},{t:this.shape_100},{t:this.shape_99},{t:this.shape_98},{t:this.shape_97},{t:this.shape_96},{t:this.shape_95},{t:this.shape_94},{t:this.shape_93},{t:this.shape_92},{t:this.shape_91},{t:this.shape_90},{t:this.shape_89},{t:this.shape_88},{t:this.shape_87},{t:this.shape_86},{t:this.shape_85},{t:this.shape_84},{t:this.shape_83},{t:this.shape_82},{t:this.shape_81},{t:this.shape_80},{t:this.shape_79},{t:this.shape_78},{t:this.shape_77},{t:this.shape_76},{t:this.shape_75},{t:this.shape_74},{t:this.shape_73},{t:this.shape_72},{t:this.shape_71},{t:this.shape_70},{t:this.shape_69},{t:this.shape_68},{t:this.shape_67},{t:this.shape_66},{t:this.shape_65},{t:this.shape_64},{t:this.shape_63},{t:this.shape_62},{t:this.shape_61},{t:this.shape_60},{t:this.shape_59},{t:this.shape_58},{t:this.shape_57},{t:this.shape_56},{t:this.shape_55},{t:this.shape_54},{t:this.shape_53},{t:this.shape_52},{t:this.shape_51},{t:this.shape_50},{t:this.shape_49},{t:this.shape_48},{t:this.shape_47},{t:this.shape_46},{t:this.shape_45},{t:this.shape_44},{t:this.shape_43},{t:this.shape_42},{t:this.shape_41},{t:this.shape_40},{t:this.shape_39},{t:this.shape_38},{t:this.shape_37},{t:this.shape_36},{t:this.shape_35},{t:this.shape_34},{t:this.shape_33},{t:this.shape_32},{t:this.shape_31},{t:this.shape_30},{t:this.shape_29},{t:this.shape_28},{t:this.shape_27},{t:this.shape_26},{t:this.shape_25},{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(286,265.5,572.8,531.1);
// library properties:
lib.properties = {
	width: 572,
	height: 531,
	fps: 24,
	color: "#FFFFFF",
	opacity: 1.00,
	manifest: [],
	preloads: []
};




})(lib = lib||{}, images = images||{}, createjs = createjs||{}, ss = ss||{}, AdobeAn = AdobeAn||{});
var lib, images, createjs, ss, AdobeAn;