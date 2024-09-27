(function (lib, img, cjs, ss, an) {

var p; // shortcut to reference prototypes
lib.webFontTxtInst = {}; 
var loadedTypekitCount = 0;
var loadedGoogleCount = 0;
var gFontsUpdateCacheList = [];
var tFontsUpdateCacheList = [];
lib.ssMetadata = [];



lib.updateListCache = function (cacheList) {		
	for(var i = 0; i < cacheList.length; i++) {		
		if(cacheList[i].cacheCanvas)		
			cacheList[i].updateCache();		
	}		
};		

lib.addElementsToCache = function (textInst, cacheList) {		
	var cur = textInst;		
	while(cur != exportRoot) {		
		if(cacheList.indexOf(cur) != -1)		
			break;		
		cur = cur.parent;		
	}		
	if(cur != exportRoot) {		
		var cur2 = textInst;		
		var index = cacheList.indexOf(cur);		
		while(cur2 != cur) {		
			cacheList.splice(index, 0, cur2);		
			cur2 = cur2.parent;		
			index++;		
		}		
	}		
	else {		
		cur = textInst;		
		while(cur != exportRoot) {		
			cacheList.push(cur);		
			cur = cur.parent;		
		}		
	}		
};		

lib.gfontAvailable = function(family, totalGoogleCount) {		
	lib.properties.webfonts[family] = true;		
	var txtInst = lib.webFontTxtInst && lib.webFontTxtInst[family] || [];		
	for(var f = 0; f < txtInst.length; ++f)		
		lib.addElementsToCache(txtInst[f], gFontsUpdateCacheList);		

	loadedGoogleCount++;		
	if(loadedGoogleCount == totalGoogleCount) {		
		lib.updateListCache(gFontsUpdateCacheList);		
	}		
};		

lib.tfontAvailable = function(family, totalTypekitCount) {		
	lib.properties.webfonts[family] = true;		
	var txtInst = lib.webFontTxtInst && lib.webFontTxtInst[family] || [];		
	for(var f = 0; f < txtInst.length; ++f)		
		lib.addElementsToCache(txtInst[f], tFontsUpdateCacheList);		

	loadedTypekitCount++;		
	if(loadedTypekitCount == totalTypekitCount) {		
		lib.updateListCache(tFontsUpdateCacheList);		
	}		
};
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


(lib.Wheel = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#000000").ss(2,1,1).p("AArAAQAAASgMANQgNAMgSAAQgRAAgNgMQgMgNAAgSQAAgRAMgNQANgMARAAQASAAANAMQAMANAAARgAgRAAQAAgHAFgFQAFgFAHAA");
	this.shape.setTransform(4.3,4.3);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FFFFFF").s().p("AgdAfQgNgNAAgSQAAgRANgMQAMgNARAAQASAAANANQAMAMAAARQAAASgMANQgNAMgSAAQgRAAgMgMgAgMgMQgGAGAAAGQAAgGAGgGQAFgFAHgBQgHABgFAFg");
	this.shape_1.setTransform(4.3,4.3);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.Wheel, new cjs.Rectangle(-1,-1,10.6,10.6), null);


(lib.Tween31 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("AjBDCQhQhRAAhxQAAhxBQhRQBQhPBxAAQBxAABRBPQBRBRAABxQAABxhRBRQhRBRhxAAQhxAAhQhRg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-27.4,-27.4,54.9,54.9);


(lib.Tween30 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("Ag6A7QgZgYAAgjQAAgiAZgYQAYgZAiAAQAjAAAYAZQAZAYAAAiQAAAjgZAYQgYAZgjAAQgiAAgYgZg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-8.4,-8.4,16.8,16.8);


(lib.Tween28 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("AigCLIBalTIDoA+IhbFTg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-16.1,-20.1,32.3,40.2);


(lib.Tween27 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("AgPAkQgNgNgBgSQgOADgLgBQgNgCgBgFQgCgGAKgHQALgIAQgEIAMgCIAGgIQAOgOAUAAQAVAAAPAOQAOAPAAAUQAAAVgOAPQgPAOgVAAQgUAAgOgOg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-6.9,-5,13.9,10);


(lib.Tween25 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("AjBDCQhQhRAAhxQAAhxBQhRQBQhPBxAAQBxAABRBPQBRBRAABxQAABxhRBRQhRBRhxAAQhxAAhQhRg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-27.4,-27.4,54.9,54.9);


(lib.Tween24 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AgwAwQgTgTgBgdQABgbATgVQAVgTAbAAQAcAAAVATQATAVAAAbQAAAdgTATQgVAUgcAAQgbAAgVgUg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-6.8,-6.8,13.7,13.7);


(lib.Tween23 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AgwAxQgTgVAAgcQAAgbATgVQAVgTAbAAQAcAAAVATQATAVAAAbQAAAcgTAVQgVATgcAAQgbAAgVgTg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-6.8,-6.8,13.7,13.7);


(lib.Tween22 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#000000").ss(5,1,1).p("AgrESIBXoj");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-6.9,-29.9,13.8,59.8);


(lib.Tween21 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("AhfBXQgKgJAAgMQAAgNAKgIIABgCQgMgUAAgYQAAgnAfgbQAggcArAAQAtAAAfAcQAfAbAAAnQAAAmgfAcQgfAbgtAAQgXAAgVgIIgDADQgKAJgOAAQgOAAgKgJg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-10.7,-9.6,21.4,19.2);


(lib.Tween20 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#000000").ss(2,1,1).p("AAAAAIAwAwAAAAAIgvAwAAwgvIgwAvAgvgvIAvAv");
	this.shape.setTransform(-34.4,0);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f().s("#000000").ss(2,1,1).p("AAAAAIgvAwAAAAAIAwAwAAwgvIgwAvAgvgvIAvAv");
	this.shape_1.setTransform(-24.4,0);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#000000").ss(2,1,1).p("AAAAAIAwAwAAAAAIgvAwAAwgvIgwAvAgvgvIAvAv");
	this.shape_2.setTransform(-15,0);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f().s("#000000").ss(2,1,1).p("AAAAAIgvAwAAAAAIAwAwAAwgvIgwAvAgvgvIAvAv");
	this.shape_3.setTransform(-5,0);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f().s("#000000").ss(2,1,1).p("AAAAAIgvAwAAAAAIAwAwAgvgvIAvAvAAwgvIgwAv");
	this.shape_4.setTransform(4.8,0);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f().s("#000000").ss(2,1,1).p("AAAAAIgvAwAAAAAIAwAwAAwgvIgwAvAgvgvIAvAv");
	this.shape_5.setTransform(14.8,0);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f().s("#000000").ss(2,1,1).p("AAAAAIgvAwAAAAAIAwAwAAwgvIgwAvAgvgvIAvAv");
	this.shape_6.setTransform(24.4,0);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f().s("#000000").ss(2,1,1).p("AAAAAIgvAwAAAAAIAwAwAAwgvIgwAvAgvgvIAvAv");
	this.shape_7.setTransform(34.4,0);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-40.1,-5.7,80.3,11.5);


(lib.Tween18 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#000000").ss(5,1,1).p("AC8AAIl3AA");
	this.shape.setTransform(14.9,0);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-6.4,-2.5,42.6,5);


(lib.Tween16 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#00B3E3").s().p("AhuChIAAlBIDdAAIAAFBg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-11.1,-16.1,22.2,32.2);


(lib.Tween8 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("AhNBPQghghAAguQAAgtAhghQAgggAtAAQAuAAAgAgQAhAhAAAtQAAAughAhQggAgguAAQgtAAggggg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-11.1,-11.1,22.2,22.2);


(lib.Tween7 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#00B3E3").s().p("AgkEiIAApDIBJAAIAAJDg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-3.7,-29,7.5,58);


(lib.Tween6 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#00B3E3").s().p("AgdAKIgDgDQgEgHAGgJQAGgJANgIQALgHAMAAIAHAAQAGACADAEIABAEQAMAegPAbQAAgdg3AFg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-3.4,-3.4,6.9,6.9);


(lib.Tween4 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("AhPBVIgbioIDVAAIgbCog");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-10.7,-8.4,21.4,16.9);


(lib.Tween1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#000000").ss(2,1,1).p("AAnAAQAAArgLAeQgMAegQAAQgPAAgMgeQgLgeAAgrQAAgqALgeQAMgeAPAAQAQAAAMAeQALAeAAAqg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-4.9,-11.2,9.8,22.5);


(lib.TeamworkHeading = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 5
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#000000").ss(2,1,1).p("AfpqmIAATLQAABGhGAAMgzwAAAIq5AAQgNAAgIAJQgJAJAAAMQAAANAJAJQAIAIANAAIK5AAMAzwAAAQCCAAAAiCIAAzL");
	this.shape.setTransform(-43.7,119.8);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(29));

	// Layer 9
	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#00B3E3").s().p("EggGAK0QgMAAgJgIQgJgJAAgNQAAgMAJgJQAJgJAMAAMA+pAAAQBGAAAAhGIAAzlIA8AAIAATlQAACCiCAAg");
	this.shape_1.setTransform(-43.7,118.5);

	this.timeline.addTween(cjs.Tween.get(this.shape_1).wait(29));

	// Layer 1
	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#000000").ss(3,1,1).p("EAkFAE6Ii0jiICnjgQAIgMgEgIQgDgHgOAAIieAAQgIAAgGACQgHAEgFAGIiRDDIAAi5QAAgLgFgFQgGgGgKAAIiIAAQgKAAgGAGQgFAFAAALIAAHLQAAALAFAGQAGAFAKAAICIAAQAKAAAGgFQAFgGAAgLIAAi1ICZC+QAGAGAGAEQAGADAIAAICiAAQANAAAEgHQAEgIgHgLgAbRE6IhkiMQAkgXATglQATglAAg0QgBheg9gvQg9gvhvAAIjaAAQgKAAgHAGQgGAFAAALIAAHLQAAALAGAGQAHAFAKAAICFAAQALAAAGgFQAGgGAAgLIAAhpIAxAAIBJBxQAEAHAHAEQAHADAJAAICeAAQAOAAAEgHQAEgHgHgMgAWPgXIAxAAQAegBARALQASALAAAbQAAAbgSALQgRALgeAAIgxAAgAOZFjQBWgBBAghQAMgGALgHQAwgfAdgxQAjg7ABhRQgBhQgjg7Qgjg8hBghQhAghhWAAQhWAAhAAhQhAAhgjA8QgjA7gBBQQABBRAjA7QAdAxAwAfQAKAHAMAGQBAAhBWABgAOZDJQgvgBgcgeQgcgeAAg0QAAgzAcgeQAcgeAvAAQAwAAAcAeQAcAeABAzQgBA0gcAeQgcAegwABgAHUiQIg8DfIhNjVQgEgJgGgEQgGgEgKAAIhpAAQgUAAgGARIhMDRIg+jbQgDgJgGgFQgHgFgKAAIiOAAQgMAAgFAHQgGAGAEAMICTHMQADAJAGAFQAGAEAKAAICDAAQAKAAAHgEQAGgFACgJIBLjzIBNDzQACAJAGAFQAHAEAKAAICBAAQAKAAAHgEQAGgFADgJICUnMQADgMgFgGQgFgHgNAAIiPAAQgKAAgGAFQgHAFgDAJgAr4FUICFAAQALAAAGgFQAGgGAAgLIAAi6IBKBaQAFAHAHADQAHAEAJAAIAnAAQAJAAAHgEQAHgDAFgHIBLhaIAAC6QAAALAGAGQAGAFALAAICEAAQALAAAGgFQAGgGAAgLIAAnLQAAgLgGgFQgGgGgLAAIhkAAQgJAAgHAEQgGADgGAHIiWC1IiVi1QgGgHgGgDQgGgEgKAAIhkAAQgKAAgHAGQgGAFAAALIAAHLQAAALAGAGQAHAFAKAAgA1eFUICOAAQAKAAAGgEQAGgFAEgIIAQgsICuAAIAQAsQAEAIAGAFQAHAEAKAAICNAAQANAAAFgHQAFgGgFgMIjEnNQgEgJgGgEQgHgEgKAAIiEAAQgKAAgGAEQgHAEgDAJIjFHNQgEAMAFAGQAEAHANAAgA2EgwIAAhdQAAgLgGgFQgFgGgLAAIlxAAQgKAAgHAGQgGAFAAALIAAHMQAAAKAGAGQAHAFAKAAIFxAAQALAAAFgFQAGgGAAgKIAAheQAAgKgGgGQgFgGgLAAIjVAAIAAgwICnAAQALAAAGgGQAGgGAAgKIAAhaQAAgKgGgGQgGgGgLAAIinAAIAAgvIDVAAQALAAAFgGQAGgFAAgLgAx2CUIAnhuIAnBugEgkIgFiIAAE5QAAALAGAGQAGAFALAAIB5AAIAAFRQAAALAGAGQAGAFALAAICEAAQALAAAHgFQAGgGAAgLIAAlRIB4AAQALAAAGgFQAGgGABgLA81hEIAAkc");
	this.shape_2.setTransform(231.3,17.9);

	this.timeline.addTween(cjs.Tween.get(this.shape_2).wait(29));

	// Layer 10
	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#FFFFFF").s().p("AjqBdIAAi5IHVAAIAAC5g");
	this.shape_3.setTransform(23.2,-12.5);

	this.timeline.addTween(cjs.Tween.get(this.shape_3).wait(29));

	// Layer 3 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AMDDpIgWgNQgwgfgdgxQgjg8gBhQQABhQAjg8QAjg7BAghQBAghBWgBQBWABBAAhQBBAhAjA7QAjA8ABBQQgBBQgjA8QgdAxgwAfIgXANQhAAhhWAAQhWAAhAghgANOhQQgcAdAAAzQAAAzAcAfQAcAdAvABQAwgBAcgdQAcgfABgzQgBgzgcgdQgcgfgwgBQgvABgcAfgEAhVAD8QgIAAgGgEQgGgDgGgHIiZi9IAAC1QAAALgFAFQgGAGgKAAIiIAAQgKAAgGgGQgFgFAAgLIAAnMQAAgKAFgGQAGgFAKAAICIAAQAKAAAGAFQAFAGAAAKIAAC7ICRjEQAFgGAHgDQAGgDAIAAICeAAQAOAAADAHQAEAIgIAMIinDgIC0DiQAHAKgEAJQgEAGgNABgAYkD8QgJAAgHgEQgHgDgEgIIhJhwIgxAAIAABpQAAALgGAFQgGAGgLAAIiFAAQgKAAgHgGQgGgFAAgLIAAnMQAAgKAGgGQAHgFAKAAIDaAAQBvAAA9AvQA9AvABBfQAAAzgTAkQgTAmgkAXIBkCMQAHALgEAIQgEAGgOABgAWPgOIAxAAQAeABARgLQASgLAAgbQAAgcgSgLQgRgLgeAAIgxAAgAFiD8QgKAAgHgFQgGgEgCgJIhNjyIhLDyQgCAJgGAEQgHAFgKAAIiDAAQgKAAgGgFQgGgEgDgJIiTnNQgEgLAGgGQAFgHAMAAICOAAQAKAAAHAFQAGAEADAKIA+DcIBMjSQAGgRAUAAIBpAAQAKAAAGADQAGAFAEAJIBNDWIA8jgQADgKAHgEQAGgFAKAAICPAAQANAAAFAHQAFAGgDALIiUHNQgDAJgGAEQgHAFgKAAgAlRD8QgLAAgGgGQgGgFAAgLIAAi6IhLBaQgFAGgHAEQgHADgJAAIgnAAQgJAAgHgDQgHgEgFgGIhKhaIAAC6QAAALgGAFQgGAGgLAAIiFAAQgKAAgHgGQgGgFAAgLIAAnMQAAgKAGgGQAHgFAKAAIBkAAQAKAAAGADQAGAEAGAGICVC2ICWi2QAGgGAGgEQAHgDAJAAIBkAAQALAAAGAFQAGAGAAAKIAAHMQAAALgGAFQgGAGgLAAgAvND8QgKAAgHgEQgGgFgEgIIgQgsIiuAAIgQAsQgEAIgGAFQgGAEgKAAIiOAAQgNAAgEgHQgFgGAEgMIDFnOQADgIAHgFQAGgDAKAAICEAAQAKAAAHADQAGAFAEAIIDEHOQAFAMgFAGQgFAHgNAAgAwoA7IgnhsIgnBsIBOAAgA8LD8QgKAAgHgGQgGgFAAgLIAAnMQAAgKAGgGQAHgFAKAAIFxAAQALAAAFAFQAGAGAAAKIAABeQAAAKgGAGQgFAFgLABIjVAAIAAAwICnAAQALAAAGAGQAGAGAAAKIAABZQAAAKgGAGQgGAFgLAAIinAAIAAAxIDVAAQALAAAFAGQAGAFAAALIAABdQAAALgGAFQgFAGgLAAgEghhAD8QgLAAgGgGQgGgFAAgLIAAlRIh5AAQgLAAgGgFQgGgGAAgLIAAhlQAAgKAGgGQAGgFALAAIGkAAQALAAAGAFQAGAGABAKIAABlQgBALgGAGQgGAFgLAAIh4AAIAAFRQAAALgGAFQgHAGgLAAg");
	mask.setTransform(231.3,26.7);

	// Layer 4
	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#00B3E3").s().p("Egk4AEdIAAo5MBJxAAAIAAI5g");
	this.shape_4.setTransform(236.1,38.5);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#00B3E3").s().p("Egk4AEdIAAozMBJxgAGIAAI5g");
	this.shape_5.setTransform(236.1,38.5);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#00B3E3").s().p("Egk4AEdIAAotMBJxgAMIAAI5g");
	this.shape_6.setTransform(236.1,38.5);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#00B3E3").s().p("Egk4AEdIAAonMBJxgASIAAI5g");
	this.shape_7.setTransform(236.1,38.5);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#00B3E3").s().p("Egk4AEdIAAohMBJxgAYIAAI5g");
	this.shape_8.setTransform(236.1,38.5);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#00B3E3").s().p("Egk4AEdIAAobMBJxgAeIAAI5g");
	this.shape_9.setTransform(236.1,38.5);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#00B3E3").s().p("Egk4AEdIAAoVMBJxgAkIAAI5g");
	this.shape_10.setTransform(236.1,38.5);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#00B3E3").s().p("Egk4AEdIAAoaMBJxgAfIAAI5g");
	this.shape_11.setTransform(236.1,38.5);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#00B3E3").s().p("Egk4AEdIAAofMBJxgAaIAAI5g");
	this.shape_12.setTransform(236.1,38.5);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#00B3E3").s().p("Egk4AEdIAAokMBJxgAVIAAI5g");
	this.shape_13.setTransform(236.1,38.5);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#00B3E3").s().p("Egk4AEdIAAoqMBJxgAPIAAI5g");
	this.shape_14.setTransform(236.1,38.5);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#00B3E3").s().p("Egk4AEdIAAovMBJxgAKIAAI5g");
	this.shape_15.setTransform(236.1,38.5);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#00B3E3").s().p("Egk4AEdIAAo0MBJxgAFIAAI5g");
	this.shape_16.setTransform(236.1,38.5);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#00B3E3").s().p("Egk4AEhIAAo5MBJxgAIIAAJBg");
	this.shape_17.setTransform(236.1,38.1);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#00B3E3").s().p("Egk4AElIAAo5MBJxgAQIAAJJg");
	this.shape_18.setTransform(236.1,37.7);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#00B3E3").s().p("Egk4AEpIAAo5MBJxgAYIAAJRg");
	this.shape_19.setTransform(236.1,37.3);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#00B3E3").s().p("Egk4AEtIAAo5MBJxgAgIAAJZg");
	this.shape_20.setTransform(236.1,36.9);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#00B3E3").s().p("Egk4AExIAAo5MBJxgAoIAAJhg");
	this.shape_21.setTransform(236.1,36.5);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#00B3E3").s().p("Egk4AEvIAAo8MBJxgAhIAAJdg");
	this.shape_22.setTransform(236.1,36.8);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#00B3E3").s().p("Egk4AEtIAAo+MBJxgAbIAAJZg");
	this.shape_23.setTransform(236.1,37);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("#00B3E3").s().p("Egk4AErIAApBMBJxgAUIAAJVg");
	this.shape_24.setTransform(236.1,37.2);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#00B3E3").s().p("Egk4AEoIAApCMBJxgAOIAAJQg");
	this.shape_25.setTransform(236.1,37.4);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f("#00B3E3").s().p("Egk4AEmIAApFMBJxgAGIAAJLg");
	this.shape_26.setTransform(236.1,37.6);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f("#00B3E3").s().p("Egk4AEkIAApHMBJxAAAIAAJHg");
	this.shape_27.setTransform(236.1,37.8);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f("#00B3E3").s().p("Egk4AEiIAApEMBJxAAAIAAJEg");
	this.shape_28.setTransform(236.1,38);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f("#00B3E3").s().p("Egk4AEhIAApBMBJxAAAIAAJBg");
	this.shape_29.setTransform(236.1,38.2);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f("#00B3E3").s().p("Egk4AEfIAAo9MBJxAAAIAAI9g");
	this.shape_30.setTransform(236.1,38.4);

	var maskedShapeInstanceList = [this.shape_4,this.shape_5,this.shape_6,this.shape_7,this.shape_8,this.shape_9,this.shape_10,this.shape_11,this.shape_12,this.shape_13,this.shape_14,this.shape_15,this.shape_16,this.shape_17,this.shape_18,this.shape_19,this.shape_20,this.shape_21,this.shape_22,this.shape_23,this.shape_24,this.shape_25,this.shape_26,this.shape_27,this.shape_28,this.shape_29,this.shape_30];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_4}]}).to({state:[{t:this.shape_5}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_9}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_12}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_16}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_18}]},1).to({state:[{t:this.shape_19}]},1).to({state:[{t:this.shape_20}]},1).to({state:[{t:this.shape_21}]},1).to({state:[{t:this.shape_22}]},1).to({state:[{t:this.shape_23}]},1).to({state:[{t:this.shape_24}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_26}]},1).to({state:[{t:this.shape_27}]},1).to({state:[{t:this.shape_28}]},1).to({state:[{t:this.shape_29}]},1).to({state:[{t:this.shape_30}]},1).to({state:[{t:this.shape_4}]},1).wait(1));

	// Layer 2
	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f("#FFFFFF").s().p("AMDDpIgWgNQgwgfgdgxQgjg8gBhQQABhQAjg8QAjg7BAghQBAghBWgBQBWABBAAhQBBAhAjA7QAjA8ABBQQgBBQgjA8QgdAxgwAfIgXANQhAAhhWAAQhWAAhAghgANOhQQgcAdAAAzQAAAzAcAfQAcAdAvABQAwgBAcgdQAcgfABgzQgBgzgcgdQgcgfgwgBQgvABgcAfgEAhVAD8QgIAAgGgEQgGgDgGgHIiZi9IAAC1QAAALgFAFQgGAGgKAAIiIAAQgKAAgGgGQgFgFAAgLIAAnMQAAgKAFgGQAGgFAKAAICIAAQAKAAAGAFQAFAGAAAKIAAC7ICRjEQAFgGAHgDQAGgDAIAAICeAAQAOAAADAHQAEAIgIAMIinDgIC0DiQAHAKgEAJQgEAGgNABgAYkD8QgJAAgHgEQgHgDgEgIIhJhwIgxAAIAABpQAAALgGAFQgGAGgLAAIiFAAQgKAAgHgGQgGgFAAgLIAAnMQAAgKAGgGQAHgFAKAAIDaAAQBvAAA9AvQA9AvABBfQAAAzgTAkQgTAmgkAXIBkCMQAHALgEAIQgEAGgOABgAWPgOIAxAAQAeABARgLQASgLAAgbQAAgcgSgLQgRgLgeAAIgxAAgAFiD8QgKAAgHgFQgGgEgCgJIhNjyIhLDyQgCAJgGAEQgHAFgKAAIiDAAQgKAAgGgFQgGgEgDgJIiTnNQgEgLAGgGQAFgHAMAAICOAAQAKAAAHAFQAGAEADAKIA+DcIBMjSQAGgRAUAAIBpAAQAKAAAGADQAGAFAEAJIBNDWIA8jgQADgKAHgEQAGgFAKAAICPAAQANAAAFAHQAFAGgDALIiUHNQgDAJgGAEQgHAFgKAAgAlRD8QgLAAgGgGQgGgFAAgLIAAi6IgvA4IAAgcIgMAAIgQAcQgFAJgHAFQgHAFgJAAIgnAAQgJAAgHgFQgHgFgFgJIgRgcIgEAAIAAAlIg1hBIAAC4IiJAAIAAAYIAAgYICJAAIAAACQAAALgGAFQgGAGgLAAIhyAAIgTAAQgKAAgHgGQgGgFAAgLIAAnMQAAgKAGgGQAHgFAKAAIBkAAQAKAAAGADQAGAEAGAGICVC2ICWi2QAGgGAGgEQAHgDAJAAIBkAAQALAAAGAFQAGAGAAAKIAAHMQAAALgGAFQgGAGgLAAgAvND8QgKAAgHgEQgGgFgEgIIgQgsIiuAAIgQAsQgEAIgGAFQgGAEgKAAIiOAAQgNAAgEgHQgFgGAEgMIDFnOQADgIAHgFQAGgDAKAAICEAAQAKAAAHADQAGAFAEAIIDEHOQAFAMgFAGQgFAHgNAAgAx2A7IBOAAIgnhsgA8LD8QgKAAgHgGQgGgFAAgLIAAnMQAAgKAGgGQAHgFAKAAIFxAAQALAAAFAFQAGAGAAAKIAABeQAAAKgGAGQgFAFgLABIjVAAIAAAwICnAAQALAAAGAGQAGAGAAAKIAABZQAAAKgGAGQgGAFgLAAIinAAIAAAxIDVAAQALAAAFAGQAGAFAAALIAABdQAAALgGAFQgFAGgLAAgEghhAD8QgLAAgGgGQgGgFAAgLIAAlRIh5AAQgLAAgGgFQgGgGAAgLIAAhlQAAgKAGgGQAGgFALAAIGkAAQALAAAGAFQAGAGABAKIAABlQgBALgGAGQgGAFgLAAIh4AAIAAFRQAAALgGAFQgHAGgLAAg");
	this.shape_31.setTransform(231.3,26.7);

	this.timeline.addTween(cjs.Tween.get(this.shape_31).wait(29));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-253.2,-21.7,717.5,210.4);


(lib.Tween29 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Tween23("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(7.4,0,0.594,0.594,0,0,0,0,-0.1);

	this.instance_1 = new lib.Tween24("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(-7.4,0,0.594,0.594,0,0,0,0,-0.1);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_1},{t:this.instance}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-11.4,-4,22.9,8.1);


(lib.Tween26 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Tween23("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(7.4,0,0.594,0.594,0,0,0,0,-0.1);

	this.instance_1 = new lib.Tween24("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(-7.4,0,0.594,0.594,0,0,0,0,-0.1);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_1},{t:this.instance}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-11.4,-4,22.9,8.1);


(lib.Tween19 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Tween4("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(0,5.2,1,1,0,0,180);

	this.instance_1 = new lib.Tween1("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(0,-3.4,1,1,0,0,180);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_1},{t:this.instance}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-10.6,-14.6,21.4,28.3);


(lib.Tween14 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Tween23("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(7.4,0,0.594,0.594,0,0,0,-0.1,-0.1);

	this.instance_1 = new lib.Tween24("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(-7.4,0,0.594,0.594,0,0,0,0,-0.1);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_1},{t:this.instance}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-11.5,-4,23,8.1);


(lib.Tween13 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Tween4("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(0,5.2);

	this.instance_1 = new lib.Tween1("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(0,-3.4);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_1},{t:this.instance}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-10.7,-14.6,21.4,28.3);


(lib.Tween9 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Tween1("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(4.6,-5.6,1,0.534,75,0,0,-0.1,0.2);

	this.instance_1 = new lib.Tween4("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(-0.4,2.3);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_1},{t:this.instance}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-11.1,-10.6,22.2,21.4);


(lib.Tween5 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Tween23("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(12.8,0);

	this.instance_1 = new lib.Tween24("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(-12.2,0);

	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("AlGFHQiHiIgBi/QABi+CHiJQCIiHC+AAQC/AACICHQCHCJABC+QgBC/iHCIQiICHi/ABQi+gBiIiHg");

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape},{t:this.instance_1},{t:this.instance}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-46.2,-46.2,92.5,92.5);


(lib.Tween3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Tween5("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(0.1,0.1,0.594,0.594,0,0,0,0.1,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-27.4,-27.4,54.9,54.9);


(lib.Tap = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Swinging Arm
	this.instance = new lib.Tween30("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(-35.4,10.6,0.594,0.594,0,-90,90,0.1,0);

	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#000000").ss(5,1,1).p("AAOCbQByjTi5hi");
	this.shape.setTransform(-36.8,-5.1);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape},{t:this.instance}]}).wait(29));

	// Left hand
	this.instance_1 = new lib.Tween30("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(-113.7,-6.9,0.594,0.594,0,0,180,0,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({y:-16.9},3).to({startPosition:0},20).to({y:-6.9},3).wait(3));

	// Left arm
	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f().s("#000000").ss(5,1,1).p("AibBVQDVAPBii5");
	this.shape_1.setTransform(-98.1,-15.5);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#000000").ss(5,1,1).p("AibBAQDVAwBii5");
	this.shape_2.setTransform(-98.1,-16.7);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f().s("#000000").ss(5,1,1).p("AiaAoQDTBRBii5");
	this.shape_3.setTransform(-98.1,-17.6);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f().s("#000000").ss(5,1,1).p("AiaAOQDTByBii5");
	this.shape_4.setTransform(-98,-18.3);
	this.shape_4._off = true;

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1}]}).to({state:[{t:this.shape_2}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_2}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.shape_1).to({_off:true},1).wait(25).to({_off:false},0).wait(3));
	this.timeline.addTween(cjs.Tween.get(this.shape_4).wait(3).to({_off:false},0).wait(20).to({_off:true},1).wait(5));

	// Legs
	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f().s("#000000").ss(5,1,1).p("AhFitIAAFbABGitIAAFb");
	this.shape_5.setTransform(-59.1,9.9);

	this.timeline.addTween(cjs.Tween.get(this.shape_5).wait(29));

	// Body
	this.instance_2 = new lib.Tween3("synched",0);
	this.instance_2.parent = this;
	this.instance_2.setTransform(-59.1,-29.9);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(29));

	// Layer 3
	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f().s("#000000").ss(2,1,1).p("AhrCPIAAhGABsCPIAAkdAhrgQIAAh+");
	this.shape_6.setTransform(-117.6,13.6);

	this.timeline.addTween(cjs.Tween.get(this.shape_6).wait(29));

	// Layer 15
	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f().s("#000000").ss(2,1,1).p("AhrAAIDXAA");
	this.shape_7.setTransform(-117.6,-0.7);

	this.timeline.addTween(cjs.Tween.get(this.shape_7).wait(29));

	// Layer 12
	this.instance_3 = new lib.Tween16("synched",0);
	this.instance_3.parent = this;
	this.instance_3.setTransform(-117.3,15.4);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).to({scaleY:0.21,y:28.3},10).to({startPosition:0},5).to({scaleY:1,y:15.4},11).wait(3));

	// Layer 10
	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#FFFFFF").s().p("AhuChIAAlBIDdAAIAAFBg");
	this.shape_8.setTransform(-117.3,15.4);

	this.timeline.addTween(cjs.Tween.get(this.shape_8).wait(29));

	// Layer 11
	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f().s("#000000").ss(2,1,1).p("ACaiFIAABMQjYAnADCYIheAAQAhj2ESgVg");
	this.shape_9.setTransform(-132.3,23.2);

	this.timeline.addTween(cjs.Tween.get(this.shape_9).wait(29));

	// Layer 14 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	var mask_graphics_0 = new cjs.Graphics().p("AiCCyIAAljIEFAAIAAFjg");
	var mask_graphics_1 = new cjs.Graphics().p("AiCCyIAAljIEFAAIAAFjg");
	var mask_graphics_2 = new cjs.Graphics().p("AiCCyIAAljIEFAAIAAFjg");
	var mask_graphics_3 = new cjs.Graphics().p("AiCCyIAAljIEFAAIAAFjg");
	var mask_graphics_4 = new cjs.Graphics().p("AiCCyIAAljIEFAAIAAFjg");
	var mask_graphics_5 = new cjs.Graphics().p("AiCCyIAAljIEFAAIAAFjg");
	var mask_graphics_6 = new cjs.Graphics().p("Ar1DMIAAk0IEGAAIAAE0g");
	var mask_graphics_7 = new cjs.Graphics().p("Ar1DMIAAkEIEGAAIAAEEg");
	var mask_graphics_8 = new cjs.Graphics().p("Ar1DMIAAjUIEGAAIAADUg");
	var mask_graphics_9 = new cjs.Graphics().p("Ar1DMIAAilIEGAAIAAClg");
	var mask_graphics_10 = new cjs.Graphics().p("Ar1DMIAAh2IEGAAIAAB2g");
	var mask_graphics_11 = new cjs.Graphics().p("Ar1DMIAAhGIEGAAIAABGg");
	var mask_graphics_12 = new cjs.Graphics().p("Ar1DMIAAgWIEGAAIAAAWg");
	var mask_graphics_13 = new cjs.Graphics().p("Ar1DMIAAgWIEGAAIAAAWg");
	var mask_graphics_14 = new cjs.Graphics().p("Ar1DMIAAgWIEGAAIAAAWg");
	var mask_graphics_15 = new cjs.Graphics().p("Ar1DMIAAgWIEGAAIAAAWg");
	var mask_graphics_16 = new cjs.Graphics().p("Ar1DMIAAgWIEGAAIAAAWg");
	var mask_graphics_17 = new cjs.Graphics().p("Ar1DMIAAgWIEGAAIAAAWg");
	var mask_graphics_18 = new cjs.Graphics().p("Ar1DMIAAgWIEGAAIAAAWg");
	var mask_graphics_19 = new cjs.Graphics().p("Ar1DMIAAgWIEGAAIAAAWg");
	var mask_graphics_20 = new cjs.Graphics().p("Ar1DMIAAgWIEGAAIAAAWg");
	var mask_graphics_21 = new cjs.Graphics().p("Ar1DMIAAgWIEGAAIAAAWg");
	var mask_graphics_22 = new cjs.Graphics().p("Ar1DMIAAgWIEGAAIAAAWg");
	var mask_graphics_23 = new cjs.Graphics().p("Ar1DMIAAgWIEGAAIAAAWg");
	var mask_graphics_24 = new cjs.Graphics().p("Ar1DMIAAgWIEGAAIAAAWg");
	var mask_graphics_25 = new cjs.Graphics().p("Ar1DMIAAgWIEGAAIAAAWg");
	var mask_graphics_26 = new cjs.Graphics().p("Ar1A7IAAgWIEGAAIAAAWg");
	var mask_graphics_27 = new cjs.Graphics().p("Ar1B6IAAiRIEGAAIAACRg");
	var mask_graphics_28 = new cjs.Graphics().p("Ar1C2IAAkMIEGAAIAAEMg");

	this.timeline.addTween(cjs.Tween.get(mask).to({graphics:mask_graphics_0,x:-138.4,y:23}).wait(1).to({graphics:mask_graphics_1,x:-138.4,y:23}).wait(1).to({graphics:mask_graphics_2,x:-138.4,y:23}).wait(1).to({graphics:mask_graphics_3,x:-138.4,y:23}).wait(1).to({graphics:mask_graphics_4,x:-138.4,y:23}).wait(1).to({graphics:mask_graphics_5,x:-138.4,y:23}).wait(1).to({graphics:mask_graphics_6,x:-75.8,y:20.4}).wait(1).to({graphics:mask_graphics_7,x:-75.8,y:20.4}).wait(1).to({graphics:mask_graphics_8,x:-75.8,y:20.4}).wait(1).to({graphics:mask_graphics_9,x:-75.8,y:20.4}).wait(1).to({graphics:mask_graphics_10,x:-75.8,y:20.4}).wait(1).to({graphics:mask_graphics_11,x:-75.8,y:20.4}).wait(1).to({graphics:mask_graphics_12,x:-75.8,y:20.4}).wait(1).to({graphics:mask_graphics_13,x:-75.8,y:20.4}).wait(1).to({graphics:mask_graphics_14,x:-75.8,y:20.4}).wait(1).to({graphics:mask_graphics_15,x:-75.8,y:20.4}).wait(1).to({graphics:mask_graphics_16,x:-75.8,y:20.4}).wait(1).to({graphics:mask_graphics_17,x:-75.8,y:20.4}).wait(1).to({graphics:mask_graphics_18,x:-75.8,y:20.4}).wait(1).to({graphics:mask_graphics_19,x:-75.8,y:20.4}).wait(1).to({graphics:mask_graphics_20,x:-75.8,y:20.4}).wait(1).to({graphics:mask_graphics_21,x:-75.8,y:20.4}).wait(1).to({graphics:mask_graphics_22,x:-75.8,y:20.4}).wait(1).to({graphics:mask_graphics_23,x:-75.8,y:20.4}).wait(1).to({graphics:mask_graphics_24,x:-75.8,y:20.4}).wait(1).to({graphics:mask_graphics_25,x:-75.8,y:20.4}).wait(1).to({graphics:mask_graphics_26,x:-75.8,y:5.9}).wait(1).to({graphics:mask_graphics_27,x:-75.8,y:12.2}).wait(1).to({graphics:mask_graphics_28,x:-75.8,y:18.2}).wait(1));

	// Layer 13
	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#00B3E3").s().p("AiZCGQAhj2ESgVIAABMQjZAnAECYg");
	this.shape_10.setTransform(-132.3,23.2);

	var maskedShapeInstanceList = [this.shape_10];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.shape_10).to({_off:true},12).wait(14).to({_off:false},0).wait(3));

	// Layer 9
	this.instance_4 = new lib.Tween8("synched",0);
	this.instance_4.parent = this;
	this.instance_4.setTransform(-117.3,8.6);

	this.timeline.addTween(cjs.Tween.get(this.instance_4).to({y:4.2},14).to({startPosition:0},11).to({y:8.6},2).to({startPosition:0},1).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-148.7,-57.4,120.2,94.9);


(lib.ProjectManagers = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Left Hand
	this.instance = new lib.Tween27("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(-56.8,2.2);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({rotation:45,x:-59.2,y:-36.2},14).to({regX:-0.1,regY:0.1,scaleX:1,scaleY:1,rotation:223.8,x:11.5,y:13.7},5).to({regX:0,regY:0,scaleX:1,scaleY:1,rotation:360,x:-56.8,y:2.2},9).wait(1));

	// Right Hand
	this.instance_1 = new lib.Tween30("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(40.6,14.3,0.594,0.594,0,0,0,0.1,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({startPosition:0},16).to({x:40.4,y:22.3},3).to({x:40.6,y:14.3},9).wait(1));

	// Clipboard
	this.instance_2 = new lib.Tween28("synched",0);
	this.instance_2.parent = this;
	this.instance_2.setTransform(30,7.7);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).to({startPosition:0},16).to({y:15.7},3).to({y:7.7},9).wait(1));

	// Left Arm
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#000000").ss(5,1,1).p("AiaAkIE1hH");
	this.shape.setTransform(-39.2,-1.3);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f().s("#000000").ss(5,1,1).p("AibAXIE2gt");
	this.shape_1.setTransform(-39.3,-2.6);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#000000").ss(5,1,1).p("AibAKIE3gT");
	this.shape_2.setTransform(-39.3,-3.9);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f().s("#000000").ss(5,1,1).p("AicgCIE5AF");
	this.shape_3.setTransform(-39.4,-5.1);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f().s("#000000").ss(5,1,1).p("AicgOIE5Ad");
	this.shape_4.setTransform(-39.4,-6.4);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f().s("#000000").ss(5,1,1).p("AidgbIE7A3");
	this.shape_5.setTransform(-39.5,-7.7);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f().s("#000000").ss(5,1,1).p("AidgoIE7BR");
	this.shape_6.setTransform(-39.5,-9);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f().s("#000000").ss(5,1,1).p("Aieg1IE9Br");
	this.shape_7.setTransform(-39.6,-10.3);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f().s("#000000").ss(5,1,1).p("AiehBIE9CE");
	this.shape_8.setTransform(-39.6,-11.5);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f().s("#000000").ss(5,1,1).p("AiehOIE+Cd");
	this.shape_9.setTransform(-39.7,-12.8);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f().s("#000000").ss(5,1,1).p("AifhbIE/C3");
	this.shape_10.setTransform(-39.7,-14.1);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f().s("#000000").ss(5,1,1).p("AighoIFADR");
	this.shape_11.setTransform(-39.8,-15.4);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f().s("#000000").ss(5,1,1).p("Aigh1IFBDr");
	this.shape_12.setTransform(-39.8,-16.7);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f().s("#000000").ss(5,1,1).p("AihiCIFDEF");
	this.shape_13.setTransform(-39.9,-17.9);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f().s("#000000").ss(5,1,1).p("AihiOIFDEd");
	this.shape_14.setTransform(-39.9,-19.2);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f().s("#000000").ss(5,1,1).p("AhlheQgCDrDNg5");
	this.shape_15.setTransform(-34,-13.3);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f().s("#000000").ss(5,1,1).p("AgIhcQimFJD5kA");
	this.shape_16.setTransform(-31.3,-2.9);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f().s("#000000").ss(5,1,1).p("ABUhCQkxEHD5kA");
	this.shape_17.setTransform(-26.6,1.1);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f().s("#000000").ss(5,1,1).p("Agtg9Qj0DFGoh2");
	this.shape_18.setTransform(-19.2,1.3);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f().s("#000000").ss(5,1,1).p("AC9BTQoegbDuiK");
	this.shape_19.setTransform(-12.2,3.4);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f().s("#000000").ss(5,1,1).p("AhNhSQjuCKHYAb");
	this.shape_20.setTransform(-16,3.4);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f().s("#000000").ss(5,1,1).p("AB/BTQmSgbDuiK");
	this.shape_21.setTransform(-19.9,3.4);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f().s("#000000").ss(5,1,1).p("AAEhFQjtCLFJAA");
	this.shape_22.setTransform(-24.1,2.1);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f().s("#000000").ss(5,1,1).p("ABDA2QkAAbDtiK");
	this.shape_23.setTransform(-28.5,0.9);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f().s("#000000").ss(5,1,1).p("AgIgYQhtBaCphL");
	this.shape_24.setTransform(-28,1.7);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f().s("#000000").ss(5,1,1).p("AgyAkQAUApBRh6");
	this.shape_25.setTransform(-28.9,-0.3);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f().s("#000000").ss(5,1,1).p("AhVAmQBCAQBphd");
	this.shape_26.setTransform(-32.3,-0.9);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f().s("#000000").ss(5,1,1).p("Ah4AmQBvgKCBhB");
	this.shape_27.setTransform(-35.8,-1.1);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape}]}).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_2}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_5}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_9}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_12}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_16}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_18}]},1).to({state:[{t:this.shape_19}]},1).to({state:[{t:this.shape_20}]},1).to({state:[{t:this.shape_21}]},1).to({state:[{t:this.shape_22}]},1).to({state:[{t:this.shape_23}]},1).to({state:[{t:this.shape_24}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_26}]},1).to({state:[{t:this.shape_27}]},1).to({state:[{t:this.shape}]},1).wait(1));

	// Layer 3
	this.instance_3 = new lib.Tween29("synched",0);
	this.instance_3.parent = this;
	this.instance_3.setTransform(-10.1,-10.7);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).to({y:-22.7},14).to({startPosition:0},2).to({x:9.9,y:-3.1},3).to({startPosition:0},2).to({x:-10.1,y:-10.7},7).wait(1));

	// Body
	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f("#000000").s().p("AjBDCQhQhRAAhxQAAhxBQhRQBQhPBxAAQBxAABRBPQBRBRAABxQAABxhRBRQhRBRhxAAQhxAAhQhRg");
	this.shape_28.setTransform(-0.3,-10.7);

	this.timeline.addTween(cjs.Tween.get(this.shape_28).wait(29));

	// Legs
	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f().s("#000000").ss(5,1,1).p("ABGitIAAFbAhFitIAAFb");
	this.shape_29.setTransform(-0.3,29.1);

	this.timeline.addTween(cjs.Tween.get(this.shape_29).wait(29));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-63.8,-38.2,110,87.3);


(lib.ProjectManager2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 3
	this.instance = new lib.Tween29("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(-14.9,-10.7);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({x:-10.1,y:-22.7},14).to({startPosition:0},2).to({x:-14.5,y:-3.1},3).to({y:0.9},3).to({startPosition:0},3).to({x:-14.9,y:-10.7},3).wait(1));

	// Left Hand
	this.instance_1 = new lib.Tween30("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(-29.8,18,0.594,0.594,0,0,0,0.1,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({startPosition:0},19).to({x:-39.4,y:-6},3).to({startPosition:0},3).to({x:-29.8,y:18},3).wait(1));

	// Right Hand
	this.instance_2 = new lib.Tween30("synched",0);
	this.instance_2.parent = this;
	this.instance_2.setTransform(27,16.8,0.594,0.594,0,0,0,0.1,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).to({startPosition:0},19).to({x:50.2,y:-7.2},3).to({startPosition:0},3).to({x:27,y:16.8},3).wait(1));

	// Left Arm
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#000000").ss(5,1,1).p("AglB2QBtg8gwiv");
	this.shape.setTransform(-26.1,6.9);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f().s("#000000").ss(5,1,1).p("AgmB2QBug8gxiv");
	this.shape_1.setTransform(-26.1,6.9);
	this.shape_1._off = true;

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#000000").ss(5,1,1).p("AgxBNQB7gFgeiU");
	this.shape_2.setTransform(-28.1,2.8);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f().s("#000000").ss(5,1,1).p("Ag+AcQCIAxgMh3");
	this.shape_3.setTransform(-30,-0.6);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f().s("#000000").ss(5,1,1).p("AhNgaQCUBmAHhb");
	this.shape_4.setTransform(-31.6,-3.3);
	this.shape_4._off = true;

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape}]}).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape_2}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_2}]},1).to({state:[{t:this.shape}]},1).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.shape_1).wait(1).to({_off:false},0).wait(17).to({_off:true},1).wait(10));
	this.timeline.addTween(cjs.Tween.get(this.shape_4).wait(22).to({_off:false},0).wait(3).to({_off:true},1).wait(3));

	// Right Arm
	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f().s("#000000").ss(5,1,1).p("Ag7iMQDHBviGCq");
	this.shape_5.setTransform(26.4,2.7);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f().s("#000000").ss(5,1,1).p("Ag7iMQDHBuiGCr");
	this.shape_6.setTransform(26.4,2.7);
	this.shape_6._off = true;

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f().s("#000000").ss(5,1,1).p("AhIhkQCiCfgUAq");
	this.shape_7.setTransform(27.7,-1.3);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f().s("#000000").ss(5,1,1).p("AhthIQB8DPBfhX");
	this.shape_8.setTransform(31.5,-4);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f().s("#000000").ss(5,1,1).p("AiUhFQBYEBDRjY");
	this.shape_9.setTransform(35.3,-4.4);
	this.shape_9._off = true;

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_5}]}).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_5}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_9}]},1).to({state:[{t:this.shape_9}]},1).to({state:[{t:this.shape_9}]},1).to({state:[{t:this.shape_9}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_5}]},1).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.shape_6).wait(1).to({_off:false},0).wait(17).to({_off:true},1).wait(10));
	this.timeline.addTween(cjs.Tween.get(this.shape_9).wait(22).to({_off:false},0).wait(3).to({_off:true},1).wait(3));

	// Body
	this.instance_3 = new lib.Tween31("synched",0);
	this.instance_3.parent = this;
	this.instance_3.setTransform(-0.3,-10.7);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).to({startPosition:0},19).to({y:-6.7},3).to({startPosition:0},3).to({y:-10.7},3).wait(1));

	// Legs
	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f().s("#000000").ss(5,1,1).p("ABGitIAAFbAhFitIAAFb");
	this.shape_10.setTransform(-0.3,29.1);

	this.timeline.addTween(cjs.Tween.get(this.shape_10).wait(29));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-34.8,-38.2,69.8,87.3);


(lib.LastBucketLift = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 8
	this.instance = new lib.Wheel();
	this.instance.parent = this;
	this.instance.setTransform(-36.1,-36.6,2.271,2.271,-90,0,0,4.2,4.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(19).to({rotation:-450},9).wait(1));

	// Layer 9
	this.instance_1 = new lib.Wheel();
	this.instance_1.parent = this;
	this.instance_1.setTransform(-36.2,-3.2,2.271,2.271,165,0,0,4.2,4.4);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(19).to({rotation:-195},9).wait(1));

	// Layer 7
	this.instance_2 = new lib.Tween21("synched",0);
	this.instance_2.parent = this;
	this.instance_2.setTransform(-45.4,-72.7);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).to({startPosition:0},14).to({scaleX:0.6,x:4.7,y:-73.3},2).to({scaleX:1,x:-45.4,y:-72.7},4).to({rotation:7.4,x:-41.4,y:-72.1},2).to({rotation:0,x:-45.4,y:-72.7},2).to({rotation:-15,x:-39.4,y:-73.5},2).to({rotation:0,x:-45.4,y:-72.7},2).wait(1));

	// Layer 6
	this.instance_3 = new lib.Tween20("synched",0);
	this.instance_3.parent = this;
	this.instance_3.setTransform(-66.7,-73.3,0.305,1);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).to({startPosition:0},14).to({scaleX:1.1,x:-35.8},2).to({scaleX:0.31,x:-66.7},4).to({regX:-0.1,scaleX:0.38,x:-63.9},2).to({regX:0,scaleX:0.31,x:-66.7},2).to({regX:-0.1,scaleX:0.38,x:-63.9},2).to({regX:0,scaleX:0.31,x:-66.7},2).wait(1));

	// Layer 5
	this.instance_4 = new lib.Tween19("synched",0);
	this.instance_4.parent = this;
	this.instance_4.setTransform(10.7,-76.4);

	this.timeline.addTween(cjs.Tween.get(this.instance_4).to({startPosition:0},15).to({rotation:22.2,x:33.7,y:-75.4},4).to({rotation:52.2,x:43.8,y:-97.5},2).to({rotation:157.2,y:-97.6},3).to({rotation:292.2,x:51.8,y:-59.7},2).to({regX:0.1,regY:-0.1,rotation:360.7,x:47,y:-33.9},2).wait(1));

	// Layer 3
	this.instance_5 = new lib.Tween18("synched",0);
	this.instance_5.parent = this;
	this.instance_5.setTransform(-5.1,-60.3);

	this.timeline.addTween(cjs.Tween.get(this.instance_5).to({startPosition:0},19).to({y:-148.3},9).wait(1));

	// Layer 4
	this.instance_6 = new lib.Tween19("synched",0);
	this.instance_6.parent = this;
	this.instance_6.setTransform(10.7,3.2);
	this.instance_6._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_6).wait(19).to({_off:false},0).to({y:-76.4},9).wait(1));

	// Layer 2
	this.instance_7 = new lib.Tween18("synched",0);
	this.instance_7.parent = this;
	this.instance_7.setTransform(-5.1,17.3);

	this.timeline.addTween(cjs.Tween.get(this.instance_7).to({startPosition:0},19).to({y:-60.3},9).wait(1));

	// Layer 1
	this.instance_8 = new lib.Tween4("synched",0);
	this.instance_8.parent = this;
	this.instance_8.setTransform(10.7,8.5,1,1,0,0,180);
	this.instance_8._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_8).wait(19).to({_off:false},0).to({y:-70.7},9).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-79.6,-91,110.6,110.8);


(lib.FirstLift = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 5
	this.instance = new lib.Tween19("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(10.7,-76.4);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({_off:true},19).wait(10));

	// Layer 7
	this.instance_1 = new lib.Wheel();
	this.instance_1.parent = this;
	this.instance_1.setTransform(-36.2,-36.6,2.271,2.271,-120,0,0,4.2,4.5);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(19).to({rotation:-480},9).wait(1));

	// Layer 6
	this.instance_2 = new lib.Wheel();
	this.instance_2.parent = this;
	this.instance_2.setTransform(-36,-3.2,2.271,2.271,60,0,0,4.2,4.5);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(19).to({rotation:-300},9).wait(1));

	// Layer 3
	this.instance_3 = new lib.Tween18("synched",0);
	this.instance_3.parent = this;
	this.instance_3.setTransform(-5.1,31.5);
	this.instance_3._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(26).to({_off:false},0).to({y:17.3},2).wait(1));

	// Layer 4
	this.instance_4 = new lib.Tween19("synched",0);
	this.instance_4.parent = this;
	this.instance_4.setTransform(10.7,3.2);
	this.instance_4._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_4).wait(19).to({_off:false},0).to({y:-76.4},9).wait(1));

	// Layer 2
	this.instance_5 = new lib.Tween18("synched",0);
	this.instance_5.parent = this;
	this.instance_5.setTransform(-5.1,17.3);

	this.timeline.addTween(cjs.Tween.get(this.instance_5).to({startPosition:0},19).to({y:-60.3},9).wait(1));

	// Layer 1
	this.instance_6 = new lib.Tween4("synched",0);
	this.instance_6.parent = this;
	this.instance_6.setTransform(10.7,8.5,1,1,0,0,180);
	this.instance_6._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_6).wait(19).to({_off:false},0).to({y:-70.7},9).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-53.2,-91,84.2,110.8);


(lib.Fillingbuckets = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 14
	this.instance = new lib.Wheel();
	this.instance.parent = this;
	this.instance.setTransform(-53,40.1,1,1,-165,0,0,4.3,4.3);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(14).to({rotation:195},14).wait(1));

	// Layer 13
	this.instance_1 = new lib.Wheel();
	this.instance_1.parent = this;
	this.instance_1.setTransform(-142.8,40.1,1,1,90,0,0,4.3,4.3);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(14).to({rotation:450},14).wait(1));

	// Layer 12
	this.instance_2 = new lib.Wheel();
	this.instance_2.parent = this;
	this.instance_2.setTransform(-131.6,40.1,1,1,-105,0,0,4.3,4.3);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(14).to({rotation:255},14).wait(1));

	// Layer 10
	this.instance_3 = new lib.Wheel();
	this.instance_3.parent = this;
	this.instance_3.setTransform(-120.4,40.1,1,1,-45,0,0,4.3,4.3);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(14).to({rotation:315},14).wait(1));

	// Layer 9
	this.instance_4 = new lib.Wheel();
	this.instance_4.parent = this;
	this.instance_4.setTransform(-109.2,40,1,1,165,0,0,4.3,4.3);

	this.timeline.addTween(cjs.Tween.get(this.instance_4).wait(14).to({rotation:525},14).wait(1));

	// Layer 8
	this.instance_5 = new lib.Wheel();
	this.instance_5.parent = this;
	this.instance_5.setTransform(-154,40.1,1,1,0,0,0,4.3,4.3);

	this.timeline.addTween(cjs.Tween.get(this.instance_5).wait(14).to({rotation:360},14).wait(1));

	// Layer 7
	this.instance_6 = new lib.Wheel();
	this.instance_6.parent = this;
	this.instance_6.setTransform(-86.8,40,1,1,-75,0,0,4.3,4.3);

	this.timeline.addTween(cjs.Tween.get(this.instance_6).wait(14).to({rotation:285},14).wait(1));

	// Layer 6
	this.instance_7 = new lib.Wheel();
	this.instance_7.parent = this;
	this.instance_7.setTransform(-75.6,40.1,1,1,60,0,0,4.4,4.4);

	this.timeline.addTween(cjs.Tween.get(this.instance_7).wait(14).to({rotation:420},14).wait(1));

	// Layer 5
	this.instance_8 = new lib.Wheel();
	this.instance_8.parent = this;
	this.instance_8.setTransform(-64.4,40.1,1,1,180,0,0,4.3,4.3);

	this.timeline.addTween(cjs.Tween.get(this.instance_8).wait(14).to({rotation:540},14).wait(1));

	// Layer 4
	this.instance_9 = new lib.Wheel();
	this.instance_9.parent = this;
	this.instance_9.setTransform(-98,40.1,1,1,0,0,0,4.3,4.3);

	this.timeline.addTween(cjs.Tween.get(this.instance_9).wait(14).to({rotation:360},14).wait(1));

	// Layer 3
	this.instance_10 = new lib.Tween9("synched",0);
	this.instance_10.parent = this;
	this.instance_10.setTransform(-177.2,16.6);
	this.instance_10._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_10).wait(21).to({_off:false},0).to({x:-143.2},7).wait(1));

	// Bucket
	this.instance_11 = new lib.Tween4("synched",0);
	this.instance_11.parent = this;
	this.instance_11.setTransform(-143.6,18.9);

	this.timeline.addTween(cjs.Tween.get(this.instance_11).to({startPosition:0},14).to({x:-55.2,y:20.1},14).wait(1));

	// Bucket Handle
	this.instance_12 = new lib.Tween1("synched",0);
	this.instance_12.parent = this;
	this.instance_12.setTransform(-138.6,11,1,0.534,75,0,0,-0.1,0.2);

	this.timeline.addTween(cjs.Tween.get(this.instance_12).to({startPosition:0},11).to({regX:0,regY:0,scaleY:1,rotation:0,x:-143.6,y:10.3},3).to({x:-55.2,y:11.5},14).wait(1));

	// Layer 2
	this.instance_13 = new lib.Tween7("synched",0);
	this.instance_13.parent = this;
	this.instance_13.setTransform(-143,-40.8,1,0.034);
	this.instance_13._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_13).wait(2).to({_off:false},0).to({scaleY:1,y:-12.8},3).to({startPosition:0},6).to({scaleY:0.1,y:13.3},3).to({_off:true},1).wait(14));

	// Drop 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("Ao7AiIAAhDIR3AAIAABDg");
	this.shape.setTransform(-105.1,30.8);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(29));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-162.3,6,115.8,41.6);


(lib.BucketLift = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 5
	this.instance = new lib.Tween19("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(10.7,-76.4);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({_off:true},19).wait(10));

	// Layer 3
	this.instance_1 = new lib.Wheel();
	this.instance_1.parent = this;
	this.instance_1.setTransform(-35.9,-36.4,2.271,2.271,15,0,0,4.2,4.5);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(19).to({rotation:-345},9).wait(1));

	// Layer 6
	this.instance_2 = new lib.Wheel();
	this.instance_2.parent = this;
	this.instance_2.setTransform(-36.2,-3.2,2.271,2.271,105,0,0,4.2,4.5);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(19).to({rotation:-255},9).wait(1));

	// Layer 4
	this.instance_3 = new lib.Tween19("synched",0);
	this.instance_3.parent = this;
	this.instance_3.setTransform(10.7,3.2);
	this.instance_3._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(19).to({_off:false},0).to({y:-76.4},9).wait(1));

	// Layer 2
	this.instance_4 = new lib.Tween18("synched",0);
	this.instance_4.parent = this;
	this.instance_4.setTransform(-5.1,17.3);

	this.timeline.addTween(cjs.Tween.get(this.instance_4).to({startPosition:0},19).to({y:-60.3},9).wait(1));

	// Layer 1
	this.instance_5 = new lib.Tween4("synched",0);
	this.instance_5.parent = this;
	this.instance_5.setTransform(10.7,8.5,1,1,0,0,180);
	this.instance_5._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_5).wait(19).to({_off:false},0).to({y:-70.7},9).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-50.6,-91,81.6,110.8);


(lib.BlobLever = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Left Hand
	this.instance = new lib.Tween30("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(-28.7,24.3,0.594,0.594,0,0,180,0,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(29));

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("AhQAuIgBgKQAAgiAYgXQAYgYAhAAQAiAAAYAYQAYAXAAAiIAAAKg");
	this.shape.setTransform(49.4,43.6);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(29));

	// Layer 2
	this.instance_1 = new lib.Tween22("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(48.8,46.6,1,1,0,0,0,-4.4,27.4);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({startPosition:0},16).to({rotation:-21.2},3).to({startPosition:0},6).to({rotation:0},3).wait(1));

	// Right Hand
	this.instance_2 = new lib.Tween30("synched",0);
	this.instance_2.parent = this;
	this.instance_2.setTransform(55,2.3,0.594,0.594,0,0,0,0.1,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).to({startPosition:0},16).to({x:39},3).to({startPosition:0},6).to({x:55},3).wait(1));

	// Left Arm
	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f().s("#000000").ss(5,1,1).p("AgQCSQgwhqBhi5");
	this.shape_1.setTransform(-27,9.7);

	this.timeline.addTween(cjs.Tween.get(this.shape_1).wait(29));

	// Right Arm
	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#000000").ss(5,1,1).p("ACbAOQjTByhii5");
	this.shape_2.setTransform(39.3,0.9);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f().s("#000000").ss(5,1,1).p("Aiag5QBiC5DThy");
	this.shape_3.setTransform(39.3,0.9);
	this.shape_3._off = true;

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f().s("#000000").ss(5,1,1).p("AiAg5QBiC5Cfhy");
	this.shape_4.setTransform(36.7,0.9);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f().s("#000000").ss(5,1,1).p("Ahlg5QBiC5Bphy");
	this.shape_5.setTransform(34,0.9);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f().s("#000000").ss(5,1,1).p("ABMAOQg2Byhhi5");
	this.shape_6.setTransform(31.4,0.9);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f().s("#000000").ss(5,1,1).p("AhLg5QBhC5A2hy");
	this.shape_7.setTransform(31.4,0.9);
	this.shape_7._off = true;

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_2}]}).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_2}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_5}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_5}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_2}]},1).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.shape_3).wait(1).to({_off:false},0).wait(14).to({_off:true},1).wait(13));
	this.timeline.addTween(cjs.Tween.get(this.shape_7).wait(20).to({_off:false},0).wait(4).to({_off:true},1).wait(4));

	// Body
	this.instance_3 = new lib.Tween3("synched",0);
	this.instance_3.parent = this;
	this.instance_3.setTransform(-0.3,-10.7);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(29));

	// Legs
	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f().s("#000000").ss(5,1,1).p("ABGitIAAFbAhFitIAAFb");
	this.shape_8.setTransform(-0.3,29.1);

	this.timeline.addTween(cjs.Tween.get(this.shape_8).wait(29));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-33.7,-38.2,93.8,87.3);


(lib.Blobdropbucket = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Bucket
	this.instance = new lib.Tween4("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(-55.2,20.1);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({rotation:8.7,x:-45.6,y:22.9},2).to({rotation:-8.2,x:-29.8,y:25.8},2).to({rotation:15,x:-21.7,y:28.6},2).to({rotation:-7.7,x:-5.3,y:31.2},3).to({rotation:-30,x:1.7,y:24.9},2).to({rotation:-105,x:-3.9,y:18.8},3).to({startPosition:0},5).to({regY:-0.1,rotation:-195,x:70,y:35.7},6).to({_off:true},1).wait(3));

	// Bucket Handle
	this.instance_1 = new lib.Tween1("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(-55.2,11.5);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({rotation:8.7,x:-44.3,y:14.4},2).to({rotation:-8.2,x:-31.1,y:17.3},2).to({rotation:15,x:-19.5,y:20.3},2).to({rotation:-7.7,x:-6.4,y:22.7},3).to({rotation:-30,x:-2.6,y:17.4},2).to({rotation:-105,x:-12.1,y:21},3).to({startPosition:0},5).to({regX:-0.1,regY:-0.1,rotation:-270,x:76.3,y:44},6).to({_off:true},1).wait(3));

	// Left Hand
	this.instance_2 = new lib.Tween30("synched",0);
	this.instance_2.parent = this;
	this.instance_2.setTransform(-54.9,2.3,0.594,0.594,0,0,180,0,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).to({regX:0.1,x:-23.9,y:9.9},5).to({regX:0,x:-0.6,y:15.8},6).to({x:-21.8,y:24.2},3).to({startPosition:0},5).to({startPosition:0},3).to({x:-54.9,y:2.3},3).wait(4));

	// Right Hand
	this.instance_3 = new lib.Tween30("synched",0);
	this.instance_3.parent = this;
	this.instance_3.setTransform(40.6,23.6,0.594,0.594,0,0,0,0.1,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).to({x:19.9,y:25.6},6).to({x:12.1,y:27.4},5).to({x:8.9,y:21.4},3).to({startPosition:0},5).to({x:40.9},3).to({x:40.6,y:23.6},3).wait(4));

	// Left Arm
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#000000").ss(5,1,1).p("AiaAOQDTByBii5");
	this.shape.setTransform(-39.2,0.9);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f().s("#000000").ss(5,1,1).p("Ah/AXQCdBnBii5");
	this.shape_1.setTransform(-36.6,1.1);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#000000").ss(5,1,1).p("AhkAgQBnBcBii5");
	this.shape_2.setTransform(-33.9,1.3);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f().s("#000000").ss(5,1,1).p("AhKAoQA0BRBhi5");
	this.shape_3.setTransform(-31.2,1.6);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f().s("#000000").ss(5,1,1).p("AggBPQgUAsBZjQ");
	this.shape_4.setTransform(-28.3,1.4);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f().s("#000000").ss(5,1,1).p("AAfheQh1DRBqgW");
	this.shape_5.setTransform(-28,1.4);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f().s("#000000").ss(5,1,1).p("AAJhWQicCxDOgE");
	this.shape_6.setTransform(-25.8,2.3);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f().s("#000000").ss(5,1,1).p("AgHhZQikDAD1gP");
	this.shape_7.setTransform(-24.2,2.6);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f().s("#000000").ss(5,1,1).p("AgehdQiVDBEIgG");
	this.shape_8.setTransform(-21.9,3);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f().s("#000000").ss(5,1,1).p("Ag0hjQiHDDEcAE");
	this.shape_9.setTransform(-19.6,3.6);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f().s("#000000").ss(5,1,1).p("AhKhoQh4DFEvAM");
	this.shape_10.setTransform(-17.4,4.1);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f().s("#000000").ss(5,1,1).p("AhfhtQhpDGFCAV");
	this.shape_11.setTransform(-15.3,4.6);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f().s("#000000").ss(5,1,1).p("Ag+h8QhpDHEEAy");
	this.shape_12.setTransform(-18.7,6.1);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f().s("#000000").ss(5,1,1).p("AgbiKQhqDHDGBO");
	this.shape_13.setTransform(-22.1,7.5);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f().s("#000000").ss(5,1,1).p("AAHiYQhoDHCHBq");
	this.shape_14.setTransform(-25.7,8.9);
	this.shape_14._off = true;

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f().s("#000000").ss(5,1,1).p("AAnhuQhoDHAkAW");
	this.shape_15.setTransform(-28.9,4.7);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f().s("#000000").ss(5,1,1).p("ABfhQQhpDHhUgv");
	this.shape_16.setTransform(-34.4,1.7);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape}]}).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_2}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_5}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_9}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_12}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_16}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape}]},1).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.shape).to({_off:true},1).wait(24).to({_off:false},0).wait(4));
	this.timeline.addTween(cjs.Tween.get(this.shape_14).wait(14).to({_off:false},0).wait(8).to({_off:true},1).wait(6));

	// Right Arm
	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f().s("#000000").ss(5,1,1).p("ABUCOQhGhihhi5");
	this.shape_17.setTransform(32.2,9.3);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f().s("#000000").ss(5,1,1).p("AhEiOQBhC5AoBk");
	this.shape_18.setTransform(30.7,9.4);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f().s("#000000").ss(5,1,1).p("Ag2iPQBhC6AMBl");
	this.shape_19.setTransform(29.3,9.5);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f().s("#000000").ss(5,1,1).p("AAnCQQAShmhhi5");
	this.shape_20.setTransform(27.9,9.5);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f().s("#000000").ss(5,1,1).p("AgeiXQBhC5g6B2");
	this.shape_21.setTransform(26.9,10.3);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f().s("#000000").ss(5,1,1).p("AgXCgQBhiGhhi5");
	this.shape_22.setTransform(26.3,11.1);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f().s("#000000").ss(5,1,1).p("AgnCeQCJiChii5");
	this.shape_23.setTransform(23.8,10.9);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f().s("#000000").ss(5,1,1).p("AgrCcQCRh+hii5");
	this.shape_24.setTransform(23.4,10.7);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f().s("#000000").ss(5,1,1).p("AguCaQCZh6hii5");
	this.shape_25.setTransform(22.9,10.5);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f().s("#000000").ss(5,1,1).p("Ag3CdQCuiAhii5");
	this.shape_26.setTransform(21.7,10.8);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f().s("#000000").ss(5,1,1).p("AhACfQDCiEhii5");
	this.shape_27.setTransform(20.6,11);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f().s("#000000").ss(5,1,1).p("AhJChQDWiIhii5");
	this.shape_28.setTransform(19.5,11.2);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f().s("#000000").ss(5,1,1).p("AhLCXQDbhzhii6");
	this.shape_29.setTransform(19.2,10.2);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f().s("#000000").ss(5,1,1).p("AhNCMQDfhehii5");
	this.shape_30.setTransform(19,9.1);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f().s("#000000").ss(5,1,1).p("AhPCBQDjhIhii5");
	this.shape_31.setTransform(18.8,8);
	this.shape_31._off = true;

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f().s("#000000").ss(5,1,1).p("AgoCLQCLhchii5");
	this.shape_32.setTransform(23.7,9);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f().s("#000000").ss(5,1,1).p("AAVB7QArg8hhi5");
	this.shape_33.setTransform(27.2,7.4);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f().s("#000000").ss(5,1,1).p("ABVCDQhIhMhhi5");
	this.shape_34.setTransform(32.3,8.2);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f().s("#000000").ss(5,1,1).p("AhUiGQBhC5BIBU");
	this.shape_35.setTransform(32.3,8.6);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f().s("#000000").ss(5,1,1).p("AhUiKQBiC6BHBb");
	this.shape_36.setTransform(32.3,9);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_17}]}).to({state:[{t:this.shape_18}]},1).to({state:[{t:this.shape_19}]},1).to({state:[{t:this.shape_20}]},1).to({state:[{t:this.shape_21}]},1).to({state:[{t:this.shape_22}]},1).to({state:[{t:this.shape_23}]},1).to({state:[{t:this.shape_24}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_26}]},1).to({state:[{t:this.shape_27}]},1).to({state:[{t:this.shape_28}]},1).to({state:[{t:this.shape_29}]},1).to({state:[{t:this.shape_30}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_32}]},1).to({state:[{t:this.shape_33}]},1).to({state:[{t:this.shape_34}]},1).to({state:[{t:this.shape_35}]},1).to({state:[{t:this.shape_36}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_17}]},1).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.shape_17).to({_off:true},1).wait(24).to({_off:false},0).wait(4));
	this.timeline.addTween(cjs.Tween.get(this.shape_31).wait(14).to({_off:false},0).wait(5).to({_off:true},1).wait(9));

	// Body
	this.instance_4 = new lib.Tween3("synched",0);
	this.instance_4.parent = this;
	this.instance_4.setTransform(-0.3,-10.7);

	this.timeline.addTween(cjs.Tween.get(this.instance_4).to({y:-13.7},11).wait(18));

	// Legs
	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f().s("#000000").ss(5,1,1).p("ABGitIAAFbAhFitIAAFb");
	this.shape_37.setTransform(-0.3,29.1);

	this.timeline.addTween(cjs.Tween.get(this.shape_37).wait(29));

	// Layer 2
	this.shape_38 = new cjs.Shape();
	this.shape_38.graphics.f("#00B3E3").s().p("AgqAhQgRgNAAgUQAAgTARgOQASgOAYAAQAZAAASAOQARAOAAATQAAAUgRANQgSAOgZABQgYgBgSgOg");
	this.shape_38.setTransform(-12.9,27.1);

	this.shape_39 = new cjs.Shape();
	this.shape_39.graphics.f("#00B3E3").s().p("AhdBBQgSgNAAgUQAAgUASgNQARgOAZAAQAVABAQAJIABAAIALgHQgFgJAAgKQAAgUAQgOQASgOAZAAQAZAAASAOQARAOAAAUQAAAUgRAMIgMAIQAFAJAAAKQAAATgSAPQgRAOgZAAQgVAAgPgLIgBAAQgRAOgZABQgZgBgRgOg");
	this.shape_39.setTransform(-18.1,30.3);

	this.shape_40 = new cjs.Shape();
	this.shape_40.graphics.f("#00B3E3").s().p("AhvBqQgOgRAAgZQAAgZAOgSQAIgKAKgEQgEgIAAgKQAAgUARgOQASgOAZAAQAVAAAQAKIAAAAIALgHQgFgJAAgKQAAgUARgOQASgOAZAAQAZAAARAOQASAOAAAUQAAATgSAOIgLAIQAFAIAAALQAAASgSAOQgRAOgZAAQgLAAgJgCQADAKAAANQAAAZgOARQgNASgTAAQgMAAgKgGIgBAAQgOASgTAAQgUAAgOgSg");
	this.shape_40.setTransform(-19.5,34.7);

	this.shape_41 = new cjs.Shape();
	this.shape_41.graphics.f("#00B3E3").s().p("AhHCwQgKgNgDgRIgFAAQgUAAgOgSQgOgRAAgZQAAgZAOgSQAIgKALgEQgJgQAAgSQAAgZAOgSQAIgKAKgEQgEgJAAgKQAAgUARgOQASgOAZAAQAVAAAPAKIAAAAIAMgHQgFgJAAgKQAAgUARgOQASgOAZAAQAZAAARAOQASAOAAAUQAAATgSAOIgLAIQAFAIAAALQAAATgSAOQgRAOgZAAQgLAAgJgCQADAKAAANQAAAYgOARIgBACQALARAAAXQAAAZgOARQgFAHgGAEIABAPQAAAZgNARQgOASgTAAQgUAAgOgSg");
	this.shape_41.setTransform(-20.7,41.7);

	this.shape_42 = new cjs.Shape();
	this.shape_42.graphics.f("#00B3E3").s().p("AiHDoQgOgRAAgZQAAgZAOgSIAAAAQgKgQAAgVQAAgZAOgSQAFgGAGgEQgFgMAAgPQAAgZAOgRQAIgKALgEQgJgQAAgTQAAgZAOgSQAIgKAKgEQgEgJAAgKQAAgUARgOQASgOAZAAQAUAAAQAKIAAAAIAMgHQgFgJAAgKQAAgUARgOQASgOAZAAQAZAAARAOQASAOAAAUQAAATgSAOIgLAIQAFAIAAALQAAATgSAOQgRAOgZAAQgLAAgJgCQADAKAAANQAAAZgOARIgBACQALARAAAWQAAAZgOARQgFAHgGAEIABAPQAAAZgOARIgHAIQAJAQAAAWQAAAZgNARQgOASgTAAQgNAAgKgHQgDAHgFAGQgOASgTAAQgUAAgOgSg");
	this.shape_42.setTransform(-21.9,47.3);

	this.shape_43 = new cjs.Shape();
	this.shape_43.graphics.f("#00B3E3").s().p("AiPEWQgOgRAAgZQAAgZAOgSQAGgHAGgEQgKgQAAgWQAAgZAOgSIAAAAQgKgQAAgVQAAgZAOgSQAFgGAGgEQgFgLAAgPQAAgZAOgSQAIgKALgEQgJgQAAgTQAAgZAOgSQAIgKAKgEQgEgJAAgKQAAgUARgOQASgOAZAAQAUAAAQAKIAAAAIAMgHQgFgJAAgKQAAgUARgOQASgOAZAAQAZAAARAOQASAOAAAUQAAATgSAOIgLAIQAFAIAAALQAAATgSAOQgRAOgZAAQgLAAgJgCQADAKAAANQAAAZgOARIgBACQALARAAAXQAAAZgOAQQgFAHgGAEIABAPQAAAZgOARIgIAIQAKAQAAAWQAAAXgMARQAMARAAAXQAAAZgOARQgNASgTAAQgTAAgOgQQgCAUgMAOQgOASgTAAQgUAAgOgSg");
	this.shape_43.setTransform(-22.7,51.9);

	this.shape_44 = new cjs.Shape();
	this.shape_44.graphics.f("#00B3E3").s().p("AhnC9QgKgMAAgQQAAgSAKgLQAEgFAFgDQgHgLAAgPQAAgRAJgMIABAAQgHgLAAgPQAAgRAJgMQAEgEAFgDQgEgHAAgKQAAgSAKgLQAGgIAHgCQgGgLAAgNQAAgRAKgMQAGgHAIgDQgEgGAAgHQAAgOANgJQAMgJASAAQAPAAALAHIAAgBIAJgFQgEgFAAgIQAAgNANgKQAMgJASAAQASAAANAJQANAKAAANQAAAOgNAJIgIAFQADAGAAAHQAAAOgMAJQgNAKgSAAQgHAAgHgCQACAHAAAJQAAARgKAMIgBABQAIALAAAQQAAARgKALIgIAHIABAKQAAARgKAMIgGAGQAHALAAAOQAAAQgIAMQAIALAAAQQAAARgKAMQgJAMgOAAQgOAAgJgLQgCAOgIAJQgLANgOAAQgOAAgKgNg");
	this.shape_44.setTransform(-26.7,66.2);

	this.shape_45 = new cjs.Shape();
	this.shape_45.graphics.f("#00B3E3").s().p("AhcB/QgJgIAAgLQAAgMAJgHQAEgEAEgCQgGgHAAgKQAAgMAIgIIABAAQgHgHAAgKQAAgMAJgIIAHgFQgDgEAAgHQAAgLAJgIQAFgFAHgCQgFgHAAgJQAAgMAIgIQAGgEAHgCQgEgEAAgFQAAgJAMgHQALgGAQAAQANAAAKAFIAAAAIAIgEQgEgDAAgFQAAgJAMgHQALgGAQAAQAQAAAMAGQALAHAAAJQAAAJgLAGIgIADQADAFAAAEQAAAJgLAHQgLAGgQAAQgHAAgGgBQACAFAAAGQAAALgJAIIgBABQAHAHAAALQAAALgJAHIgHAFIABAHQAAAMgJAIIgFAEQAGAHAAAKQAAAKgIAIQAIAIAAALQAAALgJAIQgIAIgMAAQgNAAgIgHQgCAJgHAGQgJAJgNAAQgNAAgJgJg");
	this.shape_45.setTransform(-27.5,72.9);

	this.shape_46 = new cjs.Shape();
	this.shape_46.graphics.f("#00B3E3").s().p("AhDBKQgGgEAAgGQAAgIAGgEIAHgDQgFgFgBgGQAAgGAHgFQgFgEABgGQgBgHAHgFQACgCAEgBQgDgCAAgEQAAgGAGgFQAEgDAFAAQgEgFAAgFQAAgHAHgFQADgCAGgBQgDgDAAgDQAAgFAIgEQAIgDAMAAQAJAAAHACIAAAAIAGgCQgCgCAAgDQgBgFAJgEQAIgDAMgBQALABAIADQAJAEAAAFQAAAFgJAEIgFACQADACAAADQgBAFgHAEQgJAEgLAAIgKgBQACADAAADQAAAHgHAFIAAABQAFAEAAAGQAAAHgGADIgGADIABAFQAAAGgHAFIgEACQAFAEAAAGQAAAGgGAFQAGAEAAAHQAAAGgGAFQgGAFgJAAQgJAAgHgFQAAAGgGADQgGAFgKABQgJgBgHgFg");
	this.shape_46.setTransform(-29.5,81.3);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.shape_38}]},14).to({state:[{t:this.shape_39}]},1).to({state:[{t:this.shape_40}]},1).to({state:[{t:this.shape_41}]},1).to({state:[{t:this.shape_42}]},1).to({state:[{t:this.shape_43}]},1).to({state:[{t:this.shape_44}]},1).to({state:[{t:this.shape_45}]},1).to({state:[{t:this.shape_46}]},1).to({state:[]},1).to({state:[]},3).wait(3));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-65.9,-38.2,111.5,87.3);


(lib.Blobbucketonhead = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Bucket
	this.instance = new lib.Tween4("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(0.3,-26.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({x:-0.9,y:33.6},14).to({rotation:-8.2,x:14.3,y:30.4},3).to({rotation:7.5,x:24.8,y:26.4},4).to({rotation:-15,x:47.3,y:20.9},4).to({rotation:0,x:54.9,y:19.6},3).wait(1));

	// Layer 11
	this.instance_1 = new lib.Tween6("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(1.1,25.4,1,1,0,0,180);
	this.instance_1._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(14).to({_off:false},0).to({x:25.1,y:15.4},3).to({scaleX:0.23,scaleY:0.23,rotation:105,skewY:0,x:36.5,y:27.4},2).to({_off:true},1).wait(9));

	// Bucket Handle
	this.instance_2 = new lib.Tween1("synched",0);
	this.instance_2.parent = this;
	this.instance_2.setTransform(0.3,-35.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).to({x:-0.9,y:25},14).to({rotation:-8.2,x:13.1,y:21.9},3).to({rotation:7.5,x:25.9,y:17.8},4).to({rotation:-15,x:45.1,y:12.6},4).to({rotation:0,x:54.9,y:11},3).wait(1));

	// Drop 1
	this.instance_3 = new lib.Tween6("synched",0);
	this.instance_3.parent = this;
	this.instance_3.setTransform(-10.9,23.4);
	this.instance_3._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(13).to({_off:false},0).to({rotation:-30,x:-8.9,y:18.2},3).to({regX:-0.1,regY:-0.1,scaleX:0.45,scaleY:0.45,rotation:-105,x:-7.3,y:34.3},3).to({_off:true},1).wait(9));

	// Drop 1
	this.instance_4 = new lib.Tween6("synched",0);
	this.instance_4.parent = this;
	this.instance_4.setTransform(-34.9,19.4);
	this.instance_4._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_4).wait(6).to({_off:false},0).to({rotation:-30,x:-36.9,y:12.2},3).to({regX:-0.1,regY:-0.1,scaleX:0.45,scaleY:0.45,rotation:-105,x:-47.6,y:19.5},3).to({_off:true},1).wait(16));

	// Left Hand
	this.instance_5 = new lib.Tween30("synched",0);
	this.instance_5.parent = this;
	this.instance_5.setTransform(-54.9,2.3,0.594,0.594,0,0,180,0,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_5).to({regX:0.1,x:-23.9,y:9.9},8).to({regX:0,x:-0.6,y:15.8},6).to({x:-54.9,y:2.3},14).wait(1));

	// Right Hand
	this.instance_6 = new lib.Tween30("synched",0);
	this.instance_6.parent = this;
	this.instance_6.setTransform(55,2.3,0.594,0.594,0,0,0,0.1,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_6).to({x:-0.3,y:15.8},14).to({x:55,y:2.3},14).wait(1));

	// Left Arm
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#000000").ss(5,1,1).p("AiiglQDTBxByg4");
	this.shape.setTransform(-38.4,6.1);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f().s("#000000").ss(5,1,1).p("AiMgcQCrBpBuhX");
	this.shape_1.setTransform(-36.6,6);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#000000").ss(5,1,1).p("Ah2gJQCDBgBqh4");
	this.shape_2.setTransform(-34.8,5);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f().s("#000000").ss(5,1,1).p("AhfAQQBbBZBkiY");
	this.shape_3.setTransform(-33,3.2);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f().s("#000000").ss(5,1,1).p("AhKAoQA0BRBhi5");
	this.shape_4.setTransform(-31.2,1.6);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f().s("#000000").ss(5,1,1).p("Ag2A8QAQA+BdjE");
	this.shape_5.setTransform(-29.6,1.5);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f().s("#000000").ss(5,1,1).p("AggBPQgUAsBZjQ");
	this.shape_6.setTransform(-28.3,1.4);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f().s("#000000").ss(5,1,1).p("AgHBWQg/AhBmjQ");
	this.shape_7.setTransform(-28,1.4);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f().s("#000000").ss(5,1,1).p("AAfheQh1DRBqgW");
	this.shape_8.setTransform(-28,1.4);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f().s("#000000").ss(5,1,1).p("AAJhWQicCxDOgE");
	this.shape_9.setTransform(-25.8,2.3);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f().s("#000000").ss(5,1,1).p("AgHhZQikDAD1gP");
	this.shape_10.setTransform(-24.2,2.6);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f().s("#000000").ss(5,1,1).p("AgehdQiVDBEIgG");
	this.shape_11.setTransform(-21.9,3);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f().s("#000000").ss(5,1,1).p("Ag0hjQiHDDEcAE");
	this.shape_12.setTransform(-19.6,3.6);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f().s("#000000").ss(5,1,1).p("AhKhoQh4DFEvAM");
	this.shape_13.setTransform(-17.4,4.1);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f().s("#000000").ss(5,1,1).p("AhfhtQhpDGFCAV");
	this.shape_14.setTransform(-15.3,4.6);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape}]}).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_2}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_5}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_9}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_12}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_12}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_9}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_5}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_2}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape}]},1).wait(1));

	// Right Arm
	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f().s("#000000").ss(5,1,1).p("ACfgkQjTBxhqg+");
	this.shape_15.setTransform(38.9,6);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f().s("#000000").ss(5,1,1).p("AiJgQQBqBdCpho");
	this.shape_16.setTransform(36.8,6);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f().s("#000000").ss(5,1,1).p("Ah1gjQBsB+B/he");
	this.shape_17.setTransform(34.6,4.6);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f().s("#000000").ss(5,1,1).p("AhggzQBrCfBWhW");
	this.shape_18.setTransform(32.5,2.9);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f().s("#000000").ss(5,1,1).p("AhLhEQBsDAArhN");
	this.shape_19.setTransform(30.3,1.3);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f().s("#000000").ss(5,1,1).p("Ag2hOQBADZAthT");
	this.shape_20.setTransform(28.6,1.2);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f().s("#000000").ss(5,1,1).p("AghhXQAWDxAtha");
	this.shape_21.setTransform(26.9,1.1);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f().s("#000000").ss(5,1,1).p("AgKADQAnCVghjX");
	this.shape_22.setTransform(23.8,1);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f().s("#000000").ss(5,1,1).p("AgFhhQAuDxg3g4");
	this.shape_23.setTransform(23.6,1.5);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f().s("#000000").ss(5,1,1).p("AghBbQBnArg4jn");
	this.shape_24.setTransform(21.7,2.1);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f().s("#000000").ss(5,1,1).p("Ag0BfQCWAehAje");
	this.shape_25.setTransform(19.8,2.6);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f().s("#000000").ss(5,1,1).p("AhIBiQDGARhIjV");
	this.shape_26.setTransform(18,3.3);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f().s("#000000").ss(5,1,1).p("AhcBkQD2AEhRjL");
	this.shape_27.setTransform(16.2,4);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f().s("#000000").ss(5,1,1).p("AhwBmQEmgIhajD");
	this.shape_28.setTransform(14.4,4.7);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f().s("#000000").ss(5,1,1).p("AiEBnQFVgUhii5");
	this.shape_29.setTransform(12.7,5.4);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_15}]}).to({state:[{t:this.shape_16}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_18}]},1).to({state:[{t:this.shape_19}]},1).to({state:[{t:this.shape_20}]},1).to({state:[{t:this.shape_21}]},1).to({state:[{t:this.shape_22}]},1).to({state:[{t:this.shape_23}]},1).to({state:[{t:this.shape_24}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_26}]},1).to({state:[{t:this.shape_27}]},1).to({state:[{t:this.shape_28}]},1).to({state:[{t:this.shape_29}]},1).to({state:[{t:this.shape_28}]},1).to({state:[{t:this.shape_27}]},1).to({state:[{t:this.shape_26}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_24}]},1).to({state:[{t:this.shape_23}]},1).to({state:[{t:this.shape_22}]},1).to({state:[{t:this.shape_21}]},1).to({state:[{t:this.shape_20}]},1).to({state:[{t:this.shape_19}]},1).to({state:[{t:this.shape_18}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_16}]},1).to({state:[{t:this.shape_15}]},1).wait(1));

	// Layer 2
	this.instance_7 = new lib.Tween26("synched",0);
	this.instance_7.parent = this;
	this.instance_7.setTransform(-0.1,-2.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_7).to({y:-10.7},14).to({y:-2.1},14).wait(1));

	// Body
	this.instance_8 = new lib.Tween25("synched",0);
	this.instance_8.parent = this;
	this.instance_8.setTransform(-0.3,9.9);

	this.timeline.addTween(cjs.Tween.get(this.instance_8).to({y:-10.7},14).to({y:9.9},14).wait(1));

	// Legs
	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f().s("#000000").ss(5,1,1).p("ABGitIAAFbAhFitIAAFb");
	this.shape_30.setTransform(-0.3,29.1);

	this.timeline.addTween(cjs.Tween.get(this.shape_30).wait(29));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-59.9,-46.4,119.9,95.4);


(lib.Blob10 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Bucket
	this.instance = new lib.Tween4("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(-55.2,20.1);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({rotation:8.7,x:-45.6,y:22.9},3).to({rotation:-8.2,x:-29.8,y:25.8},3).to({rotation:15,x:-21.7,y:28.6},3).to({rotation:-7.7,x:-5.3,y:31.2},3).to({rotation:0,x:-0.9,y:33.6},2).to({y:37.6},2).to({y:33.6},2).to({y:37.6},2).to({y:33.6},2).to({y:69.6},6).wait(1));

	// Layer 11
	this.instance_1 = new lib.Tween6("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(1.1,25.4,1,1,0,0,180);
	this.instance_1._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(14).to({_off:false},0).to({x:25.1,y:15.4},3).to({scaleX:0.23,scaleY:0.23,rotation:105,skewY:0,x:36.5,y:27.4},2).to({_off:true},1).wait(9));

	// Bucket Handle
	this.instance_2 = new lib.Tween1("synched",0);
	this.instance_2.parent = this;
	this.instance_2.setTransform(-55.2,11.5);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).to({rotation:8.7,x:-44.3,y:14.4},3).to({rotation:-8.2,x:-31.1,y:17.3},3).to({rotation:15,x:-19.5,y:20.3},3).to({rotation:-7.7,x:-6.4,y:22.7},3).to({rotation:0,x:-0.9,y:25},2).to({y:29},2).to({y:25},2).to({y:29},2).to({y:25},2).to({y:61},6).wait(1));

	// Drop 1
	this.instance_3 = new lib.Tween6("synched",0);
	this.instance_3.parent = this;
	this.instance_3.setTransform(-10.9,23.4);
	this.instance_3._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(13).to({_off:false},0).to({rotation:-30,x:-8.9,y:18.2},3).to({regX:-0.1,regY:-0.1,scaleX:0.45,scaleY:0.45,rotation:-105,x:-7.3,y:34.3},3).to({_off:true},1).wait(9));

	// Drop 1
	this.instance_4 = new lib.Tween6("synched",0);
	this.instance_4.parent = this;
	this.instance_4.setTransform(-34.9,19.4);
	this.instance_4._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_4).wait(6).to({_off:false},0).to({rotation:-30,x:-36.9,y:12.2},3).to({regX:-0.1,regY:-0.1,scaleX:0.45,scaleY:0.45,rotation:-105,x:-47.6,y:19.5},3).to({_off:true},1).wait(16));

	// Left Hand
	this.instance_5 = new lib.Tween30("synched",0);
	this.instance_5.parent = this;
	this.instance_5.setTransform(-54.9,2.3,0.594,0.594,0,0,180,0,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_5).to({regX:0.1,x:-23.9,y:9.9},8).to({regX:0,x:-0.6,y:15.8},6).to({x:-54.9,y:2.3},14).wait(1));

	// Right Hand
	this.instance_6 = new lib.Tween30("synched",0);
	this.instance_6.parent = this;
	this.instance_6.setTransform(31.7,19.8,0.594,0.594,0,0,0,0.1,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_6).to({x:-0.3,y:15.8},14).to({y:19.8},2).to({y:15.8},2).to({y:19.8},2).to({y:15.8},2).to({x:31.7,y:19.8},6).wait(1));

	// Left Arm
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#000000").ss(5,1,1).p("AiaAOQDTByBii5");
	this.shape.setTransform(-39.2,0.9);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f().s("#000000").ss(5,1,1).p("AiGAVQCrBqBii5");
	this.shape_1.setTransform(-37.2,1);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#000000").ss(5,1,1).p("AhyAbQCDBiBii5");
	this.shape_2.setTransform(-35.2,1.2);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f().s("#000000").ss(5,1,1).p("AhdAiQBbBZBhi5");
	this.shape_3.setTransform(-33.2,1.4);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f().s("#000000").ss(5,1,1).p("AhKAoQA0BRBhi5");
	this.shape_4.setTransform(-31.2,1.6);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f().s("#000000").ss(5,1,1).p("Ag2A8QAQA+BdjE");
	this.shape_5.setTransform(-29.6,1.5);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f().s("#000000").ss(5,1,1).p("AggBPQgUAsBZjQ");
	this.shape_6.setTransform(-28.3,1.4);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f().s("#000000").ss(5,1,1).p("AgHBWQg/AhBmjQ");
	this.shape_7.setTransform(-28,1.4);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f().s("#000000").ss(5,1,1).p("AAfheQh1DRBqgW");
	this.shape_8.setTransform(-28,1.4);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f().s("#000000").ss(5,1,1).p("AAJhWQicCxDOgE");
	this.shape_9.setTransform(-25.8,2.3);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f().s("#000000").ss(5,1,1).p("AgHhZQikDAD1gP");
	this.shape_10.setTransform(-24.2,2.6);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f().s("#000000").ss(5,1,1).p("AgehdQiVDBEIgG");
	this.shape_11.setTransform(-21.9,3);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f().s("#000000").ss(5,1,1).p("Ag0hjQiHDDEcAE");
	this.shape_12.setTransform(-19.6,3.6);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f().s("#000000").ss(5,1,1).p("AhKhoQh4DFEvAM");
	this.shape_13.setTransform(-17.4,4.1);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f().s("#000000").ss(5,1,1).p("AhfhtQhpDGFCAV");
	this.shape_14.setTransform(-15.3,4.6);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape}]}).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_2}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_5}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_9}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_12}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_12}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_9}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_5}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_2}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape}]},1).wait(1));

	// Right Arm
	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f().s("#000000").ss(5,1,1).p("AAmB7QATg8hhi5");
	this.shape_15.setTransform(27.9,7.4);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f().s("#000000").ss(5,1,1).p("Aggh5QBhC5gwA6");
	this.shape_16.setTransform(27.1,7.3);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f().s("#000000").ss(5,1,1).p("AgGB4QBNg2hhi5");
	this.shape_17.setTransform(26.5,7.1);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f().s("#000000").ss(5,1,1).p("AgZB7QBlg8hhi5");
	this.shape_18.setTransform(26,7.4);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f().s("#000000").ss(5,1,1).p("AgdB1QBvgwhhi5");
	this.shape_19.setTransform(25.4,6.8);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f().s("#000000").ss(5,1,1).p("AgmB0QCGguhhi5");
	this.shape_20.setTransform(24,6.7);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f().s("#000000").ss(5,1,1).p("AgwBzQCdgrhii6");
	this.shape_21.setTransform(22.7,6.6);


	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f().s("#000000").ss(5,1,1).p("Ag6BxQC0gohii5");
	this.shape_22.setTransform(21.4,6.4);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f().s("#000000").ss(5,1,1).p("AhEBwQDLgmhii5");
	this.shape_23.setTransform(20.1,6.3);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f().s("#000000").ss(5,1,1).p("AhOBuQDigihii5");
	this.shape_24.setTransform(18.8,6.1);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f().s("#000000").ss(5,1,1).p("AhZBtQD5gghii5");
	this.shape_25.setTransform(17.6,6);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f().s("#000000").ss(5,1,1).p("AhjBsQEQgehii5");
	this.shape_26.setTransform(16.3,5.9);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f().s("#000000").ss(5,1,1).p("AhuBqQEngahii5");
	this.shape_27.setTransform(15.1,5.7);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f().s("#000000").ss(5,1,1).p("Ah5BpQE+gYhii5");
	this.shape_28.setTransform(13.9,5.6);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f().s("#000000").ss(5,1,1).p("AiEBnQFVgUhii5");
	this.shape_29.setTransform(12.7,5.4);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f().s("#000000").ss(5,1,1).p("AiDBxQFUgohii5");
	this.shape_30.setTransform(12.7,6.4);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f().s("#000000").ss(5,1,1).p("AiDB7QFTg8hii5");
	this.shape_31.setTransform(12.8,7.4);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f().s("#000000").ss(5,1,1).p("AhlBrQETgchii5");
	this.shape_32.setTransform(16.2,5.8);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f().s("#000000").ss(5,1,1).p("AhGBvQDQgkhii5");
	this.shape_33.setTransform(19.8,6.2);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f().s("#000000").ss(5,1,1).p("AgwBwQCegmhii5");
	this.shape_34.setTransform(22.6,6.3);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f().s("#000000").ss(5,1,1).p("AgcBwQBtgmhhi5");
	this.shape_35.setTransform(25.5,6.3);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f().s("#000000").ss(5,1,1).p("AAJB5QA6g4hhi5");
	this.shape_36.setTransform(26.9,7.2);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_15}]}).to({state:[{t:this.shape_16}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_18}]},1).to({state:[{t:this.shape_19}]},1).to({state:[{t:this.shape_20}]},1).to({state:[{t:this.shape_21}]},1).to({state:[{t:this.shape_22}]},1).to({state:[{t:this.shape_23}]},1).to({state:[{t:this.shape_24}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_26}]},1).to({state:[{t:this.shape_27}]},1).to({state:[{t:this.shape_28}]},1).to({state:[{t:this.shape_29}]},1).to({state:[{t:this.shape_30}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_30}]},1).to({state:[{t:this.shape_29}]},1).to({state:[{t:this.shape_30}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_30}]},1).to({state:[{t:this.shape_29}]},1).to({state:[{t:this.shape_32}]},1).to({state:[{t:this.shape_33}]},1).to({state:[{t:this.shape_34}]},1).to({state:[{t:this.shape_35}]},1).to({state:[{t:this.shape_36}]},1).to({state:[{t:this.shape_15}]},1).wait(1));

	// Body
	this.instance_7 = new lib.Tween3("synched",0);
	this.instance_7.parent = this;
	this.instance_7.setTransform(-0.3,-10.7);

	this.timeline.addTween(cjs.Tween.get(this.instance_7).to({y:-13.7},14).to({y:-13.3},2).to({y:-10.7},12).wait(1));

	// Legs
	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f().s("#000000").ss(5,1,1).p("ABGitIAAFbAhFitIAAFb");
	this.shape_37.setTransform(-0.3,29.1);

	this.timeline.addTween(cjs.Tween.get(this.shape_37).wait(29));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-65.9,-38.2,102.6,87.3);


(lib.Blob6 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Bucket
	this.instance = new lib.Tween4("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(30,28.6,1,1,0,-15,165);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({skewX:7.7,skewY:187.7,x:13.6,y:31.2},3).to({skewX:0,skewY:180,x:9.3,y:33.6},2).to({skewX:8.2,skewY:188.2,x:-5.9,y:30.4},3).to({skewX:-7.5,skewY:172.5,x:-16.5,y:26.4},4).to({skewX:15,skewY:195,x:-38.9,y:20.9},4).to({skewX:0,skewY:180,x:-46.5,y:19.6},3).to({_off:true},1).wait(9));

	// Layer 3
	this.instance_1 = new lib.Tween6("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(7.3,25.4);
	this.instance_1._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(5).to({_off:false},0).to({x:-16.7,y:15.4},3).to({scaleX:0.23,scaleY:0.23,skewX:-105,skewY:75,x:-28.2,y:27.4},2).to({_off:true},1).wait(18));

	// Bucket Handle
	this.instance_2 = new lib.Tween1("synched",0);
	this.instance_2.parent = this;
	this.instance_2.setTransform(27.8,20.3,1,1,0,-15,165);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).to({skewX:7.7,skewY:187.7,x:14.8,y:22.7},3).to({skewX:0,skewY:180,x:9.3,y:25},2).to({skewX:8.2,skewY:188.2,x:-4.7,y:21.9},3).to({skewX:-7.5,skewY:172.5,x:-17.6,y:17.8},4).to({skewX:15,skewY:195,x:-36.7,y:12.6},4).to({skewX:0,skewY:180,x:-46.5,y:11},3).to({_off:true},1).wait(9));

	// Drop 1
	this.instance_3 = new lib.Tween6("synched",0);
	this.instance_3.parent = this;
	this.instance_3.setTransform(19.3,23.4,1,1,0,0,180);
	this.instance_3._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(4).to({_off:false},0).to({skewX:30,skewY:210,x:17.3,y:18.2},3).to({regX:-0.1,regY:-0.1,scaleX:0.45,scaleY:0.45,skewX:105,skewY:285,x:15.6,y:34.3},3).to({_off:true},1).wait(18));

	// Drop 1
	this.instance_4 = new lib.Tween6("synched",0);
	this.instance_4.parent = this;
	this.instance_4.setTransform(45.3,12.2,1,1,0,30,-150);

	this.timeline.addTween(cjs.Tween.get(this.instance_4).to({regX:-0.1,regY:-0.1,scaleX:0.45,scaleY:0.45,skewX:105,skewY:-75,x:55.9,y:19.5},3).to({_off:true},1).wait(25));

	// Left Hand
	this.instance_5 = new lib.Tween30("synched",0);
	this.instance_5.parent = this;
	this.instance_5.setTransform(32.2,9.9,0.594,0.594,0,0,0,0.1,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_5).to({regX:0,x:9,y:15.8},5).to({x:63.3,y:2.3},14).to({_off:true},1).wait(9));

	// Right Hand
	this.instance_6 = new lib.Tween30("synched",0);
	this.instance_6.parent = this;
	this.instance_6.setTransform(-15,9.9,0.594,0.594,0,0,180,0.1,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_6).to({x:8.7,y:15.8},5).to({x:-46.7,y:2.3},14).to({_off:true},1).wait(9));

	// Left Arm
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#000000").ss(5,1,1).p("AgIhWQCcCwjOgD");
	this.shape.setTransform(34.1,2.3);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f().s("#000000").ss(5,1,1).p("AAIhZQCkDAj1gP");
	this.shape_1.setTransform(32.5,2.6);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#000000").ss(5,1,1).p("AhUBeQEJAGiWjB");
	this.shape_2.setTransform(30.2,3);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f().s("#000000").ss(5,1,1).p("AhfBkQEbgEiHjD");
	this.shape_3.setTransform(27.9,3.6);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f().s("#000000").ss(5,1,1).p("AhsBpQEvgMh4jF");
	this.shape_4.setTransform(25.8,4.1);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f().s("#000000").ss(5,1,1).p("ABghtQBqDGlDAV");
	this.shape_5.setTransform(23.6,4.6);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f().s("#000000").ss(5,1,1).p("AgeheQB1DRhqgW");
	this.shape_6.setTransform(36.3,1.4);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f().s("#000000").ss(5,1,1).p("AgfhZQBnDQhAgh");
	this.shape_7.setTransform(36.3,1.4);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f().s("#000000").ss(5,1,1).p("AAhBPQAUAshZjQ");
	this.shape_8.setTransform(36.6,1.4);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f().s("#000000").ss(5,1,1).p("Ag2hKQBdDEAPg+");
	this.shape_9.setTransform(38,1.5);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f().s("#000000").ss(5,1,1).p("ABLAoQgzBRhii5");
	this.shape_10.setTransform(39.5,1.6);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f().s("#000000").ss(5,1,1).p("Aheg+QBhC5BchZ");
	this.shape_11.setTransform(41.5,1.4);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f().s("#000000").ss(5,1,1).p("Ahyg8QBiC5CDhi");
	this.shape_12.setTransform(43.5,1.2);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f().s("#000000").ss(5,1,1).p("AiGg6QBiC5Crhq");
	this.shape_13.setTransform(45.6,1);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f().s("#000000").ss(5,1,1).p("ACbAOQjTByhii5");
	this.shape_14.setTransform(47.6,0.9);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape}]}).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_2}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_5}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_2}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_9}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_12}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_14}]},1).to({state:[]},1).wait(9));

	// Right Arm
	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f().s("#000000").ss(5,1,1).p("AAGhhQguDxA3g4");
	this.shape_15.setTransform(-15.3,1.5);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f().s("#000000").ss(5,1,1).p("AgRhhQg6DlBxgo");
	this.shape_16.setTransform(-13,2.2);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f().s("#000000").ss(5,1,1).p("AgphiQhEDbCqgZ");
	this.shape_17.setTransform(-10.8,2.9);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f().s("#000000").ss(5,1,1).p("AhAhiQhODPDjgK");
	this.shape_18.setTransform(-8.6,3.6);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f().s("#000000").ss(5,1,1).p("AhXhkQhYDEEcAF");
	this.shape_19.setTransform(-6.5,4.5);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f().s("#000000").ss(5,1,1).p("ACFBnQlVgUBii5");
	this.shape_20.setTransform(-4.4,5.4);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f().s("#000000").ss(5,1,1).p("AhbhlQhaDDEmAI");
	this.shape_21.setTransform(-6.1,4.7);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f().s("#000000").ss(5,1,1).p("AhIhjQhRDLD2gE");
	this.shape_22.setTransform(-7.9,4);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f().s("#000000").ss(5,1,1).p("Ag0hiQhJDVDGgR");
	this.shape_23.setTransform(-9.7,3.3);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f().s("#000000").ss(5,1,1).p("AghhhQhADeCWge");
	this.shape_24.setTransform(-11.5,2.6);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f().s("#000000").ss(5,1,1).p("AgNhhQg4DnBngr");
	this.shape_25.setTransform(-13.4,2.1);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f().s("#000000").ss(5,1,1).p("AALADQgnCVAhjX");
	this.shape_26.setTransform(-15.5,1);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f().s("#000000").ss(5,1,1).p("AAihXQgWDxgtha");
	this.shape_27.setTransform(-18.5,1.1);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f().s("#000000").ss(5,1,1).p("Ag2A4QAsBTBBjZ");
	this.shape_28.setTransform(-20.3,1.2);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f().s("#000000").ss(5,1,1).p("ABMhEQhsDAgrhN");
	this.shape_29.setTransform(-22,1.3);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f().s("#000000").ss(5,1,1).p("AhfAnQBVBWBqi+");
	this.shape_30.setTransform(-24.2,1.2);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f().s("#000000").ss(5,1,1).p("AhyAfQB+BfBoi8");
	this.shape_31.setTransform(-26.5,1.1);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f().s("#000000").ss(5,1,1).p("AiGAWQCoBpBmi6");
	this.shape_32.setTransform(-28.7,1);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f().s("#000000").ss(5,1,1).p("AiaAOQDTByBii5");
	this.shape_33.setTransform(-31,0.9);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_15}]}).to({state:[{t:this.shape_16}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_18}]},1).to({state:[{t:this.shape_19}]},1).to({state:[{t:this.shape_20}]},1).to({state:[{t:this.shape_21}]},1).to({state:[{t:this.shape_22}]},1).to({state:[{t:this.shape_23}]},1).to({state:[{t:this.shape_24}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_26}]},1).to({state:[{t:this.shape_27}]},1).to({state:[{t:this.shape_28}]},1).to({state:[{t:this.shape_29}]},1).to({state:[{t:this.shape_30}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_32}]},1).to({state:[{t:this.shape_33}]},1).to({state:[]},1).wait(9));

	// Body
	this.instance_7 = new lib.Tween3("synched",0);
	this.instance_7.parent = this;
	this.instance_7.setTransform(8.6,-10.7,1,1,0,0,180);

	this.timeline.addTween(cjs.Tween.get(this.instance_7).to({y:-13.7},5).to({y:-10.7},14).to({_off:true},1).wait(9));

	// Legs
	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f().s("#000000").ss(5,1,1).p("ABGitIAAFbAhFitIAAFb");
	this.shape_34.setTransform(8.6,29.1);

	this.timeline.addTween(cjs.Tween.get(this.shape_34).to({_off:true},20).wait(9));

	// Bucket
	this.instance_8 = new lib.Tween4("synched",0);
	this.instance_8.parent = this;
	this.instance_8.setTransform(63.6,20.1,1,1,0,0,180);
	this.instance_8._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_8).wait(20).to({_off:false},0).to({skewX:-8.7,skewY:171.3,x:53.9,y:22.9},3).to({skewX:8.2,skewY:188.2,x:38.2,y:25.8},3).to({skewX:-7.3,skewY:172.7,x:32.8,y:27.7},2).wait(1));

	// Bucket Handle
	this.instance_9 = new lib.Tween1("synched",0);
	this.instance_9.parent = this;
	this.instance_9.setTransform(63.6,11.5,1,1,0,0,180);
	this.instance_9._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_9).wait(20).to({_off:false},0).to({skewX:-8.7,skewY:171.3,x:52.6,y:14.4},3).to({skewX:8.2,skewY:188.2,x:39.4,y:17.3},3).to({skewX:-7.3,skewY:172.7,x:31.7,y:19.4},2).wait(1));

	// Drop 1
	this.instance_10 = new lib.Tween6("synched",0);
	this.instance_10.parent = this;
	this.instance_10.setTransform(43.3,19.4,1,1,0,0,180);
	this.instance_10._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_10).wait(26).to({_off:false},0).to({scaleX:1,scaleY:1,skewX:19.8,skewY:199.8,x:44.6,y:14.6},2).wait(1));

	// Left Hand
	this.instance_11 = new lib.Tween30("synched",0);
	this.instance_11.parent = this;
	this.instance_11.setTransform(63.3,2.3,0.594,0.594,0,0,0,0,0.1);
	this.instance_11._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_11).wait(20).to({_off:false},0).to({regX:0.1,x:32.2,y:9.9},8).wait(1));

	// Right Hand
	this.instance_12 = new lib.Tween30("synched",0);
	this.instance_12.parent = this;
	this.instance_12.setTransform(-46.7,2.3,0.594,0.594,0,0,180,0.1,0.1);
	this.instance_12._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_12).wait(20).to({_off:false},0).to({x:-15,y:9.9},8).wait(1));

	// Left Arm
	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f().s("#000000").ss(5,1,1).p("ACbAOQjTByhii5");
	this.shape_35.setTransform(47.6,0.9);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f().s("#000000").ss(5,1,1).p("AiGg6QBiC5Crhq");
	this.shape_36.setTransform(45.6,1);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f().s("#000000").ss(5,1,1).p("Ahyg8QBiC5CDhi");
	this.shape_37.setTransform(43.5,1.2);

	this.shape_38 = new cjs.Shape();
	this.shape_38.graphics.f().s("#000000").ss(5,1,1).p("Aheg+QBhC5BchZ");
	this.shape_38.setTransform(41.5,1.4);

	this.shape_39 = new cjs.Shape();
	this.shape_39.graphics.f().s("#000000").ss(5,1,1).p("ABLAoQgzBRhii5");
	this.shape_39.setTransform(39.5,1.6);

	this.shape_40 = new cjs.Shape();
	this.shape_40.graphics.f().s("#000000").ss(5,1,1).p("Ag2hKQBdDEAPg+");
	this.shape_40.setTransform(38,1.5);

	this.shape_41 = new cjs.Shape();
	this.shape_41.graphics.f().s("#000000").ss(5,1,1).p("AAhBPQAUAshZjQ");
	this.shape_41.setTransform(36.6,1.4);

	this.shape_42 = new cjs.Shape();
	this.shape_42.graphics.f().s("#000000").ss(5,1,1).p("AgfhZQBnDQhAgh");
	this.shape_42.setTransform(36.3,1.4);

	this.shape_43 = new cjs.Shape();
	this.shape_43.graphics.f().s("#000000").ss(5,1,1).p("AgeheQB1DRhqgW");
	this.shape_43.setTransform(36.3,1.4);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.shape_35}]},20).to({state:[{t:this.shape_36}]},1).to({state:[{t:this.shape_37}]},1).to({state:[{t:this.shape_38}]},1).to({state:[{t:this.shape_39}]},1).to({state:[{t:this.shape_40}]},1).to({state:[{t:this.shape_41}]},1).to({state:[{t:this.shape_42}]},1).to({state:[{t:this.shape_43}]},1).wait(1));

	// Right Arm
	this.shape_44 = new cjs.Shape();
	this.shape_44.graphics.f().s("#000000").ss(5,1,1).p("AiaAOQDTByBii5");
	this.shape_44.setTransform(-31,0.9);

	this.shape_45 = new cjs.Shape();
	this.shape_45.graphics.f().s("#000000").ss(5,1,1).p("AiGAWQCoBpBmi6");
	this.shape_45.setTransform(-28.7,1);

	this.shape_46 = new cjs.Shape();
	this.shape_46.graphics.f().s("#000000").ss(5,1,1).p("AhyAfQB+BfBoi8");
	this.shape_46.setTransform(-26.5,1.1);

	this.shape_47 = new cjs.Shape();
	this.shape_47.graphics.f().s("#000000").ss(5,1,1).p("AhfAnQBVBWBqi+");
	this.shape_47.setTransform(-24.2,1.2);

	this.shape_48 = new cjs.Shape();
	this.shape_48.graphics.f().s("#000000").ss(5,1,1).p("ABMhEQhsDAgrhN");
	this.shape_48.setTransform(-22,1.3);

	this.shape_49 = new cjs.Shape();
	this.shape_49.graphics.f().s("#000000").ss(5,1,1).p("Ag2A4QAsBTBBjZ");
	this.shape_49.setTransform(-20.3,1.2);

	this.shape_50 = new cjs.Shape();
	this.shape_50.graphics.f().s("#000000").ss(5,1,1).p("AAihXQgWDxgtha");
	this.shape_50.setTransform(-18.5,1.1);

	this.shape_51 = new cjs.Shape();
	this.shape_51.graphics.f().s("#000000").ss(5,1,1).p("AALADQgnCVAhjX");
	this.shape_51.setTransform(-15.5,1);

	this.shape_52 = new cjs.Shape();
	this.shape_52.graphics.f().s("#000000").ss(5,1,1).p("AAGhhQguDxA3g4");
	this.shape_52.setTransform(-15.3,1.5);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.shape_44}]},20).to({state:[{t:this.shape_45}]},1).to({state:[{t:this.shape_46}]},1).to({state:[{t:this.shape_47}]},1).to({state:[{t:this.shape_48}]},1).to({state:[{t:this.shape_49}]},1).to({state:[{t:this.shape_50}]},1).to({state:[{t:this.shape_51}]},1).to({state:[{t:this.shape_52}]},1).wait(1));

	// Body
	this.instance_13 = new lib.Tween3("synched",0);
	this.instance_13.parent = this;
	this.instance_13.setTransform(8.6,-10.7,1,1,0,0,180);
	this.instance_13._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_13).wait(20).to({_off:false},0).to({y:-12.4},8).wait(1));

	// Legs
	this.shape_53 = new cjs.Shape();
	this.shape_53.graphics.f().s("#000000").ss(5,1,1).p("ABGitIAAFbAhFitIAAFb");
	this.shape_53.setTransform(8.6,29.1);

	this.shape_54 = new cjs.Shape();
	this.shape_54.graphics.f().s("#000000").ss(5,1,1).p("AhFitIAAFbABGitIAAFb");
	this.shape_54.setTransform(8.6,29.1);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.shape_53}]},20).to({state:[{t:this.shape_54}]},8).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-19.9,-38.2,68.4,87.3);


(lib.Blob5 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Bucket
	this.instance = new lib.Tween4("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(-69.3,-28.4,1,1,0,0,180);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({x:-43.9,y:-61.9},12).to({x:-80.5,y:-77.2},8).to({_off:true},1).wait(8));

	// Bucket Handle
	this.instance_1 = new lib.Tween1("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(-69.3,-37,1,1,0,0,180);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({x:-43.9,y:-70.5},12).to({x:-80.5,y:-85.8},8).to({_off:true},1).wait(8));

	// Body
	this.instance_2 = new lib.Tween3("synched",0);
	this.instance_2.parent = this;
	this.instance_2.setTransform(-32,-93.7,1,1,0,-30,150);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).to({skewX:0,skewY:180,x:-14.2,y:-108.3},17).to({startPosition:0},3).to({skewX:-30,skewY:150,x:-32,y:-93.7},8).wait(1));

	// Left Hand
	this.instance_3 = new lib.Tween30("synched",0);
	this.instance_3.parent = this;
	this.instance_3.setTransform(18.1,-123.3,0.594,0.594,0,0,0,0,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(29));

	// Right Hand
	this.instance_4 = new lib.Tween30("synched",0);
	this.instance_4.parent = this;
	this.instance_4.setTransform(-69.5,-47.3,0.594,0.594,0,0,180,0.1,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_4).to({x:-44.7,y:-79.3},12).to({x:-65.5,y:-92.9},5).to({x:-80.7,y:-95.3},3).to({x:-69.5,y:-47.3},8).wait(1));

	// Left Arm
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#000000").ss(5,1,1).p("ACkhgQhsDUjbgV");
	this.shape.setTransform(1.7,-113.6);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f().s("#000000").ss(5,1,1).p("AijBdQDuAoBZjn");
	this.shape_1.setTransform(1.7,-113.4);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#000000").ss(5,1,1).p("AijBbQECA6BFj6");
	this.shape_2.setTransform(1.7,-113.2);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f().s("#000000").ss(5,1,1).p("AijBYQEVBNAykN");
	this.shape_3.setTransform(1.7,-112.9);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f().s("#000000").ss(5,1,1).p("AijBUQEnBgAgkf");
	this.shape_4.setTransform(1.7,-112.5);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f().s("#000000").ss(5,1,1).p("AijBRQE6BzANkz");
	this.shape_5.setTransform(1.7,-112.2);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f().s("#000000").ss(5,1,1).p("AijBNQFNCGgGlG");
	this.shape_6.setTransform(1.7,-111.8);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f().s("#000000").ss(5,1,1).p("AikBJQFgCZgZlZ");
	this.shape_7.setTransform(1.7,-111.4);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f().s("#000000").ss(5,1,1).p("AilBFQFzCsgsls");
	this.shape_8.setTransform(1.9,-111);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f().s("#000000").ss(5,1,1).p("AinBAQGGC/g/l+");
	this.shape_9.setTransform(2.1,-110.5);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f().s("#000000").ss(5,1,1).p("AiqA8QGZDShSmR");
	this.shape_10.setTransform(2.3,-110.1);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f().s("#000000").ss(5,1,1).p("AitA4QGsDlhlmk");
	this.shape_11.setTransform(2.6,-109.7);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f().s("#000000").ss(5,1,1).p("ACXiMQB4G3m/j3");
	this.shape_12.setTransform(2.9,-109.3);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f().s("#000000").ss(5,1,1).p("AiwA0QG/D3h4m3");
	this.shape_13.setTransform(2.9,-109.3);
	this.shape_13._off = true;

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f().s("#000000").ss(5,1,1).p("AirA6QGiDbhbma");
	this.shape_14.setTransform(2.5,-109.9);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f().s("#000000").ss(5,1,1).p("AikBHQFpCigili");
	this.shape_15.setTransform(1.8,-111.2);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f().s("#000000").ss(5,1,1).p("AijBSQExBqAWkp");
	this.shape_16.setTransform(1.7,-112.3);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f().s("#000000").ss(5,1,1).p("AijBcQD4AxBPjw");
	this.shape_17.setTransform(1.7,-113.3);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape}]}).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_2}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_5}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_9}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_12}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_12}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_9}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_16}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape}]},1).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.shape_13).wait(13).to({_off:false},0).wait(6).to({_off:true},1).wait(9));

	// Right Arm
	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f().s("#000000").ss(5,1,1).p("AiTCwIEnlf");
	this.shape_18.setTransform(-54.7,-64.9);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f().s("#000000").ss(5,1,1).p("AiMCmQCXiQCCi7");
	this.shape_19.setTransform(-53.3,-66.6);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f().s("#000000").ss(5,1,1).p("AiFCcQCahvBxjI");
	this.shape_20.setTransform(-51.9,-68.3);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f().s("#000000").ss(5,1,1).p("Ah+CTQCehQBfjV");
	this.shape_21.setTransform(-50.6,-70);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f().s("#000000").ss(5,1,1).p("Ah3CJQCjgwBMjh");
	this.shape_22.setTransform(-49.2,-71.7);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f().s("#000000").ss(5,1,1).p("AhwB/QCmgQA7jt");
	this.shape_23.setTransform(-47.8,-73.4);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f().s("#000000").ss(5,1,1).p("AhpB1QCqAQApj6");
	this.shape_24.setTransform(-46.5,-75.1);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f().s("#000000").ss(5,1,1).p("AhiBpQCuAvAXkH");
	this.shape_25.setTransform(-45.1,-76.5);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f().s("#000000").ss(5,1,1).p("AhbBZQCyBQAFkT");
	this.shape_26.setTransform(-43.7,-77.6);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f().s("#000000").ss(5,1,1).p("AhUBJQC2BvgNkf");
	this.shape_27.setTransform(-42.4,-78.7);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f().s("#000000").ss(5,1,1).p("AhPA4QC6CPgfks");
	this.shape_28.setTransform(-40.8,-79.6);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f().s("#000000").ss(5,1,1).p("AhLAmQC+Cvgxk5");
	this.shape_29.setTransform(-39.2,-80.5);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f().s("#000000").ss(5,1,1).p("AhHAUQDBDOhClF");
	this.shape_30.setTransform(-37.5,-81.3);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f().s("#000000").ss(5,1,1).p("AhUALQC4CwgQkL");
	this.shape_31.setTransform(-40.3,-83.2);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f().s("#000000").ss(5,1,1).p("AhoADQCuCSAkjS");
	this.shape_32.setTransform(-42.4,-85.1);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f().s("#000000").ss(5,1,1).p("Ah+gFQCmBzBWiZ");
	this.shape_33.setTransform(-44.5,-86.9);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f().s("#000000").ss(5,1,1).p("AiSgOQCcBVCJhg");
	this.shape_34.setTransform(-46.6,-88.7);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f().s("#000000").ss(5,1,1).p("AingPQCTA2C8gn");
	this.shape_35.setTransform(-48.7,-91.3);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f().s("#000000").ss(5,1,1).p("AjAgTQDFA/C8gn");
	this.shape_36.setTransform(-51.2,-91.8);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f().s("#000000").ss(5,1,1).p("AjagWQD4BGC9gn");
	this.shape_37.setTransform(-53.8,-92.2);

	this.shape_38 = new cjs.Shape();
	this.shape_38.graphics.f().s("#000000").ss(5,1,1).p("AjzgaQEqBPC9gn");
	this.shape_38.setTransform(-56.3,-92.7);

	this.shape_39 = new cjs.Shape();
	this.shape_39.graphics.f().s("#000000").ss(5,1,1).p("AjngGQEXAvC4g3");
	this.shape_39.setTransform(-56.1,-88.7);

	this.shape_40 = new cjs.Shape();
	this.shape_40.graphics.f().s("#000000").ss(5,1,1).p("AjbAbQEFAQCyhI");
	this.shape_40.setTransform(-55.9,-86.1);

	this.shape_41 = new cjs.Shape();
	this.shape_41.graphics.f().s("#000000").ss(5,1,1).p("AjPA1QDygQCthZ");
	this.shape_41.setTransform(-55.7,-82.7);

	this.shape_42 = new cjs.Shape();
	this.shape_42.graphics.f().s("#000000").ss(5,1,1).p("AjDBOQDfgwCohr");
	this.shape_42.setTransform(-55.5,-79.1);

	this.shape_43 = new cjs.Shape();
	this.shape_43.graphics.f().s("#000000").ss(5,1,1).p("Ai3BmQDMhQCjh7");
	this.shape_43.setTransform(-55.3,-75.6);

	this.shape_44 = new cjs.Shape();
	this.shape_44.graphics.f().s("#000000").ss(5,1,1).p("AirB/QC5hwCeiN");
	this.shape_44.setTransform(-55.1,-72);

	this.shape_45 = new cjs.Shape();
	this.shape_45.graphics.f().s("#000000").ss(5,1,1).p("AifCXQCmiPCZie");
	this.shape_45.setTransform(-54.9,-68.5);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_18}]}).to({state:[{t:this.shape_19}]},1).to({state:[{t:this.shape_20}]},1).to({state:[{t:this.shape_21}]},1).to({state:[{t:this.shape_22}]},1).to({state:[{t:this.shape_23}]},1).to({state:[{t:this.shape_24}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_26}]},1).to({state:[{t:this.shape_27}]},1).to({state:[{t:this.shape_28}]},1).to({state:[{t:this.shape_29}]},1).to({state:[{t:this.shape_30}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_32}]},1).to({state:[{t:this.shape_33}]},1).to({state:[{t:this.shape_34}]},1).to({state:[{t:this.shape_35}]},1).to({state:[{t:this.shape_36}]},1).to({state:[{t:this.shape_37}]},1).to({state:[{t:this.shape_38}]},1).to({state:[{t:this.shape_39}]},1).to({state:[{t:this.shape_40}]},1).to({state:[{t:this.shape_41}]},1).to({state:[{t:this.shape_42}]},1).to({state:[{t:this.shape_43}]},1).to({state:[{t:this.shape_44}]},1).to({state:[{t:this.shape_45}]},1).to({state:[{t:this.shape_18}]},1).wait(1));

	// Layer 2
	this.shape_46 = new cjs.Shape();
	this.shape_46.graphics.f().s("#000000").ss(5,1,1).p("AAAh0QhJB2BoBz");
	this.shape_46.setTransform(-24.3,-61.2);

	this.shape_47 = new cjs.Shape();
	this.shape_47.graphics.f().s("#000000").ss(5,1,1).p("AgBh2QhHB6BnBz");
	this.shape_47.setTransform(-24.3,-61.4);

	this.shape_48 = new cjs.Shape();
	this.shape_48.graphics.f().s("#000000").ss(5,1,1).p("AgCh3QhGB8BnBz");
	this.shape_48.setTransform(-24.3,-61.5);

	this.shape_49 = new cjs.Shape();
	this.shape_49.graphics.f().s("#000000").ss(5,1,1).p("AgDh5QhFCABnBz");
	this.shape_49.setTransform(-24.3,-61.7);

	this.shape_50 = new cjs.Shape();
	this.shape_50.graphics.f().s("#000000").ss(5,1,1).p("AgDh7QhFCEBoBz");
	this.shape_50.setTransform(-24.4,-61.9);

	this.shape_51 = new cjs.Shape();
	this.shape_51.graphics.f().s("#000000").ss(5,1,1).p("AAYh8QhlCGBnBz");
	this.shape_51.setTransform(-23.8,-62);

	this.shape_52 = new cjs.Shape();
	this.shape_52.graphics.f().s("#000000").ss(5,1,1).p("AARiAQhdCOBnBz");
	this.shape_52.setTransform(-23.9,-62.3);

	this.shape_53 = new cjs.Shape();
	this.shape_53.graphics.f().s("#000000").ss(5,1,1).p("AALiDQhWCUBoBz");
	this.shape_53.setTransform(-24.1,-62.7);

	this.shape_54 = new cjs.Shape();
	this.shape_54.graphics.f().s("#000000").ss(5,1,1).p("AALiUQhWC2BoBz");
	this.shape_54.setTransform(-24.1,-64.4);
	this.shape_54._off = true;

	this.shape_55 = new cjs.Shape();
	this.shape_55.graphics.f().s("#000000").ss(5,1,1).p("AAiiwQh7DuBnBz");
	this.shape_55.setTransform(-22.6,-67.2);
	this.shape_55._off = true;

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_46}]}).to({state:[{t:this.shape_47}]},1).to({state:[{t:this.shape_48}]},1).to({state:[{t:this.shape_49}]},1).to({state:[{t:this.shape_50}]},1).to({state:[{t:this.shape_51}]},1).to({state:[{t:this.shape_52}]},1).to({state:[{t:this.shape_53}]},1).to({state:[{t:this.shape_54}]},1).to({state:[{t:this.shape_54}]},1).to({state:[{t:this.shape_54}]},1).to({state:[{t:this.shape_54}]},1).to({state:[{t:this.shape_55}]},1).to({state:[{t:this.shape_55}]},1).to({state:[{t:this.shape_55}]},1).to({state:[{t:this.shape_55}]},1).to({state:[{t:this.shape_55}]},1).to({state:[{t:this.shape_55}]},1).to({state:[{t:this.shape_55}]},1).to({state:[{t:this.shape_55}]},1).to({state:[{t:this.shape_55}]},1).to({state:[{t:this.shape_55}]},1).to({state:[{t:this.shape_55}]},1).to({state:[{t:this.shape_55}]},1).to({state:[{t:this.shape_55}]},1).to({state:[{t:this.shape_55}]},1).to({state:[{t:this.shape_55}]},1).to({state:[{t:this.shape_55}]},1).to({state:[{t:this.shape_55}]},1).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.shape_54).wait(8).to({_off:false},0).wait(3).to({_off:true},1).wait(17));
	this.timeline.addTween(cjs.Tween.get(this.shape_55).wait(12).to({_off:false},0).wait(17));

	// Legs
	this.shape_56 = new cjs.Shape();
	this.shape_56.graphics.f().s("#000000").ss(5,1,1).p("Ahri4QDXENAABk");
	this.shape_56.setTransform(-7.6,-68);

	this.shape_57 = new cjs.Shape();
	this.shape_57.graphics.f().s("#000000").ss(5,1,1).p("Ahni5QDPEPAABk");
	this.shape_57.setTransform(-7.2,-68.1);

	this.shape_58 = new cjs.Shape();
	this.shape_58.graphics.f().s("#000000").ss(5,1,1).p("Ahii6QDGEQgBBl");
	this.shape_58.setTransform(-6.8,-68.1);

	this.shape_59 = new cjs.Shape();
	this.shape_59.graphics.f().s("#000000").ss(5,1,1).p("Ahei7QC9ESAABl");
	this.shape_59.setTransform(-6.3,-68.2);

	this.shape_60 = new cjs.Shape();
	this.shape_60.graphics.f().s("#000000").ss(5,1,1).p("Ahai7QC1ETAABk");
	this.shape_60.setTransform(-5.9,-68.3);

	this.shape_61 = new cjs.Shape();
	this.shape_61.graphics.f().s("#000000").ss(5,1,1).p("AhVi8QCsEUgBBl");
	this.shape_61.setTransform(-5.5,-68.3);

	this.shape_62 = new cjs.Shape();
	this.shape_62.graphics.f().s("#000000").ss(5,1,1).p("AhRi8QCjEVAABl");
	this.shape_62.setTransform(-5,-68.4);

	this.shape_63 = new cjs.Shape();
	this.shape_63.graphics.f().s("#000000").ss(5,1,1).p("AhNi9QCbEXAABk");
	this.shape_63.setTransform(-4.6,-68.5);

	this.shape_64 = new cjs.Shape();
	this.shape_64.graphics.f().s("#000000").ss(5,1,1).p("AhIi+QCSEYgBBl");
	this.shape_64.setTransform(-4.2,-68.5);

	this.shape_65 = new cjs.Shape();
	this.shape_65.graphics.f().s("#000000").ss(5,1,1).p("AhEi/QCJEaAABk");
	this.shape_65.setTransform(-3.7,-68.6);

	this.shape_66 = new cjs.Shape();
	this.shape_66.graphics.f().s("#000000").ss(5,1,1).p("AhAi/QCBEbAABk");
	this.shape_66.setTransform(-3.3,-68.7);

	this.shape_67 = new cjs.Shape();
	this.shape_67.graphics.f().s("#000000").ss(5,1,1).p("Ag7jAQB4EcgBBl");
	this.shape_67.setTransform(-2.9,-68.7);

	this.shape_68 = new cjs.Shape();
	this.shape_68.graphics.f().s("#000000").ss(5,1,1).p("Ag3jAQBvEdAABl");
	this.shape_68.setTransform(-2.4,-68.8);
	this.shape_68._off = true;

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_56}]}).to({state:[{t:this.shape_57}]},1).to({state:[{t:this.shape_58}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_61}]},1).to({state:[{t:this.shape_62}]},1).to({state:[{t:this.shape_63}]},1).to({state:[{t:this.shape_64}]},1).to({state:[{t:this.shape_65}]},1).to({state:[{t:this.shape_66}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_68}]},1).to({state:[{t:this.shape_68}]},1).to({state:[{t:this.shape_68}]},1).to({state:[{t:this.shape_68}]},1).to({state:[{t:this.shape_68}]},1).to({state:[{t:this.shape_68}]},1).to({state:[{t:this.shape_68}]},1).to({state:[{t:this.shape_68}]},1).to({state:[{t:this.shape_68}]},1).to({state:[{t:this.shape_68}]},1).to({state:[{t:this.shape_68}]},1).to({state:[{t:this.shape_68}]},1).to({state:[{t:this.shape_68}]},1).to({state:[{t:this.shape_68}]},1).to({state:[{t:this.shape_68}]},1).to({state:[{t:this.shape_68}]},1).to({state:[{t:this.shape_68}]},1).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.shape_68).wait(12).to({_off:false},0).wait(17));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-80,-128.4,103.1,108.5);


(lib.Blob4 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Bucket
	this.instance = new lib.Tween4("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(-54.7,-77.2);
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(13).to({_off:false},0).to({x:-109.9,y:-60},7).to({x:-165.2,y:-134.8},6).to({rotation:15,x:-181.3,y:-134.9},1).to({rotation:0,x:-194,y:-134.8},1).wait(1));

	// Bucket Handle
	this.instance_1 = new lib.Tween1("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(-54.7,-85.8);
	this.instance_1._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(13).to({_off:false},0).to({x:-109.9,y:-68.6},7).to({x:-165.2,y:-143.4},6).to({rotation:15,x:-179.1,y:-143.2},1).to({rotation:0,x:-194,y:-143.4},1).wait(1));

	// Layer 3
	this.instance_2 = new lib.Tween6("synched",0);
	this.instance_2.parent = this;
	this.instance_2.setTransform(-141.1,-101.9,1,1,-75);
	this.instance_2._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(23).to({_off:false},0).to({x:-177.5,y:-135.1},2).to({regY:-0.1,scaleX:0.44,x:-185.1,y:-129},1).to({_off:true},1).wait(2));

	// Left Hand
	this.instance_3 = new lib.Tween30("synched",0);
	this.instance_3.parent = this;
	this.instance_3.setTransform(-165.2,-152.1,0.594,0.594,0,0,180,0,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).to({x:-110,y:-77.3},20).to({x:-165.2,y:-152.1},6).wait(3));

	// Right Hand
	this.instance_4 = new lib.Tween30("synched",0);
	this.instance_4.parent = this;
	this.instance_4.setTransform(-55,-96.5,0.594,0.594,0,0,0,0.1,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_4).to({startPosition:0},13).to({regX:0,regY:0,x:-109.8,y:-78.5},7).to({regX:0.1,regY:0.1,x:-55,y:-96.5},6).wait(3));

	// Left Arm
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#000000").ss(5,1,1).p("AiiitQDIFYB9AD");
	this.shape.setTransform(-148.9,-134.7);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f().s("#000000").ss(5,1,1).p("AiYijQCbFLCWgE");
	this.shape_1.setTransform(-147,-132);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#000000").ss(5,1,1).p("AiPiZQBvE+CwgL");
	this.shape_2.setTransform(-145.1,-129.2);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f().s("#000000").ss(5,1,1).p("AiFiPQBCExDJgT");
	this.shape_3.setTransform(-143.2,-126.5);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f().s("#000000").ss(5,1,1).p("Ah8iGQAVElDkgb");
	this.shape_4.setTransform(-141.4,-123.7);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f().s("#000000").ss(5,1,1).p("Ahxh8QgYEYD9gi");
	this.shape_5.setTransform(-139.6,-120.9);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f().s("#000000").ss(5,1,1).p("ABwBuQkWAqBEkL");
	this.shape_6.setTransform(-138.3,-118);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f().s("#000000").ss(5,1,1).p("AA6AgQiTDkApl5");
	this.shape_7.setTransform(-142.1,-114.7);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f().s("#000000").ss(5,1,1).p("ABEAcQi7DTBIlZ");
	this.shape_8.setTransform(-138.3,-112.1);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f().s("#000000").ss(5,1,1).p("AgYhcQhVE6Cjja");
	this.shape_9.setTransform(-138.5,-109.9);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f().s("#000000").ss(5,1,1).p("AApgUQiMDgBjka");
	this.shape_10.setTransform(-138.8,-107.7);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f().s("#000000").ss(5,1,1).p("AgKhQQhmESCijA");
	this.shape_11.setTransform(-136.6,-106);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f().s("#000000").ss(5,1,1).p("AgUhSQhoEJC3if");
	this.shape_12.setTransform(-134.4,-104.3);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f().s("#000000").ss(5,1,1).p("AgehWQhrEBDMh9");
	this.shape_13.setTransform(-132.2,-102.5);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f().s("#000000").ss(5,1,1).p("AgohaQhtD4Dhhc");
	this.shape_14.setTransform(-130,-100.6);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f().s("#000000").ss(5,1,1).p("AgyhfQhvDuD3g6");
	this.shape_15.setTransform(-127.8,-98.5);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f().s("#000000").ss(5,1,1).p("Ag8hnQhyDmENgZ");
	this.shape_16.setTransform(-125.6,-96.2);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f().s("#000000").ss(5,1,1).p("AhGhyQh0DdEiAJ");
	this.shape_17.setTransform(-123.5,-93.6);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f().s("#000000").ss(5,1,1).p("ABxCAQk3gqB3jV");
	this.shape_18.setTransform(-121.3,-90.9);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f().s("#000000").ss(5,1,1).p("Ag4hdQiNDPErgW");
	this.shape_19.setTransform(-123.7,-94.3);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f().s("#000000").ss(5,1,1).p("AgfhGQikDKEehX");
	this.shape_20.setTransform(-126.1,-96.6);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f().s("#000000").ss(5,1,1).p("AgGg3Qi6DEESiW");
	this.shape_21.setTransform(-128.7,-98.1);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f().s("#000000").ss(5,1,1).p("ABJg4QkFDWDPi+");
	this.shape_22.setTransform(-131.3,-100.4);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f().s("#000000").ss(5,1,1).p("AgrhCQhqDkDjih");
	this.shape_23.setTransform(-133.9,-109.1);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f().s("#000000").ss(5,1,1).p("AhehfQgEELDBhq");
	this.shape_24.setTransform(-137.8,-118.3);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f().s("#000000").ss(5,1,1).p("AiAiCQBjExCegz");
	this.shape_25.setTransform(-143.3,-126.9);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape}]}).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_2}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_5}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_9}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_12}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_16}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_18}]},1).to({state:[{t:this.shape_19}]},1).to({state:[{t:this.shape_20}]},1).to({state:[{t:this.shape_21}]},1).to({state:[{t:this.shape_22}]},1).to({state:[{t:this.shape_23}]},1).to({state:[{t:this.shape_24}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape}]},1).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.shape).to({_off:true},1).wait(25).to({_off:false},0).wait(3));

	// Right Arm
	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f().s("#000000").ss(5,1,1).p("ACZAHQizBeh+iQ");
	this.shape_26.setTransform(-70.3,-97.2);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f().s("#000000").ss(5,1,1).p("AiYgrQB+CQCzhe");
	this.shape_27.setTransform(-70.3,-97.2);
	this.shape_27._off = true;

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f().s("#000000").ss(5,1,1).p("AhyhBQCBC3BkhJ");
	this.shape_28.setTransform(-74.5,-98.9);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f().s("#000000").ss(5,1,1).p("AhNhZQCGDeAVg0");
	this.shape_29.setTransform(-78.7,-100.4);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f().s("#000000").ss(5,1,1).p("AgphfQCGDehTgk");
	this.shape_30.setTransform(-82.3,-99.8);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f().s("#000000").ss(5,1,1).p("AgiBpQCHgHiAjK");
	this.shape_31.setTransform(-83.1,-96.8);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f().s("#000000").ss(5,1,1).p("AiJB3QFxhdh+iQ");
	this.shape_32.setTransform(-96.2,-89.7);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f().s("#000000").ss(5,1,1).p("Ah8BoQFxhaizh1");
	this.shape_33.setTransform(-97.5,-88.5);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f().s("#000000").ss(5,1,1).p("AAYhXQDoBZlxBW");
	this.shape_34.setTransform(-98.6,-87.3);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f().s("#000000").ss(5,1,1).p("AhMB5QD9g8iji1");
	this.shape_35.setTransform(-90.7,-93.2);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f().s("#000000").ss(5,1,1).p("AgvBpQC1gciii1");
	this.shape_36.setTransform(-86.4,-94.8);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f().s("#000000").ss(5,1,1).p("AAfBQQBNAUiji1");
	this.shape_37.setTransform(-83.8,-97.1);

	this.shape_38 = new cjs.Shape();
	this.shape_38.graphics.f().s("#000000").ss(5,1,1).p("AhPhCQCWCpAJgt");
	this.shape_38.setTransform(-80.1,-97.4);

	this.shape_39 = new cjs.Shape();
	this.shape_39.graphics.f().s("#000000").ss(5,1,1).p("Ah0g2QCKCdBfhG");
	this.shape_39.setTransform(-75.2,-97.4);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_26}]}).to({state:[{t:this.shape_27}]},1).to({state:[{t:this.shape_27}]},1).to({state:[{t:this.shape_27}]},1).to({state:[{t:this.shape_27}]},1).to({state:[{t:this.shape_27}]},1).to({state:[{t:this.shape_27}]},1).to({state:[{t:this.shape_27}]},1).to({state:[{t:this.shape_27}]},1).to({state:[{t:this.shape_27}]},1).to({state:[{t:this.shape_27}]},1).to({state:[{t:this.shape_27}]},1).to({state:[{t:this.shape_27}]},1).to({state:[{t:this.shape_26}]},1).to({state:[{t:this.shape_28}]},1).to({state:[{t:this.shape_29}]},1).to({state:[{t:this.shape_30}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_32}]},1).to({state:[{t:this.shape_33}]},1).to({state:[{t:this.shape_34}]},1).to({state:[{t:this.shape_35}]},1).to({state:[{t:this.shape_36}]},1).to({state:[{t:this.shape_37}]},1).to({state:[{t:this.shape_38}]},1).to({state:[{t:this.shape_39}]},1).to({state:[{t:this.shape_26}]},1).to({state:[{t:this.shape_26}]},1).to({state:[{t:this.shape_26}]},1).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.shape_26).to({_off:true},1).wait(12).to({_off:false},0).to({_off:true},1).wait(12).to({_off:false},0).wait(3));
	this.timeline.addTween(cjs.Tween.get(this.shape_27).wait(1).to({_off:false},0).wait(11).to({_off:true},1).wait(16));

	// Body
	this.instance_5 = new lib.Tween3("synched",0);
	this.instance_5.parent = this;
	this.instance_5.setTransform(-109.9,-108.3,1,1,24.7);

	this.timeline.addTween(cjs.Tween.get(this.instance_5).to({rotation:0,x:-109.4,y:-112.3},13).to({rotation:24.7,x:-109.9,y:-108.3},15).wait(1));

	// Layer 2
	this.shape_40 = new cjs.Shape();
	this.shape_40.graphics.f().s("#000000").ss(5,1,1).p("AAAitIAAFb");
	this.shape_40.setTransform(-102.9,-66.9);

	this.shape_41 = new cjs.Shape();
	this.shape_41.graphics.f().s("#000000").ss(5,1,1).p("AAACuIAAlb");
	this.shape_41.setTransform(-102.9,-66.9);
	this.shape_41._off = true;

	this.timeline.addTween(cjs.Tween.get(this.shape_40).to({_off:true},1).wait(12).to({_off:false},0).wait(16));
	this.timeline.addTween(cjs.Tween.get(this.shape_41).wait(1).to({_off:false},0).wait(11).to({_off:true},1).wait(16));

	// Legs
	this.shape_42 = new cjs.Shape();
	this.shape_42.graphics.f().s("#000000").ss(5,1,1).p("AAAitIAAFb");
	this.shape_42.setTransform(-116.8,-66.9);

	this.shape_43 = new cjs.Shape();
	this.shape_43.graphics.f().s("#000000").ss(5,1,1).p("AAACuIAAlb");
	this.shape_43.setTransform(-116.8,-66.9);
	this.shape_43._off = true;

	this.timeline.addTween(cjs.Tween.get(this.shape_42).to({_off:true},1).wait(12).to({_off:false},0).wait(16));
	this.timeline.addTween(cjs.Tween.get(this.shape_43).wait(1).to({_off:false},0).wait(11).to({_off:true},1).wait(16));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-170.2,-157.2,120.2,110.2);


(lib.Blob3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Bucket
	this.instance = new lib.Tween4("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(54.9,-28.4);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({x:3.1,y:-61.9},7).to({x:-54.7,y:-77.2},6).to({_off:true},1).wait(15));

	// Bucket Handle
	this.instance_1 = new lib.Tween1("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(54.9,-37);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({x:3.1,y:-70.5},7).to({x:-54.7,y:-85.8},6).to({_off:true},1).wait(15));

	// Layer 4
	this.instance_2 = new lib.Tween6("synched",0);
	this.instance_2.parent = this;
	this.instance_2.setTransform(-30.7,-74.3,1,1,-30);
	this.instance_2._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(10).to({_off:false},0).to({rotation:-75,x:-72.7,y:-82.3},3).to({regX:-0.1,regY:-0.1,scaleX:0.44,scaleY:0.44,x:-78.1,y:-72.6},2).to({_off:true},1).wait(13));

	// Layer 3
	this.instance_3 = new lib.Tween6("synched",0);
	this.instance_3.parent = this;
	this.instance_3.setTransform(28.7,-53.5,1,1,-30);
	this.instance_3._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(4).to({_off:false},0).to({x:44.7,y:-77.5},3).to({scaleX:0.18,scaleY:0.18,rotation:30,x:56.6,y:-69.5},2).to({_off:true},1).wait(19));

	// Left Hand
	this.instance_4 = new lib.Tween30("synched",0);
	this.instance_4.parent = this;
	this.instance_4.setTransform(-32.5,-123.3,0.594,0.594,0,0,180,0,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_4).to({x:1.1,y:-80.9},7).to({x:-54.9,y:-97.7},6).to({startPosition:0},4).to({x:-32.5,y:-123.3},11).wait(1));

	// Right Hand
	this.instance_5 = new lib.Tween30("synched",0);
	this.instance_5.parent = this;
	this.instance_5.setTransform(55,-47.3,0.594,0.594,0,0,0,0.1,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_5).to({x:3,y:-79.3},7).to({x:51,y:-87.3},6).to({startPosition:0},4).to({x:55,y:-47.3},11).wait(1));

	// Left Arm
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#000000").ss(5,1,1).p("AijhgQBsDUDbgV");
	this.shape.setTransform(-16.1,-113.6);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f().s("#000000").ss(5,1,1).p("AiAhCQAuC4DThG");
	this.shape_1.setTransform(-15,-108.4);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#000000").ss(5,1,1).p("AhcgrQgQCbDKh2");
	this.shape_2.setTransform(-14,-102.4);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f().s("#000000").ss(5,1,1).p("AhFg3QgoDbC6jW");
	this.shape_3.setTransform(-13.2,-98);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f().s("#000000").ss(5,1,1).p("Agrg1QhBEbCqk3");
	this.shape_4.setTransform(-12.7,-94.9);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f().s("#000000").ss(5,1,1).p("Aggg9QigDbEaip");
	this.shape_5.setTransform(-13,-94.5);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f().s("#000000").ss(5,1,1).p("AgUhCQj+CdGKgd");
	this.shape_6.setTransform(-13.5,-94.6);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f().s("#000000").ss(5,1,1).p("ACWBoQn5hwFchf");
	this.shape_7.setTransform(-14,-91.3);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f().s("#000000").ss(5,1,1).p("AAlhhQlVBhGkBi");
	this.shape_8.setTransform(-19.1,-92.1);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f().s("#000000").ss(5,1,1).p("AA5BSQk8hBFghi");
	this.shape_9.setTransform(-23.6,-93.9);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f().s("#000000").ss(5,1,1).p("AgeBDQimgOEfh3");
	this.shape_10.setTransform(-23.5,-95.4);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f().s("#000000").ss(5,1,1).p("AhmAwQgRAkDgiK");
	this.shape_11.setTransform(-24.8,-96.6);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f().s("#000000").ss(5,1,1).p("AiJAfQBTBCC/iT");
	this.shape_12.setTransform(-31.3,-97.9);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f().s("#000000").ss(5,1,1).p("AiqANQC0BgChid");
	this.shape_13.setTransform(-37.8,-99);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f().s("#000000").ss(5,1,1).p("AiqANQC1BgCgid");
	this.shape_14.setTransform(-37.8,-99);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f().s("#000000").ss(5,1,1).p("AipgDQCtBqCmiQ");
	this.shape_15.setTransform(-35.9,-99.7);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f().s("#000000").ss(5,1,1).p("AipgTQCpB0CqiD");
	this.shape_16.setTransform(-33.9,-100.4);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f().s("#000000").ss(5,1,1).p("AioggQChB/Cwh3");
	this.shape_17.setTransform(-31.9,-101.4);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f().s("#000000").ss(5,1,1).p("AingmQCaCKC2hr");
	this.shape_18.setTransform(-29.9,-103.2);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f().s("#000000").ss(5,1,1).p("AingtQCUCVC7hg");
	this.shape_19.setTransform(-28,-104.8);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f().s("#000000").ss(5,1,1).p("Aimg0QCNCfDAhT");
	this.shape_20.setTransform(-26,-106.4);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f().s("#000000").ss(5,1,1).p("Aimg7QCHCpDGhG");
	this.shape_21.setTransform(-24,-108);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f().s("#000000").ss(5,1,1).p("AilhEQCAC0DLg6");
	this.shape_22.setTransform(-22.1,-109.5);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f().s("#000000").ss(5,1,1).p("AikhNQB4C/DRgt");
	this.shape_23.setTransform(-20.1,-110.9);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f().s("#000000").ss(5,1,1).p("AikhWQBzDJDWgh");
	this.shape_24.setTransform(-18.1,-112.3);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape}]}).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_2}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_5}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_9}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_12}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_16}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_18}]},1).to({state:[{t:this.shape_19}]},1).to({state:[{t:this.shape_20}]},1).to({state:[{t:this.shape_21}]},1).to({state:[{t:this.shape_22}]},1).to({state:[{t:this.shape_23}]},1).to({state:[{t:this.shape_24}]},1).to({state:[{t:this.shape}]},1).wait(1));

	// Right Arm
	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f().s("#000000").ss(5,1,1).p("ACUCwIknlf");
	this.shape_25.setTransform(40.2,-64.9);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f().s("#000000").ss(5,1,1).p("AhviVQCQB8BPCv");
	this.shape_26.setTransform(36.6,-67.5);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f().s("#000000").ss(5,1,1).p("AhLh7QCNBHAKCw");
	this.shape_27.setTransform(33,-70.1);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f().s("#000000").ss(5,1,1).p("Ag5hpQCxBVhdB+");
	this.shape_28.setTransform(31.2,-71.9);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f().s("#000000").ss(5,1,1).p("Ag3hXQDVBijDBO");
	this.shape_29.setTransform(31,-73.6);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f().s("#000000").ss(5,1,1).p("AhMg4QFLCLlVgg");
	this.shape_30.setTransform(25.6,-75.8);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f().s("#000000").ss(5,1,1).p("AiCAKQHHB+lSjD");
	this.shape_31.setTransform(23.1,-76);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f().s("#000000").ss(5,1,1).p("AiwgjQI5Dclaj7");
	this.shape_32.setTransform(20.7,-75.8);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f().s("#000000").ss(5,1,1).p("AiMgJQHjDilZkv");
	this.shape_33.setTransform(25.7,-79);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f().s("#000000").ss(5,1,1).p("AhpAQQGNDplZlk");
	this.shape_34.setTransform(30.8,-82.1);

	this.shape_35 = new cjs.Shape();

	this.shape_35.graphics.f().s("#000000").ss(5,1,1).p("AgoBGQDfBwj3kb");
	this.shape_35.setTransform(31.9,-90.3);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f().s("#000000").ss(5,1,1).p("AAiBZQBkhYjJhZ");
	this.shape_36.setTransform(32.2,-93.6);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f().s("#000000").ss(5,1,1).p("AhahRQDJBYgXBL");
	this.shape_37.setTransform(34.5,-94.3);

	this.shape_38 = new cjs.Shape();
	this.shape_38.graphics.f().s("#000000").ss(5,1,1).p("ACABMQg2g+jJhZ");
	this.shape_38.setTransform(38.2,-94.9);

	this.shape_39 = new cjs.Shape();
	this.shape_39.graphics.f().s("#000000").ss(5,1,1).p("Ah/hLQDJBZA2A+");
	this.shape_39.setTransform(38.2,-94.9);

	this.shape_40 = new cjs.Shape();
	this.shape_40.graphics.f().s("#000000").ss(5,1,1).p("AiBhUQDEBhA/BI");
	this.shape_40.setTransform(38.4,-92.2);

	this.shape_41 = new cjs.Shape();
	this.shape_41.graphics.f().s("#000000").ss(5,1,1).p("AiDhdQC/BoBIBT");
	this.shape_41.setTransform(38.6,-89.5);

	this.shape_42 = new cjs.Shape();
	this.shape_42.graphics.f().s("#000000").ss(5,1,1).p("AiFhmQC7BwBQBd");
	this.shape_42.setTransform(38.8,-86.7);

	this.shape_43 = new cjs.Shape();
	this.shape_43.graphics.f().s("#000000").ss(5,1,1).p("AiGhvQC1B4BYBn");
	this.shape_43.setTransform(38.9,-84);

	this.shape_44 = new cjs.Shape();
	this.shape_44.graphics.f().s("#000000").ss(5,1,1).p("AiIh4QCxB/BgBy");
	this.shape_44.setTransform(39.1,-81.3);

	this.shape_45 = new cjs.Shape();
	this.shape_45.graphics.f().s("#000000").ss(5,1,1).p("AiKiBQCsCIBpB7");
	this.shape_45.setTransform(39.3,-78.6);

	this.shape_46 = new cjs.Shape();
	this.shape_46.graphics.f().s("#000000").ss(5,1,1).p("AiMiKQCnCPByCG");
	this.shape_46.setTransform(39.5,-75.8);

	this.shape_47 = new cjs.Shape();
	this.shape_47.graphics.f().s("#000000").ss(5,1,1).p("AiOiUQCiCYB7CQ");
	this.shape_47.setTransform(39.7,-73.1);

	this.shape_48 = new cjs.Shape();
	this.shape_48.graphics.f().s("#000000").ss(5,1,1).p("AiPidQCdCgCCCb");
	this.shape_48.setTransform(39.8,-70.4);

	this.shape_49 = new cjs.Shape();
	this.shape_49.graphics.f().s("#000000").ss(5,1,1).p("AiRilQCYCnCLCl");
	this.shape_49.setTransform(40,-67.6);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_25}]}).to({state:[{t:this.shape_26}]},1).to({state:[{t:this.shape_27}]},1).to({state:[{t:this.shape_28}]},1).to({state:[{t:this.shape_29}]},1).to({state:[{t:this.shape_30}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_32}]},1).to({state:[{t:this.shape_33}]},1).to({state:[{t:this.shape_34}]},1).to({state:[{t:this.shape_35}]},1).to({state:[{t:this.shape_36}]},1).to({state:[{t:this.shape_37}]},1).to({state:[{t:this.shape_38}]},1).to({state:[{t:this.shape_39}]},1).to({state:[{t:this.shape_39}]},1).to({state:[{t:this.shape_39}]},1).to({state:[{t:this.shape_38}]},1).to({state:[{t:this.shape_40}]},1).to({state:[{t:this.shape_41}]},1).to({state:[{t:this.shape_42}]},1).to({state:[{t:this.shape_43}]},1).to({state:[{t:this.shape_44}]},1).to({state:[{t:this.shape_45}]},1).to({state:[{t:this.shape_46}]},1).to({state:[{t:this.shape_47}]},1).to({state:[{t:this.shape_48}]},1).to({state:[{t:this.shape_49}]},1).to({state:[{t:this.shape_25}]},1).wait(1));

	// Body
	this.instance_6 = new lib.Tween3("synched",0);
	this.instance_6.parent = this;
	this.instance_6.setTransform(17.6,-93.7,1,1,30);

	this.timeline.addTween(cjs.Tween.get(this.instance_6).to({rotation:0,x:-0.3,y:-108.3},13).to({startPosition:0},4).to({rotation:30,x:17.6,y:-93.7},11).wait(1));

	// Layer 2
	this.shape_50 = new cjs.Shape();
	this.shape_50.graphics.f().s("#000000").ss(5,1,1).p("AABh0QBIB2hnBz");
	this.shape_50.setTransform(9.8,-61.2);

	this.shape_51 = new cjs.Shape();
	this.shape_51.graphics.f().s("#000000").ss(5,1,1).p("AgZB9QBYh7g+h+");
	this.shape_51.setTransform(9.3,-62);

	this.shape_52 = new cjs.Shape();
	this.shape_52.graphics.f().s("#000000").ss(5,1,1).p("AgVCGQBJiEgziH");
	this.shape_52.setTransform(8.9,-62.8);

	this.shape_53 = new cjs.Shape();
	this.shape_53.graphics.f().s("#000000").ss(5,1,1).p("AgRCOQA7iNgpiO");
	this.shape_53.setTransform(8.5,-63.6);

	this.shape_54 = new cjs.Shape();
	this.shape_54.graphics.f().s("#000000").ss(5,1,1).p("AgMCWQAsiVggiW");
	this.shape_54.setTransform(8,-64.4);

	this.shape_55 = new cjs.Shape();
	this.shape_55.graphics.f().s("#000000").ss(5,1,1).p("AgICeQAdiegVid");
	this.shape_55.setTransform(7.6,-65.2);

	this.shape_56 = new cjs.Shape();
	this.shape_56.graphics.f().s("#000000").ss(5,1,1).p("AgDCmQAOilgLim");
	this.shape_56.setTransform(7.1,-66.1);

	this.shape_57 = new cjs.Shape();
	this.shape_57.graphics.f().s("#000000").ss(5,1,1).p("AAAitIAAFb");
	this.shape_57.setTransform(6.7,-66.9);

	this.shape_58 = new cjs.Shape();
	this.shape_58.graphics.f().s("#000000").ss(5,1,1).p("AAACuIAAlb");
	this.shape_58.setTransform(6.7,-66.9);
	this.shape_58._off = true;

	this.shape_59 = new cjs.Shape();
	this.shape_59.graphics.f().s("#000000").ss(5,1,1).p("AgCCpQAJipgHio");
	this.shape_59.setTransform(7,-66.3);

	this.shape_60 = new cjs.Shape();
	this.shape_60.graphics.f().s("#000000").ss(5,1,1).p("AgFCkQASikgNij");
	this.shape_60.setTransform(7.3,-65.8);

	this.shape_61 = new cjs.Shape();
	this.shape_61.graphics.f().s("#000000").ss(5,1,1).p("AgHCfQAbiegUif");
	this.shape_61.setTransform(7.5,-65.3);

	this.shape_62 = new cjs.Shape();
	this.shape_62.graphics.f().s("#000000").ss(5,1,1).p("AgKCaQAliZgbiZ");
	this.shape_62.setTransform(7.8,-64.8);

	this.shape_63 = new cjs.Shape();
	this.shape_63.graphics.f().s("#000000").ss(5,1,1).p("AgNCVQAuiUghiU");
	this.shape_63.setTransform(8.1,-64.3);

	this.shape_64 = new cjs.Shape();
	this.shape_64.graphics.f().s("#000000").ss(5,1,1).p("AgQCPQA4iOgniP");
	this.shape_64.setTransform(8.4,-63.8);

	this.shape_65 = new cjs.Shape();
	this.shape_65.graphics.f().s("#000000").ss(5,1,1).p("AgTCKQBCiJguiK");
	this.shape_65.setTransform(8.7,-63.3);

	this.shape_66 = new cjs.Shape();
	this.shape_66.graphics.f().s("#000000").ss(5,1,1).p("AgVCFQBLiDg1iG");
	this.shape_66.setTransform(8.9,-62.8);

	this.shape_67 = new cjs.Shape();
	this.shape_67.graphics.f().s("#000000").ss(5,1,1).p("AgYCAQBUh+g7iB");
	this.shape_67.setTransform(9.2,-62.2);

	this.shape_68 = new cjs.Shape();
	this.shape_68.graphics.f().s("#000000").ss(5,1,1).p("AgbB7QBeh5hCh8");
	this.shape_68.setTransform(9.5,-61.7);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_50}]}).to({state:[{t:this.shape_51}]},1).to({state:[{t:this.shape_52}]},1).to({state:[{t:this.shape_53}]},1).to({state:[{t:this.shape_54}]},1).to({state:[{t:this.shape_55}]},1).to({state:[{t:this.shape_56}]},1).to({state:[{t:this.shape_57}]},1).to({state:[{t:this.shape_58}]},1).to({state:[{t:this.shape_58}]},1).to({state:[{t:this.shape_58}]},1).to({state:[{t:this.shape_58}]},1).to({state:[{t:this.shape_58}]},1).to({state:[{t:this.shape_57}]},1).to({state:[{t:this.shape_58}]},1).to({state:[{t:this.shape_58}]},1).to({state:[{t:this.shape_58}]},1).to({state:[{t:this.shape_57}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_61}]},1).to({state:[{t:this.shape_62}]},1).to({state:[{t:this.shape_63}]},1).to({state:[{t:this.shape_64}]},1).to({state:[{t:this.shape_65}]},1).to({state:[{t:this.shape_66}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_68}]},1).to({state:[{t:this.shape_50}]},1).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.shape_58).wait(8).to({_off:false},0).wait(4).to({_off:true},1).wait(1).to({_off:false},0).wait(2).to({_off:true},1).wait(12));

	// Legs
	this.shape_69 = new cjs.Shape();
	this.shape_69.graphics.f().s("#000000").ss(5,1,1).p("ABsi4QjXENAABk");
	this.shape_69.setTransform(-6.9,-68);

	this.shape_70 = new cjs.Shape();
	this.shape_70.graphics.f().s("#000000").ss(5,1,1).p("AhbC4QgBhvC5kA");
	this.shape_70.setTransform(-6.9,-67.8);

	this.shape_71 = new cjs.Shape();
	this.shape_71.graphics.f().s("#000000").ss(5,1,1).p("AhMC2QAAh5CZjy");
	this.shape_71.setTransform(-7,-67.7);

	this.shape_72 = new cjs.Shape();
	this.shape_72.graphics.f().s("#000000").ss(5,1,1).p("Ag9C1QAAiEB7jl");
	this.shape_72.setTransform(-7,-67.5);

	this.shape_73 = new cjs.Shape();
	this.shape_73.graphics.f().s("#000000").ss(5,1,1).p("AgtCzQgBiPBcjW");
	this.shape_73.setTransform(-7.1,-67.3);

	this.shape_74 = new cjs.Shape();
	this.shape_74.graphics.f().s("#000000").ss(5,1,1).p("AgeCyQAAiZA9jK");
	this.shape_74.setTransform(-7.1,-67.2);

	this.shape_75 = new cjs.Shape();
	this.shape_75.graphics.f().s("#000000").ss(5,1,1).p("AgOCwQAAikAdi7");
	this.shape_75.setTransform(-7.2,-67);

	this.shape_76 = new cjs.Shape();
	this.shape_76.graphics.f().s("#000000").ss(5,1,1).p("AAAitIAAFb");
	this.shape_76.setTransform(-7.2,-66.9);

	this.shape_77 = new cjs.Shape();
	this.shape_77.graphics.f().s("#000000").ss(5,1,1).p("AAACuIAAlb");
	this.shape_77.setTransform(-7.2,-66.9);
	this.shape_77._off = true;

	this.shape_78 = new cjs.Shape();
	this.shape_78.graphics.f().s("#000000").ss(5,1,1).p("AgJCvQAAinATi2");
	this.shape_78.setTransform(-7.2,-67);

	this.shape_79 = new cjs.Shape();
	this.shape_79.graphics.f().s("#000000").ss(5,1,1).p("AgTCwQAAigAni/");
	this.shape_79.setTransform(-7.2,-67.1);

	this.shape_80 = new cjs.Shape();
	this.shape_80.graphics.f().s("#000000").ss(5,1,1).p("AgcCxQAAiaA6jH");
	this.shape_80.setTransform(-7.1,-67.2);

	this.shape_81 = new cjs.Shape();
	this.shape_81.graphics.f().s("#000000").ss(5,1,1).p("AgmCyQAAiTBNjQ");
	this.shape_81.setTransform(-7.1,-67.3);

	this.shape_82 = new cjs.Shape();
	this.shape_82.graphics.f().s("#000000").ss(5,1,1).p("AgwCzQAAiMBhjZ");
	this.shape_82.setTransform(-7.1,-67.4);

	this.shape_83 = new cjs.Shape();
	this.shape_83.graphics.f().s("#000000").ss(5,1,1).p("Ag6C0QAAiGB1jh");
	this.shape_83.setTransform(-7,-67.5);

	this.shape_84 = new cjs.Shape();
	this.shape_84.graphics.f().s("#000000").ss(5,1,1).p("AhEC1QAAh/CJjr");
	this.shape_84.setTransform(-7,-67.6);

	this.shape_85 = new cjs.Shape();
	this.shape_85.graphics.f().s("#000000").ss(5,1,1).p("AhNC3QgBh5Cdj0");
	this.shape_85.setTransform(-7,-67.7);

	this.shape_86 = new cjs.Shape();
	this.shape_86.graphics.f().s("#000000").ss(5,1,1).p("AhXC4QgBhyCwj8");
	this.shape_86.setTransform(-6.9,-67.8);

	this.shape_87 = new cjs.Shape();
	this.shape_87.graphics.f().s("#000000").ss(5,1,1).p("AhhC5QgBhrDEkF");
	this.shape_87.setTransform(-6.9,-67.9);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_69}]}).to({state:[{t:this.shape_70}]},1).to({state:[{t:this.shape_71}]},1).to({state:[{t:this.shape_72}]},1).to({state:[{t:this.shape_73}]},1).to({state:[{t:this.shape_74}]},1).to({state:[{t:this.shape_75}]},1).to({state:[{t:this.shape_76}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_76}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_76}]},1).to({state:[{t:this.shape_78}]},1).to({state:[{t:this.shape_79}]},1).to({state:[{t:this.shape_80}]},1).to({state:[{t:this.shape_81}]},1).to({state:[{t:this.shape_82}]},1).to({state:[{t:this.shape_83}]},1).to({state:[{t:this.shape_84}]},1).to({state:[{t:this.shape_85}]},1).to({state:[{t:this.shape_86}]},1).to({state:[{t:this.shape_87}]},1).to({state:[{t:this.shape_69}]},1).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.shape_77).wait(8).to({_off:false},0).wait(4).to({_off:true},1).wait(1).to({_off:false},0).wait(2).to({_off:true},1).wait(12));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-37.5,-128.4,103.1,108.5);


(lib.BLob2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Bucket
	this.instance = new lib.Tween4("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(-55.2,20.1);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({rotation:8.7,x:-45.6,y:22.9},3).to({rotation:-8.2,x:-29.8,y:25.8},3).to({rotation:15,x:-21.7,y:28.6},3).to({rotation:-7.7,x:-5.3,y:31.2},3).to({rotation:0,x:-0.9,y:33.6},2).to({x:54.9,y:-28.4},14).wait(1));

	// Layer 11
	this.instance_1 = new lib.Tween6("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(29.5,-0.2,1,1,0,0,180);
	this.instance_1._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(19).to({_off:false},0).to({x:41.9,y:-7},2).to({scaleX:0.24,scaleY:0.24,skewX:105,skewY:285,x:55.1,y:9.7},2).to({_off:true},1).wait(5));

	// Bucket Handle
	this.instance_2 = new lib.Tween1("synched",0);
	this.instance_2.parent = this;
	this.instance_2.setTransform(-55.2,11.5);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).to({rotation:8.7,x:-44.3,y:14.4},3).to({rotation:-8.2,x:-31.1,y:17.3},3).to({rotation:15,x:-19.5,y:20.3},3).to({rotation:-7.7,x:-6.4,y:22.7},3).to({rotation:0,x:-0.9,y:25},2).to({x:54.9,y:-37},14).wait(1));

	// Drop 1
	this.instance_3 = new lib.Tween6("synched",0);
	this.instance_3.parent = this;
	this.instance_3.setTransform(-10.9,23.4);
	this.instance_3._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(13).to({_off:false},0).to({rotation:-30,x:-8.9,y:18.2},3).to({regX:-0.1,regY:-0.1,scaleX:0.45,scaleY:0.45,rotation:-105,x:-7.3,y:34.3},3).to({_off:true},1).wait(9));

	// Drop 1
	this.instance_4 = new lib.Tween6("synched",0);
	this.instance_4.parent = this;
	this.instance_4.setTransform(-34.9,19.4);
	this.instance_4._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_4).wait(6).to({_off:false},0).to({rotation:-30,x:-36.9,y:12.2},3).to({regX:-0.1,regY:-0.1,scaleX:0.45,scaleY:0.45,rotation:-105,x:-47.6,y:19.5},3).to({_off:true},1).wait(16));

	// Left Hand
	this.instance_5 = new lib.Tween30("synched",0);
	this.instance_5.parent = this;
	this.instance_5.setTransform(-54.9,2.3,0.594,0.594,0,0,180,0,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_5).to({regX:0.1,x:-23.9,y:9.9},8).to({regX:0,x:-0.6,y:15.8},6).to({x:-54.9,y:2.3},14).wait(1));

	// Right Hand
	this.instance_6 = new lib.Tween30("synched",0);
	this.instance_6.parent = this;
	this.instance_6.setTransform(55,-47.3,0.594,0.594,0,0,0,0.1,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_6).to({regY:0,x:39.2,y:-29.3},4).to({x:19.4,y:8.7},4).to({regY:0.1,x:-0.3,y:15.8},6).to({x:55,y:-47.3},14).wait(1));

	// Left Arm
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#000000").ss(5,1,1).p("AiaAOQDTByBii5");
	this.shape.setTransform(-39.2,0.9);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f().s("#000000").ss(5,1,1).p("AiGAVQCrBqBii5");
	this.shape_1.setTransform(-37.2,1);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#000000").ss(5,1,1).p("AhyAbQCDBiBii5");
	this.shape_2.setTransform(-35.2,1.2);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f().s("#000000").ss(5,1,1).p("AhdAiQBbBZBhi5");
	this.shape_3.setTransform(-33.2,1.4);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f().s("#000000").ss(5,1,1).p("AhKAoQA0BRBhi5");
	this.shape_4.setTransform(-31.2,1.6);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f().s("#000000").ss(5,1,1).p("Ag2A8QAQA+BdjE");
	this.shape_5.setTransform(-29.6,1.5);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f().s("#000000").ss(5,1,1).p("AggBPQgUAsBZjQ");
	this.shape_6.setTransform(-28.3,1.4);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f().s("#000000").ss(5,1,1).p("AgHBWQg/AhBmjQ");
	this.shape_7.setTransform(-28,1.4);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f().s("#000000").ss(5,1,1).p("AAfheQh1DRBqgW");
	this.shape_8.setTransform(-28,1.4);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f().s("#000000").ss(5,1,1).p("AAJhWQicCxDOgE");
	this.shape_9.setTransform(-25.8,2.3);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f().s("#000000").ss(5,1,1).p("AgHhZQikDAD1gP");
	this.shape_10.setTransform(-24.2,2.6);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f().s("#000000").ss(5,1,1).p("AgehdQiVDBEIgG");
	this.shape_11.setTransform(-21.9,3);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f().s("#000000").ss(5,1,1).p("Ag0hjQiHDDEcAE");
	this.shape_12.setTransform(-19.6,3.6);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f().s("#000000").ss(5,1,1).p("AhKhoQh4DFEvAM");
	this.shape_13.setTransform(-17.4,4.1);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f().s("#000000").ss(5,1,1).p("AhfhtQhpDGFCAV");
	this.shape_14.setTransform(-15.3,4.6);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape}]}).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_2}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_5}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_9}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_12}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_12}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_9}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_5}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_2}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape}]},1).wait(1));

	// Right Arm
	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f().s("#000000").ss(5,1,1).p("ACcjTQgbC+kcDp");
	this.shape_15.setTransform(39.4,-26.1);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f().s("#000000").ss(5,1,1).p("AiJC/QD/jNAUiw");
	this.shape_16.setTransform(37.4,-24.1);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f().s("#000000").ss(5,1,1).p("Ah3CpQDiiwANih");
	this.shape_17.setTransform(35.3,-22.1);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f().s("#000000").ss(5,1,1).p("AhlCTQDFiTAGiT");
	this.shape_18.setTransform(33.2,-20.1);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f().s("#000000").ss(5,1,1).p("AhTB+QCph3gCiE");
	this.shape_19.setTransform(31.1,-18.2);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f().s("#000000").ss(5,1,1).p("Ag5A8QBfA+AUjE");
	this.shape_20.setTransform(29,-12.7);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f().s("#000000").ss(5,1,1).p("AgggvQAWDxArkF");
	this.shape_21.setTransform(26.8,-2.9);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f().s("#000000").ss(5,1,1).p("AgPgvQArDfgSjs");
	this.shape_22.setTransform(24.3,6.1);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f().s("#000000").ss(5,1,1).p("AgFhhQAuDxg3g4");
	this.shape_23.setTransform(23.6,1.5);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f().s("#000000").ss(5,1,1).p("AghBbQBnArg4jn");
	this.shape_24.setTransform(21.7,2.1);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f().s("#000000").ss(5,1,1).p("Ag0BfQCWAehAje");
	this.shape_25.setTransform(19.8,2.6);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f().s("#000000").ss(5,1,1).p("AhIBiQDGARhIjV");
	this.shape_26.setTransform(18,3.3);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f().s("#000000").ss(5,1,1).p("AhcBkQD2AEhRjL");
	this.shape_27.setTransform(16.2,4);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f().s("#000000").ss(5,1,1).p("AhwBmQEmgIhajD");
	this.shape_28.setTransform(14.4,4.7);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f().s("#000000").ss(5,1,1).p("AiEBnQFVgUhii5");
	this.shape_29.setTransform(12.7,5.4);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f().s("#000000").ss(5,1,1).p("AgkAxQAnCVAikn");
	this.shape_30.setTransform(26.5,-3.6);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f().s("#000000").ss(5,1,1).p("AgtAJQAWDzBFlm");
	this.shape_31.setTransform(28.1,-8.6);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f().s("#000000").ss(5,1,1).p("AhABVQBfA+Aij0");
	this.shape_32.setTransform(29.6,-15.2);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_15}]}).to({state:[{t:this.shape_16}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_18}]},1).to({state:[{t:this.shape_19}]},1).to({state:[{t:this.shape_20}]},1).to({state:[{t:this.shape_21}]},1).to({state:[{t:this.shape_22}]},1).to({state:[{t:this.shape_23}]},1).to({state:[{t:this.shape_24}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_26}]},1).to({state:[{t:this.shape_27}]},1).to({state:[{t:this.shape_28}]},1).to({state:[{t:this.shape_29}]},1).to({state:[{t:this.shape_28}]},1).to({state:[{t:this.shape_27}]},1).to({state:[{t:this.shape_26}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_24}]},1).to({state:[{t:this.shape_23}]},1).to({state:[{t:this.shape_30}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_32}]},1).to({state:[{t:this.shape_19}]},1).to({state:[{t:this.shape_18}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_16}]},1).to({state:[{t:this.shape_15}]},1).wait(1));

	// Body
	this.instance_7 = new lib.Tween3("synched",0);
	this.instance_7.parent = this;
	this.instance_7.setTransform(-0.3,-10.7);

	this.timeline.addTween(cjs.Tween.get(this.instance_7).to({y:-13.7},14).to({y:-10.7},14).wait(1));

	// Legs
	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f().s("#000000").ss(5,1,1).p("ABGitIAAFbAhFitIAAFb");
	this.shape_33.setTransform(-0.3,29.1);

	this.timeline.addTween(cjs.Tween.get(this.shape_33).wait(29));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-65.9,-52.4,125.9,101.4);


(lib.Blob1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Bucket
	this.instance = new lib.Tween4("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(-55.2,20.1);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({rotation:8.7,x:-45.6,y:22.9},3).to({rotation:-8.2,x:-29.8,y:25.8},3).to({rotation:15,x:-21.7,y:28.6},3).to({rotation:-7.7,x:-5.3,y:31.2},3).to({rotation:0,x:-0.9,y:33.6},2).to({rotation:-8.2,x:14.3,y:30.4},3).to({rotation:7.5,x:24.8,y:26.4},4).to({rotation:-15,x:47.3,y:20.9},4).to({rotation:0,x:54.9,y:19.6},3).wait(1));

	// Layer 11
	this.instance_1 = new lib.Tween6("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(1.1,25.4,1,1,0,0,180);
	this.instance_1._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(14).to({_off:false},0).to({x:25.1,y:15.4},3).to({scaleX:0.23,scaleY:0.23,rotation:105,skewY:0,x:36.5,y:27.4},2).to({_off:true},1).wait(9));

	// Bucket Handle
	this.instance_2 = new lib.Tween1("synched",0);
	this.instance_2.parent = this;
	this.instance_2.setTransform(-55.2,11.5);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).to({rotation:8.7,x:-44.3,y:14.4},3).to({rotation:-8.2,x:-31.1,y:17.3},3).to({rotation:15,x:-19.5,y:20.3},3).to({rotation:-7.7,x:-6.4,y:22.7},3).to({rotation:0,x:-0.9,y:25},2).to({rotation:-8.2,x:13.1,y:21.9},3).to({rotation:7.5,x:25.9,y:17.8},4).to({rotation:-15,x:45.1,y:12.6},4).to({rotation:0,x:54.9,y:11},3).wait(1));

	// Drop 1
	this.instance_3 = new lib.Tween6("synched",0);
	this.instance_3.parent = this;
	this.instance_3.setTransform(-10.9,23.4);
	this.instance_3._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(13).to({_off:false},0).to({rotation:-30,x:-8.9,y:18.2},3).to({regX:-0.1,regY:-0.1,scaleX:0.45,scaleY:0.45,rotation:-105,x:-7.3,y:34.3},3).to({_off:true},1).wait(9));

	// Drop 1
	this.instance_4 = new lib.Tween6("synched",0);
	this.instance_4.parent = this;
	this.instance_4.setTransform(-34.9,19.4);
	this.instance_4._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_4).wait(6).to({_off:false},0).to({rotation:-30,x:-36.9,y:12.2},3).to({regX:-0.1,regY:-0.1,scaleX:0.45,scaleY:0.45,rotation:-105,x:-47.6,y:19.5},3).to({_off:true},1).wait(16));

	// Left Hand
	this.instance_5 = new lib.Tween30("synched",0);
	this.instance_5.parent = this;
	this.instance_5.setTransform(-54.9,2.3,0.594,0.594,0,0,180,0,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_5).to({regX:0.1,x:-23.9,y:9.9},8).to({regX:0,x:-0.6,y:15.8},6).to({x:-54.9,y:2.3},14).wait(1));

	// Right Hand
	this.instance_6 = new lib.Tween30("synched",0);
	this.instance_6.parent = this;
	this.instance_6.setTransform(55,2.3,0.594,0.594,0,0,0,0.1,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_6).to({x:-0.3,y:15.8},14).to({x:55,y:2.3},14).wait(1));

	// Left Arm
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#000000").ss(5,1,1).p("AiaAOQDTByBii5");
	this.shape.setTransform(-39.2,0.9);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f().s("#000000").ss(5,1,1).p("AiGAVQCrBqBii5");
	this.shape_1.setTransform(-37.2,1);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#000000").ss(5,1,1).p("AhyAbQCDBiBii5");
	this.shape_2.setTransform(-35.2,1.2);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f().s("#000000").ss(5,1,1).p("AhdAiQBbBZBhi5");
	this.shape_3.setTransform(-33.2,1.4);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f().s("#000000").ss(5,1,1).p("AhKAoQA0BRBhi5");
	this.shape_4.setTransform(-31.2,1.6);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f().s("#000000").ss(5,1,1).p("Ag2A8QAQA+BdjE");
	this.shape_5.setTransform(-29.6,1.5);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f().s("#000000").ss(5,1,1).p("AggBPQgUAsBZjQ");
	this.shape_6.setTransform(-28.3,1.4);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f().s("#000000").ss(5,1,1).p("AgHBWQg/AhBmjQ");
	this.shape_7.setTransform(-28,1.4);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f().s("#000000").ss(5,1,1).p("AAfheQh1DRBqgW");
	this.shape_8.setTransform(-28,1.4);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f().s("#000000").ss(5,1,1).p("AAJhWQicCxDOgE");
	this.shape_9.setTransform(-25.8,2.3);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f().s("#000000").ss(5,1,1).p("AgHhZQikDAD1gP");
	this.shape_10.setTransform(-24.2,2.6);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f().s("#000000").ss(5,1,1).p("AgehdQiVDBEIgG");
	this.shape_11.setTransform(-21.9,3);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f().s("#000000").ss(5,1,1).p("Ag0hjQiHDDEcAE");
	this.shape_12.setTransform(-19.6,3.6);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f().s("#000000").ss(5,1,1).p("AhKhoQh4DFEvAM");
	this.shape_13.setTransform(-17.4,4.1);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f().s("#000000").ss(5,1,1).p("AhfhtQhpDGFCAV");
	this.shape_14.setTransform(-15.3,4.6);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape}]}).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_2}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_5}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_9}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_12}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_12}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_9}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_5}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_2}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape}]},1).wait(1));

	// Right Arm
	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f().s("#000000").ss(5,1,1).p("ACbAOQjTByhii5");
	this.shape_15.setTransform(39.3,0.9);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f().s("#000000").ss(5,1,1).p("AiGg7QBkC6Cphp");
	this.shape_16.setTransform(37.1,1);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f().s("#000000").ss(5,1,1).p("Ahzg+QBoC8B/hf");
	this.shape_17.setTransform(34.8,1.1);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f().s("#000000").ss(5,1,1).p("AhfhBQBpC+BWhW");
	this.shape_18.setTransform(32.6,1.2);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f().s("#000000").ss(5,1,1).p("AhLhEQBsDAArhN");
	this.shape_19.setTransform(30.3,1.3);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f().s("#000000").ss(5,1,1).p("Ag2hOQBADZAthT");
	this.shape_20.setTransform(28.6,1.2);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f().s("#000000").ss(5,1,1).p("AghhXQAWDxAtha");
	this.shape_21.setTransform(26.9,1.1);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f().s("#000000").ss(5,1,1).p("AgKADQAnCVghjX");
	this.shape_22.setTransform(23.8,1);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f().s("#000000").ss(5,1,1).p("AgFhhQAuDxg3g4");
	this.shape_23.setTransform(23.6,1.5);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f().s("#000000").ss(5,1,1).p("AghBbQBnArg4jn");
	this.shape_24.setTransform(21.7,2.1);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f().s("#000000").ss(5,1,1).p("Ag0BfQCWAehAje");
	this.shape_25.setTransform(19.8,2.6);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f().s("#000000").ss(5,1,1).p("AhIBiQDGARhIjV");
	this.shape_26.setTransform(18,3.3);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f().s("#000000").ss(5,1,1).p("AhcBkQD2AEhRjL");
	this.shape_27.setTransform(16.2,4);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f().s("#000000").ss(5,1,1).p("AhwBmQEmgIhajD");
	this.shape_28.setTransform(14.4,4.7);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f().s("#000000").ss(5,1,1).p("AiEBnQFVgUhii5");
	this.shape_29.setTransform(12.7,5.4);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_15}]}).to({state:[{t:this.shape_16}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_18}]},1).to({state:[{t:this.shape_19}]},1).to({state:[{t:this.shape_20}]},1).to({state:[{t:this.shape_21}]},1).to({state:[{t:this.shape_22}]},1).to({state:[{t:this.shape_23}]},1).to({state:[{t:this.shape_24}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_26}]},1).to({state:[{t:this.shape_27}]},1).to({state:[{t:this.shape_28}]},1).to({state:[{t:this.shape_29}]},1).to({state:[{t:this.shape_28}]},1).to({state:[{t:this.shape_27}]},1).to({state:[{t:this.shape_26}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_24}]},1).to({state:[{t:this.shape_23}]},1).to({state:[{t:this.shape_22}]},1).to({state:[{t:this.shape_21}]},1).to({state:[{t:this.shape_20}]},1).to({state:[{t:this.shape_19}]},1).to({state:[{t:this.shape_18}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_16}]},1).to({state:[{t:this.shape_15}]},1).wait(1));

	// Body
	this.instance_7 = new lib.Tween3("synched",0);
	this.instance_7.parent = this;
	this.instance_7.setTransform(-0.3,-10.7);

	this.timeline.addTween(cjs.Tween.get(this.instance_7).to({y:-13.7},14).to({y:-10.7},14).wait(1));

	// Legs
	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f().s("#000000").ss(5,1,1).p("ABGitIAAFbAhFitIAAFb");
	this.shape_30.setTransform(-0.3,29.1);

	this.timeline.addTween(cjs.Tween.get(this.shape_30).wait(29));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-65.9,-38.2,125.9,87.3);


(lib.WashingLine1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 22
	this.instance = new lib.Tween6("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(-191.8,-146.3,1,1,0,15,-165);
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(9).to({_off:false},0).to({x:-186,y:-152.3},3).to({regX:-0.1,regY:0.1,scaleX:0.39,scaleY:0.39,skewX:120,skewY:-60,x:-186.8,y:-133.2},2).to({_off:true},1).wait(14));

	// Layer 21
	this.instance_1 = new lib.Tween6("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(-198,-149.1,1,1,60);
	this.instance_1._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(6).to({_off:false},0).to({rotation:-15,x:-225.9,y:-150.3},3).to({scaleX:0.49,scaleY:0.49,rotation:-105,x:-236.1,y:-139.6},2).to({_off:true},1).wait(17));

	// Layer 20
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#000000").ss(5,1,1).p("AAuiXQh7BcAsDT");
	this.shape.setTransform(-214.5,-83);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(29));

	// Layer 19
	this.instance_2 = new lib.Tween30("synched",0);
	this.instance_2.parent = this;
	this.instance_2.setTransform(-217.9,-67.8,0.594,0.594,0,0,0,0.1,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(29));

	// Eyes
	this.instance_3 = new lib.Tween14("synched",0);
	this.instance_3.parent = this;
	this.instance_3.setTransform(-182.6,-109.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).to({startPosition:0},4).to({x:-191.8},2).to({x:-202.2},18).to({x:-182.6},4).wait(1));

	// Bolob
	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#000000").s().p("AjBDCQhRhQABhyQgBhwBRhSQBQhQBxAAQBxAABRBQQBQBSABBwQgBByhQBQQhRBRhxgBQhxABhQhRg");
	this.shape_1.setTransform(-190,-97.5);

	this.timeline.addTween(cjs.Tween.get(this.shape_1).wait(29));

	// Layer 16
	this.instance_4 = new lib.Tween30("synched",0);
	this.instance_4.parent = this;
	this.instance_4.setTransform(-159.9,-131.8,0.594,0.594,0,0,0,0.1,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_4).to({x:-151.9},3).to({x:-183.9},3).to({startPosition:0},18).to({x:-159.9},4).wait(1));

	// Layer 17
	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#000000").ss(5,1,1).p("AAAiWQB5CMiqCh");
	this.shape_2.setTransform(-160,-116.7);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f().s("#000000").ss(5,1,1).p("Ag2CXQCqihheiM");
	this.shape_3.setTransform(-159.5,-116.7);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f().s("#000000").ss(5,1,1).p("Ag8CXQCpihhDiM");
	this.shape_4.setTransform(-158.9,-116.7);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f().s("#000000").ss(5,1,1).p("AA9iWQAoCMipCh");
	this.shape_5.setTransform(-158.1,-116.7);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f().s("#000000").ss(5,1,1).p("AgFiSQB/CEiqCh");
	this.shape_6.setTransform(-160.1,-116.3);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f().s("#000000").ss(5,1,1).p("AhKiYQD7CQirCh");
	this.shape_7.setTransform(-165.6,-116.9);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f().s("#000000").ss(5,1,1).p("Ah5iWQFnCMirCh");
	this.shape_8.setTransform(-171.7,-116.7);
	this.shape_8._off = true;

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f().s("#000000").ss(5,1,1).p("AhOiSQDuCMh7CZ");
	this.shape_9.setTransform(-168.7,-116.3);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f().s("#000000").ss(5,1,1).p("AhDiWQDpCMipCh");
	this.shape_10.setTransform(-164.6,-116.7);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f().s("#000000").ss(5,1,1).p("AgqiSQCqCEiqCh");
	this.shape_11.setTransform(-160.7,-116.3);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_2}]}).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_5}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_9}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_2}]},1).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.shape_8).wait(6).to({_off:false},0).wait(18).to({_off:true},1).wait(4));

	// Legs
	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f().s("#000000").ss(5,1,1).p("AhFitIAAFbABGitIAAFb");
	this.shape_12.setTransform(-190.4,-66.9);

	this.timeline.addTween(cjs.Tween.get(this.shape_12).wait(29));

	// Layer 3
	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f().s("#000000").ss(4,1,1).p("AInAAIxNAA");
	this.shape_13.setTransform(-220.1,-151.8);

	this.timeline.addTween(cjs.Tween.get(this.shape_13).wait(29));

	// Bucket Handle
	this.instance_5 = new lib.Tween13("synched",0);
	this.instance_5.parent = this;
	this.instance_5.setTransform(-165,-153.2,1,1,0,0,0,0.2,-13.2);

	this.timeline.addTween(cjs.Tween.get(this.instance_5).to({regX:0.1,regY:-13.3,rotation:-25.2,x:-170.3,y:-153.3},3).to({regY:-13.4,rotation:10,x:-191.6,y:-153.4},3).to({scaleX:1,scaleY:1,rotation:-6,x:-199.3},2).to({regY:-13.5,rotation:7.5,x:-210.8,y:-153.5},3).to({regY:-13.4,rotation:-8.7,x:-222.2,y:-153.4},3).to({rotation:19,x:-241.2,y:-153.3},5).to({regY:-13.5,scaleX:1,scaleY:1,rotation:-13.2,x:-260.2,y:-153.4},5).to({regX:0.2,regY:-13.2,rotation:0,x:-275.3,y:-153.2},4).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-277.2,-154.6,124.6,107.7);


// stage content:
(lib.TeamworkAnimation = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 10
	this.instance = new lib.LastBucketLift();
	this.instance.parent = this;
	this.instance.setTransform(71.5,120,1,1,0,0,0,10.7,8.4);

	this.instance_1 = new lib.BucketLift();
	this.instance_1.parent = this;
	this.instance_1.setTransform(71.5,197.6,1,1,0,0,0,10.7,8.4);

	this.instance_2 = new lib.FirstLift();
	this.instance_2.parent = this;
	this.instance_2.setTransform(71.5,275.2,1,1,0,0,0,10.7,8.4);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_2},{t:this.instance_1},{t:this.instance}]}).wait(1));

	// Layer 9
	this.instance_3 = new lib.Blobdropbucket();
	this.instance_3.parent = this;
	this.instance_3.setTransform(272,159.1,1,1,0,0,180);

	this.instance_4 = new lib.Tap();
	this.instance_4.parent = this;
	this.instance_4.setTransform(162.4,382.5,1,1,0,0,0,0,5.4);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_4},{t:this.instance_3}]}).wait(1));

	// Teamwork Heading
	this.instance_5 = new lib.TeamworkHeading();
	this.instance_5.parent = this;
	this.instance_5.setTransform(512,250.1,1,1,0,0,0,231.3,26.7);

	this.timeline.addTween(cjs.Tween.get(this.instance_5).wait(1));

	// Layer 7
	this.instance_6 = new lib.Blob5();
	this.instance_6.parent = this;
	this.instance_6.setTransform(257.2,354.1,1,1,0,0,0,0,5.4);

	this.instance_7 = new lib.WashingLine1();
	this.instance_7.parent = this;
	this.instance_7.setTransform(462.4,458.9,1,1,0,0,0,0,5.4);

	this.instance_8 = new lib.WashingLine1();
	this.instance_8.parent = this;
	this.instance_8.setTransform(572.4,458.9,1,1,0,0,0,0,5.4);

	this.instance_9 = new lib.WashingLine1();
	this.instance_9.parent = this;
	this.instance_9.setTransform(682.8,458.9,1,1,0,0,0,0,5.4);

	this.instance_10 = new lib.WashingLine1();
	this.instance_10.parent = this;
	this.instance_10.setTransform(793.6,458.9,1,1,0,0,0,0,5.4);

	this.instance_11 = new lib.WashingLine1();
	this.instance_11.parent = this;
	this.instance_11.setTransform(904,458.9,1,1,0,0,0,0,5.4);

	this.instance_12 = new lib.Blob4();
	this.instance_12.parent = this;
	this.instance_12.setTransform(932.8,458.9,1,1,0,0,0,0,5.4);

	this.instance_13 = new lib.Blob3();
	this.instance_13.parent = this;
	this.instance_13.setTransform(932.8,458.9,1,1,0,0,0,0,5.4);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_13},{t:this.instance_12},{t:this.instance_11},{t:this.instance_10},{t:this.instance_9},{t:this.instance_8},{t:this.instance_7},{t:this.instance_6}]}).wait(1));

	// Layer 11
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#000000").ss(4,1,1).p("EBH+AXQMh36AAAEBH+gXPMiP7AAAEBH+gIPMiP7AAA");
	this.shape.setTransform(567.6,259.4);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

	// Layer 8
	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f().s("#000000").ss(4,1,1).p("EBQFAAAMgjZAAAEgsqAAAMgjZAAA");
	this.shape_1.setTransform(513.6,301.8);

	this.timeline.addTween(cjs.Tween.get(this.shape_1).wait(1));

	// Layer 12
	this.instance_14 = new lib.Blobbucketonhead();
	this.instance_14.parent = this;
	this.instance_14.setTransform(931.7,164.5,1,1,0,0,180,0,5.4);

	this.instance_15 = new lib.BlobLever();
	this.instance_15.parent = this;
	this.instance_15.setTransform(183.6,164.5,1,1,0,0,180,0,5.4);

	this.instance_16 = new lib.Blob1();
	this.instance_16.parent = this;
	this.instance_16.setTransform(821.6,164.5,1,1,0,0,180,0,5.4);

	this.instance_17 = new lib.Blob1();
	this.instance_17.parent = this;
	this.instance_17.setTransform(382,164.5,1,1,0,0,180,0,5.4);

	this.instance_18 = new lib.Blob1();
	this.instance_18.parent = this;
	this.instance_18.setTransform(492,164.5,1,1,0,0,180,0,5.4);

	this.instance_19 = new lib.Blob1();
	this.instance_19.parent = this;
	this.instance_19.setTransform(602,164.5,1,1,0,0,180,0,5.4);

	this.instance_20 = new lib.Blob1();
	this.instance_20.parent = this;
	this.instance_20.setTransform(712,164.5,1,1,0,0,180,0,5.4);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_20},{t:this.instance_19},{t:this.instance_18},{t:this.instance_17},{t:this.instance_16},{t:this.instance_15},{t:this.instance_14}]}).wait(1));

	// Layer 6
	this.instance_21 = new lib.ProjectManager2();
	this.instance_21.parent = this;
	this.instance_21.setTransform(922.8,260.7,1,1,0,0,0,0,5.4);

	this.instance_22 = new lib.ProjectManagers();
	this.instance_22.parent = this;
	this.instance_22.setTransform(843.9,260.7,1,1,0,0,0,0,5.4);

	this.instance_23 = new lib.Blob10();
	this.instance_23.parent = this;
	this.instance_23.setTransform(932.4,68.5,1,1,0,0,0,0,5.4);

	this.instance_24 = new lib.Blob1();
	this.instance_24.parent = this;
	this.instance_24.setTransform(162.8,68.5,1,1,0,0,0,0,5.4);

	this.instance_25 = new lib.Blob1();
	this.instance_25.parent = this;
	this.instance_25.setTransform(822.8,68.5,1,1,0,0,0,0,5.4);

	this.instance_26 = new lib.Blob1();
	this.instance_26.parent = this;
	this.instance_26.setTransform(712.4,68.5,1,1,0,0,0,0,5.4);

	this.instance_27 = new lib.Blob1();
	this.instance_27.parent = this;
	this.instance_27.setTransform(602.4,68.5,1,1,0,0,0,0,5.4);

	this.instance_28 = new lib.Blob1();
	this.instance_28.parent = this;
	this.instance_28.setTransform(492.4,68.5,1,1,0,0,0,0,5.4);

	this.instance_29 = new lib.Blob1();
	this.instance_29.parent = this;
	this.instance_29.setTransform(382.4,68.5,1,1,0,0,0,0,5.4);

	this.instance_30 = new lib.Blob1();
	this.instance_30.parent = this;
	this.instance_30.setTransform(272.4,68.5,1,1,0,0,0,0,5.4);

	this.instance_31 = new lib.Blob6();
	this.instance_31.parent = this;
	this.instance_31.setTransform(118,260.7,1,1,0,0,0,0,5.4);

	this.instance_32 = new lib.Blob1();
	this.instance_32.parent = this;
	this.instance_32.setTransform(162.8,458.9,1,1,0,0,0,0,5.4);

	this.instance_33 = new lib.BLob2();
	this.instance_33.parent = this;
	this.instance_33.setTransform(932.8,458.9,1,1,0,0,0,0,5.4);

	this.instance_34 = new lib.Blob1();
	this.instance_34.parent = this;
	this.instance_34.setTransform(822.8,458.9,1,1,0,0,0,0,5.4);

	this.instance_35 = new lib.Blob1();
	this.instance_35.parent = this;
	this.instance_35.setTransform(712.4,458.9,1,1,0,0,0,0,5.4);

	this.instance_36 = new lib.Blob1();
	this.instance_36.parent = this;
	this.instance_36.setTransform(602.4,458.9,1,1,0,0,0,0,5.4);

	this.instance_37 = new lib.Blob1();
	this.instance_37.parent = this;
	this.instance_37.setTransform(492.4,458.9,1,1,0,0,0,0,5.4);

	this.instance_38 = new lib.Blob1();
	this.instance_38.parent = this;
	this.instance_38.setTransform(382.4,458.9,1,1,0,0,0,0,5.4);

	this.instance_39 = new lib.Blob1();
	this.instance_39.parent = this;
	this.instance_39.setTransform(272.4,458.9,1,1,0,0,0,0,5.4);

	this.instance_40 = new lib.Fillingbuckets();
	this.instance_40.parent = this;
	this.instance_40.setTransform(162.4,458.9,1,1,0,0,0,0,5.4);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_40},{t:this.instance_39},{t:this.instance_38},{t:this.instance_37},{t:this.instance_36},{t:this.instance_35},{t:this.instance_34},{t:this.instance_33},{t:this.instance_32},{t:this.instance_31},{t:this.instance_30},{t:this.instance_29},{t:this.instance_28},{t:this.instance_27},{t:this.instance_26},{t:this.instance_25},{t:this.instance_24},{t:this.instance_23},{t:this.instance_22},{t:this.instance_21}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(493.8,270.5,1048.3,482);
// library properties:
lib.properties = {
	width: 1024,
	height: 500,
	fps: 24,
	color: "#FFFFFF",
	opacity: 1.00,
	webfonts: {},
	manifest: [],
	preloads: []
};




})(lib = lib||{}, images = images||{}, createjs = createjs||{}, ss = ss||{}, AdobeAn = AdobeAn||{});
var lib, images, createjs, ss, AdobeAn;