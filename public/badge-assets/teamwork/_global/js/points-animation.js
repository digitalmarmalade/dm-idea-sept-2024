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


(lib.Tween30 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("Ag6A7QgZgYAAgjQAAgiAZgYQAYgZAiAAQAjAAAYAZQAZAYAAAiQAAAjgZAYQgYAZgjAAQgiAAgYgZg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-8.4,-8.4,16.8,16.8);


(lib.Tween25 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#000000").ss(2,1,1).p("Agvl+IgFi5AkVlRIjhjmAniEBIiRA3ADQl5IBBi+AFWCOIC5A8AGmhDIEUAjAGmkuIC5haAnOgRIjrAKAm6jtIjmgZAoFIGIhpAy");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-70.7,-57.7,141.5,115.5);


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


(lib.Tween20 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("AjDEpIACigQABiFA8hjQA7hjBpg2QBHgkBYgMIAFgBIAAEoIgFABQgOAJgLAMQgqAtgBBKIgCCdg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-19.5,-29.7,39.1,59.5);


(lib.Tween19 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("AhBCwQhpg4g5hlQg7hiABiHIABgSIE8AAIgBAVQAABKApAtQApAuBHABQA+AAAogjIAAExQgyAIg3AAQiOgChog3g");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-28.5,-23.3,57.2,46.7);


(lib.Tween18 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("Ai4hHIAKgKQApgsAChLIAAghIE8AAIAAAkQgCCHg7BhQg8BkhpA2QhBAhhOAMg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-18.5,-23.4,37.1,46.8);


(lib.Tween17 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("AgpEnIABiRQgBhLgogsQgqgthGgBQgwAAgiAUIAAkmQApgFArAAQCOACBoA4QBpA4A6BkQA6BjAACGIgBCOg");
	this.shape.setTransform(-7.6,7.5);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-35.2,-21.9,55.2,59);


(lib.Tween14 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("Aj3HeQhpg3g7hkQg6hkgBiGIAAixQABiGA6hkQA7hjBpg3QBqg3CNgBQCOABBpA3QBqA3A7BjQA7BkAACGIAACxQAACGg7BkQg7BkhqA3QhpA2iOABQiNgBhqg2gAhvjPQgqAsAABLIAACxQAABLAqAsQApAtBGABQBHgBApgtQApgsABhLIAAixQgBhLgpgsQgpguhHAAQhGAAgpAug");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-47.1,-53.3,94.2,106.6);


(lib.Tween13 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("AjpH4QgXAAgMgLQgMgLAAgVIAAuZQAAgVAMgLQAMgLAXAAIHXAAQAUAAALALQAMALAAAVIAAC6QAAAVgMALQgLALgUAAIi3AAIAAK0QgBAVgMALQgNALgVAAg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-28.1,-50.4,56.2,100.9);


(lib.Tween12 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("AhUAmQgCgHAAgGQAAgZAZgTQAagSAjAAQAkAAAZASQAaATAAAZQAAAGgCAHg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-8.6,-3.7,17.3,7.5);


(lib.Tween11 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("Ag3B8QgagKgSgRQgRgRgFgYQgBgFADgDQADgDAFAAIBFAAQAFAAADACIAFAGQAFAGAIADQAHADALAAQAKAAAFgDQAFgCAAgFQgBgIgJgEQgKgEgOgDIghgHQgRgFgPgIQgQgJgJgOQgKgQAAgZQAAgZAOgTQAOgTAZgKQAZgLAiAAQAaAAAYAIQAZAIARAQQASAQAGAZQABAFgDAEQgDADgGAAIhFAAQgEAAgEgCQgDgCgDgEQgDgFgGgCQgFgCgGAAQgFAAgEACQgFADAAAFQAAAIAKAEQAJAFAPADIAgAHQASAEAPAJQAPAJAKAOQAKAQAAAZQAAAZgPATQgOATgbAKQgaAKgkAAQggAAgbgJg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-12.2,-13.3,24.4,26.7);


(lib.Tween10 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("AhBB7QgbgKgOgTQgPgTAAgZQAAgZAKgQQAKgOAPgJQAPgJASgEIAggHQAPgDAJgFQAKgEAAgIQAAgFgFgDQgEgCgFAAQgGAAgFACQgGACgDAFQgDAEgDACQgEACgEAAIhFAAQgGAAgDgDQgDgEABgFQAGgZASgQQARgQAZgIQAYgIAaAAQAiAAAZALQAZAKAOATQAOATAAAZQAAAZgKAQQgJAOgQAJQgPAIgRAFIghAHQgOADgKAEQgJAEgBAIQAAAFAFACQAFADAKAAQALAAAHgDQAIgDAFgGIAFgGQADgCAFAAIBFAAQAFAAADADQADADgBAFQgFAYgRARQgSARgaAKQgbAJggAAQgkAAgagKg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-12.2,-13.3,24.4,26.7);


(lib.Tween8 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("AggB+QgGAAgDgDQgCgDAAgFIAAioIg9AAQgGAAgDgDQgCgDAAgFIAAgyQAAgFACgDQADgDAGAAIDRAAQAFAAADADQAEADAAAFIAAAyQAAAFgEADQgDADgFAAIg8AAIAACoQAAAFgEADQgDADgFAAg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-11.6,-12.6,23.3,25.2);


(lib.Tween7 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("AggB+QgGAAgDgDQgDgCAAgGIAAioIg8AAQgGAAgDgDQgDgCAAgGIAAgyQAAgFADgEQADgCAGAAIDRAAQAFAAAEACQACAEAAAFIAAAyQAAAGgCACQgEADgFAAIg9AAIAACoQAAAGgCACQgEADgFAAg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-11.6,-12.6,23.3,25.2);


(lib.Tween2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("AAoB+QgFAAgDgDQgCgCgBgGIAAgoIgdAAQg4AAgfgaQgegaAAgwQAAgvAegaQAfgbA4AAIBrAAQAGAAADACQADAEAAAEIAADmQAAAGgDACQgDADgGAAgAgSgvQgJAJAAANQAAAPAJAJQAJAGAOABIAYAAIAAg9IgYAAQgOAAgJAIg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-11.8,-12.6,23.7,25.2);


(lib.Tween21 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Tween7("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(-1.7,-3.2,1,1,0,30,-150);

	this.instance_1 = new lib.Tween10("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(0.9,2.3,1,1,0,30,-150);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_1},{t:this.instance}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-12.8,-19.6,27.2,36);


(lib.Tween15 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Tween23("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(-2.7,-2,0.594,0.594,-15,0,0,0,-0.1);

	this.instance_1 = new lib.Tween24("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(-17,1.9,0.594,0.594,-15,0,0,0,-0.1);

	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("AiIDuQhig5gehuQgdhtA4hjQA6hhBtgeQBtgdBiA4QBjA5AdBuQAeBtg5BjQg5BihuAdQglAKgjAAQhGAAhBglg");

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape},{t:this.instance_1},{t:this.instance}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-27.5,-27.5,55,55);


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


(lib.Rolling0 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 18
	this.instance = new lib.Tween14("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(221.1,-157.9,1,1,0,0,0,0,53.3);
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(129).to({_off:false},0).to({scaleY:0.93,y:-21.4},5).to({scaleY:1},2).wait(14));

	// Body
	this.instance_1 = new lib.Tween15("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(304.7,-74.3);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({x:300.2},6).to({x:304.7},2).to({startPosition:0},6).to({x:300.2},6).to({x:304.7},2).to({startPosition:0},3).to({x:300.2},6).to({x:304.7},2).to({startPosition:0},3).to({x:300.2},8).to({x:304.7},2).to({startPosition:0},3).to({x:303},1).to({x:300.2},4).to({rotation:-45,x:265.2,y:-51.4},2).to({startPosition:0},13).to({rotation:0,x:282.2,y:-64.8},4).to({y:-62.3},3).to({x:312.2,y:-74.3},4).to({startPosition:0},59).to({x:304.7},10).wait(1));

	// Left Hand
	this.instance_2 = new lib.Tween30("synched",0);
	this.instance_2.parent = this;
	this.instance_2.setTransform(265.6,-50.3,0.594,0.594,0,0,180,0,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).to({x:261.6},6).to({x:265.6},2).to({startPosition:0},6).to({x:261.6},6).to({x:265.6},2).to({startPosition:0},3).to({x:261.6},6).to({x:265.6},2).to({startPosition:0},3).to({x:261.6},8).to({x:265.6},2).to({startPosition:0},3).to({regX:-0.1,regY:0,x:264.1},1).to({regX:0,regY:0.1,x:261.6},4).to({x:233.1,y:-27.8},2).to({startPosition:0},13).to({x:273.1},4).to({startPosition:0},3).to({x:293.1,y:-42.8},4).to({startPosition:0},59).to({x:265.6,y:-50.3},10).wait(1));

	// Right Hand
	this.instance_3 = new lib.Tween30("synched",0);
	this.instance_3.parent = this;
	this.instance_3.setTransform(265.6,-80.3,0.594,0.594,0,0,0,0.1,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).to({x:261.6,y:-82.3},6).to({x:265.6,y:-80.3},2).to({startPosition:0},6).to({x:261.6,y:-82.3},6).to({x:265.6,y:-80.3},2).to({startPosition:0},3).to({x:261.6,y:-82.3},6).to({x:265.6,y:-80.3},2).to({startPosition:0},3).to({x:261.6,y:-82.3},8).to({x:265.6,y:-80.3},2).to({startPosition:0},3).to({regY:0,x:264,y:-81.1},1).to({regY:0.1,x:261.6,y:-82.3},4).to({x:221.6,y:-28.3},2).to({startPosition:0},13).to({x:256.6},4).to({startPosition:0},3).to({x:297.8,y:-33.8},4).to({startPosition:0},59).to({x:265.6,y:-80.3},10).wait(1));

	// Left Arm
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#000000").ss(5,1,1).p("AhmBdQBsAABii5");
	this.shape.setTransform(275.9,-59.6);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f().s("#000000").ss(5,1,1).p("AhqBdQBzAABii5");
	this.shape_1.setTransform(275.6,-59.6);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#000000").ss(5,1,1).p("AhtBdQB5AABii5");
	this.shape_2.setTransform(275.2,-59.6);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f().s("#000000").ss(5,1,1).p("AhwBdQCAAABii5");
	this.shape_3.setTransform(274.9,-59.6);
	this.shape_3._off = true;

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f().s("#000000").ss(5,1,1).p("Ah0BdQCHAABii5");
	this.shape_4.setTransform(274.6,-59.6);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f().s("#000000").ss(5,1,1).p("Ah3BdQCNAABii5");
	this.shape_5.setTransform(274.2,-59.6);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f().s("#000000").ss(5,1,1).p("Ah6BdQCUAABii5");
	this.shape_6.setTransform(273.9,-59.6);
	this.shape_6._off = true;

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f().s("#000000").ss(5,1,1).p("AhpBdQBxAABii5");
	this.shape_7.setTransform(275.7,-59.6);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f().s("#000000").ss(5,1,1).p("AhrBdQB2AABii5");
	this.shape_8.setTransform(275.4,-59.6);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f().s("#000000").ss(5,1,1).p("AhuBdQB7AABii5");
	this.shape_9.setTransform(275.2,-59.6);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f().s("#000000").ss(5,1,1).p("AhzBdQCFAABii5");
	this.shape_10.setTransform(274.7,-59.6);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f().s("#000000").ss(5,1,1).p("Ah1BdQCKAABii5");
	this.shape_11.setTransform(274.4,-59.6);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f().s("#000000").ss(5,1,1).p("Ah4BdQCPAABii5");
	this.shape_12.setTransform(274.2,-59.6);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f().s("#000000").ss(5,1,1).p("AhxBdQCBAABii5");
	this.shape_13.setTransform(274.8,-59.6);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f().s("#000000").ss(5,1,1).p("Ah6BdQCTAABii5");
	this.shape_14.setTransform(250.9,-38.6);
	this.shape_14._off = true;

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f().s("#000000").ss(5,1,1).p("AhoBfQBvgEBii5");
	this.shape_15.setTransform(257.7,-38.4);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f().s("#000000").ss(5,1,1).p("AhWBhQBMgIBhi5");
	this.shape_16.setTransform(264.5,-38.2);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f().s("#000000").ss(5,1,1).p("AhEBjQAogMBhi5");
	this.shape_17.setTransform(271.4,-38);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f().s("#000000").ss(5,1,1).p("AgyBlQAEgQBhi5");
	this.shape_18.setTransform(278.2,-37.9);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f().s("#000000").ss(5,1,1).p("AgyBlQAegHBHjC");
	this.shape_19.setTransform(278.2,-37.9);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f().s("#000000").ss(5,1,1).p("AgyBlQA3ABAujK");
	this.shape_20.setTransform(278.2,-37.9);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f().s("#000000").ss(5,1,1).p("AgyBlQBQAKAVjT");
	this.shape_21.setTransform(278.2,-37.9);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f().s("#000000").ss(5,1,1).p("AgpBsQBBAJASjg");
	this.shape_22.setTransform(282.3,-42.4);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f().s("#000000").ss(5,1,1).p("AggB0QAzAHAPju");
	this.shape_23.setTransform(286.4,-46.9);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f().s("#000000").ss(5,1,1).p("AgYB7QAlAGAMj7");
	this.shape_24.setTransform(290.5,-51.4);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f().s("#000000").ss(5,1,1).p("AgPCDQAXAEAIkJ");
	this.shape_25.setTransform(294.7,-55.9);
	this.shape_25._off = true;

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f().s("#000000").ss(5,1,1).p("AgYB/QAfAEASkB");
	this.shape_26.setTransform(292.8,-56.2);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f().s("#000000").ss(5,1,1).p("AggB7QAnAEAbj5");
	this.shape_27.setTransform(290.9,-56.6);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f().s("#000000").ss(5,1,1).p("AgpB3QAwADAjjx");
	this.shape_28.setTransform(289,-57);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f().s("#000000").ss(5,1,1).p("AgyB0QA5ACAsjp");
	this.shape_29.setTransform(287.2,-57.4);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f().s("#000000").ss(5,1,1).p("Ag7BwQBCACA1jh");
	this.shape_30.setTransform(285.3,-57.7);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f().s("#000000").ss(5,1,1).p("AhDBsQBKACA+jZ");
	this.shape_31.setTransform(283.4,-58.1);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f().s("#000000").ss(5,1,1).p("AhMBoQBSABBHjR");
	this.shape_32.setTransform(281.5,-58.5);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f().s("#000000").ss(5,1,1).p("AhVBlQBbAABQjJ");
	this.shape_33.setTransform(279.7,-58.9);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f().s("#000000").ss(5,1,1).p("AheBhQBkAABZjB");
	this.shape_34.setTransform(277.8,-59.2);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape}]}).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_2}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_4,p:{x:274.6}}]},1).to({state:[{t:this.shape_5}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_2}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_4,p:{x:274.6}}]},1).to({state:[{t:this.shape_5}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_2}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_4,p:{x:274.6}}]},1).to({state:[{t:this.shape_5}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_9,p:{x:275.2}}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_12}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape_9,p:{x:275.1}}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_4,p:{x:274.5}}]},1).to({state:[{t:this.shape_12}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_16}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_18}]},1).to({state:[{t:this.shape_19}]},1).to({state:[{t:this.shape_20}]},1).to({state:[{t:this.shape_21}]},1).to({state:[{t:this.shape_22}]},1).to({state:[{t:this.shape_23}]},1).to({state:[{t:this.shape_24}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_26}]},1).to({state:[{t:this.shape_27}]},1).to({state:[{t:this.shape_28}]},1).to({state:[{t:this.shape_29}]},1).to({state:[{t:this.shape_30}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_32}]},1).to({state:[{t:this.shape_33}]},1).to({state:[{t:this.shape_34}]},1).to({state:[{t:this.shape}]},1).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.shape).to({_off:true},1).wait(7).to({_off:false},0).wait(6).to({_off:true},1).wait(7).to({_off:false},0).wait(3).to({_off:true},1).wait(7).to({_off:false},0).wait(3).to({_off:true},1).wait(9).to({_off:false},0).wait(3).to({_off:true},1).wait(99).to({_off:false},0).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.shape_3).wait(3).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(9).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(6).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(7).to({_off:false},0).to({_off:true},1).wait(4).to({_off:false},0).to({_off:true},1).wait(104));
	this.timeline.addTween(cjs.Tween.get(this.shape_6).wait(6).to({_off:false},0).to({_off:true},1).wait(13).to({_off:false},0).to({_off:true},1).wait(10).to({_off:false},0).to({_off:true},1).wait(12).to({_off:false},0).to({_off:true},1).wait(9).to({_off:false},0).wait(1).to({x:262.4,y:-49.1},0).to({_off:true},1).wait(94));
	this.timeline.addTween(cjs.Tween.get(this.shape_14).wait(56).to({_off:false},0).wait(13).to({_off:true},1).wait(80));
	this.timeline.addTween(cjs.Tween.get(this.shape_25).wait(80).to({_off:false},0).wait(59).to({_off:true},1).wait(10));

	// Right Arm
	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f().s("#000000").ss(5,1,1).p("ACbA8QjTA2hii5");
	this.shape_35.setTransform(283.3,-70.3);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f().s("#000000").ss(5,1,1).p("AifhLQBsDBDTg2");
	this.shape_36.setTransform(282.8,-70.7);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f().s("#000000").ss(5,1,1).p("AikhPQB2DJDTg2");
	this.shape_37.setTransform(282.3,-71.1);

	this.shape_38 = new cjs.Shape();
	this.shape_38.graphics.f().s("#000000").ss(5,1,1).p("AiqhSQCCDRDTg3");
	this.shape_38.setTransform(281.8,-71.5);
	this.shape_38._off = true;

	this.shape_39 = new cjs.Shape();
	this.shape_39.graphics.f().s("#000000").ss(5,1,1).p("AivhWQCMDZDTg2");
	this.shape_39.setTransform(281.2,-72);

	this.shape_40 = new cjs.Shape();
	this.shape_40.graphics.f().s("#000000").ss(5,1,1).p("Ai0haQCWDhDTg2");
	this.shape_40.setTransform(280.7,-72.4);

	this.shape_41 = new cjs.Shape();
	this.shape_41.graphics.f().s("#000000").ss(5,1,1).p("AC6BVQjTA2igjp");
	this.shape_41.setTransform(280.2,-72.8);
	this.shape_41._off = true;

	this.shape_42 = new cjs.Shape();
	this.shape_42.graphics.f().s("#000000").ss(5,1,1).p("AiahHQBiC5DTg2");
	this.shape_42.setTransform(283.3,-70.3);
	this.shape_42._off = true;

	this.shape_43 = new cjs.Shape();
	this.shape_43.graphics.f().s("#000000").ss(5,1,1).p("AiehKQBqC/DTg2");
	this.shape_43.setTransform(282.9,-70.6);

	this.shape_44 = new cjs.Shape();
	this.shape_44.graphics.f().s("#000000").ss(5,1,1).p("AiihNQByDFDTg2");
	this.shape_44.setTransform(282.5,-70.9);

	this.shape_45 = new cjs.Shape();
	this.shape_45.graphics.f().s("#000000").ss(5,1,1).p("AilhPQB5DLDTg3");
	this.shape_45.setTransform(282.2,-71.2);

	this.shape_46 = new cjs.Shape();
	this.shape_46.graphics.f().s("#000000").ss(5,1,1).p("AithVQCIDXDTg2");
	this.shape_46.setTransform(281.4,-71.9);

	this.shape_47 = new cjs.Shape();
	this.shape_47.graphics.f().s("#000000").ss(5,1,1).p("AixhYQCQDdDTg2");
	this.shape_47.setTransform(281,-72.2);

	this.shape_48 = new cjs.Shape();
	this.shape_48.graphics.f().s("#000000").ss(5,1,1).p("Ai1hbQCYDjDTg2");
	this.shape_48.setTransform(280.6,-72.5);

	this.shape_49 = new cjs.Shape();
	this.shape_49.graphics.f().s("#000000").ss(5,1,1).p("AimhQQB6DMDTg2");
	this.shape_49.setTransform(282.1,-71.3);

	this.shape_50 = new cjs.Shape();
	this.shape_50.graphics.f().s("#000000").ss(5,1,1).p("AirhUQCEDUDTg3");
	this.shape_50.setTransform(281.6,-71.6);

	this.shape_51 = new cjs.Shape();
	this.shape_51.graphics.f().s("#000000").ss(5,1,1).p("AivhXQCNDbDTg3");
	this.shape_51.setTransform(281.2,-72);

	this.shape_52 = new cjs.Shape();
	this.shape_52.graphics.f().s("#000000").ss(5,1,1).p("Ai0hbQCWDiDTg2");
	this.shape_52.setTransform(280.7,-72.4);

	this.shape_53 = new cjs.Shape();
	this.shape_53.graphics.f().s("#000000").ss(5,1,1).p("Ai+gmQDbCPCih5");
	this.shape_53.setTransform(262.3,-51.7);

	this.shape_54 = new cjs.Shape();
	this.shape_54.graphics.f().s("#000000").ss(5,1,1).p("ADDhJQhvC8kWg1");
	this.shape_54.setTransform(244.3,-35.1);

	this.shape_55 = new cjs.Shape();
	this.shape_55.graphics.f().s("#000000").ss(5,1,1).p("AjCA+QEWA1Bvi8");
	this.shape_55.setTransform(244.3,-35.1);
	this.shape_55._off = true;

	this.shape_56 = new cjs.Shape();
	this.shape_56.graphics.f().s("#000000").ss(5,1,1).p("AirBEQDGA0CRjG");
	this.shape_56.setTransform(250,-35.6);

	this.shape_57 = new cjs.Shape();
	this.shape_57.graphics.f().s("#000000").ss(5,1,1).p("AiUBMQB4AxCxjR");
	this.shape_57.setTransform(255.6,-36.2);

	this.shape_58 = new cjs.Shape();
	this.shape_58.graphics.f().s("#000000").ss(5,1,1).p("Ah9BSQAoAwDTjc");
	this.shape_58.setTransform(261.3,-36.6);

	this.shape_59 = new cjs.Shape();
	this.shape_59.graphics.f().s("#000000").ss(5,1,1).p("ABqhfQj0DmAngu");
	this.shape_59.setTransform(266.6,-37.2);

	this.shape_60 = new cjs.Shape();
	this.shape_60.graphics.f().s("#000000").ss(5,1,1).p("AhlBWQgVA9Dij1");
	this.shape_60.setTransform(266.8,-36.9);

	this.shape_61 = new cjs.Shape();
	this.shape_61.graphics.f().s("#000000").ss(5,1,1).p("AhmBUQgCBLDPkD");
	this.shape_61.setTransform(266.9,-36.7);

	this.shape_62 = new cjs.Shape();
	this.shape_62.graphics.f().s("#000000").ss(5,1,1).p("ABnhnQi9ESgQha");
	this.shape_62.setTransform(266.9,-36.4);

	this.shape_63 = new cjs.Shape();
	this.shape_63.graphics.f().s("#000000").ss(5,1,1).p("AhOBoQAkAwB5kG");
	this.shape_63.setTransform(274.8,-40);

	this.shape_64 = new cjs.Shape();
	this.shape_64.graphics.f().s("#000000").ss(5,1,1).p("Ag1B6QA2AHA1j7");
	this.shape_64.setTransform(282.6,-43.3);

	this.shape_65 = new cjs.Shape();
	this.shape_65.graphics.f().s("#000000").ss(5,1,1).p("AgeCKQBJgjgPjw");
	this.shape_65.setTransform(290.6,-46.1);

	this.shape_66 = new cjs.Shape();
	this.shape_66.graphics.f().s("#000000").ss(5,1,1).p("AgOiYQBTDlhdBM");
	this.shape_66.setTransform(300.3,-49);

	this.shape_67 = new cjs.Shape();
	this.shape_67.graphics.f().s("#000000").ss(5,1,1).p("AgYCZQBdhMhTjl");
	this.shape_67.setTransform(300.3,-49);
	this.shape_67._off = true;

	this.shape_68 = new cjs.Shape();
	this.shape_68.graphics.f().s("#000000").ss(5,1,1).p("AgdCDQBdgyg2jT");
	this.shape_68.setTransform(297.8,-51.2);

	this.shape_69 = new cjs.Shape();
	this.shape_69.graphics.f().s("#000000").ss(5,1,1).p("AglBtQBegXgZjC");
	this.shape_69.setTransform(295.6,-53.4);

	this.shape_70 = new cjs.Shape();
	this.shape_70.graphics.f().s("#000000").ss(5,1,1).p("AgxBXQBeADAFiw");
	this.shape_70.setTransform(293.8,-55.6);

	this.shape_71 = new cjs.Shape();
	this.shape_71.graphics.f().s("#000000").ss(5,1,1).p("AhAA/QBfAdAiie");
	this.shape_71.setTransform(292.3,-57.6);

	this.shape_72 = new cjs.Shape();
	this.shape_72.graphics.f().s("#000000").ss(5,1,1).p("AhPAkQBfA3BAiN");
	this.shape_72.setTransform(290.8,-59.2);

	this.shape_73 = new cjs.Shape();
	this.shape_73.graphics.f().s("#000000").ss(5,1,1).p("AheAFQBfBSBeh8");
	this.shape_73.setTransform(289.3,-60.5);

	this.shape_74 = new cjs.Shape();
	this.shape_74.graphics.f().s("#000000").ss(5,1,1).p("AhtgaQBgBrB7hq");
	this.shape_74.setTransform(287.8,-61.7);

	this.shape_75 = new cjs.Shape();
	this.shape_75.graphics.f().s("#000000").ss(5,1,1).p("Ah8gnQBhCFCYha");
	this.shape_75.setTransform(286.3,-64.7);

	this.shape_76 = new cjs.Shape();
	this.shape_76.graphics.f().s("#000000").ss(5,1,1).p("AiLg2QBhCfC2hI");
	this.shape_76.setTransform(284.8,-67.6);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_35}]}).to({state:[{t:this.shape_36}]},1).to({state:[{t:this.shape_37}]},1).to({state:[{t:this.shape_38}]},1).to({state:[{t:this.shape_39}]},1).to({state:[{t:this.shape_40}]},1).to({state:[{t:this.shape_41}]},1).to({state:[{t:this.shape_38}]},1).to({state:[{t:this.shape_35}]},1).to({state:[{t:this.shape_42}]},1).to({state:[{t:this.shape_42}]},1).to({state:[{t:this.shape_42}]},1).to({state:[{t:this.shape_42}]},1).to({state:[{t:this.shape_42}]},1).to({state:[{t:this.shape_35}]},1).to({state:[{t:this.shape_36}]},1).to({state:[{t:this.shape_37}]},1).to({state:[{t:this.shape_38}]},1).to({state:[{t:this.shape_39}]},1).to({state:[{t:this.shape_40}]},1).to({state:[{t:this.shape_41}]},1).to({state:[{t:this.shape_38}]},1).to({state:[{t:this.shape_35}]},1).to({state:[{t:this.shape_42}]},1).to({state:[{t:this.shape_42}]},1).to({state:[{t:this.shape_35}]},1).to({state:[{t:this.shape_36}]},1).to({state:[{t:this.shape_37}]},1).to({state:[{t:this.shape_38}]},1).to({state:[{t:this.shape_39}]},1).to({state:[{t:this.shape_40}]},1).to({state:[{t:this.shape_41}]},1).to({state:[{t:this.shape_38}]},1).to({state:[{t:this.shape_35}]},1).to({state:[{t:this.shape_42}]},1).to({state:[{t:this.shape_42}]},1).to({state:[{t:this.shape_35}]},1).to({state:[{t:this.shape_43}]},1).to({state:[{t:this.shape_44}]},1).to({state:[{t:this.shape_45}]},1).to({state:[{t:this.shape_38}]},1).to({state:[{t:this.shape_46}]},1).to({state:[{t:this.shape_47}]},1).to({state:[{t:this.shape_48}]},1).to({state:[{t:this.shape_41}]},1).to({state:[{t:this.shape_38}]},1).to({state:[{t:this.shape_35}]},1).to({state:[{t:this.shape_42}]},1).to({state:[{t:this.shape_42}]},1).to({state:[{t:this.shape_35}]},1).to({state:[{t:this.shape_49}]},1).to({state:[{t:this.shape_50}]},1).to({state:[{t:this.shape_51}]},1).to({state:[{t:this.shape_52}]},1).to({state:[{t:this.shape_41}]},1).to({state:[{t:this.shape_53}]},1).to({state:[{t:this.shape_54}]},1).to({state:[{t:this.shape_55}]},1).to({state:[{t:this.shape_55}]},1).to({state:[{t:this.shape_55}]},1).to({state:[{t:this.shape_55}]},1).to({state:[{t:this.shape_55}]},1).to({state:[{t:this.shape_55}]},1).to({state:[{t:this.shape_55}]},1).to({state:[{t:this.shape_55}]},1).to({state:[{t:this.shape_55}]},1).to({state:[{t:this.shape_55}]},1).to({state:[{t:this.shape_55}]},1).to({state:[{t:this.shape_55}]},1).to({state:[{t:this.shape_54}]},1).to({state:[{t:this.shape_56}]},1).to({state:[{t:this.shape_57}]},1).to({state:[{t:this.shape_58}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_61}]},1).to({state:[{t:this.shape_62}]},1).to({state:[{t:this.shape_63}]},1).to({state:[{t:this.shape_64}]},1).to({state:[{t:this.shape_65}]},1).to({state:[{t:this.shape_66}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_66}]},1).to({state:[{t:this.shape_68}]},1).to({state:[{t:this.shape_69}]},1).to({state:[{t:this.shape_70}]},1).to({state:[{t:this.shape_71}]},1).to({state:[{t:this.shape_72}]},1).to({state:[{t:this.shape_73}]},1).to({state:[{t:this.shape_74}]},1).to({state:[{t:this.shape_75}]},1).to({state:[{t:this.shape_76}]},1).to({state:[{t:this.shape_35}]},1).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.shape_35).to({_off:true},1).wait(7).to({_off:false},0).to({_off:true},1).wait(5).to({_off:false},0).to({_off:true},1).wait(7).to({_off:false},0).to({_off:true},1).wait(2).to({_off:false},0).to({_off:true},1).wait(7).to({_off:false},0).to({_off:true},1).wait(2).to({_off:false},0).to({_off:true},1).wait(9).to({_off:false},0).to({_off:true},1).wait(2).to({_off:false},0).to({_off:true},1).wait(99).to({_off:false},0).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.shape_38).wait(3).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(9).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(6).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(7).to({_off:false},0).to({_off:true},1).wait(4).to({_off:false},0).to({_off:true},1).wait(104));
	this.timeline.addTween(cjs.Tween.get(this.shape_41).wait(6).to({_off:false},0).to({_off:true},1).wait(13).to({_off:false},0).to({_off:true},1).wait(10).to({_off:false},0).to({_off:true},1).wait(12).to({_off:false},0).to({_off:true},1).wait(9).to({_off:false},0).to({_off:true},1).wait(95));
	this.timeline.addTween(cjs.Tween.get(this.shape_42).wait(9).to({_off:false},0).wait(4).to({_off:true},1).wait(9).to({_off:false},0).wait(1).to({_off:true},1).wait(9).to({_off:false},0).wait(1).to({_off:true},1).wait(11).to({_off:false},0).wait(1).to({_off:true},1).wait(101));
	this.timeline.addTween(cjs.Tween.get(this.shape_55).wait(57).to({_off:false},0).wait(11).to({_off:true},1).wait(81));
	this.timeline.addTween(cjs.Tween.get(this.shape_67).wait(81).to({_off:false},0).wait(57).to({_off:true},1).wait(11));

	// Layer 10
	this.shape_77 = new cjs.Shape();
	this.shape_77.graphics.f().s("#000000").ss(5,1,1).p("AhBioICDFR");
	this.shape_77.setTransform(323.3,-40.4);

	this.shape_78 = new cjs.Shape();
	this.shape_78.graphics.f().s("#000000").ss(5,1,1).p("AhFinICLFP");
	this.shape_78.setTransform(322.9,-40.2);

	this.shape_79 = new cjs.Shape();
	this.shape_79.graphics.f().s("#000000").ss(5,1,1).p("AhJilICTFL");
	this.shape_79.setTransform(322.5,-40.1);

	this.shape_80 = new cjs.Shape();
	this.shape_80.graphics.f().s("#000000").ss(5,1,1).p("AhNijICcFH");
	this.shape_80.setTransform(322.1,-39.9);
	this.shape_80._off = true;

	this.shape_81 = new cjs.Shape();
	this.shape_81.graphics.f().s("#000000").ss(5,1,1).p("AhSiiIClFF");
	this.shape_81.setTransform(321.6,-39.7);

	this.shape_82 = new cjs.Shape();
	this.shape_82.graphics.f().s("#000000").ss(5,1,1).p("AhWigICtFB");
	this.shape_82.setTransform(321.2,-39.6);

	this.shape_83 = new cjs.Shape();
	this.shape_83.graphics.f().s("#000000").ss(5,1,1).p("AhaieIC1E9");
	this.shape_83.setTransform(320.8,-39.4);
	this.shape_83._off = true;

	this.shape_84 = new cjs.Shape();
	this.shape_84.graphics.f().s("#000000").ss(5,1,1).p("AhEinICJFP");
	this.shape_84.setTransform(323,-40.3);

	this.shape_85 = new cjs.Shape();
	this.shape_85.graphics.f().s("#000000").ss(5,1,1).p("AhHimICPFN");
	this.shape_85.setTransform(322.7,-40.2);

	this.shape_86 = new cjs.Shape();
	this.shape_86.graphics.f().s("#000000").ss(5,1,1).p("AhKilICVFK");
	this.shape_86.setTransform(322.4,-40);

	this.shape_87 = new cjs.Shape();
	this.shape_87.graphics.f().s("#000000").ss(5,1,1).p("AhQiiIChFF");
	this.shape_87.setTransform(321.8,-39.8);

	this.shape_88 = new cjs.Shape();
	this.shape_88.graphics.f().s("#000000").ss(5,1,1).p("AhUihICpFD");
	this.shape_88.setTransform(321.4,-39.7);

	this.shape_89 = new cjs.Shape();
	this.shape_89.graphics.f().s("#000000").ss(5,1,1).p("AhXigICvFA");
	this.shape_89.setTransform(321.1,-39.5);

	this.shape_90 = new cjs.Shape();
	this.shape_90.graphics.f().s("#000000").ss(5,1,1).p("AhLikICXFJ");
	this.shape_90.setTransform(322.3,-40);

	this.shape_91 = new cjs.Shape();
	this.shape_91.graphics.f().s("#000000").ss(5,1,1).p("AhOijICdFH");
	this.shape_91.setTransform(322,-39.9);

	this.shape_92 = new cjs.Shape();
	this.shape_92.graphics.f().s("#000000").ss(5,1,1).p("AhSihIClFD");
	this.shape_92.setTransform(321.6,-39.7);

	this.shape_93 = new cjs.Shape();
	this.shape_93.graphics.f().s("#000000").ss(5,1,1).p("Ah9g0QCHBfB0AK");
	this.shape_93.setTransform(309.7,-42.2);

	this.shape_94 = new cjs.Shape();
	this.shape_94.graphics.f().s("#000000").ss(5,1,1).p("AigAzQC1AfCMiK");
	this.shape_94.setTransform(298.6,-44.7);

	this.shape_95 = new cjs.Shape();
	this.shape_95.graphics.f().s("#000000").ss(5,1,1).p("AikgNQC1AfCUgF");
	this.shape_95.setTransform(299,-38.2);

	this.shape_96 = new cjs.Shape();
	this.shape_96.graphics.f().s("#000000").ss(5,1,1).p("AiohQQC1AgCbCB");
	this.shape_96.setTransform(299.4,-31.5);
	this.shape_96._off = true;

	this.shape_97 = new cjs.Shape();
	this.shape_97.graphics.f().s("#000000").ss(5,1,1).p("AiYhbQCXA2CaCB");
	this.shape_97.setTransform(300.9,-32.7);

	this.shape_98 = new cjs.Shape();
	this.shape_98.graphics.f().s("#000000").ss(5,1,1).p("AiIhmQB3BMCaCB");
	this.shape_98.setTransform(302.5,-33.8);

	this.shape_99 = new cjs.Shape();
	this.shape_99.graphics.f().s("#000000").ss(5,1,1).p("Ah5hxQBZBjCaCA");
	this.shape_99.setTransform(304,-34.9);

	this.shape_100 = new cjs.Shape();
	this.shape_100.graphics.f().s("#000000").ss(5,1,1).p("Ahph9QA5B6CaCA");
	this.shape_100.setTransform(305.6,-36);

	this.shape_101 = new cjs.Shape();
	this.shape_101.graphics.f().s("#000000").ss(5,1,1).p("Ahph9QAeCVC1Bl");
	this.shape_101.setTransform(305.6,-36);

	this.shape_102 = new cjs.Shape();
	this.shape_102.graphics.f().s("#000000").ss(5,1,1).p("Ahph9QAECyDPBI");
	this.shape_102.setTransform(305.6,-36);

	this.shape_103 = new cjs.Shape();
	this.shape_103.graphics.f().s("#000000").ss(5,1,1).p("Ahoh9QgXDODqAs");
	this.shape_103.setTransform(305.5,-36);

	this.shape_104 = new cjs.Shape();
	this.shape_104.graphics.f().s("#000000").ss(5,1,1).p("AhYiRQAYC6CYBp");
	this.shape_104.setTransform(310.7,-38.2);

	this.shape_105 = new cjs.Shape();
	this.shape_105.graphics.f().s("#000000").ss(5,1,1).p("AhGimICNFN");
	this.shape_105.setTransform(315.8,-40.4);

	this.shape_106 = new cjs.Shape();
	this.shape_106.graphics.f().s("#000000").ss(5,1,1).p("AgYizIAxFn");
	this.shape_106.setTransform(315.9,-40.4);

	this.shape_107 = new cjs.Shape();
	this.shape_107.graphics.f().s("#000000").ss(5,1,1).p("AABi1IgBFr");
	this.shape_107.setTransform(320.8,-40.4);

	this.shape_108 = new cjs.Shape();
	this.shape_108.graphics.f().s("#000000").ss(5,1,1).p("AAAC2IABlr");
	this.shape_108.setTransform(320.8,-40.4);
	this.shape_108._off = true;

	this.shape_109 = new cjs.Shape();
	this.shape_109.graphics.f().s("#000000").ss(5,1,1).p("AgUizIApFn");
	this.shape_109.setTransform(320.3,-40.5);

	this.shape_110 = new cjs.Shape();
	this.shape_110.graphics.f().s("#000000").ss(5,1,1).p("AgciyIA5Fl");
	this.shape_110.setTransform(320.5,-40.5);

	this.shape_111 = new cjs.Shape();
	this.shape_111.graphics.f().s("#000000").ss(5,1,1).p("AgliwIBLFh");
	this.shape_111.setTransform(320.6,-40.5);

	this.shape_112 = new cjs.Shape();
	this.shape_112.graphics.f().s("#000000").ss(5,1,1).p("AgtivIBbFf");
	this.shape_112.setTransform(320.8,-40.5);

	this.shape_113 = new cjs.Shape();
	this.shape_113.graphics.f().s("#000000").ss(5,1,1).p("AgxitIBjFc");
	this.shape_113.setTransform(321.3,-40.4);

	this.shape_114 = new cjs.Shape();
	this.shape_114.graphics.f().s("#000000").ss(5,1,1).p("Ag1isIBrFZ");
	this.shape_114.setTransform(321.8,-40.4);

	this.shape_115 = new cjs.Shape();
	this.shape_115.graphics.f().s("#000000").ss(5,1,1).p("Ag5irIBzFX");
	this.shape_115.setTransform(322.3,-40.4);

	this.shape_116 = new cjs.Shape();
	this.shape_116.graphics.f().s("#000000").ss(5,1,1).p("Ag9ipIB7FU");
	this.shape_116.setTransform(322.8,-40.4);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_77}]}).to({state:[{t:this.shape_78}]},1).to({state:[{t:this.shape_79}]},1).to({state:[{t:this.shape_80}]},1).to({state:[{t:this.shape_81}]},1).to({state:[{t:this.shape_82}]},1).to({state:[{t:this.shape_83}]},1).to({state:[{t:this.shape_80}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_78}]},1).to({state:[{t:this.shape_79}]},1).to({state:[{t:this.shape_80}]},1).to({state:[{t:this.shape_81}]},1).to({state:[{t:this.shape_82}]},1).to({state:[{t:this.shape_83}]},1).to({state:[{t:this.shape_80}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_78}]},1).to({state:[{t:this.shape_79}]},1).to({state:[{t:this.shape_80}]},1).to({state:[{t:this.shape_81}]},1).to({state:[{t:this.shape_82}]},1).to({state:[{t:this.shape_83}]},1).to({state:[{t:this.shape_80}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_84}]},1).to({state:[{t:this.shape_85}]},1).to({state:[{t:this.shape_86}]},1).to({state:[{t:this.shape_80}]},1).to({state:[{t:this.shape_87}]},1).to({state:[{t:this.shape_88}]},1).to({state:[{t:this.shape_89}]},1).to({state:[{t:this.shape_83}]},1).to({state:[{t:this.shape_80}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_90}]},1).to({state:[{t:this.shape_91}]},1).to({state:[{t:this.shape_92}]},1).to({state:[{t:this.shape_82}]},1).to({state:[{t:this.shape_83}]},1).to({state:[{t:this.shape_93}]},1).to({state:[{t:this.shape_94}]},1).to({state:[{t:this.shape_95}]},1).to({state:[{t:this.shape_96}]},1).to({state:[{t:this.shape_96}]},1).to({state:[{t:this.shape_96}]},1).to({state:[{t:this.shape_96}]},1).to({state:[{t:this.shape_96}]},1).to({state:[{t:this.shape_96}]},1).to({state:[{t:this.shape_96}]},1).to({state:[{t:this.shape_96}]},1).to({state:[{t:this.shape_96}]},1).to({state:[{t:this.shape_96}]},1).to({state:[{t:this.shape_96}]},1).to({state:[{t:this.shape_96}]},1).to({state:[{t:this.shape_97}]},1).to({state:[{t:this.shape_98}]},1).to({state:[{t:this.shape_99}]},1).to({state:[{t:this.shape_100}]},1).to({state:[{t:this.shape_101}]},1).to({state:[{t:this.shape_102}]},1).to({state:[{t:this.shape_103}]},1).to({state:[{t:this.shape_104}]},1).to({state:[{t:this.shape_105}]},1).to({state:[{t:this.shape_106,p:{x:315.9}}]},1).to({state:[{t:this.shape_107}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_108}]},1).to({state:[{t:this.shape_107}]},1).to({state:[{t:this.shape_106,p:{x:320.8}}]},1).to({state:[{t:this.shape_109}]},1).to({state:[{t:this.shape_110}]},1).to({state:[{t:this.shape_111}]},1).to({state:[{t:this.shape_112}]},1).to({state:[{t:this.shape_113}]},1).to({state:[{t:this.shape_114}]},1).to({state:[{t:this.shape_115}]},1).to({state:[{t:this.shape_116}]},1).to({state:[{t:this.shape_77}]},1).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.shape_77).to({_off:true},1).wait(7).to({_off:false},0).wait(6).to({_off:true},1).wait(7).to({_off:false},0).wait(3).to({_off:true},1).wait(7).to({_off:false},0).wait(3).to({_off:true},1).wait(9).to({_off:false},0).wait(3).to({_off:true},1).wait(99).to({_off:false},0).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.shape_80).wait(3).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(9).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(6).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(7).to({_off:false},0).to({_off:true},1).wait(4).to({_off:false},0).to({_off:true},1).wait(104));
	this.timeline.addTween(cjs.Tween.get(this.shape_83).wait(6).to({_off:false},0).to({_off:true},1).wait(13).to({_off:false},0).to({_off:true},1).wait(10).to({_off:false},0).to({_off:true},1).wait(12).to({_off:false},0).to({_off:true},1).wait(9).to({_off:false},0).to({_off:true},1).wait(95));
	this.timeline.addTween(cjs.Tween.get(this.shape_96).wait(58).to({_off:false},0).wait(11).to({_off:true},1).wait(80));
	this.timeline.addTween(cjs.Tween.get(this.shape_108).wait(81).to({_off:false},0).wait(57).to({_off:true},1).wait(11));

	// Legs
	this.shape_117 = new cjs.Shape();
	this.shape_117.graphics.f().s("#000000").ss(5,1,1).p("Ag0ioIBpFR");
	this.shape_117.setTransform(308,-40.4);

	this.shape_118 = new cjs.Shape();
	this.shape_118.graphics.f().s("#000000").ss(5,1,1).p("Ag4inIBwFP");
	this.shape_118.setTransform(307.6,-40.3);

	this.shape_119 = new cjs.Shape();
	this.shape_119.graphics.f().s("#000000").ss(5,1,1).p("Ag8imIB5FN");
	this.shape_119.setTransform(307.2,-40.2);

	this.shape_120 = new cjs.Shape();
	this.shape_120.graphics.f().s("#000000").ss(5,1,1).p("Ag/ilIB/FK");
	this.shape_120.setTransform(306.8,-40);
	this.shape_120._off = true;

	this.shape_121 = new cjs.Shape();
	this.shape_121.graphics.f().s("#000000").ss(5,1,1).p("AhDijICHFH");
	this.shape_121.setTransform(306.4,-39.9);

	this.shape_122 = new cjs.Shape();
	this.shape_122.graphics.f().s("#000000").ss(5,1,1).p("AhHiiICPFF");
	this.shape_122.setTransform(306,-39.8);

	this.shape_123 = new cjs.Shape();
	this.shape_123.graphics.f().s("#000000").ss(5,1,1).p("AhLihICXFD");
	this.shape_123.setTransform(305.6,-39.7);
	this.shape_123._off = true;

	this.shape_124 = new cjs.Shape();
	this.shape_124.graphics.f().s("#000000").ss(5,1,1).p("Ag3inIBvFP");
	this.shape_124.setTransform(307.7,-40.3);

	this.shape_125 = new cjs.Shape();
	this.shape_125.graphics.f().s("#000000").ss(5,1,1).p("Ag5imIB0FN");
	this.shape_125.setTransform(307.4,-40.2);

	this.shape_126 = new cjs.Shape();
	this.shape_126.graphics.f().s("#000000").ss(5,1,1).p("Ag9imIB6FN");
	this.shape_126.setTransform(307.1,-40.1);

	this.shape_127 = new cjs.Shape();
	this.shape_127.graphics.f().s("#000000").ss(5,1,1).p("AhCijICFFI");
	this.shape_127.setTransform(306.5,-39.9);

	this.shape_128 = new cjs.Shape();
	this.shape_128.graphics.f().s("#000000").ss(5,1,1).p("AhFijICLFH");
	this.shape_128.setTransform(306.2,-39.8);

	this.shape_129 = new cjs.Shape();
	this.shape_129.graphics.f().s("#000000").ss(5,1,1).p("AhIiiICRFF");
	this.shape_129.setTransform(305.9,-39.8);

	this.shape_130 = new cjs.Shape();
	this.shape_130.graphics.f().s("#000000").ss(5,1,1).p("Ag9ilIB7FL");
	this.shape_130.setTransform(307.1,-40.1);

	this.shape_131 = new cjs.Shape();
	this.shape_131.graphics.f().s("#000000").ss(5,1,1).p("AhAikICBFJ");
	this.shape_131.setTransform(306.7,-40);

	this.shape_132 = new cjs.Shape();
	this.shape_132.graphics.f().s("#000000").ss(5,1,1).p("AhEijICJFH");
	this.shape_132.setTransform(306.4,-39.9);

	this.shape_133 = new cjs.Shape();
	this.shape_133.graphics.f().s("#000000").ss(5,1,1).p("AiIhJQB0BsCdAn");
	this.shape_133.setTransform(300.3,-36.2);

	this.shape_134 = new cjs.Shape();
	this.shape_134.graphics.f().s("#000000").ss(5,1,1).p("AjFACQCcA4DwhS");
	this.shape_134.setTransform(294.9,-31.5);

	this.shape_135 = new cjs.Shape();
	this.shape_135.graphics.f().s("#000000").ss(5,1,1).p("Ai7gXQCcBPDcg2");
	this.shape_135.setTransform(293.9,-29);

	this.shape_136 = new cjs.Shape();
	this.shape_136.graphics.f().s("#000000").ss(5,1,1).p("AixgpQCcBnDIgZ");
	this.shape_136.setTransform(292.9,-27.2);
	this.shape_136._off = true;

	this.shape_137 = new cjs.Shape();
	this.shape_137.graphics.f().s("#000000").ss(5,1,1).p("Aing9QCICQDHgZ");
	this.shape_137.setTransform(293.9,-29.3);

	this.shape_138 = new cjs.Shape();
	this.shape_138.graphics.f().s("#000000").ss(5,1,1).p("AidhRQBzC5DIgZ");
	this.shape_138.setTransform(295,-31.4);

	this.shape_139 = new cjs.Shape();
	this.shape_139.graphics.f().s("#000000").ss(5,1,1).p("AiThmQBfDjDIgZ");
	this.shape_139.setTransform(296,-33.5);

	this.shape_140 = new cjs.Shape();
	this.shape_140.graphics.f().s("#000000").ss(5,1,1).p("AiJh6QBLEMDIgZ");
	this.shape_140.setTransform(297,-35.6);

	this.shape_141 = new cjs.Shape();
	this.shape_141.graphics.f().s("#000000").ss(5,1,1).p("AiJh8QBAEeDTgr");
	this.shape_141.setTransform(297,-35.4);

	this.shape_142 = new cjs.Shape();
	this.shape_142.graphics.f().s("#000000").ss(5,1,1).p("AiJh+QA0ExDfg+");
	this.shape_142.setTransform(297,-35.2);

	this.shape_143 = new cjs.Shape();
	this.shape_143.graphics.f().s("#000000").ss(5,1,1).p("AiJiBQApFDDqhQ");
	this.shape_143.setTransform(297,-34.9);

	this.shape_144 = new cjs.Shape();
	this.shape_144.graphics.f().s("#000000").ss(5,1,1).p("AhoiHQAgEeCxgP");
	this.shape_144.setTransform(299.8,-36.9);

	this.shape_145 = new cjs.Shape();
	this.shape_145.graphics.f().s("#000000").ss(5,1,1).p("AhHiVQAYD6B3Aw");
	this.shape_145.setTransform(302.5,-38);

	this.shape_146 = new cjs.Shape();
	this.shape_146.graphics.f().s("#000000").ss(5,1,1).p("AgmiiQAPDUA+Bx");
	this.shape_146.setTransform(305.3,-39.2);

	this.shape_147 = new cjs.Shape();
	this.shape_147.graphics.f().s("#000000").ss(5,1,1).p("AgGiwIANFh");
	this.shape_147.setTransform(308.1,-40.4);
	this.shape_147._off = true;

	this.shape_148 = new cjs.Shape();
	this.shape_148.graphics.f().s("#000000").ss(5,1,1).p("AgKivIAWFf");
	this.shape_148.setTransform(308.1,-40.4);

	this.shape_149 = new cjs.Shape();
	this.shape_149.graphics.f().s("#000000").ss(5,1,1).p("AgPiuIAfFe");
	this.shape_149.setTransform(308.1,-40.4);

	this.shape_150 = new cjs.Shape();
	this.shape_150.graphics.f().s("#000000").ss(5,1,1).p("AgUiuIApFd");
	this.shape_150.setTransform(308,-40.4);

	this.shape_151 = new cjs.Shape();
	this.shape_151.graphics.f().s("#000000").ss(5,1,1).p("AgYitIAxFb");
	this.shape_151.setTransform(308,-40.4);

	this.shape_152 = new cjs.Shape();
	this.shape_152.graphics.f().s("#000000").ss(5,1,1).p("AgdisIA7FZ");
	this.shape_152.setTransform(308,-40.4);

	this.shape_153 = new cjs.Shape();
	this.shape_153.graphics.f().s("#000000").ss(5,1,1).p("AghirIBDFX");
	this.shape_153.setTransform(308,-40.4);

	this.shape_154 = new cjs.Shape();
	this.shape_154.graphics.f().s("#000000").ss(5,1,1).p("AgmirIBNFX");
	this.shape_154.setTransform(308,-40.4);

	this.shape_155 = new cjs.Shape();
	this.shape_155.graphics.f().s("#000000").ss(5,1,1).p("AgriqIBXFV");
	this.shape_155.setTransform(308,-40.4);

	this.shape_156 = new cjs.Shape();
	this.shape_156.graphics.f().s("#000000").ss(5,1,1).p("AgvipIBfFT");
	this.shape_156.setTransform(308,-40.4);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_117}]}).to({state:[{t:this.shape_118}]},1).to({state:[{t:this.shape_119}]},1).to({state:[{t:this.shape_120}]},1).to({state:[{t:this.shape_121}]},1).to({state:[{t:this.shape_122}]},1).to({state:[{t:this.shape_123}]},1).to({state:[{t:this.shape_120}]},1).to({state:[{t:this.shape_117}]},1).to({state:[{t:this.shape_117}]},1).to({state:[{t:this.shape_117}]},1).to({state:[{t:this.shape_117}]},1).to({state:[{t:this.shape_117}]},1).to({state:[{t:this.shape_117}]},1).to({state:[{t:this.shape_117}]},1).to({state:[{t:this.shape_118}]},1).to({state:[{t:this.shape_119}]},1).to({state:[{t:this.shape_120}]},1).to({state:[{t:this.shape_121}]},1).to({state:[{t:this.shape_122}]},1).to({state:[{t:this.shape_123}]},1).to({state:[{t:this.shape_120}]},1).to({state:[{t:this.shape_117}]},1).to({state:[{t:this.shape_117}]},1).to({state:[{t:this.shape_117}]},1).to({state:[{t:this.shape_117}]},1).to({state:[{t:this.shape_118}]},1).to({state:[{t:this.shape_119}]},1).to({state:[{t:this.shape_120}]},1).to({state:[{t:this.shape_121}]},1).to({state:[{t:this.shape_122}]},1).to({state:[{t:this.shape_123}]},1).to({state:[{t:this.shape_120}]},1).to({state:[{t:this.shape_117}]},1).to({state:[{t:this.shape_117}]},1).to({state:[{t:this.shape_117}]},1).to({state:[{t:this.shape_117}]},1).to({state:[{t:this.shape_124}]},1).to({state:[{t:this.shape_125}]},1).to({state:[{t:this.shape_126}]},1).to({state:[{t:this.shape_120}]},1).to({state:[{t:this.shape_127}]},1).to({state:[{t:this.shape_128}]},1).to({state:[{t:this.shape_129,p:{x:305.9}}]},1).to({state:[{t:this.shape_123}]},1).to({state:[{t:this.shape_120}]},1).to({state:[{t:this.shape_117}]},1).to({state:[{t:this.shape_117}]},1).to({state:[{t:this.shape_117}]},1).to({state:[{t:this.shape_117}]},1).to({state:[{t:this.shape_130}]},1).to({state:[{t:this.shape_131}]},1).to({state:[{t:this.shape_132}]},1).to({state:[{t:this.shape_129,p:{x:306}}]},1).to({state:[{t:this.shape_123}]},1).to({state:[{t:this.shape_133}]},1).to({state:[{t:this.shape_134}]},1).to({state:[{t:this.shape_135}]},1).to({state:[{t:this.shape_136}]},1).to({state:[{t:this.shape_136}]},1).to({state:[{t:this.shape_136}]},1).to({state:[{t:this.shape_136}]},1).to({state:[{t:this.shape_136}]},1).to({state:[{t:this.shape_136}]},1).to({state:[{t:this.shape_136}]},1).to({state:[{t:this.shape_136}]},1).to({state:[{t:this.shape_136}]},1).to({state:[{t:this.shape_136}]},1).to({state:[{t:this.shape_136}]},1).to({state:[{t:this.shape_136}]},1).to({state:[{t:this.shape_137}]},1).to({state:[{t:this.shape_138}]},1).to({state:[{t:this.shape_139}]},1).to({state:[{t:this.shape_140}]},1).to({state:[{t:this.shape_141}]},1).to({state:[{t:this.shape_142}]},1).to({state:[{t:this.shape_143}]},1).to({state:[{t:this.shape_144}]},1).to({state:[{t:this.shape_145}]},1).to({state:[{t:this.shape_146}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_147}]},1).to({state:[{t:this.shape_148}]},1).to({state:[{t:this.shape_149}]},1).to({state:[{t:this.shape_150}]},1).to({state:[{t:this.shape_151}]},1).to({state:[{t:this.shape_152}]},1).to({state:[{t:this.shape_153}]},1).to({state:[{t:this.shape_154}]},1).to({state:[{t:this.shape_155}]},1).to({state:[{t:this.shape_156}]},1).to({state:[{t:this.shape_117}]},1).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.shape_117).to({_off:true},1).wait(7).to({_off:false},0).wait(6).to({_off:true},1).wait(7).to({_off:false},0).wait(3).to({_off:true},1).wait(7).to({_off:false},0).wait(3).to({_off:true},1).wait(9).to({_off:false},0).wait(3).to({_off:true},1).wait(99).to({_off:false},0).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.shape_120).wait(3).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(9).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(6).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(7).to({_off:false},0).to({_off:true},1).wait(4).to({_off:false},0).to({_off:true},1).wait(104));
	this.timeline.addTween(cjs.Tween.get(this.shape_123).wait(6).to({_off:false},0).to({_off:true},1).wait(13).to({_off:false},0).to({_off:true},1).wait(10).to({_off:false},0).to({_off:true},1).wait(12).to({_off:false},0).to({_off:true},1).wait(9).to({_off:false},0).to({_off:true},1).wait(95));
	this.timeline.addTween(cjs.Tween.get(this.shape_136).wait(58).to({_off:false},0).wait(11).to({_off:true},1).wait(80));
	this.timeline.addTween(cjs.Tween.get(this.shape_147).wait(80).to({_off:false},0).wait(59).to({_off:true},1).wait(10));

	// Layer 1
	this.instance_4 = new lib.Tween14("synched",0);
	this.instance_4.parent = this;
	this.instance_4.setTransform(221.1,-21.4,1,1,0,0,0,0,53.3);

	this.timeline.addTween(cjs.Tween.get(this.instance_4).to({regX:0.1,rotation:-7.2,x:221.2},6).to({regX:0,rotation:0,x:221.1},2).to({startPosition:0},6).to({regX:0.1,rotation:-7.2,x:221.2},6).to({regX:0,rotation:0,x:221.1},2).to({startPosition:0},3).to({regX:0.1,rotation:-7.2,x:221.2},6).to({regX:0,rotation:0,x:221.1},2).to({startPosition:0},3).to({regX:0.1,rotation:-7.2,x:221.2},8).to({regX:0,rotation:0,x:221.1},2).to({startPosition:0},3).to({rotation:-2.8,y:-21.3},1).to({regX:0.1,rotation:-7.2,x:221.2,y:-21.4},4).to({_off:true},1).wait(95));

	// Layer 15
	this.instance_5 = new lib.Tween17("synched",0);
	this.instance_5.parent = this;
	this.instance_5.setTransform(74.7,20.6);
	this.instance_5._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_5).wait(112).to({_off:false},0).wait(8).to({startPosition:0},0).wait(4).to({startPosition:0},0).to({rotation:-75,x:41.2,y:163.6},7).wait(19));

	// Layer 14
	this.instance_6 = new lib.Tween18("synched",0);
	this.instance_6.parent = this;
	this.instance_6.setTransform(77.1,82);
	this.instance_6._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_6).wait(112).to({_off:false},0).wait(8).to({startPosition:0},0).wait(3).to({startPosition:0},0).to({rotation:60,x:69.5,y:174.5},7).wait(20));

	// Layer 16
	this.instance_7 = new lib.Tween19("synched",0);
	this.instance_7.parent = this;
	this.instance_7.setTransform(28.9,81.9);
	this.instance_7._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_7).wait(112).to({_off:false},0).to({startPosition:0},8).to({rotation:-85.7,x:19,y:178.9},7).wait(23));

	// Layer 13
	this.instance_8 = new lib.Tween20("synched",0);
	this.instance_8.parent = this;
	this.instance_8.setTransform(19,27.9);
	this.instance_8._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_8).wait(112).to({_off:false},0).to({startPosition:0},8).to({startPosition:0},2).to({rotation:105,x:62.9,y:171.8},7).wait(21));

	// Layer 12
	this.instance_9 = new lib.Tween14("synched",0);
	this.instance_9.parent = this;
	this.instance_9.setTransform(47.6,106.6,1,1,0.5,0,0,0.5,53.7);
	this.instance_9._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_9).wait(68).to({_off:false},0).to({regY:53.8,rotation:-4.2,x:47.7,y:106.7},3).to({rotation:4.5,x:47.6,y:105.2},3).to({regY:53.7,rotation:-3.8,y:105.1},3).to({rotation:3.5,y:105.2},2).to({rotation:0.5,y:105.6},2).to({startPosition:0},30).to({_off:true},1).wait(38));

	// Layer 11
	this.instance_10 = new lib.Tween14("synched",0);
	this.instance_10.parent = this;
	this.instance_10.setTransform(214.6,-74.4,1,1,-7.2,0,0,0.2,-0.1);
	this.instance_10._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_10).wait(54).to({_off:false},0).to({regX:0.3,scaleX:1,scaleY:1,rotation:-127.1,x:146.2,y:-74.5},4).to({rotation:-217.1,x:112},2).to({regX:0.1,scaleX:1,scaleY:1,rotation:-307.2,x:77.6,y:-74.7},2).to({regX:0.2,regY:-0.2,scaleX:1,scaleY:1,rotation:-366.4,x:48.8,y:-25.1},2).to({regX:0.1,regY:-0.1,rotation:-383.7,x:39.7,y:-0.3},1).to({regX:0.3,scaleX:1,scaleY:1,rotation:-359.5,x:47.9,y:49.3},2).to({_off:true},1).wait(82));

	// Layer 2
	this.shape_157 = new cjs.Shape();
	this.shape_157.graphics.f("#000000").s().p("AwnAyIAAgBIhHAAIAAhiMAjdAAAIAABjg");
	this.shape_157.setTransform(216.4,-18.5);

	this.timeline.addTween(cjs.Tween.get(this.shape_157).wait(150));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(102.9,-128,229.5,114.5);


(lib.Blob1copy4 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 13
	this.instance = new lib.Tween25("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(-95.8,-33.3);
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(126).to({_off:false},0).to({scaleX:1.21,scaleY:1.21},2).to({scaleX:0.29,scaleY:0.29,y:11.6},2).to({_off:true},1).wait(19));

	// Layer 8
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#000000").ss(3,1,1).p("AFvgfIgbApIgKAAQgDAGgDAGQgJAXgXAMIn1ABIhihAIAAgZIg7ga");
	this.shape.setTransform(-61.2,50.7);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(150));

	// Layer 5
	this.instance_1 = new lib.Tween13("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(-97.9,45,1,0.038);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({startPosition:0},14).to({regY:0.3,scaleY:0.21,y:34.1},8).to({regY:0.5,y:37.1},2).to({regY:0.3,y:36.6},10).to({regX:-0.1,regY:0.8,scaleY:0.47,x:-98,y:21.4},8).to({y:23.8},2).to({y:23.9},10).to({scaleY:0.75,y:7.4},8).to({y:9.8},2).to({y:9.9},10).to({regX:0,regY:0,scaleY:1,x:-97.9,y:-6},8).to({y:-3.5},2).to({startPosition:0},25).to({scaleX:1.1,scaleY:1.1},2).to({scaleX:1,scaleY:1},2).to({startPosition:0},4).to({scaleX:1.1,scaleY:1.1},2).to({scaleX:1,scaleY:1},2).to({startPosition:0},3).to({scaleX:1.1,scaleY:1.1},2).to({scaleX:1.27,scaleY:1.27},2).to({scaleX:1,scaleY:0.04,y:45},2).to({_off:true},17).wait(3));

	// Left Hand
	this.instance_2 = new lib.Tween30("synched",0);
	this.instance_2.parent = this;
	this.instance_2.setTransform(-45.2,11.8,0.594,0.594,0,0,180,0,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).to({regX:0.1,y:6.7},11).to({regX:0,y:11.8},8).to({regX:0.1,y:6.7},12).to({regX:0,y:11.8},8).to({regX:0.1,y:6.7},12).to({regX:0,y:11.8},8).to({y:6.8},12).to({regX:0.1,y:11.5},8).to({regX:0,y:11.8},24).to({regX:0.1,y:6.7},4).to({regX:0,y:11.8},4).to({regX:0.1,y:6.7},4).to({regX:0,y:11.8},4).to({regX:0.1,y:6.7},3).to({regX:0,y:11.8},4).to({regX:0.1,y:11.5},8).to({y:-13.5},5).to({y:-8.5},2).to({y:-13.5},2).to({regX:0,y:11.8},3).wait(4));

	// Right Hand
	this.instance_3 = new lib.Tween30("synched",0);
	this.instance_3.parent = this;
	this.instance_3.setTransform(29.5,24.9,0.594,0.594,0,0,0,0.1,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).to({x:34.5},11).to({x:29.5},8).to({x:34.5},12).to({x:29.5},8).to({x:34.5},12).to({x:29.5},8).to({x:34.5},12).to({x:29.5},8).to({startPosition:0},24).to({x:34.5},4).to({x:29.5},4).to({x:34.5},4).to({x:29.5},4).to({x:34.5},3).to({x:29.5},4).to({startPosition:0},8).to({x:47.5,y:-10.1},5).to({regY:0,y:-5.1},2).to({regY:0.1,y:-10.1},2).to({x:29.5,y:24.9},3).wait(4));

	// Left Arm
	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f().s("#000000").ss(5,1,1).p("AhrBSQB1AUBii5");
	this.shape_1.setTransform(-34.5,3.5);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#000000").ss(5,1,1).p("AhrBQQB1AYBii5");
	this.shape_2.setTransform(-34.5,3.3);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f().s("#000000").ss(5,1,1).p("AhrBNQB1AcBii5");
	this.shape_3.setTransform(-34.5,3.2);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f().s("#000000").ss(5,1,1).p("AhrBKQB1AhBii5");
	this.shape_4.setTransform(-34.5,3);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f().s("#000000").ss(5,1,1).p("AhrBHQB1AmBii5");
	this.shape_5.setTransform(-34.5,2.8);
	this.shape_5._off = true;

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f().s("#000000").ss(5,1,1).p("AhrBEQB1AqBii5");
	this.shape_6.setTransform(-34.5,2.7);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f().s("#000000").ss(5,1,1).p("AhrBBQB1AvBii5");
	this.shape_7.setTransform(-34.5,2.5);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f().s("#000000").ss(5,1,1).p("AhrA+QB1AzBii5");
	this.shape_8.setTransform(-34.5,2.4);
	this.shape_8._off = true;

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f().s("#000000").ss(5,1,1).p("AhrA7QB1A4Bii5");
	this.shape_9.setTransform(-34.5,2.2);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f().s("#000000").ss(5,1,1).p("AhrA3QB1A9Bii5");
	this.shape_10.setTransform(-34.5,2.1);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f().s("#000000").ss(5,1,1).p("AhrA0QB1BBBii5");
	this.shape_11.setTransform(-34.5,2);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f().s("#000000").ss(5,1,1).p("AhrAxQB1BFBii5");
	this.shape_12.setTransform(-34.5,1.9);
	this.shape_12._off = true;

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f().s("#000000").ss(5,1,1).p("AhrA2QB1A/Bii5");
	this.shape_13.setTransform(-34.5,2);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f().s("#000000").ss(5,1,1).p("AhrA6QB1A5Bii5");
	this.shape_14.setTransform(-34.5,2.2);
	this.shape_14._off = true;

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f().s("#000000").ss(5,1,1).p("AhrBCQB1AtBii5");
	this.shape_15.setTransform(-34.5,2.6);
	this.shape_15._off = true;

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f().s("#000000").ss(5,1,1).p("AhrBLQB1AgBii5");
	this.shape_16.setTransform(-34.5,3);
	this.shape_16._off = true;

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f().s("#000000").ss(5,1,1).p("AhrBPQB1AZBii5");
	this.shape_17.setTransform(-34.5,3.3);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f().s("#000000").ss(5,1,1).p("AhrBQQB1AXBii5");
	this.shape_18.setTransform(-34.5,3.4);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f().s("#000000").ss(5,1,1).p("AhrBIQB1AkBii5");
	this.shape_19.setTransform(-34.5,2.9);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f().s("#000000").ss(5,1,1).p("AhrBFQB1ApBii5");
	this.shape_20.setTransform(-34.5,2.7);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f().s("#000000").ss(5,1,1).p("AhrBAQB1AwBii5");
	this.shape_21.setTransform(-34.5,2.5);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f().s("#000000").ss(5,1,1).p("AhrA9QB1A1Bii5");
	this.shape_22.setTransform(-34.5,2.3);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f().s("#000000").ss(5,1,1).p("AhrA1QBzAvBkii");
	this.shape_23.setTransform(-34.5,1.4);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f().s("#000000").ss(5,1,1).p("AhrAUQBxBKBmiL");
	this.shape_24.setTransform(-34.5,-0.3);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f().s("#000000").ss(5,1,1).p("AhrgPQBvBlBoh0");
	this.shape_25.setTransform(-34.5,-1.8);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f().s("#000000").ss(5,1,1).p("AhrglQBuCBBphd");
	this.shape_26.setTransform(-34.5,-4.7);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f().s("#000000").ss(5,1,1).p("Ahrg1QBsCcBrhH");
	this.shape_27.setTransform(-34.5,-8.1);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f().s("#000000").ss(5,1,1).p("Ahrg1QBrCcBshH");
	this.shape_28.setTransform(-34.5,-5.6);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f().s("#000000").ss(5,1,1).p("AhrgbQBvBuBohs");
	this.shape_29.setTransform(-34.5,-2.3);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f().s("#000000").ss(5,1,1).p("AhrAfQBxBBBmiS");
	this.shape_30.setTransform(-34.5,0.2);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1}]}).to({state:[{t:this.shape_2}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_5}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_9}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_12}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_5}]},1).to({state:[{t:this.shape_16}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_18}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_16}]},1).to({state:[{t:this.shape_19}]},1).to({state:[{t:this.shape_20}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_21}]},1).to({state:[{t:this.shape_22}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_12}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_5}]},1).to({state:[{t:this.shape_16}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_18}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_16}]},1).to({state:[{t:this.shape_19}]},1).to({state:[{t:this.shape_20}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_21}]},1).to({state:[{t:this.shape_22}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_12}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_5}]},1).to({state:[{t:this.shape_16}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_18}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_16}]},1).to({state:[{t:this.shape_19}]},1).to({state:[{t:this.shape_20}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_21}]},1).to({state:[{t:this.shape_22}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_12}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_5}]},1).to({state:[{t:this.shape_16}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_16}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_12}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_16}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_16}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_12}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_16}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_19}]},1).to({state:[{t:this.shape_22}]},1).to({state:[{t:this.shape_12}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_16}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_23}]},1).to({state:[{t:this.shape_24}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_26}]},1).to({state:[{t:this.shape_27}]},1).to({state:[{t:this.shape_28,p:{y:-5.6}}]},1).to({state:[{t:this.shape_28,p:{y:-3.1}}]},1).to({state:[{t:this.shape_28,p:{y:-5.6}}]},1).to({state:[{t:this.shape_27}]},1).to({state:[{t:this.shape_29}]},1).to({state:[{t:this.shape_30}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_1}]},1).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.shape_1).to({_off:true},1).wait(18).to({_off:false},0).to({_off:true},1).wait(19).to({_off:false},0).to({_off:true},1).wait(19).to({_off:false},0).to({_off:true},1).wait(19).to({_off:false},0).wait(24).to({_off:true},1).wait(7).to({_off:false},0).to({_off:true},1).wait(7).to({_off:false},0).to({_off:true},1).wait(6).to({_off:false},0).wait(8).to({_off:true},1).wait(11).to({_off:false},0).wait(4));
	this.timeline.addTween(cjs.Tween.get(this.shape_5).wait(4).to({_off:false},0).to({_off:true},1).wait(11).to({_off:false},0).to({_off:true},1).wait(19).to({_off:false},0).to({_off:true},1).wait(19).to({_off:false},0).to({_off:true},1).wait(19).to({_off:false},0).to({_off:true},1).wait(73));
	this.timeline.addTween(cjs.Tween.get(this.shape_8).wait(7).to({_off:false},0).to({_off:true},1).wait(6).to({_off:false},0).to({_off:true},1).wait(19).to({_off:false},0).to({_off:true},1).wait(19).to({_off:false},0).to({_off:true},1).wait(19).to({_off:false},0).to({_off:true},1).wait(75));
	this.timeline.addTween(cjs.Tween.get(this.shape_12).wait(11).to({_off:false},0).to({_off:true},1).wait(19).to({_off:false},0).to({_off:true},1).wait(19).to({_off:false},0).to({_off:true},1).wait(19).to({_off:false},0).to({_off:true},1).wait(35).to({_off:false},0).to({_off:true},1).wait(7).to({_off:false},0).to({_off:true},1).wait(6).to({_off:false},0).to({_off:true},1).wait(27));
	this.timeline.addTween(cjs.Tween.get(this.shape_14).wait(13).to({_off:false},0).to({_off:true},1).wait(14).to({_off:false},0).to({_off:true},1).wait(4).to({_off:false},0).to({_off:true},1).wait(14).to({_off:false},0).to({_off:true},1).wait(4).to({_off:false},0).to({_off:true},1).wait(14).to({_off:false},0).to({_off:true},1).wait(4).to({_off:false},0).to({_off:true},1).wait(32).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false},0).to({_off:true},1).wait(5).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false},0).to({_off:true},1).wait(6).to({_off:false},0).to({_off:true},1).wait(26));
	this.timeline.addTween(cjs.Tween.get(this.shape_15).wait(15).to({_off:false},0).to({_off:true},1).wait(9).to({_off:false},0).to({_off:true},1).wait(9).to({_off:false},0).to({_off:true},1).wait(9).to({_off:false},0).to({_off:true},1).wait(9).to({_off:false},0).to({_off:true},1).wait(9).to({_off:false},0).to({_off:true},1).wait(9).to({_off:false},0).to({_off:true},1).wait(29).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(6).to({_off:false},0).to({_off:true},1).wait(25));
	this.timeline.addTween(cjs.Tween.get(this.shape_16).wait(17).to({_off:false},0).to({_off:true},1).wait(4).to({_off:false},0).to({_off:true},1).wait(14).to({_off:false},0).to({_off:true},1).wait(4).to({_off:false},0).to({_off:true},1).wait(14).to({_off:false},0).to({_off:true},1).wait(4).to({_off:false},0).to({_off:true},1).wait(14).to({_off:false},0).to({_off:true},1).wait(26).to({_off:false},0).to({_off:true},1).wait(5).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false},0).to({_off:true},1).wait(5).to({_off:false},0).to({_off:true},1).wait(6).to({_off:false},0).to({_off:true},1).wait(24));

	// Right Arm
	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f().s("#000000").ss(5,1,1).p("AgmiXQBsDAgqBv");
	this.shape_31.setTransform(26.6,9.6);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f().s("#000000").ss(5,1,1).p("AgoiXQBsDAglBv");
	this.shape_32.setTransform(26.8,9.6);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f().s("#000000").ss(5,1,1).p("AgpiXQBsDAggBv");
	this.shape_33.setTransform(26.9,9.6);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f().s("#000000").ss(5,1,1).p("AgqiXQBsDAgcBv");
	this.shape_34.setTransform(27,9.6);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f().s("#000000").ss(5,1,1).p("AgsiXQBsDAgXBv");
	this.shape_35.setTransform(27.2,9.6);
	this.shape_35._off = true;

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f().s("#000000").ss(5,1,1).p("AgtiXQBsDAgTBv");
	this.shape_36.setTransform(27.3,9.6);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f().s("#000000").ss(5,1,1).p("AgviXQBsDAgOBw");
	this.shape_37.setTransform(27.5,9.7);

	this.shape_38 = new cjs.Shape();
	this.shape_38.graphics.f().s("#000000").ss(5,1,1).p("AgxiXQBsDAgKBw");
	this.shape_38.setTransform(27.7,9.7);
	this.shape_38._off = true;

	this.shape_39 = new cjs.Shape();
	this.shape_39.graphics.f().s("#000000").ss(5,1,1).p("AgziXQBsDAgFBw");
	this.shape_39.setTransform(27.9,9.7);

	this.shape_40 = new cjs.Shape();
	this.shape_40.graphics.f().s("#000000").ss(5,1,1).p("Ag1iXQBsDAgBBw");
	this.shape_40.setTransform(28.1,9.7);

	this.shape_41 = new cjs.Shape();
	this.shape_41.graphics.f().s("#000000").ss(5,1,1).p("Ag4iXQBtDAADBw");
	this.shape_41.setTransform(28.4,9.7);

	this.shape_42 = new cjs.Shape();
	this.shape_42.graphics.f().s("#000000").ss(5,1,1).p("Ag6iXQBsDAAJBw");
	this.shape_42.setTransform(28.6,9.7);
	this.shape_42._off = true;

	this.shape_43 = new cjs.Shape();
	this.shape_43.graphics.f().s("#000000").ss(5,1,1).p("Ag3iXQBsDAADBw");
	this.shape_43.setTransform(28.3,9.7);

	this.shape_44 = new cjs.Shape();
	this.shape_44.graphics.f().s("#000000").ss(5,1,1).p("Ag0iXQBsDAgEBw");
	this.shape_44.setTransform(28,9.7);
	this.shape_44._off = true;

	this.shape_45 = new cjs.Shape();
	this.shape_45.graphics.f().s("#000000").ss(5,1,1).p("AguiXQBsDAgRBw");
	this.shape_45.setTransform(27.4,9.7);
	this.shape_45._off = true;

	this.shape_46 = new cjs.Shape();
	this.shape_46.graphics.f().s("#000000").ss(5,1,1).p("AgqiXQBsDAgdBv");
	this.shape_46.setTransform(27,9.6);
	this.shape_46._off = true;

	this.shape_47 = new cjs.Shape();
	this.shape_47.graphics.f().s("#000000").ss(5,1,1).p("AgoiXQBsDAgjBv");
	this.shape_47.setTransform(26.8,9.6);

	this.shape_48 = new cjs.Shape();
	this.shape_48.graphics.f().s("#000000").ss(5,1,1).p("AgpiXQBsDAghBv");
	this.shape_48.setTransform(26.9,9.6);

	this.shape_49 = new cjs.Shape();
	this.shape_49.graphics.f().s("#000000").ss(5,1,1).p("AgriXQBsDAgZBv");
	this.shape_49.setTransform(27.1,9.6);

	this.shape_50 = new cjs.Shape();
	this.shape_50.graphics.f().s("#000000").ss(5,1,1).p("AgtiXQBsDAgUBv");
	this.shape_50.setTransform(27.3,9.6);

	this.shape_51 = new cjs.Shape();
	this.shape_51.graphics.f().s("#000000").ss(5,1,1).p("AgwiXQBsDAgMBw");
	this.shape_51.setTransform(27.6,9.7);

	this.shape_52 = new cjs.Shape();
	this.shape_52.graphics.f().s("#000000").ss(5,1,1).p("AgyiXQBsDAgIBw");
	this.shape_52.setTransform(27.8,9.7);

	this.shape_53 = new cjs.Shape();
	this.shape_53.graphics.f().s("#000000").ss(5,1,1).p("Ag1iXQBsDAAABw");
	this.shape_53.setTransform(28.2,9.7);

	this.shape_54 = new cjs.Shape();
	this.shape_54.graphics.f().s("#000000").ss(5,1,1).p("Ag4iXQBsDAAFBw");
	this.shape_54.setTransform(28.4,9.7);

	this.shape_55 = new cjs.Shape();
	this.shape_55.graphics.f().s("#000000").ss(5,1,1).p("Agzh0QBxCygLA3");
	this.shape_55.setTransform(27.9,6.1);

	this.shape_56 = new cjs.Shape();
	this.shape_56.graphics.f().s("#000000").ss(5,1,1).p("AhFhRQB3CkAUgB");
	this.shape_56.setTransform(29.7,2.6);

	this.shape_57 = new cjs.Shape();
	this.shape_57.graphics.f().s("#000000").ss(5,1,1).p("AhXg2QB8CWAzg4");
	this.shape_57.setTransform(31.5,-0.1);

	this.shape_58 = new cjs.Shape();
	this.shape_58.graphics.f().s("#000000").ss(5,1,1).p("AhpglQCBCIBShv");
	this.shape_58.setTransform(33.3,-1.8);

	this.shape_59 = new cjs.Shape();
	this.shape_59.graphics.f().s("#000000").ss(5,1,1).p("Ah7gCQCHB5Bwim");
	this.shape_59.setTransform(35.1,-5.3);
	this.shape_59._off = true;

	this.shape_60 = new cjs.Shape();
	this.shape_60.graphics.f().s("#000000").ss(5,1,1).p("AhdgvQB+CRA9hL");
	this.shape_60.setTransform(32.1,-0.8);

	this.shape_61 = new cjs.Shape();
	this.shape_61.graphics.f().s("#000000").ss(5,1,1).p("Ag/hdQB1CpAKAS");
	this.shape_61.setTransform(29.1,3.8);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_31}]}).to({state:[{t:this.shape_32}]},1).to({state:[{t:this.shape_33}]},1).to({state:[{t:this.shape_34}]},1).to({state:[{t:this.shape_35}]},1).to({state:[{t:this.shape_36}]},1).to({state:[{t:this.shape_37}]},1).to({state:[{t:this.shape_38}]},1).to({state:[{t:this.shape_39}]},1).to({state:[{t:this.shape_40}]},1).to({state:[{t:this.shape_41}]},1).to({state:[{t:this.shape_42}]},1).to({state:[{t:this.shape_43}]},1).to({state:[{t:this.shape_44}]},1).to({state:[{t:this.shape_38}]},1).to({state:[{t:this.shape_45}]},1).to({state:[{t:this.shape_35}]},1).to({state:[{t:this.shape_46}]},1).to({state:[{t:this.shape_47}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_32}]},1).to({state:[{t:this.shape_48}]},1).to({state:[{t:this.shape_46}]},1).to({state:[{t:this.shape_49}]},1).to({state:[{t:this.shape_50}]},1).to({state:[{t:this.shape_45}]},1).to({state:[{t:this.shape_51}]},1).to({state:[{t:this.shape_52}]},1).to({state:[{t:this.shape_44}]},1).to({state:[{t:this.shape_53}]},1).to({state:[{t:this.shape_54}]},1).to({state:[{t:this.shape_42}]},1).to({state:[{t:this.shape_43}]},1).to({state:[{t:this.shape_44}]},1).to({state:[{t:this.shape_38}]},1).to({state:[{t:this.shape_45}]},1).to({state:[{t:this.shape_35}]},1).to({state:[{t:this.shape_46}]},1).to({state:[{t:this.shape_47}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_32}]},1).to({state:[{t:this.shape_48}]},1).to({state:[{t:this.shape_46}]},1).to({state:[{t:this.shape_49}]},1).to({state:[{t:this.shape_50}]},1).to({state:[{t:this.shape_45}]},1).to({state:[{t:this.shape_51}]},1).to({state:[{t:this.shape_52}]},1).to({state:[{t:this.shape_44}]},1).to({state:[{t:this.shape_53}]},1).to({state:[{t:this.shape_54}]},1).to({state:[{t:this.shape_42}]},1).to({state:[{t:this.shape_43}]},1).to({state:[{t:this.shape_44}]},1).to({state:[{t:this.shape_38}]},1).to({state:[{t:this.shape_45}]},1).to({state:[{t:this.shape_35}]},1).to({state:[{t:this.shape_46}]},1).to({state:[{t:this.shape_47}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_32}]},1).to({state:[{t:this.shape_48}]},1).to({state:[{t:this.shape_46}]},1).to({state:[{t:this.shape_49}]},1).to({state:[{t:this.shape_50}]},1).to({state:[{t:this.shape_45}]},1).to({state:[{t:this.shape_51}]},1).to({state:[{t:this.shape_52}]},1).to({state:[{t:this.shape_44}]},1).to({state:[{t:this.shape_53}]},1).to({state:[{t:this.shape_54}]},1).to({state:[{t:this.shape_42}]},1).to({state:[{t:this.shape_43}]},1).to({state:[{t:this.shape_44}]},1).to({state:[{t:this.shape_38}]},1).to({state:[{t:this.shape_45}]},1).to({state:[{t:this.shape_35}]},1).to({state:[{t:this.shape_46}]},1).to({state:[{t:this.shape_47}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_46}]},1).to({state:[{t:this.shape_45}]},1).to({state:[{t:this.shape_44}]},1).to({state:[{t:this.shape_42}]},1).to({state:[{t:this.shape_44}]},1).to({state:[{t:this.shape_45}]},1).to({state:[{t:this.shape_46}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_46}]},1).to({state:[{t:this.shape_45}]},1).to({state:[{t:this.shape_44}]},1).to({state:[{t:this.shape_42}]},1).to({state:[{t:this.shape_44}]},1).to({state:[{t:this.shape_45}]},1).to({state:[{t:this.shape_46}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_49}]},1).to({state:[{t:this.shape_52}]},1).to({state:[{t:this.shape_42}]},1).to({state:[{t:this.shape_44}]},1).to({state:[{t:this.shape_45}]},1).to({state:[{t:this.shape_46}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_55}]},1).to({state:[{t:this.shape_56}]},1).to({state:[{t:this.shape_57}]},1).to({state:[{t:this.shape_58}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_61}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_31}]},1).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.shape_31).to({_off:true},1).wait(18).to({_off:false},0).to({_off:true},1).wait(19).to({_off:false},0).to({_off:true},1).wait(19).to({_off:false},0).to({_off:true},1).wait(19).to({_off:false},0).wait(24).to({_off:true},1).wait(7).to({_off:false},0).to({_off:true},1).wait(7).to({_off:false},0).to({_off:true},1).wait(6).to({_off:false},0).wait(8).to({_off:true},1).wait(11).to({_off:false},0).wait(4));
	this.timeline.addTween(cjs.Tween.get(this.shape_35).wait(4).to({_off:false},0).to({_off:true},1).wait(11).to({_off:false},0).to({_off:true},1).wait(19).to({_off:false},0).to({_off:true},1).wait(19).to({_off:false},0).to({_off:true},1).wait(19).to({_off:false},0).to({_off:true},1).wait(73));
	this.timeline.addTween(cjs.Tween.get(this.shape_38).wait(7).to({_off:false},0).to({_off:true},1).wait(6).to({_off:false},0).to({_off:true},1).wait(19).to({_off:false},0).to({_off:true},1).wait(19).to({_off:false},0).to({_off:true},1).wait(19).to({_off:false},0).to({_off:true},1).wait(75));
	this.timeline.addTween(cjs.Tween.get(this.shape_42).wait(11).to({_off:false},0).to({_off:true},1).wait(19).to({_off:false},0).to({_off:true},1).wait(19).to({_off:false},0).to({_off:true},1).wait(19).to({_off:false},0).to({_off:true},1).wait(35).to({_off:false},0).to({_off:true},1).wait(7).to({_off:false},0).to({_off:true},1).wait(6).to({_off:false},0).to({_off:true},1).wait(27));
	this.timeline.addTween(cjs.Tween.get(this.shape_44).wait(13).to({_off:false},0).to({_off:true},1).wait(14).to({_off:false},0).to({_off:true},1).wait(4).to({_off:false},0).to({_off:true},1).wait(14).to({_off:false},0).to({_off:true},1).wait(4).to({_off:false},0).to({_off:true},1).wait(14).to({_off:false},0).to({_off:true},1).wait(4).to({_off:false},0).to({_off:true},1).wait(32).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false},0).to({_off:true},1).wait(5).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false},0).to({_off:true},1).wait(6).to({_off:false},0).to({_off:true},1).wait(26));
	this.timeline.addTween(cjs.Tween.get(this.shape_45).wait(15).to({_off:false},0).to({_off:true},1).wait(9).to({_off:false},0).to({_off:true},1).wait(9).to({_off:false},0).to({_off:true},1).wait(9).to({_off:false},0).to({_off:true},1).wait(9).to({_off:false},0).to({_off:true},1).wait(9).to({_off:false},0).to({_off:true},1).wait(9).to({_off:false},0).to({_off:true},1).wait(29).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(6).to({_off:false},0).to({_off:true},1).wait(25));
	this.timeline.addTween(cjs.Tween.get(this.shape_46).wait(17).to({_off:false},0).to({_off:true},1).wait(4).to({_off:false},0).to({_off:true},1).wait(14).to({_off:false},0).to({_off:true},1).wait(4).to({_off:false},0).to({_off:true},1).wait(14).to({_off:false},0).to({_off:true},1).wait(4).to({_off:false},0).to({_off:true},1).wait(14).to({_off:false},0).to({_off:true},1).wait(26).to({_off:false},0).to({_off:true},1).wait(5).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false},0).to({_off:true},1).wait(5).to({_off:false},0).to({_off:true},1).wait(6).to({_off:false},0).to({_off:true},1).wait(24));
	this.timeline.addTween(cjs.Tween.get(this.shape_59).wait(139).to({_off:false},0).wait(1).to({y:-2.8},0).wait(1).to({y:-0.3},0).wait(1).to({y:-2.8},0).wait(1).to({y:-5.3},0).to({_off:true},1).wait(6));

	// Layer 3
	this.instance_4 = new lib.Tween12("synched",0);
	this.instance_4.parent = this;
	this.instance_4.setTransform(-20.2,45.5);

	this.timeline.addTween(cjs.Tween.get(this.instance_4).to({regY:0.1,scaleY:2.42,y:40.4},11).to({regY:0,scaleY:1,y:45.5},8).to({regY:0.1,scaleY:2.42,y:40.4},12).to({regY:0,scaleY:1,y:45.5},8).to({regY:0.1,scaleY:2.42,y:40.4},12).to({regY:0,scaleY:1,y:45.5},8).to({regY:0.1,scaleY:2.42,y:40.4},12).to({regY:0,scaleY:1,y:45.5},8).to({startPosition:0},24).to({regY:0.1,scaleY:2.42,y:40.4},4).to({regY:0,scaleY:1,y:45.5},4).to({regY:0.1,scaleY:2.42,y:40.4},4).to({regY:0,scaleY:1,y:45.5},4).to({regY:0.1,scaleY:2.42,y:40.4},3).to({regY:0,scaleY:1,y:45.5},4).wait(24));

	// Pump leg
	this.shape_62 = new cjs.Shape();
	this.shape_62.graphics.f().s("#000000").ss(5,1,1).p("ABLiVQjCAuA7D9");
	this.shape_62.setTransform(-14.7,26.7);

	this.shape_63 = new cjs.Shape();
	this.shape_63.graphics.f().s("#000000").ss(5,1,1).p("Ag9CRQg5jzDBgu");
	this.shape_63.setTransform(-14.8,26.2);

	this.shape_64 = new cjs.Shape();
	this.shape_64.graphics.f().s("#000000").ss(5,1,1).p("Ag+CMQg4jpDCgu");
	this.shape_64.setTransform(-14.8,25.7);

	this.shape_65 = new cjs.Shape();
	this.shape_65.graphics.f().s("#000000").ss(5,1,1).p("Ag/CHQg3jfDCgv");
	this.shape_65.setTransform(-14.8,25.3);

	this.shape_66 = new cjs.Shape();
	this.shape_66.graphics.f().s("#000000").ss(5,1,1).p("AhACDQg1jWDBgv");
	this.shape_66.setTransform(-14.9,24.8);

	this.shape_67 = new cjs.Shape();
	this.shape_67.graphics.f().s("#000000").ss(5,1,1).p("AhBB+Qg0jMDCgv");
	this.shape_67.setTransform(-14.9,24.3);

	this.shape_68 = new cjs.Shape();
	this.shape_68.graphics.f().s("#000000").ss(5,1,1).p("AhCB5QgyjCDBgv");
	this.shape_68.setTransform(-15,23.8);

	this.shape_69 = new cjs.Shape();
	this.shape_69.graphics.f().s("#000000").ss(5,1,1).p("AhDB0Qgxi4DCgv");
	this.shape_69.setTransform(-15,23.3);

	this.shape_70 = new cjs.Shape();
	this.shape_70.graphics.f().s("#000000").ss(5,1,1).p("AhEBvQgvivDBgu");
	this.shape_70.setTransform(-15.1,22.8);

	this.shape_71 = new cjs.Shape();
	this.shape_71.graphics.f().s("#000000").ss(5,1,1).p("AhFBqQguilDCgv");
	this.shape_71.setTransform(-15.1,22.4);

	this.shape_72 = new cjs.Shape();
	this.shape_72.graphics.f().s("#000000").ss(5,1,1).p("AhGBlQgsibDBgv");
	this.shape_72.setTransform(-15.2,21.9);

	this.shape_73 = new cjs.Shape();
	this.shape_73.graphics.f().s("#000000").ss(5,1,1).p("ABQhgQjCAvArCS");
	this.shape_73.setTransform(-15.2,21.4);
	this.shape_73._off = true;

	this.shape_74 = new cjs.Shape();
	this.shape_74.graphics.f().s("#000000").ss(5,1,1).p("AhGBoQgtigDCgu");
	this.shape_74.setTransform(-15.1,22.1);

	this.shape_75 = new cjs.Shape();
	this.shape_75.graphics.f().s("#000000").ss(5,1,1).p("AhEBuQgvitDBgu");
	this.shape_75.setTransform(-15.1,22.7);
	this.shape_75._off = true;

	this.shape_76 = new cjs.Shape();
	this.shape_76.graphics.f().s("#000000").ss(5,1,1).p("AhDB1Qgxi6DCgv");
	this.shape_76.setTransform(-15,23.4);

	this.shape_77 = new cjs.Shape();
	this.shape_77.graphics.f().s("#000000").ss(5,1,1).p("AhBB8QgzjIDBgu");
	this.shape_77.setTransform(-15,24.1);
	this.shape_77._off = true;

	this.shape_78 = new cjs.Shape();
	this.shape_78.graphics.f().s("#000000").ss(5,1,1).p("AhACCQg1jVDBgu");
	this.shape_78.setTransform(-14.9,24.7);

	this.shape_79 = new cjs.Shape();
	this.shape_79.graphics.f().s("#000000").ss(5,1,1).p("Ag/CJQg3jiDCgv");
	this.shape_79.setTransform(-14.8,25.4);
	this.shape_79._off = true;

	this.shape_80 = new cjs.Shape();
	this.shape_80.graphics.f().s("#000000").ss(5,1,1).p("Ag9CPQg5jvDBgu");
	this.shape_80.setTransform(-14.8,26);

	this.shape_81 = new cjs.Shape();
	this.shape_81.graphics.f().s("#000000").ss(5,1,1).p("Ag9CRQg5jzDBgv");
	this.shape_81.setTransform(-14.8,26.3);

	this.shape_82 = new cjs.Shape();
	this.shape_82.graphics.f().s("#000000").ss(5,1,1).p("Ag+CNQg4jqDBgv");
	this.shape_82.setTransform(-14.8,25.8);

	this.shape_83 = new cjs.Shape();
	this.shape_83.graphics.f().s("#000000").ss(5,1,1).p("AhACEQg1jZDBgu");
	this.shape_83.setTransform(-14.9,24.9);

	this.shape_84 = new cjs.Shape();
	this.shape_84.graphics.f().s("#000000").ss(5,1,1).p("AhACAQg1jQDCgv");
	this.shape_84.setTransform(-14.9,24.5);

	this.shape_85 = new cjs.Shape();
	this.shape_85.graphics.f().s("#000000").ss(5,1,1).p("AhCB3Qgyi/DCgu");
	this.shape_85.setTransform(-15,23.6);

	this.shape_86 = new cjs.Shape();
	this.shape_86.graphics.f().s("#000000").ss(5,1,1).p("AhDBzQgxi2DCgv");
	this.shape_86.setTransform(-15,23.2);

	this.shape_87 = new cjs.Shape();
	this.shape_87.graphics.f().s("#000000").ss(5,1,1).p("AhFBqQguikDCgv");
	this.shape_87.setTransform(-15.1,22.3);

	this.shape_88 = new cjs.Shape();
	this.shape_88.graphics.f().s("#000000").ss(5,1,1).p("AhGBlQgsibDBgu");
	this.shape_88.setTransform(-15.2,21.8);

	this.shape_89 = new cjs.Shape();
	this.shape_89.graphics.f().s("#000000").ss(5,1,1).p("Ag8CWQg7j9DCgu");
	this.shape_89.setTransform(-14.7,26.7);
	this.shape_89._off = true;

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_62}]}).to({state:[{t:this.shape_63}]},1).to({state:[{t:this.shape_64}]},1).to({state:[{t:this.shape_65}]},1).to({state:[{t:this.shape_66}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_68}]},1).to({state:[{t:this.shape_69}]},1).to({state:[{t:this.shape_70}]},1).to({state:[{t:this.shape_71}]},1).to({state:[{t:this.shape_72}]},1).to({state:[{t:this.shape_73}]},1).to({state:[{t:this.shape_74}]},1).to({state:[{t:this.shape_75}]},1).to({state:[{t:this.shape_76}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_78}]},1).to({state:[{t:this.shape_79}]},1).to({state:[{t:this.shape_80}]},1).to({state:[{t:this.shape_62}]},1).to({state:[{t:this.shape_81}]},1).to({state:[{t:this.shape_82}]},1).to({state:[{t:this.shape_79}]},1).to({state:[{t:this.shape_83}]},1).to({state:[{t:this.shape_84}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_85}]},1).to({state:[{t:this.shape_86}]},1).to({state:[{t:this.shape_75}]},1).to({state:[{t:this.shape_87}]},1).to({state:[{t:this.shape_88}]},1).to({state:[{t:this.shape_73}]},1).to({state:[{t:this.shape_74}]},1).to({state:[{t:this.shape_75}]},1).to({state:[{t:this.shape_76}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_78}]},1).to({state:[{t:this.shape_79}]},1).to({state:[{t:this.shape_80}]},1).to({state:[{t:this.shape_62}]},1).to({state:[{t:this.shape_81}]},1).to({state:[{t:this.shape_82}]},1).to({state:[{t:this.shape_79}]},1).to({state:[{t:this.shape_83}]},1).to({state:[{t:this.shape_84}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_85}]},1).to({state:[{t:this.shape_86}]},1).to({state:[{t:this.shape_75}]},1).to({state:[{t:this.shape_87}]},1).to({state:[{t:this.shape_88}]},1).to({state:[{t:this.shape_73}]},1).to({state:[{t:this.shape_74}]},1).to({state:[{t:this.shape_75}]},1).to({state:[{t:this.shape_76}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_78}]},1).to({state:[{t:this.shape_79}]},1).to({state:[{t:this.shape_80}]},1).to({state:[{t:this.shape_62}]},1).to({state:[{t:this.shape_81}]},1).to({state:[{t:this.shape_82}]},1).to({state:[{t:this.shape_79}]},1).to({state:[{t:this.shape_83}]},1).to({state:[{t:this.shape_84}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_85}]},1).to({state:[{t:this.shape_86}]},1).to({state:[{t:this.shape_75}]},1).to({state:[{t:this.shape_87}]},1).to({state:[{t:this.shape_88}]},1).to({state:[{t:this.shape_73}]},1).to({state:[{t:this.shape_74}]},1).to({state:[{t:this.shape_75}]},1).to({state:[{t:this.shape_76}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_78}]},1).to({state:[{t:this.shape_79}]},1).to({state:[{t:this.shape_80}]},1).to({state:[{t:this.shape_62}]},1).to({state:[{t:this.shape_89}]},1).to({state:[{t:this.shape_89}]},1).to({state:[{t:this.shape_89}]},1).to({state:[{t:this.shape_89}]},1).to({state:[{t:this.shape_89}]},1).to({state:[{t:this.shape_89}]},1).to({state:[{t:this.shape_89}]},1).to({state:[{t:this.shape_89}]},1).to({state:[{t:this.shape_89}]},1).to({state:[{t:this.shape_89}]},1).to({state:[{t:this.shape_89}]},1).to({state:[{t:this.shape_89}]},1).to({state:[{t:this.shape_89}]},1).to({state:[{t:this.shape_89}]},1).to({state:[{t:this.shape_89}]},1).to({state:[{t:this.shape_89}]},1).to({state:[{t:this.shape_89}]},1).to({state:[{t:this.shape_89}]},1).to({state:[{t:this.shape_89}]},1).to({state:[{t:this.shape_89}]},1).to({state:[{t:this.shape_89}]},1).to({state:[{t:this.shape_89}]},1).to({state:[{t:this.shape_89}]},1).to({state:[{t:this.shape_62}]},1).to({state:[{t:this.shape_79}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_75}]},1).to({state:[{t:this.shape_73}]},1).to({state:[{t:this.shape_75}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_79}]},1).to({state:[{t:this.shape_62}]},1).to({state:[{t:this.shape_79}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_75}]},1).to({state:[{t:this.shape_73}]},1).to({state:[{t:this.shape_75}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_79}]},1).to({state:[{t:this.shape_62}]},1).to({state:[{t:this.shape_83}]},1).to({state:[{t:this.shape_86}]},1).to({state:[{t:this.shape_73}]},1).to({state:[{t:this.shape_75}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_79}]},1).to({state:[{t:this.shape_62}]},1).to({state:[{t:this.shape_62}]},1).to({state:[{t:this.shape_62}]},1).to({state:[{t:this.shape_62}]},1).to({state:[{t:this.shape_62}]},1).to({state:[{t:this.shape_62}]},1).to({state:[{t:this.shape_62}]},1).to({state:[{t:this.shape_62}]},1).to({state:[{t:this.shape_62}]},1).to({state:[{t:this.shape_62}]},1).to({state:[{t:this.shape_62}]},1).to({state:[{t:this.shape_62}]},1).to({state:[{t:this.shape_62}]},1).to({state:[{t:this.shape_62}]},1).to({state:[{t:this.shape_62}]},1).to({state:[{t:this.shape_62}]},1).to({state:[{t:this.shape_62}]},1).to({state:[{t:this.shape_62}]},1).to({state:[{t:this.shape_62}]},1).to({state:[{t:this.shape_62}]},1).to({state:[{t:this.shape_62}]},1).to({state:[{t:this.shape_62}]},1).to({state:[{t:this.shape_62}]},1).to({state:[{t:this.shape_62}]},1).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.shape_62).to({_off:true},1).wait(18).to({_off:false},0).to({_off:true},1).wait(19).to({_off:false},0).to({_off:true},1).wait(19).to({_off:false},0).to({_off:true},1).wait(19).to({_off:false},0).to({_off:true},1).wait(23).to({_off:false},0).to({_off:true},1).wait(7).to({_off:false},0).to({_off:true},1).wait(7).to({_off:false},0).to({_off:true},1).wait(6).to({_off:false},0).wait(24));
	this.timeline.addTween(cjs.Tween.get(this.shape_73).wait(11).to({_off:false},0).to({_off:true},1).wait(19).to({_off:false},0).to({_off:true},1).wait(19).to({_off:false},0).to({_off:true},1).wait(19).to({_off:false},0).to({_off:true},1).wait(35).to({_off:false},0).to({_off:true},1).wait(7).to({_off:false},0).to({_off:true},1).wait(6).to({_off:false},0).to({_off:true},1).wait(27));
	this.timeline.addTween(cjs.Tween.get(this.shape_75).wait(13).to({_off:false},0).to({_off:true},1).wait(14).to({_off:false},0).to({_off:true},1).wait(4).to({_off:false},0).to({_off:true},1).wait(14).to({_off:false},0).to({_off:true},1).wait(4).to({_off:false},0).to({_off:true},1).wait(14).to({_off:false},0).to({_off:true},1).wait(4).to({_off:false},0).to({_off:true},1).wait(32).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false},0).to({_off:true},1).wait(5).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false},0).to({_off:true},1).wait(6).to({_off:false},0).to({_off:true},1).wait(26));
	this.timeline.addTween(cjs.Tween.get(this.shape_77).wait(15).to({_off:false},0).to({_off:true},1).wait(9).to({_off:false},0).to({_off:true},1).wait(9).to({_off:false},0).to({_off:true},1).wait(9).to({_off:false},0).to({_off:true},1).wait(9).to({_off:false},0).to({_off:true},1).wait(9).to({_off:false},0).to({_off:true},1).wait(9).to({_off:false},0).to({_off:true},1).wait(29).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(6).to({_off:false},0).to({_off:true},1).wait(25));
	this.timeline.addTween(cjs.Tween.get(this.shape_79).wait(17).to({_off:false},0).to({_off:true},1).wait(4).to({_off:false},0).to({_off:true},1).wait(14).to({_off:false},0).to({_off:true},1).wait(4).to({_off:false},0).to({_off:true},1).wait(14).to({_off:false},0).to({_off:true},1).wait(4).to({_off:false},0).to({_off:true},1).wait(14).to({_off:false},0).to({_off:true},1).wait(26).to({_off:false},0).to({_off:true},1).wait(5).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false},0).to({_off:true},1).wait(5).to({_off:false},0).to({_off:true},1).wait(6).to({_off:false},0).to({_off:true},1).wait(24));
	this.timeline.addTween(cjs.Tween.get(this.shape_89).wait(80).to({_off:false},0).wait(22).to({_off:true},1).wait(47));

	// Body
	this.instance_5 = new lib.Tween3("synched",0);
	this.instance_5.parent = this;
	this.instance_5.setTransform(-0.3,-10.7);

	this.timeline.addTween(cjs.Tween.get(this.instance_5).to({startPosition:0},134).to({y:-5.7},2).to({y:-10.7},2).wait(12));

	// Layer 2
	this.shape_90 = new cjs.Shape();
	this.shape_90.graphics.f().s("#000000").ss(5,1,1).p("AAAitIAAFb");
	this.shape_90.setTransform(6.7,29.1);

	this.timeline.addTween(cjs.Tween.get(this.shape_90).wait(150));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-126,-38.2,160.5,96.2);


(lib.Blob1copy3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Left Hand
	this.instance = new lib.Tween30("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(-54.9,2.3,0.594,0.594,0,0,180,0,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({regX:0.1,x:-40,y:5.2},4).to({regX:0,x:-28.7,y:24.9},3).wait(293));

	// Right Hand
	this.instance_1 = new lib.Tween30("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(55,2.3,0.594,0.594,0,0,0,0.1,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({x:40.4,y:5.2},4).to({x:29.5,y:24.9},3).wait(293));

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
	this.shape_5.graphics.f().s("#000000").ss(5,1,1).p("Ag5BUQASARBhi5");
	this.shape_5.setTransform(-29.5,3.6);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f().s("#000000").ss(5,1,1).p("AgmB1QgRgwBhi5");
	this.shape_6.setTransform(-27.9,6.8);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f().s("#000000").ss(5,1,1).p("AgNCVQg0hwBhi5");
	this.shape_7.setTransform(-27,10);
	this.shape_7._off = true;

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape}]}).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_2}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_5}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_7}]},1).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.shape_7).wait(7).to({_off:false},0).wait(293));

	// Right Arm
	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f().s("#000000").ss(5,1,1).p("ACbAOQjTByhii5");
	this.shape_8.setTransform(39.3,0.9);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f().s("#000000").ss(5,1,1).p("AiGg7QBkC6Cphp");
	this.shape_9.setTransform(37.1,1);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f().s("#000000").ss(5,1,1).p("Ahzg+QBoC8B/hf");
	this.shape_10.setTransform(34.8,1.1);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f().s("#000000").ss(5,1,1).p("AhfhBQBpC+BWhW");
	this.shape_11.setTransform(32.6,1.2);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f().s("#000000").ss(5,1,1).p("AhLhEQBsDAArhN");
	this.shape_12.setTransform(30.3,1.3);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f().s("#000000").ss(5,1,1).p("Ag9hZQBsDAAPgO");
	this.shape_13.setTransform(28.9,3.4);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f().s("#000000").ss(5,1,1).p("Agwh4QBsDAgNAx");
	this.shape_14.setTransform(27.6,6.5);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f().s("#000000").ss(5,1,1).p("AgmiXQBsDAgqBv");
	this.shape_15.setTransform(26.6,9.6);
	this.shape_15._off = true;

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_8}]}).to({state:[{t:this.shape_9}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_12}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_15}]},1).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.shape_15).wait(7).to({_off:false},0).wait(293));

	// Body
	this.instance_2 = new lib.Tween3("synched",0);
	this.instance_2.parent = this;
	this.instance_2.setTransform(-0.3,-10.7);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(300));

	// Legs
	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f().s("#000000").ss(5,1,1).p("ABGitIAAFbAhFitIAAFb");
	this.shape_16.setTransform(-0.3,29.1);

	this.timeline.addTween(cjs.Tween.get(this.shape_16).wait(300));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-59.9,-38.2,119.9,87.3);


(lib.Blob1copy2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2
	this.instance = new lib.Tween10("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(-59.9,7.2,1,1,-30);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({rotation:60,x:6.2,y:21.3},14).to({rotation:0,x:52.7,y:2.4},14).wait(1));

	// Left Hand
	this.instance_1 = new lib.Tween30("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(-54.9,2.3,0.594,0.594,0,0,180,0,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({regX:0.1,x:-23.9,y:9.9},8).to({regX:0,x:-0.6,y:15.8},6).to({x:-54.9,y:2.3},14).wait(1));

	// Right Hand
	this.instance_2 = new lib.Tween30("synched",0);
	this.instance_2.parent = this;
	this.instance_2.setTransform(55,2.3,0.594,0.594,0,0,0,0.1,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).to({x:-0.3,y:15.8},14).to({x:55,y:2.3},14).wait(1));

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
	this.instance_3 = new lib.Tween3("synched",0);
	this.instance_3.parent = this;
	this.instance_3.setTransform(-0.3,-10.7);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).to({y:-13.7},14).to({y:-10.7},14).wait(1));

	// Legs
	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f().s("#000000").ss(5,1,1).p("ABGitIAAFbAhFitIAAFb");
	this.shape_30.setTransform(-0.3,29.1);

	this.timeline.addTween(cjs.Tween.get(this.shape_30).wait(29));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-73.3,-38.2,133.3,87.3);


(lib.Blob1copy = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 4
	this.instance = new lib.Tween7("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(-57.4,2.2,1,1,-30);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({regX:-0.1,regY:0.1,rotation:0,x:-0.3,y:15.8},14).to({x:55,y:2.3},14).wait(1));

	// Left Hand
	this.instance_1 = new lib.Tween30("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(-54.9,2.3,0.594,0.594,0,0,180,0,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({regX:0.1,x:-23.9,y:9.9},8).to({regX:0,x:-0.6,y:15.8},6).to({x:-54.9,y:2.3},14).wait(1));

	// Right Hand
	this.instance_2 = new lib.Tween30("synched",0);
	this.instance_2.parent = this;
	this.instance_2.setTransform(55,2.3,0.594,0.594,0,0,0,0.1,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).to({x:-0.3,y:15.8},14).to({x:55,y:2.3},14).wait(1));

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
	this.instance_3 = new lib.Tween3("synched",0);
	this.instance_3.parent = this;
	this.instance_3.setTransform(-0.3,-10.7);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).to({y:-13.7},14).to({y:-10.7},14).wait(1));

	// Legs
	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f().s("#000000").ss(5,1,1).p("ABGitIAAFbAhFitIAAFb");
	this.shape_30.setTransform(-0.3,29.1);

	this.timeline.addTween(cjs.Tween.get(this.shape_30).wait(29));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-73.4,-38.2,133.4,87.3);


(lib.Blob1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2
	this.instance = new lib.Tween2("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(-61.6,10.1,1,1,-45);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({regX:-0.1,regY:-0.1,rotation:-75,x:-1,y:25.5},14).to({regY:0,rotation:0,x:53.9,y:2.6},14).wait(1));

	// Left Hand
	this.instance_1 = new lib.Tween30("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(-54.9,2.3,0.594,0.594,0,0,180,0,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({regX:0.1,x:-23.9,y:9.9},8).to({regX:0,x:-0.6,y:15.8},6).to({x:-54.9,y:2.3},14).wait(1));

	// Right Hand
	this.instance_2 = new lib.Tween30("synched",0);
	this.instance_2.parent = this;
	this.instance_2.setTransform(55,2.3,0.594,0.594,0,0,0,0.1,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).to({x:-0.3,y:15.8},14).to({x:55,y:2.3},14).wait(1));

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
	this.instance_3 = new lib.Tween3("synched",0);
	this.instance_3.parent = this;
	this.instance_3.setTransform(-0.3,-10.7);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).to({y:-13.7},14).to({y:-10.7},14).wait(1));

	// Legs
	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f().s("#000000").ss(5,1,1).p("ABGitIAAFbAhFitIAAFb");
	this.shape_30.setTransform(-0.3,29.1);

	this.timeline.addTween(cjs.Tween.get(this.shape_30).wait(29));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-74.8,-38.2,134.8,87.3);


(lib.Pumpupthe1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2
	this.instance = new lib.Blob1copy4();
	this.instance.parent = this;
	this.instance.setTransform(-69.7,54.3,1,1,0,0,180);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Pumpupthe1, new cjs.Rectangle(-104.1,16.1,160.5,96.2), null);


// stage content:
(lib._10points = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 18
	this.instance = new lib.Tween21("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(566.4,219.1);
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(134).to({_off:false},0).to({x:471.4},10).wait(6));

	// Layer 19
	this.instance_1 = new lib.Wheel();
	this.instance_1.parent = this;
	this.instance_1.setTransform(529.3,245.8,1.312,1.312,60,0,0,4.2,4.5);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(134).to({rotation:-300},10).wait(6));

	// Layer 15
	this.instance_2 = new lib.Wheel();
	this.instance_2.parent = this;
	this.instance_2.setTransform(467.3,245.8,1.312,1.312,60,0,0,4.2,4.5);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(134).to({rotation:-300},10).wait(6));

	// Layer 16
	this.instance_3 = new lib.Wheel();
	this.instance_3.parent = this;
	this.instance_3.setTransform(488,245.8,1.312,1.312,15,0,0,4.2,4.5);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(134).to({rotation:-345},10).wait(6));

	// Layer 17
	this.instance_4 = new lib.Wheel();
	this.instance_4.parent = this;
	this.instance_4.setTransform(508.9,245.7,1.312,1.312,150,0,0,4.2,4.5);

	this.timeline.addTween(cjs.Tween.get(this.instance_4).wait(134).to({rotation:-210},10).wait(6));

	// Layer 7
	this.instance_5 = new lib.Tween11("synched",0);
	this.instance_5.parent = this;
	this.instance_5.setTransform(359.6,216.3);
	this.instance_5._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_5).wait(87).to({_off:false},0).to({startPosition:0},12).to({x:354.6},3).to({x:346.1},4).to({x:351.1},2).to({startPosition:0},6).to({x:346.1},2).to({x:351.1},2).to({startPosition:0},6).to({x:346.1},2).to({x:310.6},4).to({rotation:-60,x:286.6,y:221.2},2).to({regX:-0.1,regY:0.1,rotation:-135,x:272.2,y:233.4},2).to({regX:0,regY:0,rotation:-240,x:272.3,y:315.4},3).wait(13));

	// Layer 5
	this.instance_6 = new lib.Tween8("synched",0);
	this.instance_6.parent = this;
	this.instance_6.setTransform(358.2,216.3);
	this.instance_6._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_6).wait(57).to({_off:false},0).to({x:334.5},11).to({startPosition:0},31).to({x:329.5},3).to({x:324.5},3).to({startPosition:0},2).to({x:329.5},2).to({startPosition:0},4).to({x:324.5},2).to({startPosition:0},2).to({x:329.5},2).to({startPosition:0},4).to({x:319.5},2).to({rotation:-30,x:299.5},2).to({rotation:-120,x:279.5,y:226.4},2).to({rotation:-233.3,y:316.4},3).wait(18));

	// Layer 2
	this.instance_7 = new lib.Tween2("synched",0);
	this.instance_7.parent = this;
	this.instance_7.setTransform(358.5,216.7,1,1,0,0,180);
	this.instance_7._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_7).wait(29).to({_off:false},0).to({x:310,y:216.3},13,cjs.Ease.get(0.25)).to({startPosition:0},57).to({x:305},3).to({startPosition:0},2).to({startPosition:0},4).to({x:310},2).to({startPosition:0},2).to({x:305},2).to({startPosition:0},4).to({x:310},2).to({startPosition:0},2).to({x:305},2).to({skewX:-60,skewY:120,x:285,y:221.2},2).to({regX:0.1,regY:0.1,skewX:-135,skewY:45,x:268.2,y:323.3},3).wait(21));

	// T
	this.instance_8 = new lib.Tween7("synched",0);
	this.instance_8.parent = this;
	this.instance_8.setTransform(469.7,215.9,1,1,0,30,-150);

	this.timeline.addTween(cjs.Tween.get(this.instance_8).to({_off:true},29).wait(121));

	// S
	this.instance_9 = new lib.Tween10("synched",0);
	this.instance_9.parent = this;
	this.instance_9.setTransform(472.3,221.4,1,1,0,30,-150);

	this.timeline.addTween(cjs.Tween.get(this.instance_9).to({_off:true},58).wait(92));

	// Layer 13
	this.instance_10 = new lib.Wheel();
	this.instance_10.parent = this;
	this.instance_10.setTransform(313.3,245.8,1.312,1.312,60,0,0,4.2,4.5);

	this.timeline.addTween(cjs.Tween.get(this.instance_10).wait(29).to({rotation:-300},13).wait(15).to({rotation:-660},11).wait(31).to({rotation:-1380},27).wait(24));

	// Layer 14
	this.instance_11 = new lib.Wheel();
	this.instance_11.parent = this;
	this.instance_11.setTransform(333.5,245.8,1.312,1.312,15,0,0,4.2,4.5);

	this.timeline.addTween(cjs.Tween.get(this.instance_11).wait(29).to({rotation:-345},13).wait(15).to({rotation:-705},11).wait(31).to({rotation:-1425},27).wait(24));

	// Layer 12
	this.instance_12 = new lib.Wheel();
	this.instance_12.parent = this;
	this.instance_12.setTransform(353.8,245.7,1.312,1.312,150,0,0,4.2,4.5);

	this.timeline.addTween(cjs.Tween.get(this.instance_12).wait(29).to({rotation:-210},13).wait(15).to({rotation:-570},11).wait(31).to({rotation:-1290},27).wait(24));

	// Layer 8
	this.instance_13 = new lib.Blob1copy3();
	this.instance_13.parent = this;
	this.instance_13.setTransform(412.3,214,1,1,0,0,180);
	this.instance_13._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_13).wait(87).to({_off:false},0).wait(63));

	// Layer 6
	this.instance_14 = new lib.Blob1copy2();
	this.instance_14.parent = this;
	this.instance_14.setTransform(412.3,214,1,1,0,0,180);
	this.instance_14._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_14).wait(58).to({_off:false},0).to({_off:true},29).wait(63));

	// Layer 3
	this.instance_15 = new lib.Blob1copy();
	this.instance_15.parent = this;
	this.instance_15.setTransform(412.3,214,1,1,0,0,180);
	this.instance_15._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_15).wait(29).to({_off:false},0).to({_off:true},29).wait(92));

	// Layer 1
	this.instance_16 = new lib.Blob1();
	this.instance_16.parent = this;
	this.instance_16.setTransform(412.3,214,1,1,0,0,180);

	this.timeline.addTween(cjs.Tween.get(this.instance_16).to({_off:true},29).wait(121));

	// Layer 4
	this.instance_17 = new lib.Rolling0();
	this.instance_17.parent = this;
	this.instance_17.setTransform(242.2,209.3,1,1,0,0,0,47.1,53.3);

	this.instance_18 = new lib.Pumpupthe1();
	this.instance_18.parent = this;
	this.instance_18.setTransform(154.8,210.1,1,1,0,0,0,28.1,50.4);

	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("AD/CMIAAkXIP8AAIAAEXgAz7CMIAAkXILqAAIAAEXg");
	this.shape.setTransform(425,246.6);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape},{t:this.instance_18},{t:this.instance_17}]}).wait(150));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(297.6,178,530,244.1);
// library properties:
lib.properties = {
	width: 550,
	height: 300,
	fps: 24,
	color: "#FFFFFF",
	opacity: 1.00,
	webfonts: {},
	manifest: [],
	preloads: []
};




})(lib = lib||{}, images = images||{}, createjs = createjs||{}, ss = ss||{}, AdobeAn = AdobeAn||{});
var lib, images, createjs, ss, AdobeAn;