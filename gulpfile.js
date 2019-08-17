var gulp = require("gulp");
var sass = require("gulp-sass");
var wait = require("gulp-wait");
var sourcemaps = require("gulp-sourcemaps");
var autoprefixer = require("gulp-autoprefixer");
var browserSync = require("browser-sync").create();

gulp.task("default", function() {
	return gulp
		.src("scss/style.scss")
		.pipe(sourcemaps.init())
		.pipe(wait(500))
		.pipe(
			sass({
				errLogToConsole: true
			})
		) //zwracanie błędów w konsoli
		.pipe(
			sass({
				outputStyle: "nested"
			})
		)
		.pipe(
			autoprefixer({
				overrideBrowserslist: [
					"last 1 version",
					"> 1%",
					"IE 10"
				],
				cascade: false,
				grid: true
			})
		)
		.pipe(sourcemaps.write("/maps"))
    .pipe(gulp.dest("/")) //ścieżka do pliku wynikowego (zapisywanego)
    .pipe(wait(500))
		.pipe(browserSync.stream());
});
gulp.task("watch", function() {
	browserSync.init({
		proxy: "http://localhost/playground/"
	});

	gulp
		.watch(
			"scss/**/*.scss",
			gulp.series("default")
		)
	gulp.watch('**/*.php').on("change", browserSync.reload);
	gulp.watch('assets/js/*.js').on("change", browserSync.reload);
	gulp.watch('scss/**/*.scss').on("change", browserSync.reload);
	
	
});