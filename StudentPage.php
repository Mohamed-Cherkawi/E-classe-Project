<?php     
   $StudentTable = array(
    array (
    'Name' => 'Karthi' ,
    'Email' => 'user@email.com',
    'Phone' => '7305477760' ,
    'Email Number' => '12344567305477760' ,
    'Date of Admission' => '08-Dec,2021' ,
    ),
    array (
        'Name' => 'Mohamed' ,
        'Email' => 'user@email.com',
        'Phone' => '7305477760' ,
        'Email Number' => '12344567305477760' ,
        'Date of Admission' => '08-Dec,2021' ,
        ),
        array (
            'Name' => 'Salima' ,
            'Email' => 'user@email.com',
            'Phone' => '7305477760' ,
            'Email Number' => '12344567305477760' ,
            'Date of Admission' => '08-Dec,2021' ,
            ),
            array (
                'Name' => 'Fouad' ,
                'Email' => 'user@email.com',
                'Phone' => '7305477760' ,
                'Email Number' => '12344567305477760' ,
                'Date of Admission' => '08-Dec,2021' ,
                ),
                array (
                    'Name' => 'Firdaouss' ,
                    'Email' => 'user@email.com',
                    'Phone' => '7305477760' ,
                    'Email Number' => '12344567305477760' ,
                    'Date of Admission' => '08-Dec,2021' ,
                    ),
                    array (
                        'Name' => 'Rabiaa' ,
                        'Email' => 'user@email.com',
                        'Phone' => '7305477760' ,
                        'Email Number' => '12344567305477760' ,
                        'Date of Admission' => '08-Dec,2021' ,
                        ),
                        array (
                            'Name' => 'Adil' ,
                            'Email' => 'user@email.com',
                            'Phone' => '7305477760' ,
                            'Email Number' => '12344567305477760' ,
                            'Date of Admission' => '08-Dec,2021' ,
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
    <title>Student Page</title>
    <style>
        .btn {
            padding:  0.375rem 1.5rem;
            color: white;
            font-weight: lighter;
        }
        .table tbody td:first-child {
            border-bottom-left-radius: 10px;
            border-top-left-radius: 10px
        }

        .table tbody td:last-child {
            border-bottom-right-radius: 10px;
            border-top-right-radius: 10px
        }
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="d-flex" id="wrapper">
           
     <?php include 'sidebar.php';
             echo '<!-- Page Content -->
             <div id="page-content-wrapper" style="background:  #FFFFFF;">' ;
           include 'navbar.php';
   ?>

            <!--   Page Content   -->
          <main> 
            <div class="container-fluid">
                <div class="d-flex justify-content-between py-3  border-bottom border-5">
                <h2 class="fw-bold">Students List</h2>
                <div>
                <i class="bi bi-chevron-expand fs-3 text-info me-4"></i>
                <button type="button" class="btn btn-info">ADD NEW STUDENT</button>    
                </div>
               </div>
               <table class="table   overflow-scroll">
                <thead style="display: none;">
                  <tr>
                    <th scope="col">#</th>
                  </tr>
                </thead>
                <tbody class="border-top-0">
                    <tr>
                    <td></td>
                    <td  class="text-secondary p-3">Name</td>
                    <td  class="text-secondary p-3">Email</td>
                    <td  class="text-secondary p-3">Phone</td>
                    <td  class="text-secondary p-3">Email Number</td>
                    <td  class="text-secondary p-3" colspan="2">Date of admission</td>
                     
                    </tr>
                    <tr>
                        <td style="display: none;"></td>
                    </tr>
               <?php foreach($StudentTable as $stu) :  ?>
                  <tr class="bg-white t-rows">    
                      <td>
                        <img  src="images/image.jpg" alt="Groupe of Students" width="80">
                      </td>
                      <td class="p-3 align-middle">
                       <?php echo $stu['Name'] ; ?>
                      </td>
                      <td class="p-3 align-middle">
                      <?php echo $stu['Email'] ; ?>
                      </td>
                      <td class="p-3 align-middle">
                      <?php echo $stu['Phone'] ; ?>
                      </td>
                      <td class="p-3 align-middle">
                      <?php echo $stu['Email Number'] ; ?>  
                      </td>
                      <td class="p-3 align-middle">
                      <?php echo $stu['Date of Admission'] ; ?>   
                      </td>
                      <td class="p-3 align-middle">
                       <a href="#"> <i class="bi bi-pencil fs-4 text-info"></i> </a> 
                       <a href="#"> <i class="bi bi-trash fs-4 ms-4 text-info"></i></a>
                      </td>
                  </tr>
                <tr>
                    <td></td>
                </tr>
                <?php endforeach ;  ?>

                            
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