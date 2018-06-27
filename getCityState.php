<?php
// getCityState.php from Eric- this should be growing as new zipcodes are added.
//  Gets the form value from the "zip" widget, looks up the 
//  city and state for that zip code, and prints it for the
//  form
      
  $cityState = array(
    "60101" => "Addison, IL",
    "60102" => "Algonquin, IL",
    "60103" => "Bartlett, IL",
    "60104" => "Bellwood, IL",
    "60105" => "Bensenville, IL",
    "60106" => "Bensenville, IL",
    "60107" => "Streamwood, IL",
    "60108" => "Bloomingdale, IL",
    "60109" => "Burlington, IL",
    "60110" => "Carpentersville, IL",
    "60111" => "Clare, IL",
    "60112" => "Cortland, IL",
    "60113" => "Creston, IL",
    "60115" => "Dekalb, IL",
    "60116" => "Carol Stream, IL",
    "60117" => "Bloomingdale, IL",
    "60118" => "Dundee, IL",
    "60119" => "Elburn, IL",
    "60120" => "Elgin, IL",
    "60121" => "Elgin, IL",
    "60122" => "Elgin, IL",
    "60123" => "Elgin, IL",
    "60125" => "Carol Stream, IL",
    "60126" => "Elmhurst, IL",
    "60128" => "Carol Stream, IL",
    "60129" => "Esmond, IL",
    "60130" => "Forest Park, IL",
    "60131" => "Franklin Park, IL",
    "60132" => "Carol Stream, IL",
    "60133" => "Hanover Park, IL",
    "60134" => "Geneva, IL",
    "60135" => "Genoa, IL",
    "60136" => "Gilberts, IL",
    "60137" => "Glen Ellyn, IL",
    "60138" => "Glen Ellyn, IL",
    "60139" => "Glendale Heights, IL",
    "60140" => "Hampshire, IL",
    "60141" => "Hines, IL",
    "60142" => "Huntley, IL",
    "60143" => "Itasca, IL",
    "60144" => "Kaneville, IL",
    "60145" => "Kingston, IL",
    "60146" => "Kirkland, IL",
    "60147" => "Lafox, IL",
    "60148" => "Lombard, IL",
    "60150" => "Malta, IL",
    "60151" => "Maple Park, IL",
    "60152" => "Marengo, IL",
    "60153" => "Maywood, IL",
    "60154" => "Westchester, IL",
    "60155" => "Broadview, IL",
    "60156" => "Lake In The Hills, IL",
    "60157" => "Medinah, IL",
    "60159" => "Schaumburg, IL",
    "60160" => "Melrose Park, IL",
    "60161" => "Melrose Park, IL",
    "60162" => "Hillside, IL",
    "60163" => "Berkeley, IL",
    "60164" => "Melrose Park, IL",
    "60165" => "Stone Park, IL",
    "60168" => "Schaumburg, IL",
    "60170" => "Plato Center, IL",
    "60171" => "River Grove, IL",
    "60172" => "Roselle, IL",
    "60173" => "Schaumburg, IL",
    "60174" => "Saint Charles, IL",
    "60175" => "Saint Charles, IL",
    "60176" => "Schiller Park, IL",
    "60177" => "South Elgin, IL",
    "60178" => "Sycamore, IL",
    "60179" => "Hoffman Estates, IL",
    "60180" => "Union, IL",
    "60181" => "Villa Park, IL",
    "60182" => "Virgil, IL",
    "60183" => "Wasco, IL",
    "60184" => "Wayne, IL",
    "60185" => "West Chicago, IL",
    "60186" => "West Chicago, IL",
    "60187" => "Wheaton, IL",
    "60188" => "Carol Stream, IL",
    "60189" => "Wheaton, IL",
    "60190" => "Winfield, IL",
    "60191" => "Wood Dale, IL",
    "60192" => "Schaumburg, IL",
    "60193" => "Schaumburg, IL",
    "60194" => "Schaumburg, IL",
    "60195" => "Schaumburg, IL",
    "60196" => "Schaumburg, IL",
    "60197" => "Carol Stream, IL",
    "60199" => "Carol Stream, IL",
    "60544" => "Plainfield, IL"
  );
  $zip = $_GET["zip"];
  if (array_key_exists($zip, $cityState))
    print $cityState[$zip];
  else
    print "There must be an error then";
?>