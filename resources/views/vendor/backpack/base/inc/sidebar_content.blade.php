<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<?php
use App\Http\Services\RightService;
if(!backpack_user()->hasRole(RightService::ADMIN))
{
    return redirect()->route('error401');
}
?>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<!-- Users, Roles, Permissions -->
@if(backpack_user()->hasRole(App\Http\Services\RightService::ADMIN))
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i> Authentication</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>Users</span></a></li>

    </ul>
</li>


<li class='nav-item'><a class='nav-link' href='{{ backpack_url('page') }}'><i class='nav-icon la la-file-o'></i> <span>Pages</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('menu-item') }}"><i class="nav-icon la la-list"></i> <span>Menu</span></a></li>


 <li class='nav-item'><a class='nav-link' href='{{ backpack_url('log') }}'><i class='nav-icon la la-terminal'></i> Logs</a></li>

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-list"></i> Static Info</a>
    <ul class="nav-dropdown-items">
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('static-trans') }}'><i class='nav-icon la la-globe'></i> Static trans</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('static-file') }}'><i class='nav-icon la la-list'></i> Static files</a></li>
    </ul>
</li>


<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-list"></i> MainPage</a>
    <ul class="nav-dropdown-items">
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('static-trans') }}'><i class='nav-icon la la-list'></i> Benefits</a></li>
    </ul>
</li>



<li class='nav-item'><a class='nav-link' href='{{ backpack_url('seo') }}'><i class='nav-icon la la-list'></i> Seo</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('request') }}'><i class='nav-icon la la-list'></i> Заявки</a></li>

@endif
