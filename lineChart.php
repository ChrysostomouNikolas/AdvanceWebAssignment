<!--<!doctype html> -->
<html>
<head> 

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script> 
    function drawChart() {
        var xmlhttp = new XMLHttpRequest();
        //issue HTTP requests  in order to exchange data between the web site and a server.
       // https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequestEventTarget/onload
        xmlhttp.onload = function(){
        var xmlfile = new DOMParser().parseFromString(xmlhttp.responseText,'text/xml');
        var ROW = xmlfile.getElementsByTagName('ROW'); //gets all of the elements from the xml files 
        var graphData=[];
        var TemporarNO2 =[];
        //console.log(ROW.length);
            for(counter=0;counter<ROW.length; counter++){
                //console.log("date from ROW=" + (ROW[counter].getAttribute('TIME')));       
                    var ListOfNO2AndTime=[];
                    var TemporarDate = changeTheFormatOfDate(ROW[counter].getAttribute("DATE"));
                    if (TemporarDate == '<?php echo $_POST["dateToCheck"]; ?>'){
                      var TemporarTime = changeTheTimeFormat(ROW[counter].getAttribute("TIME"));
                      ListOfNO2AndTime.push(TemporarTime);
                      TemporarNO2= parseInt(ROW[counter].getAttribute("NO2"));//temporaryInt variable to store the current value of NO2 
                      ListOfNO2AndTime.push(TemporarNO2); /// we use that temporar variabe to store the value we had in the NO2 that we ll use for the graph
                      graphData.push(ListOfNO2AndTime);
                }//end of if
             
         
                 
                }//end of for
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(function(){
                  var data = new google.visualization.DataTable(graphData);
                        data.addColumn('timeofday', 'TIME');
                        data.addColumn('number', 'NO2');
                        data.addRows(graphData); 
                        data.sort([{column : 0}]);
                    
                    var options = {
                        title: 'Line graph thats shows the pollurtion level of '+ '<?php echo $_POST["location"]; ?>' + " at " + '<?php echo $_POST["dateToCheck"]; ?>' ,
                        hAxis: {title: 'Time'},//(data that will appear below the graph)
                        vAxis: {title: 'No2 levels'},//(data that will appear vertical  the graph)
                        legend: {position: 'bottom'},
                        'width':1000, //size of the graph
                        'height':750
                      };// end of var options

                    
                    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
                    chart.draw(data, options);
                });
            }// end of xmlhttp

      xmlhttp.open("GET", '<?php echo $_POST["location"]; ?>' + "_no2.xml"); // will read the location and open the file with the name_no2.xml
      xmlhttp.send();
    }//end of Drawchart
            
    function changeTheTimeFormat(time){
      return time.split(':').map(function(item){
        return parseInt(item)
      });
    }    
    
     //a function that Converts the date from dd/mm/yyyy to yyyy-mm-dd
    function changeTheFormatOfDate(TemporarDate){
        var seperateDate = TemporarDate.split("/");   //  a function that uses the value taken from date
        var day = seperateDate[0];            // it splits the values where theres a slash
        var month = seperateDate[1];            // 3 variables are created to take the seperated values 
        var year = seperateDate[2];              // a new variable is created to take the combined version
        var reversedDate = year + "-" + month + "-" + day;// of the 3 above in the form we want seperated with "-"
        return reversedDate;                                // our function will return the value we ve chosen(combined)
    }// end of changeTheFormatOfDate

    drawChart();
    </script>

</head>
 <body>
 <div id="curve_chart" style="width: 900px; height: 500px"></div>
  
</body>
 </html>

