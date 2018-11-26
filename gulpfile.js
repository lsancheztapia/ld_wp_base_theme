
var gulp = require('gulp');
var sass = require('gulp-sass');
// var chokidar = require('chokidar');

var timeWait = 200

gulp.task('styles', function() {
  console.log('compiling')
  setTimeout(function() {
    gulp.src('sass/**/*.scss')
      .pipe(sass().on('error', sass.logError))
      .pipe(gulp.dest('./css/'));
    console.log('end')
  }, timeWait );
  
});

//Watch task
gulp.task('default',function() {
    gulp.watch('sass/**/*.scss',['styles']);
});

/*
gulp.task('watch', function () {
//    var watcher = chokidar.watch('./sass/*.scss');
    gulp.start('styles');


//    watcher.on('ready', function () {

    watcher.on('all', function (e, path) {
console.log('==============>', e)


//       if (e == 'change' && !re_safe_save.test(path))
       if (e == 'change' ) {
           gulp.start('styles');
         }

     });

//   })

});
*/
