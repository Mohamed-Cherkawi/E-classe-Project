<?php     
   $PaymentTable = array(
    array (
    'Name' => 'Karthi' ,
    'Payment Schedule' => 'First',
    'Bill Number' => '0001223' ,
    'Amount Paid' => 'DHS 100,000' ,
    'Balance Amount' => 'DHS 500,000' ,
    'Date' => '05-Jan,2022' 
    ),
    array (
        'Name' => 'Karthi' ,
        'Payment Schedule' => 'First',
        'Bill Number' => '0001223' ,
        'Amount Paid' => 'DHS 100,000' ,
        'Balance Amount' => 'DHS 500,000' ,
        'Date' => '05-Jan,2022'   
    ) ,
    array (
      'Name' => 'Karthi' ,
      'Payment Schedule' => 'First',
      'Bill Number' => '0001223' ,
      'Amount Paid' => 'DHS 100,000' ,
      'Balance Amount' => 'DHS 500,000' ,
      'Date' => '05-Jan,2022'   
  ) ,
  array (
    'Name' => 'Karthi' ,
    'Payment Schedule' => 'First',
    'Bill Number' => '0001223' ,
    'Amount Paid' => 'DHS 100,000' ,
    'Balance Amount' => 'DHS 500,000' ,
    'Date' => '05-Jan,2022'   
)
    );

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/styleX.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Page de Payment</title>
   
</head>
<body>

    <div class="d-flex" id="wrapper">

     <?php include 'sidebar.php';
     echo '<!-- Page Content -->
     <div id="page-content-wrapper" style="background: #FFFFFF;">' ;
           include 'navbar.php';
   ?>

    <main>     
     <div class="container-fluid">
         <div class="d-flex justify-content-between py-3  border-bottom border-5">
         <h2 class="fw-bold">Payment Details</h2>
         <i class="bi bi-chevron-expand fs-3 text-info"></i>
        </div>
          
    <table class="table table-hover table-striped overflow-scroll">
        <thead style="display: none;">
          <tr >
            <th scope="col">#</th>
          </tr>
        </thead>
        <tbody class="border-top-0">
            <tr>
            <td  class="text-secondary p-3">Name</td>
            <td  class="text-secondary p-3">Payment Schedule</td>
            <td  class="text-secondary p-3">Bill Number</td>
            <td  class="text-secondary p-3">Amount Paid</td>
            <td  class="text-secondary p-3">Balance amount</td>
            <td  class="text-secondary p-3" colspan="2">Date</td>  
          </tr>
          <?php foreach ( $PaymentTable as  $value ) : ?>
          <tr>
              <td class="text-black p-3"><?php echo $value['Name'] ; ?></td>
              <td class="text-black p-3"><?php echo $value['Payment Schedule'] ; ?></td>
              <td class="text-black p-3"><?php echo $value['Bill Number'] ; ?></td>
              <td class="text-black p-3"><?php echo $value['Amount Paid'] ; ?></td>
              <td class="text-black p-3"><?php echo $value['Balance Amount'] ; ?></td>
              <td class="text-black p-3"><?php echo $value['Date'] ; ?></td>
              <td class="p-3"><i class="bi bi-eye text-info"></i></td>
          </tr>
          <?php endforeach ; ?>
          
            
        </tbody>
      </table>
         </div>  
       </main>  
     </div>
     
  </div> 
    
    <script
    src="js/E-classe-Project.js"
   
  ></script>
  <script>
      var el = document.getElementById("wrapper");
      var toggleButton = document.getElementById("menu-toggle");

      toggleButton.onclick = function () {
          el.classList.toggle("toggled");
      };
  </script>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>