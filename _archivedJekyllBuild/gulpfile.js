/*
 *
 * _ C O N F I G
 */
var gulp = require('gulp');

var plugins = require('gulp-load-plugins')();
// var browserSync = require('browser-sync');
// var reload = browserSync.reload;
// var exec = require('child_process').exec;

var runSequence = require('run-sequence');    // Temporary solution until gulp 4
                                              // https://github.com/gulpjs/gulp/issues/355
var pkg = require('./package.json');
var dirs = pkg['site-configs'].directories;


// _____ t a s k s

// _____ c l e a n

gulp.task('clean', function (cb) {
  // https://github.com/gulpjs/gulp/blob/master/docs/recipes/delete-files-folder.md
  require('del')([dirs.dist], cb);
});

gulp.task('clean:wp-theme', function (cb) {
  // https://github.com/gulpjs/gulp/blob/master/docs/recipes/delete-files-folder.md
  require('del')([dirs.dist + '/wp-theme/'], cb);
});


// _____ w a t c h

gulp.task('watch-src', function () {
  gulp.watch(dirs.src + '/**/*.*', ['copy']);
});


// _____ c o p y

// gulp.task('copy:root', function () {
//   return gulp.src(dirs.src + '/*.{php,txt,ico,xml}')
//              .pipe(plugins.debug())
//              .pipe(gulp.dest(dirs.dist));
// });
// 
// gulp.task('copy:vols', function () {
//   return gulp.src(dirs.src + '/{inc,vol1,vol2}/*.*')
//              .pipe(gulp.dest(dirs.dist));
// });
// 
// gulp.task('copy:css', function () {
//   return gulp.src(dirs.src + '/css/*.css')
//              .pipe(gulp.dest(dirs.dist + '/css'));
// });
// 
// gulp.task('copy:fonts', function () {
//   return gulp.src(dirs.src + '/css/f/**/*.*')
//              .pipe(gulp.dest(dirs.dist + '/css/f'));
// });
// 
// gulp.task('copy:css-img', function () {
//   return gulp.src(dirs.src + '/css/i/**/*.{gif,jpg,png,svg}')
//              .pipe(gulp.dest(dirs.dist + '/css/i'));
// });
// 
// gulp.task('copy:js', function () {
//   return gulp.src(dirs.src + '/js/*.js')
//              .pipe(gulp.dest(dirs.dist + '/js'));
// });
// 
// gulp.task('copy:js-vendor', function () {
//   return gulp.src(dirs.src + '/js/vendor/*.js')
//              .pipe(gulp.dest(dirs.dist + '/js/vendor'));
// });
// 
// gulp.task('copy:libs', function () {
//   return gulp.src(dirs.src + '/lib/**/*.php')
//              .pipe(gulp.dest(dirs.dist + '/lib'));
// });
// 
// gulp.task('copy:files', function () {
//   return gulp.src(dirs.src + '/files/**/*.*')
//              .pipe(gulp.dest(dirs.dist + '/files'));
// });
// 
// gulp.task('copy:img', function () {
//   return gulp.src(dirs.src + '/img/**/*.{gif,jpg,png,svg}')
//              .pipe(gulp.dest(dirs.dist + '/img'));
// });
// 
// gulp.task('copy:wp-theme', function () {
//   return gulp.src(dirs.src + '/wp-theme/**/*.*')
//              .pipe(gulp.dest(dirs.dist + '/blog/themes/total-investment'));
// });

gulp.task('copy', function () {
  return gulp.src(dirs.src + '/**/*.*')
             .pipe(gulp.dest(dirs.dist));
});

gulp.task('move-wp-theme', function () {
  return gulp.src(dirs.dist + '/wp-theme/**/*.*')
             .pipe(gulp.dest(dirs.dist + '/blog/themes/total-investment'));
});


// _____ m a i n  t a s k s

// gulp.task('copy', [
//   'copy:all',
//   'copy:wp-theme',
//   // 'copy:root',
//   // 'copy:vols',
//   // 'copy:css',
//   // 'copy:fonts',
//   // 'copy:css-img',
//   // 'copy:js',
//   // 'copy:js-vendor',
//   // 'copy:libs',
//   // 'copy:files',
//   // 'copy:img',
//   // 'copy:wp-theme',
// ]);

gulp.task('watch', function (done) {
  runSequence(
    // 'clean',
    'copy',
    // 'move-wp-theme',
    // 'clean:wp-theme',
    'watch-src',
  done);
});

gulp.task('build', function (done) {
  runSequence(
    // 'clean',
    // 'copy',
    'move-wp-theme',
    'clean:wp-theme',
  done);
});
