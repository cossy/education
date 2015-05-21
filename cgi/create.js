var querystring=require('querystring');
exports.create=function(req,res){
    var postData="";
    req.addListener('data',function(postDataChunk){
    	postData+=postDataChunk;
    });
    req.addListener('end',function(){
	var param=querystring.parse(postData);
	console.log(param.name);
    });
}
