
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
           
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Test Data</a>
                <!-- <a class="navbar-brand" href="index.html">Ayush Agro Farms</a> -->
            </div>
  

<ul class="nav navbar-top-links navbar-right">
<li>

<a class="dropdown-toggle" data-toggle="dropdown" href="#">
<i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
</a>

<ul class="dropdown-menu dropdown-user">

  <li>
      <a href="{{ route('logout') }}"
onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
<i class="fa fa-sign-out fa-fw"></i> Logout
</a>
  </li>




<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
{{ csrf_field() }}
</form>
</ul>


</li>
</ul>


            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                    <li><a href="{{ URL('dashboard') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>
                    <li><a href="{{ URL('manageContact') }}"><i class="fa fa-dashboard fa-fw"></i> Contacts </a></li>
                    <li><a href="{{ URL('manageLead') }}"><i class="fa fa-dashboard fa-fw"></i> Leads </a></li>
                    <li><a href="{{ URL('manageVendor') }}"><i class="fa fa-dashboard fa-fw"></i> Vendors </a></li>
                    <li><a href="{{ URL('manageProducts') }}"><i class="fa fa-dashboard fa-fw"></i> Products </a></li>
                    <li><a href="{{ URL('manageCategories') }}"><i class="fa fa-dashboard fa-fw"></i> Categories </a></li>
                    <li><a href="{{ URL('manageInventory') }}"><i class="fa fa-dashboard fa-fw"></i> Inventory </a></li>
                    <li><a href="{{ URL('manageStores') }}"><i class="fa fa-dashboard fa-fw"></i> Stores </a></li>
                    <li><a href="{{ URL('manageSales') }}"><i class="fa fa-dashboard fa-fw"></i> Sales </a></li>
                    <li><a href="{{ URL('manageStock') }}"><i class="fa fa-dashboard fa-fw"></i> Stock </a></li>
                    <li><a href="{{ URL('manageReplacements') }}"><i class="fa fa-dashboard fa-fw"></i> Replacements </a></li>
                    <li><a href="{{ URL('manageExpenses') }}"><i class="fa fa-dashboard fa-fw"></i> Expenses </a></li>

                    </ul>
                </div>
            </div>
            
        </nav>