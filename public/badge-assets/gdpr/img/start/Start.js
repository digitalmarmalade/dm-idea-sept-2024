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


(lib.Tween3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AgIAHIg3gMIACgDQAHgJAKABIAEABQACACAJABIA/ANQAZAEADgDIABgBIAAgBQADAEgFAHQgEAGgEAAIgEAAQgSAAgngKg");
	this.shape.setTransform(-39.3,-16.1,0.954,0.954,-8.9);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FFFFFF").s().p("AAWBBQgHgGgJgRQgJgXgIgKQgQgVgagVQgVgQgNgGQgFgDgGgBIgGgBIAAgCIABgCIACgCIABgBIAMAAIALAFIADABIAIADQAZANAeAcQAUATAKAYQAIATAKADQAGABAKgHIAbgYIAGgEIADgDIACgBIADgBIABAAIAHABIABABIABACIABACIAAABIAAAFQgJADgTATIgWAVQgHAEgKAAQgLAAgFgDg");
	this.shape_1.setTransform(-27.4,-17.4,0.954,0.954,-8.9);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#FFFFFF").s().p("AB/EGQgxgshHiXIhajOQgEgJgPgQQgRgSgDgFQgFgHgHgdQgHgcgFgJIgEgFIATAQQACADAIAWIAMAdQACAFATARQARAQACAFICMDjQBvC/gqAAQgFAAgIgEg");
	this.shape_2.setTransform(-19.2,16.1,0.954,0.954,-8.9);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#FFFFFF").s().p("AgIAIIg3gOIACgDQAHgJAKABQBkAaAGgHIABgBIAAgBQADAFgFAHQgEAGgEAAIgFAAQgSAAgmgKg");
	this.shape_3.setTransform(-39.3,-16.2,0.954,0.954,-8.9);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#FFFFFF").s().p("AAWBBQgGgGgJgRQgKgXgHgKQgRgVgagVQgVgQgNgGQgGgEgMAAQABgGAHgCQAHgBAFACIAdAOQAWANAYAXQAUATAKAZQAIASAKADQAGACAHgEQAGgFASgRQAOgOAJgBQAHgBABAMQgKADgSATIgXAVQgGAEgLAAQgKAAgGgDg");
	this.shape_4.setTransform(-27.5,-17.4,0.954,0.954,-8.9);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#311189").s().p("ABxE1Qg1gWhfiLQgNgShvivQgGgIgRgOIgWgSQgFgGgLgbQgLgZgGgIQgJgJghgSQghgTgIgIQgEgGgDgIQgCgJADgHIAHgPQAEgKALAAQBjAKAFgIQACgEgWgNQgZgPgEgGQgFgLAIgDQAGgEAGACIAeAJQAXAIAaATQAWAQAOAWQAKAQAKABQAFABAGgFIAUgYQASgYAIAIQAFAHgBALQgCAJgHAQIgPAlQgIAZgCAYQgDAbAIAPQAmBGBZBEQAtAjAlAVIAEgGIC2BpIgVASQhuBgg9AAQgMAAgLgEg");
	this.shape_5.setTransform(-13.1,8.8);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-46,-22.5,65.7,62.7);


(lib.Tween2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AhyCIQA6hFCGjiQAQADAPAKQAQALAKAPQgYAWhpBxQhlBugnAjg");
	this.shape.setTransform(-0.2,-31.2,0.954,0.954,-8.9);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.lf(["#E1A530","#CA8163","#B56488","#A54AA7","#9938BE","#912ACE","#8C23D7","#8A21DA"],[0,0.11,0.224,0.345,0.475,0.616,0.776,1],-22.4,26.4,36.2,-14.2).s().p("AjEICQhCgTgLjjQgDhPAEhPQAFhHAFgIIBbhmQBfhsAggnQA5hFCHjjQBRASAfCkQAbCMgVBnQgIAog7BmQg6BnhLBqQiyD9hKAAIgKgBg");
	this.shape_1.setTransform(0.4,-0.3,0.954,0.954,-8.9);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-24.1,-51,48.3,102.2);


(lib.Tween1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AhyCIQA6hFCGjiQAQADAPAKQAQALAKAPQgYAWhpBxQhlBugnAjg");
	this.shape.setTransform(24.5,-30.7,0.954,0.954);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.lf(["#E1A530","#CA8163","#B56488","#A54AA7","#9938BE","#912ACE","#8C23D7","#8A21DA"],[0,0.11,0.224,0.345,0.475,0.616,0.776,1],-22.4,26.4,36.2,-14.2).s().p("AjEICQhCgTgLjjQgDhPAEhPQAFhHAFgIIBbhmQBfhsAggnQA5hFCHjjQBRASAfCkQAbCMgVBnQgIAog7BmQg6BnhLBqQiyD9hKAAIgKgBg");
	this.shape_1.setTransform(20.4,0,0.954,0.954);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#FFFFFF").s().p("AgIAHIg3gMIACgDQAHgJAKABIAEABQACACAJABIA/ANQAZAEADgDIABgBIAAgBQADAEgFAHQgEAGgEAAIgEAAQgSAAgngKg");
	this.shape_2.setTransform(-39.7,-35.7,0.954,0.954);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#FFFFFF").s().p("AAWBBQgHgGgJgRQgJgXgIgKQgQgVgagVQgVgQgNgGQgFgDgGgBIgGgBIAAgCIABgCIACgCIABgBIAMAAIALAFIADABIAIADQAZANAeAcQAUATAKAYQAIATAKADQAGABAKgHIAbgYIAGgEIADgDIACgBIADgBIABAAIAHABIABABIABACIABACIAAABIAAAFQgJADgTATIgWAVQgHAEgKAAQgLAAgFgDg");
	this.shape_3.setTransform(-27.8,-35.2,0.954,0.954);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#FFFFFF").s().p("AB/EGQgxgshHiXIhajOQgEgJgPgQQgRgSgDgFQgFgHgHgdQgHgcgFgJIgEgFIATAQQACADAIAWIAMAdQACAFATARQARAQACAFICMDjQBvC/gqAAQgFAAgIgEg");
	this.shape_4.setTransform(-24.8,-0.8,0.954,0.954);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#FFFFFF").s().p("AgIAIIg3gOIACgDQAHgJAKABQBkAaAGgHIABgBIAAgBQADAFgFAHQgEAGgEAAIgFAAQgSAAgmgKg");
	this.shape_5.setTransform(-39.7,-35.8,0.954,0.954);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#FFFFFF").s().p("AAWBBQgGgGgJgRQgKgXgHgKQgRgVgagVQgVgQgNgGQgGgEgMAAQABgGAHgCQAHgBAFACIAdAOQAWANAYAXQAUATAKAZQAIASAKADQAGACAHgEQAGgFASgRQAOgOAJgBQAHgBABAMQgKADgSATIgXAVQgGAEgLAAQgKAAgGgDg");
	this.shape_6.setTransform(-27.8,-35.2,0.954,0.954);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#311189").s().p("AhoF8QgzgfhNifQgKgVhXjIQgEgJgPgQQgRgSgDgFQgEgHgHgeQgHgcgGgIQgIgMgegYQgggYgHgKQgDgHgBgIQgBgKAEgHIAJgPQAHgKAKACQBlAbAGgHQAEgEgVgSQgXgTgDgHQgEgMAJgCQAHgDAGADIAdAOQAWAMAYAYQAVAUALAZQAHASAKADQAGACAGgEQAIgFARgRQAXgVAGAJQAFAHgEAMQgDAJgKAQQgNAUgIAPQgNAZgGAYQgGAcAFAQQAcBOBSBXQApArAjAbQDqj2Amg8QBOh9BBh+IAsA5QAtBDAFA1QAKB0gMBAQgWB6heA8QiZBwhXA3QhzBJg/AAQgWAAgQgKg");
	this.shape_7.setTransform(-1.4,-11.1,0.954,0.954);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-46.6,-49.1,93.3,98.4);


(lib.Path_7 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AoMOWQg6gigBhDIAAwJQAAg7Aeg0QAfg0AzgeINvn8QA7giA6AiQA7AhAABEIAAQJQAAA7gfA0QgeA0g0AeItvH8QgdARgdAAQgdAAgdgRg");
	this.shape.setTransform(58.4,93.4);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Path_7, new cjs.Rectangle(0,-0.1,116.7,187), null);


(lib.ClipGroup_3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AgEgEIAJAAIgJAJg");
	mask.setTransform(3.5,3.5);

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#000000","#FFFFFF"],[0,1],0,-96.6,0,52.8).s().p("AhdKSIAbmyQAcm7ACg0QABg0g8hnQhDhngOgXQgRgdgCgpIABgjIFrDmQgDA1gLAgQgPAsgLBGQgNBZAmGXQAUDMAWC6g");
	this.shape.setTransform(1035.7,809.9);

	var maskedShapeInstanceList = [this.shape];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.ClipGroup_3, null, null);


(lib.ClipGroup_2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AgEgEIAJAAIgJAJg");
	mask.setTransform(3.5,3.5);

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#000000","#FFFFFF"],[0,1],0,-112,0,37.4).s().p("AACIQQAlnJANhSQAKhAgKhFQgKhHgZghQgLgOgqgYIhZgwQh/hGghg7QgOgYAFgWIAHgSII1AQQARAfgWA9QghBYgFAqQgHBDAhF9QARDAASCxg");
	this.shape.setTransform(988.4,825.3);

	var maskedShapeInstanceList = [this.shape];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.ClipGroup_2, null, null);


(lib.ClipGroup_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AgEgEIAJAAIgJAJg");
	mask.setTransform(3.5,3.5);

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#FFFFFF","#000000"],[0,1],-151.9,123.2,95.3,-274.3).s().p("AxkULI3M08QgwgqAHhAQAGg/A4ghIaevSQBMgsBYgMQBXgNBWAVMAyHAMQIAAMYInwEeMgiQgO0IC4GWIYGMrIjfCBI4fu9Im7BDIaUQ2Ij5B4g");
	this.shape.setTransform(1024.9,771.6);

	var maskedShapeInstanceList = [this.shape];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.ClipGroup_1, null, null);


(lib.ClipGroup = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AgEgEIAJAAIgJAJg");
	mask.setTransform(3.5,3.5);

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#FFFFFF","#000000"],[0,1],22.6,-239.9,-138.4,39.1).s().p("A33W0IAA9qIKsE1MAlDgUyMAAAAtng");
	this.shape.setTransform(835.9,754.6);

	var maskedShapeInstanceList = [this.shape];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.ClipGroup, null, null);


// stage content:
(lib.Start = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 11
	this.instance = new lib.Tween2("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(846.4,269.6,1,1,0,0,0,10.7,-44.5);
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(17).to({_off:false},0).to({regX:10.8,rotation:30,x:849.3,y:266.1},7).to({scaleX:1,scaleY:1,rotation:27.2,y:266},3).to({scaleX:1,scaleY:1,rotation:30,y:266.1},3).to({rotation:25,x:843.3,y:269.7},8).to({rotation:31,y:269.6},3).to({rotation:25,y:269.7},3).to({regX:10.9,rotation:37},8).to({regY:-44.4,y:269.8},3).to({startPosition:0},3).to({rotation:30},5).to({regX:11,rotation:33,x:843.4,y:269.9},3).to({regX:10.9,rotation:30,x:843.3,y:269.8},3).to({rotation:26.8,x:843.4},6).to({startPosition:0},3).to({startPosition:0},3).to({regX:10.7,regY:-44.5,rotation:0,x:846.4,y:269.6},8).to({_off:true},1).wait(41));

	// Layer 12
	this.instance_1 = new lib.Tween3("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(816.6,339.5,1,1,0,0,0,6,35.6);
	this.instance_1._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(17).to({_off:false},0).to({regY:35.8,rotation:-20.2,x:791.1,y:320.1},7).to({scaleX:1,scaleY:1,rotation:-20.1,x:787.2,y:320},3).to({scaleX:1,scaleY:1,rotation:-20.2,x:791.1,y:320.1},3).to({rotation:-35.2,x:785.9,y:318.8},8).to({x:781.9},3).to({x:785.9},3).to({regX:6.1,rotation:-5.2,x:799.5,y:309.5},8).to({rotation:-5.2,y:305.5},3).to({y:309.5},3).to({regX:6.2,regY:35.9,rotation:-11.4,x:800.6,y:313.9},5).to({x:796.6},3).to({x:800.6},3).to({rotation:-26.4},6).to({x:796.6},3).to({x:800.6},3).to({regX:6,regY:35.6,rotation:0,x:816.6,y:339.5},8).to({_off:true},1).wait(41));

	// Arm
	this.instance_2 = new lib.Tween1("synched",0);
	this.instance_2.parent = this;
	this.instance_2.setTransform(858.4,261.2,1,1,-19,0,0,46.7,-49.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).to({regX:46.6,rotation:-8.9,x:854.3,y:261.3},16).to({_off:true},1).wait(73).to({_off:false},0).to({regX:46.7,rotation:-19,x:858.4,y:261.2},9).wait(32));

	// Layer 13
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AkmB9IJNlUIAABaIpNFVg");
	this.shape.setTransform(731.3,335.9,1.883,1.883);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FFFFFF").s().p("AkmB9IJNlUIAABaIpNFVg");
	this.shape_1.setTransform(731.3,335.9,1.883,1.883);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#FFFFFF").s().p("AkmB9IJNlUIAABaIpNFVg");
	this.shape_2.setTransform(731.3,335.9,1.883,1.883);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#FFFFFF").s().p("AkmB9IJNlUIAABaIpNFVg");
	this.shape_3.setTransform(731.3,335.9,1.883,1.883);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#FFFFFF").s().p("AkmB9IJNlUIAABaIpNFVg");
	this.shape_4.setTransform(731.3,335.9,1.883,1.883);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#FFFFFF").s().p("AkmB9IJNlUIAABaIpNFVg");
	this.shape_5.setTransform(731.3,335.9,1.883,1.883);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#FFFFFF").s().p("AkmB9IJNlUIAABaIpNFVg");
	this.shape_6.setTransform(731.3,335.9,1.883,1.883);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#FFFFFF").s().p("AkmB9IJNlUIAABaIpNFVg");
	this.shape_7.setTransform(731.3,335.9,1.883,1.883);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.shape,p:{y:335.9}}]},106).to({state:[{t:this.shape_1,p:{y:335.9}},{t:this.shape,p:{y:359.9}}]},2).to({state:[{t:this.shape_2,p:{y:335.9}},{t:this.shape_1,p:{y:359.9}},{t:this.shape,p:{y:384.7}}]},2).to({state:[{t:this.shape_3,p:{y:335.9}},{t:this.shape_2,p:{y:359.9}},{t:this.shape_1,p:{y:384.7}},{t:this.shape,p:{y:408.7}}]},2).to({state:[{t:this.shape_4,p:{y:335.9}},{t:this.shape_3,p:{y:359.9}},{t:this.shape_2,p:{y:384.7}},{t:this.shape_1,p:{y:408.7}},{t:this.shape,p:{y:433.7}}]},2).to({state:[{t:this.shape_5,p:{y:335.9}},{t:this.shape_4,p:{y:359.9}},{t:this.shape_3,p:{y:384.7}},{t:this.shape_2,p:{y:408.7}},{t:this.shape_1,p:{y:433.7}},{t:this.shape,p:{y:457.7}}]},2).to({state:[{t:this.shape_6,p:{y:335.9}},{t:this.shape_5,p:{y:359.9}},{t:this.shape_4,p:{y:384.7}},{t:this.shape_3,p:{y:408.7}},{t:this.shape_2,p:{y:433.7}},{t:this.shape_1,p:{y:457.7}},{t:this.shape,p:{y:482.5}}]},2).to({state:[{t:this.shape_7},{t:this.shape_6,p:{y:359.9}},{t:this.shape_5,p:{y:384.7}},{t:this.shape_4,p:{y:408.7}},{t:this.shape_3,p:{y:433.7}},{t:this.shape_2,p:{y:457.7}},{t:this.shape_1,p:{y:482.5}},{t:this.shape,p:{y:506.5}}]},2).wait(11));

	// Stars
	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#FFFFFF").s().p("AgmBXQgFgCACgHIAKgrQACgIgFgCIgZgJQgEgBACgIQABgHAGgEIAfgSQAFgDADgIIAKgrQgBgGAFgDQAEgDACAGIAKAgQACAHAGgEIAfgSQAGgDACAFQACAGgFAHIgZAlQgEAHABAGIAKAfQACAGgFAHQgEAGgFgBIgZgJQgEgCgEAHIgZAlQgDAFgEAAIgCAAg");
	this.shape_8.setTransform(696.9,265.6,0.954,0.954);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#FFFFFF").s().p("AgmBXQgFgCACgHIAKgrQACgJgFgBIgZgJQgEgBACgJQABgGAGgEIAfgSQAFgEADgHIAKgrQgBgHAFgCQAEgDACAGIAKAgQACAGAGgDIAfgSQAGgDACAGQACAFgFAHIgZAlQgEAHABAGIAKAfQACAGgFAHQgEAHgFgCIgZgJQgEgCgEAHIgZAlQgDAFgEAAIgCAAg");
	this.shape_9.setTransform(714.4,255.6,0.954,0.954);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#FFFFFF").s().p("AgmBXQgFgBACgIIAKgrQACgIgFgCIgZgJQgEgCACgHQABgIAGgDIAfgSQAFgDADgIIAKgrQgBgGAFgEQAEgCADAGIAKAgQABAGAHgDIAegSQAGgDACAGQACAFgFAHIgZAlQgEAIACAFIAKAfQABAGgEAHQgFAHgFgCIgZgJQAAAAgBAAQAAAAgBAAQAAAAgBAAQgBAAAAABQgCABgCADIgZAlQgDAFgEAAIgCAAg");
	this.shape_10.setTransform(731.8,245.6,0.954,0.954);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#FFFFFF").s().p("AgmBXQgFgCACgHIAKgrQACgIgFgCIgZgJQgEgBACgIQABgHAGgEIAfgSQAFgDADgIIAKgrQgBgGAFgDQAFgDACAGIAKAgQABAHAHgEIAegSQAGgDACAFQACAGgFAHIgZAlQgEAHABAGIAKAfQACAGgEAHQgFAGgFgBIgZgJQgEgCgEAHIgZAlQgDAFgEAAIgCAAg");
	this.shape_11.setTransform(749.3,235.6,0.954,0.954);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#FFFFFF").s().p("AgmBXQgFgCACgHIAKgrQACgJgFgBIgZgJQgEgBACgJQABgGAGgEIAfgSQAFgEADgHIAKgrQgBgHAGgCQAEgDACAGIAKAgQAAABAAAAQAAABABABQAAAAAAAAQABABAAAAQADABACgCIAfgSQAGgDACAGQACAFgFAHIgZAlQgEAHABAGIAKAfQACAGgFAHQgEAHgFgCIgZgJQgEgCgEAHIgZAlQgDAFgEAAIgCAAg");
	this.shape_12.setTransform(766.8,225.6,0.954,0.954);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#006600").s().p("AgmBXQgFgCACgHIAKgrQACgJgFgBIgZgJQgEgBACgJQABgGAGgEIAfgSQAFgEADgHIAKgrQgBgHAGgCQAEgDACAGIAKAgQAAABAAAAQAAABABABQAAAAAAAAQABABAAAAQADABACgCIAfgSQAGgDACAGQACAFgFAHIgZAlQgEAHABAGIAKAfQACAGgFAHQgEAHgFgCIgZgJQgEgCgEAHIgZAlQgDAFgEAAIgCAAg");
	this.shape_13.setTransform(766.8,225.6,0.954,0.954);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#006600").s().p("AgmBXQgFgCACgHIAKgrQACgIgFgCIgZgJQgEgBACgIQABgHAGgEIAfgSQAFgDADgIIAKgrQgBgGAFgDQAFgDACAGIAKAgQABAHAHgEIAegSQAGgDACAFQACAGgFAHIgZAlQgEAHABAGIAKAfQACAGgEAHQgFAGgFgBIgZgJQgEgCgEAHIgZAlQgDAFgEAAIgCAAg");
	this.shape_14.setTransform(749.3,235.6,0.954,0.954);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#006600").s().p("AgmBXQgFgBACgIIAKgrQACgIgFgCIgZgJQgEgCACgHQABgIAGgDIAfgSQAFgDADgIIAKgrQgBgGAFgEQAEgCADAGIAKAgQABAGAHgDIAegSQAGgDACAGQACAFgFAHIgZAlQgEAIACAFIAKAfQABAGgEAHQgFAHgFgCIgZgJQAAAAgBAAQAAAAgBAAQAAAAgBAAQgBAAAAABQgCABgCADIgZAlQgDAFgEAAIgCAAg");
	this.shape_15.setTransform(731.8,245.6,0.954,0.954);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#006600").s().p("AgmBXQgFgCACgHIAKgrQACgJgFgBIgZgJQgEgBACgJQABgGAGgEIAfgSQAFgEADgHIAKgrQgBgHAFgCQAEgDACAGIAKAgQACAGAGgDIAfgSQAGgDACAGQACAFgFAHIgZAlQgEAHABAGIAKAfQACAGgFAHQgEAHgFgCIgZgJQgEgCgEAHIgZAlQgDAFgEAAIgCAAg");
	this.shape_16.setTransform(714.4,255.6,0.954,0.954);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#006600").s().p("AgmBXQgFgCACgHIAKgrQACgIgFgCIgZgJQgEgBACgIQABgHAGgEIAfgSQAFgDADgIIAKgrQgBgGAFgDQAEgDACAGIAKAgQACAHAGgEIAfgSQAGgDACAFQACAGgFAHIgZAlQgEAHABAGIAKAfQACAGgFAHQgEAGgFgBIgZgJQgEgCgEAHIgZAlQgDAFgEAAIgCAAg");
	this.shape_17.setTransform(696.9,265.6,0.954,0.954);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.shape_8}]},27).to({state:[{t:this.shape_8},{t:this.shape_9}]},14).to({state:[{t:this.shape_8},{t:this.shape_9},{t:this.shape_10}]},14).to({state:[{t:this.shape_8},{t:this.shape_9},{t:this.shape_10},{t:this.shape_11}]},11).to({state:[{t:this.shape_8},{t:this.shape_9},{t:this.shape_10},{t:this.shape_11},{t:this.shape_12}]},12).to({state:[{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13}]},21).wait(32));

	// Body
	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#4913AB").s().p("AACCrQhPg7gHgkQgQhRgOigIByhNIAkDnQAqDoAlAWQhBglgwgjg");
	this.shape_18.setTransform(856.3,322.4,0.954,0.954);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#DFE6F5").s().p("AAPAQQAJgZgYgcQgFgGgMAGIgLAIIAJgLQALgLAHAAQAVADAIAnQAEAQgPAYIgQAVQAGgMAIgYg");
	this.shape_19.setTransform(863.5,216.1,0.954,0.954);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#FFFFFF").s().p("AAJCAQg8g6AUhpQAPhMAZgfIAGgIQgMA3gEA6QgGBWATAeQAVAeADAYQACAQgEACg");
	this.shape_20.setTransform(862.9,238,0.954,0.954);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#FFFFFF").s().p("AAvC3IghgjQgXgbgUgRQgWgTgOgkQgNgfgBgaQgDhlBRgxQAogYApgEQAAAQgLAIIhCAoQg5AkAKBbQAKBiBVA/IASAMQgHAHgEABIgEABQgDAAgEgEg");
	this.shape_21.setTransform(853.6,195,0.954,0.954);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#311189").s().p("Ah9JrQhFgUgNhSQgNhMAqg8QAjgxgXghQgKgNgdgZQgwgqgPgOQg9g6AUhqQAPhLAagfQATgTAMgeQATgsgQgfQgYgugeAZIgWAVQgLAJgHgIIghgjQgYgbgUgRQgWgTgOgkQgNgfgBgbQgDhlBRgxQAogYApgFIADgJQAGgMANgKQAsggBugDQB5gCBbBJQBNA/AYBWQAJAfAWApIAlBCQAnBMgbAvQgbAxBJA6IA+AsQAjAbALAUQAoBKgPBcQgPBdhBBBQgMANgkAKIhHARQhjAagjA3QghA2hCAnQg3AigxAAQgVAAgUgHg");
	this.shape_22.setTransform(889.5,230.5,0.954,0.954);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#FFFFFF").s().p("ABOC/Qg+gWguhYQgrhRAKgkQAGgWgUgjQgYgrgDgWIgFgjQAWBHAwAmIAZATQAHAJgGANIgUArQgDARAQAoQAPAnAzAwQArAqAVAIQgXAAgJgDg");
	this.shape_23.setTransform(858.9,219.5,0.954,0.954);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("#8B4F1C").s().p("AgKFUQAOgYgRgSQgFgEgaAAQgdAAgKgEQg9gVgvhZQgrhQAJgmQAHgWgUgjQgYgqgDgWQgjjeCOgzQEwhxBMDNQAcBJgHBnQgFBQgUA7IgKAdQgIAYABAOQAAAaADALQAHAUAWAGQATAGAVgEQgMAfgtAoQgmAjgmAUQgrAWiFASQAMgMAOgVg");
	this.shape_24.setTransform(874.3,210,0.954,0.954);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#FFFFFF").s().p("AifAaQAWgbBMgsQBcg3BwgmQAOgCAMANQhDAZhGA1IhhBQQgpAhg+BLQAAhmAJgLg");
	this.shape_25.setTransform(859.9,259.5,0.954,0.954);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.lf(["#E1A530","#CA8163","#B56488","#A54AA7","#9938BE","#912ACE","#8C23D7","#8A21DA"],[0,0.11,0.224,0.345,0.475,0.616,0.776,1],-55.1,3.4,3.5,-37.2).s().p("AjbIsQgjgQhHgwQhlhGgIgpQgbiPgPkQQgNkOARgXQAVgcBMgsQBdg2BxgnQAQgCAUAYQASAWAVgIQAlgQAlgZQAqgdALgWQAXgDAggLQAkgOAIgBQAtgJCEBqQB8BjARApQARAmAMEUQANEhgaAoQgdAwjBBmIi7BcQhBAhhTABIgGAAQhIAAgygXg");
	this.shape_26.setTransform(889.6,293.2,0.954,0.954);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.lf(["#E1A530","#DB9E3A","#B9746E","#9E5392","#8A39AE","#7B27C3","#721DCE","#701AD2"],[0,0.024,0.18,0.341,0.498,0.663,0.827,1],-37.4,0.7,12.6,-1.3).s().p("AjyDaQgegngmg7IgphAQglgwgUhpQgPhtgIgbQglh7HBAIQDfAEDnAeIgZCAQgcB/gQAUQgaAdgPAfQgPAhABAaQAAAZgnAuQglAsg6AtQiNBthjAAQhOAAhliDg");
	this.shape_27.setTransform(888.9,342.3,0.954,0.954);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f("#311189").s().p("AiDHBQgcgIBQm9IBVm8QCGJcAAAwQAAAkh4BtQhuBkgkAAIgFAAg");
	this.shape_28.setTransform(930,310.2,0.954,0.954);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.lf(["#E1A530","#DB9E3A","#B9746E","#9E5392","#8A39AE","#7B27C3","#721DCE","#701AD2"],[0,0.024,0.18,0.341,0.498,0.663,0.827,1],-37.4,0.7,12.6,-1.3).s().p("AjyDaQgegngmg7IgphAQglgwgUhpQgPhtgIgbQglh7HBAIQDfAEDnAeIgZCAQgcB/gQAUQgaAdgPAfQgPAhABAaQAAAZgnAuQglAsg6AtQiNBthjAAQhOAAhliDg");
	this.shape_29.setTransform(888.9,342.3,0.954,0.954);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_29},{t:this.shape_28},{t:this.shape_27},{t:this.shape_26},{t:this.shape_25},{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18}]}).wait(131));

	// Phone
	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f("#5717CA").s().p("AjyCpQgLgHAAgLIAAgWQAAgSAQgLIHRkMQAJgFAIAFQAJAGAAAJIAAAbQAAATgQAKInLEKQgFACgFAAQgGAAgFgCg");
	this.shape_30.setTransform(721.2,149,0.954,0.954);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f("#FFFFFF").s().p("AAHBVQgmgjgFgKQgDgFAEgaIAIgqIAJg3QADgUAEgBQAXAgAOAMIgCBMQAABRANAPQAAABABAAQAAABAAAAQAAABAAAAQAAAAAAAAQgCAAgdgZg");
	this.shape_31.setTransform(857.3,358.9,0.954,0.954);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f("#FFFFFF").s().p("AATCMQgjgwgUhqQgQhsgIgbQgKghAcgYIARB7QANBbAGAUQAFARAGAsQAMAqAkAnQAKALABAHIgCAUQgdgxgOgTg");
	this.shape_32.setTransform(853.5,334.3,0.954,0.954);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f("#FFFFFF").s().p("Ah1OeICT95IArgbIAEAmQAJAzAWBCQAWBBgYA5QgNAegXAjQgPAwAVA0QAaA9gCArQgBANgYAXQgbAbgIAqQgEAWABA/QAAAmgZAgQgaAkgxJVQgYErgTEjg");
	this.shape_33.setTransform(852.5,448.6,0.954,0.954);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f("#FFFFFF").s().p("AhpO7QAftbBIp+QAWjHAYiaIAUhyIAqgLQg1HHgvHgQhJL9gHFVQgfgfAAgjg");
	this.shape_34.setTransform(849.3,450.6,0.954,0.954);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f("#FFFFFF").s().p("AkmB9IJNlUIAABaIpNFVg");
	this.shape_35.setTransform(722.2,210.8,0.954,0.954);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f("#FFFFFF").s().p("AjdBUIG7kBIAABcIm7D/g");
	this.shape_36.setTransform(715.2,227.8,0.954,0.954);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f().s("#FFFFFF").ss(2).p("AlkB+IAACMQAAAdAZAOQAaAPAYgPIJElPQAbgQAPgaQAQgbAAgfIAAiMQAAgcgZgPQgZgOgZAOIpEFPQgbAQgQAbQgPAaAAAfg");
	this.shape_37.setTransform(732.6,278.2,0.954,0.954);

	this.instance_3 = new lib.Path_7();
	this.instance_3.parent = this;
	this.instance_3.setTransform(730.2,245.7,0.954,0.954,0,0,0,58.4,93.4);
	this.instance_3.alpha = 0.5;

	this.shape_38 = new cjs.Shape();
	this.shape_38.graphics.f("#311189").s().p("Aj8CPQhLgzgqgwQgEgFAEgaIAHgrIAJg1QADgUACAAQBrB/CKABQBVAACchRQCUhPBOhMQgBAjAEAzQAFA5AAANQABA0ixBrQizBthdAAQhKgBhmhFg");
	this.shape_38.setTransform(889.1,358.6,0.954,0.954);

	this.shape_39 = new cjs.Shape();
	this.shape_39.graphics.lf(["#E1A530","#DB9E3A","#B9746E","#9E5392","#8A39AE","#7B27C3","#721DCE","#701AD2"],[0,0.024,0.18,0.341,0.498,0.663,0.827,1],-51.3,0.2,-1.3,-1.7).s().p("AjIRjQh/gKiDg1Qidg/AChMQAftcBIp+QAXjHAYiaIAUhyIBggXQB2gbBogOQFKgtBGBfQBZB5AjBFQAzBmAgCeQA5EdBLQYQACAjigBgIigBaIhov7IAvQTQhCAphYAoQifBIhqAAIgUAAg");
	this.shape_39.setTransform(897.7,454,0.954,0.954);

	this.shape_40 = new cjs.Shape();
	this.shape_40.graphics.f("#311189").s().p("ABlGYIgWgFIhUiCIiPn+ICHisIAlEMQAuEfAqBkIAUAVQAQAQAAAPQAABhgTANQgDACgHAAQgHAAgLgCg");
	this.shape_40.setTransform(936.2,371.2,0.954,0.954);

	this.shape_41 = new cjs.Shape();
	this.shape_41.graphics.f("#311189").s().p("ACDJYQiHgIhkgXQiXgkgphCQgNgTAHgcQAGgcAVgKQALgFAaAFIAmAKQAyAOBQgFQBcgGATghQAUgggmnFIgpm/ICEgZQCGgRAKApQBIFggmE+QgDAXgcCwQgOBaAIAnQARBbgtAvQgiAkg0AAIgKgBg");
	this.shape_41.setTransform(868.1,572.5,0.954,0.954);

	this.shape_42 = new cjs.Shape();
	this.shape_42.graphics.lf(["#E1A530","#DB9E3A","#B9746E","#9E5392","#8A39AE","#7B27C3","#721DCE","#701AD2"],[0,0.024,0.18,0.341,0.498,0.663,0.827,1],-29.2,0,29.3,0).s().p("ACJJsQiOgdhWgeQiTgygphBQgNgVABgnQAAgpATgJQAKgFAiARQAqAWAEABQAzANBPgFQBcgGATggQAUghgmnEIgpm/IBygZQB0gRAIAqQBIFfgYEkIgVC0QgKBRAIAoQAeCKgvBMQgiA3g0AAQgLAAgMgCg");
	this.shape_42.setTransform(866.9,578.2,0.954,0.954);

	this.shape_43 = new cjs.Shape();
	this.shape_43.graphics.f("#311189").s().p("AA9OzQgXgKgZgVQgWgSgngoQhOhQglhGQgkhEAXgWQAUgUAgADQAfADAdAWQAXATAMgEIhss0QAEjHARjFQAimJA/APQBSAVAoBRQAiBGALCLQAGBNADDjQACDsALCXQAFBNgJDtQgIDqAIBmQALCHAEAMQATBDg3AcQgbANgYAAQgRAAgQgHg");
	this.shape_43.setTransform(909.4,524.3,0.954,0.954);

	this.shape_44 = new cjs.Shape();
	this.shape_44.graphics.lf(["#E1A530","#DB9E3A","#B9746E","#9E5392","#8A39AE","#7B27C3","#721DCE","#701AD2"],[0,0.024,0.18,0.341,0.498,0.663,0.827,1],-19.3,0,19.2,0).s().p("ABbLyQgbgBgNgLQgbgWhMhZQhEhPgohSQgihGADghQABgTALgPQAKgPALACQAWAFAlAmQATATAXAbQACADApAUQApAWAHAFIhstNQAGhjAShgQAli/A8AVQA5ATAVBNQARBBABCgIgBF2QACEXAUELQACAXAHAcIAKAjQAeB+hDAoQgWAMgbAAIgGAAg");
	this.shape_44.setTransform(909.6,551.9,0.954,0.954);

	this.instance_4 = new lib.ClipGroup_3();
	this.instance_4.parent = this;
	this.instance_4.setTransform(426.7,300.8,0.954,0.954,0,0,0,527.6,437.9);

	this.instance_5 = new lib.ClipGroup_2();
	this.instance_5.parent = this;
	this.instance_5.setTransform(409,302,0.954,0.954,0,0,0,509,439.1);

	this.shape_45 = new cjs.Shape();
	this.shape_45.graphics.f("#311189").s().p("EgPwApQQhdg1AAhrMgAFg6mQAAh1A7hmQA6hmBlg7IaRvaQBng7BmA6QBoA8AAB2MAAFA6SQAAB3g7BmQg7BlhmA8I6tPbQgvAbguAAQgvAAgugbgAoy7lIkhCqQheA3g2BeQg2BfAABuMAAFA5gQAABYBMAsQBNAtBMgsIaDvDQBfg3A3hgQA3hfAAhuMgAFg5uQgBhZhMgrQhNgshMAsIk+C7Qg+AlgiA9IiBDoQgSAhgmAYInxEiQgcAQgfgBQghgCgZgUIg6grQgYgTgdgBIgGAAQgbAAgXAOg");
	this.shape_45.setTransform(726.2,337.2,0.954,0.954);

	this.shape_46 = new cjs.Shape();
	this.shape_46.graphics.f("#FFFFFF").s().p("EgPwApQQhdg1AAhsMgAFg6lQAAh1A7hmQA6hmBlg7IaSvaQBmg8BnA8QBnA7AAB3MAAFA6RQAAB3g7BmQg7BmhmA7I6tPbQguAbgvAAQguAAgvgbgEAMzgoOI6FPSQheA4g2BeQg2BfAABtMAAFA5hQAABZBMArQBMAsBNgtIaDvDQBfg2A3hgQA3hfAAhuMgAFg5vQAAhYhNgsQgmgWgmAAQgmAAgnAXg");
	this.shape_46.setTransform(724.7,336.3,0.954,0.954);

	this.shape_47 = new cjs.Shape();
	this.shape_47.graphics.lf(["#861CDB","#831CDA","#5717CA"],[0,0.051,1],55.2,-21.6,13.2,-90.2).s().p("EgNmAq6QhLgPhQgvQhQgugzg5Qg4g9AAg1MgAFg7kQgBh3A8hoQA7hoBng8IavvpQAygdBWAQQBQAQBVAxQBVAwA1A9QA7BCAAA5MAAFA7SQAAB4g8BoQg8BohoA8I7KPsQgbAQgpAAQgaAAgggHgEAOdgoDI6hPhQhgA4g3BhQg3BgAABvMAAFA6gQAABZBNAsQBOAtBNgtIahvTQBgg3A4hhQA4hhAAhwMgAFg6tQgBhahOgtQgngWgmAAQgnAAgnAYg");
	this.shape_47.setTransform(717.4,332.5,0.954,0.954);

	this.shape_48 = new cjs.Shape();
	this.shape_48.graphics.f("#9F1334").s().p("AgdBHIAAhbIA7hVIAADTg");
	this.shape_48.setTransform(898.1,401.5,0.954,0.954);

	this.shape_49 = new cjs.Shape();
	this.shape_49.graphics.f("#311189").s().p("AoajMIB7gVIA9hVIN9IEIh5AYIg+BRg");
	this.shape_49.setTransform(934.9,421.1,0.954,0.954);

	this.shape_50 = new cjs.Shape();
	this.shape_50.graphics.f("#BA1133").s().p("Ag8gXIB5gWIAABbg");
	this.shape_50.setTransform(889.3,403.9,0.954,0.954);

	this.shape_51 = new cjs.Shape();
	this.shape_51.graphics.f("#3E12B0").s().p("AgepVIA9hQIAAT6Ig9BRg");
	this.shape_51.setTransform(971.8,507.8,0.954,0.954);

	this.shape_52 = new cjs.Shape();
	this.shape_52.graphics.f("#861CDB").s().p("Ag8pwIB5gZIAAT6Ih5AZg");
	this.shape_52.setTransform(980.6,502.7,0.954,0.954);

	this.shape_53 = new cjs.Shape();
	this.shape_53.graphics.lf(["#E1A530","#DB9E3A","#B9746E","#9E5392","#8A39AE","#7B27C3","#721DCE","#701AD2"],[0,0.024,0.18,0.341,0.498,0.663,0.827,1],-35.1,-112.7,170.8,23.3).s().p("Am+F8IAAz7IN9IEIAAT7g");
	this.shape_53.setTransform(926.2,487,0.954,0.954);

	this.instance_6 = new lib.ClipGroup_1();
	this.instance_6.parent = this;
	this.instance_6.setTransform(760.2,417.7,0.954,0.954,0,0,0,645,450.4);

	this.instance_7 = new lib.ClipGroup();
	this.instance_7.parent = this;
	this.instance_7.setTransform(616.5,417.6,0.954,0.954,0,0,0,494.4,450.3);

	this.shape_54 = new cjs.Shape();
	this.shape_54.graphics.lf(["#E1A530","#311189","#3B1A84","#912BCC"],[0,0.729,0.886,1],93.3,162.7,-93.6,-163).s().p("AvtzsQAAhQAnhEQAnhFBGgnIaMvWQA8gjA9AiQA8AjABBGMAAFA4nQgBBQgpBFQgoBFhEAnIyJKfIq3Fog");
	this.shape_54.setTransform(726.3,339.3);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_54},{t:this.instance_7},{t:this.instance_6},{t:this.shape_53},{t:this.shape_52},{t:this.shape_51},{t:this.shape_50},{t:this.shape_49},{t:this.shape_48},{t:this.shape_47},{t:this.shape_46},{t:this.shape_45},{t:this.instance_5},{t:this.instance_4},{t:this.shape_44},{t:this.shape_43},{t:this.shape_42},{t:this.shape_41},{t:this.shape_40},{t:this.shape_39},{t:this.shape_38},{t:this.instance_3},{t:this.shape_37},{t:this.shape_36},{t:this.shape_35},{t:this.shape_34},{t:this.shape_33},{t:this.shape_32},{t:this.shape_31},{t:this.shape_30}]}).wait(131));

	// Leg shadow 1
	this.shape_55 = new cjs.Shape();
	this.shape_55.graphics.f("rgba(0,0,0,0.2)").s().p("A7zrfIAAjoMA3nAVPIqYJAg");
	this.shape_55.setTransform(1092.8,694.9);

	this.timeline.addTween(cjs.Tween.get(this.shape_55).wait(131));

	// Phone shado
	this.shape_56 = new cjs.Shape();
	this.shape_56.graphics.f("rgba(0,0,0,0.2)").s().p("A33NyQhxjFFwmMQFvmNJ5ltQJ4ltIPh3QIPh4ByDEQBrC7lHFxIi0glI74QqICSCPQjCBHi1ApQjIAtiMAAQjnAAhHh6g");
	this.shape_56.setTransform(712,523.2);

	this.timeline.addTween(cjs.Tween.get(this.shape_56).wait(131));

	// Leg shadow 2
	this.shape_57 = new cjs.Shape();
	this.shape_57.graphics.f("rgba(0,0,0,0.2)").s().p("A4GvzIFggIMAqtAVUIp2Kjg");
	this.shape_57.setTransform(999.9,727.6);

	this.timeline.addTween(cjs.Tween.get(this.shape_57).wait(131));

	// Mobile glow
	this.shape_58 = new cjs.Shape();
	this.shape_58.graphics.lf(["#C8903C","#371685"],[0,1],-261,-169.1,-47.8,199.6).s().p("Eg1RgRQIb5wsMBOqAQTMg2WAzmg");
	this.shape_58.setTransform(987.3,704.2);

	this.shape_59 = new cjs.Shape();
	this.shape_59.graphics.lf(["#C8903C","#371685"],[0,1],-259.4,-167.7,-46.2,201).s().p("Eg1BgRCIb5wsMBOKARLMg1iAySg");
	this.shape_59.setTransform(985.7,702.8);
	this.shape_59._off = true;

	this.shape_60 = new cjs.Shape();
	this.shape_60.graphics.lf(["#C8903C","#371685"],[0,1],-257.8,-166.3,-44.6,202.4).s().p("Eg0xgQ0Ib5wsMBNqASDMg0vAw+g");
	this.shape_60.setTransform(984.1,701.4);
	this.shape_60._off = true;

	this.shape_61 = new cjs.Shape();
	this.shape_61.graphics.lf(["#C8903C","#371685"],[0,1],-260.4,-169.7,-47.2,199).s().p("Eg1LgRWIb5wsMBOeAQjMg2OAzig");
	this.shape_61.setTransform(986.7,704.8);

	this.shape_62 = new cjs.Shape();
	this.shape_62.graphics.lf(["#C8903C","#371685"],[0,1],-263,-173.1,-49.8,195.6).s().p("Eg1lgR4Ib5wsMBPSAPDMg3uA2Gg");
	this.shape_62.setTransform(989.3,708.2);

	this.shape_63 = new cjs.Shape();
	this.shape_63.graphics.lf(["#C8903C","#371685"],[0,1],-262,-171.1,-48.8,197.6).s().p("Eg1bgRkIb5wsMBO+APrMg3CA02g");
	this.shape_63.setTransform(988.3,706.2);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_58}]}).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_61}]},1).to({state:[{t:this.shape_62}]},1).to({state:[{t:this.shape_63}]},1).to({state:[{t:this.shape_58}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_58}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_58}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_58}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_58}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_58}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_58}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_58}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_58}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_58}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_58}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_58}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_58}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_58}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_58}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_58}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_58}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_58}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_58}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_58}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_58}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_58}]},1).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.shape_58).to({_off:true},1).wait(5).to({_off:false},0).to({_off:true},1).wait(5).to({_off:false},0).to({_off:true},1).wait(5).to({_off:false},0).to({_off:true},1).wait(5).to({_off:false},0).to({_off:true},1).wait(5).to({_off:false},0).to({_off:true},1).wait(5).to({_off:false},0).to({_off:true},1).wait(5).to({_off:false},0).to({_off:true},1).wait(5).to({_off:false},0).to({_off:true},1).wait(5).to({_off:false},0).to({_off:true},1).wait(5).to({_off:false},0).to({_off:true},1).wait(5).to({_off:false},0).to({_off:true},1).wait(5).to({_off:false},0).to({_off:true},1).wait(5).to({_off:false},0).to({_off:true},1).wait(5).to({_off:false},0).to({_off:true},1).wait(5).to({_off:false},0).to({_off:true},1).wait(5).to({_off:false},0).to({_off:true},1).wait(5).to({_off:false},0).to({_off:true},1).wait(5).to({_off:false},0).to({_off:true},1).wait(5).to({_off:false},0).to({_off:true},1).wait(5).to({_off:false},0).to({_off:true},1).wait(5).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.shape_59).wait(1).to({_off:false},0).to({_off:true},1).wait(5).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false},0).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false},0).to({_off:true},1).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.shape_60).wait(2).to({_off:false},0).to({_off:true},1).wait(5).to({_off:false},0).wait(2).to({_off:true},1).wait(3).to({_off:false},0).wait(2).to({_off:true},1).wait(3).to({_off:false},0).wait(2).to({_off:true},1).wait(3).to({_off:false},0).wait(2).to({_off:true},1).wait(3).to({_off:false},0).wait(2).to({_off:true},1).wait(3).to({_off:false},0).wait(2).to({_off:true},1).wait(3).to({_off:false},0).wait(2).to({_off:true},1).wait(3).to({_off:false},0).wait(2).to({_off:true},1).wait(3).to({_off:false},0).wait(2).to({_off:true},1).wait(3).to({_off:false},0).wait(2).to({_off:true},1).wait(3).to({_off:false},0).wait(2).to({_off:true},1).wait(3).to({_off:false},0).wait(2).to({_off:true},1).wait(3).to({_off:false},0).wait(2).to({_off:true},1).wait(3).to({_off:false},0).wait(2).to({_off:true},1).wait(3).to({_off:false},0).wait(2).to({_off:true},1).wait(3).to({_off:false},0).wait(2).to({_off:true},1).wait(3).to({_off:false},0).wait(2).to({_off:true},1).wait(3).to({_off:false},0).wait(2).to({_off:true},1).wait(3).to({_off:false},0).wait(2).to({_off:true},1).wait(3).to({_off:false},0).wait(2).to({_off:true},1).wait(3).to({_off:false},0).to({_off:true},1).wait(2));

	// Diagonal 
	this.shape_64 = new cjs.Shape();
	this.shape_64.graphics.lf(["#311189","#5F21A2"],[0,1],-489,115.1,138.3,-305.6).s().p("EhMgApKMCZBhSTMAAABSTg");
	this.shape_64.setTransform(512,538.1);

	this.timeline.addTween(cjs.Tween.get(this.shape_64).wait(131));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(423.2,282.9,1452.6,1038.6);
// library properties:
lib.properties = {
	width: 1000,
	height: 800,
	fps: 24,
	color: "#FFFFFF",
	opacity: 1.00,
	manifest: [],
	preloads: []
};




})(lib = lib||{}, images = images||{}, createjs = createjs||{}, ss = ss||{}, AdobeAn = AdobeAn||{});
var lib, images, createjs, ss, AdobeAn;