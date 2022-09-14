<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js">
</head>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add-User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="adduser.php" >
      <input type="text" id="username" class="form-control" name="username" placeholder="username"><br>
      <input type="text" id="email" class="form-control" name="email" placeholder="email"><br>
      <input type="text" id="password" class="form-control " name="password" placeholder="password"><br>
   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
            
    </form>
    </div>
  </div>
</div>
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" style="background-color:#56baed" id="sidenavAccordion">
        <div class="sb-sidenav-menu ">
            <div class="nav p-4">
                
                
              
                <a class="nav-link" >
                    <div class="sb-nav-link-icon p-0"><i class="fas fa-tachometer-alt"></i></div>
                   <!-- Button trigger modal -->
                     <button type="button" style="font-size:20px; width: 120px;"class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      Add User 
                       </button>
                    </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Admin
        </div>
    </nav>
</div>