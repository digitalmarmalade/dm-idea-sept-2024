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


(lib.Tween8 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#95FFCB","#49BFF7"],[0,1],-0.3,0,0.4,0).s().p("AgDACQAAgDADgDIADAAIABACQAAAEgEACIgBABQgBAAAAAAQAAAAgBAAQAAgBAAAAQAAgBAAgBg");
	this.shape.setTransform(17.1,-14.6,1.609,1.609);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.lf(["#95FFCB","#49BFF7"],[0,1],-0.3,0,0.4,0).s().p("AgDACQAAgDADgDQAEgCAAAFQgBADgDADIgBAAQAAAAgBAAQAAAAAAAAQgBgBAAAAQAAgBAAgBg");
	this.shape_1.setTransform(10.3,-8.1,1.609,1.609);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.lf(["#95FFCB","#49BFF7"],[0,1],-0.3,0,0.4,0).s().p("AgCAFQAAAAAAAAQAAAAgBgBQAAAAAAAAQAAgBAAAAQAAgEADgCQAEgDAAAFQAAADgEADIgBAAIgBAAg");
	this.shape_2.setTransform(3.4,-0.1,1.609,1.609);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.lf(["#95FFCB","#49BFF7"],[0,1],-0.3,0,0.4,0).s().p("AgDACQAAgDADgDIADAAIABACQAAAEgEACIgBABQgBAAAAAAQAAAAgBAAQAAgBAAAAQAAgBAAgBg");
	this.shape_3.setTransform(-3.5,5.6,1.609,1.609);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.lf(["#95FFCB","#49BFF7"],[0,1],-0.3,0,0.4,0).s().p("AgDACQAAgDADgDQAEgCAAAFQAAADgEADIgBAAQAAAAgBAAQAAAAAAAAQAAgBgBAAQAAgBAAgBg");
	this.shape_4.setTransform(-10.4,6.8,1.609,1.609);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.lf(["#95FFCB","#49BFF7"],[0,1],-0.3,0,0.4,0).s().p("AgCAFQAAAAAAAAQAAgBgBAAQAAAAAAgBQAAAAAAAAQAAgEADgDIADAAIABACQAAAEgEADIgBAAIgBAAg");
	this.shape_5.setTransform(-17.2,14.5,1.609,1.609);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.lf(["#95FFCB","#49BFF7"],[0,1],-13,0,13.1,0).s().p("AiCBiIAYgJIArgwIAqgHIAqgjIAqgxIArgpIAZgIIAAACIgZAIIgqApIgrAwIgqAlIAAAAIgqAHIgrAvIgYAJg");
	this.shape_6.setTransform(0,0,1.609,1.609);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-21,-16.1,42.1,32.3);


(lib.Tween4 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#3DA5DD","#40ACDE","#4DBFE2","#63DDE6","#73F2EA"],[0,0.2,0.478,0.812,1],-23.4,0,23.5,0).s().p("AjqAoIAAldIHVEOIAAFdg");
	this.shape.setTransform(0,2.4,1.609,1.609);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FFFFFF").s().p("AAAAFQgDgDAAgDQAAgBAAAAQAAgBAAAAQABAAAAAAQAAgBAAAAIACABQADACABADQAAABAAAAQAAABAAAAQgBABAAAAQAAAAgBAAIgCAAg");
	this.shape_1.setTransform(-33.5,-47.5,1.609,1.609);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#FFFFFF").s().p("AAAAEQgDgCAAgDQAAgEADABQAEADAAADQAAABAAABQAAAAgBAAQAAABAAAAQAAAAgBAAIgCgBg");
	this.shape_2.setTransform(-31.6,-46.4,1.609,1.609);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#FFFFFF").s().p("AAAAFQgCgCgBgEQAAgBAAAAQAAgBAAAAQABAAAAAAQAAgBABAAIABABQAEACAAADQAAABAAAAQAAABAAAAQgBABAAAAQAAAAgBAAIgCAAg");
	this.shape_3.setTransform(-29.7,-45.3,1.609,1.609);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#DEE2E8").s().p("Ajqh3IAAgWQAAgIAIAAIAEABIG/EBQAKAGAAALIAAAYg");
	this.shape_4.setTransform(0,-28.1,1.609,1.609);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-37.7,-52.3,75.6,104.6);


(lib.Tween2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AhggwIAAgOIDBBvIAAAOg");
	this.shape.setTransform(-16.4,34,1.609,1.609);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FFFFFF").s().p("AgigMIAAgOIBFAnIAAAOg");
	this.shape_1.setTransform(26.4,41.8,1.609,1.609);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#FFFFFF").s().p("Ag2gXIAAgPIBtA/IAAAOg");
	this.shape_2.setTransform(23.1,56.8,1.609,1.609);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#FFFFFF").s().p("AgggLIAAgOIBBAlIAAAOg");
	this.shape_3.setTransform(6.5,47.2,1.609,1.609);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#FFFFFF").s().p("AgggLIAAgOIBBAlIAAAOg");
	this.shape_4.setTransform(-26.7,22.2,1.609,1.609);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#FFFFFF").s().p("AhFggIAAgOICLBPIAAAOg");
	this.shape_5.setTransform(4.1,34.9,1.609,1.609);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#FFFFFF").s().p("AhFggIAAgPICLBQIAAAOg");
	this.shape_6.setTransform(-20.7,20.6,1.609,1.609);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#FFFFFF").s().p("AirhWIAAgYIFXDFIAAAYg");
	this.shape_7.setTransform(1.7,50.5);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#FFFFFF").s().p("AgsgSIAAgOIBaAzIAAAOg");
	this.shape_8.setTransform(-24.6,35.3,1.609,1.609);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#FFFFFF").s().p("AidhTIAAgOIE7C1IAAAOg");
	this.shape_9.setTransform(6.6,41.4,1.609,1.609);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#FFFFFF").s().p("AidhTIAAgOIE7C1IAAAOg");
	this.shape_10.setTransform(-6.5,22.8,1.609,1.609);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#FFFFFF").s().p("AhggwIAAgOIDBBvIAAAOg");
	this.shape_11.setTransform(-16.4,-36,1.609,1.609);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#FFFFFF").s().p("AgigMIAAgOIBFAnIAAAOg");
	this.shape_12.setTransform(26.4,-28.2,1.609,1.609);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#FFFFFF").s().p("Ag2gXIAAgPIBtA/IAAAOg");
	this.shape_13.setTransform(23.1,-13.2,1.609,1.609);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#FFFFFF").s().p("AgggLIAAgOIBBAlIAAAOg");
	this.shape_14.setTransform(6.5,-22.8,1.609,1.609);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#FFFFFF").s().p("AgggLIAAgOIBBAlIAAAOg");
	this.shape_15.setTransform(-26.7,-47.8,1.609,1.609);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#FFFFFF").s().p("AhFggIAAgOICLBPIAAAOg");
	this.shape_16.setTransform(4.1,-35.1,1.609,1.609);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#FFFFFF").s().p("AhFggIAAgPICLBQIAAAOg");
	this.shape_17.setTransform(-20.7,-49.4,1.609,1.609);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#FFFFFF").s().p("AirhWIAAgYIFXDFIAAAYg");
	this.shape_18.setTransform(1.7,-19.5);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#FFFFFF").s().p("AgsgSIAAgOIBaAzIAAAOg");
	this.shape_19.setTransform(-24.6,-34.7,1.609,1.609);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#FFFFFF").s().p("AidhTIAAgOIE7C1IAAAOg");
	this.shape_20.setTransform(6.6,-28.6,1.609,1.609);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#FFFFFF").s().p("AidhTIAAgOIE7C1IAAAOg");
	this.shape_21.setTransform(-6.5,-47.2,1.609,1.609);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-31.9,-63,64,126.1);


(lib.Tween1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#000000","#020F13","#0C3545","#257495","#41BEF4"],[0.188,0.278,0.459,0.722,1],-21.5,18.1,-11.8,1.3).s().p("AAABPQgwACgtgYQgogXAAgiQAAghAogXQAngXA2AAQA3AAAnAXQAoAWAAAiQAAAigoAXQgpAXgvAAIgGgBgAhZgwQgkAVAAAbQAAAdAkAUQAlAWA0AAQA1AAAlgWQAjgUAAgdQAAgbgjgVQgqgWgwAAIgBAAQgvAAgpAWg");
	this.shape.setTransform(0,0,1.609,1.609);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-21.6,-12.8,43.2,25.6);


(lib.Path_5 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#3DA5DD","#40ACDE","#4DBFE2","#63DDE6","#73F2EA"],[0,0.2,0.478,0.812,1],-22.2,0,22.3,0).s().p("AAAEBQhbg2hBhwQhBhwAAhrQAAhqBBglQBBgmBbA1IAAEBIDeCBQAABqhBAlQgbAPgfAAQgtAAg2gfg");
	this.shape.setTransform(22.2,28.7);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Path_5, new cjs.Rectangle(0,0,44.5,57.6), null);


(lib.Group_4 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#3DA5DD","#55CBE4","#6AE7E8","#73F2EA"],[0,0.4,0.78,1],-14.2,0,14.3,0).s().p("ABtCdIjviKQgKgFgCgMQACgQAQgGIDkiFQASgKAVAAIAAFHIgFAAQgQAAgNgHg");
	this.shape.setTransform(14.3,16.4);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Group_4, new cjs.Rectangle(0,0,28.5,32.9), null);


(lib.Group = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#95FFCB","#49BFF7"],[0,1],-10.1,5.9,5.7,-3.2).s().p("AhOAnICdhaIAAANIidBag");
	this.shape.setTransform(9.6,12.4);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.lf(["#95FFCB","#49BFF7"],[0,1],-2.9,1.6,-1.8,1).s().p("AgFgCIALgHIAAAMIgLAHg");
	this.shape_1.setTransform(0.6,17.6);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.lf(["#95FFCB","#49BFF7"],[0,1],-10.1,5.9,5.7,-3.2).s().p("AhOAnICdhaIAAANIidBag");
	this.shape_2.setTransform(9.6,9.9);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.lf(["#95FFCB","#49BFF7"],[0,1],-2.9,1.6,-1.8,1).s().p("AgFgCIALgHIAAAMIgLAHg");
	this.shape_3.setTransform(0.6,15.1);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.lf(["#95FFCB","#49BFF7"],[0,1],-10.1,5.9,5.7,-3.1).s().p("AhOAnICdhaIAAANIidBag");
	this.shape_4.setTransform(9.6,7.5);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.lf(["#95FFCB","#49BFF7"],[0,1],-2.9,1.6,-1.8,1).s().p("AgFgCIALgHIAAAMIgLAHg");
	this.shape_5.setTransform(0.6,12.7);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.lf(["#95FFCB","#49BFF7"],[0,1],-10.1,5.9,5.7,-3.1).s().p("AhOAnICdhaIAAANIidBag");
	this.shape_6.setTransform(9.6,5.2);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.lf(["#95FFCB","#49BFF7"],[0,1],-2.9,1.7,-1.8,1.1).s().p("AgFgCIALgHIAAAMIgLAHg");
	this.shape_7.setTransform(0.6,10.4);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.Group, new cjs.Rectangle(0,0,17.5,18.6), null);


(lib.Tween6 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Group();
	this.instance.parent = this;
	this.instance.setTransform(0,10.8,1.609,1.609,0,0,0,8.7,9.3);
	this.instance.alpha = 0.559;

	this.instance_1 = new lib.Group();
	this.instance_1.parent = this;
	this.instance_1.setTransform(0,-10.7,1.609,1.609,0,0,0,8.7,9.3);
	this.instance_1.alpha = 0.559;

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_1},{t:this.instance}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-14,-25.7,28.1,51.5);


(lib.Tween5 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#95FFCB","#49BFF7"],[0,1],-10.6,0,10.7,0).s().p("AhqA+IAAj3QBZAzA9BtQA/BrAABmIAAACg");
	this.shape.setTransform(18.6,-10.6,1.609,1.609);

	this.instance = new lib.Path_5();
	this.instance.parent = this;
	this.instance.setTransform(0,0,1.609,1.609,0,0,0,22.2,28.7);
	this.instance.alpha = 0.648;

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-35.7,-46.3,71.6,92.7);


(lib.Screen = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 4 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("An+B3IAAr6IP9JNIAAL7g");
	mask.setTransform(51.1,70.9);

	// Layer 2
	this.instance = new lib.Tween2("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(41.2,89.6);

	var maskedShapeInstanceList = [this.instance];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.instance).to({y:21.6},49).wait(1));

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#3DA5DD","#40ACDE","#4DBFE2","#63DDE6","#73F2EA"],[0,0.2,0.478,0.812,1],-31.8,0,31.8,0).s().p("Ak9A2IAAnaIJ7FvIAAHag");
	this.shape.setTransform(51.1,74.1,1.609,1.609);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FFFFFF").s().p("AAAAGQgDgDgBgFQAAgBAAAAQAAgBAAAAQAAgBABAAQAAAAAAAAQABgBAAAAQABAAAAAAQABAAAAAAQAAABAAAAQAFAEAAAEQAAABAAABQAAAAAAABQgBAAAAABQgBAAAAAAIgDgBg");
	this.shape_1.setTransform(5.6,6.4,1.609,1.609);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#FFFFFF").s().p("AAAAGQgEgDAAgFQAAAAAAgBQAAAAAAgBQAAAAABgBQAAAAAAAAQABgBAAAAQABAAAAAAQABAAAAABQAAAAAAAAQAFAEAAAEQAAABAAAAQAAABAAAAQAAABgBAAQAAAAAAAAIgCABIgCgBg");
	this.shape_2.setTransform(8.3,8,1.609,1.609);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#FFFFFF").s().p("AAAAGQgEgEAAgEQAAgBAAAAQAAgBAAAAQAAgBABAAQAAAAAAgBQABAAAAAAQAAAAABAAQAAAAABAAQAAABAAAAQAEADABAFQAAABAAABQAAAAAAABQgBAAAAABQgBAAAAAAIgDgBg");
	this.shape_3.setTransform(10.9,9.5,1.609,1.609);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#DEE2E8").s().p("Ak9iiIAAgeQAAgEADgDQADgDAFAAQADAAACABIJeFdQANAIAAAPIAAAgg");
	this.shape_4.setTransform(51.2,32.7,1.609,1.609);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(50));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,102.4,141.8);


(lib.Mobilescreen = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Tween1("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(21.6,12.8,0.18,0.18);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({scaleX:0.87,scaleY:0.87},16).to({scaleX:1,scaleY:1,alpha:0},3).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(17.8,10.6,7.8,4.6);


(lib.Graph = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 4
	this.instance = new lib.Tween8("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(30.3,52.7);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({x:30,y:42.7},15).to({startPosition:0},34).to({x:30.3,y:52.7},15).wait(1));

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AgKggIAVgNIAABOIgVANg");
	this.shape.setTransform(12.8,61.4,1.609,1.609);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FFFFFF").s().p("AgLg+IAXgNIAACKIgXANg");
	this.shape_1.setTransform(47.1,36.8,1.609,1.609);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#FFFFFF").s().p("AgKg1IAVgNIAAB4IgVANg");
	this.shape_2.setTransform(40.2,42.1,1.609,1.609);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#FFFFFF").s().p("AgKgoIAVgNIAABeIgVANg");
	this.shape_3.setTransform(33.3,48.2,1.609,1.609);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#FFFFFF").s().p("AgKgiIAWgNIAABSIgWANg");
	this.shape_4.setTransform(26.5,53.2,1.609,1.609);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#FFFFFF").s().p("AgKgrIAVgNIAABkIgVANg");
	this.shape_5.setTransform(19.6,55.7,1.609,1.609);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(65));

	// Layer 1
	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#FFFFFF").s().p("AiMBPIEZijIAAAGIkZCjg");
	this.shape_6.setTransform(30.1,57.7,1.609,1.609);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#FFFFFF").s().p("AgfAQIA/gkIAAAEIg/Alg");
	this.shape_7.setTransform(13.8,40.5,1.609,1.609);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#FFFFFF").s().p("AgOAHIAdgRIAAAEIgdARg");
	this.shape_8.setTransform(5.6,45.3,1.609,1.609);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#FFFFFF").s().p("AhBAkICDhMIAAAFIiDBLg");
	this.shape_9.setTransform(13.8,38.9,1.609,1.609);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#FFFFFF").s().p("AgpAUIBTgvIAAAIIhTAvg");
	this.shape_10.setTransform(9.9,37.6,1.609,1.609);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#F1F2F2").s().p("AgDACQAAgDADgCQABgBABAAQAAAAABABQAAAAABAAQAAABAAABQAAADgEACIgBABQAAAAgBAAQAAgBAAAAQgBAAAAgBQAAAAAAgBg");
	this.shape_11.setTransform(7.5,33.4,1.609,1.609);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#F1F2F2").s().p("AgDACQABgDACgCQAEgDAAAFQAAADgEACIgBABQAAAAgBAAQAAAAAAgBQgBAAAAAAQAAgBAAgBg");
	this.shape_12.setTransform(5.6,34.5,1.609,1.609);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#F1F2F2").s().p("AgCACQgBgDADgCQADgDAAAFQAAADgDACIgBABQAAAAgBAAQAAAAAAgBQAAAAAAgBQAAAAAAgBg");
	this.shape_13.setTransform(3.7,35.6,1.609,1.609);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#DEE2E8").s().p("AjBBoQAAgEAEgDIF7jbQAEgBAAAFIAAASImDDfg");
	this.shape_14.setTransform(31.2,19.8,1.609,1.609);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.lf(["#3DA5DD","#40ACDE","#4DBFE2","#63DDE6","#73F2EA"],[0,0.2,0.478,0.812,1],-19.4,0,19.4,0).s().p("AjBgUIGDjfIAAEHImDDgg");
	this.shape_15.setTransform(31.2,42.8,1.609,1.609);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6}]}).wait(65));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,62.5,82.1);


(lib.Tween3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Screen();
	this.instance.parent = this;
	this.instance.setTransform(0,0,1,1,0,0,0,51.1,70.9);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-51.1,-70.9,102.4,152.7);


(lib.LaptopMonitor = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 4 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("Ai3kZIFRjGIAeL/IlWDAg");
	mask.setTransform(81.7,21.2);

	// Layer 3
	this.instance = new lib.Tween6("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(82.1,25.7);

	var maskedShapeInstanceList = [this.instance];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.instance).to({y:-37.3},9).to({startPosition:0},20).to({y:80.2},1).to({y:25.7},9).wait(12));

	// Layer 1
	this.instance_1 = new lib.Graph();
	this.instance_1.parent = this;
	this.instance_1.setTransform(31.2,52.9,1,1,0,0,0,31.2,41);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(51));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,96.2,94);


(lib.BigMonitor = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AgSgGIAAgIIAmAVIAAAIg");
	this.shape.setTransform(162.9,187.4,1.609,1.609);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FFFFFF").s().p("AgogTIAAgIIBRAvIAAAIg");
	this.shape_1.setTransform(181.2,194.9,1.609,1.609);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#FFFFFF").s().p("AgogTIAAgIIBSAvIAAAIg");
	this.shape_2.setTransform(166.5,186.4,1.609,1.609);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#FFFFFF").s().p("AhdgxIAAgJIC7BsIAAAIg");
	this.shape_3.setTransform(174.9,187.7,1.609,1.609);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]},72).to({state:[]},28).wait(36));

	// Layer 2
	this.instance = new lib.Tween5("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(158.3,127.4,0.126,0.126);
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(55).to({_off:false},0).to({scaleX:1,scaleY:1},10).to({startPosition:0},36).to({scaleX:0.12,scaleY:0.12},9).to({_off:true},1).wait(25));

	// Layer 4
	this.instance_1 = new lib.Tween4("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(113.5,144.3,0.111,0.111);
	this.instance_1._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(29).to({_off:false},0).to({scaleX:1,scaleY:1},10).to({startPosition:0},67).to({scaleX:0.12,scaleY:0.12},9).to({_off:true},1).wait(20));

	// Layer 1
	this.instance_2 = new lib.Tween3("synched",0);
	this.instance_2.parent = this;
	this.instance_2.setTransform(51.2,70.9,0.09,0.09);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).to({scaleX:1,scaleY:1},9).to({startPosition:0},102).to({scaleX:0.12,scaleY:0.12},9).to({_off:true},1).wait(15));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(46.5,64.5,9.3,12.8);


// stage content:
(lib.step6 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 6
	this.instance = new lib.LaptopMonitor();
	this.instance.parent = this;
	this.instance.setTransform(21,168.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

	// Layer 3
	this.instance_1 = new lib.BigMonitor();
	this.instance_1.parent = this;
	this.instance_1.setTransform(317.6,172.1,1,1,0,0,0,97,99.7);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(1));

	// Layer 2
	this.instance_2 = new lib.Mobilescreen();
	this.instance_2.parent = this;
	this.instance_2.setTransform(170,367.3,1,1,0,0,0,21.6,12.8);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(1));

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#95FFCB","#49BFF7"],[0,1],78.1,-43.9,-55.8,37.8).s().p("AElF5IqTl8QgngWgbgvQgbgvABgsQAAgsAbgQQAbgPAmAWIAOAJQgEgXAAgYQAAhLAugaQAugbBCAmQAjAVAaAdQARhNA9gWQA8gVBPAtQBZA0BABrQBABrAEBnQBCAqAuBRQAuBSAABNQAABPgxAcQgUALgXAAQgiAAgogXg");
	this.shape.setTransform(115.3,69,1.609,1.609);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.lf(["#95FFCB","#49BFF7"],[0,1],-29.5,0.1,29.2,0.1).s().p("ADlFyQANgcAAgnQAAhMguhSQguhShBgpQgFhnhAhrQg/hshZgzQgugagpgEQgngEgdARIAvgcQAfgSAoAEQAqADAtAaQBYA0BABrQBABsAEBoQBCAoAvBSQAtBSAABMQAAAngNAcQgNAbgXANIgvAbQAVgNAMgZg");
	this.shape_1.setTransform(150.1,65.6,1.609,1.609);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.lf(["#95FFCB","#49BFF7"],[0,1],-11.2,0,11.2,0).s().p("AAAAAQhAgkguAZIAwgcQAWgMAdACQAcADAhASQAiAVAbAcIgyAdQgbgdgigVg");
	this.shape_2.setTransform(83.2,13.6,1.609,1.609);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.lf(["#95FFCB","#49BFF7"],[0,1],-6.5,0,6.4,0).s().p("AAAAQQglgUgaANIAwgbQAagQAoAWIANAJIgyAcg");
	this.shape_3.setTransform(56.2,31.6,1.609,1.609);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#E6F2FE").s().p("AgFAKQgCgBAAgEQAAgIAHgGQADgCADACQACABAAAEQAAAJgIAEIgDACIgCgBg");
	this.shape_4.setTransform(66.6,168.3,1.609,1.609);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.lf(["#3DA5DD","#40ACDE","#4DBFE2","#63DDE6","#73F2EA"],[0,0.2,0.478,0.812,1],-16,-66,4.5,18.4).s().p("AjeESIAvgbIAlAVIgvAbgAkLD4IAvgbIAlAVIgvAbgAioDyIAvgbIAlAWIgvAbgAk3DdIAugbIAmAWIgvAbgAjVDYIAvgbIAlAWIguAbgAhxDTIAugbIAlAWIguAbgAlkDEIAvgbIAlAWIguAbgAkBC/IAvgbIAlAWIgvAagAieC6IAvgbIAlAVIgvAbgAg8CzIAvgbIAkAWIguAbgABzCLIB/hJIBkA6Ih/BJgAmQCqIAugbIAlAWIguAbgAkuClIAvgbIAlAVIguAbgAjLCfIAvgbIAlAWIgvAbgAhpCZIAvgbIAlAWIgvAbgAgGCVIAvgbIAlAVIgvAbgAm+CQIAwgbIAlAWIgvAbgAlbCLIAvgbIAlAVIgvAbgAj4CFIAvgbIAlAXIguAbgAiVCAIAvgbIAlAVIgvAbgAgyB7ICahaIAlAVIiaBagAAwB1IAvgbIAlAWIgvAbgAmHBxIAvgbIAlAVIgvAbgAkkBrIAvgbIAlAXIgvAbgAn+BrIAvgbIAlAWIgvAbgAjCBlIAvgbIAlAWIgvAbgAhfBhIBkg6IAlAVIhkA6gABmBWIEHiXIAlAVIkHCXgAlRBRIAvgbIAlAWIgvAbgAjvBMIAvgbIAlAVIguAbgAnHBMIAvgcIAlAVIgvAbgAiLBGIAugbIAmAWIgvAbgAkbAyIAugbIAlAVIguAbgAi4AsIAvgbIAlAWIgvAbgAmRArIAugbIAmAXIgvAbgAhVAoIAvgbIAlAVIgvAbgAANAiIAugcIAmAXIgvAbgABvAdIAvgbIAlAWIguAbgAjlASIAvgaIAlAWIguAbgAiCAOIAvgaIAlAUIgvAbgAlbANIAvgaIAlAUIgvAbgAgfAIIAugaIAlAVIgvAbgABDADIAvgaIAlAVIgvAagACmgCIAugbIAmAWIgvAagAiugMIAugaIAmAVIgvAagAhMgRIAvgbIAkAWIgtAagAklgSIAvgbIAlAWIgvAagAAWgWIAvgbIAlAVIgvAbgAB5gcIAvgbIAlAXIgvAbgADcggIAvgbIAlAVIgvAbgAh4grIAugbIAlAWIguAbgAgWgwIAugbIAlAVIguAbgAjvgxIAvgbIAlAVIgvAbgABMg2IAvgbIAlAWIgvAbgACvg6IAvgbIAlAVIgvAbgAEShAIAvgbIAlAWIgvAbgAF1hFIAvgbIAlAVIgvAbgAhChKIAugbIAlAVIguAbgAAghPIAvgbIAlAWIgvAbgAi5hRIAvgaIAlAWIgvAbgACChUIAvgbIAlAVIgvAbgADlhaIAvgbIAlAWIguAbgAFIhfIAvgbIAlAVIgvAbgAGrhlIAvgbIAlAWIgvAbgAgMhpIAugbIAlAWIgvAbgABWhuIAugcIAmAWIgvAbgAiDhvIAvgbIAlAVIgvAbgAC4h0IAvgbIAlAWIguAbgAEbh5IBlg7IAlAWIhlA6gAF+h/IAvgbIAlAXIgvAbgAApiJIAvgbIAlAWIgvAbgACMiNIAugbIAmAVIgvAbgAhNiPIAvgbIAkAWIguAbgADviTIAugaIAmAUIgvAbgABfioIAvgaIAlAVIguAbgADCitIAvgbIAlAVIgvAbgAgWitIAtgbIAlAVIguAbgAElizIAvgbIAlAXIgvAagACVjHIAvgbIAlAWIgvAbgAD4jMIAvgbIAlAVIgvAbgAAfjNIAvgcIAlAXIgvAbgADMjmIAvgbIAlAVIgvAbgABVjtIAvgaIAlAVIgvAbgACLkLIAvgbIAlAVIgvAbg");
	this.shape_5.setTransform(99.6,274.3,1.609,1.609);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.lf(["#308ECB","#3395CD","#3EA8D3","#52C7DC","#72F1EA","#73F2EA"],[0,0.161,0.4,0.678,0.988,1],-41.9,10.9,47.9,-41.3).s().p("AioDkInWkPIAAgSIHWEPQAZAOAagOILpmtQALgFAAgKIAAASQgBAKgKAEIrpGuQgMAHgNAAQgOAAgMgHg");
	this.shape_6.setTransform(105.5,303.9,1.609,1.609);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.lf(["#308ECB","#3395CD","#3EA8D3","#52C7DC","#72F1EA","#73F2EA"],[0,0.161,0.4,0.678,0.988,1],-95.1,-40.9,86.3,37.4).s().p("AmQH7IgCoeQACgdAYgPILpmwQAJgGAJAEIAQAKQgKgFgJAGIrpGvQgYAQgBAdIABIeg");
	this.shape_7.setTransform(64.8,210.9,1.609,1.609);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#1F48A3").s().p("AlxgeILjmqIAAHmIrjGrg");
	this.shape_8.setTransform(66.6,210.7,1.609,1.609);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.lf(["#3DA5DD","#40ACDE","#4DBFE2","#63DDE6","#73F2EA"],[0,0.2,0.478,0.812,1],0,-212,0,33).s().p("AmPgfQACgdAYgQILpmvQALgGAIAFQAHAEAAAMIACIeIsdHNgAAAkVQgHAGAAAHQAAABAAABQAAAAABABQAAAAAAABQABAAAAAAQACACADgCQAGgEABgJQAAAAAAgBQgBgBAAAAQAAgBAAAAQgBgBAAAAIgCgBIgDABg");
	this.shape_9.setTransform(66.7,211.6,1.609,1.609);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.lf(["#3DA5DD","#40ACDE","#4DBFE2","#63DDE6","#73F2EA"],[0,0.2,0.478,0.812,1],-8.4,-29,14.4,50.8).s().p("AioFrInWkQIMdnMIHWERQAKAHAAAIQAAAIgKAHIrqGtQgMAHgNAAQgOAAgMgHg");
	this.shape_10.setTransform(105.5,279.3,1.609,1.609);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#1F48A3").s().p("AsWAOIAAuGQAAgYANgJQAMgKASAKIXXNgQASAKAMAYQANAXAAAXIAAOIg");
	this.shape_11.setTransform(310,173.5,1.609,1.609);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.lf(["#3DA5DD","#40ACDE","#4DBFE2","#63DDE6","#73F2EA"],[0,0.2,0.478,0.812,1],-40.9,45.6,77.8,-22.6).s().p("ALsH1I3XtfQgSgKgMgYQgNgYAAgYIAAg9IYtOQIAAA+QAAAXgNAJQgGAFgHAAQgIAAgJgFg");
	this.shape_12.setTransform(310,256.8,1.609,1.609);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.lf(["#3DA5DD","#40ACDE","#4DBFE2","#63DDE6","#73F2EA"],[0,0.2,0.478,0.812,1],1.6,23.1,-8.8,-3.9).s().p("AiQgxIAAhCIEhCnIAAA/g");
	this.shape_13.setTransform(300.9,264.7,1.609,1.609);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.lf(["#73F2EA","#63DDE6","#4DBFE2","#40ACDE","#3DA5DD","#73F2EA"],[0,0.059,0.169,0.271,0.329,0.639],12,29.6,-10.3,-9.1).s().p("AkDBlIC/htQASgKAKgSQAKgSAAgVIAAjLIEiCoIAADkQAAAQgIAOQgIAPgOAIIi4Bsg");
	this.shape_14.setTransform(282.5,276.8,1.609,1.609);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.lf(["#3DA5DD","#40ACDE","#4DBFE2","#63DDE6","#73F2EA"],[0,0.2,0.478,0.812,1],27.1,-14.4,-9.2,9.4).s().p("AkLAaIAAgRIExCxIC4hsQAOgIAIgOQAIgOAAgRIAAjkIAQAKIAADlQAAAQgIAOQgIAOgOAIIjIB0g");
	this.shape_15.setTransform(283.8,291.7,1.609,1.609);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.lf(["#3DA5DD","#40ACDE","#4DBFE2","#63DDE6","#73F2EA"],[0,0.2,0.478,0.812,1],110.3,-14.6,-24.5,63.3).s().p("AsbBGIgNiEIAFt0IAKgHIgCgGIAlgXQAPgIAOAKIXXNgQASAKAMAYQANAXAAAYIAAPCQAAAcgQAIIgnAXg");
	this.shape_16.setTransform(313.5,179.2,1.609,1.609);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.lf(["#3DA5DD","#40ACDE","#4DBFE2","#63DDE6","#73F2EA"],[0,0.2,0.478,0.812,1],55.9,-10.4,-18.9,31).s().p("ABzCeIAhgSIBYAyIggATgACgCGIAhgSIBYAzIghASgADMBwIAggSIBYAyIggATgAATBmIAggSIBYAzIggASgAD4BYIAhgTIBYAzIggATgAA/BPIAggSIBZAyIghATgABrA3IAhgSIBYAzIggASgAiugIIAggSIC4BqIggASgACXAgIAhgSIBYAzIggASgAggAXIAfgSIBXAzIgfASgAALAAIAggRIBYAxIggATgAA3gWIAggTIBYAyIggATgAiCgfIAhgTIBXAyIgfATgAhVg3IAggSIBXAzIggASgAkPhAIAggSIBYAzIggASgAgphOIAggSIBXAyIggATgAjjhXIAhgSIBYAzIggASgAi2huIAggTIBZAzIggATgAlwh3IAggTIBYAzIggATgAiKiGIAggSIBYAzIgfASgAlEiPIAhgSIBYAzIggASgAkXimIAggSIBZAzIghASgAjri9IAhgTIBYAzIghATg");
	this.shape_17.setTransform(239,329.3,1.609,1.609);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.lf(["#3DA5DD","#55CBE4","#6AE7E8","#73F2EA"],[0,0.4,0.78,1],-75.2,15.5,26.3,-44).s().p("Ak1isIAAgLIJsFmIAAAJg");
	this.shape_18.setTransform(220,341.4,1.609,1.609);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.lf(["#3DA5DD","#4FC2E2","#62DCE6","#6FECE9","#73F2EA"],[0,0.251,0.541,0.8,1],-11.2,0,11.3,0).s().p("AhwA9IDhiCIAAAJIjhCCg");
	this.shape_19.setTransform(288.1,359.8,1.609,1.609);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.lf(["#3DA5DD","#40ACDE","#4DBFE2","#63DDE6","#73F2EA"],[0,0.2,0.478,0.812,1],19.9,-51.8,-90.2,11.5).s().p("AmmhyIDjiBIJqFlIjhCCg");
	this.shape_20.setTransform(238.1,330.3,1.609,1.609);

	this.instance_3 = new lib.Group_4();
	this.instance_3.parent = this;
	this.instance_3.setTransform(311.2,392,1.609,1.609,0,0,0,14.3,16.4);
	this.instance_3.alpha = 0.762;

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.lf(["#3DA5DD","#40ACDE","#4DBFE2","#63DDE6","#73F2EA"],[0,0.2,0.478,0.812,1],-54.5,34.8,54.9,-34.5).s().p("AgjCsIkGiYQgMgEgCgOQACgRARgIID8iRQARgKAWgBQAVgBAPAJIEHCXQAMAGACANQgCASgRAHIj8CRQgRAKgWABIgEAAQgTAAgOgIg");
	this.shape_21.setTransform(334.2,392,1.609,1.609);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.lf(["#3DA5DD","#40ACDE","#4DBFE2","#63DDE6","#73F2EA"],[0,0.2,0.478,0.812,1],24,-21.8,-21.5,6.8).s().p("AgjBoIkGiXQgMgFgCgOIAAgpQACAOAMAFIEHCXQAOAIAWgBQAWAAARgKID8iRQARgHACgTIAAAqQgDASgQAHIj8CRQgRAKgWABIgEAAQgTAAgOgIg");
	this.shape_22.setTransform(334.2,409.7,1.609,1.609);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#53C8F7").s().p("AgiCtIkHiYQgQgJACgMQACgNARgKID8iRQARgKAXgBQAVgBAPAIIEHCYQAOAIgCAMQgBANgRALIj8CRQgRALgWAAIgEAAQgUAAgMgHg");
	this.shape_23.setTransform(334.1,397.4,1.609,1.609);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.lf(["#95FFCB","#49BFF7"],[0,1],-20.9,0,20.9,0).s().p("AjQDzIABgCIFtjWQAVgMAMgVQANgWAAgYIAAi+QAAgBAAAAQAAgBABAAQAAAAAAgBQABAAABAAQAAAAABAAQAAABAAAAQABAAAAABQAAAAAAABIAAC+QAAAagNAWQgNAWgWANIltDWIgCABQAAAAgBAAQAAgBAAAAQgBAAAAgBQAAAAAAgBg");
	this.shape_24.setTransform(385.3,341.4,1.609,1.609);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.lf(["#95FFCB","#49BFF7"],[0,1],-0.2,0,0.3,0).s().p("AgCEfIAAo8QABgBAAgBQAAAAAAAAQAAgBABAAQAAAAAAAAQABAAAAAAQABAAAAABQAAAAAAAAQABABAAABIAAI8QAAAAgBABQAAAAAAAAQAAABgBAAQAAAAgBAAQAAAAAAAAQgBAAAAgBQAAAAAAAAQAAgBgBAAg");
	this.shape_25.setTransform(71.4,122,1.609,1.609);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.lf(["#95FFCB","#49BFF7"],[0,1],-0.2,0,0.3,0).s().p("AgBDEIAAmHQAAgBAAgBQAAAAAAAAQAAgBABAAQAAAAAAAAQABAAAAAAQABAAAAABQAAAAAAAAQAAABAAABIAAGIQAAABAAAAQAAAAgBAAQAAABAAAAQgBAAAAAAQAAAAAAAAQgBAAAAgBQAAAAAAAAQAAgBAAgBg");
	this.shape_26.setTransform(106.2,126,1.609,1.609);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.lf(["#95FFCB","#49BFF7"],[0,1],-68.3,0,68.4,0).s().p("AEJQGIueojQgQgIgEgSQgFgSAJgPQAHgLAJgFILbmsIAAv8QAAgBAAgBQAAAAAAAAQABgBAAAAQABAAAAAAQABAAAAAAQABAAAAABQAAAAAAAAQABABAAABIAAP+IgBACIrdGsQgOAIgEAQQgDAQAIANQAEAJAJAGIOeIjQAWANAZgBQAaABAVgNIEpisQAPgJAFgRQAEgRgJgQQgFgJgKgGIiYhYQgBAAAAgBQgBAAAAAAQAAgBAAAAQABAAAAgBQAAAAABgBQAAAAAAAAQABAAAAAAQABAAAAAAICYBYQARAKAFASQAFAUgJARQgHALgLAGIkoCrQgXAOgaAAQgcAAgWgOg");
	this.shape_27.setTransform(131.2,282.4,1.609,1.609);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.lf(["#3DA5DD","#40ACDE","#4DBFE2","#63DDE6","#73F2EA"],[0,0.2,0.478,0.812,1],3.8,1.9,-2.9,-2.4).s().p("AgQgGIAAgGIAhATIAAAGg");
	this.shape_28.setTransform(207.1,393.8,1.609,1.609);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.lf(["#3DA5DD","#55CBE4","#6AE7E8","#73F2EA"],[0,0.4,0.78,1],-1.2,2.4,1.6,-1.9).s().p("AgiABIAkgUIAhATIgjAUg");
	this.shape_29.setTransform(210,391.6,1.609,1.609);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.lf(["#3DA5DD","#40ACDE","#4DBFE2","#63DDE6","#73F2EA"],[0,0.2,0.478,0.812,1],0,1.9,0.9,0).s().p("AgRAIIAjgUIAAAFIgjAUg");
	this.shape_30.setTransform(212.7,393.6,1.609,1.609);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f("#170C2B").s().p("AgBABIAAgBIAAAAIACAAIABAAIgBABIgBAAIgBAAg");
	this.shape_31.setTransform(138.9,344.2,1.609,1.609);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f("#170C2B").s().p("AgTALQgBAAAAAAQgBgBAAAAQAAAAABAAQAAAAABAAIAkgVIADAAQABABAAAAQAAAAAAAAQAAABAAAAQAAAAgBAAIgkAUIgBABIgCgBg");
	this.shape_32.setTransform(134.5,346.9,1.609,1.609);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f("#1F48A3").s().p("ABZC9ImmjzIDviKIGnD0QADABACADQABADgBADQgBAEgEACIjUB5QgHAEgHAAQgHAAgHgEg");
	this.shape_33.setTransform(171.1,367.9,1.609,1.609);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.lf(["#3DA5DD","#55CBE4","#6AE7E8","#73F2EA"],[0,0.4,0.78,1],-41.5,16.5,28.9,-23.7).s().p("ABXDDImoj1QgKgFgBgIQgBgHAJgEIDTh6QAVgKAWALIGpD2QAJAFABAHQABAHgIAFIjUB6QgKAFgJAAQgMAAgMgHg");
	this.shape_34.setTransform(170,367.3,1.609,1.609);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.lf(["#3DA5DD","#40ACDE","#4DBFE2","#63DDE6","#73F2EA"],[0,0.2,0.478,0.812,1],3.5,18,-35.8,-1.7).s().p("ABYDDImpj0QgJgEgBgKIgBgSIDbhzQAWgKAVAMIGzDyIAAAPQABAIgJAEIjTB6QgKAEgKAAQgLAAgLgGg");
	this.shape_35.setTransform(170,370.1,1.609,1.609);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.lf(["#95FFCB","#49BFF7"],[0,1],-115.2,0,115.2,0).s().p("AhnGXIwCpPQgQgJgEgSQgFgSAJgQQAGgKAKgGIBzhCQAAAAABAAQAAAAABAAQAAAAAAAAQABABAAAAQAAAAAAABQAAAAAAABQAAAAAAAAQAAABAAAAIh0BDQgNAIgFAQQgEAPAIAOQAGAJAIAFIQCJPQAWANAZAAQAagBAVgNIRVqRQAUgNANgWQAMgVAAgYIAAhRQAAAAAAgBQAAAAABAAQAAgBAAAAQABAAAAAAQABAAABAAQAAAAAAABQABAAAAAAQAAABAAAAIAABRQAAAZgNAXQgNAXgWANIxUKSQgWANgdABQgbgBgVgMg");
	this.shape_36.setTransform(194.1,365,1.609,1.609);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_36},{t:this.shape_35},{t:this.shape_34},{t:this.shape_33},{t:this.shape_32},{t:this.shape_31},{t:this.shape_30},{t:this.shape_29},{t:this.shape_28},{t:this.shape_27},{t:this.shape_26},{t:this.shape_25},{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.instance_3},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(221.5,225,443.7,450.4);
// library properties:
lib.properties = {
	width: 443,
	height: 450,
	fps: 24,
	color: "#FFFFFF",
	opacity: 1.00,
	manifest: [],
	preloads: []
};




})(lib = lib||{}, images = images||{}, createjs = createjs||{}, ss = ss||{}, AdobeAn = AdobeAn||{});
var lib, images, createjs, ss, AdobeAn;