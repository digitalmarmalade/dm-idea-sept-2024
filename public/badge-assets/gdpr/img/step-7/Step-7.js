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


(lib.Tween14 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#636363").s().p("AhPgOQgRgQgGgQQgIgTANgMQAQgOAaACQAXACASAOQAZATApAuIA3A/QgNgOgUAKQgVALgIAdQgcgQhghZg");
	this.shape.setTransform(-3.1,-2.1);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#ECC7AB").s().p("AgCAiIgQgHQgKgEgEgFQgNgTgUgLQAJgRALgPQAdADAbAOQATANAPANQAVASAAAKQgBAJgPAFQgMAEgOAAQgPgCgLgJg");
	this.shape_1.setTransform(7.1,6.7);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#E2BEA3").s().p("AgbgOIAdAFQAEABAFADQAFADAGACQAFAAABADQAAADgCADQgEACgNgCIgLgDIgTAJg");
	this.shape_2.setTransform(9.7,4.9);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-13.7,-11.1,27.4,22.3);


(lib.Tween13 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#724F12").s().p("AhTA5QgDgTACgRQAEgwAOgVQAPgWAigDQAigBAcATQASAMAMASQAIAKACARQACASgFAHIgSgQQgHACgTgHIgVgHQgOgGgOAFQgOAFgGAOIgLAjQgHgBgIgEQgIgRgGABQgJAAADArQgGgIAAgJg");
	this.shape.setTransform(0,-5);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#ECC7AB").s().p("AAEB4QgagEghgyQgfgqAEgyQAEgxAOgVQAOgWAigDQAYAAAXAKQAYALAPAUQARAZgEA1QgFA8gVAfQgHATgGAGQgHAIgRAAIgQgCg");
	this.shape_1.setTransform(-0.1,0.2);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-8.6,-12.3,17.2,24.8);


(lib.Tween12 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#7F5D31").s().p("AgGAXQAAgIAFgPQAEgLgDgKIAFgBQACAJgBANIgDAXg");
	this.shape.setTransform(-5.5,8.5);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#7F5D31").s().p("AgGgEQACgXALACQABAJgCAGQgKAAAEAiIgDACQgFgMACgSg");
	this.shape_1.setTransform(-8.4,5.8);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#7F5D31").s().p("AAKATQgFgTgTgFQgBgHABgIQAMADAHAJQAIAJACAMQABAGgCACIgBAAQAAAAAAAAQgBAAAAAAQgBAAAAgBQgBAAAAgBg");
	this.shape_2.setTransform(-6.3,5.3);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#7F5D31").s().p("AgdAVQgDgVALgWQAFgJAQAAQAXAAAEgBIAEBBg");
	this.shape_3.setTransform(-5.4,-8.6);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#7F5D31").s().p("AAqBhQABgFAMgbQAKgcgNgCQgGgCgEAKIgFASIgKgHIABgNQAAgKgEgEQgTgXgGgEQgKgHgSgCQgNgCgVgPQgRgMgEAFQgGgDAEgIIAIgMQANgbAggJQAdgIAeAIQAxAOALAnQAJAjgXAxIgPAjQgJARgFAAIgBAAg");
	this.shape_4.setTransform(0.5,-2.5);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#7F5D31").s().p("AgpAqQgMgEgGgJQgHgKAAgMQAHgDAFAFQAEADAJANQAPAOAdgLQAXgKAOgPQAJgKAFgoIANAAQgFA0gLAKQglAhgfAAQgMAAgMgGg");
	this.shape_5.setTransform(-2.2,7.5);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#ECC7AB").s().p("AgyB2QgYgEgKgkQgKgkAJgsIAJgsIAAgQQABgMAKgNQAPgUAbgHQAZgHAeAJQAxANAIAcQAGAWgPA4QgIAdgOAXQgPAagSAHIgkATQgQAHgPAAIgIAAg");
	this.shape_6.setTransform(-0.3,0);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-9.3,-12.2,18.7,24.5);


(lib.Tween11 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#636363").s().p("AhRAQQgOgQgRAHQBMgmBFgbQAVgHAXAIQAYAIAJATQAIAPgPAPQgMAKgVAJQgZAJg0APQg0APgLAEQAFgdgQgRg");
	this.shape.setTransform(4.2,-1.8);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FFFFFF").s().p("AgGgHQgNgOgPAHQASgJAYgKQASARAEAHQAIANgFATIgeALQAEgagNgPg");
	this.shape_1.setTransform(-5.3,1.5);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#ECC7AB").s().p("AgwAoQgPgFAAgJQgBgKAVgRQAQgOASgLQAZgOAdgDQAJAMAKATQgTAMgNARQgEAFgJAEIgRAHQgJAIgQADQgMAAgNgEg");
	this.shape_2.setTransform(-9,3.7);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#E2BEA3").s().p("AADAGQgXAFgEgCQgDgCABgEQABgDAEAAQAHgBAFgEQAFgEADAAIAcgFIgFAcg");
	this.shape_3.setTransform(-11.6,1.9);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-15.4,-8,31,16.1);


(lib.Tween10 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#595959").s().p("AgpBgQgmgigcg2Qghg9AJgoQAJgkAiACQAdABAdA0QAQAdAZA1QAIgXAihdQAGARAcAEQAcAFATgNQgPBPgTA2QgeBSgkAHIgKABQgeAAgjggg");
	this.shape.setTransform(-0.8,5.8);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FFFFFF").s().p("AgnALIgDAAIARgtQAFAOAXAEQAYAEAQgLQgFAZgIAhQgfgYgmAAg");
	this.shape_1.setTransform(8.2,-3.2);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#FBD3B7").s().p("AgMA1QgWgBgEgKIAFglQABgHgEgGQgEgLACgLQADgQAKgEQAJgEAVAEQATAEAJAJQAIAIgCALIgCANQgCAEgGADIgHAEQgEACAAADIgFAiQgEAIgRAAIgEAAg");
	this.shape_2.setTransform(10.2,-9.5);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#FBD3B7").s().p("AgcAZQAGgSAKgVQAOgJAPgDQAJgDADAIQABAGgJACQgNAGgHAFIgIAeg");
	this.shape_3.setTransform(9.3,-15.8);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#D6D6D6").s().p("AgjAPIgGABIAPgoQANgQAbAEQAbAFABASQgFAcgGAXQgegXgkAAg");
	this.shape_4.setTransform(8.2,-4.2);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-14.1,-18.5,28.3,37.2);


(lib.Tween9 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#292929").s().p("AApA0QgEgEgSAIQgHgBgIgDIALgkQAEgPgIgNQgJgMgOgFIgLABQgGABAAABQgDgEABgFIACgGQgCgBgJACQgJACAAABQgCgIACgHQgLgCgHAHQgDgHgPALQAAgKANgNQANgNAMgFQAUgGAYAAQAjABAbAVQAbAYgBAcQAAAZgbAqQgJARgNAOQgHAGgJAEQAcgjgHgFgAgdgaIAAAAIAAAAg");
	this.shape.setTransform(2.4,-1.9);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#ECC7AB").s().p("AhQBoQgcgOABgOQAHgQAAgMQABgyAbgsQAdgvAdgLQAWgIAdAHQAcAGARAOQAbAXgBAcQgBAagbAqQgbAsgzARQgkAOgYAAQgNAAgJgFg");
	this.shape_1.setTransform(-0.1,0.2);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-10.9,-11,21.8,22.1);


(lib.Tween8 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#6E6E6E").s().p("ABkBpQh5gtgRgIQgqgWhSg/IhKg7QAOABAWgcQAWgdgFgPIBMA2QBQA4AVAKQASAJBYAXIB0AdQAXAHgDA5QgBAigKAwQgYgXhlgkg");
	this.shape.setTransform(5.1,2.6);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FFFFFF").s().p("AgjAUQANgCARgXQAPgXgBgMIAbATQgLAoghAVg");
	this.shape_1.setTransform(-15.9,-10.1);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#ECC7AB").s().p("AAkAxQgKgDgJACQgGACgOgDQgNgDgKgFQgLgEgOgNQgQgPgDgLQgBgHAEgLQAGgPALABIAKAFQALAHAJAEQANAFALAAQAAgCgGgEIgKgIIgBgBQgEgEAAgFQAAgFAEgDQAAgBABAAQAAgBABAAQAAAAABABQAAAAABABQAMALAPADQAVAIALATQAGALAMADQAJAEgOAUQgMASgMAAIgDgBg");
	this.shape_2.setTransform(-21.6,-13.9);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-28.7,-18.9,57.5,37.8);


(lib.Tween7 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#636363").s().p("AABDlIgTjUIhDiZQgJgcAKgbQAKgcAZgPQAVgNAVASQAQAOAHAVIAeBLQAfBSAGAlQAKA6gDCnQAAANgoACIgIAAQghAAgIgLg");
	this.shape.setTransform(-5.5,-18.9);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FFFFFF").s().p("AgkAUIgEgqIBRgEIgBAuQgMAHgdAAIgEAAQgbAAgEgHg");
	this.shape_1.setTransform(-0.9,4.1);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#ECC7AB").s().p("AgEA3QgEgUgIgSQgBACAAAIIgBANQgBAFgEAEQgFAEgFAAQgDgBAAgDQACgRgGgRQgGgTAKgUQAIgLgDgOQgCgJAZAAQAXABAFANQADAJAGAHQAIAGAGAiQAAANgEAKQgCAKgUAJQgLAFgFAAQgEAAgBgEg");
	this.shape_2.setTransform(-0.7,9.2);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#6D6A00").s().p("AgHgIQAJACAGAGIgPAJg");
	this.shape_3.setTransform(-8.4,42.1);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#6D6A00").s().p("AgHAAIAPgIIAAARQgIgBgHgIg");
	this.shape_4.setTransform(13.7,10.6);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#FDF63C").s().p("AgFgIIAOAIIgPAJQgDgJAEgIg");
	this.shape_5.setTransform(13.6,9.8);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#FDF63C").s().p("AgOADIAOgIIAPAIQgIADgHAAQgHAAgHgDg");
	this.shape_6.setTransform(10.1,7.8);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#C2BD2D").s().p("AgHAAQAHgHAIgBIAAARg");
	this.shape_7.setTransform(-10,42.1);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#C2BD2D").s().p("AgHgIIAPAIQgHAIgIABg");
	this.shape_8.setTransform(-12.9,22.2);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#FDF63C").s().p("AgHAAIAOgIQADAIgDAJg");
	this.shape_9.setTransform(-12.8,21.3);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#6D6A00").s().p("AAIgMIAAAQIgPAJQAFgPAKgKg");
	this.shape_10.setTransform(13.7,28.4);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#6D6A00").s().p("AgHgDIAPgJQgDAOgMALg");
	this.shape_11.setTransform(-8.5,24.2);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#C2BD2D").s().p("AgHAEIAAgQQALAMAEANg");
	this.shape_12.setTransform(-12.9,40.1);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#C2BD2D").s().p("AgHgMIAPAJIAAAQQgJgLgGgOg");
	this.shape_13.setTransform(-10.1,24.2);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#FDF63C").s().p("AgPgCQAPgGAQAGIgQAIg");
	this.shape_14.setTransform(-9.2,23.2);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#2E2E2E").s().p("AgCACQAAgDACgBQAAgBABAAQAAAAABABQAAAAAAAAQABABAAAAQgBADgCABIgBABQAAAAAAgBQAAAAAAAAQgBAAAAgBQAAAAAAAAg");
	this.shape_15.setTransform(4.4,21.8);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#6D6A00").s().p("AgMAUQgDgCAAgEIAAgPIAfgTIAAAQQgBAKgJAGIgLAHIgEACIgDgBg");
	this.shape_16.setTransform(4.3,21.5);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#FDF63C").s().p("AgQAJIAfgSIACABIgfASg");
	this.shape_17.setTransform(4.1,20.3);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#C2BD2D").s().p("AAAAHIAAgOIABABIAAAPg");
	this.shape_18.setTransform(2.6,22);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#C2BD2D").s().p("AAAAKQgCgCABgEIAAgOIABABIAAAPQAAADADACg");
	this.shape_19.setTransform(2.7,22.3);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#2E2E2E").s().p("AgbAEIA3ggIAAAaIgKAEIAAgOIgjAUIAAAQIgKAFg");
	this.shape_20.setTransform(1.1,13.6);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#ABABAB").s().p("AghANIA3ggIAMAHIg4Agg");
	this.shape_21.setTransform(0.6,12);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#7D7D7D").s().p("AgFAKIAAgZIAKAHIAAAYg");
	this.shape_22.setTransform(-2.2,14.9);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#C2BD2D").s().p("AgFACIAAgJIAKAGIAAAJg");
	this.shape_23.setTransform(-2.2,16.7);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("#6D6A00").s().p("AgEgCIAJgFIAAAJIgJAGg");
	this.shape_24.setTransform(-1.2,16.7);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#9F9F9F").s().p("AgJAAIAJgFIAKAGIgJAFg");
	this.shape_25.setTransform(-1.8,15.9);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f("#DCDCDC").s().p("AgJAAIAJgFIAKAFIgJAGg");
	this.shape_26.setTransform(-1.8,16.9);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f("#C5C5C5").s().p("AgEACIAAgJIAKAGIAAAJg");
	this.shape_27.setTransform(-1.3,16.1);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f("#7D7D7D").s().p("AgEAFIAAgPIAJAHIAAAOg");
	this.shape_28.setTransform(2.4,12.7);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f("#6D6A00").s().p("AgEgBIAJgGIAAAJIgJAGg");
	this.shape_29.setTransform(3.4,14);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f("#C2BD2D").s().p("AgEACIAAgJIAJAGIAAAJg");
	this.shape_30.setTransform(2.4,14);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f("#9F9F9F").s().p("AgJAAIAJgFIAKAGIgJAFg");
	this.shape_31.setTransform(2.9,13.2);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f("#DCDCDC").s().p("AgJAAIAJgFIAKAFIgJAGg");
	this.shape_32.setTransform(2.9,14.2);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f("#C5C5C5").s().p("AgFACIAAgJIALAGIAAAJg");
	this.shape_33.setTransform(3.4,13.4);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f("#D9D9D9").s().p("AgkAOIA6giIAPAIIg7Ahg");
	this.shape_34.setTransform(0.6,15.6);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f("#D09244").s().p("AiMA6IDtiMIAsAZIjtCMg");
	this.shape_35.setTransform(0.4,15.5);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f("#4D3618").s().p("Ah2AfIDtiMIAACHIjtCMgAh2gYIDtiNIAAAxIjtCMg");
	this.shape_36.setTransform(2.6,26.3);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f("#A47236").s().p("AgVAMIAAgwIArAZIAAAwg");
	this.shape_37.setTransform(-11.4,25);

	this.shape_38 = new cjs.Shape();
	this.shape_38.graphics.f("#1F1F1F").s().p("Ah2BDIDtiMIAAAHIjtCMg");
	this.shape_38.setTransform(2.6,22.1);

	this.shape_39 = new cjs.Shape();
	this.shape_39.graphics.f("#936830").s().p("AiMA6IDtiMIAsAZIjtCMg");
	this.shape_39.setTransform(0.4,20.4);

	this.shape_40 = new cjs.Shape();
	this.shape_40.graphics.f("#636363").s().p("AgVgIIAAgHIArAYIAAAHg");
	this.shape_40.setTransform(-11.4,27.8);

	this.shape_41 = new cjs.Shape();
	this.shape_41.graphics.f("#A47236").s().p("AgVA3IAAiGIArAZIAACGg");
	this.shape_41.setTransform(-11.4,35);

	this.shape_42 = new cjs.Shape();
	this.shape_42.graphics.f("#CB8E42").s().p("AiMA6IDtiMIAsAZIjtCMg");
	this.shape_42.setTransform(0.4,21.2);

	this.shape_43 = new cjs.Shape();
	this.shape_43.graphics.f("#B47E3B").s().p("AgVgIIAAgHIArAYIAAAHg");
	this.shape_43.setTransform(12.3,13.7);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_43},{t:this.shape_42},{t:this.shape_41},{t:this.shape_40},{t:this.shape_39},{t:this.shape_38},{t:this.shape_37},{t:this.shape_36},{t:this.shape_35},{t:this.shape_34},{t:this.shape_33},{t:this.shape_32},{t:this.shape_31},{t:this.shape_30},{t:this.shape_29},{t:this.shape_28},{t:this.shape_27},{t:this.shape_26},{t:this.shape_25},{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-14.5,-42.9,29.1,86);


(lib.Tween6 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#6E6E6E").s().p("AAIBTQhUgIhSgWQgfgIgVgZQgUgYgCghQgDgRAKgNQAKgOARgCQALgCAMAFQAxASCKAwIDAgEQASAGAIAdQAIAegKASQiMATg6AAIgWgBg");
	this.shape.setTransform(-4.7,0);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FFFFFF").s().p("AgXggIAVgGQATAJAFAZQAGAXgLAPIgTAFg");
	this.shape_1.setTransform(17.7,2.1);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#FBD3B6").s().p("Ag5AkQgKgGgGAAQgLAAAGgZQAGgZARgCQAOAAAKgEQAbgMAbABQAjAEANAVQAFALAEANQAFAUgLgDQgfgJgeAOQgFACgUgBQgVgCgLAFIgFAAQgEAAgEgCg");
	this.shape_2.setTransform(19.9,1.5);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-28,-8.4,56.1,16.9);


(lib.Tween5 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#6E6E6E").s().p("AiqC+QgRgOgDgVQgDgVANgRIAHgHQAZgZBEg5IA/gzIB/ivQARgKAdAOQAdAMAHAWIgzBQQg3BVgTAZQg9BJhDBDQgdAcgeAEIgMABQgWAAgQgNg");
	this.shape.setTransform(-2.5,6.9);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FFFFFF").s().p("AgngDIANgUQATgJAVAMQAVALAFASIgKATg");
	this.shape_1.setTransform(12.8,-11.8);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#DDBEA7").s().p("AgoAGIAfgiQANgRASAGQATAGAAAcIgeAvQgYgVgbgPg");
	this.shape_2.setTransform(13.2,-12.6);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#DDBEA7").s().p("AgZAaIAjg3QAEgIAIAEQADACABADQAAADgCADIAAAAIgdA6g");
	this.shape_3.setTransform(18.9,-23.7);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#DDBEA7").s().p("AgdA4QgYgJAFgJIABAAQAIgKgCgPQgDgVANgUQALgLAEgRQABgDADAAQAGABACAFQADAFgBAFIAAAAIgDANQgDAGAAACIARgUQAJgHAOAKQAKAHAEAHQAJAZgPAWIgJAOQgEADgHACQgKAEgFAIQgFAHgKAAQgIAAgLgEg");
	this.shape_4.setTransform(16.8,-18.6);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-21.6,-27.2,43.3,54.5);


(lib.Tween4 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#F41105").s().p("AgUB0IAHkIIARAFIAREOIgYAWg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-2.1,-14.9,4.2,29.9);


(lib.Tween3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("AAxBxQgIgBgVgXQgUgYAAgMQAAgLgFgNQgIgQgLgEQgJgEADAfIAEAfIgLgCQgHgggLgWQgPgggLAQQgBACgEgGQgEgHgBgHQgQgFAFgNQADgKALgHQgCgLAHgLQAGgKAGACQAVgPALAGQAGgNAUgCQATgCAGAKQAKgFAPAAQASAAAHAJQALgDAKAMQAKANgEANQAKADACANQACANgFAHQAHAKgBAMQAAAMgIAJQAGAIgCAJQgBAKgHAGQAJATgYAgIgJAMQgEAEgJAAIgGgBg");
	this.shape.setTransform(0,-3.1);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#330000").s().p("AggAiQgPgWgGgBIAEgBQAWgGALgSQALgUgGgWQAUgFAVAOQAZAQgDAaIABAaQACAUgDAEIhGANQgDgHgLgRg");
	this.shape_1.setTransform(2,8.6);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#330000").s().p("AgIB0IgVgRQgCgCgRACQgQADgDgGQgKgRgEgrIgGhHQgEgvAigcQAegXApgCQAtgBANARQAOASACBBQABAcgPAiQgRAogBAPQgBAEAIAXQAGAVgCAEIg4ADQgCgGgRgOg");
	this.shape_2.setTransform(0.5,0);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-10.4,-14.4,20.9,28.9);


(lib.Tween2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#8BA2A7").s().p("AAUBhIi7hsQAAAAgBAAQgBgBAAAAQgBgBAAAAQAAgBAAAAQgCgFAFgDICAhKQAKgFAKAFIC7BrQAAABABAAQAAAAABABQAAAAAAABQABAAAAABQACAFgFADIiBBKQgEADgFAAQgFAAgFgDg");
	this.shape.setTransform(0,-0.5);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#9AB3B8").s().p("AANBlIi7hsQgEgBgBgEQgCgEACgEQACgEADgCICBhKQAQgIAQAIIC7BsQAFABACAFQABAEgCAEQgCADgEABIiABLQgIAEgIAAQgJAAgIgEg");

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-18.1,-10.5,36.3,21);


(lib.Tween1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#E7C3A7").s().p("AgRAXQgEgDADgIQADgJAIgJQAHgKAHgEQAIgFADADQAEACgDAJQgDAJgIAJQgHAJgHAFQgFADgDAAIgDgBg");
	this.shape.setTransform(-29.1,32.9);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#E7C3A7").s().p("AgSAXQgDgDADgJQADgIAIgJQAHgJAIgFQAHgEAEACQADADgDAJQgDAIgIAJQgHAJgHAFQgFADgEAAIgDgBg");
	this.shape_1.setTransform(14.1,-26.7);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#E7C3A7").s().p("AgEAAQgMgUACgFIACgBQADgCAEABQADAAABADQACAFAEAFIAGAIIAEATIgXAPg");
	this.shape_2.setTransform(19.7,-24.1);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#545454").s().p("AjXBTQgGgjAPgIQBegaBhgrQAtgWAmgcQAggZAKgHQAWgPAaACQAbACAUARIADAEQAKAMgBAPQgBAQgLAKQhDA2h5AzQhpAshqAYQgPgGgGgkg");
	this.shape_3.setTransform(0.5,25.9);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#FFFFFF").s().p("AgUAJQgHgfAQgJIAagJIAIBKIgVAHQgPAAgHggg");
	this.shape_4.setTransform(-20.5,34.2);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#E7C3A7").s().p("AgkAdQgEgDAAgFIAAgEQACgEARgEIARgDQAEgHAJgNQALgPAHgBIAOApQgfAPgKADQgDABgIgBQgJAAgIACIgCAAQgEAAgCgCg");
	this.shape_5.setTransform(-25.1,37.4);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#684200").s().p("AA5BaQgLgEgGgKQgOgjgVAGQgFACABAKIgPgDQgcg4gSAGQgDgGgMgGQgNgGgBAJQAAACgFgBQgGgBgDACQgEgMAVgZQAYgcAigQQAogTAjAQQAoASAQA6QAEAMgFAYQgHAfAAAMIAAAIQgGAKgKAEIgIABQgHAAgHgDg");
	this.shape_6.setTransform(7.2,-7.2);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#808080").s().p("AgoA1QAAgdAGgWQAGgaAMgeQAQgmAPgJQACgBAJAEIALAEQADAAAAAGQgFAngaAfQgJALgOAtQgOAuAAASQgMgMAAglg");
	this.shape_7.setTransform(14.7,10.7);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#4A4A4A").s().p("AAEENQgigDgbgNQgYgMgEgMIAOhGQAKgxgHgXQgGgXg/hLQg1hAAKgaIAEgQQACgKAEgKIALgjIAKgbQANgiAagUQAggZAdARQBVAxBTC/QAdBCATBCQASA6gCALIgIATIgYhMIAKBdQgXAPggANQg4AZgmAAIgIAAg");
	this.shape_8.setTransform(30.2,25.6);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#FFFFFF").s().p("AgfA4QgQgmADgNQAGgaANgcQATgjATgGQAGgBANAFIANAFIggAmQgeArAAASQABAJADAOQABAMgEAHQgEAHAGAYQgJgQgIgTg");
	this.shape_9.setTransform(13.9,9.6);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#D6B49A").s().p("AgcBTQgGgIgKgDQANgJALgXQAOgdgJgVQgHgRAFgXQAJgmAAgIQANAWAKAeIAQAvQAOAjAAAFIg9A2QgJgIgDgGg");
	this.shape_10.setTransform(11.9,-0.3);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#ECC7AB").s().p("AABBwQgDgCgPABQgSABgGgBQgMgDgOgYQgOgZgEgcIACgOQACgKAAgDIgFgMQgDgIAAgEQACgpAXgUQASgQApgJQArgLAQAMQARANANA3QAGAZgBARIAAAlQAAAGgpAhQgnAfgHAAIgBAAg");
	this.shape_11.setTransform(7.4,-4.4);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#F9B824").s().p("AAZAWIABgCIgDgEQgPgRgVgMQgJgFgEAAQAAABgBAAQAAAAgBAAQAAAAAAAAQgBAAAAgBQgBAAAAgBQAAAAAAgBQAAAAAAAAQAAgBABAAQAEgFAPAIQAVAMARATQAFAFgDAFQAAAAAAAAQAAAAgBABQAAAAAAAAQgBAAAAAAQgBAAAAAAQgBAAAAgBQgBAAAAAAQAAgBAAAAg");
	this.shape_12.setTransform(-43.1,57.6);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#F9B824").s().p("AAcAYQgBAAAAAAQgBgBAAAAQAAAAAAgBQAAAAAAgBIAAgBIgDgEQgQgSgUgLQgIgFgFAAQAAABgBAAQAAAAgBAAQAAAAAAAAQgBAAAAgBQgBAAAAgBQAAAAAAAAQAAgBAAAAQAAgBABAAQADgFAQAIQAVAMARATQAFAFgDAFIgCABIAAAAg");
	this.shape_13.setTransform(-41.8,55.9);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#F9B824").s().p("AAaAWIAAgCIgCgEQgPgQgWgNQgIgFgFAAQAAABAAAAQgBAAAAAAQgBAAAAAAQAAAAgBAAIAAgBQgBAAAAAAQAAgBAAAAQAAgBAAAAQAAgBABAAQADgFAQAIQAWANAQASQAFAHgCADQgBAAAAAAQAAABAAAAQgBAAAAAAQAAAAgBAAQgBAAAAAAQAAAAgBAAQAAgBAAAAQAAgBAAAAg");
	this.shape_14.setTransform(-40.7,54.3);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#DF9400").s().p("AADAtQgPgTgWgLQgOgHgCADIAtg9QADgDAMAHQAWALARAUQADAFgBACIguA8QABgCgDgFgAgyALIAAAAIAAAAg");
	this.shape_15.setTransform(-41.9,55.9);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#C43F00").s().p("AAFAjIACAAQADgBgEgGQgLgOgSgJQgIgFgDABQAAAAAAABQgBAAAAAAQAAABAAAAQAAABABAAIgBgBQgDgDADgGIARgbQACgDAOAHQAVAMAPARQADADAAAEQgXAbgCAAIgEABIgDAAg");
	this.shape_16.setTransform(-44.7,59.9);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#983103").s().p("AAKANQgRgJgMgOQgEgFADgBQADgBAIAFQAQAJANAOQAEAFgDABIAAAAQgEAAgHgEg");
	this.shape_17.setTransform(-46.2,61.7);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#7A1100").s().p("AAAAHIgZgVIABgHIAZAPIAaAVIgBAHg");
	this.shape_18.setTransform(-39.6,53);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#2D86C9").s().p("AmKIEIL6wWIAbAPIr6QWg");
	this.shape_19.setTransform(-2.7,-0.8);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#54BEFF").s().p("AmJIBIL6wXIAZAWIr6QXg");
	this.shape_20.setTransform(-0.1,1.1);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#2674AA").s().p("Al8IIIL6wWIgBAHIr6QWg");
	this.shape_21.setTransform(1.1,2.5);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#737373").s().p("AgFAcIgVgOIA0gsIABACIgbA7g");
	this.shape_22.setTransform(42.6,-60.3);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#F0C26B").s().p("AAJAoQgGgEgGgGIgNgLIgZgQIA5gxQAKAHALAGIAFADIgiBNIABgHg");
	this.shape_23.setTransform(38.4,-54.2);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("#4F4F4F").s().p("AhfBFQgOgiATgcQApgqAqggQAdgWApABQAnACAAASQAAANgxAzQg0A0gpAdQgRAMgNAAQgQAAgJgUg");
	this.shape_24.setTransform(28,-0.6);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#545454").s().p("AAfBUQgNgCgsgrQgtgqgcglQgFgTAegPQAdgPAOAJIBBA4QBDA6AAAOQAAARgaALQgTAIgPAAIgKAAg");
	this.shape_25.setTransform(28.1,-12.6);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f("#FFFFFF").s().p("AgoALQgJgNAbgQQAagQAMAJIAbAUIhAAig");
	this.shape_26.setTransform(21.8,-18.9);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f("#E7C3A7").s().p("AASA2QgJgMgNgGQgOgDgIgKQgKgNgNgIQAAgBgBAAQAAAAAAgBQAAAAAAAAQAAAAAAgBQAHgJAKAGQADABAGAEQAFAFACgBQAAAAAAAAQAAAAAAgBQAAAAAAgBQAAAAgBgBQgBgDgFgGQgFgGgLgEIgLgEQgEgJANgMQAKgJAKgDQAWgEAUAOQAHAGAFATQAFATgCAFQgBADAHAHIAKAIQAGAKgRAOQgLAJgGAAQgDAAgCgCg");
	this.shape_27.setTransform(17.6,-23.1);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_27},{t:this.shape_26},{t:this.shape_25},{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-48.5,-63.4,97,126.9);


(lib.Ticks = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#4EB500").s().p("Ai0BPIgBidIBFAAIABB1IElAAIAAAog");
	this.shape.setTransform(155.6,7.9);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#4EB500").s().p("Ai0BPIgBidIBGAAIAAB2IElgBIAAAog");
	this.shape_1.setTransform(111.2,35.1);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#4EB500").s().p("Ai0BPIgBidIBFAAIABB1IElAAIAAAog");
	this.shape_2.setTransform(155.6,7.9);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#4EB500").s().p("Ai0BPIgBieIBFAAIABB3IElAAIAAAng");
	this.shape_3.setTransform(18.2,88.4);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#4EB500").s().p("Ai0BPIgBieIBFAAIABB3IElAAIAAAng");
	this.shape_4.setTransform(18.2,88.4);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.shape,p:{x:155.6,y:7.9}}]},23).to({state:[{t:this.shape,p:{x:155.6,y:7.9}},{t:this.shape_1}]},24).to({state:[{t:this.shape_2},{t:this.shape_1},{t:this.shape,p:{x:64.7,y:61.3}}]},24).to({state:[{t:this.shape_2},{t:this.shape_1},{t:this.shape,p:{x:64.7,y:61.3}},{t:this.shape_3,p:{x:18.2,y:88.4}}]},24).to({state:[{t:this.shape_2},{t:this.shape_1},{t:this.shape,p:{x:64.7,y:61.3}},{t:this.shape_4},{t:this.shape_3,p:{x:-29,y:114.8}}]},24).wait(25));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = null;


(lib.Path_728 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#28537E").s().p("AAcDRQgpgPglgWQhKguhEhdQgjg1gOgdQgXgzABgoQACgaASgUQAUgVAggJQBggRCDA5QA5AaAuAgQBLAzAgAuQAOAlADAYQAEAhgKAfQgOApgfAdQgfAegpAMQgXAFgWAAQgiAAghgMg");
	this.shape.setTransform(26.4,22.1);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Path_728, new cjs.Rectangle(0,0,52.8,44.2), null);


(lib.Path_727 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#28537E").s().p("AhsCnQgqgMgngWQgzgcgdgyQgSgnABgqQABgrAVgmQARgbAbgTQAUgOAlgPQA6gHBWAVQA4AOA3AZQB6A2A8BYQAQAegDAcQgDAagSATQgdAdg2AQQgaAIhEALQgiAFgjAAQhAAAhAgSg");
	this.shape.setTransform(28.7,18.5);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Path_727, new cjs.Rectangle(0,0,57.5,37), null);


(lib.Path_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#CCCCCC").s().p("AAdDDQgrgOgmgVQhVgxg9hRQgkgxgOgcQgYguABgmQABgXAUgTQAUgUAhgIQBjgQCHA2QA2AVA0AgQBKAtAkAuQAOAiAEAXQAEAegKAdQgOAlggAcQggAcgrAMQgXAEgWAAQgkAAgigLg");
	this.shape.setTransform(27.2,20.5);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Path_1, new cjs.Rectangle(0,0,54.4,41.1), null);


(lib.Path = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#CCCCCC").s().p("AhwCbQgrgLgogVQgYgMgWgTQgYgUgMgWQgTgjABgoQABgpAWgiQARgaAcgRQAVgOAmgNQBLgGBJATQA6AOA4AWQB/A0A9BQQAQAcgDAaQgDAagTARQgdAbg4APQgaAHhGAKQgjAFgjAAQhDAAhDgRg");
	this.shape.setTransform(29.6,17.2);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Path, new cjs.Rectangle(0.1,0,59.2,34.4), null);


(lib.Group_14 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#D4F5F5").s().p("Aixg9QgpgYgngEQgkgDgdAPIB8hGQAdgRAlADQAnAEAqAYIF2DbIhxBMg");
	this.shape.setTransform(64.6,16.2);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#839999").s().p("AhNBZQAPgZAFggQALg/AtgaIBxhCQgqAagKA+QgMBDguAZIhxBDQAUgNAOgWg");
	this.shape_1.setTransform(32.8,14.2);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#D4F5F5").s().p("AgQBCQgmgDgpgYIhCgmIAAgNIAZABIgBgOIAYgBIgBgNIAYAAIgBgOIAYABIgBgOIAZAAIBAAmQApAYAmADQAiACAcgOIhzBCQgXAOgcAAIgMgBg");
	this.shape_2.setTransform(16.2,21.7);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.Group_14, new cjs.Rectangle(0,0,96.9,32.5), null);


(lib.ClipGroup_21 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AqHhTIH0kjIMbHKIn1Ejg");
	mask.setTransform(80.3,46.9);

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#454545").s().p("AsYA+IAAh7IYwAAIAAB7g");
	this.shape.setTransform(79.3,50.7);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#454545").s().p("AoXCZIAAkxIQvAAIAAExg");
	this.shape_1.setTransform(72.3,15.3);

	var maskedShapeInstanceList = [this.shape,this.shape_1];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.ClipGroup_21, new cjs.Rectangle(15.5,9.4,129.6,47.5), null);


(lib.ClipGroup_20 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AEVGaIoSkzQg3gfgrg/Qgrg+gPhFIhBk6QA8BsCNCTQCSCYBwBAQAjAVAegHQAegIALgiQAUg5AzgOQA0gOBBAlIADACQBPAvA4BhQA5BiAABbQABBfg6AiQgYAOgcAAQgoAAgwgbg");
	mask.setTransform(60.5,43.7);

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#212121").s().p("ApxiwIAFgSITeFzIgFASg");
	this.shape.setTransform(65,64.2);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#212121").s().p("Ap6iTIAWhMITfFzIgXBMg");
	this.shape_1.setTransform(63.5,55.1);

	var maskedShapeInstanceList = [this.shape,this.shape_1];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.ClipGroup_20, new cjs.Rectangle(13.1,32.7,94.9,51.1), null);


(lib.ClipGroup_19 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("A4Qi8IAAl3IUdL4IcCwHIACF1I8DUQg");
	mask.setTransform(155.3,147.4);

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#8A8A8A").s().p("AgGAFIALgJIACACIgCAAQgIAHgDAAIAAAAg");
	this.shape.setTransform(130.9,131);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#8A8A8A").s().p("AAAAFQAJgFgEgCQgCgBgDADQgCADgCgBQAHgDgBgDIACABQAHABgDACQgDAGgDAAIgCgBgAgIAAIAGgDIgBABQgCACgCAAIgBAAgAABgFIABABIgEABQAAgBABAAQABgBAAAAQAAAAAAAAQABAAAAAAg");
	this.shape_1.setTransform(131.9,132.1);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#8A8A8A").s().p("AgFACQAAAAAAAAQABAAAAAAQABAAAAAAQAAABABAAQABACADgDIgEgDQAEgEADACQAEADgHADIgDACQgBAAgBAAQAAAAgBgBQAAAAgBgBQAAAAAAgBgAABgBIAAAAIgBABIADABIABAAQAAgBAAAAQABAAAAAAQAAAAgBgBQAAAAAAgBg");
	this.shape_2.setTransform(132.9,132.6);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#8A8A8A").s().p("AgGAEIAMgIQACACgHAEQgDADgCAAIgCgBg");
	this.shape_3.setTransform(133.6,132.9);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#8A8A8A").s().p("AAAAAQADgEACABIgIAHQgCgBAFgDg");
	this.shape_4.setTransform(133.9,133.3);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#8A8A8A").s().p("AgCAHIAAAAIgGgEQABAAAAAAQABgBAAAAQABAAAAABQABAAAAAAQAAAAABABQAAAAAAAAQABAAAAAAQAAgBAAAAIAEgFQAHgIgBAIQgEACgBABIgEAGg");
	this.shape_5.setTransform(134.7,127.6);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#8A8A8A").s().p("AAAAEQAJgEgEgDQgBgBgEAEQgCADgCgBQAIgEgCgCIACAAQAHABgDADQgCAFgEAAIgCgBgAgIAAIAGgDIgBAAQgCADgCAAIgBAAg");
	this.shape_6.setTransform(135.7,128.7);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#8A8A8A").s().p("AgFACQAAAAABAAQAAAAAAAAQABAAAAAAQAAABABAAQAAAAAAABQABAAAAAAQABAAAAgBQAAAAABgBIABAAIgEgDQAEgEADACQADACgGAEQgCACgCAAQAAAAgBAAQAAAAgBgBQAAAAgBgBQAAAAAAgBgAAAgBIAAAAIAAABIADABIAAgBQABAAAAAAQABAAAAAAQAAgBAAAAQgBAAAAgBg");
	this.shape_7.setTransform(136.7,129.1);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#8A8A8A").s().p("AgGAEIAMgIQACACgHAEQgDADgCAAIgCgBg");
	this.shape_8.setTransform(137.4,129.4);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#8A8A8A").s().p("AAAAAQADgEACABIgIAHQgCgBAFgDg");
	this.shape_9.setTransform(137.8,129.8);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#8A8A8A").s().p("AgFAEIAAAAIADABIgCABIgBgCgAgDAAQAAgCAEgDQAFgCAAAEQAAAAgBAAQAAAAAAAAQAAAAgBAAQAAAAAAgBQgBAAAAAAQAAAAgBAAQAAAAAAAAQgBAAAAAAIgDAEIgDACIACgCg");
	this.shape_10.setTransform(138.8,124.2);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#8A8A8A").s().p("AAAAEQAJgEgEgDQgCgBgDAEQgCADgCgBQAHgEgBgCIACAAQAHABgDADQgDAFgEAAIgBgBgAgIAAIAGgEIgBABQgDADgBAAIgBAAg");
	this.shape_11.setTransform(139.7,125.2);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#8A8A8A").s().p("AgFACQAAAAABAAQAAAAAAAAQABAAAAAAQAAABABAAQABACADgEIgEgCQAEgEADACQADACgGAEQgCACgCAAQAAAAgBAAQAAAAgBgBQAAAAgBgBQAAAAAAgBgAAAgBIADABIABAAQAAAAABAAQAAAAAAgBQAAAAAAAAQgBgBAAAAIgEABIAAAAIAAAAIAAAAgAAAgBg");
	this.shape_12.setTransform(140.6,125.6);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#8A8A8A").s().p("AgGAEQAFgEAHgEQACACgHAEQgDADgCAAIgCgBg");
	this.shape_13.setTransform(141.3,125.8);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#8A8A8A").s().p("AAAAAQADgEABABIgHAHQgCgBAFgDg");
	this.shape_14.setTransform(141.7,126.2);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#8A8A8A").s().p("AgBAAQAEgGADACQgEAKgBgCQgBgCgFADIAAAAQgCgBAGgEgAADACIABgFIgEAEQAAgBAAABIAAABQAAAAABAAQAAABABAAQAAAAABgBQAAAAAAAAg");
	this.shape_15.setTransform(142.4,120.5);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#8A8A8A").s().p("AAAAFQAJgFgDgCQgBAAAAAAQAAAAgBAAQAAAAAAAAQgBAAAAAAIAAgCIABAAQAHACgDACQgDAGgDAAIgCgBgAgIAAQADgCAEgBIgBABQgDACgCAAIgBAAgAACgFIABABIgEABQAAgBABAAQAAgBAAAAQAAAAABAAQAAAAABAAg");
	this.shape_16.setTransform(143.5,121.6);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#8A8A8A").s().p("AgFACQAAAAABAAQAAAAAAAAQABAAAAABQAAAAABABQABABADgDIgEgCQADgGAEADQAEACgHAEQgCACgCAAQAAAAgBAAQAAAAgBgBQAAAAgBgBQAAAAAAgBgAABgBIAAAAIgBABIADABIABgBQAAAAAAAAQAAAAABAAQAAAAgBgBQAAAAAAgBg");
	this.shape_17.setTransform(144.5,122);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#8A8A8A").s().p("AgGAEIAMgIQACADgHAEQgDACgCAAQAAAAgBAAQAAAAAAAAQAAAAAAAAQgBgBAAAAg");
	this.shape_18.setTransform(145.2,122.3);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#8A8A8A").s().p("AgDAEQgCgBAFgDQADgEACABIgIAHg");
	this.shape_19.setTransform(145.6,122.7);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#8A8A8A").s().p("AgEAGQgBgBAAAAQgBAAAAAAQAAgBABAAQAAgBABAAQAGgGgCAEQADgCgCgCIABAAIgBAAQACgDAEAEQgJAJACgFIAAgBIgCADIgCACg");
	this.shape_20.setTransform(146.6,116.9);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#8A8A8A").s().p("AAAAFQAKgFgEgCQgCgCgDAEQgDADgCgBQAIgDgBgDIABAAQAHACgDACQgDAGgDAAIgCgBgAgIAAQADgCAEgBQAAgBABAAQAAgBAAAAQAAAAABAAQAAAAABAAIABABIgEABIgBABQgDACgCAAIgBAAg");
	this.shape_21.setTransform(147.5,118.1);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#8A8A8A").s().p("AgFACQAAAAABAAQAAAAAAAAQABAAAAAAQAAABABAAQABACADgDIgEgCQADgGAEADQAEACgHAEQgCACgCAAQgBAAAAAAQgBAAAAgBQAAAAgBgBQAAAAAAgBgAAAgBIAAAAIABABIACAAQABAAAAAAQAAAAAAAAQABgBgBAAQAAgBAAAAg");
	this.shape_22.setTransform(148.4,118.5);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#8A8A8A").s().p("AgGAEQAGgEAGgEQACACgHAEQgDADgCAAIgCgBg");
	this.shape_23.setTransform(149.1,118.7);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("#8A8A8A").s().p("AgEAEQAAgBADgDQAEgEACABIgIAHIgBAAg");
	this.shape_24.setTransform(149.5,119.1);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#8A8A8A").s().p("AgEAGQgEgCAFgCQgFAEAHgCQAGgCgDgCIACABQADgEgDgBQAFgFgEAJQgDAHgDAAIgDgBg");
	this.shape_25.setTransform(150.3,113.5);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f("#8A8A8A").s().p("AAAAFQAKgFgEgCQAAgBgBAAQAAAAAAABQgBAAAAAAQgBAAAAABIAAgCIABAAQAHABgDACQgCAGgDAAIgDgBgAgIAAIAGgCIAAAAQgDACgCAAIgBAAgAACgEIABABQgDAAgCABQACgEACACg");
	this.shape_26.setTransform(151.4,114.5);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f("#8A8A8A").s().p("AgFACQAAAAAAAAQABAAAAAAQAAAAABAAQAAABAAAAQABABAAAAQAAAAABAAQABAAAAgBQAAAAABgBIAAAAQAAgBAAAAQAAAAAAAAQAAAAAAAAQABAAAAAAIgEgBQADgFAEACQAEACgHAEQgCACgCAAQgBAAAAAAQgBAAAAgBQAAAAgBgBQAAAAAAgBgAAEAAQAAgBABAAQAAAAAAAAQAAgBAAAAQgBAAAAAAIgEABIAAAAIAAAAQAAAAAAABQABAAABAAQAAAAABAAQAAAAABAAg");
	this.shape_27.setTransform(152.4,114.9);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f("#8A8A8A").s().p("AgGAEIANgIQACACgHAEQgEADgCAAIgCgBg");
	this.shape_28.setTransform(153.1,115.1);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f("#8A8A8A").s().p("AAAAAQAEgEABABIgIAHQgCgBAFgDg");
	this.shape_29.setTransform(153.5,115.5);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f("#896A42").s().p("AAOg0QAHgNAFgBQAFgBAMAIQAOAKgCAGQgBADgOAOIheBdg");
	this.shape_30.setTransform(167.9,137.5);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f("#896A42").s().p("AgBASQgPgJgOgLIAOgPQAIgGAIABQAHABAWAUQgJgGABAHQACAHAIgHIgCgBIACABIgQAPQgEAJgFAAQgEAAgDgGg");
	this.shape_31.setTransform(136.7,135);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f("#CE2C32").s().p("AgdBFIgLg0QgGghgBgVIgBgOQAAgCAKgFQApgUAuANQgtBKgfA5IgBACIgBADg");
	this.shape_32.setTransform(165.4,137.1);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f("#CE2C32").s().p("AgMAMIgSgOIAOgPQAJgGAHABQAFAAALAKIAPAMQgTAWgGABIgBAAQgDAAgOgLg");
	this.shape_33.setTransform(140.5,131.4);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f("#FDF215").s().p("AgkgQQAfguAzgZQAMA/AJA8IAAABIgBAAIAAABIiDAyQgHg2Akgyg");
	this.shape_34.setTransform(155.6,140.5);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f("#FDF215").s().p("AgMANIgSgNIAMgNQAJgKAFgBQAFgBAfAZQgMgHACAHQABAHAJgHQgVAYgGABIAAAAQgEAAgNgMg");
	this.shape_35.setTransform(144.4,127.7);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f("#56B864").s().p("Ag5AeQgKgTACgKQACgGAOgGQAHgDAQgFIBcgjIgEAEIgBABQg0AzgxA1QgKgLgHgOg");
	this.shape_36.setTransform(155.7,149.7);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f("#56B864").s().p("AgMAOIgTgOIANgNQAJgKAFAAQAEgBAOALIASANIgCACIABgCQgLgHACAHQACAGAGgEQgTAWgGAAIAAAAQgEAAgNgKg");
	this.shape_37.setTransform(148.3,124.1);

	this.shape_38 = new cjs.Shape();
	this.shape_38.graphics.f("#40B3F3").s().p("AgNBKQglgKgOgUIgGgJIAHgJQAJgLAOgNIBLhNIABAEQARA6ALAsIAFANQADALgBAEQgDAEgbAIQgQAFgQAAQgLAAgLgCg");
	this.shape_38.setTransform(158.9,151.8);

	this.shape_39 = new cjs.Shape();
	this.shape_39.graphics.f("#40B3F3").s().p("AgMAOIgTgOIANgNQAJgKAFAAQAEgBAOALIASANQgVAYgGAAIAAAAQgEAAgNgKg");
	this.shape_39.setTransform(152.2,120.5);

	this.shape_40 = new cjs.Shape();
	this.shape_40.graphics.f("#E8B550").s().p("AhEgHQAFAOAGgQQABgFgCgBQgDgCgHAGIBxhvQArA0ghBTQgdBNg7AhQgQhEgTg+g");
	this.shape_40.setTransform(169.3,145.3);

	this.shape_41 = new cjs.Shape();
	this.shape_41.graphics.f("#E8B550").s().p("AgNAOIgSgOIANgMQAJgKAFgBQAGgBAeAYQgVAXgGABIAAAAQgEAAgOgKg");
	this.shape_41.setTransform(156.2,116.8);

	this.shape_42 = new cjs.Shape();
	this.shape_42.graphics.f("#7A7A7A").s().p("AgDAAIABgCIAGACIAAADg");
	this.shape_42.setTransform(196.1,50.2);

	this.shape_43 = new cjs.Shape();
	this.shape_43.graphics.f("#7A7A7A").s().p("AgDAAIABgBIAGABIgBACg");
	this.shape_43.setTransform(191.7,53.2);

	this.shape_44 = new cjs.Shape();
	this.shape_44.graphics.f("#7A7A7A").s().p("AgDAAIAAgCIAHACIgBADg");
	this.shape_44.setTransform(187.4,56.2);

	this.shape_45 = new cjs.Shape();
	this.shape_45.graphics.f("#7A7A7A").s().p("AgDAAIABgCIAGACIgBADg");
	this.shape_45.setTransform(183,59.3);

	this.shape_46 = new cjs.Shape();
	this.shape_46.graphics.f("#7A7A7A").s().p("AgDAAIAAgCIAIACIgBADg");
	this.shape_46.setTransform(178.6,62.6);

	this.shape_47 = new cjs.Shape();
	this.shape_47.graphics.f("#7A7A7A").s().p("AgEAAIACgCIAGACIgBADg");
	this.shape_47.setTransform(174.1,65.9);

	this.shape_48 = new cjs.Shape();
	this.shape_48.graphics.f("#7A7A7A").s().p("AhuBNQB8hdBfg/IACADQhcA9h/Bfg");
	this.shape_48.setTransform(185.5,58.2);

	this.shape_49 = new cjs.Shape();
	this.shape_49.graphics.f("#8A8A8A").s().p("AgFADIADgDQAGgGADAGQgBABgGACIgCABIAEgCQABgBABAAQAAAAAAgBQABAAAAAAQAAAAAAgBIgFACIgEADIAAAAQgBAAAAAAQAAAAAAAAQgBAAAAgBQAAAAABAAg");
	this.shape_49.setTransform(197.1,50.5);

	this.shape_50 = new cjs.Shape();
	this.shape_50.graphics.f("#8A8A8A").s().p("AgFADQAJgGACAAQAAABAAAAQAAAAAAABQAAAAAAAAQAAAAAAAAIgCgBQgDAGgEAAIgCgBg");
	this.shape_50.setTransform(197.8,50.8);

	this.shape_51 = new cjs.Shape();
	this.shape_51.graphics.f("#8A8A8A").s().p("AgEADIADAAQABAAAAgBQAAAAAAAAQABgBAAAAQAAAAgBgBIgCABIACgBIABgBQABgBAAAAQABgBABAAQAAAAABAAQAAAAABAAIgCADIgDADIgFABIAAgBgAABgBQgBADAEgCIAAAAIABAAIgBAAQAAgBAAAAQAAAAAAgBQAAAAAAAAQAAAAgBAAIgCABg");
	this.shape_51.setTransform(192.8,53.5);

	this.shape_52 = new cjs.Shape();
	this.shape_52.graphics.f("#8A8A8A").s().p("AgFADQABgDAFAAIgDABQgEAEAFgCIgEADQAAAAAAgBQgBAAAAAAQAAAAAAgBQAAAAABgBgAgBADIACgCIABgBIACgBIgBgBIAAAAQAHgFgGAGQAAAAAAAAQAAABAAAAQAAAAAAAAQgBAAAAABIgBgBQABABAAAAQAAAAgBABQAAAAgBAAQgBABAAAAg");
	this.shape_52.setTransform(188.3,56.5);

	this.shape_53 = new cjs.Shape();
	this.shape_53.graphics.f("#8A8A8A").s().p("AgBAAQADgEAEABQgDAGgCgBQgCgBgDADQgCgBAFgDgAAAABIAAAAQAAAAAAAAQABAAAAAAQABAAAAAAQAAAAAAAAIACgDg");
	this.shape_53.setTransform(184,59.7);

	this.shape_54 = new cjs.Shape();
	this.shape_54.graphics.f("#8A8A8A").s().p("AgHACIAPgFIgFADIgEAEg");
	this.shape_54.setTransform(179.6,63.1);

	this.shape_55 = new cjs.Shape();
	this.shape_55.graphics.f("#8A8A8A").s().p("AgCAAIAHgDQABAAAAAAQABABAAAAQgBAAAAABQgBABgBAAQAAAAABAAQAAgBAAAAQAAAAAAgBQAAAAgBgBIgEADQgBABgBAAQgBABAAAAQgBABAAAAQAAAAAAAAIAFgCIgGADQgDgDAGgBg");
	this.shape_55.setTransform(175.2,66.3);

	this.shape_56 = new cjs.Shape();
	this.shape_56.graphics.f("#7A7A7A").s().p("AgDABIAFgDIACACIgFADg");
	this.shape_56.setTransform(144.7,47.2);

	this.shape_57 = new cjs.Shape();
	this.shape_57.graphics.f("#7A7A7A").s().p("AgDABIAFgDIACACIgFADg");
	this.shape_57.setTransform(174.8,65.8);

	this.shape_58 = new cjs.Shape();
	this.shape_58.graphics.f("#7A7A7A").s().p("AiWhbIACgCQBzB7C4A9IAAADQi6g9hzh8g");
	this.shape_58.setTransform(159.4,56.7);

	this.shape_59 = new cjs.Shape();
	this.shape_59.graphics.f("#4E76BA").s().p("AACANQgQgEgSgJIAPgLQAGgDAKACQAQAFASAHIgPALQgFADgGAAIgFgBg");
	this.shape_59.setTransform(170,63.1);

	this.shape_60 = new cjs.Shape();
	this.shape_60.graphics.f("#4E76BA").s().p("AgUASIgVgMIAVgSQAPgNAHgBQAFAAARAJIASALQgKgEAAAHQAAAGAKgGIgSAPQgPAOgHABIgBAAQgFAAgQgJg");
	this.shape_60.setTransform(166.1,60.2);

	this.shape_61 = new cjs.Shape();
	this.shape_61.graphics.f("#4E76BA").s().p("AgqAvQgSgIgQgMIBMg3QAMgKAKgGIALgFIAKADQAPAIAOAKIAEACIAAAAIgIAFIhEAwQgHAIgPAKIgKAFIAAAAIgKgDg");
	this.shape_61.setTransform(164.7,55.2);

	this.shape_62 = new cjs.Shape();
	this.shape_62.graphics.f("#4E76BA").s().p("AhKA7IgXgSQAogfA4goQAHgFAPgNQAPgLAKgFQALgEADABIANAKIAZASIAAAAIAAAAIhjBHIgYAUQgQANgIADIgDAAQgJAAgNgJg");
	this.shape_62.setTransform(162,50.5);

	this.shape_63 = new cjs.Shape();
	this.shape_63.graphics.f("#4E76BA").s().p("AhhBbQgSgLgPgSQBVhAA0gmIAjgcQAWgRAOgFQAMgEACAAIAMALQAPAPAMAKIgBAAIgCACQg2AkhNA3IhAAwQgMAKgDACIgDAAQgFAAgHgEg");
	this.shape_63.setTransform(160.7,44.3);

	this.shape_64 = new cjs.Shape();
	this.shape_64.graphics.f("#C9C9C9").s().p("ADJB4QgNgGgOgJIg6geIhwg7QichRhNgtQALgHAMgFQAHAAAWARIA7AiQAuAaBFAkIDcB0IANAHIAAAAIgOAJIgBAAQgEAAgKgDg");
	this.shape_64.setTransform(54.3,135.7);

	this.shape_65 = new cjs.Shape();
	this.shape_65.graphics.f("#C9C9C9").s().p("AjQizIAQgMIAMAIQB2BMBnBgQAwAtAvA0IAsA0IATAYQAJAMAAADQABAEgIAMQifjSj6iig");
	this.shape_65.setTransform(115,177.1);

	this.shape_66 = new cjs.Shape();
	this.shape_66.graphics.f("#C9C9C9").s().p("ADCB4QgMgGgKgGIiqhaQiLhLhVg1QAJgHANgFQAFAAAKAHIANAKQAcASAdARQA3AgA5AeQBHAnCPBMIADACIAJAEIAAABIgNAJIgCAAQgEAAgKgDg");
	this.shape_66.setTransform(59.4,132.6);

	this.shape_67 = new cjs.Shape();
	this.shape_67.graphics.f("#C9C9C9").s().p("AjJixIAPgMIAGADQB3BMBmBhQAxAuArAyQAXAcATAZIATAYQAIAMAAADQAAAEgIALQiZjSjyidg");
	this.shape_67.setTransform(118.3,173.6);

	this.shape_68 = new cjs.Shape();
	this.shape_68.graphics.f("#C9C9C9").s().p("AC8B2QgLgFgKgHIilhZQh8hChfg/QAQgJAHABQAGAAAQAKIA3AkQA2AgA2AfQBLApCXBRIAAAAIAAAAIgNAKIgCAAQgFAAgJgDg");
	this.shape_68.setTransform(64.5,129.6);

	this.shape_69 = new cjs.Shape();
	this.shape_69.graphics.f("#C9C9C9").s().p("AjDiuIAOgMIABgCQB0BKBkBgQAzAvArA0QAWAaATAaQAMANAJARQAFALgBACQAAACgIALQiTjRjsiag");
	this.shape_69.setTransform(121.7,169.9);

	this.shape_70 = new cjs.Shape();
	this.shape_70.graphics.f("#C9C9C9").s().p("AC7B6QgFgBgJgGIgPgJIihhZQhxg9hfhCQAIgHAKgEQAFAAAHAEIANAJQAaASAXAPQAtAdA9AjQBJAqCYBRIgBAAIgLAJQgEABgEAAIgFAAg");
	this.shape_70.setTransform(69.7,126.2);

	this.shape_71 = new cjs.Shape();
	this.shape_71.graphics.f("#C9C9C9").s().p("Ai/irIAQgNIABgCQByBJBjBfQA0AzAoAyIAkAvQAMAOAJAQQAFALgBADIgJANQiNjPjpiXg");
	this.shape_71.setTransform(125.3,166.1);

	this.shape_72 = new cjs.Shape();
	this.shape_72.graphics.f("#C9C9C9").s().p("AC4B5QgGgBgJgFIgOgJIg0gcQgugZhBglQhlg4hhhGQAGgGALgFQAGgBAHAFIAMAJIAwAhQA0AjAzAeQAwAcCsBdIAAAAIAAAAIgLAJQgDACgEAAIgFgBg");
	this.shape_72.setTransform(74.6,122.8);

	this.shape_73 = new cjs.Shape();
	this.shape_73.graphics.f("#C9C9C9").s().p("Ai7ioIARgPIAAgBQBxBIBgBdQAwAwAnAwQAMAPAXAgQANAQAKAQQAEAMAAADIgKANQiJjOjkiSg");
	this.shape_73.setTransform(129.1,162.1);

	this.shape_74 = new cjs.Shape();
	this.shape_74.graphics.f("#C9C9C9").s().p("AC0B5QgFAAgKgGIgNgJIg0gbIhsg9Qhng5hchHQAHgFAKgGQAGAAAHAEIAMAJIAvAjQAqAeA6AiQAtAaA/AjIBnA3IAHAEIgBAAIgLAJQgEACgEAAIgEgBg");
	this.shape_74.setTransform(79.6,119.4);

	this.shape_75 = new cjs.Shape();
	this.shape_75.graphics.f("#C9C9C9").s().p("Ai3imIAQgPIAGAEQBwBFBcBcQArArAmAwQATAYATAcQAKALAIAQQAFAMgBADQAAACgLALQiDjNjhiPg");
	this.shape_75.setTransform(133.1,158.1);

	this.shape_76 = new cjs.Shape();
	this.shape_76.graphics.f("#C9C9C9").s().p("ACxB6QgGgBgJgFIgNgJIgygcQhFglghgUQhng5hdhLQAJgHAIgEQAFAAAHAEIALAKIAvAjQAsAgA5AiQA0AfCfBVIAAAAIAAABIgLAJQgEACgFAAIgDAAg");
	this.shape_76.setTransform(84.6,115.8);

	this.shape_77 = new cjs.Shape();
	this.shape_77.graphics.f("#C9C9C9").s().p("Ai1ikIARgPIAHAEQBtBFBaBZQAsAqAnAzIAgAtQANAPAIAQQAEALgBADIgLAOQiBjMjeiMg");
	this.shape_77.setTransform(137.2,154);

	this.shape_78 = new cjs.Shape();
	this.shape_78.graphics.f("#C9C9C9").s().p("ACuB5QgOgFgOgJIgygbQg1gcgvgcQhmg6hbhLQAGgGALgGQAFAAAHAFIALAJIAuAkQAvAjA1AgQA9AlCUBNIgBAAIgLAJQgFADgFAAIgCgBg");
	this.shape_78.setTransform(89.5,112.3);

	this.shape_79 = new cjs.Shape();
	this.shape_79.graphics.f("#C9C9C9").s().p("ACrB5QgQgHgOgJIgxgZQhAgjglgWQhjg5hWhLIAHgGIAJgFQAFgBAHAFIALAKIAtAkQAoAfA1AhQBFAqCDBDQgMgFAIAGQAKAKAGgFIgMgGIAMAGIgLAJQgFADgFAAIgDAAg");
	this.shape_79.setTransform(94.3,108.6);

	this.shape_80 = new cjs.Shape();
	this.shape_80.graphics.f("#C9C9C9").s().p("ACXBwIg3gcQg3gcgtgcQhmg6hWhNIAHgHIAIgFQAGgBAGAFIALAKIAtAlQAtAjAvAdQA/AnCLBGIAFADIAEACIgBAAQgNAKgGABQgFAAgSgJg");
	this.shape_80.setTransform(99.2,104.9);

	this.shape_81 = new cjs.Shape();
	this.shape_81.graphics.f("#C9C9C9").s().p("ACXBwIg3gbQg6gegqgZQhig4hZhRIAHgGQAHgGACAAQAFAAAGAFIALAKQAUARAZAUQAtAkAvAdQBdA5BkAvIAPAHIgCABQgLAJgGABIgBAAQgFAAgQgIg");
	this.shape_81.setTransform(103.9,101.2);

	this.shape_82 = new cjs.Shape();
	this.shape_82.graphics.f("#C9C9C9").s().p("ACVBwIg3gbQg8gegngYQhlg5hUhRIAGgGIAJgGQAFAAAGAFIALAKQAVAUAXASQAqAiAyAfQBoA/BoAuIAAABQgOAKgFABIgBAAQgGAAgQgIg");
	this.shape_82.setTransform(108.8,97.4);

	this.shape_83 = new cjs.Shape();
	this.shape_83.graphics.f("#C9C9C9").s().p("ACVBwIg3gaQg6gdgpgYQhkg6hVhRIAIgHIAIgFQAEgBAHAGIAKAKIAtAnQAoAhAyAfQBbA4BmAtIAQAHQgNALgHAAIAAAAQgGAAgQgHg");
	this.shape_83.setTransform(113.5,93.7);

	this.shape_84 = new cjs.Shape();
	this.shape_84.graphics.f("#C9C9C9").s().p("ACVBwIg3gZQg1gZgugcQhmg6hThSIAIgGQAFgGADAAQAFgBAFAGIALALQAXAVAVASQArAkAwAcQBeA6BoAtQgPgGAJAGQALAIAFgEQgNALgGAAIgBAAQgGAAgPgHg");
	this.shape_84.setTransform(118.2,89.9);

	this.shape_85 = new cjs.Shape();
	this.shape_85.graphics.f("#C9C9C9").s().p("ACUBwIg2gZQg2gYgtgbQhmg6hShUIALgJQAFgDAGACQAFABAIAKIALAMQATASATAQQAsAlAwAcQBWA1BlAqIAQAGIAAABIgBABQgMAJgGAAIgBAAQgGAAgQgGg");
	this.shape_85.setTransform(122.8,86.1);

	this.shape_86 = new cjs.Shape();
	this.shape_86.graphics.f("#C9C9C9").s().p("AiyiPIARgPIACgCQB2A3BfBYQAnAlAiAtQAUAaAPAZIAKANQAHALAAADQgBAEgSAOQh0jFjehrg");
	this.shape_86.setTransform(173.6,119.7);

	this.shape_87 = new cjs.Shape();
	this.shape_87.graphics.f("#C9C9C9").s().p("ACUBwIg3gYQg6gagpgZQhmg6hShVIALgJQAFgDAHACQAEABAIAKIALAMQAWAVARAOQArAkAxAdQBfA6BtApIgBABQgNAKgGABIgCAAQgGAAgPgGg");
	this.shape_87.setTransform(127.5,82.4);

	this.shape_88 = new cjs.Shape();
	this.shape_88.graphics.f("#C9C9C9").s().p("AiziNIATgQIAAAAIAAAAQB6A2BcBVQAnAjAjAuQAQAWATAcIAKAOQAHALgBACQAAADgIAHIgLAIQhzjDjghog");
	this.shape_88.setTransform(178.4,115.3);

	this.shape_89 = new cjs.Shape();
	this.shape_89.graphics.f("#C9C9C9").s().p("ACVBwIg3gXQgvgUg1geQhog7hQhWIALgJQAFgDAHACQAGADAQAVQASARAVASQArAkAyAeQBhA6BrAnIAAAAQgcgLAMAIQALAIAFgFIAAABQgNAKgHABIgBAAQgHAAgOgGg");
	this.shape_89.setTransform(132.1,78.6);

	this.shape_90 = new cjs.Shape();
	this.shape_90.graphics.f("#C9C9C9").s().p("AiziLIASgQIAKAFQByAxBbBSQAoAjAiAtQAOASAVAgQASAWgBAFQgBAEgSAOQhzjDjhhkg");
	this.shape_90.setTransform(183.3,111);

	this.shape_91 = new cjs.Shape();
	this.shape_91.graphics.f("#C9C9C9").s().p("ACoB2QgSgEgMgHQgUgHgdgNQg3gXgtgbQhkg5hQhWIAMgKQAEgCAGACQAHADAOATIAoAlQApAjAwAdQBbA4BnAlQgGgBAGAEQAMAHAEgEIgQgGIARAGIgLAJQgFADgGAAIgCAAg");
	this.shape_91.setTransform(136.7,74.9);

	this.shape_92 = new cjs.Shape();
	this.shape_92.graphics.f("#C9C9C9").s().p("Ai1iJIATgPQB4AvBgBUQAqAlAhArQASAXARAbIAKANQAIALgBADQgBAEgSANQh0jCjjhgg");
	this.shape_92.setTransform(188.1,106.7);

	this.shape_93 = new cjs.Shape();
	this.shape_93.graphics.f("#C9C9C9").s().p("Ai2iGIATgQIAOAGQB9AzBPBHQAqAlAgAqQASAWASAcIAKANQAIALgBADQgBAEgSANQh1jDjkhag");
	this.shape_93.setTransform(192.9,102.5);

	this.shape_94 = new cjs.Shape();
	this.shape_94.graphics.f("#C9C9C9").s().p("ACoB2QgPgDgOgHIg3gVQgygVgygdQhkg5hMhWIALgKQAFgDAGADQAIADANAUIAoAmQApAkAvAcQBgA6BtAkQgRgFAJAFQALAHAGgEIgLAJQgFADgHAAIgCAAg");
	this.shape_94.setTransform(145.8,67.5);

	this.shape_95 = new cjs.Shape();
	this.shape_95.graphics.f("#C9C9C9").s().p("Ai3iFIATgPIAAABIAAgBQCGAyBVBKQAqAkAhArQASAWASAcIAKANQAIALgBADQAAADgIAGIgLAIQh1jCjmhYg");
	this.shape_95.setTransform(197.7,98.4);

	this.shape_96 = new cjs.Shape();
	this.shape_96.graphics.f("#C9C9C9").s().p("ACpB2QgPgCgPgIIg3gUQg1gVg0gfQhjg6hIhUIALgKQAEgCAGACQAIADANAVIApAmQAqAmAtAbQBgA6BmAgIARAFIABABIgDABIgJAIQgFACgGAAIgCAAg");
	this.shape_96.setTransform(150.4,63.8);

	this.shape_97 = new cjs.Shape();
	this.shape_97.graphics.f("#C9C9C9").s().p("Ai4iCIASgQIAOAGQCAAuBPBFQAsAlAgApQAQAUAUAeIAKAOQAIALgBACQAAAFgTAMQh1jCjohTg");
	this.shape_97.setTransform(202.6,94.3);

	this.shape_98 = new cjs.Shape();
	this.shape_98.graphics.f("#C9C9C9").s().p("ACMBtIg3gUQg5gWgxgeQhjg6hJhWIAMgKQAEgCAGADQAFACAGAIIAKANQAVAWATASQApAlAvAcQBgA7BwAiQgTgGAKAGQAMAGAFgEIgMAJQgFADgHAAQgPgDgPgHg");
	this.shape_98.setTransform(154.9,60.2);

	this.shape_99 = new cjs.Shape();
	this.shape_99.graphics.f("#C9C9C9").s().p("Ai4iBIASgPIAGADQCGAtBRBGQArAjAiAqQAQAUAUAeIAKAOQAIALgBADQAAADgIAGIgLAHQh0jCjqhQg");
	this.shape_99.setTransform(207.3,90.2);

	this.shape_100 = new cjs.Shape();
	this.shape_100.graphics.f("#C9C9C9").s().p("Ai5h/IAQgOIABgBIABAAIANAEQCCAsBPBDQAoAgAlAtQAVAaAQAYIAKANQAHALAAADQgBAFgSALQh1jCjrhMg");
	this.shape_100.setTransform(212.1,86.4);

	this.shape_101 = new cjs.Shape();
	this.shape_101.graphics.f("#C9C9C9").s().p("Ai6h+IASgOIAPAFQCBAqBPBBQAqAgAjAsQAQATAVAfIAKAOQAIALAAADQgBAEgSALQh2jDjshIg");
	this.shape_101.setTransform(216.7,82.5);

	this.shape_102 = new cjs.Shape();
	this.shape_102.graphics.f("#C9C9C9").s().p("Ai4h9IARgOIABABIABAAIAGACIAEABQCBAnBPA/QAsAiAjAqQAPASASAaQALANAGANQAEANgBACIgOALQh1jCjuhGg");
	this.shape_102.setTransform(221.1,78.9);

	this.shape_103 = new cjs.Shape();
	this.shape_103.graphics.f("#C9C9C9").s().p("Ai4h8IARgNIAGACIAFABQCCAlBQA/QAtAiAhAqQAOARATAbQAKAKAHAQQAEAMgBACIgNAMQh0jCjwhEg");
	this.shape_103.setTransform(225.6,75.3);

	this.shape_104 = new cjs.Shape();
	this.shape_104.graphics.f("#C9C9C9").s().p("Ai4h6IAQgNIABgBQCLAlBSBAQAtAjAhApQAQASARAaQAKALAHAQQAEAMgBACIgNALQh1jFjvg+g");
	this.shape_104.setTransform(230,71.8);

	this.shape_105 = new cjs.Shape();
	this.shape_105.graphics.f("#C9C9C9").s().p("Ai4h6IARgNIACABIALADQCBAiBOA9QApAfAlAtQAQATARAZQAKAMAHAPQAEAMgBACQAAABgMAJQh0jEjwg9g");
	this.shape_105.setTransform(234.3,68.6);

	this.shape_106 = new cjs.Shape();
	this.shape_106.graphics.f("#C9C9C9").s().p("Ai2h5IAQgNIAFACIACAAIAGACQB/AhBPA8QArAjAjApQARAWAPAWQAKAMAHAPIADAOQAAACgMAIQhyjFjvg6g");
	this.shape_106.setTransform(238.5,65.4);

	this.shape_107 = new cjs.Shape();
	this.shape_107.graphics.f("#C9C9C9").s().p("AClB9IgcgHQgfgJgXgJQg5gTg1gjQhgg/hChiIAMgIQAEgCAGAEQAHAEAMAWQARAWATAVQAmAqAuAhQBUA9CAAfQgVgEALAEQALAFAFgDQgNAIgLAAIgBAAg");
	this.shape_107.setTransform(190.7,33.9);

	this.shape_108 = new cjs.Shape();
	this.shape_108.graphics.f("#C9C9C9").s().p("Ai1h5IAPgLIABgBQCJAhBQA/QAtAjAhAoQASAYAOAVQAKAMAHAPIADAOQgBABgLAJQhxjHjug4g");
	this.shape_108.setTransform(242.6,62.4);

	this.shape_109 = new cjs.Shape();
	this.shape_109.graphics.f("#C9C9C9").s().p("ACHB6Ig2gUQg8gVgwghQhhhBg/hjIAMgIQAEgCAGAEQAEACAGAKIAJAOQATAbAPARQAmAsAvAhQBVA/CCAfIgCABQgLAGgPAAQgLAAgOgEg");
	this.shape_109.setTransform(195.3,31.1);

	this.shape_110 = new cjs.Shape();
	this.shape_110.graphics.f("#C9C9C9").s().p("Aizh5IAPgKIABgBQCHAfBQA/QArAiAhApQAOATASAbQAMAPAEANIAEAMQgBACgKAIQhwjHjsg3g");
	this.shape_110.setTransform(246.5,59.7);

	this.shape_111 = new cjs.Shape();
	this.shape_111.graphics.f("#C9C9C9").s().p("ACFB8QgGgCgvgSQg5gVgygiQhfhDg+hkIAMgIQADgCAHAEQAHAFALAWQARAZASAUQAlAtAtAiQBSA+B8AfQgUgFAKAFQALAEAFgDQgLAHgOAAQgMAAgPgEg");
	this.shape_111.setTransform(199.6,28.4);

	this.shape_112 = new cjs.Shape();
	this.shape_112.graphics.f("#C9C9C9").s().p("Aiwh6IAPgJIAAgBIAGACQCCAfBMA8QArAkAgApQASAXANAWQAKAMAHAPIADANQAAACgKAIQhtjJjqg2g");
	this.shape_112.setTransform(250.3,57);

	this.shape_113 = new cjs.Shape();
	this.shape_113.graphics.f("#FFFFFF").s().p("AhRQgQjTkjlhjQQh+hLjZhqQkHiAhTgtQDRhhDBh/QCghoC8iXQBrhWDfi/QDPixB6heQC7iOCohdQBOC5ByBWQA+AwBeAdQAjAJCIAdQBSARA8AdQBGAiAxA2QAvA2AeA8QARAhANAiIAOAjQAFANgBADQgBADgKAJQgWASgnAbIg/ArQhOA6g5AtQh3BdiDBuQkSDnjYDZQiACAhcBwQhABMglA2QgzBKgfBDIAAABg");
	this.shape_113.setTransform(145.9,106);

	this.shape_114 = new cjs.Shape();
	this.shape_114.graphics.f("#D5D6D9").s().p("AqSIiQiIhfi4hoQhNgsj9iJQEDh4D4i0QCvh/DyjXQE3kUBKg9QDbizDEhrQBZDQCGBRQBOAvClAZQCgAYBKAwQB5BQBJDSQh5BQjQC5QjRC5jWDbQoKIWh5ERQjjk6lajwg");
	this.shape_114.setTransform(147.2,110);

	var maskedShapeInstanceList = [this.shape,this.shape_1,this.shape_2,this.shape_3,this.shape_4,this.shape_5,this.shape_6,this.shape_7,this.shape_8,this.shape_9,this.shape_10,this.shape_11,this.shape_12,this.shape_13,this.shape_14,this.shape_15,this.shape_16,this.shape_17,this.shape_18,this.shape_19,this.shape_20,this.shape_21,this.shape_22,this.shape_23,this.shape_24,this.shape_25,this.shape_26,this.shape_27,this.shape_28,this.shape_29,this.shape_30,this.shape_31,this.shape_32,this.shape_33,this.shape_34,this.shape_35,this.shape_36,this.shape_37,this.shape_38,this.shape_39,this.shape_40,this.shape_41,this.shape_42,this.shape_43,this.shape_44,this.shape_45,this.shape_46,this.shape_47,this.shape_48,this.shape_49,this.shape_50,this.shape_51,this.shape_52,this.shape_53,this.shape_54,this.shape_55,this.shape_56,this.shape_57,this.shape_58,this.shape_59,this.shape_60,this.shape_61,this.shape_62,this.shape_63,this.shape_64,this.shape_65,this.shape_66,this.shape_67,this.shape_68,this.shape_69,this.shape_70,this.shape_71,this.shape_72,this.shape_73,this.shape_74,this.shape_75,this.shape_76,this.shape_77,this.shape_78,this.shape_79,this.shape_80,this.shape_81,this.shape_82,this.shape_83,this.shape_84,this.shape_85,this.shape_86,this.shape_87,this.shape_88,this.shape_89,this.shape_90,this.shape_91,this.shape_92,this.shape_93,this.shape_94,this.shape_95,this.shape_96,this.shape_97,this.shape_98,this.shape_99,this.shape_100,this.shape_101,this.shape_102,this.shape_103,this.shape_104,this.shape_105,this.shape_106,this.shape_107,this.shape_108,this.shape_109,this.shape_110,this.shape_111,this.shape_112,this.shape_113,this.shape_114];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_114},{t:this.shape_113},{t:this.shape_112},{t:this.shape_111},{t:this.shape_110},{t:this.shape_109},{t:this.shape_108},{t:this.shape_107},{t:this.shape_106},{t:this.shape_105},{t:this.shape_104},{t:this.shape_103},{t:this.shape_102},{t:this.shape_101},{t:this.shape_100},{t:this.shape_99},{t:this.shape_98},{t:this.shape_97},{t:this.shape_96},{t:this.shape_95},{t:this.shape_94},{t:this.shape_93},{t:this.shape_92},{t:this.shape_91},{t:this.shape_90},{t:this.shape_89},{t:this.shape_88},{t:this.shape_87},{t:this.shape_86},{t:this.shape_85},{t:this.shape_84},{t:this.shape_83},{t:this.shape_82},{t:this.shape_81},{t:this.shape_80},{t:this.shape_79},{t:this.shape_78},{t:this.shape_77},{t:this.shape_76},{t:this.shape_75},{t:this.shape_74},{t:this.shape_73},{t:this.shape_72},{t:this.shape_71},{t:this.shape_70},{t:this.shape_69},{t:this.shape_68},{t:this.shape_67},{t:this.shape_66},{t:this.shape_65},{t:this.shape_64},{t:this.shape_63},{t:this.shape_62},{t:this.shape_61},{t:this.shape_60},{t:this.shape_59},{t:this.shape_58},{t:this.shape_57},{t:this.shape_56},{t:this.shape_55},{t:this.shape_54},{t:this.shape_53},{t:this.shape_52},{t:this.shape_51},{t:this.shape_50},{t:this.shape_49},{t:this.shape_48},{t:this.shape_47},{t:this.shape_46},{t:this.shape_45},{t:this.shape_44},{t:this.shape_43},{t:this.shape_42},{t:this.shape_41},{t:this.shape_40},{t:this.shape_39},{t:this.shape_38},{t:this.shape_37},{t:this.shape_36},{t:this.shape_35},{t:this.shape_34},{t:this.shape_33},{t:this.shape_32},{t:this.shape_31},{t:this.shape_30},{t:this.shape_29},{t:this.shape_28},{t:this.shape_27},{t:this.shape_26},{t:this.shape_25},{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.ClipGroup_19, new cjs.Rectangle(12.4,63.9,267,156.2), null);


(lib.ClipGroup_18 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AENNSQAHgOADgSIBtrQIgBADIACgSIgmAAQgBAlgZAiQgaAjgwAaQhhA3iHgCQiFgBheg4QgrgbgYgiQgWgggBgkIglAAIABATIAAgBIBwLQQACAOAJAQIlRAAIAA6jIRJAAIAAajg");
	mask.setTransform(54.9,85);

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#5E5E5E").s().p("AgiALIAHgVIAigLIAcAMIgHAUIgiALg");
	this.shape.setTransform(47.6,171.6);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#4476C1").s().p("ABPKLIi50gIAcALIC5Ugg");
	this.shape_1.setTransform(40.4,104.4);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#528FEB").s().p("AhtqKIAjgLIC4UgIgjALg");
	this.shape_2.setTransform(37.2,104.3);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#2D4E82").s().p("AhfqFIAGgVIC5UfIgHAXg");
	this.shape_3.setTransform(35.2,106);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#5E5E5E").s().p("AgVAQQgKgEgBgIQgBgHAJgGQAWgPAXAIQAKAFABAIQABAHgIAGQgOAKgOAAQgIAAgKgEg");
	this.shape_4.setTransform(29.4,40.6);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#F2D49A").s().p("AgcACIAEg2QACgEANABQALABACAEQAfBRAAAEQgFABgFgEQgZgJgVAOQgJAHgEAMIAGg2g");
	this.shape_5.setTransform(29.1,35.9);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#737373").s().p("AgOAfIADg+IAFgBIAUBBg");
	this.shape_6.setTransform(28,27.5);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#D9D9D9").s().p("AAOB+QgUgLgTgQIgbi/QAZgbAfgUIAIgFIApEgQgVgHgSgLg");
	this.shape_7.setTransform(33.8,93.9);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#D9D9D9").s().p("AAADzIhFnvIAJAEQAhASAjAMIA+G3IgHAWIgiALg");
	this.shape_8.setTransform(38.7,133);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#5E5E5E").s().p("AgcAIIgEgWIAdgIIAgAPIAEAWIgdAHg");
	this.shape_9.setTransform(63.3,177.7);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#BF8A5D").s().p("ACap8IAegIIlRUBIgeAIg");
	this.shape_10.setTransform(78.3,111.7);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#E7A66F").s().p("Ai4J6IFQ0CIAhAPIlQUCg");
	this.shape_11.setTransform(81.4,112.1);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#825E3E").s().p("AipJ2IFQ0BIADAWIlQUCg");
	this.shape_12.setTransform(83.3,113.9);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#5E5E5E").s().p("AgZAHQgIgHACgHQACgIALgDQAYgFAUARQAIAGgCAIQgCAIgLADIgLABQgSAAgPgNg");
	this.shape_13.setTransform(96.7,49.6);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#F2D49A").s().p("AAVAkQgUgPgYAGQgJACgCgBIAnhQQADgEAMAAQAMABADAEQgCASAAAkIgBA2QgCgLgJgKg");
	this.shape_14.setTransform(97.2,45.3);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#737373").s().p("AgQAfIAdg+IAEABIgFA+g");
	this.shape_15.setTransform(99.4,36.9);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#D9D9D9").s().p("AhcDoIgEgXIBwmtQAkgHAlgPIAIgDIh+HjIgeAIg");
	this.shape_16.setTransform(72,155.3);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#5E5E5E").s().p("AgbAMIgHgWIAdgLIAhALIAHAUIgdAMg");
	this.shape_17.setTransform(70.7,156.4);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#B73736").s().p("ABOqKIAdgLIi4UfIgdAMg");
	this.shape_18.setTransform(77.9,89.2);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#DF4240").s().p("AhtKLIC40gIAjALIi4Ugg");
	this.shape_19.setTransform(81,89.1);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#7B2423").s().p("AhfKGIC40gIAHAVIi4Ugg");
	this.shape_20.setTransform(83.1,90.7);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#5E5E5E").s().p("AgYAKQgJgGABgHQACgIAKgFQAXgIAWAOQAJAIgBAHQgCAHgKAEQgJAEgIAAQgOAAgOgKg");
	this.shape_21.setTransform(88.9,25.4);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#F2D49A").s().p("AAVAlQgVgOgXAKQgHADgDgBQAAgCAOgoIAPgrQADgEALgBQAMgBACAFIAGA1IAEA2QgDgMgKgHg");
	this.shape_22.setTransform(89.2,20.6);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#737373").s().p("AAIggIAEABIADA+IgdACg");
	this.shape_23.setTransform(90.2,12.3);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("#D9D9D9").s().p("AgLiQIAIAFQAgATAYAcIgbC/QgUAQgTALQgSALgVAHg");
	this.shape_24.setTransform(81.4,93.9);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#D9D9D9").s().p("Ag+DzIgHgWIA+m3QAjgMAigSIAIgFIhGHvIgbAMg");
	this.shape_25.setTransform(76.5,132.9);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f("#5E5E5E").s().p("AgNASIgWgUIAOgSIAjADIAWAUIgOASg");
	this.shape_26.setTransform(39.8,169.9);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f("#B97033").s().p("AioJ5IE70GIAWAVIk7UGg");
	this.shape_27.setTransform(58.1,104.7);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f("#E1873C").s().p("AivKCIE70GIAkADIk7UGg");
	this.shape_28.setTransform(55.2,103.5);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f("#7C4B21").s().p("ACYp6IANgSIk7UHIgOASg");
	this.shape_29.setTransform(52.7,104.3);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f("#5E5E5E").s().p("AgZAHQgIgHACgHQACgIALgDQAZgFATARQAIAGgCAIQgCAHgLAEIgLABQgTAAgOgNg");
	this.shape_30.setTransform(71.6,41.4);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f("#F2D49A").s().p("AAZAuQgSgSgZAEQgLAEgIAJIAZgvIAXgwQAFgDAKAFQALAFABAFIgEBaQgDgBgGgFg");
	this.shape_31.setTransform(71.6,36.3);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f("#737373").s().p("AgOAWIAZg4IAEABIgDBEg");
	this.shape_32.setTransform(74.3,28.9);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f("#D9D9D9").s().p("AgTAoQgPgTgLgUIAThIQAjAGAlACIgkCHQgPgQgOgQg");
	this.shape_33.setTransform(50.2,120.4);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f("#D9D9D9").s().p("AhUC1IBglwQAkAAAlAFIhgFyQglgCgkgFg");
	this.shape_34.setTransform(56.7,92.9);

	var maskedShapeInstanceList = [this.shape,this.shape_1,this.shape_2,this.shape_3,this.shape_4,this.shape_5,this.shape_6,this.shape_7,this.shape_8,this.shape_9,this.shape_10,this.shape_11,this.shape_12,this.shape_13,this.shape_14,this.shape_15,this.shape_16,this.shape_17,this.shape_18,this.shape_19,this.shape_20,this.shape_21,this.shape_22,this.shape_23,this.shape_24,this.shape_25,this.shape_26,this.shape_27,this.shape_28,this.shape_29,this.shape_30,this.shape_31,this.shape_32,this.shape_33,this.shape_34];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_34},{t:this.shape_33},{t:this.shape_32},{t:this.shape_31},{t:this.shape_30},{t:this.shape_29},{t:this.shape_28},{t:this.shape_27},{t:this.shape_26},{t:this.shape_25},{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.ClipGroup_18, new cjs.Rectangle(25.6,9,75.5,161), null);


(lib.ClipGroup_17 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("Ag8AvQgmguARgoQARgqBNACQAmABAkAJQgrBugJAgQgSAHgQAAQgiAAgbghg");
	mask.setTransform(8.6,8);

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#ECC7AB").s().p("AAkAWQgMABgEgBQgOgDgNgIQgQgHgHgCIgSgEQgHgDAEgHQAGgMAkACQAkACAbASIgEAZQgEgCgKABg");
	this.shape.setTransform(11,13.3);

	var maskedShapeInstanceList = [this.shape];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.ClipGroup_17, new cjs.Rectangle(5.7,11,10.7,4.7), null);


(lib.ClipGroup_16 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("Aj1gmQAugfA3gjQBthEArgQQAUgHAhAOQALAEAxAcQBiA2ARAsQAJAaABAUQABAXgNAHQgqAniegDQgcAMg+A8QgfAfgaAbg");
	mask.setTransform(24.6,23.8);

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#BFDE05").s().p("AABAxQgTgMgLgTQgMgSgBgXQAAgUAMgIQAMgHASAJQASANALATQAMASABAXQAAAUgMAIQgFADgGAAQgJAAgJgGg");
	this.shape.setTransform(11.5,29.7);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#DBFF00").s().p("AiLB3QgMgUgTgMQgOgKgQAIIAigWIAUgNIAfgZIAQgQQALgJAJgOIALgYQAPgkAWgmIARgYIANgLIAFgFQAQgJAUACQAVABAXANQAwAbAiA6QAiA6ABA2QgLAHhAAMIhSAPQgYAFglAPQg1AWg5AhQgBgXgLgTg");
	this.shape_1.setTransform(28.5,16);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#B6D400").s().p("AidAoQA4ghA1gUQAmgPAXgFIBSgQQBAgMAMgHQABA5gjATQgZAMgcAAQgRAAgagBIgngEIgagCQgQABgOAEIg7AVIgVAKIgkATQAPgKgCgSg");
	this.shape_2.setTransform(31.5,28.1);

	var maskedShapeInstanceList = [this.shape,this.shape_1,this.shape_2];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.ClipGroup_16, new cjs.Rectangle(7.2,4.7,41.4,30.6), null);


(lib.ClipGroup_15 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AAKBWQgDgJADgJQACgIAIgGQAJgFAIAGIAAggIgbAAIAAgfIgrAAIAAAJIgmAWIgNAAQgCgKAAgMQAAgoAZgdQAagdAjAAQAkAAAaAdQAaAdgBAoQABAZgMAWQgLAXgUAOQgMAIgPAFQgGgGgCgGg");
	mask.setTransform(8.7,9.8);

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AAdAHIgHgHQgGgGgJgHQgPgMgSgBQgGAAgHACIgEABIAEgBQAGgDAHAAQAJAAAJADQAIAEAJAGQAPAMALAPIAJAPg");
	this.shape.setTransform(8.2,5.2);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#BDBDBD").s().p("AABBEQgagQgPgbQgQgagCgfQgBgcASgLQAVgKAUANIAAAAQAZARAQAbQAQAaACAfQAAAcgRALQgKAEgIAAQgMAAgLgIgAgchHIgHACQgQAJAAAcQACAdAPAYQAOAaAYAPQATANAUgJIAGgGIAFgJIADgIIABgMIgBgKIgEgRQgJgcgWgYQgLgLgLgGIgKgEQgGgCgEAAIgEgBIgEABg");
	this.shape_1.setTransform(7.8,10.5);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#E8E8E8").s().p("AAaBRIgJgBIgLgEQgGgDgFgDIgKgIIgHgHQAJAJALAHQATANAVgKQASgKgBgdQgCgfgQgaQgQgbgYgQQgUgOgWAKQgRAKAAAdQACAcANAXIgEgFIgJgXIgDgYQAAgMACgIQACgFAFgJQAEgFAGgFQAPgHAOADQASAGANAMQAJAHAFAGQAFAGADAEIAHALQAJAPAFAOQAEAOABARIAAAKIgCALIgDAHQgGALgJAEQgIAFgIAAIgCAAgAggAtIAKAKIgKgKgAghAsIgBgCIACADg");
	this.shape_2.setTransform(8.2,10.2);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#9E9E9E").s().p("AAYBRQgNgBgLgHQgKgGgKgJQgJgIgIgLQgQgWgHgZIgCgMIgBgMQAAgLADgKQADgKAGgGQAGgHAJgCQARgFARAJQAHAEAHAFQAKAIAIAJQAHAIAFAIIAMAXQADAGABAGIAEAMIABAHIABALIAAAAIgBAOQgBAHgDAGIgDAGIgEAEIgHAGQgEADgGABIgIABIgDAAgAAEBDQAJAGALABQALABAKgFQARgKAAgdQgCgfgQgaQgPgbgbgRQgSgOgWALQgOAJgCAVQABgJAHgIIgCACQgDAFgCAJIAAAGQgBAFABAGIABALIADAMQAEALAGAKIAGALIAPATIAIAHQAHAHAGADIALAFIAHACIAHAAQgOACgMgIg");
	this.shape_3.setTransform(8.2,10.2);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#E3E3E3").s().p("AAZAFQgGgHgJgGQgOgMgTgBQgHgBgGACIgEACIAEgCQAGgDAGAAQALAAAHAEQAKAEAHAGQAQAKALARIADAGg");
	this.shape_4.setTransform(9.2,3.7);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#A6A6A6").s().p("AABBEQgagQgPgbQgQgagCgfQgBgdASgKQAVgKAUANQAZARAQAbQAQAaACAfQABAdgSAKQgJAEgJAAQgMAAgLgIgAgjhFQgQAKAAAbQACAdAOAYQAPAaAYAPQASANAUgJQAEgCADgEIAFgJIACgIQACgFAAgHIgDgVIgCgGQgJgcgWgXQgKgLgMgHIgKgFIgKgCIgIAAg");
	this.shape_5.setTransform(9.1,9.4);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#949494").s().p("AAABJQgLgFgJgKQgLgKgGgKQgQgVgHgZQgCgIAAgEIgBgMQAAgLADgLQADgJAGgHQAGgGAJgDQASgEAQAJIAOAJQAKAIAIAJIAMAQIAMAXIAFALIAEAUIABALIAAAAIgBAOIgEAOIgDAFIgEAFIgHAGIgKADIgLABQgPgBgJgHgAAtBGQARgKAAgeQgCgegQgbQgPgagbgRQgSgNgWAJQgOAJgCAWQABgIAFgHQgDAGgCAIIAAAGIAAALIAEAWQAEAMAGAKIAGAKIAHAKQAAACAIAHIAIAIIANAKIALAFIAHACIAJAAIAGgCQgQAGgOgHQATAMAUgKg");
	this.shape_6.setTransform(9.4,9.2);

	var maskedShapeInstanceList = [this.shape,this.shape_1,this.shape_2,this.shape_3,this.shape_4,this.shape_5,this.shape_6];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.ClipGroup_15, new cjs.Rectangle(1.8,1.1,14.1,17.2), null);


(lib.ClipGroup_14 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AAKBWQgDgJADgJQACgIAIgGQAJgFAIAHIAAghIgaAAIAAgfIgsAAIAAAJIgmAWIgNAAQgCgNAAgJQAAgoAZgdQAagdAjAAQAkAAAaAdQAZAdAAAoQABAagLAVQgMAXgUAOQgMAJgOAEQgGgFgDgHg");
	mask.setTransform(8.7,9.8);

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AAWACQgIgHgIgFQgNgMgUgCQgGAAgHACQAGgDAHAAQAIAAAKADQAJAEAIAGQAPAMALAPIAGALg");
	this.shape.setTransform(8.3,4.9);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#BDBDBD").s().p("AABBFQgagRgPgbQgQgagCgfQgBgcASgLQAVgKAUAOIAAAAQAZARAQAaQAQAaACAfQABAdgSAKQgJAEgJAAQgMAAgLgHgAgchHIgHACQgQAKAAAbQACAdAPAZQAOAZAYAQQAIAFALABQALABAJgEIAGgGIAFgIIACgJQACgFAAgGIgBgLIgEgRQgJgcgWgXQgLgMgLgFQgGgEgEgBQgGgCgEAAIgEgBIgEABg");
	this.shape_1.setTransform(7.8,10.4);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#9E9E9E").s().p("AAABJQgNgIgHgHQgJgJgIgLQgQgUgHgaIgCgMIgBgMQAAgLADgLQADgJAGgHQAHgHAIgCQAQgDAOAGQgPgGgQAIQgPAIgCAXQABgIAFgHQgEAIAAAFIgBAGIAAALIAEAWQADAJAHANIAGAKIAHAKIARARIAMAKIALAFIAIACIAIAAIAGgCQgSAHgQgLIADACQATAOAWgLQARgKAAgeQgCgYgKgUIADAFIAFALIADANIABAHIABALIAAABIgBANQAAAHgEAHIgHAKIgHAGQgFADgFABIgLABQgPgCgJgGgAAtgcIAGANIgGgNgAADhHIgDgBIAMAHQAKAHAIAJIAMAQIADAFQgQgagagRg");
	this.shape_2.setTransform(8.1,10.3);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#E3E3E3").s().p("AAeAKIgGgIQgIgGgHgGQgOgMgUgCQgHAAgFACIgFABIAFgCQAGgCAGAAQAKAAAIADQALAFAGAFQAPALALARIAHAKg");
	this.shape_3.setTransform(9.3,3.9);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#A6A6A6").s().p("AAVBMQgLgBgJgGQgZgRgQgbQgQgagCgfQAAgcARgLQAKgFALABQALABAJAHQAZARAQAaQAQAaACAfQAAAdgRAKQgIAEgJAAIgEAAgAgchHIgHACQgQAKAAAbQACAeAPAYQAPAZAXAQQAJAFAKABQAKABAKgEIAGgGIAFgIIADgJIABgLIgBgLIgEgRQgKgegVgVQgJgLgNgGQgEgEgFgBIgKgCIgEgBIgFABg");
	this.shape_4.setTransform(9.1,9.4);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#949494").s().p("AAABJQgNgIgHgHQgJgJgIgLQgQgUgHgaIgCgMIgBgMQAAgLADgLQADgJAGgHQAHgHAIgCQASgEAQAJIAOAJQAKAHAIAJIAIANQgOgVgVgOQgIgGgLgBQgLgBgKAFQgQAJgBAYQABgNAJgJIgEAEQgDAHgBAHIgBAGIAAALIABALIADAMIAKAVIANAVIAQARIANAKIALAEIAIACIAHAAQgNACgMgGQATANAWgKQASgLAAgcQgCgegQgbIgDgEIAHAJIAKAYQACAGABAGIABAHIABALIAAABIgBANQAAAHgEAHIgHAKIgHAGQgGADgEABIgLABQgPgCgJgGgAAdBGIAEgBIgDABgAAqgfIgEgFIAEAFg");
	this.shape_5.setTransform(9.4,9.3);

	var maskedShapeInstanceList = [this.shape,this.shape_1,this.shape_2,this.shape_3,this.shape_4,this.shape_5];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.ClipGroup_14, new cjs.Rectangle(1.7,1.2,14.2,17.2), null);


(lib.ClipGroup_13 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AAKBWQgDgIACgJQADgJAHgGQAJgFAJAGIAAggIgbAAIAAggIgrAAIAAAKIgmAWIgNAAQgCgKAAgMQAAgoAZgdQAagdAjAAQAkAAAZAdQAaAdAAAoQABAZgMAXQgLAWgUAPQgMAIgPAEQgFgEgDgIg");
	mask.setTransform(8.7,9.8);

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AAiAOIgFgHIgGgHQgFgEgKgIQgOgMgUgCQgGAAgHACIgEACIAEgDQAHgCAGAAQAKAAAIADQAKAEAHAGQAQAMAKAPIAJAPg");
	this.shape.setTransform(8.2,5.2);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#BDBDBD").s().p("AABBEQgagQgQgbQgPgagCgfQgBgdASgKQAWgKATANIAAABQAZAQAQAbQAQAaACAfQABAdgSAKQgJAEgJAAQgMAAgLgIgAgjhFQgRAKAAAbQACAdAPAYQAPAaAYAPQASANAUgJQAFgDACgDIAFgJIACgIIABgMIAAgKIgDgLIgBgGQgJgdgWgWQgKgLgMgHIgKgFIgKgCIgIAAIgHADg");
	this.shape_1.setTransform(7.8,10.5);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#9E9E9E").s().p("AgBBJQgKgGgKgJQgJgIgIgMQgPgUgHgaIgCgMIgBgMQgBgLAEgKQACgIAHgIQAFgGAKgEQASgEAQAJIAOAJQAKAIAIAJIALAQIAHALIAGAMIAIAYIABASIABAAQAAAHgBAHQgBAGgDAHIgHAKQgDAEgFACQgGADgEABIgLABQgOgCgKgGgAAtBGQARgJAAgeQgCgfgQgaQgPgbgbgRQgSgNgWAKQgRAKAAAcQAAgLAGgJQgDAHgBAEIgBAGIAAALIAFAXQADAJAGAMIAHALIAHAKIAQARIANAKIALAEIAHACIAJAAQgOADgMgHQATAOAWgLg");
	this.shape_2.setTransform(8.2,10.2);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#E3E3E3").s().p("AAmAUIgPgUQgIgGgHgGQgPgNgTgBQgHAAgFACIgFABIAEgBQAHgDAGAAQAKAAAIADQAIAEAJAGQAQAMAKAPIAHALIACAEg");
	this.shape_3.setTransform(9.4,4.2);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#A6A6A6").s().p("AABBFQgZgRgQgbQgQgZgCggQgBgdASgKQAWgKATAOQAaARAPAaQAQAaACAfQABAdgSALQgJADgIAAQgNAAgLgHgAgchHIgHACQgQAKAAAbQACAeAPAYQAPAZAXAQQATAMAUgJQAEgDACgDQAEgDABgFIADgJQABgFAAgGIgDgWIgCgGQgJgcgVgXQgLgLgLgGIgKgFQgGgCgEAAIgFgBIgEABg");
	this.shape_4.setTransform(9,9.4);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#DEDEDE").s().p("AAaBRIgJgBIgLgEQgGgDgFgDIgTgQIgJgKIgCgDQAOASAUAMQASANAVgKQASgKAAgdQgCgfgQgaQgQgagZgRQgUgOgVALQgRAJAAAeQACAeAPAbIgGgMIgJgXIgEgYQAAgMADgIQABgHAFgHQAFgGAGgEQAOgHAOADQATAGAMAMIAOANIAPAVQAJAPAFAOQAFARAAAOIAAAKIgDAMIgCAGQgGAKgIAFQgJAFgIAAIgCAAg");
	this.shape_5.setTransform(9.4,9.2);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#949494").s().p("AAYBRQgNgBgMgHQgJgFgLgKQgJgJgHgKQgQgWgHgZIgCgMIgBgMQAAgLADgKQADgKAGgGQAGgHAJgCQASgFAQAJQAHAEAHAFQAKAIAIAJQAHAIAFAIIAMAXQACAEACAHIAEANIABAHIABALIAAAAIgBAOQgBAHgDAGIgDAGIgEAEIgHAGQgEADgGABIgIABIgDAAgAAEBDQAJAGALABQALABAKgFQARgKAAgdQgCgfgQgaQgPgbgbgRQgSgOgWALQgOAIgCAWQABgJAHgIIgCACQgDAFgCAJIAAAGQgBAFABAGIABALIADAMQAEALAGAKIANAVIAIAJIAIAHQAHAHAGADIALAFIAHACIAFAAQABAAAAAAQABAAAAAAQABAAAAAAQAAAAABAAIABAAQgPADgOgJg");
	this.shape_6.setTransform(9.4,9.2);

	var maskedShapeInstanceList = [this.shape,this.shape_1,this.shape_2,this.shape_3,this.shape_4,this.shape_5,this.shape_6];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.ClipGroup_13, new cjs.Rectangle(1.8,1.2,14.1,17.2), null);


(lib.ClipGroup_12 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AAKBWQgDgIADgJQACgJAIgFQAJgGAIAHIAAghIgbAAIAAgfIgrAAIAAAJIgmAWIgNAAQgCgKAAgMQAAgoAZgdQAagdAjAAQAkAAAaAdQAZAdAAAoQABAZgMAXQgLAWgUAPQgNAIgOAEQgFgFgDgHg");
	mask.setTransform(8.7,9.8);

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AAZAFQgGgHgJgGQgNgLgUgDQgHAAgGACIgEACIAEgCQAHgDAGAAQAKAAAHAEQALAEAHAGQAPALALAQIADAGg");
	this.shape.setTransform(7.9,4.7);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#BDBDBD").s().p("AABBEQgagQgPgbQgQgagCgfQgBgcASgLQAWgKATANQAZARAQAbQAQAaACAfQABAcgSALQgJAEgJAAQgMAAgLgIgAgchHIgHADQgQAIAAAcQACAeAOAXQAPAaAYAQQASAMAUgJIAHgGIAFgJIACgIIACgMIgBgKIgEgRQgKgegVgVQgKgKgMgIIgKgEIgKgCIgEgBIgEABg");
	this.shape_1.setTransform(7.8,10.5);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#E8E8E8").s().p("AAaBRIgJgBIgLgEIgLgGIgKgIIgSgSIgIgLIgCgEQAQAZAZARQATANAVgKQATgLgCgcQgCgfgQgaQgPgagZgRQgTgOgXAKQgRALAAAcQACAdAOAZIgFgIIgJgXIgDgYQAAgLACgJQACgGAFgHQADgGAHgFQAOgHAPADQARAGAOAMQAJAHAFAGIAPAVQAJAPAFAOQAEAOABARIgBAAIAAAKIgCAMIgCAGQgFAKgKAFQgHAFgIAAIgDAAg");
	this.shape_2.setTransform(8.2,10.2);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#9E9E9E").s().p("AAYBRQgNgBgMgHQgJgFgLgKQgJgJgHgKQgQgWgHgZIgCgMIgBgMQAAgLADgKQADgKAGgGQAGgHAJgCQASgEAQAIQAHAEAHAFQAIAHAKAKIAMAQIAMAXQADAGABAGIAEAMIABAHIABALIAAAAIgBAOQgBAHgDAGIgDAGIgEAFIgHAFQgEADgGABIgIABIgDAAgAAEBDQAJAGALABQALABAKgFQARgKAAgdQgCgfgQgaQgPgbgbgRQgSgNgWAKQgOAIgCAWQABgLAIgIIgDAEQgDAGgCAIIAAAGIAAALIABALIADAMQAEALAGAKIAGALIAPATIAIAIIANAKIALAEIAHACIAHAAQgOACgMgIg");
	this.shape_3.setTransform(8.2,10.2);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#E3E3E3").s().p("AAYACQgIgGgHgGQgOgMgUgCQgHAAgFACIgFABIAFgCQAGgCAGAAQAKAAAIADQALAFAGAFQAQAMAKAQIAHAKg");
	this.shape_4.setTransform(9.3,3.9);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#A6A6A6").s().p("AABBFQgagRgPgbQgQgagCgfQAAgdARgKQAVgKAUAOQAZAQAQAbQAQAaACAfQAAAdgRAKQgJAEgJAAQgMAAgLgHgAgchHIgHACQgQAKAAAbQACAdAPAZQAOAYAYAQQATANAUgJQADgCADgEIAFgJIADgIIABgLIgDgWIgCgGQgJgcgWgXQgJgKgNgIIgKgEQgGgCgEAAIgEgBIgEABg");
	this.shape_5.setTransform(9.1,9.4);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#949494").s().p("AgBBJQgKgGgKgJQgJgIgIgMQgPgVgHgZQgDgIAAgEIAAgMQAAgMADgJQAEgKAGgGQAFgHAKgDQASgEAQAJIANAJQALAIAHAJQAIAIAEAIIAHALIAKAXIAEAUIABALQAAAHgBAHQgBAGgDAHIgHAKQgDAEgFACQgGADgEABIgLABQgOgCgKgGgAAuBGQAQgKABgeQgCgegQgbQgQgagagRQgTgOgVALQgPAIgCAWQACgIAFgHIAAAAQgEAGgBAIIgBAGQgBAFABAGIAFAWQAEAMAFAKIAGALIAPATIAJAHIAMAKIALAFIAIACIAJAAQgNADgLgGQATALAUgJg");
	this.shape_6.setTransform(9.4,9.2);

	var maskedShapeInstanceList = [this.shape,this.shape_1,this.shape_2,this.shape_3,this.shape_4,this.shape_5,this.shape_6];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.ClipGroup_12, new cjs.Rectangle(1.8,1.1,14.1,17.2), null);


(lib.ClipGroup_11 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AAKBWQgDgIADgKQACgIAIgFQAJgGAIAHIAAghIgaAAIAAgfIgtAAIAAAJIglAWIgNAAQgDgMAAgKQAAgoAagdQAZgdAkAAQAkAAAZAdQAaAdAAAoQABAZgMAXQgLAWgUAPQgNAIgOAEQgGgGgCgGg");
	mask.setTransform(8.8,9.8);

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AAWACQgIgHgIgGQgPgMgSgBQgGAAgHACQAHgDAGAAQAKAAAIADQAJAEAIAGQAPALALAQIAGALg");
	this.shape.setTransform(8.3,5);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#BDBDBD").s().p("AAVBMQgLgBgJgGQgZgRgQgbQgQgagCgfQAAgdARgKQAKgFALABQALABAJAHQAZAQAQAbQAQAaACAfQAAAdgRAKQgIAEgJAAIgEAAgAgchHIgHACQgQAKAAAbQACAeAPAYQAPAZAXAQQAJAFAKABQAKABAKgEIAGgGIAFgIIADgJIABgLIgBgLIgEgRQgJgcgVgXQgLgLgLgGIgKgFIgKgCIgEgBIgFABg");
	this.shape_1.setTransform(7.8,10.4);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#9E9E9E").s().p("AAYBRQgNgBgLgHQgKgGgKgJQgJgIgIgLQgQgWgHgZIgCgMIgBgMQAAgLADgKQADgJAGgHQAGgHAJgCQARgFARAJIAOAJQALAJAHAIQAHAIAFAIIAGALIACAFIAEAJIgEgJIgFgKQgQgbgagRQgUgOgUALQgQAJgCAYQACgMAIgJIgDADQgDAGgBAIIgBAGIAAALIABALIADAMQAEALAGAKIANAVIAQAQQAIAHAFADIALAFIAIACIAHAAQgNACgMgGQATANAWgKQASgLAAgcQgCgVgHgRIAFAJIAEAUIABALIAAAAQABAGgCAIQAAAHgEAGIgDAGIgEAEQgDAEgEACIgKAEIgIABIgDAAgAAdBHIAEgBIgDABgAAdBHg");
	this.shape_2.setTransform(8.2,10.2);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#E3E3E3").s().p("AAiAOIgMgOQgGgGgJgGQgNgMgVgCQgFAAgHACIgEABIAEgCQAGgCAGAAQALAAAHADQALAEAGAGQARAMAKAPIAJAPg");
	this.shape_3.setTransform(9.5,4.1);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#A6A6A6").s().p("AABBEQgZgQgQgbQgQgagCgfQAAgdARgKQAWgKATANQAaARAPAbQAQAaACAfQAAAdgRAKQgJAEgJAAQgMAAgLgIgAgchHQgEAAgDACQgQAJAAAcQACAdAPAZQAOAYAYAQQASANAVgJQAEgDACgDIAFgJIADgIIABgMIgDgVIgCgGQgJgcgWgXQgKgLgMgHIgKgEQgEgCgGAAIgEgBIgEABg");
	this.shape_4.setTransform(9.1,9.4);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#DEDEDE").s().p("AAaBRIgJgBIgMgEIgKgGQgGgEgEgEIgJgIIgJgKIgHgLQAPAXAXAOQATAOAVgKQASgKgBgdQgCgfgPgaQgRgbgZgRQgUgNgVAKQgRAKAAAdQABASAGAQIgEgLIgEgYQAAgMADgIQABgHAEgHQAGgGAGgEQAOgHAOADQATAGAMAMIAOANIAPAVQAJAPAFAOQAEAQABAPIAAAAIgBAPIgEANQgFAKgKAFQgIAFgIAAIgCAAgAgyAQIgDgHQAEAJAFAJIADAFQgFgGgEgKgAg1AJIgCgFIACAFIAAAAg");
	this.shape_5.setTransform(9.5,9.2);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#949494").s().p("AAYBRQgNgBgMgHQgKgHgKgIQgKgKgHgJQgOgWgIgZIgCgMIgBgMQAAgLADgKQADgKAGgGQAHgHAIgCQARgFARAJQAHAEAHAFQALAIAHAJIALAQIADAFQgPgagagRQgJgGgKgBQgMgBgKAFQgQAIgBAaQABgOAJgKIgDAFQgEAGAAAIIgCAGIAAALIAFAWQADAJAHANIAGAKIAHAKIAQARIANAKIALAFIAIACIAIAAIAGgCQgRAGgPgJQATAOAWgKQARgKAAgeQgBgYgKgVIADAGQACAEADAHIADANIABAHIABALIAAAOQgCAHgDAGIgDAGIgEAEQgDAEgFACQgDADgHABIgHABIgDAAgAAzgPIgHgMIAHAMg");
	this.shape_6.setTransform(9.5,9.2);

	var maskedShapeInstanceList = [this.shape,this.shape_1,this.shape_2,this.shape_3,this.shape_4,this.shape_5,this.shape_6];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.ClipGroup_11, new cjs.Rectangle(1.8,1.2,14.1,17.2), null);


(lib.ClipGroup_10 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AAKBWQgDgJACgJQADgJAIgFQAIgFAJAGIAAggIgbAAIAAggIgrAAIAAAKIgmAWIgNAAQgCgKAAgMQAAgoAZgcQAagdAjAAQAkAAAaAdQAZAcAAAoQABAZgMAWQgLAXgUAOQgMAIgPAEQgFgEgDgHg");
	mask.setTransform(8.7,9.7);

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AAiAOIgFgHIgGgHQgHgGgIgGQgOgMgUgCIgMACIgFACIAEgDIANgCQAIAAAKADQAIAEAJAGQAQAMAKAPIAJAPg");
	this.shape.setTransform(8.2,5.1);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#BDBDBD").s().p("AABBEQgagQgPgbQgQgagCgfQgBgdASgKQAVgKAUAOQAZAQAQAbQAKAQAEASIgCgGQgJgcgVgXQgKgLgMgHIgKgFQgFgBgFAAQgEgBgEABQgEAAgEACQgQAJAAAcQACAdAPAYQAOAZAYAQQASANAUgJIAHgGQAEgFABgEIACgIIACgMIgDgVQADALABAMQABAdgSAKQgJAEgJAAQgMAAgLgIg");
	this.shape_1.setTransform(7.8,10.4);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#E8E8E8").s().p("AARBQIgMgEIgKgGIgTgQIgJgKIgFgIQAOAVAWANQATAOAVgKQASgKAAgdQgCgfgQgaQgQgbgZgQQgJgHgLgBQgMgBgJAFQgSAKAAAdQADAeAPAbIAFAHIgBgBQgFgHgFgKIgJgYIgEgXQAAgMADgIQABgHAFgHQAFgHAGgDQAOgHAOADQARAFAOAMIAOAOIAPAVQAJAPAFAOQAFARAAAOIgBAPIgEANQgEAJgKAGQgIAFgLAAg");
	this.shape_2.setTransform(8.1,10.2);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#9E9E9E").s().p("AAYBRQgNgBgLgHQgKgGgKgJQgJgIgIgLQgQgWgHgZIgCgMIgBgMQAAgLADgKQADgKAGgGQAGgHAJgDQASgEAQAJIAOAJQALAJAHAIQAHAIAFAIIAGALIALAXIAEAUIABALIAAAAIgBAOQAAAGgEAHIgHAKIgHAGQgGADgEABIgJABIgCAAgAAtBGQASgKgBgeQgCgegQgbQgPgagbgRQgSgOgWALQgOAIgCAWQABgIAFgHIAAAAQgDAGgCAIIAAAGQgBAFABAGIAEAWQAEAMAGAKIAGALIAPATIAIAHIANAKIALAFIAHACIAKAAQgMACgLgEQASAKATgJg");
	this.shape_3.setTransform(8.1,10.2);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#E3E3E3").s().p("AAdAHIgHgHQgGgGgJgGQgOgMgTgCQgGAAgHACIgEABIAEgCQAHgCAGAAQAKAAAHADQANAGAFAEQAQANAKAOIAJAPg");
	this.shape_4.setTransform(9.5,4.1);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#A6A6A6").s().p("AABBEQgZgQgQgbQgQgagCgfQgBgcASgLQAWgKATANQAZARAQAbQAQAaACAfQABAdgSAKQgJAEgJAAQgMAAgLgIgAgjhFQgQAJAAAcQACAdAOAYQAPAaAYAPQASANAUgJQAEgCADgEQADgEACgFIACgIIACgMIgDgVIgCgGQgKgegVgVQgKgLgMgHIgKgFIgKgCIgIAAIgHADg");
	this.shape_5.setTransform(9.1,9.4);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#DEDEDE").s().p("AAaBRIgJgBQgFgBgGgDIgVgNIgSgTIgIgLIgCgEQAQAaAaAQQASAOAVgLQARgJAAgeQgCgfgQgaQgPgagagRQgSgOgWAKQgRAKgBAdQACAdANAXIgEgGIgJgXIgDgYQAAgMACgIQABgFAGgIQADgGAHgFQAOgHAPAEQARAEAOANQAHAFAHAIIAPAVQAJAPAEAOQAFAOABARIAAAKIgCAMIgEAGQgEAKgJAFQgIAFgIAAIgDAAg");
	this.shape_6.setTransform(9.4,9.2);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#949494").s().p("AAABJQgNgIgHgHQgJgJgIgLQgQgUgHgaIgCgMIgBgMQAAgLADgLQADgJAGgHQAHgHAIgCQASgEAQAJIAOAJQAHAFALAMIAMAQIAGALIALAXIAEAUIABALIAAAAIgBANQAAAHgEAHIgDAGIgEAEIgHAGQgFADgFABIgLABQgPgCgJgGgAAEBCQAUAOAVgKQARgLAAgdQgCgegQgbQgPgagbgRQgSgOgWAKQgOAJgCAWQABgKAHgIIgCADQgDAGgCAIIAAAGIAAAKIABAMQABAFACAGQAFANAFAJIAGAKIAPATIAIAIIANAKIALAFIAHACIAIAAQgPACgMgIgAAdBHIAEgBIgDABgAAdBHg");
	this.shape_7.setTransform(9.4,9.2);

	var maskedShapeInstanceList = [this.shape,this.shape_1,this.shape_2,this.shape_3,this.shape_4,this.shape_5,this.shape_6,this.shape_7];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.ClipGroup_10, new cjs.Rectangle(1.7,1.1,14.2,17.2), null);


(lib.ClipGroup_9 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AAKBWQgDgJADgJQACgJAIgFQAJgFAIAGIAAggIgbAAIAAggIgsAAIAAAKIgmAWIgMAAQgDgMAAgKQAAgoAagcQAZgdAkAAQAkAAAaAdQAZAcAAAoQABAZgMAWQgLAXgUAOQgMAIgOAEQgGgEgDgHg");
	mask.setTransform(8.8,9.7);

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AAdAHIgGgHQgIgHgIgFQgNgMgUgCQgHAAgGACIgEABIAEgCQAHgCAGAAQAKAAAIADQAKAFAHAFQAQAMAKAPIAJAPg");
	this.shape.setTransform(8.2,5.1);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#BDBDBD").s().p("AABBFQgagRgPgbQgQgagCgfQAAgdARgKQAVgKAUAOQAZAQAQAbQAQAaACAfQAAAdgRAKQgKAEgIAAQgMAAgLgHgAgchHIgHACQgQAKAAAbQACAeAPAYQAPAZAXAQQAJAFAKABQAKABAKgEIAGgGIAFgIIADgJIABgLIgBgLIgEgRQgJgcgWgXQgLgMgLgFIgJgFIgKgCIgFgBIgEABg");
	this.shape_1.setTransform(7.8,10.4);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#9E9E9E").s().p("AAABIQgMgGgIgIQgJgJgIgLQgQgUgHgaIgCgMIgBgMQAAgLADgLQADgJAGgHQAHgHAIgCQASgEAQAJIAOAJQAKAHAIAKIAMAQIAGALIALAXIAEAUIABALIAAAAIgBANQAAAHgEAHIgDAGIgEAEIgHAGQgFADgFABIgLABQgPgCgJgHgAAEBCQAUAOAVgKQARgKAAgeQgCgegQgbQgPgagbgRQgSgOgWAKQgOAJgCAWQABgKAHgIIgCADQgDAGgCAIIAAAGIAAAKIABAMIADALQAFANAFAJIAGAKIAHAKIAQARIANAKIALAFIAHACIAJAAQgPADgNgJgAAeBHIABAAIgBAAgAAeBHg");
	this.shape_2.setTransform(8.2,10.2);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#E3E3E3").s().p("AAnATIgFgFIgLgOIgQgMQgOgMgTgCQgHAAgGACIgEABIAEgCQAHgCAGAAQAJAAAJADQAIADAJAHQAQAMAKAPIAJAPg");
	this.shape_3.setTransform(9.5,4.1);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#A6A6A6").s().p("AAVBMQgLgBgJgGQgZgRgQgbQgQgagCgfQAAgdARgKQAKgFALABQALABAJAHIAAgBQAaARAPAbQAQAaACAfQAAAdgRAKQgIAEgJAAIgEAAgAgchHIgHACQgQAKAAAbQACAeAPAYQAPAZAXAQQAJAFAKABQAKABAKgEIAGgGIAFgIIADgJIABgLIgBgLIgEgRQgKgdgUgWQgLgLgLgGIgKgFIgKgCIgEgBIgFABg");
	this.shape_4.setTransform(9.1,9.4);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#949494").s().p("AAXBRQgNgBgLgHQgKgGgKgJQgJgIgIgLQgPgWgHgZIgCgMIgBgMQgBgLAEgKQACgIAHgIQAGgHAJgCQARgFARAJIAOAJQAKAIAIAJIALAQIAFAIIgCgCQgQgbgagRQgTgOgVALQgQAJgBAYQABgMAIgJIgCADQgEAGgBAIIgBAGIAAALIACALIADAMQAEALAFAKIAOAVIAQAQQAHAHAGADIAKAFIAIACIAHAAIAFgBIgDABIgCAAQgMACgMgGQATANAWgKQARgKAAgdQgBgbgMgWIAFAJIAEALIAFAUIAAALIABAAQAAAHgBAHQgBAHgDAGIgEAGIgDAEQgDAEgFACIgKAEIgIABIgDAAgAAugYIADAGIgDgGg");
	this.shape_5.setTransform(9.5,9.2);

	var maskedShapeInstanceList = [this.shape,this.shape_1,this.shape_2,this.shape_3,this.shape_4,this.shape_5];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.ClipGroup_9, new cjs.Rectangle(1.8,1.1,14.2,17.2), null);


(lib.ClipGroup_8 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AAKBWQgDgIADgJQACgJAIgFQAJgGAIAHIAAghIgaAAIAAgfIgsAAIAAAJIgmAWIgNAAQgCgMAAgKQAAgoAZgdQAagdAjAAQAkABAaAcQAZAdAAAoQABAagLAWQgMAWgUAPQgMAIgOAEQgGgFgDgHg");
	mask.setTransform(8.7,9.8);

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AAdAHIgGgHQgFgEgKgIQgOgMgUgCQgHgBgGADIgEABIAEgCQAHgCAGAAQAJAAAJADQAKAEAHAGQAQAMAKAPIAHALIACAEg");
	this.shape.setTransform(8.2,5.2);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#BDBDBD").s().p("AABBEQgZgQgQgbQgQgagCgfQAAgdARgKQAWgKATANQAaARAPAbQAQAaACAfQAAAcgRALQgJAEgJAAQgMAAgLgIgAgjhFQgQAKAAAbQACAdAPAYQAPAaAXAPQASANAVgJQAEgDACgDIAFgJIADgIIABgMIgBgKIgCgLIgCgGQgJgdgVgWQgKgLgMgHIgKgFIgKgCIgJAAIgHADg");
	this.shape_1.setTransform(7.8,10.5);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#9E9E9E").s().p("AAYBRQgOgBgLgHQgLgHgJgIQgKgKgHgJQgQgYgGgXIgCgMIgBgMQgBgLAEgKQACgIAHgIQAGgHAJgCQASgEAQAIQAHAEAHAFQAIAHAKAKIALAQIANAXQADAGABAGIAEAMIABAHIAAALIABAAIgBAOQgBAHgDAGIgEAGIgDAFQgEADgEACIgKAEIgHABIgDAAgAAtBGQARgKAAgdQgCgfgQgaQgPgbgbgQQgSgOgWAKQgQAJgBAaQABgPAMgMIgGAHQgEAIgBAGIgBAGIAAALIAFAXIAJAVIAOAVIAQARIANAKIALAEIAHACIAHAAQgMACgMgGQATANAWgKgAAcBHIAFgBIgDABgAAcBHg");
	this.shape_2.setTransform(8.2,10.2);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#E3E3E3").s().p("AAiANIgLgNQgHgGgIgHQgQgMgTgBIgLACIgFABIAEgBQAHgDAFAAQAKAAAJADQAIAEAIAGQARAMAKAPIAJAPg");
	this.shape_3.setTransform(9.5,4.2);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#A6A6A6").s().p("AABBEQgagQgPgbQgQgagCgfQgBgdASgKQAVgKAUAOQAZAQAQAbQAQAaACAfQABAdgSAKQgJAEgJAAQgMAAgLgIgAgchHIgHACQgQAJAAAcQABAdAPAZQAPAYAYAQQASANAUgJIAHgGQAEgFABgEIACgIQACgFAAgGIgDgWIgCgGQgJgcgWgXQgIgJgOgJIgKgEQgGgCgEAAIgEgBIgEABg");
	this.shape_4.setTransform(9.1,9.4);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#DEDEDE").s().p("AARBQIgMgEIgKgGIgTgQIgJgKIgGgIQAPAVAWANQATAOAVgKQASgKAAgdQgCgfgQgaQgRgbgYgQQgJgHgLgBQgMgBgKAFQgRAKAAAdQACAeAQAbIAFAHIgBgBQgFgHgFgKIgJgYIgEgXQAAgMADgIQABgHAEgHQAGgHAGgDQAOgHAOADQARAFAOAMIAOAOIAQAVQAIAPAFAOQAEAQABAPIAAAKIgDALIgCAHQgEAJgLAGQgHAFgLAAg");
	this.shape_5.setTransform(9.5,9.2);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#949494").s().p("AAYBRQgNgBgMgHQgLgHgJgIQgLgLgFgIQgQgWgHgZIgCgMIgBgMQAAgLADgKQADgKAGgGQAGgGAJgEQASgEAQAJQAIAFAGAEQAKAIAIAJIAMAQIAMAXQACAEACAHIAEANIABAHIABALIAAAAIgBAOIgEANIgEAGQgBADgCABQgDAEgFACQgGADgEABIgIABIgCAAgAAtBGQARgKAAgeQgCgegQgbQgPgagbgRQgSgOgWALQgOAIgCAWQABgIAFgHIAAAAQgEAHgBAHIAAAGQgBAFABAGQAAAGABAFIADALQADAKAHAMIANAVIAIAJIAIAHQAFAFAIAFIALAFIAHACIAJAAIABAAQgMADgMgFQASAKAUgJg");
	this.shape_6.setTransform(9.5,9.2);

	var maskedShapeInstanceList = [this.shape,this.shape_1,this.shape_2,this.shape_3,this.shape_4,this.shape_5,this.shape_6];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.ClipGroup_8, new cjs.Rectangle(1.8,1.1,14.1,17.2), null);


(lib.ClipGroup_7 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AAKBWQgDgIADgJQACgJAIgFQAJgGAIAHIAAghIgbAAIAAgfIgrAAIAAAJIgmAWIgNAAQgCgJAAgNQAAgoAZgdQAagdAjAAQAkAAAaAdQAZAdAAAoQABAZgMAXQgLAWgUAPQgNAIgOAEQgFgFgDgHg");
	mask.setTransform(8.7,9.8);

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AApAZIgMgSIgHgHQgGgGgJgGQgNgMgUgCQgHAAgGACIgEACIAEgDQAGgCAHAAQAJAAAJADQAKAFAHAFQAQANAKAPIAJAOg");
	this.shape.setTransform(8.2,5.2);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#BDBDBD").s().p("AABBFQgagRgPgbQgQgagCgfQAAgdARgKQAWgKATAOQAaARAPAaQAQAaACAfQABAcgSALQgJAEgJAAQgMAAgLgHgAgchHIgHACQgQAJAAAcQACAeAOAYQAPAZAYAQQATAMAUgJIAHgGQADgDABgFIACgJQACgFAAgGIgBgLIgEgRQgJgcgVgXQgLgLgMgGIgJgFQgGgCgEAAIgEgBIgFABg");
	this.shape_1.setTransform(7.8,10.5);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#E8E8E8").s().p("AAaBRIgJgBIgLgEQgGgDgFgDIgKgIIgSgSIgFgIQAOAVAXAOQARANAWgKQARgLAAgcQgCgfgQgaQgQgbgYgQQgUgOgWAKQgQAKgBAdQACAcANAYIgEgGIgJgXIgDgYQAAgMACgIQACgFAFgJQAEgFAGgFQAPgHAOADQASAGANAMQAJAHAFAGIAPAVQAJAPAFAOQAEAOABARIAAAKIgCALIgDAHQgFAKgKAFQgIAFgIAAIgCAAg");
	this.shape_2.setTransform(8.2,10.3);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#9E9E9E").s().p("AAYBRQgNgBgLgHQgKgGgKgJQgJgIgIgLQgQgWgHgZIgCgMIgBgMQAAgLADgKQADgKAGgGQAGgHAJgCQARgFARAJQAHAEAHAFQAKAIAIAJQAHAIAFAIIAGALIALAXIAEAUIABALIAAAAIgBAOQgBAHgDAGIgDAGIgEAEIgHAGQgEADgGABIgIABIgDAAgAAEBDQAJAGALABQALABAKgFQARgKAAgdQgCgfgQgaQgPgbgbgRQgSgOgWALQgOAJgCAVQABgJAHgIIgCACQgDAFgCAJIAAAGQgBAFABAGIABALIADAMQAEALAGAKIAGALIAPATIAIAHQAHAHAGADIALAFIAHACIAFAAIACAAQgOACgMgIgAAeBHIABAAIgCAAIABAAg");
	this.shape_3.setTransform(8.2,10.3);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#E3E3E3").s().p("AAnATIgKgMIgHgHQgGgGgJgGQgNgMgUgCQgHAAgGACIgEACIAEgDQAHgCAGAAQAJAAAJADIARAKQAPALALARIAHAKIACAEg");
	this.shape_4.setTransform(9.5,4.2);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#A6A6A6").s().p("AABBEQgagQgPgbQgQgagCgfQAAgdARgKQAVgKAUANIAAABQAZAQAQAbQAQAaACAfQABAdgSAKQgJAEgJAAQgMAAgLgIgAgchHQgDAAgEACQgQAKAAAbQACAdAPAYQAOAaAYAPQASANAVgJQADgCADgEIAFgJIACgIQACgFAAgGIgDgWIgCgGQgJgcgWgXQgKgMgMgGIgJgEQgFgCgFAAIgEgBIgFABg");
	this.shape_5.setTransform(9.1,9.5);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#949494").s().p("AAABJQgLgGgJgJQgJgIgIgMQgQgVgHgZIgCgMIgBgMQAAgLADgKQADgKAGgHQAGgGAJgDQASgEAQAJIAOAJQALAIAHAJIAMAQIAMAXIAFALIAEAUIABALIAAAAIgBAOQAAAGgEAHIgHAKIgHAGQgGADgEABIgLABQgPgCgJgGgAAtBGQASgKgBgeQgCgegQgbQgPgagbgRQgSgOgWALQgOAIgCAXQABgLAIgIIgDADQgDAGgCAIIAAAGIAAALIAEAWQAEAMAGAKIAGAKIAHAKQAAACAIAHIAIAIIANAKIALAFIAHACIAJAAIAGgCQgQAGgPgIQATANAVgKg");
	this.shape_6.setTransform(9.4,9.3);

	var maskedShapeInstanceList = [this.shape,this.shape_1,this.shape_2,this.shape_3,this.shape_4,this.shape_5,this.shape_6];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.ClipGroup_7, new cjs.Rectangle(1.8,1.2,14.1,17.2), null);


(lib.ClipGroup_6 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AAKBWQgDgJADgJQACgIAIgGQAJgFAIAHIAAghIgaAAIAAggIgsAAIAAAKIgmAWIgNAAQgCgNAAgJQAAgoAZgdQAagdAjAAQAkAAAaAdQAZAdAAAoQABAagLAVQgMAXgUAOQgMAIgOAFQgGgFgDgHg");
	mask.setTransform(8.7,9.8);

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AAdAHIgGgHIgPgMQgOgMgUgCIgMACIgFACIAEgDIANgCQAIAAAKADQAIAEAJAGQAQAMAKAPIAJAPg");
	this.shape.setTransform(8.2,5.1);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#BDBDBD").s().p("AABBEQgagQgPgbQgQgagCgfQAAgdARgKQAVgKAUANQAZARAQAbQAQAaACAfQAAAdgRAKQgJAEgJAAQgMAAgLgIgAgchHIgHACQgQAKAAAbQACAdAPAZQAOAYAYAQQASAOAVgKIAGgGQAFgGAAgDIADgIIABgLIgBgLIgEgRQgKgdgUgWQgJgJgNgJIgKgEIgKgCIgEAAIgFAAg");
	this.shape_1.setTransform(7.8,10.4);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#9E9E9E").s().p("AAXBRQgNgBgLgHQgKgGgKgJQgJgIgIgLQgPgWgHgZIgCgMIgBgMQgBgLAEgKQACgIAHgIQAFgGAKgEQASgEAQAJIAOAJQAKAIAIAJIALAQIADAFQgQgagagRQgTgOgVALQgQAJgBAZQABgLAHgJIgBABQgEAGgBAIIgBAGIAAALIAFAWQAEAMAFAKIAHALIAPATIAIAHQAFAFAIAFIAKAFIAIACIAJAAIABAAQgMADgMgGQASAMAUgKQARgLAAgdQgBgYgKgUIADAFIAEALIAFAUIAAALIABAAQAAAHgBAHQgBAGgDAHIgHAKQgDAEgFACQgGADgEABIgIABIgDAAgAAsgbIAHANIgHgNg");
	this.shape_2.setTransform(8.2,10.2);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#E3E3E3").s().p("AAnATIgKgMIgGgHQgIgHgIgFQgOgMgTgCQgGgBgHADIgEABIAEgCQAHgCAGAAQAKAAAHADQAMAFAGAFQAOAKAMARIAHALIACAEg");
	this.shape_3.setTransform(9.5,4.1);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#A6A6A6").s().p("AABBEQgagQgPgbQgQgagCgfQAAgdARgKQAVgKAUANQAZARAQAbQAQAaACAfQAAAdgRAKQgJAEgJAAQgMAAgLgIgAgjhFQgQAKAAAbQACAdAPAYQAPAaAXAPQASANAVgJQAEgDACgDIAFgJIADgIIABgMIgBgKIgCgLIgCgGQgJgdgVgWQgKgLgMgHIgKgFIgKgCIgJAAIgHADg");
	this.shape_4.setTransform(9.1,9.4);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#949494").s().p("AAABIQgMgGgIgIQgJgJgIgLQgQgUgHgaIgCgMIgBgMQAAgLADgLQADgJAGgHQAHgHAIgCQASgEAQAJIAOAJQAKAHAIAKIAMAQIAGALIALAXIAEAUIABALIAAAAIgBANQAAAHgEAHIgHAKIgHAGQgFADgFABIgLABQgPgCgJgHgAAtBGQARgLAAgdQgCgegQgbQgPgagbgRQgSgOgWAKQgOAJgCAWQABgKAHgIIgCADQgDAGgCAIIAAAGIAAAKIABAMIADALQAFANAFAJIAGAKIAHAKIAQARIANAKIALAFIAHACIAJAAQgOACgMgHQAUAOAVgKg");
	this.shape_5.setTransform(9.5,9.2);

	var maskedShapeInstanceList = [this.shape,this.shape_1,this.shape_2,this.shape_3,this.shape_4,this.shape_5];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.ClipGroup_6, new cjs.Rectangle(1.8,1.1,14.1,17.2), null);


(lib.ClipGroup_5 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AAKBWQgDgJADgJQACgIAIgGQAJgFAIAGIAAggIgaAAIAAggIgsAAIAAAKIgmAWIgNAAQgCgKAAgMQAAgoAZgdQAagdAjAAQAkAAAaAdQAZAdAAAoQABAZgMAWQgLAXgUAOQgMAIgPAFQgGgGgCgGg");
	mask.setTransform(8.7,9.8);

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AAiAOIgFgHIgGgHIgPgMQgOgMgUgCQgHgBgGADIgEABIAEgCQAHgCAGAAQAJAAAJADQAKAEAHAGQAQAMAKAPIAJAPg");
	this.shape.setTransform(8.2,5.1);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#BDBDBD").s().p("AABBEQgZgQgQgbQgQgagCgfQAAgdARgKQAWgKATANQAaARAPAbQAQAaACAfQAAAdgRAKQgJAEgJAAQgMAAgLgIgAgbhHQgEAAgEACQgQAJAAAcQACAdAPAYQAOAaAYAPQASANAVgJIAHgGQADgEABgFIADgIQABgFAAgGIgDgWIgCgGQgJgcgVgXQgKgLgMgHIgKgEQgEgCgGAAIgEgBIgEABg");
	this.shape_1.setTransform(7.8,10.4);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#E8E8E8").s().p("AARBPIgLgDQgGgDgFgDIgKgIIgSgSIgFgIQAOAVAWANQATAOAVgKQARgKAAgdQgCgfgQgaQgQgbgYgRQgKgGgLgBQgLgBgKAFQgRAKAAAdQACAcANAXIgEgFIgEgNIgFgLIgDgXQAAgMACgIQACgFAFgJQAFgHAFgDQAPgHAOADQARAFAPANIANANIAPAVQAJAPAFAOQAFAQAAAPIgBgBIgBAQIgEAMQgEAKgKAGQgIAFgKAAQgFAAgEgCg");
	this.shape_2.setTransform(8.2,10.2);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#9E9E9E").s().p("AAABJQgMgHgIgIQgLgLgGgIQgPgWgIgZIgCgMIgBgMQAAgLADgKQAEgKAFgGQAGgGAJgEQASgEAQAJQAIAFAGAEQAKAIAIAJIAMAQIAMAXQACAEADAHIADANIABAHIABALIgBAOIgEANIgEAGIgDAEIgIAGIgJAEIgLABQgNgBgLgHgAAtBGQARgJAAgeQgCgfgQgaQgPgagbgRQgSgOgVAKQgPAJgCAWQACgLAHgIIgCAEQgEAGgCAHIAAAHIAAAKIABAMIAEALQAEAMAFAKIAGAKIAPATIAJAIIAMAKIALAFIAHACIAGAAQgLABgJgFQASAMAUgKg");
	this.shape_3.setTransform(8.2,10.2);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#E3E3E3").s().p("AAdAHIgHgHQgHgGgIgGQgOgMgUgCQgGAAgGACIgEABIAEgCQAGgCAGAAQALAAAHADQAJADAIAHQARAMAKAPIAJAPg");
	this.shape_4.setTransform(9.5,4.1);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#A6A6A6").s().p("AABBFQgagSgPgaQgQgagCgfQgBgcASgLQAWgKATANQAZASAQAaQAQAaACAfQABAdgSAKQgJAEgJAAQgMAAgLgHgAgchHIgHACQgQAKAAAbQACAdAOAYQAPAaAYAQQASAMAVgKIAGgFIAFgIIACgJIACgMIgDgVIgCgGQgKgdgVgWQgKgLgMgGIgKgGIgKgBIgEgBIgEABg");
	this.shape_5.setTransform(9.1,9.4);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#949494").s().p("AAYBRQgMgBgMgHQgMgHgIgIQgLgLgGgIQgPgWgIgZIgCgMIgBgMQAAgLADgKQAEgKAFgGQAHgHAIgCQARgFARAJQAHAEAHAFQALAIAHAJIAMAQIAHANIgEgIQgQgagbgRQgSgOgVALQgPAIgCAWQABgIAGgHIAAAAQgEAGgCAIIAAAGQgBAFABAGQAAAGABAFIADALQAFAMAFAKIAGALIAPATIAJAHQAEAFAIAFIALAFIAHACIAKAAQgNADgMgHQATANAUgKQASgKAAgeQgCgagMgXIAFAKIAEALIAEANIABAHIABALIAAAOQgCAHgDAGIgEAGIgDAEQgDAEgEACQgEADgGABIgIABIgDAAgAAxgTIAAAAg");
	this.shape_6.setTransform(9.4,9.2);

	var maskedShapeInstanceList = [this.shape,this.shape_1,this.shape_2,this.shape_3,this.shape_4,this.shape_5,this.shape_6];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.ClipGroup_5, new cjs.Rectangle(1.8,1.1,14.1,17.2), null);


(lib.ClipGroup_4 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AAKBWQgDgIADgJQACgJAIgFQAJgGAIAHIAAghIgaAAIAAgfIgsAAIAAAJIgmAWIgNAAIgCgWQAAgoAZgdQAagdAjAAQAkAAAaAdQAZAdAAAoQABAZgLAWQgMAYgUAOQgNAIgNAEQgGgFgDgHg");
	mask.setTransform(8.7,9.8);

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AAfAJIgHgGIgPgOQgPgMgTgBIgMACIgFABIAEgBQAHgDAGAAQAKAAAIADQAIAEAJAGQAQAMAKAPIAHALg");
	this.shape.setTransform(8.1,5);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#BDBDBD").s().p("AABBEQgZgQgQgbQgQgagCgfQgBgcASgLQAWgKATANQAZARAQAbQAKAQAEARIgCgGQgJgcgVgWQgKgLgMgHIgKgFIgKgCQgEgBgEABIgIADQgQAJAAAcQACAdAPAYQAOAZAYAQQASANAUgJQAEgCADgEQADgEACgFIACgIIACgMIgDgVQADALABAMQABAcgSALQgJAEgJAAQgMAAgLgIg");
	this.shape_1.setTransform(7.8,10.5);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#9E9E9E").s().p("AAYBRQgNgBgLgHQgKgGgKgJQgJgIgIgLQgQgWgHgZIgCgMIgBgMQAAgLADgKQADgKAGgGQAGgHAJgCQASgEAQAIIAOAJQAKAHAIAKIAMAQIAGALIALAYIAEATIABALIAAAAIgBAOQAAAHgEAGIgDAGIgEAFIgHAFIgKAEIgIABIgDAAgAAtBGQASgKgBgdQgCgfgQgaQgPgbgbgRQgSgNgWAKQgOAIgCAWQABgLAIgIIgDAEQgDAGgCAIIAAAGIAAALIABALIADAMQAEALAGAKIANAVIAQARIANAKIALAEIAHACIAHAAQgMACgMgGQATANAWgKgAAcBHIAHgCIgFACgAAcBHg");
	this.shape_2.setTransform(8.1,10.2);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#E3E3E3").s().p("AAkAUIgQgUQgGgGgJgHQgPgMgSgBQgHAAgGACQAHgDAGAAQAJAAAJADQAKAEAHAGQAPALALAQIAHALIACAEg");
	this.shape_3.setTransform(9.7,4.2);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#A6A6A6").s().p("AABBFQgagRgPgbQgQgagCgfQAAgdARgKQAVgKAUAOQAZAQAQAbQAQAaACAfQABAdgSAKQgJAEgJAAQgMAAgLgHgAgchHIgHACQgQAKAAAbQACAdAPAZQAOAZAYAQQAIAFALABQALABAJgEIAGgGIAFgIIACgJQACgFAAgGIgDgWIgCgGQgJgcgWgXQgLgMgLgFIgJgFIgKgCIgEgBIgFABg");
	this.shape_4.setTransform(9.1,9.4);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#949494").s().p("AAYBRQgNgBgMgHQgKgHgKgIQgLgLgFgIQgQgXgHgYIgDgMIgBgMQAAgLAEgKQADgKAGgGQAGgHAJgCQARgFARAJIAOAJQALAIAHAJIALAQIADAFQgPgagagRQgUgOgVALQgQAIgBAaQABgMAHgIIgBABQgEAGAAAIIgCAGIAAALIAFAWQAEAMAGAKIANAVIAQAQQAGAFAHAFIALAFIAIACIAIAAIABAAQgMADgMgGQASALAUgJQARgKAAgeQgBgYgKgVIADAGIAFALIADAUIACALIABAAIgBAOQgCAHgDAGIgDAGIgEAEQgDAEgFACQgDADgHABIgHABIgDAAgAAsgbIAHAMIgHgMg");
	this.shape_5.setTransform(9.5,9.2);

	var maskedShapeInstanceList = [this.shape,this.shape_1,this.shape_2,this.shape_3,this.shape_4,this.shape_5];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.ClipGroup_4, new cjs.Rectangle(1.7,1.2,14.2,17.2), null);


(lib.ClipGroup_3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AAKBWQgDgJADgJQACgIAIgGQAJgFAIAHIAAghIgbAAIAAgfIgsAAIAAAJIglAWIgNAAQgDgMAAgKQAAgoAagdQAZgdAkAAQAkAAAaAdQAZAdAAAoQABAZgLAWQgMAXgUAPQgNAIgNAEQgHgGgCgGg");
	mask.setTransform(8.8,9.8);

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AAnAUIgFgGIgLgOIgQgMQgMgMgVgCQgHAAgGACIgEABIAEgCQAHgCAGAAQAIAAAKADQAIAEAJAGQAPALAMAQIAGALIACAEg");
	this.shape.setTransform(8.2,5.1);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#BDBDBD").s().p("AABBEQgagQgPgbQgQgagCgfQAAgdARgKQAWgKATANQAZARAQAbQAQAaACAfQAAAcgRALQgKAEgIAAQgMAAgLgIgAgchHIgHADQgQAJAAAbQACAeAPAXQAPAaAXAQQAIAFALABQAKABAKgEIAGgGIAFgJIADgIIABgMIgBgKIgEgRQgKgegVgVQgKgLgMgHIgJgEIgKgCIgFgBIgEABg");
	this.shape_1.setTransform(7.8,10.5);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#E8E8E8").s().p("AAaBRIgJgBIgMgEIgKgGQgGgEgEgEIgJgIIgJgKIgHgLQAPAXAXAPQASANAWgKQASgKAAgdQgCgfgQgaQgQgbgZgQQgVgOgUAKQgSAKAAAdQACAeAQAbIADAFQgFgGgEgKIgGgMIgDgLIgEgYQAAgJACgLQADgIAEgGQADgFAIgFQANgHAPADQASAGANAMIAOANIAPAVQAJAPAFAOQAFARAAAOIgBAPIgEANQgFAKgJAFQgJAFgIAAIgCAAg");
	this.shape_2.setTransform(8.2,10.2);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#9E9E9E").s().p("AAYBRQgOgBgLgHQgLgHgJgIQgKgKgHgJQgQgYgGgXIgCgMIgBgMQgBgLAEgKQACgIAHgIQAGgHAJgCQARgFARAJQAHAEAHAFQAKAIAIAJIALAQIANAXQACAEACAHIAEANIABASIABAAIgBAOQgBAHgDAGIgEAGIgDAEQgDAEgFACIgKAEIgHABIgDAAgAAtBGQASgLgBgcQgCgfgQgaQgPgbgbgRQgSgNgWAKQgOAIgCAXQABgIAFgIQgEAIgBAGIAAAGIAAALIABALIADAMIAJAVIAOAVIAQAQQAHAHAGADIALAFQADACAEAAIAFAAQABAAAAAAQABAAAAAAQABAAAAAAQAAAAABAAIABAAQgOADgNgHQATANAWgKg");
	this.shape_3.setTransform(8.2,10.2);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#E3E3E3").s().p("AAdAHIgGgHIgPgMQgNgMgVgCQgHAAgGACIgEABIAEgCQAHgCAGAAQAJAAAJADQALAFAGAFQAQAMAKAPIAHALIACAEg");
	this.shape_4.setTransform(9.5,4.1);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#A6A6A6").s().p("AABBEQgZgQgQgbQgQgagCgfQAAgdARgKQAWgKATANIAAABQAZAQAQAbQAQAaACAfQAAAdgRAKQgJAEgJAAQgMAAgLgIgAgchHQgDAAgEACQgQAKAAAbQACAdAPAYQAPAaAXAPQASANAVgJQAEgDACgDIAFgJIADgIIABgLIgBgLIgEgRQgJgcgVgXQgKgLgMgHIgKgEQgFgCgFAAIgEAAIgFAAg");
	this.shape_5.setTransform(9.1,9.4);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#DEDEDE").s().p("AARBPQgEAAgIgDIgKgGIgKgIIgJgJIgJgKIgDgEQAOATAUAMQATAOAVgKQASgKAAgdQgCgfgQgaQgRgbgYgRQgJgGgLgBQgMgBgKAFQgRAKAAAdQACAeAQAbIgGgMIgJgXIgEgXQAAgMADgIQABgIAEgGQAFgHAHgDQANgIAPAEQARAFAOAMIAOAOIAQAVQAIAPAFAOQAEARABAOIAAgBIAAAKIgDAMIgCAGQgFALgKAFQgHAFgLAAIgJgCg");
	this.shape_6.setTransform(9.5,9.2);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#949494").s().p("AAYBRQgNgBgLgHQgKgGgKgJQgJgIgIgLQgQgWgHgZIgCgMIgBgMQAAgLADgKQACgIAHgIQAGgHAJgCQASgFAQAJIAOAJQALAIAHAJIAMAQIAMAXIAIAYIABAHIABALIAAAAQABAGgCAIQAAAGgEAHIgHAKQgDAEgEACIgKAEIgIABIgDAAgAAEBCQATAOAWgKQARgKAAgeQgCgegQgbQgPgagbgRQgSgOgWALQgOAIgCAWQABgKAHgIIgCADQgEAHgBAHIAAAGIAAALQAAAGABAFIADALQADAKAHAMIAGAKIAPATIAIAIIANAKIALAFIAHACIAJAAIAGgCQgTAHgPgLg");
	this.shape_7.setTransform(9.5,9.2);

	var maskedShapeInstanceList = [this.shape,this.shape_1,this.shape_2,this.shape_3,this.shape_4,this.shape_5,this.shape_6,this.shape_7];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.ClipGroup_3, new cjs.Rectangle(1.8,1.1,14.1,17.2), null);


(lib.ClipGroup_2_0 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AAKBWQgDgJADgJQACgJAIgFQAJgFAIAGIAAggIgaAAIAAgfIgsAAIAAAKIgmAWIgNAAQgCgKAAgNQAAgnAZgdQAagdAjAAQAkAAAaAdQAZAcAAAoQABAZgMAWQgLAXgUAOQgMAIgPAEQgGgFgCgGg");
	mask.setTransform(8.7,9.7);

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AAdAHIgHgHQgGgGgJgHQgPgMgSgBIgNACIgEABIAEgBQAGgDAHAAQAJAAAJADQAIAEAJAGQAPAMALAPIAJAPg");
	this.shape.setTransform(8.2,5.2);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#BDBDBD").s().p("AABBEQgagQgPgbQgQgagCgfQAAgdARgKQAWgKATAOQAZAQAQAbQAQAaACAfQABAcgSALQgJAEgIAAQgNAAgLgIgAgchHIgHACQgQAKAAAbQABAdAPAZQAPAYAYAQQASANAVgJIAHgGQADgFABgDIACgJQACgFAAgGIgDgWIgCgGQgJgcgVgXQgJgJgOgJIgJgEQgGgCgEAAIgEgBIgFABg");
	this.shape_1.setTransform(7.8,10.4);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#9E9E9E").s().p("AgBBJQgLgHgJgIQgIgIgJgLQgQgWgGgZIgCgMIgBgMQAAgLADgKQADgKAGgGQAGgHAJgDQASgEAQAJIAOAJQAKAIAIAJQAHAIAFAIIAGALIALAXIAEAUIABALIAAAAIgBAOIgEANIgHAKQgDAEgFACQgGADgEABIgKABQgOgCgLgGgAAtBGQARgKAAgeQgCgegQgbQgPgagbgRQgSgOgWALQgOAIgCAWQABgIAFgHIAAAAQgDAGgCAIIAAAGQgBAFABAGQAAAGABAFIADALQAEAMAGAKIAGALIAPATIAIAHQAFAFAIAFIALAFIAHACIAKAAQgNADgMgGQATAMAUgKg");
	this.shape_2.setTransform(8.2,10.2);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#E3E3E3").s().p("AAZAFQgGgHgJgGQgOgMgTgBQgHgBgGACIgEACIAEgCQAGgDAHAAQAKAAAHAEQAKAEAIAGQAPALALAQIADAGg");
	this.shape_3.setTransform(9.2,3.6);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#A6A6A6").s().p("AABBEQgZgQgQgbQgQgagCgfQgBgcASgLQAWgKATANQAZARAQAbQAQAaACAfQABAcgSALQgJAEgJAAQgMAAgLgIgAgjhFQgQAKAAAbQACAdAOAYQAPAaAYAPQASANAVgJQADgCADgEIAFgJIACgIIACgMIgDgVIgCgGQgKgegVgVQgKgLgMgHIgKgFIgKgCIgIAAIgHADg");
	this.shape_4.setTransform(9.1,9.4);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#949494").s().p("AAABJQgLgGgJgJQgIgHgJgNQgQgUgHgaIgCgMIgBgMQAAgLADgLQADgJAGgHQAHgHAIgCQASgEAQAJIAOAJQAKAHAIAKIAMAQIAGALIALAXIAEAUIABALIAAAAIgBAOIgEANIgDAGIgEAEIgHAGIgKAEIgLABQgPgCgJgGgAAtBGQARgKAAgeQgCgegQgbQgPgagbgRQgSgOgWAKQgOAJgCAWQABgKAHgIIgCADQgDAGgCAIIAAAGIAAAKIABAMIADALQAFANAFAJIAGAKIAHAKIAQARIANAKIALAFIAHACIAJAAQgOACgMgHQAUAOAVgKgAAeBHIABAAIgBAAgAAeBHgAAfBGIAAABg");
	this.shape_5.setTransform(9.4,9.2);

	var maskedShapeInstanceList = [this.shape,this.shape_1,this.shape_2,this.shape_3,this.shape_4,this.shape_5];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.ClipGroup_2_0, new cjs.Rectangle(1.8,1.1,14.1,17.2), null);


(lib.ClipGroup_2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AlEC9QiHhPgBhuQAAhtCGhPQCHhOC/AAQC9AACIBOQCHBPABBtQAABuiGBPQiHBOi/AAQi+AAiHhOg");
	mask.setTransform(46.1,26.7);

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#4CBAAA").s().p("AnNDJIOVmdIAGAMIuVGdg");
	this.shape.setTransform(48.9,28.7);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#4CBAAA").s().p("AnbCsIOWmgIAhBJIuWGgg");
	this.shape_1.setTransform(54,38.3);

	var maskedShapeInstanceList = [this.shape,this.shape_1];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.ClipGroup_2, new cjs.Rectangle(2.8,7.4,89.4,46), null);


(lib.ClipGroup_1_0 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AiMCuQhyhfhah4IEtjwQBqgPBvBmQBpBfBCCZIkECXIABgBQglAWgNAqQgDAJgEAHQhHgfhihPg");
	mask.setTransform(34.5,28.4);

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#BFA347").s().p("AAACLQgygdgjg9Qgkg8ABg6QAAg6AjgUQAkgVAxAdQAyAdAkA+QAjA8AAA6QAAA5gjAVQgPAIgRAAQgZAAgdgRgAhJh+QgfARAAAyQAAAyAfA0QAeA0ArAZQArAaAfgSQAfgSAAgyQAAgxgfg1Qgeg0gsgZQgYgPgVAAQgPAAgNAIg");
	this.shape.setTransform(24.6,46.1);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#A6C5C5").s().p("AAADUQhMgsg2hdQg2hcABhYQAAhYA2gfQA2gfBMAsQBMAtA2BdQA2BcgBBYQAABXg2AfQgWANgaAAQgmAAgsgagAhViTQgjAVAAA5QgBA6AkA8QAjA9AyAdIAAABQAyAdAkgVQAjgUAAg6QAAg6gjg8Qgkg9gygdQgcgRgZAAQgRAAgPAIg");
	this.shape_1.setTransform(24.6,46.1);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#D4F5F5").s().p("ABRDgQAOgfAAgrQAAhYg1hcQg1hdhMgsQgmgWgjgDQgfgDgaAOIB5hHQAZgPAiADQAjADAlAWQBLAsA2BdQA2BeAABWQAAArgPAfQgNAegaAOIh3BGQAXgOANgcg");
	this.shape_2.setTransform(33.5,41.7);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#6E602B").s().p("AgDCFQgUgBgVgNQgsgZgeg1Qgfg0AAgyIB7hIQAAAyAdA1QAfA0ArAZQArAZAegQIh5BGQgMAIgQAAIgEgBg");
	this.shape_3.setTransform(29.2,46.2);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#655A28").s().p("AgsACIB4hGQgcARgBAxIh6BHQABgyAegRg");
	this.shape_4.setTransform(21.7,33.2);

	var maskedShapeInstanceList = [this.shape,this.shape_1,this.shape_2,this.shape_3,this.shape_4];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.ClipGroup_1_0, new cjs.Rectangle(6.2,15.2,49.1,41.6), null);


(lib.ClipGroup_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AgCB1QhTgBg6gjQg6gjABgvQABgwA8giQA7ghBTAAQBTABA6AjQA6AjgBAvQgBAwg8AiQg7AhhRAAIgCAAg");
	mask.setTransform(42.3,11.7);

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#292929").s().p("AmDAvIAAhdIMHAAIAABdg");
	this.shape.setTransform(40.5,20.4);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#292929").s().p("AmDAQIAAgfIMHAAIAAAfg");
	this.shape_1.setTransform(38.8,6.1);

	var maskedShapeInstanceList = [this.shape,this.shape_1];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.ClipGroup_1, new cjs.Rectangle(22.2,4.5,40.2,18.9), null);


(lib.ClipGroup_0 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AkUFKIklipQgJgFAAgJQAAgIAJgGIMdnOQAYgMAYAMIElCpQAKAFAAAJQAAAIgKAGIsdHOQgMAGgMAAQgMAAgMgGg");
	mask.setTransform(77.2,33.6);

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#292929").s().p("ApfALIAAgVIS/AAIAAAVg");
	this.shape.setTransform(60.9,50.9);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#292929").s().p("ApfAhIAAhBIS/AAIAABBg");
	this.shape_1.setTransform(101.6,16.3);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#292929").s().p("ApfA+IAAh7IS/AAIAAB7g");
	this.shape_2.setTransform(60.8,61.9);

	var maskedShapeInstanceList = [this.shape,this.shape_1,this.shape_2];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.ClipGroup_0, new cjs.Rectangle(19.3,13,115.9,54.3), null);


(lib.ClipGroup = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AoLmjIMWnfQAEgDAAgDID9UsQABADgFADIsWHfg");
	mask.setTransform(64.4,90.5);

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#424242").s().p("AphhuIBwkCIRTHfIhvECg");
	this.shape.setTransform(61,118.5);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#424242").s().p("Ao3jPIAchBIRTHgIgcBBg");
	this.shape_1.setTransform(61.2,77.9);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#424242").s().p("AovjjIALgZIRUHfIgLAag");
	this.shape_2.setTransform(62.5,55.2);

	var maskedShapeInstanceList = [this.shape,this.shape_1,this.shape_2];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.ClipGroup, new cjs.Rectangle(12.1,29.9,104.8,125.5), null);


(lib.Swingingbreifcase = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Tween7("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(5.8,3.8,1,1,-3,0,0,-8.8,-39.2);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({regX:-8.7,rotation:5.5,x:5.9},11).to({regX:-8.8,rotation:-3,x:5.8},12).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0.3,0.1,32.4,85.9);


(lib.Strokethechin = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2
	this.instance = new lib.Tween10("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(2.9,35.8,1,1,0,0,0,-11.3,-3.1);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({rotation:6.7,x:2.8},9).to({rotation:0,x:2.9},9).wait(1));

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#775A46").s().p("Ag+A4QgPgqgDgUQgFgfALgTQAOgYA1gRQAxgQATAIQAFACABAHIACAOIAIAPQAFAKABAGIgOgMQgJgHgFAFQgFAJgLAEQgHACgVgBQgQgBgOAIQgPAKgFARQgFARAJAPQAFAHAGAFIgDATQgEgIgGgDQgFgEgEACQgEACABAIQAAAIAFAIQAFAKALAFQAAATAMAPQghgRgNgjg");
	this.shape.setTransform(16.1,10.9);

	this.instance_1 = new lib.ClipGroup_17();
	this.instance_1.parent = this;
	this.instance_1.setTransform(11.1,38.2,1,1,0,0,0,8.6,8.1);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#3D3D3D").s().p("AgqASIgGABIARgvQAPgTAfAFQAhAFABAWQgEAXgIAkQgjgagsAAg");
	this.shape_1.setTransform(21.9,36.7);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#E2BEA3").s().p("AgSBYQgugbgSgyQgRgvAFgaQAFgbAfgRQAUgKAdAAQAdAAAVANQAZAQAUA1QAQAxgKAyQgCALADASQgCAOgeAIIgKABQgaAAgrgdg");
	this.shape_2.setTransform(18.1,14);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#3B3B3B").s().p("AABAoIAEgqIgXgLQgHgMgFgOQgKgcAHgJQAEgFAGgWQAFgUADgBQgBARAUArQAYAxACAPQAEAYADBlg");
	this.shape_3.setTransform(15.1,38.8);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#F7F7F7").s().p("AgUAAQAGgDAGgFQAKgKAAgKIAAgKQALAOAGAKQADAagDAbg");
	this.shape_4.setTransform(23.1,29.7);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#FFFFFF").s().p("AgngaQABgOAIgMQgCASAfANQAcAMANgEIgdBCQgxg4gBgXg");
	this.shape_5.setTransform(17,31);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#B5B5B5").s().p("AgVBAIgfhtIBOgSIAbAbIAABkg");
	this.shape_6.setTransform(19.3,35.9);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#C2A28B").s().p("AgSBEQgYgOgEgXQgDgQgDgiIgCghIBlgZIAHBdQACASgBAJQgDAYgSAHQgKAEgKAAQgQAAgQgKg");
	this.shape_7.setTransform(18.8,23.6);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#616161").s().p("AAsA8QgjgGgogRQgvgVgZgKQgTgIAFgcQAEgdAVgBQAjgBAzAMQAaAGA9ATQATAGAKAMQAJAJAAALQAAASgVAQQgSANgWAAIgOgBg");
	this.shape_8.setTransform(30,48.3);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#C83203").s().p("AgSBoIAHjaIANgFIARDTIgRAcg");
	this.shape_9.setTransform(21.9,49.1);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#A6A6A6").s().p("AgFA/IAKjpIgFEgIgDAnIgBAPg");
	this.shape_10.setTransform(21.4,59.4);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#3B3B3B").s().p("AgMALIAGg3QAFg5gJgMQACAAAFAIQAEAHACAHQAIAWAGAjIgOAXIAIApIgbBUQAEhAAAgng");
	this.shape_11.setTransform(25.8,37.4);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#4D4D4D").s().p("Ah/EAQgBgFAHg0QAHg6gHhaQgCgRgQg+QgRhAgCghQgEgcAPgaQAOgZAbgMQA6gbAzgRQAqgLAwgCQAbAAAUATQAVATgBAaQgCAYgVBNQgUBHAABKQABAsAIA2QAJA3AAAMQAAANgpAYQgUALgUAJIgOgJIgPARQgkAFgmABIgOABQg+AAgCgSg");
	this.shape_12.setTransform(16.9,51.5);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#545454").s().p("AAICDQgVghgYg7QgbhCgOgiQgLgYAHgYQAHgXARgIQATgIAXALQAZAMAJAcIAlBhQAVA6AJAnQAGAZgiAQQgOAGgKAAQgQAAgJgNg");
	this.shape_13.setTransform(33.2,39.2);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.instance_1},{t:this.shape}]}).wait(19));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,41.9,78.9);


(lib.PointyArm = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Tween5("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(3.7,52.2,1,1,0,0,0,-18,24.9);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({regX:-17.9,regY:24.8,rotation:60},9).to({regX:-18,regY:24.9,rotation:0},80).to({regX:-17.9,rotation:39.7},10).to({startPosition:0},44).to({regX:-18,rotation:0},21).wait(42));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,43.4,54.5);


(lib.PattingArm = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Tween6("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(1.7,4.3,1,1,0,0,0,-26.4,-4.2);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({regY:-4.1,rotation:-7.5,y:4.4},6).to({regY:-4.2,rotation:0,y:4.3},5).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,56.1,16.9);


(lib.ManWithPencil = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 5
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#525252").s().p("AgaAEIAlgWIARAEIg3Ahg");
	this.shape.setTransform(-67.6,96.2);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#525252").s().p("AgZgaIARADIAiAoIAAAIIgFADg");
	this.shape_1.setTransform(-77.6,89.8);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#525252").s().p("AgbAPIA3ghIgBAPIgkAWg");
	this.shape_2.setTransform(-77.4,85.4);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#525252").s().p("AgaAEIAkgWIASAEIg3Ahg");
	this.shape_3.setTransform(-74.7,100.6);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#525252").s().p("AAJAXIgignIAAgHIAFgEIAvA3g");
	this.shape_4.setTransform(-74.5,96.2);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#525252").s().p("AgXgZIAFgDIAIACIAiAnIAAAQg");
	this.shape_5.setTransform(-72.9,95.2);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#525252").s().p("AgXAOIABgHIAkgWIAJABIAAAIIglAXg");
	this.shape_6.setTransform(-79.6,95.2);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#525252").s().p("AgZgbIARAFIAjAnIgBAIIgFACg");
	this.shape_7.setTransform(-84.6,94.1);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#525252").s().p("AgbAPIA3ghIgBAPIgkAWg");
	this.shape_8.setTransform(-84.5,89.8);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#525252").s().p("AALAbIgignIAAgQIAvA2IgFADg");
	this.shape_9.setTransform(-72.1,86.4);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#525252").s().p("AAJAXIgignIAAgIIAFgCIAuA1g");
	this.shape_10.setTransform(-67.5,91.8);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#525252").s().p("AgbAPIA3ghIgBAPIgkAWg");
	this.shape_11.setTransform(-84.5,89.8);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#525252").s().p("AALAbIgignIAAgQIAvA2IgFADg");
	this.shape_12.setTransform(-72.1,86.4);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#525252").s().p("AAJAXIgignIAAgIIAFgCIAuA1g");
	this.shape_13.setTransform(-67.5,91.8);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#525252").s().p("AALAbIgigoIAAgPIAvA2IgEADg");
	this.shape_14.setTransform(-93.4,99.5);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#525252").s().p("AAJAXIgignIAAgHIAEgDIAwA2g");
	this.shape_15.setTransform(-88.7,105);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#525252").s().p("AgWAPIAAgIIAlgXIAIACIAAAIIgkAXg");
	this.shape_16.setTransform(-93.8,103.9);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#525252").s().p("AgaAEIAlgWIARAEIg3Ahg");
	this.shape_17.setTransform(-88.9,109.3);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#525252").s().p("AgbAPIA3ghIgBAPIgkAWg");
	this.shape_18.setTransform(-84.5,89.8);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_10,p:{x:-67.5,y:91.8}},{t:this.shape_9,p:{x:-72.1,y:86.4}},{t:this.shape_8,p:{x:-84.5,y:89.8}},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2,p:{x:-77.4,y:85.4,rotation:0}},{t:this.shape_1},{t:this.shape,p:{rotation:0,x:-67.6,y:96.2}}]}).to({state:[{t:this.shape_13},{t:this.shape_12},{t:this.shape_11,p:{x:-84.5,y:89.8}},{t:this.shape_7},{t:this.shape_9,p:{x:-86.3,y:95.1}},{t:this.shape_8,p:{x:-91.5,y:94.1}},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2,p:{x:-77.4,y:85.4,rotation:0}},{t:this.shape_1},{t:this.shape_10,p:{x:-81.6,y:100.6}},{t:this.shape,p:{rotation:0,x:-67.6,y:96.2}}]},49).to({state:[{t:this.shape_13},{t:this.shape_12},{t:this.shape_18},{t:this.shape_7},{t:this.shape_9,p:{x:-86.3,y:95.1}},{t:this.shape_11,p:{x:-91.5,y:94.1}},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_8,p:{x:-77.4,y:85.4}},{t:this.shape_1},{t:this.shape_10,p:{x:-81.6,y:100.6}},{t:this.shape_17},{t:this.shape_16,p:{rotation:0,x:-93.8,y:103.9}},{t:this.shape_15,p:{rotation:0,x:-88.7,y:105}},{t:this.shape_2,p:{x:-98.6,y:98.5,rotation:0}},{t:this.shape_14,p:{rotation:0,x:-93.4,y:99.5}},{t:this.shape,p:{rotation:0,x:-67.6,y:96.2}}]},49).to({state:[{t:this.shape_13},{t:this.shape_12},{t:this.shape_18},{t:this.shape_7},{t:this.shape_9,p:{x:-86.3,y:95.1}},{t:this.shape_11,p:{x:-91.5,y:94.1}},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_8,p:{x:-77.4,y:85.4}},{t:this.shape_1},{t:this.shape_10,p:{x:-81.6,y:100.6}},{t:this.shape_17},{t:this.shape_16,p:{rotation:0,x:-93.8,y:103.9}},{t:this.shape_15,p:{rotation:0,x:-88.7,y:105}},{t:this.shape_2,p:{x:-98.6,y:98.5,rotation:0}},{t:this.shape_14,p:{rotation:0,x:-93.4,y:99.5}},{t:this.shape,p:{rotation:0,x:-67.6,y:96.2}}]},6).to({state:[{t:this.shape_13},{t:this.shape_12},{t:this.shape_18},{t:this.shape_7},{t:this.shape_9,p:{x:-86.3,y:95.1}},{t:this.shape_11,p:{x:-91.5,y:94.1}},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_8,p:{x:-77.4,y:85.4}},{t:this.shape_1},{t:this.shape_10,p:{x:-81.6,y:100.6}},{t:this.shape_17},{t:this.shape_16,p:{rotation:0,x:-93.8,y:103.9}},{t:this.shape_15,p:{rotation:0,x:-88.7,y:105}},{t:this.shape_2,p:{x:-98.6,y:98.5,rotation:0}},{t:this.shape_14,p:{rotation:0,x:-93.4,y:99.5}},{t:this.shape,p:{rotation:0,x:-67.6,y:96.2}}]},6).to({state:[{t:this.shape,p:{rotation:180,x:-77.3,y:85.7}},{t:this.shape_16,p:{rotation:180,x:-72.5,y:91.2}},{t:this.shape_15,p:{rotation:180,x:-77.5,y:90.1}},{t:this.shape_2,p:{x:-67.6,y:96.5,rotation:180}},{t:this.shape_14,p:{rotation:180,x:-72.9,y:95.6}}]},6).to({state:[]},3).to({state:[{t:this.shape,p:{rotation:180,x:-77.3,y:85.7}},{t:this.shape_16,p:{rotation:180,x:-72.5,y:91.2}},{t:this.shape_15,p:{rotation:180,x:-77.5,y:90.1}},{t:this.shape_2,p:{x:-67.6,y:96.5,rotation:180}},{t:this.shape_14,p:{rotation:180,x:-72.9,y:95.6}}]},3).to({state:[]},3).to({state:[{t:this.shape,p:{rotation:180,x:-77.3,y:85.7}},{t:this.shape_16,p:{rotation:180,x:-72.5,y:91.2}},{t:this.shape_15,p:{rotation:180,x:-77.5,y:90.1}},{t:this.shape_2,p:{x:-67.6,y:96.5,rotation:180}},{t:this.shape_14,p:{rotation:180,x:-72.9,y:95.6}}]},3).to({state:[]},3).to({state:[{t:this.shape,p:{rotation:180,x:-77.3,y:85.7}},{t:this.shape_16,p:{rotation:180,x:-72.5,y:91.2}},{t:this.shape_15,p:{rotation:180,x:-77.5,y:90.1}},{t:this.shape_2,p:{x:-67.6,y:96.5,rotation:180}},{t:this.shape_14,p:{rotation:180,x:-72.9,y:95.6}}]},3).to({state:[]},3).to({state:[{t:this.shape,p:{rotation:180,x:-77.3,y:85.7}},{t:this.shape_16,p:{rotation:180,x:-72.5,y:91.2}},{t:this.shape_15,p:{rotation:180,x:-77.5,y:90.1}},{t:this.shape_2,p:{x:-67.6,y:96.5,rotation:180}},{t:this.shape_14,p:{rotation:180,x:-72.9,y:95.6}}]},3).to({state:[]},3).to({state:[{t:this.shape,p:{rotation:180,x:-77.3,y:85.7}},{t:this.shape_16,p:{rotation:180,x:-72.5,y:91.2}},{t:this.shape_15,p:{rotation:180,x:-77.5,y:90.1}},{t:this.shape_2,p:{x:-67.6,y:96.5,rotation:180}},{t:this.shape_14,p:{rotation:180,x:-72.9,y:95.6}}]},3).to({state:[{t:this.shape,p:{rotation:180,x:-77.3,y:85.7}},{t:this.shape_16,p:{rotation:180,x:-72.5,y:91.2}},{t:this.shape_15,p:{rotation:180,x:-77.5,y:90.1}},{t:this.shape_2,p:{x:-67.6,y:96.5,rotation:180}},{t:this.shape_14,p:{rotation:180,x:-72.9,y:95.6}}]},3).wait(1));

	// Layer 1
	this.instance = new lib.Tween1("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(95.8,105.7,1,1,0,0,0,36.3,42.3);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({startPosition:0},39).to({regY:42.4,rotation:-6.2,y:105.8},10).to({startPosition:0},4).to({regX:36.4,rotation:8.8},7).to({startPosition:0},35).to({regY:42.3,rotation:-4.4,x:95.9,y:105.7},3).to({regX:36.3,rotation:0,x:95.8},3).to({regX:36.4,rotation:-4.4,x:95.9},3).to({regX:36.3,rotation:0,x:95.8},3).to({regX:36.4,rotation:-4.4,x:95.9},3).to({regX:36.3,rotation:0,x:95.8},3).to({regX:36.4,regY:42.4,rotation:8.8,y:105.8},3).to({regY:42.3,rotation:-4.4,x:95.9,y:105.7},3).to({regX:36.3,rotation:0,x:95.8},3).to({regX:36.4,rotation:-4.4,x:95.9},3).to({regX:36.3,rotation:0,x:95.8},3).to({regX:36.4,rotation:-4.4,x:95.9},3).to({regX:36.3,rotation:0,x:95.8},3).to({startPosition:0},8).wait(8));

	// Layer 6
	this.instance_1 = new lib.Tween4("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(71.5,73,1,1,0,0,0,0,-15);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({startPosition:0},39).to({regX:0.1,regY:-14.9,rotation:15,x:68.5,y:78.1},10).to({rotation:0},2).to({rotation:15},2).to({rotation:30,x:76.5,y:73.6},7).to({rotation:-15,y:73.5},5).to({rotation:15},3).to({rotation:-15},3).to({rotation:0},2).to({startPosition:0},22).to({rotation:-15,x:69,y:76.5},3).to({regY:-14.8,rotation:15,x:72,y:75.1},3).to({regY:-14.9,rotation:-15,x:69,y:76.5},3).to({regY:-14.8,rotation:15,x:72,y:75.1},3).to({regY:-14.9,rotation:-15,x:69,y:76.5},3).to({regY:-14.8,rotation:15,x:72,y:75.1},3).to({regY:-14.9,rotation:-15,x:69,y:76.5},3).to({regY:-14.8,rotation:15,x:72,y:75.1},3).to({regY:-14.9,rotation:-15,x:69,y:76.5},3).to({regY:-14.8,rotation:15,x:72,y:75.1},3).to({regY:-14.9,rotation:-15,x:69,y:76.5},3).to({regY:-14.8,rotation:15,x:72,y:75.1},3).to({regX:0,regY:-15,rotation:0,x:71.5,y:73},3).wait(16));

	// Button
	this.instance_2 = new lib.Tween2("synched",0);
	this.instance_2.parent = this;
	this.instance_2.setTransform(18.1,130.6);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).to({startPosition:0},44).to({y:132.3},5).to({startPosition:0},4).to({y:130.6},2).to({startPosition:0},40).to({y:132.3},3).to({y:130.6},3).to({y:132.3},3).to({y:130.6},3).to({y:132.3},3).to({y:130.6},3).to({startPosition:0},3).to({y:132.3},3).to({y:130.6},3).to({y:132.3},3).to({y:130.6},3).to({y:132.3},3).to({y:130.6},3).wait(16));

	// Layer 4
	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#6F8285").s().p("AAOBCIi7hrQgGgDgBgGIAAgUQABAHAGACIC7BrQAQAJAQgJICAhJQAGgDABgGIAAAUQAAAGgHADIiABJQgIAFgIAAQgIAAgIgFg");
	this.shape_19.setTransform(18.1,136);

	this.timeline.addTween(cjs.Tween.get(this.shape_19).wait(150));

	// Layer 3
	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("rgba(0,0,0,0.298)").s().p("AhtATQgKAAgIgFQgGgCgBgIIAAgIQAAgFAHgEQAHgFAKAAIDQAAIACACQAXALAMAYg");
	this.shape_20.setTransform(34.7,132.8);

	this.timeline.addTween(cjs.Tween.get(this.shape_20).wait(150));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-87.3,0,195.3,143);


(lib.Manwavingandbriefcase = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 4
	this.instance = new lib.Tween9("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(63.8,11.1);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({startPosition:0},15).to({rotation:-15,x:63},5).to({startPosition:0},22).to({rotation:-30,x:61.8,y:11.7},5).to({startPosition:0},24).to({rotation:0,x:63.8,y:11.1},5).wait(7));

	// Layer 2
	this.instance_1 = new lib.Swingingbreifcase();
	this.instance_1.parent = this;
	this.instance_1.setTransform(81.8,72.7,1,1,0,0,0,14.6,43);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(83));

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#404040").s().p("Ag6BHQAOg6AHgOQAJgQAtgzQAjgngDgTIAJAXQAHAXAFAFQAJAJgoAiIgpAgIgGAnIg/BYIANg4g");
	this.shape.setTransform(62.2,34.8);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#404040").s().p("AgbAJIALgZIgHgWIAYglQAZglACAAQgGAKgLAzQgJAqgCAQIgKA9IgJAtg");
	this.shape_1.setTransform(53.1,33.6);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#F7F7F7").s().p("AgSgYQAHgNALgNQgCAEAAAGQABALANANQAIAGAHAEIg1A5QAEg3AEgUg");
	this.shape_2.setTransform(56.6,26.7);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#245E9E").s().p("AgGARIgEgYIAPgMIAGAdIgNAJIgBABQgBAAgBAAQAAAAgBgBQAAAAAAAAQAAgBAAgBg");
	this.shape_3.setTransform(58.8,28);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#F7F7F7").s().p("AgpgHQAOAEAdgOQAhgPgDgTQAIAMACAPQAAAPgkAgIgjAdg");
	this.shape_4.setTransform(63.5,26.7);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#565656").s().p("AguDaQgEg0ADh9QADisAVgxQAQgmAUgUQANgMAXgMQgNANgJAWQgMAdgBAiIgBBDQgCAkgFARQgLArgBCGQgBB7AGAHQgegQgPgdg");
	this.shape_5.setTransform(50.3,51.2);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#565656").s().p("AhrD6QgHgCABh+QACiEANgsQAMgpA4hgQA4hiAIANQAFAIAQAKIAWAOQA1ApgYBXIgXBHQgNApAAAXQACB0AYBzQgFAdhZAAQhXAAgWgdg");
	this.shape_6.setTransform(65,53.2);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#317CD4").s().p("AgwCFQAbjGA2hjIAQAFQgxBxgGDEIgZAPg");
	this.shape_7.setTransform(54.8,44.6);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#E6E6E6").s().p("AgTDvQhWgTACgeQAgj1Ari+ICEARIgJHCQgRAYgrAAQgYAAgegHg");
	this.shape_8.setTransform(57.4,49.9);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#CCAB93").s().p("Ag/A8QABgLADgIIAfhvIBcAwIgPAlQAFAbgEAbIgaACg");
	this.shape_9.setTransform(61.9,20.1);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(83));

	// Layer 3
	this.instance_2 = new lib.Tween8("synched",0);
	this.instance_2.parent = this;
	this.instance_2.setTransform(53.9,31.8,1,1,0,0,0,25.2,12.9);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).to({startPosition:0},24).to({regX:25.1,regY:13,rotation:-96.3,x:56.5},6).to({rotation:-72.9},19).to({rotation:-102.9,x:57.4},8).to({startPosition:0},18).to({regX:25.2,regY:12.9,rotation:0,x:53.9},7).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,100.6,115.7);


(lib.Laptopman = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2
	this.instance = new lib.Tween11("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(53.2,56.4,1,1,0,0,0,11.8,-5.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({startPosition:0},26).to({regX:11.9,rotation:4.7,x:53.3},3).to({regX:11.8,rotation:-4.5,x:53.2},3).to({rotation:0},3).to({rotation:7,y:56.5},3).to({regX:11.9,rotation:-5.2,x:53.3,y:56.3},4).to({rotation:15,y:56.5},2).to({rotation:5.2},4).to({rotation:4.2,y:56.4},4).to({regX:11.8,rotation:-4.2,x:53.2},4).to({rotation:4.7},3).to({rotation:0},3).wait(73));

	// Layer 3
	this.instance_1 = new lib.Tween12("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(36.9,20.7,1,1,0,0,0,3.5,8.4);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({startPosition:0},19).to({regX:3.4,rotation:-30,y:20.6},5).to({startPosition:0},46).to({regX:3.5,rotation:0,y:20.7},5).wait(60));

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#8D0F00").s().p("AgCAOIgIgMQgBgBAAAAQAAAAAAgBQAAAAAAAAQAAgBABAAIAIgMIABgBQACgDACAEIAIAMQAAAAABABQAAAAAAAAQAAABAAAAQgBAAAAABIgIAMIgBABIgCABQAAAAAAAAQgBAAAAAAQAAgBgBAAQAAAAAAgBg");
	this.shape.setTransform(28.9,28.2);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#ECC7AB").s().p("AAAAUQgQgIgGgIQgFgOAKgLQAGgGANAGQAMAGAFAIQADAGACAJQACAMgEADQgCACgEAAQgHAAgJgFg");
	this.shape_1.setTransform(8.5,63.1);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#ECC7AB").s().p("AABAMQgGgCgBgEQgDgIADgIQABgEAEACQADACABAEIAEAJQACADAAAEQAAABgBABQAAAAAAABQAAAAgBAAQgBAAAAAAIgFgBg");
	this.shape_2.setTransform(5.5,61.8);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#CFCFCF").s().p("ACECIIjah/QgFgDgCgGIgsiEQAAAAABgBQAAAAAAgBQAAAAAAAAQABgBAAAAQAAAAABAAQABAAAAAAQABAAAAAAQABAAAAABIDbB/QAFADAAAGIAtCDQAAAAgBABQAAAAAAABQAAAAAAAAQgBABAAAAIgCAAIgCAAg");
	this.shape_3.setTransform(13.8,61.2);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#FFFFFF").s().p("ACFCHIgsiDQAAgGgGgDIjah/IgEgBIAHgDQAAgBABAAQAAAAABAAQAAAAABAAQAAAAABABIDaB+QAGAEAAAGIAsCCQAAABAAAAQAAABAAAAQAAABgBAAQAAABgBAAIgHAEQABAAAAgBQAAAAAAAAQABgBAAAAQAAgBAAAAg");
	this.shape_4.setTransform(14.2,60.9);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAGIgJAFg");
	this.shape_5.setTransform(31.1,69.9);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAGIgJAFg");
	this.shape_6.setTransform(16.3,58.4);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgJAGg");
	this.shape_7.setTransform(15.1,59.1);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgJAGg");
	this.shape_8.setTransform(13.6,58.2);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAGIgJAFg");
	this.shape_9.setTransform(14.8,57.5);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgJAGg");
	this.shape_10.setTransform(16,56.8);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgJAGg");
	this.shape_11.setTransform(19,58.6);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAGIgJAFg");
	this.shape_12.setTransform(17.5,57.7);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAGIgJAFg");
	this.shape_13.setTransform(18.7,57);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAGIgJAFg");
	this.shape_14.setTransform(17.2,56.1);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgJAGg");
	this.shape_15.setTransform(24.8,61.9);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgJAGg");
	this.shape_16.setTransform(23.3,61.1);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAGIgJAFg");
	this.shape_17.setTransform(24.5,60.4);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAGIgKAFg");
	this.shape_18.setTransform(27.4,62);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgJAGg");
	this.shape_19.setTransform(26,61.2);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAGIgKAFg");
	this.shape_20.setTransform(31.7,64.5);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgJAGg");
	this.shape_21.setTransform(30.5,65.3);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgJAGg");
	this.shape_22.setTransform(33.1,65.4);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAGIgJAFg");
	this.shape_23.setTransform(36,67);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgJAGg");
	this.shape_24.setTransform(34.8,67.8);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgJAGg");
	this.shape_25.setTransform(34.6,66.2);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAGIgJAFg");
	this.shape_26.setTransform(33.4,66.9);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAGIgKAFg");
	this.shape_27.setTransform(32.2,67.6);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgJAGg");
	this.shape_28.setTransform(33.6,68.4);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAGIgJAFg");
	this.shape_29.setTransform(32.4,69.1);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgJAGg");
	this.shape_30.setTransform(29.7,69);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgJAGg");
	this.shape_31.setTransform(30.9,68.3);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgJAGg");
	this.shape_32.setTransform(28.3,68.2);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAGIgJAFg");
	this.shape_33.setTransform(29.5,67.5);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAGIgJAFg");
	this.shape_34.setTransform(26.8,67.4);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAGIgJAFg");
	this.shape_35.setTransform(28.1,66.6);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgKAGg");
	this.shape_36.setTransform(25.4,66.5);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAGIgJAFg");
	this.shape_37.setTransform(29.3,65.9);

	this.shape_38 = new cjs.Shape();
	this.shape_38.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAGIgJAFg");
	this.shape_38.setTransform(26.6,65.8);

	this.shape_39 = new cjs.Shape();
	this.shape_39.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAGIgKAFg");
	this.shape_39.setTransform(27.9,65.1);

	this.shape_40 = new cjs.Shape();
	this.shape_40.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgJAGg");
	this.shape_40.setTransform(25.2,65);

	this.shape_41 = new cjs.Shape();
	this.shape_41.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgJAGg");
	this.shape_41.setTransform(29.1,64.4);

	this.shape_42 = new cjs.Shape();
	this.shape_42.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgJAGg");
	this.shape_42.setTransform(26.4,64.3);

	this.shape_43 = new cjs.Shape();
	this.shape_43.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAGIgJAFg");
	this.shape_43.setTransform(23.8,64.1);

	this.shape_44 = new cjs.Shape();
	this.shape_44.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgJAGg");
	this.shape_44.setTransform(27.6,63.6);

	this.shape_45 = new cjs.Shape();
	this.shape_45.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAGIgJAFg");
	this.shape_45.setTransform(25,63.4);

	this.shape_46 = new cjs.Shape();
	this.shape_46.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAGIgJAFg");
	this.shape_46.setTransform(22.3,63.3);

	this.shape_47 = new cjs.Shape();
	this.shape_47.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAGIgJAFg");
	this.shape_47.setTransform(26.2,62.8);

	this.shape_48 = new cjs.Shape();
	this.shape_48.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgJAGg");
	this.shape_48.setTransform(23.5,62.6);

	this.shape_49 = new cjs.Shape();
	this.shape_49.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgJAGg");
	this.shape_49.setTransform(22.5,64.9);

	this.shape_50 = new cjs.Shape();
	this.shape_50.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgJAGg");
	this.shape_50.setTransform(24,65.7);

	this.shape_51 = new cjs.Shape();
	this.shape_51.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgJAGg");
	this.shape_51.setTransform(22.1,61.8);

	this.shape_52 = new cjs.Shape();
	this.shape_52.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgKAGg");
	this.shape_52.setTransform(20.9,62.5);

	this.shape_53 = new cjs.Shape();
	this.shape_53.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgJAGg");
	this.shape_53.setTransform(19.7,63.2);

	this.shape_54 = new cjs.Shape();
	this.shape_54.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgJAGg");
	this.shape_54.setTransform(18.2,62.4);

	this.shape_55 = new cjs.Shape();
	this.shape_55.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgJAGg");
	this.shape_55.setTransform(16.8,61.5);

	this.shape_56 = new cjs.Shape();
	this.shape_56.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgJAGg");
	this.shape_56.setTransform(15.3,60.7);

	this.shape_57 = new cjs.Shape();
	this.shape_57.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAGIgJAFg");
	this.shape_57.setTransform(13.9,59.8);

	this.shape_58 = new cjs.Shape();
	this.shape_58.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAGIgJAFg");
	this.shape_58.setTransform(12.4,58.9);

	this.shape_59 = new cjs.Shape();
	this.shape_59.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgJAGg");
	this.shape_59.setTransform(21.1,64);

	this.shape_60 = new cjs.Shape();
	this.shape_60.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAGIgJAFg");
	this.shape_60.setTransform(20.7,60.9);

	this.shape_61 = new cjs.Shape();
	this.shape_61.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgJAGg");
	this.shape_61.setTransform(19.2,60.1);

	this.shape_62 = new cjs.Shape();
	this.shape_62.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAGIgJAFg");
	this.shape_62.setTransform(17.8,59.3);

	this.shape_63 = new cjs.Shape();
	this.shape_63.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAGIgJAFg");
	this.shape_63.setTransform(16.6,60);

	this.shape_64 = new cjs.Shape();
	this.shape_64.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgJAGg");
	this.shape_64.setTransform(18,60.8);

	this.shape_65 = new cjs.Shape();
	this.shape_65.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgKAGg");
	this.shape_65.setTransform(20.5,59.4);

	this.shape_66 = new cjs.Shape();
	this.shape_66.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAGIgJAFg");
	this.shape_66.setTransform(19.5,61.6);

	this.shape_67 = new cjs.Shape();
	this.shape_67.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAGIgJAFg");
	this.shape_67.setTransform(21.9,60.3);

	this.shape_68 = new cjs.Shape();
	this.shape_68.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAGIgJAFg");
	this.shape_68.setTransform(23.1,59.5);

	this.shape_69 = new cjs.Shape();
	this.shape_69.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAGIgJAFg");
	this.shape_69.setTransform(21.7,58.7);

	this.shape_70 = new cjs.Shape();
	this.shape_70.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgJAGg");
	this.shape_70.setTransform(20.2,57.9);

	this.shape_71 = new cjs.Shape();
	this.shape_71.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgJAGg");
	this.shape_71.setTransform(28.8,62.9);

	this.shape_72 = new cjs.Shape();
	this.shape_72.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgJAGg");
	this.shape_72.setTransform(30.3,63.7);

	this.shape_73 = new cjs.Shape();
	this.shape_73.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgJAGg");
	this.shape_73.setTransform(31.9,66.1);

	this.shape_74 = new cjs.Shape();
	this.shape_74.graphics.f("#A1A1A1").s().p("AgJAAIAJgFIAKAFIgJAGg");
	this.shape_74.setTransform(30.7,66.8);

	this.shape_75 = new cjs.Shape();
	this.shape_75.graphics.f("#808080").s().p("AAqBDIjZh+IAAgIIDZB9QAGADAGgDIB4hEQAAAAABAAQAAgBAAAAQAAAAABgBQAAAAAAgBIAAAIQAAABAAAAQgBABAAAAQAAAAAAABQgBAAAAAAIh4BFIgGABIgGgBg");
	this.shape_75.setTransform(23.5,68.1);

	this.shape_76 = new cjs.Shape();
	this.shape_76.graphics.f("#CCCCCC").s().p("AAAAEIAAgBIAAgGIAAAAIAAAHg");
	this.shape_76.setTransform(5.8,61.6);

	this.shape_77 = new cjs.Shape();
	this.shape_77.graphics.f("#F2F2F2").s().p("AArBlIjZh9IgCgDQgBgDADgBIB4hFQAGgDAFADIDaB9IACADQAAAAAAABQAAABAAABQAAAAgBAAQAAABgBAAIh4BFIgGACIgGgCg");
	this.shape_77.setTransform(23.4,63.8);

	this.shape_78 = new cjs.Shape();
	this.shape_78.graphics.f("#636363").s().p("AAqCXQgTgFgRgfQgrhKghhKQgKgOAFgqQAFgvAXgLQAUgKATARQAPAPALAcQAqBlAJAyIAIApQAEAagKARQgKAOgMAAIgHgBg");
	this.shape_78.setTransform(49,45.6);

	this.shape_79 = new cjs.Shape();
	this.shape_79.graphics.f("#A8A8A8").s().p("AAAAAIgDgEQADACABACIADADIAAACg");
	this.shape_79.setTransform(30.8,74.9);

	this.shape_80 = new cjs.Shape();
	this.shape_80.graphics.f("#333333").s().p("AAAAIQgGgEAAgHQAAgBAAAAQAAgBABgBQAAAAAAgBQABAAAAAAQACgCACACQAHAEAAAHQAAABAAAAQAAABgBABQAAAAAAABQgBAAAAAAIgCABIgDgBg");
	this.shape_80.setTransform(30.7,75.1);

	this.shape_81 = new cjs.Shape();
	this.shape_81.graphics.f("#A8A8A8").s().p("AAAAAIgDgEQADABACADIACADIAAACg");
	this.shape_81.setTransform(29.6,66);

	this.shape_82 = new cjs.Shape();
	this.shape_82.graphics.f("#333333").s().p("AAAAIQgGgFAAgGQAAgBAAAAQAAgBAAgBQABAAAAgBQAAAAABAAQABgBAAAAQABAAAAAAQABAAAAAAQABAAAAABQAGADABAIQAAABAAAAQAAABAAABQgBAAAAABQAAAAgBAAIgCABIgDgBg");
	this.shape_82.setTransform(29.5,66.2);

	this.shape_83 = new cjs.Shape();
	this.shape_83.graphics.f("#333333").s().p("AAAAIQgGgEAAgHQAAgHAGADQAHAEAAAHQAAABAAAAQAAABAAABQgBAAAAABQAAAAgBAAIgCABIgDgBg");
	this.shape_83.setTransform(28.7,59.5);

	this.shape_84 = new cjs.Shape();
	this.shape_84.graphics.f("#A8A8A8").s().p("AAAAAIgDgEQADACABACIADADIAAACg");
	this.shape_84.setTransform(28.2,51.7);

	this.shape_85 = new cjs.Shape();
	this.shape_85.graphics.f("#333333").s().p("AAAAIQgGgEAAgHQAAgBAAAAQAAgBAAgBQAAAAABgBQAAAAABAAQACgCACACQAGAEABAHQAAABAAABQAAAAAAABQgBAAAAABQAAAAgBABIgCAAIgDgBg");
	this.shape_85.setTransform(28.1,51.9);

	this.shape_86 = new cjs.Shape();
	this.shape_86.graphics.f("#ABABAB").s().p("AALCdIgTicIgFirIAbFWg");
	this.shape_86.setTransform(28.5,65.5);

	this.shape_87 = new cjs.Shape();
	this.shape_87.graphics.f("#383838").s().p("AgSAJIAjhEQAWgwgEgXQABACAJAWQAJAXAGAFQAJAKgOAkQgGASgJAPIgfgBIgDAmIhEBcQAPg9Adg8g");
	this.shape_87.setTransform(33.4,35.2);

	this.shape_88 = new cjs.Shape();
	this.shape_88.graphics.f("#383838").s().p("AgVAbIANgoIgbgcQASgkARgdQAGgHAIgHQAIgHADABQgNALgDBCIgCAhQgBAQABAHIARBEQAMAygBADg");
	this.shape_88.setTransform(23.6,35.4);

	this.shape_89 = new cjs.Shape();
	this.shape_89.graphics.f("#F7F7F7").s().p("AgVgXQAIgRAIgMIABALQABAMANAKQAHAFAGACIgoBBQgHg3ADgVg");
	this.shape_89.setTransform(26.6,27.8);

	this.shape_90 = new cjs.Shape();
	this.shape_90.graphics.f("#F7F7F7").s().p("AgrgJQAPADAegQQAigSgFgUQAKAMADAQQABAPgZAoIgYAmg");
	this.shape_90.setTransform(33.3,27.6);

	this.shape_91 = new cjs.Shape();
	this.shape_91.graphics.f("#565656").s().p("AAnEoQgbgDgUgWQgVgWgFgcQAMhXAAhTQABgpgbh7QgXhrAKgcQAJgYAegOQAcgPAXAJQgLAJgIAiQgGAegDArQgBAaASArQATArgBAMQgEA1AhENQABAKgGAIQgGAIgKAAIgDAAIgCAAg");
	this.shape_91.setTransform(23.6,54.7);

	this.shape_92 = new cjs.Shape();
	this.shape_92.graphics.f("#636363").s().p("AgwAVQAHgUASgdQALgVAQgKQATgMAVAGQARAFAAAVQAAARgJAVQgMAdgQAfIhUAJQADgbAJgUg");
	this.shape_92.setTransform(14.4,53.9);

	this.shape_93 = new cjs.Shape();
	this.shape_93.graphics.f("#565656").s().p("AgvEvQgLgBgLgOQgMgOgCgPQgJhOgJhcQgLh1ABgnQAAglA2hqQA0hnAHAKQAGAJAQAKQAOAIALAEQAeALANANQAOAOAFAdQAFAagcBQQgeBTACAqQAHBtAdBpQgBAjg0ASQghAMggAAQgNAAgMgCg");
	this.shape_93.setTransform(38.3,56);

	this.shape_94 = new cjs.Shape();
	this.shape_94.graphics.f("#A81100").s().p("AgUBTIAdi7IANACIgJC4IgTAXg");
	this.shape_94.setTransform(27.4,39.1);

	this.shape_95 = new cjs.Shape();
	this.shape_95.graphics.f("#D4D4D4").s().p("AgND+QgqgIgegOQgfgPABgNIAXnPICOAKIBCHiQgRAbg2AAQgaAAgggGg");
	this.shape_95.setTransform(33,52.3);

	this.shape_96 = new cjs.Shape();
	this.shape_96.graphics.f("#D6B49A").s().p("AhCApIAnh2IBeAhIgUAwQAFAKgeBAg");
	this.shape_96.setTransform(31.9,21.2);

	this.shape_97 = new cjs.Shape();
	this.shape_97.graphics.f("#636363").s().p("Ag7CJQgQgNADghQAJhXAZhQQAIgbAWgTQAYgWAbADQAWACAGAaQAFAUgGAeQgHAngSAlQgJAWgRAgIgPAnQgKAXgSAIQgKAFgJAAQgJAAgHgFg");
	this.shape_97.setTransform(20.3,39.4);

	this.shape_98 = new cjs.Shape();
	this.shape_98.graphics.f("#6B6C6C").s().p("AAlE3QgcgJgOAFQgGhDgIhIQgKhOgEgxQgHhHgZiMQgVhzADgHQAKgXBKACQBMACAFAXQAHAegNBtQgOB8AFBKQAHA/gCBcQAAAxgDA3QgGAGgJAAQgIAAgJgDg");
	this.shape_98.setTransform(38.5,105.5);

	this.shape_99 = new cjs.Shape();
	this.shape_99.graphics.f("#5E5E5E").s().p("AgzErQgHgDgIAEQgFADAAgFQgEhEgLheQgKhXgBgdQgBgcAPiaIAPiVICnAbIhjFBQAKAdABBJQABBfAHA1QgCAWgWACIgHABQgTAAgUgNg");
	this.shape_99.setTransform(28.3,103.2);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_99},{t:this.shape_98},{t:this.shape_97},{t:this.shape_96},{t:this.shape_95},{t:this.shape_94},{t:this.shape_93},{t:this.shape_92},{t:this.shape_91},{t:this.shape_90},{t:this.shape_89},{t:this.shape_88},{t:this.shape_87},{t:this.shape_86},{t:this.shape_85},{t:this.shape_84},{t:this.shape_83},{t:this.shape_82},{t:this.shape_81},{t:this.shape_80},{t:this.shape_79},{t:this.shape_78},{t:this.shape_77},{t:this.shape_76},{t:this.shape_75},{t:this.shape_74},{t:this.shape_73},{t:this.shape_72},{t:this.shape_71},{t:this.shape_70},{t:this.shape_69},{t:this.shape_68},{t:this.shape_67},{t:this.shape_66},{t:this.shape_65},{t:this.shape_64},{t:this.shape_63},{t:this.shape_62},{t:this.shape_61},{t:this.shape_60},{t:this.shape_59},{t:this.shape_58},{t:this.shape_57},{t:this.shape_56},{t:this.shape_55},{t:this.shape_54},{t:this.shape_53},{t:this.shape_52},{t:this.shape_51},{t:this.shape_50},{t:this.shape_49},{t:this.shape_48},{t:this.shape_47},{t:this.shape_46},{t:this.shape_45},{t:this.shape_44},{t:this.shape_43},{t:this.shape_42},{t:this.shape_41},{t:this.shape_40},{t:this.shape_39},{t:this.shape_38},{t:this.shape_37},{t:this.shape_36},{t:this.shape_35},{t:this.shape_34},{t:this.shape_33},{t:this.shape_32},{t:this.shape_31},{t:this.shape_30},{t:this.shape_29},{t:this.shape_28},{t:this.shape_27},{t:this.shape_26},{t:this.shape_25},{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(135));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,56.9,136.9);


(lib.ketboar2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2
	this.instance = new lib.Tween13("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(17.6,18.6,1,1,0,0,0,-4.2,6.2);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({startPosition:0},34).to({rotation:15,x:16.4},10).to({startPosition:0},46).to({regX:-4.1,regY:6.3,rotation:8.5,x:15.6,y:18.7},3).to({regX:-4.2,regY:6.2,rotation:15,y:18.6},3).to({regX:-4.1,regY:6.3,rotation:8.5,y:18.7},3).to({regX:-4.2,regY:6.2,rotation:15,y:18.6},3).to({regX:-4.1,regY:6.3,rotation:8.5,y:18.7},3).to({regX:-4.2,regY:6.2,rotation:0,x:17.6,y:18.6},7).wait(1));

	// Layer 1
	this.instance_1 = new lib.Tween14("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(2.5,57.3,1,1,0,0,0,-11.2,-10.2);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({startPosition:0},18).to({rotation:-75,x:0.5,y:58.8},5).to({startPosition:0},21).to({rotation:0,x:2.5,y:57.3},5).to({rotation:-5.5,y:57.2},4).to({rotation:4.5,y:57.3},3).to({rotation:0},3).to({regX:-11.1,rotation:5.5},3).to({regX:-11.2,rotation:-4.7},3).to({rotation:4.5},4).to({rotation:0},4).to({rotation:-4.2,x:2.6},4).to({rotation:0,x:2.5},3).to({startPosition:0},4).to({startPosition:0},3).wait(26));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,30.4,78.6);


(lib.Briefcaseman = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#6E6E6E").s().p("AgwDVQgagQgBgTIA8iYQgxiGgNgzIgCgKQgCgUAMgQQANgRAVgCQAagFAUATQAXATAKAlQAXBaAOBYQADAdgsBZQgVAtgWAmIgJABQgRAAgTgNg");
	this.shape.setTransform(10.7,60.9);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FFFFFF").s().p("AgLAWQgVgNgDgTIALgTIA8AoIgKASIgLABQgNAAgNgIg");
	this.shape_1.setTransform(6.4,81.4);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#330000").s().p("AgQAgQgXgVADgJQABgGAGgGIAKgLQADgDACgFIACgIQAGgNAWACQAXABgDAKQgBAFACAJQABAIgDADQgIAIgEARIgGAWIgJAOIgBAAQgFAAgSgRg");
	this.shape_2.setTransform(6,82.1);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#6E6E6E").s().p("Ag+AVQAPgUASgPQAUgSAagPQAigUARACQADAAAEAIIAGAKQAFABgFAFQgbAcgmAIQgNAEglAaQgmAcgKANQgCgQAWgdg");
	this.shape_3.setTransform(11.9,30.6);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#4A4A4A").s().p("AhAERQgpgSgSgaQAAgHAGg3QAGg6AAgnQgChIgbhFQgCgvAHgeQAKgqAcgRQAFgDALgMQALgMAJgFQAZgPAagVQAWgNAbgBQAaAAAXAMQA/ApgMDuQgGB6gTCBQgNAbg4AHQgPADgPAAQgpAAgmgRg");
	this.shape_4.setTransform(16,54.9);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#FFFFFF").s().p("AhBAgQAJgmAKgIQAWgUAXgOQAhgVAQACQAJABAQAkQgWAFgZAHQgwAOgKAPIgMATQgFALgHADQgEABgGAMIgHALIAIgkg");
	this.shape_5.setTransform(12.7,29.4);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#6E6E6E").s().p("AgRBPQgXgEgNAHIAUhIQAVhLAHgRQAHgRAVgEQAVgEAIAMQAIAMgVBfQgKAwgMAtQgIgUgagGg");
	this.shape_6.setTransform(26.9,61.2);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#636363").s().p("AARCFQgRgegkhUIgghMQgMgZAHgcQAHgfAXgDQATgEARAHQAQAHALAQQAOAVAUBZQAQBIAGAyQAEAbgbAFIgKAAQgSAAgIgNg");
	this.shape_7.setTransform(24.7,40.4);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(19));

	// Layer 2
	this.instance = new lib.Tween3("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(15.1,25.1,1,1,0,0,0,4.7,10.6);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({rotation:-15},9).to({rotation:0},9).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,32.4,87);


// stage content:
(lib.Step7 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 8
	this.instance = new lib.ketboar2();
	this.instance.parent = this;
	this.instance.setTransform(299.3,249.1,1,1,0,0,0,15.2,39.3);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

	// Layer 7
	this.instance_1 = new lib.Laptopman();
	this.instance_1.parent = this;
	this.instance_1.setTransform(541.7,271.8,1,1,0,0,0,28.4,68.5);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(1));

	// Layer 6
	this.instance_2 = new lib.Manwavingandbriefcase();
	this.instance_2.parent = this;
	this.instance_2.setTransform(806.3,405.7,1,1,0,0,0,48.1,57.8);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(1));

	// Patting Arm
	this.instance_3 = new lib.PattingArm();
	this.instance_3.parent = this;
	this.instance_3.setTransform(100.2,646.7,1,1,0,0,0,28.1,8.4);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(1));

	// Layer 4
	this.instance_4 = new lib.PointyArm();
	this.instance_4.parent = this;
	this.instance_4.setTransform(313.9,614.5,1,1,0,0,0,21.7,27.3);

	this.timeline.addTween(cjs.Tween.get(this.instance_4).wait(1));

	// Layer 2
	this.instance_5 = new lib.ManWithPencil();
	this.instance_5.parent = this;
	this.instance_5.setTransform(545.4,709.6,1,1,0,0,0,54,71.5);

	this.timeline.addTween(cjs.Tween.get(this.instance_5).wait(1));

	// Layer 3
	this.instance_6 = new lib.Briefcaseman();
	this.instance_6.parent = this;
	this.instance_6.setTransform(833.6,591.4,1,1,0,0,0,16.2,43.5);

	this.timeline.addTween(cjs.Tween.get(this.instance_6).wait(1));

	// Layer 1
	this.instance_7 = new lib.Ticks();
	this.instance_7.parent = this;
	this.instance_7.setTransform(374.2,432,1,1,0,0,0,86.9,48.1);

	this.instance_8 = new lib.Strokethechin();
	this.instance_8.parent = this;
	this.instance_8.setTransform(70.8,435.6,1,1,0,0,0,20.9,39.4);

	this.shape = new cjs.Shape();
	this.shape.graphics.f("#525252").s().p("AhlEtQgrgNAAggQAAgGAVh7QAUh7AGgdQAFgcAxiBIAuh7ICOA6Ih4EAQg9ESgEAGQgMARgXAAQgMAAgOgFg");
	this.shape.setTransform(823,651.6);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#212121").s().p("AA5AuIgwgNIgxgLQgSgFgUgOQgSgKgHgTQgHgUARAAQAZAAATADIA6APIAzAIQAaAEAJAJQAKAIABAQQABASgMAGQgLAGgNAAIgOgBg");
	this.shape_1.setTransform(808.6,678.8);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#574431").s().p("ABBAuIgzgKQgogGgOgDQgXgGgTgQQgOgLgGgUQgFgUAMAAQAWAAAXAIQAmAOAUAFQATAEAcgBQAYgBAJAFQAMAHAEANQADAOgHAMIgBACQgKALgRAAIgHgBg");
	this.shape_2.setTransform(808.6,679.2);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#574431").s().p("AgDAPQgcgEgKgIIgCgOIBWgEQABAJgCAIQgJAOgYAAIgMgBg");
	this.shape_3.setTransform(814.8,683.2);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#3D3D3D").s().p("AAhD8QgngKgIgnQgDgTg+m1ICVAQQALHNgBAGQgFAYgZAAQgIAAgJgCg");
	this.shape_4.setTransform(836.5,648.8);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#212121").s().p("AgWAbIgdgWQgPgLgHgIQgOgQAHgVQAFgaAcAMQAPAHAwAjQALAIAdAPQARAJAFALQAIANgDAOQgDAQgRAFIgIABQgbAAgygqg");
	this.shape_5.setTransform(836,668.8);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#574431").s().p("AARA5QgTgMgWgUQgJgJgTgMQgPgJgGgIQgOgTAHgVQAGgaAbANQALAGAzAlQALAIAdAPQARAJAFALQAIAOgCAOQgCASgRAEIgIABQgQAAgXgOg");
	this.shape_6.setTransform(835.9,669.5);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#574431").s().p("AgsgHIACgKIBVgBQAGAdgYAGQgFACgGAAQgYAAgigag");
	this.shape_7.setTransform(839.7,675.1);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#FFFFFF").s().p("AgLAMQgVgEgMAGIAFghIBUgPQgNAlgMAgQgHgSgYgFg");
	this.shape_8.setTransform(842.9,616.9);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#ECC7AB").s().p("AgcATIASgyIAnANIgSAyg");
	this.shape_9.setTransform(841.7,620.3);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#D9D9D9").s().p("AgQAdQgXgIgEgMIAEgbIBTgOIgXA9QgHAEgJAAQgJAAgMgEg");
	this.shape_10.setTransform(842.8,617.4);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#404040").s().p("AgJAiQgagIgHgSIAGgfIBPgMQgMAfgCAjQgIAFgNAAQgIAAgJgCg");
	this.shape_11.setTransform(843.2,616.4);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#6D6A00").s().p("AgHAAQAGgGAJgCIAAARg");
	this.shape_12.setTransform(851.6,650.1);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#6D6A00").s().p("AgHgIIAPAIQgHAIgIABg");
	this.shape_13.setTransform(829.4,618.6);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#FDF63C").s().p("AgIAAIAOgIQAEAIgDAJg");
	this.shape_14.setTransform(829.5,617.7);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#FDF63C").s().p("AgPADIAPgIIAQAIQgIADgHAAQgHAAgJgDg");
	this.shape_15.setTransform(833,615.7);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#C2BD2D").s().p("AgHgIQAJABAGAHIgPAJg");
	this.shape_16.setTransform(853.2,650.1);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#C2BD2D").s().p("AgHAAIAPgIIAAARQgJgBgGgIg");
	this.shape_17.setTransform(856,630.1);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#FDF63C").s().p("AgGgIIAOAIIgOAJQgDgJADgIg");
	this.shape_18.setTransform(856,629.2);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#6D6A00").s().p("AgHAEIAAgQQAKAKAFAPg");
	this.shape_19.setTransform(829.4,636.3);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#6D6A00").s().p("AgHgMIAPAJIAAAQQgLgKgEgPg");
	this.shape_20.setTransform(851.6,632.1);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#C2BD2D").s().p("AAHgMIAAAQIgNAJQAEgNAJgMg");
	this.shape_21.setTransform(856,648);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#C2BD2D").s().p("AgHgDIAPgJQgFAOgKALg");
	this.shape_22.setTransform(853.2,632.2);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#FDF63C").s().p("AgPgCQAPgGAQAGIgPAIg");
	this.shape_23.setTransform(852.4,631.1);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("#2E2E2E").s().p("AAAADQgCgBAAgDQAAAAAAgBQABAAAAgBQAAAAABAAQAAAAAAABQACABABADQAAAAAAABQAAAAgBAAQAAAAAAABQAAAAgBAAIgBgBg");
	this.shape_24.setTransform(838.8,629.7);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#6D6A00").s().p("AAGATIgLgHQgKgGAAgKIAAgQIAfATIAAAPQAAAEgDACIgDABIgEgCg");
	this.shape_25.setTransform(838.9,629.4);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f("#FDF63C").s().p("AgQgIIACgBIAfASIgCABg");
	this.shape_26.setTransform(839,628.2);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f("#C2BD2D").s().p("AAAgHIABgBIAAAPIgBACg");
	this.shape_27.setTransform(840.6,630);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f("#C2BD2D").s().p("AABAGIAAgQIABgBIAAAPQAAAFgCABIgBACQACgDAAgDg");
	this.shape_28.setTransform(840.5,630.3);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f("#2E2E2E").s().p("AATAXIAAgPIgkgUIAAAOIgKgEIAAgaIA3AfIAAAag");
	this.shape_29.setTransform(842,621.5);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f("#ABABAB").s().p("AghgMIALgGIA3AfIgLAGg");
	this.shape_30.setTransform(842.6,619.9);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f("#7D7D7D").s().p("AgFgJIAKgGIAAAZIgKAGg");
	this.shape_31.setTransform(845.4,622.8);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f("#C2BD2D").s().p("AgFgBIAKgGIAAAJIgKAGg");
	this.shape_32.setTransform(845.4,624.6);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f("#6D6A00").s().p("AgEACIAAgJIAJAGIAAAJg");
	this.shape_33.setTransform(844.4,624.7);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f("#9F9F9F").s().p("AgJAAIAJgFIAKAFIgKAGg");
	this.shape_34.setTransform(844.9,623.8);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f("#DCDCDC").s().p("AgJAAIAJgFIAKAFIgKAGg");
	this.shape_35.setTransform(844.9,624.9);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f("#C5C5C5").s().p("AgEgBIAJgGIAAAJIgJAGg");
	this.shape_36.setTransform(844.4,624.1);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f("#7D7D7D").s().p("AgEgEIAJgGIAAAOIgJAHg");
	this.shape_37.setTransform(840.7,620.7);

	this.shape_38 = new cjs.Shape();
	this.shape_38.graphics.f("#6D6A00").s().p("AgEACIAAgJIAJAGIAAAJg");
	this.shape_38.setTransform(839.7,622);

	this.shape_39 = new cjs.Shape();
	this.shape_39.graphics.f("#C2BD2D").s().p("AgEgBIAJgGIAAAJIgJAGg");
	this.shape_39.setTransform(840.7,621.9);

	this.shape_40 = new cjs.Shape();
	this.shape_40.graphics.f("#9F9F9F").s().p("AgJAAIAKgFIAJAFIgKAGg");
	this.shape_40.setTransform(840.2,621.2);

	this.shape_41 = new cjs.Shape();
	this.shape_41.graphics.f("#DCDCDC").s().p("AgJAAIAKgFIAJAFIgKAGg");
	this.shape_41.setTransform(840.2,622.2);

	this.shape_42 = new cjs.Shape();
	this.shape_42.graphics.f("#C5C5C5").s().p("AgFgBIALgGIAAAJIgLAGg");
	this.shape_42.setTransform(839.8,621.4);

	this.shape_43 = new cjs.Shape();
	this.shape_43.graphics.f("#D9D9D9").s().p("AglgMIAPgIIA8AhIgQAIg");
	this.shape_43.setTransform(842.5,623.5);

	this.shape_44 = new cjs.Shape();
	this.shape_44.graphics.f("#D09244").s().p("AiMg5IAsgZIDtCMIgrAZg");
	this.shape_44.setTransform(842.7,623.4);

	this.shape_45 = new cjs.Shape();
	this.shape_45.graphics.f("#4D3618").s().p("Ah3AZIABiGIDtCNIAACHgAh2h0IAAgxIDuCMIgBAxg");
	this.shape_45.setTransform(840.5,634.3);

	this.shape_46 = new cjs.Shape();
	this.shape_46.graphics.f("#A47236").s().p("AgUgLIAqgZIgBAwIgqAZg");
	this.shape_46.setTransform(854.6,633);

	this.shape_47 = new cjs.Shape();
	this.shape_47.graphics.f("#1F1F1F").s().p("Ah2hCIAAgHIDtCMIAAAHg");
	this.shape_47.setTransform(840.5,630);

	this.shape_48 = new cjs.Shape();
	this.shape_48.graphics.f("#936830").s().p("AiMg5IAsgZIDtCMIgsAZg");
	this.shape_48.setTransform(842.7,628.4);

	this.shape_49 = new cjs.Shape();
	this.shape_49.graphics.f("#636363").s().p("AgVAJIArgYIAAAHIgrAYg");
	this.shape_49.setTransform(854.6,635.8);

	this.shape_50 = new cjs.Shape();
	this.shape_50.graphics.f("#A47236").s().p("AgVg2IArgZIAACGIgrAZg");
	this.shape_50.setTransform(854.6,642.9);

	this.shape_51 = new cjs.Shape();
	this.shape_51.graphics.f("#CB8E42").s().p("AiMg5IAsgaIDtCNIgsAag");
	this.shape_51.setTransform(842.7,629.1);

	this.shape_52 = new cjs.Shape();
	this.shape_52.graphics.f("#B47E3B").s().p("AgVAJIArgYIAAAHIgrAYg");
	this.shape_52.setTransform(830.8,621.7);

	this.shape_53 = new cjs.Shape();
	this.shape_53.graphics.f("#D9D9D9").s().p("AiyCKQhTgsgGhIQgGhGBLg5QBKg5BvgJQBtgKBTAtQBTAsAGBHQAFBHhKA5QhKA5hvAJIgkABQhYAAhEgkg");
	this.shape_53.setTransform(820.8,674.5);

	this.shape_54 = new cjs.Shape();
	this.shape_54.graphics.f("#D9D9D9").s().p("Aikg5IBDgnIEGCaIhEAng");
	this.shape_54.setTransform(841.6,662.1);

	this.shape_55 = new cjs.Shape();
	this.shape_55.graphics.f("#F43D00").s().p("AgpBIIAAhIQhUgPhUgLIAAgmQBSAOBWAUQAAgagDgbIBRAcQAGAcABATQBKAUBYAfIAEAWQhfgdhGgRIAABBIhWgMg");
	this.shape_55.setTransform(718.3,574.2);

	this.shape_56 = new cjs.Shape();
	this.shape_56.graphics.f("#4EB500").s().p("Ai/CIIgXg6QC4ABAogCQAqgCBAgMQgah/gThFIBPgDQATA2AOA4QAKAmAWBtQhIANgzACIhfABIi8gBg");
	this.shape_56.setTransform(771.5,543.2);

	this.shape_57 = new cjs.Shape();
	this.shape_57.graphics.f("#E0E0E0").s().p("AkFAYQB2gyCHgOQB7gMBtAUIAlAWQhtgVh8ANQiGAOh1Ayg");
	this.shape_57.setTransform(763.5,603);

	this.shape_58 = new cjs.Shape();
	this.shape_58.graphics.f("#E0E0E0").s().p("AkEAYQB1gyCHgOQB7gMBtAUIAlAWQhtgVh8ANQiGAOh1Ayg");
	this.shape_58.setTransform(754.6,597.9);

	this.shape_59 = new cjs.Shape();
	this.shape_59.graphics.f("#E0E0E0").s().p("AkEAYQB0gyCIgOQB7gMBtAUIAlAWQhtgVh8ANQiGAOh1Ayg");
	this.shape_59.setTransform(746,592.9);

	this.shape_60 = new cjs.Shape();
	this.shape_60.graphics.f("#F0F0F0").s().p("AjyDxQA9hECBiTQBlhyCfitIAjAVIkEEfIi+DXg");
	this.shape_60.setTransform(817.9,573);

	this.shape_61 = new cjs.Shape();
	this.shape_61.graphics.f("#F0F0F0").s().p("AjzDxIABAAIBdhpIBhhuIEEkfIAjAVQi5DMhLBTIi+DXg");
	this.shape_61.setTransform(809.4,568.1);

	this.shape_62 = new cjs.Shape();
	this.shape_62.graphics.f("#F0F0F0").s().p("AjyDxQA8hECCiTIEEkfIAkAVQhvB5iVCmIi+DXg");
	this.shape_62.setTransform(801.1,563.3);

	this.shape_63 = new cjs.Shape();
	this.shape_63.graphics.f("#B5B5B5").s().p("Ao6FEIACAAQCPhTC3gRQClgPB6ArQAqgtBJhTIB5iIQB+iNCiixIADAFQiiCsh+CRQikC7hMBQQh7grikAPQi1AQiQBSIgCACg");
	this.shape_63.setTransform(803.9,586.1);

	this.shape_64 = new cjs.Shape();
	this.shape_64.graphics.f("#F5F5F5").s().p("ArNi1IADgCQCPhTC2gQQClgPB7ArIMzHUQh7grilAPQi2AQiPBTIgDACg");
	this.shape_64.setTransform(736.6,589.8);

	this.shape_65 = new cjs.Shape();
	this.shape_65.graphics.f("#D6D6D6").s().p("AmZjnIAAgGIMzHUIAAAHg");
	this.shape_65.setTransform(705.7,595.4);

	this.shape_66 = new cjs.Shape();
	this.shape_66.graphics.f("#FFFFFF").s().p("AqfA5QArguBIhRIB5iKQBRhaBrh2IBkhtIMzHVIhkBsQhrB2hRBaIh5CKQhIBSgrAug");
	this.shape_66.setTransform(793.6,558.6);

	this.shape_67 = new cjs.Shape();
	this.shape_67.graphics.f("#F7F7F7").s().p("Aqni+IBsgxIONCgIFWDDIgIABQg3gUkSBAQkJA8gMATg");
	this.shape_67.setTransform(740.3,600.3);

	this.shape_68 = new cjs.Shape();
	this.shape_68.graphics.f("#B5B5B5").s().p("ApWFXQCXhOCjg0QCLgsCRgQQCqixCPh4QCPh5B/hKIASgKIgCAHIgQAJQh/BJiOB4QiPB5irCxQkZAdk/Cjg");
	this.shape_68.setTransform(808.3,596.6);

	this.shape_69 = new cjs.Shape();
	this.shape_69.graphics.f("#F2F2F2").s().p("ArFiLQCZhOChg0QCLgsCTgQIMzHVQiTAQiLAsQihAziZBPg");
	this.shape_69.setTransform(737.4,597.9);

	this.shape_70 = new cjs.Shape();
	this.shape_70.graphics.f("#C2C2C2").s().p("AmajnIACgGIMzHUIgCAHg");
	this.shape_70.setTransform(707.3,607.7);

	this.shape_71 = new cjs.Shape();
	this.shape_71.graphics.f("#F2F2F2").s().p("ArFARQCqiyCOh4QCPh4B/hKIASgKIMzHVIgSAKQh/BJiPB5QiOB4iqCyg");
	this.shape_71.setTransform(797.4,563.3);

	this.shape_72 = new cjs.Shape();
	this.shape_72.graphics.f("#BFBFBF").s().p("AqbE7QCBh4CbhZQB/hJB1gpQBrgmAhAJQAZgpBihPQBshXB1hEQDEhyB7ACIgBBQIpuFDQgUAOgYANQgaAPgTAIIpuGMg");
	this.shape_72.setTransform(808.5,616.2);

	this.shape_73 = new cjs.Shape();
	this.shape_73.graphics.f("#F2F2F2").s().p("Aqvi+QAogeAygiIOzC8IFQBXIACABQheACkFBtQjyBlgMAVg");
	this.shape_73.setTransform(739.2,609.8);

	this.shape_74 = new cjs.Shape();
	this.shape_74.graphics.f("#EDEDED").s().p("Arog8QCCh5CahYQB+hJB1gqQBrgmAjAIIM0HdQgigJhrAnQh1Aqh+BJQiaBXiCB6g");
	this.shape_74.setTransform(734,606);

	this.shape_75 = new cjs.Shape();
	this.shape_75.graphics.f("#D9D9D9").s().p("AmZi3IgBhuIM0HdIABBtg");
	this.shape_75.setTransform(700.7,629.3);

	this.shape_76 = new cjs.Shape();
	this.shape_76.graphics.f("#E3E3E3").s().p("ArogsQAagpBihPQBshYB1hCQDDhyB7AAIM2HdQh7AAjFBxQh0BEhsBXQhiBPgaAog");
	this.shape_76.setTransform(800.9,569);

	this.shape_77 = new cjs.Shape();
	this.shape_77.graphics.f("#BA795E").s().p("ArAGeQgDgBAAgEQAAgJAIgFIKMmeQADgCACACQADABAAAEQAAAMAMABQALABAQgIQAQgKAMgPQAMgPAAgMQAAgJAIgFIKMlTQAIgDAAAIQgBAJgHAFIqGFPQgNAugpAWQgTAMgQgCQgPgCgEgOIqFGaIgEACIgBgBg");
	this.shape_77.setTransform(812,622.7);

	this.shape_78 = new cjs.Shape();
	this.shape_78.graphics.f("#B3745B").s().p("Am2j0QgDgBAAgEQABgIAGgGINrH8QgHAFAAAIQgBAEADACg");
	this.shape_78.setTransform(697.9,637.8);

	this.shape_79 = new cjs.Shape();
	this.shape_79.graphics.f("#94593D").s().p("Ar7guIKNmfINqH8IqNGfg");
	this.shape_79.setTransform(730.8,616.1);

	this.shape_80 = new cjs.Shape();
	this.shape_80.graphics.f("#385182").s().p("Am3j9QADgBADAAINpH8QgBAAAAAAQgBAAAAAAQgBAAAAAAQgBAAAAABg");
	this.shape_80.setTransform(763.7,595.3);

	this.shape_81 = new cjs.Shape();
	this.shape_81.graphics.f("#3E505D").s().p("Amuj2QgJgFgBgIINqH7QACAIAFAEg");
	this.shape_81.setTransform(763.1,598.2);

	this.shape_82 = new cjs.Shape();
	this.shape_82.graphics.f("#9C5E40").s().p("Am5j2QAAgEADgEIAGgGINqH8QgIAFAAAIg");
	this.shape_82.setTransform(772.6,590.5);

	this.shape_83 = new cjs.Shape();
	this.shape_83.graphics.f("#6C412C").s().p("AGQEaItqn8QANAHAWgMQAPgKAMgPQAMgQAAgLINrH7QAAAMgNAQQgLAPgRAJQgOAIgKAAQgGAAgEgCg");
	this.shape_83.setTransform(768.6,594.2);

	this.shape_84 = new cjs.Shape();
	this.shape_84.graphics.f("#94593D").s().p("Ar9hUIKMlSQADgCADACINpH7QAAAAgBgBQAAAAgBAAQAAAAgBABQAAAAgBAAIqNFTg");
	this.shape_84.setTransform(805.9,572.8);

	this.shape_85 = new cjs.Shape();
	this.shape_85.graphics.f("#DCDCDC").s().p("AyACYIWKszIN2IEI2IMzg");
	this.shape_85.setTransform(768.3,598.5);

	this.instance_9 = new lib.ClipGroup_21();
	this.instance_9.parent = this;
	this.instance_9.setTransform(777.6,249.2,1,1,0,0,0,79.3,42.2);

	this.shape_86 = new cjs.Shape();
	this.shape_86.graphics.f("#CFCFCF").s().p("ACbElItkn1QgZgPAAgUIAAhAQAAAUAZAOINkH2QAcAOAhAAQAfAAAcgOIG4j/QAYgOAAgUIAAA/QAAAVgYAOIm4D/QgcAPgfAAQghAAgcgPg");
	this.shape_86.setTransform(780.7,273.6);

	this.shape_87 = new cjs.Shape();
	this.shape_87.graphics.f("#FFFFFF").s().p("AhBAmQgDgBgCgDQgCgEACgEQAAgDAFgDIBkg5QAPgIAPAIQAJADgDAIQgCAFgEACIhkA5QgHAEgIAAQgHAAgIgEg");
	this.shape_87.setTransform(823.1,280.1);

	this.shape_88 = new cjs.Shape();
	this.shape_88.graphics.f("#7A7A7A").s().p("AgyAyQgKAAgMgGQgFgBgDgIQgDgFADgGQADgHAFgCIBlg7QALgFALABQAKgBALAFQAHADACAGQADAHgDAGQgDAGgGADIhkA5QgKAGgKAAIgCAAg");
	this.shape_88.setTransform(823.1,280.1);

	this.shape_89 = new cjs.Shape();
	this.shape_89.graphics.f("#1F1F1F").s().p("AgCACQgBgBAAAAQgBAAAAgBQAAAAABAAQAAAAABgBQACgCADACQABABAAAAQABAAAAAAQAAABgBAAQAAAAgBABIgDABIgCgBg");
	this.shape_89.setTransform(712,242.5);

	this.shape_90 = new cjs.Shape();
	this.shape_90.graphics.f("#656565").s().p("AhhA5QgGgCACgFQAAgBABgBQAAAAAAAAQABgBAAAAQABgBABAAICxhmQAJgFAKAFQAFACgCAFQAAABgBAAQAAABgBABQAAAAAAAAQgBAAAAABIixBmQgFADgFAAQgFAAgEgDg");
	this.shape_90.setTransform(735.4,228.9);

	this.shape_91 = new cjs.Shape();
	this.shape_91.graphics.f("#595959").s().p("AqHhTIH0kjIMbHKIn1Ejg");
	this.shape_91.setTransform(778.6,253.9);

	this.shape_92 = new cjs.Shape();
	this.shape_92.graphics.f("#585858").s().p("AgOAJQgDgBgCgEQgCgDABgDQACgEAEgCQAOgIAPAIQAEABABAEQACADgBADQgCAEgEACQgHAEgIAAQgGAAgIgEgAgCgBQgBABAAAAQgBAAAAAAQAAABABAAQAAAAABABQACABADgBQABgBAAAAQAAAAAAgBQAAAAAAAAQAAAAgBgBIgDAAIgCAAg");
	this.shape_92.setTransform(712,242.5);

	this.shape_93 = new cjs.Shape();
	this.shape_93.graphics.f("#1F1F1F").s().p("AgCACQgBAAAAgBQgBAAAAgBQAAAAABAAQAAAAABgBQACgBAEABQAAAAAAABQAAAAABAAQAAAAAAAAQAAAAAAABIgBABIgEABIgCgBg");
	this.shape_93.setTransform(748.3,221.4);

	this.shape_94 = new cjs.Shape();
	this.shape_94.graphics.f("#FFFFFF").s().p("ACcGdItmn1QgZgPAAgUQAAgUAZgOIG4kAQAcgOAgAAQAfAAAcAOINmH2QAZAOAAAUQAAAVgZAOIm4D/QgcAPggAAQgfAAgcgPg");
	this.shape_94.setTransform(780.7,255.1);

	this.shape_95 = new cjs.Shape();
	this.shape_95.graphics.f("#E6E6E6").s().p("ADXG/QgkABghgSItmn1QgigUAAggQAAggAigTIG4kAQAhgRAlAAQAkAAAhARINlH2QAjAUAAAgQAAAfgiAUIm4EAQgfARgjAAIgEgBg");
	this.shape_95.setTransform(780.7,263.2);

	this.shape_96 = new cjs.Shape();
	this.shape_96.graphics.f("#E18B49").s().p("AkfDVQgYiHgXjrII7lLQAXETAJBKQAYDFAqBgIolFPQgrhhgeizg");
	this.shape_96.setTransform(668.3,833.4);

	this.shape_97 = new cjs.Shape();
	this.shape_97.graphics.f("#E6E6E6").s().p("AkeiTII7lLIADKRIobEsg");
	this.shape_97.setTransform(663.5,832.4);

	this.shape_98 = new cjs.Shape();
	this.shape_98.graphics.f("#B26C37").s().p("AkeijII7lKIADKRIo8FLg");
	this.shape_98.setTransform(663.5,834);

	this.shape_99 = new cjs.Shape();
	this.shape_99.graphics.f("#F79751").s().p("Al2BxII8lKICxBqIo8FJg");
	this.shape_99.setTransform(654.6,795.7);

	this.shape_100 = new cjs.Shape();
	this.shape_100.graphics.f("#CD7B40").s().p("AhXEUIgCqRICxBqIACKRg");
	this.shape_100.setTransform(626,845.2);

	this.shape_101 = new cjs.Shape();
	this.shape_101.graphics.f("#D9D9D9").s().p("Al2B5IJLlQICiBfIpLFQg");
	this.shape_101.setTransform(665.9,864.8);

	this.shape_102 = new cjs.Shape();
	this.shape_102.graphics.f("#D9D9D9").s().p("AmTBoIKFlHICiBfIphFgg");
	this.shape_102.setTransform(654.4,864);

	this.shape_103 = new cjs.Shape();
	this.shape_103.graphics.f("#D9D9D9").s().p("AigBJIEhilIAgAUIkhClg");
	this.shape_103.setTransform(618.8,167.7);

	this.shape_104 = new cjs.Shape();
	this.shape_104.graphics.f("#D9D9D9").s().p("AjTBnIGHjhIAhAUImJDhg");
	this.shape_104.setTransform(609.9,157.1);

	this.shape_105 = new cjs.Shape();
	this.shape_105.graphics.f("#D9D9D9").s().p("AjUBnIGJjhIAfAUImHDhg");
	this.shape_105.setTransform(597.5,149.4);

	this.shape_106 = new cjs.Shape();
	this.shape_106.graphics.f("#FBDF4D").s().p("AjqDiQi1hFiwhpIJaleQDSBvBnAxQCkBNBoAYQg+BXjDBuQiBBIidBDQhrgGiwhDg");
	this.shape_106.setTransform(616.1,155.1);

	this.shape_107 = new cjs.Shape();
	this.shape_107.graphics.f("#D9D9D9").s().p("ApNAMIJaleIJBFNIo8FYg");
	this.shape_107.setTransform(615.9,159.2);

	this.shape_108 = new cjs.Shape();
	this.shape_108.graphics.f("#EFD549").s().p("ApcAAIJbleIJeFeIpbFfg");
	this.shape_108.setTransform(617.5,160.3);

	this.shape_109 = new cjs.Shape();
	this.shape_109.graphics.f("#BFAB39").s().p("AkvhVIABiyIJeFdIgBCyg");
	this.shape_109.setTransform(587.3,186.8);

	this.shape_110 = new cjs.Shape();
	this.shape_110.graphics.f("#E0C643").s().p("AksBWIJaldIAACyIpbFdg");
	this.shape_110.setTransform(647.8,186.8);

	this.shape_111 = new cjs.Shape();
	this.shape_111.graphics.f("#DCDCDC").s().p("Ap7AAIJ6lvIJ9FvIp6Fwg");
	this.shape_111.setTransform(617.5,180);

	this.shape_112 = new cjs.Shape();
	this.shape_112.graphics.f("#696969").s().p("AiZBHIgDgCQgTgLgZgJIEjipQAXAIAVAMIADACQAiAUAdAeIkjCpQgcgdgjgVg");
	this.shape_112.setTransform(732.1,693.2);

	this.instance_10 = new lib.ClipGroup_20();
	this.instance_10.parent = this;
	this.instance_10.setTransform(691.9,704.3,1,1,0,0,0,63.8,43.7);

	this.instance_11 = new lib.Group_14();
	this.instance_11.parent = this;
	this.instance_11.setTransform(646.8,658.2,1,1,0,0,0,48.5,16.2);
	this.instance_11.alpha = 0.602;

	this.shape_113 = new cjs.Shape();
	this.shape_113.graphics.f("#737373").s().p("Ah3A+IALgWIANAIIAMgWIAMAIIANgWIALAIIANgWIAMAIIAMgWIAKAHIAMgWIAMAIIAMgWIAMAIIANgXIALAJIANgXIAMAJIAMgXIAMAIIAAAeIjxCLg");
	this.shape_113.setTransform(655.9,651.8);

	this.shape_114 = new cjs.Shape();
	this.shape_114.graphics.f("#FFFFFF").s().p("AgIAJIALgVIAGAEIgLAVg");
	this.shape_114.setTransform(644.1,656.7);

	this.shape_115 = new cjs.Shape();
	this.shape_115.graphics.f("#ADADAD").s().p("AgCACIAAgQIAFADIAAAag");
	this.shape_115.setTransform(643.5,659.2);

	this.shape_116 = new cjs.Shape();
	this.shape_116.graphics.f("#FFFFFF").s().p("AgJAKIAMgWIAGAEIgLAVg");
	this.shape_116.setTransform(646.6,655.3);

	this.shape_117 = new cjs.Shape();
	this.shape_117.graphics.f("#FFFFFF").s().p("AgIAJIALgVIAHAEIgMAVg");
	this.shape_117.setTransform(649,653.9);

	this.shape_118 = new cjs.Shape();
	this.shape_118.graphics.f("#FFFFFF").s().p("AgIAJIAKgVIAIADIgMAWg");
	this.shape_118.setTransform(651.5,652.5);

	this.shape_119 = new cjs.Shape();
	this.shape_119.graphics.f("#FFFFFF").s().p("AgIAJIALgVIAGAEIgLAVg");
	this.shape_119.setTransform(653.9,651.1);

	this.shape_120 = new cjs.Shape();
	this.shape_120.graphics.f("#FFFFFF").s().p("AgJAJIAMgVIAHAEIgMAVg");
	this.shape_120.setTransform(656.1,649.5);

	this.shape_121 = new cjs.Shape();
	this.shape_121.graphics.f("#FFFFFF").s().p("AgIAKIAKgWIAIAEIgMAVg");
	this.shape_121.setTransform(658.6,648.1);

	this.shape_122 = new cjs.Shape();
	this.shape_122.graphics.f("#FFFFFF").s().p("AgIAJIAKgVIAIADIgMAWg");
	this.shape_122.setTransform(661,646.7);

	this.shape_123 = new cjs.Shape();
	this.shape_123.graphics.f("#FFFFFF").s().p("AgIAJIALgVIAGADIgLAWg");
	this.shape_123.setTransform(663.4,645.3);

	this.shape_124 = new cjs.Shape();
	this.shape_124.graphics.f("#FFFFFF").s().p("AgIAJIALgVIAGAEIgLAVg");
	this.shape_124.setTransform(665.9,643.9);

	this.instance_12 = new lib.ClipGroup_1_0();
	this.instance_12.parent = this;
	this.instance_12.setTransform(694.1,684.8,1,1,0,0,0,34.5,34.9);

	this.shape_125 = new cjs.Shape();
	this.shape_125.graphics.f("#7D7D7D").s().p("AhEBRQhUhFhHhVICoh0IEXEEIhEAoIABAAQgmAXgLAoQgDAJgEAHQhLgfhehOg");
	this.shape_125.setTransform(686.8,687.6);

	this.shape_126 = new cjs.Shape();
	this.shape_126.graphics.f("#BF4A3A").s().p("AEVGaIoSkzQg3gfgrg/Qgrg+gPhFIhBk6QA8BsCNCTQCSCYBwBAQAjAVAegHQAegIALgiQAUg5AzgOQA0gOBBAlIADACQBPAvA4BhQA5BiAABbQABBfg6AiQgYAOgcAAQgoAAgwgbg");
	this.shape_126.setTransform(688.6,704.3);

	this.shape_127 = new cjs.Shape();
	this.shape_127.graphics.f("#D85342").s().p("AAGEbQAQgigBgvQgBhcg3hhQg4hhhPgvIgEgCQgogXglgDQgigDgbAPIEjipQAagQAjADQAlADApAXIADACQBPAwA4BhQA5BhAABbQABAvgQAiQgPAggbAQIkiCpQAbgQANgfg");
	this.shape_127.setTransform(733.9,713.5);

	this.shape_128 = new cjs.Shape();
	this.shape_128.graphics.f("#F25D49").s().p("ABYFJQgVgCgXgNQhvhBiSiZQiNiRg8htIEliqQA7BsCNCTQCSCXBwBCQAtAaAhgSIkjCpQgNAIgRAAIgGAAg");
	this.shape_128.setTransform(682.5,676.4);

	this.shape_129 = new cjs.Shape();
	this.shape_129.graphics.f("#D9D9D9").s().p("AnAjAIB4hFIMJHGIh4BFg");
	this.shape_129.setTransform(640.8,682.5);

	this.shape_130 = new cjs.Shape();
	this.shape_130.graphics.f("#D9D9D9").s().p("ApziYIFwjVIN3IGIlwDVg");
	this.shape_130.setTransform(700,719.8);

	this.shape_131 = new cjs.Shape();
	this.shape_131.graphics.f("#9E9E9E").s().p("AgDgGIgDAGIgCgFIAEgGIAEgCIAJAYIgFADg");
	this.shape_131.setTransform(121.4,212.8);

	this.shape_132 = new cjs.Shape();
	this.shape_132.graphics.f("#9E9E9E").s().p("AgCAKIAEgBQAEgBgBgFQgCgDgDACIgCABIgBgDIACgBQABgCAAgDQAAgBAAAAQAAAAgBAAQAAgBgBABQgBAAAAAAIgEAEIgCgEQABgDAEgDQAEgDADAEIACACQABAEgDAEQAFgCACAFQABADgBAEQgCAEgDABQgDACgDAAg");
	this.shape_132.setTransform(119.6,213.9);

	this.shape_133 = new cjs.Shape();
	this.shape_133.graphics.f("#9E9E9E").s().p("AgBANQgEgDgCgFQgFgOAIgDQAGgFAGAOQAFAMgIAFIgDABIgDgCgAgCgIQgDACADAIQACAJADgCIAAAAQADgCgDgIQgDgHgBAAIgBAAg");
	this.shape_133.setTransform(110.6,219.1);

	this.shape_134 = new cjs.Shape();
	this.shape_134.graphics.f("#9E9E9E").s().p("AgCAKIAEgCQAEgBgCgEQgBgDgDACIgCABIgCgEIACgBQADgBgBgEQAAAAAAgBQAAAAgBAAQAAAAgBAAQgBAAAAAAIgEAEIgDgEQADgDADgCQAEgDADAEIACACQACAEgEAEQAGgBABADIAAABQADAJgIADQgDACgDAAg");
	this.shape_134.setTransform(108.8,220.2);

	this.shape_135 = new cjs.Shape();
	this.shape_135.graphics.f("#9E9E9E").s().p("AgBALIABAAIAAgBQADgCABgCIABgGQgBACgDACQgFAEgDgIQgFgIAJgGQADgCADACQADADACAEQADAGgCAHQgCAFgFADIgBABIgBABgAgBgJQgEADACADQACADACAAQAAAAABgBQAAAAAAAAQABgBAAAAQAAgBAAAAIAAgCQgCgEgBAAIgBAAg");
	this.shape_135.setTransform(99.7,225.5);

	this.shape_136 = new cjs.Shape();
	this.shape_136.graphics.f("#9E9E9E").s().p("AgDAMIABgEQADgLgBgDQAAgBAAgBQAAAAAAgBQgBAAAAAAQgBAAgBAAIgBABIgEAEIgDgDQADgFADgCQAFgDAEAFIAAACQACAIgDAGIgBADIAIgFIACAFIgOAJg");
	this.shape_136.setTransform(98.1,226.5);

	this.shape_137 = new cjs.Shape();
	this.shape_137.graphics.f("#9E9E9E").s().p("AgEAMIgBgBQgBgFADgEQgEAAgCgDQgCgIAHgDQAEgEADAEIABACQACAEgDAEQAFgBABAEQACADgCAEQgBAEgEABQAAABgBAAQAAAAgBABQAAAAgBAAQAAAAgBAAQgBAAgDgDgAAAACQgBACABADQAAABAAAAQAAABAAAAQABAAAAAAQABAAAAAAIABAAQADgBgBgEQAAAAgBgBQAAAAAAgBQgBAAAAAAQgBAAAAAAIgCAAgAgDgIQgBAAAAABQAAABgBAAQAAABAAAAQABABAAAAQAAABABAAQAAABAAAAQABAAABAAQAAAAABAAQAAgBAAAAQAAgBAAAAQAAgBAAgBQAAAAAAgBQAAAAAAgBQAAAAAAAAQAAgBgBAAQAAAAAAAAIgCABg");
	this.shape_137.setTransform(160.3,176.6);

	this.shape_138 = new cjs.Shape();
	this.shape_138.graphics.f("#9E9E9E").s().p("AgDAMIABgFQADgKgBgDQAAgBAAgBQAAAAAAAAQgBgBAAAAQgBAAgBAAIgBABQgDABgBADIgCgDQABgFAFgCQAEgDAEAFIABACQABAIgDAGIgBADIAHgFIACAFIgNAJg");
	this.shape_138.setTransform(158.6,177.7);

	this.shape_139 = new cjs.Shape();
	this.shape_139.graphics.f("#9E9E9E").s().p("AgDAMIABgFQADgLgBgDQAAAAAAgBQAAAAAAgBQgBAAAAAAQgBAAgBAAIgBABQgDABgBADIgCgDQABgEAEgDQAFgDAEAFIAAACQACAHgDAGIgBAEIAHgFIACAFIgNAJg");
	this.shape_139.setTransform(147.8,184);

	this.shape_140 = new cjs.Shape();
	this.shape_140.graphics.f("#9E9E9E").s().p("AADgIIgIAFIgCgFIANgIIACAEIAAAaIgFADg");
	this.shape_140.setTransform(149.1,182.8);

	this.shape_141 = new cjs.Shape();
	this.shape_141.graphics.f("#9E9E9E").s().p("AgDAMIABgEQADgMgBgCQAAgBAAAAQAAgBAAAAQgBgBAAAAQgBAAgBAAIgBABQgDACgBADIgCgEQABgEAEgCQAFgEAEAGIAAACQACAGgDAHIgBADIAHgFIACAFIgNAJg");
	this.shape_141.setTransform(137,190.2);

	this.shape_142 = new cjs.Shape();
	this.shape_142.graphics.f("#9E9E9E").s().p("AgCAPQgDgCgCgFQgDgHACgGQACgFAFgDIABgBIAAAAIABAFIgBAAQgFAFACAEQAAgCACgBQAFgEAEAIQAEAIgIAFIgEABIgCAAgAgBABQAAAAgBABQAAAAAAABQgBAAAAABQAAAAAAABIAAACQADAFACgCIAAAAQADgCgCgEQAAgBAAgBQgBAAAAgBQgBAAAAAAQgBgBAAAAIgBABg");
	this.shape_142.setTransform(138.8,188.9);

	this.shape_143 = new cjs.Shape();
	this.shape_143.graphics.f("#9E9E9E").s().p("AgDAMIABgFQADgKgBgDQAAgBAAgBQAAAAAAAAQgBgBAAAAQgBAAgBAAIgBABIgEAEIgDgDQADgFADgCQAFgDAEAFIAAACQACAIgDAGIgBADIAIgFIACAFIgOAJg");
	this.shape_143.setTransform(126.1,196.4);

	this.shape_144 = new cjs.Shape();
	this.shape_144.graphics.f("#9E9E9E").s().p("AgCALQACABACgCQAEgCgCgFQgBgDgFACIgDACIgEgNIALgHIABAGIgGAEIABAFIABgBQACgCADAAQAEACABADQADAJgIAFQgDACgDAAg");
	this.shape_144.setTransform(127.8,195.3);

	this.shape_145 = new cjs.Shape();
	this.shape_145.graphics.f("#9E9E9E").s().p("AACAIIgIAFIgCgEIACgTIAGgDIAFAOIACgBIACAEIgDABIADAGIgFADgAgDAGIADgDIgBgFIAAABIgCgFg");
	this.shape_145.setTransform(117.3,201.3);

	this.shape_146 = new cjs.Shape();
	this.shape_146.graphics.f("#9E9E9E").s().p("AgDAMIABgFQADgKgBgEQAAAAAAgBQAAAAAAgBQgBAAAAAAQgBAAgBAAIgBABQgCABgBADIgEgDQADgFAEgCQAEgDAEAFIABACQABAIgDAGIgBADIAIgFIACAFIgOAJg");
	this.shape_146.setTransform(115.3,202.7);

	this.shape_147 = new cjs.Shape();
	this.shape_147.graphics.f("#9E9E9E").s().p("AgDAMIABgEQADgMgBgCQAAgBAAAAQAAgBAAAAQgBAAAAgBQgBAAgBAAIgBABIgEAFIgDgEQADgEAEgCQAEgEAEAGIABACQABAHgDAGIgBADIAIgFIACAFIgOAJg");
	this.shape_147.setTransform(104.5,208.9);

	this.shape_148 = new cjs.Shape();
	this.shape_148.graphics.f("#9E9E9E").s().p("AgBAPIgBgFIAFgBQAEgCgCgDQgCgDgDABIgCABIgBgDIACgBQACgBgBgEQAAgBAAAAQAAgBAAAAQgBAAgBAAQAAAAgBABIgEAEIgCgEQACgEADgBQAEgEAEAEIABACQACAFgEADQAFgBACAEIAAAAQABAEgBADQgCAEgDACIgFABIgBAAg");
	this.shape_148.setTransform(106.2,207.8);

	this.shape_149 = new cjs.Shape();
	this.shape_149.graphics.f("#9E9E9E").s().p("AgDAMIACgEQACgLgBgDQAAgBAAgBQAAAAAAgBQgBAAAAAAQgBAAAAAAIgCABQgDABgBADIgCgDQABgFAFgCQAEgDAEAFIABACQABAIgDAGIgBADIAHgFIACAFIgNAJg");
	this.shape_149.setTransform(93.8,215.1);

	this.shape_150 = new cjs.Shape();
	this.shape_150.graphics.f("#9E9E9E").s().p("AgDAMIABgFQADgKgBgDQAAgBAAgBQAAAAAAAAQgBgBAAAAQgBAAgBAAIgBABIgEAEIgDgDQADgFAEgCQAEgDAEAFIABACQABAIgDAGIgBADIAIgFIACAFIgOAJg");
	this.shape_150.setTransform(95.5,214.1);

	this.shape_151 = new cjs.Shape();
	this.shape_151.graphics.f("#9E9E9E").s().p("AgDAMIACgFQACgKgBgDQAAgBAAgBQAAAAgBAAQAAgBgBAAQAAAAgBAAIgBABQgCABgBADIgDgDQACgFADgCQAFgDADAFIABACQACAIgDAGIgBADIAIgFIABAFIgNAJg");
	this.shape_151.setTransform(154.2,166.4);

	this.shape_152 = new cjs.Shape();
	this.shape_152.graphics.f("#9E9E9E").s().p("AgCgFIgEAEIgCgEIAFgGIADgCIAJAZIgEACg");
	this.shape_152.setTransform(155.9,165.2);

	this.shape_153 = new cjs.Shape();
	this.shape_153.graphics.f("#9E9E9E").s().p("AgGAEQgGgMAIgFQAHgEAFANQAFAMgIAFIgEACQgEAAgDgLgAgCgIQgDACADAIQACAJADgCIABAAQACgDgDgGQgDgIgCAAIAAAAg");
	this.shape_153.setTransform(145.1,171.5);

	this.shape_154 = new cjs.Shape();
	this.shape_154.graphics.f("#9E9E9E").s().p("AgDAMIACgFQACgKgBgEQAAAAAAgBQAAAAgBgBQAAAAgBAAQAAAAgBAAIgBABQgDACAAACIgDgDQABgEAEgDQAFgDADAFIABACQACAIgDAFIgBAEIAIgFIABAFIgNAJg");
	this.shape_154.setTransform(143.4,172.6);

	this.shape_155 = new cjs.Shape();
	this.shape_155.graphics.f("#9E9E9E").s().p("AgDgFIgDAEIgCgEIAEgGIAEgCIAJAZIgFACg");
	this.shape_155.setTransform(132.5,178.6);

	this.shape_156 = new cjs.Shape();
	this.shape_156.graphics.f("#9E9E9E").s().p("AgEAMIAAgBQgDgFAEgEQgEgBgBgCQgDgIAHgDQAEgEADAFIABABQACAFgCADQAEgBACAEQACAJgHADQgBABgBAAQAAAAgBAAQAAABgBAAQAAAAgBAAQgBAAgDgDgAAAACQgBACABADQAAABAAAAQAAABAAAAQAAAAABAAQABAAABAAIAAAAQADgCgBgDQgBgBAAAAQAAgBgBAAQAAAAAAAAQgBgBgBAAIgBABgAgDgIQgBAAAAABQAAAAgBABQAAAAAAABQAAAAABABQAAABAAAAQABABAAAAQABAAABAAQAAAAABAAQAAgBAAAAQAAgBAAAAQAAgBAAAAQAAgBAAgBQAAAAAAgBQAAAAAAAAQgBgBAAAAQAAAAAAAAIgCABg");
	this.shape_156.setTransform(123.6,183.9);

	this.shape_157 = new cjs.Shape();
	this.shape_157.graphics.f("#9E9E9E").s().p("AgCgFIgEAEIgCgEIAEgGIAEgCIAJAZIgFACg");
	this.shape_157.setTransform(121.7,184.9);

	this.shape_158 = new cjs.Shape();
	this.shape_158.graphics.f("#9E9E9E").s().p("AADgIIgIAFIgCgFIAOgIIABAEIAAAaIgGADg");
	this.shape_158.setTransform(112.4,190.1);

	this.shape_159 = new cjs.Shape();
	this.shape_159.graphics.f("#9E9E9E").s().p("AgCgFIgBAAIgCAFIgDgFIAEgGIAEgDIAJAZIgFADg");
	this.shape_159.setTransform(110.9,191.1);

	this.shape_160 = new cjs.Shape();
	this.shape_160.graphics.f("#9E9E9E").s().p("AgCAPQgEgCgBgFQgCgGABgHQABgFAFgDIABgBIABAAIABAFIgBAAQgEAEAAAFQAAgCADgBQAGgEADAIQAEAIgIAFIgEABIgCAAgAgBABQAAAAgBABQAAAAAAABQgBAAAAABQAAAAAAABIAAACQADAFACgCIAAAAQACgCgBgEQAAgBgBgBQAAAAgBgBQAAAAAAAAQgBAAAAAAIgBAAg");
	this.shape_160.setTransform(102.2,196.3);

	this.shape_161 = new cjs.Shape();
	this.shape_161.graphics.f("#9E9E9E").s().p("AgCgFIgDAEIgDgEIAEgGIAEgCIAJAZIgFACg");
	this.shape_161.setTransform(100.2,197.3);

	this.shape_162 = new cjs.Shape();
	this.shape_162.graphics.f("#9E9E9E").s().p("AgCAMQACgBACgBQAEgCgCgEQgBgEgFADIgDABIgEgNIALgGIACAEIgHAGIABADIABgBQACgBADAAQAEABABAEQAEAIgJAGIgFABg");
	this.shape_162.setTransform(91.1,202.6);

	this.shape_163 = new cjs.Shape();
	this.shape_163.graphics.f("#9E9E9E").s().p("AgCgFIgDAEIgDgEIAEgGIAEgCIAJAZIgEACg");
	this.shape_163.setTransform(89.3,203.6);

	this.shape_164 = new cjs.Shape();
	this.shape_164.graphics.f("#9E9E9E").s().p("AgCgFIgEAEIgCgEIAEgGIAEgCIAJAYIgFADg");
	this.shape_164.setTransform(149.8,154.8);

	this.shape_165 = new cjs.Shape();
	this.shape_165.graphics.f("#9E9E9E").s().p("AgCAKQACAAADgCQAEgBgCgEQgCgDgDACIgBABIgCgEIACgBQACgBgBgEQAAAAAAgBQAAAAAAAAQgBAAgBAAQAAAAgBAAQgDACAAACIgDgEQACgDADgCQAEgDADAEIABACQADAEgEAEQAFgBACADIAAABQABAEgBADQgCAEgDABQgDACgDAAg");
	this.shape_165.setTransform(140.7,160.2);

	this.shape_166 = new cjs.Shape();
	this.shape_166.graphics.f("#9E9E9E").s().p("AgCgGIAAABIgEAEIgCgEIAEgGIAEgCIAJAYIgFADg");
	this.shape_166.setTransform(139,161.1);

	this.shape_167 = new cjs.Shape();
	this.shape_167.graphics.f("#9E9E9E").s().p("AgDAMIABgEQADgLgBgDQAAgBAAAAQAAgBgBAAQAAAAgBgBQAAAAgBAAIgBABIgEAFIgDgEQADgFADgCQAFgDADAFIABACQACAIgDAGIgBADIAIgFIACAFIgOAJg");
	this.shape_167.setTransform(130,166.5);

	this.shape_168 = new cjs.Shape();
	this.shape_168.graphics.f("#9E9E9E").s().p("AgCgFIgEAFIgCgFIAEgGIAEgCIAJAZIgFACg");
	this.shape_168.setTransform(128.2,167.3);

	this.shape_169 = new cjs.Shape();
	this.shape_169.graphics.f("#9E9E9E").s().p("AgDgFIgCAEIgDgEIAEgGIAEgCIAJAYIgFADg");
	this.shape_169.setTransform(119.2,172.5);

	this.shape_170 = new cjs.Shape();
	this.shape_170.graphics.f("#9E9E9E").s().p("AgCgFIgEAEIgCgEIAEgGIAEgCIAJAZIgFACg");
	this.shape_170.setTransform(117.4,173.5);

	this.shape_171 = new cjs.Shape();
	this.shape_171.graphics.f("#9E9E9E").s().p("AADgIIgIAGIgCgGIANgIIACAEIAAAaIgFADg");
	this.shape_171.setTransform(145.1,143.5);

	this.shape_172 = new cjs.Shape();
	this.shape_172.graphics.f("#9E9E9E").s().p("AgCAPQgDgCgCgFQgDgHACgGQACgFAEgDIACgBIAAAAIABAFIgBAAQgFAEABAFIADgDQAFgEAEAIQAEAIgIAFIgEABIgCAAgAgBABQAAABgBAAQAAABAAAAQAAABAAAAQAAABAAAAIAAACQACAFACgCIAAAAQADgBgCgFQAAgBAAgBQgBAAAAgBQgBAAAAAAQAAAAgBAAIgBAAg");
	this.shape_172.setTransform(134.9,149.6);

	this.shape_173 = new cjs.Shape();
	this.shape_173.graphics.f("#9E9E9E").s().p("AgCAQIgBgFIAEgBQAEgCgBgEQgCgEgFADIgCACIgEgOIAKgGIACAFIgHAEIABAEIABAAQACgCADAAQAEACABACQAEAKgJAFIgEABIgBAAg");
	this.shape_173.setTransform(124,156);

	this.shape_174 = new cjs.Shape();
	this.shape_174.graphics.f("#9E9E9E").s().p("AgCAKIAEgBQAEgBgBgFQgCgDgDACIgCABIgCgDIACgBQADgCgBgDQAAgBAAAAQAAgBgBAAQAAAAgBAAQAAAAgBABIgEAEIgDgEIAGgGQAEgDADAEIABACQACAEgDAEQAFgBACAEQADAIgJAFQgDABgCAAg");
	this.shape_174.setTransform(102.3,168.5);

	this.shape_175 = new cjs.Shape();
	this.shape_175.graphics.f("#9E9E9E").s().p("AgDAMIABgEQADgMgBgCQAAgBAAAAQAAgBAAAAQgBAAAAgBQgBAAgBAAIgBABIgEAFIgDgEQADgEAEgCQAEgEAEAGIABACQABAHgDAGIgBADIAIgFIACAFIgOAJg");
	this.shape_175.setTransform(91.5,174.8);

	this.shape_176 = new cjs.Shape();
	this.shape_176.graphics.f("#9E9E9E").s().p("AgDgFIgCAEIgDgEIAEgGIAEgCIAJAZIgFACg");
	this.shape_176.setTransform(80.7,180.9);

	this.shape_177 = new cjs.Shape();
	this.shape_177.graphics.f("#9E9E9E").s().p("AgEAMIgBgBQgBgFADgEQgEgBgBgCQgCgDACgDQABgEADgBQAEgEADAFIABABQACAEgDAEQAGAAAAADQACADgCAEQgBAEgEABQAAABgBAAQgBAAAAABQgBAAAAAAQgBAAAAAAQgCAAgCgDgAAAACQgBACABADQAAABAAAAQAAABAAAAQABAAAAAAQABABAAAAIABgBQADgBgBgEQAAgBgBAAQAAgBAAAAQgBAAAAgBQgBAAgBAAIgBABgAgDgIQAAAAgBABQAAAAgBABQAAAAAAABQAAAAABABQAAABAAAAQABAAAAABQABAAAAAAQABAAABAAQAAgBAAAAQAAgBAAAAQAAgBAAgBQAAAAAAgBQAAAAAAgBQAAAAAAAAQAAgBgBAAQAAAAAAAAIgCABg");
	this.shape_177.setTransform(85.1,192.3);

	this.shape_178 = new cjs.Shape();
	this.shape_178.graphics.f("#9E9E9E").s().p("AgBALIABAAIAAgBQABAAAAgBQABAAAAAAQABgBAAAAQAAgBABAAIABgHQgBADgDABQgFAEgDgIQgCgCABgFQABgEAEgDQADgCADACQADADACAEQADAHgCAHQgCAEgFADIgCACgAgBgIQgEACADADQABAEACgBIACgEIAAAAIAAgBQgCgEgBAAIgBABg");
	this.shape_178.setTransform(95.8,186.2);

	this.shape_179 = new cjs.Shape();
	this.shape_179.graphics.f("#9E9E9E").s().p("AgHAEQgFgMAIgFQAGgEAGANQAFANgIAEIgEACQgEAAgEgLgAgCgIQgDACADAIQACAKADgDIAAAAQADgCgDgHQgDgIgBAAIgBAAg");
	this.shape_179.setTransform(108.4,178.8);

	this.shape_180 = new cjs.Shape();
	this.shape_180.graphics.f("#9E9E9E").s().p("AgCgFIgEAEIgCgEIAEgGIAEgCIAJAYIgFADg");
	this.shape_180.setTransform(106.6,179.8);

	this.shape_181 = new cjs.Shape();
	this.shape_181.graphics.f("#9E9E9E").s().p("AACAIIgIAFIgCgEIACgTIAGgDIAFAOIACgBIACAEIgDACIADAFIgFADgAgDAGIADgDIgDgJg");
	this.shape_181.setTransform(113.3,162.1);

	this.shape_182 = new cjs.Shape();
	this.shape_182.graphics.f("#9E9E9E").s().p("AAAALIAAAAIAAgBQADgCABgCIABgGQgBAEgDAAQgGAEgDgIQgDgIAIgGQADgCADACQADADACAEQADAHgCAGQgCAGgFADIgBAAIgBABgAgBgJQgDADACAEQACADABgBIACgDIAAgCQgCgEgCAAIAAAAg");
	this.shape_182.setTransform(134.2,177.8);

	this.shape_183 = new cjs.Shape();
	this.shape_183.graphics.f("#9E9E9E").s().p("AACAIIgIAFIgCgEIACgTIAGgDIAFAOIACgBIACAEIgDABIADAHIgFACgAgDAGIADgDIgDgJg");
	this.shape_183.setTransform(151.8,153.7);

	this.shape_184 = new cjs.Shape();
	this.shape_184.graphics.f("#7AC2BF").s().p("AhPgaIByhDIAtB5IhxBBgAhGgXIApBqIBkg7Igohqg");
	this.shape_184.setTransform(113.6,221.1);

	this.shape_185 = new cjs.Shape();
	this.shape_185.graphics.f("#FFFFFF").s().p("AhLgYIBrg/IAsBxIhrA+g");
	this.shape_185.setTransform(113.6,221.1);

	this.shape_186 = new cjs.Shape();
	this.shape_186.graphics.f("#7AC2BF").s().p("AhPgaIBxhDIAuB4IhxBCgAhGgXIApBqIBkg7Igphpg");
	this.shape_186.setTransform(89.8,193.3);

	this.shape_187 = new cjs.Shape();
	this.shape_187.graphics.f("#FFFFFF").s().p("AhLgYIBrg/IAsBxIhrA+g");
	this.shape_187.setTransform(89.8,193.3);

	this.shape_188 = new cjs.Shape();
	this.shape_188.graphics.f("#7AC2BF").s().p("AhPgaIBxhDIAuB4IhxBCgAhGgXIAoBqIBlg7Igphpg");
	this.shape_188.setTransform(111.4,180.8);

	this.shape_189 = new cjs.Shape();
	this.shape_189.graphics.f("#FFFFFF").s().p("AhLgZIBrg+IAsBxIhrA+g");
	this.shape_189.setTransform(111.4,180.8);

	this.shape_190 = new cjs.Shape();
	this.shape_190.graphics.f("#7AC2BF").s().p("AhPgaIBxhCIAuB3IhxBCgAhGgXIAoBpIBlg6Igphpg");
	this.shape_190.setTransform(139.4,150.7);

	this.shape_191 = new cjs.Shape();
	this.shape_191.graphics.f("#FFFFFF").s().p("AhLgZIBrg+IAsBxIhrA+g");
	this.shape_191.setTransform(139.4,150.7);

	this.shape_192 = new cjs.Shape();
	this.shape_192.graphics.f("#7AC2BF").s().p("AhPgbIBxhBIAuB3IhxBCgAhGgXIApBpIBkg6Igphpg");
	this.shape_192.setTransform(150.2,144.5);

	this.shape_193 = new cjs.Shape();
	this.shape_193.graphics.f("#FFFFFF").s().p("AhLgZIBrg+IAsBxIhrA+g");
	this.shape_193.setTransform(150.2,144.5);

	this.shape_194 = new cjs.Shape();
	this.shape_194.graphics.f("#7AC2BF").s().p("AhPgaIBxhCIAuB3IhxBCgAhGgXIAoBqIBlg7Igphpg");
	this.shape_194.setTransform(154.6,155.8);

	this.shape_195 = new cjs.Shape();
	this.shape_195.graphics.f("#FFFFFF").s().p("AhLgZIBrg+IArBwIhqA/g");
	this.shape_195.setTransform(154.6,155.9);

	this.shape_196 = new cjs.Shape();
	this.shape_196.graphics.f("#7AC2BF").s().p("AhPgaIBxhCIAuB3IhxBCgAhGgXIApBpIBkg6Igphqg");
	this.shape_196.setTransform(128.6,157);

	this.shape_197 = new cjs.Shape();
	this.shape_197.graphics.f("#FFFFFF").s().p("AhLgYIBrg/IAsBwIhrA/g");
	this.shape_197.setTransform(128.6,157);

	this.shape_198 = new cjs.Shape();
	this.shape_198.graphics.f("#7AC2BF").s().p("AhPgaIBxhCIAuB3IhxBCgAhGgXIApBqIBkg8Igohpg");
	this.shape_198.setTransform(96.2,175.7);

	this.shape_199 = new cjs.Shape();
	this.shape_199.graphics.f("#FFFFFF").s().p("AhLgZIBsg+IArBwIhrA/g");
	this.shape_199.setTransform(96.2,175.7);

	this.shape_200 = new cjs.Shape();
	this.shape_200.graphics.f("#7AC2BF").s().p("AhPgaIByhCIAtB3IhxBDgAhGgXIAoBpIBlg6Igphqg");
	this.shape_200.setTransform(100.6,187);

	this.shape_201 = new cjs.Shape();
	this.shape_201.graphics.f("#FFFFFF").s().p("AhLgZIBrg+IAsBwIhrA/g");
	this.shape_201.setTransform(100.6,187);

	this.shape_202 = new cjs.Shape();
	this.shape_202.graphics.f("#7AC2BF").s().p("AhNgaIAAAAIBvg/IAsB0IAAAAIhuA/gAhLgZIArBxIBsg/Igrhxg");
	this.shape_202.setTransform(137.3,179.7);

	this.shape_203 = new cjs.Shape();
	this.shape_203.graphics.f("#F54730").s().p("AhMgZIBtg/IAsByIhtBAg");
	this.shape_203.setTransform(137.3,179.7);

	this.shape_204 = new cjs.Shape();
	this.shape_204.graphics.f("#7AC2BF").s().p("AhPgaIBxhCIAuB3IhxBDgAhGgXIApBqIBkg7Igohqg");
	this.shape_204.setTransform(104.9,198.4);

	this.shape_205 = new cjs.Shape();
	this.shape_205.graphics.f("#FFFFFF").s().p("AhKgYIBrg/IAqBwIhrA/g");
	this.shape_205.setTransform(104.9,198.4);

	this.shape_206 = new cjs.Shape();
	this.shape_206.graphics.f("#7AC2BF").s().p("AhPgaIBxhCIAuB4IhxBBgAhGgXIApBqIBkg7Igphqg");
	this.shape_206.setTransform(109.2,209.7);

	this.shape_207 = new cjs.Shape();
	this.shape_207.graphics.f("#FFFFFF").s().p("AhLgYIBrg/IAsBwIhrA/g");
	this.shape_207.setTransform(109.2,209.7);

	this.shape_208 = new cjs.Shape();
	this.shape_208.graphics.f("#7AC2BF").s().p("AhPgaIBxhCIAuB3IhxBCgAhGgXIAoBpIBlg6Igphqg");
	this.shape_208.setTransform(115.7,192.1);

	this.shape_209 = new cjs.Shape();
	this.shape_209.graphics.f("#FFFFFF").s().p("AhKgZIBrg+IAqBxIhrA+g");
	this.shape_209.setTransform(115.7,192.1);

	this.shape_210 = new cjs.Shape();
	this.shape_210.graphics.f("#7AC2BF").s().p("AhPgaIBxhCIAuB3IhxBCgAhFgXIAoBpIBkg6Igphqg");
	this.shape_210.setTransform(120,203.5);

	this.shape_211 = new cjs.Shape();
	this.shape_211.graphics.f("#FFFFFF").s().p("AhLgZIBrg+IAsBxIhrA+g");
	this.shape_211.setTransform(120,203.5);

	this.shape_212 = new cjs.Shape();
	this.shape_212.graphics.f("#7AC2BF").s().p("AhPgaIBxhCIAuB3IhxBCgAhGgXIAoBpIBlg6Igphpg");
	this.shape_212.setTransform(122.2,174.6);

	this.shape_213 = new cjs.Shape();
	this.shape_213.graphics.f("#FFFFFF").s().p("AhLgZIBrg+IAsBxIhrA+g");
	this.shape_213.setTransform(122.2,174.6);

	this.shape_214 = new cjs.Shape();
	this.shape_214.graphics.f("#7AC2BF").s().p("AhPgaIBxhCIAuB3IhxBCgAhGgXIAoBqIBlg7Igphpg");
	this.shape_214.setTransform(124.4,214.8);

	this.shape_215 = new cjs.Shape();
	this.shape_215.graphics.f("#FFFFFF").s().p("AhKgZIBrg+IArBxIhrA+g");
	this.shape_215.setTransform(124.4,214.9);

	this.shape_216 = new cjs.Shape();
	this.shape_216.graphics.f("#7AC2BF").s().p("AhPgaIBxhCIAuB3IhyBCgAhGgXIAoBqIBlg7Igphpg");
	this.shape_216.setTransform(126.5,185.9);

	this.shape_217 = new cjs.Shape();
	this.shape_217.graphics.f("#FFFFFF").s().p("AhKgZIBrg+IAqBxIhrA+g");
	this.shape_217.setTransform(126.5,185.9);

	this.shape_218 = new cjs.Shape();
	this.shape_218.graphics.f("#7AC2BF").s().p("AhPgbIBxhBIAuB3IhxBDgAhGgXIApBpIBlg6Igqhqg");
	this.shape_218.setTransform(130.8,197.3);

	this.shape_219 = new cjs.Shape();
	this.shape_219.graphics.f("#FFFFFF").s().p("AhLgZIBrg+IAsBxIhrA+g");
	this.shape_219.setTransform(130.8,197.3);

	this.shape_220 = new cjs.Shape();
	this.shape_220.graphics.f("#7AC2BF").s().p("AhPgaIBxhDIAuB4IhyBDgAhHgXIApBqIBkg7Igohqg");
	this.shape_220.setTransform(133,168.3);

	this.shape_221 = new cjs.Shape();
	this.shape_221.graphics.f("#FFFFFF").s().p("AhLgYIBrg/IAsBwIhrA/g");
	this.shape_221.setTransform(133,168.3);

	this.shape_222 = new cjs.Shape();
	this.shape_222.graphics.f("#7AC2BF").s().p("AhPgaIBxhCIAuB3IhxBCgAhGgXIApBpIBkg6Igphqg");
	this.shape_222.setTransform(141.6,191);

	this.shape_223 = new cjs.Shape();
	this.shape_223.graphics.f("#FFFFFF").s().p("AhLgYIBrg/IAsBxIhrA+g");
	this.shape_223.setTransform(141.6,191);

	this.shape_224 = new cjs.Shape();
	this.shape_224.graphics.f("#7AC2BF").s().p("AhPgaIBxhCIAuB3IhxBCgAhGgXIAoBqIBlg7Igphpg");
	this.shape_224.setTransform(143.8,162.1);

	this.shape_225 = new cjs.Shape();
	this.shape_225.graphics.f("#FFFFFF").s().p("AhLgZIBrg+IAsBxIhrA+g");
	this.shape_225.setTransform(143.8,162.1);

	this.shape_226 = new cjs.Shape();
	this.shape_226.graphics.f("#7AC2BF").s().p("AhPgaIBxhCIAuB3IhxBCgAhGgXIApBpIBkg6Igphqg");
	this.shape_226.setTransform(148.1,173.4);

	this.shape_227 = new cjs.Shape();
	this.shape_227.graphics.f("#FFFFFF").s().p("AhKgZIBrg+IAqBxIhrA+g");
	this.shape_227.setTransform(148.1,173.4);

	this.shape_228 = new cjs.Shape();
	this.shape_228.graphics.f("#7AC2BF").s().p("AhPgbIBxhBIAuB3IhxBDgAhGgWIApBoIBkg6Igphqg");
	this.shape_228.setTransform(152.4,184.8);

	this.shape_229 = new cjs.Shape();
	this.shape_229.graphics.f("#FFFFFF").s().p("AhLgZIBrg+IAsBxIhrA+g");
	this.shape_229.setTransform(152.4,184.8);

	this.shape_230 = new cjs.Shape();
	this.shape_230.graphics.f("#7AC2BF").s().p("AhPgaIBxhCIAuB3IhxBCgAhGgXIApBqIBkg7Igohpg");
	this.shape_230.setTransform(158.9,167.2);

	this.shape_231 = new cjs.Shape();
	this.shape_231.graphics.f("#FFFFFF").s().p("AhKgZIBqg+IArBwIhrA/g");
	this.shape_231.setTransform(158.9,167.2);

	this.shape_232 = new cjs.Shape();
	this.shape_232.graphics.f("#7AC2BF").s().p("AhPgbIBxhCIAuB4IhxBDgAhGgXIApBqIBkg7Igphqg");
	this.shape_232.setTransform(163.2,178.6);

	this.shape_233 = new cjs.Shape();
	this.shape_233.graphics.f("#FFFFFF").s().p("AhLgYIBrg/IAsBwIhrA/g");
	this.shape_233.setTransform(163.2,178.6);

	this.shape_234 = new cjs.Shape();
	this.shape_234.graphics.f("#7AC2BF").s().p("AhPgaIBxhCIAuB3IhxBCgAhGgXIApBqIBkg7Igohpg");
	this.shape_234.setTransform(94.1,204.6);

	this.shape_235 = new cjs.Shape();
	this.shape_235.graphics.f("#FFFFFF").s().p("AhKgYIBrg/IAqBxIhqA+g");
	this.shape_235.setTransform(94.1,204.6);

	this.shape_236 = new cjs.Shape();
	this.shape_236.graphics.f("#7AC2BF").s().p("AhPgaIBxhCIAuB3IhxBCgAhGgXIAoBqIBlg7Igphpg");
	this.shape_236.setTransform(98.4,215.9);

	this.shape_237 = new cjs.Shape();
	this.shape_237.graphics.f("#FFFFFF").s().p("AhKgZIBqg+IAsBxIhrA+g");
	this.shape_237.setTransform(98.5,216);

	this.shape_238 = new cjs.Shape();
	this.shape_238.graphics.f("#7AC2BF").s().p("AhPgaIBxhCIAuB3IhxBCgAhGgXIApBpIBkg6Igphqg");
	this.shape_238.setTransform(102.8,227.3);

	this.shape_239 = new cjs.Shape();
	this.shape_239.graphics.f("#FFFFFF").s().p("AhLgZIBrg+IAsBxIhrA+g");
	this.shape_239.setTransform(102.8,227.3);

	this.shape_240 = new cjs.Shape();
	this.shape_240.graphics.f("#7AC2BF").s().p("AhPgaIBxhCIAuB3IhxBCgAhGgXIApBqIBlg7Igphpg");
	this.shape_240.setTransform(117.8,163.2);

	this.shape_241 = new cjs.Shape();
	this.shape_241.graphics.f("#FFFFFF").s().p("AhLgZIBrg+IAsBxIhrA+g");
	this.shape_241.setTransform(117.8,163.2);

	this.shape_242 = new cjs.Shape();
	this.shape_242.graphics.f("#7AC2BF").s().p("AhPgaIBxhCIAuB3IhxBCgAhFgXIAoBpIBkg6Igohqg");
	this.shape_242.setTransform(107,169.4);

	this.shape_243 = new cjs.Shape();
	this.shape_243.graphics.f("#FFFFFF").s().p("AhKgZIBqg+IArBxIhrA+g");
	this.shape_243.setTransform(107.1,169.4);

	this.shape_244 = new cjs.Shape();
	this.shape_244.graphics.f("#7AC2BF").s().p("AhPgaIBxhCIAuB3IhxBCgAhGgXIAoBqIBlg7Igohpg");
	this.shape_244.setTransform(85.4,181.9);

	this.shape_245 = new cjs.Shape();
	this.shape_245.graphics.f("#FFFFFF").s().p("AhKgYIBqg/IArBwIhrA/g");
	this.shape_245.setTransform(85.5,181.9);

	this.shape_246 = new cjs.Shape();
	this.shape_246.graphics.f("#D9D9D9").s().p("AgFgHIAGgFIAEAUIgGAEg");
	this.shape_246.setTransform(69.2,167.7);

	this.shape_247 = new cjs.Shape();
	this.shape_247.graphics.f("#D9D9D9").s().p("AgFgHIAHgEIADAUIgGADg");
	this.shape_247.setTransform(70.5,166.9);

	this.shape_248 = new cjs.Shape();
	this.shape_248.graphics.f("#D9D9D9").s().p("AgMgCIAHgFIATAKIgIAFg");
	this.shape_248.setTransform(71.6,168.5);

	this.shape_249 = new cjs.Shape();
	this.shape_249.graphics.f("#D9D9D9").s().p("AgMgDIAHgEIATAKIgIAFg");
	this.shape_249.setTransform(70.3,169.3);

	this.shape_250 = new cjs.Shape();
	this.shape_250.graphics.f("#D9D9D9").s().p("AgNgDIAIgFIATAMIgIAFg");
	this.shape_250.setTransform(67.6,166.2);

	this.shape_251 = new cjs.Shape();
	this.shape_251.graphics.f("#D9D9D9").s().p("AgNgDIAIgFIASAMIgHAFg");
	this.shape_251.setTransform(69,165.5);

	this.instance_13 = new lib.ClipGroup_2_0();
	this.instance_13.parent = this;
	this.instance_13.setTransform(71.4,164.7,1,1,0,0,0,8.7,9.7);

	this.shape_252 = new cjs.Shape();
	this.shape_252.graphics.f("#8C8C8C").s().p("AgEAXQgHgCgEgHIgBgEQgEgJADgIQADgIAHgGQAHgDAGACQAGACAEAHIABAEQAEAJgDAIQgDAJgHAFQgEACgDAAIgFgBg");
	this.shape_252.setTransform(74.2,172.3);

	this.shape_253 = new cjs.Shape();
	this.shape_253.graphics.f("#D9D9D9").s().p("AgEgHIAGgEIAEATIgHAEg");
	this.shape_253.setTransform(75,164.3);

	this.shape_254 = new cjs.Shape();
	this.shape_254.graphics.f("#D9D9D9").s().p("AgEgHIAGgEIADATIgGAEg");
	this.shape_254.setTransform(76.3,163.5);

	this.shape_255 = new cjs.Shape();
	this.shape_255.graphics.f("#D9D9D9").s().p("AgMgCIAHgFIATAKIgIAFg");
	this.shape_255.setTransform(77.5,165.1);

	this.shape_256 = new cjs.Shape();
	this.shape_256.graphics.f("#D9D9D9").s().p("AgMgCIAHgFIATAKIgIAFg");
	this.shape_256.setTransform(76.1,165.9);

	this.shape_257 = new cjs.Shape();
	this.shape_257.graphics.f("#D9D9D9").s().p("AgNgDIAIgFIATAMIgIAFg");
	this.shape_257.setTransform(73.5,162.8);

	this.shape_258 = new cjs.Shape();
	this.shape_258.graphics.f("#D9D9D9").s().p("AgNgDIAIgFIATAMIgIAFg");
	this.shape_258.setTransform(74.8,162.1);

	this.instance_14 = new lib.ClipGroup_3();
	this.instance_14.parent = this;
	this.instance_14.setTransform(77.3,161.4,1,1,0,0,0,8.8,9.8);

	this.shape_259 = new cjs.Shape();
	this.shape_259.graphics.f("#8C8C8C").s().p("AgEAXQgIgDgCgGQgBAAAAgBQAAAAgBgBQAAAAAAgBQAAAAAAgBQgDgIACgIQADgKAIgFQAGgEAFADQAIACACAHQABAAAAABQAAAAABABQAAAAAAABQAAAAAAABQADAJgCAIQgCAJgJAFQgDACgEAAIgEgBg");
	this.shape_259.setTransform(80,169);

	this.shape_260 = new cjs.Shape();
	this.shape_260.graphics.f("#D9D9D9").s().p("AgEgHIAGgEIAEATIgHAEg");
	this.shape_260.setTransform(80.8,160.9);

	this.shape_261 = new cjs.Shape();
	this.shape_261.graphics.f("#D9D9D9").s().p("AgEgHIAGgEIAEATIgHAEg");
	this.shape_261.setTransform(82.2,160.2);

	this.shape_262 = new cjs.Shape();
	this.shape_262.graphics.f("#D9D9D9").s().p("AgNgCIAIgFIATAKIgIAFg");
	this.shape_262.setTransform(83.3,161.7);

	this.shape_263 = new cjs.Shape();
	this.shape_263.graphics.f("#D9D9D9").s().p("AgNgCIAJgFIARAKIgHAFg");
	this.shape_263.setTransform(81.9,162.5);

	this.shape_264 = new cjs.Shape();
	this.shape_264.graphics.f("#D9D9D9").s().p("AgNgEIAIgEIATAMIgIAFg");
	this.shape_264.setTransform(79.3,159.5);

	this.shape_265 = new cjs.Shape();
	this.shape_265.graphics.f("#D9D9D9").s().p("AgNgDIAIgFIATAMIgIAFg");
	this.shape_265.setTransform(80.6,158.7);

	this.instance_15 = new lib.ClipGroup_4();
	this.instance_15.parent = this;
	this.instance_15.setTransform(83.1,158,1,1,0,0,0,8.7,9.8);

	this.shape_266 = new cjs.Shape();
	this.shape_266.graphics.f("#8C8C8C").s().p("AgEAXQgHgCgEgHIgBgEQgEgJADgIQADgJAHgFQAHgDAGACQAGACAEAHIABAEQAEAJgDAIQgDAJgHAFQgEACgEAAIgEgBg");
	this.shape_266.setTransform(85.8,165.6);

	this.shape_267 = new cjs.Shape();
	this.shape_267.graphics.f("#D9D9D9").s().p("AgEgHIAGgEIADATIgGAEg");
	this.shape_267.setTransform(86.6,157.5);

	this.shape_268 = new cjs.Shape();
	this.shape_268.graphics.f("#D9D9D9").s().p("AgEgHIAFgEIAFATIgHAFg");
	this.shape_268.setTransform(88,156.8);

	this.shape_269 = new cjs.Shape();
	this.shape_269.graphics.f("#D9D9D9").s().p("AgMgCIAIgFIARAKIgIAFg");
	this.shape_269.setTransform(89.1,158.3);

	this.shape_270 = new cjs.Shape();
	this.shape_270.graphics.f("#D9D9D9").s().p("AgMgCIAHgFIASAKIgIAFg");
	this.shape_270.setTransform(87.8,159.1);

	this.shape_271 = new cjs.Shape();
	this.shape_271.graphics.f("#D9D9D9").s().p("AgNgDIAIgFIATAMIgIAFg");
	this.shape_271.setTransform(85.1,156.1);

	this.shape_272 = new cjs.Shape();
	this.shape_272.graphics.f("#D9D9D9").s().p("AgNgDIAIgFIATAMIgIAEg");
	this.shape_272.setTransform(86.4,155.3);

	this.instance_16 = new lib.ClipGroup_5();
	this.instance_16.parent = this;
	this.instance_16.setTransform(88.9,154.7,1,1,0,0,0,8.7,9.8);

	this.shape_273 = new cjs.Shape();
	this.shape_273.graphics.f("#8C8C8C").s().p("AgFAXQgHgDgDgGIgBgEQgDgJACgIQADgJAHgFQAHgDAGACQAGACAEAHIABAEQAEAJgDAIQgDAJgHAFQgEACgEAAIgFgBg");
	this.shape_273.setTransform(91.7,162.2);

	this.shape_274 = new cjs.Shape();
	this.shape_274.graphics.f("#D9D9D9").s().p("AgFgHIAHgEIADATIgFAFg");
	this.shape_274.setTransform(92.5,154.2);

	this.shape_275 = new cjs.Shape();
	this.shape_275.graphics.f("#D9D9D9").s().p("AgFgHIAHgEIADATIgFAEg");
	this.shape_275.setTransform(93.8,153.4);

	this.shape_276 = new cjs.Shape();
	this.shape_276.graphics.f("#D9D9D9").s().p("AgNgCIAJgFIASAKIgIAFg");
	this.shape_276.setTransform(94.9,154.9);

	this.shape_277 = new cjs.Shape();
	this.shape_277.graphics.f("#D9D9D9").s().p("AgNgCIAIgFIASAKIgHAFg");
	this.shape_277.setTransform(93.6,155.7);

	this.shape_278 = new cjs.Shape();
	this.shape_278.graphics.f("#D9D9D9").s().p("AgMgDIAHgFIATAMIgIAFg");
	this.shape_278.setTransform(91,152.7);

	this.shape_279 = new cjs.Shape();
	this.shape_279.graphics.f("#D9D9D9").s().p("AgNgDIAIgFIATAMIgIAFg");
	this.shape_279.setTransform(92.3,151.9);

	this.instance_17 = new lib.ClipGroup_6();
	this.instance_17.parent = this;
	this.instance_17.setTransform(94.7,151.3,1,1,0,0,0,8.7,9.8);

	this.shape_280 = new cjs.Shape();
	this.shape_280.graphics.f("#8C8C8C").s().p("AgEAXQgHgCgEgHIgBgEQgEgJADgIQADgIAHgGQAHgDAGACQAHACADAHIABAEQAEAJgDAIQgDAJgHAFQgEACgDAAIgFgBg");
	this.shape_280.setTransform(97.5,158.8);

	this.shape_281 = new cjs.Shape();
	this.shape_281.graphics.f("#D9D9D9").s().p("AgFgHIAHgFIADAUIgGAFg");
	this.shape_281.setTransform(98.3,150.8);

	this.shape_282 = new cjs.Shape();
	this.shape_282.graphics.f("#D9D9D9").s().p("AgFgHIAHgEIADATIgGAEg");
	this.shape_282.setTransform(99.7,150);

	this.shape_283 = new cjs.Shape();
	this.shape_283.graphics.f("#D9D9D9").s().p("AgNgCIAIgFIATAKIgJAFg");
	this.shape_283.setTransform(100.8,151.6);

	this.shape_284 = new cjs.Shape();
	this.shape_284.graphics.f("#D9D9D9").s().p("AgNgCIAIgFIASAKIgHAFg");
	this.shape_284.setTransform(99.4,152.4);

	this.shape_285 = new cjs.Shape();
	this.shape_285.graphics.f("#D9D9D9").s().p("AgNgDIAIgFIATAMIgIAFg");
	this.shape_285.setTransform(96.8,149.3);

	this.shape_286 = new cjs.Shape();
	this.shape_286.graphics.f("#D9D9D9").s().p("AgMgDIAHgFIASAMIgHAFg");
	this.shape_286.setTransform(98.1,148.5);

	this.instance_18 = new lib.ClipGroup_7();
	this.instance_18.parent = this;
	this.instance_18.setTransform(100.6,147.8,1,1,0,0,0,8.7,9.8);

	this.shape_287 = new cjs.Shape();
	this.shape_287.graphics.f("#8C8C8C").s().p("AgEAXQgHgCgEgHIgBgEQgEgJADgIQADgIAHgGQAHgDAGACQAGADAEAGIABAEQAEAIgDAIQgDAKgHAFQgEACgEAAIgEgBg");
	this.shape_287.setTransform(103.3,155.4);

	this.shape_288 = new cjs.Shape();
	this.shape_288.graphics.f("#D9D9D9").s().p("AgEgHIAGgEIAEATIgHAEg");
	this.shape_288.setTransform(104.1,147.4);

	this.shape_289 = new cjs.Shape();
	this.shape_289.graphics.f("#D9D9D9").s().p("AgFgIIAHgEIAEAUIgHAFg");
	this.shape_289.setTransform(105.5,146.6);

	this.shape_290 = new cjs.Shape();
	this.shape_290.graphics.f("#D9D9D9").s().p("AgNgCIAIgFIASAKIgHAFg");
	this.shape_290.setTransform(106.6,148.2);

	this.shape_291 = new cjs.Shape();
	this.shape_291.graphics.f("#D9D9D9").s().p("AgNgCIAIgFIASAKIgHAFg");
	this.shape_291.setTransform(105.3,149);

	this.shape_292 = new cjs.Shape();
	this.shape_292.graphics.f("#D9D9D9").s().p("AgNgEIAIgDIATALIgIAFg");
	this.shape_292.setTransform(102.6,145.9);

	this.shape_293 = new cjs.Shape();
	this.shape_293.graphics.f("#D9D9D9").s().p("AgNgDIAIgFIATAMIgIAFg");
	this.shape_293.setTransform(103.9,145.1);

	this.instance_19 = new lib.ClipGroup_8();
	this.instance_19.parent = this;
	this.instance_19.setTransform(106.4,144.5,1,1,0,0,0,8.7,9.8);

	this.shape_294 = new cjs.Shape();
	this.shape_294.graphics.f("#8C8C8C").s().p("AgFAXQgHgCgDgHIgBgEQgEgJADgHQACgJAIgGQAHgEAFADQAHADADAGIACAEQAEAJgDAIQgDAIgHAGQgEACgEAAIgFgBg");
	this.shape_294.setTransform(109.2,152);

	this.shape_295 = new cjs.Shape();
	this.shape_295.graphics.f("#D9D9D9").s().p("AgEgHIAGgEIAEATIgHAEg");
	this.shape_295.setTransform(110,144);

	this.shape_296 = new cjs.Shape();
	this.shape_296.graphics.f("#D9D9D9").s().p("AgEgHIAGgFIAEAUIgGAEg");
	this.shape_296.setTransform(111.3,143.2);

	this.shape_297 = new cjs.Shape();
	this.shape_297.graphics.f("#D9D9D9").s().p("AgNgCIAIgFIATAKIgIAFg");
	this.shape_297.setTransform(112.4,144.8);

	this.shape_298 = new cjs.Shape();
	this.shape_298.graphics.f("#D9D9D9").s().p("AgMgCIAIgFIASAKIgIAFg");
	this.shape_298.setTransform(111.1,145.6);

	this.shape_299 = new cjs.Shape();
	this.shape_299.graphics.f("#D9D9D9").s().p("AgNgDIAIgFIASAMIgHAFg");
	this.shape_299.setTransform(108.5,142.5);

	this.shape_300 = new cjs.Shape();
	this.shape_300.graphics.f("#D9D9D9").s().p("AgNgDIAIgFIATAMIgIAFg");
	this.shape_300.setTransform(109.8,141.8);

	this.instance_20 = new lib.ClipGroup_9();
	this.instance_20.parent = this;
	this.instance_20.setTransform(112.3,141,1,1,0,0,0,8.8,9.7);

	this.shape_301 = new cjs.Shape();
	this.shape_301.graphics.f("#8C8C8C").s().p("AgEAXQgHgCgEgHIgBgEQgEgJADgIQADgJAHgFQAHgDAGACQAGACAEAHIABAEQAEAJgDAIQgDAJgHAFQgEACgDAAIgFgBg");
	this.shape_301.setTransform(115,148.6);

	this.shape_302 = new cjs.Shape();
	this.shape_302.graphics.f("#D9D9D9").s().p("AgEgHIAFgFIAFAUIgHAEg");
	this.shape_302.setTransform(115.8,140.6);

	this.shape_303 = new cjs.Shape();
	this.shape_303.graphics.f("#D9D9D9").s().p("AgEgHIAFgFIAFAVIgHADg");
	this.shape_303.setTransform(117.2,139.8);

	this.shape_304 = new cjs.Shape();
	this.shape_304.graphics.f("#D9D9D9").s().p("AgMgCIAIgFIASAKIgJAFg");
	this.shape_304.setTransform(118.3,141.4);

	this.shape_305 = new cjs.Shape();
	this.shape_305.graphics.f("#D9D9D9").s().p("AgMgCIAIgFIASAKIgJAFg");
	this.shape_305.setTransform(116.9,142.2);

	this.shape_306 = new cjs.Shape();
	this.shape_306.graphics.f("#D9D9D9").s().p("AgNgDIAIgFIATAMIgIAFg");
	this.shape_306.setTransform(114.3,139.1);

	this.shape_307 = new cjs.Shape();
	this.shape_307.graphics.f("#D9D9D9").s().p("AgNgDIAIgFIASAMIgHAFg");
	this.shape_307.setTransform(115.6,138.4);

	this.instance_21 = new lib.ClipGroup_10();
	this.instance_21.parent = this;
	this.instance_21.setTransform(118.1,137.6,1,1,0,0,0,8.7,9.7);

	this.shape_308 = new cjs.Shape();
	this.shape_308.graphics.f("#8C8C8C").s().p("AgFAXQgHgCgDgHIgBgEQgEgJADgIQADgJAHgFQAHgDAGACQAGACAEAHIABAEQADAJgCAIQgDAJgHAFQgEACgEAAIgFgBg");
	this.shape_308.setTransform(120.8,145.2);

	this.shape_309 = new cjs.Shape();
	this.shape_309.graphics.f("#D9D9D9").s().p("AgFgHIAHgEIADATIgGAEg");
	this.shape_309.setTransform(121.6,137.2);

	this.shape_310 = new cjs.Shape();
	this.shape_310.graphics.f("#D9D9D9").s().p("AgEgHIAGgEIADATIgGAEg");
	this.shape_310.setTransform(123,136.4);

	this.shape_311 = new cjs.Shape();
	this.shape_311.graphics.f("#D9D9D9").s().p("AgMgCIAIgFIASAKIgIAFg");
	this.shape_311.setTransform(124.1,138);

	this.shape_312 = new cjs.Shape();
	this.shape_312.graphics.f("#D9D9D9").s().p("AgNgCIAIgFIATAKIgIAFg");
	this.shape_312.setTransform(122.7,138.8);

	this.shape_313 = new cjs.Shape();
	this.shape_313.graphics.f("#D9D9D9").s().p("AgNgDIAIgFIATAMIgIAFg");
	this.shape_313.setTransform(120.1,135.7);

	this.shape_314 = new cjs.Shape();
	this.shape_314.graphics.f("#D9D9D9").s().p("AgNgDIAIgFIATAMIgIAFg");
	this.shape_314.setTransform(121.4,135);

	this.instance_22 = new lib.ClipGroup_11();
	this.instance_22.parent = this;
	this.instance_22.setTransform(124,134.3,1,1,0,0,0,8.8,9.8);

	this.shape_315 = new cjs.Shape();
	this.shape_315.graphics.f("#8C8C8C").s().p("AgFAXQgGgDgEgGQAAAAAAgBQAAAAgBgBQAAAAAAgBQAAAAAAgBQgDgJACgHQADgKAIgFQAGgEAFADQAIACACAHQABAAAAABQAAAAABABQAAAAAAABQAAAAAAABQADAJgCAHQgDAKgHAFQgEACgEAAIgFgBg");
	this.shape_315.setTransform(126.7,141.9);

	this.shape_316 = new cjs.Shape();
	this.shape_316.graphics.f("#D9D9D9").s().p("AgEgHIAGgEIADATIgGAEg");
	this.shape_316.setTransform(127.5,133.8);

	this.shape_317 = new cjs.Shape();
	this.shape_317.graphics.f("#D9D9D9").s().p("AgFgHIAHgEIADATIgGAEg");
	this.shape_317.setTransform(128.8,133);

	this.shape_318 = new cjs.Shape();
	this.shape_318.graphics.f("#D9D9D9").s().p("AgNgCIAIgFIATAKIgIAFg");
	this.shape_318.setTransform(129.9,134.6);

	this.shape_319 = new cjs.Shape();
	this.shape_319.graphics.f("#D9D9D9").s().p("AgNgCIAIgFIASAKIgIAFg");
	this.shape_319.setTransform(128.6,135.4);

	this.shape_320 = new cjs.Shape();
	this.shape_320.graphics.f("#D9D9D9").s().p("AgNgDIAIgFIATAMIgIAEg");
	this.shape_320.setTransform(125.9,132.4);

	this.shape_321 = new cjs.Shape();
	this.shape_321.graphics.f("#D9D9D9").s().p("AgMgDIAHgFIATAMIgIAFg");
	this.shape_321.setTransform(127.3,131.6);

	this.instance_23 = new lib.ClipGroup_12();
	this.instance_23.parent = this;
	this.instance_23.setTransform(129.7,130.9,1,1,0,0,0,8.7,9.8);

	this.shape_322 = new cjs.Shape();
	this.shape_322.graphics.f("#8C8C8C").s().p("AgEAXQgHgDgEgGIgBgEQgEgIADgJQADgJAHgFQAHgDAGACQAGACAEAHIABAEQAEAJgDAIQgDAJgHAFQgEACgEAAIgEgBg");
	this.shape_322.setTransform(132.5,138.5);

	this.shape_323 = new cjs.Shape();
	this.shape_323.graphics.f("#D9D9D9").s().p("AgFgHIAHgEIADATIgGAEg");
	this.shape_323.setTransform(133.3,130.4);

	this.shape_324 = new cjs.Shape();
	this.shape_324.graphics.f("#D9D9D9").s().p("AgEgHIAGgEIADATIgGAEg");
	this.shape_324.setTransform(134.6,129.7);

	this.shape_325 = new cjs.Shape();
	this.shape_325.graphics.f("#D9D9D9").s().p("AgNgCIAIgFIASAKIgIAFg");
	this.shape_325.setTransform(135.8,131.2);

	this.shape_326 = new cjs.Shape();
	this.shape_326.graphics.f("#D9D9D9").s().p("AgNgCIAIgFIASAKIgIAFg");
	this.shape_326.setTransform(134.4,132);

	this.shape_327 = new cjs.Shape();
	this.shape_327.graphics.f("#D9D9D9").s().p("AgNgDIAIgFIATAMIgIAFg");
	this.shape_327.setTransform(131.8,129);

	this.shape_328 = new cjs.Shape();
	this.shape_328.graphics.f("#D9D9D9").s().p("AgMgEIAHgEIATAMIgIAFg");
	this.shape_328.setTransform(133.1,128.2);

	this.instance_24 = new lib.ClipGroup_13();
	this.instance_24.parent = this;
	this.instance_24.setTransform(135.6,127.5,1,1,0,0,0,8.7,9.8);

	this.shape_329 = new cjs.Shape();
	this.shape_329.graphics.f("#8C8C8C").s().p("AgFAXQgHgCgDgHIgBgEQgEgJADgIQADgJAHgFQAHgDAGACQAGACAEAHIABAEQAEAJgDAIQgDAJgHAFQgEACgEAAIgFgBg");
	this.shape_329.setTransform(138.3,135.1);

	this.shape_330 = new cjs.Shape();
	this.shape_330.graphics.f("#D9D9D9").s().p("AgFgIIAHgDIAEATIgHAFg");
	this.shape_330.setTransform(139.1,127.1);

	this.shape_331 = new cjs.Shape();
	this.shape_331.graphics.f("#D9D9D9").s().p("AgFgHIAHgEIAEATIgGAFg");
	this.shape_331.setTransform(140.5,126.3);

	this.shape_332 = new cjs.Shape();
	this.shape_332.graphics.f("#D9D9D9").s().p("AgNgCIAIgFIASAKIgIAFg");
	this.shape_332.setTransform(141.6,127.9);

	this.shape_333 = new cjs.Shape();
	this.shape_333.graphics.f("#D9D9D9").s().p("AgNgCIAIgFIATAKIgIAFg");
	this.shape_333.setTransform(140.2,128.6);

	this.shape_334 = new cjs.Shape();
	this.shape_334.graphics.f("#D9D9D9").s().p("AgMgDIAHgFIATAMIgIAFg");
	this.shape_334.setTransform(137.6,125.6);

	this.shape_335 = new cjs.Shape();
	this.shape_335.graphics.f("#D9D9D9").s().p("AgNgDIAIgFIATAMIgIAFg");
	this.shape_335.setTransform(138.9,124.8);

	this.instance_25 = new lib.ClipGroup_14();
	this.instance_25.parent = this;
	this.instance_25.setTransform(141.4,124.2,1,1,0,0,0,8.7,9.8);

	this.shape_336 = new cjs.Shape();
	this.shape_336.graphics.f("#8C8C8C").s().p("AgEAXQgHgCgEgHIgBgEQgEgJADgIQADgJAHgFQAHgDAGACQAHACADAHIABAEQAEAJgDAIQgDAJgHAFQgEACgDAAIgFgBg");
	this.shape_336.setTransform(144.1,131.7);

	this.shape_337 = new cjs.Shape();
	this.shape_337.graphics.f("#D9D9D9").s().p("AgFgHIAGgEIAFATIgHAFg");
	this.shape_337.setTransform(145,123.7);

	this.shape_338 = new cjs.Shape();
	this.shape_338.graphics.f("#D9D9D9").s().p("AgFgHIAHgFIAEAUIgHAFg");
	this.shape_338.setTransform(146.3,122.9);

	this.shape_339 = new cjs.Shape();
	this.shape_339.graphics.f("#D9D9D9").s().p("AgMgCIAIgFIASAKIgIAFg");
	this.shape_339.setTransform(147.4,124.5);

	this.shape_340 = new cjs.Shape();
	this.shape_340.graphics.f("#D9D9D9").s().p("AgMgCIAIgFIASAKIgIAFg");
	this.shape_340.setTransform(146.1,125.2);

	this.shape_341 = new cjs.Shape();
	this.shape_341.graphics.f("#D9D9D9").s().p("AgNgDIAIgFIATAMIgIAFg");
	this.shape_341.setTransform(143.4,122.2);

	this.shape_342 = new cjs.Shape();
	this.shape_342.graphics.f("#D9D9D9").s().p("AgNgDIAIgFIASAMIgHAFg");
	this.shape_342.setTransform(144.8,121.4);

	this.instance_26 = new lib.ClipGroup_15();
	this.instance_26.parent = this;
	this.instance_26.setTransform(147.2,120.8,1,1,0,0,0,8.7,9.8);

	this.shape_343 = new cjs.Shape();
	this.shape_343.graphics.f("#8C8C8C").s().p("AgEAXQgHgCgEgHIgBgEQgEgIADgJQADgIAHgGQAHgDAGACQAGADAEAGIABAEQAEAIgDAJQgDAJgHAFQgEACgEAAIgEgBg");
	this.shape_343.setTransform(150,128.3);

	this.shape_344 = new cjs.Shape();
	this.shape_344.graphics.f("#C9C9C9").s().p("ABjF0Ij3rnIAUAKIEVLdg");
	this.shape_344.setTransform(82.2,207.1);

	this.shape_345 = new cjs.Shape();
	this.shape_345.graphics.f("#EBEBEB").s().p("AmtDvINHnoIAUALItHHng");
	this.shape_345.setTransform(110.3,146);

	this.shape_346 = new cjs.Shape();
	this.shape_346.graphics.f("#FFFFFF").s().p("Aouh6INHnoIEWLdItIHog");
	this.shape_346.setTransform(125.2,183.2);

	this.shape_347 = new cjs.Shape();
	this.shape_347.graphics.f("#D2C3A1").s().p("AkBBUIEDnQIEAL5gAjtBQIHaETIjrq9g");
	this.shape_347.setTransform(65.8,206.6);

	this.shape_348 = new cjs.Shape();
	this.shape_348.graphics.f("#B3A58A").s().p("AokiHINJnqID/L6ItHHog");
	this.shape_348.setTransform(120.8,182.1);

	this.shape_349 = new cjs.Shape();
	this.shape_349.graphics.f("#5B5445").s().p("AksAfINInoIjvGsItIHng");
	this.shape_349.setTransform(96,168.8);

	this.shape_350 = new cjs.Shape();
	this.shape_350.graphics.f("#897E69").s().p("AqRBrINInnIHbERItIHog");
	this.shape_350.setTransform(107.8,203.9);

	this.shape_351 = new cjs.Shape();
	this.shape_351.graphics.f("#E8E8E8").s().p("AiWCwIEYmZIAVAMIj6HIg");
	this.shape_351.setTransform(51.2,190.5);

	this.shape_352 = new cjs.Shape();
	this.shape_352.graphics.f("#8E8E8E").s().p("AkmAQINInnIj7HHItIHpg");
	this.shape_352.setTransform(95.7,166.7);

	this.shape_353 = new cjs.Shape();
	this.shape_353.graphics.f("#FFFFFF").s().p("AmuDuINJnnIAUAMItIHng");
	this.shape_353.setTransform(107.3,143.2);

	this.shape_354 = new cjs.Shape();
	this.shape_354.graphics.f("#DCDCDC").s().p("ArpBGINfn1IJzFqItfH1g");
	this.shape_354.setTransform(107.8,206.1);

	this.shape_355 = new cjs.Shape();
	this.shape_355.graphics.f("#7E7E7E").s().p("ABfBhIi9htQgGgFgBgIIAAhDQAAgDACgBQACgCADACIC9BtQAHAFAAAHIAABEQAAABAAAAQAAABAAAAQgBABAAABQAAAAgBAAIgCABIgDgBg");
	this.shape_355.setTransform(183.7,858.4);

	this.shape_356 = new cjs.Shape();
	this.shape_356.graphics.f("#999999").s().p("AgzCaIgIgBIgHgDIi+htQgKgGgFgKQgCgEgCgFQgCgFABgGIAAhCIABgIIACgGQACgEADgDIACgCIADgCQAKgEAIAGIC+BtIE0iyQAXAPABAcIkyCxIAABEQABAKgJAGQgFADgGAAIgDAAg");
	this.shape_356.setTransform(200.4,854.3);

	this.shape_357 = new cjs.Shape();
	this.shape_357.graphics.f("#464646").s().p("Ah3BDQABgRAIgNQAHgMAMgIIADgBQBhgsBqg9QAFgDAAAGQAAAHgFADQhqA7hiAuIgCABQgHAEgFAIQgFAIAAALIAAAYIgLAGg");
	this.shape_357.setTransform(203.6,845.6);

	this.shape_358 = new cjs.Shape();
	this.shape_358.graphics.f("#717171").s().p("AhNgLQABgRAJgNQAGgKANgKIB+BIQgMAIgHANQgJANgBARg");
	this.shape_358.setTransform(186.7,846.2);

	this.shape_359 = new cjs.Shape();
	this.shape_359.graphics.f("#646464").s().p("AinARIACgCQBfgrBsg9QAAAAABgBQAAAAABAAQAAAAABAAQAAABABAAIB+BJQAAAAAAAAQgBAAAAAAQgBAAAAAAQgBAAAAAAQhxBAhaApIgDACg");
	this.shape_359.setTransform(198.6,838.3);

	this.shape_360 = new cjs.Shape();
	this.shape_360.graphics.f("#757575").s().p("Ag+gYIAAgYIB+BJIAAAYg");
	this.shape_360.setTransform(185.3,849.9);

	this.shape_361 = new cjs.Shape();
	this.shape_361.graphics.f("#676767").s().p("ABfB2Ii9huQgYgOgCgdIAAhDQABgMAHgEQAIgFAKAGIC9BuQAYAOACAdIAABDQAAAMgIAFQgDABgDAAQgGAAgGgDg");
	this.shape_361.setTransform(185.3,857.5);

	this.shape_362 = new cjs.Shape();
	this.shape_362.graphics.f("#D9D9D9").s().p("Ai0A3IDhiuICIBPIj4Cgg");
	this.shape_362.setTransform(198.3,843);

	this.shape_363 = new cjs.Shape();
	this.shape_363.graphics.f("#808080").s().p("Aj4AjIEziyIC+BtIkzCyg");
	this.shape_363.setTransform(200.7,842.2);

	this.shape_364 = new cjs.Shape();
	this.shape_364.graphics.f("#717171").s().p("AiZA4IEziyIAABDIkzCyg");
	this.shape_364.setTransform(212.7,855.5);

	this.shape_365 = new cjs.Shape();
	this.shape_365.graphics.f("#717171").s().p("AiVBRIEziyQABALgJAGIkzCyQAJgGgBgLg");
	this.shape_365.setTransform(212.3,859.6);

	this.shape_366 = new cjs.Shape();
	this.shape_366.graphics.f("#808080").s().p("AiiBZIEziyQAJgEAJAGIkzCyQgIgGgKAEg");
	this.shape_366.setTransform(190.3,836.6);

	this.shape_367 = new cjs.Shape();
	this.shape_367.graphics.f("#DCDCDC").s().p("AhBChIjSh7QgEAAgDgDQgDgDAAgEQAAgEADgDQADgDAEAAIE9i2ID0COIk9C3QgIAEgJAAQgIAAgJgEg");
	this.shape_367.setTransform(201.1,855.3);

	this.shape_368 = new cjs.Shape();
	this.shape_368.graphics.f("#E9FF7A").s().p("AAXARQgKgFgNgHQgfgSAAgFQAAgFAfATQAgARAAAGIgBABIgIgDg");
	this.shape_368.setTransform(89.6,843.4);

	this.shape_369 = new cjs.Shape();
	this.shape_369.graphics.f("#E0FF3F").s().p("Ag7AIIA/gzQAMgFALAHQAeAUACAjQABANgKAHIgtAMQg5gmgHAAg");
	this.shape_369.setTransform(92.3,840.7);

	this.instance_27 = new lib.ClipGroup_16();
	this.instance_27.parent = this;
	this.instance_27.setTransform(108.4,831.7,1,1,0,0,0,24.6,21.4);

	this.shape_370 = new cjs.Shape();
	this.shape_370.graphics.f("#696969").s().p("ABmB+IjLh2QgagOgBggIAAhIQAAgNAIgEQAHgFAMAGIDLB2QAaAQABAeIAABJQAAANgHAEQgEACgEAAQgFAAgHgEg");
	this.shape_370.setTransform(121.1,825.2);

	this.shape_371 = new cjs.Shape();
	this.shape_371.graphics.f("#9F9F9F").s().p("AnSDwIOKoOQAZARACAeIuKIOQgBgfgagQg");
	this.shape_371.setTransform(178,800.3);

	this.shape_372 = new cjs.Shape();
	this.shape_372.graphics.f("#808080").s().p("AohDOQgJgHgKAFIOJoNQAKgFAJAHIDNB2IuKINg");
	this.shape_372.setTransform(165.5,791.9);

	this.shape_373 = new cjs.Shape();
	this.shape_373.graphics.f("#5C5C5C").s().p("AnEDjIOJoOIAABJIuJIOg");
	this.shape_373.setTransform(179.4,806.3);

	this.shape_374 = new cjs.Shape();
	this.shape_374.graphics.f("#5C5C5C").s().p("AnAD/IOJoOQABALgJAGIuJIOQAJgFgBgMg");
	this.shape_374.setTransform(179,810.8);

	this.shape_375 = new cjs.Shape();
	this.shape_375.graphics.f("#DAFB2F").s().p("Ag8AKIBZgzQAKgHAKAGIAGAEIADAEQADAGAAAGQAAALgKAGIhaAzQgBgXgUgNg");
	this.shape_375.setTransform(222.3,775.6);

	this.shape_376 = new cjs.Shape();
	this.shape_376.graphics.f("#D3F22F").s().p("AiKgXQgIgFgHAEIBag1IADgCIAEgBIAIgBIAEAAIAGABIAEABIABABIAEACIC3BpQgKgFgJAGIhaA0g");
	this.shape_376.setTransform(211.8,768.4);

	this.shape_377 = new cjs.Shape();
	this.shape_377.graphics.f("#A8C210").s().p("AguA0IAAgxIBZg0QAKgEAAgLIAAA1IAAADIgDAGIgCADIgEAGIgFAFIhbA1QAHgFgBgIg");
	this.shape_377.setTransform(223.1,779.9);

	this.shape_378 = new cjs.Shape();
	this.shape_378.graphics.f("#DCDCDC").s().p("AhAB4IiOhSQgDgCgCgEQgBgEABgDQACgEADgCIDwiKQAPgIAQAIICOBSQAEABABAFQACAEgCADQgBADgEACIjwCLQgHAEgIAAQgIAAgIgEg");
	this.shape_378.setTransform(206.7,785.9);

	this.shape_379 = new cjs.Shape();
	this.shape_379.graphics.f("#DCDCDC").s().p("AjjBiIA0geIgNgIQA5ghAkgeQAbgWAIgOIAZgwQAVgmALgGIDnCEQgLAHhAAMIhTAPQgYAEgnAQQg0AVg5AhIgNgHIg0Aeg");
	this.shape_379.setTransform(110.1,841.1);

	this.shape_380 = new cjs.Shape();
	this.shape_380.graphics.f("#DCDCDC").s().p("ApCDTIOmoeQAOgIAPAIIC8BsQAIAEgCAHQgCAEgEACIumIeg");
	this.shape_380.setTransform(170,808.4);

	this.shape_381 = new cjs.Shape();
	this.shape_381.graphics.f("#424242").s().p("Ag/EQQg0gKgMgnQgPgygPg1QgchpAEgZQAHgoBfh0IBdhrICpAWQgsBHg0A/Qg/BNg/AwQAnDvgBAHQgIAUgeAAQgLAAgNgCg");
	this.shape_381.setTransform(577.6,771.7);

	this.shape_382 = new cjs.Shape();
	this.shape_382.graphics.f("#333333").s().p("ABMFEQiJjWgTguQgTgugmiHIgjiAICbhsIA/F0QB/EoAAAIQAAAdgjACIgFAAQgiAAgXgeg");
	this.shape_382.setTransform(595.2,764.4);

	this.shape_383 = new cjs.Shape();
	this.shape_383.graphics.f("#2A2118").s().p("AASBNQgHgFgfgdIglgjQgMgNgLgVQgLgWACgSQADgUAUABQASAAARAOQAMAKAoAnQAQAQAcAWQAUASAEAPQAEAOgKALQgKALgRABIgGAAQgSAAgOgJg");
	this.shape_383.setTransform(603.3,792);

	this.shape_384 = new cjs.Shape();
	this.shape_384.graphics.f("#7B6957").s().p("AAAAaQgkgDgKgXIgBgZIBfAGQABAMgCAIQgIAZggAAIgHAAg");
	this.shape_384.setTransform(607.6,799.7);

	this.shape_385 = new cjs.Shape();
	this.shape_385.graphics.f("#7B6957").s().p("AAWBMQgJgGgdgcIgogmQgPgRgIgUQgIgRABgUQABgUAWAFQAXAFAPAMQALAJAmAmIApAlQARARAEAPQAEAQgHALQgIAMgQAAQgWgBgPgKg");
	this.shape_385.setTransform(603.1,793.3);

	this.shape_386 = new cjs.Shape();
	this.shape_386.graphics.f("#2A2118").s().p("AA9A4IgwgQIg4gTQgYgKgVgPQgRgOgGgTQgGgVASABQAYABAbAIIBBAXIA0AMQAbAGAIAJQAKALAAARQgBASgNAGQgKAEgLAAQgJAAgJgCg");
	this.shape_386.setTransform(566.1,794.7);

	this.shape_387 = new cjs.Shape();
	this.shape_387.graphics.f("#7B6957").s().p("ABGA5Ig1gPIg9gSQgdgKgTgRQgOgOgEgUQgFgVANABQAWABAeAOQArATAWAHQATAHAdABQAZABAJAFQAMAHADAOQADAPgIAMIgCACQgJAKgPAAIgLgBg");
	this.shape_387.setTransform(566,795.2);

	this.shape_388 = new cjs.Shape();
	this.shape_388.graphics.f("#7B6957").s().p("AgEAPQgdgGgKgJIgBgQIBZADQAAAJgDAIQgJANgUAAQgIAAgJgCg");
	this.shape_388.setTransform(572.8,800.2);

	this.shape_389 = new cjs.Shape();
	this.shape_389.graphics.f("#FFFFFF").s().p("AAEAUQgLgBgMgHQgMgHgDgGQgCgIAJgGQAUgLAbAQQAbAPgUALQgHAFgKAAIgGgBgAgRgJQgIAEASAKIABAAIAAAAQAQALAIgFQAJgEgUgKQgMgIgHAAQgDAAgCACg");
	this.shape_389.setTransform(425.5,824.4);

	this.shape_390 = new cjs.Shape();
	this.shape_390.graphics.f("#FFFFFF").s().p("AgGAEQgEgCAAgCQAAgCAEgCQAGgDAHADQAEACAAACQAAACgEACQgDADgEAAQgDAAgDgDg");
	this.shape_390.setTransform(450.2,812.5);

	this.shape_391 = new cjs.Shape();
	this.shape_391.graphics.f("#FFFFFF").s().p("AgTgPIAGgEIAhAjIgHAEg");
	this.shape_391.setTransform(471.7,797.6);

	this.shape_392 = new cjs.Shape();
	this.shape_392.graphics.f("#FFFFFF").s().p("AgLADIAQgJIAHAEIgQAJg");
	this.shape_392.setTransform(474.2,796.7);

	this.shape_393 = new cjs.Shape();
	this.shape_393.graphics.f("#FFFFFF").s().p("AAAAEIgNAIIgGgEIAOgIIgPgHIAHgEIANAIIAOgIIAGAEIgOAHIAPAIIgGAEg");
	this.shape_393.setTransform(469,799.7);

	this.shape_394 = new cjs.Shape();
	this.shape_394.graphics.f("#FFFFFF").s().p("AgYAKIApgYIAIAFIgpAYg");
	this.shape_394.setTransform(492.8,784.8);

	this.shape_395 = new cjs.Shape();
	this.shape_395.graphics.f("#FFFFFF").s().p("AgYAKIAqgYIAHAFIgpAYg");
	this.shape_395.setTransform(494.5,785.8);

	this.shape_396 = new cjs.Shape();
	this.shape_396.graphics.f("#FFFFFF").s().p("AgSgFIAAABIgFAHIgMgDIAIgMIAKgGIA1AeIgMAHg");
	this.shape_396.setTransform(412.1,816.5);

	this.shape_397 = new cjs.Shape();
	this.shape_397.graphics.f("#FFFFFF").s().p("AgBATIABgHQAAgTgGgDQgIgFgJAFQgFADgCAGIgMgDQADgIAJgFQASgLAQAKQAGADACAGQADAGgCAFIgBAGIAUgLIALAFIgmAWg");
	this.shape_397.setTransform(434.9,803.8);

	this.shape_398 = new cjs.Shape();
	this.shape_398.graphics.f("#FFFFFF").s().p("AABAQQAHgBAIgEQAKgGgHgEQgKgDgJAFIgEADIgJgGIAFgBQAIgGgFgEQgHgCgGAEQgGADgCAFIgMgEQAEgHAJgFQAPgJAPAHQAJAFgHAIQANgGANAHQAHAEgBAFQgCAGgKAGQgJAGgLABg");
	this.shape_398.setTransform(456.9,790.6);

	this.shape_399 = new cjs.Shape();
	this.shape_399.graphics.f("#FFFFFF").s().p("AgTgPIAGgEIAhAjIgHAEg");
	this.shape_399.setTransform(479.9,777.3);

	this.shape_400 = new cjs.Shape();
	this.shape_400.graphics.f("#FFFFFF").s().p("AgWASIgLgeIAPgJIAeASIAHgDIAJAEIgHAEIANAHIgMAGIgNgHIgWAOgAgLAKIAAAAIALgHIgLgGQgEgCgGgEg");
	this.shape_400.setTransform(399.4,808.8);

	this.shape_401 = new cjs.Shape();
	this.shape_401.graphics.f("#FFFFFF").s().p("AAAASQAHgBAIgEQAKgGgHgFQgKgEgNAIIgHAEIgYgRIAdgRIAJAGIgUAMIAHAFIAEgCQAHgEAKgCQALgBAJAFQAIAFgBAFQgBAHgKAGQgIAFgKACg");
	this.shape_401.setTransform(421,795.8);

	this.shape_402 = new cjs.Shape();
	this.shape_402.graphics.f("#FFFFFF").s().p("AgSAQQgPgJABgJQACgMAKgFIAFgDIAKAGIgEADQgOAJAJAHQAAgEAHgEQAHgEAJAAQAJAAAIAEQAIAFAAAFQAAAHgIAFQgLAGgKAAQgLAAgMgHgAgDABQgFADADAEIACACIABAAQAIAHAKgFQAHgEgJgGQgFgCgFAAQgEAAgDABg");
	this.shape_402.setTransform(444.2,782.5);

	this.shape_403 = new cjs.Shape();
	this.shape_403.graphics.f("#FFFFFF").s().p("AgFAEIgbgEIALgFIAQACIgFgJIAKgGIAFAPIAcADIgMAGIgQgCIAFAJIgKAGg");
	this.shape_403.setTransform(467.1,769.9);

	this.shape_404 = new cjs.Shape();
	this.shape_404.graphics.f("#FFFFFF").s().p("AgaAKIArgZIAKAGIgrAZg");
	this.shape_404.setTransform(489.3,756.6);

	this.shape_405 = new cjs.Shape();
	this.shape_405.graphics.f("#FFFFFF").s().p("AAAgLIgXANIgKgFIAkgWIAIAFIAXAmIgMAIg");
	this.shape_405.setTransform(384.2,801.1);

	this.shape_406 = new cjs.Shape();
	this.shape_406.graphics.f("#FFFFFF").s().p("AgHATQgKgGAGgHQgKACgKgFQgGgDABgFQABgGAIgFQAPgKAPAIQAJAEgEAHQALgDAMAGQAHAEgBAFQgBAGgKAFQgJAGgKAAQgHAAgHgDgAASALQABgBABAAQAAgBABAAQAAgBAAAAQAAgBAAAAQAAgBAAAAQAAgBAAgBQAAAAgBAAQAAgBgBAAQgJgDgJADQgDAEAFAEIAAAAQAHAEAIgEgAgFgDQADgCgDgEIgBgBQgHgEgGAEQgHAEAHADIgBAAQAIADAHgDg");
	this.shape_406.setTransform(407.9,788.1);

	this.shape_407 = new cjs.Shape();
	this.shape_407.graphics.f("#FFFFFF").s().p("AAFASIAFgDQAFgDACgFQACgHgFgCQAAADgHAEQgPAJgRgJQgIgEAAgGQAAgHAJgFQAWgLAUANQAQAJgBAKQgCALgLAFIgFADgAABgBQAFgCgBgEIgDgCQgHgGgLAEQgHAEAJAGIAAAAQAJAEAGgEg");
	this.shape_407.setTransform(430.2,775.1);

	this.shape_408 = new cjs.Shape();
	this.shape_408.graphics.f("#FFFFFF").s().p("AgLgSIAEgDIATAnIgEAEg");
	this.shape_408.setTransform(453.1,761.9);

	this.shape_409 = new cjs.Shape();
	this.shape_409.graphics.f("#FFFFFF").s().p("AgKAHQgNgHALgGQAMgHAMAHQAGADAAAEQABADgFADQgGAEgGAAQgGAAgGgEgAgGgDQgFADAIADQAFAFAGgDQAFgCgIgEQgEgDgDAAIgEABg");
	this.shape_409.setTransform(450.6,762.2);

	this.shape_410 = new cjs.Shape();
	this.shape_410.graphics.f("#FFFFFF").s().p("AgKAHQgNgHALgGQAMgHAMAHQAGAEAAADQABAEgFADQgHADgGAAQgFAAgGgEgAgGgDQgEADAHADQAEAEAHgCQAEgCgIgEIABAAQgEgDgDAAIgEABg");
	this.shape_410.setTransform(455.5,761.4);

	this.shape_411 = new cjs.Shape();
	this.shape_411.graphics.f("#FFFFFF").s().p("AATAeIgigKIgRAKIgIgFIAUgLQAEgCADACIAYAHIgRgZQAAAAAAgBQgBAAABgBQAAAAAAAAQABgBAAAAIAmgXIAIAEIgkAVIAWAfQABAAAAABQAAAAAAABQgBAAAAABQgBAAAAABIgEABIgDgBg");
	this.shape_411.setTransform(474.4,748.1);

	this.shape_412 = new cjs.Shape();
	this.shape_412.graphics.f("#FFFFFF").s().p("AgPAJQgHgEAAgFQAAgFAHgFIAJgDIADADQgFAAgEADQgMAHANAHQAMAHANgHQAEgCACgDIADABQgBAEgGACQgHAFgIAAQgIAAgIgFg");
	this.shape_412.setTransform(467.6,738.8);

	this.shape_413 = new cjs.Shape();
	this.shape_413.graphics.f("#FFFFFF").s().p("AgOAJQgHgFgBgEQAAgFAGgEQAQgIAPAJQAIAFAAAEQAAAFgGAEQgIAEgHAAQgIAAgIgFgAgMgHQgFADABAEQABADAGADQALAHAMgFQAEgDgBgEQgBgDgGgDQgGgEgGAAQgFAAgFACg");
	this.shape_413.setTransform(459.2,743.6);

	this.shape_414 = new cjs.Shape();
	this.shape_414.graphics.f("#FFFFFF").s().p("AgcgBIAFgDIArAFIgcgOIAFgDIAgASIgFADIgrgFIAbAOIgEADg");
	this.shape_414.setTransform(462.5,741.8);

	this.shape_415 = new cjs.Shape();
	this.shape_415.graphics.f("#FFFFFF").s().p("AgLgMIACgCIAWAbIgEACg");
	this.shape_415.setTransform(465,740.4);

	this.shape_416 = new cjs.Shape();
	this.shape_416.graphics.f("#FFFFFF").s().p("AgPAJQgIgEAAgFQAAgFAIgFIAJgDIACADIgIADQgFADAAAEQAAADAGAEQAMAHANgHQAEgCABgDIAFACIgHAFQgIAFgJAAQgHAAgIgFg");
	this.shape_416.setTransform(439.7,755);

	this.shape_417 = new cjs.Shape();
	this.shape_417.graphics.f("#FFFFFF").s().p("AgZgEIASgKIAEADIgOAHIALAFIAMgGIADACIgLAGIAKAHIAOgIIAEACIgSALg");
	this.shape_417.setTransform(442,753.7);

	this.shape_418 = new cjs.Shape();
	this.shape_418.graphics.f("#FFFFFF").s().p("AgfgBIAFgDIAWAGIANAEIgQgUIAFgEIAiASIgEACIgdgPIARAVIgDACIglgKIAbAQIgDADg");
	this.shape_418.setTransform(416.6,768.6);

	this.shape_419 = new cjs.Shape();
	this.shape_419.graphics.f("#FFFFFF").s().p("AAAACIgKAGIgDgCIALgGIgMgFIAEgCIAKAGIALgGIADACIgLAFIALAHIgDABg");
	this.shape_419.setTransform(420.2,766.7);

	this.shape_420 = new cjs.Shape();
	this.shape_420.graphics.f("#FFFFFF").s().p("AgHADIALgGIAEABIgMAGg");
	this.shape_420.setTransform(396.9,780.3);

	this.shape_421 = new cjs.Shape();
	this.shape_421.graphics.f("#FFFFFF").s().p("AgfgBIAFgDIAjAKIgHgIIgJgMIAFgDIAiARIgEABIgdgPIARAWIgDACIgkgKIAaAQIgDACg");
	this.shape_421.setTransform(393.9,781.8);

	this.shape_422 = new cjs.Shape();
	this.shape_422.graphics.f("#FFFFFF").s().p("AgHACIAMgFIADABIgLAGg");
	this.shape_422.setTransform(398.3,779.4);

	this.shape_423 = new cjs.Shape();
	this.shape_423.graphics.f("#FFFFFF").s().p("AgfAAIAFgEIAjAKIgHgIIgJgNIAFgDIAiASIgEABIgcgPIgBAAIARAWIgDACIgUgGIgQgEIAaAQIgDACg");
	this.shape_423.setTransform(370.1,795.7);

	this.shape_424 = new cjs.Shape();
	this.shape_424.graphics.f("#FFFFFF").s().p("AgagEIAIgFQAEgDAIgBQAFAAADACQAGAEgEAEQAHAAAEABIAMAEIgFACIgKgDQgGgCgGACIgDACIANAJIgEACgAgPgHIgEADIAMAGIAFgCQAGgEgFgEIgHgCQgDAAgEADg");
	this.shape_424.setTransform(373.4,793.7);

	this.shape_425 = new cjs.Shape();
	this.shape_425.graphics.f("#FFFFFF").s().p("AgPAJQgIgEABgFQgBgFAIgFIAJgDIADADQgFABgDACQgGADAAAEQAAADAGAEQAMAHANgHQADgCACgDIAFACQgDADgFACQgHAFgJAAQgHAAgIgFg");
	this.shape_425.setTransform(376.4,791.8);

	this.shape_426 = new cjs.Shape();
	this.shape_426.graphics.f("#858C82").s().p("AnFB4ILpmpICiC6IrqGog");
	this.shape_426.setTransform(389.2,745.9);

	this.shape_427 = new cjs.Shape();
	this.shape_427.graphics.f("#C7C7C7").s().p("ApDCZIO5oeIDODsIu5Igg");
	this.shape_427.setTransform(389.2,745.9);

	this.shape_428 = new cjs.Shape();
	this.shape_428.graphics.f("#9AB3B8").s().p("Ag0A+Ig2gfQgFgBgBgFQgCgDACgEQACgEAEgBIB/hKQAQgIAQAIIA2AfQAEACACAEQACAEgCAEQgCADgEACIh/BJQgIAEgIAAQgIAAgIgEgAAcg9Ih/BJQgBAAAAABQgBAAAAAAQgBABAAAAQAAABgBABQAAAAAAABQAAAAAAABQAAAAAAABQAAAAAAABQABABAAAAQAAAAABABQAAAAABABQAAAAABAAIA1AfQAKAFAKgFIB/hJQAAAAABAAQAAgBABAAQAAgBABAAQAAgBAAAAQACgGgFgCIg2gfQgFgDgFAAQgEAAgFADg");
	this.shape_428.setTransform(475.9,749.2);

	this.shape_429 = new cjs.Shape();
	this.shape_429.graphics.f("#6F8285").s().p("Ag0AxIg2gfQgGgCgBgHIAAgTQABAHAGACIA2AfQAQAIAQgIIB/hKQAGgDABgFIAAATQAAAHgHACIh/BJQgIAFgIAAQgIAAgIgFg");
	this.shape_429.setTransform(475.9,752.5);

	this.shape_430 = new cjs.Shape();
	this.shape_430.graphics.f("#8BA2A7").s().p("AguA6Ig2gfQgFgCACgFQAAgBAAgBQAAAAABgBQAAAAABAAQAAgBABAAICAhJQAJgFAKAFIA2AfQAFACgCAFIgDAEIiABJQgEADgFAAQgFAAgFgDg");
	this.shape_430.setTransform(475.9,748.8);

	this.shape_431 = new cjs.Shape();
	this.shape_431.graphics.f("#9AB3B8").s().p("Ag0A+Ig2gfQgFgCgBgEQgBgEABgEQACgEAEgBIB/hJQAIgEAIAAQAJAAAHAEIA2AfQAFABABAFQACAEgCADQgCAEgEACIh/BJQgIAEgIAAQgIAAgIgEgAAcg+Ih/BKQgBAAgBAAQAAABgBAAQAAABgBAAQAAABAAAAQgBAFAFADIA2AfQAJAFAKgFIB/hKIAEgDQACgGgGgCIg2gfQgFgDgFAAQgEAAgFADg");
	this.shape_431.setTransform(453.3,762.4);

	this.shape_432 = new cjs.Shape();
	this.shape_432.graphics.f("#6F8285").s().p("Ag0AxIg2gfQgGgCgBgHIAAgTQABAHAGADIA2AeQAQAIAQgIICAhKQAFgCABgHIAAAUQgBAGgFADIiABJQgIAFgIAAQgIAAgIgFg");
	this.shape_432.setTransform(453.4,765.6);

	this.shape_433 = new cjs.Shape();
	this.shape_433.graphics.f("#8BA2A7").s().p("AguA6Ig2gfQgFgCACgGIADgDICAhKQAJgEAKAEIA2AgQAFABgCAGQAAABAAABQgBAAAAAAQgBABAAAAQgBABAAAAIh/BJQgFADgFAAQgFAAgFgDg");
	this.shape_433.setTransform(453.3,762);

	this.shape_434 = new cjs.Shape();
	this.shape_434.graphics.f("#B8C9CC").s().p("Ag1A+Ig1gfQgEgBgCgFQgEgJAKgEIB/hJQAQgIARAIIA2AfQAEACABAEQADAJgJAEIh/BJQgIAEgIAAQgIAAgJgEgAAcg+IiABKQAAAAgBAAQAAABgBAAQAAABAAAAQgBABAAAAQgCAGAFACIA2AfQAKAEAKgEIB/hKQABAAAAAAQABgBAAAAQABgBAAAAQAAgBAAAAQACgGgFgCIg2gfQgFgCgFAAQgEAAgFACg");
	this.shape_434.setTransform(430.7,775.5);

	this.shape_435 = new cjs.Shape();
	this.shape_435.graphics.f("#8A9799").s().p("Ag0AyIg2gfQgGgDgBgHIAAgSQABAGAGADIA2AeQAQAIAQgIICAhJQAFgDABgHIAAAUQgBAHgFACIiABKQgIAEgIAAQgIAAgIgEg");
	this.shape_435.setTransform(430.8,778.7);

	this.shape_436 = new cjs.Shape();
	this.shape_436.graphics.f("#A8B8BB").s().p("AguA6Ig2gfQgFgCACgFQAAgBAAAAQABgBAAAAQABgBAAAAQABgBAAAAICAhJQAJgFAKAFIA2AfQAAAAABAAQAAABABAAQAAAAABABQAAAAAAABQABAAAAABQAAABAAAAQAAABAAAAQAAABgBAAQAAABAAABQAAAAgBABQAAAAgBAAQAAABgBAAIh/BJQgFADgFAAQgFAAgFgDg");
	this.shape_436.setTransform(430.7,775.1);

	this.shape_437 = new cjs.Shape();
	this.shape_437.graphics.f("#B8C9CC").s().p("Ag0A+Ig2gfQgEgCgCgEQgDgKAJgDIB/hJQAIgEAJAAQAIAAAIAEIA2AeQAEACACAEQABAEgCAEQgCAEgDABIiABKQgIAEgIAAQgIAAgIgEgAAcg+Ih/BJQgBAAgBABQAAAAgBAAQAAABAAAAQgBABAAAAQgCAGAGACIA2AfQAJAGAKgGIB/hKQABAAAAAAQABAAAAgBQABAAAAgBQAAAAABgBQABgFgFgDIg2geQgFgDgFAAQgEAAgFADg");
	this.shape_437.setTransform(408.1,788.7);

	this.shape_438 = new cjs.Shape();
	this.shape_438.graphics.f("#8A9799").s().p("Ag0AyIg2ggQgGgCgBgHIAAgSQABAGAGADIA2AeQAQAIAQgIIB/hJQAGgEABgGIAAAUQgBAGgGADIh/BKQgIAEgIAAQgIAAgIgEg");
	this.shape_438.setTransform(408.2,791.9);

	this.shape_439 = new cjs.Shape();
	this.shape_439.graphics.f("#A8B8BB").s().p("AguA6Ig2gfQgFgCACgGQAAAAAAgBQABAAAAgBQABAAAAAAQABgBAAAAIB/hJQAKgFAKAFIA2AfQAFACgCAFIgDAEIiABJQgEADgFAAQgFAAgFgDg");
	this.shape_439.setTransform(408.2,788.2);

	this.shape_440 = new cjs.Shape();
	this.shape_440.graphics.f("#B8C9CC").s().p("Ag0A+Ig2gfQgFgBgBgFQgCgDACgEQACgEAEgCIB/hJQAQgIAQAIIA2AfQAFACABAEQACAEgCAEQgCAEgEABIh/BJQgIAEgIAAQgIAAgIgEgAAcg+IiABJQAAAAgBABQAAAAgBAAQAAABgBAAQAAABAAABQgCAGAFABIA2AgQAKAFAKgFIB/hKQAAAAABAAQAAgBABAAQAAgBABAAQAAgBAAAAQACgGgFgCIg2gfQgFgDgFAAQgEAAgFADg");
	this.shape_440.setTransform(385.6,801.8);

	this.shape_441 = new cjs.Shape();
	this.shape_441.graphics.f("#8A9799").s().p("Ag0AyIg2ggQgHgDAAgGIAAgSQAAAGAHADIA2AeQAQAIAQgIIB/hKQAHgCAAgHIAAAUQAAAGgHADIh/BKQgIAEgIAAQgIAAgIgEg");
	this.shape_441.setTransform(385.6,805);

	this.shape_442 = new cjs.Shape();
	this.shape_442.graphics.f("#A8B8BB").s().p("AguA7Ig2ggQgFgCACgGQAAAAAAgBQABgBAAAAQABAAAAgBQABAAAAAAICAhKQAJgEAKAEIA2AgQAFACgCAFQAAACgDACIiABKQgEACgFAAQgFAAgFgCg");
	this.shape_442.setTransform(385.6,801.3);

	this.shape_443 = new cjs.Shape();
	this.shape_443.graphics.f("#9AB3B8").s().p("Ag0A+Ig2gfQgFgDgBgDQgDgJAJgEIB/hJQAQgIAQAIIA2AfQAEABACAFQACAEgCADQgCAEgEACIh/BJQgIAEgIAAQgIAAgIgEgAAcg+Ih/BKQgBAAgBAAQAAABgBAAQAAABAAAAQgBABAAAAQgCAGAGACIA2AfQAJAFAKgFIB/hKIAEgDQACgGgGgCIg2gfQgFgCgEAAQgFAAgFACg");
	this.shape_443.setTransform(489.3,757);

	this.shape_444 = new cjs.Shape();
	this.shape_444.graphics.f("#6F8285").s().p("Ag0AyIg2gfQgGgEgBgGIAAgSQABAGAGADIA2AeQAQAIAQgIICAhJQAFgEABgGIAAAUQgBAGgFADIiABKQgIAEgIAAQgIAAgIgEg");
	this.shape_444.setTransform(489.4,760.2);

	this.shape_445 = new cjs.Shape();
	this.shape_445.graphics.f("#8BA2A7").s().p("AguA6Ig2gfQAAAAgBAAQAAgBgBAAQAAAAgBgBQAAAAAAgBQAAAAAAgBQgBgBAAAAQAAgBABAAQAAgBAAAAQAAgBAAgBQABAAAAgBQAAAAABAAQABgBAAAAIB/hJQAKgFAJAFIA2AfQAGACgCAFQAAABgBABQAAAAAAABQgBAAAAAAQgBABgBAAIh/BJQgEACgFAAQgFAAgFgCg");
	this.shape_445.setTransform(489.4,756.6);

	this.shape_446 = new cjs.Shape();
	this.shape_446.graphics.f("#9AB3B8").s().p("Ag0A+Ig2gfQgEgBgCgFQgCgDACgEQACgEAEgCIB/hJQAQgIARAIIA2AfQAEACABAEQACAEgCAEQgBADgEACIiABJQgIAEgIAAQgIAAgIgEgAAcg+IiABKQgBAAAAAAQgBABAAAAQgBABAAAAQAAABgBAAQgBAGAFACIA2AfQAKAFAKgFIB/hJQAAgBABAAQAAAAABgBQAAAAAAgBQABAAAAgBQABgGgEgBIg2ggQgFgCgFAAQgFAAgEACg");
	this.shape_446.setTransform(466.8,770.1);

	this.shape_447 = new cjs.Shape();
	this.shape_447.graphics.f("#6F8285").s().p("Ag0AxIg2gfQgGgCgBgHIAAgTQABAHAGADIA2AeQAQAJAQgJICAhKQAFgCABgHIAAAUQgBAGgFADIiABJQgIAFgIAAQgIAAgIgFg");
	this.shape_447.setTransform(466.8,773.4);

	this.shape_448 = new cjs.Shape();
	this.shape_448.graphics.f("#8BA2A7").s().p("AguA6Ig2geQgFgDACgFQAAgBAAgBQAAAAABgBQAAAAABAAQAAgBABAAICAhKQAJgEAKAEIA2AgQAGADgDAEQAAABAAAAQgBABAAAAQgBABAAAAQgBAAAAABIh/BJQgFADgFAAQgFAAgFgDg");
	this.shape_448.setTransform(466.7,769.7);

	this.shape_449 = new cjs.Shape();
	this.shape_449.graphics.f("#B8C9CC").s().p("Ag0A+Ig2gfQgEgBgCgFQgCgEACgDQACgEAEgBIB/hKQAQgIAQAIIA2AfQAEACACAEQACAEgCAEQgCADgEACIh/BJQgIAEgIAAQgIAAgIgEgAAcg9IiABJQAAAAgBABQAAAAgBAAQAAABAAAAQgBABAAABQgCAFAFACIA2AfQAKAFAKgFIB/hJIADgDQADgGgGgCIg2gfQgFgDgFAAQgFAAgEADg");
	this.shape_449.setTransform(444.2,783.2);

	this.shape_450 = new cjs.Shape();
	this.shape_450.graphics.f("#8A9799").s().p("Ag0AyIg2ggQgGgDgBgGIAAgTQABAHAGACIA2AfQAQAIAQgIIB/hKQAHgCAAgHIAAAUQgBAHgGACIh/BKQgIADgIAAQgIAAgIgDg");
	this.shape_450.setTransform(444.2,786.5);

	this.shape_451 = new cjs.Shape();
	this.shape_451.graphics.f("#A8B8BB").s().p("AguA6Ig2gfQgFgCACgFQAAgBAAAAQAAgBABAAQAAgBABAAQAAgBABAAIB/hJQAKgFAKAFIA2AfQAFACgCAFIgDAEIiABJQgEADgFAAQgFAAgFgDg");
	this.shape_451.setTransform(444.2,782.8);

	this.shape_452 = new cjs.Shape();
	this.shape_452.graphics.f("#B8C9CC").s().p("Ag0A+Ig2gfQgFgCgBgEQgCgEACgEQACgEAEgBIB/hJQAQgJAQAJIA2AfQAFACABAEQACADgCAEQgCAEgEACIh/BJQgIAEgIAAQgIAAgIgEgAAcg+IiABKQAAAAgBAAQAAABgBAAQAAAAAAABQgBABAAAAQgCAFAFADIA2AfQAKAFAKgFIB/hKQAAAAABAAQAAgBABAAQAAAAABgBQAAgBAAAAQACgGgFgCIg2gfQgFgCgFAAQgEAAgFACg");
	this.shape_452.setTransform(421.6,796.4);

	this.shape_453 = new cjs.Shape();
	this.shape_453.graphics.f("#8A9799").s().p("Ag0AxIg2gfQgGgCgBgHIAAgTQABAHAGADIA2AeQAQAIAQgIIB/hKQAHgCAAgGIAAATQAAAGgHADIh/BJQgIAEgIAAQgIAAgIgEg");
	this.shape_453.setTransform(421.6,799.6);

	this.shape_454 = new cjs.Shape();
	this.shape_454.graphics.f("#A8B8BB").s().p("AguA6Ig2gfQgFgCACgGQAAAAAAgBQABAAAAgBQABAAAAgBQABAAAAAAIB/hKQAKgEAKAEIA2AgQAFABgCAGQAAABAAABQgBAAAAAAQgBABAAAAQgBABAAAAIiABJQgEADgFAAQgFAAgFgDg");
	this.shape_454.setTransform(421.6,796);

	this.shape_455 = new cjs.Shape();
	this.shape_455.graphics.f("#B8C9CC").s().p("Ag0A+Ig2gfQgFgBgBgFQgCgDACgEQACgEAEgCIB/hJQAQgIAQAIIA2AfQAFACABAEQACAEgCAEQgCADgEACIh/BJQgIAEgIAAQgIAAgIgEgAAcg+Ih/BKQgBAAAAAAQgBAAAAABQgBAAAAABQAAABgBAAQAAABAAAAQAAABAAAAQAAABAAABQAAAAAAABQABAAAAABQAAAAABABQAAAAABAAQAAABABAAIA2AfQAJAFAKgFIB/hJQADgCAAgCQADgFgGgDIg2gfQgFgCgFAAQgEAAgFACg");
	this.shape_455.setTransform(399,809.5);

	this.shape_456 = new cjs.Shape();
	this.shape_456.graphics.f("#8A9799").s().p("Ag0AyIg2ggQgGgDgBgGIAAgSQABAFAGAEIA2AeQAQAIAQgIIB/hKQAHgCAAgHIAAATQAAAIgHACIh/BKQgIADgIAAQgIAAgIgDg");
	this.shape_456.setTransform(399,812.8);

	this.shape_457 = new cjs.Shape();
	this.shape_457.graphics.f("#A8B8BB").s().p("AguA6Ig2gfQgFgCACgFQAAgBAAAAQABgBAAAAQABgBAAAAQABAAAAgBICAhJQAJgFAKAFIA2AfQAFACgCAFQAAABAAAAQAAABgBAAQAAABgBAAQgBABAAAAIh/BJQgFADgFAAQgFAAgFgDg");
	this.shape_457.setTransform(399,809.1);

	this.shape_458 = new cjs.Shape();
	this.shape_458.graphics.f("#9AB3B8").s().p("Ag0A+Ig2gfQgEgCgCgEQgCgEACgDQACgFAEgBIB/hJQAHgEAJAAQAJAAAHAEIA2AeQAFAEABACQADAKgJADIh/BKQgIAEgIAAQgIAAgIgEgAAcg+IiABJQAAABgBAAQAAAAgBABQAAAAgBABQAAAAAAABQgCAFAFACIA2AgQAKAFAKgFIB/hKQABAAAAgBQABAAAAAAQABgBAAAAQAAgBAAgBQACgEgFgDIg2gfQgFgCgFAAQgEAAgFACg");
	this.shape_458.setTransform(480.2,777.9);

	this.shape_459 = new cjs.Shape();
	this.shape_459.graphics.f("#6F8285").s().p("Ag0AxIg2gfQgGgCgBgHIAAgSQABAGAGADIA2AeQAQAIAQgIIB/hKQAGgCABgHIAAAUQgBAGgGADIh/BJQgIAFgIAAQgIAAgIgFg");
	this.shape_459.setTransform(480.2,781.1);

	this.shape_460 = new cjs.Shape();
	this.shape_460.graphics.f("#8BA2A7").s().p("AguA6Ig2gfQgFgCACgGQAAAAAAgBQABAAAAgBQABAAAAAAQABgBAAAAIB/hKQAKgEAKAEIA2AgQAFACgCAFQAAABAAAAQAAABgBAAQAAABgBAAQAAAAgBAAIiABKQgEADgFAAQgFAAgFgDg");
	this.shape_460.setTransform(480.2,777.5);

	this.shape_461 = new cjs.Shape();
	this.shape_461.graphics.f("#B8C9CC").s().p("Ag0A+Ig2gfQgFgCgBgEQgCgEACgEQACgDAEgCIB/hJQAQgIAQAIIA2AfQAFABABAFQACADgCAEQgCAEgEACIh/BJQgIAEgIAAQgIAAgIgEgAAcg+IiABKQAAAAgBAAQAAAAgBABQAAAAAAABQgBAAAAABQgCAGAFACIA2AfQAKAFAKgFIB/hKQAAAAABAAQAAgBABAAQAAgBABAAQAAgBAAAAQACgGgFgCIg2gfQgFgCgFAAQgEAAgFACg");
	this.shape_461.setTransform(457.6,791);

	this.shape_462 = new cjs.Shape();
	this.shape_462.graphics.f("#8A9799").s().p("Ag0AyIg2gfQgGgEgBgGIAAgTQABAHAGADIA2AeQAQAIAQgIIB/hJQAHgDAAgGIAAATQAAAGgHADIh/BKQgIAEgIAAQgIAAgIgEg");
	this.shape_462.setTransform(457.6,794.3);

	this.shape_463 = new cjs.Shape();
	this.shape_463.graphics.f("#A8B8BB").s().p("AguA6Ig2gfQgFgCACgFQAAgBAAgBQAAAAABgBQAAAAABAAQAAgBABAAIB/hJQAKgFAKAFIA2AfQAFACgCAFQAAABAAAAQgBABAAAAQgBABAAAAQgBAAAAABIiABJQgEADgFAAQgFAAgFgDg");
	this.shape_463.setTransform(457.6,790.6);

	this.shape_464 = new cjs.Shape();
	this.shape_464.graphics.f("#B8C9CC").s().p("Ag0A+Ig2gfQgFgBgBgFQgCgDACgEQACgEAEgCIB/hJQAQgIAQAIIA2AfQAFACABAEQACAEgCAEQgCADgEACIh/BJQgIAEgIAAQgIAAgIgEgAAcg+Ih/BKQgBAAAAAAQgBAAAAABQgBAAAAABQAAABgBAAQAAABAAAAQAAABAAAAQAAABAAABQAAAAAAABQABAAAAABQAAAAABABQAAAAABAAQAAAAABABIA2AfQAJAFAKgFIB/hKQAAAAABAAQABAAAAgBQABAAAAgBQAAAAAAgBQADgFgGgDIg2gfQgFgCgFAAQgEAAgFACg");
	this.shape_464.setTransform(435,804.1);

	this.shape_465 = new cjs.Shape();
	this.shape_465.graphics.f("#8A9799").s().p("Ag0AyIg2ggQgGgCgBgHIAAgSQABAGAGADIA2AeQAHAEAJAAQAJAAAHgEIB/hKQAGgCABgHIAAAUQAAAHgHACIh/BKQgHADgJABQgJgBgHgDg");
	this.shape_465.setTransform(435,807.4);

	this.shape_466 = new cjs.Shape();
	this.shape_466.graphics.f("#A8B8BB").s().p("AguA6Ig2gfQgFgCACgFQAAgBAAgBQABAAAAgBQABAAAAAAQABgBAAAAICAhKQAJgEAKAEIA2AfQAFADgCAFQAAABAAAAQAAABgBAAQAAABgBAAQAAAAgBABIh/BJQgFADgFAAQgFAAgFgDg");
	this.shape_466.setTransform(435,803.7);

	this.shape_467 = new cjs.Shape();
	this.shape_467.graphics.f("#B8C9CC").s().p("Ag0A+Ig2gfQgFgCgBgEQgCgDACgEQACgEAEgBIB/hKQAQgIAQAIIA2AfQAFACABAEQAEAJgKAEIh/BJQgIAEgIAAQgIAAgIgEgAAcg9Ih/BJQgBAAgBABQAAAAgBABQAAAAAAAAQgBABAAABQgCAFAGACIA2AfQAJAFAKgFIB/hJQAAAAABAAQAAgBABAAQAAgBABAAQAAgBAAAAQACgGgFgCIg2gfQgFgDgFAAQgFAAgEADg");
	this.shape_467.setTransform(412.4,817.2);

	this.shape_468 = new cjs.Shape();
	this.shape_468.graphics.f("#8A9799").s().p("Ag0AyIg2ggQgGgDgBgGIAAgSQABAGAGACIA2AfQAQAIAQgIIB/hKQAGgCABgHIAAAUQgBAGgGADIh/BKQgIADgIAAQgIAAgIgDg");
	this.shape_468.setTransform(412.4,820.5);

	this.shape_469 = new cjs.Shape();
	this.shape_469.graphics.f("#A8B8BB").s().p("AguA6Ig2gfQgFgCACgFQAAgBABgBQAAAAAAgBQABAAAAAAQABgBAAAAICAhJQAJgFAKAFIA2AfQAFACgCAFQAAABAAAAQgBABAAAAQgBABAAAAQgBAAAAABIh/BJQgFADgFAAQgFAAgFgDg");
	this.shape_469.setTransform(412.4,816.8);

	this.shape_470 = new cjs.Shape();
	this.shape_470.graphics.f("#9AB3B8").s().p("Ag0A+Ig2gfQgEgBgCgFQgCgDACgEQACgEAEgCIB/hJQAQgIAQAIIA2AfQAFADABADQACAEgCAEQgCADgEACIh/BJQgIAEgIAAQgIAAgIgEgAAcg+IiABKIgDADQgCAGAFACIA2AfQAKAFAKgFIB/hKQAAAAABAAQABgBAAAAQABgBAAAAQAAgBAAAAQACgFgFgDIg2gfQgFgCgFAAQgEAAgFACg");
	this.shape_470.setTransform(493.6,785.6);

	this.shape_471 = new cjs.Shape();
	this.shape_471.graphics.f("#6F8285").s().p("Ag0AxIg2geQgGgEgBgGIAAgTQABAHAGADIA2AeQAQAIAQgIIB/hJQAHgDAAgGIAAATQAAAGgHADIh/BJQgIAFgIAAQgIAAgIgFg");
	this.shape_471.setTransform(493.6,788.9);

	this.shape_472 = new cjs.Shape();
	this.shape_472.graphics.f("#8BA2A7").s().p("AguA6Ig2gfQgFgCACgGIADgDICAhKQAJgEAKAEIA2AgQAFACgCAFQAAABAAAAQAAABgBAAQAAABgBAAQgBAAAAAAIh/BKQgFADgFAAQgFAAgFgDg");
	this.shape_472.setTransform(493.6,785.2);

	this.shape_473 = new cjs.Shape();
	this.shape_473.graphics.f("#9AB3B8").s().p("Ag1A+Ig2gfQgEgCgCgEQgBgDACgEQABgEAEgCICAhJQAHgEAJAAQAIAAAIAEIA2AfQAFABACAFQABAEgCAEQgCAEgEABIh/BJQgIAEgIAAQgJAAgIgEgAAbg+Ih/BJQgCABgCADQgBAGAFABIA2AgQAKAFAJgFIB/hKQABAAABAAQAAgBABAAQAAgBAAAAQABgBAAAAQABgGgFgCIg2gfQgEgDgFAAQgFAAgFADg");
	this.shape_473.setTransform(471,798.8);

	this.shape_474 = new cjs.Shape();
	this.shape_474.graphics.f("#6F8285").s().p("Ag0AxIg2gfQgGgCgBgHIAAgTQABAHAGACIA2AfQAQAIAQgIIB/hKQAHgCAAgGIAAATQAAAGgHADIh/BJQgIAFgIAAQgIAAgIgFg");
	this.shape_474.setTransform(471,802);

	this.shape_475 = new cjs.Shape();
	this.shape_475.graphics.f("#8BA2A7").s().p("AguA6Ig1gfQgGgCACgFQACgEACAAIB/hJQAJgFAKAFIA2AfQAFACgCAFQAAABAAABQgBAAAAABQgBAAAAAAQgBABAAAAIh/BJQgFADgFAAQgFAAgFgDg");
	this.shape_475.setTransform(471,798.3);

	this.shape_476 = new cjs.Shape();
	this.shape_476.graphics.f("#9AB3B8").s().p("Ag1A+Ig2gfQgEgBgCgFQgBgEACgDQACgEADgCICAhJQAQgIAQAIIA2AfQAEACACAEQADAJgJAEIh/BJQgIAEgIAAQgIAAgJgEgAAbg+Ih/BKQAAAAgBAAQAAABgBAAQAAABAAAAQgBABAAAAQgCAGAFACIA2AfQAKAFAJgFICAhKQAAAAABAAQAAAAABgBQAAAAABgBQAAAAAAgBQACgFgFgDIg2gfQgFgCgFAAQgFAAgFACg");
	this.shape_476.setTransform(448.4,811.9);

	this.shape_477 = new cjs.Shape();
	this.shape_477.graphics.f("#6F8285").s().p("Ag0AxIg2gfQgHgDAAgGIAAgTQAAAHAHADIA2AeQAQAIAQgIIB/hKQAHgCAAgGIAAATQAAAGgHADIh/BJQgIAEgIAAQgIAAgIgEg");
	this.shape_477.setTransform(448.4,815.1);

	this.shape_478 = new cjs.Shape();
	this.shape_478.graphics.f("#8BA2A7").s().p("AguA6Ig2gfQgFgCACgFIADgEICAhKQAJgEAKAEIA2AgQAFACgCAFQAAABAAAAQAAABgBAAQAAABgBAAQAAAAgBABIh/BJQgFADgFAAQgFAAgFgDg");
	this.shape_478.setTransform(448.4,811.5);

	this.shape_479 = new cjs.Shape();
	this.shape_479.graphics.f("#B8C9CC").s().p("Ag0A+Ig2gfQgFgCgBgEQgCgEACgEQABgDAFgCIB/hJQAQgIARAIIA1AfQAEABACAFQACAEgCADQgCAEgEACIh/BJQgIAEgIAAQgIAAgIgEgAAcg+IiABKQAAAAgBAAQAAABgBAAQAAABgBAAQAAABAAAAQgCAGAFACIA2AfQAKAFAKgFIB/hKQABAAAAAAQABgBAAAAQABgBAAAAQAAgBAAAAQADgGgGgCIg2gfQgFgCgFAAQgFAAgEACg");
	this.shape_479.setTransform(425.8,825);

	this.shape_480 = new cjs.Shape();
	this.shape_480.graphics.f("#8A9799").s().p("Ag0AyIg2gfQgGgDgBgHIAAgSQABAGAGADIA2AeQAQAIAQgIICAhJQAFgEABgGIAAAUQgBAGgFADIiABKQgIAEgIAAQgIAAgIgEg");
	this.shape_480.setTransform(425.8,828.2);

	this.shape_481 = new cjs.Shape();
	this.shape_481.graphics.f("#A8B8BB").s().p("AguA7Ig1ggQgGgDACgEQAAgBABAAQAAgBAAAAQABgBAAAAQABAAABAAIB/hKQAJgFAKAFIA2AfQAAAAABABQAAAAABAAQAAABABAAQAAABAAAAQAAABAAAAQABABAAAAQAAABgBAAQAAABAAAAQAAABAAABQgBAAAAABQgBAAAAABQgBAAAAAAIh/BKQgFACgFAAQgFAAgFgCg");
	this.shape_481.setTransform(425.8,824.6);

	this.shape_482 = new cjs.Shape();
	this.shape_482.graphics.f("#C66F6E").s().p("Ag+A5IgkgVQgEgBgBgEQgDgIAIgDICEhMQANgIAPAIIAkAVQAFABABAFQABADgCADQgCAEgDABIiEBLQgHAEgHAAQgHAAgHgEgAAog5IiDBMIgDACQgBAFAEACIAkAUQAHAFAIgFICDhLIADgDQABgEgEgCIgkgVQgEgCgDAAQgEAAgEACg");
	this.shape_482.setTransform(463.4,742);

	this.shape_483 = new cjs.Shape();
	this.shape_483.graphics.f("#945252").s().p("Ag9AzIgkgVQgGgDAAgGIAAgTQAAAGAGACIAkAVQAOAHAOgHICDhMQAGgCAAgGIAAATQAAAGgGADIiDBMQgHADgHAAQgHAAgHgDg");
	this.shape_483.setTransform(463.3,744.6);

	this.shape_484 = new cjs.Shape();
	this.shape_484.graphics.f("#B56564").s().p("Ag3A1IgkgVQgEgBABgEIADgDICEhMQAHgDAHADIAlAUQAEACgCAEIgCADIiEBMQgEACgDAAQgEAAgEgCg");
	this.shape_484.setTransform(463.3,741.6);

	this.shape_485 = new cjs.Shape();
	this.shape_485.graphics.f("#9AB3B8").s().p("Ag+A5IgkgVQgEgBgBgEQgBgDABgDQACgEADgBICEhMQANgHAPAHIAjAUIABAAQAFACABAFQABADgCADQgCAEgDAAIiEBMQgHADgHAAQgHAAgHgDgAAog4IiDBLIgDADQgBAEAEACIAkAUQAHAFAIgFICDhMQABAAAAAAQAAAAABgBQAAAAAAAAQABgBAAAAQABgEgCgCIgCAAIgkgUQgDgDgEAAQgEAAgEADg");
	this.shape_485.setTransform(440.8,755.2);

	this.shape_486 = new cjs.Shape();
	this.shape_486.graphics.f("#6F8285").s().p("Ag9AyIgkgUQgFgCgBgHIAAgTQABAGAFACIAkAVQAOAHAOgHICDhMQAGgDAAgFIAAATQAAAGgGACIiDBMQgHAEgHAAQgHAAgHgEg");
	this.shape_486.setTransform(440.7,757.7);

	this.shape_487 = new cjs.Shape();
	this.shape_487.graphics.f("#8BA2A7").s().p("Ag3A1IgkgUQgEgCACgFIACgCICEhMQAHgEAIAEIAkAUIACADQAAAAABAAQAAABAAAAQAAABAAAAQgBABAAAAQAAABAAAAQAAAAgBABQAAAAAAAAQgBABAAAAIiEBMQgEACgDAAQgEAAgEgCg");
	this.shape_487.setTransform(440.7,754.7);

	this.shape_488 = new cjs.Shape();
	this.shape_488.graphics.f("#9AB3B8").s().p("Ag9A5IgkgVQgEgBgCgFQgCgHAIgDICDhMQAPgHANAHIAkAVIABAAQAEABABAEQABAEgCADQgBADgEABIiDBMQgHADgHAAQgHAAgHgDgAApg5IiDBMIgDADIAAADIADADIAkAUQAHAEAIgEICDhMIADgCQABgEgEgCIAAAAIgkgVIgHgCIgIACg");
	this.shape_488.setTransform(418.1,768.3);

	this.shape_489 = new cjs.Shape();
	this.shape_489.graphics.f("#6F8285").s().p("Ag9AzIgkgVQgGgDAAgGIAAgTQAAAFAGADIAkAVQAOAHAOgHICEhMQAEgDABgFIAAATQgBAGgEADIiEBMQgHADgHAAQgHAAgHgDg");
	this.shape_489.setTransform(418.2,770.9);

	this.shape_490 = new cjs.Shape();
	this.shape_490.graphics.f("#8BA2A7").s().p("Ag3A1IgjgVIgDgCIAAgDIADgEICDhLQAIgEAHAEIAkAUQAEACgCAFIgCACIiEBMQgEACgDAAQgEAAgEgCg");
	this.shape_490.setTransform(418.1,767.8);

	this.shape_491 = new cjs.Shape();
	this.shape_491.graphics.f("#9AB3B8").s().p("Ag9A5IgkgVQgEgBgCgEQgBgEACgDQABgDAEgBICDhMQAOgHAOAHIAkAVQAEABACAEQACAIgIADIiDBMQgHAEgHAAQgHAAgHgEgAApg5IiEBMIgCADQgCAEAEACIAkAVQAIADAHgDICEhMQAAAAAAgBQABAAAAAAQAAgBABAAQAAgBAAAAQACgEgEgCIgkgVQgEgCgEAAQgDAAgEACg");
	this.shape_491.setTransform(395.5,781.4);

	this.shape_492 = new cjs.Shape();
	this.shape_492.graphics.f("#6F8285").s().p("Ag9AzIgkgVQgGgDAAgGIAAgTQAAAGAGACIAkAVQAOAIAOgIICDhMQAGgCAAgGIAAATQgBAHgFABIiDBNQgHADgHAAQgHAAgHgDg");
	this.shape_492.setTransform(395.5,783.9);

	this.shape_493 = new cjs.Shape();
	this.shape_493.graphics.f("#8BA2A7").s().p("Ag3A1IgkgUQgEgDACgEIACgCICEhMQAIgEAHAEIAkAVQAAAAABAAQAAAAAAABQABAAAAAAQAAABAAAAQAAAAABABQAAAAAAABQAAAAAAABQgBAAAAAAQAAABAAABQgBAAAAAAQAAABgBAAQAAAAAAABIiEBLQgDACgEAAIgIgCg");
	this.shape_493.setTransform(395.5,780.9);

	this.shape_494 = new cjs.Shape();
	this.shape_494.graphics.f("#9AB3B8").s().p("Ag+A5IgkgVQgEgBgBgEQgBgEABgCQACgEADgBICEhMQAOgHAOAHIAjAUIABAAQAEACACAFQACAHgIADIiEBMQgGAEgHAAQgHAAgIgEgAApg4IiDBLIgDADQgCAEAFACIAkAVQAHADAHgDICEhNQAAAAABAAQAAAAABAAQAAgBAAAAQABgBAAAAQABgEgEgCIgBAAIgkgUQgDgCgEAAQgDAAgEACg");
	this.shape_494.setTransform(372.9,794.5);

	this.shape_495 = new cjs.Shape();
	this.shape_495.graphics.f("#6F8285").s().p("Ag9AzIgkgWQgFgCgBgFIAAgUQABAGAFACIAkAVQAOAHAOgHICDhMQAFgCABgGIAAATQgBAHgFABIiDBNQgHADgHAAQgHAAgHgDg");
	this.shape_495.setTransform(372.9,797.1);

	this.shape_496 = new cjs.Shape();
	this.shape_496.graphics.f("#8BA2A7").s().p("Ag2A1IgkgUQgFgCACgFQAAAAAAgBQAAAAABAAQAAgBABAAQAAAAABAAICDhMQAHgEAHAEIAlAVQAEABgBAEQgBABAAAAQAAABgBAAQAAAAAAABQgBAAAAAAIiEBMQgDACgEAAQgEAAgDgCg");
	this.shape_496.setTransform(372.9,794.1);

	this.shape_497 = new cjs.Shape();
	this.shape_497.graphics.f("#E6E6E6").s().p("Ag0BHIg2ggQgIgEgCgHQgDgJAEgHQACgFAHgDIB+hJQAJgEAJgBQAIABAIAEIA2AeQAHAEADAJQACAHgEAHQgDAGgFADIiABKQgHADgJABQgJgBgHgDg");
	this.shape_497.setTransform(453.4,764.8);

	this.shape_498 = new cjs.Shape();
	this.shape_498.graphics.f("#E6E6E6").s().p("AgkBLQgJAAgHgEIg2gfQgIgEgCgIQgDgIAEgHQADgGAGgDIB/hJQAQgJARAJIA2AfQAHAEADAIQACAIgEAHQgCAFgGADIiABKQgGAEgHAAIgDAAg");
	this.shape_498.setTransform(430.8,777.8);

	this.shape_499 = new cjs.Shape();
	this.shape_499.graphics.f("#E6E6E6").s().p("Ag1BGIg2geQgHgFgCgIQgDgHAEgIQACgEAGgEICAhJQAHgFAJAAQAJAAAIAFIA2AeQAHAFACAHQADAIgEAHQgEAGgEADIiABJQgHAFgJAAQgJgBgIgEg");
	this.shape_499.setTransform(408.2,791);

	this.shape_500 = new cjs.Shape();
	this.shape_500.graphics.f("#E6E6E6").s().p("Ag1BGIg2gfQgHgEgCgIQgDgIAEgHQADgFAFgDICAhKQAHgEAJAAQAJAAAIAEIA2AfQAHAEACAIQADAIgEAHQgCAFgGAEIh/BJQgIAFgJAAQgJAAgIgFg");
	this.shape_500.setTransform(385.6,804.1);

	this.shape_501 = new cjs.Shape();
	this.shape_501.graphics.f("#E6E6E6").s().p("Ag0BGIg2gfQgIgDgCgIQgDgIAEgIQADgGAGgCIB/hJQAQgJARAJIA2AfQAHADADAJQACAIgEAHQgDAGgFACIiABJQgHAFgJAAQgJAAgHgFg");
	this.shape_501.setTransform(466.8,772.5);

	this.shape_502 = new cjs.Shape();
	this.shape_502.graphics.f("#E6E6E6").s().p("AgkBKQgJABgIgFIg2gfQgHgEgCgIQgDgIAEgHQACgFAGgDICAhKQAHgEAJAAQAJAAAIAEIA2AfQAHAEACAIQADAIgEAIQgDAFgFADIiABJQgHAFgIAAIgBgBg");
	this.shape_502.setTransform(444.2,785.6);

	this.shape_503 = new cjs.Shape();
	this.shape_503.graphics.f("#E6E6E6").s().p("Ag1BGIg2gfQgHgEgCgHQgDgIAEgIQAEgGAEgCICAhJQAHgFAJAAQAJAAAIAFIA2AeQAHAEACAIQADAJgEAGQgDAGgFACIh/BKQgIAEgJABQgJgBgIgEg");
	this.shape_503.setTransform(421.6,798.8);

	this.shape_504 = new cjs.Shape();
	this.shape_504.graphics.f("#E6E6E6").s().p("AgkBLQgJABgIgFIg2gfQgHgEgCgIQgDgIAEgHQAEgGAEgDIB/hJQARgJARAJIA2AfQAHAEADAIQACAIgEAHQgDAFgFADIh/BKQgHAEgIAAIgCAAg");
	this.shape_504.setTransform(399,811.8);

	this.shape_505 = new cjs.Shape();
	this.shape_505.graphics.f("#E6E6E6").s().p("Ag1BGIg2geQgHgEgCgIQgDgJAEgGQAEgGAEgDICAhJQAHgFAJAAQAJAAAIAFIA2AeQAHAEACAIQADAJgEAGQgCAFgGAEIh/BJQgIAFgJAAQgKAAgHgFg");
	this.shape_505.setTransform(457.6,793.4);

	this.shape_506 = new cjs.Shape();
	this.shape_506.graphics.f("#E6E6E6").s().p("Ag1BGIg2gfQgHgDgDgIQgCgIAEgIQADgGAFgCIB/hJQARgJAQAJIA2AfQAIADACAJQADAIgEAHQgEAGgFACIh+BJQgIAFgKAAQgJAAgHgFg");
	this.shape_506.setTransform(435,806.5);

	this.shape_507 = new cjs.Shape();
	this.shape_507.graphics.f("#E6E6E6").s().p("AgkBLQgJAAgIgEIg1gfQgIgEgCgIQgDgIAEgHQADgGAGgDIB+hJQARgJARAJIA2AfQAHAEADAIQACAIgEAHQgDAFgFADIiABKQgGAEgHAAIgDAAg");
	this.shape_507.setTransform(412.4,819.5);

	this.shape_508 = new cjs.Shape();
	this.shape_508.graphics.f("#E6E6E6").s().p("Ag1BGIg1geQgIgEgCgJQgDgHAEgHQADgGAGgDIB+hKQARgIARAIIA2AgQAHAEADAHQACAJgEAHQgDAGgFACIiABJQgHAFgJAAQgJAAgIgFg");
	this.shape_508.setTransform(448.4,814.2);

	this.shape_509 = new cjs.Shape();
	this.shape_509.graphics.f("#E6E6E6").s().p("Ag0BGIg2geQgIgFgCgIQgDgHAEgHQADgGAGgDIB/hKQAHgEAKAAQAIAAAIAEIA2AgQAHAEADAHQACAIgEAIQgEAFgEADIiABJQgGAEgKABQgKgBgGgEg");
	this.shape_509.setTransform(425.8,827.4);

	this.shape_510 = new cjs.Shape();
	this.shape_510.graphics.f("#E6E6E6").s().p("AANBuIi7htQgHgDgDgIQgCgIAEgHQADgFAFgDICAhLQARgJAQAJIC8BsQAHADADAJQACAIgEAHQgDAGgFACIiABLQgIAEgJAAQgJAAgIgEg");
	this.shape_510.setTransform(509.5,770.9);

	this.shape_511 = new cjs.Shape();
	this.shape_511.graphics.f("#E6E6E6").s().p("AgvBFQgIAAgHgEIgkgVQgGgDgDgHQgCgHADgHQAEgGAEgCICEhMQAOgIAPAIIAkAUQAHAEACAHQACAIgDAGQgDAFgFADIiDBMQgIAEgGAAIgBAAg");
	this.shape_511.setTransform(463.3,744.3);

	this.shape_512 = new cjs.Shape();
	this.shape_512.graphics.f("#E6E6E6").s().p("Ag+BCIgkgVQgGgEgDgHQgCgHADgHQADgFAFgDICEhMQAOgIAPAIIAkAVQAGADADAHQACAHgDAHQgDAGgFACIiEBNQgIADgGAAQgHAAgIgDg");
	this.shape_512.setTransform(440.7,757.4);

	this.shape_513 = new cjs.Shape();
	this.shape_513.graphics.f("#E6E6E6").s().p("Ag+BBIgkgVQgGgDgDgHQgCgHADgHQAEgGAEgCICEhMQAOgIAPAIIAkAUQAHAEACAHQACAIgDAGQgDAGgFACIiEBMQgHAEgHAAQgIAAgHgEg");
	this.shape_513.setTransform(418.1,770.6);

	this.shape_514 = new cjs.Shape();
	this.shape_514.graphics.f("#E6E6E6").s().p("Ag+BCIgkgVQgGgEgDgHQgCgHADgHQADgFAFgDICEhMQAOgIAPAIIAkAVQAHADACAHQACAIgDAGQgDAGgFACIiEBNQgIADgGAAQgHAAgIgDg");
	this.shape_514.setTransform(395.5,783.7);

	this.shape_515 = new cjs.Shape();
	this.shape_515.graphics.f("#E6E6E6").s().p("Ag+BBIgkgVQgHgDgCgHQgCgIADgGQADgGAFgCICEhMQAOgIAPAIIAkAUQAHAEACAHQACAIgDAGQgDAGgFACIiEBMQgHAEgIAAQgHAAgHgEg");
	this.shape_515.setTransform(373,796.8);

	this.shape_516 = new cjs.Shape();
	this.shape_516.graphics.f("#E6E6E6").s().p("Ag1BGIg2gfQgHgDgCgJQgDgIAEgHQAEgGAEgCICAhJQAHgEAJAAQAJAAAIAEIA2AfQAHAEACAIQADAIgEAHQgDAFgFADIiABKQgIAEgIgBIgDAAQgHAAgHgEg");
	this.shape_516.setTransform(475.9,751.6);

	this.shape_517 = new cjs.Shape();
	this.shape_517.graphics.f("#E6E6E6").s().p("Ag0BHIg2ggQgIgEgCgHQgDgIAEgIQADgFAGgDIB+hJQAJgEAJgBQAIABAIAEIA2AeQAHAFADAIQACAHgEAHQgDAGgFADIiABKQgGAEgKgBQgKABgGgEg");
	this.shape_517.setTransform(489.4,759.4);

	this.shape_518 = new cjs.Shape();
	this.shape_518.graphics.f("#E6E6E6").s().p("Ag1BGIg2gfQgHgEgCgIQgDgIAEgHQACgFAGgDICAhKQAHgEAJAAQAJAAAIAEIA2AgQAHAEACAHQADAIgEAIQgEAGgEACIiABJQgHAFgJAAQgJAAgIgFg");
	this.shape_518.setTransform(480.2,780.2);

	this.shape_519 = new cjs.Shape();
	this.shape_519.graphics.f("#E6E6E6").s().p("Ag1BGIg2geQgHgEgCgIQgDgJAEgGQAEgHAEgCIB/hJQARgKARAKIA2AeQAHAEADAIQACAIgEAIQgDAEgFAEIh/BJQgIAFgJAAQgKAAgHgFg");
	this.shape_519.setTransform(493.6,788);

	this.shape_520 = new cjs.Shape();
	this.shape_520.graphics.f("#E6E6E6").s().p("Ag1BHIg1ggQgIgDgCgIQgDgIAEgIQADgFAGgDIB/hKQAHgEAJAAQAJAAAIAEIA2AgQAHAEACAHQADAIgEAIQgDAFgFADIh/BKQgJAEgIAAQgJAAgIgEg");
	this.shape_520.setTransform(471,801.1);

	this.shape_521 = new cjs.Shape();
	this.shape_521.graphics.f("#F7F7F7").s().p("AkNFPIrVmiIAKgUILRGgQAnAWA1AAQA2AAAmgWIQDpVQAagPAJgUQAHgTgJgTIAIAOQAMAVgJAWQgJAWgcAQIwDJVQgpAXg6AAQg5AAgpgXg");
	this.shape_521.setTransform(441.3,808.2);

	this.shape_522 = new cjs.Shape();
	this.shape_522.graphics.f("#E6E6E6").s().p("AkHIlIrSmgIS7q/ILRGgQAnAWAAAgQAAAfgmAWIwDJUQgmAWg2AAQg2AAgmgWg");
	this.shape_522.setTransform(441.4,784.6);

	this.shape_523 = new cjs.Shape();
	this.shape_523.graphics.f("#C5C5C5").s().p("AkLFhIrZmjIADhMILVGiQAqAXA5AAQA6AAApgXIQDpVQAngXABgfIAABLQAAAhgoAXIwDJVQgpAXg6AAQg5AAgpgXg");
	this.shape_523.setTransform(441.1,814.1);

	this.shape_524 = new cjs.Shape();
	this.shape_524.graphics.f("#939393").s().p("AkCE3IrSmfIgNgSILYGjQApAXA6AAQA5AAApgXIQDpVQAWgKANgWIgJARQgMATgTALIwEJUQgmAWg2AAQg1AAgngWg");
	this.shape_524.setTransform(440.9,819.8);

	this.shape_525 = new cjs.Shape();
	this.shape_525.graphics.f("#6A7375").s().p("ArDDuQgbggACgiQADgjAegRIQqprQAegRAoAKQAoAKAaAfIDmERIy6K/g");
	this.shape_525.setTransform(390.7,746.8);

	this.shape_526 = new cjs.Shape();
	this.shape_526.graphics.f("#ECECEC").s().p("AhshIQgdgiADgmQADglAggTIANgFQgeARgCAjQgCAiAaAgIDlEPIgIAWg");
	this.shape_526.setTransform(329.3,779.4);

	this.shape_527 = new cjs.Shape();
	this.shape_527.graphics.f("#C5C5C5").s().p("Ah4g+QgVgagEgdQgEgcAOgWIAfgxQgNAWAEAbQAEAdAVAaIDrEXIggAyg");
	this.shape_527.setTransform(327.3,783.4);

	this.shape_528 = new cjs.Shape();
	this.shape_528.graphics.f("#939393").s().p("AhphnQgUgXgDgeIgCgMQAEAgAWAZIDrEXIgGABg");
	this.shape_528.setTransform(325.8,788.3);

	this.shape_529 = new cjs.Shape();
	this.shape_529.graphics.f("#868686").s().p("AIPkzIANgEIwqJrIgNAEg");
	this.shape_529.setTransform(373.4,728);

	this.shape_530 = new cjs.Shape();
	this.shape_530.graphics.f("#FFFFFF").s().p("AABgEIAMAAIgNAFIgMAEg");
	this.shape_530.setTransform(427.4,697.1);

	this.shape_531 = new cjs.Shape();
	this.shape_531.graphics.f("#C5C5C5").s().p("AgFAeIgOgOIATg2IAUANIgNBAg");
	this.shape_531.setTransform(340.8,803.6);

	this.shape_532 = new cjs.Shape();
	this.shape_532.graphics.f("#939393").s().p("AgLAHIgRgSIAFgQIA0AnIgMAQQgVgOgHgHg");
	this.shape_532.setTransform(341.1,806.4);

	this.shape_533 = new cjs.Shape();
	this.shape_533.graphics.f("#404040").s().p("AhbAuIgHgOIAAhNIAHgWQAmAWA1AAQA2AAAmgWIAGAWIAABNIgGAOQgmAWg2AAQg1AAgmgWg");
	this.shape_533.setTransform(424.2,846.3);

	this.shape_534 = new cjs.Shape();
	this.shape_534.graphics.f("#949494").s().p("AgEAKIAGgVIADACIgFAVg");
	this.shape_534.setTransform(414.8,840.7);

	this.shape_535 = new cjs.Shape();
	this.shape_535.graphics.f("#999999").s().p("AgGAJIAGgVIAHAEIgFAVg");
	this.shape_535.setTransform(415.4,841);

	this.shape_536 = new cjs.Shape();
	this.shape_536.graphics.f("#9E9E9E").s().p("AgGAJIAGgVIAHADIAAAAIgGAWg");
	this.shape_536.setTransform(416.3,841.4);

	this.shape_537 = new cjs.Shape();
	this.shape_537.graphics.f("#A3A3A3").s().p("AgGAKIAGgWIAHADIgFAWg");
	this.shape_537.setTransform(417.1,841.7);

	this.shape_538 = new cjs.Shape();
	this.shape_538.graphics.f("#A8A8A8").s().p("AgFAKIAEgVIAHACIgEAVg");
	this.shape_538.setTransform(417.9,842);

	this.shape_539 = new cjs.Shape();
	this.shape_539.graphics.f("#ADADAD").s().p("AgFAKIAEgVIAHABIgEAXg");
	this.shape_539.setTransform(418.7,842.2);

	this.shape_540 = new cjs.Shape();
	this.shape_540.graphics.f("#B3B3B3").s().p("AgEALIADgXIAHACIAAAAIgEAXg");
	this.shape_540.setTransform(419.6,842.4);

	this.shape_541 = new cjs.Shape();
	this.shape_541.graphics.f("#B8B8B8").s().p("AgEALIADgWIAGABIgCAWg");
	this.shape_541.setTransform(420.3,842.6);

	this.shape_542 = new cjs.Shape();
	this.shape_542.graphics.f("#BDBDBD").s().p("AgEALIACgWIAHABIgCAWg");
	this.shape_542.setTransform(421.1,842.7);

	this.shape_543 = new cjs.Shape();
	this.shape_543.graphics.f("#C2C2C2").s().p("AgEALIACgWIAHABIgCAWg");
	this.shape_543.setTransform(421.9,842.8);

	this.shape_544 = new cjs.Shape();
	this.shape_544.graphics.f("#C7C7C7").s().p("AgDAMIABgXIAGAAIAAAXg");
	this.shape_544.setTransform(422.7,842.9);

	this.shape_545 = new cjs.Shape();
	this.shape_545.graphics.f("#CCCCCC").s().p("AgDAMIABgXIAGAAIAAAXg");
	this.shape_545.setTransform(423.4,842.9);

	this.shape_546 = new cjs.Shape();
	this.shape_546.graphics.f("#D1D1D1").s().p("AgDAMIAAgXIAHAAIAAAXg");
	this.shape_546.setTransform(424,842.9);

	this.shape_547 = new cjs.Shape();
	this.shape_547.graphics.f("#D6D6D6").s().p("AgCAMIAAgXIAFAAIABAXg");
	this.shape_547.setTransform(424.7,842.9);

	this.shape_548 = new cjs.Shape();
	this.shape_548.graphics.f("#DBDBDB").s().p("AgCAMIgBgXIAGAAIABAXg");
	this.shape_548.setTransform(425.4,842.8);

	this.shape_549 = new cjs.Shape();
	this.shape_549.graphics.f("#E0E0E0").s().p("AgDgKIAGgBIABAWIgGABg");
	this.shape_549.setTransform(426.1,842.8);

	this.shape_550 = new cjs.Shape();
	this.shape_550.graphics.f("#EBEBEB").s().p("AgFgKIAJgBIACAWIgJABg");
	this.shape_550.setTransform(427.7,842.6);

	this.shape_551 = new cjs.Shape();
	this.shape_551.graphics.f("#F0F0F0").s().p("AgUgFQASgEARgGIAGAUQgRAIgVADg");
	this.shape_551.setTransform(430,842.1);

	this.shape_552 = new cjs.Shape();
	this.shape_552.graphics.f("#EBEBEB").s().p("AgKgGIAOgIIAHAVIgQAIg");
	this.shape_552.setTransform(432.7,841.1);

	this.shape_553 = new cjs.Shape();
	this.shape_553.graphics.f("#858585").s().p("AgJAiIAAhNIATAKIAABNQgJgDgKgHg");
	this.shape_553.setTransform(415.3,846);

	this.shape_554 = new cjs.Shape();
	this.shape_554.graphics.f("#8A8A8A").s().p("AgHAkIAAhNIAPAGIAABNIgPgGg");
	this.shape_554.setTransform(417.2,846.8);

	this.shape_555 = new cjs.Shape();
	this.shape_555.graphics.f("#8F8F8F").s().p("AgGAlIAAhNIANAEIAABNg");
	this.shape_555.setTransform(418.7,847.3);

	this.shape_556 = new cjs.Shape();
	this.shape_556.graphics.f("#949494").s().p("AgGAmIAAhNIANACIAABNg");
	this.shape_556.setTransform(420.2,847.6);

	this.shape_557 = new cjs.Shape();
	this.shape_557.graphics.f("#999999").s().p("AgGAmIAAhNIANACIAABNg");
	this.shape_557.setTransform(421.5,847.8);

	this.shape_558 = new cjs.Shape();
	this.shape_558.graphics.f("#9E9E9E").s().p("AgGAnIAAhNIANAAIAABNg");
	this.shape_558.setTransform(422.9,847.9);

	this.shape_559 = new cjs.Shape();
	this.shape_559.graphics.f("#A3A3A3").s().p("AgGAnIAAhNIANAAIAABNg");
	this.shape_559.setTransform(424.3,847.9);

	this.shape_560 = new cjs.Shape();
	this.shape_560.graphics.f("#A8A8A8").s().p("AgHglIAPgBIAABMIgPABg");
	this.shape_560.setTransform(425.8,847.9);

	this.shape_561 = new cjs.Shape();
	this.shape_561.graphics.f("#ADADAD").s().p("AgIglIARgCIAABNIgRACg");
	this.shape_561.setTransform(427.5,847.7);

	this.shape_562 = new cjs.Shape();
	this.shape_562.graphics.f("#B3B3B3").s().p("AgMgiQAPgEAKgDIAABNQgMAEgNACg");
	this.shape_562.setTransform(429.7,847.2);

	this.shape_563 = new cjs.Shape();
	this.shape_563.graphics.f("#B8B8B8").s().p("AgOgfQAOgFAPgJIAABNQgPAJgOAEg");
	this.shape_563.setTransform(432.5,846.3);

	this.shape_564 = new cjs.Shape();
	this.shape_564.graphics.f("#858585").s().p("AgxgDIgGgOQA0AaA7gEIgBANIgPAAQgvAAgqgVg");
	this.shape_564.setTransform(419.9,851.3);

	this.shape_565 = new cjs.Shape();
	this.shape_565.graphics.f("#8A8A8A").s().p("AgaAAQAbgCAbgIIgEAMQgYAIgbABg");
	this.shape_565.setTransform(428.2,851.9);

	this.shape_566 = new cjs.Shape();
	this.shape_566.graphics.f("#8F8F8F").s().p("AgMAAQAPgEAOgIIgHANQgKAHgQAFg");
	this.shape_566.setTransform(432.3,850.8);

	this.shape_567 = new cjs.Shape();
	this.shape_567.graphics.f("#D9D9D9").s().p("AB2CLQhEgPgYgEQhBgJhOAFQhOAGg5glQgygfgTg0QgTgwAUglQAVgoA4gBQAwgBA0AFIBOAIQBVAGBqgiQA1gRA0AbQAwAXAcAxQAdAxgGAuQgHA0gwAbQguAbgmADIgNABQgZAAgjgIg");
	this.shape_567.setTransform(583,795.8);

	this.shape_568 = new cjs.Shape();
	this.shape_568.graphics.f("#D9D9D9").s().p("AixAKQgJABgIgFQgHgCgBgHIAAgJQAAgGAIgEQAHgEAKAAIFWARIADABQAYALALAYg");
	this.shape_568.setTransform(555.8,785);

	this.shape_569 = new cjs.Shape();
	this.shape_569.graphics.f("#D9D9D9").s().p("AiYKQIu+oqQgUgLgGgWQgGgWAMgUQAHgNANgHISfqwIP1JKQAZAOAOAVQAOAUAAAWQAAAWgOAUQgNAUgZAPIwEJVQgyAbg3gBIgGAAQg0AAgwgag");
	this.shape_569.setTransform(428.9,787.9);

	this.shape_570 = new cjs.Shape();
	this.shape_570.graphics.f("#6E6E6E").s().p("AAlAbQgngcgOgEQgngIgcgdQgFgFAFgCIAGgKQAEgIADgBQASgCAkAVQAbARAUASQASAOARAXQAWAdgBARQgLgOgngcg");
	this.shape_570.setTransform(292,626.5);

	this.shape_571 = new cjs.Shape();
	this.shape_571.graphics.f("#4A4A4A").s().p("AgzEdQg7gIgNgbQgTiAgEh4QgJjrBBgqQAYgOAcABQAbAAAXAPIAXAQQAQAMAOAJQAKAGAMAMQALAMAFADQAdASAKAsQAIAfgCAxQgNBKgCBMQAAApAGA8QAHA6gBAHQgOAWg5AIQgdAFggAAQgeAAgigFg");
	this.shape_571.setTransform(287.6,650.6);

	this.shape_572 = new cjs.Shape();
	this.shape_572.graphics.f("#525252").s().p("AArEuQgEgFhAkfIh9kKICdg/IAzCAQA1CGAGAcQAIAqAaD/QABAhgtAOQgPAFgMAAQgYAAgNgSg");
	this.shape_572.setTransform(298.5,702.7);

	this.shape_573 = new cjs.Shape();
	this.shape_573.graphics.f("#201913").s().p("AhiAsQgMgHABgTQAAgRALgJQAJgKAbgEIA2gIIA8gPQAUgEAaABQASAAgIAVQgHATgSALQgVAOgTAGIg0AMQgkALgOACIgOABQgOAAgLgFg");
	this.shape_573.setTransform(313.6,731.1);

	this.shape_574 = new cjs.Shape();
	this.shape_574.graphics.f("#574431").s().p("AhmAlIgBgCQgIgMAEgPQADgNANgHQAKgGAYABQAeABATgEQAXgGAmgNQAZgJAWAAQANAAgGAVQgGAUgPAMQgTARgYAGIg5AJQgnAKgOABIgIABQgSAAgJgMg");
	this.shape_574.setTransform(313.6,731.6);

	this.shape_575 = new cjs.Shape();
	this.shape_575.graphics.f("#574431").s().p("AgqACQgCgJAAgJIBZAEIgBAOQgJAKgfAEIgNABQgYAAgJgPg");
	this.shape_575.setTransform(307.1,735.8);

	this.shape_576 = new cjs.Shape();
	this.shape_576.graphics.f("#FFFFFF").s().p("AA7AtQgGgDgGgKIgMgVQgKgPgzgPIgxgMIAJgTQAMgUAFAAQASgCAhAWQAYAPAXAUQARAOAKBIQgJgXgIgDg");
	this.shape_576.setTransform(291.2,625.2);

	this.shape_577 = new cjs.Shape();
	this.shape_577.graphics.f("#915B00").s().p("AhhAgQgOhAALgaQgHAGgBAJQAAgRANgKQACgLAIgJQAJgIALgEQgNAGgEAMQAHgHAKgEQA6gTA1AaIAPAEIAUAFQgFABgGgBIAFADIATAKIgOgEIAcAYQgLgEgKgHQAIAIAFALIAJAOQgIgEgGgJQAHASgJARIgMALQAFgJgFgKQgBAGgJAEIgJAFIgGAVIgIAXIgKACIgCgRQgBgSgDgFQgDgEgFgBQgFgBgEADIAAAAQgGAEAAATQAAAPgIATQgIASgJAFQgMAGgTADQgQAEgDADQgRgHgOhBg");
	this.shape_577.setTransform(293.1,605.9);

	this.shape_578 = new cjs.Shape();
	this.shape_578.graphics.f("#ECC7AB").s().p("AAEBxQgogMgTgUQgLgMgIgYQgIgXAAgVQABgyAOgeQAQgiAggEQAwgFAcAgQAZAdABAyQABAsgDAXQgEAogPAPQgIAHgQAAQgOAAgUgFg");
	this.shape_578.setTransform(293.5,608.4);

	this.shape_579 = new cjs.Shape();
	this.shape_579.graphics.f("#ECC7AB").s().p("AgMA4QgpgIAFgiIAGhHIBcAJIgHBYQgMASgaAAQgHAAgKgCg");
	this.shape_579.setTransform(290.9,619);

	this.shape_580 = new cjs.Shape();
	this.shape_580.graphics.f("#6E6E6E").s().p("AglANQg0hgAHgOQAFgNAuAGQAsAGAKAMQATAYAqCGQgOgGgYAJQgbALgEAVQgagugagwg");
	this.shape_580.setTransform(269.8,654.3);

	this.shape_581 = new cjs.Shape();
	this.shape_581.graphics.f("#FFFFFF").s().p("AgyghIBaAAIALAiQgOgEgVAHQgYAJgDAVg");
	this.shape_581.setTransform(273.9,662.4);

	this.shape_582 = new cjs.Shape();
	this.shape_582.graphics.f("#ECC7AB").s().p("AgggNIAmgVIAbAwIgmAVg");
	this.shape_582.setTransform(275.8,665);

	this.shape_583 = new cjs.Shape();
	this.shape_583.graphics.f("#D9D9D9").s().p("AgNAeIgjg8IBYAAIAJAcQgDANgWAMQgQAIgLAAQgGAAgEgBg");
	this.shape_583.setTransform(274.1,662.7);

	this.shape_584 = new cjs.Shape();
	this.shape_584.graphics.f("#404040").s().p("AgQAgQgPgegUgkIBdAAIAKAgQgDATgZAMQgPAGgKAAQgIAAgHgDg");
	this.shape_584.setTransform(273,661.8);

	this.shape_585 = new cjs.Shape();
	this.shape_585.graphics.f("#636363").s().p("AhOB7QgygEALgaQAPgiA2hKQA0hIAYgVQAPgMATgCQAUgCARAIQAXALgCAgQgCAegSAWIgpAzQguA5gaAZQgMAMghAAIgUgBg");
	this.shape_585.setTransform(273.5,634.4);

	this.shape_586 = new cjs.Shape();
	this.shape_586.graphics.f("#3D3D3D").s().p("AhSDwQgBgGALnhICbgRQhAHIgDATQgIAqgpAKQgKACgIAAQgZAAgGgZg");
	this.shape_586.setTransform(284.4,699.9);

	this.shape_587 = new cjs.Shape();
	this.shape_587.graphics.f("#201913").s().p("AhBBHQgRgEgDgRQgDgPAHgOQAGgLASgKQAegQALgIQAyglAQgGQAdgNAGAbQAHAWgPARQgGAIgQALIgfAXQgZAWgRAKQgWAMgQAAIgJgBg");
	this.shape_587.setTransform(284.9,720.7);

	this.shape_588 = new cjs.Shape();
	this.shape_588.graphics.f("#574431").s().p("AhCBJQgRgFgCgSQgCgPAIgOQAGgLASgKQAegQALgIQA0gnAMgGQAdgNAGAbQAGAXgOATQgGAHgPAKQgUANgKAJQg1AwgeAAIgJgBg");
	this.shape_588.setTransform(285,721.5);

	this.shape_589 = new cjs.Shape();
	this.shape_589.graphics.f("#574431").s().p("AgZASQgagHAHgdIBZAAIACAKQgjAbgaABQgGAAgFgCg");
	this.shape_589.setTransform(281.1,727.4);

	this.shape_590 = new cjs.Shape();
	this.shape_590.graphics.f("#D9D9D9").s().p("AgECqQh0gJhNg8QhNg7AGhKQADguAmglQAkgkA6gUQAiAbC0BpQC3BpAFAEQghA0hKAcQg8AWhFAAQgSAAgTgCg");
	this.shape_590.setTransform(299.8,727.6);

	this.shape_591 = new cjs.Shape();
	this.shape_591.graphics.f("#454545").s().p("AgHEzIhcp4ICmASIAhJFQgJAkgoAMQgMAEgLAAQgXAAgMgTg");
	this.shape_591.setTransform(824,450.2);

	this.shape_592 = new cjs.Shape();
	this.shape_592.graphics.f("#363636").s().p("AhsEAQADjZAFgjIApklICoAXIhZEtIgWDnQgBAWgxACIgGAAQgsAAgGgig");
	this.shape_592.setTransform(812.8,446.7);

	this.shape_593 = new cjs.Shape();
	this.shape_593.graphics.f("#3A2D1D").s().p("Ag4BJQgXgBgIgOQgPgWBqhFQAWgPAbgUQASgKALAQQANAUgHAQQgHASggAUQgIAFgXAVQgTATgPAHQgSAJgSAAIgEAAg");
	this.shape_593.setTransform(825.3,482.5);

	this.shape_594 = new cjs.Shape();
	this.shape_594.graphics.f("#19130F").s().p("Ag3BKQgYgDgJgOQgOgWBphFQAXgPAbgUQASgKAKAQQAOAUgHARQgHASggAUQgIAFgWAXQgTAUgOAHQgPAHgRAAIgJAAg");
	this.shape_594.setTransform(825.4,483);

	this.shape_595 = new cjs.Shape();
	this.shape_595.graphics.f("#19130F").s().p("AgWANIAtgrIgCAXQgFAMglAag");
	this.shape_595.setTransform(832.2,482.4);

	this.shape_596 = new cjs.Shape();
	this.shape_596.graphics.f("#000000").s().p("AgcAMIA5geQgFANglAYg");
	this.shape_596.setTransform(831.4,483.6);

	this.shape_597 = new cjs.Shape();
	this.shape_597.graphics.f("#3A2D1D").s().p("AhFAsQgUgBgPgNQgPgNAOgIQAUgLAZgHIA+gQQASgFAagKQAUgGAMADQAnALgFAYQgDAPgXAIIg2AMQgmALgPADQgRAEgRAAIgOgBg");
	this.shape_597.setTransform(801.6,474.7);

	this.shape_598 = new cjs.Shape();
	this.shape_598.graphics.f("#19130F").s().p("AhFAsQgUgBgOgNQgQgNAOgIQASgKAegEQAsgHAUgGQAPgEAbgOQATgKAKADQAnAKgFAZQgDAPgWAIIg3AMQgmALgPADQgSAEgQAAIgOgBg");
	this.shape_598.setTransform(801.6,475.2);

	this.shape_599 = new cjs.Shape();
	this.shape_599.graphics.f("#19130F").s().p("AgkAHIBJgdQABAVgEAEQgLANgzAHg");
	this.shape_599.setTransform(809.2,476.3);

	this.shape_600 = new cjs.Shape();
	this.shape_600.graphics.f("#D9D9D9").s().p("AhyBDQgxgcAAgnQAAgmAwgcQAvgcBEAAQBEAAAvAcQAwAcABAmQAAAngwAcQgwAchDAAQhDAAgwgcg");
	this.shape_600.setTransform(804.8,477.1);

	this.shape_601 = new cjs.Shape();
	this.shape_601.graphics.f("#D9D9D9").s().p("AhyBDQgwgcgBgnQAAgmAwgcQAwgcBDAAQBDAAAwAcQAxAcAAAmQAAAngwAcQgvAchEAAQhDAAgwgcg");
	this.shape_601.setTransform(825.7,485);

	this.shape_602 = new cjs.Shape();
	this.shape_602.graphics.f("#525252").s().p("AguFBQglgIgBgoIAOpFICbgOIhUJvQgHAWgZAAIgPgCg");
	this.shape_602.setTransform(62.1,498.4);

	this.shape_603 = new cjs.Shape();
	this.shape_603.graphics.f("#201913").s().p("AAEBCQgZgMgPgXQgMgTgFgeQgGgjAPgHQAVgKAMACQAQAEAOAdIAUApIAMAcQAGARgCAIQgPAKgQAAQgKAAgKgDg");
	this.shape_603.setTransform(59.4,529.6);

	this.shape_604 = new cjs.Shape();
	this.shape_604.graphics.f("#574431").s().p("AgVAyQgYgYgIgiQgHgdALgOQAFgHAQgGQATgIAGADQAIAEANAeQANASAMAVQAKASAEAUQAAAQgGAGQgFAFgRACIgGAAQgXAAgVgVg");
	this.shape_604.setTransform(59.2,530.5);

	this.shape_605 = new cjs.Shape();
	this.shape_605.graphics.f("#3D3D3D").s().p("AA6EkQgxgEgCgbIgTjmIhhk1ICagNIAeCGQAeCMACAYQADA3AADMQgCAagnAAIgLAAg");
	this.shape_605.setTransform(74.4,495.3);

	this.shape_606 = new cjs.Shape();
	this.shape_606.graphics.f("#201913").s().p("AAaA2QgPgFgVgMIghgTQghgOgJgNQgJgOAJgVQAHgRASAHQAMAEAnAUQBsAugJAXQgEALgVAFQgJACgJAAQgKAAgLgDg");
	this.shape_606.setTransform(84.1,524);

	this.shape_607 = new cjs.Shape();
	this.shape_607.graphics.f("#574431").s().p("AAJAkQgigPgIgLQgKgLAKgWQAHgRARAEQAGABAqASQgUAXgHAgg");
	this.shape_607.setTransform(78.6,523.7);

	this.shape_608 = new cjs.Shape();
	this.shape_608.graphics.f("#574431").s().p("AAWA1QgOgEgUgOQgWgPgIgDQgjgPgIgLQgKgMAKgWQAHgRASAEQAFABAvAVQBnAsgEAZQgCAPgXAFQgKADgJAAQgNAAgMgFg");
	this.shape_608.setTransform(83.9,524.7);

	this.shape_609 = new cjs.Shape();
	this.shape_609.graphics.f("#D9D9D9").s().p("Ai5BrQhNgsABg/QAAg+BNgtQBNgsBsAAQBsAABNAsQBNAtgBA+QAAA/hNAsQhNAthsAAQhtAAhMgtg");
	this.shape_609.setTransform(75.4,528.6);

	this.shape_610 = new cjs.Shape();
	this.shape_610.graphics.f("#2D2319").s().p("AgBAhQgigPgJgLQgJgLAJgWQAHgQAdAPIA6AgQgJAKgPAIIgZAMg");
	this.shape_610.setTransform(79.7,524);

	this.shape_611 = new cjs.Shape();
	this.shape_611.graphics.f("#D15632").s().p("AgQB5Qg0gPgbgwQgagwAPgzQAFgRAHgNQASgeAegSQANgHAQABQARABASALQAmAWAcAuQAcAuAAAtQABAugcAQIgTAJQgGADgHABQgRAFgQAAQgSAAgSgFg");
	this.shape_611.setTransform(33.6,134.7);

	this.shape_612 = new cjs.Shape();
	this.shape_612.graphics.f("#303030").s().p("AkjCyQgbgRgdAIIAAgBIJiliQAMgHARABQARABATALQAKAGAKAIIAAABIpqFmQgIgHgNgIg");
	this.shape_612.setTransform(64.6,105.5);

	this.shape_613 = new cjs.Shape();
	this.shape_613.graphics.f("#496969").s().p("AjmDsQAAgtgcgvQgbgugngWQgmgVgaAPIJqlnQAMgHARABQARABATALQAmAVAcAvQAcAvAAAtQABAtgcAQIppFmQAZgQAAgsg");
	this.shape_613.setTransform(67.9,115.8);

	this.shape_614 = new cjs.Shape();
	this.shape_614.graphics.f("#D15632").s().p("AgfBTQgCgfgQgcQgQgagbgRQgUgNgVAKIClhgQAKgFALABQALABAJAGQAbARAPAbQARAcACAfQAAAdgSAKIikBgQARgLAAgdg");
	this.shape_614.setTransform(106.5,93.2);

	this.shape_615 = new cjs.Shape();
	this.shape_615.graphics.f("#8A8A8A").s().p("AjkEtQhvgahVgyQhRgugrg7Qgrg6AAg+QAAg+Aqg6QArg6BPguQBVgyBugaQBugaB5AAQB4AABvAaQBuAaBVAyQBRAuArA7QArA6AAA+QAAA+gqA6QgqA7hQAtQhUAyhvAaQhtAah6AAQh4AAhugagAlGi7QiGBOABBtQAABvCHBOQCIBOC+AAQC/AACGhOIAAAAQCGhOAAhvQgBhtiHhOQiIhPi9AAQi/AAiHBPg");
	this.shape_615.setTransform(156.6,57.6);

	this.shape_616 = new cjs.Shape();
	this.shape_616.graphics.f("#496969").s().p("AmgCMQhWgxguhBQgrg9AAhEIAAiJQABBCAqA8QAuBBBWAxQCuBkD0AAQD1AACthkQBVgwAshAQAqg8ABhAIAACIQAABDgrA8QgtBAhUAxQitBlj1AAQj0AAiuhlg");
	this.shape_616.setTransform(156.6,80.4);

	this.shape_617 = new cjs.Shape();
	this.shape_617.graphics.f("#4CBAAA").s().p("AlbBjQABgNADgMQAGgTALgRQASgaARgMQAYgVAagPQAegSAfgMQAigOAjgIQAmgJAjgFQApgEAhAAIAlAAIAkACQBBAFA9ATQAWAGAaALQARAHATAJIAdASIgfgOQgSgIgSgGIgxgOQgVgFglgHQgdgEglgCQgRgCgSAAIgkAAQgjABgmAFQhHAIhFAZQgeALgeAQQgYAMgZASQgSAPgRAUQgMAQgIASQgEAKgCAOIgBAKg");
	this.shape_617.setTransform(151.2,51);

	this.instance_28 = new lib.ClipGroup_2();
	this.instance_28.parent = this;
	this.instance_28.setTransform(161.3,66.5,1,1,0,0,0,50.8,31.4);

	this.shape_618 = new cjs.Shape();
	this.shape_618.graphics.f("#AEDFE7").s().p("AlEC9QiHhPgBhuQAAhtCGhPQCHhOC/AAQC9AACIBOQCHBPABBtQAABuiGBPQiHBOi/AAQi+AAiHhOg");
	this.shape_618.setTransform(156.6,61.8);

	this.shape_619 = new cjs.Shape();
	this.shape_619.graphics.f("#496969").s().p("AGrB4QgjgyhDgmQiIhOi9AAQi/AAiHBOQhBAmgjAxQghAvgBAyIAAipQABgzAhgwQAjgxBBgmQCHhPC/AAQC+AACHBPQBDAnAjAyQAiAwAAA0IAACpQgBg0ghgvg");
	this.shape_619.setTransform(156.6,52.7);

	this.shape_620 = new cjs.Shape();
	this.shape_620.graphics.f("#D9D9D9").s().p("AjsE2QhygbhYgzQhTgvgsg9Qgsg9gBhAQAAg/Arg8QAsg8BSgvQBXg0BygbQBxgbB9AAQB8AAByAbQByAbBYA0QBUAvAsA9QAtA8AABAQAABAgsA8QgsA8hSAvQhXAzhyAbQhxAbh9AAQh8AAhygbg");
	this.shape_620.setTransform(156.1,76.2);

	this.shape_621 = new cjs.Shape();
	this.shape_621.graphics.f("#D9D9D9").s().p("AjkA8IFKi/IB+BIIlKC/g");
	this.shape_621.setTransform(110.9,100);

	this.shape_622 = new cjs.Shape();
	this.shape_622.graphics.f("#D9D9D9").s().p("AnyClIMNnGIDZB9IsOHGg");
	this.shape_622.setTransform(66.4,125.5);

	this.shape_623 = new cjs.Shape();
	this.shape_623.graphics.f("#424242").s().p("Ag5BLQgKgGAJgUQAOgbAHgQQAQgoAJgkIAjgIQAkgBAEArQABAJgJAIQgMAMgGASIgFAaQgCANgGAGQgQAQgaAFQgKACgIAAQgNAAgIgEg");
	this.shape_623.setTransform(552.9,345.2);

	this.shape_624 = new cjs.Shape();
	this.shape_624.graphics.f("#DEDEDE").s().p("Ag8BEQgFgKAIgPQANgUAGgQQAPgiALgqIAjgIQAkgBAEArQABAJgJAIQgMAMgGASQgCAFgDAVQgDANgGAGQgRATgfACIgHAAQgXAAgFgKg");
	this.shape_624.setTransform(553,346);

	this.shape_625 = new cjs.Shape();
	this.shape_625.graphics.f("#DEDEDE").s().p("AgMggQALAEAGAJQAHAKABAKQAAAHgHAJIgOAQg");
	this.shape_625.setTransform(558.1,343.6);

	this.shape_626 = new cjs.Shape();
	this.shape_626.graphics.f("#636363").s().p("AgoASQACgYgBgVIAmgJQAlgBAEAqQABAIgIAIIgOAQg");
	this.shape_626.setTransform(555.4,343.2);

	this.shape_627 = new cjs.Shape();
	this.shape_627.graphics.f("#424242").s().p("AhCBJQgXgGgHgMQgEgJASgMIAsgaQAOgIAPgNQAPgQAFgLQAQgjAcABQAZAAAMAYQALAWgJAQQgJARgkASQgJAEgZAUQgWATgQAGQgKADgMAAQgKAAgLgCg");
	this.shape_627.setTransform(534,339.9);

	this.shape_628 = new cjs.Shape();
	this.shape_628.graphics.f("#DEDEDE").s().p("AhEBDQgbgGgBgNQgBgKASgLIAogYQAIgEAQgQQAOgOAJgFQAYgMAegSQAUgJAJASQALAWgJARQgJASgjARQgKAEgWAUQgUARgPAHQgNAFgOAAQgLAAgMgDg");
	this.shape_628.setTransform(534.1,341);

	this.shape_629 = new cjs.Shape();
	this.shape_629.graphics.f("#DEDEDE").s().p("AgaALIAzgnQACAMgBALQgHAMgoAWg");
	this.shape_629.setTransform(541.2,341);

	this.shape_630 = new cjs.Shape();
	this.shape_630.graphics.f("#636363").s().p("AgHAAIAFgFIAKACIgEAJg");
	this.shape_630.setTransform(538.6,343.3);

	this.shape_631 = new cjs.Shape();
	this.shape_631.graphics.f("#000000").s().p("AgjgHIBHAIQgHAFgbACIgYAAg");
	this.shape_631.setTransform(537.7,342);

	this.shape_632 = new cjs.Shape();
	this.shape_632.graphics.f("#E6E6E6").s().p("AirCXQhagfgOhCQgNhBBIg/QBHg/BygWQBygWBaAfQBaAfANBDQANBBhHA+QhIA+hyAXQgvAJgsAAQg8AAg0gSg");
	this.shape_632.setTransform(542.7,345);

	this.instance_29 = new lib.ClipGroup_18();
	this.instance_29.parent = this;
	this.instance_29.setTransform(266.4,95.7,1,1,0,0,0,54.9,90);

	this.shape_633 = new cjs.Shape();
	this.shape_633.graphics.f("#1D5C3E").s().p("AgGC8QiHgBhdg4Qhdg4ADhNQAChOBig2QBhg3CGACQCHABBdA4QBdA4gDBNQgDBOhhA3QhfA0iCAAIgGAAg");
	this.shape_633.setTransform(269,98.6);

	this.shape_634 = new cjs.Shape();
	this.shape_634.graphics.f("#64A388").s().p("AgHDSQiWgBhog/Qhog/ADhWQADhXBtg8QBsg9CWACQCWABBoA/QBoA+gDBXQgDBXhsA8QhrA7iRAAIgHAAg");
	this.shape_634.setTransform(269,98.6);

	this.shape_635 = new cjs.Shape();
	this.shape_635.graphics.f("#2A7F57").s().p("Ag0GqQhogBhJgrIhSqpQBpA+CWACQCVACBtg9QAxgcAcgiQAbghAGgkIhsLNQgEAagTAYQgUAYgiATQhJAphlAAIgFAAg");
	this.shape_635.setTransform(273.9,143.2);

	this.shape_636 = new cjs.Shape();
	this.shape_636.graphics.f("#359E6B").s().p("AAVE7IhvrNQANBIBWA0IBSKpQg+glgIgzg");
	this.shape_636.setTransform(241.9,141.1);

	this.shape_637 = new cjs.Shape();
	this.shape_637.graphics.f("#DCDCDC").s().p("AjLB3QhVgygBhFQAAhEBUgyQBVgxB4AAQB3AABVAxQBVAyABBEQAABFhUAyQhVAxh4AAQh3AAhVgxg");
	this.shape_637.setTransform(269,176.7);

	this.shape_638 = new cjs.Shape();
	this.shape_638.graphics.f("#BFBFBF").s().p("Ag3AcQAKgKAIgIIARgLIARgKIAcgPIAjgLIACgBQAHAMgKAAQggABgZAXQgHADgHABIgBAFIgJAFIAAAIIgqATg");
	this.shape_638.setTransform(121.6,653.8);

	this.shape_639 = new cjs.Shape();
	this.shape_639.graphics.f("#1A1A1A").s().p("AAxByQgRgEgQgIQgRgHgNgIQgVgNgSgRIgQgSQgHgJAAgLIAAhPQAAgSAPgRQAPgRAUgGQARAVAWANQAgASAgAHQgWAjgBAnIAABPQAAAWAJACIAAABg");
	this.shape_639.setTransform(122.2,677.8);

	this.shape_640 = new cjs.Shape();
	this.shape_640.graphics.f("#1A1A1A").s().p("AgHBGQgRgJgNgPIAAiGQALANATALQASAMAbAHIAACHQgbgIgSgMg");
	this.shape_640.setTransform(128.3,695);

	this.shape_641 = new cjs.Shape();
	this.shape_641.graphics.f("#1A1A1A").s().p("AgPAXQgUgNgNgPQAVgNADgaQAMAPAPAKQAVANAZAFQAAAYgKAVQgdgGgZgPg");
	this.shape_641.setTransform(127.1,704.1);

	this.shape_642 = new cjs.Shape();
	this.shape_642.graphics.f("#1A1A1A").s().p("AgRAiQgXgNgQgUIAAgWQACgZAXgNQAPATARAKQAcAPAcAGQgLAUgBAZIAAAYIAAAAQghgIgdgSg");
	this.shape_642.setTransform(125.4,709.5);

	this.shape_643 = new cjs.Shape();
	this.shape_643.graphics.f("#1A1A1A").s().p("Ag7AZQgFgKATgHIAsgQIAngYQARgKAFAKQAGAMgOARQgNAQgZAMQgYANgWAAQgVAAgGgNg");
	this.shape_643.setTransform(152.2,672.6);

	this.instance_30 = new lib.ClipGroup_1();
	this.instance_30.parent = this;
	this.instance_30.setTransform(135.3,662.2,1,1,0,0,0,39.6,12.6);

	this.shape_644 = new cjs.Shape();
	this.shape_644.graphics.f("#8E6A3D").s().p("AgDCgQhqgBhKgsQgjgVgTgcQgSgaAAgdIABgTIAEgPQADgKAEgJQAGgMAFgIIANgRIATgRIARgNIAugYIAigMQAigKAmgDIAjgBIAjACQAHAAAdAFIAiAIQARAFAOAHQAQAHAOAIIAbARIAKAJIAMAMQARATALAYIAHAZIACAKIAAAOQAAAdgTAbQgUAcgmAWQhLAphnAAIgEAAgAiLh1IAAABQg8AhgBAxQgBAvA6AjQA6AiBUABQBSABA8ghQA7giABgvQABgwg6gjQg6gjhTgBIgEAAQhQAAg6Agg");
	this.shape_644.setTransform(137.9,664.5);

	this.shape_645 = new cjs.Shape();
	this.shape_645.graphics.f("#755832").s().p("AgDByQhqgBhKgtQhJgtABg6IAAhOQAAAcASAaQATAbAjAWQBKArBqABQBqABBMgqQAmgVAUgcQATgbAAgcIAABOQAAAdgTAaQgUAcgmAWQhLAqhnAAIgEAAg");
	this.shape_645.setTransform(137.9,677.2);

	this.shape_646 = new cjs.Shape();
	this.shape_646.graphics.f("#A77D47").s().p("AgCB1QhTgBg6gjQg6gjABgvQABgwA8giQA7ghBTAAQBTABA6AjQA6AjgBAvQgBAwg7AiQg8AhhRAAIgCAAg");
	this.shape_646.setTransform(138,661.2);

	this.shape_647 = new cjs.Shape();
	this.shape_647.graphics.f("#644B2B").s().p("Ag6BPIgPgDQgQgDgSgGQgRgEgQgIQgQgGgPgJQgTgMgPgNIgOgOQgHgHgHgKQgKgPgGgTIgEgPIgCgTQABAaARAZQATAbAjAUQAaAQAbAJQgOgRgBgVQABAGACAEIAJAKQAIAHAIAFIASAKQASAHAPAEQBCAKBCgKIAGgCQAUgFATgKQAPgHALgNQAHgHACgJQgBAWgPAPQAagIAXgNQAmgUAUgcQASgaABgcIAAAIIgDATIgFAPIgEAKQgGAMgFAIIgNAPIgJAJQgIAIgHAGIgMAIIgRAKQgQAJgNAFQgQAHgSAFQgPAEgVAEIgKACQgdAHgdAAQgdAAgdgHg");
	this.shape_647.setTransform(137.9,682.6);

	this.shape_648 = new cjs.Shape();
	this.shape_648.graphics.f("#755832").s().p("AgBBuQg8gBgrgZQgpgZAAgiIAAiGQABAjAoAXQArAaA8AAQA8ABArgYQArgYABgjIAACFQAAAkgsAYQgrAYg7AAIgBAAg");
	this.shape_648.setTransform(137.9,693.7);

	this.shape_649 = new cjs.Shape();
	this.shape_649.graphics.f("#574127").s().p("AgBBFQhTgBg6gjQg4ggAAgvIAAgWQABAuA3AgQA6AjBTABQBQAAA8ghQA7ggAAgvIAAAVQABAXgPAVQgQAVgdAQQg7AhhQAAIgBAAg");
	this.shape_649.setTransform(137.9,709.5);

	this.shape_650 = new cjs.Shape();
	this.shape_650.graphics.f("#8E6A3D").s().p("AgBBkQhIAAgxgeQgygeAAgoQAAgpA1geQAzgdBHABQBHABAxAeQAyAdAAAoQAAAqg1AdQgyAchGAAIgBAAg");
	this.shape_650.setTransform(137.8,699.4);

	this.shape_651 = new cjs.Shape();
	this.shape_651.graphics.f("#755832").s().p("AgCB8QhSgBg6giQg3giAAgvIABgNIADgOQAEgOAKgPQAVgdAegQIAAAAIAAAAIAKgFQAOgIAYgHIAbgGQAPgDAOgBIAXABQhEAAgxAcQg1AdAAAqQAAAoAxAdQAyAeBHABQBHAAAzgcQA0gdAAgqQAAgogxgeQgtgbg/gDIAOAAIAOACQAaADAaAKQALADANAHQAKAEANAJIAOALQAKAIAHAJQAGAHAEAIIAIAPIAFAUQACAIgBAHQAAAXgPAVQgPAWgeARQg5AghPAAIgEAAg");
	this.shape_651.setTransform(137.8,701.7);

	this.shape_652 = new cjs.Shape();
	this.shape_652.graphics.f("#E6E6E6").s().p("AgCCCQhdgBhCgnQhAgmABg1QABg2BDgmQBCglBdABQBdABBBAmQBCAngCA1QgBA2hDAmQhBAkhaAAIgEAAg");
	this.shape_652.setTransform(138,706.2);

	this.instance_31 = new lib.ClipGroup_0();
	this.instance_31.parent = this;
	this.instance_31.setTransform(141.2,707,1,1,0,0,0,81.2,34);

	this.shape_653 = new cjs.Shape();
	this.shape_653.graphics.f("#A77D47").s().p("AkUFKIklipQgJgFAAgJQAAgIAJgGIMdnOQAYgMAYAMIElCpQAKAFAAAJQAAAIgKAGIsdHOQgMAGgMAAQgMAAgMgGg");
	this.shape_653.setTransform(137.2,706.5);

	this.shape_654 = new cjs.Shape();
	this.shape_654.graphics.f("#684E2D").s().p("Ak2EqIkkipQgYgOgBgUIAAhxQABASAYAOIEkCpQAcAOAfAAQAfAAAbgOIMenPQAWgNABgSIAABwQAAAUgYAOIseHPQgbAOgeAAQggAAgbgOg");
	this.shape_654.setTransform(137.1,728.7);

	this.shape_655 = new cjs.Shape();
	this.shape_655.graphics.f("#8E6A3D").s().p("Ak2FZIklipQgYgOAAgUQAAgUAYgOIAUgMIAFgLQgBAEACAEIMDm/QAHgBAFgDIsNHGIAHAFIElCpQAYANAXgNIMdnOIAHgGIkXihQAGAEAIABIELCaQACgDgBgGIACAHIADAFIATALQAYAOABAUQAAAVgYANIsdHPQgcAOgfAAQgfAAgbgOg");
	this.shape_655.setTransform(137.2,712.5);

	this.shape_656 = new cjs.Shape();
	this.shape_656.graphics.f("#6E6E6E").s().p("AAjAZQglgbgOgDQgmgIgbgcQgEgEAEgDIAGgJQAEgIADgBQARgCAjAVQAbAQATARQASAOAQAWQAVAdgBAQQgKgOgngcg");
	this.shape_656.setTransform(69.7,632.2);

	this.shape_657 = new cjs.Shape();
	this.shape_657.graphics.f("#4A4A4A").s().p("AhAEPQgdgLgQgSQgJgKgJgTQgTh4gEhuQgJjcA/gpQAXgNAbAAQAbABAWAOIAXAQQAPALAOAJQAJAFALAMQALAMAFADQAcASALAqQAHAegCAwIAJCXQAJCdgBAdQgOAWhGACIgRABQg+AAg1gVg");
	this.shape_657.setTransform(66.3,656.7);

	this.shape_658 = new cjs.Shape();
	this.shape_658.graphics.f("#525252").s().p("AApElQgEgFg9kWIh6kDICYg8IAyB8QAzCBAFAcQAJApAaD4QABAggsANQgPAEgMAAQgXAAgNgRg");
	this.shape_658.setTransform(76,706.1);

	this.shape_659 = new cjs.Shape();
	this.shape_659.graphics.f("#201913").s().p("AhfAqQgMgGABgTQABgQAKgJQAJgJAagEIA0gIIA7gPQATgEAZABQARABgHAUQgHASgSALQgUAOgTAFIgyAMQgjAKgNADIgOABQgNAAgLgGg");
	this.shape_659.setTransform(90.6,733.7);

	this.shape_660 = new cjs.Shape();
	this.shape_660.graphics.f("#574431").s().p("AhjAlIgBgCQgHgNADgNQAEgNAMgIQAJgFAYABQAdABATgEQAVgFAmgOQAXgIAWAAQANAAgGAUQgGAUgOALQgTAQgXAGIg3AKQgmAJgOABIgHAAQgRAAgKgKg");
	this.shape_660.setTransform(90.6,734.2);

	this.shape_661 = new cjs.Shape();
	this.shape_661.graphics.f("#574431").s().p("AgpACQgCgIAAgJIBXAEIgCAOQgKAJgdAEIgLAAQgYAAgJgOg");
	this.shape_661.setTransform(84.3,738.2);

	this.shape_662 = new cjs.Shape();
	this.shape_662.graphics.f("#FFFFFF").s().p("AA6AsQgHgDgGgKIgLgUQgLgOgxgPIgvgMIAJgTQALgSAGgBQAQgCAhAVQAXAPAWAUQAQANALBGQgKgWgGgDg");
	this.shape_662.setTransform(68.8,630.9);

	this.shape_663 = new cjs.Shape();
	this.shape_663.graphics.f("#525252").s().p("AhkAhQgOhCAKgbQgGAGgBAJQgBgQAOgLQADgMAIgJQAIgJAMgDQgNAFgFANQAJgIAJgDQA7gUA3AbQAFAAAGACIAaAHIgLAAIAEADIAUAKIgOgDIAcAYQgMgFgJgHQAHAJAGALIAJAQQgHgFgHgJQAHASgIASIgNALQAEgJgEgLQgCAGgIAFIgKAFIgGAWIgJAYIgKACIgBgSQgBgTgEgEQgCgEgGgBQgFgBgEADQgHAEAAAUQABAPgJATQgHASgKAGQgNAGgTAEQgQADgEADQgRgIgPhCg");
	this.shape_663.setTransform(70.7,612.3);

	this.shape_664 = new cjs.Shape();
	this.shape_664.graphics.f("#ECC7AB").s().p("AAFB1QgqgMgUgVQgLgNgIgYQgIgYAAgWQAAgzAPgfQAQgjAigEQAxgGAdAhQAZAeABA0QABAugCAXQgEApgQAPQgJAIgQAAQgOAAgUgFg");
	this.shape_664.setTransform(71.1,614.8);

	this.shape_665 = new cjs.Shape();
	this.shape_665.graphics.f("#ECC7AB").s().p("AgMA6QgqgJAEgjIAHhJIBeAKIgGBaQgNATgaAAQgHAAgLgCg");
	this.shape_665.setTransform(68.5,625.8);

	this.shape_666 = new cjs.Shape();
	this.shape_666.graphics.f("#6E6E6E").s().p("AgkAMQgyhdAGgOQAFgLAtAFQArAGAJALQASAYAqCBQgOgFgXAJQgbAKgEAUQgZgsgZgvg");
	this.shape_666.setTransform(48.2,659.2);

	this.shape_667 = new cjs.Shape();
	this.shape_667.graphics.f("#FFFFFF").s().p("AgxggIBXABIALAgQgMgEgWAHQgXAKgEATg");
	this.shape_667.setTransform(52.1,666.9);

	this.shape_668 = new cjs.Shape();
	this.shape_668.graphics.f("#ECC7AB").s().p("AgfgNIAlgUIAaAvIglAUg");
	this.shape_668.setTransform(54,669.6);

	this.shape_669 = new cjs.Shape();
	this.shape_669.graphics.f("#C9C9C9").s().p("AgNAdIgig6IBWAAIAJAbQgDANgVALQgQAIgLAAQgFAAgFgBg");
	this.shape_669.setTransform(52.2,667.3);

	this.shape_670 = new cjs.Shape();
	this.shape_670.graphics.f("#404040").s().p("AgPAfQgOgcgVgkIBbgBIAKAgQgEASgYAMQgOAHgKAAQgIAAgGgEg");
	this.shape_670.setTransform(51.2,666.5);

	this.shape_671 = new cjs.Shape();
	this.shape_671.graphics.f("#636363").s().p("AhMB3QgxgDALgaQAPghA0hHQAzhGAXgVQAOgLATgCQATgCARAIQAWAKgCAfQgBAegSAUIgoAyQgtA3gYAYQgNAMghAAIgSgBg");
	this.shape_671.setTransform(51.7,639.9);

	this.shape_672 = new cjs.Shape();
	this.shape_672.graphics.f("#424242").s().p("AhQDoQgBgFALnTICXgQIhCHNQgHApgoAJQgKACgHAAQgaAAgFgZg");
	this.shape_672.setTransform(62.3,703.4);

	this.shape_673 = new cjs.Shape();
	this.shape_673.graphics.f("#201913").s().p("Ag/BFQgRgFgDgQQgDgOAHgOQAGgLASgJQAdgPAKgIQAxgkAPgGQAcgNAGAbQAHAUgPARQgGAJgPAKIgeAWQgYAVgRAKQgVAMgPAAIgJgBg");
	this.shape_673.setTransform(62.8,723.6);

	this.shape_674 = new cjs.Shape();
	this.shape_674.graphics.f("#574431").s().p("AhABHQgRgEgCgSQgCgPAHgOQAGgLASgJQAdgQAKgIQA0glALgGQAcgNAGAaQAGAWgNATQgGAIgQAJQgTANgJAIQgzAvgeAAIgIgBg");
	this.shape_674.setTransform(62.9,724.3);

	this.shape_675 = new cjs.Shape();
	this.shape_675.graphics.f("#574431").s().p("AgZARQgYgGAGgdIBXABQABAFAAAFQghAagYAAQgHAAgGgCg");
	this.shape_675.setTransform(59.1,730);

	this.shape_676 = new cjs.Shape();
	this.shape_676.graphics.f("#D9D9D9").s().p("Aj4GMQgdAAgbgOIkginQgdgPgKgfQgKgfAPgdQAMgWAWgMIMRnHQAagPAeAAQAeAAAaAPIEgCmQAdAPAKAgQAKAfgQAdQgLAVgWAMIsRHIQgZAOgbAAIgEAAg");
	this.shape_676.setTransform(137.2,724.2);

	this.shape_677 = new cjs.Shape();
	this.shape_677.graphics.f("#D9D9D9").s().p("AgNCvQhxgJhLg5QhMg6AGhIQAGhIBUgtQBTgtBwAJQBxAJBLA6QBMA5gGBIQgGBIhUAtQhFAmhaAAIgkgCg");
	this.shape_677.setTransform(80.5,727.7);

	this.shape_678 = new cjs.Shape();
	this.shape_678.graphics.f("#CCCCCC").s().p("AjJAAIDJh0IDKB0IjKB0gAiBAAICBBLICChLIiChKg");
	this.shape_678.setTransform(244.8,503.8);

	this.shape_679 = new cjs.Shape();
	this.shape_679.graphics.f("#CCCCCC").s().p("AjIAAIDIh0IDJB0IjJB1gAiBAAICBBLICChLIiChKg");
	this.shape_679.setTransform(291.3,476.8);

	this.shape_680 = new cjs.Shape();
	this.shape_680.graphics.f("#CCCCCC").s().p("AjJAAIDJhzIDKBzIjKB1gAiBAAICBBLICChLIiChKg");
	this.shape_680.setTransform(337.9,449.8);

	this.shape_681 = new cjs.Shape();
	this.shape_681.graphics.f("#CCCCCC").s().p("AjIABIDIh1IDJB0IjIB1gAiAAAICBBLICBhLIiChKg");
	this.shape_681.setTransform(384.3,422.7);

	this.shape_682 = new cjs.Shape();
	this.shape_682.graphics.f("#CCCCCC").s().p("AjJAAIDJh0IDJB0IjIB1gAiBAAICCBLICBhLIiChKg");
	this.shape_682.setTransform(430.9,395.7);

	this.shape_683 = new cjs.Shape();
	this.shape_683.graphics.f("#BFBFBF").s().p("ALFHHI3YtfQgQgKAAgNQAAgNAQgKQATgJAVAAQAVAAASAJIXXNfQARAKAAANQAAANgRAKQgSAJgVAAQgVAAgSgJg");
	this.shape_683.setTransform(534.6,455.6);

	this.shape_684 = new cjs.Shape();
	this.shape_684.graphics.f("#BFBFBF").s().p("ALEHHI3WtfQgRgJAAgOQAAgNARgKQAngUAoAUIXWNfQARAKAAANQAAANgRAKQgSAKgVAAQgVAAgTgKg");
	this.shape_684.setTransform(488,482.6);

	this.shape_685 = new cjs.Shape();
	this.shape_685.graphics.f("#BFBFBF").s().p("ALFHHI3XtfQgRgKAAgNQAAgNARgKQATgJAUAAQAVAAASAJIXYNfQAQAJAAAOQAAANgQAKQgTAJgVAAQgVAAgSgJg");
	this.shape_685.setTransform(441.5,509.6);

	this.shape_686 = new cjs.Shape();
	this.shape_686.graphics.f("#BFBFBF").s().p("ALEHHI3XtfQgQgKAAgNQAAgNAQgKQAUgJAUAAQAVAAASAJIXXNfQARAKAAANQAAANgRAKQgSAJgVAAQgUAAgUgJg");
	this.shape_686.setTransform(348.5,563.7);

	this.shape_687 = new cjs.Shape();
	this.shape_687.graphics.f("#BFBFBF").s().p("ALEHHI3WtfQgRgKAAgNQAAgNARgKQAngUAoAUIXXNfQAQAJAAAOQAAANgQAKQgUAKgUAAQgUAAgUgKg");
	this.shape_687.setTransform(395,536.7);

	this.shape_688 = new cjs.Shape();
	this.shape_688.graphics.f("#525252").s().p("AnEjJQgBgBAAAAQgBAAAAgBQAAAAAAgBQAAAAAAgBQAEgpApg1INgHzQgqA1gEAqQAAABAAABQAAAAAAABQAAAAAAABQABAAAAABg");
	this.shape_688.setTransform(612.4,392.8);

	this.shape_689 = new cjs.Shape();
	this.shape_689.graphics.f("#EDEDED").s().p("AnQjZQAkggAbgfINiHyQggAjgeAcg");
	this.shape_689.setTransform(650.3,355.3);

	this.shape_690 = new cjs.Shape();
	this.shape_690.graphics.f("#9E8929").s().p("Aj1EGQAFgwA1g+QAngtBMhBIBXhJQBphXAngnQA3g3AUguQABgEAFgCIADgBQADAAAAAEIgBAFQgWAzg5A5QgpAphrBZIhXBJQhGA8gkApQg1A7gEAoQgBAHgEADIgFABQgDAAAAgEg");
	this.shape_690.setTransform(677.9,396.2);

	this.shape_691 = new cjs.Shape();
	this.shape_691.graphics.f("#F5D33E").s().p("AqgAOQAAAAgBAAQAAAAAAgBQgBAAAAgBQAAgBAAAAQAFgvA2g/QAngtBMhAIBYhKQBphYAmgmQA4g3AUguQABgEAEgCINfH1QgEAEgCADQgUAtg3A3QgnAmhpBYIhXBKQhNBAgmAtQg2A/gFAvQAAABAAAAQAAABAAAAQABABAAAAQAAABABAAg");
	this.shape_691.setTransform(634.3,371.1);

	this.shape_692 = new cjs.Shape();
	this.shape_692.graphics.f("#D9BB38").s().p("Amxj6IADAAIABAAINfH1IgBAAIgDAAg");
	this.shape_692.setTransform(658.9,344.5);

	this.shape_693 = new cjs.Shape();
	this.shape_693.graphics.f("#D9D9D9").s().p("ApfiYIFYjFINnH2IlYDFg");
	this.shape_693.setTransform(627.3,388.1);

	this.shape_694 = new cjs.Shape();
	this.shape_694.graphics.f("#636363").s().p("AiAAXIDRh5IAwAbIipBiIBTAxIgoAXg");
	this.shape_694.setTransform(569.7,416.7);

	this.shape_695 = new cjs.Shape();
	this.shape_695.graphics.f("#636363").s().p("AiAAvIDRh5IAwAcIjRB5g");
	this.shape_695.setTransform(585.8,423.5);

	this.shape_696 = new cjs.Shape();
	this.shape_696.graphics.f("#636363").s().p("AgaBEIAlgoIg8giIhFAVIgygbIEThVIA+AkIiQCfgAAnADIA+g+IgyASIg4ASIgCAAg");
	this.shape_696.setTransform(597.1,433.8);

	this.shape_697 = new cjs.Shape();
	this.shape_697.graphics.f("#636363").s().p("AhCBTIAjhKQARggAUgfIgBAAQglAYg0AeIhAAkIgsgZIDRh6IA4AhIghBGQgQAfgWAeIABAAQAkgaAwgbIA9gjIAtAaIjRB5g");
	this.shape_697.setTransform(621.7,444.3);

	this.shape_698 = new cjs.Shape();
	this.shape_698.graphics.f("#636363").s().p("AhpBAQg1gfABghQAAghAvgbQA0geA/ABQA9ACAxAcQAaANASAXIgwAQQgNgRgUgKQgfgSglAAQgkABgfASQggATAAAUQgBAVAgASQAWANAYAGIgdAaQghgIgfgSg");
	this.shape_698.setTransform(644.5,457.5);

	this.shape_699 = new cjs.Shape();
	this.shape_699.graphics.f("#636363").s().p("AiqAWIDSh5ICCBLIgmAXIhTgwIgrAaIBNAsIgnAWIhNgsIgxAcIBWAyIgnAXg");
	this.shape_699.setTransform(659.9,466.4);

	this.shape_700 = new cjs.Shape();
	this.shape_700.graphics.f("#636363").s().p("AiiAvIDPh4QAkAPAhAUQAsAZAEAVQAFAYgfARQggASglAAQgygCgpgZIgPgKIhLAsgAAxAfQAUABASgKQAPgIgCgKQgBgJgSgLIgVgKIg+AkIAOAKIAAgBQARALAUABg");
	this.shape_700.setTransform(554.8,403.8);

	this.shape_701 = new cjs.Shape();
	this.shape_701.graphics.f("#636363").s().p("AgcBhIBMgwQAmgZAugaIAAAAQg0ARg2AQIhqAhIglgXIA6g6QAjglAbgWIiuBbIgsgYIDfhyIA/AkIgyA1QgaAbgeAaIABABQAxgTAugNIBcgcIA/AkIjHCAg");
	this.shape_701.setTransform(533.1,393.9);

	this.shape_702 = new cjs.Shape();
	this.shape_702.graphics.f("#636363").s().p("AhuA+QgugaAEgiQADggAvgbQAvgcA7gCQA7gBAvAaQAuAbgDAjQgDAfguAaQgzAeg6ABIgEAAQg4AAgtgagAgLAzQAggEAfgSQAegRAGgSQAHgUgYgOQgYgOgiAEQggAEggASQgeASgGASQgGAUAYAOIAAgBQAYAOAigEg");
	this.shape_702.setTransform(509.1,379.3);

	this.shape_703 = new cjs.Shape();
	this.shape_703.graphics.f("#636363").s().p("AhpBAQg1gfABghQAAghAvgbQA0gfA/ACQA9ABAyAdQAbAOAQAWIgwAQQgMgRgUgLQghgSgkABQgjAAggATQggASAAAUQgBAWAgASQAWAMAZAHIgfAaQgigJgdgRg");
	this.shape_703.setTransform(492,369.5);

	this.shape_704 = new cjs.Shape();
	this.shape_704.graphics.f("#F2F2F2").s().p("EgwkAGVMA7pgicMAlgAVzMg7pAicg");
	this.shape_704.setTransform(442.8,492.5);

	this.shape_705 = new cjs.Shape();
	this.shape_705.graphics.f("#898989").s().p("A90RGMA7pgicIAAASMg7pAibg");
	this.shape_705.setTransform(562.8,563.1);

	this.shape_706 = new cjs.Shape();
	this.shape_706.graphics.f("#ADADAD").s().p("AyvqvIAAgSMAlfAVyIAAARg");
	this.shape_706.setTransform(251.9,603.6);

	this.shape_707 = new cjs.Shape();
	this.shape_707.graphics.f("#E6E6E6").s().p("EgxMAGUMA8OgizMAmMAWMMg8PAizg");
	this.shape_707.setTransform(442.5,495.5);

	this.shape_708 = new cjs.Shape();
	this.shape_708.graphics.f("#AD9268").s().p("AtJdIMglGgVaQgygdAAgoQAAgpAxgdMA7pgiqQAygdBGAAQBGAAAyAdMAlHAVaQAyAdAAApQAAAogxAdMg7qAiqQgxAdhHAAQhGAAgygdg");
	this.shape_708.setTransform(439.8,495.1);

	this.shape_709 = new cjs.Shape();
	this.shape_709.graphics.f("#7E663D").s().p("AtJSIMglGgVZQgygdAAgpIAAg9QABAoAxAcMAlGAVZQAyAdBGAAQBHAAAxgdMA7qgiqQAwgcABgnIAAA9QAAAogyAdMg7pAiqQgxAdhHAAQhGAAgygdg");
	this.shape_709.setTransform(439.8,571.8);

	this.shape_710 = new cjs.Shape();
	this.shape_710.graphics.f("#D9D9D9").s().p("Ap9hmIABgEQABgFAEgCIAEgBQAZABAjgUQAdgRAuglQAdgXBHg9IA4gvICDhKINLHlQggAXgwAoQgQANhHA9IhSBFIiaBYIgDABIgDACIgGADg");
	this.shape_710.setTransform(630.5,385.6);

	this.shape_711 = new cjs.Shape();
	this.shape_711.graphics.f("#837022").s().p("AkHCyQgEAAAAgFIABgEQACgFAEgCIADgBQAYACAkgVQAdgRAugkQAhgaBEg6QBGg9AQgMQA2gwA/goQA/gkAWAaIABADQgBAEgCAEIgCACIgCABQgCADgDgDQgSgVg3AgQg/Aog0AuIhWBIQhFA7ghAbQgvAlgeARQglAVgZAAIgEAAg");
	this.shape_711.setTransform(679.8,408.2);

	this.shape_712 = new cjs.Shape();
	this.shape_712.graphics.f("#BCA331").s().p("Aq0hIQgBgBAAAAQAAgBAAAAQgBgBAAAAQAAgBAAgBIABgEQACgFAEgCIADgBQAZACAjgVQAdgRAugkQAggaBEg6IBYhKQA5gyA8gmQA1geAYANINeH1QgXgNg1AeQhBApg0AvQgQAMhIA+QhHA8gdAYQguAlgdAQQgmAVgWgCIgEABQgEADgBAEIgBAEQAAABAAABQAAAAAAABQABABAAAAQAAAAABABg");
	this.shape_712.setTransform(636.2,383);

	this.shape_713 = new cjs.Shape();
	this.shape_713.graphics.f("#575757").s().p("Amrj3IgBgBIgGgFINfH1IAGAFIAAABg");
	this.shape_713.setTransform(661.9,367.5);

	this.shape_714 = new cjs.Shape();
	this.shape_714.graphics.f("#D9D9D9").s().p("ArReMQhLAChBgkMglGgVaQghgTgSgbQgTgbAAgfQAAgeASgbQASgbAhgTMA7qgiqQBBgiBLAAQBKAABCAiMAlGAVaQAhATASAbQATAcAAAeQAAAegSAbQgSAbghATMg7qAiqQg+AihIAAIgGAAg");
	this.shape_714.setTransform(439.8,504.5);

	this.shape_715 = new cjs.Shape();
	this.shape_715.graphics.f("#D9D9D9").s().p("Ap1icIFojNIODIGIloDNg");
	this.shape_715.setTransform(644.5,377);

	this.shape_716 = new cjs.Shape();
	this.shape_716.graphics.f("#5E5E5E").s().p("AgLARIgNgeIANgSIAXAPIANAeIgNASg");
	this.shape_716.setTransform(590.1,587.6);

	this.shape_717 = new cjs.Shape();
	this.shape_717.graphics.f("#CE553B").s().p("AnDD4INun9IAZANItvH+g");
	this.shape_717.setTransform(634.1,559.7);

	this.shape_718 = new cjs.Shape();
	this.shape_718.graphics.f("#F56445").s().p("Am9DwINvn+IAMAgItvH9g");
	this.shape_718.setTransform(636,561.9);

	this.shape_719 = new cjs.Shape();
	this.shape_719.graphics.f("#913B29").s().p("AmxD2INvn9IgMARItvH+g");
	this.shape_719.setTransform(636,564.4);

	this.shape_720 = new cjs.Shape();
	this.shape_720.graphics.f("#5E5E5E").s().p("AAAAZQgTgMgCgYQAAgLAHgEQAGgEAIAFQAUAOACAXQAAALgHAEQgCABgDAAQgFAAgFgDg");
	this.shape_720.setTransform(677.8,536.5);

	this.shape_721 = new cjs.Shape();
	this.shape_721.graphics.f("#F2D49A").s().p("AgRAZQgCgZgWgLIgIgGIBRgbQAEgBAIAIQAIAJgCAEIglAiQgYAZgNAKQAGgIABgMg");
	this.shape_721.setTransform(681.7,535.2);

	this.shape_722 = new cjs.Shape();
	this.shape_722.graphics.f("#737373").s().p("AgfABIA9gVIABADIgrAmg");
	this.shape_722.setTransform(688,530.6);

	this.shape_723 = new cjs.Shape();
	this.shape_723.graphics.f("#D9D9D9").s().p("An4EpIgNggIANgSINun9IBQgbIA9gVIACADIgsAnIglAiQgYAYgNAKIAAABItvH+g");
	this.shape_723.setTransform(641,561.2);

	this.shape_724 = new cjs.Shape();
	this.shape_724.graphics.f("#BDBDBD").s().p("AiKCLQAAAAgBAAQAAgBgBAAQAAgBAAAAQAAgBAAAAIAuiHQAAgEAFgFIDgiCQAAAAABAAQAAgBABAAQAAAAABAAQAAABABAAQAAAAABABQAAAAABAAQAAABAAABQAAAAAAABIguCGQAAAGgFADIjgCCIgCABIgCgBg");
	this.shape_724.setTransform(324,279.4);

	this.shape_725 = new cjs.Shape();
	this.shape_725.graphics.f("#FFFFFF").s().p("AiNCKQAAgBgBAAQAAgBAAAAQAAgBAAAAQAAgBAAAAIAtiGQABgGAEgDIDgiCQABgBAAAAQABAAAAAAQABAAAAAAQABAAABABIAGAEQAAgBgBAAQAAAAgBAAQAAAAgBAAQAAAAAAABIjgCCQgGAEAAAFIguCGIABADg");
	this.shape_725.setTransform(323.6,279.1);

	this.shape_726 = new cjs.Shape();
	this.shape_726.graphics.f("#636363").s().p("AgXBbQgJgTgHgaIAAiMQASAAAJALQAGAHAGATQAZBJAOBPg");
	this.shape_726.setTransform(321.1,267.7);

	this.shape_727 = new cjs.Shape();
	this.shape_727.graphics.f("#A1A1A1").s().p("AgJAAIAKgFIAJAFIgKAGg");
	this.shape_727.setTransform(306.2,288.4);

	this.shape_728 = new cjs.Shape();
	this.shape_728.graphics.f("#A1A1A1").s().p("AgJABIAKgGIAJAFIgKAGg");
	this.shape_728.setTransform(321.4,276.6);

	this.shape_729 = new cjs.Shape();
	this.shape_729.graphics.f("#A1A1A1").s().p("AgKABIALgGIAKAFIgLAGg");
	this.shape_729.setTransform(322.7,277.3);

	this.shape_730 = new cjs.Shape();
	this.shape_730.graphics.f("#A1A1A1").s().p("AgJAAIAKgFIAJAFIgKAGg");
	this.shape_730.setTransform(324.2,276.5);

	this.shape_731 = new cjs.Shape();
	this.shape_731.graphics.f("#A1A1A1").s().p("AgJABIAKgGIAKAFIgLAGg");
	this.shape_731.setTransform(323,275.7);

	this.shape_732 = new cjs.Shape();
	this.shape_732.graphics.f("#A1A1A1").s().p("AgJAAIAKgFIAJAFIgKAGg");
	this.shape_732.setTransform(321.7,275);

	this.shape_733 = new cjs.Shape();
	this.shape_733.graphics.f("#A1A1A1").s().p("AgJAAIAKgFIAJAFIgKAGg");
	this.shape_733.setTransform(318.7,276.8);

	this.shape_734 = new cjs.Shape();
	this.shape_734.graphics.f("#A1A1A1").s().p("AgKAAIAKgFIAKAFIgKAGg");
	this.shape_734.setTransform(320.2,275.9);

	this.shape_735 = new cjs.Shape();
	this.shape_735.graphics.f("#A1A1A1").s().p("AgKABIAKgGIALAFIgLAGg");
	this.shape_735.setTransform(319,275.2);

	this.shape_736 = new cjs.Shape();
	this.shape_736.graphics.f("#A1A1A1").s().p("AgJAAIAKgFIAJAFIgKAGg");
	this.shape_736.setTransform(320.5,274.3);

	this.shape_737 = new cjs.Shape();
	this.shape_737.graphics.f("#A1A1A1").s().p("AgKABIALgGIAKAFIgLAGg");
	this.shape_737.setTransform(312.8,280.2);

	this.shape_738 = new cjs.Shape();
	this.shape_738.graphics.f("#A1A1A1").s().p("AgJAAIAKgFIAJAFIgKAGg");
	this.shape_738.setTransform(314.2,279.4);

	this.shape_739 = new cjs.Shape();
	this.shape_739.graphics.f("#A1A1A1").s().p("AgJABIAKgGIAJAFIgKAGg");
	this.shape_739.setTransform(313,278.7);

	this.shape_740 = new cjs.Shape();
	this.shape_740.graphics.f("#A1A1A1").s().p("AgKABIALgGIAKAFIgLAGg");
	this.shape_740.setTransform(310.1,280.4);

	this.shape_741 = new cjs.Shape();
	this.shape_741.graphics.f("#A1A1A1").s().p("AgJAAIAKgFIAJAFIgKAGg");
	this.shape_741.setTransform(311.5,279.5);

	this.shape_742 = new cjs.Shape();
	this.shape_742.graphics.f("#A1A1A1").s().p("AgKABIALgGIAKAFIgLAGg");
	this.shape_742.setTransform(305.7,282.9);

	this.shape_743 = new cjs.Shape();
	this.shape_743.graphics.f("#A1A1A1").s().p("AgKAAIALgFIAKAFIgLAGg");
	this.shape_743.setTransform(306.9,283.6);

	this.shape_744 = new cjs.Shape();
	this.shape_744.graphics.f("#A1A1A1").s().p("AgJAAIAKgFIAJAFIgKAGg");
	this.shape_744.setTransform(304.2,283.8);

	this.shape_745 = new cjs.Shape();
	this.shape_745.graphics.f("#A1A1A1").s().p("AgJAAIAKgFIAKAFIgLAGg");
	this.shape_745.setTransform(301.3,285.5);

	this.shape_746 = new cjs.Shape();
	this.shape_746.graphics.f("#A1A1A1").s().p("AgJABIAKgGIAJAFIgKAGg");
	this.shape_746.setTransform(302.5,286.2);

	this.shape_747 = new cjs.Shape();
	this.shape_747.graphics.f("#A1A1A1").s().p("AgJABIAKgGIAKAFIgLAGg");
	this.shape_747.setTransform(302.7,284.6);

	this.shape_748 = new cjs.Shape();
	this.shape_748.graphics.f("#A1A1A1").s().p("AgJABIAKgGIAKAFIgLAGg");
	this.shape_748.setTransform(304,285.3);

	this.shape_749 = new cjs.Shape();
	this.shape_749.graphics.f("#A1A1A1").s().p("AgKABIALgGIAKAFIgLAGg");
	this.shape_749.setTransform(305.2,286.1);

	this.shape_750 = new cjs.Shape();
	this.shape_750.graphics.f("#A1A1A1").s().p("AgJAAIAKgFIAJAFIgKAGg");
	this.shape_750.setTransform(303.7,286.9);

	this.shape_751 = new cjs.Shape();
	this.shape_751.graphics.f("#A1A1A1").s().p("AgJAAIAKgFIAKAFIgLAGg");
	this.shape_751.setTransform(305,287.6);

	this.shape_752 = new cjs.Shape();
	this.shape_752.graphics.f("#A1A1A1").s().p("AgKAAIAKgFIALAFIgLAGg");
	this.shape_752.setTransform(307.7,287.5);

	this.shape_753 = new cjs.Shape();
	this.shape_753.graphics.f("#A1A1A1").s().p("AgJABIAKgGIAJAFIgKAGg");
	this.shape_753.setTransform(306.4,286.8);

	this.shape_754 = new cjs.Shape();
	this.shape_754.graphics.f("#A1A1A1").s().p("AgKAAIALgFIAKAFIgLAGg");
	this.shape_754.setTransform(309.2,286.6);

	this.shape_755 = new cjs.Shape();
	this.shape_755.graphics.f("#A1A1A1").s().p("AgKAAIALgFIAKAFIgLAGg");
	this.shape_755.setTransform(307.9,285.9);

	this.shape_756 = new cjs.Shape();
	this.shape_756.graphics.f("#A1A1A1").s().p("AgJAAIAKgFIAJAFIgKAGg");
	this.shape_756.setTransform(310.6,285.8);

	this.shape_757 = new cjs.Shape();
	this.shape_757.graphics.f("#A1A1A1").s().p("AgJABIAKgGIAKAFIgLAGg");
	this.shape_757.setTransform(309.4,285.1);

	this.shape_758 = new cjs.Shape();
	this.shape_758.graphics.f("#A1A1A1").s().p("AgJABIAKgGIAJAFIgKAGg");
	this.shape_758.setTransform(312.1,284.9);

	this.shape_759 = new cjs.Shape();
	this.shape_759.graphics.f("#A1A1A1").s().p("AgJAAIAKgFIAJAFIgKAGg");
	this.shape_759.setTransform(308.1,284.4);

	this.shape_760 = new cjs.Shape();
	this.shape_760.graphics.f("#A1A1A1").s().p("AgJAAIAKgFIAJAFIgKAGg");
	this.shape_760.setTransform(310.8,284.2);

	this.shape_761 = new cjs.Shape();
	this.shape_761.graphics.f("#A1A1A1").s().p("AgJAAIAKgFIAJAFIgKAGg");
	this.shape_761.setTransform(309.6,283.5);

	this.shape_762 = new cjs.Shape();
	this.shape_762.graphics.f("#A1A1A1").s().p("AgKABIALgGIAKAFIgLAGg");
	this.shape_762.setTransform(312.3,283.4);

	this.shape_763 = new cjs.Shape();
	this.shape_763.graphics.f("#A1A1A1").s().p("AgKAAIALgFIAKAFIgLAGg");
	this.shape_763.setTransform(308.4,282.8);

	this.shape_764 = new cjs.Shape();
	this.shape_764.graphics.f("#A1A1A1").s().p("AgKAAIALgFIAKAFIgLAGg");
	this.shape_764.setTransform(311.1,282.6);

	this.shape_765 = new cjs.Shape();
	this.shape_765.graphics.f("#A1A1A1").s().p("AgJAAIAKgFIAJAFIgKAGg");
	this.shape_765.setTransform(313.8,282.5);

	this.shape_766 = new cjs.Shape();
	this.shape_766.graphics.f("#A1A1A1").s().p("AgJABIAKgGIAJAFIgKAGg");
	this.shape_766.setTransform(309.8,281.9);

	this.shape_767 = new cjs.Shape();
	this.shape_767.graphics.f("#A1A1A1").s().p("AgJAAIAKgFIAJAFIgKAGg");
	this.shape_767.setTransform(312.5,281.8);

	this.shape_768 = new cjs.Shape();
	this.shape_768.graphics.f("#A1A1A1").s().p("AgJAAIAKgFIAJAFIgKAGg");
	this.shape_768.setTransform(315.2,281.7);

	this.shape_769 = new cjs.Shape();
	this.shape_769.graphics.f("#A1A1A1").s().p("AgKAAIAKgFIALAFIgLAGg");
	this.shape_769.setTransform(311.3,281.1);

	this.shape_770 = new cjs.Shape();
	this.shape_770.graphics.f("#A1A1A1").s().p("AgKABIALgGIAKAFIgLAGg");
	this.shape_770.setTransform(314,280.9);

	this.shape_771 = new cjs.Shape();
	this.shape_771.graphics.f("#A1A1A1").s().p("AgJAAIAKgFIAJAFIgKAGg");
	this.shape_771.setTransform(315,283.2);

	this.shape_772 = new cjs.Shape();
	this.shape_772.graphics.f("#A1A1A1").s().p("AgKABIALgGIAKAFIgLAGg");
	this.shape_772.setTransform(313.6,284.1);

	this.shape_773 = new cjs.Shape();
	this.shape_773.graphics.f("#A1A1A1").s().p("AgJAAIAKgFIAJAFIgKAGg");
	this.shape_773.setTransform(315.5,280.1);

	this.shape_774 = new cjs.Shape();
	this.shape_774.graphics.f("#A1A1A1").s().p("AgKABIAKgGIALAFIgLAGg");
	this.shape_774.setTransform(316.7,280.8);

	this.shape_775 = new cjs.Shape();
	this.shape_775.graphics.f("#A1A1A1").s().p("AgJAAIAKgFIAJAFIgKAGg");
	this.shape_775.setTransform(318,281.5);

	this.shape_776 = new cjs.Shape();
	this.shape_776.graphics.f("#A1A1A1").s().p("AgJABIAKgGIAJAFIgKAGg");
	this.shape_776.setTransform(319.4,280.7);

	this.shape_777 = new cjs.Shape();
	this.shape_777.graphics.f("#A1A1A1").s().p("AgJAAIAKgFIAJAFIgKAGg");
	this.shape_777.setTransform(320.9,279.8);

	this.shape_778 = new cjs.Shape();
	this.shape_778.graphics.f("#A1A1A1").s().p("AgJABIAKgGIAKAFIgLAGg");
	this.shape_778.setTransform(322.4,278.9);

	this.shape_779 = new cjs.Shape();
	this.shape_779.graphics.f("#A1A1A1").s().p("AgJABIAKgGIAJAFIgKAGg");
	this.shape_779.setTransform(323.9,278.1);

	this.shape_780 = new cjs.Shape();
	this.shape_780.graphics.f("#A1A1A1").s().p("AgKAAIALgFIAKAFIgLAGg");
	this.shape_780.setTransform(325.5,277.2);

	this.shape_781 = new cjs.Shape();
	this.shape_781.graphics.f("#A1A1A1").s().p("AgKABIALgGIAJAFIgKAGg");
	this.shape_781.setTransform(316.5,282.4);

	this.shape_782 = new cjs.Shape();
	this.shape_782.graphics.f("#A1A1A1").s().p("AgKABIAKgGIAKAFIgKAGg");
	this.shape_782.setTransform(317,279.2);

	this.shape_783 = new cjs.Shape();
	this.shape_783.graphics.f("#A1A1A1").s().p("AgKAAIALgFIAJAFIgKAGg");
	this.shape_783.setTransform(318.4,278.4);

	this.shape_784 = new cjs.Shape();
	this.shape_784.graphics.f("#A1A1A1").s().p("AgJAAIAKgFIAJAFIgKAGg");
	this.shape_784.setTransform(319.9,277.5);

	this.shape_785 = new cjs.Shape();
	this.shape_785.graphics.f("#A1A1A1").s().p("AgJABIAKgGIAJAFIgKAGg");
	this.shape_785.setTransform(321.2,278.2);

	this.shape_786 = new cjs.Shape();
	this.shape_786.graphics.f("#A1A1A1").s().p("AgJABIAJgGIAKAFIgKAGg");
	this.shape_786.setTransform(319.7,279.1);

	this.shape_787 = new cjs.Shape();
	this.shape_787.graphics.f("#A1A1A1").s().p("AgKABIALgGIAKAFIgLAGg");
	this.shape_787.setTransform(317.2,277.7);

	this.shape_788 = new cjs.Shape();
	this.shape_788.graphics.f("#A1A1A1").s().p("AgKABIALgGIAKAFIgLAGg");
	this.shape_788.setTransform(318.2,279.9);

	this.shape_789 = new cjs.Shape();
	this.shape_789.graphics.f("#A1A1A1").s().p("AgKAAIAKgFIAKAFIgKAGg");
	this.shape_789.setTransform(315.7,278.5);

	this.shape_790 = new cjs.Shape();
	this.shape_790.graphics.f("#A1A1A1").s().p("AgKAAIALgFIAKAFIgLAGg");
	this.shape_790.setTransform(314.5,277.8);

	this.shape_791 = new cjs.Shape();
	this.shape_791.graphics.f("#A1A1A1").s().p("AgJABIAKgGIAJAFIgKAGg");
	this.shape_791.setTransform(315.9,277);

	this.shape_792 = new cjs.Shape();
	this.shape_792.graphics.f("#A1A1A1").s().p("AgJABIAKgGIAKAFIgLAGg");
	this.shape_792.setTransform(317.5,276.1);

	this.shape_793 = new cjs.Shape();
	this.shape_793.graphics.f("#A1A1A1").s().p("AgJAAIAKgFIAJAFIgKAGg");
	this.shape_793.setTransform(308.6,281.2);

	this.shape_794 = new cjs.Shape();
	this.shape_794.graphics.f("#A1A1A1").s().p("AgJAAIAKgFIAJAFIgKAGg");
	this.shape_794.setTransform(307.1,282.1);

	this.shape_795 = new cjs.Shape();
	this.shape_795.graphics.f("#A1A1A1").s().p("AgJAAIAKgFIAJAFIgKAGg");
	this.shape_795.setTransform(305.4,284.5);

	this.shape_796 = new cjs.Shape();
	this.shape_796.graphics.f("#A1A1A1").s().p("AgJAAIAKgFIAKAFIgLAGg");
	this.shape_796.setTransform(306.7,285.2);

	this.shape_797 = new cjs.Shape();
	this.shape_797.graphics.f("#808080").s().p("Ag2BEIh7hGQAAAAgBAAQAAgBgBAAQAAAAAAgBQAAAAAAgBIAAgJQAAABAAAAQAAABAAAAQABABAAAAQABABAAAAIB7BFQAGAEAGgEIDeiAIAAAIIjeCBQgDACgDAAQgDAAgDgCg");
	this.shape_797.setTransform(314.1,286.6);

	this.shape_798 = new cjs.Shape();
	this.shape_798.graphics.f("#F2F2F2").s().p("Ag3BoIh7hHIgCgCIAAgDQAAAAAAAAQAAgBAAAAQABAAAAAAQAAgBABAAIDfiBQAGgCAFACIB7BHQABAAAAABQABAAAAABQAAAAAAABQAAABAAABIgCABIjeCCQgDABgDAAQgDAAgDgBg");
	this.shape_798.setTransform(314.2,282.2);

	this.shape_799 = new cjs.Shape();
	this.shape_799.graphics.f("#636363").s().p("Ag+CSQgHgWANh3IAOhzQADgUANgRQARgVAUAIQAbAJAPAZQAQAYgEAcIgiDNIhUAhQgGgIgDgKg");
	this.shape_799.setTransform(290.5,254.9);

	this.shape_800 = new cjs.Shape();
	this.shape_800.graphics.f("#F7F7F7").s().p("AgGAVQgbgsACgOQAEgNAKgLQgGASAXAeQAUAbAMgCIgMAyQgOgTgMgWg");
	this.shape_800.setTransform(300,234.2);

	this.shape_801 = new cjs.Shape();
	this.shape_801.graphics.f("#383838").s().p("AACAlIAAgnQgRgRgRgUQghgmAKgHQAGgFAKgUQAKgUACgBQgGASAcAsQAjA3AGAQQAHAXAQBog");
	this.shape_801.setTransform(300.6,241.7);

	this.shape_802 = new cjs.Shape();
	this.shape_802.graphics.f("#F7F7F7").s().p("AgRgCQAIgOAEgSIAAgKQAHAMAFAQQADAdAIAgg");
	this.shape_802.setTransform(308.6,234.2);

	this.shape_803 = new cjs.Shape();
	this.shape_803.graphics.f("#383838").s().p("AgJBDQgBgpAAgTIgBg4QgDg0gEgJQACABARAmIASAnIgKAVIAHAYIgXBiQgBgDgBgpg");
	this.shape_803.setTransform(310.4,241.7);

	this.shape_804 = new cjs.Shape();
	this.shape_804.graphics.f("#565656").s().p("AgRCEQgIhugHg+QgCgRAEgjIAKhAQAEghgHgdQgFgXgLgOQAUAPALAOQAPAWAKAmQANA2AGCXQAGCNgFATQgHAXgKAMQgLAOgUAIQAEgEgKh4g");
	this.shape_804.setTransform(312.8,257.3);

	this.shape_805 = new cjs.Shape();
	this.shape_805.graphics.f("#565656").s().p("AhlD9QALiLAThvQAEgVgHgqQgIgvgDgYQgJhYA4geIAYgKQAQgIAGgGQAJgMAoBnQAnBkAFAqQAGArgUB7QgTB1gHAAQgbAahCAGIgWABQgvAAAAgXg");
	this.shape_805.setTransform(296.6,259.8);

	this.shape_806 = new cjs.Shape();
	this.shape_806.graphics.f("#DBDBDB").s().p("AhpDUIA+nEIBFAZIAgA/IAFhQIAYgDIAODRQAHB/gDBeQgCAdheAOQgXADgUAAQg4AAgPgdg");
	this.shape_806.setTransform(300.7,257.3);

	this.shape_807 = new cjs.Shape();
	this.shape_807.graphics.f("#CCAB93").s().p("Ag7ADQAEgZANgWIgDgoIBpgQQgRDCgCAHg");
	this.shape_807.setTransform(302.6,232.7);

	this.shape_808 = new cjs.Shape();
	this.shape_808.graphics.f("#6B6C6C").s().p("AB5FAQgogLgKgmIgkkyQgqgegwgkQhehIgTgeQgWgiAUghQAKgQAOgJIAdgWQAkgPAiAfQBuBkASARQBKBIAGAcQAKArAKFWQgPAWgZAAQgKAAgKgDg");
	this.shape_808.setTransform(304.8,306.7);

	this.shape_809 = new cjs.Shape();
	this.shape_809.graphics.f("#755527").s().p("AASBFQgPgIgVgUQgYgXgJgFQgigWgIgTQgHgRAOgVQALgSATALQANAIAoAeQBxBKgPAYQgJAOgZABIgEAAQgUAAgTgJg");
	this.shape_809.setTransform(321,339);

	this.shape_810 = new cjs.Shape();
	this.shape_810.graphics.f("#3C2F23").s().p("AAQBHQgQgHgUgWQgXgXgIgGQgigWgIgTQgHgSAOgVQAMgSATALQANAHAnAeQBxBJgQAZQgKAPgZADIgJAAQgSAAgQgIg");
	this.shape_810.setTransform(320.8,339.5);

	this.shape_811 = new cjs.Shape();
	this.shape_811.graphics.f("#2D231A").s().p("AgWgHQgCgMABgNIAvAtIgBAUQgngbgGgNg");
	this.shape_811.setTransform(313.7,339);

	this.shape_812 = new cjs.Shape();
	this.shape_812.graphics.f("#000000").s().p("AgegUIA9AhIgQAIQgogbgFgOg");
	this.shape_812.setTransform(314.5,340.2);

	this.shape_813 = new cjs.Shape();
	this.shape_813.graphics.f("#5E5E5E").s().p("ABuDgIgkjdIkniVIBuhlICNA7QCQBAAMAWQALAUAOCSQAHBKAEBFQgFAog0ABIgCAAQgyAAgDgYg");
	this.shape_813.setTransform(318.6,299.4);

	this.shape_814 = new cjs.Shape();
	this.shape_814.graphics.f("#755527").s().p("AAYAsIg5gPQgsgJgPgFQgYgHgDgRQgEgaAogLQANgEAVAHIAwAQQAcAJAmAIQAbAIAVALQAPAJgQAOQgQANgWACIgPABQgSAAgRgEg");
	this.shape_814.setTransform(341.3,323.8);

	this.shape_815 = new cjs.Shape();
	this.shape_815.graphics.f("#3C2F23").s().p("AAXAsIg5gQQgsgJgPgFQgYgHgDgQQgEgaAogMQAMgDAUAKQAdAQAPAEQAUAGA1AHQAkAFARAMQAIAGgOAOQgPAPgXADIgOABQgSAAgTgFg");
	this.shape_815.setTransform(341.3,324.7);

	this.shape_816 = new cjs.Shape();
	this.shape_816.graphics.f("#3C2F23").s().p("AgkADQgDgDAAgMIAAgMIBPAfIgDASQg9gIgMgOg");
	this.shape_816.setTransform(333.2,325.7);

	this.shape_817 = new cjs.Shape();
	this.shape_817.graphics.f("#1B1611").s().p("AgRgHIAjAGIgLAJQgOgEgKgLg");
	this.shape_817.setTransform(336.2,327.5);

	this.shape_818 = new cjs.Shape();
	this.shape_818.graphics.f("#636363").s().p("AgHBbQgEgHgOguQgOgxgHgPQgJgWABgRQAAgVARgFQAWgHAOALQAKAIAIAWQAZBKAOBOg");
	this.shape_818.setTransform(319.4,267.7);

	this.shape_819 = new cjs.Shape();
	this.shape_819.graphics.f("#636363").s().p("AA/CMIglgSQgTgJgKgXIgPgpIgcgqQgUgcgHgmQgGgeAFgVQAGgaAXgDQAbgDAZAWQAWAUAJAcQAcBaALBdQADAdgOAAIgDAAg");
	this.shape_819.setTransform(312.1,248.3);

	this.shape_820 = new cjs.Shape();
	this.shape_820.graphics.f("#CCCCCC").s().p("AB2FBQgogLgJgmIglkyQgqgdgvgkQhfhIgTgfQgWgiAugmQAXgSAbgMIADgRQAKgKAjAfQBmBdAZAZQBKBHAHAcQAKArAKFWQgPAWgZAAQgKAAgLgDg");
	this.shape_820.setTransform(303.1,308.4);

	this.instance_32 = new lib.ClipGroup_19();
	this.instance_32.parent = this;
	this.instance_32.setTransform(203.9,340.8,1,1,0,0,0,155.3,115.5);

	this.shape_821 = new cjs.Shape();
	this.shape_821.graphics.f("#E6E6E6").s().p("Aj2h/QhLgsgjgWIhig7IhSgzQgfgSghgWIg2gkIABgCIB7BBIBWAvIDTB3IDuCOIKKGDIgBADg");
	this.shape_821.setTransform(113.8,345.6);

	this.shape_822 = new cjs.Shape();
	this.shape_822.graphics.f("#E6E6E6").s().p("AjECaIr/nMIKKFsIF9DcIKdl4QCXhUBMgoIjdCGIqjGLg");
	this.shape_822.setTransform(172.5,394);

	this.shape_823 = new cjs.Shape();
	this.shape_823.graphics.f("#E6E6E6").s().p("AqWIHIjviOIjtiRIDzCHIDuCHIDciBIOBoEIBwg/IFUi+IDjh9IjfCGIjfCEIm/EEIqhGDIjiB/IgFADg");
	this.shape_823.setTransform(245,356);

	this.shape_824 = new cjs.Shape();
	this.shape_824.graphics.f("#E6E6E6").s().p("AokBfIi7hwIi7hxIDABoIC+BqIF1DVIEKiaIIkk0ICJhLICKhLIkNCiIofE9IkPCdIgHAEg");
	this.shape_824.setTransform(196.1,365.6);

	this.shape_825 = new cjs.Shape();
	this.shape_825.graphics.f("#969696").s().p("AACADIgHgEIACgBIAIAEIABAAIgCABg");
	this.shape_825.setTransform(234.2,248.8);

	this.shape_826 = new cjs.Shape();
	this.shape_826.graphics.f("#969696").s().p("AADADIgIgEIACgCIAIAFIABABIgCAAg");
	this.shape_826.setTransform(224.4,254.4);

	this.shape_827 = new cjs.Shape();
	this.shape_827.graphics.f("#A4A4A4").s().p("AgFAEQgEgDAGgCQAEgEAFADQAEACgGADQgDABgCAAIgEAAgAgCAAQgBAAgBAAQAAABgBAAQAAABAAAAQAAAAABABQAEABACgCIAAgBQACAAAAgBQABAAABAAQAAgBAAAAQAAAAgBgBIgDAAQgCAAgCACg");
	this.shape_827.setTransform(245.2,244.1);

	this.shape_828 = new cjs.Shape();
	this.shape_828.graphics.f("#A4A4A4").s().p("AgGADIALgGIABABIABACIgCAAIAAgBIgBAAIgJAFg");
	this.shape_828.setTransform(246.1,244.6);

	this.shape_829 = new cjs.Shape();
	this.shape_829.graphics.f("#A4A4A4").s().p("AgFAEQgBgBgBAAQAAgBAAAAQAAgBAAgBQABAAAAAAIAGgBIAAgCQADgCADACQABABABAAQAAABAAAAQAAABAAAAQgBAAgBAAIgEAAIgBAEIgCABIgEgBgAgEAAIAAADIAEAAIAAABIAAgEIgBAAIgDAAgAABAAIAEAAIAAgCIgEAAg");
	this.shape_829.setTransform(240.3,246.9);

	this.shape_830 = new cjs.Shape();
	this.shape_830.graphics.f("#A4A4A4").s().p("AgFAEQgEgDAEgBQAFgDACADIACABIABgBQAAAAAAAAQABgBgBAAQAAgBAAAAQAAAAgBgBIgBAAIACgBIABABIACADQgBABgDACQgCACgCAAIgFgBgAgDAAQgBABAAAAQgBABAAAAQAAAAABABQAAAAABAAQADACABgCIAAgBIAAgCIgCAAIgCAAg");
	this.shape_830.setTransform(235.4,249.6);

	this.shape_831 = new cjs.Shape();
	this.shape_831.graphics.f("#A4A4A4").s().p("AgIABIABgBIAGADIAAgBQgBgDACgCQAEgCADACIACADIgBAAIgCgCQgCgCgDACQgBABAAAEIAAABIAAABg");
	this.shape_831.setTransform(225.8,255.3);

	this.shape_832 = new cjs.Shape();
	this.shape_832.graphics.f("#A4A4A4").s().p("AgFAEQgFgDAHgCQADgDAGABQAEADgGACQgDACgDAAIgDAAgAgBAAQgCAAAAAAQgBABgBABQAAAAAAAAQABABAAAAQAEACACgEIAAABQAFgCgCgCIgCAAQgDAAgBACg");
	this.shape_832.setTransform(221,258);

	this.shape_833 = new cjs.Shape();
	this.shape_833.graphics.f("#969696").s().p("Ai+htIACgBIF7DcIgCABg");
	this.shape_833.setTransform(200.1,245.8);

	this.shape_834 = new cjs.Shape();
	this.shape_834.graphics.f("#5480CA").s().p("AgngJIAYgNIA3AfIgYAOg");
	this.shape_834.setTransform(214.2,252.6);

	this.shape_835 = new cjs.Shape();
	this.shape_835.graphics.f("#5480CA").s().p("AgzgBIAwgcIA3AfIgwAcg");
	this.shape_835.setTransform(209.2,248.3);

	this.shape_836 = new cjs.Shape();
	this.shape_836.graphics.f("#5480CA").s().p("AhXASIB3hEIA4AhIh3BEg");
	this.shape_836.setTransform(206.6,242.5);

	this.shape_837 = new cjs.Shape();
	this.shape_837.graphics.f("#5480CA").s().p("AhwAhICohhIA4AhIinBgg");
	this.shape_837.setTransform(202.8,237.5);

	this.shape_838 = new cjs.Shape();
	this.shape_838.graphics.f("#5480CA").s().p("AiUA1IDwiKIA4AhIjwCKg");
	this.shape_838.setTransform(200.2,231.8);

	this.shape_839 = new cjs.Shape();
	this.shape_839.graphics.f("#969696").s().p("AgFgCIACgBIAIAFIABAAIgBABIgBAAg");
	this.shape_839.setTransform(219.6,257.2);

	this.shape_840 = new cjs.Shape();
	this.shape_840.graphics.f("#969696").s().p("Ah4BGIAAgBIgBAAIAvgbIABAAIACAAIgBgBIAvgbIAAABIACgBIgBgBIAugaIABABIACgBIgBgBIAvgbIAAABIACgBIAAgBIAvgcIACACIjyCKg");
	this.shape_840.setTransform(232.2,250.5);

	this.shape_841 = new cjs.Shape();
	this.shape_841.graphics.f("#A4A4A4").s().p("AgBABIgDACIgCgBIADgCIgBAAIABAAIACAAIAGgEIACACIgDAGIgBAAgAADAAIgDAAIADADIAAAAIAAAAIAAAAIABgDIABgBg");
	this.shape_841.setTransform(230.5,252.4);

	this.shape_842 = new cjs.Shape();
	this.shape_842.graphics.f("#969696").s().p("AADADIgIgEIACgBIAIAEIABAAIgCABg");
	this.shape_842.setTransform(229.3,251.6);

	this.shape_843 = new cjs.Shape();
	this.shape_843.graphics.f("#969696").s().p("AADADIgIgEIACgBIAIAEIABAAIgCABg");
	this.shape_843.setTransform(239,246);

	this.shape_844 = new cjs.Shape();
	this.shape_844.graphics.f("#A4A4A4").s().p("AgEADIgDgCIACgBIACABQADACADgCIgGgDIABAAQADgCAEACQAFACgGADIgEABIgEgBgAAAgBIAEACIAAABQABgBAAAAQAAgBAAAAQAAAAAAAAQAAgBgBAAIgDgBIgBABg");
	this.shape_844.setTransform(182.4,317.4);

	this.shape_845 = new cjs.Shape();
	this.shape_845.graphics.f("#A4A4A4").s().p("AAAAFIAFgDIABgBIAAgBIgEAAIgGACIgBgBIAFgDIABAAIAAgCIgEAAIgFAEIgCgCIAEgCQAFgCACABIABACIAAABIAEAAIACACIACAAIABAAIgJAGg");
	this.shape_845.setTransform(181.1,316.8);

	this.shape_846 = new cjs.Shape();
	this.shape_846.graphics.f("#A4A4A4").s().p("AgHADIAMgGIABABIACACIgCAAIgBgBIgKAFg");
	this.shape_846.setTransform(179.6,315.5);

	this.shape_847 = new cjs.Shape();
	this.shape_847.graphics.f("#A4A4A4").s().p("AgJAAIACAAIAGADIAAgBQAAgEABgBQAEgDAEADIACADIgCAAIgBgDQgDgBgCABQgCACAAAEIAAACIAAAAg");
	this.shape_847.setTransform(183.6,313.2);

	this.shape_848 = new cjs.Shape();
	this.shape_848.graphics.f("#A4A4A4").s().p("AAAAFIAGgDIAAgBIAAgBIgEAAIgFACIgCgBIAFgCIABgBIAAgCQgBgBgDABIgFADIgCgBIAFgCQADgCADACIABABIAAACIAFAAIABABIACAAIABAAIgJAGg");
	this.shape_848.setTransform(185.2,314.4);

	this.shape_849 = new cjs.Shape();
	this.shape_849.graphics.f("#A4A4A4").s().p("AgFACIAJgEIACABIgJAEg");
	this.shape_849.setTransform(187.9,315.8);

	this.shape_850 = new cjs.Shape();
	this.shape_850.graphics.f("#A4A4A4").s().p("AgFADIgCgBIACgBIABABIACAAIAFgCIgDgCIABgBIADACIACgCIACACIgCABIABAAIgBABIgCgBIgEADIgDABg");
	this.shape_850.setTransform(187.5,315.4);

	this.shape_851 = new cjs.Shape();
	this.shape_851.graphics.f("#A4A4A4").s().p("AgEADIgCgDIACAAIABABQADACADgCIgGgDIABAAQADgCAEACQAEACgEADIgFABIgEgBgAAAgBIAEACQABAAAAgBQAAAAAAAAQAAAAAAAAQAAAAgBgBIgCAAIgCAAg");
	this.shape_851.setTransform(186.5,315);

	this.shape_852 = new cjs.Shape();
	this.shape_852.graphics.f("#A4A4A4").s().p("AAAAAIAAAAIABAAIAAAAg");
	this.shape_852.setTransform(188.7,315.4);

	this.shape_853 = new cjs.Shape();
	this.shape_853.graphics.f("#A4A4A4").s().p("AgFACIAJgEIACABIgJAEg");
	this.shape_853.setTransform(192.1,313.4);

	this.shape_854 = new cjs.Shape();
	this.shape_854.graphics.f("#A4A4A4").s().p("AgEADIgCgDIABAAIADABQACACADgCIgGgDIABAAQAEgCAEACQADACgEADIgFABIgEgBgAAAgBIAEACIAAAAQAAAAABgBQAAAAAAAAQAAAAAAAAQgBgBAAAAIgCgBIgCABg");
	this.shape_854.setTransform(190.7,312.6);

	this.shape_855 = new cjs.Shape();
	this.shape_855.graphics.f("#A4A4A4").s().p("AAAAFIAGgDIAAgBIAAgBIgEAAIgFACIgCgBIAFgCIABgBIAAgCQgCgBgCABIgGADIgBgBIAEgCQAEgCADACIABABIAAACIAFAAIABABIACAAIABAAIgJAGg");
	this.shape_855.setTransform(189.4,312);

	this.shape_856 = new cjs.Shape();
	this.shape_856.graphics.f("#A4A4A4").s().p("AgFAEQgFgDAEgBQADgCADACIAAgDQAEgDADADIACACIgCAAIgBgCIgEAAIAAADIABAAIgBABIgBgBQgCgBgDABQgBABAAAAQAAAAAAABQAAAAAAAAQAAABABAAIAEABIgBABg");
	this.shape_856.setTransform(188,310.8);

	this.shape_857 = new cjs.Shape();
	this.shape_857.graphics.f("#A4A4A4").s().p("AgFADIgCgBIACgBIABABIACAAIAFgCIgDgCIACgBIACACIADgCIABACIgCABIABAAIgBAAIgBAAIgFADIgDABg");
	this.shape_857.setTransform(191.6,313);

	this.shape_858 = new cjs.Shape();
	this.shape_858.graphics.f("#A4A4A4").s().p("AgEACIgDgCIACAAIADABQACADADgDIgFgCIAAgBQAEgCAEACQAAAAAAABQABAAAAAAQAAABAAAAQABAAAAAAQAAAAgBAAQAAABAAAAQAAAAgBABQAAAAgBAAQgCACgDAAQgCAAgCgCgAAAgCIAEACQABAAAAAAQAAAAAAAAQAAgBAAAAQAAAAgBgBIgCAAIgCAAg");
	this.shape_858.setTransform(194.9,310.2);

	this.shape_859 = new cjs.Shape();
	this.shape_859.graphics.f("#A4A4A4").s().p("AAAAFIAGgDIAAgBIAAgBIgEAAIgFADIgCgBIAGgDIgBgCQAAgBAAAAQAAAAgBAAQAAAAgBAAQgBAAAAABIgGADIgBgBIAEgDQAEgCACACIACACIAAABIAFAAIABACIACgBIABABIgKAFg");
	this.shape_859.setTransform(193.6,309.5);

	this.shape_860 = new cjs.Shape();
	this.shape_860.graphics.f("#A4A4A4").s().p("AgBABIgEACIgBgBIADgCIgBAAIABAAIACAAIAGgEIACABIgCAHIgBABgAAAABIADACIABAAIABgDIABgCg");
	this.shape_860.setTransform(191.9,308.3);

	this.shape_861 = new cjs.Shape();
	this.shape_861.graphics.f("#A4A4A4").s().p("AgFAFQgFgDAFgCIAFgBIADABIADgBIgFgDIACgBIAGADIgGAEIgBgCQgCAAgEAAQgBABAAAAQAAABAAAAQAAABAAAAQAAAAABABIAEABIgBABg");
	this.shape_861.setTransform(196.3,305.9);

	this.shape_862 = new cjs.Shape();
	this.shape_862.graphics.f("#A4A4A4").s().p("AgFAEQgEgDAEgBQAFgDADADIABABIABgBQABAAAAAAQAAAAAAgBQAAAAAAgBQgBAAgBgBIgBgBIABAAIACAAIACAEQAAABgEACQgDACgBAAIgFgBgAgEAAQAAAAAAAAQgBABAAAAQAAABABAAQAAAAAAABQAEABACgBIAAgBIgBgCIgCAAIgDAAg");
	this.shape_862.setTransform(200.4,303.5);

	this.shape_863 = new cjs.Shape();
	this.shape_863.graphics.f("#41B5F6").s().p("AgngGIAcgQIAzAdIgcAQg");
	this.shape_863.setTransform(204.2,310.4);

	this.shape_864 = new cjs.Shape();
	this.shape_864.graphics.f("#A4A4A4").s().p("AgFACIAJgEIACAAIgJAFg");
	this.shape_864.setTransform(200.5,308.6);

	this.shape_865 = new cjs.Shape();
	this.shape_865.graphics.f("#A4A4A4").s().p("AgGADIgBgBIACgBIAAABIAEAAIAEgDIgDgBIACgBIACACIADgCIABABIgCACIABAAIgBAAIgCAAIgEADIgDABg");
	this.shape_865.setTransform(200,308.2);

	this.shape_866 = new cjs.Shape();
	this.shape_866.graphics.f("#A4A4A4").s().p("AgEACIgCgCIABAAIACACQADABADgBIgGgDIABgBQADgCAEACQAEACgFACQgCACgCAAQAAAAAAAAQgBAAgBAAQAAgBgBAAQAAAAgBgBgAAAgCIAEACIAAAAQABAAAAAAQABAAAAAAQAAgBgBAAQAAAAgBgBIgCAAIgCAAg");
	this.shape_866.setTransform(199.1,307.8);

	this.shape_867 = new cjs.Shape();
	this.shape_867.graphics.f("#A4A4A4").s().p("AAAAFIAHgEIAAgBIgFAAIgFACIgCgBIAGgDIAAgCIABACIAAABIAFAAIABACIACgBIABABIgKAFgAgKgBIAFgDQADgCADACIAAAAQgCgBgCACIgFADg");
	this.shape_867.setTransform(197.8,307.1);

	this.shape_868 = new cjs.Shape();
	this.shape_868.graphics.f("#A4A4A4").s().p("AAAABIAAgBIABAAIAAABg");
	this.shape_868.setTransform(201.2,308.1);

	this.shape_869 = new cjs.Shape();
	this.shape_869.graphics.f("#5DC86D").s().p("AgngGIAcgQIAzAdIgcAQg");
	this.shape_869.setTransform(200.1,312.8);

	this.shape_870 = new cjs.Shape();
	this.shape_870.graphics.f("#A4A4A4").s().p("AgGADIgBgBIABgBIABABIAEAAIADgCIgCgBIABgBIADABIADgBIABABIgCABIABAAIgBAAIgBAAIgFACIgDABg");
	this.shape_870.setTransform(195.8,310.6);

	this.shape_871 = new cjs.Shape();
	this.shape_871.graphics.f("#A4A4A4").s().p("AgFACIAJgEIABABIgIAEg");
	this.shape_871.setTransform(196.3,311);

	this.shape_872 = new cjs.Shape();
	this.shape_872.graphics.f("#A4A4A4").s().p("AAAABIAAgBIABAAIAAABg");
	this.shape_872.setTransform(197.1,310.5);

	this.shape_873 = new cjs.Shape();
	this.shape_873.graphics.f("#ECB852").s().p("AgngGIAcgQIAzAdIgcAQg");
	this.shape_873.setTransform(208.4,308);

	this.shape_874 = new cjs.Shape();
	this.shape_874.graphics.f("#A4A4A4").s().p("AgGADIgBgBIABgBIABABIAEAAIAEgCIgDgCIACgBIACACIADgCIABABIgCACIABAAIgBABIgCgBIgEADIgDAAg");
	this.shape_874.setTransform(204.2,305.8);

	this.shape_875 = new cjs.Shape();
	this.shape_875.graphics.f("#A4A4A4").s().p("AgEADIgDgCIACgBIACABQADACADgCIgGgDIABAAQADgCAEACQAFACgGADIgEABIgEgBgAAAgBIAEACIAAABQABgBAAAAQAAgBAAAAQAAAAAAAAQAAAAgBgBIgDgBIgBABg");
	this.shape_875.setTransform(203.3,305.3);

	this.shape_876 = new cjs.Shape();
	this.shape_876.graphics.f("#A4A4A4").s().p("AAAAFIAGgDIAAgBIAAgBIgEAAIgFACIgCgBIAFgCIABgBIAAgCQgCgBgCACIgFADIgCgBIAFgCQADgDADACIABACIAAABIAFAAIABACIABgBIACABIgKAFg");
	this.shape_876.setTransform(202,304.7);

	this.shape_877 = new cjs.Shape();
	this.shape_877.graphics.f("#A4A4A4").s().p("AAAAAIAAAAIABAAIAAAAg");
	this.shape_877.setTransform(205.4,305.7);

	this.shape_878 = new cjs.Shape();
	this.shape_878.graphics.f("#A4A4A4").s().p("AgFACIAJgEIACABIgJAEg");
	this.shape_878.setTransform(204.7,306.1);

	this.shape_879 = new cjs.Shape();
	this.shape_879.graphics.f("#ECB852").s().p("AhVgIIB5hGQARAJAOAQQAaAcgKAgQgJAfgnAXQgUAMgXAGg");
	this.shape_879.setTransform(231.2,331.8);

	this.shape_880 = new cjs.Shape();
	this.shape_880.graphics.f("#41B5F6").s().p("AgEAxQg2gFgpgYIB6hFIBNBYQgnALgoAAIgZgBg");
	this.shape_880.setTransform(220.4,335.8);

	this.shape_881 = new cjs.Shape();
	this.shape_881.graphics.f("#5DC86D").s().p("AhSgJIClgZIh5BFQgcgOgQgeg");
	this.shape_881.setTransform(214.3,334.4);

	this.shape_882 = new cjs.Shape();
	this.shape_882.graphics.f("#FDF116").s().p("AhOAHQAMgYAggTQAfgQAigHIA3BdIilAaQgMgaANgbg");
	this.shape_882.setTransform(214,327.4);

	this.shape_883 = new cjs.Shape();
	this.shape_883.graphics.f("#A27D4E").s().p("AAJgsQAaAFAaAPIh5BFg");
	this.shape_883.setTransform(228.8,326.3);

	this.shape_884 = new cjs.Shape();
	this.shape_884.graphics.f("#D62F35").s().p("Ag+grQA/gNA+AQIhFBag");
	this.shape_884.setTransform(223.4,325.8);

	this.shape_885 = new cjs.Shape();
	this.shape_885.graphics.f("#A27D4E").s().p("AgngGIAcgQIAzAdIgcAQg");
	this.shape_885.setTransform(187.5,320.1);

	this.shape_886 = new cjs.Shape();
	this.shape_886.graphics.f("#D62F35").s().p("AgngGIAcgQIAzAdIgcAQg");
	this.shape_886.setTransform(191.7,317.7);

	this.shape_887 = new cjs.Shape();
	this.shape_887.graphics.f("#A4A4A4").s().p("AgEACIAIgEIACABIgJAEg");
	this.shape_887.setTransform(183.8,318.2);

	this.shape_888 = new cjs.Shape();
	this.shape_888.graphics.f("#A4A4A4").s().p("AgFADIgCgBIACgBIAAABIADAAIAFgCIgDgCIACAAIACABIADgCIABACIgDABIACAAIgBABIgCgBIgEADIgDABg");
	this.shape_888.setTransform(183.3,317.8);

	this.shape_889 = new cjs.Shape();
	this.shape_889.graphics.f("#A4A4A4").s().p("AAAABIAAgBIABAAIAAABg");
	this.shape_889.setTransform(184.5,317.8);

	this.shape_890 = new cjs.Shape();
	this.shape_890.graphics.f("#FDF116").s().p("AgngGIAcgQIAzAdIgcAQg");
	this.shape_890.setTransform(195.9,315.3);

	this.shape_891 = new cjs.Shape();
	this.shape_891.graphics.f("#A4A4A4").s().p("AAAABIAAgBIABAAIAAABg");
	this.shape_891.setTransform(192.9,313);

	this.shape_892 = new cjs.Shape();
	this.shape_892.graphics.f("#DCDCDC").s().p("Aj6iGIAUgLIHhEXIgUAMg");
	this.shape_892.setTransform(244.8,221.6);

	this.shape_893 = new cjs.Shape();
	this.shape_893.graphics.f("#DCDCDC").s().p("Aj5iGIATgLIHgEXIgTAMg");
	this.shape_893.setTransform(239.9,224.5);

	this.shape_894 = new cjs.Shape();
	this.shape_894.graphics.f("#DCDCDC").s().p("Aj6iFIAUgMIHhEYIgTALg");
	this.shape_894.setTransform(92.2,309.7);

	this.shape_895 = new cjs.Shape();
	this.shape_895.graphics.f("#DCDCDC").s().p("Aj6iGIATgKIHiEXIgTAKg");
	this.shape_895.setTransform(97.2,306.9);

	this.shape_896 = new cjs.Shape();
	this.shape_896.graphics.f("#DCDCDC").s().p("Aj5iGIATgLIHgEXIgTALg");
	this.shape_896.setTransform(102.1,304);

	this.shape_897 = new cjs.Shape();
	this.shape_897.graphics.f("#DCDCDC").s().p("Aj5iGIATgLIHgEXIgTALg");
	this.shape_897.setTransform(107,301.2);

	this.shape_898 = new cjs.Shape();
	this.shape_898.graphics.f("#DCDCDC").s().p("Aj6iFIAUgMIHhEXIgTAMg");
	this.shape_898.setTransform(111.9,298.3);

	this.shape_899 = new cjs.Shape();
	this.shape_899.graphics.f("#DCDCDC").s().p("Aj5iFIATgLIHgEXIgTAKg");
	this.shape_899.setTransform(116.8,295.5);

	this.shape_900 = new cjs.Shape();
	this.shape_900.graphics.f("#DCDCDC").s().p("Aj6iGIAUgKIHgEWIgTALg");
	this.shape_900.setTransform(121.8,292.7);

	this.shape_901 = new cjs.Shape();
	this.shape_901.graphics.f("#DCDCDC").s().p("Aj6iFIAUgMIHhEXIgUAMg");
	this.shape_901.setTransform(126.7,289.8);

	this.shape_902 = new cjs.Shape();
	this.shape_902.graphics.f("#DCDCDC").s().p("Aj5iFIASgLIHiEXIgUALg");
	this.shape_902.setTransform(131.6,287);

	this.shape_903 = new cjs.Shape();
	this.shape_903.graphics.f("#DCDCDC").s().p("Aj5iGIATgLIHhEXIgUALg");
	this.shape_903.setTransform(136.6,284.1);

	this.shape_904 = new cjs.Shape();
	this.shape_904.graphics.f("#DCDCDC").s().p("Aj6iGIATgKIHiEWIgUALg");
	this.shape_904.setTransform(141.5,281.3);

	this.shape_905 = new cjs.Shape();
	this.shape_905.graphics.f("#DCDCDC").s().p("Aj5iGIATgLIHgEXIgTAMg");
	this.shape_905.setTransform(146.4,278.5);

	this.shape_906 = new cjs.Shape();
	this.shape_906.graphics.f("#DCDCDC").s().p("Aj5iFIATgLIHgEXIgTALg");
	this.shape_906.setTransform(151.3,275.6);

	this.shape_907 = new cjs.Shape();
	this.shape_907.graphics.f("#DCDCDC").s().p("Aj6iGIAUgKIHhEWIgTALg");
	this.shape_907.setTransform(156.2,272.8);

	this.shape_908 = new cjs.Shape();
	this.shape_908.graphics.f("#DCDCDC").s().p("Aj6iGIATgLIHiEXIgUAMg");
	this.shape_908.setTransform(161.2,269.9);

	this.shape_909 = new cjs.Shape();
	this.shape_909.graphics.f("#DCDCDC").s().p("Aj5iFIATgMIHgEXIgTAMg");
	this.shape_909.setTransform(166.1,267.1);

	this.shape_910 = new cjs.Shape();
	this.shape_910.graphics.f("#DCDCDC").s().p("Aj6iFIAUgMIHhEXIgUAMg");
	this.shape_910.setTransform(171,264.2);

	this.shape_911 = new cjs.Shape();
	this.shape_911.graphics.f("#DCDCDC").s().p("Aj6iGIATgKIHiEXIgTAKg");
	this.shape_911.setTransform(175.9,261.4);

	this.shape_912 = new cjs.Shape();
	this.shape_912.graphics.f("#DCDCDC").s().p("Aj5iFIATgMIHgEXIgTAMg");
	this.shape_912.setTransform(180.8,258.6);

	this.shape_913 = new cjs.Shape();
	this.shape_913.graphics.f("#DCDCDC").s().p("Aj6iFIAUgMIHhEYIgTALg");
	this.shape_913.setTransform(185.7,255.7);

	this.shape_914 = new cjs.Shape();
	this.shape_914.graphics.f("#DCDCDC").s().p("Aj6iFIAUgMIHhEXIgUAMg");
	this.shape_914.setTransform(190.6,252.9);

	this.shape_915 = new cjs.Shape();
	this.shape_915.graphics.f("#DCDCDC").s().p("Aj6iFIAUgLIHgEXIgTALg");
	this.shape_915.setTransform(195.6,250.1);

	this.shape_916 = new cjs.Shape();
	this.shape_916.graphics.f("#DCDCDC").s().p("Aj6iGIAUgKIHhEWIgUALg");
	this.shape_916.setTransform(234.9,227.3);

	this.shape_917 = new cjs.Shape();
	this.shape_917.graphics.f("#DCDCDC").s().p("AkGiNIATgLIH6EmIgTALg");
	this.shape_917.setTransform(315.2,262.5);

	this.shape_918 = new cjs.Shape();
	this.shape_918.graphics.f("#DCDCDC").s().p("AkHiNIAUgLIH7EmIgUALg");
	this.shape_918.setTransform(231.5,310.8);

	this.shape_919 = new cjs.Shape();
	this.shape_919.graphics.f("#DCDCDC").s().p("AkGiNIATgLIH6EmIgTALg");
	this.shape_919.setTransform(236.4,308);

	this.shape_920 = new cjs.Shape();
	this.shape_920.graphics.f("#DCDCDC").s().p("AkGiMIATgMIH6EmIgTALg");
	this.shape_920.setTransform(241.4,305.1);

	this.shape_921 = new cjs.Shape();
	this.shape_921.graphics.f("#DCDCDC").s().p("AkGiNIATgLIH6EmIgTALg");
	this.shape_921.setTransform(246.3,302.3);

	this.shape_922 = new cjs.Shape();
	this.shape_922.graphics.f("#DCDCDC").s().p("AkGiNIATgLIH6EmIgTALg");
	this.shape_922.setTransform(251.2,299.5);

	this.shape_923 = new cjs.Shape();
	this.shape_923.graphics.f("#DCDCDC").s().p("AkGiNIATgLIH6EmIgTALg");
	this.shape_923.setTransform(256.1,296.6);

	this.shape_924 = new cjs.Shape();
	this.shape_924.graphics.f("#DCDCDC").s().p("AkHiNIAUgLIH7EmIgUALg");
	this.shape_924.setTransform(261,293.8);

	this.shape_925 = new cjs.Shape();
	this.shape_925.graphics.f("#DCDCDC").s().p("AkGiNIATgLIH6EmIgTALg");
	this.shape_925.setTransform(265.9,291);

	this.shape_926 = new cjs.Shape();
	this.shape_926.graphics.f("#DCDCDC").s().p("AkGiNIATgLIH6EmIgTALg");
	this.shape_926.setTransform(270.9,288.1);

	this.shape_927 = new cjs.Shape();
	this.shape_927.graphics.f("#DCDCDC").s().p("AkHiNIAUgLIH7EmIgTALg");
	this.shape_927.setTransform(275.8,285.3);

	this.shape_928 = new cjs.Shape();
	this.shape_928.graphics.f("#DCDCDC").s().p("AkGiNIATgLIH6EmIgTALg");
	this.shape_928.setTransform(280.7,282.4);

	this.shape_929 = new cjs.Shape();
	this.shape_929.graphics.f("#DCDCDC").s().p("AkGiNIATgLIH6EmIgTALg");
	this.shape_929.setTransform(285.6,279.6);

	this.shape_930 = new cjs.Shape();
	this.shape_930.graphics.f("#DCDCDC").s().p("AkGiNIATgLIH6EmIgTALg");
	this.shape_930.setTransform(290.5,276.7);

	this.shape_931 = new cjs.Shape();
	this.shape_931.graphics.f("#DCDCDC").s().p("AkGiNIATgLIH7EmIgUALg");
	this.shape_931.setTransform(295.5,273.9);

	this.shape_932 = new cjs.Shape();
	this.shape_932.graphics.f("#DCDCDC").s().p("AkGiNIATgLIH6EmIgTALg");
	this.shape_932.setTransform(300.4,271.1);

	this.shape_933 = new cjs.Shape();
	this.shape_933.graphics.f("#DCDCDC").s().p("AkGiNIATgLIH6EmIgTALg");
	this.shape_933.setTransform(310.2,265.4);

	this.shape_934 = new cjs.Shape();
	this.shape_934.graphics.f("#DCDCDC").s().p("AkHiNIAUgLIH6EmIgTALg");
	this.shape_934.setTransform(305.3,268.2);

	this.shape_935 = new cjs.Shape();
	this.shape_935.graphics.f("#DCDCDC").s().p("AkGiNIATgLIH6EmIgTALg");
	this.shape_935.setTransform(162.6,350.6);

	this.shape_936 = new cjs.Shape();
	this.shape_936.graphics.f("#DCDCDC").s().p("AkGiMIATgMIH6EmIgTALg");
	this.shape_936.setTransform(172.4,344.9);

	this.shape_937 = new cjs.Shape();
	this.shape_937.graphics.f("#DCDCDC").s().p("AkGiNIATgLIH6EmIgTALg");
	this.shape_937.setTransform(177.4,342.1);

	this.shape_938 = new cjs.Shape();
	this.shape_938.graphics.f("#DCDCDC").s().p("AkGiNIATgLIH6EmIgTALg");
	this.shape_938.setTransform(182.3,339.2);

	this.shape_939 = new cjs.Shape();
	this.shape_939.graphics.f("#DCDCDC").s().p("AkHiNIAUgLIH7EmIgUALg");
	this.shape_939.setTransform(187.2,336.4);

	this.shape_940 = new cjs.Shape();
	this.shape_940.graphics.f("#DCDCDC").s().p("AkGiNIATgLIH6EmIgTALg");
	this.shape_940.setTransform(192.1,333.6);

	this.shape_941 = new cjs.Shape();
	this.shape_941.graphics.f("#DCDCDC").s().p("AkGiNIATgLIH6EmIgTALg");
	this.shape_941.setTransform(167.5,347.8);

	this.shape_942 = new cjs.Shape();
	this.shape_942.graphics.f("#FFFFFF").s().p("A4RCIIcFwIIUdL5I8DQIg");
	this.shape_942.setTransform(203.6,286.4);

	this.shape_943 = new cjs.Shape();
	this.shape_943.graphics.f("#ADADAD").s().p("AuDD4IcEwIIADIZI8EQIg");
	this.shape_943.setTransform(269.2,351.3);

	this.shape_944 = new cjs.Shape();
	this.shape_944.graphics.f("#E9E9E9").s().p("AqMhvIgDoZIUdL4IACIZg");
	this.shape_944.setTransform(113.9,365);

	this.shape_945 = new cjs.Shape();
	this.shape_945.graphics.f("#D9D9D9").s().p("A6ngOIebszIWzIkI+aRfg");
	this.shape_945.setTransform(203.6,361.5);

	this.shape_946 = new cjs.Shape();
	this.shape_946.graphics.f("#DEDEDE").s().p("Ag4G9QgPgBglgHIgcgGQgegHgbgKQgbgJgigRIgogWQg1gggugqQgvgsgkg2QgUgdgSglQgLgUgPgoQgIgVgFgTIgPhIQgEgggBggQgBgOADgTQAGgoAVglQAXgmAegeQAPgOARgNIA9gpIBIgiQAqgQAlgLIBSgSQA2gIAggDQALgBAhgBIBXABIArADIArAFIAqAHIAYAFQAeAHAbAIQAoAMAjAPQAlAPAlAWQAgAUAbAWQAyAoAeA3QANAZAGAZQAGAZAAAYQAAAlgGAjQgFAhgKAlIgZBGQgFANgNAZQgUAjgOAVIgZAjIgVAYIggAhIgYAWQgSAQgWAPQgXARgdAQIgcAPQggAPgHACQgeANgfAIIg1AMIgdAEQggAEgUAAIgUAAQgbAAgdgCgAmJlhQioBegECIQgDCHCjBhQCkBiDqACQDpADCohfQCpheADiHQADiHijhiQijhijrgCIgIAAQjkAAilBcg");
	this.shape_946.setTransform(792.3,787.6);

	this.shape_947 = new cjs.Shape();
	this.shape_947.graphics.f("#F7F7F7").s().p("AgHFIQjqgDikhhQhIgrgpg3Qgog1gGg6QgHhFAqhCQAthEBagzQCoheDqACQDqADCjBhQBWA0ApBCQAoBAgIBDQgGA8grA2QgsA5hNArQikBcjkAAIgJAAgAmEjhQhZAygsBDQgqBBAIBEIADAWQAEAOAFAPQALAaAPAVIAMARQAOARAOANQAeAdAjAVQAkAXAkAQQAlARAqAMQBQAZBYAIQAxAFAlAAIAqgBIArgCIAqgEIAYgDQAegFAcgGQAsgKAigMQBHgXBBgpQAbgRAdgZQAXgVATgaQAMgQAHgOQAHgMAEgMQAEgKADgMIAFgaQAHhCgng/QgohChVgyQihhgjmgDIgJAAQjgAAijBbg");
	this.shape_947.setTransform(792.4,775.7);

	this.shape_948 = new cjs.Shape();
	this.shape_948.graphics.f("#54381E").s().p("AgGEcQjMgCiNhVQiOhUADh1QADh2CShSQCShSDKACQDLACCOBVQCOBVgDB1QgCB2iTBSQiNBQjEAAIgLgBg");
	this.shape_948.setTransform(792.3,782.3);

	this.shape_949 = new cjs.Shape();
	this.shape_949.graphics.f("#7E542D").s().p("AgGE0QjdgCiZhcQiahcADh+QADiACehYQCehaDbADQDcACCbBcQCZBcgDB/QgEB/idBZQiaBWjVAAIgKAAg");
	this.shape_949.setTransform(792.4,780.9);

	this.shape_950 = new cjs.Shape();
	this.shape_950.graphics.f("#F7F7F7").s().p("AgHFCQjmgDighgQighgADiEQADiFClhdQClhcDlACQDmACCgBgQCgBggDCEQgDCGilBcQihBbjgAAIgJAAg");
	this.shape_950.setTransform(792.3,778.2);

	this.shape_951 = new cjs.Shape();
	this.shape_951.graphics.f("#F7F7F7").s().p("AILA1QgphAhUgyQighgjmgDQjlgCilBdQhZAygsBCQgnA8AEBAIgBgIQgHhFAqhBQArhCBagzQClhdDmADQDnACChBgQBUAzApBAQAnBAgIBDIgCANQAGhBglg9g");
	this.shape_951.setTransform(792.3,762);

	this.shape_952 = new cjs.Shape();
	this.shape_952.graphics.f("#C5C5C5").s().p("AgtEYQgCgHADgJQAahKAZhTQA0imAGg4QAHhGgVghQgQgcgdAFQgFABgFADQgSAMgMASQgOAUgJAVQgIATAAAJQgBAUgQAJQgHAEgFgDQgFgCAAgJQAAgTANgfQANgfAUgbQAUgeAdgTQAJgGALgCQAngHAXAiQAcAogIBYQgGA7g0CoQghBqgVA9QgEALgLAIQgEACgEAAQgGAAgCgGg");
	this.shape_952.setTransform(844.7,764.8);

	this.shape_953 = new cjs.Shape();
	this.shape_953.graphics.f("#F2F2F2").s().p("AhiBKQgFgEAAgHQAAgTANgfQANgeAUgbQAUgeAdgTQAJgGAMgCQAWgEATAKIAyAeQgUgLgVAEQgMACgKAGQgdATgTAeQgUAagNAfQgNAfAAAUQgBAGAGAEg");
	this.shape_953.setTransform(840,743.6);

	this.shape_954 = new cjs.Shape();
	this.shape_954.graphics.f("#6E6E6E").s().p("AhMD2QgIgEAFgQQAahKAahUQA0ilAFg4QAJhhgngZIAxAdQASALAIAcQAKAggFAzQgFA4g1CmQgtCTgGAKQgGAPAJAFg");
	this.shape_954.setTransform(843.1,765.8);

	this.shape_955 = new cjs.Shape();
	this.shape_955.graphics.f("#E0E0E0").s().p("Aj0CPQhmg8AAhTQgBhTBmg7QBlg6CPAAQCQAABmA7QBmA7ABBSQAABThmA8QhlA6iQABQiPgBhmg6g");
	this.shape_955.setTransform(791.9,818.7);

	this.shape_956 = new cjs.Shape();
	this.shape_956.graphics.f("#A6A6A6").s().p("AhKDAIgegDQgvgDgxgKQgpgIgzgPQgsgNgsgUQgtgSgmgXQgagRgJgGQgdgVgfgbQgdgbgWgeQgLgPgLgTQgNgbgKgeQgGgQgCgVIgCgRQAGBFAuA/QAxBCBWAzQDBBzETADQEUADDFhvQBdg0A0hCQAwg/AIhGIgBAGQgCASgGAXQgJAdgOAcQgKATgMAQQgRAWgJAKIgZAZQgUATgOALIghAYQgfATgKAGQgsAYgpAQQgsARguANQg2ANgmAIQg3AJgqACQgmAEg6AAQgfgBgjgCg");
	this.shape_956.setTransform(791.9,831.1);

	this.shape_957 = new cjs.Shape();
	this.shape_957.graphics.f("#F7F7F7").s().p("AgJGCQkTgDjBhzQjAhzAEifQAEigDGhvQDGhuETADQETADDBByQDABzgECfQgECgjGBvQjBBskMAAIgMAAgAnFkPQjCBsgECdQgDCbC7BxQC8BwEPADQENADDChtQDChtAEicQADici8hwQi9hxkOgCIgLgBQkGAAi9Brg");
	this.shape_957.setTransform(791.9,809.8);

	this.shape_958 = new cjs.Shape();
	this.shape_958.graphics.f("#A6A6A6").s().p("AgDF6QkKgCi9htIgJgFQi8hwAEicQAEidDBhsQDChtENADQEPADC8BwQC8BxgECbQgECdjBBtQi9BqkGAAIgHAAgAnAkLQjABsgECbQgECZC6BvIAtAYQAeAPANAFQAeAMA2ASQATAGAeAHQAvALAwAHIAyAFQBCAFAfAAQB8AAB2gcQAogIAygRIAtgRQAggPAogUQC/hsAEiaQAEiai6hvQi7hwkLgCIgNAAQkCAAi6Bog");
	this.shape_958.setTransform(791.9,809.8);

	this.shape_959 = new cjs.Shape();
	this.shape_959.graphics.f("#EDEDED").s().p("AgxF4IgwgDQgegDgZgEQgrgFgygNQgogJgxgRIhSgjQgSgJgYgOQgYgPgkgaIgbgYQgagYgUgcQgbgjgPgsQgGgTgCgQQgCgRgBgVQAAhKAxhEQAzhHBfg2QDAhrEKADQELACC6BwQBbA2AvBEQAtBDAABIIgBAVQgEAZgFASIgHAXIgRAjQgGALgJAMQgKAOgPASQgVAXgZAVQgSAPgUANQgTANgWAMQgUAMgQAHQghAQgtAQQgvARgsAKQhfAWhiADQgUACgZAAIg0gCg");
	this.shape_959.setTransform(791.9,810.3);

	this.shape_960 = new cjs.Shape();
	this.shape_960.graphics.f("#DCDCDC").s().p("AgEDoQimgCh0hFQh0hFADhfQAChgB3hDQB3hCClABQCmACBzBFQB0BFgDBfQgCBgh3BDQhzBBigAAIgIAAg");
	this.shape_960.setTransform(791.9,820.4);

	this.shape_961 = new cjs.Shape();
	this.shape_961.graphics.f("#E0E0E0").s().p("An6EnQjUh6gBitQgBisDSh6QDSh6ErAAQEpAADTB6QDUB6ABCsQABCtjSB6QjSB6kqAAQkqAAjTh6g");
	this.shape_961.setTransform(790.7,823.1);

	this.shape_962 = new cjs.Shape();
	this.shape_962.graphics.f("#C2C2C2").s().p("ABUAsQgagPgxgYIhEghIgvgcIgNgIQgHgFABgCQAAAAAAAAQAAAAABAAQAAAAABAAQABAAABAAQAFAAAFADIATANIAcARIAOAIIA8AeQArAUAXAOQAbANAWAYIABABQgRgOgZgOg");
	this.shape_962.setTransform(127.7,594.1);

	this.shape_963 = new cjs.Shape();
	this.shape_963.graphics.f("#D1D1D1").s().p("ABSA4QgXgNgrgdIg8gnIgOgJIgcgPQgRgHgMgKQgEgDgCgDQAAgBAAAAQAAgBAAAAQAAAAAAAAQABAAAAAAIAXAOIAhASIARAKIBJAvQAzAiAcAQIARAKQgTgHgVgMg");
	this.shape_963.setTransform(127.2,596);

	this.shape_964 = new cjs.Shape();
	this.shape_964.graphics.f("#D1D1D1").s().p("ABPBCQgYgOgqgcIg8gnIg9ghQgMgGgIgLQgDgFAAgHQAAgHADgBQAKgBAKAGIATANIAbARIAPAIIA8AeQArAUAXAOQAbANAWAYQAEAGAAAKQAAAKgEABIgCAAQgNAAgigUg");
	this.shape_964.setTransform(127.5,595.3);

	this.shape_965 = new cjs.Shape();
	this.shape_965.graphics.f("#E6E6E6").s().p("ABPBCQgYgOgqgcIg9gnIg9ghQgLgGgIgLQgDgFAAgHQAAgHADgBQALgBAIAGIAUANIAbARIAOAIIA9AeQAqAUAYANQAdAPAUAXQAEAGAAAKQAAAKgEABIgDAAQgMAAgigUg");
	this.shape_965.setTransform(127.7,595.9);

	this.shape_966 = new cjs.Shape();
	this.shape_966.graphics.f("#FFFFFF").s().p("AgrAbQgNgHACgPQACghAdgTQAMgIALAHIA3AtQgJgHgJAHQgWANgCAaQgBAMAKAFg");
	this.shape_966.setTransform(225,648.4);

	this.shape_967 = new cjs.Shape();
	this.shape_967.graphics.f("#FFFFFF").s().p("AgUBOIgJgHQgLgIgJgPIgHgPQgDgJgBgIQgBgLABgKIACgJIAFgPIAEgIIAJgLIANgNIAJgGIAKgFQAHgDAIgBQAIgBAIAAQAOAAAQAFIAIAEQgSgFgRALQgaARgQAbQgQAbgCAgQgCAXARAOg");
	this.shape_967.setTransform(119.6,588.1);

	this.shape_968 = new cjs.Shape();
	this.shape_968.graphics.f("#FFFFFF").s().p("AgQASQgHgBAAgLQABgRAQgKQAGgFAGAFIACACIABABIABABIACACIABABIACACIACACIABABIABABIACACIABABIACACQgFgEgFAEQgLAGgBANQAAAHAFACg");
	this.shape_968.setTransform(229.5,651);

	this.shape_969 = new cjs.Shape();
	this.shape_969.graphics.f("#6E6E6E").s().p("AgIAPQgFgBABgHQAAgNALgHQAEgEAFAEQADADABADQACADAAADIgBACQgBAFgDADQgEAFgFABIgEABIgEgBg");
	this.shape_969.setTransform(231,652);

	this.shape_970 = new cjs.Shape();
	this.shape_970.graphics.f("#525252").s().p("AEqDlIg8gZIktiPIg2geIjtiKQgTgNADgXQACgdAOgYQAPgZAYgPQARgMAUAJIEUCfQAhAUAaARIEDC5IA3AtQgJgGgJAGQgWAOgCAbQgCAKALAGg");
	this.shape_970.setTransform(193.5,629.3);

	this.shape_971 = new cjs.Shape();
	this.shape_971.graphics.f("#898989").s().p("AgQAdQgHgFAAgLQACgZAVgPQAKgFAHAEQAHAFAAALQgCAZgWAOQgFAEgFAAQgDAAgDgCgAAAgSQgOAKgBARQgBAJAFACQAFAEAGgFQAPgKACgRQAAgIgFgDIgEgBQgEAAgEACg");
	this.shape_971.setTransform(228.7,650.8);

	this.shape_972 = new cjs.Shape();
	this.shape_972.graphics.f("#FFFFFF").s().p("AgkBAQgIgGgEgJQgFgKACgLQABgcAPgYQAOgYAXgQQATgMATAJIAMAHQgUgJgRANQgXAPgPAZQgOAXgCAdQgDAWATANg");
	this.shape_972.setTransform(160.4,611.3);

	this.shape_973 = new cjs.Shape();
	this.shape_973.graphics.f("#525252").s().p("AghBCQgQgKAAgaQABgdAPgXQAOgZAYgPQASgNATAKIAIAEQgUgJgSANQgXAPgOAZQgPAXgBAdQgDAWASANg");
	this.shape_973.setTransform(159.4,610.7);

	this.shape_974 = new cjs.Shape();
	this.shape_974.graphics.f("#FFFFFF").s().p("AghBBQgSgNACgXQACgcAPgYQAOgZAXgPQAJgGAKgBQAKgBAJAFIAHAEQgSgHgRAMQgXAPgPAZQgOAXgCAdQAAAaAQAKg");
	this.shape_974.setTransform(158.4,610.2);

	this.shape_975 = new cjs.Shape();
	this.shape_975.graphics.f("#525252").s().p("AAqB4QhYgrgvgcIg+gnQgVgNgIgHQgggXAAgBQgIgHgHgKIgIgOIgDgLIgDgSQgBgJABgHQABgIADgJIAHgOIAGgJQAFgGAHgHIAJgGIAOgHIALgEIAKgBQAWgDAUAIIBDAeQAfAPAgATQAvAbBRA4QBZA+AdARQgJgEgKABQgKABgIAFQgYAQgPAYQgOAZgCAdQgDAWATAOQgcgQhkgvg");
	this.shape_975.setTransform(138,598.5);

	this.shape_976 = new cjs.Shape();
	this.shape_976.graphics.f("#D9D9D9").s().p("AI4FYIgagKIgHAEQiThAjOhrQgvgZh5hGIixhoIgfgSQgegQhjgzQhbgvgvgbQg2gfg9gsQgUgPADgSQACgTAWgNQAagNAdgBQAdgBAbALQBFAgA9AjQAvAbBQA1QBWA5AeASIAeASIC0BnQB6BHAqAbQC3B3BvBWIgHAEIAQAPQAEADgBADQgBAEgEACQgGAEgHAAQgEAAgFgCg");
	this.shape_976.setTransform(171.6,624.4);

	this.shape_977 = new cjs.Shape();
	this.shape_977.graphics.f("#5E5E5E").s().p("AgKAPIgLgbIALgPIAVAMIALAcIgLAPg");
	this.shape_977.setTransform(175.6,465.5);

	this.shape_978 = new cjs.Shape();
	this.shape_978.graphics.f("#4CA0C1").s().p("AmUDfIMTnJIAXANIsUHIg");
	this.shape_978.setTransform(215.1,440.4);

	this.shape_979 = new cjs.Shape();
	this.shape_979.graphics.f("#5CC2EA").s().p("AmPDWIMUnIIALAdIsUHIg");
	this.shape_979.setTransform(216.7,442.5);

	this.shape_980 = new cjs.Shape();
	this.shape_980.graphics.f("#326B81").s().p("AmEDdIMUnIIgMAPIsTHIg");
	this.shape_980.setTransform(216.7,444.7);

	this.shape_981 = new cjs.Shape();
	this.shape_981.graphics.f("#5E5E5E").s().p("AAAAXQgSgMgBgVQABgKAFgDQAGgEAHAFQASALACAWQAAAJgGAEQgCABgDAAQgEAAgFgCg");
	this.shape_981.setTransform(254.2,419.6);

	this.shape_982 = new cjs.Shape();
	this.shape_982.graphics.f("#F2D49A").s().p("AgQAWQgCgVgTgKQgGgEgBgCIBIgYQAEgBAHAIQAHAHgCAEIghAeQgVAWgMAKQAGgIAAgLg");
	this.shape_982.setTransform(257.8,418.5);

	this.shape_983 = new cjs.Shape();
	this.shape_983.graphics.f("#737373").s().p("AgbABIA2gTIABADIgnAig");
	this.shape_983.setTransform(263.4,414.4);

	this.shape_984 = new cjs.Shape();
	this.shape_984.graphics.f("#D9D9D9").s().p("AnEEKIgLgcIALgQIMUnJIBHgYIA3gTIACADIgoAjIghAfQgXAWgKAIIAAABIsUHJg");
	this.shape_984.setTransform(221.2,441.8);

	this.instance_33 = new lib.Path_727();
	this.instance_33.parent = this;
	this.instance_33.setTransform(522.8,36.1,1,1,0,0,0,28.7,18.4);
	this.instance_33.alpha = 0.199;

	this.instance_34 = new lib.Path_728();
	this.instance_34.parent = this;
	this.instance_34.setTransform(587.9,67.5,1,1,0,0,0,26.4,22.1);
	this.instance_34.alpha = 0.199;

	this.shape_985 = new cjs.Shape();
	this.shape_985.graphics.f("#3B4040").s().p("AEkFoQh9g/hMh3QgggygNgbQgWgsgHgnIAAgBQAAgSgNgPQgNgSgXgBQgXgCgRAPIAAAAQghAWgwAMQgdAIg7AKQiLAXiDg0QgpgQgggcQgjgfgSglQgTgnABgxQABguASgrQAFgMgEgNQgEgNgNgGIAYgyQA6AABKgCQBugKCTA/QAmAQBEA0QAiAaAaAWIAHAIQASATAeARQANAIAoAUQAsASANAEQAhALAaABIAHAAQBpAABgAtQCQBEBCBWQAuA3ApAtIgVAzQgIgDgJABQgTACgIASQgTAqgiAfQgiAfgsAPQgZAJgdAAQgzAAg/gbgAB1hPQgiAJgTAUQgSAUgBAbQgCAoAYAyQANAeAjA0QA6BWBVA1QAkAXArAPQAaAJAeADQAiADAVgIQBaggAchRQAKgdgDgjQgDglgQgYQgdguhNg0Qgzghg1gXQhkgrhSAAQgXAAgWADgAn5lmQgcAFgeAXQgcAVgPAbQgpBJAkBZQAJAVAZAXQAVAVAZANQAnAWAqAMQBiAbBkgPQBBgJAegJQA0gPAegdQATgTACgaQADgcgQgfQg6hXh8g4Qg2gXg6gQQhDgQguAAQgRAAgOACg");
	this.shape_985.setTransform(557,53.7);

	this.shape_986 = new cjs.Shape();
	this.shape_986.graphics.f("#2C2E2E").s().p("AIfCNIuJkHQgJgCgHAFIieB3QgJAGgLgEQgGgDgDgFQgEgHACgIQACgHAHgFICuhoQAHgGAJADIOaDzQAIACAEAHQAEAHgCAIQgCAIgHAFQgFACgFAAIgGgBg");
	this.shape_986.setTransform(566.2,63);

	this.shape_987 = new cjs.Shape();
	this.shape_987.graphics.f("#2C2E2E").s().p("AGaF8QgKgFgCgKIgQjGQgBgIgIgGIshnxQgHgFgBgIQgCgIAEgHQAFgHAIgCQAIgBAHAEIMdILQAIAGAAAIIAnDIQABAIgEAGQgFAHgHACIgFAAQgEAAgEgCg");
	this.shape_987.setTransform(535.8,54.3);

	this.instance_35 = new lib.Path();
	this.instance_35.parent = this;
	this.instance_35.setTransform(520.7,40,1,1,0,0,0,29.6,17.2);
	this.instance_35.alpha = 0.199;

	this.instance_36 = new lib.Path_1();
	this.instance_36.parent = this;
	this.instance_36.setTransform(587.6,69.2,1,1,0,0,0,27.2,20.6);
	this.instance_36.alpha = 0.199;

	this.shape_988 = new cjs.Shape();
	this.shape_988.graphics.f("#CCCCCC").s().p("AGCFmQgpgFgtgRQiHhAhIhqQghgvgNgZQgXgqgGgkIAAgBQgCgOgJgLQgIgMgOgGQgfgLgcASIgBAAQghAUgyAMQgeAHg8AJQiNAViJgwQgpgPgigaQgkgdgTgiQgUglACguQABgrATgnQAIgRgMgOIgNgKIAZgvQBLAAA9gCQBvgJCZA6QAnAQBGAwQAjAZAbAVIACACIAEAFQAUARAeAQIA3AaIA6AVQAjAKAaABIAHAAQBtAABiAqQCVBABEBQQAdAfA8A9IgWAxQgIgCgJAAQgUACgIARQgSAmgkAeQglAegrANQgZAIgeAAQgQAAgRgDgAB4hKQgjAIgTATQgTARgBAaQgCAlAYAvQAPAcAkAwQA6BQBYAyQAlAWAsAOQAbAIAfADQAjADAWgHQBdgfAdhKQAKgbgDggQgDgjgQgWQgegqhQgyQg0gfg3gWQhpgohUAAQgXAAgWADgAoIlNQgdAEgfAVQgdAUgPAZQgqBFAlBSQAIATAaAWQAWASAaAOQArAWAoAJQBmAZBngNQBEgJAdgIQA2gOAegbQAUgSACgZQADgagQgcQg7hRiBg0Qg4gXg7gNQhCgPgwAAQgSAAgQACg");
	this.shape_988.setTransform(555.9,56.4);

	this.shape_989 = new cjs.Shape();
	this.shape_989.graphics.f("#CCCCCC").s().p("AIwCDIukj1QgKgCgHAFIiiBvQgKAFgKgEQgHgBgEgGIAAAAQgEgHACgHQADgHAGgEIC0hhQAIgFAJACIO1DiIABABQAHACAEAGQAEAHgCAHQgDAIgHAEQgFACgEAAIgGgBg");
	this.shape_989.setTransform(565.2,65);

	this.shape_990 = new cjs.Shape();
	this.shape_990.graphics.f("#CCCCCC").s().p("AGmFjQgKgEgCgLIgQi4QgCgJgHgEIs5nQQgHgDgCgHQgCgHADgGIABgCQAGgHAIgCQAIgBAHAEIM0HnQAIAEABAJIAoC6QABAIgEAGQgFAGgIACIgFAAIgIgBg");
	this.shape_990.setTransform(534,56.8);

	this.shape_991 = new cjs.Shape();
	this.shape_991.graphics.f("#A3A3A3").s().p("AAUBFIgFgBQgFgBgKgFIgNgKIgKgKQgbgfgCgpQgBgRAJgKQAHgKANgBIAKABQAJADAGAEQAkAYAMAoIABAEQAEANAAAKIAAAFIgBACQgBAJgFAKIgFAFQgIAHgKAAIgEAAgAgag5QgPALACASQABAYAMAUQAMAVATAMQAPAMARgIIADgDIAGgHIACgGIABgHQABgIgCgKIgGgRIgJgSQgEgIgIgIIgHgGIgOgKIgDgCIgGgBIgJgBIgDAAg");
	this.shape_991.setTransform(421.4,248.6);

	this.shape_992 = new cjs.Shape();
	this.shape_992.graphics.f("#F2F2F2").s().p("AASBOIgKgDIgJgFIgKgHIgJgIIgNgOQgDgCgEgIIgHgLIgHgRIgGgXIAAgWIACgKQACgHAEgGIAGgGIAEgDQASgKAYAPQAbARARAcQAQAbABAgQAAAdgRAKIgDACIgFABIgJACgAgpg+QgPAJAAAaQABAbAOAYQAOAYAXAPIABAAQAVANAPgJQAQgJAAgZQgCgcgOgXQgOgYgWgPQgOgIgKAAQgIAAgGADg");
	this.shape_992.setTransform(421.9,248.3);

	this.shape_993 = new cjs.Shape();
	this.shape_993.graphics.f("#523E36").s().p("AABA1QgUgNgMgVQgMgUgCgZQgBgTAPgLIADgBIADgBIACAAIAJAAIAKAEIAHAEIAOAMQAHAIAFAJQAGAIAEAKQAEAJACAJQACAIgBAKIgBAHIgDAGIgDAFIgCADIgDACQgIAEgHAAQgJAAgJgHg");
	this.shape_993.setTransform(421.8,248.3);

	this.shape_994 = new cjs.Shape();
	this.shape_994.graphics.f("#FBD6C6").s().p("AgREPIhypIICVAqIByJJg");
	this.shape_994.setTransform(407.7,176.6);

	this.instance_37 = new lib.ClipGroup();
	this.instance_37.parent = this;
	this.instance_37.setTransform(463.6,178.4,1,1,0,0,0,61,90.5);

	this.shape_995 = new cjs.Shape();
	this.shape_995.graphics.f("#D86635").s().p("ACbKwIiGgnQgRgFgBgKIj80sQACAKARAFICFAnQAZAFAXgEQAZgEAXgNID7UtQgWANgZADQgLACgLAAQgNAAgNgDg");
	this.shape_995.setTransform(414.9,201.6);

	this.shape_996 = new cjs.Shape();
	this.shape_996.graphics.f("#F89C77").s().p("AlwESIiFgnQgUgGABgMQABgNAUgLINDnRQAJgFALACQAEABAAADQAAADgEACItDHRQgMAHAAAGQAAAHALADICFAnQAMADAPgCQAOgDAMgGIMWnfQAKgFALACQAEABABADQAAADgFACIsWHeQgVANgaAEQgLACgKAAQgOAAgNgDg");
	this.shape_996.setTransform(442,110.5);

	this.shape_997 = new cjs.Shape();
	this.shape_997.graphics.f("#F6743E").s().p("AoLmjIMWnfQAEgDAAgDID9UsQABADgFADIsWHfg");
	this.shape_997.setTransform(467,178.4);

	this.shape_998 = new cjs.Shape();
	this.shape_998.graphics.f("#FFFFFF").s().p("AnSCNIMonLIB9B0IsVIIg");
	this.shape_998.setTransform(442.8,124);

	this.shape_999 = new cjs.Shape();
	this.shape_999.graphics.f("#B8552E").s().p("AoomiIAAgCQABgGAMgHINCnSQAFgDAAgDID8UsQABADgFADItDHSQgMAHAAAGIAAACg");
	this.shape_999.setTransform(448,173.8);

	this.shape_1000 = new cjs.Shape();
	this.shape_1000.graphics.f("#C9C9C9").s().p("AlukuIAAgEQACgNAVgKILGlNIgCNtQAAAEgEABIrOG7g");
	this.shape_1000.setTransform(426.5,162.9);

	this.shape_1001 = new cjs.Shape();
	this.shape_1001.graphics.f("#A3A3A3").s().p("AAUBFIgEgBQgGgBgKgFIgMgKIgKgKQgcgfgDgpQABgRAHgKQAIgKAMgBIAKABQAKADAFAEQAmAYAMAoIAAAEQADANAAAJIAAAGIAAACQAAAJgHAKIgDAFQgJAHgKAAIgEAAgAgag5QgPALACASQABAYAMAUQAMAVATAMQAPAMARgIIAEgDIAEgHIADgGIABgHQAAgIgBgKIgFgRIgKgSQgEgIgIgIIgHgGIgOgKIgJgEIgJAAIgCAAg");
	this.shape_1001.setTransform(367.8,210.9);

	this.shape_1002 = new cjs.Shape();
	this.shape_1002.graphics.f("#F2F2F2").s().p("AATBOIgKgDIgKgFIgKgGIgJgIIgNgPQgFgFgCgFIgJgQIgFgMQgDgGAAgFIgEgXIADgVQADgIAEgEIAGgHIADgCQASgLAZAPQAbASAQAbQAQAbACAgQAAAcgSALIgIAEIgIABIgJgBgAgog9QgQAJAAAZQACAbAOAZQAOAYAXAPQAVANAQgJQAPgJAAgZQgBgcgOgXQgOgYgXgQQgNgHgKAAQgIAAgGADg");
	this.shape_1002.setTransform(368.2,210.6);

	this.shape_1003 = new cjs.Shape();
	this.shape_1003.graphics.f("#523E36").s().p("AABA1QgUgNgMgVQgMgUgCgZQgBgTAPgLIADgBIADgBIACAAIAJAAIAKAEIAOAKIAHAHQAIAIAEAIQAHAKADAIQADAFADANQACAIgBAKIgBAHIgDAGQAAADgDACIgCADIgDACQgIADgHAAQgKAAgIgGg");
	this.shape_1003.setTransform(368.2,210.7);

	this.shape_1004 = new cjs.Shape();
	this.shape_1004.graphics.f("#FBD6C6").s().p("AhFDqIACoiICJBPIgCIig");
	this.shape_1004.setTransform(368.1,142.2);

	this.shape_1005 = new cjs.Shape();
	this.shape_1005.graphics.f("#D86635").s().p("AAcKPIiIhQQgSgIgCgUIADy8QABATATAJICIBPQAWAMAcAAQAaAAAWgNIgES9QgWAMgbAAQgZAAgXgLg");
	this.shape_1005.setTransform(371.1,168.2);

	this.shape_1006 = new cjs.Shape();
	this.shape_1006.graphics.f("#F89C77").s().p("AluEkIiJhPQgTgIgBgUQABgJAFgIQAGgHAJgEINDnKQALgFAKAFQAFADgBAEQAAADgEADItEHKQgKAFgBALQAAAMALADICJBPQAOAHANAAQAOAAANgHIMVnlQALgFAKAFQAFADAAADQAAADgEADIsVHlQgXAMgaABQgZAAgXgNg");
	this.shape_1006.setTransform(411,83);

	this.shape_1007 = new cjs.Shape();
	this.shape_1007.graphics.f("#F6743E").s().p("AmKloIMVnmQADgBAAgFIgDS9QAAAEgDACIsVHmg");
	this.shape_1007.setTransform(423.5,148.3);

	this.shape_1008 = new cjs.Shape();
	this.shape_1008.graphics.f("#FFFFFF").s().p("AnSB9IL+mrICnBUIsVIJg");
	this.shape_1008.setTransform(411.1,96.8);

	this.shape_1009 = new cjs.Shape();
	this.shape_1009.graphics.f("#B8552E").s().p("AmnltQABgLAKgFINEnMQAEgBAAgEIgDS8QgBAEgDACItEHMQgLAEgBALg");
	this.shape_1009.setTransform(404,138.2);

	this.shape_1010 = new cjs.Shape();
	this.shape_1010.graphics.f("#A3A3A3").s().p("AAVBFIgFgBQgKgDgGgEQgHgFgFgFIgKgKQgcgegCgpQAAgRAIgKQAHgKANgBIAKABQAHACAIAFQAkAXANApIABADQACANAAAKIAAAHQgBAMgFAHIgEAFQgIAIgMAAIgCAAgAgXg6IgDABQgQALADASQABAYAMAUQAMAUATANQAOAMASgJIADgCIACgCIADgFIADgGIABgIQAAgHgBgKIgGgSIgJgRQgFgIgHgIIgOgMIgKgGIgGgCIgJAAIgDAAg");
	this.shape_1010.setTransform(335.9,196.3);

	this.shape_1011 = new cjs.Shape();
	this.shape_1011.graphics.f("#F2F2F2").s().p("AATBOIgKgDIgKgFIgKgHIgJgIIgIgJIgFgFQgEgEgDgGIgJgRIgFgLIgDgLIgDgMIgBgLIADgVQADgHAEgGIADgEIAGgEQATgLAYAPQAbARAQAcQAQAbACAgQAAAcgSALIgDACIgFABIgIABIgDABIgGgBgAgog9QgPAJAAAZQABAbAOAYQAOAYAYAQQAUAMAQgJQAPgJABgYQgCgcgOgYQgOgYgWgPQgNgHgLAAQgHAAgHADg");
	this.shape_1011.setTransform(336.3,196);

	this.shape_1012 = new cjs.Shape();
	this.shape_1012.graphics.f("#523E36").s().p("AABA1QgUgNgMgWQgMgUgCgYQgBgTAPgLIADgCIADAAIACAAQAFgBAEABIAGACIALAGIAOAMIAMAQQAHAKADAJQAEAHACALQACAIgBAJIgBAIIgDAGIgDAFIgCADIgDACQgIADgGAAQgKAAgJgGg");
	this.shape_1012.setTransform(336.3,196);

	this.shape_1013 = new cjs.Shape();
	this.shape_1013.graphics.f("#FBD6C6").s().p("AhEDqIABoiICIBPIgCIig");
	this.shape_1013.setTransform(336.2,127.5);

	this.shape_1014 = new cjs.Shape();
	this.shape_1014.graphics.f("#D86635").s().p("AAdKPIiJhQQgIgDgFgIQgGgHgBgJIAEy9QABATATAJICIBPQAXANAagBQAaAAAWgNIgES9QgWAMgaAAQgaAAgWgLg");
	this.shape_1014.setTransform(339.1,153.5);

	this.shape_1015 = new cjs.Shape();
	this.shape_1015.graphics.f("#F89C77").s().p("AluElIiJhPQgTgIgBgVQACgUATgIINDnKQALgFAKAFQAEADAAADQAAAEgEACItEHLQgKAFgBAKQABAMAKAEICJBQQANAHAOgBQAOABANgIIMVnlQAKgFAMAFQAEACAAAEQAAAEgEACIsVHlQgWAMgaAAQgaAAgXgLg");
	this.shape_1015.setTransform(379,68.3);

	this.shape_1016 = new cjs.Shape();
	this.shape_1016.graphics.f("#F6743E").s().p("AmKloIMVnmQAEgCAAgEIgES9QAAAEgEACIsVHmg");
	this.shape_1016.setTransform(391.6,133.6);

	this.shape_1017 = new cjs.Shape();
	this.shape_1017.graphics.f("#FFFFFF").s().p("AnSB9IL+mrICnBVIsWIIg");
	this.shape_1017.setTransform(381.3,80.3);

	this.shape_1018 = new cjs.Shape();
	this.shape_1018.graphics.f("#B8552E").s().p("AmoluQABgKALgFINDnLQAFgCAAgEIgDS8QAAAEgFACItDHLQgLAFgBALg");
	this.shape_1018.setTransform(372.1,123.5);

	this.shape_1019 = new cjs.Shape();
	this.shape_1019.graphics.f("#DCDCDC").s().p("AjghuIDiiMIDfFpIjhCMg");
	this.shape_1019.setTransform(412.2,241.1);

	this.shape_1020 = new cjs.Shape();
	this.shape_1020.graphics.f("#DCDCDC").s().p("AmVE8IiJhQQglgUAAgfQABgeAmgVINDnKQAXgLAaAAQAZAAAYAMICmBgQAUALAAARQABAQgUAMIsXHnQgoAVgtgBIgGAAQgsAAgngUg");
	this.shape_1020.setTransform(410.8,205);

	this.shape_1021 = new cjs.Shape();
	this.shape_1021.graphics.f("#DCDCDC").s().p("AmVE8IiJhQQglgVABgeQAAgdAmgWINDnKQAXgLAaAAQAaAAAXAMICmBgQAUALABARQAAAQgUAMIsXHnQgoAVgtgBIgHAAQgsAAgmgUg");
	this.shape_1021.setTransform(381.3,192);

	this.shape_1022 = new cjs.Shape();
	this.shape_1022.graphics.f("#DCDCDC").s().p("Al+EjIhMgUQgygOgXgJQgMgFgIgLQgIgLAAgNQAAgYAegQINDnKQAegPAdAPIC2A0QAMAIAAAKQABAKgMAHIsVHlQggASgkgBIgKAAQggAAgfgIg");
	this.shape_1022.setTransform(467.7,244.1);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1022},{t:this.shape_1021},{t:this.shape_1020},{t:this.shape_1019},{t:this.shape_1018},{t:this.shape_1017},{t:this.shape_1016},{t:this.shape_1015},{t:this.shape_1014},{t:this.shape_1013},{t:this.shape_1012},{t:this.shape_1011},{t:this.shape_1010},{t:this.shape_1009},{t:this.shape_1008},{t:this.shape_1007},{t:this.shape_1006},{t:this.shape_1005},{t:this.shape_1004},{t:this.shape_1003},{t:this.shape_1002},{t:this.shape_1001},{t:this.shape_1000},{t:this.shape_999},{t:this.shape_998},{t:this.shape_997},{t:this.shape_996},{t:this.shape_995},{t:this.instance_37},{t:this.shape_994},{t:this.shape_993},{t:this.shape_992},{t:this.shape_991},{t:this.shape_990},{t:this.shape_989},{t:this.shape_988},{t:this.instance_36},{t:this.instance_35},{t:this.shape_987},{t:this.shape_986},{t:this.shape_985},{t:this.instance_34},{t:this.instance_33},{t:this.shape_984},{t:this.shape_983},{t:this.shape_982},{t:this.shape_981},{t:this.shape_980},{t:this.shape_979},{t:this.shape_978},{t:this.shape_977},{t:this.shape_976},{t:this.shape_975},{t:this.shape_974},{t:this.shape_973},{t:this.shape_972},{t:this.shape_971},{t:this.shape_970},{t:this.shape_969},{t:this.shape_968},{t:this.shape_967},{t:this.shape_966},{t:this.shape_965},{t:this.shape_964},{t:this.shape_963},{t:this.shape_962},{t:this.shape_961},{t:this.shape_960},{t:this.shape_959},{t:this.shape_958},{t:this.shape_957},{t:this.shape_956},{t:this.shape_955},{t:this.shape_954},{t:this.shape_953},{t:this.shape_952},{t:this.shape_951},{t:this.shape_950},{t:this.shape_949},{t:this.shape_948},{t:this.shape_947},{t:this.shape_946},{t:this.shape_945},{t:this.shape_944},{t:this.shape_943},{t:this.shape_942},{t:this.shape_941},{t:this.shape_940},{t:this.shape_939},{t:this.shape_938},{t:this.shape_937},{t:this.shape_936},{t:this.shape_935},{t:this.shape_934},{t:this.shape_933},{t:this.shape_932},{t:this.shape_931},{t:this.shape_930},{t:this.shape_929},{t:this.shape_928},{t:this.shape_927},{t:this.shape_926},{t:this.shape_925},{t:this.shape_924},{t:this.shape_923},{t:this.shape_922},{t:this.shape_921},{t:this.shape_920},{t:this.shape_919},{t:this.shape_918},{t:this.shape_917},{t:this.shape_916},{t:this.shape_915},{t:this.shape_914},{t:this.shape_913},{t:this.shape_912},{t:this.shape_911},{t:this.shape_910},{t:this.shape_909},{t:this.shape_908},{t:this.shape_907},{t:this.shape_906},{t:this.shape_905},{t:this.shape_904},{t:this.shape_903},{t:this.shape_902},{t:this.shape_901},{t:this.shape_900},{t:this.shape_899},{t:this.shape_898},{t:this.shape_897},{t:this.shape_896},{t:this.shape_895},{t:this.shape_894},{t:this.shape_893},{t:this.shape_892},{t:this.shape_891},{t:this.shape_890},{t:this.shape_889},{t:this.shape_888},{t:this.shape_887},{t:this.shape_886},{t:this.shape_885},{t:this.shape_884},{t:this.shape_883},{t:this.shape_882},{t:this.shape_881},{t:this.shape_880},{t:this.shape_879},{t:this.shape_878},{t:this.shape_877},{t:this.shape_876},{t:this.shape_875},{t:this.shape_874},{t:this.shape_873},{t:this.shape_872},{t:this.shape_871},{t:this.shape_870},{t:this.shape_869},{t:this.shape_868},{t:this.shape_867},{t:this.shape_866},{t:this.shape_865},{t:this.shape_864},{t:this.shape_863},{t:this.shape_862},{t:this.shape_861},{t:this.shape_860},{t:this.shape_859},{t:this.shape_858},{t:this.shape_857},{t:this.shape_856},{t:this.shape_855},{t:this.shape_854},{t:this.shape_853},{t:this.shape_852},{t:this.shape_851},{t:this.shape_850},{t:this.shape_849},{t:this.shape_848},{t:this.shape_847},{t:this.shape_846},{t:this.shape_845},{t:this.shape_844},{t:this.shape_843},{t:this.shape_842},{t:this.shape_841},{t:this.shape_840},{t:this.shape_839},{t:this.shape_838},{t:this.shape_837},{t:this.shape_836},{t:this.shape_835},{t:this.shape_834},{t:this.shape_833},{t:this.shape_832},{t:this.shape_831},{t:this.shape_830},{t:this.shape_829},{t:this.shape_828},{t:this.shape_827},{t:this.shape_826},{t:this.shape_825},{t:this.shape_824},{t:this.shape_823},{t:this.shape_822},{t:this.shape_821},{t:this.instance_32},{t:this.shape_820},{t:this.shape_819},{t:this.shape_818},{t:this.shape_817},{t:this.shape_816},{t:this.shape_815},{t:this.shape_814},{t:this.shape_813},{t:this.shape_812},{t:this.shape_811},{t:this.shape_810},{t:this.shape_809},{t:this.shape_808},{t:this.shape_807},{t:this.shape_806},{t:this.shape_805},{t:this.shape_804},{t:this.shape_803},{t:this.shape_802},{t:this.shape_801},{t:this.shape_800},{t:this.shape_799},{t:this.shape_798},{t:this.shape_797},{t:this.shape_796},{t:this.shape_795},{t:this.shape_794},{t:this.shape_793},{t:this.shape_792},{t:this.shape_791},{t:this.shape_790},{t:this.shape_789},{t:this.shape_788},{t:this.shape_787},{t:this.shape_786},{t:this.shape_785},{t:this.shape_784},{t:this.shape_783},{t:this.shape_782},{t:this.shape_781},{t:this.shape_780},{t:this.shape_779},{t:this.shape_778},{t:this.shape_777},{t:this.shape_776},{t:this.shape_775},{t:this.shape_774},{t:this.shape_773},{t:this.shape_772},{t:this.shape_771},{t:this.shape_770},{t:this.shape_769},{t:this.shape_768},{t:this.shape_767},{t:this.shape_766},{t:this.shape_765},{t:this.shape_764},{t:this.shape_763},{t:this.shape_762},{t:this.shape_761},{t:this.shape_760},{t:this.shape_759},{t:this.shape_758},{t:this.shape_757},{t:this.shape_756},{t:this.shape_755},{t:this.shape_754},{t:this.shape_753},{t:this.shape_752},{t:this.shape_751},{t:this.shape_750},{t:this.shape_749},{t:this.shape_748},{t:this.shape_747},{t:this.shape_746},{t:this.shape_745},{t:this.shape_744},{t:this.shape_743},{t:this.shape_742},{t:this.shape_741},{t:this.shape_740},{t:this.shape_739},{t:this.shape_738},{t:this.shape_737},{t:this.shape_736},{t:this.shape_735},{t:this.shape_734},{t:this.shape_733},{t:this.shape_732},{t:this.shape_731},{t:this.shape_730},{t:this.shape_729},{t:this.shape_728},{t:this.shape_727},{t:this.shape_726},{t:this.shape_725},{t:this.shape_724},{t:this.shape_723},{t:this.shape_722},{t:this.shape_721},{t:this.shape_720},{t:this.shape_719},{t:this.shape_718},{t:this.shape_717},{t:this.shape_716},{t:this.shape_715},{t:this.shape_714},{t:this.shape_713},{t:this.shape_712},{t:this.shape_711},{t:this.shape_710},{t:this.shape_709},{t:this.shape_708},{t:this.shape_707},{t:this.shape_706},{t:this.shape_705},{t:this.shape_704},{t:this.shape_703},{t:this.shape_702},{t:this.shape_701},{t:this.shape_700},{t:this.shape_699},{t:this.shape_698},{t:this.shape_697},{t:this.shape_696},{t:this.shape_695},{t:this.shape_694},{t:this.shape_693},{t:this.shape_692},{t:this.shape_691},{t:this.shape_690},{t:this.shape_689},{t:this.shape_688},{t:this.shape_687},{t:this.shape_686},{t:this.shape_685},{t:this.shape_684},{t:this.shape_683},{t:this.shape_682},{t:this.shape_681},{t:this.shape_680},{t:this.shape_679},{t:this.shape_678},{t:this.shape_677},{t:this.shape_676},{t:this.shape_675},{t:this.shape_674},{t:this.shape_673},{t:this.shape_672},{t:this.shape_671},{t:this.shape_670},{t:this.shape_669},{t:this.shape_668},{t:this.shape_667},{t:this.shape_666},{t:this.shape_665},{t:this.shape_664},{t:this.shape_663},{t:this.shape_662},{t:this.shape_661},{t:this.shape_660},{t:this.shape_659},{t:this.shape_658},{t:this.shape_657},{t:this.shape_656},{t:this.shape_655},{t:this.shape_654},{t:this.shape_653},{t:this.instance_31},{t:this.shape_652},{t:this.shape_651},{t:this.shape_650},{t:this.shape_649},{t:this.shape_648},{t:this.shape_647},{t:this.shape_646},{t:this.shape_645},{t:this.shape_644},{t:this.instance_30},{t:this.shape_643},{t:this.shape_642},{t:this.shape_641},{t:this.shape_640},{t:this.shape_639},{t:this.shape_638},{t:this.shape_637},{t:this.shape_636},{t:this.shape_635},{t:this.shape_634},{t:this.shape_633},{t:this.instance_29},{t:this.shape_632},{t:this.shape_631},{t:this.shape_630},{t:this.shape_629},{t:this.shape_628},{t:this.shape_627},{t:this.shape_626},{t:this.shape_625},{t:this.shape_624},{t:this.shape_623},{t:this.shape_622},{t:this.shape_621},{t:this.shape_620},{t:this.shape_619},{t:this.shape_618},{t:this.instance_28},{t:this.shape_617},{t:this.shape_616},{t:this.shape_615},{t:this.shape_614},{t:this.shape_613},{t:this.shape_612},{t:this.shape_611},{t:this.shape_610},{t:this.shape_609},{t:this.shape_608},{t:this.shape_607},{t:this.shape_606},{t:this.shape_605},{t:this.shape_604},{t:this.shape_603},{t:this.shape_602},{t:this.shape_601},{t:this.shape_600},{t:this.shape_599},{t:this.shape_598},{t:this.shape_597},{t:this.shape_596},{t:this.shape_595},{t:this.shape_594},{t:this.shape_593},{t:this.shape_592},{t:this.shape_591},{t:this.shape_590},{t:this.shape_589},{t:this.shape_588},{t:this.shape_587},{t:this.shape_586},{t:this.shape_585},{t:this.shape_584},{t:this.shape_583},{t:this.shape_582},{t:this.shape_581},{t:this.shape_580},{t:this.shape_579},{t:this.shape_578},{t:this.shape_577},{t:this.shape_576},{t:this.shape_575},{t:this.shape_574},{t:this.shape_573},{t:this.shape_572},{t:this.shape_571},{t:this.shape_570},{t:this.shape_569},{t:this.shape_568},{t:this.shape_567},{t:this.shape_566},{t:this.shape_565},{t:this.shape_564},{t:this.shape_563},{t:this.shape_562},{t:this.shape_561},{t:this.shape_560},{t:this.shape_559},{t:this.shape_558},{t:this.shape_557},{t:this.shape_556},{t:this.shape_555},{t:this.shape_554},{t:this.shape_553},{t:this.shape_552},{t:this.shape_551},{t:this.shape_550},{t:this.shape_549},{t:this.shape_548},{t:this.shape_547},{t:this.shape_546},{t:this.shape_545},{t:this.shape_544},{t:this.shape_543},{t:this.shape_542},{t:this.shape_541},{t:this.shape_540},{t:this.shape_539},{t:this.shape_538},{t:this.shape_537},{t:this.shape_536},{t:this.shape_535},{t:this.shape_534},{t:this.shape_533},{t:this.shape_532},{t:this.shape_531},{t:this.shape_530},{t:this.shape_529},{t:this.shape_528},{t:this.shape_527},{t:this.shape_526},{t:this.shape_525},{t:this.shape_524},{t:this.shape_523},{t:this.shape_522},{t:this.shape_521},{t:this.shape_520},{t:this.shape_519},{t:this.shape_518},{t:this.shape_517},{t:this.shape_516},{t:this.shape_515},{t:this.shape_514},{t:this.shape_513},{t:this.shape_512},{t:this.shape_511},{t:this.shape_510},{t:this.shape_509},{t:this.shape_508},{t:this.shape_507},{t:this.shape_506},{t:this.shape_505},{t:this.shape_504},{t:this.shape_503},{t:this.shape_502},{t:this.shape_501},{t:this.shape_500},{t:this.shape_499},{t:this.shape_498},{t:this.shape_497},{t:this.shape_496},{t:this.shape_495},{t:this.shape_494},{t:this.shape_493},{t:this.shape_492},{t:this.shape_491},{t:this.shape_490},{t:this.shape_489},{t:this.shape_488},{t:this.shape_487},{t:this.shape_486},{t:this.shape_485},{t:this.shape_484},{t:this.shape_483},{t:this.shape_482},{t:this.shape_481},{t:this.shape_480},{t:this.shape_479},{t:this.shape_478},{t:this.shape_477},{t:this.shape_476},{t:this.shape_475},{t:this.shape_474},{t:this.shape_473},{t:this.shape_472},{t:this.shape_471},{t:this.shape_470},{t:this.shape_469},{t:this.shape_468},{t:this.shape_467},{t:this.shape_466},{t:this.shape_465},{t:this.shape_464},{t:this.shape_463},{t:this.shape_462},{t:this.shape_461},{t:this.shape_460},{t:this.shape_459},{t:this.shape_458},{t:this.shape_457},{t:this.shape_456},{t:this.shape_455},{t:this.shape_454},{t:this.shape_453},{t:this.shape_452},{t:this.shape_451},{t:this.shape_450},{t:this.shape_449},{t:this.shape_448},{t:this.shape_447},{t:this.shape_446},{t:this.shape_445},{t:this.shape_444},{t:this.shape_443},{t:this.shape_442},{t:this.shape_441},{t:this.shape_440},{t:this.shape_439},{t:this.shape_438},{t:this.shape_437},{t:this.shape_436},{t:this.shape_435},{t:this.shape_434},{t:this.shape_433},{t:this.shape_432},{t:this.shape_431},{t:this.shape_430},{t:this.shape_429},{t:this.shape_428},{t:this.shape_427},{t:this.shape_426},{t:this.shape_425},{t:this.shape_424},{t:this.shape_423},{t:this.shape_422},{t:this.shape_421},{t:this.shape_420},{t:this.shape_419},{t:this.shape_418},{t:this.shape_417},{t:this.shape_416},{t:this.shape_415},{t:this.shape_414},{t:this.shape_413},{t:this.shape_412},{t:this.shape_411},{t:this.shape_410},{t:this.shape_409},{t:this.shape_408},{t:this.shape_407},{t:this.shape_406},{t:this.shape_405},{t:this.shape_404},{t:this.shape_403},{t:this.shape_402},{t:this.shape_401},{t:this.shape_400},{t:this.shape_399},{t:this.shape_398},{t:this.shape_397},{t:this.shape_396},{t:this.shape_395},{t:this.shape_394},{t:this.shape_393},{t:this.shape_392},{t:this.shape_391},{t:this.shape_390},{t:this.shape_389},{t:this.shape_388},{t:this.shape_387},{t:this.shape_386},{t:this.shape_385},{t:this.shape_384},{t:this.shape_383},{t:this.shape_382},{t:this.shape_381},{t:this.shape_380},{t:this.shape_379},{t:this.shape_378},{t:this.shape_377},{t:this.shape_376},{t:this.shape_375},{t:this.shape_374},{t:this.shape_373},{t:this.shape_372},{t:this.shape_371},{t:this.shape_370},{t:this.instance_27},{t:this.shape_369},{t:this.shape_368},{t:this.shape_367},{t:this.shape_366},{t:this.shape_365},{t:this.shape_364},{t:this.shape_363},{t:this.shape_362},{t:this.shape_361},{t:this.shape_360},{t:this.shape_359},{t:this.shape_358},{t:this.shape_357},{t:this.shape_356},{t:this.shape_355},{t:this.shape_354},{t:this.shape_353},{t:this.shape_352},{t:this.shape_351},{t:this.shape_350},{t:this.shape_349},{t:this.shape_348},{t:this.shape_347},{t:this.shape_346},{t:this.shape_345},{t:this.shape_344},{t:this.shape_343},{t:this.instance_26},{t:this.shape_342},{t:this.shape_341},{t:this.shape_340},{t:this.shape_339},{t:this.shape_338},{t:this.shape_337},{t:this.shape_336},{t:this.instance_25},{t:this.shape_335},{t:this.shape_334},{t:this.shape_333},{t:this.shape_332},{t:this.shape_331},{t:this.shape_330},{t:this.shape_329},{t:this.instance_24},{t:this.shape_328},{t:this.shape_327},{t:this.shape_326},{t:this.shape_325},{t:this.shape_324},{t:this.shape_323},{t:this.shape_322},{t:this.instance_23},{t:this.shape_321},{t:this.shape_320},{t:this.shape_319},{t:this.shape_318},{t:this.shape_317},{t:this.shape_316},{t:this.shape_315},{t:this.instance_22},{t:this.shape_314},{t:this.shape_313},{t:this.shape_312},{t:this.shape_311},{t:this.shape_310},{t:this.shape_309},{t:this.shape_308},{t:this.instance_21},{t:this.shape_307},{t:this.shape_306},{t:this.shape_305},{t:this.shape_304},{t:this.shape_303},{t:this.shape_302},{t:this.shape_301},{t:this.instance_20},{t:this.shape_300},{t:this.shape_299},{t:this.shape_298},{t:this.shape_297},{t:this.shape_296},{t:this.shape_295},{t:this.shape_294},{t:this.instance_19},{t:this.shape_293},{t:this.shape_292},{t:this.shape_291},{t:this.shape_290},{t:this.shape_289},{t:this.shape_288},{t:this.shape_287},{t:this.instance_18},{t:this.shape_286},{t:this.shape_285},{t:this.shape_284},{t:this.shape_283},{t:this.shape_282},{t:this.shape_281},{t:this.shape_280},{t:this.instance_17},{t:this.shape_279},{t:this.shape_278},{t:this.shape_277},{t:this.shape_276},{t:this.shape_275},{t:this.shape_274},{t:this.shape_273},{t:this.instance_16},{t:this.shape_272},{t:this.shape_271},{t:this.shape_270},{t:this.shape_269},{t:this.shape_268},{t:this.shape_267},{t:this.shape_266},{t:this.instance_15},{t:this.shape_265},{t:this.shape_264},{t:this.shape_263},{t:this.shape_262},{t:this.shape_261},{t:this.shape_260},{t:this.shape_259},{t:this.instance_14},{t:this.shape_258},{t:this.shape_257},{t:this.shape_256},{t:this.shape_255},{t:this.shape_254},{t:this.shape_253},{t:this.shape_252},{t:this.instance_13},{t:this.shape_251},{t:this.shape_250},{t:this.shape_249},{t:this.shape_248},{t:this.shape_247},{t:this.shape_246},{t:this.shape_245},{t:this.shape_244},{t:this.shape_243},{t:this.shape_242},{t:this.shape_241},{t:this.shape_240},{t:this.shape_239},{t:this.shape_238},{t:this.shape_237},{t:this.shape_236},{t:this.shape_235},{t:this.shape_234},{t:this.shape_233},{t:this.shape_232},{t:this.shape_231},{t:this.shape_230},{t:this.shape_229},{t:this.shape_228},{t:this.shape_227},{t:this.shape_226},{t:this.shape_225},{t:this.shape_224},{t:this.shape_223},{t:this.shape_222},{t:this.shape_221},{t:this.shape_220},{t:this.shape_219},{t:this.shape_218},{t:this.shape_217},{t:this.shape_216},{t:this.shape_215},{t:this.shape_214},{t:this.shape_213},{t:this.shape_212},{t:this.shape_211},{t:this.shape_210},{t:this.shape_209},{t:this.shape_208},{t:this.shape_207},{t:this.shape_206},{t:this.shape_205},{t:this.shape_204},{t:this.shape_203},{t:this.shape_202},{t:this.shape_201},{t:this.shape_200},{t:this.shape_199},{t:this.shape_198},{t:this.shape_197},{t:this.shape_196},{t:this.shape_195},{t:this.shape_194},{t:this.shape_193},{t:this.shape_192},{t:this.shape_191},{t:this.shape_190},{t:this.shape_189},{t:this.shape_188},{t:this.shape_187},{t:this.shape_186},{t:this.shape_185},{t:this.shape_184},{t:this.shape_183},{t:this.shape_182},{t:this.shape_181},{t:this.shape_180},{t:this.shape_179},{t:this.shape_178},{t:this.shape_177},{t:this.shape_176},{t:this.shape_175},{t:this.shape_174},{t:this.shape_173},{t:this.shape_172},{t:this.shape_171},{t:this.shape_170},{t:this.shape_169},{t:this.shape_168},{t:this.shape_167},{t:this.shape_166},{t:this.shape_165},{t:this.shape_164},{t:this.shape_163},{t:this.shape_162},{t:this.shape_161},{t:this.shape_160},{t:this.shape_159},{t:this.shape_158},{t:this.shape_157},{t:this.shape_156},{t:this.shape_155},{t:this.shape_154},{t:this.shape_153},{t:this.shape_152},{t:this.shape_151},{t:this.shape_150},{t:this.shape_149},{t:this.shape_148},{t:this.shape_147},{t:this.shape_146},{t:this.shape_145},{t:this.shape_144},{t:this.shape_143},{t:this.shape_142},{t:this.shape_141},{t:this.shape_140},{t:this.shape_139},{t:this.shape_138},{t:this.shape_137},{t:this.shape_136},{t:this.shape_135},{t:this.shape_134},{t:this.shape_133},{t:this.shape_132},{t:this.shape_131},{t:this.shape_130},{t:this.shape_129},{t:this.shape_128},{t:this.shape_127},{t:this.shape_126},{t:this.shape_125},{t:this.instance_12},{t:this.shape_124},{t:this.shape_123},{t:this.shape_122},{t:this.shape_121},{t:this.shape_120},{t:this.shape_119},{t:this.shape_118},{t:this.shape_117},{t:this.shape_116},{t:this.shape_115},{t:this.shape_114},{t:this.shape_113},{t:this.instance_11},{t:this.instance_10},{t:this.shape_112},{t:this.shape_111},{t:this.shape_110},{t:this.shape_109},{t:this.shape_108},{t:this.shape_107},{t:this.shape_106},{t:this.shape_105},{t:this.shape_104},{t:this.shape_103},{t:this.shape_102},{t:this.shape_101},{t:this.shape_100},{t:this.shape_99},{t:this.shape_98},{t:this.shape_97},{t:this.shape_96},{t:this.shape_95},{t:this.shape_94},{t:this.shape_93},{t:this.shape_92},{t:this.shape_91},{t:this.shape_90},{t:this.shape_89},{t:this.shape_88},{t:this.shape_87},{t:this.shape_86},{t:this.instance_9},{t:this.shape_85},{t:this.shape_84},{t:this.shape_83},{t:this.shape_82},{t:this.shape_81},{t:this.shape_80},{t:this.shape_79},{t:this.shape_78},{t:this.shape_77},{t:this.shape_76},{t:this.shape_75},{t:this.shape_74},{t:this.shape_73},{t:this.shape_72},{t:this.shape_71},{t:this.shape_70},{t:this.shape_69},{t:this.shape_68},{t:this.shape_67},{t:this.shape_66},{t:this.shape_65},{t:this.shape_64},{t:this.shape_63},{t:this.shape_62},{t:this.shape_61},{t:this.shape_60},{t:this.shape_59},{t:this.shape_58},{t:this.shape_57},{t:this.shape_56},{t:this.shape_55},{t:this.shape_54},{t:this.shape_53},{t:this.shape_52},{t:this.shape_51},{t:this.shape_50},{t:this.shape_49},{t:this.shape_48},{t:this.shape_47},{t:this.shape_46},{t:this.shape_45},{t:this.shape_44},{t:this.shape_43},{t:this.shape_42},{t:this.shape_41},{t:this.shape_40},{t:this.shape_39},{t:this.shape_38},{t:this.shape_37},{t:this.shape_36},{t:this.shape_35},{t:this.shape_34},{t:this.shape_33},{t:this.shape_32},{t:this.shape_31},{t:this.shape_30},{t:this.shape_29},{t:this.shape_28},{t:this.shape_27},{t:this.shape_26},{t:this.shape_25},{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape},{t:this.instance_8},{t:this.instance_7}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(466.5,455.7,867.1,880.7);
// library properties:
lib.properties = {
	width: 900,
	height: 900,
	fps: 24,
	color: "#FFFFFF",
	opacity: 1.00,
	manifest: [],
	preloads: []
};




})(lib = lib||{}, images = images||{}, createjs = createjs||{}, ss = ss||{}, AdobeAn = AdobeAn||{});
var lib, images, createjs, ss, AdobeAn;