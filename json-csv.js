var http = require('http');
var HOST = 'docs.google.com';
var PATH = '/spreadsheets/d/1GNpcrXPIa0LUNGzquRKPsjqzFs2FyRaKw51rhOvTNtU/export?format=csv';
http.get({
        host: HOST,
        path: PATH
    }, (response)=>{
    console.log(response.body);
})

function csvJSON(csv){
  var lines=csv.split("\n");
  var result = [];
  var headers=lines[0].split(",");
  for(var i=1;i<lines.length;i++){
      var obj = {};
      var currentline=lines[i].split(",");
      for(var j=0;j<headers.length;j++){
          obj[headers[j]] = currentline[j];
      }
      result.push(obj);
  }

  //return result; //JavaScript object
  return JSON.stringify(result); //JSON
}
