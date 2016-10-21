const elixir = require('laravel-elixir')
require('laravel-elixir-imagemin')

elixir(mix => {
  mix.sass('*.sass')
  .scripts('*.js')
  .imagemin()
  .browserSync({
    proxy: 'localhost:8000'
  })
})
