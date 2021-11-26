
window.addEventListener("load", function(){
    console.log("something");
    var index = 0;
    setInterval(function (){
        showWeather(divisions[index][2], divisions[index][0], divisions[index][1]);
        index++;
        if(index>=divisions.length){
            index = 0;
        }

    }, 3000);
   
});

var divisions = [
    [23.8103, 90.4125, "Dhaka"],
    [22.8456, 89.5403,"Khulna"],
    [22.3569, 91.7832, "Chittagong"]
];


function showWeather(division_name, lat, lon){
    
    var url = "http://api.openweathermap.org/data/2.5/weather?lat="+lat+"&lon="+lon+"&appid=82005d27a116c2880c8f0fcb866998a0";
    $.get(url, function(data){
        console.log(data.main.temp-273);
        $(".weather h2 span").text(Math.floor(data.main.temp-273));
        $(".weather h1").text(division_name);


    });
}
