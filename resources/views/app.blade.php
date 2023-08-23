<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" lang="en"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/js/app.js')
    @inertiaHead
  </head>
  <body class="p-6">
    @inertia
    <div id="my-app">
    </div>
  </body>
</html>