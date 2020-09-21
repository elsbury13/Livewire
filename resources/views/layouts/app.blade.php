<html>

<head>
<title>Livewire</title>

@livewireStyles

<style>
svg {
  height: 10px;
  width: 10px;
}

nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

nav li {
  float: left;
}

nav li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

nav li a:hover {
  background-color: #111;
}
</style>

</head>

<body>
  <nav>
    <ul>
      <li><a href="{{ url('/data-bindings') }}">Data Bindings & Actions</a></li>
      <li><a href="{{ url('/lifecycle-hooks') }}">Life cycle Hooks</a></li>
      <li><a href="{{ url('/nesting-events') }}">Nesting & Events</a></li>
      <li><a href="{{ url('/contact') }}">Contact</a></li>
      <li><a href="{{ url('/people') }}">People</a></li>
      <li><a href="{{ url('/image-upload') }}">Image Upload</a></li>
      <li><a href="{{ url('/file-download') }}">File Download</a></li>
    </ul>
  </nav>

    <h1>Livewire Examples</h1>
    <hr style="border-top: 1px dashed red;">
      @livewire('search')
    <hr style="border-top: 1px dashed red;">

    @yield('content')

    @livewireScripts

</body>

</html>
