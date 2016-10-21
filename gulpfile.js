const elixir = require('laravel-elixir')
require('laravel-elixir-imagemin')

elixir(mix => {
  mix.sass('*.sass')
  .styles('*.css')
  .scripts('*.js')
  .imagemin()
  .browserSync({
    proxy: 'localhost:8000'
  })
})
