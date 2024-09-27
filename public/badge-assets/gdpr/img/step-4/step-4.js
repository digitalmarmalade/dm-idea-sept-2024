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


(lib.Tween5 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AmOBCQgCgLBFg3QBCg4AWgJQAcgLAaACQAtAEBiAkQBbAiC7ANQBdAGBLAAIgxAgQhHgBhxgRQhwgSgegDQglgFhOgXQhZgdgTgEQgdgGhGAzQgvAggzAvQgDgEAAgFg");
	this.shape.setTransform(0,-3.4);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FFFFFF").s().p("AhHAOQAFgGASgCQAigCAfgHQAWgHAGgDQAQgHgFgHQALAIAEAJQAFAKgMAIQgNAJgyAGQggADgiACQgJgIADgGg");
	this.shape_1.setTransform(-23.3,3.7);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#582FC5").s().p("ABCBaQiTgSgVAEQgoAIgsACQgwACgdgIQgigJgGgNQgHgNAdgDQAfgBAjgIIAegLQAQgHgHgIQgygzg2AnQg0AkgZALQglAPgFgZQgBgLBEg3QBDg4AWgJQAbgLAaACQAuAEBiAkQBbAjC7ANQBdAGBLAAIi+B8IiQgUg");

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-39.9,-10.9,80,22);


(lib.Tween4 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AkkFgQADgvAPgZQA3hYAXADIAGADQAggkAjgsQAVgbBcioQBWigAVgUIB5hyIAVgTIA3BBQgYAOgmASQhIAjgMANQgZAZg5B4QhACHgkA1QgpA9gcAgQgeAig6A1QgOgDgSAXQgKAMgQAaQgPAZgLAWQgFALgHAGIgCABQgGAAADgng");
	this.shape.setTransform(32.4,-15.7);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#3CB1D6").s().p("AgnCyQgkgqgbg5QhHiTA2hKQAMgRAcggQAjgogCAOQgJA4AgBfQAvCJB1BCQAMAHgkAXQgTAMgZANQgYASggALQgVgBgjgqg");
	this.shape_1.setTransform(17.6,26.4);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#3475D5").s().p("AjdFYQg7hjABhRQgBgnAWghIA2g+QA1g7AbgiQASgXBpi8QBdilANAAQAZABAUAOQAwAhAkBbQAkBaAIBsQAJB0gcBgQgfBshIA7QgYAThhA2QhlA5gHAFQgYASgeAKQgmgDg4hdg");
	this.shape_2.setTransform(32.6,2.5);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#FFFFFF").s().p("AhUgJIACgEQAIgNAPADQCFAjAIgKIABgCQAEAHgGAJQgGAIgFAAIgFABQgpAAhsgig");
	this.shape_3.setTransform(-62.8,-20.6);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#FFFFFF").s().p("AkuD4QhwibgFgfQgCgiAHglQgCARAFASQAhBiBhBrQA0A5A9AxQAFADADgDQBZheBWhgQCaioAegwQBgiWBbivIACgCQAAgBABAAQAAAAABAAQABgBAAAAQABAAAAABQABAAABAAQAAAAABAAQAAABABAAQAAAAAAABIAXAeQACADgCAEQiID5gxBBQg7BPiiC2QiaCugOAGIgFACQgiAAhsiXg");
	this.shape_4.setTransform(1.6,2.4);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#FFFFFF").s().p("AAdBWQgKgHgKgYQgNgegLgOQgqg0g7giQgMgGgMADQABgJAKgCQAJgCAHADQA6AXAqAsQAaAZANAhQAKAYAOAEQAHACAJgGQAKgGAXgWQAoglACAgQgOAEgZAZQgbAbgDABQgJAGgOAAQgOAAgGgFg");
	this.shape_5.setTransform(-46.4,-19.8);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#582FC5").s().p("AjSH7QhDgphnjVIiCknQgFgLgVgWQgWgWgEgIQgGgLgJgnQgJglgIgLQgJgPgqggQgqgggKgOQgMgVALgVIALgUQAJgOAOAEQCFAlAKgLQAFgGgcgXQgggagDgJQgFgQAMgDQAJgDAJADQA4AVAsAuQAbAaAOAhQAKAYAOAEQAGACAJgGQALgGAWgWQAfgdAIANQAHAKgGAQQgDAMgOAVQgSAdgJASQgSAhgIAhQgIAlAHAVQAlBpBtBzQA3A6AvAkQBOhSBUhdQCpi4AggyQBpimBWipIESF0QgcA5g0BHQhoCPh5BMQglAYhwBQQhuBPg+AoQiaBhhTAAQgeAAgVgNg");
	this.shape_6.setTransform(-2.3,13.9);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-72.7,-54.8,140.9,120.8);


(lib.Tween3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#4A5059").s().p("AixEjQgjABgcgVQgcgUgLghQgMggAKghQAKgiAbgVIEujvIkYAAQgfAAgWgVQgWgXAAgeQAAgfAWgWQAWgXAfABIGQAAQAjgBAcAVQAcAUALAgQAMAhgKAiQgKAggbAWIkuDvIEYAAQAfgBAWAWQAWAXAAAeQAAAfgWAXQgWAWgfgBg");
	this.shape.setTransform(37.9,-16.3);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#4A5059").s().p("AixEkQgjAAgcgVQgcgUgMghQgLggAKgiQAKggAbgWIEujvIkYAAQgfABgWgWQgWgXAAgfQAAgeAWgXQAWgVAfAAIGQAAQAiAAAdATQAcAVALAhQAMAggKAhQgKAigbAVIkuDvIEYAAQAfAAAWAVQAWAXAAAeQAAAggWAVQgWAXgfAAg");
	this.shape_1.setTransform(-37.8,16.3);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-67.6,-45.4,135.4,90.9);


(lib.Path_3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#BB7900").s().p("AgsMHQmBgzjElUQiXkGAXk7QAXkyC0kcQARJxEBFVQFCGuLHAKQlvChkrAAQhGAAhBgJg");
	this.shape.setTransform(75.7,78.4);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Path_3, new cjs.Rectangle(0,0,151.4,156.8), null);


(lib.Path_12 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#9E5E00").s().p("AlkFxQggg9gJhfQgHhOAJhOQCDARB6hdQBWhECujWIAJgKQAogyBAgGQBAgHAxApQAyAoAGBAQAGA/goAyIgJALQh2CQg+BAQhmBrhhA9QidBiirAAg");
	this.shape.setTransform(40.1,36.9);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Path_12, new cjs.Rectangle(0,0,80.2,73.8), null);


(lib.Path_9 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#BB7900").s().p("ABrKXQjMhRidiSQieiThXi+QhZjEAAjYQAAjiBjjOQD4BWEwAnQgSBNgwDMQgmDCAWCdQA8HCIkEbIgmABQjoAAjUhTg");
	this.shape.setTransform(58.9,74.6);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Path_9, new cjs.Rectangle(0,0,117.9,149.2), null);


(lib.Path_3_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#BB7900").s().p("Ak4OdQmelHAAoZQAAmqD+lwQD3lmGnjYQjFEPhfFaQhlFtAmFkQAqGIDME7QDkFeGZDcQqWhTl4ksg");
	this.shape_1.setTransform(72.7,130.8);

	this.timeline.addTween(cjs.Tween.get(this.shape_1).wait(1));

}).prototype = getMCSymbolPrototype(lib.Path_3_1, new cjs.Rectangle(0,0,145.3,261.6), null);


(lib.Path_2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#9E5E00").s().p("AlBEIQgWhxAAhyQAAiJAfiFQC6AgCDg0QBfgmBeApQBeApAmBfQAlBfgoBdQgpBehfAmQiJA1icALQgkACglAAQhFAAhJgIg");
	this.shape.setTransform(34.4,27.2);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Path_2, new cjs.Rectangle(0,0,68.8,54.5), null);


(lib.Path_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#9E5E00").s().p("AlJB9QAZhKAqhNQAYguAvhJQAphAAMgaQAuhbBgghQBhggBcAuQBbAuAhBhQAgBhguBbQgXAug2BWQg6BbgSApQgcBAAEA7Qj7hQjMiog");
	this.shape.setTransform(33,37.2);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Path_1, new cjs.Rectangle(0,0,66,74.6), null);


(lib.Path_0 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#9E5E00").s().p("AgpEbQAAjjhjjMQCDhHB2hrQgnBtAdCSIAbCGQAOBYABBSQhZA0heAqg");
	this.shape.setTransform(14.1,32.7);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Path_0, new cjs.Rectangle(0,0,28.3,65.3), null);


(lib.Path = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#9E5E00").s().p("AANDlQhKhWhRAQQhkAUhVg5QhVg4gUhkQgUhkA4hVQA5hVBlgVQCtgiCiA8QCkA9B9CQQAaAeAbAlQiNDXjbCWQgbhAgngtg");
	this.shape.setTransform(43.8,33.8);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Path, new cjs.Rectangle(0,0,87.7,67.6), null);


(lib.Tween2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Path_0();
	this.instance.parent = this;
	this.instance.setTransform(146.3,51.1,1,1,0,0,0,14.1,32.6);
	this.instance.alpha = 0.199;

	this.shape = new cjs.Shape();
	this.shape.graphics.f("#E7A649").s().p("AmoKCQAAjihjjOQDFhpCZirQCzjJAZjKQANhlBRg/QBRg+BmAMQBlANA/BRQA/BRgNBmQgwFyk7E/Qj+EElKCPg");
	this.shape.setTransform(184.6,15.2);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#4A5059").s().p("ACMCWQg0gmhvg3Qh0g5hBgQQgegIgPgbQgQgbAIgeQAIgeAbgPQAbgQAeAIQBPAVCBA/QB8A9A+AtQAZATAFAeQAFAfgTAZQgXAfglAAQgYAAgVgPg");
	this.shape_1.setTransform(143.2,-42.9);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#4A5059").s().p("AC7BYQg+gQh9gIQiAgIhDAIQgeAEgZgTQgZgSgEgfQgEgeATgZQATgYAfgEQBRgLCPAJQCKAJBLATQAeAIAQAaQAQAagHAeQgHAZgUAQQgUAQgaAAQgKAAgIgCg");
	this.shape_2.setTransform(152.3,-77);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#4A5059").s().p("Aj0CGQgTgZAFgfQAFgeAYgTQA/gtB8g9QCBg/BPgVQAegIAbAQQAaAPAIAeQAJAegQAbQgQAbgeAIQhAAQh1A5QhvA3gzAmQgVAPgYAAQgmAAgWgfg");
	this.shape_3.setTransform(-87.1,-42.9);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#4A5059").s().p("Aj6BKQgVgQgGgZQgIgeAQgaQAQgaAegIQBLgTCLgJQCOgJBSALQAfADATAZQATAZgEAeQgEAfgZASQgZATgfgEQhCgIiBAIQh8AIg+AQQgIACgKAAQgaAAgUgQg");
	this.shape_4.setTransform(-96.2,-77);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#F790AB").s().p("AgJD3QhPgEg2g8Qg2g7AAhQIAAifQAAgWAKgUQAJgUARgNQBGg4BaAAQBaAABGA4QASANAJAUQAKAUAAAWIAAClQAABUg9A6Qg5A3hOAAIgKAAg");
	this.shape_5.setTransform(28.1,-75);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#4A5059").s().p("ABwCIQgVgWAAgfQAAgmgbgaQgagagmAAQgkAAgbAaQgbAaABAmQAAAfgXAWQgVAWgfAAQggAAgVgWQgXgWAAgfQAAhjBHhGQBHhHBiAAQBkAABGBHQBHBGAABjQAAAfgXAWQgVAWggAAQgeAAgXgWg");
	this.shape_6.setTransform(102.8,-111);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#4A5059").s().p("ABxCIQgWgWAAgfQAAgmgbgaQgagagmAAQglAAgaAaQgbAaAAAmQAAAfgWAWQgWAWgfAAQgfAAgWgWQgWgWAAgfQAAhjBHhGQBGhHBjAAQBjAABHBHQBHBGAABjQAAAfgWAWQgWAWgfAAQgfAAgWgWg");
	this.shape_7.setTransform(-46.7,-111);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#F790AB").s().p("Aj3DGQhnhSAAh0QAAhzBnhSQBmhSCRAAQCSAABnBSQBmBSAABzQAAB0hmBSQhnBSiSAAQiRAAhmhSg");
	this.shape_8.setTransform(123.3,-72.3);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#F790AB").s().p("Aj4DGQhmhSAAh0QAAhzBmhSQBohSCQAAQCRAABoBSQBmBSAABzQAAB0hmBSQhoBSiRAAQiQAAhohSg");
	this.shape_9.setTransform(-67.2,-72.3);

	this.instance_1 = new lib.Path_3_1();
	this.instance_1.parent = this;
	this.instance_1.setTransform(-93.3,-82.1,1,1,0,0,0,72.7,130.8);
	this.instance_1.alpha = 0.148;

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#FBDC98").s().p("A1bRwQo5lRAAp6QAAlFCZkrQCTkhENjeQEMjeFch6QFph+GKAAQGLAAFoB+QFdB5ENDfQEMDeCTEhQCZErAAFFQAAJ6o4FRQoEExtZAAQtYAAoDkxg");
	this.shape_10.setTransform(28.1,-92.5);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#F790AB").s().p("ApxJ6QBkqmGblmQEij+GchFQBJElhGEgQhSFRkNEFQjxDrjwAgQglAFglAAQifAAiXhcg");
	this.shape_11.setTransform(169.5,-160.8);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#E7A649").s().p("AoqKmQjDikgjjXQgrkMDYk+QDdlGFTiJQEdh0E4AlQBEAIA1AsQA1AtATBBQBbEthBEuQhMFlkaESQkVEMkOAEIgIAAQjWAAjAihg");
	this.shape_12.setTransform(152.9,-172.1);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#F790AB").s().p("ADyLRQjwggjxjrQkOkFhSlRQhGkgBKklQGcBFEiD+QGbFmBkKmQiWBcigAAQglAAglgFg");
	this.shape_13.setTransform(-113.4,-160.8);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#E7A649").s().p("ACONHQkPgEkUkMQkbkShMllQhBkuBbktQAUhBA0gtQA1gsBEgIQE4glEeB0QFTCJDcFGQDYE+grEMQgjDXjDCkQjAChjWAAIgHAAg");
	this.shape_14.setTransform(-96.8,-172.1);

	this.instance_2 = new lib.Path_9();
	this.instance_2.parent = this;
	this.instance_2.setTransform(-27,110.7,1,1,0,0,0,58.9,74.5);
	this.instance_2.alpha = 0.148;

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#F8D68C").s().p("Am7PQQjNhQidiTQieiThWi+QhajFAAjXQAAjXBajFQBWi+CeiSQCdiTDNhQQDUhTDnAAQDoAADUBTQDNBQCdCTQCeCSBWC+QBaDFAADXQAADXhaDFQhWC+ieCTQidCTjNBQQjUBTjoAAQjnAAjUhTg");
	this.shape_15.setTransform(28.1,79.4);

	this.instance_3 = new lib.Path();
	this.instance_3.parent = this;
	this.instance_3.setTransform(98.8,147.6,1,1,0,0,0,43.9,33.8);
	this.instance_3.alpha = 0.199;

	this.instance_4 = new lib.Path_1();
	this.instance_4.parent = this;
	this.instance_4.setTransform(-27.3,161.5,1,1,0,0,0,33,37.2);
	this.instance_4.alpha = 0.199;

	this.instance_5 = new lib.Path_2();
	this.instance_5.parent = this;
	this.instance_5.setTransform(-71.5,75.8,1,1,0,0,0,34.4,27.2);
	this.instance_5.alpha = 0.199;

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#E7A649").s().p("AihFzQjKhHinh1Qinh1hdiGQg6hUAShlQAShlBVg6QBUg6BkASQBlATA6BUQAwBGBoBEQBnBFB+AtQEoBrDLhPQBfglBeAoQBeApAmBeQAlBggoBdQgpBehfAmQiJA2idAKQgmADgoAAQjiAAjxhWg");
	this.shape_16.setTransform(-120.7,57.3);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#E7A649").s().p("AhkJ2Qg4gegjg2QjFkyAzkkQAShrA2hvQAeg/A/hjQAphAAMgZQAuhcBgggQBhggBcAtQBbAuAhBhQAgBhguBcQgXAug2BWQhaCOgJBBQgNBjBaCMQA4BWgWBkQgVBkhWA4Qg9AnhJAAQg9AAg3gdg");
	this.shape_17.setTransform(-29.3,190.1);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#E7A649").s().p("ACiJ5QhggigshdQgrhcAhhhQAghbgZhxQgXhxhEhPQhLhWhRARQhkAUhVg5QhVg5gUhkQgUhlA4hVQA5hVBlgUQCtgjCiA9QCkA8B9CRQCdC0AwDzQAxD0hMDZQgbBLhBAuQhAAshNAAQgrAAgogOg");
	this.shape_18.setTransform(107.3,178.4);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#F8D79A").s().p("AhYC8Qg+gPgig2Qgig2AOg/QAPg9A2giQBohBCHghQAwA0AbBFQAeBNAABdQhpAVhMAvQgmAYgqAAQgSAAgSgEg");
	this.shape_19.setTransform(-216,141);

	this.instance_6 = new lib.Path_12();
	this.instance_6.parent = this;
	this.instance_6.setTransform(-50.4,131.7,1,1,0,0,0,40.1,36.9);
	this.instance_6.alpha = 0.199;

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#E7A649").s().p("AB1E8QlBh6kNgPQkMgPiaBhQg3Ahg+gOQg+gOgig2Qgig3AOg+QAPg+A2ghQDaiJFRAIQFRAHGKCWQCzBECMhXQBAgmBOhTQA4g8BpiBIAJgKQApgyBAgGQA/gHAyApQAxAoAHBAQAGA/goAyIgJALQh3CQg9BAQhmBrhiA9QieBiirAAQh+AAiJg1g");
	this.shape_20.setTransform(-123.6,131.7);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_20},{t:this.instance_6},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.instance_5},{t:this.instance_4},{t:this.instance_3},{t:this.shape_15},{t:this.instance_2},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.instance_1},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape},{t:this.instance}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-236.9,-256,473.9,512.1);


(lib.SleepingCat = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2
	this.instance = new lib.Tween3("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(341.4,103.5,0.122,0.122);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({scaleX:1,scaleY:1,x:400.9,y:63.5},24).to({scaleX:0.41,scaleY:0.41,x:440.9,y:36.6,alpha:0},5).to({_off:true},1).wait(20));

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#86C5E8").s().p("Av4MyQg6gQgTg5QgTg6AlgvQFSm6F7lrQJFowGwhrQBogaBiAXQByAaBTA7QAvAiAAA6QgBA6gvAiQkUC/n2G5QoAHEjGDnQgoAvg5APQhzAfh5AEIgbAAQh1AAhogcg");
	this.shape.setTransform(267.1,214.9);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#7B95E7").s().p("Am+MGQlGgWkvgqQkRgmiNgmQgHhhA2icQBrk4EvkmQFxllEnh9QDdhdElAGQImAmFOCbQElCJBsDXQBfC8g4DbQgyDGiXCjQhLBQhhA2QhgA1htAWQk+BDnOAAQkAAAkugVg");
	this.shape_1.setTransform(363,230.6);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#F790AB").s().p("Ag1A1QgWgVAAggQAAgeAWgXQAXgVAeAAQAfAAAXAVQAWAXAAAeQAAAggWAVQgXAXgfAAQgeAAgXgXg");
	this.shape_2.setTransform(180.4,173.6);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#4A5059").s().p("Ai/BIQgVgPgGgZQgIgeAPgaQAQgbAegIQA5gQBrgHQBkgHA5AGQAfAEATAYQAUAZgEAeQgEAegYATQgYAUgfgEQgrgEhYAGQhaAGgsALQgKADgKAAQgZAAgUgPg");
	this.shape_3.setTransform(265.7,156.1);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#4A5059").s().p("Ai+BvQgTgYAEgfQAEgfAYgTQAwgjBfgvQBagtA3gQQAegIAbAPQAcAPAIAdQAJAegPAbQgQAcgdAHQgqAMhPAnQhRAogkAcQgUAQgaAAQglAAgWgeg");
	this.shape_4.setTransform(259.2,131.9);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#4A5059").s().p("AhvC/QgdgNgLgcQgMgdANgdQAXg0A4hUQA8hYApgqQAWgWAfAAQAgAAAVAWQAWAVAAAgQAAAfgWAWQghAggyBLQgxBJgRAoQgJAVgTAMQgSAMgWAAQgRAAgNgGg");
	this.shape_5.setTransform(122.7,238.8);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#4A5059").s().p("AiwCGQgWgXABgfQAAgfAXgWQApgnBUg4QBXg6A4gYQAdgMAdAMQAcAMAMAdQAMAcgMAdQgMAdgcAMQgrARhLAyQhJAwgfAfQgWAVgeAAQgfABgXgXg");
	this.shape_6.setTransform(104.9,221);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#4A5059").s().p("AhUB5QgfgCgVgXQgUgYACgfQACgfAXgTQAYgUAfACQAYABAbgPQAagPAKgXQAOgcAegKQAdgKAcAOQAcAOAKAeQAKAdgOAcQgfA+hCAmQg5Aig/AAg");
	this.shape_7.setTransform(217.2,130.1);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#4A5059").s().p("AhUB5QgfgCgVgXQgUgXACgfQACgfAXgUQAXgUAfACQAbABAZgPQAYgOAMgYQAOgbAdgKQAegKAcANQAbAOAKAeQAKAdgNAcQgfA/hCAlQg5AihAAAg");
	this.shape_8.setTransform(124.3,183.7);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#F790AB").s().p("AhSDUQhegOgphIQgqhIAjhXQAihYBbg0QBag0BcAOQBeAOApBIQAqBIgjBXQgiBYhbA0QhIAphIAAQgTAAgTgDg");
	this.shape_9.setTransform(242.8,145.1);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#F790AB").s().p("AhTDUQhdgOgphIQgqhIAjhXQAihYBag0QBbg0BcAOQBeAOApBIQApBIgiBXQgiBYhbA0QhHAphIAAQgUAAgUgDg");
	this.shape_10.setTransform(124.5,213.4);

	this.instance_1 = new lib.Path_3();
	this.instance_1.parent = this;
	this.instance_1.setTransform(124.4,208.1,1,1,0,0,0,75.7,78.4);
	this.instance_1.alpha = 0.148;

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#FBDC98").s().p("AnuSEQnagFjjmKQh1jLgNjwQgMjoBYjqQBXjqCsjJQCzjQD1iNQD2iOENgzQEDgxD3AqQD2AqDDB+QDKCDB1DLQDjGKjoGcQjTF2oUEzQoMEvmpAAIgMAAg");
	this.shape_11.setTransform(181.4,170.8);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#F790AB").s().p("AjJKAQi1nKB+lxQBakFDmi/QCXCbA8DMQBGDwhKEBQhCDpiJBqQhsBUiSAAIgPAAg");
	this.shape_12.setTransform(243.9,71.4);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#E7A649").s().p("AhoKcQi1gghih5Qh7iWAUkUQAUkZChjPQCJiuDNhZQAugUAwAJQAxAIAkAiQCkCbBEDSQBRD6hNEOQhMEKinBkQhgA5h3AAQgvAAgzgJg");
	this.shape_13.setTransform(225.8,67.7);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#F790AB").s().p("AASFFQkDhCiti1QiSiYg8jRQEahoEPA1QF+BLEyGBQhKCJiFA3QhVAjhpAAQhfAAhvgcg");
	this.shape_14.setTransform(63.6,179.3);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#E7A649").s().p("AgHHiQkShFivjDQiVilg0jaQgLgwARguQARgvAngdQC1iGDbgfQEDgkD+B7QD5B4BFC2QA4CRg/CsQg/CsiIBMQhkA4iFAAQheAAhugcg");
	this.shape_15.setTransform(66.2,163.6);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.instance_1},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(50));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,512.1,310.2);


(lib.RightHand = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Tween5("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(40,11);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({y:14},5).to({rotation:8,y:11},5).to({rotation:-7,y:13.5},4).to({rotation:0,x:50,y:11},3).to({x:35,y:16},3).to({x:40,y:11},3).to({y:16},3).to({rotation:-6.2,y:11},2).to({rotation:0},2).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,80,22);


(lib.DancingCat = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2
	this.instance = new lib.Tween2("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(367.7,137.2,1,1,0,0,180);
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(6).to({_off:false},0).to({y:268},5).to({startPosition:0},2).to({y:137.2},5).to({_off:true},1).wait(6));

	// Layer 3
	this.instance_1 = new lib.Tween2("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(236.9,125.2);
	this.instance_1._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(19).to({_off:false},0).to({y:256},5).wait(1));

	// Layer 1
	this.instance_2 = new lib.Tween2("synched",0);
	this.instance_2.parent = this;
	this.instance_2.setTransform(236.9,256);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).to({y:125.2},5).to({_off:true},1).wait(19));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,473.9,512.1);


(lib.Arm = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Tween4("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(124.7,41,1,1,0,0,0,52,-25);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({rotation:-2.2},4).to({rotation:0},4).to({rotation:-3.7,x:124.8},5).to({rotation:0,x:124.7},5).to({regX:52.1,regY:-24.9,rotation:-5.2,x:124.9,y:41.1},3).to({regX:52,regY:-25,rotation:0,x:124.7,y:41},5).to({regX:52.1,regY:-24.9,rotation:2,x:124.8,y:41.1},2).to({regX:52,regY:-25,rotation:0,x:124.7,y:41},3).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,11.2,140.9,120.8);


(lib.Tween1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa 1
	this.instance = new lib.SleepingCat();
	this.instance.parent = this;
	this.instance.setTransform(-19.3,55.4,0.099,0.084,0,0,-32.1,256.1,156.2);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

	// Layer 2
	this.instance_1 = new lib.DancingCat();
	this.instance_1.parent = this;
	this.instance_1.setTransform(-20,-34.7,0.083,0.071,0,0,-30.6,236.3,255.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(1));

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#C9C5D5").s().p("AgTATQgDgCABgEQgBgKAJgFIAbgQQAEgCACACQACABABAFQAAAKgJAEIgbARIgEABIgCgBg");
	this.shape.setTransform(14.2,-22.3);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#C9C5D5").s().p("AgkAdQgDgBAAgFQAAgKAIgFIA/gkQADgCACACQADABAAAFQAAAKgIAFIg/AkIgDABIgCgBg");
	this.shape_1.setTransform(12.4,-13.1);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#C9C5D5").s().p("Ag6AqQgCgCAAgFQABgKAIgFIBog8QADgCACACQADACAAAEQAAAKgIAGIhoA7IgEABIgDAAg");
	this.shape_2.setTransform(10.3,-16.1);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#C9C5D5").s().p("AhZByQgHgGAAgJIAAhXQAAgQAJgPQAIgPAPgIICAhLQAFgCAFAAQAJgBAHAHQAGAGABAJIAABWQAAARgJAOQgIAPgPAIIiABMQgFADgGAAQgJAAgGgHg");
	this.shape_3.setTransform(-45.8,15.9);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#C9C5D5").s().p("AgbAYQgDgCAAgEQAAgKAIgFIAtgaQADgCACACQADACAAAEQAAAKgIAFIgtAaIgDABIgCgBg");
	this.shape_4.setTransform(46.9,-83.3);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#C9C5D5").s().p("Ag5AqQgDgCAAgFQAAgKAIgFIBpg8QAEgCACACQACACAAAEQAAAKgIAGIhpA7IgEABIgBAAg");
	this.shape_5.setTransform(49.6,-70.1);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#C9C5D5").s().p("Ag5ApQgDgBAAgFQAAgKAIgFIBpg8QAEgCACACQACABAAAFQAAAKgIAFIhpA8IgDABIgCgBg");
	this.shape_6.setTransform(49.6,-81);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#C9C5D5").s().p("Ag5ApQgDgBAAgFQAAgJAIgHIBpg7QAEgCACACQACABAAAFQAAAKgIAFIhpA8IgDABIgCgBg");
	this.shape_7.setTransform(49.6,-65.8);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#C9C5D5").s().p("Ag5ApQgDgBAAgFQAAgKAIgFIBpg8QAEgCACACQACABAAAFQAAAKgIAFIhpA8IgDABIgCgBg");
	this.shape_8.setTransform(49.6,-89.2);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#C9C5D5").s().p("Ag6ApQgCgBAAgFQAAgKAIgFIBpg8QAEgCABACQADACAAAEQAAAKgIAFIhpA8IgDABIgDgBg");
	this.shape_9.setTransform(48.4,-100.1);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#FFFFFF").s().p("AgfAaQgCgCAAgEQAAgKAIgGIAzgdQAEgCACACQACACAAAEQAAAKgIAGIgzAdIgDABIgDgBg");
	this.shape_10.setTransform(-49.3,-60.6);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#C9C5D5").s().p("AiiBzQgGgFAAgMQAAgbAXgQIEkioQAJgFAGAEQAHAFAAANQgBAbgVAQIkkCnQgFADgFAAQgDAAgEgCg");
	this.shape_11.setTransform(38.8,-30.1);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#C9C5D5").s().p("AioB3QgHgFAAgNQAAgbAXgQIExivQAKgFAGAEQAHAFAAANQgBAbgWAQIkxCvQgFADgEAAQgEAAgDgCg");
	this.shape_12.setTransform(36.9,-110.8);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#C9C5D5").s().p("AldDfQgHgFAAgMQABgbAWgQIKbmBQAKgFAHAFQAGAFAAAMQAAAbgWAQIqcGBQgFADgFAAQgDAAgDgDg");
	this.shape_13.setTransform(-19.6,-78.2);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#C9C5D5").s().p("AiiBzQgGgFAAgNQAAgbAXgQIEkinQAJgGAGAFQAHAFAAAMQgBAcgVAPIkkCoQgFADgFAAQgDAAgEgCg");
	this.shape_14.setTransform(38.8,-39.1);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#C9C5D5").s().p("AhZByQgHgGAAgJIAAhYQAAgQAJgOQAIgPAPgJICAhJQAGgDAFAAQAJgBAHAHQAGAGAAAJIAABXQAAAQgJAOQgIAQgPAIIiABKQgFADgGAAQgJABgGgHg");
	this.shape_15.setTransform(29.9,-52.4);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#C9C5D5").s().p("AhZByQgHgGAAgJIAAhXQAAgQAJgPQAIgPAPgIICAhLQAFgCAGAAQAJgBAGAHQAHAGAAAJIAABWQAAARgJAOQgIAPgPAIIiABMQgFADgGAAQgJAAgGgHg");
	this.shape_16.setTransform(29.9,-72.1);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#C9C5D5").s().p("AhZByQgHgHAAgIIAAhXQAAgQAJgOQAIgQAPgIICAhKQAFgEAGAAQAJAAAHAHQAGAGAAAJIAABXQAAAQgJAPQgIAOgPAJIiABLQgFACgGAAQgJAAgGgGg");
	this.shape_17.setTransform(29.9,-91.8);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#C9C5D5").s().p("AlfHjQgJgJAAgNIAAn1QAAg1A1gfIJzlqQASgKAMALQALAKAAAUIAAH0QAAAZgNAWQgMAVgVAMIpzFrQgIAEgIAAQgNAAgKgJg");
	this.shape_18.setTransform(-19.6,-41.4);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#C9C5D5").s().p("AgTATQgDgCABgEQgBgKAJgFIAbgQQAEgCACACQACABABAFQAAAKgJAEIgbARIgEABIgCgBg");
	this.shape_19.setTransform(14.2,72.7);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#C9C5D5").s().p("AgkAdQgDgBAAgFQAAgKAIgFIA/gkQADgCACACQADABAAAFQAAAKgIAFIg/AkIgDABIgCgBg");
	this.shape_20.setTransform(12.4,81.9);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#C9C5D5").s().p("Ag6AqQgCgCAAgFQABgKAIgFIBog8QADgCACACQADACAAAEQAAAKgIAGIhoA7IgEABIgDAAg");
	this.shape_21.setTransform(10.3,78.9);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#C9C5D5").s().p("AhZByQgHgGAAgJIAAhXQAAgQAJgPQAIgPAPgIICAhLQAFgCAFAAQAJgBAHAHQAGAGABAJIAABWQAAARgJAOQgIAPgPAIIiABMQgFADgGAAQgJAAgGgHg");
	this.shape_22.setTransform(-45.8,110.9);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#C9C5D5").s().p("AgbAYQgDgCAAgEQAAgKAIgFIAtgaQADgCACACQADACAAAEQAAAKgIAFIgtAaIgDABIgCgBg");
	this.shape_23.setTransform(46.9,11.7);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("#C9C5D5").s().p("Ag5AqQgDgCAAgFQAAgKAIgFIBpg8QAEgCACACQACACAAAEQAAAKgIAGIhpA7IgEABIgBAAg");
	this.shape_24.setTransform(49.6,24.9);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#C9C5D5").s().p("Ag5ApQgDgBAAgFQAAgKAIgFIBpg8QAEgCACACQACABAAAFQAAAKgIAFIhpA8IgDABIgCgBg");
	this.shape_25.setTransform(49.6,14);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f("#C9C5D5").s().p("Ag5ApQgDgBAAgFQAAgJAIgHIBpg7QAEgCACACQACABAAAFQAAAKgIAFIhpA8IgDABIgCgBg");
	this.shape_26.setTransform(49.6,29.2);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f("#C9C5D5").s().p("Ag5ApQgDgBAAgFQAAgKAIgFIBpg8QAEgCACACQACABAAAFQAAAKgIAFIhpA8IgDABIgCgBg");
	this.shape_27.setTransform(49.6,5.8);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f("#C9C5D5").s().p("Ag6ApQgCgBAAgFQAAgKAIgFIBpg8QAEgCABACQADACAAAEQAAAKgIAFIhpA8IgDABIgDgBg");
	this.shape_28.setTransform(48.4,-5.1);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f("#FFFFFF").s().p("AgfAaQgCgCAAgEQAAgKAIgGIAzgdQAEgCACACQACACAAAEQAAAKgIAGIgzAdIgDABIgDgBg");
	this.shape_29.setTransform(-49.3,34.4);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f("#C9C5D5").s().p("AiiBzQgGgFAAgMQAAgbAXgQIEkioQAJgFAGAEQAHAFAAANQgBAbgVAQIkkCnQgFADgFAAQgDAAgEgCg");
	this.shape_30.setTransform(38.8,64.9);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f("#C9C5D5").s().p("AioB3QgHgFAAgNQAAgbAXgQIExivQAKgFAGAEQAHAFAAANQgBAbgWAQIkxCvQgFADgEAAQgEAAgDgCg");
	this.shape_31.setTransform(36.9,-15.8);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f("#C9C5D5").s().p("AldDfQgHgFAAgMQABgbAWgQIKbmBQAKgFAHAFQAGAFAAAMQAAAbgWAQIqcGBQgFADgFAAQgDAAgDgDg");
	this.shape_32.setTransform(-19.6,16.8);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f("#C9C5D5").s().p("AiiBzQgGgFAAgNQAAgbAXgQIEkinQAJgGAGAFQAHAFAAAMQgBAcgVAPIkkCoQgFADgFAAQgDAAgEgCg");
	this.shape_33.setTransform(38.8,55.9);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f("#C9C5D5").s().p("AhZByQgHgGAAgJIAAhYQAAgQAJgOQAIgPAPgJICAhJQAGgDAFAAQAJgBAHAHQAGAGAAAJIAABXQAAAQgJAOQgIAQgPAIIiABKQgFADgGAAQgJABgGgHg");
	this.shape_34.setTransform(29.9,42.6);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f("#C9C5D5").s().p("AhZByQgHgGAAgJIAAhXQAAgQAJgPQAIgPAPgIICAhLQAFgCAGAAQAJgBAGAHQAHAGAAAJIAABWQAAARgJAOQgIAPgPAIIiABMQgFADgGAAQgJAAgGgHg");
	this.shape_35.setTransform(29.9,22.9);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f("#C9C5D5").s().p("AhZByQgHgHAAgIIAAhXQAAgQAJgOQAIgQAPgIICAhKQAFgEAGAAQAJAAAHAHQAGAGAAAJIAABXQAAAQgJAPQgIAOgPAJIiABLQgFACgGAAQgJAAgGgGg");
	this.shape_36.setTransform(29.9,3.2);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f("#C9C5D5").s().p("AlfHjQgJgJAAgNIAAn1QAAg1A1gfIJzlqQASgKAMALQALAKAAAUIAAH0QAAAZgNAWQgMAVgVAMIpzFrQgIAEgIAAQgNAAgKgJg");
	this.shape_37.setTransform(-19.6,53.6);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_37},{t:this.shape_36},{t:this.shape_35},{t:this.shape_34},{t:this.shape_33},{t:this.shape_32},{t:this.shape_31},{t:this.shape_30},{t:this.shape_29},{t:this.shape_28},{t:this.shape_27},{t:this.shape_26},{t:this.shape_25},{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-55.7,-122.9,111.4,245.9);


(lib.Screenscroll = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("ArVh5IWrtGIAAQ5I2rNGg");
	mask.setTransform(55.6,168.4);

	// Layer 1
	this.instance = new lib.Tween1("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(55.7,219.7);

	var maskedShapeInstanceList = [this.instance];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.instance).to({startPosition:0},59).to({y:124.9},10).to({startPosition:0},70).to({y:219.7},10).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,96.8,111.4,167.6);


// stage content:
(lib.step4 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 4
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AgBCjQhShMAeiNQAKgvAVgwQAQglAJgKIAIgKQgSBTgGBGQgJB1AhAiQA1A0gCAiQgBAQgMAHg");
	this.shape.setTransform(292.4,173.1);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#3D12AE").s().p("AglNMQgggnhSgYQhigegwhpQgwhpA1hKQAuhBgfgsQgNgSgnghIhThKQhThOAciOQAJguAUgwQAQgkAKgLQAYgbAQgmQAZg7gUgpQggg+goAiQgUAUgJAHQgPAMgKgKIgsgvQghgjgagXQgdgagUgwQgQgqgBgkQgEiHBshBQA3ghA3gGQAAgFADgIQAIgQASgNQA6grCTgDQCigEB5BjQBmBUAhBzQAXBSAFBDIALC7QAGBIB0BSIBZA9QAuAiAPAbQBNCKAaBDQA+CdgXBzQgNBCg+A9QhFBDiHBFQgwAZiPAVQiKAUhGApQAAgOgQgTg");
	this.shape_1.setTransform(334,166.2);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).wait(1));

	// Layer 3
	this.instance = new lib.Arm();
	this.instance.parent = this;
	this.instance.setTransform(235.7,242,1,1,0,0,0,72.7,66);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

	// Layer 5
	this.instance_1 = new lib.RightHand();
	this.instance_1.parent = this;
	this.instance_1.setTransform(264.7,187.4,1,1,0,0,0,40,11);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(1));

	// Layer 2
	this.instance_2 = new lib.Screenscroll();
	this.instance_2.parent = this;
	this.instance_2.setTransform(144.2,60.9,1,1,0,0,0,55.7,122.9);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(1));

	// Layer 1
	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#FFFFFF").s().p("AA/D2IgtgvQgggjgZgXQgegagTgwQgRgqgBgkQgDiGBshCQA1ggA3gGQAAAVgQAMIhXA1QgjAWgSAvQgRAuAGA3QAOCDByBTIAYASQgKAJgGABIgEABQgFAAgEgEg");
	this.shape_2.setTransform(278.3,112.4);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#E0E7F6").s().p("AABAxQgBgGACgQQACgRgCgNQgCgQgHgGQgIgFgCgGQgCgEACgGQACgHAPALQAPALACARQAGAZgMAbQgFAMgDAAIgCgBg");
	this.shape_3.setTransform(291.1,143.2);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#FFFFFF").s().p("AhBgDQgHgGA/AAIA/AAQAJAJAEAJQgVgChkADQgEgJgHgEg");
	this.shape_4.setTransform(341.9,162.5);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#2D50D5").s().p("AjvBdQAzg4AQgFIAsgPQCsg7BEglQA0gcgGgTQgEgJgHgFQgHgGA/AAIBAAAQAJAJAFAKQAnBIi9BPQh8A1jIAyIheAVg");
	this.shape_5.setTransform(320.6,176.2);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#701AD3").s().p("AhkATICFhMIBDAnIiDBMg");
	this.shape_6.setTransform(380.1,308.2);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#701AD3").s().p("AhgGNIgUgMIAAhPIAgATQAWAMAXAAQAlAAAZgaQAagaAAgmIAAqWIBFAnIAAKIQgBAogTAhQgdAzg6AQQgSAFgTAAQgkAAgigUg");
	this.shape_7.setTransform(365.1,351.8);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#5717CB").s().p("AgVBCIhAg3ICEhMIAnAXIgdBXQhDAVgJAAIgCAAg");
	this.shape_8.setTransform(361.9,381.2);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#3D12AE").s().p("AhQF4IgkgUIAAhPIArAZIA6p2IBAgmIAAhOIBEAnIAAKJQABAkgSAhQgRAggfATIgCABIiIBQg");
	this.shape_9.setTransform(378.4,347);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#3D12AE").s().p("An+LjQgfgIgRgcQgKgSAAgVIAAqOQAAhBAhg5QAhg5A5giIOCoPQAbgQAfAIQAfAIARAcQAKASAAAVIAAKOQAABBghA6QggA5g5AhIuCIPQgTALgUAAQgKAAgKgDg");
	this.shape_10.setTransform(375.8,292.2);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#B126E6").s().p("ApHK3QgTgKgLgSQgLgTAAgWIAAqNQAAhCAhg5QAgg5A5giIODoPQASgLAWABQAVAAATAMICUBVIhvA3IAAJEQAABBghA5QghA5g5AhItcH5IAPAHIASBmg");
	this.shape_11.setTransform(366.4,287.3);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#2D50D5").s().p("AA2GxQgKjDgEgXQgMhXhTlkQhEkhgBiHIANggQBvC6BUDRQA2CNgSFeQgKC8gaEnQgUhSgKiqg");
	this.shape_12.setTransform(285.9,284.9);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#2D50D5").s().p("AgEgZIALAUIgNAfQAAgaACgZg");
	this.shape_13.setTransform(274.1,217);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#FFFFFF").s().p("AhRAKQAggFAtgVQAxgYALgDQAYgGAYAEQg6AliVA3QAMgOAKgXg");
	this.shape_14.setTransform(350.4,162);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#3475D5").s().p("AkqQSQgHgEgogjIgmgiQgwg2gQjWQgLjngJg9QgOhlgujAQg5jvgOhIQhIloBbhfQAQgQBTgvQBRgvAogqQCygYA6geQA0gbA0gvQA7g0AQgqQAfgFAtgWQAygYAMgDQA8gQBMBUQAzA3AuBVQCREMAtJpQASDrgFDIQgFC+gUAsQgtBgi1BxQiYBfiOAwQiCAthjAAQhbAAg/gng");
	this.shape_15.setTransform(336.7,265.5);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#FFFFFF").s().p("AgDAIQALgTgFgRQgDgLgHgHQgGgFgGAAQA1gDAEAOQAEAPg8BLIgUADQAVgWAOgXg");
	this.shape_16.setTransform(304.6,179.9);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#FFFFFF").s().p("ABnD/QhRgdg/h3Qg6hrAOgxQAJgegaguQghg6gEgdIgGgvQAeBdA3A8IAbAfQAKAOgFAPIgPArQgDAcAUAzQAVAzBDBCQA3A1AdAOIgHAAQgSAAgSgFg");
	this.shape_17.setTransform(284.3,148.5);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#582FC5").s().p("AgPHGQANgUgGgSQgDgLgIgHQgHgHghABQgnAAgNgFQhRgehAh2Qg6hsAOgxQAJgegaguQghg5gEgdQgvkmC+hGQGViWBnERQAkBhgICKQgHBrgbBPIgOAnQgKAhABASQABAkAEANQAJAcAdAHQAbAHAbgFQgQAqg8A1Qg0Aug0AbQg+AgitAWQAWgWANgWg");
	this.shape_18.setTransform(305.8,135.4);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#871CDC").s().p("AhPA0IgLgGQgIgFgBgGQgBgHAIgEIARgKQAIgEgBgGQgBgGgIgFIgKgFQgIgFgBgHQgBgGAHgEIAfgRQASgJATAKIAKAGQARAKATgJIASgKQATgJASALIALAGQAIAFACAGQABAHgIAEIiGBNQgJAEgJAAQgKAAgKgGg");
	this.shape_19.setTransform(243.9,209.7);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#871CDC").s().p("ApPFWQgJgGAAgHQgBgGAIgFIR3qUQAVgJAUALQAJAFABAGQABAIgIAEIx4KUQgJAEgKAAQgLAAgLgFg");
	this.shape_20.setTransform(182,201.9);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#871CDC").s().p("AjREnIkuiuQgIgFgCgHQgBgHAJgEIKrmKQAUgJAUALIEuCuQAJAFAAAHQACAHgJAEIqrGKQgJAEgJAAQgLAAgLgGg");
	this.shape_21.setTransform(182.3,228.3);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#871CDC").s().p("AAEBlIixhmQgJgGgBgGQgBgHAIgFICFhMQAVgJATALICxBlQAJAGABAGQABAHgIAFIiEBMQgJAEgKAAQgLAAgLgFg");
	this.shape_22.setTransform(223,197.7);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#871CDC").s().p("AAcCeIksitQgJgGgBgGQgBgHAIgFIDPh3QAVgJAUALIEsCtQAJAFABAHQABAHgIAEIjPB3QgKAEgJAAQgLAAgLgFg");
	this.shape_23.setTransform(252.3,187.9);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("#5717CB").s().p("AmnHXImJjiQgMgHgDgMQgDgNAGgMQAFgHAHgEIR4qUQAXgNAbAAQAbAAAXANIGGDhQALAGADANQAEANgHALQgEAGgIAGIx7KVQgVANgZAAQgZAAgWgNg");
	this.shape_24.setTransform(201.1,212.5);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#701AD3").s().p("AmnHYImJjjQgPgJgBgQIAAgpIAKAPIAHgEIR3qUQAXgOAaAAQAbAAAYAOIGFDhIAIAGIAIgRIAAAmQAAATgQAJIx7KWQgVANgaAAQgYAAgWgNg");
	this.shape_25.setTransform(201.1,216.3);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f("#B126E6").s().p("AgMAVQgEgDAAgIQABgSAPgLQAHgEAFADQAFADABAIQgCASgQALQgEACgDAAIgFgBg");
	this.shape_26.setTransform(136.6,57.2);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f("#3D12AE").s().p("AgwA0QgJgEAAgOQABghAdgRIA3ghQANgHAIAFQAJAEAAAOQgCAhgcARIg3AhQgIAEgGAAQgEAAgDgCg");
	this.shape_27.setTransform(139.4,55.2);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f("#7C1BD8").s().p("AhsBXQgJgIAAgNQAAgXALgTQALgUAUgJICShWQAHgEAJAAQANAAAJAJQAJAKgBAMQAAAWgLAUQgLASgTAKIiTBWQgHAEgIAAQgNAAgJgJg");
	this.shape_28.setTransform(143.4,52.7);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f("#3D12AE").s().p("AhrBWQgQgJABgSQAAgWALgTQALgSATgLICThVQAPgJAPAJIAcAPIgiA7IAAg1QgBAZgDANQgFAZgRAKIhtAsIgiA8g");
	this.shape_29.setTransform(141.2,51.7);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f("#FFFFFF").s().p("ArVh5IWrtGIAAQ5I2rNGg");
	this.shape_30.setTransform(143.9,106.3);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f("#3D12AE").s().p("Ar+QEQgIgCgDgGQgCgEgBgFIAAxoQAAgWATgKIXstsQAGgDAHABQAGACAEAHQACAFABADIAARnQAAAWgUAMI3qNrQgFACgFAAIgDAAg");
	this.shape_31.setTransform(143.9,106.3);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f("#871CDC").s().p("AscPyIgBgBIgBAAQgHgEAAgKIAAxoQAAgVASgLIXstsQAJgFAIAFIA8AjIgzAeIAARMI3VNeIACA6g");
	this.shape_32.setTransform(140.5,104.4);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f("#3D12AE").s().p("AjpEAQgOgfAAgiIAAkgIDhh3IDShbIAHAqIAADJQAAAiAOAeQAOAeAZAWIAAAAIm6EAQgagWgNgeg");
	this.shape_33.setTransform(152.8,165.6);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f("#5717CB").s().p("AiqCbIhZgzQgOgIgLgKIG7j/QALAKAOAIIBQAuQASALADAVIgBAJQgCAWgTALIlDC6QgaAPgdAAQgeAAgZgPg");
	this.shape_34.setTransform(161.8,187.8);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f("#5717CB").s().p("AgTCgQgXgpAAgwIAAkXIAhgRIAAEgQAAAhANAfQAOAfAZAWIAAAuQgogYgWgqg");
	this.shape_35.setTransform(128.9,178.4);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f("#701AD3").s().p("AiqB8Ihtg/IgFgDIAAguQAMAKANAIIBZAzQAZAPAeAAQAdAAAagPIFEi6QASgLADgWIAAAnQAAAYgVAMIlEC7QgaAPgdAAQgeAAgZgPg");
	this.shape_36.setTransform(161.8,195.2);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f("#931FDF").s().p("AE0DzQgXgBgUgLIqUmDQgLgGgDgNQgDgNAGgMQAEgGAIgFIAhgTQAVgMAXAAQAYAAAVAMIKbGAQAMAHADANQADANgGALQgEAIgJAFIgrAWQgTAKgWAAIgCAAg");
	this.shape_37.setTransform(242.2,335.4);

	this.shape_38 = new cjs.Shape();
	this.shape_38.graphics.f("#3D12AE").s().p("AE0D0QgXAAgUgMIqUmCQgOgJgBgRIAAhAIAUAgIAdgRQAUgMAYAAQAYAAAVAMIKQF7IAbgcIAAA7QABAKgFAIQgFAJgIAEIgrAWQgTALgWAAIgCgBg");
	this.shape_38.setTransform(242.2,341.5);

	this.shape_39 = new cjs.Shape();
	this.shape_39.graphics.f("#3D12AE").s().p("AgHEMQgmgKgTgiQgMgVAAgYIAAmpIAsgZIAAGxQAAAZARARQAQARAZAAQAQAAANgIIAWgNIAAA0IgOAHQgWANgXAAQgNAAgMgEg");
	this.shape_39.setTransform(246.7,366.1);

	this.shape_40 = new cjs.Shape();
	this.shape_40.graphics.f("#5717CB").s().p("AgkAdIgTg4IAZgPIBWAxIgqAkQgcgGgWgIg");
	this.shape_40.setTransform(248.7,385.4);

	this.shape_41 = new cjs.Shape();
	this.shape_41.graphics.f("#701AD3").s().p("AgWDiIgsn3IBWAxIAvH7g");
	this.shape_41.setTransform(237,364.3);

	this.shape_42 = new cjs.Shape();
	this.shape_42.graphics.f("#701AD3").s().p("AgHENQglgKgTgiQgNgUAAgbIAAmoIAsgZIAAGxQAAAZASARQAQARAYAAQAQAAANgIIAWgNIAAA0IgNAIQgWAMgZAAQgMAAgMgDg");
	this.shape_42.setTransform(238,361.1);

	this.shape_43 = new cjs.Shape();
	this.shape_43.graphics.f("#3D12AE").s().p("AA7GyQhlgRhuhJIpsmOIg4AmQgijDgIhgQBKhjAdgUQAqgdAuAoQASAQBeB5QB4CZBJBXQEaFMCUAaQBZAPB7gWQB1gWB5g0QEOh0BeiiQABAcgKAaQgrBmj7CQQjDBwiFAtQg8AVg9AAQgdAAgegFg");
	this.shape_43.setTransform(308.2,339);

	this.shape_44 = new cjs.Shape();
	this.shape_44.graphics.f("#701AD3").s().p("AA6GwQiUgakblNQhJhWh4iZQhdh4gTgRQgugogqAdQgcAUhKBjIAAgDQgHhUAKgVQBOiWC/ASQCOAOB/BSQCVBfIbF7IHWkmIAVBRQAVBcgBA6QhfCjkNB0Qh5A0h2AWQhIANg9AAQgqAAgkgGg");
	this.shape_44.setTransform(308,327.8);

	this.shape_45 = new cjs.Shape();
	this.shape_45.graphics.f("#3D12AE").s().p("AmaAAIhmA7QgPhWgBhjQAAhcALglQAvidCoAlQBTASBKAyIKiHVImQDeg");
	this.shape_45.setTransform(322.6,304.8);

	this.shape_46 = new cjs.Shape();
	this.shape_46.graphics.f("#871CDC").s().p("AkkIjIqKl3QgqgYgNgwQgNgvAZgrQAQgaAbgQIN6oCQBQguBdgBQBeABBRAuIKGF1QArAZANAwQAMAvgZArQgQAbgbAPIt8IDQhPAuhbAAQhcAAhQgug");
	this.shape_46.setTransform(318.3,341.4);

	this.shape_47 = new cjs.Shape();
	this.shape_47.graphics.f("#3D12AE").s().p("Ag/BgIAAi/IB/AAIAAC/g");
	this.shape_47.setTransform(412,343.1);

	this.shape_48 = new cjs.Shape();
	this.shape_48.graphics.f("#3D12AE").s().p("Ag/BgIAAi/IB/AAIAAC/g");
	this.shape_48.setTransform(224.5,357.7);

	this.shape_49 = new cjs.Shape();
	this.shape_49.graphics.f("#3D12AE").s().p("AkkIkIqKl4QgqgYgNgwQgNgvAZgrQAQgaAbgQIN6oCQBQguBdgBQBeABBRAuIKGF2QArAYANAwQANAvgZArQgQAagcARIt8IDQhPAthbAAQhcAAhQgtg");
	this.shape_49.setTransform(318.3,360.1);

	this.shape_50 = new cjs.Shape();
	this.shape_50.graphics.f("#871CDC").s().p("AE0DzQgXgBgTgLIqUmDQgMgHgDgMQgEgNAHgMQAFgHAHgEIAhgTQAUgMAYAAQAYAAAVAMIKbGBQALAGAEANQAEANgHALQgEAIgJAFIgqAWQgUAKgWAAIgCAAg");
	this.shape_50.setTransform(389.7,258.1);

	this.shape_51 = new cjs.Shape();
	this.shape_51.graphics.f("#3D12AE").s().p("AE0D0QgXAAgUgMIqUmCQgOgJgBgRIAAhAIAUAfIAdgRQAUgMAYAAQAYAAAVAMIKQF7IAbgcIAAA8QABAKgFAIQgFAJgIAEIgrAWQgTALgWAAIgCgBg");
	this.shape_51.setTransform(389.7,264.4);

	this.shape_52 = new cjs.Shape();
	this.shape_52.graphics.f("#3D12AE").s().p("Ar7j3IAAtuIU5MTIC+AkIAAWUg");
	this.shape_52.setTransform(76.4,372.8);

	this.shape_53 = new cjs.Shape();
	this.shape_53.graphics.f("#8B21DB").s().p("Egl9ALUQgTgLgLgTQgRgdAJghQAJggAdgSMA0tgeaQArgZAxAAQAxAAArAZIUXLwQATAMALASQAQAegJAgQgJAggdARIn1EhI9lkJQg9gIg9AMQg9ANg2AfIz/LhQg1AegVA6QgVA5AUA5IEYNSg");
	this.shape_53.setTransform(247.1,187.6);

	this.shape_54 = new cjs.Shape();
	this.shape_54.graphics.f("#C830E8").s().p("A0bO4IiWhXIkYtSQgUg4AWg5QAVg5A1gfIT/riQBthACAAQIdlEKMgs4AZ6QgqAYgyAAQgxAAgqgYg");
	this.shape_54.setTransform(265.2,240);

	this.shape_55 = new cjs.Shape();
	this.shape_55.graphics.f("#3D12AE").s().p("AxnWNI0XrxQgTgKgLgUQgKgTAAgVIAAhPIA3AAMA0fgeTQAqgYAxAAQAyAAAqAYIULLpIA1AAIAABPQAAAVgLATQgLATgTALMg0tAebQgqAYgyABQgxgBgrgYg");
	this.shape_55.setTransform(247.1,200.4);

	this.shape_56 = new cjs.Shape();
	this.shape_56.graphics.f("#7C1BD8").s().p("AgrGXQgSgJAAgOIAAsfQAAANASAJQASAKAZAAQAaAAASgKQASgJAAgNIAAMfQAAAOgSAJQgSAJgaAAQgZAAgSgJg");
	this.shape_56.setTransform(318.3,407.7);

	this.shape_57 = new cjs.Shape();
	this.shape_57.graphics.f("#7C1BD8").s().p("Ag3BZQgXgMAAgRIAAigQABARAWAMQAYAMAfAAQAhAAAXgMQAWgMABgRIAACgQAAARgXAMQgXAMghAAQgfAAgYgMg");
	this.shape_57.setTransform(318.3,456.2);

	this.shape_58 = new cjs.Shape();
	this.shape_58.graphics.f("#8B21DB").s().p("Ag3AdQgXgMAAgRQAAgQAXgMQAYgMAfAAQAhAAAXAMQAXAMAAAQQAAARgXAMQgXAMghAAQgfAAgYgMgAgrgVQgSAJAAAMQAAANASAKQASAKAZAAQAaAAASgKQASgKAAgNQAAgMgSgJQgSgKgaAAQgZAAgSAKg");
	this.shape_58.setTransform(318.3,446);

	this.shape_59 = new cjs.Shape();
	this.shape_59.graphics.f("#701AD3").s().p("ABRIXQgRgLgFgUIiBooIrkD5QgSAEgRgJQgRgIgIgQQgEgJgBgGQgFgXANgTQANgTAXgEIKfjsIngiuQgLgGgIgMQgMgUAFgWQAFgXATgMQANgJAQAAQAQAAANAIIIaDQID7k2QAKgQAQgHQAQgHASAEQAJACAIAFQAUAMAFAWQAGAXgMATIjzEmIMKCyQAWAGAMAUQALAUgGAWQgFAUgQAMQgRAMgVgCIsEixIB6IPIABAJQADAXgOASQgOASgXADIgHABQgQAAgPgKg");
	this.shape_59.setTransform(323.1,475.5);

	this.shape_60 = new cjs.Shape();
	this.shape_60.graphics.f("#3D12AE").s().p("ABSIXQgRgLgGgUIiBn7IrkDMQgSADgRgIQgQgIgJgRQgDgGgCgIQgEgXANgTQAMgTAXgFIKfi+IngjcQgNgHgIgOQgHgOABgPIAAgwIAMAPQAHgIAGgEQAOgIAPgBQAQAAANAIIIaD9IEAlqQAPgSAXgCQAYgBARAPIATgLIAAAyQACAQgKAQIjyFTIMACDQAVADAOAOIgEgLIAUgEIAAAzIgCAGIAAABQAAAFgBAFQgFAUgRAMQgRAMgUgCIsEiEIB0HGIAJgHIAAAwQABAWgOARQgOAQgWADIgHABQgQAAgOgKg");
	this.shape_60.setTransform(323.1,480.6);

	this.shape_61 = new cjs.Shape();
	this.shape_61.graphics.f("#3D12AE").s().p("AAAA8QgWgPgPgYQgOgXgCgcQAAgZAQgIQAQgJAVANQAYAPAOAYQAOAXACAcQAAAZgQAIQgGAEgHAAQgLAAgOgIg");
	this.shape_61.setTransform(332.3,536.5);

	this.shape_62 = new cjs.Shape();
	this.shape_62.graphics.f("#701AD3").s().p("AADBLQAOgLgBgSQgCgagNgVQgMgWgVgNQgRgMgSAHIgEgFIAygdQAQgKAXAOQAXAOAPAZQAOAYACAbQABAVgQALIgyAeg");
	this.shape_62.setTransform(335.7,534.8);

	this.shape_63 = new cjs.Shape();
	this.shape_63.graphics.f("#3D12AE").s().p("AAAA8QgWgPgPgYQgOgXgCgcQAAgZAQgIQAQgJAVANQAYAPAOAYQAOAXACAcQAAAZgQAIQgGAEgHAAQgLAAgOgIg");
	this.shape_63.setTransform(243.1,505);

	this.shape_64 = new cjs.Shape();
	this.shape_64.graphics.f("#701AD3").s().p("AADBLQAOgLgBgTQgCgZgNgVQgMgWgVgOQgRgLgSAHIgEgFIAygdQAQgLAXAOQAXAQAPAXQAOAYACAbQABAWgQAMIgyAcg");
	this.shape_64.setTransform(246.4,503.3);

	this.shape_65 = new cjs.Shape();
	this.shape_65.graphics.f("#701AD3").s().p("AglBAQgQgIAAgZQACgcAOgXQAOgYAXgPQAWgNAQAJQAQAIAAAZQgCAcgOAXQgOAYgYAPQgMAIgLAAQgIAAgGgEg");
	this.shape_65.setTransform(267.8,453.6);

	this.shape_66 = new cjs.Shape();
	this.shape_66.graphics.f("#3D12AE").s().p("Ag3A0QgSgLADgXQACgaAOgZQAOgXAXgPQAXgPAQALIAyAdIgDAFQgUgHgPAMQgWANgMAWQgNAVgCAZQgBASAOAMIgDAFg");
	this.shape_66.setTransform(264.4,451.9);

	this.shape_67 = new cjs.Shape();
	this.shape_67.graphics.f("#701AD3").s().p("AglBAQgQgIAAgZQACgcAOgXQAPgYAWgPQAWgNAQAJQAQAIAAAZQgCAcgOAXQgPAYgXAPQgNAIgLAAQgHAAgGgEg");
	this.shape_67.setTransform(353.6,442);

	this.shape_68 = new cjs.Shape();
	this.shape_68.graphics.f("#3D12AE").s().p("Ag4A0QgQgMABgVQACgbAOgYQAPgYAXgPQAXgOAQAKIAyAdIgEAFQgSgHgRALQgVAOgMAWQgNAVgCAaQgBASAOALIgEAFg");
	this.shape_68.setTransform(350.3,440.3);

	this.shape_69 = new cjs.Shape();
	this.shape_69.graphics.f("#701AD3").s().p("AglBAQgQgIAAgZQACgcAOgXQAPgYAWgPQAWgNAQAJQAQAIAAAZQgCAcgOAXQgOAYgYAPQgMAIgLAAQgIAAgGgEg");
	this.shape_69.setTransform(404.1,497.4);

	this.shape_70 = new cjs.Shape();
	this.shape_70.graphics.f("#3D12AE").s().p("Ag3A0QgSgMADgVQABgbAOgYQAPgYAXgPQAXgOAQAKIAyAdIgEAFQgSgHgQALQgWAOgMAWQgNAVgCAaQgBASAOALIgDAFg");
	this.shape_70.setTransform(400.7,495.7);

	this.shape_71 = new cjs.Shape();
	this.shape_71.graphics.f("#3D12AE").s().p("AByrtICTCXIjAJoQjMJ2hNBMQgVAUgaAGQD6reB7r9g");
	this.shape_71.setTransform(222.4,385.3);

	this.shape_72 = new cjs.Shape();
	this.shape_72.graphics.f("#701AD3").s().p("AiAMqQg8gMg5ggQg5gggdgnQghgrALgpQAWhJEcqsIEYqfIB7CBQh7L9j6LeQgXAHgaAAQgcAAgigIg");
	this.shape_72.setTransform(198.2,379.2);

	this.shape_73 = new cjs.Shape();
	this.shape_73.graphics.f("#3D12AE").s().p("Ag9GPQg9gSgygdQgxgdgGgWQgKgkAokgIAqkZIGBhwIgbFeQgiFrgjBHQgYAxhHAAQgpAAg7gSg");
	this.shape_73.setTransform(275.4,382.7);

	this.shape_74 = new cjs.Shape();
	this.shape_74.graphics.f("#701AD3").s().p("AikCMQhSgYgugcQgwgfASgUQAQgOAWgDQA5gLC+AoQClAjAbgcQAqgrAShgIAJhZQA0gCA0AJQgjCag8BYQgpA+gnAPQgxAThCAAQhWAAh0ghg");
	this.shape_74.setTransform(144.7,454.7);

	this.shape_75 = new cjs.Shape();
	this.shape_75.graphics.f("#3D12AE").s().p("ACkD5Qg7gfgjgPQnkjQAUhgQAMg8C2gEQA+gCCKBYQA+AoAaALQAqASAUgPQAwgkgRhgQgGgegLghIgKgbIArgHQAzgHAoAFQCBAQgZB8QgSBbgGCVQgNBshCASQgiAJgeAAQggAAgdgKg");
	this.shape_75.setTransform(246.1,421.8);

	this.shape_76 = new cjs.Shape();
	this.shape_76.graphics.f("#3D12AE").s().p("ACID+Ig7giQghgUgWgEQkWg9hkhoQgogoAHghQAHggAvgJQA5gLC+AoQCkAjAcgdQApgrAShhIAKhYIAqAAQAzACAmALQB5AkgwBuQgZA5gJBGQgDAbgFBVQgCA9gKAcQgOAngjAQQgaALgcAAQgoAAgsgXg");
	this.shape_76.setTransform(149.8,465.2);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_76},{t:this.shape_75},{t:this.shape_74},{t:this.shape_73},{t:this.shape_72},{t:this.shape_71},{t:this.shape_70},{t:this.shape_69},{t:this.shape_68},{t:this.shape_67},{t:this.shape_66},{t:this.shape_65},{t:this.shape_64},{t:this.shape_63},{t:this.shape_62},{t:this.shape_61},{t:this.shape_60},{t:this.shape_59},{t:this.shape_58},{t:this.shape_57},{t:this.shape_56},{t:this.shape_55},{t:this.shape_54},{t:this.shape_53},{t:this.shape_52},{t:this.shape_51},{t:this.shape_50},{t:this.shape_49},{t:this.shape_48},{t:this.shape_47},{t:this.shape_46},{t:this.shape_45},{t:this.shape_44},{t:this.shape_43},{t:this.shape_42},{t:this.shape_41},{t:this.shape_40},{t:this.shape_39},{t:this.shape_38},{t:this.shape_37},{t:this.shape_36},{t:this.shape_35},{t:this.shape_34},{t:this.shape_33},{t:this.shape_32},{t:this.shape_31},{t:this.shape_30},{t:this.shape_29},{t:this.shape_28},{t:this.shape_27},{t:this.shape_26},{t:this.shape_25},{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(247,271.5,494.3,543.3);
// library properties:
lib.properties = {
	width: 494,
	height: 543,
	fps: 24,
	color: "#FFFFFF",
	opacity: 1.00,
	manifest: [],
	preloads: []
};




})(lib = lib||{}, images = images||{}, createjs = createjs||{}, ss = ss||{}, AdobeAn = AdobeAn||{});
var lib, images, createjs, ss, AdobeAn;