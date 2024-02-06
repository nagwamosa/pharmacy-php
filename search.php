<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<style>
        body{
        background-image :url("1.webp");
            height: 500px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
    }
    .topnav {
        overflow: hidden;
        background-color: #ddd;
    }

    /* Style the links inside the navigation bar */
    .topnav a {
        float: right;
        color: #ddd;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
        color: #10054a;
    }

    /* Change the color of links on hover */
    .topnav a:hover {
        background-color: #202021;
        color: #f2f2f2;
    }

    .topnav {
        margin: 20px;
        

    }
    #myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 50%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
  margin-left: 20px;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 70%;
  margin-left: 20px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

    <div class="topnav">
    <a href="search.php">Home</a>
                <a href="#" class="active">Report</a>
                <a href="Bill.html">Bill</a>   
                <a href="AddCustomer.html">Add Customers</a> 
                <a href="login.html">Logout</a>

    </div>
  
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names or Effective.." title="Type in a name">

<br><br>

<table>
  <thead>
  <tr>
    <th>Name</th>
    <th>Effective</th>
    <th>price</th>
    <th>Quntity</th>
    <th>Add</th> 
  </tr>
  </thead>
  <tbody id="myTable">
  <tr>
    <td>Apalutamide</td>
    <td>Antiandrogens, Hormones / antineoplastics</td>
    <td>100$</td>
    <td>200</td>
    <td>
        <a href="Bill.html" class="Add" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Bill">&#xE254;</i></a>
    </td>
  </tr>
  <tr>
    <td>Neurontin</td>
    <td>Gamma-aminobutyric acid analogs</td>
    <td>25$</td>
    <td>100</td>
    <td>
        <a href="Bill.html" class="Add" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Bill">&#xE254;</i></a>
    </td>
  </tr>
  <tr>
    <td>Pandel</td>
    <td>Topical steroids</td>
    <td>74$</td>
    <td>740</td>
    <td>
        <a href="Bill.html" class="Add" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Bill">&#xE254;</i></a>
    </td>
  </tr>
  <tr>
    <td>Moduretic</td>
    <td> Potassium sparing diuretics</td>
    <td>80&</td>
    <td>250</td>
    <td>
        <a href="Bill.html" class="Add" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Bill">&#xE254;</i></a>
    </td>
  </tr>
  </tbody>
</table>
  


</body>
</html>
