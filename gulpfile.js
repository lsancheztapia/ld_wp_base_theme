var gulp = require('gulp');
var sass = require('gulp-sass');
var chokidar = require('chokidar');

gulp.task('styles', function() {
            gulp.src('sass/**/*.scss')
                .pipe(sass().on('error', sass.logError))
                .pipe(gulp.dest('./css/'));
});

//Watch task
gulp.task('default',function() {
    gulp.watch('sass/**/*.scss',['styles']);
    });

gulp.task('watch', function () {
    var watcher = chokidar.watch('./sass/**/*.scss');

    watcher.on('ready', function () {

    watcher.on('all', function (e, path) {

//       if (e == 'change' && !re_safe_save.test(path))
       if (e == 'change' )
           gulp.start('styles');

       if (e == 'unlink' && re_safe_save.test(path))
          gulp.start('styles');
     });
   })
});
