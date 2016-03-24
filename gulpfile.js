// npm install --save-dev gulp gulp-uglify gulp-concat gulp-cssmin gulp-watch gulp-strip-css-comments gulp-htmlclean gulp-uglifyjs gulp-minify-css gulp-rename gulp-ftp

// hierarquia da parada tem q ser: 
// src -> arquivos em desenvolvimento
// dist -> tudo pronto para distribuir

// Definimos o diretório dos arquivos para evitar repetição futuramente
 
// Todos os arquivos CSS que serão compactados
// Explicação: /*.css busca todos os arquivos css de uma pasta, /**/*.css busca todos os arquivos css de uma pasta e sub pasta.
var css = [
 'src/css/**/*.css'
];
 
// Todos os arquivos JS que serão compactados
// Explicação: /*.js busca todos os arquivos css de uma pasta, /**/*.js busca todos os arquivos js de uma pasta e sub pasta.
var js  = [
    'src/js/*.js'         // Todos os arquivos do diretório
];

var php  = [
    'src/*.php'         // Todos os arquivos do diretório
];
 
// Núcleo do Gulp
var gulp = require('gulp');
// Transforma o javascript em formato ilegível para humanos
var uglify = require("gulp-uglify");
var uglifyjs = require('gulp-uglifyjs');
// Agrupa todos os arquivos em um
var concat = require("gulp-concat");
// Verifica alterações em tempo real, caso haja, compacta novamente todo o projeto 
var watch = require('gulp-watch');
// Minifica o CSS
var cssmin = require("gulp-cssmin");
// lipar html
var htmlclean = require('gulp-htmlclean');
// Remove comentários CSS
var stripCssComments = require('gulp-strip-css-comments');

var minifyCSS = require('gulp-minify-css');

var gutil = require('gulp-util');

var rename = require('gulp-rename');

var ftp = require('gulp-ftp');
 
// Processo que agrupará todos os arquivos CSS, removerá comentários CSS e minificará.
gulp.task('cssconc', function(){
    gulp.src(css)
    .pipe(concat('styleconcat000.min.css'))
    .pipe(stripCssComments({all: true}))
    .pipe(cssmin())
    .pipe(gulp.dest('dist/css/'));
});

gulp.task('cssmin', function () {
  gulp.src('src/css/*.css')
    .pipe(minifyCSS())
    .pipe(rename({
      extname: '.min.css'
    }))
    .pipe(gulp.dest('dist/css/'));
});
 
// Tarefa de minificação do Javascript
gulp.task('js', function () {
    gulp.src(js)                        // Arquivos que serão carregados, veja variável 'js' no início
    .pipe(concat('script.min.js'))      // Arquivo único de saída
    .pipe(uglifyjs().on('error', gutil.log))
    .pipe(gulp.dest('dist/js/'));          // pasta de destino do arquivo(s)
});

gulp.task('compress', function() {
	gulp.src('src/js/*.js')
    .pipe(uglify()) 
    .pipe(rename({
      extname: '.min.js'
    }))
    .pipe(gulp.dest('dist/js/'));
});

// Tarefa de minificação do HTML
gulp.task('html', function() {
  gulp.src('src/*.php')
    .pipe(htmlclean())
    .pipe(gulp.dest('dist/'));
});

// tempppppp para testar ftp gulp
var phpftp  = [
    'src/teste/*'         // Todos os arquivos do diretório
];

// gulp.task('ftp', function () {
//     gulp.src('src/teste/*')
//     .pipe(ftp({
//         host: 'ftp.nuvemjur.com',
//         user: 'nuvemjur',
//         pass: 'U35esjY9Swxg',
//         remotePath: 'www/'
//     }))

//     .pipe(gutil.noop());
// });


 
// Tarefa padrão quando executado o comando GULP
gulp.task('default',['html','cssmin','compress']);
 
// Tarefa de monitoração caso algum arquivo seja modificado, deve ser executado e deixado aberto, comando "gulp watch".
gulp.task('watch', function() {
 	gulp.watch(css, ['cssmin']);
    gulp.watch(js, ['compress']);
    gulp.watch(php, ['html']);
    gulp.watch(phpftp, ['ftp']);
});