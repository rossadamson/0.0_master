module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: {
            dist: {
                options: {
                    style: 'compressed'
                },
                files: {
                    'inc/dist/css/style.min.css': ['inc/src/css/*.scss']
                }
            }
        },
        uglify: {
            options: {
                banner: '/*\n <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> \n*/\n'
            },
            build: {
                files: {
                    'inc/dist/js/main.min.js': 'inc/src/js/main.js'
                }
            }
        },
        watch: {
            styles: {
                files: ['inc/src/css/**/*.scss', 'inc/src/js/*.js'],
                tasks: [
                    'sass',
        'uglify'
                ]
            },
        }
    });

    // Dependencies
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('js', ['jshint']);
    grunt.registerTask('test', ['cssmin']);
    grunt.registerTask('default',
                       [
        'sass',
        'uglify'
    ]
                      );
};
