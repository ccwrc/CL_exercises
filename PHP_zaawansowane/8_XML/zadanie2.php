<?php

/* Zadanie 2
  Policz, ile zajęć odbywa się na danym poziomie level, korzystając z danych w katalogu xml/uwm.kml.
 *  Skorzystaj z XMLReader. */

//<course_listing>
//  <note>#</note>
//  <course>216-088</course>
//  <title>NEW STUDENT ORIENTATION</title>
//  <credits>0</credits>
//  <level>U</level>
//  <restrictions>; ; REQUIRED OF ALL NEW STUDENTS. PREREQ: NONE</restrictions>
//   <section_listing>
//      <section_note></section_note>
//      <section>Se 001</section>
//      <days>W</days>
//      <hours>
//          <start>1:30pm</start>
//          <end></end>
//      </hours>
//      <bldg_and_rm>
//          <bldg>BUS</bldg>
//          <rm>S230</rm>
//      </bldg_and_rm>
//      <instructor>Gusavac</instructor>
//      <comments>9 WKS BEGINNING WEDNESDAY, 9/6/00 </comments>
//   </section_listing>
//   <section_listing>
//      <section_note></section_note>
//      <section>Se 002</section>
//      <days>F</days>
//      <hours>
//          <start>11:30am</start>
//          <end></end>
//      </hours>
//      <bldg_and_rm>
//          <bldg>BUS</bldg>
//          <rm>S171</rm>
//      </bldg_and_rm>
//      <instructor>Gusavac</instructor>
//      <comments>9 WKS BEGINNING FRIDAY, 9/8/00 </comments>
//   </section_listing>
//</course_listing>


// http://www.w3schools.com/php/func_filesystem_file_get_contents.asp
// http://php.net/manual/en/book.xmlreader.php

$loadedNodes = file_get_contents(__DIR__ . '/../xml/uwm.xml');
$courses = new XMLReader();
$courses->xml($loadedNodes);

$coursesCountArr = [];
while ($courses->read()) { //przejdz do nastepnego wezla dopoki sa
    // kod prez. typ wezla == element 
    if ($courses->nodeType == XMLReader::ELEMENT && $courses->name == 'level') {
        if (!isset($coursesCountArr[$courses->readString()])) {
            $coursesCountArr[$courses->readString()] = 1;
        } else {
            $coursesCountArr[$courses->readString()] ++;
        }
    }
}
$courses->close();

// var_dump($coursesCountArr); 

foreach ($coursesCountArr as $level => $value) {
    echo "level: " . $level . ", liczba: " . $value . "<br/>";
}