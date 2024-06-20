<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />

    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <header>
      <!-- place navbar here -->
    </header>
    <main>

    <div class="portfolio">
        <div class="container">
        <?php 
      include('config.php');

      $sql="SELECT * FROM `projects`";

      $result=mysqli_query($con,$sql);
      if (mysqli_num_rows($result)>0) {
          echo "<div
          class='table-responsive'
        >
          <table
            class='table table-primary'
          >
            <thead>
              <tr>
              <th scope='col'>  <a 
              name=''
              id=''
              class='btn btn-primary'
              href='addprojects.html'
              role='button'
              >Add Projects</a
            ></th>
                <th scope='col'>id</th>
                <th scope='col'>Name</th>
                <th scope='col'>image</th>
                <th scope='col'>description</th>
                <th scope='col'>Action</th>
                
              </tr>
            </thead>
            <tbody>";
          while ($rows=mysqli_fetch_assoc($result)) {
            echo " <tr class=''>
            <td scope='row'></td>
            
            <td scope='row'>{$rows['id']}</td>
            <td>{$rows['project_name']}</td>
            <td><img
            src='img/{$rows['project_images']}'
            class='img-fluid rounded-top'
            style='height: 100px; width: 100px';
            alt=''
          /></td>
            <td>{$rows['project_desc']}</td>
            <td><a
              name=''
              id=''
              class='btn btn-primary'
              href='delete.php?id={$rows['id']}'
              role='button'
              >Delete</a
            >

            </td>
          </tr>";
          
          }
          echo "

          
     
          </tbody>
        </table>
      </div>
      ";
      }
      
      mysqli_close($con);
      ?>
        </div>
      </div>
     
    </main>
    <footer>
      <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
