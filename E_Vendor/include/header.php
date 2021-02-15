<style>
        .dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}
    </style>
    
<div class="navbar navbar-inverse" style='background-color: #112d32;'>
        <div class="container-fluid">
            <div class="row">
                    <div class="navbar-header">
                        <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                        <a href="index.php" class="navbar-brand" style="font:italic bold 18px sans-serif; ">E-Vendor</a>
                    </div>

                    <div class="navbar-collapse collapse" id="mobile_menu">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.php" style="font:italic bold 17px sans-serif; ">Home</a></li>
                             <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="font:italic bold 17px sans-serif;">Category <b class="caret"></b></a>
                    <ul class="dropdown-menu multi-level">
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Electronics</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fashion</a>
                            <ul class="dropdown-menu">
                    
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Clothing</a>
                                    <ul class="dropdown-menu">
        
                                                <li><a href="#">Women's Wear</a></li>
                                                <li><a href="#">Men's Wear</a></li>
                                                <li><a href="#">Boy's Wear</a></li>
                                                <li><a href="#">Boy's Wear</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Child's Wear</a></li>
                                    </ul>
                             
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Footwear</a>
                                    <ul class="dropdown-menu">
                                       <li><a href="#">Women's Footwear</a></li>
                                                <li><a href="#">Men's Footwear</a></li>
                                                <li><a href="#">Boy's Footwear</a></li>
                                                <li><a href="#">Boy's Footwear</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Child's Footwear</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home Appliances</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                               
                            </ul>
                        </li>
                    </ul>
                </li>
                            <li><a href="about_page.php" style="font:italic bold 17px sans-serif;">About Us</a></li>
                            <li><a href="#" style="font:italic bold 17px sans-serif;">Services</a></li>
                            <li><a href="sell_page.php" style="font:italic bold 17px sans-serif;">Sell</a></li>
                            <li><a href="contact_page.php" style="font:italic bold 17px sans-serif;">Contact Us</a></li>
                         <li>
                        </ul>
                        
                        <ul class="nav navbar-nav">
                            <li> <form action="" class="navbar-form">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="search" name="search" id="" placeholder="Search Anything Here..." class="form-control">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                                        </div>
                                    </div>
                                </form>
                            </li>
                            <li><a href="#" style="font:italic bold 17px sans-serif; "><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                             <li><a href="login_signup_page.php" style="font:italic bold 17px sans-serif; "><span class="glyphicon glyphicon-log-in"></span> Login / Sign Up</a></li>
                             <li><a href="cart_page.php" style="font:italic bold 17px sans-serif; "><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
                            
                        </ul>
                    </div>
               
            </div>
        </div>
    </div>


