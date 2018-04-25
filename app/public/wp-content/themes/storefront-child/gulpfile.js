const gulp = require('gulp');
const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');
const sassGlob = require('gulp-sass-glob');
const autoprefixer = require('gulp-autoprefixer');
const browserSync = require('browser-sync').create();
const reload = browserSync.reload;

gulp.task('sass', function () {
 return gulp.src('./sass/**/*.scss')
  .pipe(sourcemaps.init())
  .pipe(sass().on('error', sass.logError))
  .pipe(sourcemaps.write('./maps'))
  .pipe(gulp.dest('./css'));
});


const SASS_TARGET = './assets/scss/style.scss';
const SASS_TARGET_LOGIN = './includes/login/scss/login-styles.scss';

// browser-sync task for starting the server.
gulp.task('browser-sync', function() {
    //watch files
    var files = [
        './assets/scss/**/*/*.scss',
        './assets/js/scripts.js',
        './**/*/*.php',
        './*.php'
    ];
 
    //initialize browsersync
    browserSync.init(files, {
        //browsersync with a php server
        proxy: "http://rough-hands.local",
        notify: false
    });
});

gulp.task('styles', function () {
    return gulp.src(SASS_TARGET)
        .pipe(sourcemaps.init())
        .pipe(sassGlob())
        .pipe(sass({
            // outputStyle: 'compressed'
        }).on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 4 versions'],
            cascade: false
        }))
        .on('error', (error) => {
            // If you want details of the error in the console
            console.log(error.toString())
            this.emit('end')
        })
        .pipe(sourcemaps.write('../maps'))
        .pipe(gulp.dest('./'))
        .pipe(browserSync.stream())
});

gulp.task('login-styles', function () {
    return gulp.src(SASS_TARGET_LOGIN)
        .pipe(sourcemaps.init())
        .pipe(sassGlob())
        .pipe(sass({
            // outputStyle: 'compressed'
        }).on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 4 versions'],
            cascade: false
        }))
        .on('error', (error) => {
            // If you want details of the error in the console
            console.log(error.toString())
            this.emit('end')
        })
        .pipe(sourcemaps.write('./maps'))
        .pipe(gulp.dest('./includes/login'))
        .pipe(browserSync.stream())
});

gulp.task('build', function () {
    return gulp.src(SASS_TARGET)
        .pipe(sassGlob())
        .pipe(sass({
            outputStyle: 'compressed'
        }).on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 4 versions'],
            cascade: false
        }))
        .on('error', (error) => {
            // If you want details of the error in the console
            console.log(error.toString())
            this.emit('end')
        })
        .pipe(gulp.dest('./'))
});

//Watch task with browsersync and livereload
gulp.task('default', ['browser-sync'], function() {
    gulp.watch('./assets/scss/**/*.scss', ['styles']);
});

//Watch task that only does one thing - compiles scss
gulp.task('watch', function() {
    gulp.watch('./assets/scss/**/*.scss', ['styles']);
});

//Watch task that only compiles login styles
gulp.task('login-watch', function() {
    gulp.watch('./includes/login/scss/**/*.scss', ['login-styles']);
});