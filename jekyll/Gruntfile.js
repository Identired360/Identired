module.exports = function (grunt) {
  grunt.initConfig({
    less: {
      prod: {
        options: {
          compress: true
        },
        files: {
          'css/main.min.css': 'css/main.less',
          'landing/main.min.css': 'landing/main.less'
        }
      }
    },
    uglify: {
      options: {
        mangle: false
      },
      all: {
        files: {
          'js/all.min.js': [
            'js/vendor/jquery.js',
            'js/vendor/foundation.js',
            'js/modernizr.custom.js',
            'js/wow.min.js',
            'js/jquery.validate.min.js',
            'js/js.cookie.js',
            'js/typed.js',
            'js/app.js',
            'js/scripts-home.js',
            'js/snap.svg-min.js',
            'js/proyectos.js'
          ],
          'js/home.min.js': [
            'js/slick.min.js',
            'js/scripts-home.js',
            'js/canvas.js'
          ],
          'js/landing.min.js': [
            'js/vendor/jquery.js',
            'js/jquery.validate.min.js',
          ]
        }
      },
    },
    watch: {
      less: {
        files: ['css/**/*.less'],
        tasks: ['less:prod']
      }
    },
  });

  // Plugin loading
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  // Task definition
  grunt.registerTask('default', ['watch']);
  grunt.registerTask('build', ['less:prod', 'uglify:all']);

};
