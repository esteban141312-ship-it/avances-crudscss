// const { src, dest, watch, series } = require('gulp');
// const gulpSass = require('gulp-sass')(require('sass'));

// Tarea para compilar Sass a CSS
// function compilarSass() {
    // return src('src/scss/**/*.scss') // Ruta de tus archivos SCSS
        // .pipe(gulpSass().on('error', gulpSass.logError))
        // .pipe(dest('dist/css'));     // Carpeta de destino del CSS
//}

// Tarea para vigilar cambios automáticamente
// function observarCambios() {
//     watch('src/scss/**/*.scss', compilarSass);
// }

// exports.sass = compilarSass;
// exports.default = series(compilarSass, observarCambios);

import {src,dest,watch} from "gulp";

import  dartSass from 'sass';
import gulpSass from 'gulp-sass';
const sass = gulpSass(dartSass);

export function css( callback ){
    src("src/scss/style.scss")
    .pipe( sass().on("error", sass.logError) )
    .pipe( dest("dist/css"));
    callback();
}

export function dev(){
    watch("src/scss/**/*.scss", css);
}
