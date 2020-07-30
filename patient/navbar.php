<?php 
require_once 'header.php';
    
?>
<Style>
  /* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  margin-top: 1.15em;
  width: 36px;
  height: 20px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

.avail-margin{
  margin-top: 1.15em;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 15px;
  width: 15px;
  left: 4px;
  bottom: 3px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(14px);
  -ms-transform: translateX(14px);
  transform: translateX(14px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</Style>
<header class="main-header">

    <!-- Logo -->
    <a href="dashboard" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>U</b> M</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Ustaad Mechanic </b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        <li class="avail-margin"><strong>Available</strong> &nbsp;</li>
        <li>
          <!-- Rounded switch -->
          <label class="switch">
            <input type="checkbox" name="available" id="avail">
            <span class="slider round"></span>
          </label>
        </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="logout" class="btn btn-danger">
                <i class="fa fa-sign-out"></i>Log Out
            </a>
          </li>
        
        </ul>
      </div>

    </nav>
  </header>
  