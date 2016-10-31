const elixir = require('laravel-elixir')
require('laravel-elixir-imagemin')

elixir(mix => {
  mix.styles('*.css')
  .sass('*.sass')
  .scripts('*.js')
  .imagemin()
  .copy('resources/assets/fonts', 'public/fonts')
  .copy('resources/assets/fancybox', 'public/vendors/fancybox')
  .browserSync({
    proxy: 'localhost:8000'
  })
})
