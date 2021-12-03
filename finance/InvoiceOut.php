<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Invoice Out</title>
	<link rel="stylesheet" type="text/css" href="asset/css/stylenav.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="asset/css/inistyle.css">
  <script src="js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">

</head>
<body>

<input type="checkbox" id="check">
    <label for="check"> 
    <i class="bi bi-list" id="btn"></i>
    <i class="bi bi-x-lg" id="cancel"></i>
    </label>
    <div class="sidebar">
      <div class="akun">
        <img src="asset/img/oke.jpg" height="70px" width="70px">
        <p>Nama Akun</p>
      </div>
      <br>

      <div class="garis"></div>
      
      <a href="berandafl.php">
      <i class="bi bi-house-door"></i>
        <span>BERANDA</span>
      </a>
      <a class="nav-link dropdown-toggle active" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="bi bi-file-earmark-text"></i>
            <span>INVOICE</span>
      </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="newinvoiceW.php">Invoice Out</a></li>
            <li><a class="dropdown-item" href="newinvoiceI.php">Invoice in</a></li>
          </ul>
      <a href="">
      	<i class="bi bi-receipt-cutoff"></i>
      	<span>BAST</span>
      </a>
      <a href="">
      	<i class="bi bi-send"></i>
      	<span>SEND</span>
      </a>
      <a href="#">
<i class="bi bi-box-arrow-right"></i>
        <span>LOG OUT</span>
      </a>
    </div>

    <div id="konten">

  <div class="container-xxl">

        
    <div class="container-lg">

<div class="row">

<div class="col">
<div class="judul">
<h1>Invoice Out</h1>
<p>Untuk 1 tahun terakhir</p>
</div>
</div>

<div class="col" style="text-align: right; font-size: 25px;">
	<i class="bi bi-bell"></i>
</div>

</div>

<div class="row">
  <div class="col" style="text-align: right;">
    <div class="btn-group">
  <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    New Invoice
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="newinvoiceI.php">Item Base</a></li>
    <li><a class="dropdown-item" href="newinvoiceW.php">Word Base</a></li>
  </ul>
</div>
      <button type="button" class="btn btn-primary" style="width: 70px; margin-left: 15px;">
        <i class="bi bi-printer"></i>
      </button>

    </div>
</div>

<br>

  <div class="row">
    <div class="col">
      <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
    </form>
    </div>
  </div>


<!-- table -->
  <br>

<table class="table table-bordered">
  <thead>
    <tr class="table-dark">
      <th scope="col">No. Invoice</th>
      <th scope="col">Client Name</th>
      <th scope="col">Project Name</th>
      <th scope="col">Employee Name</th>
      <th scope="col">Cost In IDR</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">XXX</th>
      <td>XXX</td>
      <td>XXX</td>
      <td>XXX</td>
      <td>Rp. 1.000.000</td>
      <td width="130px"><button type="button" class="btn btn-outline-success" style="margin-right: 15px;"><i class="bi bi-pencil-square"></i></button>
          <button type="button" class="btn btn-outline-danger"><i class="bi bi-trash-fill"></i></button>
      </td>
    </tr>
    <tr>
      <th scope="row">XXX</th>
      <td>XXX</td>
      <td>XXX</td>
      <td>XXX</td>
      <td>Rp. 1.000.000</td>
      <td width="130px"><button type="button" class="btn btn-outline-success" style="margin-right: 15px;"><i class="bi bi-pencil-square"></i></button>
          <button type="button" class="btn btn-outline-danger"><i class="bi bi-trash-fill"></i></button>
      </td>
    </tr>
    <tr>
      <th scope="row">XXX</th>
      <td>XXX</td>
      <td>XXX</td>
      <td>XXX</td>
      <td>Rp. 1.000.000</td>
      <td width="130px"><button type="button" class="btn btn-outline-success" style="margin-right: 15px;"><i class="bi bi-pencil-square"></i></button>
          <button type="button" class="btn btn-outline-danger"><i class="bi bi-trash-fill"></i></button>
      </td>
    </tr>
    <tr>
      <th scope="row">XXX</th>
      <td>XXX</td>
      <td>XXX</td>
      <td>XXX</td>
      <td>Rp. 1.000.000</td>
      <td width="130px"><button type="button" class="btn btn-outline-success" style="margin-right: 15px;"><i class="bi bi-pencil-square"></i></button>
          <button type="button" class="btn btn-outline-danger"><i class="bi bi-trash-fill"></i></button>
      </td>
    </tr>
    <tr>
      <th scope="row">XXX</th>
      <td>XXX</td>
      <td>XXX</td>
      <td>XXX</td>
      <td>Rp. 1.000.000</td>
      <td width="130px"><button type="button" class="btn btn-outline-success" style="margin-right: 15px;"><i class="bi bi-pencil-square"></i></button>
          <button type="button" class="btn btn-outline-danger"><i class="bi bi-trash-fill"></i></button>
      </td>
    </tr>
    <tr>
      <th scope="row">XXX</th>
      <td>XXX</td>
      <td>XXX</td>
      <td>XXX</td>
      <td>Rp. 1.000.000</td>
      <td width="130px"><button type="button" class="btn btn-outline-success" style="margin-right: 15px;"><i class="bi bi-pencil-square"></i></button>
          <button type="button" class="btn btn-outline-danger"><i class="bi bi-trash-fill"></i></button>
      </td>
    </tr>
    <tr>
      <th scope="row">XXX</th>
      <td>XXX</td>
      <td>XXX</td>
      <td>XXX</td>
      <td>Rp. 2.000.000</td>
      <td width="130px"><button type="button" class="btn btn-outline-success" style="margin-right: 15px;"><i class="bi bi-pencil-square"></i></button>
          <button type="button" class="btn btn-outline-danger"><i class="bi bi-trash-fill"></i></button>
      </td>
    </tr>
    <tr>
      <th scope="row">XXX</th>
      <td>XXX</td>
      <td>XXX</td>
      <td>XXX</td>
      <td>Rp. 2.500.000</td>
      <td width="130px"><button type="button" class="btn btn-outline-success" style="margin-right: 15px;"><i class="bi bi-pencil-square"></i></button>
          <button type="button" class="btn btn-outline-danger"><i class="bi bi-trash-fill"></i></button>
      </td>
    </tr>
    </tr>
    <tr>
      <th scope="row">XXX</th>
      <td>XXX</td>
      <td>XXX</td>
      <td>XXX</td>
      <td>Rp. 3.500.000</td>
      <td width="130px"><button type="button" class="btn btn-outline-success" style="margin-right: 15px;"><i class="bi bi-pencil-square"></i></button>
          <button type="button" class="btn btn-outline-danger"><i class="bi bi-trash-fill"></i></button>
      </td>
    </tr>
  </tbody>
</table>


<div class="kaki">
  <div class="container">
    <div class="row">

<div class="col-6">
  <p>Showing 1-4 of 4 entries</p>
</div>


<div class="col-2">
  <!--biarin kosong-->
</div>


<div class="col-4">
<nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link"><</a>
    </li>
    <li class="page-item active" aria-current="page"><a class="page-link" >1</a></li>
    <li class="page-item">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">></a>
    </li>
  </ul>
</nav>
</div>

    </div>
  </div>
</div>

</div>

</div>

</div>


</body>
</html>
