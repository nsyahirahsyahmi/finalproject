
<nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Mahallah Asiah Cafe</a>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li class=""><a href="#">Menu</a></li>
        </ul>
        <form class="navbar-form navbar-left">
          
        </form>
        <ul class="nav navbar-nav navbar-right">
        <?php if(Session::has('user')): ?>
            <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo e(Session::get('user')['name']); ?>

            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/logout">Logout</a></li>
            </ul>
          </li>
          <?php else: ?>
          <li><a href="/login">Login</a></li>
          <li><a href="/register">Register</a></li>
          <?php endif; ?>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav><?php /**PATH C:\Users\sya23\Desktop\finalproject\resources\views/header.blade.php ENDPATH**/ ?>