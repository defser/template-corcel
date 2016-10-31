const elixir = require('laravel-elixir')
require('laravel-elixir-imagemin')

elixir(mix => {
  mix.sass('*.sass')
  .styles('*.css')
  .scripts('*.js')
  .imagemin()
  .copy('resources/assets/fonts', 'public/fonts')
  .copy('resources/assets/bootstrap/fonts', 'public/fonts/bootstrap')
  .copy('resources/assets/fancybox', 'public/vendors/fancybox')
  .browserSync({
    proxy: 'localhost:8000'
  })
})
