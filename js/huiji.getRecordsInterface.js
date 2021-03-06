
// mw.prototype.abc = function(){
// 	console.log('123123123');
// 	return 100;
// }

// $.prototype.abcd = function(){
// 	return 100;
// };
// console.log('566566');
huiji = {
	getViewRecordsFromUserIdGroupByWikiSite: function(userId,fromTime,toTime,callback){
		var url = 'http://test.huiji.wiki:50007/getViewRecordsFromUserIdGroupByWikiSite/';
		jQuery.post(
			url,
			{
				userId:userId,
				fromTime:fromTime,
				toTime:toTime,
			},
			function(data){
			//	console.log(data);
				if(callback != null) {
					callback(data);
				}else{
					return data;
				}				
			}
		).error(function(){
			//console.log("error");
			var errInfo = {'status':'fail'};
			if(callback != null){
				 callback(errInfo);
			}else{
				return errInfo;
			}	
		});	
	},

	getEditRecordsFromUserIdGroupByWikiSite: function(userId,fromTime,toTime,callback){
		var url = 'http://test.huiji.wiki:50007/getEditRecordsFromUserIdGroupByWikiSite/';
		jQuery.post(
			url,
			{
				userId:userId,
				fromTime:fromTime,
				toTime:toTime,
			},
			function(data){
			//	console.log(data);
				if(callback != null){	
					 callback(data);
				}else{
					return data;
				}		
			}
		).error(function(){
			//console.log("error");
			var errInfo = {'status':'fail'};
			if(callback != null) {
				callback(errInfo);
			}else{
				return errInfo;
			}
		});	
	},

	getEditorCountGroupByWikiSite: function(fromTime,toTime,callback){
		var url = 'http://test.huiji.wiki:50007/getEditorCountGroupByWikiSite/';
		jQuery.post(
			url,
			{
				fromTime:fromTime,
				toTime:toTime,
			},
			function(data){
			//	console.log(data);
				if(callback != null) {
					callback(data);
				}else{
					return data;
				}				
			}
		).error(function(){
			//console.log("error");
			var result = {'status':'fail'};
			if(callback != null) {
				callback(result);
			}else{
				return result;
			}
		});	
	},

	getEditRecordsOnWikiSiteFromUserIdGroupByDay: function(userId,wikiSite,fromTime,toTime,callback)
	{
		var url = 'http://test.huiji.wiki:50007/getEditRecordsOnWikiSiteFromUserIdGroupByDay/';
		jQuery.post(
			url,
			{
				userId:userId,
				wikiSite:wikiSite,
				fromTime:fromTime,
				toTime:toTime,
			},
			function(data){
			//	console.log(data);
				if(callback != null) {
					callback(data);
				}else{
					return data;
				}				
			}
		).error(function(){
			//console.log("error");
			var result = {'status':'fail'};
			if(callback != null){
				 callback();
			}else{
				return result;
			}
		});	

	},



	getViewRecordsOnWikiSiteFromUserIdGroupByDay: function(userId,wikiSite,fromTime,toTime,callback)
	{
		var url = 'http://test.huiji.wiki:50007/getViewRecordsOnWikiSiteFromUserIdGroupByDay/';
		jQuery.post(
			url,
			{
				userId:userId,
				wikiSite:wikiSite,
				fromTime:fromTime,
				toTime:toTime,
			},
			function(data){
	//			console.log(data);
				if(callback != null) {
					callback(data);
				}else{
					return data;
				}				
			}
		).error(function(){
			//console.log("error");
			var result = {'status':'fail'};
			if(callback != null){
				 callback();
			}else{
				return result;
			}
		});	

	},

	getPreviousViewRecords: function(wikiSite,dayNumber,cb)
	{
		var date_array = new Array();
		var number_array = new Array();
		
		for(var i=1;i<=dayNumber;i++){
			date_array[i-1] = moment().subtract(dayNumber-i+1,"days").format("YYYY-MM-DD");
		}


		var callback = function(data){
			
			var newData = {};
			if(data.result != null){
				var hashtable = new Array();
				for(var i=0;i<data.result.length;i++){
					hashtable[data.result[i]._id] = data.result[i].value; 
				}
				var rs = {};
				rs.date_array = date_array;
				for(var i=0;i<date_array.length;i++){
					if(hashtable[date_array[i]]== null){
						number_array[i] = 0;
					}else{
						number_array[i] = hashtable[date_array[i]];
					}
				}
				rs.number_array = number_array;
				newData.result = rs;
				newData.status = data.status;
			}
			cb(newData);
		}


		this.getViewRecordsOnWikiSiteFromUserIdGroupByDay(-1,wikiSite,moment().subtract(1+dayNumber,"days").format("YYYY-MM-DD"),moment().subtract(1,"days").format("YYYY-MM-DD"),callback);

	},

	getPreviousEditRecords: function(wikiSite,dayNumber,cb)
	{
		var date_array = new Array();
		var number_array = new Array();
		
		for(var i=1;i<=dayNumber;i++){
			date_array[i-1] = moment().subtract(dayNumber-i+1,"days").format("YYYY-MM-DD");
		}


		var callback = function(data){
			
			var newData = {};
			if(data.result != null){
				var hashtable = new Array();
				for(var i=0;i<data.result.length;i++){
					hashtable[data.result[i]._id] = data.result[i].value; 
				}
				var rs = {};
				rs.date_array = date_array;
				for(var i=0;i<date_array.length;i++){
					if(hashtable[date_array[i]]== null){
						number_array[i] = 0;
					}else{
						number_array[i] = hashtable[date_array[i]];
					}
				}
				rs.number_array = number_array;
				newData.result = rs;
				newData.status = data.status;
			}
			cb(newData);
		}


		this.getEditRecordsOnWikiSiteFromUserIdGroupByDay(-1,wikiSite,moment().subtract(1+dayNumber,"days").format("YYYY-MM-DD"),moment().subtract(1,"days").format("YYYY-MM-DD"),callback);

	}
}


