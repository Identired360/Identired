module.exports = function(grunt) {
    grunt.initConfig({
        less: {
            dev: {
                options: {
                    compress: false
                },
                files: {
                    "css/main.css": "../css/main.less"
                }
            },
            prod: {
                options: {
                    compress: true
                },
                files: {
                    "css/main.min.css": "../css/main.less"
                }
            }
        },
        uglify: {
            options: {
                mangle: false
            },
            all: {
                files: {
                    'js/all.min.js': ['../js/vendor/jquery.js', 'js/vendor/foundation.js', 'js/modernizr.custom.js', 'js/wow.min.js', 'js/jquery.validate.min.js', 'js/js.cookie.js', 'js/app.js']
                }
            }
        },
        copy: {
            main: {
                files: [{
                    expand: true,
                    flatten: true,
                    src: ['web/tshop/assets/fonts/*', 'web/tshop/assets/bootstrap/fonts/*'],
                    dest: 'web/fonts/',
                    filter: 'isFile'
                }]
            }
        },
        watch: {
            typescript: {
                files: ['assets/ts/*.ts'],
                tasks: ['typescript', 'uglify:all'],
                options: {
                    livereload: true
                }
            },
            js: {
                files: ['assets/js/**/*.js', 'assets/js/all.json'],
                tasks: ['concat_sourcemap', 'uglify:lib'],
                options: {
                    livereload: true
                }
            },
            less: {
                files: ['assets/less/**/*.less'],
                tasks: ['less'],
                options: {
                    livereload: true
                }
            },
            fonts: {
                files: [
                    'vendor/bower/bootstrap/fonts/*'
                ],
                tasks: ['copy'],
                options: {
                    livereload: true
                }
            }
        }
    });

    // Plugin loading
    grunt.loadNpmTasks('grunt-typescript');
    grunt.loadNpmTasks('grunt-concat-sourcemap');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-cssjoin');

    // Task definition
    grunt.registerTask('build', ['less', 'uglify']);

    //grunt.registerTask('build', ['less', 'typescript', 'copy', 'concat_sourcemap', 'uglify']);
    //grunt.registerTask('default', ['watch']);
    //grunt.registerTask('build', ['concat_sourcemap', 'uglify', 'cssmin', 'copy']);
    //grunt.registerTask('build', ['concat_sourcemap', 'uglify', 'cssmin', 'copy']);
};
