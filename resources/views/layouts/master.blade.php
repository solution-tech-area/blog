<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    
    @include('layouts.style')
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('layouts.navbar')
        
        @include('layouts.sidebar')
        
        @yield('content')
        
        @include('layouts.footer')
        
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        
    </div>
    
    @include('layouts.script')
</body>
</html>
