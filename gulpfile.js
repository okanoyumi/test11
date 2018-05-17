const gulp = require('gulp');
const browserSync = require('browser-sync').create();
const sass = require('gulp-sass');
const browserify = require('browserify');
const source = require('vinyl-source-stream');

gulp.task('bs-reload', function() {
  browserSync.reload();
});

// Static Server + watching scss/html files
gulp.task('serve', function() {

  browserSync.init({
  proxy: "vccw.test"
    // server: "vccw.test"
  });

  gulp.watch("sources/*.scss", ['sass']);
  gulp.watch("**/*.php", ['bs-reload']);
  gulp.watch("sources/*.js", ['browserify']);
});

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
  return gulp.src("sources/*.scss")
    .pipe(sass())
    .pipe(gulp.dest(""))
    .pipe(browserSync.stream());
});
////jQueryとgulpファイル
  gulp.task('browserify', function () {
  return browserify('sources/script.js')
  .bundle()
  .pipe(source('main.js'))
  .pipe(gulp.dest('./assets/'))
  .pipe(browserSync.stream());
});
// 初回の読み込み時に実行してほしいものはこちらに
gulp.task('default', ['serve', 'browserify']);
