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


(lib.Tween31 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#80CEFF").s().p("A2FN0QgWgRABgnQAAgoAVgpQAVgoAegRMAqlgYjQAegRAVAQQAVAPAAAoQAAAogVApQgVAogeARMgqlAYjQgQAJgNAAQgMAAgKgHg");
	this.shape.setTransform(-2.2,-0.6,0.294,0.294);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#80CEFF").s().p("AlWEKQgWgQAAgoQABgoAVgoQAVgpAegRIJHlQQAegRAWAQQAUAQAAAoQAAAogVAoQgVApgeARIpHFQQgPAJgNAAQgNAAgKgIg");
	this.shape_1.setTransform(-33.6,33.2,0.294,0.294);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#80CEFF").s().p("AoZF6QgWgQAAgoQAAgoAWgoQAUgpAfgRIPOowQAdgRAWAQQAVAQAAAoQAAAngVApQgVAogeARIvOIxQgQAJgNAAQgMAAgKgIg");
	this.shape_2.setTransform(23.2,-29,0.294,0.294);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#80CEFF").s().p("AsGICQgWgQABgoQAAgoAVgoQAVgoAegRIWntCQAegRAVAQQAVAQAAAoQAAAogVAoQgVApgeARI2nNBQgQAJgNAAQgMAAgKgIg");
	this.shape_3.setTransform(-20.9,-3.5,0.294,0.294);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#CCF1FF").s().p("An4JTQgTgFgLgSQgHgMAAgNIAAngQAAgjASgfQAQgdAegRIOvogQASgLAUAFQAVAGAKASQAHAMAAANIAAMdIiaiaItVHuQgMAGgNAAQgGAAgIgCg");

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-54.2,-59.7,108.4,119.5);


(lib.Tween30 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#F9B944").s().p("AgZIRQiIhRgph+QgUhBAPhLQAKgrAihVQAhhPAHgnQAKhAgcgyQgig8hvgoQg0gTgTgMQgggUgGggQgNg+BDhGQBEhHBYgNQBggPBZBBQBSA7AfBXQAUA5gTBQQgUBQASA3QAQAwAlAjQAYAWAzAdQA3AhAWASQAnAhAUAtQAsBngqCAQgsCEhmAtQgsATgvAAQhOAAhYg0g");
	this.shape.setTransform(0,0,0.294,0.294);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#F78C7E").s().p("AhVDPQhWgjgjhXQgkhVAkhVQAjhWBWgjQBVgjBWAjQBVAkAkBVQAkBVgkBVQgkBXhVAjQgrASgrAAQgqAAgrgSg");
	this.shape_1.setTransform(-4.7,-8.9,0.294,0.294);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-11.6,-17,23.4,34.1);


(lib.Tween29 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AhcBKQgKgKAAgOQAAgIADgHQAEgHAFgEQAPgNAUgOIAmgbIBBguQALgJAOACQAOACAJAMQAIALgCAOQgCAOgLAJQgdAVgmAaIgjAZQgTAOgNALQgKAIgMAAQgPAAgKgKg");
	this.shape.setTransform(6.8,0.8);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#F78C7E").s().p("AiSCNQhjgghDhWQgWgbgQgdIgMgbQgKgeAOgbQAOgcAegKQAcgJAaAMQAbAMALAbQASAoAgAeQAhAeApANQBDAVBYgXQBZgZBphDQAagRAfAGQAeAHARAaQARAagHAfQgHAdgaARQjHCBijAAQg9AAg3gTg");
	this.shape_1.setTransform(-5.4,5.2,0.294,0.294);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#F78C7E").s().p("Ak/BlQg4gZgkgdQgXgUgDgeQgDgfAUgYQAUgYAfgCQAfgDAYAUQAQANAfAPQA5AbBFAJQDWAaD5igQAagRAfAHQAeAHARAaQARAagHAeQgGAegbARQj6ChjoAAQiBAAhvgxg");
	this.shape_2.setTransform(5.3,-3.9,0.294,0.294);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#6CACE6").s().p("AAQEAQgWgCgPgTIjUkMQgOgTADgYQADgYASgOICliCQATgOAXACQAXAEAPASIDTEMQAPATgDAXQgDAYgSAOIilCDQgQAMgUAAIgHgBg");
	this.shape_3.setTransform(-10.6,-2.3,0.294,0.294);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#F78C7E").s().p("AhMB2QgxgfgMg5QgMg5AggxQAfgxA5gMQA5gMAxAgQAxAgAMA5QAMA4ggAxQggAxg5AMQgPADgOAAQgoAAgkgXg");
	this.shape_4.setTransform(-7.2,-4.7,0.294,0.294);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#F78C7E").s().p("AhMB2QgxgggMg5QgNg4AhgxQAfgxA5gMQA5gNAxAgQAxAgAMA5QAMA5gfAxQggAxg6AMQgPAEgOAAQgoAAgkgYg");
	this.shape_5.setTransform(-14,0.3,0.294,0.294);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-18.1,-9.8,36.3,19.7);


(lib.Tween28 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#3F506E").s().p("ACkCzQgJgKgcguQg1hWg0gHQgTgDgYALQgfAOggAEQg1AFgxgLQg8gOgNghQgRgnAug8QAug7BDgcQBFgdBPASQAuALAmAWQBKApAqBLQAtBOgOBLQgGAfgOAaQgSAigWACIgDABQgRAAgSgXg");
	this.shape.setTransform(-7,-11.9,0.294,0.294);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#F78C7E").s().p("AgbA8QgZgNgJgZQgJgZAMgYQALgZAagJQAYgJAZAMQAZALAJAaQAJAZgMAYQgLAZgaAJQgLAEgLAAQgNAAgOgGg");
	this.shape_1.setTransform(-7.5,-9.9);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#3F506E").s().p("AC8JnQh1g3gvhkQgUgsAIg7QALhMgLg8QgWh5hLhpQhUh1huglQgfgKhGgHQgwgFgfgaQgtgngQhDQgOg/AOg9QAShOA/g4QA6gzBKgQQBkgVBjA5QBWAxAvBQQAWAmAKA/QAKA5AeApQAkAwBCAdQBCAdAdAoQAiAxgBBVQgBBdAiA8QAcAwA7AqQA1AlAPArQAaBIgdBVQgeBYhGAqQgwAcg3AAQg5AAhAgdg");
	this.shape_2.setTransform(0,0,0.294,0.294);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-15.5,-18.9,31,37.8);


(lib.Tween27 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#CCF1FF").s().p("AkQINQgigjAAgwQAAgrAcggQCPiqBej2QBCivAyj0QAMgvApgaQAqgZAvALQAtALAZAnQAZAmgHAuQg5EPhLDCQhrEVilDEQgRAUgXALQgYALgaAAQgwAAgjgig");
	this.shape.setTransform(3.5,-3.7,0.294,0.294);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#F78C7E").s().p("AhMB2QgxgggMg5QgMg4AfgxQAggxA5gMQA5gNAxAgQAxAgAMA5QAMA5ggAxQggAxg5AMQgPAEgOAAQgoAAgkgYg");
	this.shape_1.setTransform(-8.3,15.9,0.294,0.294);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#F78C7E").s().p("AifCmQgWgWAAgfQAAgdAVgWIDVjiQAVgWAfgBQAfgBAXAVQAWAWABAeQABAfgVAXIjWDiQgWAXggAAQgfAAgWgWg");
	this.shape_2.setTransform(-5.2,12.6,0.294,0.294);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-12.4,-20.1,24.9,40.2);


(lib.Tween26 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#3F506E").s().p("AgrDPQgWgUgGgQQgGgRARgDQBAgLAPgiQAMgcgZgcQgXgbgfAFQgjAGgMA0QgHAegNg7QgKgwgDgmQgCgjgdgJQgWgHgkAJQgOADgKgGQgNgHgEgNQgEgNAHgNQAlhEBLgkQBHgiBRAFQBTAFA+AsQBEAvAWBQQApCVhDBgQg7BVhoACIgBAAQguAAgzgwg");
	this.shape.setTransform(0.5,-2.8,0.294,0.294);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#F78C7E").s().p("AhVDPQhWgjgjhWQgkhWAkhVQAjhWBWgjQBVgkBWAkQBVAjAkBWQAjBVgjBWQgkBWhVAjQgrASgrAAQgqAAgrgSg");
	this.shape_1.setTransform(-1.5,-0.9,0.294,0.294);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#F5575A").s().p("AAmEGQgaAAgUgRQgUgRgGgaIhNl1QgGgeARgaQARgaAfgGQAegHAZARQAaASAGAeIBNF1QAGAfgRAaQgRAZgeAHIgPABg");
	this.shape_2.setTransform(-0.4,2.6,0.294,0.294);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-8.1,-10.2,16.3,20.6);


(lib.Tween25 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#F78C7E").s().p("AgtCFQg4gTgZg1Qgag0AUg2QATg4A0gZQA1gaA2AUQA4ATAZA1QAZA0gTA3QgTA3g1AZQgdAPgfAAQgWAAgYgJg");
	this.shape.setTransform(-17.5,4.7,0.294,0.294);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#CCF1FF").s().p("AmkEaQgwABgjghQgjgigBgwQgBgxAhgjQAigjAwgBIAtAAICXABQA8gBAXgEQAJgBAFgDQAFgDAUgSQBFg6BJgwQCEhVDThkQAtgTAtASQAtATASAtQASApgQArQgPArgoAVQjABbh2BLQhCAqg7AyQhBA5g0AOQg1APiQAAg");
	this.shape_1.setTransform(5.8,-0.6,0.294,0.294);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#F78C7E").s().p("AkCA5QgWgXAAgeQAAgfAVgVQAWgXAfAAIGbgGQAfAAAXAVQAWAVAAAgQABAegWAWQgVAXgfAAImcAGIgCAAQgeAAgWgVg");
	this.shape_2.setTransform(-9.4,4.3,0.294,0.294);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-21.6,-8.9,43.3,17.8);


(lib.Tween24 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#F78C7E").s().p("Ag6CAQg1gYgVg3QgUg2AZg1QAYg1A3gVQA2gUA1AZQA1AYAUA3QAVA2gZA1QgYA1g3AUQgZAKgYAAQgdAAgdgOg");
	this.shape.setTransform(16.2,-7.3,0.294,0.294);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#507FBC").s().p("AnhDdQgigiAAgxQAAgrAcggQAcghArgHQCrgaC9gTIBCgHQAYgDAMgFQAPgGAcgTQAUgNA1gnQBZhBBRg3QAngbAwAIQAwAJAbAoQAcAogIAvQgJAwgoAcIAAAAIimB0Qh0BUgvATQgzAVh3AMQieAOi7AdIgTACQgwgBgjgig");
	this.shape_1.setTransform(-5.2,4,0.294,0.294);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#F78C7E").s().p("AjZCwQgWgWAAgfQAAgRAIgQQAIgQAOgLIFJj2QAZgSAfAEQAeAFATAYQATAZgFAfQgEAfgZASIlJD2QgVAPgYAAQgfAAgWgWg");
	this.shape_2.setTransform(11.4,-3.7,0.294,0.294);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-20.3,-11.4,40.7,23);


(lib.Tween23 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#3F506E").s().p("AiDCFQg3g3AAhOQAAhMA3g3QA2g3BNAAQBNAAA3A3QA3A3AABMQAABOg3A3Qg3A2hNAAQhNAAg2g2g");
	this.shape.setTransform(-2.9,-9.2,0.294,0.294);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#3F506E").s().p("AimBYQhMghAOgwQAMgoBIgnQBFgmBSgOQBYgPA0AVQAZAKAeAmQAfAngCAaQgFBah0AiQgrAMgvAAQhWAAhkgrg");
	this.shape_1.setTransform(-1.6,-4.2,0.294,0.294);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#F78C7E").s().p("AhoDGQhSgsgbhYQgchYAshSQArhSBZgbQBYgcBSAsQBSArAbBZQAcBYgsBSQgrBShZAbQgiALggAAQg1AAgzgbg");
	this.shape_2.setTransform(1.4,0.9,0.294,0.294);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#F5575A").s().p("Ah4D6QgWgWAAgfQAAgLAEgNICImKQAJgdAcgNQAcgOAdAKQAeAKANAcQAOAcgKAdIiIGJQgHAXgTAOQgUAOgYAAQgfAAgWgWg");
	this.shape_3.setTransform(-0.6,6.7,0.294,0.294);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#3F506E").s().p("Ai4C5QhOhMAAhtQAAhsBOhMQBMhOBsAAQBtAABNBOQBMBMAABsQAABthMBMQhNBOhtAAQhrAAhNhOg");
	this.shape_4.setTransform(0.8,-0.6,0.294,0.294);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-8.4,-14.6,16.9,29.3);


(lib.Tween22 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#F78C7E").s().p("AhUBxQgvgkgIg6QgIg5AkguQAjgvA6gIQA5gIAuAkQAvAjAIA6QAIA5gkAuQgjAvg6AIIgUABQgtAAgmgcg");
	this.shape.setTransform(12.9,3.8,0.294,0.294);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#6CACE6").s().p("AibGbQiFhWgxjaQgeiBgLkrIgBgaQAAgwAhgjQAigjAwgBQAwAAAiAgQAjAgACAvIABAaQAJDjAQBmQAbCtBBAqQAmAZBLgMQA5gJBJgeQAtgTAtASQAtASATAtQATAsgRAtQgSAtgtAUIgEABQiVA8hzAAIgJABQhlAAhWg4g");
	this.shape_1.setTransform(-5.8,0,0.294,0.294);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#F78C7E").s().p("AjwCKQgWgWAAgfQAAgWAMgTQAMgSAUgJIF3ipQAcgNAdALQAeALAMAdQANAcgLAdQgLAdgcANIl3CoQgOAHgRAAQgfAAgWgWg");
	this.shape_2.setTransform(7.4,6.2,0.294,0.294);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-16.9,-13.7,34,27.4);


(lib.Tween21 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#F20C30").s().p("Aj+EPQghgpgXg7Qg+ifA8iBQAihKBFgyQBDgwBQgNQB6gTBuBKQBhBAAtBkQARAnAJA2QAMBMgXAeQgtA6hcAKQhpAMhMhHQhvhmgVACQgmAFgICIQgEBJgEAVQgHAsgTADIgCAAQgTAAgegkg");
	this.shape.setTransform(0,-1.1,0.294,0.294);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#F78C7E").s().p("AhHDuQhigdgxhcQgxhbAehhQAehjBagwQBbgxBiAeQBiAdAxBcQAxBbgeBhQgeBjhaAwQg4Aeg8AAQgjAAgmgLg");
	this.shape_1.setTransform(0.2,2.8,0.294,0.294);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-10,-10,20.1,20.1);


(lib.Tween20 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#F5575A").s().p("AhRCSQgWgWAAgfQAAgJADgNIA7i6QAJgdAcgOQAagPAeAJQAdAKAPAbQAOAcgJAdIg7C6QgHAXgUAPQgTAOgYAAQgfAAgWgWg");
	this.shape.setTransform(0,0,0.294,0.294);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-3,-4.9,6.1,9.9);


(lib.Tween19 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("Aj+KZQh1gQgBhKQgBlUAMiwQACgfAkl1QAOiWBzhXQBkhLCOgJQCHgJBgAzQBmA3gJBZQgWDqgqEvQgsE+gdB7QgGAbgdAaQgeAcgzAWQgPAGgxARQgxAQgRAEQhlAZhRAAQggAAgdgEg");
	this.shape.setTransform(0,0.1,0.294,0.294);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-10.9,-19.6,21.9,39.3);


(lib.Tween18 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("ADqI9IgRgMQithzhOhCQhshZhBhhQhFhogwiXQgviVgpj0QgJgvAbgoQAcgoAwgJQAvgJAoAcQAoAbAJAwIABADQAlDbAlB8QAnCCA5BUQAzBNBaBJQA6AvCeBpIARAMQApAbAJAvQAJAwgbAoQgQAZgaANQgZAOgeAAIABABQgkAAgdgUg");
	this.shape.setTransform(-3.7,-2.1,0.294,0.294);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#F78C7E").s().p("AguCFQg3gTgZg1QgZg1ATg2QATg3A1gZQA1gaA2AUQA3ATAaA1QAZA1gUA2QgTA3g1AaQgeAOgeAAQgXAAgYgJg");
	this.shape_1.setTransform(11.7,15.3,0.294,0.294);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-15.9,-19.5,31.8,39);


(lib.Tween17 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#F67185").s().p("AktC1Qh8hLAAhqQAAhpB8hLQB9hLCwAAQCwAAB9BLQB9BLAABpQAABqh9BLQh9BLiwAAQiwAAh9hLg");
	this.shape.setTransform(0,-1.6,0.294,0.294);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#E24A8C").s().p("AhGD8QgfgDgjgHQiAgahQhCQhRhDAAhTIAAhoIAlAAQAlgwBBgkQBCgkBUgRQAjgHAfgDQAhgEAlAAQAmAAAgAEQAgADAjAHQBUARBCAkQBCAjAkAxIAlAAIAABoQAABThRBDQhQBCiBAaQgaAGgoAEQgoAEgeAAQggAAgmgEg");
	this.shape_1.setTransform(0,1.5,0.294,0.294);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-12.5,-9,25.1,18.1);


(lib.Tween16 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#F78C7E").s().p("AhMB2QgxgggMg5QgMg4AfgxQAggxA5gMQA5gMAxAfQAxAgAMA5QANA5ghAxQgfAxg5AMQgQAEgOAAQgoAAgkgYg");
	this.shape.setTransform(8,19.6,0.294,0.294);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#CCF1FF").s().p("ADmLWQggABgcgQQgbgRgQgcQhZihhpiVQhEhhghg8QgshQgdhcQg7i8gtm4QgEgwAgglQAgglAwgDQAvgEAkAeQAkAdAGAuQAqGfAzCjQAXBNAmBCQAXAqA7BVQByCgBeCrQAXAqgNAvQgNAugrAYQgaAOgeAAg");
	this.shape_1.setTransform(-1.9,-2.4,0.294,0.294);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-12.1,-23.7,24.3,47.5);


(lib.Tween15 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#F78C7E").s().p("AgSCMQg6gIgjgvQgkguAIg5QAIg6AvgjQAugkA5AIQA6AIAjAvQAkAugIA5QgIA6gvAjQgmAdgtAAIgUgBg");
	this.shape.setTransform(-20.2,10.2,0.294,0.294);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#F78C7E").s().p("Ai7BUQgWgWgBgfQAAgaARgUQAQgVAagFIEOg+QAfgHAaAQQAaARAHAeQAHAfgRAZQgQAagfAHIkOA+IgQACQgfAAgWgWg");
	this.shape_1.setTransform(-16.3,9.3,0.294,0.294);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#507FBC").s().p("Ap8GcQgigigBgwQAAglAUgeQAVgfAigNQG0iuC/h0QBjg8BthWQBGg3CoiPQAlggAwADQAxADAgAlQAgAkgDAxQgDAwglAgIgDADQisCShKA5QhzBahqBBQjXCFnIC2QgWAIgWAAIgDAAQguAAgighg");
	this.shape_2.setTransform(4.7,-1.2,0.294,0.294);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-24.3,-14.3,48.8,28.7);


(lib.Tween14 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#507FBC").s().p("Ah/BXQhFgEgMgdQgMgdA1gjQA1gkBXgWQBVgXBGAFQBFAEAMAdQAMAcg1AkQg1AkhXAWQhHATg8AAIgYgBg");
	this.shape.setTransform(-19.3,-90.3,0.294,0.294);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.lf(["#6CACE6","#DFF3FF"],[0,1],-10.7,4.6,43.7,-10.8).s().p("AhGE3QgngCgWgLQgVgLgBgQIhynhIGkhkIBzHiIAAADQAEAcgvAfQg2AkhWAXQhIASg8AAIgXAAg");
	this.shape_1.setTransform(-17.6,-82.6,0.294,0.294);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#80CEFF").s().p("AklAvQB7gbBwgmQB8grA/gpIA/gsIgBACIBnBMIgZATQhZA9iFA1QiAAyiOAgg");
	this.shape_2.setTransform(-7,-66.9,0.294,0.294);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#507FBC").s().p("ABKO3QhYgsgZhgImk4hQCQggCAgyQCEg1BYg+IAZgTIGLZ6QAUBVgrBLQgqBMhTAaIgwAPQgpAOgoAAQg1AAgxgYg");
	this.shape_3.setTransform(-0.1,-40.3,0.294,0.294);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#80CEFF").s().p("ABiNGQgagegQgnInC6VIBoA6ICGEQQCcFHB3ERQF+NuiSAUQghAFgfAAQh8AAhFhPg");
	this.shape_4.setTransform(-4.1,-38.5,0.294,0.294);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.lf(["#FFFFFF","#DEEBF3"],[0,1],-40.1,0,40.2,0).s().p("AjyCmQiFgIgWg3QgWg2BlhEQBlhFClgrQCkgqCEAIQCEAJAWA2QAWA3hlBDQhkBFilArQiJAjhzAAIgsgBg");
	this.shape_5.setTransform(-15.7,-76.1,0.294,0.294);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.lf(["#80CEFF","#507FBC","#6CACE6"],[0,0.969,1],-9.1,10.3,105.8,-22.3).s().p("ADWdbQhukfhllUQhPkPgDgjMgNXg2gIMgi/MANWA2fIA8ErQBEFoAnEuQB+PKjSAnQgMACgNAAQjyAAlCtPg");
	this.shape_6.setTransform(0,1.3,0.294,0.294);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#3F506E").s().p("AAlFDIgyigIiSpVICJghICSJVIAcClQAWCmgkAHIgFAAQgpAAg3iRg");
	this.shape_7.setTransform(22.6,79.2,0.294,0.294);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-27.4,-92.8,54.9,185.8);


(lib.Tween13 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#3F506E").s().p("AAlAsQgZgcgpgSIglgNIgHhZIgsBZIikAAQAaioBwhCQBig5B4ApQB3AoA4BqQA+B2g6CJQgmBahwAmQgjAMgnAFIgeADQB2iWhRhag");
	this.shape.setTransform(0,0,0.294,0.294);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#F78C7E").s().p("AhBDWQhZgbgrhSQgshSAchYQAbhYBSgsQBSgrBYAbQBYAbAsBSQArBSgbBYQgbBZhSArQgyAbg1AAQggAAgjgLg");
	this.shape_1.setTransform(-0.8,0,0.294,0.294);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-8.2,-8.3,16.6,16.7);


(lib.Tween12 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#F5575A").s().p("AAYECQgTgNgHgXIiImJQgKgeAOgcQANgcAdgKQAegKAcAOQAcANAJAeICIGJQAKAegOAbQgOAcgdAKQgKAEgOAAQgYAAgUgOg");
	this.shape.setTransform(0,0,0.294,0.294);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-4.2,-8,8.5,16);


(lib.Tween11 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#F78C7E").s().p("AiCBRQg3ghAAgwQAAgvA3giQA2giBMAAQBNAAA2AiQA3AiAAAvQAAAwg3AhQg2AjhNgBQhMABg2gjg");
	this.shape.setTransform(0.2,-18,0.294,0.294);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.lf(["#6CACE6","#DFF3FF"],[0,1],-0.1,-38.2,0.2,24.6).s().p("AgRDTIgVgGIgWgIQgRgHgKgJQgKgJAAgIIgCiVQABh+AIgtQAFgdAfgSQAcgRAjACQAmACAYAXQAcAcAAAxIAAExQABAYgmAFIgTABQgbAAghgIg");

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-9.9,-21.9,19.9,43.8);


(lib.Tween10 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#F78C7E").s().p("AguCFQg3gTgag1QgZg1AUg2QATg3A1gZQA1gaA2AUQA3ATAZA1QAZA1gTA2QgTA3g1AZQgeAPgfAAQgWAAgYgJg");
	this.shape.setTransform(-16.3,5.9,0.294,0.294);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#507FBC").s().p("AnAEIQgigjAAgwQABgqAaggQAaggApgJQB4gYB4gTIA9gKQAZgFAJgEQAKgEA1gtQB9htCch0QAlgfAwAFQAxAEAfAmQAfAlgFAwQgFAxglAeIgJAHQiLBniCBwQhOBDgqATQgqAThvASQh+AUhpAVQgKACgNAAQgwAAgjgig");
	this.shape_1.setTransform(6.4,-1.3,0.294,0.294);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-20.4,-10,41,20.1);


(lib.Tween9 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#507FBC").s().p("AkQGlQgigjAAgwQAAgrAcggQC0jWA+hoQBKiAAli0QALgvApgaQApgaAvALQAuAKAaAoQAaAngIAvQguDchgCiQhGB2jADlQgjApg3AAQgxAAgigig");
	this.shape.setTransform(5,-4.3,0.294,0.294);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#F78C7E").s().p("AhMB2QgxgggMg5QgNg4AggxQAggxA5gMQA5gNAxAgQAxAgAMA5QAMA5ggAxQggAxg5AMQgPAEgOAAQgoAAgkgYg");
	this.shape_1.setTransform(-9.8,13.5,0.294,0.294);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#F78C7E").s().p("AjRC7QgWgWAAgfQAAgjAbgWIE4kLQAXgUAfACQAfADAUAXQAVAYgDAfQgCAfgYAUIk4ELQgVASgcAAQgfAAgWgWg");
	this.shape_2.setTransform(-5.2,9.6,0.294,0.294);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-13.9,-17.6,27.9,35.3);


(lib.Tween8 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#3F506E").s().p("AgrDPQgWgUgGgQQgGgQARgDQBAgLAPgiQANgdgZgcQgYgbgeAFQgjAGgNA0QgHAegNg7QgKgygDgkQgEg/hVAVQgMADgMgGQgNgGgEgOQgDgNAGgNQAlhEBMgkQBGgiBRAFQBTAFA+ArQBEAwAWBQQAqCVhEBgQg7BVhnACIgCAAQgtAAg0gwg");
	this.shape.setTransform(0.5,-0.5,0.294,0.294);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#F78C7E").s().p("AhVDPQhVgjgkhWQgjhWAjhUQAkhXBVgjQBVgkBWAkQBVAjAkBXQAkBUgkBWQgjBVhXAkQgqASgrAAQgqAAgrgSg");
	this.shape_1.setTransform(-1.5,1.4,0.294,0.294);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-8.1,-8,16.3,16);


(lib.Tween7 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#F78C7E").s().p("AgMAnQgRgGgHgPQgIgQAGgPQAFgQAQgIQAQgHAPAGQAQAFAHAQQAIAPgGAQQgGAQgPAIQgJAEgIAAQgGAAgHgDg");
	this.shape.setTransform(-6,-17);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#507FBC").s().p("ACDHsQgYgMgRgWQhAhVh1iVQhfh2gXgzQgYgzgViBQgVh/gXhxQgIgwAbgoQAcgnAwgJQAugIAnAaQAnAaALAuQAVBnAYCSQAJA7AFAUQAFAbAGAOQAIARAWAcIA6BKQBfB1BcB6QAdAngGAwQgHAwgnAdQgfAYgnAAIAAAAQgcAAgZgMg");
	this.shape_1.setTransform(1.4,6.4,0.294,0.294);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#F78C7E").s().p("AgPEFQgVgSgEgbIhCmWQgFgfASgZQASgZAegFQAfgFAYASQAZASAFAeIBDGWQAFAfgSAZQgSAZgfAFIgMABIAAABQgcAAgUgSg");
	this.shape_2.setTransform(-5,-11,0.294,0.294);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-10.1,-21.1,20.4,42.3);


(lib.Tween6 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#F78C7E").s().p("AjGBeIg0gVIBLiBIAZAJQAeAJAiACQBsAFBzhGQAbgQAeAHQAeAIAQAaQAQAbgHAeQgIAdgaAQQiRBXiMAAQhEAAg8gTg");
	this.shape.setTransform(4.5,0.6,0.294,0.294);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#F78C7E").s().p("AAqBrQg2gygigVQgSgNgbgKQgdgMgEgCQgZgOAbgoQAggxA5gMQA4gNAxAgQAxAgAMA5QAMA5ggAxQgOAXgVAAQgQAAgUgOg");
	this.shape_1.setTransform(-4.3,-0.3,0.294,0.294);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#FFFFFF").s().p("AhqA/QgtgaAAglQAAgkAtgaQAsgaA+AAQA/AAAsAaQAtAbAAAjQAAAlgtAaQgsAag/AAQg+AAgsgag");
	this.shape_2.setTransform(-7.3,0.2,0.294,0.294);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-11.7,-3.8,23.6,7.8);


(lib.Tween3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#F78C7E").s().p("AhwBxQgvgvAAhCQAAhBAvguQAvgwBBABQBCgBAvAwQAvAuAABBQAABCgvAvQgvAvhCgBQhBABgvgvg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-15.9,-15.9,32,31.9);


(lib.Tween2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#507FBC").s().p("ABzHDQhqAAh5hRQhyhMhZh3QgbgoAJgwQAJgvAogbQAmgYAtAGQAsAFAdAjQA6BNBHA1QA9AsAnAIQAHgwgYhbQgniOhsjWQgXgrAOguQAOgvArgWQAqgXAuAOQAvAOAXArIABADQCcEvAdDBQAUB+gjBUQgbA/g4AjQg0Agg8AAIgEAAg");
	this.shape.setTransform(0,10.1);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#F78C7E").s().p("AgFCfQhCgCgtgwQgtgxADhBQAChCAwgtQAxgtBBADQBCACAtAwQAtAxgCBBQgDBCgxAtQguArg+AAIgFgBg");
	this.shape_1.setTransform(-1.5,-39.2);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-33.6,-55.2,67.3,110.5);


(lib.Path_251 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#E5FFFB").s().p("Ah0MYIzcrYQgcgQgIgfQgIgeAQgcQAKgSASgKITjrSQA0geA8AAQA9AAA1AeITcLYQAcAQAIAfQAJAegQAcQgLASgSAKIzjLSQg0Aeg8AAQg9AAg1geg");
	this.shape.setTransform(140,82.2);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Path_251, new cjs.Rectangle(0,0,280,164.5), null);


(lib.Tween5 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Tween3("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(-18.7,75.1);

	this.shape = new cjs.Shape();
	this.shape.graphics.f("#507FBC").s().p("AkiLnQgjgiAAgwQAAlmCAlsQBKjSCik5IA+h4QASgtAtgSQAtgTAtATQAsATATAsQASAtgSAtIgGANQgSAlgvBZQiYEkhDC9Qh2FPAAFAQAAAwgiAiQgiAigxABQgwAAgigjg");
	this.shape.setTransform(2.1,-13.2);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape},{t:this.instance}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-34.7,-90.9,69.4,182);


(lib.Speechbubble = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Tween31("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(110.3,85.1,0.201,0.201,0,0,0,56.1,25.4);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({regY:25.3,scaleX:1,scaleY:1},24).to({startPosition:0},25).to({regY:25.4,scaleX:0.2,scaleY:0.2},10).wait(72));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(88.1,67.9,21.8,24.1);


(lib.screendata = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 3 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AmfpFIM/nVIAAazIqZGCg");
	mask.setTransform(17.7,91.4);

	// Layer 1
	this.instance = new lib.Tween32("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(27.6,139.7);

	var maskedShapeInstanceList = [this.instance];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.instance).to({y:11.3},64).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,55.1,196.5);


(lib.ScratchingArm = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Tween2("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(10.8,72,1,1,0,0,0,-22.9,16.8);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({regX:-22.8,regY:16.9,rotation:15,x:10.9,y:72.1},9).to({regX:-22.9,regY:16.8,rotation:0,x:10.8,y:72},9).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,67.3,110.5);


(lib.Readerhead = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Tween28("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(8,14.5,1,1,0,0,0,-7.5,-4.4);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({regY:-4.3,rotation:-7.4,y:14.6},13).to({regY:-4.4,rotation:0,y:14.5},13).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,31,37.9);


(lib.MicroscopeMan = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// front arm
	this.instance = new lib.Tween16("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(12.7,31.9,1,1,0,0,0,-7.5,-18.6);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({x:36.6,y:63},10).to({startPosition:0},14).to({x:12.7,y:31.9},8).to({startPosition:0},32).to({x:36.6,y:63},9).to({x:12.7,y:31.9},14).wait(37));

	// pill
	this.instance_1 = new lib.Tween17("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(39.1,64.4);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({x:62.2,y:98.9},10).to({startPosition:0},54).to({startPosition:0},9).to({x:39.1,y:64.4},14).wait(37));

	// head
	this.instance_2 = new lib.Tween21("synched",0);
	this.instance_2.parent = this;
	this.instance_2.setTransform(21,19,1,1,0,0,0,-2.1,8.9);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).to({x:47.8,y:65.2},10).to({startPosition:0},14).to({x:21,y:19},8).to({startPosition:0},32).to({x:47.8,y:65.2},9).to({x:21,y:19},14).wait(37));

	// neck
	this.instance_3 = new lib.Tween20("synched",0);
	this.instance_3.parent = this;
	this.instance_3.setTransform(19.5,24,1,1,0,0,0,-0.8,2.6);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).to({rotation:60,x:44.3,y:59.6},10).to({startPosition:0},14).to({rotation:0,x:19.5,y:24},8).to({startPosition:0},32).to({rotation:60,x:44.3,y:59.6},9).to({rotation:0,x:19.5,y:24},14).wait(37));

	// body
	this.instance_4 = new lib.Tween19("synched",0);
	this.instance_4.parent = this;
	this.instance_4.setTransform(14.6,56.9,1,1,0,0,0,-2.6,15.6);

	this.timeline.addTween(cjs.Tween.get(this.instance_4).to({regY:15.5,rotation:91.5,x:12.9,y:54.7},10).to({startPosition:0},14).to({regY:15.6,rotation:0,x:14.6,y:56.9},8).to({startPosition:0},32).to({regY:15.5,rotation:91.5,x:12.9,y:54.7},9).to({regY:15.6,rotation:0,x:14.6,y:56.9},14).wait(37));

	// back arm
	this.instance_5 = new lib.Tween18("synched",0);
	this.instance_5.parent = this;
	this.instance_5.setTransform(26.1,27.3,1,1,0,0,0,-9.3,-16.2);

	this.timeline.addTween(cjs.Tween.get(this.instance_5).to({x:47.4,y:60.2},10).to({startPosition:0},14).to({x:26.1,y:27.3},8).to({startPosition:0},32).to({x:47.4,y:60.2},9).to({x:26.1,y:27.3},14).wait(37));

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#3F506E").s().p("AjXEaQgjgiAAgwIAAlaQAAgpAbghQAaggApgIIEAg1QAwgKAoAbQApAbAJAvIACARIAKDOQACAegNAbQgNAbgYARIkLDBQgfAWgkAAQgxAAgigjgAgPgyIAAAWIAdgWIAAgHg");
	this.shape.setTransform(15.5,55.5,0.294,0.294);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#3F506E").s().p("AhdjJQAAgOAKgKQAKgKAOAAIABAAQAOAAAKAKQAKAKgBAPIAAHBIhEAtgAAZAWQAAhMgEgoQgGg6gVhkQgCgOAIgMQAGgMAOgDQAOgCAMAHQAMAIADANQAWBpAGA/QAFAqAABPIAABJIhDAqIgChzg");
	this.shape_1.setTransform(17.6,81.5);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).wait(124));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(6.3,0,45.4,111);


(lib.Manonstool = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 4
	this.instance = new lib.Tween9("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(41.4,40.9,1,1,0,0,0,10.4,-15.2);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({startPosition:0},11).to({regX:10.5,rotation:15,x:41.6},4).to({regX:10.4,rotation:0,x:41.4},4).to({regX:10.5,rotation:15,x:41.6},4).to({regX:10.4,rotation:0,x:41.4},4).to({startPosition:0},43).to({rotation:38.5},7).to({startPosition:0},19).to({rotation:0},8).wait(28));

	// Layer 3
	this.instance_1 = new lib.Tween8("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(45,31.2,1,1,0,0,0,0,8);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({startPosition:0},11).to({regX:-0.1,regY:8.1,rotation:-30,y:31.3},4).to({regX:0,regY:8,rotation:0,y:31.2},4).to({regY:8.1,rotation:-45,x:45.1},4).to({regY:8,rotation:0,x:45},4).to({startPosition:0},40).to({regX:-0.1,rotation:-15,x:44.9,y:31.3},6).to({startPosition:0},31).to({regX:0,rotation:0,x:45,y:31.2},8).wait(20));

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#F5575A").s().p("AgID1QgUgRgGgaIhNl1QgGgfARgZQARgaAegGQAfgHAZARQAZARAHAfIBNF1QAGAfgRAaQgRAZgfAHIgPABQgaAAgUgRg");
	this.shape.setTransform(44.6,28,0.294,0.294);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#3F506E").s().p("AhnA9QgrgaAAgjQAAgjArgZQArgZA8ABQA9gBArAZQArAZAAAjQAAAjgrAaQgsAYg8AAQg8AAgrgYg");
	this.shape_1.setTransform(47.3,34.3,0.294,0.294);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#507FBC").s().p("AiHCbQhkhtAAhcQAAhaBAhBQBAhABbABQBgAABLAyQBSA4gBBWQAABtgtBoQg2B8hTABQhYgBhlhug");
	this.shape_2.setTransform(47.3,38.9,0.294,0.294);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.lf(["#6CACE6","#DFF3FF"],[0,1],3.3,-109,-7.7,75.5).s().p("Ai+KjQh3gQAAhMIgBuqQAAiZBXhXQBMhLB3gHQBugHBbA1QBgA4AQBbQAYCMACGFQABDLgEEBQAAAbghAcQgfAag2AYQgQAGgxARQgzAQgRAEQhmAahTAAQghAAgdgEg");
	this.shape_3.setTransform(47.3,54.4,0.294,0.294);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#3F506E").s().p("ApPIYQgighgCgvQgNksA8jQQA7jSCGh+QCViNDsgfQCFgRDiAVIBMAHQApADANgDQAvgLApAaQApAaALAvQALAwgZAoQgaApgvALIgKACQgjAHg0gCQgggBhMgIQi+gRhkAJQisAShjBeQi8C0AUHlQADAxghAjQghAkgxACIgFAAQgvAAghggg");
	this.shape_4.setTransform(30,87.7,0.294,0.294);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#507FBC").s().p("AhBDQQgbgbAAgnIAAkeQAAgmAdgbQAcgaAmABQAlABAaAaQAaAaABAlIAAEeQAAAngbAbQgbAbgnAAQglAAgcgbg");
	this.shape_5.setTransform(14.9,105.2,0.294,0.294);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#3F506E").s().p("AB4CcIAAgBQgdABgagPIj/iMQgegPgKgiQgJghARgfQAOgaAcgLQAbgLAdAJIEVBWQAtAOAWApQAWApgOAtQgLAkgeAWQgdAWgkAAIgCAAg");
	this.shape_6.setTransform(11.9,109.8,0.294,0.294);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#3F506E").s().p("AheD2Qg0gagigwQgdgnhFiEQghg/AVhFQAWhFBAgiQAegQAigDICZgQQBfgKBOA3QBPA2AXBdQAgCAg7BcQglA5hBAjQhCAjhHACIgGAAIgEAAQg4AAgygagAAlgkIhCAGQAeA3AJALIABABQAIAEATgIQAUgHAGgLQACgCgBgIQAAgKgEgQQgCgIgHgEQgGgDgGAAIgDAAg");
	this.shape_7.setTransform(47.3,70.4,0.294,0.294);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#3F506E").s().p("An6HGQghgfgEguQgUkGA0i0QA0i2B/hqQCDhtDFgSQDEgTEOBIQAvAMAZAqQAYAqgMAvQgNAvgqAYQgqAYgvgMQmhhuinCKQifCFAfGPQAEAwgfAlQggAlgwAEIgKAAQgtAAgigfg");
	this.shape_8.setTransform(39.7,81.2,0.294,0.294);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#507FBC").s().p("AhBDTQgcgbAAgnIAAkdQgBgnAbgcQAagdAngBQAmgBAcAaQAcAbACAmIAAEkQAAAngcAbQgbAcgnAAQgmAAgbgcg");
	this.shape_9.setTransform(27.2,95.2,0.294,0.294);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#3F506E").s().p("ABbDIIgFAAQgygDggglIi8jdQgWgbADgjQADgiAagXQAXgTAeAAQAegBAXASIDlC0QAlAcAGAvQAGAvgdAlQgQAUgYAMQgYALgaAAg");
	this.shape_10.setTransform(25.1,98.2,0.294,0.294);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#C2DBEE").s().p("AnGEaQi9h1AAilQAAikC9h0QC8h1EKAAQELAAC9B1QC9B0gBCkQABCli9B1Qi9B0kLAAQkKAAi8h0g");
	this.shape_11.setTransform(18.9,104.3,0.294,0.294);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#E5FFFB").s().p("AkiC0Qh5hKAAhqQAAhoB5hLQB4hLCqAAQCrAAB5BLQB4BLAABoQAABqh4BKQh5BLirgBQiqABh4hLg");
	this.shape_12.setTransform(48.5,76,0.294,0.294);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#6CACE6").s().p("AkiB0Qh5hKAAhpIAAh/IM3AAIAAB/QAABoh4BLQh5BLirAAQiqAAh4hLg");
	this.shape_13.setTransform(48.5,81.6,0.294,0.294);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#6CACE6").s().p("AggLAQgOgOAAgTIAA09QAAgTAOgOQAOgOASAAQATAAAOAOQAOAOAAATIAAU9QAAATgOAOQgOAOgTAAQgSAAgOgOg");
	this.shape_14.setTransform(40.4,97.5,0.294,0.294);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#6CACE6").s().p("AggLAQgOgNAAgUIAA09QAAgTAOgOQAOgOASAAQAUAAANAOQAOAOAAATIAAU9QAAAUgOANQgNAOgUAAQgSAAgOgOg");
	this.shape_15.setTransform(57.5,97.9,0.294,0.294);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#6CACE6").s().p("AggLAQgOgOAAgTIAA09QAAgTAOgOQAOgOASAAQAUAAANAOQAOAOAAATIAAU9QgBAUgNANQgOAOgTAAQgSAAgOgOg");
	this.shape_16.setTransform(48.9,102.8,0.294,0.294);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#C2DBEE").s().p("AkiC0Qh5hKAAhqQAAhoB5hLQB4hLCqAAQCrAAB5BLQB4BLAABoQAABqh4BKQh5BLirAAQiqAAh4hLg");
	this.shape_17.setTransform(48.5,117.6,0.294,0.294);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(132));

	// Layer 2
	this.instance_2 = new lib.Tween7("synched",0);
	this.instance_2.parent = this;
	this.instance_2.setTransform(48.6,36.8,1,1,0,0,0,6.5,15.6);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).to({rotation:-70,x:48.7,y:36.7},19).to({rotation:0,x:48.6,y:36.8},12).to({rotation:-138.3,y:36.6},13).to({startPosition:0},75).to({rotation:0,y:36.8},12).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,60.6,125.1);


(lib.Manbybooks = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 4
	this.instance = new lib.Tween26("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(36.1,19.4,1,1,0,0,0,1.1,9.1);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({rotation:-15},17).to({regX:1.2,rotation:-5.8,x:36.2},30).to({regX:1.1,regY:9.2,rotation:7.7,x:36.1},19).to({regY:9.1,rotation:0},13).wait(1));

	// Layer 2
	this.instance_1 = new lib.Tween27("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(32.2,27,1,1,0,0,0,9.7,-16.5);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({regX:9.6,regY:-16.4,rotation:-20,x:32.1,y:27.1},9).to({startPosition:0},27).to({regX:9.7,regY:-16.5,rotation:30,x:32.2,y:27},20).to({startPosition:0},6).to({regY:-16.4,rotation:-25.7},10).to({regY:-16.5,rotation:0},7).wait(1));

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#3F506E").s().p("AhnA8QgrgZAAgjQAAgjArgYQArgaA8AAQA9AAArAaQArAYAAAjQAAAjgrAZQgsAZg8AAQg8AAgrgZg");
	this.shape.setTransform(37.3,19.2,0.294,0.294);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#CCF1FF").s().p("AiHCbQhkhtAAhbQgBhbBAhAQBAhBBbAAQBhAABLAzQBRA4AABWQAABtgtBpQg2B7hSAAQhZAAhlhug");
	this.shape_1.setTransform(37.3,23.7,0.294,0.294);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#FFFFFF").s().p("Ai+KjQh3gPAAhMIgBuqQAAiaBXhWQBMhMB3gHQBugHBcA2QBfA4AQBaQAYCMACGFQABDLgEEBQAAAbghAcQgeAag3AYQgPAGgyARQgyARgSAEQhmAZhTAAQghAAgdgEg");
	this.shape_2.setTransform(37.3,39.2,0.294,0.294);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#3F506E").s().p("Ah0P5QgxgEgfgkQggglADgwIAFg5QA7shAgkaQAwmwBPkAQAPguArgWQAsgVAuAPQAsAPAWAqQAWApgNAtQhKDvguGkQgfEVg6MPIgEA5QgEAtggAgQgiAfguAAg");
	this.shape_3.setTransform(31.6,86.3,0.294,0.294);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#F78C7E").s().p("AhBDTQgcgbAAgnIAAkdQgBgnAbgcQAagdAngBQAmgBAcAaQAdAbABAnIAAEjQAAAngcAbQgbAcgnAAQgmAAgbgcg");
	this.shape_4.setTransform(28.4,112.9,0.294,0.294);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#3F506E").s().p("AB4CcQgdAAgagOIj+iMQgfgQgJghQgKgiARgeQAOgaAcgMQAcgLAcAJIEWBWQAsAOAXAqQAWAogOAtQgLAkgeAWQgfAWglAAg");
	this.shape_5.setTransform(25.4,117.6,0.294,0.294);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#3F506E").s().p("AAQEPQg6ABg0gaQg1gbgigwQgigyg/h4QgihAAWhFQAWhFBAgiQAegQAhgDICagQQBfgJBOA2QBPA3AYBcQAgCBg8BbQglA6hBAjQhBAjhIACgAAlglIhCAHQAdA1AKANIAAABQAIADATgHQAUgIAHgKQABgCAAgIQAAgLgEgPQgCgIgHgEQgGgEgHAAIgCAAg");
	this.shape_6.setTransform(37.2,55.2,0.294,0.294);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#3F506E").s().p("AhVBoQgbgng+h2QgFgJgCgMQgCgYAPgSQAPgTAYgCICagQQAzgFArAdQArAeANAyQATBNggAzQgnA7hPAOQgQADgPAAQg+AAgkgzg");
	this.shape_7.setTransform(37.3,55.2,0.294,0.294);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#3F506E").s().p("AgSODQgggcgHgqQhboRgUkRQgMiwANkFQAKjfAAizQACgwAjgiQAjghAxABQAtACAhAhQAhAhACAuQAAC5gMDkQgMD8ANCnQATEABYICQAIAwgcAnQgcAogwAIIgUACQgrAAgggcg");
	this.shape_8.setTransform(41.2,80.5,0.294,0.294);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#F78C7E").s().p("AgjDrQgagXgGgiIgylIQgFgmAYgfQAXgfAngFQAkgFAeAWQAfAXAGAlIAyFHQAGAngXAfQgXAfgmAGIgOABQgiAAgagWg");
	this.shape_9.setTransform(42.9,106.5,0.294,0.294);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#3F506E").s().p("ABaDIIgFAAQgxgDggglIi8jdQgWgbADgjQADgiAagXQAXgTAdAAQAegBAYASIDlC0QAlAcAGAvQAFAvgdAlQgQAUgXAMQgYALgaAAg");
	this.shape_10.setTransform(41.6,110.1,0.294,0.294);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#C2DBEE").s().p("AnHEZQi9h0AAilQAAikC9h0QC9h1EKAAQELAAC9B1QC9B0AACkQAACli9B0Qi9B1kLAAQkKAAi9h1g");
	this.shape_11.setTransform(33.4,111.2,0.294,0.294);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(80));

	// Layer 3
	this.instance_2 = new lib.Tween25("synched",0);
	this.instance_2.parent = this;
	this.instance_2.setTransform(33.4,24.6,1,1,0,0,0,11.7,-6.5);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).to({regX:11.6,rotation:-55,x:33.3,y:24.5},7).to({regX:11.7,rotation:-38},13).to({regY:-6.4,rotation:-56.2,x:33.4,y:24.7},17).to({regY:-6.5,rotation:0,y:24.6},19).to({startPosition:0},6).to({rotation:-45,x:33.3,y:24.5},11).to({rotation:0,x:33.4,y:24.6},6).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,52.3,123);


(lib.Ladywithpen = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// front arm
	this.instance = new lib.Tween15("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(67.2,95.1,1,1,0,0,0,22.5,-10.7);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({rotation:-6.7,x:57.6,y:97},25).to({rotation:0,x:67.2,y:95.1},25).wait(1));

	// pen
	this.instance_1 = new lib.Tween14("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(54.9,185.8,1,1,0,0,0,27.4,92.9);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({rotation:-6.7,x:54.8},25).to({rotation:0,x:54.9},25).wait(1));

	// head
	this.instance_2 = new lib.Tween13("synched",0);
	this.instance_2.parent = this;
	this.instance_2.setTransform(59.8,83.4,1,1,0,0,0,3.1,4.7);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).to({regY:4.8,rotation:-30,x:49.5,y:84.3},25).to({regY:4.7,rotation:0,x:59.8,y:83.4},25).wait(1));

	// neck
	this.instance_3 = new lib.Tween12("synched",0);
	this.instance_3.parent = this;
	this.instance_3.setTransform(60.1,91.4,1,1,0,0,0,2.2,8.5);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).to({rotation:-15,x:50.1,y:91.8},25).to({rotation:0,x:60.1,y:91.4},25).wait(1));

	// body
	this.instance_4 = new lib.Tween11("synched",0);
	this.instance_4.parent = this;
	this.instance_4.setTransform(60.7,126.3,1,1,0,0,0,1,18.8);

	this.timeline.addTween(cjs.Tween.get(this.instance_4).to({rotation:-15},25).to({rotation:0},25).wait(1));

	// back arm
	this.instance_5 = new lib.Tween10("synched",0);
	this.instance_5.parent = this;
	this.instance_5.setTransform(55.1,91.1,1,1,0,0,0,18.3,-7.3);

	this.timeline.addTween(cjs.Tween.get(this.instance_5).to({x:44.7,y:94.3},25).to({x:55.1,y:91.1},25).wait(1));

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#3F506E").s().p("Ag2RaQgighgBgwQg19iAAitQAAgwAigiQAjgiAwgBQAwABAiAiQAiAjAAAwQAABpAaPTIAaPMQACAwgiAkQghAjgwABIgDAAQgvABgigig");
	this.shape.setTransform(64.8,148.9,0.294,0.294);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#F78C7E").s().p("AhBDQQgcgcAAgmIAAkeQACgmAcgbQAcgaAmABQAlABAaAaQAbAaABAlIAAEeQAAAmgcAcQgbAbgnAAQgmAAgbgbg");
	this.shape_1.setTransform(65.6,180.5,0.294,0.294);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#3F506E").s().p("Ai7CnQgYgZAAgiQAAgjAYgZIDNjNQAigiAvAAQAuAAAiAhQAhAiAAAvQABAugiAhQgIAJgKAGIjyChQgUAOgagBQgjABgZgZg");
	this.shape_2.setTransform(62.5,188.1,0.294,0.294);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#3F506E").s().p("AkbO4QgjgiAAgwIACgVQBwp/AzjZQAzjbC+qgQAMgvAqgYQAqgZAvANQAvAMAYAqQAZApgNAvIgBAFQi9KYgyDWQgyDYhtJ2QgIAqggAbQghAcgrAAQgwAAgigjg");
	this.shape_3.setTransform(50,148.7,0.294,0.294);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#F78C7E").s().p("AhiDDQgbgcAAgnQAAgLADgMIBBkBQAKglAigTQAhgTAlAKQAkAKATAhQAUAggJAkIhBEBQgIAfgZAUQgZAUggAAQgmAAgcgbg");
	this.shape_4.setTransform(43.1,177.2,0.294,0.294);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#3F506E").s().p("ACEByQgKAAgNgCIkcg8QgigIgTgdQgTgcAIgiQAGgdAXgTQAXgSAdAAIEjABQAvACAgAiQAgAigBAuQgCAuggAfQggAggsABg");
	this.shape_5.setTransform(38.1,181.4,0.294,0.294);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#C2DBEE").s().p("An3E3QjQiBAAi2QAAi1DQiBQDRiBEmAAQEnAADRCBQDRCBAAC1QAAC2jRCBQjRCBknAAQkmAAjRiBg");
	this.shape_6.setTransform(50.9,183.2,0.294,0.294);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(51));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,71.8,196.1);


(lib.Ladyonbooks = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// front arm
	this.instance = new lib.Tween22("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(2.9,34.4,1,1,0,0,0,-14.1,-10.3);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({rotation:39.7},9).to({startPosition:0},30).to({rotation:0},10).wait(1));

	// head
	this.instance_1 = new lib.Tween23("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(10,26.9,1,1,0,0,0,-3,12.2);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({rotation:4.7,x:9.9},9).to({rotation:0,x:10},10).to({rotation:6.2},11).to({regY:12.3,rotation:-8.7,y:27},9).to({regY:12.2,rotation:0,y:26.9},10).wait(1));

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#6CACE6","#DFF3FF"],[0,1],-3.2,-74.3,3.4,74.4).s().p("AgmJJQgmAAgfgWQgegWgMgkIjrrAQgKggAIggQAHghAYgXIDSjOQAegdAogEIDpgZQAvgFAlAeQAlAdAHAvIBnLyQAFAkgQAgQgPAggfASIk4C0QgaAPgdAAIgDAAg");
	this.shape.setTransform(11.8,40.8,0.294,0.294);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#3F506E").s().p("AInNUQgxgCgggkQghgjACgxQAZpOmQl/QkCj5mAh9IgNgEQgvgPgWgrQgWgrAOgvQAPguArgWQArgXAuAPIANAFIACAAQDTBFC7BtQCNBUB2BkQEPDnCFE1QCFE3gPFvQgCAvgiAgQgiAhgvAAg");
	this.shape_1.setTransform(29.2,81.5,0.294,0.294);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#F78C7E").s().p("AhBDTQgcgbAAgnIAAkdQgBgnAbgcQAagdAngBQAmgBAcAaQAcAbABAnQABADgBADIAAEdQAAAngbAbQgbAcgnAAQgmAAgbgcg");
	this.shape_2.setTransform(45.5,107.2,0.294,0.294);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#3F506E").s().p("ABSCyIjyihQgngZgKguQgJguAagnQAagoAugJQAugKAnAaQAJAGAJAJIDNDNQAZAZAAAjQAAAigZAZQgZAZgiAAQgZAAgWgOg");
	this.shape_3.setTransform(48.6,114.7,0.294,0.294);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#3F506E").s().p("AkzIBQgjgjAAgwQAAgfAPgbQAQgbAagQQFSjICmiJQBmhUAcgzQgjgVhRgTQhVgUjOgeQiYgVhNgOQh+gWhcgbQgugOgXgrQgWgrAPgvQAOgsApgXQAogWAuALQBRAYB2AUQBBAMCXAWQCDATA9AKQBkARBDATQBTAYA0AfQBhA7ASBcQASBZg+BhQgrBChXBNQiwCemPDsQgbARghAAQgwAAgigig");
	this.shape_4.setTransform(35.3,69.5,0.294,0.294);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#F78C7E").s().p("Ai2CXQgcgcAAgmQAAgXAKgUQALgVASgNIDoimQAfgXAnAFQAmAGAXAfQAYAfgGAmQgFAngfAXIjsCoQgYASgeAAQgnAAgbgbg");
	this.shape_5.setTransform(24.3,84.5,0.294,0.294);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#3F506E").s().p("AAKDiQgUgPgKgXIhvkNQgSgsASgrQASgsAsgSQArgSArASQArASASAsQAEAKADAMIA2EeQAHAggRAbQgRAcgfAJQgLAEgNAAQgaAAgVgOg");
	this.shape_6.setTransform(20.8,91.1,0.294,0.294);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#C2DBEE").s().p("AkjC0Qh4hLAAhpQAAhpB4hKQB5hLCqAAQCrAAB5BLQB4BKAABpQAABqh4BKQh5BLirAAQiqAAh5hLg");
	this.shape_7.setTransform(48.6,116.2,0.294,0.294);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#3F506E").s().p("AiuEWQgegUgNgiIhIi1QgRgoAPgoQAOgpAmgWIE3i0QAqgZAvANQAuAMAZAqQAJARAEATIA0EBQAIArgVAmQgWAmgpAOIkjBnQgSAHgVAAQgkAAgdgUg");
	this.shape_8.setTransform(16,54.6,0.294,0.294);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).to({state:[{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]},49).wait(1));

	// back arm
	this.instance_2 = new lib.Tween24("synched",0);
	this.instance_2.parent = this;
	this.instance_2.setTransform(16.5,26.8,1,1,0,0,0,-17.2,7.7);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).to({regX:-17.1,rotation:82.7},9).to({rotation:68.5,x:16.6},10).to({rotation:82.2,x:16.5},11).to({regX:-17.2,rotation:68.7,y:26.7},9).to({rotation:0,y:26.8},10).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,60.7,123.7);


(lib.LadyatComputer = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#EF0019").s().p("AhBBCQgcgbAAgnQAAgmAcgbQAbgcAmAAQAnAAAbAcQAcAbAAAmQAAAngcAbQgbAcgnAAQgmAAgbgcg");
	this.shape.setTransform(43.9,5.1,0.294,0.294);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#EF0019").s().p("AhBBCQgcgbAAgnQAAgmAcgbQAbgcAmAAQAnAAAbAcQAcAbAAAmQAAAngcAbQgbAcgnAAQgmAAgbgcg");
	this.shape_1.setTransform(39.2,2.8,0.294,0.294);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#EF0019").s().p("AhBBCQgcgbAAgnQAAgmAcgbQAbgcAmAAQAnAAAbAcQAcAbAAAmQAAAngcAbQgbAcgnAAQgmAAgbgcg");
	this.shape_2.setTransform(42,10.3,0.294,0.294);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#EF0019").s().p("AhBBCQgcgbAAgnQAAgmAcgbQAbgcAmAAQAmAAAcAcQAbAbAAAmQAAAngbAbQgcAcgmAAQgmAAgbgcg");
	this.shape_3.setTransform(47.2,23.4,0.294,0.294);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#EF0019").s().p("AhBBCQgcgbAAgnQAAgmAcgbQAbgcAmAAQAnAAAbAcQAcAbAAAmQAAAngcAbQgbAcgnAAQgmAAgbgcg");
	this.shape_4.setTransform(44.1,24.5,0.294,0.294);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#EF0019").s().p("AhBBCQgcgbAAgnQAAgmAcgbQAbgcAmAAQAnAAAbAcQAcAbAAAmQAAAngcAbQgbAcgnAAQgmAAgbgcg");
	this.shape_5.setTransform(40.6,23.4,0.294,0.294);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#EF0019").s().p("AhBBCQgcgbAAgnQAAgmAcgbQAbgcAmAAQAnAAAbAcQAcAbAAAmQAAAngcAbQgbAcgnAAQgmAAgbgcg");
	this.shape_6.setTransform(42.5,26.3,0.294,0.294);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#EF0019").s().p("AhBBCQgcgbAAgnQAAgmAcgbQAbgcAmAAQAnAAAbAcQAcAbAAAmQAAAngcAbQgbAcgnAAQgmAAgbgcg");
	this.shape_7.setTransform(37.8,20.9,0.294,0.294);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#EF0019").s().p("AhBBCQgcgbAAgnQAAgmAcgbQAbgcAmAAQAnAAAbAcQAcAbAAAmQAAAngcAbQgbAcgnAAQgmAAgbgcg");
	this.shape_8.setTransform(39,19,0.294,0.294);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#EF0019").s().p("AhBBCQgcgbAAgnQAAgmAcgbQAbgcAmAAQAnAAAbAcQAcAbAAAmQAAAngcAbQgbAcgnAAQgmAAgbgcg");
	this.shape_9.setTransform(40.6,14,0.294,0.294);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#EF0019").s().p("AhBBCQgcgbAAgnQAAgmAcgbQAbgcAmAAQAnAAAbAcQAcAbAAAmQAAAngcAbQgbAcgnAAQgmAAgbgcg");
	this.shape_10.setTransform(42.9,15.2,0.294,0.294);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#EF0019").s().p("AhBBCQgcgbAAgnQAAgmAcgbQAbgcAmAAQAnAAAbAcQAcAbAAAmQAAAngcAbQgbAcgnAAQgmAAgbgcg");
	this.shape_11.setTransform(41.3,19.7,0.294,0.294);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#EF0019").s().p("AhBBCQgcgbAAgnQAAgmAcgbQAbgcAmAAQAnAAAbAcQAcAbAAAmQAAAngcAbQgbAcgnAAQgmAAgbgcg");
	this.shape_12.setTransform(43.3,18.4,0.294,0.294);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#EF0019").s().p("AhBBCQgcgbAAgnQAAgmAcgbQAbgcAmAAQAnAAAbAcQAcAbAAAmQAAAngcAbQgbAcgnAAQgmAAgbgcg");
	this.shape_13.setTransform(44.5,20.9,0.294,0.294);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#EF0019").s().p("AhBBCQgcgbAAgnQAAgmAcgbQAbgcAmAAQAnAAAbAcQAcAbAAAmQAAAngcAbQgbAcgnAAQgmAAgbgcg");
	this.shape_14.setTransform(46.8,18.4,0.294,0.294);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#EF0019").s().p("AhBBCQgcgbAAgnQAAgmAcgbQAbgcAmAAQAnAAAbAcQAcAbAAAmQAAAngcAbQgbAcgnAAQgmAAgbgcg");
	this.shape_15.setTransform(44.5,15.6,0.294,0.294);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#EF0019").s().p("AhBBDQgcgcAAgnQAAgmAcgbQAbgbAmgBQAnABAbAbQAcAbAAAmQAAAngcAcQgbAagnAAQgmAAgbgag");
	this.shape_16.setTransform(45.8,12.4,0.294,0.294);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#EF0019").s().p("AhBBCQgcgbAAgnQAAgmAcgbQAbgcAmAAQAnAAAbAcQAcAbAAAmQAAAngcAbQgbAcgnAAQgmAAgbgcg");
	this.shape_17.setTransform(44.5,10.7,0.294,0.294);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#EF0019").s().p("AhBBCQgcgbAAgnQAAgmAcgbQAbgcAmAAQAnAAAbAcQAcAbAAAmQAAAngcAbQgbAcgnAAQgmAAgbgcg");
	this.shape_18.setTransform(44.5,7.7,0.294,0.294);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#EF0019").s().p("AhBBCQgcgbAAgnQAAgmAcgbQAbgcAmAAQAnAAAbAcQAcAbAAAmQAAAngcAbQgbAcgnAAQgmAAgbgcg");
	this.shape_19.setTransform(42.2,5.9,0.294,0.294);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#EF0019").s().p("AhBBCQgcgbAAgnQAAgmAcgbQAbgcAmAAQAnAAAbAcQAcAbAAAmQAAAngcAbQgbAcgnAAQgmAAgbgcg");
	this.shape_20.setTransform(36.3,4.2,0.294,0.294);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#EF0019").s().p("AhBBCQgcgbAAgnQAAgmAcgbQAbgcAmAAQAnAAAbAcQAcAbAAAmQAAAngcAbQgbAcgnAAQgmAAgbgcg");
	this.shape_21.setTransform(34.5,5,0.294,0.294);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#EF0019").s().p("AhBBCQgcgbAAgnQAAgmAcgbQAbgcAmAAQAnAAAbAcQAcAbAAAmQAAAngcAbQgbAcgnAAQgmAAgbgcg");
	this.shape_22.setTransform(39,8.7,0.294,0.294);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#EF0019").s().p("AhBBCQgcgbAAgnQAAgmAcgbQAbgcAmAAQAnAAAbAcQAcAbAAAmQAAAngcAbQgbAcgnAAQgmAAgbgcg");
	this.shape_23.setTransform(39.4,4.6,0.294,0.294);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.lf(["#6CACE6","#DFF3FF"],[0,1],0.3,-89.2,-1.2,57.8).s().p("Ai5IyQh0gPgBhLIgBqKQABiZBVhrQBNhhBygXQBxgYBVA/QBeBFAPCWQAWDiABHWQgBAaggAbQgdAag2AXQgOAHgyAQQgxAQgSAEQhjAZhSAAQggAAgdgEg");
	this.shape_24.setTransform(41.3,35,0.294,0.294);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#507FBC").s().p("Ak4D6QgjgiAAgwQAAgaALgYQALgXATgRQA0grBDgwICChcQCdhvBBgwQAogbAwAJQAvAJAbAoQAaAmgHAtQgGAtgjAdQhWA/iPBjQigBvhGA8QghAcgrAAQgwAAgigjg");
	this.shape_25.setTransform(31.4,29.7,0.294,0.294);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f("#F78C7E").s().p("AjWDFQhagChEglQgkgUgUgWIBxhiIgCgCIAhASQAsARA+gEQDCgOEljXQAZgSAfAEQAfAFASAZQATAZgFAfQgFAegZATQlgECj5AAg");
	this.shape_26.setTransform(17.4,36.4,0.294,0.294);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f("#F78C7E").s().p("AhVDPQhVgkgkhVQgkhWAkhUQAjhXBWgjQBVgkBWAkQBVAjAkBXQAkBUgkBWQgkBWhVAjQgrASgrAAQgqAAgrgSg");
	this.shape_27.setTransform(39.1,10.5,0.294,0.294);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f("#3F506E").s().p("AgeEQQg8gIgxgjQgwgkgbg2QgYgygsiFQgWhFAhhBQAghBBFgWQAggLAiADICaAKQBfAGBEBCQBFBDAIBfQALCDhLBRQgqAtg4AXQg4AYg9gBIgGABQgQAAgTgDgAgDAlIABABQAGAFAUgEQAVgEAIgKQACgCABgIQACgLgBgPQgCgIgGgFQgGgGgIAAIhCgFQASA1AKATg");
	this.shape_28.setTransform(40.5,49.2,0.294,0.294);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f("#3F506E").s().p("AlaHtQgwgBgigjQghgjABgxIAAAAIAEjUQAFkyAQhgQAYiOBTg9QBSg9CNASQBcAMEWBRIBtAfQAvAMAYAqQAZAqgMAvQgNAvgpAZQgqAYgvgMIh0ghQiogxhJgSQh2gdgeAKQgSAZgHCBQgFBJgDDAIgEDXQgBAvgiAhQgiAhgvABg");
	this.shape_29.setTransform(29.2,61.2,0.294,0.294);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f("#3F506E").s().p("AnREqQgjgjAAgwQAAgdAOgaQCPkLA9hUQBRhvBZgXQBIgSBNAhQAyAVBtBJQCNBeBnA3QArAYANAuQANAugXArQgXApguAOQgtAOgrgWQhwg9iXhjQhhhCgagIQgdAWhHB4QglBBhWCeQgPAdgcARQgbAQghAAQgwAAgigig");
	this.shape_30.setTransform(26.5,51.7,0.294,0.294);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f("#507FBC").s().p("AiQC4QgbgcAAgnQABgcAPgYICejtQAXgfAngGQAmgFAfAXQAeAVAGAkQAHAkgTAfIieDtQgNATgUALQgVALgXAAQgnAAgcgbg");
	this.shape_31.setTransform(13.8,60.5,0.294,0.294);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f("#3F506E").s().p("AB4CcQgeAAgZgOIj/iMQgegQgKghQgJgiARgeQAOgaAcgMQAbgLAdAJIEVBWQAtAOAWAqQAWAogOAtQgLAkgeAWQgeAWglAAg");
	this.shape_32.setTransform(6.9,64,0.294,0.294);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f("#507FBC").s().p("AgFEaQgngBgbgcQgagcAAgnIAJl5QABgmAdgbQAdgaAmACQAlACAaAbQAaAbAAAlIgIF5QgBAmgcAbQgbAbglAAg");
	this.shape_33.setTransform(19.3,74.2,0.294,0.294);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f("#3F506E").s().p("ABGCoQgpgCgcgfIiciyQgVgYACgdQACgbATgUQATgVAagDQAdgEAZATIDHCYQAeAbAAApQAAAqgdAdIgFAEQgcAagkAAIgHgBg");
	this.shape_34.setTransform(17,79.1,0.294,0.294);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f("#F78C7E").s().p("AhMB3QgxgggMg5QgNg5AggxQAggxA5gMQA5gMAxAgQAxAgAMA5QAMA4ggAxQggAxg5AMQgPADgPAAQgoAAgjgWg");
	this.shape_35.setTransform(6.5,38.2,0.294,0.294);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f("#D9F2F7").s().p("AkjC0Qh5hLABhpQgBhpB5hKQB5hLCqABQCrgBB5BLQB4BKAABpQAABph4BLQh5BKirABQiqgBh5hKg");
	this.shape_36.setTransform(40.4,54,0.294,0.294);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_36},{t:this.shape_35},{t:this.shape_34},{t:this.shape_33},{t:this.shape_32},{t:this.shape_31},{t:this.shape_30},{t:this.shape_29},{t:this.shape_28},{t:this.shape_27},{t:this.shape_26},{t:this.shape_25},{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(36));

	// Layer 2
	this.instance = new lib.Tween6("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(30.9,23);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({x:29.9,y:25},8).to({x:27.9,y:23},8).to({x:31.9,y:24},9).to({y:21},6).to({x:30.9,y:23},4).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,52.6,84.1);


(lib.Headscratch = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 5
	this.instance = new lib.Tween5("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(63,91.7,1,1,0,135,-45,28.3,-82.7);
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(75).to({_off:false},0).to({_off:true},9).wait(6));

	// Layer 3
	this.instance_1 = new lib.Tween5("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(62.9,91.6,1,1,0,0,0,28.2,-82.7);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({startPosition:0},69).to({regX:28.3,regY:-82.5,rotation:72.2,y:91.7},5).to({_off:true},1).wait(9).to({_off:false},0).to({regX:28.2,regY:-82.7,rotation:0,y:91.6},5).wait(1));

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#3F506E").s().p("AgnAoQgQgRAAgXQAAgWAQgRQARgQAWAAQAXAAARAQQAQARAAAWQAAAXgQARQgRAQgXAAQgXAAgQgQg");
	this.shape.setTransform(106.5,26.7);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#3F506E").s().p("AgnAoQgQgRAAgXQAAgWAQgRQARgQAWAAQAYAAAQAQQAQARAAAWQAAAXgQARQgQAQgYAAQgWAAgRgQg");
	this.shape_1.setTransform(98.4,22.8);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#3F506E").s().p("AgnAoQgQgRAAgXQAAgWAQgQQARgRAWAAQAYAAAQARQAQAQAAAWQAAAXgQARQgQAQgYAAQgWAAgRgQg");
	this.shape_2.setTransform(89.5,21.1);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#3F506E").s().p("AgmAoQgRgRAAgXQAAgWARgRQAQgQAWAAQAXAAARAQQAQARAAAWQAAAXgQARQgRAQgXAAQgXAAgPgQg");
	this.shape_3.setTransform(81.1,22.8);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#3F506E").s().p("AhQBQQghghAAgvQAAguAhghQAigiAuAAQAvAAAiAiQAhAhAAAuQAAAvghAhQgiAigvAAQguAAgigig");
	this.shape_4.setTransform(118.6,26.7);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#3F506E").s().p("AhQBRQghgiAAgvQAAguAhghQAigiAuAAQAwAAAgAiQAiAhAAAuQAAAvgiAiQggAhgwAAQguAAgighg");
	this.shape_5.setTransform(106.5,17.2);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#3F506E").s().p("AhQBQQghghAAgvQAAguAhghQAigiAuAAQAwAAAgAiQAiAhAAAuQAAAvgiAhQghAigvAAQguAAgigig");
	this.shape_6.setTransform(93.6,11.4);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#3F506E").s().p("AhQBQQghghAAgvQAAguAhghQAigiAuAAQAvAAAhAiQAiAhAAAuQAAAvgiAhQghAigvAAQguAAgigig");
	this.shape_7.setTransform(81.1,11.4);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#3F506E").s().p("AhQBRQghgiAAgvQAAguAhghQAigiAuAAQAvAAAhAiQAiAhAAAuQAAAvgiAiQghAhgvAAQgvAAghghg");
	this.shape_8.setTransform(71.3,18.5);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#F78C7E").s().p("AiyCzQhKhKAAhpQAAhoBKhKQBKhKBoAAQBpAABKBKQBKBKAABoQAABphKBKQhKBKhpAAQhoAAhKhKg");
	this.shape_9.setTransform(87.6,36.7);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#F5575A").s().p("AhZC7QgWgWAAgfQAAgJADgKIBJkMQAJgeAagPQAagPAeAIQAeAIAQAbQAPAbgIAeIhKELQgGAZgVAPQgTAPgZAAQgfAAgWgWg");
	this.shape_10.setTransform(82.2,64.5);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#FFFFFF").s().p("AgEBlQh3kIAEhmQABgbAagYQAdgcAoAAQAmAAAeAUQAZAQAKAZQAnBbACEVQABCLgHB5Qg9hwg6iEg");
	this.shape_11.setTransform(80.1,106.3);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.lf(["#6CACE6","#DFF3FF"],[0,1],-0.4,-130.5,0.6,83.5).s().p("AjOLdQiBgRAAhSIgCv7QAAinBeheQBThSCBgIQB5gHBjA6QBoA9ARBiQAaCYACGnQABDdgEEXQAAAdgkAeQghAcg7AbQgOAGgfimIgdinIgaC5QgdC6gQAEQhuAbhaAAQgkAAgggFg");
	this.shape_12.setTransform(78.5,145.6);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#3F506E").s().p("AkJksIH+hpIAVGsIoTF+gAgfhtIAAA7IA5grIgBgcg");
	this.shape_13.setTransform(77.1,208.1);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#3F506E").s().p("AiTihIEcg6IALDjIknDUg");
	this.shape_14.setTransform(77,203.8);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#3F506E").s().p("AAYOzQguAAgjghQgighgBgwIgw57QgCgxAhgjQAigiAwgCIAEAAQAuAAAiAhQAiAhACAwIAwZ7QACAwghAkQghAigxACg");
	this.shape_15.setTransform(94.2,287.7);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#3F506E").s().p("AgtPFQgxgCgggkQghgkACgwIBS6eQACgwAjghQAkgiAvACQAxACAhAjQAhAkgCAwIhSahQgCAvgiAgQgiAgguAAg");
	this.shape_16.setTransform(58.1,310.4);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(90));

	// Layer 2
	this.instance_2 = new lib.ScratchingArm();
	this.instance_2.parent = this;
	this.instance_2.setTransform(119.4,71.4,1,1,0,0,0,33.6,55.2);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(90));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,153.1,407);


(lib.Blondeonstool = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Head
	this.instance = new lib.Tween30("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(46.8,14.2,1,1,0,0,0,-5.3,-2.9);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({regY:-2.8,rotation:-15,x:46.9},23).to({startPosition:0},29).to({regY:-2.9,rotation:0,x:46.8},37).wait(1));

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("Ai6IOQh1gPAAhLIAAl6IgBkQQAAiXBVhUQBLhJB1gGQBsgGBaA1QBdA4AQBZQAXCKACDzQABCDgEC4QAAAaggAbQgeAag1AXQgPAHgxAQQgxAQgSAEQhkAZhRAAQggAAgdgEg");
	this.shape.setTransform(49.6,33.1,0.294,0.294);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#F5575A").s().p("AgID1QgUgRgGgaIhNl1QgGgeARgaQARgaAfgGQAegHAZASQAZARAHAeIBNF1QAGAfgRAaQgRAZgfAHQgHABgHAAQgbAAgUgRg");
	this.shape_1.setTransform(48.5,11.6,0.294,0.294);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#3F506E").s().p("AALETQgUAAgVgDQg7gIgxgjQgxgjgbg3QgZg2gqiBQgXhFAhhBQAhhABFgXQAggKAhACICaAKQBgAGBEBDQBEBCAIBfQALCDhLBSQgqAsg4AXQg3AYg7AAIgDAAgAgCAlIAAABQAGAFAUgEQAVgEAIgKQAGgIgCgcQgBgIgGgFQgHgGgIAAIhCgEQAUA3AJAQg");
	this.shape_2.setTransform(48.8,46.8,0.294,0.294);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#3F506E").s().p("AlTH0QgxgBghgjQgigjABgwIAAgBIAEjnQAEkqAQhgQAZiRBTg+QBUg+CSATQBjAMEsBWIBBATQAvAPAWArQAXArgPAuQgOAsgpAXQgpAXgtgMIhCgTQi+g2hLgTQiCgfgdAMQgTAYgICAQgEBMgDC8IgEDqQgBAwgiAhQgiAhgwAAg");
	this.shape_3.setTransform(37.4,58.7,0.294,0.294);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#3F506E").s().p("AnSEqQgigjAAgwQAAgeAOgZQCPkMA9hTQBRhvBZgXQBHgSBOAhQAyAVBtBJQCLBcBpA5QArAYANAuQANAugXArQgYApgtAOQguANgqgWQhwg8iXhjQhjhDgYgIQgdAXhHB3QgpBIhSCYQgPAdgcARQgcAQggAAQgwAAgjgig");
	this.shape_4.setTransform(34.8,49.4,0.294,0.294);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#507FBC").s().p("AiRC6QgcgbAAgnQAAgcAQgYICejtQAVghAmgIQAmgJAhAVQAgAVAJAmQAIAmgVAgIigDxQgNAUgVALQgVALgXAAQgnAAgbgcg");
	this.shape_5.setTransform(22.2,58.2,0.294,0.294);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#3F506E").s().p("AB4CcQgeAAgZgOIj+iMQgfgQgJghQgKgiARgeQAOgaAcgMQAcgLAcAJIEVBWQAtAOAWAqQAXAogOAtQgLAkgeAWQgfAWglAAg");
	this.shape_6.setTransform(15.2,61.7,0.294,0.294);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#507FBC").s().p("AgFEaQgngBgbgcQgagcAAgnIAIl5QACgnAdgaQAdgaAlACQAmACAaAbQAaAbAAAlIgJF5QAAAmgcAbQgbAbglAAg");
	this.shape_7.setTransform(27.6,71.9,0.294,0.294);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#3F506E").s().p("ABGCoQgpgCgbgfIiciyQgVgYABgdQACgbATgUQATgVAagDQAdgEAaATIC9CPIAJAJQAdAbABApQAAApgcAeIgFAEQgcAaglAAIgHgBg");
	this.shape_8.setTransform(25.3,76.8,0.294,0.294);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#C2DBEE").s().p("AnGEaQi9h1AAilQAAikC9h1QC8h0EKAAQELAAC9B0QC8B1AACkQAACli8B1Qi9B0kLAAQkKAAi8h0g");
	this.shape_9.setTransform(18.9,72.9,0.294,0.294);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#E5FFFB").s().p("AkjC0Qh4hKAAhqQAAhoB4hLQB5hKCqgBQCrABB5BKQB4BLAABoQAABqh4BKQh5BLirAAQiqAAh5hLg");
	this.shape_10.setTransform(48.7,51.7,0.294,0.294);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#6CACE6").s().p("AkjB1Qh4hLAAhoIAAiAIM3AAIAACAQAABoh4BLQh5BKirAAQiqAAh5hKg");
	this.shape_11.setTransform(48.8,57.3,0.294,0.294);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#6CACE6").s().p("AggKbQgOgOAAgTIAAzzQAAgTAOgOQANgNATAAQATAAAOANQAOAOAAATIAATzQAAATgOAOQgOANgTAAQgTAAgNgNg");
	this.shape_12.setTransform(40.6,72,0.294,0.294);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#6CACE6").s().p("AggKbQgOgOAAgUIAAzxQAAgUAOgOQAOgNASAAQATAAAOANQAOAOAAAUIAATyQAAATgOAOQgOAOgTAAQgSAAgOgOg");
	this.shape_13.setTransform(57.8,72.4,0.294,0.294);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#6CACE6").s().p("AggKbQgOgOAAgUIAAzxQAAgUAOgNQAOgPASAAQATAAAOAPQAOANAAAUIAATxQAAAUgOAOQgOANgTABQgSgBgOgNg");
	this.shape_14.setTransform(49.2,77.4,0.294,0.294);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#C2DBEE").s().p("AkjC0Qh4hLAAhpQAAhpB4hKQB5hLCqAAQCrAAB5BLQB4BKAABpQAABqh4BKQh5BLirAAQiqAAh5hLg");
	this.shape_15.setTransform(48.7,91,0.294,0.294);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(90));

	// Layer 3
	this.instance_1 = new lib.Tween29("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(43.5,28.9,1,1,0,0,0,10.6,2.6);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({regX:10.7,rotation:-10.7,x:43.6},23).to({startPosition:0},29).to({regX:10.6,rotation:0,x:43.5},37).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,63.8,98.5);


// stage content:
(lib.Step1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 15
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#F9B944").s().p("AjGFRQhTgsAAiCQAAiCBTiLQBSiMB0hDQB0hDBTAsQBTAsAACCQAACChTCLQhTCMh0BDQhGApg6AAQgmAAgggSg");
	this.shape.setTransform(404.2,179,0.294,0.294);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#F66EAB").s().p("Ak2IOQiBhFAAjLQAAjLCBjYQCBjaC1hqQC2hpCCBFQCABFAADLQAADLiADZQiCDai2BpQhtA/hbAAQg7AAgzgbg");
	this.shape_1.setTransform(404.2,179,0.294,0.294);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#E24A8C").s().p("Ak4H6Qg6gigghEQgghFAAhhQAAjLCBjZQCBjaC1hpQBeg2BUgHQBTgHA8AmIBtA/IgbArQg4gehIAIQhLAIhRAvQinBhh1DHQh2DHAAC6QAABUAbA/QAaA8AwAgIgbAsg");
	this.shape_2.setTransform(400.6,177.5,0.294,0.294);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#E24A8C").s().p("AhJhiICThZIAAEiIhKgnIhJB7g");
	this.shape_3.setTransform(402.5,201.9);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

	// screen data
	this.instance = new lib.screendata();
	this.instance.parent = this;
	this.instance.setTransform(385.8,126.4,1,1,0,0,0,27.6,73.9);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

	// Layer 13
	this.instance_1 = new lib.Speechbubble();
	this.instance_1.parent = this;
	this.instance_1.setTransform(213.9,142,1,1,0,0,0,54.2,59.8);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(1));

	// Head scratch man
	this.instance_2 = new lib.Headscratch();
	this.instance_2.parent = this;
	this.instance_2.setTransform(212.7,494.9,0.294,0.294,0,0,0,76.7,203.7);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(1));

	// Brunette on stool
	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#6CACE6").s().p("AggFPQgOgNAAgUIAApbQAAgUAOgNQAOgOASAAQATAAAOAOQAOANAAAUIAAJbQAAATgOAOQgOAOgTAAQgSAAgOgOg");
	this.shape_4.setTransform(480.6,309,0.294,0.294);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#3F506E").s().p("AhqBrQgsgtAAg+QAAg+AsgsQAsgsA+AAQA+AAAtAsQAsAsAAA+QAAA+gsAtQgtAsg+AAQg+AAgsgsg");
	this.shape_5.setTransform(476.6,262.4,0.294,0.294);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#3F506E").s().p("Ag8DiIghgPQAZhSgtgIQgOgDgTAFIgQAGQgggOgZh4QgZh6AcgaQBIhCBagMQBSgKBKAlQBJAlAiBGQAkBLgWBXQgUBPguAlQgoAghVARQgVAEgTAAQgbAAgZgIg");
	this.shape_6.setTransform(472,253.3,0.294,0.294);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#F78C7E").s().p("AgzBjQg2gWgWg2QgXg2AXg2QATgqApAeQAMAJAdAYQAaAWAWAKQAXAJAdADIApACQATACAEAIQAEAJgLAZQgXA1g1AVQgaAKgaAAQgbAAgbgLg");
	this.shape_7.setTransform(468.7,260.4,0.294,0.294);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#F67185").s().p("AhmHdQhlgQgihFQgrhYgiiKQgjiPgQihQgPiZA/hcQA5hTBngNQBkgNBlA4QBsA8BDB0QBLCDApC0QAhCSAAB2QAAAaggAcQgeAZg2AYQgPAGgwAQQgyARgRAEQhZAVhGAAQgjAAgegFg");
	this.shape_8.setTransform(486.7,270.7,0.294,0.294);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#F67185").s().p("AhtGqQgwAAgogbQgygjghhNQgTgtASgtQATgtAtgTQAagLAcADQAdACAYAPQAyhoBbkeIAeheQAOguAqgXQArgXAvAOQAuAPAXAqQAXArgOAuIgfBhQhqFNhAB1QhRCUhpAFg");
	this.shape_9.setTransform(474.5,271.2,0.294,0.294);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#F78C7E").s().p("AgUE3QhVhqgGjpQgDh7ASh7QAFgfAZgTQAZgSAeAFQAeAEASAZQATAZgFAfQgSB9AHB/QAICeAwA8QATAZgDAeQgEAfgYATQgVARgaAAQgjAAgWgdg");
	this.shape_10.setTransform(468.9,271.4,0.294,0.294);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#F78C7E").s().p("AhVDPQhWgjgjhWQgkhWAkhVQAjhWBWgjQBVgkBWAkQBWAjAjBWQAjBVgjBWQgjBWhWAjQgrASgqAAQgrAAgrgSg");
	this.shape_11.setTransform(471.2,253.6,0.294,0.294);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#F78C7E").s().p("ABpCMQgWAAgRgLIjSiBQgagQgIgeQgHgeARgbQAQgaAegIQAfgHAaARIDSCBQAaAQAIAeQAHAfgRAaQgKAQgRAKQgRAJgTAAg");
	this.shape_12.setTransform(478,258.4,0.294,0.294);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#3F506E").s().p("AgTEOQgWAAgUgEQg7gHgxgkQgxgjgbg2QgPghAAgkQABgkARgfQgKguAQg0QANgrAcglQAZggAhgTQAhgUAjgDIBIgPIAQABQBgAGBEBCQBEBDAIBfQALCDhLBRQgqAsg4AYQg3AYg6AAIgDAAgAgHgbQAGAegGAfQARgCANgLQAGgJgDgbQgBgMgLgFg");
	this.shape_13.setTransform(488.7,283.3,0.294,0.294);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#3F506E").s().p("AlWH1QgxgBghgjQghgkABgwIAEjoQAEkqAQhgQAYiRBTg+QBUg+CSATQBkAMErBXIBCASQAvANAYAqQAZApgMAvQgNAvgpAZQgqAYgvgMIgGgCIhBgSQi+g3hMgSQiBgfgeALQgTAZgHB/QgFBMgCC8IgEDqQgBAwgiAhQgjAigvAAg");
	this.shape_14.setTransform(476.4,295.4,0.294,0.294);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#507FBC").s().p("AgFEZQgnAAgbgdQgbgcABgmIAIl5QACgnAdgaQAdgaAlACQAmACAaAbQAaAbAAAlIgJF5QAAAmgcAbQgbAaglAAg");
	this.shape_15.setTransform(466.6,308.6,0.294,0.294);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#3F506E").s().p("ABGCoQgpgCgbgfIiciyQgVgYABgdQACgaATgVQATgVAagDQAdgEAaATIC9CPIAJAJQAeAcAAApQAAApgdAdIgFAFQgcAZgkAAIgHgBg");
	this.shape_16.setTransform(464.3,313.5,0.294,0.294);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#3F506E").s().p("AkhG4QgfgWgMgjQh1lPgSiaQgWi4BWhbQBbhgDKAUQCNAOFiBlQAvAMAYAqQAZApgMAvQgNAvgpAZQgqAZgvgNIgGgBQkhhTh4gTQhEgKgpACQgYACgKAFQgFAJgBAYQgBAmAMA+QAYCABcEJQAQAugVAsQgVAsguAPQgSAHgUAAQgmAAgegWg");
	this.shape_17.setTransform(481.6,290.1,0.294,0.294);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#507FBC").s().p("AgCDLQgYgQgKgbIhkj8QgOglARgjQAQgjAlgNQAjgNAiAPQAhAPAPAiIBkD8QAOAkgPAjQgQAkgkAOQgPAHgTAAIAAAAQgdAAgXgQg");
	this.shape_18.setTransform(476.6,303.9,0.294,0.294);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#3F506E").s().p("AAkB/IjCiGQgagTgGgcQgEgaANgZQAOgZAYgJQAbgLAeAMIDaBeIALAGQAjAVAKAmQAKAogUAjIgEAGQgXAigpAHQgJACgKAAQgdAAgagSg");
	this.shape_19.setTransform(475.6,306.6,0.294,0.294);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#E5FFFB").s().p("AkjC0Qh4hKAAhqQAAhoB4hLQB5hLCqAAQCrAAB5BLQB4BLAABoQAABqh4BKQh5BLirAAQiqAAh5hLg");
	this.shape_20.setTransform(488.7,287.6,0.294,0.294);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#6CACE6").s().p("AkiB0Qh5hKAAhpIAAh/IM3AAIAAB/QAABoh4BLQh5BLirAAQiqAAh4hLg");
	this.shape_21.setTransform(488.7,293.2,0.294,0.294);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#6CACE6").s().p("AggKbQgOgOAAgTIAAzyQAAgUAOgNQAOgPASAAQATAAAOAPQAOANAAAUIAATxQAAAUgOAOQgOAOgTAAQgSgBgOgNg");
	this.shape_22.setTransform(480.6,308,0.294,0.294);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#6CACE6").s().p("AAAKoQgSAAgOgNQgOgOAAgTIAAzzQAAgTAOgOQAOgNASAAQATAAAOANQAOAOAAATIAATzQAAATgOAOQgOANgTAAg");
	this.shape_23.setTransform(497.7,308.4,0.294,0.294);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("#6CACE6").s().p("AggKbQgOgOAAgTIAAzzQAAgTAOgOQAOgNASAAQATAAAOANQAOAOAAATIAATzQAAATgOAOQgOANgTAAQgSAAgOgNg");
	this.shape_24.setTransform(489.1,313.3,0.294,0.294);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#C2DBEE").s().p("AkjC0Qh4hKAAhqQAAhoB4hLQB5hLCqAAQCrAAB5BLQB4BLAABoQAABqh4BKQh5BLirAAQiqAAh5hLg");
	this.shape_25.setTransform(488.7,327,0.294,0.294);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f("#C2DBEE").s().p("AnHEZQi9h0AAilQAAikC9h1QC9h0EKAAQELAAC9B0QC8B1AACkQAACli8B0Qi9B1kLAAQkKAAi9h1g");
	this.shape_26.setTransform(471.9,309.3,0.294,0.294);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_26},{t:this.shape_25},{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4}]}).wait(1));

	// Blonde lady on stool
	this.instance_3 = new lib.Blondeonstool();
	this.instance_3.parent = this;
	this.instance_3.setTransform(329.1,366.7,1,1,0,0,0,31.9,49.3);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(1));

	// Lady at computer
	this.instance_4 = new lib.LadyatComputer();
	this.instance_4.parent = this;
	this.instance_4.setTransform(543,135.6,1,1,0,0,0,26.3,42);

	this.timeline.addTween(cjs.Tween.get(this.instance_4).wait(1));

	// Lady 1
	this.instance_5 = new lib.Ladyonbooks();
	this.instance_5.parent = this;
	this.instance_5.setTransform(724.6,258.1,1,1,0,0,0,30.4,61.9);

	this.timeline.addTween(cjs.Tween.get(this.instance_5).wait(1));

	// Man 1
	this.instance_6 = new lib.Manbybooks();
	this.instance_6.parent = this;
	this.instance_6.setTransform(789.4,256.7,1,1,0,0,0,26.2,61.5);

	this.timeline.addTween(cjs.Tween.get(this.instance_6).wait(1));

	// Man on Stool
	this.instance_7 = new lib.Manonstool();
	this.instance_7.parent = this;
	this.instance_7.setTransform(404.1,316.1,1,1,0,0,0,30.3,62.5);

	this.timeline.addTween(cjs.Tween.get(this.instance_7).wait(1));

	// Lady with pen
	this.instance_8 = new lib.Ladywithpen();
	this.instance_8.parent = this;
	this.instance_8.setTransform(296.2,468.9,1,1,0,0,0,35.9,98);

	this.timeline.addTween(cjs.Tween.get(this.instance_8).wait(1));

	// Microscope Man
	this.instance_9 = new lib.MicroscopeMan();
	this.instance_9.parent = this;
	this.instance_9.setTransform(36.6,378.4,1,1,0,0,0,25.8,63.2);

	this.timeline.addTween(cjs.Tween.get(this.instance_9).wait(1));

	// Reader head
	this.instance_10 = new lib.Readerhead();
	this.instance_10.parent = this;
	this.instance_10.setTransform(625,232.5,1,1,0,0,0,15.5,18.9);

	this.timeline.addTween(cjs.Tween.get(this.instance_10).wait(1));

	// Layer 1
	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f("#EF0019").s().p("Am0PWQiMhEgfjCQgNhUAPhQQAPhSAng4QArg8BxgsQAzgUAWgPQAjgXAOgmQATgwgGg0QgEgggSg5QgTg4gEgcQgFgwATgrQAZg3Bmg9QBthBAmhBQAjg/gHhKIgJhOQgEg3ACg1QAFiBBthZQBthZCFAOQBlALBWBFQBRBBgMAwQgFAWhnAQQhxASgfAdQgXAWAAAxQgBAUAJBLQAHA+gGAiQgHAwgkAYQgdATg6AZQgpARgSAYQgTAYALAjQAFASAcA2QA6BugVBRQgLAsgjAgQgVAUgyAcQg1AegWATQgmAhgRAuQgWA5AQBAQALAoAlBJQAoBNAMAmQAVBCgQA7QgRA/g2A9Qg1A7hJAnQhiA0hXAAQhCAAg7gdg");
	this.shape_27.setTransform(469.9,472,0.294,0.294);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.lf(["#6CACE6","#DFF3FF"],[0,1],5.3,-129.8,-10.7,70.8).s().p("AABJzQhzgVhUgpQhbgtAAgsQgEjyABjAQACluAWiDQAPhWBag0QBWgyBoAGQBwAHBIBGQBSBSAACQIgCNzQAABAhbASQgiAIgrAAQg3AAhDgMg");
	this.shape_28.setTransform(475.9,483.3,0.294,0.294);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f("#F78C7E").s().p("AhhBiQgogoAAg6QAAg4AogpQApgoA4AAQA5AAApAoQAoApAAA4QAAA6goAoQgpAog5AAQg4AAgpgog");
	this.shape_29.setTransform(494.8,505.6,0.294,0.294);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f("#F78C7E").s().p("AiaCbQhAhAAAhbQAAhaBAhAQBAhABaAAQBbAABABAQBABAAABaQAABbhABAQhABAhbAAQhaAAhAhAg");
	this.shape_30.setTransform(480.8,451.5,0.294,0.294);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f("#507FBC").s().p("AAaH/QgfgYgKgmQgehogYh5QgOhDgXiHQgYiNgQhDQgYhqgfhMQgUgsARgtQARguAsgUQAsgUAtARQAuARATAsIACAHQAnBcAcB5QASBOAZCXQAXCAANBBQAXBwAbBhQANAvgYAqQgYAqguANQgQAFgQAAQgnAAgfgYg");
	this.shape_31.setTransform(484.4,482.2,0.294,0.294);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f("#F78C7E").s().p("ACBD+QgUAAgSgKQheg3hkiiQg3hXgnhXQgMgcALgdQALgdAcgNQAdgMAdALQAdALAMAcQApBcA6BZQBIBtA3AgQAbAPAIAeQAJAegQAbQgJASgSAKQgRAKgTAAIgCAAg");
	this.shape_32.setTransform(491,499.7,0.294,0.294);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f("#F5575A").s().p("AiCEYQgWgWAAgfQAAgMAEgMICcnGQAKgdAcgOQAcgNAdAKQAeAKANAcQANAcgKAdIicHGQgIAXgTAOQgUAOgXAAQgfgBgWgWg");
	this.shape_33.setTransform(478.5,458.2,0.294,0.294);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f("#F67185").s().p("AhhBiQgogoAAg6QAAg5AogoQApgoA4AAQA5AAApAoQAoAoAAA5QAAA6goAoQgpAog5AAQg4AAgpgog");
	this.shape_34.setTransform(487.2,501.1,0.294,0.294);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f("#F78C7E").s().p("AEMJiQgVAAgSgLQgSgLgKgTIoYwuQgOgcALgdQAJgeAcgOQAcgOAdAKQAdAKAOAcIIZQuQAOAcgLAdQgJAegdAOQgPAIgSAAg");
	this.shape_35.setTransform(477.8,483.9,0.294,0.294);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f("#3F506E").s().p("Aj1AWIATmNIHYBiIABKNgAAMhQIAAgHIgNgDg");
	this.shape_36.setTransform(476.2,499.4,0.294,0.294);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f("#3F506E").s().p("Ah/AHIAKjFID1AzIAAFKg");
	this.shape_37.setTransform(476.3,498.1,0.294,0.294);

	this.shape_38 = new cjs.Shape();
	this.shape_38.graphics.f("#3F506E").s().p("AgxN7QgwgDgggkQgggkACgxIBW4IQACgwAkghQAjghAwABQAwACAhAkQAhAjgCAxIhWYMQgCAvgiAgQgiAgguAAg");
	this.shape_38.setTransform(471.3,520.9,0.294,0.294);

	this.shape_39 = new cjs.Shape();
	this.shape_39.graphics.f("#3F506E").s().p("AANOIQguAAgighQgigigBgwIgc4lQgBgxAigjQAhgiAxgBIACAAQAvAAAiAhQAiAiABAwIAcYlQABAxgiAjQgiAjgwAAg");
	this.shape_39.setTransform(480.4,526.8,0.294,0.294);

	this.shape_40 = new cjs.Shape();
	this.shape_40.graphics.f("#507FBC").s().p("AhBC9QgbgcAAgmIAAj4QAAgmAdgbQAdgaAlABQAlABAaAaQAaAaABAlIAAD4QAAAmgbAcQgcAbgmAAQgmAAgbgbg");
	this.shape_40.setTransform(470,544.5,0.294,0.294);

	this.shape_41 = new cjs.Shape();
	this.shape_41.graphics.f("#3F506E").s().p("AiuB8QggggAAgtQAAghASgaQASgbAfgNIDohhQAggNAfAOQAgANANAgQALAbgIAcQgJAcgYAQIjQCNQgbATgiAAQgtAAgfggg");
	this.shape_41.setTransform(473,547.5,0.294,0.294);

	this.shape_42 = new cjs.Shape();
	this.shape_42.graphics.f("#507FBC").s().p("AAADbQgmAAgbgbQgcgcAAgmIAAj3QgBgnAbgcQAagdAngBQAmgBAcAaQAcAbACAmIAAD+QAAAmgcAcQgbAbgnAAg");
	this.shape_42.setTransform(480.8,551,0.294,0.294);

	this.shape_43 = new cjs.Shape();
	this.shape_43.graphics.f("#3F506E").s().p("Ah6CZQgsgKgXgmQgYgmAKgsQAGgYARgUQARgVAYgKIDohgQAggNAgANQAfANANAgQALAbgIAcQgJAcgYAQIjQCNQgbATgiAAQgOAAgKgDg");
	this.shape_43.setTransform(483.9,554.7,0.294,0.294);

	this.shape_44 = new cjs.Shape();
	this.shape_44.graphics.f("#E24A8C").s().p("AAADOIiwCSIAAuLIFhDMIAAOLg");
	this.shape_44.setTransform(490.9,516,0.294,0.294);

	this.shape_45 = new cjs.Shape();
	this.shape_45.graphics.f("#F67185").s().p("EgqBAScIlijMIA/AFQBYAEB3gJQF9gfIpiVUAbqgHgAsLgXXIEeDnQkHCGmiDKQtFGSsJFOUgmWAQggPAAAAIgYAAg");
	this.shape_45.setTransform(575,471,0.294,0.294);

	this.shape_46 = new cjs.Shape();
	this.shape_46.graphics.f("#6CACE6").s().p("AhVBWQgkgjAAgzQAAgxAkgkQAjgkAyAAQAyAAAkAkQAkAkAAAxQAAAzgkAjQgkAkgyAAQgyAAgjgkg");
	this.shape_46.setTransform(578.5,544.5,0.294,0.294);

	this.shape_47 = new cjs.Shape();
	this.shape_47.graphics.f("#E5FFFB").s().p("AjEE/QgxgmgQg3QgQg8AhgvIEvnZICGBVIAAABQA4AjAOBBQAOBAgjA3IjaFTQgvA9hBAEIgJAAQg0AAgvgkg");
	this.shape_47.setTransform(581.5,538.7,0.294,0.294);

	this.shape_48 = new cjs.Shape();
	this.shape_48.graphics.f("#3F506E").s().p("AgyAzQgVgVAAgeQAAgdAVgVQAVgVAdAAQAeAAAVAVQAVAVAAAdQAAAegVAVQgVAVgeAAQgdAAgVgVg");
	this.shape_48.setTransform(568.3,514.5,0.294,0.294);

	this.shape_49 = new cjs.Shape();
	this.shape_49.graphics.f("#3F506E").s().p("AgyAzQgVgWAAgdQAAgcAVgWQAVgVAdAAQAeAAAVAVQAVAWAAAcQAAAdgVAWQgVAVgeAAQgdAAgVgVg");
	this.shape_49.setTransform(575.4,516.6,0.294,0.294);

	this.shape_50 = new cjs.Shape();
	this.shape_50.graphics.f("#F9B944").s().p("AhPHvQgegZAShUQAShSAxhFQAJgNA8hCQAggjgBgjQgBgdgGgNQgHgRgUgEQgpgIg8ApQg1AigJAVQgsBdACBeIABA/QgDAggOAZQgGALgXAAQgXAAgZgMQhCgegLhKQgFghAIgnQAOhAAwgzQAvgzARgaQATgcAHghQABgHgIgyQgKg6ABguQAEieB5h7QAwgwBOgEQBJgDBBAiQA+AhAiBFQATAmAPBAQAMAwgBAyQgBBRghBFQggBDhXBJQglAegPATQgWAdgDAkQgDAiAUAuQARAqgJAfQgSBAhRAmQgrAVgfAAQgWAAgPgMg");
	this.shape_50.setTransform(572.7,512.2,0.294,0.294);

	this.shape_51 = new cjs.Shape();
	this.shape_51.graphics.f("#F78C7E").s().p("AhBDWQhYgbgshSQgrhSAbhYQAbhZBSgrQBSgsBYAcQBZAbArBSQAsBSgcBYQgbBYhSAsQgzAbg1AAQggAAgigLg");
	this.shape_51.setTransform(575.7,508.4,0.294,0.294);

	this.shape_52 = new cjs.Shape();
	this.shape_52.graphics.f("#507FBC").s().p("ACJHtQgnAAgegXQiLhnhHhWQhhh2gNiBQgXjjDtkGQAhgjAwgCQAxgBAjAhQAiAhACAuQADAvgfAkQinC5ANB7QAHBCA9BFQAzA6BrBPQAnAdAHAwQAIAwgeAnQgQAWgZANQgZAMgcAAg");
	this.shape_52.setTransform(566.3,533.4,0.294,0.294);

	this.shape_53 = new cjs.Shape();
	this.shape_53.graphics.f("#507FBC").s().p("Ag3GnQgigiAAgxQAAgiATgdQATgeAfgOQBMgiApgjQAigdAAgUQAAgkg5g8QhqhvkNiOQgrgWgPguQgPgvAWgrQAWgrAugPQAugPArAWIADACQElCbCHCIQCGCIgECIQgHDGkcB/QgXAKgZAAQgvAAgjgig");
	this.shape_53.setTransform(585.2,531.3,0.294,0.294);

	this.shape_54 = new cjs.Shape();
	this.shape_54.graphics.lf(["#6CACE6","#DFF3FF"],[0,1],-7.8,-140.7,14.8,104.6).s().p("Ag9PrQgUgFg2gSQg3gSgQgHQg8gbghgcQgkgeAAgdQgEmpABluQACrIAaiZQARhjBog+QBkg7B5AHQCCAHBSBRQBfBdAACoIgBZFQAABTiCARQggAEgjAAQhaAAhwgbg");
	this.shape_54.setTransform(573.3,546.3,0.294,0.294);

	this.shape_55 = new cjs.Shape();
	this.shape_55.graphics.f("#E5FFFB").s().p("Aj1FpQgxgmgQg4QgQg7AhgvIE8nkQAjg3BBgOQBAgOA4AjQA3AjAOBBQAOBAgjA4Ik7HjQgwA9hBAEIgJAAQg0AAgvgkg");
	this.shape_55.setTransform(589.4,527.5,0.294,0.294);

	this.shape_56 = new cjs.Shape();
	this.shape_56.graphics.f("#F5575A").s().p("AhEClQgWgWAAgfIABgKIAgjgQAEgfAZgSQAZgTAdAEQAfAFATAYQASAZgEAfIggDgQgDAbgWATQgVASgbAAQgfAAgWgWg");
	this.shape_56.setTransform(575,514.1,0.294,0.294);

	this.shape_57 = new cjs.Shape();
	this.shape_57.graphics.f("#F78C7E").s().p("AgmPcQgbgbgBgmIg18zQAAgnAcgbQAcgbAmAAQAkABAbAZQAbAZACAlIA1czQABAmgaAdQgbAcgnABIgCAAQglAAgcgag");
	this.shape_57.setTransform(577,579.2,0.294,0.294);

	this.shape_58 = new cjs.Shape();
	this.shape_58.graphics.f("#3F506E").s().p("Ai9COQgighAAgvQAAghASgcQARgbAegOIEGh+QAfgOAhALQAhAMAPAgQAMAbgHAcQgHAdgXASIjoCvQgeAXgmAAQgvAAghghg");
	this.shape_58.setTransform(580.6,606.2,0.294,0.294);

	this.shape_59 = new cjs.Shape();
	this.shape_59.graphics.f("#F78C7E").s().p("AipM/QgcgcAAgnQAAgNAGgRQCEmFAwpNQAOi4AFi4IACiWQAAgnAbgcQAbgcAnAAIABAAQAnAAAbAbQAbAbAAAmIgBCoQgGC+gPC/QgzJZiKGaQgKAcgYASQgZARgdAAQgnAAgcgbg");
	this.shape_59.setTransform(564.5,580.8,0.294,0.294);

	this.shape_60 = new cjs.Shape();
	this.shape_60.graphics.f("#F78C7E").s().p("AgSCMQg6gIgkgvQgjguAIg5QAIg6AugkQAvgjA5AIQA6AIAjAuQAkAvgIA5QgIA6gvAjQglAdguAAIgUgBg");
	this.shape_60.setTransform(583.8,542,0.294,0.294);

	this.shape_61 = new cjs.Shape();
	this.shape_61.graphics.f("#3F506E").s().p("AirCmQghghAAgwQAAgaAMgYQALgXAVgPIDmizQAcgVAiAFQAjAFAVAcQASAXgBAeQgBAdgTAXIi9DcQgQASgWAKQgXALgYAAIgBAAQgvAAgighg");
	this.shape_61.setTransform(563.7,601.7,0.294,0.294);

	this.shape_62 = new cjs.Shape();
	this.shape_62.graphics.f("#C2DBEE").s().p("AnGEZQi9h0AAilQAAikC9h0QC8h1EKAAQELAAC9B1QC8B0AACkQAACli8B0Qi9B1kLAAQkKAAi8h1g");
	this.shape_62.setTransform(572.8,605.4,0.294,0.294);

	this.shape_63 = new cjs.Shape();
	this.shape_63.graphics.f("#DEEBF3").s().p("ADfDGIoulBQgPgJgFgRQgEgRAJgPQAGgLAJgFQAagPAfAAQAeAAAaAPIIuFCQAPAIAEARQAFARgIAQQgGAKgKAFQgaAPgeAAQgfAAgagPg");
	this.shape_63.setTransform(538.3,495.6,0.294,0.294);

	this.shape_64 = new cjs.Shape();
	this.shape_64.graphics.f("#DEEBF3").s().p("AIIFxIx/qYQgQgJgEgQQgFgRAJgQQAFgJALgHQAagPAeAAQAeAAAaAPISAKZQAPAIAEARQAFARgJAQQgGALgJAEQgaAPgfAAQgeAAgagPg");
	this.shape_64.setTransform(554.6,496.3,0.294,0.294);

	this.shape_65 = new cjs.Shape();
	this.shape_65.graphics.f("#DEEBF3").s().p("AIIFxIyAqYQgPgJgEgRQgFgRAJgPQAFgJAKgHQAbgPAeAAQAeAAAaAPIR/KZQAQAIAEARQAFARgJAQQgGAKgKAFQgaAQgeAAQgeAAgagQg");
	this.shape_65.setTransform(562.1,492,0.294,0.294);

	this.shape_66 = new cjs.Shape();
	this.shape_66.graphics.f("#DEEBF3").s().p("AIIFxIx/qYQgQgIgEgSQgFgRAJgPQAGgKAKgGQAagPAeAAQAeAAAaAPISAKZQAPAIAEASQAFARgJAPQgGALgJAEQgaAPgfABQgegBgagPg");
	this.shape_66.setTransform(569.5,487.7,0.294,0.294);

	this.shape_67 = new cjs.Shape();
	this.shape_67.graphics.f("#DEEBF3").s().p("AD1DTIpZlbQgQgJgEgRQgFgRAJgPQAFgJALgHQAagPAeAAQAeAAAaAPIJZFbQAPAJAFARQAEARgIAPQgFAJgLAHQgaAPgeAAQgeAAgagPg");
	this.shape_67.setTransform(574.7,475.1,0.294,0.294);

	this.shape_68 = new cjs.Shape();
	this.shape_68.graphics.f("#DEEBF3").s().p("AIIFyIyAqZQgPgJgEgRQgFgRAJgPQAGgJAJgHQAbgPAeAAQAeAAAaAPIR/KZQAQAJAEARQAFARgJAPQgGAKgKAGQgaAPgeAAQgeAAgagPg");
	this.shape_68.setTransform(590.3,475.4,0.294,0.294);

	this.shape_69 = new cjs.Shape();
	this.shape_69.graphics.f("#DEEBF3").s().p("AIIFyIx/qZQgQgIgEgRQgFgRAJgQQAFgJALgHQAagPAeAAQAeAAAaAQISAKYQAPAJAEARQAFARgJAPQgGAKgJAGQgaAPgfAAQgeAAgagPg");
	this.shape_69.setTransform(597.7,471.1,0.294,0.294);

	this.shape_70 = new cjs.Shape();
	this.shape_70.graphics.f("#DEEBF3").s().p("AIIFxIyAqYQgPgIgEgSQgFgRAJgPQAGgKAJgFQAbgQAeAAQAeAAAaAQIR/KYQAQAJAEARQAFARgJAPQgGALgKAEQgaAPgeABQgegBgagPg");
	this.shape_70.setTransform(605.2,466.8,0.294,0.294);

	this.shape_71 = new cjs.Shape();
	this.shape_71.graphics.f("#DEEBF3").s().p("AIIFyIx/qZQgQgJgEgRQgFgRAJgPQAGgKAKgGQAagPAeAAQAeAAAaAPIR/KZQAQAIAEARQAFARgJAQQgGAKgKAGQgaAPgeAAQgeAAgagPg");
	this.shape_71.setTransform(612.7,462.5,0.294,0.294);

	this.shape_72 = new cjs.Shape();
	this.shape_72.graphics.f("#DEEBF3").s().p("AIIFyIx/qZQgQgJgEgRQgFgQAJgQQAFgJALgGQAagPAegBQAeABAaAPISAKYQAPAIAEASQAFARgJAPQgGAKgJAGQgaAOgfAAQgeAAgagOg");
	this.shape_72.setTransform(620.2,458.1,0.294,0.294);

	this.shape_73 = new cjs.Shape();
	this.shape_73.graphics.f("#DEEBF3").s().p("AIIFxIx/qYQgQgJgEgRQgFgRAJgPQAGgLAKgEQAagPAegBQAeABAaAPIR/KYQAQAIAEASQAFARgJAPQgFAJgLAGQgaAQgeAAQgeAAgagQg");
	this.shape_73.setTransform(627.7,453.8,0.294,0.294);

	this.shape_74 = new cjs.Shape();
	this.shape_74.graphics.f("#DEEBF3").s().p("ADfDGIotlBQgQgJgEgRQgFgRAJgQQAGgLAKgEQAagPAeAAQAeAAAaAPIIuFCQAPAIAFARQAEARgJAPQgFALgKAFQgaAPgeAAQgeAAgbgPg");
	this.shape_74.setTransform(480.4,459.3,0.294,0.294);

	this.shape_75 = new cjs.Shape();
	this.shape_75.graphics.f("#DEEBF3").s().p("AD/DZIptlnQgQgIgEgRQgFgRAJgQQAGgKAKgFQAagQAeAAQAeAAAaAQIJtFmQAQAJAEARQAFARgJAPQgGAKgKAGQgaAPgeAAQgeAAgagPg");
	this.shape_75.setTransform(488.8,455.5,0.294,0.294);

	this.shape_76 = new cjs.Shape();
	this.shape_76.graphics.f("#DEEBF3").s().p("AD/DYIptllQgPgJgFgRQgEgRAIgQQAFgJALgHQAagPAeABQAfgBAZAPIJtFnQAQAIAEARQAEARgIAQQgHAKgJAFQgZAQgfgBQgeABgagQg");
	this.shape_76.setTransform(496.3,451.2,0.294,0.294);

	this.shape_77 = new cjs.Shape();
	this.shape_77.graphics.f("#DEEBF3").s().p("AD/DZIptlmQgQgJgEgRQgFgRAJgQQAFgJALgGQAagQAeABQAegBAaAQIJtFmQAQAJAEARQAFARgJAPQgGAKgKAGQgaAOgeAAQgeAAgagOg");
	this.shape_77.setTransform(503.8,446.9,0.294,0.294);

	this.shape_78 = new cjs.Shape();
	this.shape_78.graphics.f("#DEEBF3").s().p("AD1DTIpZlbQgPgJgFgRQgEgRAIgPQAFgJALgHQAagPAeAAQAeAAAaAPIJZFbQAQAJAEARQAFARgJAPQgFAJgLAHQgaAPgeAAQgeAAgagPg");
	this.shape_78.setTransform(516.7,438.8,0.294,0.294);

	this.shape_79 = new cjs.Shape();
	this.shape_79.graphics.f("#DEEBF3").s().p("AD/DYIptlmQgQgIgEgRQgFgRAJgQQAFgJALgHQAagOAeAAQAeAAAaAOIJtFnQAQAJAEARQAFARgJAPQgGAKgKAFQgaAQgegBQgeABgagQg");
	this.shape_79.setTransform(524.5,434.6,0.294,0.294);

	this.shape_80 = new cjs.Shape();
	this.shape_80.graphics.f("#DEEBF3").s().p("AD/DYIptlmQgQgIgEgSQgEgRAIgPQAFgKALgGQAagPAeAAQAeAAAaAPIJtFnQAQAJAEARQAEAQgIAPQgHALgJAFQgaAPgeABQgegBgagPg");
	this.shape_80.setTransform(532,430.3,0.294,0.294);

	this.shape_81 = new cjs.Shape();
	this.shape_81.graphics.f("#DEEBF3").s().p("AD/DYIptlmQgQgIgEgSQgFgRAJgPQAFgJALgHQAagPAeAAQAeAAAaAPIJtFnQAQAJAEARQAFAQgJAQQgFAJgLAGQgaAPgeABQgegBgagPg");
	this.shape_81.setTransform(539.5,426,0.294,0.294);

	this.shape_82 = new cjs.Shape();
	this.shape_82.graphics.f("#DEEBF3").s().p("AD/DYIpulmQgOgIgFgRQgFgSAJgPQAGgKAJgGQAbgOAeAAQAeAAAaAOIJuFnQAPAIAEARQAEARgIAQQgGAKgJAFQgbAPgeAAQgeAAgagPg");
	this.shape_82.setTransform(547,421.7,0.294,0.294);

	this.shape_83 = new cjs.Shape();
	this.shape_83.graphics.f("#DEEBF3").s().p("AD/DYIptllQgPgJgFgRQgFgRAJgQQAHgKAJgGQAagOAeAAQAeAAAaAOIJtFnQAQAIAEARQAEARgIAQQgGAKgKAFQgaAQgegBQgeABgagQg");
	this.shape_83.setTransform(554.5,417.3,0.294,0.294);

	this.shape_84 = new cjs.Shape();
	this.shape_84.graphics.f("#DEEBF3").s().p("AD/DZIptlnQgQgJgEgQQgFgSAJgPQAGgLAKgFQAagPAeABQAegBAbAPIJsFmQAPAKAFAQQAFARgJAQQgGAJgKAHQgaAPgegBQgeABgagPg");
	this.shape_84.setTransform(561.9,413,0.294,0.294);

	this.shape_85 = new cjs.Shape();
	this.shape_85.graphics.f("#DEEBF3").s().p("ADqEUIq5mSQgfgTgKgiQgJgjASgfQALgTAVgMQA1geA+gBQA9ABA2AeIK5GSQAfATAKAiQAJAkgTAeQgMAUgTALQg1Afg+AAQg9AAg2gfg");
	this.shape_85.setTransform(454.4,440,0.294,0.294);

	this.shape_86 = new cjs.Shape();
	this.shape_86.graphics.f("#DEEBF3").s().p("ADqEUIq6mSQgegSgKgjQgJgjASgfQAMgTATgMQA2gfA9AAQA+AAA1AfIK6GSQAfATAKAiQAJAjgTAgQgLATgUALQg1Afg+ABQg9gBg2gfg");
	this.shape_86.setTransform(479.7,425.4,0.294,0.294);

	this.shape_87 = new cjs.Shape();
	this.shape_87.graphics.f("#DEEBF3").s().p("ADqEUIq5mRQgfgTgJgiQgKgjATgfQALgUAUgLQA1gfA+AAQA9gBA2AfIK5GSQAfATAKAiQAJAjgTAfQgLAUgUALQg1Afg+AAQg9AAg2gfg");
	this.shape_87.setTransform(504.6,411.2,0.294,0.294);

	this.shape_88 = new cjs.Shape();
	this.shape_88.graphics.f("#DEEBF3").s().p("ADqEUIq5mSQgfgSgKgjQgJgjASgfQANgUATgLQA1geA+AAQA9AAA2AeIK5GSQAfATAKAiQAJAjgTAfQgLAUgUALQg1Afg+AAQg9AAg2gfg");
	this.shape_88.setTransform(529.9,396.6,0.294,0.294);

	this.shape_89 = new cjs.Shape();
	this.shape_89.graphics.f("#3F506E").s().p("AhKCAQgggRAAgxQAAgxAgg1QAfg1ArgZQAtgaAeARQAgARAAAxQAAAxggA0QgeA1gtAaQgZAQgWAAQgPAAgMgHg");
	this.shape_89.setTransform(303.8,93.1,0.294,0.294);

	this.shape_90 = new cjs.Shape();
	this.shape_90.graphics.f("#507FBC").s().p("AktE/Qg2gdAAhUQAAhVA2hbQA1haBMgsIFZjHQBMgsA2AdQA1AdAABUQAABVg1BbQg2BahMAsIlZDHQguAbglAAQgZAAgVgMg");
	this.shape_90.setTransform(308.9,89.5,0.294,0.294);

	this.shape_91 = new cjs.Shape();
	this.shape_91.graphics.f("#6CACE6").s().p("AqUIRQg2g3gBhNQAAiHBEh1QBDh1B2hDIOCoHQArgZAyAAQBNAAA3A3QA2A3AABNQAACHhDB1QhEB1h1BCIuCIIQgtAZgwAAQhNAAg3g3g");
	this.shape_91.setTransform(316,85,0.294,0.294);

	this.shape_92 = new cjs.Shape();
	this.shape_92.graphics.lf(["#DFF3FF","#6CACE6"],[0,1],-75.1,0,75.2,0).s().p("AqNINQgugZgagsQgagrAAg0QAAiHBEh1QBEh0B1hEIOCoHQArgZAyAAQAyAAArAZICmBgIjNFjIAAksQgECJgRBMQgjCXhoA8IqZEVIjSFqg");
	this.shape_92.setTransform(312.1,83.3,0.294,0.294);

	this.shape_93 = new cjs.Shape();
	this.shape_93.graphics.f("#F9B2AA").s().p("AAkDiQgegGgagQQhVgwgShuQgRhtA9hrIACgCQAUgjAjgNQAfgMAjAKQAjAJAWAbQAZAdAAAoIABENQAAAfgWAWQgWAWgfAAg");
	this.shape_93.setTransform(284.8,183.8,0.294,0.294);

	this.shape_94 = new cjs.Shape();
	this.shape_94.graphics.f("#3F506E").s().p("ArUNPQhXgygnhbQh0kJgWkHQgimYDRkmQCVjQEohTQEYhOEwA7QE7A+DPC4QDmDLAaEoQABC2i/CCQi+CCkOABQhzABhsgaQhogYhVgvIgBAAIidhaQAABchBBCQhBBDhdAAQg9AAgzgdIgPgJIACGUQABApgdAeQgdAegqAAQgcAAgXgNg");
	this.shape_94.setTransform(303.8,167.1,0.294,0.294);

	this.shape_95 = new cjs.Shape();
	this.shape_95.graphics.lf(["#507FBC","#88C9FF"],[0,1],-21.5,-13.5,37.7,23.6).s().p("Ah8DcQhEgngMhcQgLhbA0hbQA0hbBUglQBUglBEAnQBFAnALBcQALBbg0BbQg0BbhUAlQgpASglAAQgnAAgjgUg");
	this.shape_95.setTransform(314.8,189.2,0.294,0.294);

	this.shape_96 = new cjs.Shape();
	this.shape_96.graphics.lf(["#507FBC","#88C9FF"],[0,1],-44.2,-27.7,14.9,9.4).s().p("Ah8DcQhEgngMhcQgMhbA0hbQA0hbBVglQBUglBEAnQBEAnAMBcQALBbg0BbQgzBbhVAlQgpASglAAQgnAAgjgUg");
	this.shape_96.setTransform(329.5,180.6,0.294,0.294);

	this.shape_97 = new cjs.Shape();
	this.shape_97.graphics.f("#3F506E").s().p("Ah8DcQhEgngMhcQgMhbA0hbQA0hbBVglQBUglBEAnQBEAnAMBcQALBbg0BbQgzBbhVAlQgpASglAAQgnAAgjgUg");
	this.shape_97.setTransform(313.3,188.4,0.294,0.294);

	this.shape_98 = new cjs.Shape();
	this.shape_98.graphics.f("#3F506E").s().p("Ah8DcQhEgngMhcQgMhbA0hbQA1haBUglQBUglBEAmQBEAnAMBcQAMBbg0BbQg1BbhUAlQgpASglAAQgoAAgigUg");
	this.shape_98.setTransform(328,179.7,0.294,0.294);

	this.shape_99 = new cjs.Shape();
	this.shape_99.graphics.f("#3F506E").s().p("AldirIAPg3IKsGFIAABAg");
	this.shape_99.setTransform(297.7,184.1,0.294,0.294);

	this.shape_100 = new cjs.Shape();
	this.shape_100.graphics.f("#3F506E").s().p("AhKAHICEhNIARA3IiUBWg");
	this.shape_100.setTransform(321,185,0.294,0.294);

	this.shape_101 = new cjs.Shape();
	this.shape_101.graphics.lf(["#F78C7E","#DFF3FF"],[0,1],-63.5,0,63.6,0).s().p("AhnLRQhYgVhJgoIgBAAIlrjPIgGykITvgHIAGRUQABCbihBuQiiBujkABIgFABQheAAhZgWg");
	this.shape_101.setTransform(311.2,187.1,0.294,0.294);

	this.shape_102 = new cjs.Shape();
	this.shape_102.graphics.f("#C2DBEE").s().p("Am+k3IN6i0IADJOQABCIh4BtQh2Bsi7Aog");
	this.shape_102.setTransform(305.8,209.6,0.294,0.294);

	this.shape_103 = new cjs.Shape();
	this.shape_103.graphics.f("#F78C7E").s().p("AmlP1Qizh3AAiqIgL83IS8gGIAKc2QABCqixB5QiwB5j8ABIgEAAQj3AAixh1g");
	this.shape_103.setTransform(301,191.4,0.294,0.294);

	this.shape_104 = new cjs.Shape();
	this.shape_104.graphics.f("#FFFFFF").s().p("AptGpQh6hShEhrQhGhuAAh5QgBh4BFhvQBChsB6hTQEBivFtgDQFtgCEDCtQB7BSBEBrQBGBuAAB5QABB4hFBvQhCBrh6BTQkCCwltACIgJABQlnAAkAirg");
	this.shape_104.setTransform(301.2,212.5,0.294,0.294);

	this.shape_105 = new cjs.Shape();
	this.shape_105.graphics.f("#3F506E").s().p("Ah0N3IBGzKQgHjPihiwQgzg3g8guIgygiIE2i1IArAmQAzAyAuA6QCSC5AaDEICBRVIj2G5g");
	this.shape_105.setTransform(319.1,248.5,0.294,0.294);

	this.shape_106 = new cjs.Shape();
	this.shape_106.graphics.f("#FFFFFF").s().p("AjbDeQhbhbAAiBQgBiABbhcQBahcCBgBQCAAABcBaQBcBbAACBQABCAhbBcQhbBciAABIgCAAQiAAAhbhag");
	this.shape_106.setTransform(317.3,227.3,0.294,0.294);

	this.shape_107 = new cjs.Shape();
	this.shape_107.graphics.lf(["#4EA6E2","#80CEFF","#DFF3FF"],[0,0.349,1],-159.5,0,159.6,0).s().p("AyXSBQi9hKhvh3Qh1h9AAiPIgClGQgBh1AOhWQAaibBLiTQDWmlJalgQHLkMHCgvQGAgpFRB5QEYBlC0C3QCnCqABCUIACFYQAAB8grBXQhICSjKB2I1iMnQj2COkxAOIhAABQj0AAjZhVg");
	this.shape_107.setTransform(300.3,228.7,0.294,0.294);

	this.shape_108 = new cjs.Shape();
	this.shape_108.graphics.f("#FFFFFF").s().p("AuYTdI0nrwMAwZgcTIT1LTQA1AeAdAzQAvBQgXBZQgYBahQAuMgmwAWqQiDBNiZABIgEAAQiXAAiChKg");
	this.shape_108.setTransform(297.4,239.5,0.294,0.294);

	this.shape_109 = new cjs.Shape();
	this.shape_109.graphics.lf(["#6CACE6","#DFF3FF"],[0,1],-26.3,0.3,-268.7,2.7).s().p("AuWStI0prwIgBkRIGnhLMAjAgUeQBig5BzgBQByAABjA4IJ0FmIL6CXIACDvQABARgBAQQgEA4gdAvQgdAvgwAbMgmwAWrQiEBNiYABIgCAAQiYAAiDhLg");
	this.shape_109.setTransform(297.5,248.9,0.294,0.294);

	this.shape_110 = new cjs.Shape();
	this.shape_110.graphics.f("#6CACE6").s().p("AkiB0Qh5hKAAhpIAAh/IM3AAIAAB/QAABph4BKQh5BLirAAQiqAAh4hLg");
	this.shape_110.setTransform(557.1,153.2,0.294,0.294);

	this.shape_111 = new cjs.Shape();
	this.shape_111.graphics.f("#6CACE6").s().p("AggKbQgOgOAAgTIAAzzQAAgTAOgOQAOgNASAAQATAAAOANQAOAOAAATIAATzQAAATgOAOQgOANgTAAQgSAAgOgNg");
	this.shape_111.setTransform(548.9,167.9,0.294,0.294);

	this.shape_112 = new cjs.Shape();
	this.shape_112.graphics.f("#6CACE6").s().p("AggKbQgOgOAAgUIAAzyQAAgTAOgNQANgOATgBQATABAOAOQAOANAAATIAATyQAAAUgOAOQgOANgTAAQgTAAgNgNg");
	this.shape_112.setTransform(566.1,168.3,0.294,0.294);

	this.shape_113 = new cjs.Shape();
	this.shape_113.graphics.f("#6CACE6").s().p("AggKbQgOgOAAgUIAAzxQAAgUAOgNQANgOATAAQATAAAOAOQAOANAAAUIAATyQgBATgNAOQgOANgTAAQgTAAgNgNg");
	this.shape_113.setTransform(557.5,173.3,0.294,0.294);

	this.shape_114 = new cjs.Shape();
	this.shape_114.graphics.f("#C2DBEE").s().p("AkjC0Qh5hKABhqQgBhpB5hKQB5hLCqAAQCrAAB5BLQB4BKAABpQAABph4BLQh5BLirAAQiqAAh5hLg");
	this.shape_114.setTransform(557.1,186.9,0.294,0.294);

	this.shape_115 = new cjs.Shape();
	this.shape_115.graphics.f("#507FBC").s().p("AmRBoIJGlPIDcCAIpFFPg");
	this.shape_115.setTransform(528.4,131,0.294,0.294);

	this.shape_116 = new cjs.Shape();
	this.shape_116.graphics.f("#FFFFFF").s().p("AjrEAIjPh4QgIgFgFgIQgHgMAEgOQADgNANgHIJAlMQAYgOAaAAQAcAAAYAOIDPB4QAIAEAFAIQAGAMgDAOQgEAOgMAHIo/FMQgXAOgcAAQgcAAgYgOg");
	this.shape_116.setTransform(528.4,131.8,0.294,0.294);

	this.shape_117 = new cjs.Shape();
	this.shape_117.graphics.f("#FFFFFF").s().p("AoUF5QgXgXAAghIAAhQIRXqAIAACrQgBAWgKASQgKASgTALIu4IlQgTALgUAAQgiAAgXgYg");
	this.shape_117.setTransform(510.4,112.3,0.294,0.294);

	this.shape_118 = new cjs.Shape();
	this.shape_118.graphics.f("#3F506E").s().p("AorAPQAAgxAZgsQAZgrAsgZIOCoHQATgLAVAAQAhAAAXAXQAXAXAAAhIAAJ5IxXKBg");
	this.shape_118.setTransform(510.4,99.5,0.294,0.294);

	this.shape_119 = new cjs.Shape();
	this.shape_119.graphics.f("#6CACE6").s().p("AoGLrQhBgoAAguIAArmQABgyAZgsQAZgrArgZIODoHQAogYBDAiQBDAhAAAuIg3MPQAAAWgLASQgLASgSALIuHJKQgOAIgRAAQgfAAgqgag");
	this.shape_119.setTransform(509.6,101.4,0.294,0.294);

	this.shape_120 = new cjs.Shape();
	this.shape_120.graphics.f("#ADF6FF").s().p("Ah4CwQgNgNAAgSIAAiyIELiaIAADKQgBAYgLAUQgMAVgVAMIicBbQgLAGgLAAQgSAAgNgNg");
	this.shape_120.setTransform(509.9,118.6,0.294,0.294);

	this.shape_121 = new cjs.Shape();
	this.shape_121.graphics.f("#FFFFFF").s().p("AjeB5QhcgyAAhHQAAhGBcgyQBcgzCCAAQCCAABdAzQBcAyAABGQAABHhcAyQhdAziCAAQiCAAhcgzg");
	this.shape_121.setTransform(509.9,121.9,0.294,0.294);

	this.shape_122 = new cjs.Shape();
	this.shape_122.graphics.f("#ADF6FF").s().p("AjeB6QhcgzAAhHQAAhGBcgyQBcgzCCAAQCCAABdAzQBcAyAABGQAABHhcAzQhdAyiCAAQiCAAhcgyg");
	this.shape_122.setTransform(509.9,123.1,0.294,0.294);

	this.shape_123 = new cjs.Shape();
	this.shape_123.graphics.lf(["#FFFFFF","#DEEBF3"],[0,1],-207.3,0,207.4,0).s().p("AkUR6I6mvWQgrgZgagtQgnhEAUhKQAUhMBEgnIamvXQCBhKCTAAQCUAACBBKIamPXQArAaAaArQAnBEgUBLQgUBLhEAoI6mPWQiBBLiUAAQiTAAiBhLg");
	this.shape_123.setTransform(505,115.1,0.294,0.294);

	this.shape_124 = new cjs.Shape();
	this.shape_124.graphics.lf(["#4EA6E2","#80CEFF","#DFF3FF"],[0,0.349,1],-122.6,0,340.3,0).s().p("AL4LvI6lvWQgsgZgZgrQgZgsgBgzIAAmuMAgZASsIAAHFQiWAAh/hKg");
	this.shape_124.setTransform(474.6,139.4,0.294,0.294);

	this.shape_125 = new cjs.Shape();
	this.shape_125.graphics.lf(["#4EA6E2","#80CEFF","#DFF3FF"],[0,0.349,1],-329.9,0,133,0).s().p("AwMF0MAgZgSsIAAGtQAAAzgZAsQgaAsgsAZI6lPWQiABKiVAAg");
	this.shape_125.setTransform(535.4,139.4,0.294,0.294);

	this.shape_126 = new cjs.Shape();
	this.shape_126.graphics.f("#C2DBEE").s().p("AkUOjI5NujIZNujQCBhKCTAAQCUAACBBKIZNOjI5NOjQiBBLiUAAQiUAAiAhLg");
	this.shape_126.setTransform(505,162.2,0.294,0.294);

	this.shape_127 = new cjs.Shape();
	this.shape_127.graphics.f("#C2DBEE").s().p("AwMkiIAAnGQCVAACABKIalPVQAqAYAZAoQAZApADAvIAAAMQAAAzgZAtQgZAsgtAYIi3Bqg");
	this.shape_127.setTransform(535.4,141.9,0.294,0.294);

	this.shape_128 = new cjs.Shape();
	this.shape_128.graphics.f("#C2DBEE").s().p("AutJ/Qg2gfgZg6QgZg6APg9IACgIIAHgVQAZg7A3gfIalvWQCAhKCVAAIAAHGI8DQLg");
	this.shape_128.setTransform(474.6,141.9,0.294,0.294);

	this.shape_129 = new cjs.Shape();
	this.shape_129.graphics.f("#3F506E").s().p("AgsBvQiLgkhVg6QhVg5ASguQATguBwgHQBvgHCKAkQCLAkBVA6QBVA5gSAuQgTAuhwAHIglABQhgAAh0geg");
	this.shape_129.setTransform(122.4,222.3,0.294,0.294);

	this.shape_130 = new cjs.Shape();
	this.shape_130.graphics.f("#507FBC").s().p("AhCCjQjMg1h9hVQh9hUAbhEQAchECkgKQCkgKDLA0QDNA1B9BWQB9BUgbBEQgcBDikALQgbACgcAAQiPAAiqgtg");
	this.shape_130.setTransform(122.4,222.3,0.294,0.294);

	this.shape_131 = new cjs.Shape();
	this.shape_131.graphics.lf(["#6CACE6","#DFF3FF"],[0,1],25.3,-25.7,-103,10.8).s().p("AjJKzQjMg1h9hVQg4gmgagkQgZgkAFgeIABgDIEQx4IPhDuIkPRuQgEAngyAZQgzAahbAFQgbACgdAAQiNAAirgsg");
	this.shape_131.setTransform(118.4,240.4,0.294,0.294);

	this.shape_132 = new cjs.Shape();
	this.shape_132.graphics.f("#507FBC").s().p("AkqH4Qh7hCAAjDQAAjCB7jQQB8jRCuhlQCvhlB8BCQB7BDAADCQAADDh7DQQh8DRivBlQhpA9hWAAQg5AAgygbg");
	this.shape_132.setTransform(121.9,296.3,0.294,0.294);

	this.shape_133 = new cjs.Shape();
	this.shape_133.graphics.lf(["#4EA6E2","#80CEFF","#DFF3FF"],[0,0.349,1],-16.8,-54.4,34.7,8.2).s().p("AksHlQg3ghgehAQgfhEAAhcQAAjDB7jQQB8jRCuhlQBZgzBSgHQBOgHA7AlIBoA8IgZApQg2gchFAHQhIAIhPAtQifBchxDAQhxC/AACyQAABRAaA8QAZA5AuAgIgZAqg");
	this.shape_133.setTransform(118.4,294.8,0.294,0.294);

	this.shape_134 = new cjs.Shape();
	this.shape_134.graphics.lf(["#6CACE6","#DFF3FF"],[0,1],46.3,-127.3,-13.6,430.6).s().p("Au6coMANCg3MIQziMMgMwA19QgNAxgmAhQgmAhgyAGIsXBnQggAEggAAQgyAAgxgJg");
	this.shape_134.setTransform(114.3,317.9,0.294,0.294);

	this.shape_135 = new cjs.Shape();
	this.shape_135.graphics.f("#6CACE6").s().p("Ah8ezIqPl6QgugZgWgvQgWgvAJgzQABgLAEgOMAMpg1iIOOINMgNCA3MQhRgQhJgqg");
	this.shape_135.setTransform(85.4,312.1,0.294,0.294);

	this.shape_136 = new cjs.Shape();
	this.shape_136.graphics.lf(["#FFFFFF","#DEEBF3"],[0,1],-50.3,-4,50.4,4.1).s().p("AhBCjQjNg0h9hWQh9hUAbhEQAchDCkgLQCkgLDMA1QDMA2B9BVQB9BUgbBEQgcBDikALQgbACgcAAQiPAAipgtg");
	this.shape_136.setTransform(87.9,359.2,0.294,0.294);

	this.shape_137 = new cjs.Shape();
	this.shape_137.graphics.lf(["#4EA6E2","#80CEFF","#DFF3FF"],[0,0.349,1],7.5,-19.2,-85.6,5.9).s().p("AjJKyQjMg1h9hVQg4glgaglQgZgjAFgfIABgCIABgEIEPx0IPgDuIkORtQgEAngyAZQgzAahbAGQgbACgcAAQiOAAirgtg");
	this.shape_137.setTransform(89.7,362,0.294,0.294);

	this.shape_138 = new cjs.Shape();
	this.shape_138.graphics.lf(["#FFFFFF","#DEEBF3"],[0,1],38.3,-73.4,-36.1,78.1).s().p("AhqGmQhRgRhIgpIqLl3QgygdgWgzQgTgvAKg0QAKgzAlgkQAngnA5gIIMYhmQBRgLBRAQQBSARBIApIKLF3QAyAdAVAzQAUAvgKA0QgLAzgkAkQgnAng6AIIsXBmQggAEggAAQgxAAgygJg");
	this.shape_138.setTransform(113.2,258.2,0.294,0.294);

	this.instance_11 = new lib.Path_251();
	this.instance_11.parent = this;
	this.instance_11.setTransform(78.1,414.1,0.294,0.294,0,0,0,140,82.5);
	this.instance_11.alpha = 0.5;

	this.shape_139 = new cjs.Shape();
	this.shape_139.graphics.f("#DEEBF3").s().p("Ah0GOIzcrXQgSgLgLgSQgKgSAAgVIAAgeQABATAKARQAKASASALITcLXQA1AeA9AAQA8AAA0geITjrRQASgKALgSQAJgQABgTIAAAdQAAAVgKASQgLASgSAKIzjLRQg0Aeg8AAQg9AAg1geg");
	this.shape_139.setTransform(78,426.6,0.294,0.294);

	this.shape_140 = new cjs.Shape();
	this.shape_140.graphics.f("#ADF6FF").s().p("AVuGIQgLgSgSgKIzcrXQg1gfg9AAQg8AAg0AfIzjLQQgSALgKASQgKARgBATIAAgeQAAgVALgSQAKgSASgKITjrRQA0geA8AAQA9AAA1AeITcLXQASAKALASQAKASAAAVIAAAdQgBgSgJgRg");
	this.shape_140.setTransform(78,402.5,0.294,0.294);

	this.shape_141 = new cjs.Shape();
	this.shape_141.graphics.f("#6CACE6").s().p("AkGOsI10smQAeg5gVhgIgOhCQgFggAKgRIV0smQBqg8B5AAQB5AABpA8IV0MmQAlAVAUAkQAgA4gQA9QgRA+g4AgI10MmQhpA9h5AAQh5AAhqg9g");
	this.shape_141.setTransform(79.1,414.6,0.294,0.294);

	this.shape_142 = new cjs.Shape();
	this.shape_142.graphics.lf(["#507FBC","#88C9FF"],[0,1],-13.8,0,-183.5,0).s().p("AjiJoI10slQgkgUgVgkQgVglAAgpIAAlhIakPUIakvUIAAFhQABApgVAlQgUAkglAUI10MlQhpA9h6AAQh4AAhqg9g");
	this.shape_142.setTransform(78,434.4,0.294,0.294);

	this.shape_143 = new cjs.Shape();
	this.shape_143.graphics.lf(["#DEEBF3","#FFFFFF"],[0,1],100.7,0,-103.6,0).s().p("Aq/ILIjIhzQgQgJgKgSQgPgZAIgdQAHgdAagPIV0smQAxgcA5AAQA4AAAyAcIDHBzQAQALAKAQQAPAagIAdQgHAdgaAPI10MlQgxAcg4AAQg5AAgxgcg");
	this.shape_143.setTransform(78,416.8,0.294,0.294);

	this.shape_144 = new cjs.Shape();
	this.shape_144.graphics.lf(["#6CACE6","#DFF3FF"],[0,1],-58.8,0,-105.7,0).s().p("Aq/OIIjIhzQgQgKgKgQQgKgRAAgTIAAvIIFVDFIYCt4IAAPIQAAATgKARQgJARgRAKI10MlQgxAdg4AAQg5AAgxgdg");
	this.shape_144.setTransform(78,434,0.294,0.294);

	this.shape_145 = new cjs.Shape();
	this.shape_145.graphics.lf(["#FFFFFF","#DEEBF3"],[0,1],-265.8,0,265.9,0).s().p("AliW+MgiGgTsQg6gigfg3QgyhXAahgQAahhBXgyMAiGgTsQCkhfC+AAQC+AAClBfMAiGATsQA6AhAfA4QAyBXgaBgQgaBghXAzMgiGATsQilBfi+AAQi9AAilhfg");
	this.shape_145.setTransform(78.1,440.7,0.294,0.294);

	this.shape_146 = new cjs.Shape();
	this.shape_146.graphics.lf(["#4EA6E2","#80CEFF","#DFF3FF"],[0,0.349,1],-241.1,0,298.9,0).s().p("AliPDMgiGgTrQg5ggggg5Qghg4AAhBIAAonMApiAX9MApjgX9IAAInQAABBggA4QghA5g5AgMgiGATrQilBfi+AAQi9AAilhfg");
	this.shape_146.setTransform(78.1,471.8,0.294,0.294);

	this.shape_147 = new cjs.Shape();
	this.shape_147.graphics.lf(["#4EA6E2","#80CEFF","#DFF3FF"],[0,0.349,1],86.6,191.5,-149.4,-146.5).s().p("AwGe3QJ1qcF1tvQF9uDgbsdQgMlfhekbQhckSikjBIACAAQAnAFAqAIIAEABQAuAJAiAKIABAAQAYAGAaAJIAEABQAkAMAlAPIAGAFQAiAPAlASIACABIAwAbQAiAUAfAVIAGAEQAYARAkAcIAvAoIBuBzIBSBtIBWCYIA9COIAiBkIArCmIAKAxIASB0IACALIAQCvIADBGQAFCjgMCnQgHBkgOBnIgKBEQgRBugTBgQgNA+gSBLQgOA7gWBQQijJQlCI5QlDI6mqHAg");
	this.shape_147.setTransform(139.9,354.1,0.294,0.294);

	this.shape_148 = new cjs.Shape();
	this.shape_148.graphics.f("#CCF1FF").s().p("EgLoAmcQB8iCB0iNIARgVQCxjcCVjmIAdgtIBAhpIA2hcIBKiGIBojKQAkhLArhfIA6iJIAchEIA0iKIAYhFQATg5AahSIApiKQAVhQAOg7IAtjOQAPhSAIg3IAKhEQANhnAIhkQAMingFijIgOjBQgCgagEgaIgRhzIg3jjIgfhbIhAiXIhXiYIhRhuIg6hAIgagZIgjghIgQgOIhZhEQgegVgWgNIgQgJQgXgOgVgKIgPgIIgCgBQgQgJgWgJIgWgJQgfgNgbgKIgSgGIgBAAIgXgHQgogNgugKQgxgLg+gIIgXgCQhhgKhdAEIgBAAIgwADIgCAAIgvAEIgDAAQgWACgZAEIgnAGIBKkEQDmglDSAbQDPAbCxBYQFZCsDHF5QDNGGATIsQAcNSmPPAQmGOrqWLXg");
	this.shape_148.setTransform(151.6,351.4,0.294,0.294);

	this.shape_149 = new cjs.Shape();
	this.shape_149.graphics.f("#FFFFFF").s().p("AFYCAQjRgbjmAlIp6ltQDtghDWAlQDUAkCyBmIAAgBIJqFJQizhYjPgbg");
	this.shape_149.setTransform(132.1,273.1,0.294,0.294);

	this.shape_150 = new cjs.Shape();
	this.shape_150.graphics.f("#507FBC").s().p("AhBC9QgcgbAAgnIAAj3QABgnAdgbQAcgaAmABQAlABAaAaQAaAbACAlIAAD3QAAAngbAbQgcAcgnAAQgmAAgbgcg");
	this.shape_150.setTransform(35,420.4,0.294,0.294);

	this.shape_151 = new cjs.Shape();
	this.shape_151.graphics.f("#F20C30").s().p("ABsCBIjsg/IgNgFQgngQgPgmQgQgmAQgmIAEgHQATglAngNQAngNAlATIDbBuQAdANAJAcQAJAagKAaQgKAbgYANQgQAJgTAAQgKAAgMgDg");
	this.shape_151.setTransform(37.4,425.7,0.294,0.294);

	this.shape_152 = new cjs.Shape();
	this.shape_152.graphics.f("#F20C30").s().p("ABUC6QgdgBgXgXIiniyIgJgKQgYgiAGgpQAHgpAigYIAHgFQAjgVAoAJQAoAKAVAjICBDQQASAcgHAdQgGAagXARQgVAQgZAAIgDAAg");
	this.shape_152.setTransform(23.9,431.8,0.294,0.294);

	this.shape_153 = new cjs.Shape();
	this.shape_153.graphics.f("#507FBC").s().p("AxlKoQh2gqhihNIgMgKQh3hegRiXQgRiXBfh2QA8hMBcgkIRJmvQAggMAgANQAgAOAMAgQAPAngWAkILTkcQC3hIDDAdQDCAdCbB7QBZBHAMBxQANBxhHBZQgvA5hDAbI+ML3QiCAziKAAQh9AAh2gpgAyuBQQhNAeggBMQghBLAeBNQATAxAqAiIAMAJQB3BfCXAXQCWAWCOg3IHHizQiPgQhxhZQhbhJgMh0QgNhzBIhbQAPgSASgQIAAAAgAOiooQhrAAhkAoIwpGiQgsASgTArQgSAqARAsQAMAdAXASQBEA2BXAOQBWANBSggIHrjBQAggMAgAOQAgAOAMAfQAGANAAAOIK8kSQApgQASgpQASgpgQgpQgKgagXgTQhMg8hbggQhagghfAAIgDAAg");
	this.shape_153.setTransform(742.4,355.7,0.294,0.294);

	this.shape_154 = new cjs.Shape();
	this.shape_154.graphics.f("#F67185").s().p("AwjM+QhegZhUgwIgNgIQiDhLgniTQgniSBLiEQAxhVBVgxIP8pMQAegRAiAJQAhAJARAeQAKARACATQABAUgIASIKgmEQCqhiDGAAQDFAACqBiQBjA5AdBuQAeBug5BiQgkA/hBAmI8GQNQiqBijFAAQhgAAhegZgAyOEEQhHApgWBQQgVBPApBIQAbAuAuAbIANAHQCEBMCYAAQCYAACEhMIGoj1QiQAGh8hHQhlg7gehwQgehxA6hkQAKgTARgUgAKFpjIvfI8QgpAYgMAsQgMAuAYApQAQAbAZAOQBMAsBYAAQBYAABLgsIHJkHQAegRAhAJQAiAJARAeQAGALAEAPIKLl4QAmgWAMgrQALgsgWgmQgPgagYgOQiDhLiZAAQiZAAiDBMg");
	this.shape_154.setTransform(738.2,412.4,0.294,0.294);

	this.shape_155 = new cjs.Shape();
	this.shape_155.graphics.f("#6CACE6").s().p("A0QrFQDWh8DkBNQC5A/E8D7QBCA1D5DNQDcC3CeB6QHZFyHkEog");
	this.shape_155.setTransform(529.6,514.5,0.294,0.294);

	this.shape_156 = new cjs.Shape();
	this.shape_156.graphics.lf(["#FFFFFF","#FAFCFD","#EDF4F9","#DEEBF3"],[0,0.329,0.698,1],-106.1,110.7,187.2,-72.8).s().p("AuJfaMgqFgYTMBDYgm6QDXh7DwBUQDDBEFOEHQBQA+D6DMQDpC+CgB8QIHGTIEE0IArAcQAwAkAZAoQBTCAirB8Mg5BAg6QirBjjHAAQjGAAishjg");
	this.shape_156.setTransform(597.2,480.3,0.294,0.294);

	this.shape_157 = new cjs.Shape();
	this.shape_157.graphics.f("#6CACE6").s().p("A0PrsQHxEPItDhQFGCEH8C7QF4CTCTCBQC0CeAAD4g");
	this.shape_157.setTransform(453.5,471.7,0.294,0.294);

	this.shape_158 = new cjs.Shape();
	this.shape_158.graphics.f("#80CEFF").s().p("EgTGAhZMgqTgYbMBNkgsxMAqMAYXQBfA3A0BdQAwBYAABmQAABngwBYQg0BdhfA3Mg7VAiQQkOCbk2AAQk3AAkNibg");
	this.shape_158.setTransform(598.5,482.7,0.294,0.294);

	this.shape_159 = new cjs.Shape();
	this.shape_159.graphics.f("#507FBC").s().p("EgTIAhZMgqTgYbMBNkgsxMAtQAayQAAAuADBeQAABSgMA3QggCZibBcMg7VAiQQkOCbk2AAQk3AAkNibg");
	this.shape_159.setTransform(598.5,487.7,0.294,0.294);

	this.shape_160 = new cjs.Shape();
	this.shape_160.graphics.lf(["#FFFFFF","#FAFCFD","#EDF4F9","#DEEBF3"],[0,0.329,0.698,1],-357,0,357,0).s().p("Eg17AH9Qg2ggggg2QgxhVAZhfQAahfBUgxMA4YggiQCVhXDQgBQDagCCQBfQApAcAcARQIHEeJMDtQFDCCH2C4QFyCTCRCAQCyCeAAD2MhDZAm6g");
	this.shape_160.setTransform(513.4,432.8,0.294,0.294);

	this.shape_161 = new cjs.Shape();
	this.shape_161.graphics.f("#80CEFF").s().p("Eg60ALMQhfg3gzhdQgxhYAAhnQAAhlAxhZQAzhdBfg3MA7WgiQQEOibE2AAQE3AAENCbMArOAY9MhNkAsyg");
	this.shape_161.setTransform(512.6,431.7,0.294,0.294);

	this.shape_162 = new cjs.Shape();
	this.shape_162.graphics.f("#507FBC").s().p("Eg60ALMQiWhOgfiFQgNg3gBhcIACi7MA+XgkUQEOibE2AAQE3AAENCbMArOAY9MhNkAsxg");
	this.shape_162.setTransform(512.6,436.8,0.294,0.294);

	this.shape_163 = new cjs.Shape();
	this.shape_163.graphics.f("#507FBC").s().p("AhBDQQgcgcAAgmIAAkeQABgmAdgbQAcgaAmABQAlABAaAaQAaAaACAlIAAEeQAAAmgcAcQgbAbgnAAQgmAAgbgbg");
	this.shape_163.setTransform(218.5,545,0.294,0.294);

	this.shape_164 = new cjs.Shape();
	this.shape_164.graphics.f("#3F506E").s().p("ACcCMQgJAAgHgBIkeg2QgugJgbgnQgagmAIguQAJguAngbQAmgaAvAIQAOADAIAEIENBvQAhANANAfQANAhgNAgQgKAXgVAOQgVAPgZAAg");
	this.shape_164.setTransform(221.9,551.2,0.294,0.294);

	this.shape_165 = new cjs.Shape();
	this.shape_165.graphics.f("#507FBC").s().p("AhBDQQgcgcAAgmIAAkeQACgmAcgbQAcgaAmABQAlABAbAaQAaAaABAlIAAEeQAAAmgcAcQgbAbgnAAQgmAAgbgbg");
	this.shape_165.setTransform(206,552.5,0.294,0.294);

	this.shape_166 = new cjs.Shape();
	this.shape_166.graphics.f("#3F506E").s().p("AB4DKQgeAAgWgTIjji2QglgcgGgvQgGguAdglQAdglAvgGQAvgGAlAdQAKAHAIALIC6DfQAWAbgDAjQgEAjgaAWQgYATgeAAg");
	this.shape_166.setTransform(208.7,560.5,0.294,0.294);

	this.shape_167 = new cjs.Shape();
	this.shape_167.graphics.f("#C2DBEE").s().p("AnHEaQi9h1AAilQAAikC9h1QC9h0EKAAQELAAC9B0QC9B1AACkQAACli9B1Qi9B0kLAAQkKAAi9h0g");
	this.shape_167.setTransform(215.2,556.3,0.294,0.294);

	this.shape_168 = new cjs.Shape();
	this.shape_168.graphics.f("#507FBC").s().p("AH3YyQgWgPgJgZMgRMgvaQgMggAPggQAOgfAhgMQAggMAgAPQAfAPAMAgMARMAvaQAMAhgPAfQgPAgggALQgNAFgPAAQgbAAgVgPg");
	this.shape_168.setTransform(189.3,381.4,0.294,0.294);

	this.shape_169 = new cjs.Shape();
	this.shape_169.graphics.f("#507FBC").s().p("AFCEeIrZmqQgdgRgJgiQgJghASgeQASgeAhgJQAigJAdASILZGqQAeARAJAiQAIAhgRAeQgLATgTALQgUALgWAAQgWAAgVgLg");
	this.shape_169.setTransform(190.6,408.3,0.294,0.294);

	this.shape_170 = new cjs.Shape();
	this.shape_170.graphics.f("#507FBC").s().p("AFDEeIrZmqQgegRgJgiQgIghARgeQARgeAigJQAhgJAeASILZGqQAeARAJAiQAJAhgSAeQgLATgTALQgUALgWAAQgWAAgUgLg");
	this.shape_170.setTransform(185.6,394.6,0.294,0.294);

	this.shape_171 = new cjs.Shape();
	this.shape_171.graphics.f("#507FBC").s().p("AFDEeIrZmqQgegRgJgiQgJghASgeQARgeAigJQAhgJAeASILZGqQAeARAJAiQAJAhgSAeQgLATgUAMQgTALgWgBIgEAAQgUAAgSgLg");
	this.shape_171.setTransform(175.6,367,0.294,0.294);

	this.shape_172 = new cjs.Shape();
	this.shape_172.graphics.f("#507FBC").s().p("AFDEeIrZmqQgegRgJgiQgIghARgeQARgeAigJQAhgJAeASILZGqQAeARAJAiQAJAhgSAeQgLATgTAMQgUALgWgBIgDAAQgVAAgSgLg");
	this.shape_172.setTransform(170.6,353.3,0.294,0.294);

	this.shape_173 = new cjs.Shape();
	this.shape_173.graphics.f("#507FBC").s().p("AFDEeIrZmqQgegRgJgiQgJgiASgdQARgeAigJQAhgJAeASILZGpQAeASAJAhQAIAigRAeQgLATgTALQgUALgWAAQgXAAgTgLg");
	this.shape_173.setTransform(165.6,339.5,0.294,0.294);

	this.shape_174 = new cjs.Shape();
	this.shape_174.graphics.f("#507FBC").s().p("AH2YyQgVgPgJgZMgRMgvaQgMghAOgfQAPggAhgLQAggMAgAOQAfAPAMAhMARMAvaQAMAggPAgQgOAfghAMQgQAFgMAAQgbAAgWgPg");
	this.shape_174.setTransform(167.9,369,0.294,0.294);

	this.shape_175 = new cjs.Shape();
	this.shape_175.graphics.f("#507FBC").s().p("AFDEeIrZmqQgegSgJghQgJgiASgeQARgdAigJQAhgJAeARILZGqQAeASAJAhQAJAigSAeQgLATgUALQgTALgWAAQgXAAgTgLg");
	this.shape_175.setTransform(180.7,381,0.294,0.294);

	this.shape_176 = new cjs.Shape();
	this.shape_176.graphics.f("#FFFFFF").s().p("Eg0yBIQQhZhZAAh+MAAAhLZQAAjvB3jPQB3jNDOh4MBeTg2cQBHgpBRAAQB+AABZBZQBZBZAAB9MAAABLaQAADvh3DOQh4DPjOB2MheSA2dQhHAphRAAQh+AAhZhZg");
	this.shape_176.setTransform(319,180.8,0.294,0.294);

	this.shape_177 = new cjs.Shape();
	this.shape_177.graphics.lf(["#507FBC","#88C9FF"],[0,1],-378.9,0,378.9,0).s().p("Eg15BQeQhYgBhOguQhPgtgthLQgxhRAAhhMAAAhSBQAAkOCHjqQCHjqDriHMBmbg7KQBUgwBeACQBZABBOAtQBOAtAtBMQAxBRAABhMAAABSBQAAEOiHDrQiHDqjqCHMhmcA7IQhRAwhbAAIgGgBg");
	this.shape_177.setTransform(319,180.8,0.294,0.294);

	this.shape_178 = new cjs.Shape();
	this.shape_178.graphics.f("#6CACE6").s().p("Eg4uBPNQhQgtgvhRQguhQAAhcMAAAhSBQAAiFAiiBQAjiABDhzQBChzBdheQBeheB0hDMBmcg7JQBQgvBcAAQBcAABQAvIDKB0MhxABBRMAAABePg");
	this.shape_178.setTransform(313.5,178.4,0.294,0.294);

	this.shape_179 = new cjs.Shape();
	this.shape_179.graphics.f("#6CACE6").s().p("AjVN3I0kr5Qg0gegQg7QgQg5Afg0QAUgiAhgUIUkr3QBkg6BxAAQBzAABjA6IUkL3QA0AeAQA7QAQA5geA1QgUAhgiAUI0kL5QhjA5hzAAQhxAAhkg5g");
	this.shape_179.setTransform(320.7,272.9,0.294,0.294);

	this.shape_180 = new cjs.Shape();
	this.shape_180.graphics.f("#507FBC").s().p("AshEgIZCudIAAFMQAAAngTAiQgUAigiATI0jL3QhjA6hzAAg");
	this.shape_180.setTransform(344.2,291.7,0.294,0.294);

	this.shape_181 = new cjs.Shape();
	this.shape_181.graphics.f("#507FBC").s().p("AJMJEI0jr2QgigUgUghQgUgjABgnIAAlMIZCOdIAAFeQh0AAhig6g");
	this.shape_181.setTransform(297.2,291.6,0.294,0.294);

	this.shape_182 = new cjs.Shape();
	this.shape_182.graphics.f("#C2DBEE").s().p("Eg1tAjEIm6j+Qg1gfgPg7QgQg6Aeg0QATgiAjgUMBrtg+MQBkg5ByAAQBzAABjA5IG7EAQAzAgAOA7QAOA8ggAzQgRAcgeAXMhruA+LQhjA6hzAAQhzAAhjg6g");
	this.shape_182.setTransform(309.1,285.4,0.294,0.294);

	this.shape_183 = new cjs.Shape();
	this.shape_183.graphics.f("#FFFFFF").s().p("AgUgDIApgYIAAAeIgpAZg");
	this.shape_183.setTransform(505.8,101.1,0.294,0.294);

	this.shape_184 = new cjs.Shape();
	this.shape_184.graphics.f("#FFFFFF").s().p("AgUgXIApgYIAABHIgpAYg");
	this.shape_184.setTransform(503.8,101.7,0.294,0.294);

	this.shape_185 = new cjs.Shape();
	this.shape_185.graphics.f("#FFFFFF").s().p("AgUgrIApgYIAABvIgpAYg");
	this.shape_185.setTransform(501.7,102.3,0.294,0.294);

	this.shape_186 = new cjs.Shape();
	this.shape_186.graphics.f("#FFFFFF").s().p("AgUhIIApgZIAACrIgpAYg");
	this.shape_186.setTransform(499.7,102.6,0.294,0.294);

	this.shape_187 = new cjs.Shape();
	this.shape_187.graphics.f("#FFFFFF").s().p("AgUh0IApgZIAAECIgpAZg");
	this.shape_187.setTransform(497.6,103,0.294,0.294);

	this.shape_188 = new cjs.Shape();
	this.shape_188.graphics.f("#FFFFFF").s().p("AgRAnQgLgGgDgPQgDgOAIgPQAHgRANgIQANgHALAFQALAFADAPQACAPgHAPQgHARgNAHQgHAFgHAAQgFAAgFgCg");
	this.shape_188.setTransform(523,93.1,0.294,0.294);

	this.shape_189 = new cjs.Shape();
	this.shape_189.graphics.f("#FFFFFF").s().p("AgOAhQgJgEgCgNQgDgNAGgMQAHgOALgGQAJgHAKAFQAKAEACAMQACANgGAMQgGAOgLAGQgGAEgHAAQgDAAgEgBg");
	this.shape_189.setTransform(517.2,95.8,0.294,0.294);

	this.shape_190 = new cjs.Shape();
	this.shape_190.graphics.f("#FFFFFF").s().p("AgLAaQgHgEgCgJQgCgKAFgKQAFgKAIgFQAIgGAHAEQAIADACAKQABAKgEAJQgFALgJAFQgEADgFAAIgGgBg");
	this.shape_190.setTransform(513.8,91.8,0.294,0.294);

	this.shape_191 = new cjs.Shape();
	this.shape_191.graphics.f("#FFFFFF").s().p("AgLAZQgHgDgCgKQgCgKAFgJQAFgLAIgFQAIgFAHADQAIAEACAJQABAKgEAKQgFAKgJAFQgEAEgFAAIgGgCg");
	this.shape_191.setTransform(516.1,93.1,0.294,0.294);

	this.shape_192 = new cjs.Shape();
	this.shape_192.graphics.f("#507FBC").s().p("AgwBrQgfgOgIgpQgHgqAUgrQAUgtAlgVQAjgVAfAOQAfAOAIApQAHAqgUArQgUAsglAWQgVANgUAAQgNAAgMgGg");
	this.shape_192.setTransform(516.1,93.1,0.294,0.294);

	this.shape_193 = new cjs.Shape();
	this.shape_193.graphics.f("#FFFFFF").s().p("Ag3B8QgkgRgJgvQgJgwAXgyQAYg0AqgYQApgZAjAQQAkAQAJAwQAJAwgYAyQgXAzgqAZQgYAPgXAAQgPAAgOgGg");
	this.shape_193.setTransform(516.1,93.1,0.294,0.294);

	this.shape_194 = new cjs.Shape();
	this.shape_194.graphics.f("#FFFFFF").s().p("AgRAnQgLgFgDgPQgCgQAHgPQAHgPANgJQANgHALAFQALAFADAPQADAQgIAPQgHAPgNAJQgHAEgHAAQgFAAgFgCg");
	this.shape_194.setTransform(512.6,105.3,0.294,0.294);

	this.shape_195 = new cjs.Shape();
	this.shape_195.graphics.f("#F66EAB").s().p("AgKAYQgHgDgCgJQgCgKAFgJQAEgKAJgFQAHgFAHAEQAHADACAJQACAKgFAJQgFAKgIAFQgEADgEAAIgGgCg");
	this.shape_195.setTransform(508.9,103.6,0.294,0.294);

	this.shape_196 = new cjs.Shape();
	this.shape_196.graphics.f("#FFFFFF").s().p("AgRAnQgLgFgDgPQgDgPAIgPQAHgQANgIQAMgIALAFQAMAFADAPQACAPgHAPQgHAQgNAIQgHAFgHAAQgFAAgFgCg");
	this.shape_196.setTransform(508.9,103.6,0.294,0.294);

	this.shape_197 = new cjs.Shape();
	this.shape_197.graphics.f("#FFFFFF").s().p("AgRAnQgLgFgDgPQgDgPAIgPQAHgQANgIQANgIALAFQALAFADAPQACAPgHAPQgHAQgNAIQgHAFgIAAQgEAAgFgCg");
	this.shape_197.setTransform(504.2,109.2,0.294,0.294);

	this.shape_198 = new cjs.Shape();
	this.shape_198.graphics.f("#FFFFFF").s().p("AgRAnQgLgGgDgPQgDgPAIgPQAHgQANgHQAMgIAMAFQALAFADAPQACAPgHAPQgHAQgNAIQgHAFgHAAQgFAAgFgCg");
	this.shape_198.setTransform(497.7,111.3,0.294,0.294);

	this.shape_199 = new cjs.Shape();
	this.shape_199.graphics.f("#FFFFFF").s().p("AmvEwIDbhGICjjBIB7A5IB0meIDyAAIAAAOIjnAAIh2GjIiAg6IifC7IjfBHg");
	this.shape_199.setTransform(510.4,102.2,0.294,0.294);

	this.shape_200 = new cjs.Shape();
	this.shape_200.graphics.f("#F78C7E").s().p("AgvB5QgygggNg7QgNg6AhgzQAggyA6gNQA0gLATAoQAGAMATBXQATBYgBAMQgBAsgzALQgRAEgQAAQgnAAglgYg");
	this.shape_200.setTransform(269.6,571.2,0.294,0.294);

	this.shape_201 = new cjs.Shape();
	this.shape_201.graphics.f("#F78C7E").s().p("AhmBnQgqgrAAg8QAAg7AqgrQArgqA7AAQA8AAArAqQAqArAAA7QAAA8gqArQgrAqg8AAQg7AAgrgqg");
	this.shape_201.setTransform(270.4,587.7,0.294,0.294);

	this.shape_202 = new cjs.Shape();
	this.shape_202.graphics.f("#F78C7E").s().p("AghB7QgVgRgFgbIgDgRQgQhTgHgYQgIgeAQgbQAQgbAegIQAegIAaAQQAaAQAIAeQAKAlAPBQIADARQAGAfgSAaQgRAZgfAGQgGABgHAAQgaAAgVgRg");
	this.shape_202.setTransform(270,584.1,0.294,0.294);

	this.shape_203 = new cjs.Shape();
	this.shape_203.graphics.f("#507FBC").s().p("AAWInQgggcgHgqQhmpYhbk3QgMgvAYgqQAZgqAvgMQAtgMApAWQAoAXAOAtQBfFHBoJhQAIAwgcAoQgcAogwAIIgUABQgqAAghgbg");
	this.shape_203.setTransform(266.4,568.1,0.294,0.294);

	this.shape_204 = new cjs.Shape();
	this.shape_204.graphics.f("#3F506E").s().p("ACoDiQgshGgdgmQgzhGg2gZQg3gXhWAGQheAOgjADQg8AFgLgdQgOglAwhqQAwhpAkgNQAcgKAjAzQAVAeAyBSQAzBHA2AZQA3AYBXgKQAwgEBTgQQA9gHAMAbQAOAjgwBqQgwBqgkAOQgGADgGAAQgZAAgdgng");
	this.shape_204.setTransform(253.6,544.7,0.294,0.294);

	this.shape_205 = new cjs.Shape();
	this.shape_205.graphics.f("#F20C30").s().p("AmZJ4Qgsgfgkg1Qgng6gNg/QggieCRhhQBBgrA3gNQAhgHAtACQAmADARgIQAagMAbgvQAmg/gQhtQgLhBgFglQgIhBACg5QAGiIBzhdQBwhdCOAOQA7AHBCAkQBJApAsA8QByCbiHC5QhaB7ipA8IhvAjQgzAQgKANQgTAZAOAqQAIAaAdBAQA2CKhIB6Qg4BeilAyQhRAZg8AAQhAAAgogcg");
	this.shape_205.setTransform(254.5,542.8,0.294,0.294);

	this.shape_206 = new cjs.Shape();
	this.shape_206.graphics.f("#507FBC").s().p("ADpHOIgJAAQi/gNh3gqQiug8g7h9Qg8h/BGizQA0iHCPjHQAfgmAwgFQAvgFAmAeQAjAcAHAsQAHAsgYAmQh9CxgrBrQggBTASAmQANAcA5AZQBcAoC5ANQAxAEAfAlQAfAlgEAwQgDAughAfQghAeguABg");
	this.shape_206.setTransform(250.7,560.2,0.294,0.294);

	this.shape_207 = new cjs.Shape();
	this.shape_207.graphics.f("#F78C7E").s().p("ACLBZIiBgRQgkgDiAgJQgegCgVgXQgUgXACgeQACgfAXgVQAXgUAfACQCFAJAjADQApAEBeANQAfAEATAYQATAZgEAeQgEAcgVATQgWASgcAAg");
	this.shape_207.setTransform(261.9,570.8,0.294,0.294);

	this.shape_208 = new cjs.Shape();
	this.shape_208.graphics.lf(["#6CACE6","#DFF3FF"],[0,1],0.5,-105.8,-0.5,73.7).s().p("AABKTQh4gVhZgsQhggvAAgvQgEj+ABjKQACmAAYiLQAPhZBfg4QBag0BuAGQB2AHBLBLQBWBVAACYIgCOgQAABDhfAUQglAHgsAAQg6AAhHgMg");
	this.shape_208.setTransform(257.2,566.5,0.294,0.294);

	this.shape_209 = new cjs.Shape();
	this.shape_209.graphics.f("#F78C7E").s().p("AiiCjQhEhDAAhgQAAheBEhEQBDhDBfAAQBfAABEBDQBEBEAABeQAABghEBDQhEBEhfAAQhfAAhDhEg");
	this.shape_209.setTransform(262.3,533,0.294,0.294);

	this.shape_210 = new cjs.Shape();
	this.shape_210.graphics.f("#F5575A").s().p("AiGEkQgWgWAAgfQAAgLAEgNICkndQAKgeAcgNQAcgOAdAKQAdAKAOAcQANAcgKAeIikHdQgIAXgTANQgUAOgYAAQgfAAgVgWg");
	this.shape_210.setTransform(259.9,540,0.294,0.294);

	this.shape_211 = new cjs.Shape();
	this.shape_211.graphics.f("#3F506E").s().p("Aj8AWIAUmXIHlBkIAAKfgAgMhdIAfAWIAAgYIgegGg");
	this.shape_211.setTransform(257.6,583.3,0.294,0.294);

	this.shape_212 = new cjs.Shape();
	this.shape_212.graphics.f("#3F506E").s().p("AiFAHIAKjPIEBA1IAAFbg");
	this.shape_212.setTransform(257.6,582,0.294,0.294);

	this.shape_213 = new cjs.Shape();
	this.shape_213.graphics.f("#3F506E").s().p("AgzOgQgwgDgggkQgggkACgxIBa5XQAEgwAlggQAjgfAxADQAvAEAfAjQAgAjgCAvIhaZXQgDAvgiAgQgiAggtAAg");
	this.shape_213.setTransform(252.3,606.1,0.294,0.294);

	this.shape_214 = new cjs.Shape();
	this.shape_214.graphics.f("#3F506E").s().p("AAOOxQgugBgjghQghgigCgwIgd52QAAgwAhgjQAigjAxAAIABAAQAwAAAhAhQAjAiAAAwIAdZ1QABAwghAkQgiAigwACg");
	this.shape_214.setTransform(262,612.2,0.294,0.294);

	this.shape_215 = new cjs.Shape();
	this.shape_215.graphics.f("#F78C7E").s().p("AhBDDQgcgbAAgnIAAkEQACgmAcgbQAcgaAmABQAlABAaAaQAbAaABAlIAAEEQAAAngcAbQgbAcgnAAQgmAAgbgcg");
	this.shape_215.setTransform(251,630.9,0.294,0.294);

	this.shape_216 = new cjs.Shape();
	this.shape_216.graphics.f("#3F506E").s().p("Ai1CAQggggAAguQAAghASgbQATgcAfgNID0hmQAggNAgANQAgANANAgQALAbgIAdQgIAcgZARIjbCUQgcATgiAAIgBAAQgtAAggggg");
	this.shape_216.setTransform(254.2,634,0.294,0.294);

	this.shape_217 = new cjs.Shape();
	this.shape_217.graphics.f("#F78C7E").s().p("AhBDDQgcgbAAgnIAAkEQABgmAdgbQAcgaAmABQAlABAaAaQAaAaABAlIAAEEQAAAngbAbQgbAcgnAAQgmAAgbgcg");
	this.shape_217.setTransform(262.4,637.7,0.294,0.294);

	this.shape_218 = new cjs.Shape();
	this.shape_218.graphics.f("#3F506E").s().p("Ah/CdQgtgKgYgmQgYgnAKgsQAGgaARgUQASgVAYgKID0hlQAggNAgANQAgANANAgQALAbgJAcQgIAcgYARIjbCUQgcATgiAAQgOAAgKgDg");
	this.shape_218.setTransform(265.6,641.5,0.294,0.294);

	this.shape_219 = new cjs.Shape();
	this.shape_219.graphics.f("#F78C7E").s().p("AhmBnQgqgrAAg8QAAg7AqgrQArgqA7AAQA8AAArAqQAqArAAA7QAAA8gqArQgrAqg8AAQg7AAgrgqg");
	this.shape_219.setTransform(268.1,571.2,0.294,0.294);

	this.shape_220 = new cjs.Shape();
	this.shape_220.graphics.f("#507FBC").s().p("AkQhdIFYg8IDJECIlaAyg");
	this.shape_220.setTransform(605.7,256.7,0.294,0.294);

	this.shape_221 = new cjs.Shape();
	this.shape_221.graphics.f("#6CACE6").s().p("AkXAOIh9jKIEHCCIFZg9IDJEDIlcAxg");
	this.shape_221.setTransform(601.8,255.6,0.294,0.294);

	this.shape_222 = new cjs.Shape();
	this.shape_222.graphics.f("#F78C7E").s().p("AlpF5QgegEgTgZQgTgZAFgfQAEgfAZgSQAZgTAeAFQDhAfCEgPQCFgQA9hBQBwh5hOlfQgHgfARgaQAQgaAfgHQAegGAaAQQAaARAHAeQAwDZgSCVQgRCWhUBaQhDBKhuAhQhfAciCAAQiOgCiJgVg");
	this.shape_222.setTransform(618.3,251.1,0.294,0.294);

	this.shape_223 = new cjs.Shape();
	this.shape_223.graphics.f("#F5575A").s().p("AAhDIQgZAAgUgQQgUgPgGgZIhDj5QgIgeAQgbQAQgaAegIQAdgIAaAPQAbAQAIAeIBCD5QAJAegQAbQgQAageAIQgHADgMAAg");
	this.shape_223.setTransform(618.8,228.8,0.294,0.294);

	this.shape_224 = new cjs.Shape();
	this.shape_224.graphics.f("#F78C7E").s().p("AgTBgQhJgEguggQgugfAIgnQAIgoA6gZQA6gZBIAFQBJAEAuAgQAuAfgIAnQgIAog6AZQgxAVg8AAIgVgBg");
	this.shape_224.setTransform(620.3,233.2,0.294,0.294);

	this.shape_225 = new cjs.Shape();
	this.shape_225.graphics.f("#3F506E").s().p("AqCHeQgigiAAgwQAAgbAMgZQDAmEFvjaQCHhRCpg+QBigkCpgxIA+gRQAvgOAqAYQAqAXAOAvQANAugXAqQgXAqguAOIg/ASQijAvhYAgQiVA2h1BFQkxC0ijFLQgPAegdARQgcASghAAQgxAAgigjg");
	this.shape_225.setTransform(591.5,282.1,0.294,0.294);

	this.shape_226 = new cjs.Shape();
	this.shape_226.graphics.f("#F78C7E").s().p("AiKC6QgcgbABgnQAAgaANgWICUj1QAVgfAngHQAmgHAgAWQAdAUAIAjQAIAigQAfIiUD0QgMAVgVANQgVAMgZAAQgnAAgbgcg");
	this.shape_226.setTransform(572.8,297.3,0.294,0.294);

	this.shape_227 = new cjs.Shape();
	this.shape_227.graphics.f("#3F506E").s().p("AjICTQgZgYAAgjQAAgUAKgSQAJgSAQgMIDriqQAmgbAvAHQAuAHAcAmQAcAngIAuQgHAtgmAcQgJAHgLAFIkJB4QgRAHgSAAQgjAAgYgZg");
	this.shape_227.setTransform(567.4,302.7,0.294,0.294);

	this.shape_228 = new cjs.Shape();
	this.shape_228.graphics.f("#3F506E").s().p("AjEHFQgfgYgMglQhWklgDi0QgDi2BShkQBFhVB3gUQBDgMCDALQAwAEAZAAQAxAAAjAhQAjAiAAAxQABAwgiAjQgiAjgwABIgGAAQgZAAhBgGQhOgGghACQg5ACgSAWQgaAhAABcQABCWBPEKQANAvgXAqQgXArgvANQgQAFgRAAIABABQgnAAgfgXg");
	this.shape_228.setTransform(598.4,274.5,0.294,0.294);

	this.shape_229 = new cjs.Shape();
	this.shape_229.graphics.f("#3F506E").s().p("AAmDpQhWguhIhkQhIhjgQhgQgQhhAygkQAzglBWAuQBWAtBIBlQBIBjAQBgQAQBhgyAlQgXAPgdAAQglAAgwgZg");
	this.shape_229.setTransform(608.6,268.4,0.294,0.294);

	this.shape_230 = new cjs.Shape();
	this.shape_230.graphics.f("#FFFFFF").s().p("Ak9L9QhyhRhGiJQhGiJAQhtQATh5B7gbQDkgzA6iUQAohmgijJQgUhpgHgyQgMhVAHg2QARiNCdgkQDog0CLCeQB0CGAlEIQAeDigiD1QggDnhCBhQhqCch6BPQhvBJiuAlQgbAGgcAAQhfAAhhhFg");
	this.shape_230.setTransform(616.7,253.5,0.294,0.294);

	this.shape_231 = new cjs.Shape();
	this.shape_231.graphics.f("#F78C7E").s().p("AAlDwQggAAgYgTQgagUgIgfIhLknQgIgmAVghQAVghAmgIQAkgIAfATQAgATAKAkIBLEnQAKAmgUAhQgUAhgmAKQgLADgMAAg");
	this.shape_231.setTransform(595.8,289.4,0.294,0.294);

	this.shape_232 = new cjs.Shape();
	this.shape_232.graphics.f("#3F506E").s().p("AjUB5QgZgZABgjQAAgYANgUQANgTAWgLIEIh6QArgTAsAQQAsAQAUArQATArgQArQgQAsgrAUQgKAEgMADIkbBCQgIACgLAAQgjAAgYgZg");
	this.shape_232.setTransform(593.6,295.9,0.294,0.294);

	this.shape_233 = new cjs.Shape();
	this.shape_233.graphics.f("#F78C7E").s().p("AkbHAQgWgVAAgfQAAgXALgRQA2hYBnibQBXiAAvhRQBGh8BhjOQANgcAdgLQAdgKAcANQAcANALAdQAKAdgNAcQhjDUhMCEQgxBUhYCDQhYCEhCBqQgKARgRAKQgRAJgTAAQgfAAgWgWg");
	this.shape_233.setTransform(608.6,246.4,0.294,0.294);

	this.shape_234 = new cjs.Shape();
	this.shape_234.graphics.f("#C2DBEE").s().p("ApCFmQhyhGg+hbQhAheAAhnQAAhmBAheQA+hbByhGQDviUFTAAQFTAADwCUQByBGA+BbQBABeAABmQAABnhABeQg+BbhyBGQjvCUlUAAQlTAAjviUg");
	this.shape_234.setTransform(579.2,298.8,0.294,0.294);

	this.shape_235 = new cjs.Shape();
	this.shape_235.graphics.f("#E24A8C").s().p("ABzGjQhDgKhEg0Qh8hchLiqQhLipARiUQASiUBkgnQBkgnB6BcQBGA0A6BUQA4BQAiBfIjqiwQhLg6g/AZQg+AYgLBcQgLBdAvBoQAvBqBNA6IDoCuQgmAZguAAQgPAAgOgDg");
	this.shape_235.setTransform(566.4,252.4,0.294,0.294);

	this.shape_236 = new cjs.Shape();
	this.shape_236.graphics.f("#F67185").s().p("ApxbaQj4gejHiVI+X2rIgYAxIjthtMBCegcVIABAAQApgQAvAHQAxAIAzAeIe/XFQBEAzAgBNQA0B2gxB5QgwB5h3AzMgyiAVtQiwBMi7AAQg4AAg6gHg");
	this.shape_236.setTransform(657.4,238.8,0.294,0.294);

	this.shape_237 = new cjs.Shape();
	this.shape_237.graphics.f("#6CACE6").s().p("ABzGjQhDgKhEg0Qh8hchLiqQhLipARiUQASiUBkgnQBkgnB6BcQBGA0A6BUQA4BQAiBfIjqiwQhLg6g/AZQg+AYgLBcQgLBdAvBoQAvBqBNA6IDoCuQgmAZguAAQgPAAgOgDg");
	this.shape_237.setTransform(566.4,252.4,0.294,0.294);

	this.shape_238 = new cjs.Shape();
	this.shape_238.graphics.f("#E24A8C").s().p("ArZbYQj3gejIiVI/V3aQg8gpJkk+QJBktM0luQNmmEJfjcQK/j9BdBFIbhUkIgZALIGaE5QgFAlgGBKQgHBBgPArQgoB3iEA6MgyiAVuQiwBMi7AAQg4AAg6gHg");
	this.shape_238.setTransform(659.9,242.9,0.294,0.294);

	this.shape_239 = new cjs.Shape();
	this.shape_239.graphics.lf(["#DEEBF3","#EDF4F9","#FAFCFD","#FFFFFF"],[0,0.298,0.671,1],1.3,-69.1,-46.3,-45.8).s().p("Ap5QKQjngbi6iLI9w2OQhNg5gvhqQgvhqALhcQALhcA+gZQA+gYBNA5MAh3AZTQBGA1BYALQBXAKBRgiMA3GgY4Ig7HxMgyvAV8QikBHivAAQg0AAg1gGg");
	this.shape_239.setTransform(656.1,273.9,0.294,0.294);

	this.shape_240 = new cjs.Shape();
	this.shape_240.graphics.f("#F67185").s().p("AiqB/IhIi5IAGjHICOhqIFREdIg1G6g");
	this.shape_240.setTransform(567.5,253.4,0.294,0.294);

	this.shape_241 = new cjs.Shape();
	this.shape_241.graphics.f("#F67185").s().p("ArPcCQj3gejIiVI9h2EQhDgygihNQgzh3Awh4QAxh4B3g0MAyhgVtQDlhiD4AdQD4AeDICVIdhWDQBEAzAhBNQAzB3gwB4QgxB5h3AzMgyiAVtQiwBMi8AAQg4AAg5gHg");
	this.shape_241.setTransform(657.9,254.5,0.294,0.294);

	this.shape_242 = new cjs.Shape();
	this.shape_242.graphics.f("#E24A8C").s().p("ArVcCQj4gejIiVI9h2EQhwhMgNhtQgFgsAIhJIATiVMA1IgXEQDlhiD4AdQD4AeDICVIZtTNIgZALIGaE5IgLBvQgHBBgPArQgoB3iEA7MgyhAVtQixBMi7AAQg4AAg5gHg");
	this.shape_242.setTransform(657.7,258.5,0.294,0.294);

	this.shape_243 = new cjs.Shape();
	this.shape_243.graphics.f("#507FBC").s().p("ADdH5QhUgCheg2Qilhgh2jHQh2jHAAi5QAAi6B2g/QB2g/ClBgQBfA2BTBfQBSBcA4BwIk8i4Qhng8hJAoQhJAnAAB0QAABzBJB7QBKB8BmA8IE7C2Qg1ArhMAAIgIAAg");
	this.shape_243.setTransform(523.3,302.7,0.294,0.294);

	this.shape_244 = new cjs.Shape();
	this.shape_244.graphics.f("#80CEFF").s().p("EgROAheMgo5gXmIgVA/Ik3hkMBOIgs0QAwgZA7ACQA+ABBEAfMApuAYBQBfA3AzBdQAyBYAABmQAABmgyBYQgzBehfA2Mg7WAiRQkNCbk3AAQk2AAkOibg");
	this.shape_244.setTransform(634.6,271.5,0.294,0.294);

	this.shape_245 = new cjs.Shape();
	this.shape_245.graphics.f("#6CACE6").s().p("ADdH5QhUgCheg2Qilhgh2jHQh2jHAAi5QAAi6B2g/QB2g/ClBgQBfA2BTBfQBSBcA4BwIk8i4Qhng8hJAoQhJAnAAB0QAABzBJB7QBKB8BmA8IE7C2Qg1ArhMAAIgIAAg");
	this.shape_245.setTransform(523.3,302.7,0.294,0.294);

	this.shape_246 = new cjs.Shape();
	this.shape_246.graphics.f("#507FBC").s().p("EgTHAheMgqNgYXQhRgqLHnlQKenIPBo9QP8pfLPlqQNBmhB9BJMAlFAVaIgeARIIpFHQAAAuADBeQABBSgMA3QggCZibBcMg7WAiQQkNCck3AAQk2AAkOicg");
	this.shape_246.setTransform(638.2,276.5,0.294,0.294);

	this.shape_247 = new cjs.Shape();
	this.shape_247.graphics.lf(["#DEEBF3","#EDF4F9","#FAFCFD","#FFFFFF"],[0,0.298,0.671,1],-13.5,0,-350.3,0).s().p("AwOVDMgoEgXIQhpg8hJh8QhKh8ABh0QgBhyBKgoQBJgoBpA8MAtmAaWQBfA3BuAAQBuABBfg3MBAhgm3IAAJvMg7lAimQj5CRkiABIgCAAQkgAAj7iRg");
	this.shape_247.setTransform(634.1,312.7,0.294,0.294);

	this.shape_248 = new cjs.Shape();
	this.shape_248.graphics.f("#80CEFF").s().p("AirC9Ih1jbIgVj3ICfiYIHMEwIgBIrg");
	this.shape_248.setTransform(524.8,303.6,0.294,0.294);

	this.shape_249 = new cjs.Shape();
	this.shape_249.graphics.f("#80CEFF").s().p("EgS3Ah5MgnwgW9Qhfg3gzhcQgxhZAAhmQAAhnAxhYQAzhdBfg2MA7WgiRQENibE3AAQE2AAEOCbMAnxAW9QBfA3AzBeQAxBYAABmQAABmgxBYQg0BdhfA4Mg7WAiPQkNCck3AAQk2AAkOicg");
	this.shape_249.setTransform(637.5,291.9,0.294,0.294);

	this.shape_250 = new cjs.Shape();
	this.shape_250.graphics.f("#507FBC").s().p("EgS3Ah5MgnxgW9QiWhOggiEQgNg4gBhcIACi7MA+YgkUQENibE3AAQE2AAEOCbMAioAUAIgdARIIpFHQAAAvADBdQAABSgLA4QghCYiaBdMg7WAiPQkOCck2AAQk3AAkNicg");
	this.shape_250.setTransform(637.5,297,0.294,0.294);

	this.shape_251 = new cjs.Shape();
	this.shape_251.graphics.f("#3F506E").s().p("Aj8CpQgOgOAAgUQAAgHADgKIBskOQAHgSASgHQASgIASAHQASAHAHASQAIASgHASIhICzIFahqQATgFARAJQARAJAGATQAGARgJASQgJARgTAFIm3CIQgHABgHAAQgUAAgNgNg");
	this.shape_251.setTransform(317.9,559,0.294,0.294);

	this.shape_252 = new cjs.Shape();
	this.shape_252.graphics.f("#DEEBF3").s().p("AhyBEQgwgcAAgoQAAgnAwgcQAwgdBCAAQBEAAAvAdQAwAcAAAnQAAAogwAcQgvAdhEAAQhCAAgwgdg");
	this.shape_252.setTransform(275,581.4,0.294,0.294);

	this.shape_253 = new cjs.Shape();
	this.shape_253.graphics.f("#DEEBF3").s().p("AhyBEQgwgcAAgoQAAgnAwgdQAvgcBDAAQBDAAAxAcQAvAdAAAnQAAAogvAcQgxAdhDAAQhDAAgvgdg");
	this.shape_253.setTransform(253.1,568.8,0.294,0.294);

	this.shape_254 = new cjs.Shape();
	this.shape_254.graphics.f("#DEEBF3").s().p("AhyBEQgwgcAAgoQAAgnAwgdQAwgcBCAAQBEAAAvAcQAwAdAAAnQAAAogwAcQgvAdhEAAQhCAAgwgdg");
	this.shape_254.setTransform(231.1,556.1,0.294,0.294);

	this.shape_255 = new cjs.Shape();
	this.shape_255.graphics.f("#DEEBF3").s().p("AhyBEQgwgcAAgoQAAgnAwgdQAvgcBDAAQBDAAAwAcQAwAdAAAnQAAAogwAcQgwAdhDAAQhDAAgvgdg");
	this.shape_255.setTransform(209.2,543.5,0.294,0.294);

	this.shape_256 = new cjs.Shape();
	this.shape_256.graphics.f("#DEEBF3").s().p("ANgI3I8wwlQgPgIgEgRQgFgRAJgPQAFgLAKgFQAbgPAeAAQAeAAAaAPIcvQlQAQAJAEARQAEAQgIAQQgHALgJAEQgaAQgeAAQgeAAgagQg");
	this.shape_256.setTransform(247.9,550.4,0.294,0.294);

	this.shape_257 = new cjs.Shape();
	this.shape_257.graphics.f("#DEEBF3").s().p("AUWM1MgqbgYfQgQgJgEgRQgEgRAIgPQAHgKAJgGQAagPAeAAQAeAAAaAPMAqcAYfQAOAJAFARQAFARgJAQQgFAJgKAGQgbAPgeAAQgeAAgagPg");
	this.shape_257.setTransform(266.7,554.4,0.294,0.294);

	this.shape_258 = new cjs.Shape();
	this.shape_258.graphics.f("#DEEBF3").s().p("AhyBEQgwgcAAgoQAAgnAwgcQAvgdBDAAQBDAAAxAdQAvAcAAAnQAAAogvAcQgxAdhDAAQhDAAgvgdg");
	this.shape_258.setTransform(316,557.8,0.294,0.294);

	this.shape_259 = new cjs.Shape();
	this.shape_259.graphics.f("#DEEBF3").s().p("AhyBEQgwgcAAgoQAAgnAwgcQAwgdBCAAQBDAAAwAdQAwAcAAAnQAAAogwAcQgwAdhDAAQhCAAgwgdg");
	this.shape_259.setTransform(294.1,545.1,0.294,0.294);

	this.shape_260 = new cjs.Shape();
	this.shape_260.graphics.f("#DEEBF3").s().p("AhyBEQgwgcAAgoQAAgnAwgdQAwgcBCAAQBEAAAvAcQAwAdAAAnQAAAogwAcQgvAdhEAAQhCAAgwgdg");
	this.shape_260.setTransform(272.2,532.5,0.294,0.294);

	this.shape_261 = new cjs.Shape();
	this.shape_261.graphics.f("#DEEBF3").s().p("AhyBEQgwgcAAgoQAAgnAwgdQAvgcBDAAQBEAAAvAcQAwAdAAAnQAAAogwAcQgvAdhEAAQhDAAgvgdg");
	this.shape_261.setTransform(250.2,519.8,0.294,0.294);

	this.shape_262 = new cjs.Shape();
	this.shape_262.graphics.f("#DEEBF3").s().p("ANgI4I8vwlQgQgJgEgRQgEgRAIgPQAHgLAJgFQAagPAeAAQAeAAAaAPIcvQlQAQAJAEARQAFARgJAPQgGAKgKAGQgaAPgeAAQgeAAgagPg");
	this.shape_262.setTransform(288.9,526.8,0.294,0.294);

	this.shape_263 = new cjs.Shape();
	this.shape_263.graphics.f("#DEEBF3").s().p("AUWM1MgqbgYfQgQgJgEgRQgFgRAJgPQAGgKAKgGQAagPAeAAQAeAAAaAPMAqcAYfQAPAJAEARQAFARgJAPQgGAKgJAGQgaAPgfAAQgeAAgagPg");
	this.shape_263.setTransform(307.7,530.7,0.294,0.294);

	this.shape_264 = new cjs.Shape();
	this.shape_264.graphics.f("#3F506E").s().p("AjbC2QgTABgOgOQgOgOAAgTQAAgKAEgIIBrkNQAHgSASgIQARgIASAHQASAIAIASQAIARgIASIhHCzIFahpQASgGASAJQARAJAGATQAFASgJARQgJARgTAGIm3CHQgEABgFAAIgEAAg");
	this.shape_264.setTransform(359.6,533,0.294,0.294);

	this.shape_265 = new cjs.Shape();
	this.shape_265.graphics.f("#DEEBF3").s().p("AhyBFQgwgdAAgoQAAgnAwgcQAvgdBDAAQBDAAAwAdQAwAcAAAnQAAAogwAdQgwAchDAAQhDAAgvgcg");
	this.shape_265.setTransform(357,534.1,0.294,0.294);

	this.shape_266 = new cjs.Shape();
	this.shape_266.graphics.f("#DEEBF3").s().p("AhyBEQgwgcAAgoQAAgnAwgcQAvgdBDAAQBDAAAxAdQAvAcAAAnQAAAogvAcQgxAdhDAAQhDAAgvgdg");
	this.shape_266.setTransform(335.1,521.4,0.294,0.294);

	this.shape_267 = new cjs.Shape();
	this.shape_267.graphics.f("#DEEBF3").s().p("AhyBEQgwgcAAgoQAAgnAwgcQAwgdBCAAQBEAAAvAdQAwAcAAAnQAAAogwAcQgvAdhEAAQhCAAgwgdg");
	this.shape_267.setTransform(313.1,508.8,0.294,0.294);

	this.shape_268 = new cjs.Shape();
	this.shape_268.graphics.f("#DEEBF3").s().p("AhyBEQgwgcAAgoQAAgnAwgdQAwgcBCAAQBDAAAwAcQAwAdAAAnQAAAogwAcQgwAdhDAAQhCAAgwgdg");
	this.shape_268.setTransform(291.2,496.1,0.294,0.294);

	this.shape_269 = new cjs.Shape();
	this.shape_269.graphics.f("#DEEBF3").s().p("ANgI4I8vwlQgPgJgFgRQgFgRAJgPQAGgLAKgFQAagPAeAAQAeAAAbAPIcuQlQAQAJAEARQAEARgIAPQgFAKgLAGQgZAPgfAAQgeAAgagPg");
	this.shape_269.setTransform(329.9,503.1,0.294,0.294);

	this.shape_270 = new cjs.Shape();
	this.shape_270.graphics.f("#DEEBF3").s().p("AUWM1MgqbgYgQgQgIgEgRQgFgRAJgQQAGgLAKgEQAagPAeAAQAeAAAaAPMAqbAYfQAQAJAEARQAFARgJAPQgGAKgKAGQgaAPgeAAQgeAAgagPg");
	this.shape_270.setTransform(348.7,507.1,0.294,0.294);

	this.shape_271 = new cjs.Shape();
	this.shape_271.graphics.f("#507FBC").s().p("AFzFAIuboVQghgTAEgdQAEgdAlgVQAmgXAygCQAygCAgAUIObIUQAhATgEAcQgDAegmAVQgmAWgyADIgJAAQgsAAgdgRg");
	this.shape_271.setTransform(372.1,498.5,0.294,0.294);

	this.shape_272 = new cjs.Shape();
	this.shape_272.graphics.f("#507FBC").s().p("AjWCBQhag2AAhLQAAhLBag1QBYg1B+AAQB/AABZA1QBZA1AABLQAABLhZA2QhZA0h/AAQh+AAhYg0g");
	this.shape_272.setTransform(213,588.7,0.294,0.294);

	this.shape_273 = new cjs.Shape();
	this.shape_273.graphics.f("#FFFFFF").s().p("EgQXAiTMgqqgYoQhAglgThHQgThHAlhAQAYgpApgYMBD0gnJQBxhBCCAAQCCAABwBBMAqqAYoQBAAkATBIQATBHglBAQgXApgqAYMhD1AnJQhwBBiCAAQiCAAhwhBg");
	this.shape_273.setTransform(292.4,542,0.294,0.294);

	this.shape_274 = new cjs.Shape();
	this.shape_274.graphics.f("#80CEFF").s().p("EgYpAnIMgq8gYzQhug/ggh6Qghh6A/huQAphHBHgoMBORgtMQDPh4DwAAQDvAADPB4MAq9AYzQBuA/AgB6QAhB6g/BuQgoBGhIAqMhORAtLQjPB4jwAAQjvAAjQh4g");
	this.shape_274.setTransform(289.5,543.6,0.294,0.294);

	this.shape_275 = new cjs.Shape();
	this.shape_275.graphics.f("#507FBC").s().p("A1RavQhygehmg7Mgq8gYzQhIgogohGQgphIAAhRIAAjPMA0UAeMMBXpgymIAADPQAABSgpBHQgpBHhHAoMhORAtMQhmA7hxAeQhyAfh2AAQh1AAhygfg");
	this.shape_275.setTransform(289.5,575.6,0.294,0.294);

	this.shape_276 = new cjs.Shape();
	this.shape_276.graphics.f("#C2DBEE").s().p("AnHEaQi9h1ABilQgBikC9h1QC9h0EKAAQELAAC8B0QC9B1AACkQAACli9B1Qi8B0kLAAQkKAAi9h0g");
	this.shape_276.setTransform(477.8,549.9,0.294,0.294);

	this.shape_277 = new cjs.Shape();
	this.shape_277.graphics.f("#C2DBEE").s().p("AnHEaQi9h1AAilQAAikC9h1QC9h0EKAAQEKAAC9B0QC9B1AACkQAACli9B1Qi9B0kKAAQkKAAi9h0g");
	this.shape_277.setTransform(259.8,639,0.294,0.294);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_277},{t:this.shape_276},{t:this.shape_275},{t:this.shape_274},{t:this.shape_273},{t:this.shape_272},{t:this.shape_271},{t:this.shape_270},{t:this.shape_269},{t:this.shape_268},{t:this.shape_267},{t:this.shape_266},{t:this.shape_265},{t:this.shape_264},{t:this.shape_263},{t:this.shape_262},{t:this.shape_261},{t:this.shape_260},{t:this.shape_259},{t:this.shape_258},{t:this.shape_257},{t:this.shape_256},{t:this.shape_255},{t:this.shape_254},{t:this.shape_253},{t:this.shape_252},{t:this.shape_251},{t:this.shape_250},{t:this.shape_249},{t:this.shape_248},{t:this.shape_247},{t:this.shape_246},{t:this.shape_245},{t:this.shape_244},{t:this.shape_243},{t:this.shape_242},{t:this.shape_241},{t:this.shape_240},{t:this.shape_239},{t:this.shape_238},{t:this.shape_237},{t:this.shape_236},{t:this.shape_235},{t:this.shape_234},{t:this.shape_233},{t:this.shape_232},{t:this.shape_231},{t:this.shape_230},{t:this.shape_229},{t:this.shape_228},{t:this.shape_227},{t:this.shape_226},{t:this.shape_225},{t:this.shape_224},{t:this.shape_223},{t:this.shape_222},{t:this.shape_221},{t:this.shape_220},{t:this.shape_219},{t:this.shape_218},{t:this.shape_217},{t:this.shape_216},{t:this.shape_215},{t:this.shape_214},{t:this.shape_213},{t:this.shape_212},{t:this.shape_211},{t:this.shape_210},{t:this.shape_209},{t:this.shape_208},{t:this.shape_207},{t:this.shape_206},{t:this.shape_205},{t:this.shape_204},{t:this.shape_203},{t:this.shape_202},{t:this.shape_201},{t:this.shape_200},{t:this.shape_199},{t:this.shape_198},{t:this.shape_197},{t:this.shape_196},{t:this.shape_195},{t:this.shape_194},{t:this.shape_193},{t:this.shape_192},{t:this.shape_191},{t:this.shape_190},{t:this.shape_189},{t:this.shape_188},{t:this.shape_187},{t:this.shape_186},{t:this.shape_185},{t:this.shape_184},{t:this.shape_183},{t:this.shape_182},{t:this.shape_181},{t:this.shape_180},{t:this.shape_179},{t:this.shape_178},{t:this.shape_177},{t:this.shape_176},{t:this.shape_175},{t:this.shape_174},{t:this.shape_173},{t:this.shape_172},{t:this.shape_171},{t:this.shape_170},{t:this.shape_169},{t:this.shape_168},{t:this.shape_167},{t:this.shape_166},{t:this.shape_165},{t:this.shape_164},{t:this.shape_163},{t:this.shape_162},{t:this.shape_161},{t:this.shape_160},{t:this.shape_159},{t:this.shape_158},{t:this.shape_157},{t:this.shape_156},{t:this.shape_155},{t:this.shape_154},{t:this.shape_153},{t:this.shape_152},{t:this.shape_151},{t:this.shape_150},{t:this.shape_149},{t:this.shape_148},{t:this.shape_147},{t:this.shape_146},{t:this.shape_145},{t:this.shape_144},{t:this.shape_143},{t:this.shape_142},{t:this.shape_141},{t:this.shape_140},{t:this.shape_139},{t:this.instance_11},{t:this.shape_138},{t:this.shape_137},{t:this.shape_136},{t:this.shape_135},{t:this.shape_134},{t:this.shape_133},{t:this.shape_132},{t:this.shape_131},{t:this.shape_130},{t:this.shape_129},{t:this.shape_128},{t:this.shape_127},{t:this.shape_126},{t:this.shape_125},{t:this.shape_124},{t:this.shape_123},{t:this.shape_122},{t:this.shape_121},{t:this.shape_120},{t:this.shape_119},{t:this.shape_118},{t:this.shape_117},{t:this.shape_116},{t:this.shape_115},{t:this.shape_114},{t:this.shape_113},{t:this.shape_112},{t:this.shape_111},{t:this.shape_110},{t:this.shape_109},{t:this.shape_108},{t:this.shape_107},{t:this.shape_106},{t:this.shape_105},{t:this.shape_104},{t:this.shape_103},{t:this.shape_102},{t:this.shape_101},{t:this.shape_100},{t:this.shape_99},{t:this.shape_98},{t:this.shape_97},{t:this.shape_96},{t:this.shape_95},{t:this.shape_94},{t:this.shape_93},{t:this.shape_92},{t:this.shape_91},{t:this.shape_90},{t:this.shape_89},{t:this.shape_88},{t:this.shape_87},{t:this.shape_86},{t:this.shape_85},{t:this.shape_84},{t:this.shape_83},{t:this.shape_82},{t:this.shape_81},{t:this.shape_80},{t:this.shape_79},{t:this.shape_78},{t:this.shape_77},{t:this.shape_76},{t:this.shape_75},{t:this.shape_74},{t:this.shape_73},{t:this.shape_72},{t:this.shape_71},{t:this.shape_70},{t:this.shape_69},{t:this.shape_68},{t:this.shape_67},{t:this.shape_66},{t:this.shape_65},{t:this.shape_64},{t:this.shape_63},{t:this.shape_62},{t:this.shape_61},{t:this.shape_60},{t:this.shape_59},{t:this.shape_58},{t:this.shape_57},{t:this.shape_56},{t:this.shape_55},{t:this.shape_54},{t:this.shape_53},{t:this.shape_52},{t:this.shape_51},{t:this.shape_50},{t:this.shape_49},{t:this.shape_48},{t:this.shape_47},{t:this.shape_46},{t:this.shape_45},{t:this.shape_44},{t:this.shape_43},{t:this.shape_42},{t:this.shape_41},{t:this.shape_40},{t:this.shape_39},{t:this.shape_38},{t:this.shape_37},{t:this.shape_36},{t:this.shape_35},{t:this.shape_34},{t:this.shape_33},{t:this.shape_32},{t:this.shape_31},{t:this.shape_30},{t:this.shape_29},{t:this.shape_28},{t:this.shape_27}]}).wait(1));

	// Layer 5
	this.shape_278 = new cjs.Shape();
	this.shape_278.graphics.f("#FFFFFF").s().p("EhF6BlnUggQgIYgY3gPRQ43vQtpzzQuI0fAA2cQAA2bOI0fQNpzyY3vSUAY3gPQAgQgIYUAhYgIqAkiAAAUAkjAAAAhYAIqUAgQAIYAY3APQQY3PSNpTyQOHUfAAWbQAAWcuHUfQtpTz43PQUgY3APSggQAIXUghXAIrgkkAAAUgkiAAAghYgIrg");
	this.shape_278.setTransform(415.8,392.5,0.294,0.294);

	this.timeline.addTween(cjs.Tween.get(this.shape_278).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(407.5,351.2,815.5,624.6);
// library properties:
lib.properties = {
	width: 815,
	height: 650,
	fps: 24,
	color: "#000000",
	opacity: 1.00,
	manifest: [],
	preloads: []
};




})(lib = lib||{}, images = images||{}, createjs = createjs||{}, ss = ss||{}, AdobeAn = AdobeAn||{});
var lib, images, createjs, ss, AdobeAn;