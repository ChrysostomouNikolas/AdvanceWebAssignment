<!--<!doctype html> -->
<html>
<head> 

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript"> 
    function drawChart() {
        var xmlhttp = new XMLHttpRequest();
        //issue HTTP requests  in order to exchange data between the web site and a server.
       // https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequestEventTarget/onload
        xmlhttp.onload = function(){
        var xmlfile = new DOMParser().parseFromString(xmlhttp.responseText,'text/xml');
        var ROW = xmlfile.getElementsByTagName('ROW'); //gets all of the elements from the xml files 
        var graphData=[];
            for(counter=0;counter<ROW.length; counter++){
                //console.log("date from ROW=" + (ROW[counter].getAttribute('TIME')));
              
                if(ROW[counter].getAttribute('TIME') == '<?php echo $_POST["timeToCheck"]; ?>:00'){
                    var ListOfDatesAndNO2 = [];
                    var TemporarDate = new Date(changeTheFormatOfDate(ROW[counter].getAttribute("DATE")));
                    ListOfDatesAndNO2.push(TemporarDate);
                    var TemporarNO2 =[];
                    TemporarNO2= parseInt(ROW[counter].getAttribute("NO2"));//temporaryInt variable to store the current value of NO2 
                    ListOfDatesAndNO2.push(TemporarNO2); /// we use that temporar variabe to store the value we had in the NO2 that we ll use for the graph
                    graphData.push(ListOfDatesAndNO2);
                }//end of if
                 
                }//end of for
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(function(){
                  var data = new google.visualization.DataTable(graphData);
                        data.addColumn('date', 'DATE');
                        data.addColumn('number', 'NO2');
                        data.addRows(graphData); //sets the data elements using the array of arrays
                    
                    var options = {
                        title: 'scatter graph thats shows the pollurtion level of '+ '<?php echo $_POST["location"]; ?>' + " at " + '<?php echo $_POST["timeToCheck"]; ?>' ,
                        hAxis: {title: 'Date'},//(data that will appear below the graph)
                        vAxis: {title: 'No2 levels'},//(data that will appear vertical  the graph)
                      };// end of var options

                      var chart = new google.visualization.ScatterChart(document.getElementById('chart_div'));
                      chart.draw(data, options);// options is what will be written on the left below
                            // data are the values compared on the board (in our case sate and polution)
                });
            }// end of xmlhttp

      
      xmlhttp.open("GET", '<?php echo $_POST["location"]; ?>' + "_no2.xml"); // will read the location and open the file with the name_no2.xml
      xmlhttp.send();
    }//end of chart
            
            
    
     //a function that Converts the date from dd/mm/yyyy to yyyy-mm-dd
    function changeTheFormatOfDate(TemporarDate){
        var seperateDate = TemporarDate.split("/");   //  a function that uses the value taken from date
        var day = seperateDate[0];            // it splits the values where theres a slash
        var month = seperateDate[1];            // 3 variables are created to take the seperated values 
        var year = seperateDate[2];              // a new variable is created to take the combined version
        var reversedDate = year + "-" + month + "-" + day;// of the 3 above in the form we want seperated with "-"
        return reversedDate;                                // our function will return the value we ve chosen(combined)
    }// end of changeTheFormatOfDate
     
   /*
    var datesToBeUsed = []; // an array representing the dates that will be used
    var No2ToBeUsed =[] // an array representing the NO2 levels
    var time =[] // an array representing the times
*/
    drawChart();
    </script>

</head>
<body>
     <div id="chart_div" style="width: 900px; height: 500px"></div>
</body>
</html>






