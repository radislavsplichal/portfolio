//var api = 'http://api.forismatic.com/api/1.0/?method=getQuote&key=300&format=jsonp&lang=en';
var api = 'http://api.forismatic.com/api/1.0/?method=getQuote&key=300&format=jsonp&lang=en&jsonp=?';
var myjson;
$.getJSON(api, function(json){
  myjson = json;
});
console.log(myjson);

function newQuote(){
  var myjson;
$.getJSON(api, function(json){
    myjson = json;
    console.log(myjson);
    console.log(myjson);
    var quoteText = myjson.quoteText;
    var quoteAuthor = myjson.quoteAuthor;
    console.log(quoteText, quoteAuthor);
      document.getElementById('quoteText').innerHTML = myjson.quoteText;
      document.getElementById('quoteAuthor').innerHTML = myjson.quoteAuthor;
});

}
