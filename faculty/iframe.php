
<?php 
session_start();
include('../dbconfig.php');
error_reporting(1);

$user= $_SESSION['faculty_login'];
if($user=="")
{header('location:../index.php');}
$sql=mysqli_query($conn,"select * from faculty where email='$user' ");
$users=mysqli_fetch_assoc($sql);
//echo $user;
 $connect = mysqli_connect("localhost", "root", "", "feedback_system");
 $query1 = "SELECT ques1, count(*) as number FROM feedback where faculty_id= '$user' GROUP BY ques1";  
 $result1 = mysqli_query($connect, $query1);
 $query2 = "SELECT ques2, count(*) as number FROM feedback where faculty_id= '$user' GROUP BY ques2";  
 $result2 = mysqli_query($connect, $query2);
 $query3 = "SELECT ques3, count(*) as number FROM feedback where faculty_id= '$user' GROUP BY ques3";  
 $result3 = mysqli_query($connect, $query3);
 $query4 = "SELECT ques4, count(*) as number FROM feedback where faculty_id= '$user' GROUP BY ques4";  
 $result4 = mysqli_query($connect, $query4);
 $query5 = "SELECT ques5, count(*) as number FROM feedback where faculty_id= '$user' GROUP BY ques5";  
 $result5 = mysqli_query($connect, $query5);
 $query6 = "SELECT ques6, count(*) as number FROM feedback where faculty_id= '$user' GROUP BY ques6";  
 $result6 = mysqli_query($connect, $query6);
 $query7 = "SELECT ques7, count(*) as number FROM feedback where faculty_id= '$user' GROUP BY ques7";  
 $result7 = mysqli_query($connect, $query7);
 $query8 = "SELECT ques8, count(*) as number FROM feedback where faculty_id= '$user' GROUP BY ques8";  
 $result8 = mysqli_query($connect, $query8);
 $query9 = "SELECT ques9, count(*) as number FROM feedback where faculty_id= '$user' GROUP BY ques9";  
 $result9 = mysqli_query($connect, $query9);
 $query10 = "SELECT ques10, count(*) as number FROM feedback where faculty_id= '$user' GROUP BY ques10";  
 $result10 = mysqli_query($connect, $query10);
 $query11 = "SELECT ques11, count(*) as number FROM feedback where faculty_id= '$user' GROUP BY ques11";  
 $result11 = mysqli_query($connect, $query11);
 $query12 = "SELECT ques12, count(*) as number FROM feedback where faculty_id= '$user' GROUP BY ques12";  
 $result12 = mysqli_query($connect, $query12);
 //echo $query12;
?>
<!DOCTYPE html>
<html>

   <head>
      <title>HTML Iframes</title>
	  
   </head>
	
   <body>
			
		  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		  <script type="text/javascript">  
			   google.charts.load('current', {'packages':['corechart']});  
			   google.charts.setOnLoadCallback(drawChart);  
			   function drawChart()  
			   {  
					var data = google.visualization.arrayToDataTable([  
							  ['ques1', 'Number'],  
							  <?php  
							  while($row = mysqli_fetch_array($result1))  
							  {  
								   echo "['".$row["ques1"]."', ".$row["number"]."],";  
							  }  
							  ?>  
						 ]);  
					var options = {  
						  title: ' Teacher provided the course outline having weekly content plan with list of  required text book ',  
						  is3D:true,  
						  pieHole: 0.4  
						 };  
					var chart = new google.visualization.PieChart(document.getElementById('piechart1'));  
					chart.draw(data, options);  
			   }  
			   </script> 
			   <br /><br />  
			   <div style="width:900px;">    
					<div id="piechart1" style="width: 900px; height: 500px;"></div>  
			   </div>	
      <!--script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script-->
		  <script type="text/javascript">  
			   google.charts.load('current', {'packages':['corechart']});  
			   google.charts.setOnLoadCallback(drawChart);  
			   function drawChart()  
			   {  
					var data = google.visualization.arrayToDataTable([  
							  ['ques2', 'Number'],  
							  <?php  
							  while($row = mysqli_fetch_array($result2))  
							  {  
								   echo "['".$row["ques2"]."', ".$row["number"]."],";  
							  }  
							  ?>  
						 ]);  
					var options = {  
						  title: ' Course objectives,learning outcomes and grading criteria are clear to me:',  
						  is3D:true,  
						  pieHole: 0.4  
						 };  
					var chart = new google.visualization.PieChart(document.getElementById('piechart2'));  
					chart.draw(data, options);  
			   }  
			   </script> 
			   <br /><br />  
			   <div style="width:900px;">    
					<div id="piechart2" style="width: 900px; height: 500px;"></div>  
			   </div>	
	   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
       <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['ques3', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result3))  
                          {  
                               echo "['".$row["ques3"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Course integrates throretical course concepts with the real world examples:',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart3'));  
                chart.draw(data, options);  
           }  
           </script>
		   <br /><br />  
			   <div style="width:900px;">    
					<div id="piechart3" style="width: 900px; height: 500px;"></div>  
			   </div>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['ques4', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result4))  
                          {  
                               echo "['".$row["ques4"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Teacher is punctual,arrives on time and leaves on time:',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart4'));  
                chart.draw(data, options);  
           }  
         </script>
		   <br /><br />  
			   <div style="width:900px;">    
					<div id="piechart4" style="width: 900px; height: 500px;"></div>  
			   </div>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['ques5', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result5))  
                          {  
                               echo "['".$row["ques5"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: ' Teacher is good at stimulating the interest in the course content:',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart5'));  
                chart.draw(data, options);  
           }  
         </script>
		   <br /><br />  
			   <div style="width:900px;">    
					<div id="piechart5" style="width: 900px; height: 500px;"></div>  
			   </div>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	  <script type="text/javascript">  
			   google.charts.load('current', {'packages':['corechart']});  
			   google.charts.setOnLoadCallback(drawChart);  
			   function drawChart()  
			   {  
					var data = google.visualization.arrayToDataTable([  
							  ['ques6', 'Number'],  
							  <?php  
							  while($row = mysqli_fetch_array($result6))  
							  {  
								   echo "['".$row["ques6"]."', ".$row["number"]."],";  
							  }  
							  ?>  
						 ]);  
					var options = {  
						  title: 'Teacher is good at explaining the subject matter:',  
						  is3D:true,  
						  pieHole: 0.4  
						 };  
					var chart = new google.visualization.PieChart(document.getElementById('piechart6'));  
					chart.draw(data, options);  
			   }  
			   </script> 
			   <br /><br />  
			   <div style="width:900px;">    
					<div id="piechart6" style="width: 900px; height: 500px;"></div>  
			   </div>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	  <script type="text/javascript">  
			   google.charts.load('current', {'packages':['corechart']});  
			   google.charts.setOnLoadCallback(drawChart);  
			   function drawChart()  
			   {  
					var data = google.visualization.arrayToDataTable([  
							  ['ques7', 'Number'],  
							  <?php  
							  while($row = mysqli_fetch_array($result7))  
							  {  
								   echo "['".$row["ques7"]."', ".$row["number"]."],";  
							  }  
							  ?>  
						 ]);  
					var options = {  
						  title: ' Teachers presentation was clear,loud ad easy to understand:',  
						  is3D:true,  
						  pieHole: 0.4  
						 };  
					var chart = new google.visualization.PieChart(document.getElementById('piechart7'));  
					chart.draw(data, options);  
			   }  
			   </script> 
			   <br /><br />  
			   <div style="width:900px;">    
					<div id="piechart7" style="width: 900px; height: 500px;"></div>  
			   </div>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
      <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['ques8', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result8))  
                          {  
                               echo "['".$row["ques8"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Teacher is good at using innovative teaching methods/ways:',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart8'));  
                chart.draw(data, options);  
           }  
           </script>    
           <br /><br />  
           <div style="width:900px;">    
                <div id="piechart8" style="width: 900px; height: 500px;"></div>  
           </div>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
      <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['ques9', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result9))  
                          {  
                               echo "['".$row["ques9"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Teacher is available and helpful during counseling hours:',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart9'));  
                chart.draw(data, options);  
           }  
           </script>    
           <br /><br />  
           <div style="width:900px;">    
                <div id="piechart9" style="width: 900px; height: 500px;"></div>  
           </div>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
      <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['ques10', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result10))  
                          {  
                               echo "['".$row["ques10"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Teacher has competed the whole course as per course outline:',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart10'));  
                chart.draw(data, options);  
           }  
           </script>   
           <br /><br />  
           <div style="width:900px;">    
                <div id="piechart10" style="width: 900px; height: 500px;"></div>  
           </div>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
      <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['ques11', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result11))  
                          {  
                               echo "['".$row["ques11"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Teacher was always fair and impartial:',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart11'));  
                chart.draw(data, options);  
           }  
           </script>   
           <br /><br />  
           <div style="width:900px;">    
                <div id="piechart11" style="width: 900px; height: 500px;"></div>  
           </div>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
       <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['ques12', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result12))  
                          {  
                               echo "['".$row["ques12"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Assessments conducted are clearly connected to maximize learining objectives:',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart12'));  
                chart.draw(data, options);  
           }  
           </script>    
           <br /><br />  
           <div style="width:900px;">    
                <div id="piechart12" style="width: 900px; height: 500px;"></div>  
           </div>
   </body>
	
</html>