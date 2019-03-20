
<?php
$Location='newfoundland_way';
$location_to_read= 'newfoundland way';
$Pollution='no2';
$Pollution_read='nitrogen dioxide';
$Longtitude =  51.458;
$Lattitude = -2.588;
//////// setting xmlreader
$reader = new XMLReader();
$reader->open($Location . '.xml'); //opening the xml document into the reader.

/// setting an xmlWirtter
$writer = xmlwriter_open_memory();
xmlwriter_set_indent($writer, 1);
$res = xmlwriter_set_indent_string($writer, '');

xmlwriter_start_document ($writer,'1.0','UTF-8');

//first element
xmlwriter_start_element($writer,'data'); //element for type of NO2
//attribure  called data
xmlwriter_start_attribute($writer,'type');
xmlwriter_text($writer,'nitrogen dioxide');
xmlwriter_end_attribute($writer);

//location
xmlwriter_start_element($writer,'location'); ///element for location
xmlwriter_start_attribute($writer,'id');
xmlwriter_text($writer,$location_to_read);
xmlwriter_end_attribute($writer);

xmlwriter_start_attribute($writer,'lat');
xmlwriter_text($writer,$Lattitude);
xmlwriter_end_attribute($writer);

xmlwriter_start_attribute($writer,'long');
xmlwriter_text($writer,$Longtitude);
xmlwriter_end_attribute($writer);





while ($reader->read()){
    if ($reader->nodeType == XMLReader::ELEMENT){
        switch($reader->name){//start of switch
            case('row'):       /// we want to start an element
            xmlwriter_start_element($writer,'ROW');
            break;
            case('date'):// rwad the date
            xmlwriter_start_attribute($writer,'DATE');
            xmlwriter_text($writer,$reader->getAttribute('val'));
            xmlwriter_end_attribute($writer);
            break;
            case('time')://read time
            xmlwriter_start_attribute($writer,'TIME');
            xmlwriter_text($writer,$reader->getAttribute('val'));
            xmlwriter_end_attribute($writer);
            break;
            case('no2')://read  the value of no2
            xmlwriter_start_attribute($writer,'NO2');
            xmlwriter_text($writer,$reader->getAttribute('val'));
            xmlwriter_end_attribute($writer);
            break;
        }//end of switch
    }else if($reader->nodeType == XMLReader::END_ELEMENT){
        xmlwriter_end_element($writer);
    }//end else if
}//end while
$reader->close();
xmlwriter_end_element($writer);//end of location element
xmlwriter_end_element($writer);
xmlwriter_end_document ($writer); // end document


file_put_contents($Location.'_'.$Pollution.'.xml',xmlwriter_output_memory($writer));
 echo 'Done!';
    
 ?>

