
<body>
    <div id="app">
       @include('inc.header')
       @include('inc.navbar')
       <div class="">
         @if(Request::is('/'))
         @include('inc.showcase')
         @endif
       </div>
         <main class="py-4">
               @yield('content')

             <div class="col-md-10 col-lg-10">
               @include('inc.sidebar')
             </div>
         </main>
    </div>
    <footer id="footer" class="text-center">
     <p>Copyright 2020 &copy; MutualDonationZone</p>
    </footer>
</body>
</html>
