/**
 * Green => functions "def", "if-else" statements and numbers
 * orange => mathematical symbols =+-* and the second word that comes after for and if words
 * yellow => 'anything inside inverted commas'
 * blue => brackets,'.' and '.'
 * purple => comments
 * white => rest of the words
 * @param  {} line
 */
const prettyCode = (line) => {
  let newLine = "";
  var reg = /\d/;
  var operatorsReg = `?[-+*\/]`;

  // for (const line_charector of line.split("")) {
  //   if (mathematical_operators.includes(line_charector)) newLine += `<span class="${green_class}">${line_charector}</span>`;
  //   else newLine += line_charector;
  // }
  // newLine = newLine.replace(" ", "");
  for (var line_word of line.split(" ")) {
    if (green_words.includes(line_word)) newLine += " " + `<span class="${green_class}">${line_word}</span>`;
    else if (reg.test(line_word)) {
      var _numIndexs = findindex(line_word);

      var _offset = `<span class="${yellow_class}"> </span>`.length;
      if (_numIndexs.length == 1) line_word = _addClass(_numIndexs[0], _numIndexs[0] + 2, line_word, yellow_class);
      else
        _numIndexs.map((value, idx) => {
          idx == 0
            ? (line_word = _addClass(value, value + 2, line_word, yellow_class))
            : (line_word = _addClass(value + _offset - 1 * idx, value + 1 + _offset * idx, line_word, yellow_class));
        });

      newLine += " " + line_word;
      // }  else if( line_word === "=") console.log(line_word)
    } else newLine += " " + line_word;
  }

  // // if a line has "'"
  if (newLine.includes("'") && !newLine.includes("span")) {
    var start = newLine.indexOf("'");
    var end = newLine.indexOf("'", start + 1);
    newLine = _addClass(start - 1, end + 2, newLine, yellow_class);
  }
  if (newLine.includes(`"`) && !newLine.includes("span")) {
    var start = newLine.indexOf(`"`);
    var end = newLine.indexOf(`"`, start + 1);
    newLine = _addClass(start - 1, end + 2, newLine, yellow_class);
  }

  // if (operatorsReg.test(newLine)) {
  //   console.log("it has operators", newLine);
  // }
  return newLine;
};
const _addClass = (start, end, line, _class) => {
  line = line.split("");

  line.splice(start, 0, `<span class="${_class}">`);
  line.splice(end, 0, `</span>`);

  return line.join("");
};

function findindex(str, start) {
  var num = /\d/g;
  var nums = str.match(num);
  var _numIndex = [];
  nums.map((num) => {
    _numIndex.push(str.indexOf(num));
  });
  return _numIndex;
}

const green_words = ["import", "from", "%matplotlib", "as", "return"];
const mathematical_operators = ["+", "-", "*", "/", "="];

const green_class = "code--green";
const yellow_class = "code--yellow";

var example_str = `"model/public/mobilenet-ssd/FP32/mobilenet-ssd.xml"`;
