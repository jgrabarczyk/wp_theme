
const babel = require('gulp-babel');
const concat = require('gulp-concat'); 
const minify = require("gulp-babel-minify");

const gulp = require("gulp");
const sass = require("gulp-sass");
const sourcemaps = require("gulp-sourcemaps");
const autoprefixer = require("gulp-autoprefixer");
const browserSync = require("browser-sync").create();
const AUTOPREFIXER_BROWSERS = [
  "last 2 version",
  "> 1%",
  "ie >= 9",
  "ie_mob >= 10",
  "ff >= 30",
  "chrome >= 34",
  "safari >= 7",
  "opera >= 23",
  "ios >= 7",
  "android >= 4",
  "bb >= 10"
];
gulp.task("babel", () =>
  gulp
    .src("assets/js/theme-assets/**/*.js")
    .pipe(
      babel({
        presets: ["@babel/env"],
        plugins: ["@babel/plugin-proposal-class-properties"]
      })
    )
    .pipe(concat("assets/js/all.js"))
    .pipe(sourcemaps.write("."))
    .pipe(
      minify({
        mangle: {
          keepClassName: true
        }
      })
    )
    .pipe(gulp.dest("./"))
);
// 

gulp.task("default", function() {
  return gulp
    .src("scss/style.scss")
    .pipe(sourcemaps.init())
    .pipe(
      sass({
        errLogToConsole: true
      })
    )
    .pipe(
      sass({
        outputStyle: "nested"
      })
    )
    .pipe(
      autoprefixer({
        overrideBrowserslist: AUTOPREFIXER_BROWSERS,
        cascade: false,
        grid: true
      })
    )
    .pipe(sourcemaps.write("/maps"))
    .pipe(gulp.dest("./"))
    .pipe(browserSync.stream());
});
gulp.task("watch", function() {
  browserSync.init({
    open: false,
    proxy: "http://mixu-specialforces.pl/",
    reloadDelay: 500
  });
  gulp
    .watch("scss/**/*.scss", gulp.series("default"))
    .on("change", browserSync.reload);
  gulp.watch("**/*.php").on("change", browserSync.reload);
  gulp.watch("assets/js/**/*.js").on("change", browserSync.reload);
  gulp.watch("assets/js/theme-assets/**/*.js", gulp.series('babel'));
});
