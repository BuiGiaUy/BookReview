@extends("layouts.adminLayoutPage")
@section('content')
    <!-- TOP Nav Bar END -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Category list</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div id="table" class="table-editable">
                              <span class="table-add float-right mb-3 mr-2">
                              <a href="{{route('admin.category.add')}}" class="btn btn-sm iq-bg-success"><i
                                          class="ri-add-fill"><span class="pl-1">Add New</span></i>
                              </a>
                              </span>
                            <table class="table table-bordered table-responsive-md table-striped text-center">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>PRODUCT NAME</th>
                                    <th>SLUG</th>
                                    <th>ACTIONS</th>
                                </tr>
                                </thead>
                                <tbody>
                                @include("admin.content.category.row_table",["categories"=>$categories, "level"=>0])
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    <div class="content">--}}
    {{--        <!-- BEGIN: Top Bar -->--}}
    {{--        <div class="top-bar -mx-4 px-4 md:mx-0 md:px-0">--}}
    {{--            <!-- BEGIN: Breadcrumb -->--}}
    {{--            <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">--}}
    {{--                <ol class="breadcrumb">--}}
    {{--                    <li class="breadcrumb-item"><a href="#">Application</a></li>--}}
    {{--                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>--}}
    {{--                </ol>--}}
    {{--            </nav>--}}
    {{--            <!-- END: Breadcrumb -->--}}
    {{--            <!-- BEGIN: Search -->--}}
    {{--            <div class="intro-x relative mr-3 sm:mr-6">--}}
    {{--                <div class="search hidden sm:block">--}}
    {{--                    <input type="text" class="search__input form-control border-transparent" placeholder="Search...">--}}
    {{--                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="search" data-lucide="search" class="lucide lucide-search search__icon dark:text-slate-500"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>--}}
    {{--                </div>--}}
    {{--                <a class="notification sm:hidden" href=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="search" data-lucide="search" class="lucide lucide-search notification__icon dark:text-slate-500"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg> </a>--}}
    {{--                <div class="search-result">--}}
    {{--                    <div class="search-result__content">--}}
    {{--                        <div class="search-result__content__title">Pages</div>--}}
    {{--                        <div class="mb-5">--}}
    {{--                            <a href="" class="flex items-center">--}}
    {{--                                <div class="w-8 h-8 bg-success/20 dark:bg-success/10 text-success flex items-center justify-center rounded-full"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="inbox" class="lucide lucide-inbox w-4 h-4" data-lucide="inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 002 2h16a2 2 0 002-2v-6l-3.45-6.89A2 2 0 0016.76 4H7.24a2 2 0 00-1.79 1.11z"></path></svg> </div>--}}
    {{--                                <div class="ml-3">Mail Settings</div>--}}
    {{--                            </a>--}}
    {{--                            <a href="" class="flex items-center mt-2">--}}
    {{--                                <div class="w-8 h-8 bg-pending/10 text-pending flex items-center justify-center rounded-full"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="users" class="lucide lucide-users w-4 h-4" data-lucide="users"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 00-3-3.87"></path><path d="M16 3.13a4 4 0 010 7.75"></path></svg> </div>--}}
    {{--                                <div class="ml-3">Users &amp; Permissions</div>--}}
    {{--                            </a>--}}
    {{--                            <a href="" class="flex items-center mt-2">--}}
    {{--                                <div class="w-8 h-8 bg-primary/10 dark:bg-primary/20 text-primary/80 flex items-center justify-center rounded-full"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="credit-card" class="lucide lucide-credit-card w-4 h-4" data-lucide="credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg> </div>--}}
    {{--                                <div class="ml-3">Transactions Report</div>--}}
    {{--                            </a>--}}
    {{--                        </div>--}}
    {{--                        <div class="search-result__content__title">Users</div>--}}
    {{--                        <div class="mb-5">--}}
    {{--                            <a href="" class="flex items-center mt-2">--}}
    {{--                                <div class="w-8 h-8 image-fit">--}}
    {{--                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('backend/images/profile-12.jpg')}}">--}}
    {{--                                </div>--}}
    {{--                                <div class="ml-3">Leonardo DiCaprio</div>--}}
    {{--                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">leonardodicaprio@left4code.com</div>--}}
    {{--                            </a>--}}
    {{--                            <a href="" class="flex items-center mt-2">--}}
    {{--                                <div class="w-8 h-8 image-fit">--}}
    {{--                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('backend/images/profile-3.jpg')}}">--}}
    {{--                                </div>--}}
    {{--                                <div class="ml-3">Morgan Freeman</div>--}}
    {{--                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">morganfreeman@left4code.com</div>--}}
    {{--                            </a>--}}
    {{--                            <a href="" class="flex items-center mt-2">--}}
    {{--                                <div class="w-8 h-8 image-fit">--}}
    {{--                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('backend/images/profile-14.jpg')}}">--}}
    {{--                                </div>--}}
    {{--                                <div class="ml-3">Johnny Depp</div>--}}
    {{--                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">johnnydepp@left4code.com</div>--}}
    {{--                            </a>--}}
    {{--                            <a href="" class="flex items-center mt-2">--}}
    {{--                                <div class="w-8 h-8 image-fit">--}}
    {{--                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('backend/images/profile-12.jpg')}}">--}}
    {{--                                </div>--}}
    {{--                                <div class="ml-3">Keanu Reeves</div>--}}
    {{--                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">keanureeves@left4code.com</div>--}}
    {{--                            </a>--}}
    {{--                        </div>--}}
    {{--                        <div class="search-result__content__title">Products</div>--}}
    {{--                        <a href="" class="flex items-center mt-2">--}}
    {{--                            <div class="w-8 h-8 image-fit">--}}
    {{--                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('backend/images/preview-15.jpg')}}">--}}
    {{--                            </div>--}}
    {{--                            <div class="ml-3">Sony A7 III</div>--}}
    {{--                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Photography</div>--}}
    {{--                        </a>--}}
    {{--                        <a href="" class="flex items-center mt-2">--}}
    {{--                            <div class="w-8 h-8 image-fit">--}}
    {{--                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('backend/images/preview-12.jpg')}}">--}}
    {{--                            </div>--}}
    {{--                            <div class="ml-3">Oppo Find X2 Pro</div>--}}
    {{--                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Smartphone &amp; Tablet</div>--}}
    {{--                        </a>--}}
    {{--                        <a href="" class="flex items-center mt-2">--}}
    {{--                            <div class="w-8 h-8 image-fit">--}}
    {{--                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('backend/images/preview-12.jpg')}}">--}}
    {{--                            </div>--}}
    {{--                            <div class="ml-3">Dell XPS 13</div>--}}
    {{--                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">PC &amp; Laptop</div>--}}
    {{--                        </a>--}}
    {{--                        <a href="" class="flex items-center mt-2">--}}
    {{--                            <div class="w-8 h-8 image-fit">--}}
    {{--                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('backend/images/preview-6.jpg')}}">--}}
    {{--                            </div>--}}
    {{--                            <div class="ml-3">Sony A7 III</div>--}}
    {{--                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Photography</div>--}}
    {{--                        </a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <!-- END: Search -->--}}
    {{--            <!-- BEGIN: Notifications -->--}}
    {{--            <div class="intro-x dropdown mr-auto sm:mr-6">--}}
    {{--                <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false" data-tw-toggle="dropdown"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="bell" data-lucide="bell" class="lucide lucide-bell notification__icon dark:text-slate-500"><path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 01-3.46 0"></path></svg> </div>--}}
    {{--                <div class="notification-content pt-2 dropdown-menu">--}}
    {{--                    <div class="notification-content__box dropdown-content">--}}
    {{--                        <div class="notification-content__title">Notifications</div>--}}
    {{--                        <div class="cursor-pointer relative flex items-center ">--}}
    {{--                            <div class="w-12 h-12 flex-none image-fit mr-1">--}}
    {{--                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('backend/images/profile-12.jpg')}}">--}}
    {{--                                <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>--}}
    {{--                            </div>--}}
    {{--                            <div class="ml-2 overflow-hidden">--}}
    {{--                                <div class="flex items-center">--}}
    {{--                                    <a href="javascript:;" class="font-medium truncate mr-5">Leonardo DiCaprio</a>--}}
    {{--                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>--}}
    {{--                                </div>--}}
    {{--                                <div class="w-full truncate text-slate-500 mt-0.5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500</div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="cursor-pointer relative flex items-center mt-5">--}}
    {{--                            <div class="w-12 h-12 flex-none image-fit mr-1">--}}
    {{--                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('backend/images/profile-3.jpg')}}'">--}}
    {{--                                <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>--}}
    {{--                            </div>--}}
    {{--                            <div class="ml-2 overflow-hidden">--}}
    {{--                                <div class="flex items-center">--}}
    {{--                                    <a href="javascript:;" class="font-medium truncate mr-5">Morgan Freeman</a>--}}
    {{--                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>--}}
    {{--                                </div>--}}
    {{--                                <div class="w-full truncate text-slate-500 mt-0.5">It is a long established fact that a reader will be {{asset('backendracted by the readable content of a page')}} when looking at its layout. The point of using Lorem </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="cursor-pointer relative flex items-center mt-5">--}}
    {{--                            <div class="w-12 h-12 flex-none image-fit mr-1">--}}
    {{--                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('backend/images/profile-14.jpg')}}">--}}
    {{--                                <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>--}}
    {{--                            </div>--}}
    {{--                            <div class="ml-2 overflow-hidden">--}}
    {{--                                <div class="flex items-center">--}}
    {{--                                    <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a>--}}
    {{--                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">05:09 AM</div>--}}
    {{--                                </div>--}}
    {{--                                <div class="w-full truncate text-slate-500 mt-0.5">It is a long established fact that a reader will be {{asset('backendracted by the readable content of a page')}}' when looking at its layout. The point of using Lorem </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="cursor-pointer relative flex items-center mt-5">--}}
    {{--                            <div class="w-12 h-12 flex-none image-fit mr-1">--}}
    {{--                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('backend/images/profile-12.jpg')}}">--}}
    {{--                                <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>--}}
    {{--                            </div>--}}
    {{--                            <div class="ml-2 overflow-hidden">--}}
    {{--                                <div class="flex items-center">--}}
    {{--                                    <a href="javascript:;" class="font-medium truncate mr-5">Keanu Reeves</a>--}}
    {{--                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>--}}
    {{--                                </div>--}}
    {{--                                <div class="w-full truncate text-slate-500 mt-0.5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500</div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="cursor-pointer relative flex items-center mt-5">--}}
    {{--                            <div class="w-12 h-12 flex-none image-fit mr-1">--}}
    {{--                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('backend/images/profile-8.jpg')}}">--}}
    {{--                                <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>--}}
    {{--                            </div>--}}
    {{--                            <div class="ml-2 overflow-hidden">--}}
    {{--                                <div class="flex items-center">--}}
    {{--                                    <a href="javascript:;" class="font-medium truncate mr-5">Arnold Schwarzenegger</a>--}}
    {{--                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">05:09 AM</div>--}}
    {{--                                </div>--}}
    {{--                                <div class="w-full truncate text-slate-500 mt-0.5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500</div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <!-- END: Notifications -->--}}
    {{--            <!-- BEGIN: Account Menu -->--}}
    {{--            <div class="intro-x dropdown w-8 h-8">--}}
    {{--                <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false" data-tw-toggle="dropdown">--}}
    {{--                    <img alt="Midone - HTML Admin Template" src="{{asset('backend/images/profile-3.jpg')}}">--}}
    {{--                </div>--}}
    {{--                <div class="dropdown-menu w-56">--}}
    {{--                    <ul class="dropdown-content bg-primary text-white">--}}
    {{--                        <li class="p-2">--}}
    {{--                            <div class="font-medium">Leonardo DiCaprio</div>--}}
    {{--                            <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">DevOps Engineer</div>--}}
    {{--                        </li>--}}
    {{--                        <li>--}}
    {{--                            <hr class="dropdown-divider border-white/[0.08]">--}}
    {{--                        </li>--}}
    {{--                        <li>--}}
    {{--                            <a href="" class="dropdown-item hover:bg-white/5"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="user" data-lucide="user" class="lucide lucide-user w-4 h-4 mr-2"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Profile </a>--}}
    {{--                        </li>--}}
    {{--                        <li>--}}
    {{--                            <a href="" class="dropdown-item hover:bg-white/5"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="edit" data-lucide="edit" class="lucide lucide-edit w-4 h-4 mr-2"><path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> Add Account </a>--}}
    {{--                        </li>--}}
    {{--                        <li>--}}
    {{--                            <a href="" class="dropdown-item hover:bg-white/5"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="lock" data-lucide="lock" class="lucide lucide-lock w-4 h-4 mr-2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0110 0v4"></path></svg> Reset Password </a>--}}
    {{--                        </li>--}}
    {{--                        <li>--}}
    {{--                            <a href="" class="dropdown-item hover:bg-white/5"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="help-circle" data-lucide="help-circle" class="lucide lucide-help-circle w-4 h-4 mr-2"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg> Help </a>--}}
    {{--                        </li>--}}
    {{--                        <li>--}}
    {{--                            <hr class="dropdown-divider border-white/[0.08]">--}}
    {{--                        </li>--}}
    {{--                        <li>--}}
    {{--                            <a href="" class="dropdown-item hover:bg-white/5"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="toggle-right" data-lucide="toggle-right" class="lucide lucide-toggle-right w-4 h-4 mr-2"><rect x="1" y="5" width="22" height="14" rx="7" ry="7"></rect><circle cx="16" cy="12" r="3"></circle></svg> Logout </a>--}}
    {{--                        </li>--}}
    {{--                    </ul>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <!-- END: Account Menu -->--}}
    {{--        </div>--}}
    {{--        <!-- END: Top Bar -->--}}
    {{--        <h2 class="intro-y text-lg font-medium mt-10">--}}
    {{--            Product List--}}
    {{--        </h2>--}}
    {{--        <div class="grid grid-cols-12 gap-6 mt-5">--}}
    {{--            <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">--}}
    {{--                <a class="btn btn-primary shadow-md mr-2" href="{{route('admin.category.add')}}">Add New Product</a>--}}
    {{--                <div class="dropdown">--}}
    {{--                    <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">--}}
    {{--                        <span class="w-5 h-5 flex items-center justify-center"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="plus" class="lucide lucide-plus w-4 h-4" data-lucide="plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg> </span>--}}
    {{--                    </button>--}}
    {{--                    <div class="dropdown-menu w-40">--}}
    {{--                        <ul class="dropdown-content">--}}
    {{--                            <li>--}}
    {{--                                <a href="" class="dropdown-item"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="printer" data-lucide="printer" class="lucide lucide-printer w-4 h-4 mr-2"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 01-2-2v-5a2 2 0 012-2h16a2 2 0 012 2v5a2 2 0 01-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg> Print </a>--}}
    {{--                            </li>--}}
    {{--                            <li>--}}
    {{--                                <a href="" class="dropdown-item"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="file-text" data-lucide="file-text" class="lucide lucide-file-text w-4 h-4 mr-2"><path d="M14.5 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V7.5L14.5 2z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><line x1="10" y1="9" x2="8" y2="9"></line></svg> Export to Excel </a>--}}
    {{--                            </li>--}}
    {{--                            <li>--}}
    {{--                                <a href="" class="dropdown-item"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="file-text" data-lucide="file-text" class="lucide lucide-file-text w-4 h-4 mr-2"><path d="M14.5 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V7.5L14.5 2z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><line x1="10" y1="9" x2="8" y2="9"></line></svg> Export to PDF </a>--}}
    {{--                            </li>--}}
    {{--                        </ul>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="hidden md:block mx-auto text-slate-500">Showing 1 to 10 of 150 entries</div>--}}
    {{--                <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">--}}
    {{--                    <div class="w-56 relative text-slate-500">--}}
    {{--                        <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">--}}
    {{--                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="search" class="lucide lucide-search w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <!-- BEGIN: Data List -->--}}
    {{--            <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">--}}
    {{--                <table class="table table-report -mt-2">--}}
    {{--                    <thead>--}}
    {{--                    <tr>--}}
    {{--                        <th class="text-center whitespace-nowrap">ID</th>--}}
    {{--                        <th class="whitespace-nowrap">IMAGES</th>--}}
    {{--                        <th class="whitespace-nowrap">PRODUCT NAME</th>--}}
    {{--                        <th class="text-center whitespace-nowrap">SLUG</th>--}}
    {{--                        <th class="text-center whitespace-nowrap">ACTIONS</th>--}}
    {{--                    </tr>--}}
    {{--                    </thead>--}}
    {{--                    <tbody>--}}
    {{--                    --}}{{--list--}}
    {{--                    @include("admin.content.category.row_table",["categories"=>$categories, "level"=>0])--}}


    {{--                    </tbody>--}}
    {{--                </table>--}}
    {{--            </div>--}}
    {{--            <!-- END: Data List -->--}}
    {{--            <!-- BEGIN: Pagination -->--}}
    {{--            <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">--}}
    {{--                <nav class="w-full sm:w-auto sm:mr-auto">--}}
    {{--                    <ul class="pagination">--}}
    {{--                        <li class="page-item">--}}
    {{--                            <a class="page-link" href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="chevrons-left" class="lucide lucide-chevrons-left w-4 h-4" data-lucide="chevrons-left"><polyline points="11 17 6 12 11 7"></polyline><polyline points="18 17 13 12 18 7"></polyline></svg> </a>--}}
    {{--                        </li>--}}
    {{--                        <li class="page-item">--}}
    {{--                            <a class="page-link" href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-left" class="lucide lucide-chevron-left w-4 h-4" data-lucide="chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg> </a>--}}
    {{--                        </li>--}}
    {{--                        <li class="page-item"> <a class="page-link" href="#">...</a> </li>--}}
    {{--                        <li class="page-item"> <a class="page-link" href="#">1</a> </li>--}}
    {{--                        <li class="page-item active"> <a class="page-link" href="#">2</a> </li>--}}
    {{--                        <li class="page-item"> <a class="page-link" href="#">3</a> </li>--}}
    {{--                        <li class="page-item"> <a class="page-link" href="#">...</a> </li>--}}
    {{--                        <li class="page-item">--}}
    {{--                            <a class="page-link" href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-right" class="lucide lucide-chevron-right w-4 h-4" data-lucide="chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>--}}
    {{--                        </li>--}}
    {{--                        <li class="page-item">--}}
    {{--                            <a class="page-link" href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="chevrons-right" class="lucide lucide-chevrons-right w-4 h-4" data-lucide="chevrons-right"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg> </a>--}}
    {{--                        </li>--}}
    {{--                    </ul>--}}
    {{--                </nav>--}}
    {{--                <select class="w-20 form-select box mt-3 sm:mt-0">--}}
    {{--                    <option>10</option>--}}
    {{--                    <option>25</option>--}}
    {{--                    <option>35</option>--}}
    {{--                    <option>50</option>--}}
    {{--                </select>--}}
    {{--            </div>--}}
    {{--            <!-- END: Pagination -->--}}
    {{--        </div>--}}
    {{--        <!-- BEGIN: Delete Confirmation Modal -->--}}
    {{--        <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">--}}
    {{--            <div class="modal-dialog">--}}
    {{--                <div class="modal-content">--}}
    {{--                    <div class="modal-body p-0">--}}
    {{--                        <div class="p-5 text-center">--}}
    {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="x-circle" data-lucide="x-circle" class="lucide lucide-x-circle w-16 h-16 text-danger mx-auto mt-3"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>--}}
    {{--                            <div class="text-3xl mt-5">Are you sure?</div>--}}
    {{--                            <div class="text-slate-500 mt-2">--}}
    {{--                                Do you really want to delete these records?--}}
    {{--                                <br>--}}
    {{--                                This process cannot be undone.--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="px-5 pb-8 text-center">--}}
    {{--                            <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>--}}
    {{--                            <button type="button" class="btn btn-danger w-24">Delete</button>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <!-- END: Delete Confirmation Modal -->--}}
    {{--    </div>--}}

@endsection
