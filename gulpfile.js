var gulp = require("gulp");
var browserSync = require("browser-sync");
var sass = require("gulp-sass");
var connect = require("gulp-connect-php");
var php2html = require("gulp-php2html");

gulp.task("php2html", function () {
  return gulp
    .src("src/index.php")
    .pipe(php2html())
    .pipe(gulp.dest("./"))
    .pipe(browserSync.stream());
});

// Compile sass into CSS & auto-inject into browsers
gulp.task("sass", function () {
  return gulp
    .src("src/scss/*.scss")
    .pipe(sass())
    .pipe(gulp.dest("css"))
    .pipe(browserSync.stream());
});

// move js
gulp.task("js", function () {
  return gulp
    .src("src/js/*.js")
    .pipe(gulp.dest("js"))
    .pipe(browserSync.stream());
});
// move js
gulp.task("css", function () {
  return gulp
    .src("src/css/*.css")
    .pipe(gulp.dest("css"))
    .pipe(browserSync.stream());
});
// move images
gulp.task("images", function () {
  return gulp
    .src("src/imagens/**/*.+(png|jpg|bmp|svg)")
    .pipe(gulp.dest("imagens"))
    .pipe(browserSync.stream());
});
// Static Server + watching scss/html files
gulp.task("serve", ["sass", "js", "images", "css"], function () {
  connect.server({}, function () {
    browserSync({
      proxy: "127.0.0.1:8000",
    });
  });

  gulp.watch("src/scss/**/*.scss", ["sass"]);
  gulp.watch("**/*.php").on("change", browserSync.reload);
  gulp.watch("**/*.html").on("change", browserSync.reload);
  gulp.watch("src/**/*.js").on("change", browserSync.reload);
});

gulp.task("default", ["php2html", "serve"]);
