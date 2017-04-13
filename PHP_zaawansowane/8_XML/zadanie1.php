<?php
/* Zadanie 1
  Napisz stronę pokazującą listę zajęć na uniwersytecie, korzystając z danych w pliku xml/reed.kml.
 *  Skorzystaj z SimpleXML. */

//<course>
//   <reg_num>10577</reg_num>
//   <subj>ANTH</subj>
//   <crse>211</crse>
//   <sect>F01</sect>
//   <title>Introduction to Anthropology</title>
//   <units>1.0</units>
//   <instructor>Brightman</instructor>
//   <days>M-W</days>
//   <time>
//       <start_time>03:10PM</start_time>
//       <end_time>04:30</end_time>
//   </time>
//   <place>
//       <building>ELIOT</building>
//       <room>414</room>
//   </place>
//</course>
?>

<table>
    <tr>
        <th>reg num</th>
        <th>subj</th>
        <th>crse</th>
        <th>sect</th>
        <th>title</th>
        <th>units</th>
        <th>instructor</th>
        <th>days</th>
        <th>start time</th>
        <th>end time</th>
        <th>building</th>
        <th>room</th>
    </tr>

    <?php
    
    // http://php.net/manual/en/book.simplexml.php
    $loadedFile = simplexml_load_file(__DIR__ . '/../xml/reed.xml');
    // xpath znajduje wszystkie wezly o podanej nazwie i interpretuje je jako obiekty
    $courses = $loadedFile->xpath('course'); // wezel <course>

    foreach ($courses as $course) {
        echo '<tr>';
        echo "<td>$course->reg_num</td>";
        echo "<td>$course->subj</td>";
        echo "<td>$course->crse</td>";
        echo "<td>$course->sect</td>";
        echo "<td>$course->title</td>";
        echo "<td>$course->units</td>";
        echo "<td>$course->instructor</td>";
        echo "<td>$course->days</td>";
        echo "<td>{$course->time->start_time}</td>"; //{} zagniezdzone
        echo "<td>{$course->time->end_time}</td>";
        echo "<td>{$course->place->building}</td>";
        echo "<td>{$course->place->room}</td>";
        echo '</tr>';
    }
    ?>
</table>

