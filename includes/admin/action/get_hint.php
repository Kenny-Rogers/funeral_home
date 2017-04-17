<?php
$page="display_info";
$q=mysqli_real_escape_string($connection,$_GET['q']);
//$sql="SELECT Pid, FullName FROM patientbios NOT IN (SELECT Pid FROM $tbl)";
$sql="";
$res=mysqli_query($connection, $sql);

//arrays to hold names and ids
$names=array();
$id=array();

//fetching all the names and ids into arrays
while($row=mysqli_fetch_assoc($res)){
array_push($id, $row['Pid']);
array_push($names,strtoupper($row['FullName']));

}

$nLen=count($names);
$iLen=count($id);
//checking for equal number of records
if($nLen==$iLen){
  //finding match in each
  //echo "<br> ";
  $count=0;
  for ($i=0; $i < $nLen; $i++) {
    if(($i==$nLen-1)AND(findMatch($q, $id[$i], $names[$i])=="no suggestions found") AND $count==0 ){
      echo "<a href='#' class='list-group-item'>No Suggestions Found</a>";
      continue;
    }else
    if(findMatch($q, $id[$i], $names[$i])!="no suggestions found"){
      echo findMatch($q, $id[$i], $names[$i]);
      $count++;
    }
  }


function findMatch($q, $body_id, $name){
		global $page;
    global $sql;
  // lookup all hints from array if $q is different from ""
  if ($q !== "") {
      $n = strtoupper($q);
          //checking if the query is a substring of a specific name
          if(stristr($name, $n)){
            return "<a href='?page={$page}&q={$body_id}' class='list-group-item'>$name</a>" ;
            //echo $sql;
          }else{
              return "no suggestions found";

          }
        }
}

?>
