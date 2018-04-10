<html><head>
<title>GPA Calculator</title>
<script type = 'text/javascript' src = "<?php echo base_url();?>js/gpa.js"></script>
</head>
<body waid71fa0d88-5390-4b5b-a2f4-e45fa93d85e2="SA password protect entry checker">
<form name="classes" method="post" onsubmit="updateCreditsGpa(); return false">
<table border="0" width="468">
<tbody id="classes_tbody">
<tr>
<th align="left">Class</th><th align="left">Credits</th><th align="left">Letter Grade</th>
</tr>
<tr>
<td><input size="15"></td>
<td><input size="15" onchange="updateCreditsGpa()"></td>
<td><input size="15" onchange="updateCreditsGpa()"></td>
</tr>
<tr>
<td><input size="15"></td>
<td><input size="15" onchange="updateCreditsGpa()"></td>
<td><input size="15" onchange="updateCreditsGpa()"></td>
</tr>
<tr>
<td><input size="15"></td>
<td><input size="15" onchange="updateCreditsGpa()"></td>
<td><input size="15" onchange="updateCreditsGpa()"></td>
</tr>
<tr>
<td><input size="15"></td>
<td><input size="15" onchange="updateCreditsGpa()"></td>
<td><input size="15" onchange="updateCreditsGpa()"></td>
</tr>
<tr>
<td><input size="15"></td>
<td><input size="15" onchange="updateCreditsGpa()"></td>
<td><input size="15" onchange="updateCreditsGpa()"></td>
</tr>
<tr>
<td><input size="15"></td>
<td><input size="15" onchange="updateCreditsGpa()"></td>
<td><input size="15" onchange="updateCreditsGpa()"></td>
</tr>
<tr>
<td><input size="15"></td>
<td><input size="15" onchange="updateCreditsGpa()"></td>
<td><input size="15" onchange="updateCreditsGpa()"></td>
</tr>
<tr>
<td><input size="15"></td>
<td><input size="15" onchange="updateCreditsGpa()"></td>
<td><input size="15" onchange="updateCreditsGpa()"></td>
</tr>
<tr>
<td><input size="15"></td>
<td><input size="15" onchange="updateCreditsGpa()"></td>
<td><input size="15" onchange="updateCreditsGpa()"></td>
</tr>
<tr>
<td><input size="15"></td>
<td><input size="15" onchange="updateCreditsGpa()"></td>
<td><input size="15" onchange="updateCreditsGpa()"></td>
</tr>
<tr>
<td><input size="15"></td>
<td><input size="15" onchange="updateCreditsGpa()"></td>
<td><input size="15" onchange="updateCreditsGpa()"></td>
</tr>
<tr>
<td><input size="15"></td>
<td><input size="15" onchange="updateCreditsGpa()"></td>
<td><input size="15" onchange="updateCreditsGpa()"></td>
</tr>
</tbody>
</table>
</form>
<br>
<script language="Javascript">
if (document.createElement) {
    document.writeln('<form><input type="button" value="Add Class" onClick="addNewClass()"></form><br>');
}
</script><form><input type="button" value="Add Class" onclick="addNewClass()"></form><br>

<form name="results" method="post" onsubmit="return false">
<table border="0" width="468">
<tbody><tr>
<td>Total Credits: <input name="total_credits" size="10"></td>
<td>GPA: <input name="gpa" size="10"></td>
<td><input type="button" value="Calculate" onclick="updateCreditsGpa()"></td>
</tr>
</tbody></table>
</form>
<br>
<table border="0">
<tbody><tr>
<td>A+</td><td>4.3</td>
</tr>
<tr>
<td>A</td><td>4.0</td>
</tr>
<tr>
<td>A-</td><td>3.7</td>
</tr>
<tr>
<td>B+</td><td>3.3</td>
</tr>
<tr>
<td>B</td><td>3.0</td>
</tr>
<tr>
<td>B-</td><td>2.7</td>
</tr>
<tr>
<td>C+</td><td>2.3</td>
</tr>
<tr>
<td>C</td><td>2.0</td>
</tr>
<tr>
<td>F1</td><td>1.7</td>
</tr>
<tr>
<td>F2</td><td>1.3</td>
</tr>
<tr>
<td>F</td><td>0.0</td>
</tr>
<tr>
<td>N</td><td>No Grade Available</td>
</tr>
</tbody></table>

</body></html>