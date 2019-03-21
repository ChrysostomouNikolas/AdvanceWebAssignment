<!--Student: Chrysostomou Nikolas
Year3 : 2018-2019
Module :Advanced Topics in Web Development 2 
Markdown report-->

# Links to the Codes used and to github  
<!-- main page-->
Link to direct reader straight to Git and assignment location.


[github page with the code location](https://github.com/ChrysostomouNikolas/AdvanceWebAssignment 'link to github page')
<!--specified task-->
## Task1 Optimise and Normalise data

<img src="https://www.svgrepo.com/show/168611/php.svg" alt="logo" style="width:100px;height:100px;">

<img src="https://upload.wikimedia.org/wikipedia/commons/e/e6/Text-xml.svg" alt="logo" style="width:100px;height:100px;">


<!--php files and xml files>       <!--generated no2php-->
[fishponds.php](https://github.com/ChrysostomouNikolas/AdvanceWebAssignment/blob/master/fishponds.php)

[brislington.php](https://github.com/ChrysostomouNikolas/AdvanceWebAssignment/blob/master/brislington.php)

[rupert_st.php](https://github.com/ChrysostomouNikolas/AdvanceWebAssignment/blob/master/rupert%20st.php)

[parson_st.php](https://github.com/ChrysostomouNikolas/AdvanceWebAssignment/blob/master/parson_st.php)

[newfoundland_way.php](https://github.com/ChrysostomouNikolas/AdvanceWebAssignment/blob/master/newfoundland%20way.php)

[Wells_rd.php](https://github.com/ChrysostomouNikolas/AdvanceWebAssignment/blob/master/Wells_rd.php)

---
Generated files 

[fishponds.xml](https://github.com/ChrysostomouNikolas/AdvanceWebAssignment/blob/master/fishponds.xml)

[brislington.xml](https://github.com/ChrysostomouNikolas/AdvanceWebAssignment/blob/master/brislington.xml)

[rupert_st.xml](https://github.com/ChrysostomouNikolas/AdvanceWebAssignment/blob/master/rupert_st.xml)

[parson_st.xml](https://github.com/ChrysostomouNikolas/AdvanceWebAssignment/blob/master/parson_st.xml)

[newfoundland_way.xml](https://github.com/ChrysostomouNikolas/AdvanceWebAssignment/blob/master/newfoundland_way.xml)

[Wells_rd.xml](https://github.com/ChrysostomouNikolas/AdvanceWebAssignment/blob/master/wells_rd.xml)

---
#### Normalisation
[fishponds_no2.php](https://github.com/ChrysostomouNikolas/AdvanceWebAssignment/blob/master/fishponds_no2.php)

[brislington_no2.php](https://github.com/ChrysostomouNikolas/AdvanceWebAssignment/blob/master/brislington_no2.php)

[rupert_st_no2.php](https://github.com/ChrysostomouNikolas/AdvanceWebAssignment/blob/master/rupert_st_no2.php)

[parson_st_no2.php](https://github.com/ChrysostomouNikolas/AdvanceWebAssignment/blob/master/parson_st_no2.php)

[newfoundland_way_no2.php](https://github.com/ChrysostomouNikolas/AdvanceWebAssignment/blob/master/newfoundland_way_no2.php)

[Wells_rd_no2.php](https://github.com/ChrysostomouNikolas/AdvanceWebAssignment/blob/master/Wells_rd2.php)

---
[fishponds_no2.xml](https://github.com/ChrysostomouNikolas/AdvanceWebAssignment/blob/master/fishponds_no2.xml)

[brislington_no2.xml](https://github.com/ChrysostomouNikolas/AdvanceWebAssignment/blob/master/brislington_no2.xml)

[rupert_st_no2.xml](https://github.com/ChrysostomouNikolas/AdvanceWebAssignment/blob/master/rupert_st_no2.xml)

[parson_st_no2.xml](https://github.com/ChrysostomouNikolas/AdvanceWebAssignment/blob/master/parson_st_no2.xml)

[newfoundland_way_no2.xml](https://github.com/ChrysostomouNikolas/AdvanceWebAssignment/blob/master/newfoundland_way_no2.xml)

[Wells_rd_no2.xml](https://github.com/ChrysostomouNikolas/AdvanceWebAssignment/blob/master/wells_rd_no2.xml)

## Task2 Visualisation

##### ( running the Html files(.html) first provide user interaction that redirect the user to the next page to see results on charts)
---
**Scatter Chart**
<!--using html to get picture size down-->
<img src="https://upload.wikimedia.org/wikipedia/commons/8/80/HTML5_logo_resized.svg" alt="logo" style="width:100px;height:100px;">


(chart that has the result appear as scatter dots)

[scatterChart.html](https://github.com/ChrysostomouNikolas/AdvanceWebAssignment/blob/master/scatterChart.html)

[scatterChart.php](https://github.com/ChrysostomouNikolas/AdvanceWebAssignment/blob/master/scatterChart.php)

**Line Chart**

 (chart that has the result appear as statistic lines)

[lineChart.php](https://github.com/ChrysostomouNikolas/AdvanceWebAssignment/blob/master/lineChart.html)

[lineChart.php](https://github.com/ChrysostomouNikolas/AdvanceWebAssignment/blob/master/lineChart.php)
# *Streaming parse and DOM parse*
>
___



## Streaming parse

Parser is the process of analysing a string of symbols in both natural language and  computer languages but also in analysing data structures.A streaming parser examines the Data a line at a time. Streaming parsers are comonly used in  mobile application creation and web applications which are  products used everyday, they helps to share native models across server-side code and multiple clients.  it's mainly for front-end mobile (iOs and android). 

A better example of a streaming parse is the XmlReader used in the first task. XmlReader opens and parses xml file. It provides a lower level abstaction over the xml file structure. It also reduces the memory space required for the parse.
The XmlReader retains more complexity and allows the user to manipulate the XML at a level more suited for many programs. As mention above  this can be clearly seen , in the history of the mobile devices that become more powerful and can handle big sets of data and run multiple  applications.

DOM which stands for ( Document Object Model ) is a cross-platform and language-independent application programming interface that treats an HTML where each node is an object. They allowed the user to attach different event handlers that will be triggered when the event specifications are trigered. 
Unlike Streaming parse DOM doesnt read the data line by line but instead it takes the data themselves and store them in memory, this lead to DOM being less Usable in problems where the amount of data is large cause it will slow up the process.
Hoever DOM is really handy when it comes to altering some data that are located anywhere (within the data) because they re already loaded in memory and wont have to read line by line to locate them and swap them.
In task 2  theres a  of DOM to get all the elements from within the xml  and  used Javascript  to form the chart based on specific requirments. 


