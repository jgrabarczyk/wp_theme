var gulp = require("gulp");
var sass = require("gulp-sass");
var sourcemaps = require("gulp-sourcemaps");
var autoprefixer = require("gulp-autoprefixer");
var browserSync = require("browser-sync").create();
const AUTOPREFIXER_BROWSERS = [
	'last 2 version',
	'> 1%',
	'ie >= 9',
	'ie_mob >= 10',
	'ff >= 30',
	'chrome >= 34',
	'safari >= 7',
	'opera >= 23',
	'ios >= 7',
	'android >= 4',
	'bb >= 10'
 ];
gulp.task("default", function() {
	return gulp
		.src("scss/style.scss")
		.pipe(sourcemaps.init())
		.pipe(
			sass({
				errLogToConsole: true
			})) 
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
    .pipe(gulp.dest("/")) 
		.pipe(browserSync.stream())		
		
});
gulp.task("watch", function() {
	browserSync.init({
		open: false,
		proxy: "http://localhost/playground/",
		reloadDelay: 500,

	});
	gulp.watch("scss/**/*.scss", gulp.series("default")).on("change", browserSync.reload);
	gulp.watch('**/*.php').on("change", browserSync.reload);
	gulp.watch('assets/js/**/*.js').on("change", browserSync.reload);
});