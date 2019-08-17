var gulp = require("gulp");
var sass = require("gulp-sass");
var wait = require("gulp-wait");
var sourcemaps = require("gulp-sourcemaps");
var autoprefixer = require("gulp-autoprefixer");
var browserSync = require("browser-sync").create();

gulp.task("default", function() {
	return gulp
		.src("wp-content/themes/projectic/scss/style.scss")
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
				browsers: ["cover 99.5%"],
				cascade: false,
				grid: true
			})
		)
		.pipe(sourcemaps.write("/maps"))
    .pipe(gulp.dest("wp-content/themes/projectic/")) //ścieżka do pliku wynikowego (zapisywanego)
    .pipe(wait(500))
		.pipe(browserSync.stream());
});
gulp.task("watch", function() {
	browserSync.init({
		proxy: "http://localhost/playground/"
	});

	gulp
		.watch(
			"wp-content/themes/projectic/scss/**/*.{scss, php, js}",
			gulp.series("default")
		)
		.on("change", browserSync.reload);
});