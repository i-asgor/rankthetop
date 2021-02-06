 <!-- ========== Left Sidebar Start ========== -->

 <div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="#" class="waves-effect active"><i class="md md-home"></i><span> Dashboard </span></a>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="md md-mail"></i><span> Mail </span><span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="#">Inbox</a></li>
                        <li><a href="#">Compose Mail</a></li>
                        <li><a href="#">View Mail</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ url('/admin/banners') }}" class="waves-effect"><i class="md md-event"></i><span> Slider </span></a>
                </li>  
                <li>
                    <a href="{{ url('/admin/contacts') }}" class="waves-effect"><i class="md md-event"></i><span> Contacts </span></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- Left Sidebar End --> 