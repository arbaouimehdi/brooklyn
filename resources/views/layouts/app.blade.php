<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    
    {{-- # Wrapper --}}
    <div class="site">
      <div class="site-inner">
        
        {{-- # Sidebar --}}
        @if (App\display_sidebar())
          @include('partials.sidebar')
        @endif

        {{-- # Header --}}
        @php(do_action('get_header'))
        @include('partials.header')
        
        {{-- # Main Content --}}
        <main class="site-main">
          @yield('content')
        </main>

        {{-- # Footer --}}
        @php(do_action('get_footer'))
        @include('partials.footer')
        
      </div>
    </div>
    
    {{-- # Scripts --}}
    @php(wp_footer())

  </body>
</html>
