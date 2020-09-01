    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">

                <h6>                <img src="https://is5-ssl.mzstatic.com/image/thumb/Purple124/v4/b6/c3/cb/b6c3cb54-5fd6-3d1f-7b13-255aa6e56b3e/AppIcon-0-0-1x_U007emarketing-0-0-0-7-0-0-sRGB-0-0-0-GLES2_U002c0-512MB-85-220-0-0.png/1200x630wa.png" style="border-radius: 50%" width="50px" height="40px">
                My Company &nbsp;></h6>

            </div>
            <ul class="list-unstyled components">
                <li class="selected"><a href="#" ><span class="spli fa fa-home"></span>Home</a></li>
                <li><a href="#"><span class="spli fa fa-users"></span>Parties</a></li>
                <li><a href="#"><span class="spli fa fa-square"></span>Items</a></li>

                <li >
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class=" spli fa fa-file"></span>Sale</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu" role="menu">
                        <li>
                            <a href="#">Sale Invoice &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;+</a>
                        </li>
                        <li>
                            <a href="#">Estimates/Quotations &nbsp; &nbsp; &nbsp;&nbsp;+</a>
                        </li>
                        <li>
                            <a href="#">Payment In &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;+</a>
                        </li>
                            <li>
                            <a href="#">Sale Order&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;+</a>
                        </li>
                        <li>
                            <a href="#">Delivery Challan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  +</a>
                        </li>
                        <li>
                            <a href="#">Sale return/Cr. Note&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;+</a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class=" spli fa fa-shopping-cart"></span>Purchase</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Purchase Bill&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp +</a>
                        </li>
                        <li>
                            <a href="#">Payment out&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;+</a>
                        </li>
                                                <li>
                            <a href="#">Purchase Order&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;+</a>
                        </li>
                        <li>
                            <a href="#">Purchase Return/Dr.Note&nbsp; &nbsp; +</a>
                        </li>

                    </ul>
                </li>
                <li><a href="#"><span class=" spli fa fa-briefcase"></span>Expenses</a></li>
                <li>

                  <a style="    border-bottom: 2px solid #47748b;
                    " href="#Submenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class=" spli fa fa-university"></span>Cash & Bank</a>
                    <ul class="collapse list-unstyled" id="Submenu">
                        <li>
                            <a href="#">Bank Account&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;+</a>
                        </li>

                <li>
                    <a href="#">Cash in hand&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp+</a>
                </li>
                                        <li>
                            <a href="#">Cheques&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;+</a>
                        </li>
                        <li>
                            <a href="#">Loan Accounts&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;+</a>
                        </li>

            </ul>
        </li>
                <li>
                    <a href="#"><span class=" spli fa fa-align-right"></span>Reports</a>
                </li>
               <li><a href="#"><span class=" spli fa fa-cog"></span>Settings</a>   </li>


            </ul>

        </nav>






        <!-- Page Content Holder -->
        <div id="content">
        <button type="button" id="sidebarCollapse" class="navbar-btn float-left">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div id="content-area">
            
        </div>
    </div>
        <button  class="add btn btn-light btn-lg ">+ Add Sale Invoice</button>   







    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });

        });
        $(document).ready(function () {
            $('li').on('click', function () {
                $('li').removeClass('selected');
                $(this).addClass('selected');   
            });

        });

        $(document).ready(function () {
            $('.add').on('click', function () {
                $(this).addClass('hidden');
                $('#sidebar').addClass('active');
                $("#sidebarCollapse").addClass('hidden');
                $("#content-area").load('pages/addsaleinvoice.php');
            });

        });
    </script>
</body>

</html>