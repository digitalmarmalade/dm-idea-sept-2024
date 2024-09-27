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


(lib.Tween4 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#98531F").s().p("AAHBcQgIgfgKgUQgTgogXAUQACASAAAOIgRgqQACgKgNgGQgMgGACgVQADgXAXgSQAtgiA5ATQA8AUgKA+QgEAYgMAcQgKAYAAAFQAAAJgZAIQgMAEgIAAQgIAAgDgEg");
	this.shape.setTransform(0,-2.7);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#E8DCD1").s().p("AgDAXQgDgBAEgJQAGgOgLgMIgCgDQAAgEAFgCIALALQAJAOgQATIgCABIgBAAg");
	this.shape_1.setTransform(-3.6,1.6);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#DEBC9A").s().p("AgjAvQAChHgFgIQgDgFAkgMIAkgKIAAAvQABAvAGAHQAIAKghAHIgOABQgWAAgMgNg");
	this.shape_2.setTransform(3.1,6.3);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#DEBC9A").s().p("AgqBiQgOgOgOgzQgRg9ARggIAdgaQAkgZAmANQAnANAHAsQADAWgFATQgJAUgQAWQgeAtgbAJQgOAHgKAAQgIAAgFgFg");
	this.shape_3.setTransform(0,-0.2);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-9,-12.2,18.1,24.6);


(lib.Tween3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#586977").s().p("AhSjIIAHgCIADADQAMAQAMgDQAMgDADgUIAAgEIAHgCIBtGcIhIATg");
	this.shape.setTransform(0.7,4.8);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#DEBC9A").s().p("AgHAxIgCgDQgLgQgHgWQgGgZADgUQADgVALgDQAMgDAMAQQANAQAGAaQAHAVgCAUIgBAEQgDAUgMADIgEAAQgJAAgKgNg");
	this.shape_1.setTransform(-5.8,-20.1);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-9,-26.3,18.1,52.8);


(lib.Tween2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#2F2215").s().p("Ag2AXQgPgDgOAEIAOgaQATgcAcgEQAegEAeAJQAbAIALAOQANANgHASIgGgDQgNAIgWAEQgOADgPAAQgfAAgjgNg");
	this.shape.setTransform(-0.1,-6.5);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#4E3821").s().p("AgIApIgKgKQAegTgMgNQgJgJgKAJIgIAJQAFgJgNglIA4gXIAKASQAHAYgDAbQgFAYgeAdQAAgJgIgLg");
	this.shape_1.setTransform(5,-0.3);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#453425").s().p("AgCgNQADgFACAAIAKAHIgZAeQAEgWAGgKg");
	this.shape_2.setTransform(-6.6,-3.9);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#EAC7A3").s().p("AhABeQgFgEgFgMIgFgTQgJgkAHgfQAHgjAYgZQAqgrAtAWQAXAKAOAUIALAmQACAqgsAcQgGADgJAJQgKAKgFADQgRAMgUAGQgOAFgLAAQgJAAgGgDg");
	this.shape_3.setTransform(0,0.4);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-8.5,-10.1,17.2,20.3);


(lib.Tween1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#EAC7A3").s().p("AASASQgSgJgNgKQgSgNAEgEQADgDAZAJIAZAKIADANQAAAJgFAAIgGgCg");
	this.shape.setTransform(-9.1,0.5);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#1F1111").s().p("ABBBaQgVgXgMgRIgjgvIhih/IABgBIBoB7IAnAsQATAZALARQATAYAKASIgCABQgPgPgUgWg");
	this.shape_1.setTransform(-16.6,-7.8);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#581110").s().p("AAZB/QgOgCgxgoIgvgnQhCg5gFgRQgDgLASgPQATgQAAAEQAAABBDAuIBCAtQADgGArhJIAqhJIA6A3IgxBnQgPAZgTAYQgjAugNAAIgBAAg");
	this.shape_2.setTransform(11.1,7.8);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#EAC7A3").s().p("AAGAjQgegRgDgEQgMgPgIgRQgPgdAPgDQAPgCAaAMQAMAGAKAGQAZAcAOAeIgUAVIgdgQg");
	this.shape_3.setTransform(-7.7,-0.7);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-26.8,-20.4,53.7,41);


(lib.Group = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AhcBtIAijJIBmgoIAxDxQgUANghAHQgTAEgTAAQgvAAgvgYg");
	this.shape.setTransform(9.3,13.3);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Group, new cjs.Rectangle(0,0,18.7,26.5), null);


(lib.Group851 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("AjqLZQgMgDgPgeQgSgjgagSQgrgdhTgHQiUgNhGhKIgrg1QgXgZgZgFQhEgOhCgoQhNgugfg8QgbgyhpgbIhOgSQgpgJgNgJQhFgrgjgaQg/gvAkgHQAjgGJwlHQE4ikExijIClhtISkJfQCDBJAHAiQAEAQgJAAQgUgCgVAAQhdADiIBkQiCBhiBAgIhTAVQgoAOgdAaQguAqi5BCQiuA+gUAeQgWAiiXA9QjJBRg/AiQgvAagWAAIgHAAg");
	this.shape.setTransform(139.1,72.9);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Group851, new cjs.Rectangle(0,0,278.3,145.9), null);


(lib.Group590 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#8E5D5C").s().p("AAAhOIABgBIAACeIgBABg");
	this.shape.setTransform(32.7,9);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#8E5D5C").s().p("AAAhOIABgBIAACeIgBABg");
	this.shape_1.setTransform(31.1,9.8);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#8E5D5C").s().p("AAAhOIABgBIAACeIgBABg");
	this.shape_2.setTransform(29.5,10.6);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#8E5D5C").s().p("AAAhOIABgBIAACeIgBABg");
	this.shape_3.setTransform(27.8,11.4);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#8E5D5C").s().p("AAAhOIABgBIAACeIgBABg");
	this.shape_4.setTransform(26.2,12.3);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#8E5D5C").s().p("AAAhOIABgBIAACeIgBABg");
	this.shape_5.setTransform(24.6,13.1);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#8E5D5C").s().p("AAAhOIABgBIAACeIgBABg");
	this.shape_6.setTransform(22.9,13.9);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#8E5D5C").s().p("AAAhPIABAAIAACfIgBAAg");
	this.shape_7.setTransform(21.3,14.7);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#8E5D5C").s().p("AAAhOIABgBIAACeIgBABg");
	this.shape_8.setTransform(19.7,15.5);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#8E5D5C").s().p("AAAhOIABgBIAACeIgBABg");
	this.shape_9.setTransform(18,16.3);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#8E5D5C").s().p("AAAhPIABAAIAACfIgBAAg");
	this.shape_10.setTransform(16.4,17.2);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#8E5D5C").s().p("AAAhOIABgBIAACfIgBAAg");
	this.shape_11.setTransform(14.8,18);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#8E5D5C").s().p("AAAhOIABgBIAACeIgBABg");
	this.shape_12.setTransform(13.1,18.8);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#8E5D5C").s().p("AAAhPIABAAIAACeIgBABg");
	this.shape_13.setTransform(11.5,19.6);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#8E5D5C").s().p("AAAhOIABgBIAACfIgBAAg");
	this.shape_14.setTransform(9.9,20.4);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#8E5D5C").s().p("AAAhOIABgBIAACeIgBABg");
	this.shape_15.setTransform(8.2,21.2);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#8E5D5C").s().p("AAAhOIABgBIAACeIgBABg");
	this.shape_16.setTransform(6.6,22.1);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#8E5D5C").s().p("AAAhOIABgBIAACeIgBABg");
	this.shape_17.setTransform(5,22.9);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#8E5D5C").s().p("AAAhOIABgBIAACeIgBABg");
	this.shape_18.setTransform(3.3,23.7);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#8E5D5C").s().p("AirBVIFXirIAAACIlXCrg");
	this.shape_19.setTransform(17.3,21.2);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#8E5D5C").s().p("AirBVIFXirIAAACIlXCrg");
	this.shape_20.setTransform(17.3,19.4);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#8E5D5C").s().p("AirBVIFXirIAAACIlXCrg");
	this.shape_21.setTransform(17.3,17.6);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#8E5D5C").s().p("AirBVIFXirIAAACIlXCrg");
	this.shape_22.setTransform(17.3,15.8);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#8E5D5C").s().p("AirBVIFXirIAAACIlXCrg");
	this.shape_23.setTransform(17.3,14);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("#8E5D5C").s().p("AAAhOIABgBIAACeIgBABg");
	this.shape_24.setTransform(1.7,24.5);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#8E5D5C").s().p("AisAGIFZisIAAChIlZCsgAiqAHIAACdIFViqIAAieg");
	this.shape_25.setTransform(17.3,16.7);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_25},{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.Group590, new cjs.Rectangle(0,0,34.6,33.4), null);


(lib.Group586 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#8E5D5C").s().p("AirBWIFXisIAAACIlXCrg");
	this.shape.setTransform(17.2,8.7);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Group586, new cjs.Rectangle(0,0,34.4,17.4), null);


(lib.Group582 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#8E5D5C").s().p("AirBVIFXirIAAACIlXCrg");
	this.shape.setTransform(17.2,8.7);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Group582, new cjs.Rectangle(0,0,34.4,17.4), null);


(lib.Group578 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#8E5D5C").s().p("AirBVIFXirIAAACIlXCrg");
	this.shape.setTransform(17.2,8.7);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Group578, new cjs.Rectangle(0,0,34.4,17.4), null);


(lib.Group472 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#8E5D5C").s().p("AAAhOIABgBIAACeIgBABg");
	this.shape.setTransform(32.7,9);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#8E5D5C").s().p("AAAhPIABAAIAACeIgBABg");
	this.shape_1.setTransform(31.1,9.9);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#8E5D5C").s().p("AAAhOIABgBIAACfIgBAAg");
	this.shape_2.setTransform(29.5,10.7);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#8E5D5C").s().p("AAAhOIABgBIAACeIgBABg");
	this.shape_3.setTransform(27.8,11.5);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#8E5D5C").s().p("AAAhPIABAAIAACeIgBABg");
	this.shape_4.setTransform(26.2,12.3);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#8E5D5C").s().p("AAAhOIABgBIAACfIgBAAg");
	this.shape_5.setTransform(24.6,13.1);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#8E5D5C").s().p("AAAhOIABgBIAACeIgBABg");
	this.shape_6.setTransform(22.9,13.9);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#8E5D5C").s().p("AAAhOIABgBIAACeIgBABg");
	this.shape_7.setTransform(21.3,14.8);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#8E5D5C").s().p("AAAhOIABgBIAACeIgBABg");
	this.shape_8.setTransform(19.7,15.6);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#8E5D5C").s().p("AAAhOIABgBIAACeIgBABg");
	this.shape_9.setTransform(18,16.4);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#8E5D5C").s().p("AAAhOIABgBIAACeIgBABg");
	this.shape_10.setTransform(16.4,17.2);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#8E5D5C").s().p("AAAhOIABgBIAACeIgBABg");
	this.shape_11.setTransform(14.8,18);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#8E5D5C").s().p("AAAhOIABgBIAACeIgBABg");
	this.shape_12.setTransform(13.1,18.8);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#8E5D5C").s().p("AAAhPIABAAIAACeIgBABg");
	this.shape_13.setTransform(11.5,19.7);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#8E5D5C").s().p("AAAhOIABgBIAACfIgBAAg");
	this.shape_14.setTransform(9.9,20.5);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#8E5D5C").s().p("AAAhOIABgBIAACeIgBABg");
	this.shape_15.setTransform(8.2,21.3);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#8E5D5C").s().p("AAAhOIABgBIAACeIgBABg");
	this.shape_16.setTransform(6.6,22.1);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#8E5D5C").s().p("AAAhPIABAAIAACfIgBAAg");
	this.shape_17.setTransform(5,22.9);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#8E5D5C").s().p("AAAhOIABgBIAACeIgBABg");
	this.shape_18.setTransform(3.3,23.7);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#8E5D5C").s().p("AirBVIFXirIAAABIlXCsg");
	this.shape_19.setTransform(17.3,21.3);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#8E5D5C").s().p("AirBVIFXirIAAABIlXCsg");
	this.shape_20.setTransform(17.3,19.5);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#8E5D5C").s().p("AirBVIFXirIAAABIlXCsg");
	this.shape_21.setTransform(17.3,17.7);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#8E5D5C").s().p("AirBVIFXirIAAABIlXCsg");
	this.shape_22.setTransform(17.3,15.9);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#8E5D5C").s().p("AirBVIFXirIAAABIlXCsg");
	this.shape_23.setTransform(17.3,14.1);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("#8E5D5C").s().p("AAAhOIABgBIAACeIgBABg");
	this.shape_24.setTransform(1.7,24.5);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#8E5D5C").s().p("AisAGIFZisIAAChIlZCsgAiqAHIAACeIFWirIAAidg");
	this.shape_25.setTransform(17.3,16.7);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_25},{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.Group472, new cjs.Rectangle(0,0,34.6,33.5), null);


(lib.Group468 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#8E5D5C").s().p("AirBVIFXirIAAACIlXCrg");
	this.shape.setTransform(17.2,8.7);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Group468, new cjs.Rectangle(0,0,34.4,17.4), null);


(lib.Group464 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#8E5D5C").s().p("AirBVIFXirIAAACIlXCrg");
	this.shape.setTransform(17.2,8.7);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Group464, new cjs.Rectangle(0,0,34.4,17.4), null);


(lib.Group460 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#8E5D5C").s().p("AirBVIFXirIAAACIlXCrg");
	this.shape.setTransform(17.2,8.7);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Group460, new cjs.Rectangle(0,0,34.4,17.4), null);


(lib.Group280 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#6F4949").s().p("AAAg4IAAAAIAABxIAAAAg");
	this.shape.setTransform(23.3,6.4);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#6F4949").s().p("AAAg3IABgBIAABxIgBAAg");
	this.shape_1.setTransform(22.2,7);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#6F4949").s().p("AAAg3IABgBIAABwIgBABg");
	this.shape_2.setTransform(21,7.6);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#6F4949").s().p("AAAg4IABAAIAABxIgBAAg");
	this.shape_3.setTransform(19.8,8.2);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#6F4949").s().p("AAAg4IABAAIAABwIgBABg");
	this.shape_4.setTransform(18.7,8.8);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#6F4949").s().p("AAAg3IAAgBIAABxIAAAAg");
	this.shape_5.setTransform(17.5,9.3);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#6F4949").s().p("AAAg3IABgBIAABwIgBABg");
	this.shape_6.setTransform(15.2,10.5);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#6F4949").s().p("AAAg3IAAgBIAABxIAAAAg");
	this.shape_7.setTransform(14,11.1);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#6F4949").s().p("AAAg3IAAgBIAABwIAAABg");
	this.shape_8.setTransform(12.9,11.7);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#6F4949").s().p("AAAg4IABAAIAABxIgBAAg");
	this.shape_9.setTransform(11.7,12.3);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#6F4949").s().p("AAAg4IABAAIAABxIgBAAg");
	this.shape_10.setTransform(10.5,12.8);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#6F4949").s().p("AAAg4IAAAAIAABxIAAAAg");
	this.shape_11.setTransform(9.4,13.4);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#6F4949").s().p("AAAg3IABgBIAABwIgBABg");
	this.shape_12.setTransform(8.2,14);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#6F4949").s().p("AAAg4IABAAIAABxIgBAAg");
	this.shape_13.setTransform(7,14.6);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#6F4949").s().p("AAAg3IABgBIAABwIgBABg");
	this.shape_14.setTransform(5.9,15.2);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#6F4949").s().p("AAAg3IABgBIAABxIgBAAg");
	this.shape_15.setTransform(4.7,15.7);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#6F4949").s().p("AAAg3IABgBIAABxIgBAAg");
	this.shape_16.setTransform(2.4,16.9);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#6F4949").s().p("Ah6A9ID1h6IAAABIj1B6g");
	this.shape_17.setTransform(12.3,15.2);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#6F4949").s().p("Ah6A9ID1h6IAAABIj1B6g");
	this.shape_18.setTransform(12.3,12.6);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#6F4949").s().p("Ah6A9ID1h6IAAABIj1B6g");
	this.shape_19.setTransform(12.3,11.3);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#6F4949").s().p("AAAg3IABgBIAABxIgBAAg");
	this.shape_20.setTransform(1.2,17.5);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#6F4949").s().p("Ah6AEID1h6IAABzIj1B6gAh5AFIAABwIDzh5IAAhwg");
	this.shape_21.setTransform(12.3,11.9);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.Group280, new cjs.Rectangle(0,0,24.7,23.9), null);


(lib.Group276 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#6F4949").s().p("Ah6A9ID1h6IAAACIj1B5g");
	this.shape.setTransform(12.3,6.2);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Group276, new cjs.Rectangle(0,0,24.6,12.4), null);


(lib.Group272 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#6F4949").s().p("Ah6A9ID1h6IAAACIj1B5g");
	this.shape.setTransform(12.3,6.2);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Group272, new cjs.Rectangle(0,0,24.6,12.4), null);


(lib.Group268 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#6F4949").s().p("Ah6A8ID1h5IAAABIj1B6g");
	this.shape.setTransform(12.3,6.2);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Group268, new cjs.Rectangle(0,0,24.6,12.4), null);


(lib.Group162 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#6F4949").s().p("AAAg4IAAAAIAABxIAAAAg");
	this.shape.setTransform(23.3,6.4);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#6F4949").s().p("AAAg4IABAAIAABxIgBAAg");
	this.shape_1.setTransform(22.2,7);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#6F4949").s().p("AAAg4IABAAIAABxIgBAAg");
	this.shape_2.setTransform(21,7.6);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#6F4949").s().p("AAAg3IABgBIAABwIgBABg");
	this.shape_3.setTransform(19.8,8.2);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#6F4949").s().p("AAAg4IABAAIAABwIgBABg");
	this.shape_4.setTransform(18.7,8.7);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#6F4949").s().p("AAAg3IAAgBIAABwIAAABg");
	this.shape_5.setTransform(17.5,9.3);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#6F4949").s().p("AAAg3IAAgBIAABxIAAAAg");
	this.shape_6.setTransform(16.4,9.9);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#6F4949").s().p("AAAg4IABAAIAABwIgBABg");
	this.shape_7.setTransform(15.2,10.5);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#6F4949").s().p("AAAg3IAAgBIAABxIAAAAg");
	this.shape_8.setTransform(14,11.1);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#6F4949").s().p("AAAg4IAAAAIAABxIAAAAg");
	this.shape_9.setTransform(12.9,11.6);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#6F4949").s().p("AAAg3IABgBIAABwIgBABg");
	this.shape_10.setTransform(11.7,12.2);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#6F4949").s().p("AAAg4IABAAIAABwIgBABg");
	this.shape_11.setTransform(10.5,12.8);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#6F4949").s().p("AAAg4IAAAAIAABxIAAAAg");
	this.shape_12.setTransform(9.4,13.4);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#6F4949").s().p("AAAg4IABAAIAABxIgBAAg");
	this.shape_13.setTransform(8.2,14);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#6F4949").s().p("AAAg3IABgBIAABwIgBABg");
	this.shape_14.setTransform(7,14.6);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#6F4949").s().p("AAAg3IABgBIAABwIgBABg");
	this.shape_15.setTransform(4.7,15.7);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#6F4949").s().p("AAAg3IAAgBIAABxIAAAAg");
	this.shape_16.setTransform(3.6,16.3);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#6F4949").s().p("AAAg4IABAAIAABwIgBABg");
	this.shape_17.setTransform(2.4,16.9);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#6F4949").s().p("Ah6A9ID1h6IAAABIj1B6g");
	this.shape_18.setTransform(12.3,13.8);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#6F4949").s().p("Ah6A9ID1h6IAAABIj1B6g");
	this.shape_19.setTransform(12.3,12.6);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#6F4949").s().p("Ah6A9ID1h6IAAABIj1B6g");
	this.shape_20.setTransform(12.3,10);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#6F4949").s().p("AAAg4IABAAIAABxIgBAAg");
	this.shape_21.setTransform(1.2,17.5);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#6F4949").s().p("Ah6AEID1h6IAAByIj1B7gAh5AEIAABxIDzh5IAAhwg");
	this.shape_22.setTransform(12.3,11.9);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.Group162, new cjs.Rectangle(0,0,24.7,23.8), null);


(lib.Group158 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#6F4949").s().p("Ah6A8ID1h5IAAABIj1B6g");
	this.shape.setTransform(12.3,6.2);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Group158, new cjs.Rectangle(0,0,24.6,12.4), null);


(lib.Group154 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#6F4949").s().p("Ah6A8ID1h5IAAABIj1B6g");
	this.shape.setTransform(12.3,6.2);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Group154, new cjs.Rectangle(0,0,24.6,12.4), null);


(lib.Group150 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

}).prototype = getMCSymbolPrototype(lib.Group150, null, null);


(lib.Group44 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#6F4949").s().p("AAAg4IAAAAIAABxIAAAAg");
	this.shape.setTransform(23.3,6.4);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#6F4949").s().p("AAAg4IABAAIAABxIgBAAg");
	this.shape_1.setTransform(21,7.6);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#6F4949").s().p("AAAg3IABgBIAABxIgBAAg");
	this.shape_2.setTransform(19.8,8.1);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#6F4949").s().p("AAAg4IABAAIAABwIgBABg");
	this.shape_3.setTransform(18.7,8.7);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#6F4949").s().p("AAAg3IAAgBIAABwIAAABg");
	this.shape_4.setTransform(17.5,9.3);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#6F4949").s().p("AAAg3IAAgBIAABxIAAAAg");
	this.shape_5.setTransform(16.4,9.9);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#6F4949").s().p("AAAg4IABAAIAABxIgBAAg");
	this.shape_6.setTransform(15.2,10.5);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#6F4949").s().p("AAAg3IAAgBIAABxIAAAAg");
	this.shape_7.setTransform(14,11.1);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#6F4949").s().p("AAAg4IAAAAIAABxIAAAAg");
	this.shape_8.setTransform(12.9,11.6);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#6F4949").s().p("AAAg3IABgBIAABwIgBABg");
	this.shape_9.setTransform(11.7,12.2);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#6F4949").s().p("AAAg4IABAAIAABwIgBABg");
	this.shape_10.setTransform(10.5,12.8);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#6F4949").s().p("AAAg4IABAAIAABxIgBAAg");
	this.shape_11.setTransform(8.2,14);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#6F4949").s().p("AAAg3IABgBIAABxIgBAAg");
	this.shape_12.setTransform(7,14.5);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#6F4949").s().p("AAAg3IABgBIAABwIgBABg");
	this.shape_13.setTransform(4.7,15.7);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#6F4949").s().p("AAAg3IAAgBIAABxIAAAAg");
	this.shape_14.setTransform(3.6,16.3);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#6F4949").s().p("AAAg4IABAAIAABwIgBABg");
	this.shape_15.setTransform(2.4,16.9);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#6F4949").s().p("Ah6A8ID1h5IAAABIj1B6g");
	this.shape_16.setTransform(12.3,15.1);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#6F4949").s().p("Ah6A9ID1h6IAAABIj1B6g");
	this.shape_17.setTransform(12.3,13.8);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#6F4949").s().p("Ah6A9ID1h6IAAABIj1B6g");
	this.shape_18.setTransform(12.3,12.5);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#6F4949").s().p("Ah6A8ID1h5IAAABIj1B6g");
	this.shape_19.setTransform(12.3,11.3);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#6F4949").s().p("Ah6A9ID1h6IAAABIj1B6g");
	this.shape_20.setTransform(12.3,10);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#6F4949").s().p("AAAg4IABAAIAABxIgBAAg");
	this.shape_21.setTransform(1.2,17.5);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#6F4949").s().p("Ah6AEID1h6IAAByIj1B7gAh5AEIAABxIDzh5IAAhwg");
	this.shape_22.setTransform(12.3,11.9);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.Group44, new cjs.Rectangle(0,0,24.7,23.8), null);


(lib.Group40 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#6F4949").s().p("Ah6A9ID1h6IAAABIj1B6g");
	this.shape.setTransform(12.3,6.2);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Group40, new cjs.Rectangle(0,0,24.6,12.4), null);


(lib.Group36 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#6F4949").s().p("Ah6A9ID1h6IAAABIj1B6g");
	this.shape.setTransform(12.3,6.2);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Group36, new cjs.Rectangle(0,0,24.6,12.4), null);


(lib.Group32 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#6F4949").s().p("Ah6A8ID1h5IAAABIj1B6g");
	this.shape.setTransform(12.3,6.2);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Group32, new cjs.Rectangle(0,0,24.6,12.4), null);


(lib.Group2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("AojEsIleiqIAxgVIFRBXIKSl5Ii5hqIAtgMIEpBqIB+BDIA4APQA6AOAOgCQALAAB6ABQCEgBA+gOIALA3QAFANgKATQgVAkhPAZQhGAWgjgOQgTgJgMgEQgWgHgfABQhmADg7gIQhcgMgagnQgYgng4grIgzgkIqNF0IAABOg");
	this.shape.setTransform(89.8,30);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Group2, new cjs.Rectangle(0,0,179.6,59.9), null);


(lib.Talkinghead = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Tween4("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(13.1,24,1,1,0,0,0,4,11.7);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({startPosition:0},29).to({rotation:-6.5,x:13},5).to({regY:11.8,rotation:6.5},5).to({regY:11.7,rotation:-6.5},5).to({rotation:6.7,x:13.1,y:23.9},5).to({regY:11.8,rotation:-5.4,y:24},5).to({regY:11.7,rotation:0},5).wait(86));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,18.1,24.6);


(lib.Leader = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 4
	this.instance = new lib.Tween2("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(58,14,1,1,0,15,-165,2.6,4);
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(31).to({_off:false},0).to({skewX:30,skewY:-150,x:59.6,y:15},18).to({startPosition:0},35).to({skewX:15,skewY:-165,x:58,y:14},15).to({_off:true},1).wait(45));

	// Head
	this.instance_1 = new lib.Tween2("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(64.8,14.1,1,1,0,0,0,2.5,4);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({regX:2.6,rotation:-15,x:64.9,y:14},12).to({startPosition:0},18).to({_off:true},1).wait(69).to({_off:false},0).to({regX:2.5,rotation:0,x:64.8,y:14.1},14).wait(31));

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#421A18").s().p("AgMgKQAEgNAOgKQAHgFAHgDIgCANIgGAVQgFAVACAIQgOAHgOANQAAgZAHgbg");
	this.shape.setTransform(55,25.6);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#421A18").s().p("AgyATIAhgVQAhgbAAgSIAPANQAQAQAEAJQgkAkgtAVQgLgMgJgRg");
	this.shape_1.setTransform(65.3,27);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#581110").s().p("ABEChIgJgCIgqgNQgmgOgqgVIgogTIgQgGQgKgFgCgHQgBgGABgHQADgfAPgHQCUAzACAAQADg1AGg3QAMhvAXgOIAOgCQAQAAAIAHQAMALACAoIgIBUQgJBZgIAhQgIAggNARIgLAKIgCAAIgGgBg");
	this.shape_2.setTransform(63.9,45.2);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#6B2525").s().p("AhJDiQAEgQAQiwQAQi0gCgLQgDgbABgcIBNgTIAmAsIgEAmQgFAqgFAZQgFAZgDB/IgBB6QgFAng7ABg");
	this.shape_3.setTransform(64.4,50.2);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#EAC7A3").s().p("AAAAkQgbgFgGgTQgHgUAJgRQAJgPALAFQANAHAjAXIgNAqIgHAAQgJAAgIgBg");
	this.shape_4.setTransform(48.8,48.5);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#4D4742").s().p("Ag8A8IAAi1IB5A+IAAC0g");
	this.shape_5.setTransform(51.9,48.9);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#3C3734").s().p("Ag5A7IgGiyIAGgDIB4A9IAAC1IgEADg");
	this.shape_6.setTransform(52.2,48.7);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#6B2525").s().p("AgXDRQgTgPgDgRQgCgSACibIADiWIAxhIIAoAIQgYAvgFAyIgWFMQgJgEgKgGg");
	this.shape_7.setTransform(51.2,48.9);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#F2F2F2").s().p("AgSC6IgigVIgRjFIA+inQALAYAiAHQARAEAPgBIgPFqQgKADgMAAQgZAAgagOg");
	this.shape_8.setTransform(55.3,47);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#DCBA98").s().p("Ag9BjQABgSAShjIAShiIBWAKIgHBQQgHBTAAAYQAAAag2AIQgOACgKAAQgfAAAAgSg");
	this.shape_9.setTransform(61.5,22.2);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#6B2525").s().p("AghDhQgegFgXgOQgZgOgEgPQgGgcgDgpIgFhGQgHg/gBgkQgDg4AIgsIACgRQADgLAHgCIAzgLQAegHASgMQAPgHAbADQAPACALADIAiAjQAlAlAQAIQAQAIgnCEIg5C7QgJAogzAAQgMAAgPgCg");
	this.shape_10.setTransform(60.8,43.1);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#2C2F3A").s().p("AAUFNQgZjTgVg/QhdkbAThFQAMgrAzgLQAagGAXADIAPBAQAPBJAAAyQgBA8AHBGQAIBGAIALQAJAMAPA4QAQA6AAAZIAACOQgNAHgRADIgMABQgZAAgRgTg");
	this.shape_11.setTransform(63.5,90.1);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#1C1E24").s().p("AhgFCQgfgKgHgdQA3hzAPiAQAJhRAkiXIAhiGQB7AcgDAIIgeBlQghBvgSAwQgZBBgBBIQgDAlgLAfQgKAYhFCAIgDAAQgNAAgOgFg");
	this.shape_12.setTransform(48.7,90.2);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#FFFFFF").s().p("AAKAHIgIgHIgOgKIAGAAIAGABQAEACABACIAFAFIACAFQABADgBADg");
	this.shape_13.setTransform(28.3,126.8);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#FFFFFF").s().p("AAFACIgEgDIgNgJIABAAIAFAAIAGABIAFAEIAFAFIADAFQAAADAAADg");
	this.shape_14.setTransform(30.7,125.5);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#FFFFFF").s().p("AAKAGIgEgDIgEgEIgOgKIAGAAIAGACIAGAEIAEAFIADAFIAAAHg");
	this.shape_15.setTransform(32.7,124.4);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#FFFFFF").s().p("AAGADIgIgHIgKgGIACAAIAEAAIAGABIAFAEIAFAFIADAFIAAAGg");
	this.shape_16.setTransform(35,122.9);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#471313").s().p("AhOA4QgegPAQgUQAIgKAOgHIAwgXQAzgcAOgRQAFgHAZAOQAMAHALAJQAGAhgGALQgDAHgZAPIgnAXQgYARgcACIgHABQgZAAgXgMg");
	this.shape_17.setTransform(31.8,125.7);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#290A09").s().p("AgzAqQgbgDgNgOQgLgMAGgPIAIgNIC7gaIgEAWQhAAxggAIQgSAEgRAAIgPAAg");
	this.shape_18.setTransform(31.7,129.1);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#FFFFFF").s().p("AAGACIgSgHIgCgBIACgBIAEgBIAGAAIAGADIAGAEIAEAEQABADAAADg");
	this.shape_19.setTransform(60.5,131.8);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#FFFFFF").s().p("AAHACIgGgCIgOgGIgBAAIABgBIAFgBIAGAAIAGACIAGAFIADAEIACAGg");
	this.shape_20.setTransform(62.6,130);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#FFFFFF").s().p("AABAAIgNgGIgCAAIACgBIAEgBIAGAAIAGACIAGAFIAEAEIABAGg");
	this.shape_21.setTransform(64.3,128.4);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#FFFFFF").s().p("AALAFIgFgDIgJgEIgFgCIgEgBIgCgBIAGgCQADgBADABIAGACIAGAFIADAEQACADAAADg");
	this.shape_22.setTransform(66.2,126.5);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#471313").s().p("AhCBJQghgHALgXIASgWIAqgiQArgmAJgUQAEgIAbAIQANAEANAGIAGARQAGATgBAIQgCAHgVAUIghAgQgTAVgbAJQgQAEgPAAQgNAAgMgDg");
	this.shape_23.setTransform(64.1,129.9);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("#290A09").s().p("AhPAyQgOgJACgRIAFgPICxhCIABAWQgzA9geAQQgXANgYADIgLAAQgTAAgNgIg");
	this.shape_24.setTransform(64.1,132.8);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(145));

	// Arm
	this.instance_2 = new lib.Tween1("synched",0);
	this.instance_2.parent = this;
	this.instance_2.setTransform(49.5,27.5,1,1,0,0,0,22.6,-2.3);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).to({regY:-2.2,rotation:-35.2,x:50.5},19).to({startPosition:0},81).to({regY:-2.3,rotation:0,x:49.5},14).wait(31));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,77.2,138.7);


(lib.Armup = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Tween3("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(21.3,88,1,1,0,0,0,6,25.3);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({startPosition:0},19).to({x:15.1,y:51.7},5).to({startPosition:0},35).to({x:21.3,y:88},4).wait(82));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(6.3,36.3,18.1,52.8);


// stage content:
(lib.step5 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 5
	this.instance = new lib.Talkinghead();
	this.instance.parent = this;
	this.instance.setTransform(326.1,157.2,1,1,0,0,0,9.1,12.3);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

	// Layer 2
	this.instance_1 = new lib.Leader();
	this.instance_1.parent = this;
	this.instance_1.setTransform(215,115.5,1,1,0,0,0,38.6,69.3);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(1));

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#AFACA6").s().p("ABLC4IjChoQgCgCAAgDIAAgGQABgDAEgDQgDACgBAFIAAAFIABAEIDEBhQAOgKAHgPQAHgQgDgRQgCgRgIgRQgDgHgFgJIgKgPIgBgDIAxjpIgpDpIAFAHIANAYQAJASACASQABAKgBAKQgBAIgEALQgEAHgHAJQgHAHgIAFIgCABIgCgBg");
	this.shape.setTransform(284.1,321.3);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#1C1C1C").s().p("AiXC1IgZgyIAsjkQAEgSAQgIIERiIIAGgBQAEABADADQADAEgBAEIgmDvQAaA2gLAjQgFASgKAHIk6CcQApgagQg2g");
	this.shape_1.setTransform(309.5,313.2);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#445A4B").s().p("AAiCEQgVgBgcgHIgygMIgtgKQgOgDgEgMQgEgKAEgOQAHgYAMABIA6AEQAjACAWgBQAVhxAHgdQAEgSAFgHQAIgKAQAAQAbABARAWQAIAJAHAPQAIASgDAJIgnBfQgpBggRAAIAAgBg");
	this.shape_2.setTransform(288.3,298.6);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#000000").s().p("AgSBUQgCgegFgVQgJgngZAMQAAANgFARIgGgoQAEgIgLgKQgJgIAGgSQAHgUAZgMQAwgWAwAeQAyAfgWA1QgJAVgRAXQgOAUgBAEQgCAJgYABIgIAAQgQAAgDgGg");
	this.shape_3.setTransform(304.3,269.5);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#E8DCD1").s().p("AgIAVQgCgCAGgHQAIgMgHgMIgBgDQAAgEAEgBIAJAMQAFAPgSAOIgCAAIgCAAg");
	this.shape_4.setTransform(299.5,272.5);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#DEBC9A").s().p("AAAA0QgegCgLgTQARhAgDgIQgCgFAjgDIAkgCIgKArQgJArADAHQAEAKgXAAIgHAAg");
	this.shape_5.setTransform(304.6,278.6);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#E1C9B1").s().p("AgZAiQgRgGgLgNQgHgKABgIQAAgIAGAAIAgAJQAYAEADgHQADgHgOgHIgPgGIgDgFQgDgGADgBQAKgFA+AkQAHAGADAIQACAJgDAIQgNAGgRAEQgQAEgMAAQgOAAgLgFg");
	this.shape_6.setTransform(271.3,304.1);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#DEBC9A").s().p("Ag/BTQgJgPgDgyQgDg6AXgaIAfgSQAlgOAhAUQAhAUgDApQgCATgIAQQgNARgSARQglAjgbACQgGACgIAAIgCAAQgOAAgEgIg");
	this.shape_7.setTransform(303.6,271.4);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#587560").s().p("AgzD4QgWgGgjgQQgRgIgHgQQgEgPAFgQQAXhFAIgkQAOg+gBg+QgIhTAOgmQAWg3BNgQIAuABIANADQAPAEAMAJQAlAdgHA8QgIBFgbCRQgbCOgGAJQgIALgTAHIgfAIQgOAEgPAAQgPAAgPgDg");
	this.shape_8.setTransform(299.9,306.6);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#2C2C2C").s().p("AjaDDQgJgEgIgJQgIgLABgJQANhWAThXQAniwAfgIQAfgICKAuQBFAXA/AZIBTBGQgEAYgmAHQhLAPiohRIgzgeIgDgBQgCAAgBAHQgFAbgXBIQgYBQgFAUIgNA3IgEAWQgEANgJAEQgIADgJAAQgIAAgIgDg");
	this.shape_9.setTransform(280.1,332.7);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#4E4134").s().p("AAbAoIgUgOQgNgDgQgGQgfgNgLgPQgFgFAAgHQABgHAFgFIAEgDQAJgFAPAEIAYAIIAYAFQAIgCALAAIAmARIgCAQQgCATgEAGQgEAIgOADIgKABQgFAAgCgCg");
	this.shape_10.setTransform(254.2,352.6);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#453B2E").s().p("AAaAoIgUgOQgMgDgQgGQgfgMgLgPQgLgQAMgJIAPgGIAhAKQAjAJAMgGIAmARIgCARQgCATgEAGQgEAHgOADIgKABQgFAAgDgCg");
	this.shape_11.setTransform(254.1,353.2);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#202121").s().p("Aj5APQgFgCgBgFQgCgFADgDQABgEAEgCIDShnQAFgDAGADIEdBBIk6Cbg");
	this.shape_12.setTransform(297.6,328.2);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#A19F94").s().p("AgdCeIA1lBIAGAuIgrEZg");
	this.shape_13.setTransform(302.5,330.1);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#7F7C75").s().p("AATimIAPADIgxFAIgSAJg");
	this.shape_14.setTransform(304.5,329.9);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#A19F94").s().p("AAVCUIg9kvIAhAiIAwEVg");
	this.shape_15.setTransform(317.4,338.6);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#7F7C75").s().p("AgoibIATgMIA9FFIgLAKg");
	this.shape_16.setTransform(318.6,337.3);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#A19F94").s().p("AgrCZIBVk5IACAuIhHEUg");
	this.shape_17.setTransform(277.3,340.2);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#7F7C75").s().p("AAkiiIAOAFIhQE5IgUAHg");
	this.shape_18.setTransform(279.6,340);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#A19F94").s().p("AAGCWIgek1IAcAlIAVEag");
	this.shape_19.setTransform(291.5,350.1);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#7F7C75").s().p("AgYifIAUgKIAdFJIgOAKg");
	this.shape_20.setTransform(292.8,349);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#252525").s().p("AiYC7QgTgEgNgNQgMgMABgEQBak4AcgYQATgRCAA0QBBAaA9AeIgeBFIjGhSQgDAVgJATIhSDYIgIAYQgGALgKAAIgCAAg");
	this.shape_21.setTransform(283.7,326.7);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#4E4134").s().p("AAaAoIgUgOQgMgDgQgGQgfgNgLgPQgFgFAAgHQABgHAFgFIAEgDQAJgFAPAEIAYAIIAYAFIATgCIAmARIgCARQgCATgEAGQgEAHgOADIgKABQgFAAgDgCg");
	this.shape_22.setTransform(262.5,344.5);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#453B2E").s().p("AAaAoIgUgOQgMgDgQgGQgfgMgLgPQgLgQAMgJIAPgGQA9AXATgKIAmARIgCARQgCATgEAGQgEAHgOADIgKABQgFAAgDgCg");
	this.shape_23.setTransform(262.4,345.2);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("#AFACA6").s().p("ABLC4IjChoQgBgCAAgDIAAgFQABgGAFgCQgEADgCAFIAAAFIACAFIDDBgQAOgJAHgPQAHgPgDgTQgCgSgIgQIgSgfIAAgDIAwjqIgpDqIAJAOQAGAKADAHQAIARADATQABAKgBAJQgCAMgEAHQgDAJgHAIQgGAFgJAHIgCABIgCgBg");
	this.shape_24.setTransform(326.6,301.4);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#1C1C1C").s().p("AiXC1IgZgyIAsjkQADgSARgIIERiIIAGgBQAFABACADQADAEgBAEIgmDwQAaA1gKAjQgGASgKAGIk6CdQApgagQg2g");
	this.shape_25.setTransform(351.9,293.3);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f("#BBA672").s().p("AAGBoIgggGQAEgEABgCIgEgXQgDgRgdgpQgbgogBgJQgCgNAWgfQAFgGAFgDQAagOAdABQAdABAaAPQAoAagMBTQgFAigQAdQgSAVgfAAIgHgBg");
	this.shape_26.setTransform(340.2,253.4);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f("#392937").s().p("AhLAeQgIgQAQgRIA+gUQA/gUAKADQALAEAAAWQgBAVgLACIg9AQQg1AOgQACQgHgEgFgHg");
	this.shape_27.setTransform(322.1,289.6);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f("#D0BAA3").s().p("AgkALQgPgXAdgCIA9gEIADAiQgRACgSABIgHAAQgeAAgGgIg");
	this.shape_28.setTransform(311.4,291.1);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f("#392937").s().p("AgkByQgRgIAFgKQAJg8AMg0QAXhqAZAHQAaAHADAgQABAQgDAPQggB5gUAcQgKANgLAAQgFAAgGgDg");
	this.shape_29.setTransform(330.5,278.8);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f("#443143").s().p("AhHCVQgNgWADgaQAHgmgMglQgGgMgGg0QgGg1AAgkIAMgQQAUgSAkgJQAqgMAkABQAhAAAKALQAJAJAAASQAAAJgCAHIgGAtQgHAxgHAWQgHAVATA7QAJAeAMAhQgrAygxAAQgnAAgtghg");
	this.shape_30.setTransform(340.5,282.6);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f("#191B2B").s().p("AgXBaQgrgKgKgGQhmg6gIgGQgDgDABgSQACgVAJgSQAag4BCAIQBVAJBRATIBhAVIAIAWQAHAbgIAUQgMAkgfAWQgfAWgmAAIgLAAQgnAAgugKg");
	this.shape_31.setTransform(332.4,300.5);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f("#272D4D").s().p("AgIA4QgCgEABguQACgtgDgCQgGgEAMgKQALgJAGAKIgIBuQgFAEgDAAQgDAAgCgEg");
	this.shape_32.setTransform(315,331.8);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f("#1E2136").s().p("AgWAzQgEgXAJgZQAOgcAVgaQADgDACALIABAMIgRAaQgRAcAAAUQgJAJgCAAIgBgBg");
	this.shape_33.setTransform(312.7,331.9);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f("#272D4D").s().p("AgfBHIgZgJQgDgGABgGQABgLAPAAQAPAAAKgUIAGgTQAQgrASgSIAOgKQAJgFAKAZQALAagXAQQgWAOgHAeQgDAPABAMQgMALgRAAQgHAAgIgCg");
	this.shape_34.setTransform(310.4,330.1);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f("#DFC7AF").s().p("AgpCEIgFiaQgFiQAKgOQALgOAoAJQAUAFATAHIgVA8QgTBCADAYQADAUgIAoQgHAvAAAiQACApgYAUQgNAJgMACQABgfAFgbg");
	this.shape_35.setTransform(314,311.1);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f("#D0BAA3").s().p("AgoAuIAOg0IBDguIgHArQgHArABAGQgMAGgOADQgLAEgJAAQgOAAgIgHg");
	this.shape_36.setTransform(340.9,260.8);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f("#DFC7AF").s().p("AgkBXQgWghgGgoQgHgnAMgnQAQg2A4BCQAdAhAZAqQgPAUgVARQggAdgYAAQgFAAgGgCg");
	this.shape_37.setTransform(338.3,255.1);

	this.shape_38 = new cjs.Shape();
	this.shape_38.graphics.f("#DFC7AF").s().p("Ag3A4QgYgXAAghQAAggAYgXQAXgYAgAAQAhAAAXAYQAYAXAAAgQAAAhgYAXQgXAYghAAQggAAgXgYg");
	this.shape_38.setTransform(339.7,251.4);

	this.shape_39 = new cjs.Shape();
	this.shape_39.graphics.f("#2E2F2F").s().p("Aj5APQgKgGAFgKQACgDADgCIDShnQAGgDAFADIEdBBIk6Cbg");
	this.shape_39.setTransform(340,308.2);

	this.shape_40 = new cjs.Shape();
	this.shape_40.graphics.f("#A19F94").s().p("AgdCeIA1lBIAGAuIgrEZg");
	this.shape_40.setTransform(344.9,310.1);

	this.shape_41 = new cjs.Shape();
	this.shape_41.graphics.f("#7F7C75").s().p("AATimIAPAEIgwE/IgTAKg");
	this.shape_41.setTransform(347,309.9);

	this.shape_42 = new cjs.Shape();
	this.shape_42.graphics.f("#A19F94").s().p("AAWCUIg+kvIAgAhIAxEWg");
	this.shape_42.setTransform(359.8,318.6);

	this.shape_43 = new cjs.Shape();
	this.shape_43.graphics.f("#7F7C75").s().p("AgoicIATgLIA+FEIgNALg");
	this.shape_43.setTransform(361.1,317.4);

	this.shape_44 = new cjs.Shape();
	this.shape_44.graphics.f("#A19F94").s().p("AgrCZIBWk6IABAvIhHETg");
	this.shape_44.setTransform(319.8,320.2);

	this.shape_45 = new cjs.Shape();
	this.shape_45.graphics.f("#7F7C75").s().p("AAjiiIAQAEIhRE5IgUAIg");
	this.shape_45.setTransform(322,320.1);

	this.shape_46 = new cjs.Shape();
	this.shape_46.graphics.f("#A19F94").s().p("AAHCWIgfk1IAcAlIAVEag");
	this.shape_46.setTransform(333.9,330.1);

	this.shape_47 = new cjs.Shape();
	this.shape_47.graphics.f("#7F7C75").s().p("AgYifIAUgKIAdFJIgOAKg");
	this.shape_47.setTransform(335.3,329);

	this.shape_48 = new cjs.Shape();
	this.shape_48.graphics.f("#22263F").s().p("AgGA4QgCgEAAgtQAAgrgDgDQgGgEANgLQALgKAHAKIgGBuQgFAEgDAAQgDAAgDgEg");
	this.shape_48.setTransform(321.9,329.1);

	this.shape_49 = new cjs.Shape();
	this.shape_49.graphics.f("#191B2B").s().p("AgVA0QgEgZAIgXQAOgdAVgaQADgDABALIACAMIgRAaQgQAcAAAUQgJAKgDAAIAAgBg");
	this.shape_49.setTransform(319.7,329.3);

	this.shape_50 = new cjs.Shape();
	this.shape_50.graphics.f("#22263F").s().p("AgfBIIgZgJQgCgGAAgGQABgLAPgBQAPAAAJgTIAGgUQAPgrARgTQAJgJAFgBQAJgFAMAZQALAZgXARQgWAOgGAeQgDAPABAMQgMANgRAAIgPgCg");
	this.shape_50.setTransform(317.5,327.5);

	this.shape_51 = new cjs.Shape();
	this.shape_51.graphics.f("#D0BAA3").s().p("AgjCEIgIiaQgIiQAJgOQAKgOApAIQAVAEASAHIgTA9QgSBBAEAZQADAUgHAoQgIAvACAiQADApgYAUQgMAKgNACQABgbAFgfg");
	this.shape_51.setTransform(320.4,308.6);

	this.shape_52 = new cjs.Shape();
	this.shape_52.graphics.f("#AFACA6").s().p("ABLC3IjDhnIgBgFIAAgFQABgGAFgCQgEADgCAFIAAAFIACAEIDEBhQANgJAHgQQAHgPgCgSQgEgUgGgOIgSgfIgBgDIAxjpIgpDpIAKAPIAIARQAIAPADAUQABAKgBAJQgCAJgEAKQgDAGgHAKQgIAIgHAEIgCABIgCgBg");
	this.shape_52.setTransform(369,281.4);

	this.shape_53 = new cjs.Shape();
	this.shape_53.graphics.f("#1C1C1C").s().p("AiXC1IgZgyIAsjkQAEgSAQgIIERiIQADgBADAAQAEABADAEQADADgBAEIgmDvQAaA2gLAjQgFASgKAHIk6CcQApgZgQg3g");
	this.shape_53.setTransform(394.4,273.3);

	this.shape_54 = new cjs.Shape();
	this.shape_54.graphics.f("#7B7975").s().p("AAGBrIghgHQAFgEAAgCIgEgXQgDgSgdgqQgcgpgBgJQgCgPAXgeQAEgGAGgDQAbgOAdABQAeABAaAPQApAagMBWQgGAhgQAeQgSAWghAAIgGAAg");
	this.shape_54.setTransform(386.4,232.4);

	this.shape_55 = new cjs.Shape();
	this.shape_55.graphics.f("#4C5B7B").s().p("AhNAeQgIgPARgSIA/gVQBAgUAKADQAMAEgBAXQgBAVgLACQhpAegcADQgHgEgFgIg");
	this.shape_55.setTransform(368,269.4);

	this.shape_56 = new cjs.Shape();
	this.shape_56.graphics.f("#D0BAA3").s().p("AglALQgPgXAegDIA+gEIADAjQgRADgTAAIgLABQgbAAgGgJg");
	this.shape_56.setTransform(357.1,271);

	this.shape_57 = new cjs.Shape();
	this.shape_57.graphics.f("#4C5B7B").s().p("AglB1QgSgJAFgJQAKg+AMg2QAYhsAZAHQAbAHADAhQACARgEAPIgTBBQgVBFgNATQgKANgMAAQgFAAgGgDg");
	this.shape_57.setTransform(376.6,258.4);

	this.shape_58 = new cjs.Shape();
	this.shape_58.graphics.f("#556689").s().p("AhJCYQgNgXADgaQAGgogLglQgGgMgGg1QgGg2AAglIAMgQQAUgSAmgKQArgMAjABQAjAAAKALQAJAJgBASQAAAKgCAHIgGAuQgHAygHAXQgGAVATA8QAJAfAMAiQgrAzgzAAQgoAAgugig");
	this.shape_58.setTransform(386.8,262.3);

	this.shape_59 = new cjs.Shape();
	this.shape_59.graphics.f("#434F6A").s().p("AgFAJQg8gUgMgCIAUgJIAbgMIBsAQIgMA2IhHgbg");
	this.shape_59.setTransform(372.8,273.9);

	this.shape_60 = new cjs.Shape();
	this.shape_60.graphics.f("#556689").s().p("AgXBcQgsgJgLgHQhpg7gHgHQgEgDACgSQACgVAJgUQAag4BEAHQBTAJBWAUIBkAWIAJAXQAHAbgIAVQgNAlggAWQggAXgmAAIgKAAQgoAAgwgLg");
	this.shape_60.setTransform(378.5,280.5);

	this.shape_61 = new cjs.Shape();
	this.shape_61.graphics.f("#D0BAA3").s().p("AgpAwIAPg2IBDgvIgGAsQgHAsABAGQgMAGgPAEQgLADgKAAQgNAAgJgGg");
	this.shape_61.setTransform(387.2,240);

	this.shape_62 = new cjs.Shape();
	this.shape_62.graphics.f("#DFC7AF").s().p("AgkBaQgXgjgGgpQgHgnAMgoQAQg3A6BDQAdAiAaArQgQAUgVASQghAdgYAAQgGAAgFgBg");
	this.shape_62.setTransform(384.5,234.1);

	this.shape_63 = new cjs.Shape();
	this.shape_63.graphics.f("#DFC7AF").s().p("Ag5A6QgYgYAAgiQAAghAYgYQAYgYAhAAQAiAAAYAYQAYAYgBAhQABAigYAYQgYAYgiAAQghAAgYgYg");
	this.shape_63.setTransform(386,230.4);

	this.shape_64 = new cjs.Shape();
	this.shape_64.graphics.f("#2E2F2F").s().p("Aj5APQgFgDgBgEQgCgFADgEQABgDAEgCIDShnQAFgDAGADIEdBAIk6Cdg");
	this.shape_64.setTransform(382.5,288.3);

	this.shape_65 = new cjs.Shape();
	this.shape_65.graphics.f("#A19F94").s().p("AgdCeIA1lCIAGAvIgrEag");
	this.shape_65.setTransform(387.4,290.2);

	this.shape_66 = new cjs.Shape();
	this.shape_66.graphics.f("#7F7C75").s().p("AATimIAPADIgwFAIgTAKg");
	this.shape_66.setTransform(389.4,289.9);

	this.shape_67 = new cjs.Shape();
	this.shape_67.graphics.f("#A19F94").s().p("AAWCUIg+kvIAhAhIAwEWg");
	this.shape_67.setTransform(402.3,298.6);

	this.shape_68 = new cjs.Shape();
	this.shape_68.graphics.f("#7F7C75").s().p("AgnicIASgMIA+FFIgMAMg");
	this.shape_68.setTransform(403.6,297.4);

	this.shape_69 = new cjs.Shape();
	this.shape_69.graphics.f("#A19F94").s().p("AgrCZIBVk6IACAvIhIEUg");
	this.shape_69.setTransform(362.3,300.2);

	this.shape_70 = new cjs.Shape();
	this.shape_70.graphics.f("#7F7C75").s().p("AAkiiIAPAEIhRE5IgUAIg");
	this.shape_70.setTransform(364.5,300.1);

	this.shape_71 = new cjs.Shape();
	this.shape_71.graphics.f("#A19F94").s().p("AAGCWIgek1IAcAlIAVEag");
	this.shape_71.setTransform(376.4,310.1);

	this.shape_72 = new cjs.Shape();
	this.shape_72.graphics.f("#7F7C75").s().p("AgYigIAUgJIAdFJIgOAKg");
	this.shape_72.setTransform(377.8,309.1);

	this.shape_73 = new cjs.Shape();
	this.shape_73.graphics.f("#272D4D").s().p("AgJA5QgCgEACgwQABgtgDgCQgFgEAMgKQALgJAGAKIgIBwQgFAEgDAAQgDAAgDgEg");
	this.shape_73.setTransform(360.7,312.6);

	this.shape_74 = new cjs.Shape();
	this.shape_74.graphics.f("#1E2136").s().p("AgXA1QgEgZAJgYQAQgfAVgZQAEgFACAaQgJALgJAPQgRAdAAAVQgKAIgCAAIgBAAg");
	this.shape_74.setTransform(358.4,312.7);

	this.shape_75 = new cjs.Shape();
	this.shape_75.graphics.f("#272D4D").s().p("AggBJIgagKQgCgGAAgFQABgMAQAAQAPAAAKgUQAFgKACgKQARgsARgTQAJgKAGAAQAJgGALAbQAKAagYARQgWAOgHAfQgDAPABAMQgMAMgSAAQgHAAgIgCg");
	this.shape_75.setTransform(356,310.9);

	this.shape_76 = new cjs.Shape();
	this.shape_76.graphics.f("#DFC7AF").s().p("AgqCHQABgEgFiZQgGiUAKgOQALgPApAKQAVAEATAIIgVA9QgUBDAEAZQACAUgHAqQgIAwAAAiQACArgZAUIgaALQADgjAEgYg");
	this.shape_76.setTransform(359.7,291.4);

	this.shape_77 = new cjs.Shape();
	this.shape_77.graphics.f("#22263F").s().p("AgFA5QgCgDgBgvQAAgsgDgDQgGgEANgLQALgKAHAKIgGBwQgFAEgDAAQgDAAgCgEg");
	this.shape_77.setTransform(367.7,309.9);

	this.shape_78 = new cjs.Shape();
	this.shape_78.graphics.f("#191B2B").s().p("AgWA1QgEgYAJgZQAOgeAVgaQAFgFABAZQgIALgJAQQgRAdABAVQgKAJgCAAIgBgBg");
	this.shape_78.setTransform(365.6,310.1);

	this.shape_79 = new cjs.Shape();
	this.shape_79.graphics.f("#22263F").s().p("AgfBKIgZgKQgDgGAAgGQABgMAQAAQAPAAAKgUQAEgKACgKQAQgrARgUQAJgJAFgBQAKgGAKAaQALAagXARQgWAPgGAfQgDAPABAMQgMAMgSAAIgPgBg");
	this.shape_79.setTransform(363.2,308.2);

	this.shape_80 = new cjs.Shape();
	this.shape_80.graphics.f("#D0BAA3").s().p("AgkCHQABgEgJiZQgIiUAJgOQALgPApAJQAVAEATAHIgTA+QgTBDAEAaQADATgHAqQgHAwACAjQACAqgYAVIgaALQACgjAEgYg");
	this.shape_80.setTransform(366.2,288.8);

	this.shape_81 = new cjs.Shape();
	this.shape_81.graphics.f("#AFACA6").s().p("ABLC4IjDhoIgBgEIAAgGQACgFAFgDQgFAEgBAEIAAAGIABAEIDDBgQAPgJAGgPQAHgPgCgSQgCgSgIgQIgSggIgBgDIAxjpIgpDpIAEAHIAOAYQAIARADATQABAKgBAKQgCALgEAHQgDAJgHAIQgIAHgHAFIgCAAIgCAAg");
	this.shape_81.setTransform(411.5,261.5);

	this.shape_82 = new cjs.Shape();
	this.shape_82.graphics.f("#1C1C1C").s().p("AiXC1IgZgyIAsjkQADgSARgIIERiIQADgCADABQAFABACAEQADADgBAEIgmDvQAaA2gKAjQgGASgKAHIk6CcQApgZgQg3g");
	this.shape_82.setTransform(436.9,253.3);

	this.shape_83 = new cjs.Shape();
	this.shape_83.graphics.f("#2E2F2F").s().p("Aj5APQgFgCgBgFQgCgFADgDQABgEAEgCIDShnQAFgDAGADIEdBBIk6Cbg");
	this.shape_83.setTransform(425,268.3);

	this.shape_84 = new cjs.Shape();
	this.shape_84.graphics.f("#000000").s().p("AAfBAQgWgMgIgPQgHgPgRgGIgTgFQgOACgMAFQgKgDgGgKQgLgRAXgcQARgTAYgJQAYgIAYAEIAdAJQAdAMAHAWQAHAWgBAKQgBAJgHAZQgRAkgMABQgJgDgLgHg");
	this.shape_84.setTransform(426.9,203.6);

	this.shape_85 = new cjs.Shape();
	this.shape_85.graphics.f("#000000").s().p("AAfAYIhjgMIAVgPQAegQApgEQgOATgJgBQA9AIAHgFQgdAagJAAIAAAAg");
	this.shape_85.setTransform(427.8,197.1);

	this.shape_86 = new cjs.Shape();
	this.shape_86.graphics.f("#000000").s().p("AgoCLIgwAAQgPAAgHgLQgGgJABgPQAAgJADgIQAEgKAHgBIA7gJQAjgGAWgHIgDhKQgCgsAAgfQAAgTADgIQAGgMAQgDQAcgFAWARQAJAIALAOQAMAQgBAJIgQBpQgTBqgRACQgVAEggAAIgzAAg");
	this.shape_86.setTransform(418.5,237.2);

	this.shape_87 = new cjs.Shape();
	this.shape_87.graphics.f("#2F2F2F").s().p("AAGBYQgIgdgKgUQgSgmgWATQACARAAAOIgQgoQACgJgMgGQgMgHADgTQACgWAWgRQAsghA2ASQA5ATgJA7QgEAXgMAbQgJAXAAAFQAAAJgYAHQgMAEgIAAQgHAAgDgEg");
	this.shape_87.setTransform(427.1,205.4);

	this.shape_88 = new cjs.Shape();
	this.shape_88.graphics.f("#E8DCD1").s().p("AgDAWQgEgBAFgJQACgGAAgGQgBgHgGgFIgCgDQgBgEAGgDIAKALQAJANgPATIgCACIgBgBg");
	this.shape_88.setTransform(423.6,209.5);

	this.shape_89 = new cjs.Shape();
	this.shape_89.graphics.f("#DEBC9A").s().p("AgiAsQAChEgFgHQgDgFAkgLIAigKIAAAtQABAtAFAHQAIAKggAGIgOACQgUAAgMgOg");
	this.shape_89.setTransform(430,214);

	this.shape_90 = new cjs.Shape();
	this.shape_90.graphics.f("#E1C9B1").s().p("AgSAlQgTgCgOgLQgJgIgCgJQgCgIAHAAIAjABQAZgBABgJQABgIgPgDIgRgDIgFgEQgEgFADgCQAJgIBHAWQAIAFAFAIQAEAIgBAIQgLAJgRAJQgZAMgSAAIgKgBg");
	this.shape_90.setTransform(402.7,248.1);

	this.shape_91 = new cjs.Shape();
	this.shape_91.graphics.f("#DEBC9A").s().p("AgoBeQgNgOgOgwQgRg6ARgfIAbgaQAjgXAlAMQAlAMAHAqQADAVgFATQgJATgOAVQgeArgaAJQgOAHgJAAQgIAAgEgFg");
	this.shape_91.setTransform(427,207.8);

	this.shape_92 = new cjs.Shape();
	this.shape_92.graphics.f("#0E1110").s().p("AAJEIQgXAAgmgJQgUgDgKgPQgIgOABgRIAEg4QADgjAAgWQAAhAgQhAQgchSAGgoQAIg9BMgjIAugKIANAAQAQACAOAGQAtAUAHA+QAHBJAHCXQAGCVgEAKQgFAMgSAMIgdAQQgZAOghAAIgCAAg");
	this.shape_92.setTransform(431.5,243.3);

	this.shape_93 = new cjs.Shape();
	this.shape_93.graphics.f("#2F2F2F").s().p("Ai4DRQgJgBgKgIQgLgJgCgKQgHhZgBhcQgCi5AegQQAdgPCWAOQBKAHBFAKIBjAzQACAZgkARQhIAgi8grQgRgEgpgNIgDAAQgCAAAAAIQABAcgFBPQgGBWAAAUIAAA6IABAXQgBAOgIAGQgOAIgPAAIgFgBg");
	this.shape_93.setTransform(419.1,278.2);

	this.shape_94 = new cjs.Shape();
	this.shape_94.graphics.f("#353535").s().p("AiYC+QgPgIAAgGQAHiDAFg+QAMiWAQgWQAQgVCMAXQBHALBEAPIgNBNIjaglQABAWgFAVIgfDsIgDAbQgDAOgMABQgTAAgRgKg");
	this.shape_94.setTransform(421,269.9);

	this.shape_95 = new cjs.Shape();
	this.shape_95.graphics.f("#4E4134").s().p("AAmAjIgXgKQgOAAgQgCQgjgFgOgNQgHgEgBgHQgBgHAEgGQAAgCADgCQAIgHAQABIAaACQARAAAIgBIAKgEIAJgDIAqAJQAGAggEALQgDAIgNAHQgIAEgFAAIgFgBg");
	this.shape_95.setTransform(402.9,290.3);

	this.shape_96 = new cjs.Shape();
	this.shape_96.graphics.f("#453B2E").s().p("AAnAjIgYgJQgOAAgQgDQgjgFgOgNQgPgMAKgMQAGgHAIgDIAkACQAlABALgJIAqAJIACASQABASgCAIQgDAIgNAGQgIAEgFAAIgEgBg");
	this.shape_96.setTransform(402.9,290.9);

	this.shape_97 = new cjs.Shape();
	this.shape_97.graphics.f("#4E4134").s().p("AAmAjIgXgJQgOAAgQgDQgjgFgPgNQgGgEgBgHQgCgHAEgGIAEgEQAIgHAQABIAaACQALABAOgCIAKgEQAIgDABAAIAqAJQAGAggEAMQgDAIgNAGQgIAEgGAAIgEgBg");
	this.shape_97.setTransform(396.4,300.3);

	this.shape_98 = new cjs.Shape();
	this.shape_98.graphics.f("#453B2E").s().p("AAnAjIgXgKQgPAAgQgCQgjgFgOgNQgPgMALgNQAFgGAIgEIAkADQAlABALgJIAqAIQAFAhgEALQgCAIgNAHQgJAEgFAAIgEgBg");
	this.shape_98.setTransform(396.5,301);

	this.shape_99 = new cjs.Shape();
	this.shape_99.graphics.f("#A19F94").s().p("AgdCeIA1lBIAGAuIgrEZg");
	this.shape_99.setTransform(429.9,270.2);

	this.shape_100 = new cjs.Shape();
	this.shape_100.graphics.f("#7F7C75").s().p("AASimIAQAEIgwE/IgTAJg");
	this.shape_100.setTransform(431.9,270);

	this.shape_101 = new cjs.Shape();
	this.shape_101.graphics.f("#A19F94").s().p("AAWCUIg+kvIAgAhIAxEWg");
	this.shape_101.setTransform(444.8,278.7);

	this.shape_102 = new cjs.Shape();
	this.shape_102.graphics.f("#7F7C75").s().p("AgoicIATgLIA+FEIgNALg");
	this.shape_102.setTransform(446,277.5);

	this.shape_103 = new cjs.Shape();
	this.shape_103.graphics.f("#A19F94").s().p("AgrCZIBWk6IABAvIhHEUg");
	this.shape_103.setTransform(404.7,280.3);

	this.shape_104 = new cjs.Shape();
	this.shape_104.graphics.f("#7F7C75").s().p("AAjiiIAQAFIhRE4IgUAIg");
	this.shape_104.setTransform(407,280.1);

	this.shape_105 = new cjs.Shape();
	this.shape_105.graphics.f("#A19F94").s().p("AAGCWIgek0IAcAkIAVEZg");
	this.shape_105.setTransform(418.9,290.2);

	this.shape_106 = new cjs.Shape();
	this.shape_106.graphics.f("#7F7C75").s().p("AgYifIAUgKIAdFJIgOAKg");
	this.shape_106.setTransform(420.3,289.1);

	this.shape_107 = new cjs.Shape();
	this.shape_107.graphics.f("#AFACA6").s().p("ABMC4IjEhoIgBgFIAAgFQADgGAEgCQgFADgBAFIAAAFQAAAAAAABQAAABAAAAQABABAAAAQAAABAAAAIDEBhQANgJAHgPQAIgRgDgRQgCgRgIgRIgIgQIgKgPIAAgDIAwjpIgpDpIAFAGIANAZQAIAQADAUIAAATQgCAMgEAHQgDAKgHAGQgGAHgJAGIgCAAIgBAAg");
	this.shape_107.setTransform(235.3,296.6);

	this.shape_108 = new cjs.Shape();
	this.shape_108.graphics.f("#1C1C1C").s().p("AiXC1IgYgyIArjkQAEgSAQgIIERiIQAEgBACAAQAFABACAEQADADgBAFIgmDvQAaA1gKAjQgFASgLAHIk5CcQAogZgQg3g");
	this.shape_108.setTransform(260.6,288.5);

	this.shape_109 = new cjs.Shape();
	this.shape_109.graphics.f("#2E2F2F").s().p("Aj5APQgEgCgCgFQgBgFACgDQABgDAEgDIDShnQAGgDAFADIEdBBIk5Cbg");
	this.shape_109.setTransform(248.7,303.5);

	this.shape_110 = new cjs.Shape();
	this.shape_110.graphics.f("#A19F94").s().p("AgdCdIA1lAIAGAuIgqEZg");
	this.shape_110.setTransform(253.6,305.4);

	this.shape_111 = new cjs.Shape();
	this.shape_111.graphics.f("#7F7C75").s().p("AASimIAQADIgxFAIgSAKg");
	this.shape_111.setTransform(255.7,305.2);

	this.shape_112 = new cjs.Shape();
	this.shape_112.graphics.f("#A19F94").s().p("AAVCUIg9kvIAhAhIAwEWg");
	this.shape_112.setTransform(268.5,313.9);

	this.shape_113 = new cjs.Shape();
	this.shape_113.graphics.f("#7F7C75").s().p("AgoicIATgLIA9FEIgLALg");
	this.shape_113.setTransform(269.8,312.6);

	this.shape_114 = new cjs.Shape();
	this.shape_114.graphics.f("#A19F94").s().p("AgrCZIBWk6IABAvIhHEUg");
	this.shape_114.setTransform(228.5,315.5);

	this.shape_115 = new cjs.Shape();
	this.shape_115.graphics.f("#7F7C75").s().p("AAkiiIAPAEIhRE5IgUAIg");
	this.shape_115.setTransform(230.7,315.4);

	this.shape_116 = new cjs.Shape();
	this.shape_116.graphics.f("#A19F94").s().p("AAGCWIgek0IAcAlIAVEYg");
	this.shape_116.setTransform(242.6,325.4);

	this.shape_117 = new cjs.Shape();
	this.shape_117.graphics.f("#7F7C75").s().p("AgXigIATgJIAcFKIgNAJg");
	this.shape_117.setTransform(244,324.3);

	this.shape_118 = new cjs.Shape();
	this.shape_118.graphics.f("#AFACA6").s().p("ABLC4IjDhoIgBgFQgBgDABgDQABgEAFgDQgEACgCAFIAAAGIACAEIDDBhQAOgJAHgQQAIgQgDgSQgDgRgHgQIgOgYIgEgHIgBgDIAqjMQAEgTADgKIgpDpIAEAHIAOAYQAIARADATQABAKgBAKQgCALgEAIQgEAJgGAGQgGAIgJAFIgCAAIgCAAg");
	this.shape_118.setTransform(277.8,276.7);

	this.shape_119 = new cjs.Shape();
	this.shape_119.graphics.f("#1C1C1C").s().p("AiXC1IgZgyIAsjkQADgRARgJIERiIIAGgBQAFABACADQADAEgBAEIgmDvQAaA2gKAjQgGASgKAGIk6CdQApgZgQg3g");
	this.shape_119.setTransform(303.1,268.6);

	this.shape_120 = new cjs.Shape();
	this.shape_120.graphics.f("#E3E3E3").s().p("AgsAMIAKgPIAdAAQAcgDAEgPIARAPQgEALgKAIQgKAIgNABIgEAAQgXAAgYgKg");
	this.shape_120.setTransform(292.3,235.1);

	this.shape_121 = new cjs.Shape();
	this.shape_121.graphics.f("#050507").s().p("AgmCDIgtAAQgNAAgHgKQgGgJABgOQABgYAMgCIA4gJQAggFAWgGIgEhGQgCgqAAgdQAAgSAEgHQAFgMAPgDQAagFAVARQAKAHAJANQAMAPgBAJIgPBiQgTBkgQADQgUADgdAAIgxAAg");
	this.shape_121.setTransform(281.2,253.4);

	this.shape_122 = new cjs.Shape();
	this.shape_122.graphics.f("#D4D045").s().p("AAHBTQgIgbgJgTQgRgkgVASQADAOgBAPIgPgmQACgIgMgGQgLgGACgSQADgVAVgQQAoggAzASQA3ASgJA4QgEAWgLAZQgJAVAAAFQAAAIgXAHQgLADgHAAQgHAAgCgDg");
	this.shape_122.setTransform(289.2,223.4);

	this.shape_123 = new cjs.Shape();
	this.shape_123.graphics.f("#E8DCD1").s().p("AgDAVQgDgBAEgJQACgGAAgFQgBgHgFgEIgCgDQgBgEAFgCIAKAKQAIAMgOASIgCABIgBAAg");
	this.shape_123.setTransform(286,227.3);

	this.shape_124 = new cjs.Shape();
	this.shape_124.graphics.f("#DEBC9A").s().p("AggAqQAChAgEgHQgDgEAhgLIAhgJIAAAqQABArAEAGQAHAKgdAFIgNABQgUAAgLgMg");
	this.shape_124.setTransform(292.1,231.5);

	this.shape_125 = new cjs.Shape();
	this.shape_125.graphics.f("#E1C9B1").s().p("AgRAjQgRgCgOgKQgIgIgCgIQgCgIAHAAIAgABQAYgBABgIQABgHgOgEIgQgCIgFgLQAIgHBDAVQAIAEAEAIQAEAHgBAIQgLAIgPAIQgYAMgRAAIgKgBg");
	this.shape_125.setTransform(266.3,263.7);

	this.shape_126 = new cjs.Shape();
	this.shape_126.graphics.f("#DEBC9A").s().p("AgmBZQgNgNgNguQgPg3APgdIAagYQAhgWAjAMQAjALAGAoQADATgEASQgJASgOAUQgbApgZAIQgNAGgIAAQgIAAgEgEg");
	this.shape_126.setTransform(289.3,225.7);

	this.shape_127 = new cjs.Shape();
	this.shape_127.graphics.f("#16191B").s().p("AAID4QgVAAgkgIQgSgCgKgPQgIgOABgPIAEg1QADghAAgUQAAg7gPg+QgahNAFgmQAIg6BHggIArgJIANAAQAPABANAGQAqATAGA6QAIBEAFCPQAGCNgDAJQgFAMgRAKIgbAPQgYANgfAAIgCAAg");
	this.shape_127.setTransform(293.6,259.1);

	this.shape_128 = new cjs.Shape();
	this.shape_128.graphics.f("#2F2F2F").s().p("AitDFQgJgBgKgHQgKgJgBgJQgHhUgBhXQgCiuAcgPQAbgOCOANQBGAHBBAJIBdAwQACAYgiAPQhFAfiwgoIg3gRQAAgBgBAAQAAAAAAAAQgBAAAAAAQAAAAAAABQgCAAAAAIQABAagFBLQgGBQAAATIAAA3IABAWQgBANgIAFQgLAIgNAAIgHgBg");
	this.shape_128.setTransform(281.8,292);

	this.shape_129 = new cjs.Shape();
	this.shape_129.graphics.f("#353535").s().p("AiPCzQgOgJAAgEQAPk4AXggQAOgUCFAVQBCALBAAOIgMBJIjNgiQABATgEAVIgeDeIgDAZQgDAOgLABIgDAAQgRAAgOgKg");
	this.shape_129.setTransform(283.6,284.3);

	this.shape_130 = new cjs.Shape();
	this.shape_130.graphics.f("#4E4134").s().p("AAkAhIgWgJQgNAAgPgCQghgFgOgNQgFgDgCgGQgBgHAEgGIADgDQAHgHAPAAIAZADQANABALgDIAJgDQAHgDACAAIAnAIIADARQABASgCAHQgDAIgMAFQgIAEgFAAIgEgBg");
	this.shape_130.setTransform(266.5,303.4);

	this.shape_131 = new cjs.Shape();
	this.shape_131.graphics.f("#453B2E").s().p("AAlAhIgWgJQgOAAgPgCQgggFgOgNQgOgLAKgMIAMgJIAiACQAjABAKgIIAoAIIACARQABASgCAHQgCAIgMAFQgIAEgFAAIgEgBg");
	this.shape_131.setTransform(266.6,304.1);

	this.shape_132 = new cjs.Shape();
	this.shape_132.graphics.f("#4E4134").s().p("AAlAhIgXgJQgNAAgPgCQghgFgOgNQgFgDgCgGQgBgHAEgGIADgEQAIgHAPABIAYADQANAAALgCIAJgDQAHgEACABIAoAIIACARQABASgCAHQgCAIgNAFQgIAEgEAAIgEgBg");
	this.shape_132.setTransform(260.4,312.9);

	this.shape_133 = new cjs.Shape();
	this.shape_133.graphics.f("#453B2E").s().p("AAkAhIgWgIQgNAAgPgDQghgFgOgNQgNgLAKgLIAMgKIAiADQAjAAAKgIIAnAIIADASQABAQgCAIQgDAHgMAGQgIAEgFAAIgEgBg");
	this.shape_133.setTransform(260.5,313.5);

	this.shape_134 = new cjs.Shape();
	this.shape_134.graphics.f("#2E2F2F").s().p("Aj5APQgEgCgCgFQgBgFACgEQABgDAEgCIDShnQAGgDAFADIEdBBIk6Ccg");
	this.shape_134.setTransform(291.2,283.5);

	this.shape_135 = new cjs.Shape();
	this.shape_135.graphics.f("#A19F94").s().p("AgdCeIA1lBIAGAuIgrEZg");
	this.shape_135.setTransform(296.1,285.4);

	this.shape_136 = new cjs.Shape();
	this.shape_136.graphics.f("#7F7C75").s().p("AATilIAPACIgwFAIgTAKg");
	this.shape_136.setTransform(298.1,285.2);

	this.shape_137 = new cjs.Shape();
	this.shape_137.graphics.f("#A19F94").s().p("AAVCVIg9kwIAgAhIAxEWg");
	this.shape_137.setTransform(311,293.9);

	this.shape_138 = new cjs.Shape();
	this.shape_138.graphics.f("#7F7C75").s().p("AgoibIATgNIA+FGIgMALg");
	this.shape_138.setTransform(312.2,292.7);

	this.shape_139 = new cjs.Shape();
	this.shape_139.graphics.f("#A19F94").s().p("AgrCaIBWk6IABAuIhHEUg");
	this.shape_139.setTransform(271,295.5);

	this.shape_140 = new cjs.Shape();
	this.shape_140.graphics.f("#7F7C75").s().p("AAkiiIAPAFIhRE4IgUAIg");
	this.shape_140.setTransform(273.2,295.4);

	this.shape_141 = new cjs.Shape();
	this.shape_141.graphics.f("#A19F94").s().p("AAGCVIgek0IAcAlIAVEag");
	this.shape_141.setTransform(285.1,305.4);

	this.shape_142 = new cjs.Shape();
	this.shape_142.graphics.f("#7F7C75").s().p("AgXifIATgKIAcFJIgMAKg");
	this.shape_142.setTransform(286.5,304.3);

	this.shape_143 = new cjs.Shape();
	this.shape_143.graphics.f("#AFACA6").s().p("ABLC4IjChnIgCgFIAAgGIADgEIgCAFIAAAFIACAEIDDBhQANgKAHgPQAIgQgDgRQgCgSgIgQIgIgQIgKgPIgBgDIAxjqIgpDpIAJAOIAJARQAIARADATQABAKgBAKQgCALgDAHQgEAJgHAIQgGAHgJAFIgCAAIgCAAg");
	this.shape_143.setTransform(320.2,256.7);

	this.shape_144 = new cjs.Shape();
	this.shape_144.graphics.f("#1C1C1C").s().p("AiXC1IgYgyIArjkQAEgSAQgIIERiIIAHgBQAEABACADQADAEgBAEIgmDvQAaA2gKAjQgFASgLAGIk5CdQAogZgQg3g");
	this.shape_144.setTransform(345.5,248.6);

	this.shape_145 = new cjs.Shape();
	this.shape_145.graphics.f("#94622D").s().p("AgWA1IgigcQAHgXAJgXQATgwALgCQAMgDALAGQAMAGAWAWQASATgPAvQgIAZgLAUQgEACgFAAQgQAAgcgUg");
	this.shape_145.setTransform(327.9,229.9);

	this.shape_146 = new cjs.Shape();
	this.shape_146.graphics.f("#DEBC9A").s().p("Ah1B1IBxhYIAyixQAagMAUARQARAOAJAcQAGAUgsBYQgoBTgMAKQgLAJiGAtQgCgTACgSg");
	this.shape_146.setTransform(320.8,239.2);

	this.shape_147 = new cjs.Shape();
	this.shape_147.graphics.f("#DEBC9A").s().p("AgZAiQgQgGgMgOQgGgKAAgIQABgIAGABIAgAJQAYAEADgHQAFgLgegJIgDgFQgDgGADgBQAKgFA+AlQAGAFACAJQACAJgDAIQgNAGgRAEQgPADgNAAQgOAAgLgFg");
	this.shape_147.setTransform(305.8,251.1);

	this.shape_148 = new cjs.Shape();
	this.shape_148.graphics.f("#D4D045").s().p("AgIBUQgFgdgGgVQgNgmgYAOQABANgDARIgKgoQAEgIgMgIQgKgHAFgSQAFgVAYgOQAYgOAcACQAaACANAKQAOAMAfgBQgIAIgMACQgDAAAKAPQAQAVgIAXQgIAWgOAYQgMAVgBAEQAAAJgZAEIgOABQgKAAgDgFg");
	this.shape_148.setTransform(336.6,205.6);

	this.shape_149 = new cjs.Shape();
	this.shape_149.graphics.f("#DEBC9A").s().p("AglAkQALhBgDgIQgCgEAhgGIAkgFIgGArQgFArAEAHQAGALgfABIgFAAQgaAAgMgRg");
	this.shape_149.setTransform(337.8,214.2);

	this.shape_150 = new cjs.Shape();
	this.shape_150.graphics.f("#DEBC9A").s().p("Ag2BWQgKgPgHgwQgIg6ATgbIAegVQAjgSAjARQAiARAAAoQAAAVgGAQQgMASgQASQgiAmgaAFQgLAEgIAAQgKAAgFgHg");
	this.shape_150.setTransform(336.2,207.6);

	this.shape_151 = new cjs.Shape();
	this.shape_151.graphics.f("#AA7033").s().p("AgeD7QgWgEgkgNQgRgEgJgRQgFgPADgPQARhHAEgkQAJg+gHg+QgQhRALgnQARg5BMgXIAtgEIAMACQAPADANAIQAoAZgCA8QgCBHgOCQQgOCQgFAJQgGALgTAJIgeALQgSAIgTAAQgKAAgLgCg");
	this.shape_151.setTransform(336,242.4);

	this.shape_152 = new cjs.Shape();
	this.shape_152.graphics.f("#41516D").s().p("AjMDGQgJgDgIgJQgKgKAAgJQAFhWAMhYQAWixAegLQAdgLCNAhQBHARBBASIBYA+QgCAYglALQhJAWithCQgRgGgkgSIgDgBQgBAAgCAIQgDAbgPBKQgRBRgDAUIgIA3IgCAWQgDAOgIAEQgJAEgLAAIgNgBg");
	this.shape_152.setTransform(319.2,271.7);

	this.shape_153 = new cjs.Shape();
	this.shape_153.graphics.f("#6E5335").s().p("AAfAkIgVgMQgMgBgRgFQgggJgMgOQgFgFgBgHQAAgHAEgFIAEgDQAJgGAPACIAYAGQAOADALgBQAMgDAHAAIAnANQABAfgGALQgDAHgNAEQgHADgFAAQgEAAgCgCg");
	this.shape_153.setTransform(294.6,292.3);

	this.shape_154 = new cjs.Shape();
	this.shape_154.graphics.f("#654B31").s().p("AAfAkIgVgMQgMgBgRgFQgggJgMgOQgMgOALgLQAGgFAIgCIAiAHQAjAGAMgHIAnANQABAfgGALQgDAIgNAEQgHACgEAAQgEAAgDgCg");
	this.shape_154.setTransform(294.6,292.9);

	this.shape_155 = new cjs.Shape();
	this.shape_155.graphics.f("#2E2F2F").s().p("Aj5APQgFgCgBgFQgCgFADgDQABgEAEgCIDShnQAFgDAGADIEdBBIk6Cbg");
	this.shape_155.setTransform(333.7,263.6);

	this.shape_156 = new cjs.Shape();
	this.shape_156.graphics.f("#A19F94").s().p("AgdCdIA1lAIAGAuIgrEZg");
	this.shape_156.setTransform(338.6,265.5);

	this.shape_157 = new cjs.Shape();
	this.shape_157.graphics.f("#7F7C75").s().p("AASimIAQAEIgxE+IgSAKg");
	this.shape_157.setTransform(340.6,265.3);

	this.shape_158 = new cjs.Shape();
	this.shape_158.graphics.f("#A19F94").s().p("AAVCUIg9kvIAhAhIAwEWg");
	this.shape_158.setTransform(353.5,273.9);

	this.shape_159 = new cjs.Shape();
	this.shape_159.graphics.f("#7F7C75").s().p("AgoicIATgLIA9FEIgLALg");
	this.shape_159.setTransform(354.7,272.7);

	this.shape_160 = new cjs.Shape();
	this.shape_160.graphics.f("#A19F94").s().p("AgrCZIBWk6IABAvIhHETg");
	this.shape_160.setTransform(313.4,275.6);

	this.shape_161 = new cjs.Shape();
	this.shape_161.graphics.f("#7F7C75").s().p("AAjiiIAQAFIhRE5IgUAHg");
	this.shape_161.setTransform(315.7,275.4);

	this.shape_162 = new cjs.Shape();
	this.shape_162.graphics.f("#A19F94").s().p("AAGCWIgek1IAcAlIAVEag");
	this.shape_162.setTransform(327.6,285.5);

	this.shape_163 = new cjs.Shape();
	this.shape_163.graphics.f("#7F7C75").s().p("AgXifIATgKIAcFJIgNAKg");
	this.shape_163.setTransform(328.9,284.4);

	this.shape_164 = new cjs.Shape();
	this.shape_164.graphics.f("#3A475E").s().p("AiIC+QgTgCgOgNIgHgGQgGgGABgDQA6k6AcgdQARgSCEAoQBCAUA/AXIgXBIIjLg/QgCAUgHAUIg9DdIgGAZQgFANgLAAIgBAAg");
	this.shape_164.setTransform(321.8,264.9);

	this.shape_165 = new cjs.Shape();
	this.shape_165.graphics.f("#6E5335").s().p("AAgAkIgWgMQgNgCgQgFQgggJgMgNQgGgFAAgHQAAgHAFgFIADgDQAJgGAPACIAZAGQALACANAAIATgEIAnAOQABAfgGALQgDAHgNAEQgHACgEAAQgEAAgCgBg");
	this.shape_165.setTransform(302.1,283.6);

	this.shape_166 = new cjs.Shape();
	this.shape_166.graphics.f("#654B31").s().p("AAgAkIgVgMQgNgBgQgFQghgJgMgOQgMgOAMgLQAGgFAIgCIAiAHQAjAGALgHIAnANQABAggFAKQgEAIgNAEQgHACgEAAQgEAAgCgCg");
	this.shape_166.setTransform(302.1,284.2);

	this.shape_167 = new cjs.Shape();
	this.shape_167.graphics.f("#AFACA6").s().p("ABLC3IjDhmIgBgGIAAgFQACgFAFgCQgFABgBAHIAAAEIABAFIDDBgQAPgKAGgOQAHgQgCgSQgCgRgIgRIgNgXIgFgIIgBgCIAxjqIgpDpIAJAOIAJARQAHAPAEAVQABAKgBAJQgCAMgEAHQgDAJgHAHQgHAIgIAEIgCACIgCgCg");
	this.shape_167.setTransform(362.7,236.8);

	this.shape_168 = new cjs.Shape();
	this.shape_168.graphics.f("#1C1C1C").s().p("AiXC0IgZgxIAsjkQADgSARgIIERiIIAGgBQAFABACAEQADADgBAEIgmDvQAaA2gKAjQgGASgKAHIk6CcQApgZgQg4g");
	this.shape_168.setTransform(388,228.7);

	this.shape_169 = new cjs.Shape();
	this.shape_169.graphics.f("#72694F").s().p("AAqCFQgVAAgdgEIgygJIgugIQgNgCgFgLQgFgKADgOQAGgZAMAAIA6ABQAiAAAXgDIAIhHQAEgqAGgeQADgSAFgHQAHgLAPgBQAcgBASAVQAIAKAIAOQAJASgCAIIggBiQgkBhgQAAIAAAAg");
	this.shape_169.setTransform(368.5,212.1);

	this.shape_170 = new cjs.Shape();
	this.shape_170.graphics.f("#D4D4D4").s().p("AgKBUQgEgdgGgUQgMgngYAOQAAAPgDAPIgJgoQAEgIgMgJQgKgIAGgSQAGgVAYgNQAugZAxAbQA0AbgSA2QgIAWgPAYQgNAUgBAFQgBAJgYADIgNABQgMAAgCgGg");
	this.shape_170.setTransform(382.3,182.5);

	this.shape_171 = new cjs.Shape();
	this.shape_171.graphics.f("#E8DCD1").s().p("AgHAVQgDgBAGgIQAHgMgHgMIgCgEQAAgDAFgBIAJAMQAFAOgQAPIgCABIgCgBg");
	this.shape_171.setTransform(378,185.8);

	this.shape_172 = new cjs.Shape();
	this.shape_172.graphics.f("#DEBC9A").s().p("AgmAiQANhAgEgIQgCgFAigFIAkgEIgHArQgGArAEAHQAFALgfABIgBAAQgdAAgMgTg");
	this.shape_172.setTransform(383.3,191.4);

	this.shape_173 = new cjs.Shape();
	this.shape_173.graphics.f("#E1C9B1").s().p("AgXAjQgRgFgMgNQgIgJAAgIQAAgJAGABIAhAGQAYADACgIQAEgLgfgHIgDgFQgEgFAEgCQAJgFBAAgQAHAFADAIQAEAIgDAJQgMAHgRAFQgTAGgNAAQgMAAgJgDg");
	this.shape_173.setTransform(351.9,219.2);

	this.shape_174 = new cjs.Shape();
	this.shape_174.graphics.f("#DEBC9A").s().p("Ag4BWQgLgPgFgxQgHg6AVgbIAegUQAkgRAiASQAiASgBApQAAAUgHAQQgMARgRATQgjAkgaAEIgOADIgEAAQgMAAgEgGg");
	this.shape_174.setTransform(381.8,184.5);

	this.shape_175 = new cjs.Shape();
	this.shape_175.graphics.f("#5C5641").s().p("AgkD6QgWgEgkgOQgRgFgIgRQgGgPAEgPIANg1QAJghADgVQAKg+gGg+QgNhSAMgnQARg5BNgVIAugBIAMACQAQAEAMAIQAnAagDA8QgEBHgSCQQgRCQgGAIQgGALgTAJIgeAKQgRAGgSAAQgMAAgMgCg");
	this.shape_175.setTransform(380.7,219.6);

	this.shape_176 = new cjs.Shape();
	this.shape_176.graphics.f("#23262F").s().p("AjQDFQgJgDgIgJQgKgKAAgJQAIhWANhYQAbixAfgLQAegKCMAlQBHATBAAUIBXBBQgCAYglAKQhKAUishHIg1gaIgDgBQgBAAgCAIQgEAbgRBKIgXBkIgJA4IgDAWQgDAOgIAEQgKADgKAAQgHAAgGgCg");
	this.shape_176.setTransform(362.9,248);

	this.shape_177 = new cjs.Shape();
	this.shape_177.graphics.f("#4E4134").s().p("AAeAlIgVgMQgNgCgQgFQgggLgMgOQgFgEAAgHQgBgHAFgGIAEgDQAJgGAPADIAZAHQAMADAMAAIATgEIAnAPQAAAggFAKQgEAHgOAEIgKACQgFAAgCgCg");
	this.shape_177.setTransform(338,268.5);

	this.shape_178 = new cjs.Shape();
	this.shape_178.graphics.f("#453B2E").s().p("AAeAmIgVgNQgNgCgQgFQgfgKgNgOQgMgPAMgKQAHgFAIgCIAiAIQAiAHANgHIAmAOQABAggGAKQgEAIgNAEIgLABQgEAAgDgBg");
	this.shape_178.setTransform(338,269.1);

	this.shape_179 = new cjs.Shape();
	this.shape_179.graphics.f("#2E2F2F").s().p("Aj5APQgEgCgCgFQgBgFACgEQABgCAEgDIDShnQAGgDAFADIEdBAIk6Cdg");
	this.shape_179.setTransform(376.1,243.6);

	this.shape_180 = new cjs.Shape();
	this.shape_180.graphics.f("#A19F94").s().p("AgdCeIA1lBIAGAuIgrEag");
	this.shape_180.setTransform(381,245.5);

	this.shape_181 = new cjs.Shape();
	this.shape_181.graphics.f("#7F7C75").s().p("AATimIAPADIgwFAIgTAKg");
	this.shape_181.setTransform(383.1,245.3);

	this.shape_182 = new cjs.Shape();
	this.shape_182.graphics.f("#A19F94").s().p("AAWCUIg+kvIAhAhIAwEWg");
	this.shape_182.setTransform(395.9,254);

	this.shape_183 = new cjs.Shape();
	this.shape_183.graphics.f("#7F7C75").s().p("AgoicIATgMIA+FFIgNAMg");
	this.shape_183.setTransform(397.2,252.8);

	this.shape_184 = new cjs.Shape();
	this.shape_184.graphics.f("#A19F94").s().p("AgrCZIBWk5IABAuIhHETg");
	this.shape_184.setTransform(355.9,255.6);

	this.shape_185 = new cjs.Shape();
	this.shape_185.graphics.f("#7F7C75").s().p("AAkiiIAPAEIhRE5IgUAIg");
	this.shape_185.setTransform(358.1,255.5);

	this.shape_186 = new cjs.Shape();
	this.shape_186.graphics.f("#A19F94").s().p("AAHCWIgfk1IAcAlIAVEag");
	this.shape_186.setTransform(370,265.5);

	this.shape_187 = new cjs.Shape();
	this.shape_187.graphics.f("#7F7C75").s().p("AgYifIAUgKIAdFJIgOAKg");
	this.shape_187.setTransform(371.4,264.4);

	this.shape_188 = new cjs.Shape();
	this.shape_188.graphics.f("#181A1F").s().p("AiNC+QgSgDgPgNIgGgHQgGgFABgDQBCk5AdgdQASgSCDArQBCAWA+AaIgYBIIjLhFQgCAWgIASIhDDcIgGAYQgGANgKAAIgCAAg");
	this.shape_188.setTransform(365.9,241.4);

	this.shape_189 = new cjs.Shape();
	this.shape_189.graphics.f("#4E4134").s().p("AAeAlIgVgNQgMgCgQgFQgggKgMgOQgFgFgBgHQAAgHAFgFIAEgDQAIgGAQADIAYAHQANACALAAIAUgDIAmAOQAAAggFALQgEAHgOAEQgHACgEAAQgEAAgCgCg");
	this.shape_189.setTransform(345.7,260);

	this.shape_190 = new cjs.Shape();
	this.shape_190.graphics.f("#453B2E").s().p("AAeAmIgVgNQgMgCgRgFQgggLgLgOQgMgPAMgKQAGgFAIgCIAhAIQAjAHAMgHIAnAPQAAAggFAKQgEAIgOADQgGADgFAAQgEAAgCgCg");
	this.shape_190.setTransform(345.7,260.6);

	this.shape_191 = new cjs.Shape();
	this.shape_191.graphics.f("#AFACA6").s().p("ABLC4IjDhoIgBgFIAAgFQACgGAFgCQgGAEAAAEIAAAFIABAEIDEBhQANgJAHgQQAIgPgDgSQgCgRgIgRIgIgQIgKgPIAAgDIAwjpIgpDpIAEAGIAOAZQAIAQADAUQABAKgBAJQgCALgEAIQgDAIgHAIQgIAIgHAFIgCAAIgCAAg");
	this.shape_191.setTransform(186.4,271.9);

	this.shape_192 = new cjs.Shape();
	this.shape_192.graphics.f("#1C1C1C").s().p("AiXC1IgZgyIAsjlQADgRARgIIERiIIAGgBQAFABACADQADAEgBAEIgmDwQAaA1gKAjQgGASgKAGIk6CdQApgagQg2g");
	this.shape_192.setTransform(211.8,263.9);

	this.shape_193 = new cjs.Shape();
	this.shape_193.graphics.f("#51472D").s().p("AAPCFIghgHQAFgJgNhHQgDgSgdgpQgdgqgBgJQgBgQAWgeQAFgGAGgDQAagOAeABQAeABAaAQQAZAPAGAmQAEAXgFAlIgOBxQgSAWghAAIgGAAg");
	this.shape_193.setTransform(203.9,223.3);

	this.shape_194 = new cjs.Shape();
	this.shape_194.graphics.f("#22263F").s().p("AhNAeQgIgPARgSIA/gVQBAgUALADQAMAEgBAXQgBAVgLACQhqAegcADQgHgEgFgIg");
	this.shape_194.setTransform(185.3,258.1);

	this.shape_195 = new cjs.Shape();
	this.shape_195.graphics.f("#D0BAA3").s().p("AglAKQgQgXAfgCIA+gEIADAjQgRADgUAAIgIABQgdAAgGgKg");
	this.shape_195.setTransform(174.3,259.6);

	this.shape_196 = new cjs.Shape();
	this.shape_196.graphics.f("#22263F").s().p("AglB2QgSgJAFgKQAKg+AMg2QAYhtAaAHQAaAIADAhQACAQgEAPIgTBCQgVBGgNASQgKANgMAAQgFAAgGgCg");
	this.shape_196.setTransform(193.9,247);

	this.shape_197 = new cjs.Shape();
	this.shape_197.graphics.f("#272D4D").s().p("AhJCZQgOgWAEgbQAGgogMglQgFgNgGg0QgHg4AAgkQADgHAJgJQAVgTAmgKQArgMAkABQAiAAALALQAJAKAAASQAAAJgDAHIgFAuQgIAzgHAXQgHAWATA9QAKAfAMAhQgsAzgzAAQgoAAgugig");
	this.shape_197.setTransform(204.3,250.9);

	this.shape_198 = new cjs.Shape();
	this.shape_198.graphics.f("#191B2B").s().p("AgYBdQgsgKgLgHQhpg7gIgHQgEgDACgSQACgWAKgTQAbg5BDAIQBYAJBTAUIBkAVIAJAYQAHAbgIAVQgNAlggAXQggAWgnAAIgKAAQgoAAgxgKg");
	this.shape_198.setTransform(195.9,269.3);

	this.shape_199 = new cjs.Shape();
	this.shape_199.graphics.f("#D0BAA3").s().p("AgpAwIAPg2IBEgwIgHAtQgHAtABAFQgMAGgPAEQgLAEgKAAQgNAAgJgHg");
	this.shape_199.setTransform(204.7,228.5);

	this.shape_200 = new cjs.Shape();
	this.shape_200.graphics.f("#DFC7AF").s().p("AgkBaQgXgjgHgpQgGgoAMgoQAQg3A6BDQAdAiAaAsQgPAUgWATQghAdgYAAQgGAAgFgCg");
	this.shape_200.setTransform(201.9,222.5);

	this.shape_201 = new cjs.Shape();
	this.shape_201.graphics.f("#DFC7AF").s().p("Ag5A6QgYgYAAgiQAAghAYgYQAYgYAhAAQAiAAAYAYQAYAYAAAhQAAAigYAYQgYAYgiAAQghAAgYgYg");
	this.shape_201.setTransform(203.5,218.8);

	this.shape_202 = new cjs.Shape();
	this.shape_202.graphics.f("#2E2F2F").s().p("Aj5APQgKgGAFgKQACgDADgCIDShnQAGgDAFADIEdBBIk6Cbg");
	this.shape_202.setTransform(199.9,278.8);

	this.shape_203 = new cjs.Shape();
	this.shape_203.graphics.f("#A19F94").s().p("AgdCeIA1lCIAGAvIgrEag");
	this.shape_203.setTransform(204.8,280.7);

	this.shape_204 = new cjs.Shape();
	this.shape_204.graphics.f("#7F7C75").s().p("AASilIAQACIgwFAIgTAKg");
	this.shape_204.setTransform(206.8,280.5);

	this.shape_205 = new cjs.Shape();
	this.shape_205.graphics.f("#A19F94").s().p("AAWCUIg+kvIAgAhIAxEWg");
	this.shape_205.setTransform(219.7,289.2);

	this.shape_206 = new cjs.Shape();
	this.shape_206.graphics.f("#7F7C75").s().p("AgoibIATgNIA+FFIgNAMg");
	this.shape_206.setTransform(220.9,288);

	this.shape_207 = new cjs.Shape();
	this.shape_207.graphics.f("#A19F94").s().p("AgrCZIBWk5IABAuIhHEUg");
	this.shape_207.setTransform(179.6,290.8);

	this.shape_208 = new cjs.Shape();
	this.shape_208.graphics.f("#7F7C75").s().p("AAjiiIAQAEIhRE5IgUAIg");
	this.shape_208.setTransform(181.9,290.7);

	this.shape_209 = new cjs.Shape();
	this.shape_209.graphics.f("#A19F94").s().p("AAGCWIgek1IAcAlIAVEag");
	this.shape_209.setTransform(193.8,300.7);

	this.shape_210 = new cjs.Shape();
	this.shape_210.graphics.f("#7F7C75").s().p("AgYifIAUgKIAdFJIgOAKg");
	this.shape_210.setTransform(195.2,299.6);

	this.shape_211 = new cjs.Shape();
	this.shape_211.graphics.f("#22263F").s().p("AgGA6QgCgEAAgvQAAgtgDgCQgGgEANgLQALgLAHAKIgGByQgFAEgDAAQgDAAgDgEg");
	this.shape_211.setTransform(185.1,298.8);

	this.shape_212 = new cjs.Shape();
	this.shape_212.graphics.f("#191B2B").s().p("AgWA2QgFgZAKgZQAOgeAVgaQADgEACAMIABAMIgRAbQgQAeAAAUQgKAJgCAAIgBAAg");
	this.shape_212.setTransform(182.9,299);

	this.shape_213 = new cjs.Shape();
	this.shape_213.graphics.f("#22263F").s().p("AgfBKIgagJQgCgGAAgGQABgMAQAAQAPgBAKgUIAGgUQAQgsARgTIAOgLQAKgFALAaQALAagXARQgWAPgHAfQgDAQABAMQgMAMgSAAIgPgCg");
	this.shape_213.setTransform(180.5,297.1);

	this.shape_214 = new cjs.Shape();
	this.shape_214.graphics.f("#D0BAA3").s().p("AglCJQABgEgJibQgIiUAKgPQAKgPAqAJQAVAEATAHIgTA/QgSBDADAaQADAUgHAqQgIAwACAjQADArgYAUQgNAKgNACQAAgcAFgfg");
	this.shape_214.setTransform(183.6,277.6);

	this.shape_215 = new cjs.Shape();
	this.shape_215.graphics.f("#272D4D").s().p("AgJA6QgCgEACgwQABgugDgCQgFgFAMgJQALgJAGAKIgIBxQgFAEgCAAQgEAAgDgEg");
	this.shape_215.setTransform(178,301.5);

	this.shape_216 = new cjs.Shape();
	this.shape_216.graphics.f("#1E2136").s().p("AgXA1QgEgYAJgZQAPgeAWgaQADgDACAMIABAMIgSAaQgRAeAAAUQgKAJgCAAIgBgBg");
	this.shape_216.setTransform(175.6,301.7);

	this.shape_217 = new cjs.Shape();
	this.shape_217.graphics.f("#272D4D").s().p("AghBKIgZgKQgDgGABgGQABgMAQAAQAPAAAKgUIAHgUQARgsARgTIAPgKQAKgGAKAbQAKAagXARQgXAOgHAfQgDAQABAMQgMALgSAAQgHAAgJgBg");
	this.shape_217.setTransform(173.2,299.8);

	this.shape_218 = new cjs.Shape();
	this.shape_218.graphics.f("#DFC7AF").s().p("AgqCIQABgEgGibQgFiUAKgOQAKgPAqAJQAVAFATAIIgVA+QgUBDADAaQADAUgHApQgIAxAAAiQABArgYAUQgNAKgNABQABgbAGggg");
	this.shape_218.setTransform(177,280.2);

	this.shape_219 = new cjs.Shape();
	this.shape_219.graphics.f("#AFACA6").s().p("ABLC4IjChnIgCgFIAAgGQABgEAEgCQgDACgBAFIAAAEIABAFIDEBhQAOgLAHgOQAHgRgDgRQgCgRgIgRIgNgXIgFgHIgBgDIArjNIAGgdIgpDpIASAfQAJATACARQABAKgBAJQgBAJgEAKQgFAKgGAGQgGAHgJAGIgCAAIgCAAg");
	this.shape_219.setTransform(230.4,251.5);

	this.shape_220 = new cjs.Shape();
	this.shape_220.graphics.f("#1C1C1C").s().p("AiXC1IgZgyIAsjkQADgTARgHIERiIIAGgBQAFABACAEQADADgBAFIgmDuQAaA2gKAjQgGASgKAGIk6CdQApgZgQg3g");
	this.shape_220.setTransform(255.7,243.5);

	this.shape_221 = new cjs.Shape();
	this.shape_221.graphics.f("#5E7652").s().p("AgKB7QgUgJgagQIgrgdIgogaQgMgHAAgNQgBgLAJgMQAQgTAKAEIA3AXQAhAOAWAHQA+hqANgVQAKgPAIgFQALgIAPAGQAaAKAJAbQAEANABAQQACAVgGAGQgiAogkAnQhEBHgSAAIgCAAg");
	this.shape_221.setTransform(228.7,228.9);

	this.shape_222 = new cjs.Shape();
	this.shape_222.graphics.f("#AEA8A5").s().p("AgEBXQgGgegHgUQgOgngYAQQABASgCAMIgMgpQADgIgMgIQgLgHAFgTQAEgWAYgOQAugdA0AYQA3AagQA4QgHAXgOAZQgLAWgBAEQAAAJgZAFIgQACQgJAAgDgFg");
	this.shape_222.setTransform(245.5,199.1);

	this.shape_223 = new cjs.Shape();
	this.shape_223.graphics.f("#E8DCD1").s().p("AgGAWQgEgCAGgIQAHgMgJgNIgCgDQAAgEAFgBIAKALQAHAOgQARIgDABIgBAAg");
	this.shape_223.setTransform(241.5,202.7);

	this.shape_224 = new cjs.Shape();
	this.shape_224.graphics.f("#DEBC9A").s().p("AgkAnQAJhDgEgIQgDgFAjgHIAkgGIgFAsQgEAtAFAHQAGALggACIgHAAQgZAAgLgQg");
	this.shape_224.setTransform(247.2,207.9);

	this.shape_225 = new cjs.Shape();
	this.shape_225.graphics.f("#E1C9B1").s().p("AARArQgigDgQgQQgOgLgHgRQgDgLADgJQAEgIAGADIAcAUQAVAMAGgGQAFgFgMgMIgLgLIgCgGQAAgGADgBQAKgBAwA4QAFAIgBAJQgBAJgGAHIgNABIgTgCg");
	this.shape_225.setTransform(210.4,226.8);

	this.shape_226 = new cjs.Shape();
	this.shape_226.graphics.f("#DEBC9A").s().p("Ag0BaQgLgPgJgxQgKg7ATgdIAegWQAkgTAkAQQAjAQACAqQABAVgGAQQgLATgRATQghAogbAGQgGACgIABIgGABQgKAAgFgGg");
	this.shape_226.setTransform(245.2,201.2);

	this.shape_227 = new cjs.Shape();
	this.shape_227.graphics.f("#405434").s().p("AgXEDQgXgDglgMQgSgFgJgQQgHgOADgRIAKg3QAHgiACgVQAGhAgJhAQgShTAKgoQAPg7BNgaIAugFIANABQAQADANAIQApAYABA+QAABHgKCWQgJCUgFAJQgGAMgTAJIgeANQgUAJgXAAIgRgBg");
	this.shape_227.setTransform(246.3,237);

	this.shape_228 = new cjs.Shape();
	this.shape_228.graphics.f("#2F2F2F").s().p("AjMDLQgKgCgJgJQgKgJAAgKQADhZAIhaQARi3AegMQAfgMCRAdQBKAPBCARIBdA9QgBAZglAMQhLAZi0g+QgPgGgogSIgDAAQgBAAgCAIQgBAcgOBNQgPBWgCARIgGA5IgCAXQgCAOgIAFQgLAFgLAAQgGAAgGgCg");
	this.shape_228.setTransform(230.1,268.2);

	this.shape_229 = new cjs.Shape();
	this.shape_229.graphics.f("#353535").s().p("AipC2QgOgLABgEQAzlFAbgeQARgUCIAlQBFATBBAWIgVBLIjTg7QAAAWgHAUIg4DlIgFAZQgFAOgMAAQgTgBgQgNg");
	this.shape_229.setTransform(232.5,260.8);

	this.shape_230 = new cjs.Shape();
	this.shape_230.graphics.f("#4E4134").s().p("AAiAkIgWgMQgNgBgRgEQghgJgNgOQgGgEgBgHQAAgIAEgFIAEgEQAJgHAQADIAZAFQAJACAQAAIALgDQAHgCACAAIAoANIAAASQAAASgDAHQgEAIgNAFQgIACgEAAQgEAAgCgBg");
	this.shape_230.setTransform(212.7,280.4);

	this.shape_231 = new cjs.Shape();
	this.shape_231.graphics.f("#453B2E").s().p("AAiAlIgWgMQgNgBgRgFQghgIgNgOQgNgOALgMIAOgIIAjAHQAkAFAMgIIApANIAAASQAAASgDAHQgEAIgNAEQgIADgFAAIgFgBg");
	this.shape_231.setTransform(212.7,281);

	this.shape_232 = new cjs.Shape();
	this.shape_232.graphics.f("#4E4134").s().p("AAiAkIgWgLQgNgCgRgEQghgJgNgNQgGgFgBgHQAAgHAEgGIAEgDQAJgHAQACIAZAGQANABAMAAIALgCIAJgDIAoANIAAASQAAATgDAHQgEAIgNAEQgIADgEAAQgEAAgCgCg");
	this.shape_232.setTransform(205.3,289.5);

	this.shape_233 = new cjs.Shape();
	this.shape_233.graphics.f("#453B2E").s().p("AAiAlIgWgMQgNgCgRgEQghgJgNgNQgNgPALgLIAOgIQBAAQATgMIApAMIAAASQAAATgDAHQgEAHgNAFQgIADgFAAIgFgBg");
	this.shape_233.setTransform(205.3,290.2);

	this.shape_234 = new cjs.Shape();
	this.shape_234.graphics.f("#1E1F1F").s().p("Aj5APQgKgGAFgKQABgDAEgCIDShnQAGgDAFADIEdBBIk6Cbg");
	this.shape_234.setTransform(243.8,258.4);

	this.shape_235 = new cjs.Shape();
	this.shape_235.graphics.f("#A19F94").s().p("AgdCdIA1lBIAGAvIgrEZg");
	this.shape_235.setTransform(248.8,260.3);

	this.shape_236 = new cjs.Shape();
	this.shape_236.graphics.f("#7F7C75").s().p("AATimIAPADIgwFAIgTAJg");
	this.shape_236.setTransform(250.8,260.1);

	this.shape_237 = new cjs.Shape();
	this.shape_237.graphics.f("#A19F94").s().p("AAWCUIg+kvIAgAhIAxEWg");
	this.shape_237.setTransform(263.6,268.8);

	this.shape_238 = new cjs.Shape();
	this.shape_238.graphics.f("#7F7C75").s().p("AgoibIATgMIA+FFIgNAKg");
	this.shape_238.setTransform(264.9,267.6);

	this.shape_239 = new cjs.Shape();
	this.shape_239.graphics.f("#A19F94").s().p("AgrCZIBWk5IABAuIhHEUg");
	this.shape_239.setTransform(223.6,270.4);

	this.shape_240 = new cjs.Shape();
	this.shape_240.graphics.f("#7F7C75").s().p("AAjiiIAQAFIhRE4IgUAIg");
	this.shape_240.setTransform(225.8,270.3);

	this.shape_241 = new cjs.Shape();
	this.shape_241.graphics.f("#A19F94").s().p("AAHCWIgfk0IAcAkIAVEZg");
	this.shape_241.setTransform(237.8,280.3);

	this.shape_242 = new cjs.Shape();
	this.shape_242.graphics.f("#7F7C75").s().p("AgYifIAUgKIAdFKIgOAJg");
	this.shape_242.setTransform(239.1,279.2);

	this.shape_243 = new cjs.Shape();
	this.shape_243.graphics.f("#AFACA6").s().p("ABLC4IjChoQgCgCAAgDIAAgGQABgEAEgCQgDACgBAFIAAAEIABAFIDDBhQAPgKAHgPQAGgPgCgSQgCgSgIgQIgIgQIgKgPIgBgDIAxjpIgpDpIASAfQAIAQADAUQABAJgBAKQgCAMgEAHQgEAKgGAGQgGAHgJAGIgCAAIgCAAg");
	this.shape_243.setTransform(270.5,232);

	this.shape_244 = new cjs.Shape();
	this.shape_244.graphics.f("#1C1C1C").s().p("AiXC0IgZgxIAsjkQAEgSAQgIIERiIIAGgBQAFABACAEQADADgBAFIgmDuQAaA2gKAjQgGASgKAHIk6CcQApgagQg3g");
	this.shape_244.setTransform(295.8,223.9);

	this.shape_245 = new cjs.Shape();
	this.shape_245.graphics.f("#15120E").s().p("AARAgQgCgQgcgTQgbgSADgPQAEgTARgOQAJgHAHgEIAkAwIACBwQgTgTgCgdg");
	this.shape_245.setTransform(283.2,183.4);

	this.shape_246 = new cjs.Shape();
	this.shape_246.graphics.f("#EBE8E6").s().p("AgFAUQgFgGgCgJQgEgRAKgMIASABIgHAOQgFAQAOASg");
	this.shape_246.setTransform(264.6,218.7);

	this.shape_247 = new cjs.Shape();
	this.shape_247.graphics.f("#15120E").s().p("AgtB1QgDg4gHg7QgNh0gMgOICHASIAJBhQALBiAGAOQgFANgRAJQgRAIgWAAQgbAAgmgMg");
	this.shape_247.setTransform(291.3,193.5);

	this.shape_248 = new cjs.Shape();
	this.shape_248.graphics.f("#E2D0BD").s().p("AgDAQQAKgIgDgIQgEgIgGgFQgBgBgBAAQAAgBgBAAQAAgBAAgBQAAAAABgBIADgBQAIADAFAJQAEAIgDAJQgCAFgFAFIgCAAQgEAAABgEg");
	this.shape_248.setTransform(285.8,185.4);

	this.shape_249 = new cjs.Shape();
	this.shape_249.graphics.f("#EBE8E6").s().p("AgjAAQABgCAZAAQAcgDASgQIAKAKQABAIgHAHQgPAQgrgBIgdADQADgJAIgNg");
	this.shape_249.setTransform(289.2,193.8);

	this.shape_250 = new cjs.Shape();
	this.shape_250.graphics.f("#15120E").s().p("AgNBBQgDgGAAgGQgFgzgkgMQgIgKgFgMQgJgXASgMIAkgPQAmgLAYAWQApAigEAoQgMAogVAPIgEAYQgBgFgGgCQgLgFgXAQQgDgKgGgLg");
	this.shape_250.setTransform(289.4,182.1);

	this.shape_251 = new cjs.Shape();
	this.shape_251.graphics.f("#506B52").s().p("AhQASQgGgLgDgKQgFgWAQgBQAvgDAsgBQA7gBADAFIAKAMQAGAMAAAeQgbADgkAAIgEAAQhCAAgmgNg");
	this.shape_251.setTransform(272.9,219);

	this.shape_252 = new cjs.Shape();
	this.shape_252.graphics.f("#DFC7AF").s().p("AAKAUQgkgEgEgBQgEgCgGgLQgHgLACgEQABgFAJgBIAcgDQAZgBAYAOIAFAgIglgDg");
	this.shape_252.setTransform(261.4,218);

	this.shape_253 = new cjs.Shape();
	this.shape_253.graphics.f("#506B52").s().p("AgNBbQgMgWgFggQgGgkAEgrQAEg0AOgPIAaACQAZAMgDAxQgFBKgEAfQgGAugKAFIgEAAQgIAAgKgTg");
	this.shape_253.setTransform(281,211);

	this.shape_254 = new cjs.Shape();
	this.shape_254.graphics.f("#6C8E72").s().p("AhmA6IAjibICogNIgBBUQAABWADASQgbAWgnAIQgQADgPAAQg7AAgxg1g");
	this.shape_254.setTransform(288.2,220.7);

	this.shape_255 = new cjs.Shape();
	this.shape_255.graphics.f("#1B1311").s().p("AgqAlQgmgKgMgTQAGgfABgSIAPAKQASAMAVAFQA+ASA2guIAAAUQADAVAFAEQgGAKgRAKQgfAUgrAAQgPAAgXgGg");
	this.shape_255.setTransform(288,223.2);

	this.shape_256 = new cjs.Shape();
	this.shape_256.graphics.f("#6C8E72").s().p("AgaClQgxgBgPgeQgNgYAAhjQgBhiALgGQAGgDA6grQA+gkApAQQAoAQgNBmQgGAygPAvQgEARgCAeQgFAZgWAQQgcAVgpAAIgEAAg");
	this.shape_256.setTransform(289,209);

	this.shape_257 = new cjs.Shape();
	this.shape_257.graphics.f("#13171D").s().p("AhUgXQAYgOAcgEQAVgEAyALQAZAFAVAHIgKAaQgMARgIAXg");
	this.shape_257.setTransform(272.4,222.1);

	this.shape_258 = new cjs.Shape();
	this.shape_258.graphics.f("#DFC7AF").s().p("AgtA8QANhbgHgfQgFgTAsACQAWABAYAFIgQAyQgNA3AQAdQgIALgNAFQgIADgGAAQgUAAgXgUg");
	this.shape_258.setTransform(290.4,191);

	this.shape_259 = new cjs.Shape();
	this.shape_259.graphics.f("#13161C").s().p("AAhB1Qg1gVhfgyIhUguQgJgWAJgbQASg1BbgVIB4AVQB+ATAVgMQAgA2gGA+QgFAzg4AgQgiAUgiAAQgUAAgVgHg");
	this.shape_259.setTransform(278.2,230.3);

	this.shape_260 = new cjs.Shape();
	this.shape_260.graphics.f("#DFC7AF").s().p("AgoBOQgLgEgDgKQgMgrABgZQAAguAhgVQArgbAgBCQAQAgAIAnQgpAZguAOQgGACgFAAQgFAAgEgCg");
	this.shape_260.setTransform(286.5,183.8);

	this.shape_261 = new cjs.Shape();
	this.shape_261.graphics.f("#D9C2AB").s().p("AguA8QgbgUAAgoQAAgeAVgVQAWgWAeAAQAfAAAVAWQAWAWAAAdQAAAfgWAWQgVAVgfAAQgZAAgVgOg");
	this.shape_261.setTransform(288.3,181.9);

	this.shape_262 = new cjs.Shape();
	this.shape_262.graphics.f("#13161C").s().p("AgIA3QgEhOAEgPQADgJAFgFIAEgCQAFgDACADQgCAGgDAzIgCAyQgBADgDAAIgIgBg");
	this.shape_262.setTransform(265.2,261.9);

	this.shape_263 = new cjs.Shape();
	this.shape_263.graphics.f("#DFC7AF").s().p("AgUDYIgUgPQAVgGADghIgCgyIgPiWQgMiKAKgWQAMgWAeAFQAQACAOAHIACClQABAVgIAuQgJAwAAAGQAAAMALANIAHAIIgEACQgKAJgNAxQgMAsgSAAIgEgBg");
	this.shape_263.setTransform(260.2,242);

	this.shape_264 = new cjs.Shape();
	this.shape_264.graphics.f("#13161C").s().p("AgJBCIgUgHQgSgFgNgLQgIgIAFgJQAHgLAXAEQAWAFAUgoQAKgVAGgVIAQgIIAMAFQAMAGABAJQABAIgFAKIgIAQQgKAQgFAOQgDANgHANQgHAMgNAIQgEADgGAAIgIgBg");
	this.shape_264.setTransform(259.9,260);

	this.shape_265 = new cjs.Shape();
	this.shape_265.graphics.f("#13161C").s().p("AgIA3QgEhOAEgPQADgJAFgFIAEgCQAEgCADACQgCAGgDAzIgCAyQgBADgDAAIgIgBg");
	this.shape_265.setTransform(271.8,259);

	this.shape_266 = new cjs.Shape();
	this.shape_266.graphics.f("#CEB8A1").s().p("AgVDYIgTgPQAVgGACghIgBgyIgPiVQgNiLALgWQAMgWAeAFQAQACANAHIABBGIACBfQABAVgIAuQgJAwAAAGQAAAMALANIAHAIIgEACQgKAJgNAxQgMAsgSAAIgFgBg");
	this.shape_266.setTransform(266.8,239.1);

	this.shape_267 = new cjs.Shape();
	this.shape_267.graphics.f("#13161C").s().p("AgKBCIgTgHQgRgFgPgMQgHgHAFgKQAGgLAYAFQAWAEATgoQALgUAFgVIAQgJIAMAFQANAHABAJQAAAIgEAKIgJAQIgOAdQgFAQgFALQgIAMgMAIQgEAEgGAAIgJgCg");
	this.shape_267.setTransform(266.5,257.1);

	this.shape_268 = new cjs.Shape();
	this.shape_268.graphics.f("#2E2F2F").s().p("Aj4APQgFgCgCgFQgBgFACgDQACgEAEgCIDShnQAFgDAFADIEdBBIk6Cbg");
	this.shape_268.setTransform(283.9,238.9);

	this.shape_269 = new cjs.Shape();
	this.shape_269.graphics.f("#A19F94").s().p("AgdCeIA1lBIAGAuIgrEZg");
	this.shape_269.setTransform(288.8,240.8);

	this.shape_270 = new cjs.Shape();
	this.shape_270.graphics.f("#7F7C75").s().p("AATilIAPACIgwFAIgTAKg");
	this.shape_270.setTransform(290.9,240.6);

	this.shape_271 = new cjs.Shape();
	this.shape_271.graphics.f("#A19F94").s().p("AAVCUIg9kvIAhAhIAwEWg");
	this.shape_271.setTransform(303.7,249.3);

	this.shape_272 = new cjs.Shape();
	this.shape_272.graphics.f("#7F7C75").s().p("AgoicIATgLIA9FEIgMALg");
	this.shape_272.setTransform(305,248);

	this.shape_273 = new cjs.Shape();
	this.shape_273.graphics.f("#A19F94").s().p("AgrCZIBWk6IABAvIhHEUg");
	this.shape_273.setTransform(263.7,250.9);

	this.shape_274 = new cjs.Shape();
	this.shape_274.graphics.f("#7F7C75").s().p("AAjiiIAQAEIhRE5IgUAIg");
	this.shape_274.setTransform(265.9,250.7);

	this.shape_275 = new cjs.Shape();
	this.shape_275.graphics.f("#A19F94").s().p("AAHCVIgfkzIAcAkIAVEZg");
	this.shape_275.setTransform(277.8,260.8);

	this.shape_276 = new cjs.Shape();
	this.shape_276.graphics.f("#7F7C75").s().p("AgXifIATgKIAcFJIgNAKg");
	this.shape_276.setTransform(279.2,259.7);

	this.shape_277 = new cjs.Shape();
	this.shape_277.graphics.f("#AFACA6").s().p("ABLC4IjDhoIgBgFIAAgFQACgGAEgCQgFAEAAAEIAAAFIABAFIDDBgQAOgIAHgQQAHgQgCgSQgCgRgIgRQgFgLgEgFIgJgPIgBgDIAxjpIgpDpIAEAGIAOAZQAIAQADAUQABAKgBAJQgCAMgEAHQgEAJgGAHQgIAIgHAFIgCAAIgCAAg");
	this.shape_277.setTransform(313.8,212);

	this.shape_278 = new cjs.Shape();
	this.shape_278.graphics.f("#1C1C1C").s().p("AiXC1IgYgyIArjkQADgSARgIIERiIQAEgCACABQAFABACADQADAEgBAEIgmDvQAaA1gKAkQgFARgLAHIk5CdQAogagQg2g");
	this.shape_278.setTransform(339.2,204);

	this.shape_279 = new cjs.Shape();
	this.shape_279.graphics.f("#2E2F2F").s().p("Aj5APQgFgCgBgFQgCgFACgDQADgEADgCIDShnQAFgDAGADIEdBBIk6Cbg");
	this.shape_279.setTransform(327.3,218.9);

	this.shape_280 = new cjs.Shape();
	this.shape_280.graphics.f("#768FBF").s().p("AgSATQgVgDgIgHIAMgPIAcAEQAegBAJgRQAIAGAIACQgBAMgIAIQgGAIgMADQgJACgKAAQgJAAgLgCg");
	this.shape_280.setTransform(329.3,167.8);

	this.shape_281 = new cjs.Shape();
	this.shape_281.graphics.f("#586977").s().p("AgqCRIgyAAQgPAAgHgLQgHgKABgQQAAgJADgIQAFgKAGgCIA+gJQAkgGAYgHIgEhNQgCgvAAggQAAgUAEgIQAGgNAQgDQAdgGAYASQAKAKAKANQANARgBAJIgRBuQgUBugRADQgXAEggAAIg2AAg");
	this.shape_281.setTransform(317.2,187.6);

	this.shape_282 = new cjs.Shape();
	this.shape_282.graphics.f("#E1C9B1").s().p("AgTAnQgUgDgPgLQgJgIgCgKQgBgIAHAAIAjABQAbgBABgJQABgIgQgEIgRgDIgFgEQgEgGADgCQAJgIBKAXIAKAIQAJALgDAMQgMAJgRAJQgaANgSAAIgLgBg");
	this.shape_282.setTransform(300.7,199);

	this.shape_283 = new cjs.Shape();
	this.shape_283.graphics.f("#495660").s().p("Ag3EKQgTgDgMgQQgIgOACgTIAEg6QADglAAgWQgBhFgQhBQgdhUAGgrQAJg/BOglIAwgKIAOAAQARACAOAGQAvAVAHBAQAIBLAGCeQAHCcgEALQgFANgTAMIgeAQQgbAPgkAAQgXAAgpgJg");
	this.shape_283.setTransform(330.8,194);

	this.shape_284 = new cjs.Shape();
	this.shape_284.graphics.f("#2F2F2F").s().p("AjADaQgKgCgKgIQgMgJgBgKQgHhdgBhgQgDjBAfgQQAegQCdAOQBNAIBJAKIBnA2QABAaglARQhLAijEgtQgOgDgvgQIgDAAQgCABAAAIQABAegFBSIgHBuIAAA8IABAZQAAAOgJAGQgNAIgOAAIgIAAg");
	this.shape_284.setTransform(317.8,230.3);

	this.shape_285 = new cjs.Shape();
	this.shape_285.graphics.f("#353535").s().p("AieDGIgJgGQgHgFAAgDQASlbAYgiQAQgWCTAYQBJAMBHAQIgOBPIjjgmQABAXgEAWIghD2IgDAcQgDAPgNABIgDAAQgSAAgQgLg");
	this.shape_285.setTransform(319.8,221.7);

	this.shape_286 = new cjs.Shape();
	this.shape_286.graphics.f("#4E4134").s().p("AAoAlIgYgKQgPAAgRgDQgkgFgPgOQgGgEgCgHQgCgHAFgHIAEgEQAIgIAQABIAcADQANAAANgCIAKgEIAKgDIAsAKQAFAhgEAMQgDAJgNAGQgJAFgGAAIgEgBg");
	this.shape_286.setTransform(300.9,242.9);

	this.shape_287 = new cjs.Shape();
	this.shape_287.graphics.f("#453B2E").s().p("AAoAlIgYgKQgPAAgRgDQgkgFgPgOQgPgNALgNQAFgGAIgEIAmADQAmABALgJIAsAJQAGAhgEAMQgDAJgOAGQgIAEgGAAIgEAAg");
	this.shape_287.setTransform(301,243.6);

	this.shape_288 = new cjs.Shape();
	this.shape_288.graphics.f("#4E4134").s().p("AAoAlIgYgKQgPAAgRgDQgkgFgPgOQgHgEgBgGQgCgIAEgGIAEgFQAIgIARABIAbADQAOAAANgBIAKgEQAIgEACABIArAJQAGAigEAMQgDAIgNAHQgJAEgFAAIgFgBg");
	this.shape_288.setTransform(294.2,253.3);

	this.shape_289 = new cjs.Shape();
	this.shape_289.graphics.f("#453B2E").s().p("AAoAkIgYgKQgPAAgRgCQgkgFgPgOQgPgNALgNQAFgGAIgEIAmADQAmABALgJIAsAJQAGAhgEAMQgDAJgNAGQgJAEgFAAIgFgBg");
	this.shape_289.setTransform(294.3,254.1);

	this.shape_290 = new cjs.Shape();
	this.shape_290.graphics.f("#A19F94").s().p("AgdCeIA1lBIAGAuIgrEZg");
	this.shape_290.setTransform(332.2,220.8);

	this.shape_291 = new cjs.Shape();
	this.shape_291.graphics.f("#7F7C75").s().p("AATimIAPADIgwFAIgTAJg");
	this.shape_291.setTransform(334.2,220.6);

	this.shape_292 = new cjs.Shape();
	this.shape_292.graphics.f("#A19F94").s().p("AAWCVIg+kwIAgAiIAxEVg");
	this.shape_292.setTransform(347.1,229.3);

	this.shape_293 = new cjs.Shape();
	this.shape_293.graphics.f("#7F7C75").s().p("AgoicIATgLIA+FFIgMAKg");
	this.shape_293.setTransform(348.3,228.1);

	this.shape_294 = new cjs.Shape();
	this.shape_294.graphics.f("#A19F94").s().p("AgrCZIBWk6IABAvIhIEUg");
	this.shape_294.setTransform(307.1,230.9);

	this.shape_295 = new cjs.Shape();
	this.shape_295.graphics.f("#7F7C75").s().p("AAkiiIAPAFIhRE5IgUAHg");
	this.shape_295.setTransform(309.3,230.8);

	this.shape_296 = new cjs.Shape();
	this.shape_296.graphics.f("#A19F94").s().p("AAGCWIgek1IAcAlIAVEag");
	this.shape_296.setTransform(321.2,240.8);

	this.shape_297 = new cjs.Shape();
	this.shape_297.graphics.f("#7F7C75").s().p("AgXifIAUgKIAbFJIgMAKg");
	this.shape_297.setTransform(322.6,239.7);

	this.instance_2 = new lib.Group851();
	this.instance_2.parent = this;
	this.instance_2.setTransform(309.8,295.8,1,1,0,0,0,139.1,72.9);
	this.instance_2.alpha = 0.141;

	this.shape_298 = new cjs.Shape();
	this.shape_298.graphics.f("#E7A500").s().p("AgwAVIBhgwIAAAHIhhAwg");
	this.shape_298.setTransform(147.7,87);

	this.shape_299 = new cjs.Shape();
	this.shape_299.graphics.f("#2334FC").s().p("AhBAcICDhAIAAAJIiDBAg");
	this.shape_299.setTransform(144.1,114.3);

	this.shape_300 = new cjs.Shape();
	this.shape_300.graphics.f("#6F4949").s().p("AgwAkIgogaIAEgFIAnAaICGhCIAAAEIiIBEg");
	this.shape_300.setTransform(142.3,115.4);

	this.shape_301 = new cjs.Shape();
	this.shape_301.graphics.f("#6F4949").s().p("AhBAxIAhgyIBigxIAAAFIhgAvIgfAxg");
	this.shape_301.setTransform(146,90.5);

	this.shape_302 = new cjs.Shape();
	this.shape_302.graphics.f("#2D6597").s().p("Ah4A9QAAgaAjgjIBVAAIAwhPQASgGAUAAQAjAAAAAZQAAAagjAiQgkAjgyAaQgxAZgkAAQgjAAAAgZg");
	this.shape_302.setTransform(162.6,92.2);

	this.shape_303 = new cjs.Shape();
	this.shape_303.graphics.f("#E7A500").s().p("AhCAoQA5g3BMgYIgxBPg");
	this.shape_303.setTransform(160.5,87.1);

	this.shape_304 = new cjs.Shape();
	this.shape_304.graphics.f("#1623A4").s().p("Ah4A9QAAgaAjgjIBVAAIAwhPQASgGAUAAQAjAAAAAZQAAAagjAiQgkAjgyAaQgxAZgkAAQgjAAAAgZg");
	this.shape_304.setTransform(162.6,92.7);

	this.shape_305 = new cjs.Shape();
	this.shape_305.graphics.f("#3241A5").s().p("AhCAoQA5g3BMgYIgxBPg");
	this.shape_305.setTransform(160.5,87.6);

	this.shape_306 = new cjs.Shape();
	this.shape_306.graphics.f("#2D6597").s().p("AhVB5QgjgRAAgzQAAgyAjg0QAkg2AxgYIAAB5IBwhlQAKAUgBAUQAAAygkA0QgjA2gyAZQgcAOgZAAQgRAAgPgHg");
	this.shape_306.setTransform(130.8,108.7);

	this.shape_307 = new cjs.Shape();
	this.shape_307.graphics.f("#E7A500").s().p("Ag3g1QAlgTAeAGQAfAGANAbIhvBlg");
	this.shape_307.setTransform(138,98.4);

	this.shape_308 = new cjs.Shape();
	this.shape_308.graphics.f("#8E5D5C").s().p("AiLBDIEWiLIAAAGIkWCLg");
	this.shape_308.setTransform(126.1,44);

	this.shape_309 = new cjs.Shape();
	this.shape_309.graphics.f("#8E5D5C").s().p("AhyA2IDlhyIAAAHIjlByg");
	this.shape_309.setTransform(126.1,47);

	this.shape_310 = new cjs.Shape();
	this.shape_310.graphics.f("#8E5D5C").s().p("AiLBCIEWiKIAAAHIkWCKg");
	this.shape_310.setTransform(126.1,85.9);

	this.shape_311 = new cjs.Shape();
	this.shape_311.graphics.f("#B40000").s().p("AAGgUIADAoIgRABg");
	this.shape_311.setTransform(139.2,47.2);

	this.shape_312 = new cjs.Shape();
	this.shape_312.graphics.f("#B40000").s().p("Ah1BLIggAQQAAAAgBAAQAAAAAAAAQgBAAAAAAQAAgBAAAAQAAgBAAAAQAAgBABAAQAAgBAAAAQABAAAAgBIAigRIBQBWIAbhoIAvhGIAqgVIAfAqIAkijQAAgBAAAAQABgBAAAAQAAAAAAAAQABgBAAAAQABAAAAABQAAAAABAAQAAAAAAAAQAAABAAAAIgnCvIgjgvIglATIguBCIgcByg");
	this.shape_312.setTransform(124.7,63.1);

	this.shape_313 = new cjs.Shape();
	this.shape_313.graphics.f("#3E8A00").s().p("AgPhpIAfgRIAADkIgfARg");
	this.shape_313.setTransform(140.9,62.6);

	this.shape_314 = new cjs.Shape();
	this.shape_314.graphics.f("#2D6597").s().p("AgPghIAfgQIAABTIgfAQg");
	this.shape_314.setTransform(135.9,72.3);

	this.shape_315 = new cjs.Shape();
	this.shape_315.graphics.f("#2D6597").s().p("AgQhKIAhgRIAACnIghAQg");
	this.shape_315.setTransform(131,70.6);

	this.shape_316 = new cjs.Shape();
	this.shape_316.graphics.f("#3E8A00").s().p("AgPgxIAfgRIAAB0IgfARg");
	this.shape_316.setTransform(126.1,75.6);

	this.shape_317 = new cjs.Shape();
	this.shape_317.graphics.f("#2D6597").s().p("AgPABIAfgQIAAAPIgfAQg");
	this.shape_317.setTransform(121.2,83.1);

	this.shape_318 = new cjs.Shape();
	this.shape_318.graphics.f("#E7A500").s().p("AgQgYIAhgRIAABCIghAQg");
	this.shape_318.setTransform(116.3,83);

	this.shape_319 = new cjs.Shape();
	this.shape_319.graphics.f("#3E8A00").s().p("AgPg+IAfgQIAACOIgfAQg");
	this.shape_319.setTransform(111.3,81.7);

	this.instance_3 = new lib.Group590();
	this.instance_3.parent = this;
	this.instance_3.setTransform(126.1,57.5,1,1,0,0,0,17.3,16.7);
	this.instance_3.alpha = 0.27;

	this.instance_4 = new lib.Group586();
	this.instance_4.parent = this;
	this.instance_4.setTransform(126.1,63.8,1,1,0,0,0,17.2,8.7);
	this.instance_4.alpha = 0.27;

	this.instance_5 = new lib.Group582();
	this.instance_5.parent = this;
	this.instance_5.setTransform(126.1,53,1,1,0,0,0,17.2,8.7);
	this.instance_5.alpha = 0.27;

	this.instance_6 = new lib.Group578();
	this.instance_6.parent = this;
	this.instance_6.setTransform(126.1,51.2,1,1,0,0,0,17.2,8.7);
	this.instance_6.alpha = 0.27;

	this.instance_7 = new lib.Group472();
	this.instance_7.parent = this;
	this.instance_7.setTransform(126.1,73.4,1,1,0,0,0,17.3,16.7);
	this.instance_7.alpha = 0.27;

	this.instance_8 = new lib.Group468();
	this.instance_8.parent = this;
	this.instance_8.setTransform(126.1,79.8,1,1,0,0,0,17.2,8.7);
	this.instance_8.alpha = 0.27;

	this.instance_9 = new lib.Group464();
	this.instance_9.parent = this;
	this.instance_9.setTransform(126.1,69,1,1,0,0,0,17.2,8.7);
	this.instance_9.alpha = 0.27;

	this.instance_10 = new lib.Group460();
	this.instance_10.parent = this;
	this.instance_10.setTransform(126.1,67.2,1,1,0,0,0,17.2,8.7);
	this.instance_10.alpha = 0.27;

	this.shape_320 = new cjs.Shape();
	this.shape_320.graphics.f("#6F4949").s().p("AhjAwIDGhjIAAAEIjGBjg");
	this.shape_320.setTransform(164.1,25.8);

	this.shape_321 = new cjs.Shape();
	this.shape_321.graphics.f("#6F4949").s().p("AhRAmICjhQIAAAEIijBRg");
	this.shape_321.setTransform(164.1,27.9);

	this.shape_322 = new cjs.Shape();
	this.shape_322.graphics.f("#6F4949").s().p("AhjAwIDGhjIAAAEIjGBjg");
	this.shape_322.setTransform(164.1,55.6);

	this.shape_323 = new cjs.Shape();
	this.shape_323.graphics.f("#2D6597").s().p("AgLgXIAXgLIAAA6IgXALg");
	this.shape_323.setTransform(175.2,60.5);

	this.shape_324 = new cjs.Shape();
	this.shape_324.graphics.f("#2D6597").s().p("AgLgxIAXgLIAABtIgXAMg");
	this.shape_324.setTransform(171.7,59.7);

	this.shape_325 = new cjs.Shape();
	this.shape_325.graphics.f("#2D6597").s().p("AgKAAIAVgKIAAAKIgVALg");
	this.shape_325.setTransform(168.2,66.4);

	this.shape_326 = new cjs.Shape();
	this.shape_326.graphics.f("#2D6597").s().p("AgLAAIAXgKIAAAKIgXALg");
	this.shape_326.setTransform(160,70.5);

	this.shape_327 = new cjs.Shape();
	this.shape_327.graphics.f("#2D6597").s().p("AgLgRIAXgLIAAAuIgXALg");
	this.shape_327.setTransform(156.5,70.5);

	this.shape_328 = new cjs.Shape();
	this.shape_328.graphics.f("#2D6597").s().p("AgKgrIAVgMIAABjIgVAMg");
	this.shape_328.setTransform(153,69.6);

	this.shape_329 = new cjs.Shape();
	this.shape_329.graphics.f("#970300").s().p("AAEgOIACAcIgLABg");
	this.shape_329.setTransform(173.4,28.1);

	this.shape_330 = new cjs.Shape();
	this.shape_330.graphics.f("#970300").s().p("AhTA1IgXAMQAAAAgBAAQAAAAAAgBQAAAAAAAAQgBAAAAAAIACgCIAYgMIA5A9IAThLIAigxIAegOIAWAdIAah0IABgCIABABIgbB8IgZghIgbANIggAvIgVBRg");
	this.shape_330.setTransform(163.1,39.4);

	this.shape_331 = new cjs.Shape();
	this.shape_331.graphics.f("#2D6597").s().p("AgLhLIAXgLIAACiIgXALg");
	this.shape_331.setTransform(174.6,39);

	this.shape_332 = new cjs.Shape();
	this.shape_332.graphics.f("#2D6597").s().p("AgLgXIAXgMIAAA7IgXAMg");
	this.shape_332.setTransform(171.1,45.9);

	this.shape_333 = new cjs.Shape();
	this.shape_333.graphics.f("#2D6597").s().p("AgLg1IAXgLIAAB2IgXALg");
	this.shape_333.setTransform(167.6,44.7);

	this.shape_334 = new cjs.Shape();
	this.shape_334.graphics.f("#2D6597").s().p("AgLgjIAXgMIAABTIgXAMg");
	this.shape_334.setTransform(164.1,48.3);

	this.shape_335 = new cjs.Shape();
	this.shape_335.graphics.f("#2D6597").s().p("AgLAAIAXgKIAAAKIgXALg");
	this.shape_335.setTransform(160.6,53.6);

	this.shape_336 = new cjs.Shape();
	this.shape_336.graphics.f("#2D6597").s().p("AgLgRIAXgMIAAAvIgXAMg");
	this.shape_336.setTransform(157.1,53.6);

	this.shape_337 = new cjs.Shape();
	this.shape_337.graphics.f("#2D6597").s().p("AgLgsIAXgLIAABkIgXALg");
	this.shape_337.setTransform(153.5,52.6);

	this.instance_11 = new lib.Group280();
	this.instance_11.parent = this;
	this.instance_11.setTransform(164.1,35.4,1,1,0,0,0,12.3,11.9);
	this.instance_11.alpha = 0.27;

	this.instance_12 = new lib.Group276();
	this.instance_12.parent = this;
	this.instance_12.setTransform(164.1,39.9,1,1,0,0,0,12.3,6.2);
	this.instance_12.alpha = 0.27;

	this.instance_13 = new lib.Group272();
	this.instance_13.parent = this;
	this.instance_13.setTransform(164.1,32.2,1,1,0,0,0,12.3,6.2);
	this.instance_13.alpha = 0.27;

	this.instance_14 = new lib.Group268();
	this.instance_14.parent = this;
	this.instance_14.setTransform(164.1,30.9,1,1,0,0,0,12.3,6.2);
	this.instance_14.alpha = 0.27;

	this.instance_15 = new lib.Group162();
	this.instance_15.parent = this;
	this.instance_15.setTransform(164.1,46.8,1,1,0,0,0,12.3,11.9);
	this.instance_15.alpha = 0.27;

	this.instance_16 = new lib.Group158();
	this.instance_16.parent = this;
	this.instance_16.setTransform(164.1,51.3,1,1,0,0,0,12.3,6.2);
	this.instance_16.alpha = 0.27;

	this.instance_17 = new lib.Group154();
	this.instance_17.parent = this;
	this.instance_17.setTransform(164.1,43.6,1,1,0,0,0,12.3,6.2);
	this.instance_17.alpha = 0.27;

	this.instance_18 = new lib.Group150();
	this.instance_18.parent = this;
	this.instance_18.setTransform(151.8,36.1);
	this.instance_18.alpha = 0.27;

	this.instance_19 = new lib.Group44();
	this.instance_19.parent = this;
	this.instance_19.setTransform(164.1,63.4,1,1,0,0,0,12.3,11.9);
	this.instance_19.alpha = 0.27;

	this.instance_20 = new lib.Group40();
	this.instance_20.parent = this;
	this.instance_20.setTransform(164.1,67.9,1,1,0,0,0,12.3,6.2);
	this.instance_20.alpha = 0.27;

	this.instance_21 = new lib.Group36();
	this.instance_21.parent = this;
	this.instance_21.setTransform(164.1,60.2,1,1,0,0,0,12.3,6.2);
	this.instance_21.alpha = 0.27;

	this.instance_22 = new lib.Group32();
	this.instance_22.parent = this;
	this.instance_22.setTransform(164.1,58.9,1,1,0,0,0,12.3,6.2);
	this.instance_22.alpha = 0.27;

	this.shape_338 = new cjs.Shape();
	this.shape_338.graphics.f("#C1C2D2").s().p("AgRr7IAjgSIAAYIIgjATg");
	this.shape_338.setTransform(100.3,121.5);

	this.shape_339 = new cjs.Shape();
	this.shape_339.graphics.f("#686870").s().p("AgpMCIAA4JIAkgSIAvAYIgSX0IgSAng");
	this.shape_339.setTransform(97.9,120.3);

	this.shape_340 = new cjs.Shape();
	this.shape_340.graphics.f("#ADADBD").s().p("AjThWIAlgRIGCC+IglARg");
	this.shape_340.setTransform(96.3,196.7);

	this.shape_341 = new cjs.Shape();
	this.shape_341.graphics.f("#686870").s().p("AjThJIAAgqIBGAHIFhClIAAAqIglARg");
	this.shape_341.setTransform(96.3,199.7);

	this.shape_342 = new cjs.Shape();
	this.shape_342.graphics.f("#FFFFFF").s().p("AmUkAIMqmfIAAOgIsqGfg");
	this.shape_342.setTransform(142.9,75.7);

	this.shape_343 = new cjs.Shape();
	this.shape_343.graphics.f("#BFBFBF").s().p("AmqKVIAAugIMqmfIArAVIgrOLIr/G1g");
	this.shape_343.setTransform(140.7,74.7);

	this.shape_344 = new cjs.Shape();
	this.shape_344.graphics.f("#C1C2D2").s().p("AgRr7IAjgSIAAYJIgjASg");
	this.shape_344.setTransform(185.8,80.6);

	this.shape_345 = new cjs.Shape();
	this.shape_345.graphics.f("#686870").s().p("AgpMCIAA4IIAkgTIAvAYIgSX1IgSAmg");
	this.shape_345.setTransform(183.4,79.4);

	this.shape_346 = new cjs.Shape();
	this.shape_346.graphics.f("#ADADBD").s().p("AjThVIAlgSIGCC+IglARg");
	this.shape_346.setTransform(181.9,155.8);

	this.shape_347 = new cjs.Shape();
	this.shape_347.graphics.f("#686870").s().p("AjThJIAAgqIBGAHIFhClIAAAqIglARg");
	this.shape_347.setTransform(181.9,158.8);

	this.instance_23 = new lib.Group2();
	this.instance_23.parent = this;
	this.instance_23.setTransform(160.1,181.3,1,1,0,0,0,89.8,29.9);
	this.instance_23.alpha = 0.141;

	this.shape_348 = new cjs.Shape();
	this.shape_348.graphics.f("#FFFFFF").s().p("ABdUqMgm1gTPQhOgngchRQgchTAnhOQAghBBAgfMAhBgQMQAsgVAyAAQAwAAAsAVMAm1ATPQBOAnAcBRQAcBTgmBOQggBAhBAgMghCAQMQgrAWgyAAQgxAAgrgWg");
	this.shape_348.setTransform(251,252.1);

	this.instance_24 = new lib.Group();
	this.instance_24.parent = this;
	this.instance_24.setTransform(269.6,395,1,1,0,0,0,9.3,13.3);
	this.instance_24.alpha = 0.41;

	this.shape_349 = new cjs.Shape();
	this.shape_349.graphics.f("#2465A3").s().p("ABdUrMgm1gTPQhOgngchSQgchTAnhOQAghBBAgeMAhBgQNQAsgVAyAAQAwAAAsAVMAm1ATPQBOAnAcBSQAcBSgmBPQghBAhAAgMghCAQMQgrAVgyAAQgxAAgrgVg");
	this.shape_349.setTransform(251,273.6);

	this.shape_350 = new cjs.Shape();
	this.shape_350.graphics.f("#2465A3").s().p("ABbh3IAADmIi1AJg");
	this.shape_350.setTransform(492.9,273.2);

	this.shape_351 = new cjs.Shape();
	this.shape_351.graphics.f("#2465A3").s().p("AhNB2IAAjyICbD5g");
	this.shape_351.setTransform(7.8,254.1);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_351},{t:this.shape_350},{t:this.shape_349},{t:this.instance_24},{t:this.shape_348},{t:this.instance_23},{t:this.shape_347},{t:this.shape_346},{t:this.shape_345},{t:this.shape_344},{t:this.shape_343},{t:this.shape_342},{t:this.shape_341},{t:this.shape_340},{t:this.shape_339},{t:this.shape_338},{t:this.instance_22},{t:this.instance_21},{t:this.instance_20},{t:this.instance_19},{t:this.instance_18},{t:this.instance_17},{t:this.instance_16},{t:this.instance_15},{t:this.instance_14},{t:this.instance_13},{t:this.instance_12},{t:this.instance_11},{t:this.shape_337},{t:this.shape_336},{t:this.shape_335},{t:this.shape_334},{t:this.shape_333},{t:this.shape_332},{t:this.shape_331},{t:this.shape_330},{t:this.shape_329},{t:this.shape_328},{t:this.shape_327},{t:this.shape_326},{t:this.shape_325},{t:this.shape_324},{t:this.shape_323},{t:this.shape_322},{t:this.shape_321},{t:this.shape_320},{t:this.instance_10},{t:this.instance_9},{t:this.instance_8},{t:this.instance_7},{t:this.instance_6},{t:this.instance_5},{t:this.instance_4},{t:this.instance_3},{t:this.shape_319},{t:this.shape_318},{t:this.shape_317},{t:this.shape_316},{t:this.shape_315},{t:this.shape_314},{t:this.shape_313},{t:this.shape_312},{t:this.shape_311},{t:this.shape_310},{t:this.shape_309},{t:this.shape_308},{t:this.shape_307},{t:this.shape_306},{t:this.shape_305},{t:this.shape_304},{t:this.shape_303},{t:this.shape_302},{t:this.shape_301},{t:this.shape_300},{t:this.shape_299},{t:this.shape_298},{t:this.instance_2},{t:this.shape_297},{t:this.shape_296},{t:this.shape_295},{t:this.shape_294},{t:this.shape_293},{t:this.shape_292},{t:this.shape_291},{t:this.shape_290},{t:this.shape_289},{t:this.shape_288},{t:this.shape_287},{t:this.shape_286},{t:this.shape_285},{t:this.shape_284},{t:this.shape_283},{t:this.shape_282},{t:this.shape_281},{t:this.shape_280},{t:this.shape_279},{t:this.shape_278},{t:this.shape_277},{t:this.shape_276},{t:this.shape_275},{t:this.shape_274},{t:this.shape_273},{t:this.shape_272},{t:this.shape_271},{t:this.shape_270},{t:this.shape_269},{t:this.shape_268},{t:this.shape_267},{t:this.shape_266},{t:this.shape_265},{t:this.shape_264},{t:this.shape_263},{t:this.shape_262},{t:this.shape_261},{t:this.shape_260},{t:this.shape_259},{t:this.shape_258},{t:this.shape_257},{t:this.shape_256},{t:this.shape_255},{t:this.shape_254},{t:this.shape_253},{t:this.shape_252},{t:this.shape_251},{t:this.shape_250},{t:this.shape_249},{t:this.shape_248},{t:this.shape_247},{t:this.shape_246},{t:this.shape_245},{t:this.shape_244},{t:this.shape_243},{t:this.shape_242},{t:this.shape_241},{t:this.shape_240},{t:this.shape_239},{t:this.shape_238},{t:this.shape_237},{t:this.shape_236},{t:this.shape_235},{t:this.shape_234},{t:this.shape_233},{t:this.shape_232},{t:this.shape_231},{t:this.shape_230},{t:this.shape_229},{t:this.shape_228},{t:this.shape_227},{t:this.shape_226},{t:this.shape_225},{t:this.shape_224},{t:this.shape_223},{t:this.shape_222},{t:this.shape_221},{t:this.shape_220},{t:this.shape_219},{t:this.shape_218},{t:this.shape_217},{t:this.shape_216},{t:this.shape_215},{t:this.shape_214},{t:this.shape_213},{t:this.shape_212},{t:this.shape_211},{t:this.shape_210},{t:this.shape_209},{t:this.shape_208},{t:this.shape_207},{t:this.shape_206},{t:this.shape_205},{t:this.shape_204},{t:this.shape_203},{t:this.shape_202},{t:this.shape_201},{t:this.shape_200},{t:this.shape_199},{t:this.shape_198},{t:this.shape_197},{t:this.shape_196},{t:this.shape_195},{t:this.shape_194},{t:this.shape_193},{t:this.shape_192},{t:this.shape_191},{t:this.shape_190},{t:this.shape_189},{t:this.shape_188},{t:this.shape_187},{t:this.shape_186},{t:this.shape_185},{t:this.shape_184},{t:this.shape_183},{t:this.shape_182},{t:this.shape_181},{t:this.shape_180},{t:this.shape_179},{t:this.shape_178},{t:this.shape_177},{t:this.shape_176},{t:this.shape_175},{t:this.shape_174},{t:this.shape_173},{t:this.shape_172},{t:this.shape_171},{t:this.shape_170},{t:this.shape_169},{t:this.shape_168},{t:this.shape_167},{t:this.shape_166},{t:this.shape_165},{t:this.shape_164},{t:this.shape_163},{t:this.shape_162},{t:this.shape_161},{t:this.shape_160},{t:this.shape_159},{t:this.shape_158},{t:this.shape_157},{t:this.shape_156},{t:this.shape_155},{t:this.shape_154},{t:this.shape_153},{t:this.shape_152},{t:this.shape_151},{t:this.shape_150},{t:this.shape_149},{t:this.shape_148},{t:this.shape_147},{t:this.shape_146},{t:this.shape_145},{t:this.shape_144},{t:this.shape_143},{t:this.shape_142},{t:this.shape_141},{t:this.shape_140},{t:this.shape_139},{t:this.shape_138},{t:this.shape_137},{t:this.shape_136},{t:this.shape_135},{t:this.shape_134},{t:this.shape_133},{t:this.shape_132},{t:this.shape_131},{t:this.shape_130},{t:this.shape_129},{t:this.shape_128},{t:this.shape_127},{t:this.shape_126},{t:this.shape_125},{t:this.shape_124},{t:this.shape_123},{t:this.shape_122},{t:this.shape_121},{t:this.shape_120},{t:this.shape_119},{t:this.shape_118},{t:this.shape_117},{t:this.shape_116},{t:this.shape_115},{t:this.shape_114},{t:this.shape_113},{t:this.shape_112},{t:this.shape_111},{t:this.shape_110},{t:this.shape_109},{t:this.shape_108},{t:this.shape_107},{t:this.shape_106},{t:this.shape_105},{t:this.shape_104},{t:this.shape_103},{t:this.shape_102},{t:this.shape_101},{t:this.shape_100},{t:this.shape_99},{t:this.shape_98},{t:this.shape_97},{t:this.shape_96},{t:this.shape_95},{t:this.shape_94},{t:this.shape_93},{t:this.shape_92},{t:this.shape_91},{t:this.shape_90},{t:this.shape_89},{t:this.shape_88},{t:this.shape_87},{t:this.shape_86},{t:this.shape_85},{t:this.shape_84},{t:this.shape_83},{t:this.shape_82},{t:this.shape_81},{t:this.shape_80},{t:this.shape_79},{t:this.shape_78},{t:this.shape_77},{t:this.shape_76},{t:this.shape_75},{t:this.shape_74},{t:this.shape_73},{t:this.shape_72},{t:this.shape_71},{t:this.shape_70},{t:this.shape_69},{t:this.shape_68},{t:this.shape_67},{t:this.shape_66},{t:this.shape_65},{t:this.shape_64},{t:this.shape_63},{t:this.shape_62},{t:this.shape_61},{t:this.shape_60},{t:this.shape_59},{t:this.shape_58},{t:this.shape_57},{t:this.shape_56},{t:this.shape_55},{t:this.shape_54},{t:this.shape_53},{t:this.shape_52},{t:this.shape_51},{t:this.shape_50},{t:this.shape_49},{t:this.shape_48},{t:this.shape_47},{t:this.shape_46},{t:this.shape_45},{t:this.shape_44},{t:this.shape_43},{t:this.shape_42},{t:this.shape_41},{t:this.shape_40},{t:this.shape_39},{t:this.shape_38},{t:this.shape_37},{t:this.shape_36},{t:this.shape_35},{t:this.shape_34},{t:this.shape_33},{t:this.shape_32},{t:this.shape_31},{t:this.shape_30},{t:this.shape_29},{t:this.shape_28},{t:this.shape_27},{t:this.shape_26},{t:this.shape_25},{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

	// Layer 3
	this.instance_25 = new lib.Armup();
	this.instance_25.parent = this;
	this.instance_25.setTransform(329.7,150.7,1,1,0,0,0,9.1,26.4);

	this.timeline.addTween(cjs.Tween.get(this.instance_25).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(250.9,204,502.2,408.2);
// library properties:
lib.properties = {
	width: 502,
	height: 408,
	fps: 24,
	color: "#FFFFFF",
	opacity: 1.00,
	manifest: [],
	preloads: []
};




})(lib = lib||{}, images = images||{}, createjs = createjs||{}, ss = ss||{}, AdobeAn = AdobeAn||{});
var lib, images, createjs, ss, AdobeAn;