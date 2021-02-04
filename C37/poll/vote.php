<?php
  $vote = $_REQUEST['name'];
  $filename = "result.txt";
  $content = file($filename);
  $arr = explode("||", $content[0]);
  $yes = $arr[0];
  $no = $arr[1];
  if ($vote == 1)
    $yes +=1;
  if ($vote == 0)
    $no +=1;

  $insertVote = $yes."||".$no;
  $fp = fopen($filename, "w");
  fputs($fp, $insertVote);
  fclose($fp);
 ?>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Vote Result</title>
   </head>
   <body>
     <h2>::RESULT::</h2>
     <table>
       <tr>
         <td>Yes:</td>
         <td>
           <img src="test.jpg" width='<?php echo(100*round($yes/($yes+$no),2)); ?>' height="20">
         </td>
       </tr>
       <tr>
         <td>No:</td>
         <td>
           <img src="test.jpg" width='<?php echo(100*round($no/($yes+$no),2)); ?>' height="20">
         </td>
       </tr>
     </table>
   </body>
 </html>
