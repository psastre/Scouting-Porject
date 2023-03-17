var arr = null;
$.ajax({
    'async': false,
    'global': false,
    'url': "data.json",
    'dataType': "json",
    'success': function (data) {
        arr = data;
    }
});
console.log(arr);

var teamCount = [];
var bocaCount = 0
var riverCount = 0
var racingCount = 0
for( var i = 0 ; i<arr.length; i++ ){
    
    if (arr[i].team == "Boca"){
        bocaCount++ ;
        
    }
    if (arr[i].team == "River"){
        riverCount++ ;
        
    }
    if (arr[i].team == "Racing"){
        racingCount++ ;
        
    }
    
}
teamCount.push(bocaCount);
teamCount.push(riverCount);
teamCount.push(racingCount);




console.log(teamCount[1]);
console.log(arr[1]);

console.log(arr.length);