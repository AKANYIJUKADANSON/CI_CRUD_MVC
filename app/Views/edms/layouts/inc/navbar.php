<nav class="navbar navbar-expand-lg bg-secondary" style="border-radius: 0px 0px 20px 20px;">
  <div class="container-fluid ">

    <div class="canvastoggler" style="border: 2px solid gree">
      <span class="ms-3" style="padding: 3px 10px; border: 2px solid white; display: flex; justify-content: center; border-radius: 5px;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <i class="bi bi-list fw-bolder  text-white"></i>
      </span>
    </div>

    <div class="" style="border: 2px solid blac">
      <input type="search" placeholder="search ....">
    </div>


    <div class="d-flex justify-content-center" style="border: 2px solid re">
      <div class="me-4" style="border: 2px solid blac">
        <i id="setFullScreenIcon" class="bi bi-arrows-fullscreen text-white fs-4"></i>
      </div>

      <div class="dropdown" style="border: 2px solid re">
        <a class="nav-link dropdown-toggle text-white fs-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <img class="my-auto rounded-circle mb-1" style="width: 30px; height: 30px;" src="<?=base_url('assets/img/user.jpg')?>" alt="">
          <!-- Profile pic -->
           
          <span class="my-auto text-white"><?= "GIBREAL" ?></span>
        </a>

        <ul class="dropdown-menu mt-2">
            <li><a class="dropdown-item fw-bolder text-secondary" href="#">
              <i class="bi bi-gear-fill  me-2"></i>
              Settings
            </a></li>
            <li><a class="dropdown-item fw-bolder text-secondary" href="/edms/dashboard">
            <i class="bi bi-lock-fill me-2"></i>
            Logout
            </a></li>
        </ul>
      </div>
    </div>

    <script>

      let icon = document.getElementById('setFullScreenIcon');
      var elem = document.documentElement;

      icon.addEventListener("click", ()=>{
        if(icon.className == "bi bi-arrows-fullscreen text-white fs-4"){
          openFullscreen()
          icon.className = "bi bi-fullscreen-exit text-white fs-4";
        }
        else{
          icon.className = "bi bi-arrows-fullscreen text-white fs-4";
          closeFullscreen()
        }
      })

      /* View in fullscreen */
      function openFullscreen() {
        if (elem.requestFullscreen) {
          elem.requestFullscreen();
        } else if (elem.webkitRequestFullscreen) { /* Safari */
          elem.webkitRequestFullscreen();
        } else if (elem.msRequestFullscreen) { /* IE11 */
          elem.msRequestFullscreen();
        }
      }

      /* Close fullscreen */
      function closeFullscreen() {
        if (document.exitFullscreen) {
          document.exitFullscreen();
        } else if (document.webkitExitFullscreen) { /* Safari */
          document.webkitExitFullscreen();
        } else if (document.msExitFullscreen) { /* IE11 */
          document.msExitFullscreen();
        }
      }
    </script>
  </div>
</nav>