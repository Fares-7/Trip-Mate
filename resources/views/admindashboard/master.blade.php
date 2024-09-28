<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default">
@include ('admindashboard.head')

<body>
    @include('admindashboard.sidebar')

    
    <div class="layout-page">
      <!-- Navbar -->
      @include('admindashboard.header')
      <!-- / Navbar -->
        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <d class="row">
                  @yield('content')
            </div>
        </div>
        <!-- / Content -->
        @include('admindashboard.footer')
</body>

</html>
